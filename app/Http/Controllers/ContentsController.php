<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function newpost()
    {
        return view('post');
    }

    public function business()
    {
        return view('business');
    }

    public function politics()
    {
        return view('politics');
    }

    public function health()
    {
        return view('health');
    }

    public function arts()
    {
        return view('arts');
    }

    public function religion()
    {
        return view('religion');
    }

    public function editorial()
    {
        return view('editorial');
    }

    public function opinions()
    {
        return view('opinions');
    }

    public function environment()
    {
        return view('environment');
    }

    public function sports()
    {
        return view('sports');
    }

    public function about()
    {
        return view('about');
    }

    public function terms()
    {
        return view('terms');
    }

    public function policy()
    {
        return view('policy');
    }

    public function advert()
    {
        return view('advert');
    }

    public function directory()
    {
        return view('directory');
    }

    public function ireport()
    {
        return view('ireport');
    }

    public function writeforus()
    {
        return view('writeforus');
    }
    public function marketplace()
    {
        return view('marketplace');
    }
}
