@extends('colegio.layouts.template')

@section('title', '')
@section('afterBody', $print)
@section('content')
  
  <div class="index-banners">
    <div><a href="http://google.com/" target="_blank"><img src="{{ url('static/images/colegio/banners/banner-index.jpg')}}" alt=""></a></div>
    <div><a href="http://google.com/" target="_blank"><img src="http://www.trilce.edu.pe/admision/header/banner-registro-colegio2.png" alt=""></a></div>
    <div><a href="http://google.com/" target="_blank"><img src="{{ url('static/images/colegio/banners/banner-index.jpg')}}" alt=""></a></div>
    <div><a href="http://google.com/" target="_blank"><img src="{{ url('static/images/colegio/banners/banner-index.jpg')}}" alt=""></a></div>
  </div>

  <hr class="grayhr" />

  <div class="nuevos-i">
    <div class="row center-xs">
      <div class="col-xs-9 col-sm-11 col-md-10 start-xs nuevos-i-title">
        <div class="box">
          <h2>Admisión 2019</h2>
          <p>Elija la modalidad que más se adecue a tus necesidades. ¡Alumnos mejor preparados!</p>
        </div>
      </div>
      
      <div class="row col-xs-12 col-sm-11 col-md-10 col-lg-9 between-xs center-sm center-md center-lg nuevos-i-box">
        <div class="col-xs">
          <a href="/colegio/admision-nuevo">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/ico-alumno-nuevo.jpg') }}" alt="UNI">
              <h3>Alumno <span class="modality modality-blue">Nuevo</span></h3>
            </div>
            <div class="nuevos-i-bottom">
              <span>Leer más <i class="fa fa-search"></i></span>
              <div class="nuevos-hr nuevos-hr-blue"></div>
            </div>
          </a>
        </div>
        <div class="col-xs">
          <a href="/colegio/admision-traslado">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/ico-alumno-regular.jpg') }}" alt="UNMSM">
              <h3>Alumno <span class="modality modality-yellow">Traslado</span></h3>
            </div>
            <div class="nuevos-i-bottom">
              <span>Leer más <i class="fa fa-search"></i></span>
              <div class="nuevos-hr nuevos-hr-yellow"></div>
            </div>
          </a>
        </div>
        <div class="col-xs">
          <a href="/colegio/admision-regular">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/ico-alumno-traslado.jpg') }}" alt="PUCP">
              <h3>Alumno <span class="modality modality-orange">Regular</span></h3>
            </div>
            <div class="nuevos-i-bottom">
              <span>Leer más <i class="fa fa-search"></i></span>
              <div class="nuevos-hr nuevos-hr-orange"></div>
            </div>
          </a>
        </div>
      </div>
      
    </div>
  </div>
  
  <hr class="grayhr xs-hide" />
  
  @include('colegio.partials.card_bottom')
@endsection
@section('scripts')
  
    page = 'index';
    
    @parent
@endsection