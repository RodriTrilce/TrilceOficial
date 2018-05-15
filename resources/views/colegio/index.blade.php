@extends('colegio.layouts.template')

@section('title', '')
@section('afterBody', $print)
@section('content')
  
  <div class="index-banners">
    <div><a href="http://google.com/" target="_blank"><img src="{{ url('static/images/colegio/banners/banner-index.jpg')}}" alt=""></a></div>
    <div><a href="http://google.com/" target="_blank"><img src="{{ url('static/images/colegio/banners/banner-index.jpg')}}" alt=""></a></div>
    <div><a href="http://google.com/" target="_blank"><img src="{{ url('static/images/colegio/banners/banner-index.jpg')}}" alt=""></a></div>
    <div><a href="http://google.com/" target="_blank"><img src="{{ url('static/images/colegio/banners/banner-index.jpg')}}" alt=""></a></div>
  </div>

  <hr class="grayhr" />
  
  <!--
  <div class="row col-xs-12 center-xs">
    <div class="col-xs-11 col-sm-9 start-xs start-sm indexblock1">
      <h1 class="title">Admisión 2018</h1>
      <h3 class="subtitle">Elija la preparación universitaria, exclusiva que está buscando</h3>

    </div>
  </div>
  --->
  


  <div class="nuevos-i">
    <div class="row center-xs">
      <div class="col-xs-9 col-sm-11 col-md-10 start-xs nuevos-i-title">
        <div class="box">
          <h2>Admisión 2018</h2>
          <p>Elija la preparación universitaria, exclusiva que está buscando</p>
        </div>
      </div>
      
      <div class="row nuevos-i-box col-xs-12 col-sm-11 col-md-10 col-lg-9 between-xs center-sm center-md center-lg">
        <div class="col-xs">
          <a href="/academia/preparacion-uni">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/ico-alumno-nuevo.jpg') }}" alt="UNI">
              <h3>Alumno <span class="modality">Nuevo</span></h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>
        <div class="col-xs">
          <a href="/academia/preparacion-san-marcos">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/ico-alumno-regular.jpg') }}" alt="UNMSM">
              <h3>Alumno <span class="modality">Traslado</span></h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>
        <div class="col-xs">
          <a href="/academia/preparacion-pucp">
            <div class="nuevos-i-top">
              <img src="{{ url('static/images/colegio/ico-alumno-traslado.jpg') }}" alt="PUCP">
              <h3>Alumno <span class="modality">Regular</span></h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>
      </div>
      
    </div>
  </div>
    

@endsection
@section('scripts')
  
    page = 'index';
    
    @parent
@endsection