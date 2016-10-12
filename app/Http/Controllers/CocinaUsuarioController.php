<?php

namespace App\Http\Controllers;

use App\CocinaUsuario;
use Illuminate\Http\Request;

use App\Http\Requests;

class CocinaUsuarioController extends Controller
{
    public function index()
    {

        $posts = CocinaUsuario::all();

        return view('cocinaUsuario', ['posts' => $posts]);


    }
    public function show($id){

        $post = CocinaUsuario::findOrFail($id);
        $nombrePagina = 'Timeline';
        return view('udetalle',['post'=>$post],['nombrePagina'=>$nombrePagina]);
    }
}
