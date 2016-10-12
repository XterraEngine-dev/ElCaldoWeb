<?php

namespace App\Http\Controllers;

use App\Postres;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostresController extends Controller
{
    public function index()
    {

        $posts = Postres::all();

        return view('postres', ['posts' => $posts]);


    }
    public function show($id){

        $post = Postres::findOrFail($id);
        $nombrePagina = 'postres';
        return view('pdetalle',['post'=>$post],['nombrePagina'=>$nombrePagina]);
    }
}
