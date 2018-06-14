<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Persona;

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
       /*
        $per=persona::All();
*/

        $per=DB::table("personas")
            ->join('categorias', 'personas.categoria_id', '=', 'categorias.id')
            ->get();
        return view('home',compact('per')); 
    }
}
