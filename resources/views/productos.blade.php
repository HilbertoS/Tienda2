@extends('layouts.header')

@section('contenido')


<div class="container d-flex align-items-center mw-100 p-5 flex-wrap">
    
  @foreach ($productos as $producto)
    
      <x-list-producto :imagen="$producto->imagen" :nombre="$producto->nombre" :precio="$producto->precio" :descripcion="$producto->descripcion" />
    
  @endforeach

</div>


@endsection