@extends('admin.layouts.app')

@section('content')

<div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell--span-3">
            @include('admin.layouts.components.sidebar')
        </div>
        <div class="mdc-layout-grid__cell--span-9">

            <p class="mdc-typography--headline3 uk-margin-remove-bottom">Account settings</p>
            <div class="mdc-layout-grid admin-portfolio">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell--span-12">
                        <div class="mdc-card uk-child-width-1-1@s uk-align-center uk-padding uk-text-left" uk-grid>
                            <div>
                                <form method="POST" action="{{ route('settings.update', $admin->id) }}" >
                                    @csrf
                                    <div class="mdc-layout-grid">
                                        <div class="mdc-layout-grid__inner">
                                            <div class="mdc-layout-grid__cell--span-6">
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="name-text-field" name="name" class="mdc-text-field__input">
                                                    <label class="mdc-floating-label" for="name-text-field">Name:</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="website-text-field" name="website" class="mdc-text-field__input">
                                                    <label class="mdc-floating-label" for="website-text-field">Website url:</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="name-text-field" name="name" class="mdc-text-field__input">
                                                    <label class="mdc-floating-label" for="name-text-field">Name</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="name-text-field" name="name" class="mdc-text-field__input">
                                                    <label class="mdc-floating-label" for="name-text-field">Name</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <br>
                                                <div class="mdc-select">
                                                    <i class="mdc-select__dropdown-icon"></i>
                                                    <select class="mdc-select__native-control states" name="state">
                                                        <option value="" disabled selected></option>
                                                        @foreach ($states as $state)
                                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label class="mdc-floating-label mdc-floating-label--float-above">Select a state</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                            </div>
                    
                                            <div class="mdc-layout-grid__cell--span-6">
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="email-text-field" name="email" class="mdc-text-field__input">
                                                    <label class="mdc-floating-label" for="email-text-field">Email Address</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="phone-text-field" name="phone" class="mdc-text-field__input">
                                                    <label class="mdc-floating-label" for="phone-text-field">Phone</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="email-text-field" name="email" class="mdc-text-field__input">
                                                    <label class="mdc-floating-label" for="email-text-field">Last name</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="email-text-field" name="email" class="mdc-text-field__input">
                                                    <label class="mdc-floating-label" for="email-text-field">Last name</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <br>
                                                <div class="mdc-select">
                                                    <i class="mdc-select__dropdown-icon"></i>
                                                    <select class="mdc-select__native-control lga" name="state">
                                                        <option value="" disabled selected></option>
                                                        @foreach ($states as $state)
                                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label class="mdc-floating-label">Select a state</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                        

                                    
                                    <br>
                                    <br>
                                    <button class="mdc-button mdc-button--raised uk-align-center">
                                        <!-- <i class="material-icons mdc-button__icon" aria-hidden="true">favorite</i> -->
                                        <span class="mdc-button__label">Login</span>
                                    </button>
                        
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection