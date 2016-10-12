@extends('layout.detalle')

@section('categorias')
    {{$nombrePagina}}
@stop

@section('titulo')
    <h1>{{$post->nombre}}</h1>
@stop

@section('ingredientes')
    <h4>{{$post->ingredientes}}</h4>
@stop

@section('preparacion')
    <h4>{{$post->preparacion}}</h4>
@stop

@section('region')
    <h5>{{$post->region}}</h5>
@stop()

