@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Crear post</h1>
  </div>

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

@if($mode == 'new')
  <form method="post" action="">
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
       <input type='file' id="imagesMulti" name="image[]" multiple />
       <div class="showimages"></div>
     </div>

     <div class="form-group">
       <button class="btn btn-primary" type="submit">Enviar</button>
     </div>

  </form>

@elseif($mode == 'successful')
  <h2>¡Exito!. <a href="/{{$data->site}}/blog/{{$data->slug}}">Ver post</a></h2>
@endif

@endsection

@section('scripts')

    $(function() {
        $('#create_content').froalaEditor({
          height: 300,
          toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', '|', 'color', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', '-', 'insertLink', 'insertTable', '|', 'quote', 'insertHR', 'undo', 'redo', 'clearFormatting', 'selectAll', 'html']

        })
      });
  @parent
@endsection
