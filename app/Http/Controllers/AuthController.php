<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::check()) {
                return Redirect::to('/admin/dashboard');
            }
            return $next($request);
        });
    }

    public function login()
    {
        return view('admin.login.index');
    }

    public function loginCheck(Request $request)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->intended('/admin/dashboard');
        }

        return Redirect::to('/login')
            ->with('failed', 'Email or password is wrong.')
            ->withInput();

    }

}
