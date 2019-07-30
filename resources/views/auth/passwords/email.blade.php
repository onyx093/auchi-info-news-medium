@extends('layouts.app')

@section('content')

<div class="uk-section uk-tile uk-background-muted login-form">
    <div class="uk-flex uk-flex-center">
        <p class="mdc-typography--headline4" >{{ __('Reset Password') }}</p>
    </div>
    <div class="uk-flex uk-flex-center">
        <form method="POST" action="{{ route('password.email') }}" >
            @csrf
            <div class="mdc-text-field">
                <input type="text" id="email" name="email" class="mdc-text-field__input" value="{{ old('email') }}" aria-controls="username-helper-text"
            aria-describedby="username-helper-text" >
                <label class="mdc-floating-label" for="email">{{ __('E-Mail Address') }}</label>
                <div class="mdc-line-ripple"></div>
            </div>
            <div class="mdc-text-field-helper-line">
                <div id="username-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('email') }}</small></div>
            </div>

            <button class="mdc-button mdc-button--raised uk-align-center">
                <!-- <i class="material-icons mdc-button__icon" aria-hidden="true">favorite</i> -->
                <span class="mdc-button__label">Send Password Reset Link</span>
            </button>

        </form>
    </div>
</div>

@endsection
