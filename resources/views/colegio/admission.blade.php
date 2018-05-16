@extends('colegio.layouts.template')

@section('title', 'Admisión ' . $title)

@section('content')


  <div class="header-double-top-colegio">
    <div class="row">
      
      <div class="col-xs-12 col-sm-12 col-md-6 frist-block"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-1"></div>
      
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Admisión 2019</h1>
      </div>
    </div>
    
  </div>


  
    <div class="nuevos-i">
      <div class="row center-xs">
        
        <div class="row col-xs-12 col-sm-6 between-xs center-sm center-md center-lg nuevos-i-box">
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
    

  
</div>
    
@include('colegio.partials.card_bottom')

@endsection