@if(isset($logged_user) && $logged_user->user_profile()->count())
    <img src="{!! $logged_user->user_profile()->first()->presenter()->avatar($size) !!}" class="img-avatar" alt="{!! isset($logged_user) ? $logged_user->email : 'User' !!}">
@else
    <img src="{!! asset('avatar.png') !!}" class="img-avatar" alt="{!! isset($logged_user) ? $logged_user->email : 'User' !!}">
@endif
