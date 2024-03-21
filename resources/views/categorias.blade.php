@extends('layouts.header')

@section('contenido')

<div class="container d-flex align-items-center mw-100 p-5 flex-wrap">

    @foreach ($categorias as $categoria)
        <x-list-categoria :nombre="$categoria->nombre" :id="$categoria->id" />
    @endforeach

</div>

@endsection