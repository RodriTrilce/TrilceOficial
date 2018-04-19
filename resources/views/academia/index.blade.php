@extends('academia.layouts.template')

@section('title', '')
@section('afterBody', $print)
@section('content')
  
  <section>
          <div id="slides">
              <a href="http://www.trilce.edu.pe/">
                  <img src="http://www.trilce.edu.pe/assets/img/slider/concurso-de-becas-uni-21-de-febrero.png" alt="#">
              </a>
              <img src="http://www.trilce.edu.pe/assets/img/slider/solucionario-uni-2018-fisica-y-quimica.png" alt="#">
              <img src="http://www.trilce.edu.pe/assets/img/slider/felicitaciones-primer-puesto-pucp-2018-1.png" alt="#">
              <img src="http://www.trilce.edu.pe/assets/img/slider/felicidades-primer-puesto-uni-2018-i-ingenieria-minas.png" alt="#">
          </div>
  </section >

  <div class="nuevos-i">
    <div class="row center-xs">
      <div class="col-xs-9 col-sm-11 col-md-10 start-xs nuevos-i-title">
        <div class="box">
          <h2>Nuevos Inicios</h2>
          <p>Elija la preparacion universitaria, exclusiva que está buscando</p>
        </div>
      </div>
      
      <div class="row nuevos-i-box col-xs-12 col-sm-11 col-md-10 col-lg-9 between-xs center-sm center-md center-lg">
        <div class="col-xs">
          <a href="/academia/preparacion-uni">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/ico-logo-uni.jpg" alt="UNI">
              <h4>Preparación</h4>
              <h3>UNI</h3>
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
              <img src="/static/images/academia/ico-logo-sm.jpg" alt="UNMSM">
              <h4>Preparación</h4>
              <h3>San Marcos</h3>
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
              <img src="/static/images/academia/ico-logo-cato.jpg" alt="PUCP">
              <h4>Preparación</h4>
              <h3>PUCP</h3>
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
  
  @include('academia.partials.card_bottom')
@endsection
@section('scripts')
  <script>
    page = 'index';
  </script>
  @parent
@endsection