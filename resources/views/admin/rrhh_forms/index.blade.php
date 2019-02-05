@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Recursos humanos: Formularios</h1>
  </div>

  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}</h3>
  </div>
  @endif
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.13.1/bootstrap-table.min.css">


<!--<button class="btn btn-primary" id="exportar_pdf">Exportar a PDF</button> -->


  
<input type="submit" id="export_excel" class="btn btn-primary" value="Exportar a Excel">
<br><br>


<table data-toggle="table" id="my-table">
  <thead>
    <tr>
      <th>DNI</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Telefono</th>
      <th>Carrera</th>
      <th>Distrito</th>
      <th>Expectativa salarial</th>
      <th>Experiencia</th>
      <th>Experiencia detalle</th>
      <th>Porque Trilce</th>
      <th>Porque el puesto</th>
      <th>Fecha de registro</th>
    </tr>
  </thead>
  <tbody>

    @foreach($data as $fila)
    <tr>
      <td>{{$fila->dni}}</td>
      <td>{{$fila->nombre}}</td>
      <td>{{$fila->email}}</td>
      <td>{{$fila->telefono}}</td>
      <td>{{$fila->carrera}}</td>
      <td>{{$fila->distrito}}</td>
      <td>{{$fila->expectativa_salarial}}</td>
      <td>{{$fila->experiencia}}</td>
      <td>{{$fila->experiencia_detalle}}</td>
      <td>{{$fila->porque_trilce}}</td>
      <td>{{$fila->porque_tutora}}</td>
      <td>{{$fila->register}}</td>
    </tr>
    @endforeach


  </tbody>
</table>


@endsection

@section('scripts')
  var page = 'rrhh_forms'
  @parent
@endsection
