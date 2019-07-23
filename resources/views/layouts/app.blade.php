<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Auchi Info News') }}</title>

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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
        <div id="logo-header" class="uk-section" >
            <div class="uk-container">
                <div class="left" >
                    <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">
                        <div class="uk-inline">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo">
                        </div>
                    </a>
                </div>
                <div class="right" >
                    @include('layouts.adverts')
                </div>
            </div>
            <nav class="uk-navbar-container uk-navbar-transparent base-navigation" uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li class="{{ Route::currentRouteName() == 'welcome' ? 'uk-active' : '' }}"><a href="{{ route('welcome') }}">News</a></li>
                        <li class="{{ Route::currentRouteName() == 'business' ? 'uk-active' : '' }}"><a href="{{ route('business') }}">Business</a></li>
                        <li class="{{ Route::currentRouteName() == 'politics' ? 'uk-active' : '' }}"><a href="{{ route('politics') }}">Politics</a></li>
                        <li class="{{ Route::currentRouteName() == 'health' ? 'uk-active' : '' }}"><a href="{{ route('health') }}">Health</a></li>
                        <li class="{{ Route::currentRouteName() == 'arts' ? 'uk-active' : '' }}"><a href="{{ route('arts') }}">Arts/Life</a></li>
                        <li class="{{ Route::currentRouteName() == 'religion' ? 'uk-active' : '' }}"><a href="{{ route('religion') }}">Religion</a></li>
                        <li class="{{ Route::currentRouteName() == 'editorial' ? 'uk-active' : '' }}"><a href="{{ route('editorial') }}">Editorial</a></li>
                        <li class="{{ Route::currentRouteName() == 'opinions' ? 'uk-active' : '' }}"><a href="{{ route('opinions') }}">Opinion</a></li>
                        <li class="{{ Route::currentRouteName() == 'environment' ? 'uk-active' : '' }}"><a href="{{ route('environment') }}">Environment</a></li>
                        <li class="{{ Route::currentRouteName() == 'sports' ? 'uk-active' : '' }}"><a href="{{ route('sports') }}">Sports</a></li>
                    </ul>
                </div>

                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        

        <div class="main">
            @yield('content')
        </div>
        <footer>
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell--span-4">
                        <p class="sub-heading mdc-typography--headline5" >Title</p>
                        <ul>
                            <li>
                                <div class="grid-block grid-block1on1">
                                    <div class="rest bulletin mdc-card">    
                                        <section class="uk-inline uk-cover-container mdc-card__media" >
                                            <img src="{{ asset('img/photo1.jpg') }}" alt="" uk-cover>
                                            <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                <p class="sub-category mdc-card__primary-action"><a href="#">Gadgets</a></p>
                                            </div>
                                        </section>
                                        <section class="bulletin-text">
                                            <p class="headline" ><a href="#">Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                            <p class="metadata"><a href="#">Ahmed Sylvanus</a><span class="date"> - <a href="#">Jun 22, 2019</a></span></p>
                                            <p class="bulletin-article" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci cupiditate temporibus molestiae cumque fugiat molestias soluta nulla in esse quisquam unde consequuntur a ducimus enim odit, voluptates non ab illo?</p>
                                        </section>
                                    </div>
                                    <div class="rest bulletin mdc-card">    
                                        <section class="uk-inline uk-cover-container mdc-card__media" >
                                            <img src="{{ asset('img/photo1.jpg') }}" alt="" uk-cover>
                                            <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                <p class="sub-category mdc-card__primary-action"><a href="#">Gadgets</a></p>
                                            </div>
                                        </section>
                                        <section class="bulletin-text">
                                            <p class="headline" ><a href="#">Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                            <p class="metadata"><a href="#">Ahmed Sylvanus</a><span class="date"> - <a href="#">Jun 22, 2019</a></span></p>
                                            <p class="bulletin-article" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci cupiditate temporibus molestiae cumque fugiat molestias soluta nulla in esse quisquam unde consequuntur a ducimus enim odit, voluptates non ab illo?</p>
                                        </section>
                                    </div>
                                    <div class="rest bulletin mdc-card">    
                                        <section class="uk-inline uk-cover-container mdc-card__media" >
                                            <img src="{{ asset('img/photo1.jpg') }}" alt="" uk-cover>
                                            <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                <p class="sub-category mdc-card__primary-action"><a href="#">Gadgets</a></p>
                                            </div>
                                        </section>
                                        <section class="bulletin-text">
                                            <p class="headline" ><a href="#">Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                            <p class="metadata"><a href="#">Ahmed Sylvanus</a><span class="date"> - <a href="#">Jun 22, 2019</a></span></p>
                                            <p class="bulletin-article" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci cupiditate temporibus molestiae cumque fugiat molestias soluta nulla in esse quisquam unde consequuntur a ducimus enim odit, voluptates non ab illo?</p>
                                        </section>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mdc-layout-grid__cell--span-4">
                        <p class="sub-heading mdc-typography--headline5" >Title</p>
                        <ul>
                            <li>
                                <div class="grid-block grid-block1on1">
                                    <div class="rest bulletin mdc-card">    
                                        <section class="uk-inline uk-cover-container mdc-card__media" >
                                            <img src="{{ asset('img/photo1.jpg') }}" alt="" uk-cover>
                                            <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                <p class="sub-category mdc-card__primary-action"><a href="#">Gadgets</a></p>
                                            </div>
                                        </section>
                                        <section class="bulletin-text">
                                            <p class="headline" ><a href="#">Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                            <p class="metadata"><a href="#">Ahmed Sylvanus</a><span class="date"> - <a href="#">Jun 22, 2019</a></span></p>
                                            <p class="bulletin-article" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci cupiditate temporibus molestiae cumque fugiat molestias soluta nulla in esse quisquam unde consequuntur a ducimus enim odit, voluptates non ab illo?</p>
                                        </section>
                                    </div>
                                    <div class="rest bulletin mdc-card">    
                                        <section class="uk-inline uk-cover-container mdc-card__media" >
                                            <img src="{{ asset('img/photo1.jpg') }}" alt="" uk-cover>
                                            <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                <p class="sub-category mdc-card__primary-action"><a href="#">Gadgets</a></p>
                                            </div>
                                        </section>
                                        <section class="bulletin-text">
                                            <p class="headline" ><a href="#">Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                            <p class="metadata"><a href="#">Ahmed Sylvanus</a><span class="date"> - <a href="#">Jun 22, 2019</a></span></p>
                                            <p class="bulletin-article" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci cupiditate temporibus molestiae cumque fugiat molestias soluta nulla in esse quisquam unde consequuntur a ducimus enim odit, voluptates non ab illo?</p>
                                        </section>
                                    </div>
                                    <div class="rest bulletin mdc-card">    
                                        <section class="uk-inline uk-cover-container mdc-card__media" >
                                            <img src="{{ asset('img/photo1.jpg') }}" alt="" uk-cover>
                                            <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                <p class="sub-category mdc-card__primary-action"><a href="#">Gadgets</a></p>
                                            </div>
                                        </section>
                                        <section class="bulletin-text">
                                            <p class="headline" ><a href="#">Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                            <p class="metadata"><a href="#">Ahmed Sylvanus</a><span class="date"> - <a href="#">Jun 22, 2019</a></span></p>
                                            <p class="bulletin-article" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci cupiditate temporibus molestiae cumque fugiat molestias soluta nulla in esse quisquam unde consequuntur a ducimus enim odit, voluptates non ab illo?</p>
                                        </section>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mdc-layout-grid__cell--span-4">
                    <p class="sub-heading mdc-typography--headline5" >Other categories</p>
                        <ul class="mdc-list">
                            <li class="mdc-list-item" tabindex="0">
                                <span class="mdc-list-item__text"><a href="{{ route('about') }}">About us</a></span>
                            </li>
                            <li class="mdc-list-item">
                                <span class="mdc-list-item__text"><a href="{{ route('contact.index') }}">Contact us</a></span>
                            </li>
                            <li class="mdc-list-item">
                                <span class="mdc-list-item__text"><a href="{{ route('advert') }}">Advert rate</a></span>
                            </li>
                            <li class="mdc-list-item">
                                <span class="mdc-list-item__text"><a href="{{ route('marketplace.index') }}">The marketplace</a></span>
                            </li>
                            <li class="mdc-list-item">
                                <span class="mdc-list-item__text"><a href="{{ route('directory') }}">Business directory</a></span>
                            </li>
                            {{-- <li class="mdc-list-item">
                                <span class="mdc-list-item__text"><a href="{{ route('ireport') }}">I report</a></span>
                            </li> --}}
                            <li class="mdc-list-item">
                                <span class="mdc-list-item__text"><a href="{{ route('writeforus') }}">Write for us</a></span>
                            </li>
                            <li class="mdc-list-item">
                                <span class="mdc-list-item__text"><a href="{{ route('login') }}">Login</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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
