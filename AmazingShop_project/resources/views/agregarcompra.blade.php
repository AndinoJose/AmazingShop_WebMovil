@extends('adminlte::page')

@section('content_header')  

@stop

@section("Pagina","Agregar una compra")

@section('content')
<div class="card">
  <h5 class="card-header">Agregar Compra Nueva</h5>
  <div class="card-body">
    <p class="card-text">
      <form action="#">
        @csrf
        <label for="">Poducto</label>
        <input type="text" name="producto" class="form-control" required>
        <label for="">Cantidad</label>
        <input type="text" name="cantidad" class="form-control" required>
        <label for="">Precio (L.)</label>
        <input type="text" name="precio" class="form-control" required>
        <label for="">Fecha</label>
        <input type="date" name="fecha" class="form-control" required>
        <label for="">Proveedor</label>
        <input type="text" name="proveedor" class="form-control" required>
        <br>
        <a href="{{route('Compras')}}" class="btn btn-primary" >Regresar</a>
        <button class="btn btn-success">Agregar</button>
      </form>
    </p>
    
  </div>
</div>
@endsection