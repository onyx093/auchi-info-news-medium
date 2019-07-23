@extends('layouts.app')

@section('content')
<div class="uk-full-width-container">
    <div class="uk-container">
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li><span>Contact us</span></li>
        </ul>
    </div>

    <div class="uk-container">
        <h1 class="uk-heading-line mdc-typography"><span>Contact our sales page</span></h1>
        <p class="mdc-typography--headline6">Let's talk about helping you put your business in the frontline</p>

        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-8">
                    <div class="uk-section uk-tile uk-tile-muted uk-padding-large">
                        <p class="mdc-typography--body1 uk-text-center">Your contact details</p>
                        <form method="POST" action="{{ route('login') }}" >
                            @csrf
                            <div class="mdc-layout-grid">
                                <div class="mdc-layout-grid__inner">
                                    <div class="mdc-layout-grid__cell--span-6">
                                        <div class="mdc-text-field mdc-text-field--fullwidth">
                                            <input type="text" id="first-name-text-field" name="first-name" class="mdc-text-field__input">
                                            <label class="mdc-floating-label" for="first-name-text-field">First name</label>
                                            <div class="mdc-line-ripple"></div>
                                        </div>
                                    </div>
            
                                    <div class="mdc-layout-grid__cell--span-6">
                                        <div class="mdc-text-field mdc-text-field--fullwidth">
                                            <input type="text" id="last-name-text-field" name="last-name" class="mdc-text-field__input">
                                            <label class="mdc-floating-label" for="last-name-text-field">Last name</label>
                                            <div class="mdc-line-ripple"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <br>
            
                            <div class="mdc-layout-grid">
                                <div class="mdc-layout-grid__inner">
                                    <div class="mdc-layout-grid__cell--span-6">
                                        <div class="mdc-text-field mdc-text-field--fullwidth">
                                            <input type="text" id="email-text-field" name="email" class="mdc-text-field__input">
                                            <label class="mdc-floating-label" for="email-text-field">Email address</label>
                                            <div class="mdc-line-ripple"></div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell--span-6">
                                        <div class="mdc-text-field mdc-text-field--fullwidth">
                                            <input type="text" id="phone-text-field" name="phone" class="mdc-text-field__input">
                                            <label class="mdc-floating-label" for="phone-text-field">Phone address</label>
                                            <div class="mdc-line-ripple"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <br>
            
                            <div class="mdc-text-field mdc-text-field--fullwidth mdc-text-field--textarea">
                                <textarea id="description-text-field" name="description" class="mdc-text-field__input" rows="8" cols="40" aria-controls="description-helper-text"
                                aria-describedby="description-helper-text"></textarea></textarea>
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                    <label for="textarea" class="mdc-floating-label">How can we help you?</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            
                            <br>
                
                            <button class="mdc-button mdc-button--raised uk-align-center">
                                <!-- <i class="material-icons mdc-button__icon" aria-hidden="true">favorite</i> -->
                                <span class="mdc-button__label">Send</span>
                            </button>
                
                        </form>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell--span-4">
                    <ul class="mdc-list">
                        <li class="mdc-list-item" tabindex="0">
                            <span class="mdc-list-item__text">Address</span>
                        </li>
                        <li class="mdc-list-item" tabindex="0">
                            <span class="mdc-list-item__text">Head office:</span>
                        </li>
                        <li class="mdc-list-item">
                            <span class="mdc-list-item__text">No. 21, Ajunwa Street</span>
                        </li>
                        <li class="mdc-list-item">
                            <span class="mdc-list-item__text">Ifako Ijaiye, Lagos</span>
                        </li>
                        <br>
                        <li class="mdc-list-item">
                            <span class="mdc-list-item__text">Phone:</span>
                        </li>
                        <li class="mdc-list-item">
                            <span class="mdc-list-item__text"><i class="material-icons">phone</i> 07061136509</span>
                        </li>
                        <li class="mdc-list-item">
                            <span class="mdc-list-item__text"><i class="material-icons">phone</i> 08057546245</span>
                        </li>
                        <br>
                        <li class="mdc-list-item">
                            <span class="mdc-list-item__text">Online presence:</span>
                        </li>
                        <li class="mdc-list-item">
                            <span class="mdc-list-item__text"><i class="fab fa-facebook-f"></i>  <a href="#">www.facebook.com</a></span>
                        </li>
                        <li class="mdc-list-item">
                            <span class="mdc-list-item__text"><i class="fab fa-instagram"></i> <a href="#">www.instagram.com</a></span>
                        </li>
                        <li class="mdc-list-item">
                            <span class="mdc-list-item__text"><i class="fab fa-twitter"></i> <a href="#">www.twitter.com</a></span>
                        </li>
                        <li class="mdc-list-item">
                            <span class="mdc-list-item__text"><i class="fab fa-youtube"></i> <a href="#">www.youtube.com</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br>

    </div>

</div>
@endsection