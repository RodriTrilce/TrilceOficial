@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar: {{$post->title}}</h1>
  </div>

@if (Session::has('success'))
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

  <form method="post" action="{{ route('blog.update', $post->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="form-group">
       <label for="create_title">Titulo</label>
       <input type="text" class="form-control" name="title" id="create_title" autocomplete="off" placeholder="Escribe aquí el titulo" value="{{ $post->title }}" required>
    </div>


    <div class="form-group">
      <input type="checkbox" id="create_marker" name="marker" class="switch-input"
      {{ ($post->marker==1?'checked':'') }}
      >
      <label for="create_state" class="switch-label">
        Marcado (fijo):
        <span class="toggle--on">Si</span>
        <span class="toggle--off">No</span></label>      
    </div>

    @if(Auth::user()->hasRole('admin'))

      <div class="form-group">
        <input type="checkbox" id="create_approved" name="approved" class="switch-input"
        {{ ($post->approved==1?'checked':'') }}
        >
        <label for="create_state" class="switch-label">
          Aprobado:
          <span class="toggle--on">Si</span>
          <span class="toggle--off">No</span></label>      
      </div>

    @endif

    <div class="form-group">
      <input type="checkbox" id="create_draft" name="visible" class="switch-input"
      {{ ($post->visible==1?'checked':'') }}
      >
      <label for="create_state" class="switch-label">
        Visible:
        <span class="toggle--on">Si</span>
        <span class="toggle--off">No</span></label>      
    </div>

     <div class="form-group">
       <label for="create_site">Sección</label>
       <select class="form-control" name="site" id="create_site" required>
         <option hidden disabled>Selecionar sitio</option>
         <option {{ ($post->site=='academia'?'selected':'') }} value="academia">Academia</option>
         <option {{ ($post->site=='colegio'?'selected':'') }} value="colegio">Colegio</option>
       </select>
     </div>

     {{-- <div class="form-group">
       <label for="exampleFormControlSelect2">Example multiple select</label>
     </div> --}}

     <div class="form-group">
       <textarea class="form-control" id="create_content" name="content" rows="3">
       	{!! $post->content !!}
       </textarea>
     </div>

	<!--
     <div class="form-group">
       <label for="imagesMulti">Selecione imagenes y de clic en la principal</label><br>
       <input type='file' id="imagesMulti" name="image[]" accept="image/*" required multiple />
       <div class="showimages"></div>
     </div>
	 -->

	<!--
     <div class="form-group">
       <label for="create_finish">Fecha</label>
       <input type="text" class="form-control" id="mo_finish" name="created_at" id="create_finish" value="<?php echo date("Y-m-d H:i:s"); ?>" autocomplete="off" placeholder="Clic aquí para Selecionar fecha" required>
     </div>
 	-->

	<div class="form-group">
		<button class="btn btn-primary" type="submit">Enviar</button>
	</div>

  </form>

@endsection

@section('scripts')
  var page = 'blog_create'
  @parent
@endsection
 