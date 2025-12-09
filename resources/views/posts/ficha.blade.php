@extends('plantilla')

@section('titulo', 'Ficha post')

@section('contenido')
    <h1>Ficha del post {{ $id }}</h1>
    <p>Açò és la informació del post amb id {{ $id }}.</p>
@endsection

