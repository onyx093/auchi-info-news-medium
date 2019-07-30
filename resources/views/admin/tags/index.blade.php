@extends('admin.layouts.app')

@section('header')
    @parent
    Tags
@endsection

@section('content')

<div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell--span-3">
            @include('admin.layouts.components.sidebar')
        </div>
        <div class="mdc-layout-grid__cell--span-9 admin-section">

            <p class="mdc-typography--headline4 uk-margin-remove-bottom">@yield('header')</p>
            <div class="mdc-layout-grid admin-categories">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell--span-8 uk-tile uk-tile-default">
                        @if (session()->has('message'))
                            <p class="mdc-typography--body1 uk-text-center uk-notification-message-success">{{ session()->get('message') }}</p>
                        @endif
                        <div class="uk-overflow-auto">
                            <table class="uk-table uk-table-striped uk-table-middle uk-table-divider">
                                <thead>
                                    <tr>
                                        <th class="uk-table-expand">#</th>
                                        <th class="uk-table-expand">Tag</th>
                                        <th class="uk-table-expand uk-text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($tags as $tag)
                                <tr>
                                    <td>{{ $tag->id }}</td>
                                    <td class="uk-text-capitalize" >{{ $tag->name }}</td>
                                    <td class="uk-text-nowrap">
                                        <button class="mdc-button uk-margin-small-top">
                                            <a href="{{ route( 'tags.edit', [ 'post' => $tag->id ] ) }}" class="mdc-button__label">Edit</a>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell--span-4">
                        <div class="mdc-card uk-child-width-1-1@s uk-grid-collapse uk-text-left" uk-grid>
                            <div>
                                <div class="uk-container uk-margin-medium-top">
                                    <p class="mdc-typography--headline5 caption-header">New tag</p>
                                    <form action="{{ route( 'tags.store' ) }}" method="post">
                                        @csrf
                                        <div class="mdc-text-field">
                                            <input type="text" id="tag-text-field" name="tag" class="mdc-text-field__input">
                                            <label class="mdc-floating-label" for="tag-text-field">Tag:</label>
                                            <div class="mdc-line-ripple"></div>
                                        </div>
                                        <div class="mdc-text-field-helper-line">
                                            <div id="tag-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('tag') }}</small></div>
                                        </div>
            
                                        <br>
                                        <button class="mdc-button mdc-button--raised uk-align-center">
                                            <span class="mdc-button__label">Add new tag</span>
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
</div>
    
@endsection
