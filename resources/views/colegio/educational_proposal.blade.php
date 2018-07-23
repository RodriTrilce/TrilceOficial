{{! $breadcrumbs = Breadcrumbs::render('colegio-educationalproposal') }}
@extends('colegio.layouts.template')
@section('title', 'Propuesta educativa')
@section('content')

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-contactenos.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-contactenos-movil.jpg') }}" alt="">
    </div>
  </div>

<div class="row center-xs center-sm container-base educational_proposal">
  <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">
    hi
  </div>
</div>

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'educational_proposal';
  @parent
@endsection
