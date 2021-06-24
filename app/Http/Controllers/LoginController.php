<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{
    public function loginView()
    {

        return view('includes.login');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:pet_owner')->except('logout');
        $this->middleware('guest:funder')->except('logout');
    }

    public function authLogin(Request $request)
    {
        //    return $request->all();
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        if ($request['login_as'] == 'pet_owner') {
            if (Auth::guard('pet_owner')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

                return redirect()->to('/');
            }
            return back()->withInput($request->only('email', 'remember'));
        } else {
            if (Auth::guard('funder')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

                return redirect()->to('/');
            }
            return back()->withInput($request->only('email', 'remember'));
        }
    }

    public function logout(Request $request)
    {
        if (Auth::guard('pet_owner')->check()) {
            Auth::guard('pet_owner')->logout();
        } elseif (Auth::guard('funder')->check()) {
            Auth::guard('funder')->logout();
        }

        return redirect()->back();
    }
}
