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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Setting session globally
        //session(['peter'=>'student']);
        //Setting session locally
        $request->session()->put(['edwin'=>'master instructor']);
        
        //Access session
        return $request->session()->all();



        // return view('home');
    }
}
