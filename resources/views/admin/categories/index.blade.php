@extends('admin.layouts.app')

@section('header')
    @parent
    Categories
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
                                        <th class="uk-table-expand">Category</th>
                                        <th class="uk-table-expand uk-text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td class="uk-text-capitalize" >{{ $category->name }}</td>
                                    <td class="uk-text-nowrap">
                                        <button class="mdc-button uk-margin-small-top">
                                            <a href="{{ route( 'categories.edit', [ 'post' => $category->id ] ) }}" class="mdc-button__label">Edit</a>
                                        </button>
                                        <div class="mdc-chip-set">
                                            <button class="mdc-chip">
                                                <span class="mdc-chip__text">Chips</span>
                                                <i class="material-icons mdc-chip__icon mdc-chip__icon--trailing" tabindex="0" role="button">cancel</i>
                                            </button>
                                        </div>
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
                                    <p class="mdc-typography--headline5 caption-header">New category</p>
                                    <form action="{{ route( 'categories.store' ) }}" method="post">
                                        @csrf
                                        <div class="mdc-text-field">
                                            <input type="text" id="category-text-field" name="category" class="mdc-text-field__input">
                                            <label class="mdc-floating-label" for="category-text-field">Category:</label>
                                            <div class="mdc-line-ripple"></div>
                                        </div>
                                        <div class="mdc-text-field-helper-line">
                                            <div id="category-helper-text" class="mdc-text-field-helper-text--validation-msg"><small>{{ $errors->first('category') }}</small></div>
                                        </div>
            
                                        <br>
                                        <button class="mdc-button mdc-button--raised uk-align-center">
                                            <span class="mdc-button__label">Add new category</span>
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
