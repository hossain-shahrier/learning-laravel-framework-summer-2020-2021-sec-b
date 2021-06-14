<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    //
    public function index()
    {
        return view('login.index');
    }
    public function verify(Request $request)
    {


        if ($request->uname == $request->password) {
            $request->session()->put('uname', $request->uname);
        } else {
            $request->session()->flash('msg', 'invaild username or password');
            return redirect('/login');
        }
    }
}
