@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Administrador de archivos</h1>
  </div>

  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}</h3>
  </div>
  @endif
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.13.1/bootstrap-table.min.css">

<table data-toggle="table" id="my-table">
  <thead>
    <tr>
      <th>DNI</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Telefono</th>
      <th>Carrera</th>
      <th>Centro de Estudios</th>
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

    <tr>
      <td>ass</td>
      <td>ass</td>
      <td>ass</td>
      <td>ass</td>
      <td>ass</td>
      <td>ass</td>
      <td>ass</td>
      <td>ass</td>
      <td>ass</td>
      <td>ass</td>
      <td>ass</td>
      <td>ass</td>
      <td>ass</td>
    </tr>

  </tbody>
</table>


@endsection

@section('scripts')
  var page = 'file_manager'
  @parent
@endsection