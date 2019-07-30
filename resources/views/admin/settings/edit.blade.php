@extends('admin.layouts.app')

@section('header')
    @parent
    Account settings | edit
@endsection

@section('content')

<div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell--span-3">
            @include('admin.layouts.components.sidebar')
        </div>
        <div class="mdc-layout-grid__cell--span-9">

            <p class="mdc-typography--headline3 uk-margin-remove-bottom">@yield('header')</p>
            <button class="mdc-button uk-margin-small-top">
                <a href="{{ route('settings.index') }}" class="mdc-button__label">Back to account settings</a>
            </button>
            <div class="mdc-layout-grid admin-portfolio">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell--span-12">
                        <div class="mdc-card uk-child-width-1-1@s uk-align-center uk-padding uk-text-left" uk-grid>
                            <div>
                                <form method="POST" action="{{ route('settings.update', $admin->id) }}" >
                                    @method('PATCH')
                                    @csrf
                                    <div class="mdc-layout-grid">
                                        <div class="mdc-layout-grid__inner">
                                            <div class="mdc-layout-grid__cell--span-6">
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="name-text-field" name="name" class="mdc-text-field__input" value="{{ session()->get('message') === 'Error!' ? old('name') : $admin->name }}">
                                                    <label class="mdc-floating-label mdc-floating-label--float-above" for="name-text-field">Name:</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field-helper-line">
                                                    <div id="category-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('name') }}</small></div>
                                                </div>
                                                <br>
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="website-text-field" name="website" class="mdc-text-field__input" value="{{ session()->get('message') === 'Error!' ? old('website') : $admin->web_link }}">
                                                    <label class="mdc-floating-label mdc-floating-label--float-above" for="website-text-field">Website url:</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field-helper-line">
                                                    <div id="category-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('website') }}</small></div>
                                                </div>
                                                <br>
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="facebook-text-field" name="facebook" class="mdc-text-field__input" value="{{ session()->get('message') === 'Error!' ? old('facebook') : $admin->facebook_link }}">
                                                    <label class="mdc-floating-label mdc-floating-label--float-above" for="facebook-text-field">Facebook link:</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field-helper-line">
                                                    <div id="category-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('facebook') }}</small></div>
                                                </div>
                                                <br>
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="twitter-text-field" name="twitter" class="mdc-text-field__input" value="{{ session()->get('message') === 'Error!' ? old('twitter') : $admin->twitter_link }}">
                                                    <label class="mdc-floating-label mdc-floating-label--float-above" for="twitter-text-field">Twitter link</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field-helper-line">
                                                    <div id="category-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('twitter') }}</small></div>
                                                </div>
                                                <br>
                                                <div class="mdc-select mdc-text-field--fullwidth">
                                                    <i class="mdc-select__dropdown-icon"></i>
                                                    <select class="mdc-select__native-control states" name="state">
                                                        <option value="">Select a state from the list</option>
                                                        @foreach ($states as $state)
                                                        <option value="{{ $state->id }}" {{ $state->id === $admin->state_id ? 'selected' : '' }}>{{ $state->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label class="mdc-floating-label mdc-floating-label--float-above">Select a state</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                            </div>
                    
                                            <div class="mdc-layout-grid__cell--span-6">
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="file" id="email-text-field" name="image" class="mdc-text-field__input">
                                                    <label class="mdc-floating-label mdc-floating-label--float-above" for="email-text-field">Image</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field-helper-line">
                                                    <div id="category-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('image') }}</small></div>
                                                </div>
                                                <br>
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="phone-text-field" name="phone" class="mdc-text-field__input" value="{{ session()->get('message') === 'Error!' ? old('phone') : $admin->phone }}">
                                                    <label class="mdc-floating-label mdc-floating-label--float-above" for="phone-text-field">Phone</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field-helper-line">
                                                    <div id="category-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('phone') }}</small></div>
                                                </div>
                                                <br>
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="instagram-text-field" name="instagram" class="mdc-text-field__input" value="{{ session()->get('message') === 'Error!' ? old('instagram') : $admin->instagram_link }}">
                                                    <label class="mdc-floating-label mdc-floating-label--float-above" for="instagram-text-field">Instagram link:</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field-helper-line">
                                                    <div id="category-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('instagram') }}</small></div>
                                                </div>
                                                <br>
                                                <div class="mdc-text-field mdc-text-field--fullwidth">
                                                    <input type="text" id="youtube-text-field" name="youtube" class="mdc-text-field__input" value="{{ session()->get('message') === 'Error!' ? old('youtube') : $admin->youtube_link }}">
                                                    <label class="mdc-floating-label mdc-floating-label--float-above" for="youtube-text-field">Youtube link:</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                                <div class="mdc-text-field-helper-line">
                                                    <div id="category-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('youtube') }}</small></div>
                                                </div>
                                                <br>
                                                <div class="mdc-select mdc-text-field--fullwidth">
                                                    <i class="mdc-select__dropdown-icon"></i>
                                                    <select class="mdc-select__native-control lga" name="state">
                                                        <option value="">Select a state from the list</option>
                                                        @foreach ($states as $state)
                                                        <option value="{{ $state->id }}" {{ $state->id === $admin->state_id ? 'selected' : '' }}>{{ $state->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label class="mdc-floating-label mdc-floating-label--float-above">Select a state</label>
                                                    <div class="mdc-line-ripple"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-text-field mdc-text-field--fullwidth mdc-text-field--textarea">
                                        <textarea id="description-text-field" name="description" class="mdc-text-field__input" rows="8" cols="40" aria-controls="description-helper-text"
                                    aria-describedby="description-helper-text"></textarea>{{ session()->get('message') === 'Error!' ? old('description') : $admin->description }}</textarea>
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                            <label for="textarea" class="mdc-floating-label">Description:</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="category-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('description') }}</small></div>
                                    </div>
                                    <button class="mdc-button mdc-button--raised uk-align-center">
                                        <!-- <i class="material-icons mdc-button__icon" aria-hidden="true">favorite</i> -->
                                        <span class="mdc-button__label">Save changes</span>
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