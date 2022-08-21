@extends('adminlte::page')

@section('content_header')  
<h1>Agregar una nueva estadistica</h1>
@stop

@section('content') 
<form>
    <div class="card-body">
    <div class="form-group">
    <label for="exampleInputEmail1">Codigo Usuario</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el codigo">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre Nombre</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el nombre">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Fecha Inicio </label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese la fecha de inicio">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Fecha Final </label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese la fecha final">
                </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Tipo  Reporte </label>
    <input type="" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el tipo de reporte">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Correo </label>
        <input type="" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el correo">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Usuario registro </label>
            <input type="" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el nombre del usuario">
            </div>


        <div class="form-group">
            <label for="exampleInputPassword1">Tipo Formato </label>
            <input type="" class="form-control" id="exampleInputPassword1" placeholder="PDF, excel,">
            </div>
    
    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    </form>
@endsection