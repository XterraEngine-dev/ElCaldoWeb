<?php

namespace App\Http\Controllers;

use App\Tamales;
use Illuminate\Http\Request;

use App\Http\Requests;

class TamalesController extends Controller
{
    public function index()
    {

        $posts = Tamales::all();

        return view('tamales', ['posts' => $posts]);


    }
    public function show($id){

        $post = Tamales::findOrFail($id);
        $nombrePagina = 'postres';
        return view('tdetalle',['post'=>$post],['nombrePagina'=>$nombrePagina]);
    }
}
