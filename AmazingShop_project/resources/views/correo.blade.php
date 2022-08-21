@extends('adminlte::page')

@section('content_header')  
<h1>Correo</h1>
@stop

@section('content') 
<div clas = 'card'>
  <div class="card-header">
    <a class='btn btn-primary'>Datos de Correo</a>   
  </div>
  </div>

<table id='persona'  class="table table-striped">
    <thead class= "bg-dark text-light">
      <tr>
              <td>Codigo de Correo</td>
              <td>Codigo de Persona</td>
              <td>Email 1</td>
              <td>Email 2</td>
              
      </tr>      
  </thead>
        <tbody>
             
                @foreach($ResulCorreo as $Correo) 
                         <tr>
                            <td class="inner-table"> {{$Correo["Cod_email"]}}</td>
                            <td class="inner-table"> {{$Correo["Cod_Persona"]}}</td>
                            <td class="inner-table"> {{$Correo["email_1"]}}</td>
                            <td class="inner-table"> {{$Correo["email_2"]}}</td>
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
    $('Codigo de Correo').DataTable({
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


  