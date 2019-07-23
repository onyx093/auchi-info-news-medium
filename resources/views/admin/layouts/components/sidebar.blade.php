<div class="sidebar">
    <div class="admin-user">
        <img class="uk-border-circle uk-align-center uk-margin-small-top" width="120" height="120" src="{{ asset('img/photo22.jpg') }}">
        <p class="uk-text-center uk-light mdc-typography--body1" >Ahmed Sylvanus</p>
    </div>

    <ul class="mdc-list admin-nav">
        <li class="mdc-list-item {{ Route::currentRouteName() == 'admin-dashboard' ? 'active' : '' }}" tabindex="0">
            <span class="mdc-list-item__text"><a href="{{ route('admin-dashboard') }}">Dashboard</a></span>
        </li>
        <li class="mdc-list-item {{ Route::currentRouteName() == 'users.index' ? 'active' : '' }}">
            <span class="mdc-list-item__text"><a href="{{ route('users.index') }}">Admin users</a></span>
        </li>
        <li class="mdc-list-item {{ Route::currentRouteName() == 'category-pages' ? 'active' : '' }}">
            <span class="mdc-list-item__text"><a href="{{ route('category-pages') }}">Category pages</a></span>
        </li>
        <li class="mdc-list-item {{ Route::currentRouteName() == 'posts.index' ? 'active' : '' }}">
            <span class="mdc-list-item__text"><a href="{{ route('posts.index') }}">Posts</a></span>
        </li>
        <li class="mdc-list-item {{ Route::currentRouteName() == 'settings.index' ? 'active' : '' }}">
            <span class="mdc-list-item__text"><a href="{{ route('settings.index') }}">Account settings</a></span>
        </li>
        <li class="mdc-list-item {{ Route::currentRouteName() == 'admin-logout' ? 'active' : '' }}">
            <span class="mdc-list-item__text"><a href="{{ route('admin-logout') }}">Logout</a></span>
        </li>
    </ul>

    <div class="logo-wrapper">
        <img class="uk-border-rounded uk-align-center" width="120" height="120" src="{{ asset('img/logo.png') }}">
    </div>
</div>