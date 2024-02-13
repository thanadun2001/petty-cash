<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewsHome()
    {
        return view('home',["msg" => "I am views role"]);
    }

    public function userHome()
    {
        return view('home',["msg" => "I am user role"]);
        
    }

    public function adminle1Home()
    {
        return view('home',["msg" => "I am Adminle1 role"]);
    }

    public function adminle2Home()
    {
        return view('home',["msg" => "I am Adminle2 role"]);
    }
}
