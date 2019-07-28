<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Auchi Info News Admin Section')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Styles -->
    <link href="{{ asset('css/material-components-web.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/uikit.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.admin.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <div id="top-header" class="uk-section" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar" >
            <div class="uk-container" >
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left">

                        <ul class="uk-navbar-nav">
                            @if (isset($ip_location))
                            <li>{{ $ip_location->country }}</li>
                            @endif
                            <li>{{ date("l, F j Y") }}</li>
                            <li><a href="{{ route('contact.index') }}">Contact</a></li>
                            @guest
                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            @endif
                            @else
                            <li class="user-account" ><a href="">{{ Auth::user()->name }}</a>
                                <div id="toolbar" class="toolbar mdc-menu-surface--anchor">    
                                    <div class="mdc-menu mdc-menu-surface">
                                        <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                                            <li class="mdc-list-item" role="menuitem">
                                                <a href="#" class="mdc-list-item__text" >dashboard</a>
                                            </li>
                                            <li class="mdc-list-item" role="menuitem">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="mdc-list-item__text" >{{ __('logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            @endguest
                        </ul>

                    </div>

                    <div class="uk-navbar-right">

                        <ul class="uk-navbar-nav">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>

                        </ul>

                    </div>
                </nav>
            </div>
        </div>

        

        <div class="main">
            @yield('content')
        </div>
        <footer>
            <div class="copyright">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                    <div class="uk-navbar-left">
                
                        <ul class="uk-navbar-nav">
                            <li class="uk-active mdc-typography--body1">&copy;copyright - auchi info news media {{ date("Y") }}</li>
                        </ul>
                
                    </div>
                
                    <div class="uk-navbar-right">
                
                        <ul class="uk-navbar-nav">
                            <li><a href="{{ route('policy') }}">privacy policy</a></li>
                            <li><a href="{{ route('terms') }}">terms of agreement</a></li>
                            <li><a href="{{ route('contact.index') }}">contact us</a></li>
                        </ul>
                
                    </div>
                
                </nav>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}" ></script>
    <script src="{{ asset('js/material-components-web.min.js') }}" ></script>
    <script src="{{ asset('js/uikit.min.js') }}" ></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}" ></script>
    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>
