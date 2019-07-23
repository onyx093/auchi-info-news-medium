@extends('layouts.app')

@section('content')
<div class="uk-section uk-tile uk-background-muted register-form">
    <div class="uk-flex uk-flex-center">
        <p class="mdc-typography--headline4" >{{ __('Register') }}</p>
    </div>
    
    <div class="uk-flex uk-flex-center">
        <form method="POST" action="{{ route('register') }}" >
            @csrf
            <div class="mdc-text-field">
                <input type="text" id="fullname" name="name" class="mdc-text-field__input" value="{{ old('name') }}" aria-controls="fullname-helper-text" aria-describedby="fullname-helper-text" required >
                <label class="mdc-floating-label mdc-floating-label--float-above" for="name">{{ __('Full name') }}</label>
                <div class="mdc-line-ripple"></div>
            </div>
            <div class="mdc-text-field-helper-line">
                <div id="fullname-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('name') }}</small></div>
            </div>

            <br>

            <div class="mdc-text-field">
                <input type="text" id="user-email" name="email" class="mdc-text-field__input" value="{{ old('email') }}" aria-controls="email-helper-text" aria-describedby="email-helper-text" required >
                <label class="mdc-floating-label mdc-floating-label--float-above" for="email">{{ __('E-Mail Address') }}</label>
                <div class="mdc-line-ripple"></div>
            </div>
            <div class="mdc-text-field-helper-line">
                <div id="email-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('email') }}</small></div>
            </div>

            <br>

            <div class="mdc-text-field">
                <input type="password" id="password" name="password" class="mdc-text-field__input" aria-controls="password-helper-text" aria-describedby="password-helper-text" required >
                <label class="mdc-floating-label mdc-floating-label--float-above" for="password">{{ __('Password') }}</label>
                <div class="mdc-line-ripple"></div>
            </div>
            <div class="mdc-text-field-helper-line">
                <div id="password-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('password') }}</small></div>
            </div>

            <br>

            <div class="mdc-text-field">
                <input type="password" id="password-confirmation" name="password_confirmation" class="mdc-text-field__input" aria-controls="password-confirm-helper-text" aria-describedby="password-confirm-helper-text" required >
                <label class="mdc-floating-label mdc-floating-label--float-above" for="password-confirmation">{{ __('Confirm Password') }}</label>
                <div class="mdc-line-ripple"></div>
            </div>

            <br>
            <br>

            <button class="mdc-button mdc-button--raised uk-align-center">
                <span class="mdc-button__label">Register</span>
            </button>

        </form>
    </div>
</div>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
