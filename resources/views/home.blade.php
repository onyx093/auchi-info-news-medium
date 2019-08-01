@extends('layouts.app')

@section('content')
<div class="uk-container">
    {{-- <div class="mdc-typography--headline4">Dashboard</div> --}}

    {{-- @include('layouts.components.trending') --}}

    <br>
    <br>

    @include('layouts.big-grids.grids')

    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-8">
                <div class="blocks">
                    <ul uk-tab>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Politics</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Health</a></li>
                        <li><a href="#">Sports</a></li>
                    </ul>
                    <ul class="uk-switcher">
                        <li>
                            <div class="grid-block grid-block1on2">
                                @foreach ($general as $post)

                                    @if ($loop->first)
                                        <div class="first bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @else
                                        <div class="rest bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @endif
                                    
                                @endforeach
                            </div>
                        </li>
                        <li>
                            <div class="grid-block grid-block1on2">
                                @foreach ($politics as $post)

                                    @if ($loop->first)
                                        <div class="first bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @else
                                        <div class="rest bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @endif
                                    
                                @endforeach
                            </div>
                        </li>
                        <li>
                            <div class="grid-block grid-block1on2">
                                @foreach ($business as $post)

                                    @if ($loop->first)
                                        <div class="first bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @else
                                        <div class="rest bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @endif
                                    
                                @endforeach
                            </div>
                        </li>
                        <li>
                            <div class="grid-block grid-block1on2">
                                @foreach ($health as $post)

                                    @if ($loop->first)
                                        <div class="first bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @else
                                        <div class="rest bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @endif
                                    
                                @endforeach
                            </div>
                        </li>
                        <li>
                            <div class="grid-block grid-block1on2">
                                @foreach ($sports as $post)

                                    @if ($loop->first)
                                        <div class="first bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @else
                                        <div class="rest bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @endif
                                    
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
                @include('layouts.adverts')
            </div>
            <div class="mdc-layout-grid__cell--span-4">
                <div class="blocks">
                    <ul uk-tab>
                        <li><a href="#">News</a></li>
                    </ul>
                    <ul class="uk-switcher">
                        <li>
                            <div class="grid-block grid-block1on1">
                                @foreach ($justThree as $post)

                                    @if ($loop->first)
                                        <div class="first bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @else
                                        <div class="rest bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @endif
                                    
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-12">
                <div class="blocks">
                    <ul uk-tab>
                        <li><a href="#">Opinion</a></li>
                        <li><a href="#">Arts/Life</a></li>
                        <li><a href="#">Religion</a></li>
                        <li><a href="#">Editorial</a></li>
                        <li><a href="#">Environment</a></li>
                    </ul>
                    <ul class="uk-switcher">
                        <li>
                            <div class="grid-block grid-block1on3">
                                @foreach ($opinion as $post)

                                    @if ($loop->first)
                                        <div class="first bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @else
                                        <div class="rest bulletin mdc-card">    
                                            <section class="uk-inline uk-cover-container mdc-card__media" >
                                                <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                    <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                </div>
                                            </section>
                                            <section class="bulletin-text">
                                                <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                            </section>
                                        </div>
                                    @endif
                                    
                                @endforeach
                            </div>
                        </li>
                        <li>
                                <div class="grid-block grid-block1on3">
                                    @foreach ($arts as $post)
    
                                        @if ($loop->first)
                                            <div class="first bulletin mdc-card">    
                                                <section class="uk-inline uk-cover-container mdc-card__media" >
                                                    <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                        <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                    </div>
                                                </section>
                                                <section class="bulletin-text">
                                                    <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                    <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                    <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                                </section>
                                            </div>
                                        @else
                                            <div class="rest bulletin mdc-card">    
                                                <section class="uk-inline uk-cover-container mdc-card__media" >
                                                    <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                        <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                    </div>
                                                </section>
                                                <section class="bulletin-text">
                                                    <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                    <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                    <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                                </section>
                                            </div>
                                        @endif
                                        
                                    @endforeach
                                </div>
                        </li>
                        <li>
                                <div class="grid-block grid-block1on3">
                                    @foreach ($religion as $post)
    
                                        @if ($loop->first)
                                            <div class="first bulletin mdc-card">    
                                                <section class="uk-inline uk-cover-container mdc-card__media" >
                                                    <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                        <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                    </div>
                                                </section>
                                                <section class="bulletin-text">
                                                    <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                    <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                    <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                                </section>
                                            </div>
                                        @else
                                            <div class="rest bulletin mdc-card">    
                                                <section class="uk-inline uk-cover-container mdc-card__media" >
                                                    <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                        <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                    </div>
                                                </section>
                                                <section class="bulletin-text">
                                                    <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                    <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                    <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                                </section>
                                            </div>
                                        @endif
                                        
                                    @endforeach
                                </div>
                        </li>
                        <li>
                                <div class="grid-block grid-block1on3">
                                    @foreach ($editorial as $post)
    
                                        @if ($loop->first)
                                            <div class="first bulletin mdc-card">    
                                                <section class="uk-inline uk-cover-container mdc-card__media" >
                                                    <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                        <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                    </div>
                                                </section>
                                                <section class="bulletin-text">
                                                    <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                    <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                    <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                                </section>
                                            </div>
                                        @else
                                            <div class="rest bulletin mdc-card">    
                                                <section class="uk-inline uk-cover-container mdc-card__media" >
                                                    <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                        <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                    </div>
                                                </section>
                                                <section class="bulletin-text">
                                                    <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                    <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                    <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                                </section>
                                            </div>
                                        @endif
                                        
                                    @endforeach
                                </div>
                        </li>
                        <li>
                                <div class="grid-block grid-block1on3">
                                    @foreach ($opinion as $post)
    
                                        @if ($loop->first)
                                            <div class="first bulletin mdc-card">    
                                                <section class="uk-inline uk-cover-container mdc-card__media" >
                                                    <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                        <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                    </div>
                                                </section>
                                                <section class="bulletin-text">
                                                    <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                    <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                    <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                                </section>
                                            </div>
                                        @else
                                            <div class="rest bulletin mdc-card">    
                                                <section class="uk-inline uk-cover-container mdc-card__media" >
                                                    <img src="{{ asset('storage/'. $post->image) }}" alt="" uk-cover>
                                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                                        <p class="sub-category mdc-card__primary-action"><a href="">{{ $post->category->name }}</a></p>
                                                    </div>
                                                </section>
                                                <section class="bulletin-text">
                                                    <p class="headline" ><a href="{{ $post->slugifiedURL() }}">{{ substr($post->title, 0, 60)}}{{ strlen($post->title) > 60 ? "...":""}}</a></p>
                                                    <p class="metadata"><a href="#">{{ $post->admin->name }}</a><span class="date"> - <a href="#">{{ date('M j, Y', strtotime( $post->updated_at )) }}</a></span></p>
                                                    <p class="bulletin-article" >{{ substr($post->content, 0, 150)}}{{ strlen($post->content) > 150 ? "...":""}}</p>
                                                </section>
                                            </div>
                                        @endif
                                        
                                    @endforeach
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>


</div>
@endsection
