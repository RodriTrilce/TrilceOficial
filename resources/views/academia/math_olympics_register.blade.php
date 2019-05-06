{{! $breadcrumbs = Breadcrumbs::render('academia-matholympics') }}
@extends('academia.layouts.template')
@section('title', 'Olimpiadas Matemáticas')
@section('content')

<div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-matholympics"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Olimpiadas de Matemática</h1>
      </div>
    </div>
</div>

<div class="clearfix"></div>
<br><br>
  {{--@if($university->short_name=='UNI' || $university->short_name=='San Marcos' || $university->short_name=='PUCP')--}}
    <div class="row col-xs-12 center-xs admission-ads">
            <div class="admission-ads__container">
                <h1> ¡ Participa de en nuestra Olimpiada SJL !</h1>
            </div>
    </div>
  {{--@endif--}}

  <div class="row col-xs-12 start-xs center-sm olympic container-base">
    <div class="row col-xs-12 col-sm-10 col-md-9 start-xs start-sm start-md">

      <div class="col-xs-12 col-sm olympic-info">
        <h2 class="olympic-info-title olympic-info-title-bottom">Información de Olimpiada</h2>
        <ul class="olympic-info-ul">
          <li>
            <span class="olympic-info-li-title">Descripción:</span>
            <p id='data'>Olimpiadas de Matemática SJL</p>
          </li>
          <li>
            <span class="olympic-info-li-title">Fecha del examen:</span>
            <p>13/05/2019 - Aptitud Académica y Humanidades</p>
            <p>15/05/2019 - Matemática</p>
            <p>17/05/2019 - Física y Química</p>
          </li>
          <li>
            <span class="olympic-info-li-title">Locales</span>
            <p>Comas</p>
            <p>Los Olivos Academia</p>
            <p>Santa Beatriz</p>
            <p>Torrico</p>
            <p>Villa el Salvador Academia</p>
          </li>
        </ul>
      </div>

      <form class="col-xs-12 col-sm col-md-7 col-lg-7 olympic-form" name="olimpiada_form" id="olimpiada_form" method="post" action="">
        @csrf
        <div class="row start-xs step-1 step-container">
          <h2>Regístrate para participar</h2>

          <div class="row col-xs-12 start-xs olympic-step1-steps">
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
              <input type="hidden" name="CODE_URL" id="CODE_URL" value="{{ $codurl }}">
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
                <select name="TIPO_INSTITUCION" id="cbx_institucion" data-name="Tipo de Institución" aria-label="Tipo de Institución" required>
                    <option value="" selected="" disabled="" hidden="">Tipo de Institución</option>
                    <option value="1">NACIONAL</option>
                    <option value="2">PARTICULAR</option>
                </select>
            </fieldset>
            <fieldset class="form-group">
              <input
              type="onlytext"
              name="COLEGIO_PROCEDENCIA"
              id="colegio_procedencia"
              placeholder="Colegio de Procedencia"
              required
              />
            </fieldset>
            <fieldset class="form-group">
              <select
                name="NIVEL_ESTUDIO"
                id="cbx_type"
                data-name="Tipo examen"
                aria-label="Tipo examen"
                required>
                  <option value="" selected disabled hidden>Nivel de Estudios</option>                  
              </select>
            </fieldset>

            <button type="submit" id="form_submit" class="validate">Registrarme <i class="fa fa-check"></i></button>
          </div>
        </div>
      </form>

    </div>
  </div>

      @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'olympics';
  @parent

@endsection