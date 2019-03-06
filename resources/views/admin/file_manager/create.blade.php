@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Subir archivos</h1>
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

  <form
    method="post"
    action="/admin/filemanager"
    enctype="multipart/form-data"
    id="dropZoneForm"
    >
    {{ csrf_field() }}

    <div class="form-group">
      <div class="fallback">
        <input type="file" name="file" multiple>
      </div>
    </div>
    
    <div class="dropzone-previews">
    </div>

  </form>
    <div id="fileTemplate" class="dz-preview dz-file-preview" style="display: none;">
      <div class="dz-details">
        <div class="dz-filename"><span data-dz-name></span></div>
        <div class="dz-size" data-dz-size></div>
        <img data-dz-thumbnail />
      </div>
      <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
      <div class="dz-success-mark"><span>✔</span></div>
      <div class="dz-error-mark"><span>✘</span></div>
      <div class="dz-error-message"><span data-dz-errormessage></span></div>
    </div>


  <br>

@endsection

@section('scripts')
  var page = 'file_manager_create'

  @parent
@endsection
