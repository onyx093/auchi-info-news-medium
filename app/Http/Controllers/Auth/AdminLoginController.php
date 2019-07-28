<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    //
    public function showLoginForm()
    {

        return view('admin.auth.admin-login');

    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt([ 'email' => $request->email, 'password' => $request->password ], $request->remember)) {
            // If successful, then redirect to the intended location
            return redirect()->intended(route('admin.dashboard'));
        }

        // If not successful, the redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));

    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}