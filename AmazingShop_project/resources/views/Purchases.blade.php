@extends('adminlte::page')

@section('content_header')  
<h1>Compras</h1>
@stop

@section('content') 

<a href="{{ route('agregarcompras') }}"class="btn btn-primary">Agregar Compra</a>
<table id='Compras'  class="table table-striped">
    <thead class= "bg-dark text-light">
      <tr>
              <td>Num. Compra</td>
              <td>Producto</td>
              <td>Cantidad</td>
              <td>Precio</td>
              <td>Fecha Compra</td>
              <td>Proveedor</td>
              <td>Accion</td>
      </tr>      
  </thead>
        <tbody>
             
                @foreach($ResulCompra as $compras) 
                         <tr>
                            <td class="inner-table"> {{$compras["COD_COMPRA"]}}</td>
                            <td class="inner-table"> {{$compras["DESC_PRODUCTO"]}}</td>
                            <td class="inner-table"> {{$compras["CANTIDAD"]}}</td>
                            <td class="inner-table"> {{$compras["PRECIO"]}}</td>
                            <td class="inner-table"> {{$compras["FECHA_COMPRA"]}}</td>
                            <td class="inner-table"> {{$compras["NOMBRE_PROVEE"]}}</td> 
                            <td>
                              <button class="btn btn-sm btn-success" type="button">
                              <i class="material-icons">Editar</i>
                              </button>
                              <button class="btn btn-sm btn-danger" type="submit" rel="tooltip">
                              <i class="material-icons">Eliminar</i>
                              </button>
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
    $('#Compras').DataTable({
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