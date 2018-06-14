<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\User;
use App\Persona;


class PrincipalController extends Controller
{
    public function selectcategoria(){
    	
    	$cat=categoria::pluck('descripcion','id');
    	return view ('registro', compact('cat'));
    }

    public function agregar (Request $request){

   	$personas= new Persona;

    $personas-> dni= $request->dni;
    $personas-> nombre= $request->nombre;
    $personas-> apellido= $request->apellido;
    $personas-> establecimiento= $request->establecimiento;
    $personas-> email= $request->email;
    //$users-> password= bcrypt($request->password);
    $personas->save();

  }



}
