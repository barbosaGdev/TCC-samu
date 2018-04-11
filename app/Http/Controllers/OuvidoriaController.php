<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OuvidoriaController extends Controller
{
    public function ouvidoria()
    {
        return view('feedback');    
    }

    public function saveFeedback(Request $request)
    {
    
        $user = new User();   
     
        $user->nome = $request->nome;
        $user->telefone = $request->telefone;
        $user->email = $request->email;
        $user->texto = $request->texto;
        
        
        $user->save();
        
        return redirect('/');
        
        
    }
}
