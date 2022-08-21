@extends('adminlte::page')

@section('content_header')  
<h1>Agregar un nuevo reporte</h1>
@stop

@section('content') 
<form>
    <div class="card-body">
    <div class="form-group">
    <label for="exampleInputEmail1">Codigo Usuario</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el codigo">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre usuario</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el nombre">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tipo Reporte</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el reporte">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Perido</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el perido">
                </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Fecha Inicial </label>
    <input type="" class="form-control" id="exampleInputPassword1" placeholder="Fecha inicial">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Fecha Final </label>
        <input type="" class="form-control" id="exampleInputPassword1" placeholder="Fecha final">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Tipo Formato </label>
            <input type="" class="form-control" id="exampleInputPassword1" placeholder="PDF, excel,">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Correo </label>
                <input type="" class="form-control" id="exampleInputPassword1" placeholder="ingrese el correo">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Tipo Correo </label>
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder="ingrese tipo correo">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Fecha registro </label>
                        <input type="" class="form-control" id="exampleInputPassword1" placeholder="Ingrese la fecha de registro">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Usuario registro </label>
                            <input type="" class="form-control" id="exampleInputPassword1" placeholder="Ingrese el nombre del usuario">
                            </div>
    
    <div class="card-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    </form>
@endsection