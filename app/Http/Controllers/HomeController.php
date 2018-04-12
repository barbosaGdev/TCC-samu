<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Feedback;

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
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        return view('admin');
    }

    public function ouvidoria()
    {
        $dados = Feedback::all();

        return view('ouvidoriaAdmin', compact('dados'));
    }
   
    
    


    

  
    
}
