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



<div id="toolbar">
  <select class="form-control">
    <option value="">Exportacion basica</option>
    <option value="all">Exportar todos</option>
    <option value="selected">Exportar selección</option>
  </select>
</div>

<table
    id="my-table" 

    data-show-export="true"
    data-pagination="true"
    data-click-to-select="true"
    data-maintain-selected="true"
    data-toolbar="#toolbar"
    data-show-toggle="true"
    data-show-footer="true"
    data-toggle="table"
    data-sort-name="date"
    data-sort-order="desc"
    data-height="760"
    data-show-pagination-switch="true"
    data-page-list="[10, 25, 50, 100, 200, All]"
    data-export-options='{
      "fileName": "files_export_{{date("Y-m-d")}}",
      "ignoreColumn": ["state"]
    }'
    >
  <thead>
    <tr>
      <th data-field="state" data-checkbox="true"></th>
      <th data-field="nro" data-sortable="true">#</th>
      <th data-field="fecha_creacion" data-sortable="true">Fecha creacíón</th>
      <th data-field="type" data-sortable="true">Tipo</th>
      <th data-field="name" data-sortable="true">Nombre</th>
      <th data-field="description">Descripción</th>
      <th data-field="size" data-sortable="true" data-sorter="filesizeSorter">Peso</th>
      <th data-field="url">URL</th>
      <th data-field="driver" data-sortable="true">Almacenamiento</th>
      <th data-field="dimension" data-sortable="true">Dimensiones</th>
      <th></th>
    </tr>
  </thead>

  <tbody>
    @foreach($files as $file)
    <tr>
      <td></td>
      <td>{{$loop->index}}</td>
      <td>{{$file->created_at}}</td>
      <td>{{$file->type}}</td>
      <td>{{$file->name}}</td>
      <td>{{$file->description}}</td>
      <td><span class="filesize" data-filesize="{{$file->size}}">{{$file->size}}</span></td>
      <td><a href="http://www.trilce.edu.pe/{{$file->fileUrl()}}" target="_blank">{{$file->fileUrl()}}</a></td>
      <td>{{$file->location_driver}}</td>
      <td>{{$file->dimension}}</td>
      <td>
      
        @if(!$file->lesable_id)
          <button class="btn btn-secondary btn-undefined" title="Eliminar" type="button">
            <i class="fa fa-trash"></i>
          </button>
        @endif

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

@section('scripts')
  var page = 'file_manager'
  @parent
@endsection