@extends('admin.layouts.app')

@section('header')
    @parent
    My posts
@endsection

@section('content')

<div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell--span-3">
            @include('admin.layouts.components.sidebar')
        </div>
        <div class="mdc-layout-grid__cell--span-9 admin-section">

            <p class="mdc-typography--headline4 uk-margin-remove-bottom">@yield('header')</p>
            <button class="mdc-button uk-margin-small-top">
                <a href="{{ route('posts.create') }}" class="mdc-button__label">Create new post</a>
            </button>
            <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                <li><a href="#">All posts</a></li>
                <li><a href="#">My posts</a></li>
            </ul>
            
            <ul class="uk-switcher uk-margin">
                <li>
                    <div class="mdc-layout-grid admin-post-list">
                        <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell--span-12 uk-tile uk-tile-default">
                                
                                @if (count($posts) === 0)
                                    <p class="mdc-typography--headline5" >There are no posts yet, kindly create one <button class="mdc-button uk-margin-small-top">
                                        <a href="{{ route('posts.create') }}" class="mdc-button__label">here</a>
                                    </button></p>
                                @elseif (count($posts) > 0)
                                    <div class="admin-post-items--grid">
                                        @foreach ($posts as $post)
                                            <div class="mdc-card">
                                                <div class="uk-card-media-top">
                                                    <img src="{{ asset('storage/'. $post->image) }}" alt="">
                                                </div>
                                                <div class="uk-card-body">
                                                    <p class="mdc-typography--body1 uk-text-center uk-margin-remove-bottom uk-text-truncate uk-text-bold post-title">Title: {{ substr($post->title, 0, 19)}}{{ strlen($post->title) > 19 ? "...":""}}</p>
                                                    <p class="mdc-typography--body2 uk-text-left uk-margin-remove-bottom uk-margin-remove-top uk-text-capitalize">Category: <span class="" >{{ $post->category->name}}</span></p>
                                                </div>
                                                <div class="mdc-card__actions uk-flex uk-flex-center">
                                                    <button class="mdc-button mdc-card__action mdc-card__action--button">
                                                        <span class="mdc-button__label"><a href="{{ route('posts.show', ['post' => $post->id]) }}">View</a></span>
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                <div class="uk-section">{{ $posts->links() }}</div>
                                    
                                @endif
        
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mdc-layout-grid admin-post-list">
                        <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell--span-12 uk-tile uk-tile-default admin-post-items--grid">
                                
                                @if (count($my_posts) === 0)
                                    <p class="mdc-typography--headline5" >You haven't created any posts yet, kindly create one <button class="mdc-button uk-margin-small-top">
                                        <a href="{{ route('posts.create') }}" class="mdc-button__label">here</a>
                                    </button></p>
                                @elseif (count($my_posts) > 0)

                                    @foreach ($my_posts as $post)
                                        <div class="mdc-card">
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="">
                                            </div>
                                            <div class="uk-card-body">
                                                <p class="mdc-typography--body1 uk-text-left uk-margin-remove-bottom uk-text-truncate uk-text-bold">Title: {{ substr($post->title, 0, 19)}}{{ strlen($post->title) > 19 ? "...":""}}</p>
                                                <p class="mdc-typography--body2 uk-text-left uk-margin-remove-bottom uk-margin-remove-top uk-text-capitalize">Category: <span class="" >{{ $post->category->name}}</span></p>
                                            </div>
                                            <div class="mdc-card__actions uk-flex uk-flex-center">
                                                <button class="mdc-button mdc-card__action mdc-card__action--button">
                                                    <span class="mdc-button__label"><a href="{{ route('posts.show', ['post' => $post->id]) }}">View</a></span>
                                                </button>
                                            </div>
                                        </div>
                                    @endforeach
                                
                                <div class="uk-section">{{ $posts->links() }}</div>
                                    
                                @endif
        
                            </div>
                            {{-- <div class="mdc-layout-grid__cell--span-12 k-tile uk-tile-default admin-post-items">
                                <div class="uk-overflow-auto">
                                    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                                        <thead>
                                            <tr>
                                                <th class="uk-table-shrink">#</th>
                                                <th class="uk-width-small">Title</th>
                                                <th class="uk-table-expand">Body</th>
                                                <th class="uk-width-small">Created</th>
                                                <th class="uk-table-shrink uk-text-nowrap">Updated</th>
                                                <th class="uk-table-shrink uk-text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($my_posts as $post)
                                            
                                        @endforeach
                                            {{-- <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td class="uk-text-truncate">{{ $post->content }}</td>
                                                <td class="uk-text-nowrap">{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                                                <td class="uk-text-nowrap">{{ date('M j, Y', strtotime($post->updated_at)) }}</td>
                                                <td class="uk-text-nowrap">
                                                    <button class="mdc-button uk-margin-small-top">
                                                        <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="mdc-button__label">View</a>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </li>
            </ul>
            
        </div>
    </div>
</div>
    
@endsection
