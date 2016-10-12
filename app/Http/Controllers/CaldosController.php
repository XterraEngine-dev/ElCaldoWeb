<?php

namespace App\Http\Controllers;

use App\Detalle;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Caldos;

class CaldosController extends Controller
{
    public function index()
    {

        $posts = Caldos::all();

        return view('caldos', ['posts' => $posts] );


    }
    public function show($id){

        $post = Caldos::findOrFail($id);
        $nombrePagina = 'Caldos';
        return view('cdetalle',['post'=>$post],['nombrePagina'=>$nombrePagina]);
    }
}
