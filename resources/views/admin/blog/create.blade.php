@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Crear post</h1>
  </div>

@if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}</h3>
  </div>
@endif

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

  <form method="post" action="/admin/blog" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
       <label for="create_title">Titulo</label>
       <input type="text" class="form-control" name="title" id="create_title" autocomplete="off" placeholder="Escribe aquí el titulo">
    </div>

    <div class="form-group">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="marker" id="create_marker" value="1">
        <label class="form-check-label" for="create_marker">Marcado (Fijo)</label>
      </div>
    </div>

    <div class="form-group">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="visible" id="create_draft" value="1">
        <label class="form-check-label" for="create_draft">Borrador</label>
      </div>
    </div>

     <div class="form-group">
       <label for="create_site">Sección</label>
       <select class="form-control" name="site" id="create_site">
         <option selected hidden disabled>Selecionar sitio</option>
         <option value="academia">Academia</option>
         <option value="colegio">Colegio</option>
       </select>
     </div>

     {{-- <div class="form-group">
       <label for="exampleFormControlSelect2">Example multiple select</label>
     </div> --}}

     <div class="form-group">
       <textarea class="form-control" id="create_content" name="content" rows="3"></textarea>
     </div>

     <div class="form-group">
       <input type='file' id="imagesMulti" name="image[]" accept="image/*" multiple />
       <div class="showimages"></div>
     </div>

     <div class="form-group">
       <button class="btn btn-primary" type="submit">Enviar</button>
     </div>

  </form>

@endsection

@section('scripts')
  var page = 'blog_create'
  @parent
@endsection
