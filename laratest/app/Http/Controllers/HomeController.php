<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class HomeController extends Controller
{

    public function index()
    {
        return view('home.index')->with('name', 'Shahrier')->with('id', '19-41628-3');
    }
}
