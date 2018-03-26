@extends('academia.layouts.template')

@section('title', 'Simulacros')

@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-1"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Simulcros</h1>
        <p>Inscripción a los simulacros {$univeristy} y Resultados de los examenes</p>
      </div>
    </div>
  </div>
  

1
2


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
  @parent

@endsection