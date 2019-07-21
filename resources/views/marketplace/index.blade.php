@extends('layouts.app')

@section('content')

<div class="uk-full-width-container">
    <div class="uk-container">
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li><span>The marketplace</span></li>
        </ul>
    </div>

    <div class="uk-container">
        <ul uk-tab>
            <li class="uk-width-1-3" ><a href="#">Services</a></li>
            <li class="uk-width-1-3" ><a href="#">Seekers</a></li>
            <li class="uk-width-1-3" ><a href="#">Business Directory</a></li>
        </ul>
        
        <ul class="uk-switcher uk-margin">
            <li>
                <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell--span-12">
        
                            <div class="uk-grid-small uk-child-width-1-4@m uk-child-width-1-2@s uk-text-center advert-cards" uk-grid>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo8.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-card-title uk-margin-remove-bottom mdc-typography--subtitle1 uk-text-left uk-text-bold">3 bedroom flat available for rent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('img/photo2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-card-footer uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo8.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-card-title uk-margin-remove-bottom mdc-typography--subtitle1 uk-text-left uk-text-bold">3 bedroom flat available for rent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('img/photo1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-card-footer uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo8.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-card-title uk-margin-remove-bottom mdc-typography--subtitle1 uk-text-left uk-text-bold">3 bedroom flat available for rent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('img/photo5.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-card-footer uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo8.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-card-title uk-margin-remove-bottom mdc-typography--subtitle1 uk-text-left uk-text-bold">3 bedroom flat available for rent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('img/photo4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-card-footer uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo8.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-card-title uk-margin-remove-bottom mdc-typography--subtitle1 uk-text-left uk-text-bold">3 bedroom flat available for rent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('img/photo8.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-card-footer uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo8.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-card-title uk-margin-remove-bottom mdc-typography--subtitle1 uk-text-left uk-text-bold">3 bedroom flat available for rent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('img/photo7.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-card-footer uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                    </div>
                                </div>
                                
        
                            </div>
        
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell--span-12">
        
                            <div class="uk-grid-small uk-child-width-1-4@m uk-child-width-1-2@s uk-text-center advert-cards" uk-grid>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo9.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom">Wanted urgently: Housing</h3>
                                                    <p class="uk-text-meta uk-margin-remove-top uk-text-truncate">A self-contained apertment needed</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body uk-text-left">
                                            <p class="mdc-typography--body1 uk-text-truncate"><span class="uk-text-bold">Location:</span> Abuja</p>
                                            <p class="mdc-typography--body1 uk-text-truncate"><span class="uk-text-bold">Hours remaining:</span> 3 weeks</p>
                                            <p class="mdc-typography--body1 uk-text-truncate"><span class="uk-text-bold">Contact:</span> 07061136509</p>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="#" class="uk-button uk-button-text">Interested?</a>
                                            <p class="uk-button uk-button-text"><i class="far fa-heart"> 34</i></p>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo9.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom">Title</h3>
                                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="#" class="uk-button uk-button-text">Read more</a>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo9.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom">Title</h3>
                                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="#" class="uk-button uk-button-text">Read more</a>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo9.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom">Title</h3>
                                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="#" class="uk-button uk-button-text">Read more</a>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo9.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom">Title</h3>
                                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="#" class="uk-button uk-button-text">Read more</a>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo9.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <h3 class="uk-card-title uk-margin-remove-bottom">Title</h3>
                                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a href="#" class="uk-button uk-button-text">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                
        
                            </div>
        
                        </div>
                    </div>
                </div>
            </li>
    
            <li>
                <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell--span-12">
        
                            <div class="uk-grid-small uk-child-width-1-4@m uk-child-width-1-2@s uk-text-center advert-cards" uk-grid>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo8.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-card-title uk-margin-remove-bottom mdc-typography--subtitle1 uk-text-left uk-text-bold">3 bedroom flat available for rent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('img/photo2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-card-footer uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo8.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-card-title uk-margin-remove-bottom mdc-typography--subtitle1 uk-text-left uk-text-bold">3 bedroom flat available for rent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('img/photo1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-card-footer uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo8.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-card-title uk-margin-remove-bottom mdc-typography--subtitle1 uk-text-left uk-text-bold">3 bedroom flat available for rent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('img/photo5.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-card-footer uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo8.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-card-title uk-margin-remove-bottom mdc-typography--subtitle1 uk-text-left uk-text-bold">3 bedroom flat available for rent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('img/photo4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-card-footer uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo8.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-card-title uk-margin-remove-bottom mdc-typography--subtitle1 uk-text-left uk-text-bold">3 bedroom flat available for rent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('img/photo8.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-card-footer uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                    </div>
                                </div>
        
                                <div>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-header">
                                            <div class="uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <img class="uk-border-circle" width="40" height="40" src="{{ asset('img/photo8.jpg') }}">
                                                </div>
                                                <div class="uk-width-expand">
                                                    <p class="uk-card-title uk-margin-remove-bottom mdc-typography--subtitle1 uk-text-left uk-text-bold">3 bedroom flat available for rent.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-card-media-top">
                                                <img src="{{ asset('img/photo7.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-card-footer uk-text-left">
                                            <p class="mdc-typography--body1">Name of business: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">What we do: Sylvanus Ahmed</p>
                                            <p class="mdc-typography--body1">Address: No. 1, Fatuade Street, Okota, Lagos.</p>
                                            <p class="mdc-typography--body1">Phone number: 07061136509</p>
                                        </div>
                                    </div>
                                </div>
                                
        
                            </div>
        
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

</div>

@endsection