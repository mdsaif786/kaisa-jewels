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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {   
        return view('client.home');
    }

    public function redirect()
    {
        if (auth()->user()->is_admin) {

            return redirect()->route('admin.home')->with('status', session('status'));
        }else {
            return redirect('/dashboard');
        }
        
    }
}
