<?php

namespace App\Http\Controllers;

use App\Bebidas;
use Illuminate\Http\Request;

use App\Http\Requests;

class BebidasController extends Controller
{
    public function index()
    {

        $posts = Bebidas::all();

        return view('bebidas', ['posts' => $posts]);


    }
    public function show($id){

        $post = Bebidas::findOrFail($id);
        $nombrePagina = 'bebidas';
        return view('bdetalle',['post'=>$post],['nombrePagina'=>$nombrePagina]);
    }
}
