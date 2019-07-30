@extends('admin.layouts.app')

@section('header')
    @parent
    My posts | View post
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
                <a href="{{ route('posts.index') }}" class="mdc-button__label">Back to posts</a>
            </button>
            <div class="mdc-layout-grid admin-show-post">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell--span-9 uk-tile uk-tile-default">
                        @if (session()->has('message'))
                            <p class="mdc-typography--body1 uk-text-center uk-notification-message-success">{{ session()->get('message') }}</p>
                        @endif
                        <div class="uk-container">
                            {!! $post->content !!}
                        </div>

                    </div>

                    <div class="mdc-layout-grid__cell--span-3 uk-tile uk-tile-default">
                        
                        <p class="mdc-typography--body2 uk-text-capitalize"><span class="uk-text-bold" >Category:</span> {{ $post->category->name }}</p>
                        <p class="mdc-typography--body2"><span class="uk-text-bold">Created on:</span>
                        <time datetime="2016-04-01T19:00">{{ date('M j, Y h:ia', strtotime( $post->created_at )) }}</time>
                        </p>

                        <p class="mdc-typography--body2"><span class="uk-text-bold">Last updated:</span>
                        <time datetime="2016-04-01T19:00">{{ date('M j, Y h:ia', strtotime( $post->updated_at )) }}</time>
                        </p>

                        <div class="uk-grid-small uk-child-width-1-2@m" uk-grid>
                            <button class="mdc-button mdc-card__action mdc-card__action--button">
                                <span class="mdc-button__label"><a href="{{ route('posts.edit', [ 'post' => $post->id ]) }}">Edit</a></span>
                            </button>
                            <button class="mdc-button mdc-card__action mdc-card__action--button">
                                <span class="mdc-button__label"><a href="{{ route('posts.destroy', [ 'post' => $post->id ]) }}">Delete</a></span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
    
@endsection
