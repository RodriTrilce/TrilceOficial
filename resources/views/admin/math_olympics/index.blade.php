@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Olimpiadas Matemáticas</h1>
  </div>

<table class="table table-striped ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fecha fin</th>
      <th scope="col">Sede</th>
      <th scope="col">Titulo</th>
      <th scope="col">Grado</th>
      <th scope="col">Bases</th>
      <th scope="col">Insc. Indiv.</th>
      <th scope="col">Insc. Grupal</th>
      <th scope="col">Resultados</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $key)
      <tr>
        <th scope="row"><a href="/admin/math-olympics/edit/{{$key->id}}">{{$key->id}}</a></th>
        <th>{{$key->finish_at}}</th>
        <td>{{$key->venue}}</td>
        <td>{{$key->title}}</td>
        <td>{{$key->grade}}</td>
        <td>
          @if($key->base_url)
            <a href="{{$key->base_url}}">Ver</a>
          @else
            <a href="/admin/math-olympics/edit/{{$key->id}}">Añadir</a>
          @endif
        </td>

        <td>
          @if($key->inscription_url)
            <a href="{{$key->inscription_url}}">Ver</a>
          @else
            <a href="/admin/math-olympics/edit/{{$key->id}}">Añadir</a>
          @endif
        </td>

        <td>
          @if($key->inscription_group_url)
            <a href="{{$key->inscription_group_url}}">Ver</a>
          @else
            <a href="/admin/math-olympics/edit/{{$key->id}}">Añadir</a>
          @endif
        </td>

        <td>
          @if(count($key->results) > 0)
            <select name="" id="">
            @foreach ($key->results as $k)
              <option value="">{{$k->name}}</option>
            @endforeach
          @else
            <a href="/admin/math-olympics/edit/{{$key->id}}">Añadir</a>
          @endif
        </select>
      </td>
      </tr>
    @endforeach

  </tbody>
</table>
@endsection
