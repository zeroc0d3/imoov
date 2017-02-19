@if(isset($logged_user) && $logged_user->user_profile()->count())
    <img class="avatar" src="{!! $logged_user->user_profile()->first()->presenter()->avatar($size) !!}" alt="{!! isset($logged_user) ? $logged_user->email : 'User' !!}">
@else
    {!! Theme::img('img/avatar.png', 'avatar-icon', 'avatar') !!}
@endif
