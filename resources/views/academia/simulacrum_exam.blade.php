{{! $breadcrumbs = Breadcrumbs::render('academia-simulacrum-exam', $university->short_name) }}
@extends('academia.layouts.template')
@section('title', 'Simulacros de '. $university->name)
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-simulacrum"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Simulacros</h1>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>
  @if($university->short_name=='UNI' || $university->short_name=='San Marcos' || $university->short_name=='PUCP')
    <br><br>
    <div class="row col-xs-12 center-xs admission-ads">
            <div class="admission-ads__container">
                <h1>¡Participa en nuestro Simulacro {{$university->short_name}}!</h1>
            </div>
    </div>
  @endif
  <div class="row col-xs-12 start-xs center-sm simulacrum container-base">
    <div class="row col-xs-12 col-sm-10 col-md-9 start-xs start-sm start-md">

      <div class="col-xs-12 col-sm simulacrum-info">
        <h2 class="simulacrum-info-title simulacrum-info-title-bottom">Información del simulacro</h2>
        <ul class="simulacrum-info-ul">
          <li>
            <span class="simulacrum-info-li-title">Descripción:</span>
            <p id='data'>Simulacro PUCP</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Fecha del examen:</span>
            <p>15/05/2019 - 8:00 a 11:30 am</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Locales</span>
            <p>San Isidro: Av. Arequipa 3505  - San isidro</p>
            <p>Los Olivos: Av. Tomas Valle 845 - Los Olivos</p>
            <p>Santa Beatriz: Av arequipa 1250 - Santa beatriz</p>
          </li>
        </ul>
      </div>

      <form class="col-xs-12 col-sm col-md-7 col-lg-7 simulacrum-form" name="simulacro_form" id="simulacro_form" method="post" action="">
        @csrf
        <div class="row start-xs step-1 step-container">
          <h2>Regístrate para participar</h2>

          <div class="row col-xs-12 start-xs simulacrum-step1-steps">
            <div class="col-xs-4">
              <div class="number">1</div>
              <div class="text">Ingresa tus datos</div>
            </div>
            <div class="col-xs-4">
              <div class="number">2</div>
              <div class="text">Presiona "Registrarme"</div>
            </div>
          </div>

        </div>

        <div class="row start-x step-2 step-container">
          <h2>Déjanos tus datos</h2>
          <div class="col-xs-12 start-xs">
            
            <fieldset>
              <input type="hidden" name="TIPO_DOCUMENTO" value="01" />
              <input type="hidden" name="SERVICIO" id="SERVICIO" value="{{ ($university->short_name=='UNI'?'ACAUN':'') }}{{ ($university->short_name=='PUCP'?'ACACA':'') }}{{ ($university->short_name=='San Marcos'?'ACASM':'') }}">
              <input type="hidden" name="CODE_URL" id="CODE_URL" value="{{ $idexam }}">
            </fieldset>

            <div class="col-xs-12">
              <fieldset class="form-group">
                <input
                  type="number"
                  name="NRO_DOCUMENTO"
                  id="step1_dni"
                  placeholder="DNI"
                  aria-label="DNI"
                  min="0"
                  max="99999999"
                  minlength="8"
                  maxLength="8"
                  required
                />
              </fieldset>
            </div>

            <fieldset class="form-group">
              <input
              type="onlytext"
              name="NOMBRES"
              id="names"
              placeholder="Nombres"
              required
              />
            </fieldset>

            <fieldset class="form-group">
              <input
                type="onlytext"
                name="PRIMER_APELLIDO"
                id="step1_PRIMER_APELLIDO"
                placeholder="Apellido paterno"
                aria-label="Apellido paterno"
                required
              />
            </fieldset>

            <fieldset class="form-group">
              <input
                type="onlytext"
                name="SEGUNDO_APELLIDO"
                id="step1_SEGUNDO_APELLIDO"
                placeholder="Apellido materno"
                required
              />
            </fieldset>

            <fieldset class="form-group">
              <input
              type="email"
              name="CORREO_E"
              id="email"
              placeholder="Email"
              required
              />
            </fieldset>

            <fieldset class="form-group">
              <select
                name="BLDG_TBL"
                id="cbx_venue"
                data-name="Local Inscripción"
                aria-label="Local inscripción"
                required>
                  <option value="" selected disabled hidden>Local inscripción</option>
              </select>
            </fieldset>
            
            <fieldset class="form-group">
              <select
                name="NIVEL_ESTUDIO"
                id="cbx_type"
                data-name="Tipo examen"
                aria-label="Tipo examen"
                required>
                  <option value="" selected disabled hidden>Tipo de Examen</option>
              </select>
            </fieldset>
            
            <fieldset class="form-group">
              <select
                name="CODIGO_AREA"
                id="cbx_area"
                data-name="Área"
                aria-label="Área"
                required>
                  <option value="" selected disabled hidden>Área</option>
              </select>
            </fieldset>
          
            <fieldset class="form-group">
              <select
                name="CODIGO_CARRERA"
                id="cbx_carrera"
                data-name="Carrera"
                aria-label="Carrera"
                required>
                  <option value="" selected disabled hidden>Carrera</option>
              </select>
            </fieldset>
          <!--<fieldset class="form-group">
            <textarea name="COMENTARIO" id="COMENTARIO" maxlength="500" rows="8" cols="80" placeholder="Comentarios"></textarea>            
          </fieldset>-->

            <button type="submit" id="form_submit" class="validate">Registrarme <i class="fa fa-check"></i></button>
          </div>
        </div>

      </form>

    </div>
  </div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'simulacrum-exam';
  @parent

@endsection