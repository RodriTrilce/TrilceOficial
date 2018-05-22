{{! $breadcrumbs = Breadcrumbs::render('colegio-blog') }}
@extends('colegio.layouts.template')
@section('title', 'Blog')
@section('content')


  <div class="row col-xs-12 blog-home-top">
    <div class="col-xs blog-home-top-imge">img</div>
    <div class="row col-xs">
      <div class="col-xs-12">
        <section clas="blog-home-top-content">
          <h1 class="blog-home-top-title">Titulo tituloski titulero</h1>
          <span class="blog-home-top-date">Abril 20, 2018 <i class="fa fa-calendar"></i></span>
          <div class="blog-home-top-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="row col-xs-12 between-xs blog-home-top-bottom">
            <div class="col-xs start-xs blog-home-top-bottom--more">Leer más <i class="fa search"></i></div>
            <div class="col-xs end-xs blog-home-top--view">65 vistas</div>
          </div>
        </section>
      </div>
    </div>
  </div>
  
  <div class="row col-xs-12 blog-home-aftertop">
    <div class="row col-xs"></div>
    <div class="row col-xs"></div>
    <div class="row col-xs"></div>
  </div>
  
  
  
  
  <hr class="grayhr2 xs-hide" />

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'blog';
  @parent
@endsection