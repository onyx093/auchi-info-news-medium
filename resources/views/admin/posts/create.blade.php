@extends('admin.layouts.app')

@section('header')
    @parent
    My posts | create new post
@endsection

@section('content')

<div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell--span-3">
            @include('admin.layouts.components.sidebar')
        </div>
        <div class="mdc-layout-grid__cell--span-9">

            <p class="mdc-typography--headline4 uk-margin-remove-bottom">@yield('header')</p>
            <button class="mdc-button uk-margin-small-top">
                <a href="{{ route('posts.index') }}" class="mdc-button__label">Back</a>
            </button>
            <div class="mdc-layout-grid admin-post-list">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell--span-12 uk-tile uk-tile-default admin-post-items">
                        <p class="mdc-typography--body1 uk-text-center">Create a new post</p>
                        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" >
                            @csrf
                            <div class="mdc-text-field mdc-text-field--fullwidth">
                                <input type="text" id="post_title-text-field" name="post_title" class="mdc-text-field__input" value="{{ old('post_title') }}">
                                <label class="mdc-floating-label" for="post_title-text-field">Post title:</label>
                                <div class="mdc-line-ripple"></div>
                            </div>
                            <div class="mdc-text-field-helper-line">
                                <div id="post_title-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('post_title') }}</small></div>
                            </div>

                            <br>

                            <div class="mdc-text-field mdc-text-field--fullwidth">
                                <input type="file" id="post_image-text-field" name="image" class="mdc-text-field__input">
                                <label class="mdc-floating-label" for="post_image-text-field"></label>
                            </div>
                            <div class="mdc-text-field-helper-line">
                                <div id="post_title-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('post_image') }}</small></div>
                            </div>

                            <br>

                            <div class="mdc-select mdc-text-field--fullwidth">
                                <i class="mdc-select__dropdown-icon"></i>
                                <select class="mdc-select__native-control lga" name="category">
                                    <option value="" disabled selected></option>
                                    @foreach ($categories as $category)
                                    <option class="uk-text-capitalize" value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <label class="mdc-floating-label mdc-floating-label--float-above">Select a category</label>
                                <div class="mdc-line-ripple"></div>
                            </div>
                            
                            <br>
                            <br>
            
                            <div class="mdc-text-field mdc-text-field--fullwidth mdc-text-field--textarea">
                                <textarea id="post_body-text-field" name="post_body" class="mdc-text-field__input" rows="8" cols="40" aria-controls="post_body-helper-text"
                                aria-describedby="post_body-helper-text">{{ old('post_body') }}</textarea>
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                    <label for="textarea" class="mdc-floating-label">Post body:</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            
                            <br>
                
                            <button class="mdc-button mdc-button--raised uk-align-center">
                                <!-- <i class="material-icons mdc-button__icon" aria-hidden="true">favorite</i> -->
                                <span class="mdc-button__label">Save post</span>
                            </button>
                
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
    
@endsection

@section('script')

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({

        selector: 'textarea',
        plugins: 'link',

        
    });
</script>

@endsection