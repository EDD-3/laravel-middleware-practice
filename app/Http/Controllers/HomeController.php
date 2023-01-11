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
        // $request->session()->put(['edwin'=>'master instructor']);
        
        //Deleting session
        // $request->session()->forget('edwin2');

        //Deleting every session
        // $request->session()->flush();

        //Access session
        // return $request->session()->all();

        // session(['edwin2'=>'your teacher']);

        // return session('edwin2');
        


        // return view('home');

        //Flashing session
        // $request->session()->flash('message','Post has been created');
        // return $request->session()->get('message');

        //Keep flash data
        $request->session->reflash();

        $request->session()->keep('message');
    }
}
