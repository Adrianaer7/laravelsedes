<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class PersonaController extends Controller
{
    public function registro(){
    	$cat=Categoria::All();
    	return view('registro',compact('cat'));

    }
}
