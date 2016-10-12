@extends('layout.detalle')

@section('categorias')
    {{$nombrePagina}}
@stop

@section('titulo')
    <h1>{{$post->nombre}}</h1>
@stop

@section('ingredientes')
@stop

@section('preparacion')
    <h4>{{$post->preparacion}}</h4>
@stop

@section('region')
    <h5>{{$post->region}}</h5>
@stop()

