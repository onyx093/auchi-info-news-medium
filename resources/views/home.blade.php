@extends('layouts.app')

@section('content')
<div class="uk-container">
    {{-- <div class="mdc-typography--headline4">Dashboard</div> --}}

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
                                <div class="first bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="img/photo1.jpg" alt="" uk-cover>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom-left">
                                            <p class="sub-category mdc-card__primary-action"><a href="{{ route('post') }}">Gadgets</a></p>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                        <li>
                            <div class="grid-block grid-block1on2">
                                <div class="first bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="img/photo2.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                        <li>
                            <div class="grid-block grid-block1on2">
                                <div class="first bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="img/photo3.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                        <li>
                            <div class="grid-block grid-block1on2">
                                <div class="first bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="img/photo4.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                        <li>
                            <div class="grid-block grid-block1on2">
                                <div class="first bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="img/photo5.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                <div class="first bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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

    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell--span-12">
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
                            <div class="grid-block grid-block1on3">
                                <div class="first bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                        <li>
                            <div class="grid-block grid-block1on3">
                                <div class="first bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                        <li>
                            <div class="grid-block grid-block1on3">
                                <div class="first bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                        <li>
                            <div class="grid-block grid-block1on3">
                                <div class="first bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                        <li>
                            <div class="grid-block grid-block1on3">
                                <div class="first bulletin mdc-card">    
                                    <section class="uk-inline uk-cover-container mdc-card__media" >
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
                                        <img src="img/photo1.jpg" alt="" uk-cover>
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
