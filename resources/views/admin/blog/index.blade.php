@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h1 class="h2">Blog</h1>
  </div>


      <table class="table table-striped">
        <caption>Lista de posts en el blog</caption>
        <thead>
          <tr>
            <th scope="col">Blog</th>
            <th scope="col">Titulo</th>
            <th scope="col">Marcado?</th>
            <th scope="col">Visible?</th>
            <th scope="col">Aprobado?</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          @foreach ($data as $post)
            <tr>
              <td>{{$post->site}}</td>
              <td><a href="{{action('Admin\BlogController@edit', $post->id)}}">{{$post->title}}</a></td>
              <td>{{$post->marker}}</td>
              <td>{{$post->visible}}</td>
              <td>{{$post->approved}}</td>
              <td><a href="/{{$post->site}}/blog/{{$post->slug}}" target="_blank">Ver</a></td>
            </tr>
          @endforeach

        </tbody>
      </table>
@endsection
