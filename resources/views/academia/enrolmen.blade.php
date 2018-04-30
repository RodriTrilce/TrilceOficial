@extends('academia.layouts.template')

@section('title', 'Acerca de Nosotros')

@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-2"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Pre-matrícula</h1>
      </div>
    </div>
  </div>


  <div class="enrolmen-steps" id="steps">
    <div class="active">Paso 1</div>
    <div>Paso 2</div>
    <div>Paso 3</div>
  </div>


  <div class="row col-xs-11 col-sm-9 center-sm enrolmen-forms">
    <div class="col-xs-12 col-sm-5 center-sm xs-hide">
      <img src="/static/images/academia/img-enrolmen-01.jpg" alt="">
    </div>
    <div class="col-xs-12 col-sm-5 text-init step1">
      <h3>Bienvenido</h3>
      <h2>Nuevos inicios <span>2018</span></h2>
      <p>Para ayudarte a realizar este proceso rápidamente, ingresa los siguientes datos.</p>
      
      <div class="form">
        
          <fieldset>
            <input type="mumber" name="step1_dni" placeholder="DNI" pattern="([0-9]+)" required>
          </fieldset>

          <fieldset>
            <input type="text" name="step1_ciclo" placeholder="Ciclo" pattern="[A-Za-z ]+" required>
          </fieldset>

          <fieldset>
            <input type="text" name="step1_universidad" placeholder="Univerisdad" pattern="[A-Za-z ]+" required>
          </fieldset>

          <fieldset>
            <input type="text" name="step1_condicion" placeholder="Condición" pattern="[A-Za-z ]+" required>
          </fieldset>

          <fieldset>
            <div class="file-upload-wrapper" data-text="Select your file!">
            <input type="file" name="step1_photo" class="file-upload-field" id="step1_photo">
          </div>
          </fieldset>

          
          <button type="submit" name="contact_validate" id="contact_validate" class="validate">Siguiente <i class="fa fa-angle-right"></i></button>
      </div>
      
      
    </div>
  </div>



  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'enrolmen';
  @parent
@endsection