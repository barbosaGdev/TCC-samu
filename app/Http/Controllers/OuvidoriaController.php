<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Feedback;

class OuvidoriaController extends Controller
{
    public function ouvidoria()
    {
        return view('feedback');    
    }

    public function sobre()
    {
        return view('about');    
    }

    public function saveFeedback(Request $request)
    {
        
        $feedback = new Feedback();   
    
        $feedback->nome = $request->nome;
        $feedback->telefone = $request->telefone;
        $feedback->email = $request->email;
        $feedback->texto = substr($request->texto,20,"<br />\n"); 
        
        
         $feedback->save();
        
        return redirect('/');
        
        
    }
    
}
