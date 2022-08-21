
@extends('adminlte::page')

@section('content_header')  
<h1>Reportes</h1>
@stop

@section('content') 

<div clas = 'card'>
  <div class="card-body">
    
    <a href="{{ route('agregarreporte') }}"class="btn btn-primary float-right">Agregar Reporte</a>  

<table id='reportes'  class="table table-striped">
    <thead class= "bg-dark text-light">
      <tr>
              <td>#Reporte</td>
              <td>Tipo Reporte</td>
              <td>Fecha Inicial</td>
              <td>Fecha Final</td>
              <td>Formato</td>
              <td>Correo</td>
              <td>Fecha Registro</td>
              <td>Usuario</td>
              <td>acción</td>
      </tr>      
  </thead>
        <tbody>
             
                @foreach($ResulReporte as $reportes) 
                         <tr>
                            <td class="inner-table"> {{$reportes["CodigoReporte"]}}</td>
                            <td class="inner-table"> {{$reportes["TipoReporte"]}}</td>
                            <td class="inner-table"> {{$reportes["FechInicial"]}}</td>
                            <td class="inner-table"> {{$reportes["FechaFinal"]}}</td>
                            <td class="inner-table"> {{$reportes["Tipo_Formato"]}}</td>
                            <td class="inner-table"> {{$reportes["TipoCorreo"]}}</td>
                            <td class="inner-table"> {{$reportes["Fecha_Registro"]}}</td>  
                            <td class="inner-table"> {{$reportes["Usr_Registro"]}}</td> 
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
    $('#reportes').DataTable({
     
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


  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

      
  
  
  
  
  
  
  
  
  