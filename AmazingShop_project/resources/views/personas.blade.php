@extends('adminlte::page')

@section('content_header')  
<h1>Personas</h1>
@stop

@section('content') 
<div clas = 'card'>
  <div class="card-header">
    <a class='btn btn-primary'>Datos de Persona</a>   
  </div>
  </div>

<table id='persona'  class="table table-striped">
    <thead class= "bg-dark text-light">
      <tr>
              <td>Codigo de Persona</td>
              <td>Codigo de Usuario</td>
              <td>Nombre</td>
              <td>Identidad</td>
              <td>Edad</td>
              <td>Fecha de Nacimiento</td>
              <td>Sexo</td>
              <td>Estado Civil</td>
              
      </tr>      
  </thead>
        <tbody>
             
                @foreach($ResulPersona as $Persona) 
                         <tr>
                            <td class="inner-table"> {{$Persona["Cod_Persona"]}}</td>
                            <td class="inner-table"> {{$Persona["Cod_usuario"]}}</td>
                            <td class="inner-table"> {{$Persona["NombreP"]}}</td>
                            <td class="inner-table"> {{$Persona["Identidad"]}}</td>
                            <td class="inner-table"> {{$Persona["edad"]}}</td>
                            <td class="inner-table"> {{$Persona["fech_nacim"]}}</td>
                            <td class="inner-table"> {{$Persona["sexo"]}}</td>  
                            <td class="inner-table"> {{$Persona["est_civil"]}}</td> 
                            <td button type ="button" class="btn btn-success">Editar</td>   
                          </tr>           
                @endforeach  
        </tbody>
  </table>
</div>
</div>
</body>

@endsection

@section('css')
<link rel= "stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection

@section ('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script >


$(document).ready(function () {
    $('Codigo de Persona').DataTable({
           "language":{

            "Search"    :  "Buscar",
            "lengthMenu": "Mostrar _MENU_ Registros Por Página",
            "info":       "Mostrando pagina _PAGE_ de _PAGE_ ",

             "paginate":   {
                         "previous" : "Anterior",
                         "next":        "Siguiente"
                           }

           }

    });
});
</script>
@endsection


  