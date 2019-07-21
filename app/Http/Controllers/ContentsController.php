<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    //
    public function index()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('home', [ 'ip_location' => $arr_ip ]);
    }

    public function newpost()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('post', [ 'ip_location' => $arr_ip ]);
    }

    public function business()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('business', [ 'ip_location' => $arr_ip ]);
    }

    public function politics()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('politics', [ 'ip_location' => $arr_ip ]);
    }

    public function health()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('health', [ 'ip_location' => $arr_ip ]);
    }

    public function arts()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('arts', [ 'ip_location' => $arr_ip ]);
    }

    public function religion()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('religion', [ 'ip_location' => $arr_ip ]);
    }

    public function editorial()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('editorial', [ 'ip_location' => $arr_ip ]);
    }

    public function opinions()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('opinions', [ 'ip_location' => $arr_ip ]);
    }

    public function environment()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('environment', [ 'ip_location' => $arr_ip ]);
    }

    public function sports()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('sports', [ 'ip_location' => $arr_ip ]);
    }

    public function about()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('about', [ 'ip_location' => $arr_ip ]);
    }

    public function terms()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('terms', [ 'ip_location' => $arr_ip ]);
    }

    public function policy()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('policy', [ 'ip_location' => $arr_ip ]);
    }

    public function advert()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('advert', [ 'ip_location' => $arr_ip ]);
    }

    public function directory()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('directory', [ 'ip_location' => $arr_ip ]);
    }

    public function ireport()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('ireport', [ 'ip_location' => $arr_ip ]);
    }

    public function writeforus()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('writeforus', [ 'ip_location' => $arr_ip ]);
    }
    public function marketplace()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        return view('marketplace', [ 'ip_location' => $arr_ip ]);
    }
}
