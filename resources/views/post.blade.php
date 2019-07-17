@extends('layouts.app')

@section('content')

<div class="uk-full-width-container">

    <div class="uk-container">
        <ul class="uk-breadcrumb">
            <li><a href="">Home</a></li>
            <li><a href="">News</a></li>
            <li><span>This is a new post</span></li>
        </ul>
    </div>

    <div class="uk-container">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-8">
                    <div class="post">
                        <section class="post-header">
                            <p class="mdc-typography--headline3 headline" >Auchi Info website makes an epic comeback</p>
                            <p class="metadata"><a href="#">Ahmed Sylvanus</a><span class="date"> - <a href="#">Jun 22, 2019</a></span></p>
                        </section>
                        <article class="post-content">
                            <img data-src="{{ asset('img/photo1.jpg') }}" width="1800" height="1200" alt="" uk-img>
                            <p class="mdc-typography--body1 uk-dropcap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus! Expedita ipsum saepe incidunt dicta fuga aliquam unde in?Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus! Expedita ipsum saepe incidunt dicta fuga aliquam unde in?</p>
                            <p class="mdc-typography--headline6">Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus!</p>
                            <p class="mdc-typography--body1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus! Expedita ipsum saepe incidunt dicta fuga aliquam unde in?</p>
                            <p class="mdc-typography--body1">Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus!</p>
                            <img data-src="{{ asset('img/photo3.jpg') }}" width="1800" height="1200" alt="" uk-img>
                            <p class="mdc-typography--headline6">Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus!</p>
                            <p class="mdc-typography--body1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus! Expedita ipsum saepe incidunt dicta fuga aliquam unde in?</p>
                            <p class="mdc-typography--body1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus! Expedita ipsum saepe incidunt dicta fuga aliquam unde in?</p>
                            <ul class="uk-list">
                                <li><i class="material-icons" >keyboard_arrow_right</i>List item 1</li>
                                <li><i class="material-icons" >keyboard_arrow_right</i>List item 2</li>
                                <li><i class="material-icons" >keyboard_arrow_right</i>List item 3</li>
                            </ul>
                            <p class="mdc-typography--body1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus! Expedita ipsum saepe incidunt dicta fuga aliquam unde in?</p>
                            <p class="mdc-typography--headline4 uk-text-center">Impedit cumque, dolorum earum voluptates ea quia voluptatibus!</p>
                            <p class="mdc-typography--body1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus! Expedita ipsum saepe incidunt dicta fuga aliquam unde in?</p>
                            <p class="mdc-typography--body1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus! Expedita ipsum saepe incidunt dicta fuga aliquam unde in?</p>
                            <div class="uk-panel">
                                <img class="uk-align-left uk-margin-remove-adjacent" src="{{ asset('img/photo1.jpg') }}" width="375" height="250" alt="Example image">
                                <p class="mdc-typography--body1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus! Expedita ipsum saepe incidunt dicta fuga aliquam unde in?</p>
                                <p class="mdc-typography--body1">Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus!</p>
                                <p class="mdc-typography--body1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus! Expedita ipsum saepe incidunt dicta fuga aliquam unde in?</p>
                                <p class="mdc-typography--headline6">Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus!</p>
                                <p class="mdc-typography--body1">Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus!</p>
                                <p class="mdc-typography--body1">Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus!</p>
                                <p class="mdc-typography--headline4 uk-text-center">Impedit cumque, dolorum earum voluptates ea quia voluptatibus!</p>
                                <p class="mdc-typography--body1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus! Expedita ipsum saepe incidunt dicta fuga aliquam unde in?</p>
                                <img data-src="{{ asset('img/photo6.jpg') }}" width="1800" height="1200" alt="" uk-img>
                                <p class="mdc-typography--body1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque, fuga ab assumenda dolores dolorum obcaecati earum voluptates ea quia voluptatibus! Expedita ipsum saepe incidunt dicta fuga aliquam unde in?</p>
                                <p class="mdc-typography--headline6">Impedit cumque, fuga ab assumenda dolores:</p>
                                <ul class="uk-list uk-list-bullet">
                                    <li>List item 1</li>
                                    <li>List item 2</li>
                                    <li>List item 3</li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell--span-4">
                    <ul>
                        <li>
                            <div class="grid-block grid-block1on1">
                                <div class="rest bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="{{ asset('img/photo1.jpg') }}" alt="" uk-cover>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                            <p class="sub-category mdc-card__primary-action"><a href="#">Gadgets</a></p>
                                        </div>
                                    </section>
                                    <section class="bulletin-text">
                                        <p class="headline" ><a href="#">Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                        <p class="metadata"><a href="#">Ahmed Sylvanus</a><span class="date"> - <a href="#">Jun 22, 2019</a></span></p>
                                        <p class="bulletin-article" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci cupiditate temporibus molestiae cumque fugiat molestias soluta nulla in esse quisquam unde consequuntur a ducimus enim odit, voluptates non ab illo?</p>
                                    </section>
                                </div>
                                <div class="rest bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="{{ asset('img/photo1.jpg') }}" alt="" uk-cover>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                            <p class="sub-category mdc-card__primary-action"><a href="#">Gadgets</a></p>
                                        </div>
                                    </section>
                                    <section class="bulletin-text">
                                        <p class="headline" ><a href="#">Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                        <p class="metadata"><a href="#">Ahmed Sylvanus</a><span class="date"> - <a href="#">Jun 22, 2019</a></span></p>
                                        <p class="bulletin-article" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci cupiditate temporibus molestiae cumque fugiat molestias soluta nulla in esse quisquam unde consequuntur a ducimus enim odit, voluptates non ab illo?</p>
                                    </section>
                                </div>
                                <div class="rest bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="{{ asset('img/photo1.jpg') }}" alt="" uk-cover>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                            <p class="sub-category mdc-card__primary-action"><a href="#">Gadgets</a></p>
                                        </div>
                                    </section>
                                    <section class="bulletin-text">
                                        <p class="headline" ><a href="#">Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                                        <p class="metadata"><a href="#">Ahmed Sylvanus</a><span class="date"> - <a href="#">Jun 22, 2019</a></span></p>
                                        <p class="bulletin-article" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci cupiditate temporibus molestiae cumque fugiat molestias soluta nulla in esse quisquam unde consequuntur a ducimus enim odit, voluptates non ab illo?</p>
                                    </section>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection