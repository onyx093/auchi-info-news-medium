@extends('layouts.app')

@section('content')

<div class="uk-full-width-container">
    <div class="uk-container">
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li><span>The marketplace</span></li>
        </ul>
    </div>

    <div class="uk-container advert-wrapper">
        <ul uk-tab>
            <li class="uk-width-1-3" ><a href="#">Services</a></li>
            <li class="uk-width-1-3" ><a href="#">Requests</a></li>
            <li class="uk-width-1-3" ><a href="#">Business Directories</a></li>
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

        <button class="mdc-fab mdc-fab--absolute" aria-label="Favorite" uk-toggle="target: #modal-marketplace">
            <span class="mdc-fab__icon material-icons">add</span>
        </button>

        <div id="modal-marketplace" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="uk-modal-header">
                    <h2 class="uk-modal-title mdc-typography--headline5">Add an advert on the marketplace</h2>
                </div>
                <div class="uk-modal-body" uk-overflow-auto>
                    <ul class="uk-subnav uk-subnav-pill uk-flex uk-flex-center" uk-switcher>
                        <li><a href="#">Add a service</a></li>
                        <li><a href="#">Add a request</a></li>
                    </ul>
                    
                    <ul class="uk-switcher uk-margin uk-flex uk-flex-center uk-tile-muted">
                        <li id="service-application-form" >
                            <div>
                                <form method="POST" action="{{ route('login') }}" >
                                    @csrf
                                    <div class="mdc-text-field mdc-text-field--fullwidth">
                                        <input type="text" id="title-text-field" name="title" class="mdc-text-field__input" aria-controls="title-helper-text"
                                        aria-describedby="title-helper-text">
                                        <label class="mdc-floating-label" for="title-text-field">Title</label>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="title-helper-text" class="mdc-text-field-helper-text">This will appear at the top of the advert card.</div>
                                    </div>
                        
                                    <br>

                                    <div class="js-upload uk-placeholder uk-text-center">
                                        <span uk-icon="icon: cloud-upload"></span>
                                        <span class="uk-text-middle">Select an image or group of images</span>
                                        <div uk-form-custom>
                                            <input type="file" multiple>
                                            <span class="uk-link">selecting one</span>
                                        </div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="title-helper-text" class="mdc-text-field-helper-text">This will serve as a graphic illustration for your advert.</div>
                                    </div>
                                    
                                    <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>

                                    <br>

                                    <div class="mdc-text-field mdc-text-field--fullwidth">
                                        <input type="text" id="business-name-text-field" name="business-name" class="mdc-text-field__input" aria-controls="business-name-helper-text"
                                        aria-describedby="business-name-helper-text">
                                        <label class="mdc-floating-label" for="business-name-text-field">Name of venture</label>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="business-name-helper-text" class="mdc-text-field-helper-text">Tell us the name of the business.</div>
                                    </div>

                                    <br>

                                    <div class="mdc-text-field mdc-text-field--fullwidth mdc-text-field--textarea">
                                        <textarea id="description-text-field" name="description" class="mdc-text-field__input" rows="8" cols="40" aria-controls="description-helper-text"
                                        aria-describedby="description-helper-text"></textarea></textarea>
                                        <div class="mdc-notched-outline">
                                            <div class="mdc-notched-outline__leading"></div>
                                            <div class="mdc-notched-outline__notch">
                                            <label for="textarea" class="mdc-floating-label">Description</label>
                                            </div>
                                            <div class="mdc-notched-outline__trailing"></div>
                                        </div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="description-helper-text" class="mdc-text-field-helper-text">Tell us more about what your business offer.</div>
                                    </div>

                                    <br>

                                    <div class="mdc-text-field mdc-text-field--fullwidth">
                                        <input type="text" id="address-text-field" name="address" class="mdc-text-field__input" aria-controls="address-helper-text"
                                        aria-describedby="address-helper-text">
                                        <label class="mdc-floating-label" for="address-text-field">Contact address</label>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="address-helper-text" class="mdc-text-field-helper-text">Help us with your contact address.</div>
                                    </div>

                                    {{-- <div class="mdc-form-field">
                                        <label for="my-checkbox">This is my checkbox</label>
                                        <div class="mdc-select mdc-select--outlined">
                                            <select name="State" id="1">
                                                    <option value="1" id="1">Select state</option>
                                                <option class="mdc-select" value="2" id="2">Abia</option>
                                                <option value="3" id="3">Adamawa</option>
                                                <option value="4" id="4">Akwa Ibom</option>
                                                <option value="5" id="5">Anambra</option>
                                                <option value="6" id="6">Bauchi</option>
                                            </select>
                                        </div>
                                    </div> --}}

                                    <div class="mdc-text-field mdc-text-field--fullwidth">
                                        <input type="text" id="contact-text-field" name="contact" class="mdc-text-field__input" aria-controls="contact-helper-text"
                                        aria-describedby="contact-helper-text">
                                        <label class="mdc-floating-label" for="contact-text-field">Phone address</label>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="contact-helper-text" class="mdc-text-field-helper-text">How can we reach you when out of proximity.</div>
                                    </div>
                        
                                    <button class="mdc-button mdc-button--raised uk-align-center">
                                        <!-- <i class="material-icons mdc-button__icon" aria-hidden="true">favorite</i> -->
                                        <span class="mdc-button__label">Submit</span>
                                    </button>
                        
                                </form>
                            </div>
                        </li>
                        <li id="request-application-form" >
                            <div>
                                <form method="POST" action="{{ route('login') }}" >
                                    @csrf
                                    <div class="mdc-text-field mdc-text-field--fullwidth">
                                        <input type="text" id="title-text-field" name="title" class="mdc-text-field__input" aria-controls="title-helper-text"
                                        aria-describedby="title-helper-text">
                                        <label class="mdc-floating-label" for="title-text-field">Title</label>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="title-helper-text" class="mdc-text-field-helper-text">This will appear at the top of the advert card.</div>
                                    </div>
                        
                                    <br>

                                    <div class="mdc-text-field mdc-text-field--fullwidth">
                                        <input type="text" id="subtitle-text-field" name="subtitle" class="mdc-text-field__input" aria-controls="subtitle-helper-text"
                                        aria-describedby="subtitle-helper-text">
                                        <label class="mdc-floating-label" for="subtitle-text-field">Subtitle</label>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="subtitle-helper-text" class="mdc-text-field-helper-text">This will appear at the top of the advert card.</div>
                                    </div>
                        
                                    <br>

                                    <div class="mdc-text-field mdc-text-field--fullwidth">
                                        <input type="text" id="location-text-field" name="location" class="mdc-text-field__input" aria-controls="location-helper-text"
                                        aria-describedby="location-helper-text">
                                        <label class="mdc-floating-label" for="location-text-field">Location of interest</label>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="location-helper-text" class="mdc-text-field-helper-text">Tell us your location for interested services.</div>
                                    </div>

                                    <br>

                                    <div class="mdc-text-field mdc-text-field--fullwidth">
                                        <input type="text" id="duration-text-field" name="duration" class="mdc-text-field__input" aria-controls="duration-helper-text"
                                        aria-describedby="duration-helper-text">
                                        <label class="mdc-floating-label" for="duration-text-field">Duration for the request</label>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="duration-helper-text" class="mdc-text-field-helper-text">Tell us how long the request should last.</div>
                                    </div>

                                    <br>

                                    {{-- <div class="mdc-text-field mdc-text-field--fullwidth">
                                        <input type="text" id="address-text-field" name="address" class="mdc-text-field__input" aria-controls="address-helper-text"
                                        aria-describedby="address-helper-text">
                                        <label class="mdc-floating-label" for="address-text-field">Contact address</label>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="address-helper-text" class="mdc-text-field-helper-text">Help us with your contact address.</div>
                                    </div>

                                    <div class="mdc-text-field mdc-text-field--fullwidth">
                                        <input type="text" id="contact-text-field" name="contact" class="mdc-text-field__input" aria-controls="contact-helper-text"
                                        aria-describedby="contact-helper-text">
                                        <label class="mdc-floating-label" for="contact-text-field">Phone address</label>
                                        <div class="mdc-line-ripple"></div>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="contact-helper-text" class="mdc-text-field-helper-text">How can we reach you when out of proximity.</div>
                                    </div>--}}
                        
                                    <button class="mdc-button mdc-button--raised uk-align-center">
                                        <!-- <i class="material-icons mdc-button__icon" aria-hidden="true">favorite</i> -->
                                        <span class="mdc-button__label">Submit</span>
                                    </button>
                        
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- <div class="uk-modal-footer uk-text-right">
                    <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                    <button class="uk-button uk-button-primary" type="button">Save</button>
                </div> --}}
            </div>
        </div>
    </div>

</div>

@endsection