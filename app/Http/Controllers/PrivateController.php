<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateController extends Controller
{

    // inside contructor we are saying laravel, to protect this cont

    /*
     * inside constructor we are saying laravel to protect
     * this controller with 'auth' middleware.
     *
     * 'auth' middleware is redirecting every not authenticated user to login page.
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return 'This is private';
    }
}
