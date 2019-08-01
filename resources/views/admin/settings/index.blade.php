@extends('admin.layouts.app')

@section('content')

<div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell--span-3">
            @include('admin.layouts.components.sidebar')
        </div>
        <div class="mdc-layout-grid__cell--span-9 admin-section">

            <p class="mdc-typography--headline3 uk-margin-remove-bottom">Account settings</p>
            <div class="mdc-layout-grid admin-portfolio">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell--span-8">
                        <div class="mdc-card uk-child-width-1-2@s uk-grid-collapse uk-text-left" uk-grid>
                            <div>
                                <div class="uk-tile uk-tile-default">
                                    <p class="uk-h6 caption-header">Name</p>
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <div class="uk-width-auto">
                                            <img class="uk-border-circle" width="40" height="40" src="{{ asset('storage/'. $admin->image) }}">
                                        </div>
                                        <div class="uk-width-expand">
                                            <p class="uk-h5 uk-margin-remove-bottom">{{ Auth::user()->name }}</p>
                                            <p class="uk-text-meta uk-margin-remove-top uk-margin-remove-bottom uk-text-primary">Roles: Writer</p>
                                            <p class="uk-text-meta uk-margin-remove-top uk-text-primary"><a href="{{ $admin->web_link }}" target="_blank" >{{ $admin->web_link }}</a></p>
                                        </div>
                                    </div>
                                    <p class="uk-h6 caption-header uk-margin-remove-bottom">Mobile number:</p>
                                    <p class="uk-h6 uk-margin-remove-top">{{ $admin->phone }}</p>
                                    <p class="uk-h6 caption-header uk-margin-remove-bottom">Email:</p>
                                    <p class="uk-h6 uk-margin-remove-top">{{ $admin->email }}</p>
                                    <p class="uk-h6 caption-header uk-margin-remove-bottom">Location:</p>
                                    <p class="uk-h6 uk-margin-remove-top">{{ $admin->lga_id }}, {{ $admin->state_id }}</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-tile uk-tile-muted">
                                    <p class="uk-h6 caption-header">Status</p>
                                    <p class="uk-h6 uk-text-success">{{ $admin->status }}</p>
                                    <p class="uk-h6 caption-header">Bio Description</p>
                                    <p class="uk-h6">{{ $admin->description }}</p>
                                    <p class="uk-h6 caption-header uk-margin-remove-bottom">Social media</p>
                                    <div class="uk-flex uk-nav-primary">
                                        <a href="{{ empty($admin->facebook_link) ? '#' : $admin->facebook_link }}" target="_blank" ><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ empty($admin->instagram_link) ? '#' : $admin->instagram_link }}" target="_blank" ><i class="fab fa-instagram"></i></a>
                                        <a href="{{ empty($admin->twitter_link) ? '#' : $admin->twitter_link }}" target="_blank" ><i class="fab fa-twitter"></i></a>
                                        <a href="{{ empty($admin->youtube_link) ? '#' : $admin->youtube_link }}" target="_blank" ><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="uk-tile uk-tile-muted">
                                    <p class="uk-h6 caption-header uk-margin-remove-bottom">Number of posts</p>
                                    <p class="uk-h1 uk-margin-remove-top">{{ count($admin->posts) }}</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-tile uk-tile-default">
                                <p class="uk-h6 caption-header uk-margin-auto uk-text-center mdc-button mdc-button--raised"><a class="uk-light" href="{{ route('settings.edit', $admin->id ) }}">Edit</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell--span-4">
                        <div class="mdc-card uk-child-width-1-1@s uk-grid-collapse uk-text-left" uk-grid>
                            <div>
                                <div class="uk-tile uk-tile-default">
                                    <p class="uk-h6 caption-header">Today's date</p>
                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                                </div>
                            </div>
                        </div>

                        <div class="mdc-card uk-child-width-1-1@s uk-grid-collapse uk-text-left" uk-grid>
                            <div>
                                <div class="uk-tile uk-tile-default">
                                    <p class="uk-h6 caption-header">Weather report</p>
                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection