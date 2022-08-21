@extends('adminlte::page')

@section('content_header')  
<h1>Estadisticas</h1>
@stop

@section('content') 

<div clas = 'card'>
  <div class="card-body">
    <a href="{{ route('agregarestadistica') }}"class="btn btn-primary float-right">Agregar Estadistica</a>   

<table id='estadistica'  class="table table-striped">
    <thead class= "bg-dark text-light">
      <tr>
              <td>#Reporte</td>
              <td>Tipo Estadistica</td>
              <td>Fecha Inicial</td>
              <td>Fecha Final</td>
              <td>Formato</td>
              <td>Correo</td>
              <td>Usuario</td>
              <td>acción</td>
      </tr>      
  </thead>
        <tbody>
             
                @foreach($Resulestatics as $estatics) 
                         <tr>
                            <td class="inner-table"> {{$estatics["Cod_Estadistica"]}}</td>
                            <td class="inner-table"> {{$estatics["TipoReporte"]}}</td>
                            <td class="inner-table"> {{$estatics["FechaInicio"]}}</td>
                            <td class="inner-table"> {{$estatics["FechaFinal"]}}</td>
                            <td class="inner-table"> {{$estatics["Tipo_Formato"]}}</td> 
                            <td class="inner-table"> {{$estatics["IND_Email"]}}</td>
                            <td class="inner-table"> {{$estatics["Usr_Registro"]}}</td>  
                            
                            <td>  
                              <button type ="Button" class="btn btn-success"> Editar </button> <Button type="submit" class="btn btn-danger">Borrar</button>
                           </td>
                          
                          </tr>
                @endforeach  
        </tbody>
  </table>
</div>
</div>
</body>
</div>
</div>  
@endsection

@section('css')
<link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel= "stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel= "stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">

<link rel= "stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel= "stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
@endsection



@section ('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js "></script>

<script>
  $(document).ready(function () {
    $('#estadistica').DataTable({
     
      responsive:true,
      autoWidth:false,

      dom: 'Bfrtip',
       
       buttons: [
           'copy', 'excel', 'pdf', 'print'
       ],

        "language": {
           
          "info": "Mostrando pagina _PAGE_ de _PAGES_",
          'search': "Buscar",
        

          "paginate":{
            'next': "Siguiente",
            'previous': "Anterior",
          }

        }
        
    });
})
</script>
@endsection