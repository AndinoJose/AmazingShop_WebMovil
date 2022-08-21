@extends('adminlte::page')

@section('content_header')  

@stop

@section("Pagina","Agregar una venta")

@section('content')
<div class="card">
  <h5 class="card-header">Agregar Venta Nueva</h5>
  <div class="card-body">
    <p class="card-text">
      <form action="#">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
        <label for="">Descripcion Producto</label>
        <input type="text" name="producto" class="form-control" required>
        <label for="">Codigo Producto</label>
        <input type="text" name="codproducto" class="form-control" required>
        <label for="">Cantidad</label>
        <input type="text" name="cantidad" class="form-control" required>
        <label for="">Precio (L.)</label>
        <input type="text" name="precio" class="form-control" required>
        <label for="">Fecha</label>
        <input type="date" name="fecha" class="form-control" required>
        <br>
        <a href="{{route('Ventas')}}" class="btn btn-primary" >Regresar</a>
        <button class="btn btn-success">Agregar</button>
      </form>
    </p>
    
  </div>
</div>
@endsection