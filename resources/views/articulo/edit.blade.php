@extends('layouts.plantillaBase');

@section('contenido');
    <h2>Editar</h2>
    <form action="/articulos/{{$articulo->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3"></div>
        <label for="" class="form-label">Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}">

        <div class="mb-3"></div>
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}">

        <div class="mb-3"></div>
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}">

        <div class="mb-3"></div>
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" value="0.0" class="form-control" value="{{$articulo->precio}}">

        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@endsection