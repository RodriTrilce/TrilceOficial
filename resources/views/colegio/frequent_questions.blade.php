{{! $breadcrumbs = Breadcrumbs::render('colegio-frequentquestions') }}
@extends('colegio.layouts.template')
@section('title', 'Preguntas frecuentes')
@section('content')

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-nosotros.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-nosotros-movil.jpg') }}" alt="">
    </div>
  </div>
  
  <div class="row col-xs-12 center-xs frequentquestions">
    <div class="col-xs-12">
      <h1 class="frequentquestions-title">Preguntas frecuentes</h1>
    </div>
    
    <div class="col-xs-12 col-sm-8 col-md-6 start-xs start-sm start-md frequentquestions-block">
      
      <div class="frequentquestions-question row col-xs-12">
        <div class="row col-xs-1 col-sm-2 question-number">01</div>
        <div class="col-xs-10 question-content">
          <h3 class="question-title">¿Qué edad deben tener los niños para matricularse en inicial?</h3>
          <p class="question-answer">Los grados del nivel Inicial son para niños de 3, 4 y 5 años. Los niños que van a matricularse, por ejemplo, en Inicial de 3 años deben cumplir 3 años, como máximo, el 31 de marzo del año en curso. De igual modo con los de 4 y 5 años.</p>
        </div>
      </div>

      <div class="frequentquestions-question row col-xs-12">
        <div class="row col-xs-1 col-sm-2 question-number">02</div>
        <div class="col-xs-10 question-content">
          <h3 class="question-title">¿Qué edad deben tener los niños que van a matricularse en 1º grado de Primaria?</h3>
          <p class="question-answer">Los niños que van a matricularse en 1º grado de Primaria deben cumplir 6 años, como máximo, el 31 de marzo del año en curso.</p>
        </div>
      </div>

      <div class="frequentquestions-question row col-xs-12">
        <div class="row col-xs-1 col-sm-2 question-number">03</div>
        <div class="col-xs-10 question-content">
          <h3 class="question-title">¿Desde qué hora está abierto el colegio para poder dejar a mi hijo(a)?</h3>
          <p class="question-answer">El colegio está abierto desde las 7:30 a.m.</p>
        </div>
      </div>
      
    </div>
  </div>
    
  
  <hr class="grayhr2 xs-hide" />

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'about_us';
  @parent
@endsection