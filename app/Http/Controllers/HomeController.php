<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        var_dump(Auth::check());

        return Auth::user()->password;
//
//        $name = Auth::user()->name;
//        return  'Hello ' . $name;

        return view('home');
    }
}
