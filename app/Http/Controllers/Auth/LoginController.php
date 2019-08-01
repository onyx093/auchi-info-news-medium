<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use App\Post;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'userLogout']);
    }

    public function showLoginForm()
    {
        $choice = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        $mostViewed = Post::orderBy('updated_at', 'desc')->inRandomOrder()->take(3)->get();
        return view('auth.login', compact('choice', 'mostViewed'));
    }

    public function userLogout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
