<?php

namespace App\Http\Controllers;

use App\Caldos;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
   public function show($id){

       $post = Caldos::findOrFail($id);

       return view('cdetalle',['post'=>$post]);
   }
}
