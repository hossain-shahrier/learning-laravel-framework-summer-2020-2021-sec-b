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
            return redirect('/home');
        } else {
            echo "Didn't match";
        }
    }
}
