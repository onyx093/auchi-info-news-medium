@extends('layouts.app')

@section('content')

<div class="uk-section uk-tile uk-background-muted login-form">
    <div class="uk-flex uk-flex-center">
        <p class="mdc-typography--headline4" >{{ __('Reset Password') }}</p>
    </div>
    <div class="uk-flex uk-flex-center">
        <form method="POST" action="{{ route('password.update') }}" >
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
                <label class="mdc-floating-label mdc-floating-label--float-above" for="password">{{ __('New Password:') }}</label>
                <div class="mdc-line-ripple"></div>
            </div>
            <div class="mdc-text-field-helper-line">
                <div id="password-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('password') }}</small></div>
            </div>

            <br>

            <div class="mdc-text-field">
                <input type="password" id="password_confirmation" name="password_confirmation" class="mdc-text-field__input" aria-controls="password_confirmation-helper-text"
            aria-describedby="password_confirmation-helper-text" >
                <label class="mdc-floating-label mdc-floating-label--float-above" for="password_confirmation">{{ __('Confirm New Password:') }}</label>
                <div class="mdc-line-ripple"></div>
            </div>
            <div class="mdc-text-field-helper-line">
                <div id="password_confirmation-helper-text" class="mdc-text-field-helper-text--validation-msg"><small></small></div>
            </div>

        <div><input type="hidden" name="token" value="{{ $token }}"></div>

            <br>
            <button class="mdc-button mdc-button--raised uk-align-center">
                <!-- <i class="material-icons mdc-button__icon" aria-hidden="true">favorite</i> -->
                <span class="mdc-button__label">Reset Password</span>
            </button>

        </form>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
