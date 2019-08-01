@extends('admin.layouts.app')

@section('content')

<div class="uk-section uk-tile uk-background-muted login-form">
    <div class="uk-flex uk-flex-center">
        <p class="mdc-typography--headline4" >{{ __('Admin Login') }}</p>
    </div>
    <!-- <p>{{ $errors->first('email') }}</p> -->
    <div class="uk-flex uk-flex-center">
        <form method="POST" action="{{ route('admin.login.submit') }}" >
            @csrf
            <div class="mdc-text-field">
                <input type="text" id="email" name="email" class="mdc-text-field__input" value="{{ old('email') }}" aria-controls="username-helper-text"
         aria-describedby="username-helper-text" >
                <label class="mdc-floating-label mdc-floating-label--float-above" for="email">{{ __('E-Mail Address') }}</label>
                <div class="mdc-line-ripple"></div>
            </div>
            <div class="mdc-text-field-helper-line">
                <div id="username-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('email') }}</small></div>
            </div>

            <br>

            <div class="mdc-text-field">
                <input type="password" id="password" name="password" class="mdc-text-field__input" aria-controls="password-helper-text"
         aria-describedby="password-helper-text" >
                <label class="mdc-floating-label mdc-floating-label--float-above" for="password">{{ __('Password') }}</label>
                <div class="mdc-line-ripple"></div>
            </div>
            <div class="mdc-text-field-helper-line">
                <div id="password-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('password') }}</small></div>
            </div>

            <br>
            <br>
            <button class="mdc-button mdc-button--raised uk-align-center">
                <!-- <i class="material-icons mdc-button__icon" aria-hidden="true">favorite</i> -->
                <span class="mdc-button__label">Login</span>
            </button>

        </form>
    </div>
</div>

    
@endsection