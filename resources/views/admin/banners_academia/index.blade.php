@extends('admin.layouts.template')
@section('content')

  <div id="modal-1" style="display:none;">
    <div class="modal-b50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>Editar banner</h2>
          </div>

          <div class="col-sm-12">
            <form>
              <div class="form-group">
                <label for="txtEmail">Titulo</label>
                <input type="text" name="title" class="form-control" id="txtEmail" value="San Marcos feliz">
              </div>

              <div class="form-group">
                <label for="textLink">Link</label>
                <input type="text" name="link" class="form-control" id="textLink" value="http://www.google.com.pe/">
              </div>

              <div class="form-group">
                <label for="txtFinish">Fecha de finalización</label>
                <input type="text" class="form-control" name="finish" id="txtFinish" autocomplete="off" placeholder="Clic aquí para Selecionar fecha" required>
              </div>

              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="modal-new" style="display:none">
    <div class="modal-b50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <form class="" action="index.html" method="post">

              <div class="form-group">
                <label for="txtEmail">Titulo</label>
                <input type="text" name="title" class="form-control" id="txtEmail" value="San Marcos feliz">
              </div>

              <div class="form-group">
                <label for="textLink">Link</label>
                <input type="text" name="link" class="form-control" id="textLink" value="http://www.google.com.pe/">
              </div>

              <div class="form-group">
                <label for="txtFinish">Fecha de finalización</label>
                <input type="text" class="form-control" name="finish" id="txtFinish" autocomplete="off" placeholder="Clic aquí para Selecionar fecha" required>
              </div>

              <button type="submit" class="btn btn-primary">Enviar</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Banners index Academia</h1>
  </div>

  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}</h3>
  </div>
  @endif

<div class="container save-order" id="saveOrder">
  <div class="row">
    <div class="col-sm-12">
      <button type="button" id="saveorderButton">Guardar orden</button>
    </div>
  </div>
</div>

<div class="admin-banners" id="banners">

  <div class="banner" data-position="1" data-id="9">
    <div class="op close"><span data-feather="trash"></span></div>
    <div class="op edit"><span data-feather="edit"></span></div>
    <img src="https://picsum.photos/600/200?<?php echo rand(0,9999) ?>" alt="">
    <div class="expire"><span class="text">Vencimiento: </span> <span class="expire-date">13/08/18</span></div>
    <div class="link"><span class="text">Link:</span> <span class="href"><a href="http://google.com/" target="_blank">http://google.com/</a></span></div>
    <div class="title"><span class="text">Titulo:</span> <span class="title-text">Academia alumnos mejor preparados</span></div>
  </div>

  <div class="banner" data-position="2" data-id="9">
    <div class="op close"><span data-feather="trash"></span></div>
    <div class="op edit"><span data-feather="edit"></span></div>
    <img src="https://picsum.photos/600/200?<?php echo rand(0,9999) ?>" alt="">
    <div class="expire"><span class="text">Vencimiento: </span> <span class="expire-date">NO VENCE</span></div>
    <div class="link"><span class="text">Link:</span> <span class="href"><a href="http://google.com/" target="_blank">http://google.com/</a></span></div>
    <div class="title"><span class="text">Titulo:</span> <span class="title-text">Academia alumnos mejor preparados</span></div>
  </div>

  <div class="banner" data-position="3" data-id="9">
    <div class="op close"><span data-feather="trash"></span></div>
    <div class="op edit"><span data-feather="edit"></span></div>
    <img src="https://picsum.photos/600/200?<?php echo rand(0,9999) ?>" alt="">
    <div class="expire"><span class="text">Vencimiento: </span> <span class="expire-date">13/08/18</span></div>
    <div class="link"><span class="text">Link:</span> <span class="href"><a href="http://google.com/" target="_blank">http://google.com/</a></span></div>
    <div class="title"><span class="text">Titulo:</span> <span class="title-text">Academia alumnos mejor preparados</span></div>
  </div>

  <div class="banner" data-position="4" data-id="9">
    <div class="op close"><span data-feather="trash"></span></div>
    <div class="op edit"><span data-feather="edit"></span></div>
    <img src="https://picsum.photos/600/200?<?php echo rand(0,9999) ?>" alt="">
    <div class="expire"><span class="text">Vencimiento: </span> <span class="expire-date">13/08/18</span></div>
    <div class="link"><span class="text">Link:</span> <span class="href"><a href="http://google.com/" target="_blank">http://google.com/</a></span></div>
    <div class="title"><span class="text">Titulo:</span> <span class="title-text">Academia alumnos mejor preparados</span></div>
  </div>

</div>


@endsection

@section('scripts')
  var page = 'banners_index'
  @parent
@endsection
