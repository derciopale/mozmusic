<?php

namespace App\Http\Controllers;
use App\Musica;
use Illuminate\Http\Request;

class PrincipalController extends Controller{
    
    public function home(){
        $data = Musica::latest()->paginate(5);
        
        return view('principal', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    
}

public function mostrar($id)
{
    $data = Musica::findOrFail($id);
    return view('musica.comprar', compact('data'));
   

    
}

}
