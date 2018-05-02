@extends('academia.layouts.template')

@section('title', 'Pre Matrícula en linea')

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


  <div class="enrollment-steps" id="steps-guide">
    <div class="active">Paso 1</div>
    <div>Paso 2</div>
    <div>Paso 3</div>
  </div>



  <div class="row col-xs-11 col-sm-11 col-md-9 center-sm enrollment-forms">
    
    <div id="step1" class="row">
      <div class="col-xs-12 col-sm-5 col-md-6 center-sm xs-hide enrollment-img">
        <img src="{{ url('static/images/academia/img-enrollment-01.jpg') }}" alt="Matrícula en linea">
      </div>
      
      <div class="col-xs-12 col-sm-4 col-md-5 text-init">
        <h3>Bienvenido</h3>
        <h2>Nuevos inicios <span>2018</span></h2>
        <p>Para ayudarte a realizar este proceso rápidamente, ingresa los siguientes datos.</p>
        
        <div class="form">
          <form id="nextStep1">

            <div class="row col-xs-12 col-sm-10">
              <div class="col-xs-12 col-sm-6">
                <fieldset>
                  <input type="mumber" name="step1_dni" placeholder="DNI" pattern="([0-9]+)" required>
                </fieldset>
              </div>
              

              <div class="col-xs-12 col-sm-6">
                <fieldset>
                  <input type="text" name="step1_ciclo" placeholder="Ciclo" pattern="[A-Za-z ]+" required>
                </fieldset>
              </div>
              
              <div class="col-xs-12 col-sm-6">
                <fieldset>
                  <input type="text" name="step1_universidad" placeholder="Univerisdad" pattern="[A-Za-z ]+" required>
                </fieldset>
              </div>
              
              <div class="col-xs-12 col-sm-6">
                <fieldset>
                  <input type="text" name="step1_condicion" placeholder="Condición" pattern="[A-Za-z ]+" required>
                </fieldset>
              </div>
            </div>

            <div class="col-xs-12 col-sm-10">
              <div class="file-upload-wrapper" data-text="Select your file!">
                  <input type="file" accept="image/jpeg, image/png" name="step1_photo" class="file-upload-field" id="step1_photo" data-text="Adjuntar foto" required>
              </div>
            </div>
            
            <fieldset>
              <button type="submit" class="validate">Siguiente <i class="fa fa-angle-right"></i></button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  <!-- end step1 -->
  
  <div id="step2" class="row">
    <div class="col-xs-12">
      lorem
    </div>
  </div>
  <!-- end step2 -->
  
  <div id="step3" class="row">
  </div>
  <!-- end step3 -->
  
  </div>


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'enrollment';
  @parent
@endsection