<?php  namespace LaravelAcl\Authentication\Tests\Unit;

use Illuminate\Support\Facades\Event;
use LaravelAcl\Authentication\Exceptions\AuthenticationErrorException;
use LaravelAcl\Authentication\Tests\Unit\Traits\Helper;
use LaravelAcl\Authentication\Tests\Unit\Traits\UserFactory;
use Mockery as m;
use Config;
use App;

/**
 * Test AuthControllerTest
 *
 * @author jacopo beschi jacopo@jacopobeschi.com
 */
class AuthControllerTest extends DbTestCase {
    use Helper, UserFactory;

    protected $current_email;

    public function setUp()
    {
        parent::setUp();
        $this->initializeUserHasher();
        $this->current_user = $this->make('LaravelAcl\Authentication\Models\User', $this->getUserStub())->first();
        $this->current_email = $this->current_user->email;
    }

    public function tearDown()
    {
        m::close();
    }

    /**
     * @test
     **/
    public function it_login_client_with_success()
    {
        $email = "mail@mail.com";
        $password = "pass";
        $remember = "1";
        $this->mockAuthenticatorSuccess($email, $password, $remember);

        $this->route('POST', 'user.login', [
                "email"    => $email,
                "password" => $password,
                "remember" => $remember
        ]);
        $this->assertRedirectedTo(Config::get('acl_base.config.user_login_redirect_url'));
    }

    /**
     * @test
     **/
    public function it_login_admin_with_success()
    {
        $email = "mail@mail.com";
        $password = "pass";
        $remember = "1";
        $this->mockAuthenticatorSuccess($email, $password, $remember);

        $this->route('POST', 'user.login.process', [
                "email"    => $email,
                "password" => $password,
                "remember" => $remember
        ]);

        $this->assertRedirectedTo('/admin/users/dashboard');
    }

    /**
     * @param $email
     * @param $password
     * @param $remember
     */
    private function mockAuthenticatorSuccess($email, $password, $remember)
    {
        $mock_authenticator_success = m::mock('StdClass')
                                       ->shouldReceive('authenticate')
                                       ->with([
                                                      "email"    => $email,
                                                      "password" => $password
                                              ], $remember)->getMock();
        App::instance('authenticator', $mock_authenticator_success);
    }

    /**
     * @test
     **/
    public function it_login_client_with_error()
    {
        $email = "mail@mail.com";
        $password = "pass";
        $remember = "1";

        $this->mockAuthenticationFails($email, $password, $remember);

        $this->route('POST', "user.login", [
                "email"    => $email,
                "password" => $password,
                "remember" => $remember
        ]);

        $this->assertRedirectedToRoute('user.login');
        $this->assertSessionHasErrors();
    }

    /**
     * @test
     **/
    public function it_login_admin_with_error()
    {
        $email = "mail@mail.com";
        $password = "pass";
        $remember = "1";

        $this->mockAuthenticationFails($email, $password, $remember);

        $this->route('POST', 'user.login.process', [
                "email"    => $email,
                "password" => $password,
                "remember" => $remember
        ]);

        $this->assertRedirectedToRoute('user.admin.login');
        $this->assertSessionHasErrors();
    }

    /**
     * @param $email
     * @param $password
     * @param $remember
     */
    private function mockAuthenticationFails($email, $password, $remember)
    {
        $mock_authenticator_fail = m::mock('StdClass')->shouldReceive('authenticate')->with([
                                                                                                    "email"    => $email,
                                                                                                    "password" => $password
                                                                                            ], $remember)->once()
                                    ->andThrow(new AuthenticationErrorException())->shouldReceive('getErrors')->once()->andReturn([])->getMock();
        App::instance('authenticator', $mock_authenticator_fail);
    }

    /**
     * @test
     * @jtodoIMP TODO fix this when try to send mail
     **/
    public function it_process_recovery_data_and_redirect_with_success()
    {
        StateKeeper::set('expected_to', $this->current_email);
        StateKeeper::set('expected_subject', 'Password recovery request');
        StateKeeper::set('expected_body', 'We received a request to change your password, if you authorize it');

        Event::listen('mailer.sending', 'LaravelAcl\Authentication\Tests\Unit\AuthControllerTest@checkForSingleMailData');

        $this->route('POST', 'user.reminder', ["email" => $this->current_email]);
        $this->assertRedirectedTo('/user/reminder-success');
    }

    /**
     * @test
     **/
    public function it_process_recovery_and_show_errors()
    {
        $mock_reminder_service = m::mock('LaravelAcl\Authentication\Services\ReminderService')
                                  ->shouldReceive('send')
                                  ->once()
                                  ->andThrow(new AuthenticationErrorException)
                                  ->shouldReceive('getErrors')
                                  ->getMock();
        $this->app->instance('LaravelAcl\Authentication\Services\ReminderService', $mock_reminder_service);

        $this->action('POST', 'LaravelAcl\Authentication\Controllers\AuthController@postReminder');

        $this->assertRedirectedToAction('LaravelAcl\Authentication\Controllers\AuthController@getReminder');
        $this->assertSessionHasErrors();
    }

    /**
     * @test
     **/
    public function it_change_password_with_success()
    {
        $mock_reminder_service = m::mock('LaravelAcl\Authentication\Services\ReminderService')
                                  ->shouldReceive('reset')
                                  ->once()
                                  ->getMock();

        $this->app->instance('LaravelAcl\Authentication\Services\ReminderService', $mock_reminder_service);

        $this->action('POST', 'LaravelAcl\Authentication\Controllers\AuthController@postChangePassword', ["password" => "newpassword"]);
        $this->assertRedirectedTo('/user/change-password-success');
    }

    /**
     * @test
     **/
    public function it_change_password_with_error()
    {
        $mock_reminder_service = m::mock('LaravelAcl\Authentication\Services\ReminderService')
                                  ->shouldReceive('reset')
                                  ->once()
                                  ->andThrow(new AuthenticationErrorException)
                                  ->shouldReceive('getErrors')
                                  ->getMock();
        $this->app->instance('LaravelAcl\Authentication\Services\ReminderService', $mock_reminder_service);

        $this->action('POST', 'LaravelAcl\Authentication\Controllers\AuthController@postChangePassword', ["password" => "newpassword"]);

        $this->assertRedirectedToAction('LaravelAcl\Authentication\Controllers\AuthController@getChangePassword');
        $this->assertSessionHasErrors();
    }

    /**
     * @test
     **/
    public function itValidatePasswordOnChangePassword()
    {
        $this->action('POST', 'LaravelAcl\Authentication\Controllers\AuthController@postChangePassword', ["password" => ""]);

        $this->assertRedirectedToAction('LaravelAcl\Authentication\Controllers\AuthController@getChangePassword');
        $this->assertSessionHasErrors();
        $this->assertSessionHas("_old_input");
    }
}
 