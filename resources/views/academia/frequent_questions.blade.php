{{! $breadcrumbs = Breadcrumbs::render('academia-frequentquestions') }}
@extends('academia.layouts.template')
@section('title', 'Preguntas frecuentes')
@section('content')

<div class="header-double-top">
  <div class="row">
    <div class="col-xs-12 col-sm-6"></div>
    <div class="col-xs-12 col-sm-6 header-double-w-contact"></div>
    <div class="header-double-border"></div>
    <div class="header-double-title">
      <h1>Preguntas frecuentes</h1>
    </div>
  </div>
</div>

<div class="row col-xs-12 center-xs container-base frequentquestions">
  <div class="col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md frequentquestions-block">


      <div class="js-tabs frequent_questions__tabs" id="tabs_frequent_questions">

          <ul class="js-tabs__header">
              <li><a href="#" class="js-tabs__title">Admisión</a></li>
              <li><a href="#" class="js-tabs__title">Propuesta Educativa</a></li>
              <li><a href="#" class="js-tabs__title">Otros</a></li>
          </ul>

          <div class="js-tabs__content js-badger-accordion_1">
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header"><div class="question-title__signe"></div>¿Cómo es el sistema TRILCE?</h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner"><p class="question-answer">Es un sistema desarrollado por una plana docente de la especialidad según el curso que dicta, que a su vez controla el proceso de aprendizaje mediante evaluaciones permanentes (exámenes diarios y simulacros semanales tipo admisión). Asimismo, cuenta con un programa de valores que complementa la formación integral del alumno, la cual va de la mano con el apoyo de un equipo de tutoras especializadas en la rama de psicología, educación o ciencias sociales.</p></div>
                    </dd>
                </div>
              </div>

          </div>

          <div class="js-tabs__content">
              <h1>TWO</h1>
          </div>

          <div class="js-tabs__content">
              <h1>THREE</h1>
          </div>

      </div>


  </div>
</div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
  page = 'frequent_questions';
  @parent
@endsection
