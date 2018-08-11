@extends('admin.layouts.template')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Banners index Academia</h1>
  </div>

  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{Session::get('success')}}</h3>
  </div>
  @endif


<div class="admin-banners" id="banners">

  <div class="banner" data-position="1">
    <div class="close">❌</div>
    <div class="edit">🖋</div>
      <img src="http://67.205.139.190/storage/academia/banners/24071803.png" alt="">
  </div>

  <div class="banner" data-position="2">
    <div class="close">❌</div>
    <div class="edit">🖋</div>
      <img src="http://67.205.139.190/storage/academia/banners/24071803.png" alt="">
  </div>

  <div class="banner" data-position="3">
    <div class="close">❌</div>
    <div class="edit">🖋</div>
      <img src="http://67.205.139.190/storage/academia/banners/24071803.png" alt="">
  </div>

  <div class="banner" data-position="4">
    <div class="close">❌</div>
    <div class="edit">🖋</div>
      <img src="http://67.205.139.190/storage/academia/banners/24071803.png" alt="">
  </div>

</div>


@endsection

@section('scripts')
  var page = 'banners_index'
  @parent
@endsection
