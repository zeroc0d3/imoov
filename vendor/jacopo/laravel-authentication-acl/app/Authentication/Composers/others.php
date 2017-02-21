<?php
/**
 * the site name
 */
View::composer('laravel-authentication-acl::*', function ($view)
{
    $view->with('app_name', Config::get('acl_app_name'));
});

/**
 * the logged user
 */
View::composer('laravel-authentication-acl::*', function ($view)
{
    $view->with('logged_user', App::make('authenticator')->getLoggedUser());
});

/**
 * if the site uses gravatar for avatar handling
 */
View::composer(['laravel-authentication-acl::admin.user.profile', 'laravel-authentication-acl::admin.user.self-profile'], function ($view)
{
    $view->with('use_gravatar', \Config::get('acl_config.use_gravatar'));
});