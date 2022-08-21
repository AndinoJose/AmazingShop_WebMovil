@extends('adminlte::page')

@section('content_header')  
<h1>Ventas</h1>
@stop

@section('content') 

<a href="{{ route('agregarventas') }}"class="btn btn-primary">Agregar Venta</a>
<table id='Ventas'  class="table table-striped">
    <thead class= "bg-dark text-light">
      <tr>
              <td>Codigo de Venta</td>
              <td>Cliente</td>
              <td>Producto</td>
              <td>Cod. del Producto</td>
              <td>Cantidad</td>
              <td>Precio (L.)</td>
              <td>Fecha Venta</td>
              <td>Accion</td>
      </tr>      
  </thead>
        <tbody>
             
                @foreach($ResulVenta as $ventas) 
                         <tr>
                            <td class="inner-table"> {{$ventas["COD_VENTAS"]}}</td>
                            <td class="inner-table"> {{$ventas["NOMBRE_CLIENTE"]}}</td>
                            <td class="inner-table"> {{$ventas["DESC_PRODUCTO"]}}</td>
                            <td class="inner-table"> {{$ventas["COD_PRODUCTO"]}}</td>
                            <td class="inner-table"> {{$ventas["CANTIDAD"]}}</td>
                            <td class="inner-table"> {{$ventas["PRECIO"]}}</td>
                            <td class="inner-table"> {{$ventas["FECHA_VENTA"]}}</td>
                            <td>
                            </td> 
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
    $('#Ventas').DataTable({
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