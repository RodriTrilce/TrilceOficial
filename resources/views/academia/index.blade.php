{{! $breadcrumbs = Breadcrumbs::render('academia-index') }}
@extends('academia.layouts.template')

@section('title', '')

@if($print)
  @section('afterBody')
    <div id="loader-wrapper"><div id="loader"></div><div class="loader-section section-left"></div><div class="loader-section section-right"></div><div class="loader-trilce"><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 91.9 100.3'><polygon points='0 0 0 22.6 14.6 22.6 14.6 16.7 36.9 16.7 36.9 85.7 30.2 85.7 30.2 100.3 61.8 100.3 61.8 85.7 55.1 85.7 55.1 16.7 77.4 16.7 77.4 22.6 91.9 22.6 91.9 0 0 0' fill='#f4633a'/></svg></div></div>
  @endsection
@endif

@section('content')

  @if($action == 'enrollment_finish')
    <div id="modal-1" style="display:none;">
      <div class="modal-b50">
        <div class="row col-xs-12 center-xs enrollment-finish">
            <div class="col-xs-12">
              <h1 class="finish-title">Gracias por registrarse <img src="{{url('/static/images/academia/svg/icon-thanks-enrolltment.svg')}}" class="finish-thanks" alt="Gracias por inscribirse"></h1>
            </div>
            <div class="col-xs-12">
              <p class="finish-text">Puede descargar su ficha de inscripción prematrícula aquí: </p>
            </div>
            <div class="col-xs-12 finish-button-container">
              <form action="/academia/matricula-en-linea/descargar-pdf" method="post" target="_blank">
                {{ csrf_field() }}
                <input name="token" type="hidden" value="{{ $dni }}">
                <button type="submit" class="enrollment-finish--button">
                  <img src="{{url('/static/images/academia/svg/icon-thanks-download-enrollment.svg')}}" alt="">
                </button>
              </form>
            </div>
        </div>
      </div>
    </div>
  @endif

  <div class="index-banners">
    {{-- <div><a href="{{Storage::url('academia/documents/solutions/pucp/2018/evaluacion-del-talento-catolica-reconstruido-2018-2.pdf')}}" target="_blank"><img src="{{Storage::url('academia/banners/1307201800.png')}}" alt=""></a></div> --}}
    {{-- <div><a href="/academia/preparacion-pucp" target="_blank"><img src="{{Storage::url('academia/banners/1307201801.png')}}" alt=""></a></div> --}}
    {{-- <div><a href="/academia/preparacion-san-marcos" target="_blank"><img src="{{Storage::url('academia/banners/1307201802.png')}}" alt=""></a></div> --}}
    {{-- <div><a href="/academia/preparacion-pucp" target="_blank"><img src="{{Storage::url('academia/banners/1307201803.png')}}" alt=""></a></div> --}}


    <div><a href="/academia/preparacion-uni"><img src="{{Storage::url('academia/banners/24071803.png')}}" alt=""></a></div>
    <div><a href="/academia/preparacion-uni"><img src="{{Storage::url('academia/banners/24071804.png')}}" alt=""></a></div>
    <div><a href="/academia/preparacion-san-marcos"><img src="{{Storage::url('academia/banners/24071802.png')}}" alt=""></a></div>
    <div><a href="/academia/preparacion-uni"><img src="{{Storage::url('academia/banners/24071801.png')}}" alt=""></a></div>

    <div><a href="https://www.facebook.com/ColegioTrilce/videos/2145054952176570/" target="_blank"><img src="{{Storage::url('academia/banners/1307201804.png')}}" alt=""></a></div>
    <div><a href="#" target="_blank"><img src="{{Storage::url('academia/banners/1307201805.png')}}" alt=""></a></div>
  </div>

  <div class="nuevos-i">
    <div class="row center-xs">
      <div class="col-xs-9 col-sm-11 col-md-10 start-xs nuevos-i-title">
        <div class="box">
          <h2>Nuevos Inicios</h2>
          <p>Elija la preparacion universitaria, exclusiva que está buscando</p>
        </div>
      </div>

      <div class="row nuevos-i-box col-xs-12 col-sm-11 col-md-10 col-lg-9 between-xs center-sm center-md center-lg block-effecthover">
        <div class="col-xs block-effecthover-item">
          <a href="/academia/preparacion-uni">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/svg/logo-uni.svg" alt="UNI">
              <h4>Preparación</h4>
              <h3>UNI</h3>
            </div>
          </a>
        </div>
        <div class="col-xs block-effecthover-item">
          <a href="/academia/preparacion-san-marcos">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/svg/logo-unmsm.svg" alt="UNMSM">
              <h4>Preparación</h4>
              <h3>San Marcos</h3>
            </div>
          </a>
        </div>
        <div class="col-xs block-effecthover-item">
          <a href="/academia/preparacion-pucp">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/svg/logo-pucp.svg" alt="PUCP">
              <h4>Preparación</h4>
              <h3>PUCP</h3>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>


  @include('academia.partials.card_bottom')
@endsection
@section('scripts')
    page = 'index';

    var modal_open = [@if($action == 'enrollment_finish') '#modal-1' @endif];

    @parent

@endsection
