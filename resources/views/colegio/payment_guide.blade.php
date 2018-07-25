{{! $breadcrumbs = Breadcrumbs::render('colegio-paymentguide') }}
@extends('colegio.layouts.template')
@section('title', 'Guía de pagos en línea')
@section('content')

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-pagosenlinea.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-pagosenlinea-movil.jpg') }}" alt="">
    </div>
  </div>

  <div class="row col-xs-12 center-xs container-base playmentguide-content">
    <div class="row col-xs-12 col-sm-10 col-md-8 start-xs start-sm start-md ">

      <div class="col-xs-12 playmentguide-title-container">
        <h1 class="playmentguide-title">Elija el banco de su preferencia</h1>
        <p class="playmentguide-titlesub">Para saber como realizar pagos por internet, ventanilla y/o agente.</p>
      </div>

      <div class="row col-xs-12 center-xs playmentguide-option">
        <div class="col-xs playmentguide-optionitem"><a href="/storage/colegio/documents/pdf/payment-guide/guia-de-pagos-scotiabank.pdf" target="_blank"><img src="{{ url('/static/images/colegio/logo-scotiabank.jpg') }}" alt="Guía de pagos para Scotiabank"></a></div>
        <div class="col-xs playmentguide-optionitem"><a href="/storage/colegio/documents/pdf/payment-guide/guia-de-pagos-bcp.pdf" target="_blank"><img src="{{ url('/static/images/colegio/logo-bcp.jpg') }}" alt="Guía de pagos para BCP"></a></div>
        <div class="col-xs playmentguide-optionitem"><a href="/storage/colegio/documents/pdf/payment-guide/guia-de-pagos-bbva.pdf" target="_blank"><img src="{{ url('/static/images/colegio/logo-bbva.jpg') }}" alt="Guía de pagos para BBVA"></a></div>
      </div>

    </div>
  </div>

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'payment_guide';
  @parent
@endsection
