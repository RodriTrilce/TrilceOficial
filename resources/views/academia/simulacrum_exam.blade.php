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



  @if($university->short_name=='UNI')

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
            <span class="simulacrum-info-li-title">Inscripciones:</span>
            <p>{$data->date_signup}</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Fecha del examen:</span>
            <p>{$data->date_exam}</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Hora:</span>
            <p>$date->hour</p>
          </li>
          <li>
            <span class="simulacrum-info-li-title">Locales</span>
            <p>$date->avenue</p>
          </li>
        </ul>
      </div>

      <form class="col-xs-12 col-sm col-md-7 col-lg-7 simulacrum-form">
        <div class="row start-xs step-1 step-container" data-step="0">
          <h2>Regístrate para participar</h2>

          <div class="row col-xs-12 start-xs simulacrum-step1-steps">
            <div class="col-xs-4">
              <div class="number">1</div>
              <div class="text">Ingresa tu DNI</div>
            </div>
            <div class="col-xs-4">
              <div class="number">2</div>
              <div class="text">Presiona "Vallidar"</div>
            </div>
            <div class="col-xs-4">
              <div class="number">3</div>
              <div class="text">Anota tu código de Inscripción</div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 start-xs">
            <input type="text" name="f1_dni step-container" id="s1_dni" placeholder="DNI">
          </div>

          <div class="row col-xs-12">
            <div class="row col-xs-12 col-sm-6 end-xs start-sm">
              <button type="button" name="f1_validate" id="f1_validate" class="validate">Validar <i class="fa fa-check"></i></button>
            </div>
          </div>
        </div>
        <div class="row start-x step-2 step-container" data-step="1">
          <h2>Déjanos tus datos</h2>
          <div class="col-xs-12 start-xs">
            <fieldset>
              <input type="text" name="s2_dni" id="s2_dni" readonly>
            </fieldset>

            <fieldset>
              <input type="text" name="" id="" placeholder="Apellido paterno">
            </fieldset>

            <fieldset>
              <input type="text" name="" id="" placeholder="Apellido materno">
            </fieldset>

            <fieldset>
              <input type="text" name="" id="" placeholder="Nombres">
            </fieldset>

            <fieldset>
              <input type="text" name="" id="" placeholder="Email">
            </fieldset>


            <fieldset>
              <label for="s2_venue">Local Inscripción</label>
              <div>
                <select id="s2_venue" name="s2_venue">
                  <option value="volvo">Ciclos...</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
                </select>
              </div>
            </fieldset>

            <fieldset>
              <label for="s2_type_exam">Tipo de examen</label>
              <div>
                <select id="s2_type_exam" name="s2_type_exam">
                  <option value="volvo">Ciclos...</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
                </select>
              </div>
            </fieldset>

            <fieldset>
              <label for="s2_area">Área</label>
              <div>
                <select id="s2_area" name="s2_area">
                  <option value="volvo">Ciclos...</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
                </select>
              </div>
            </fieldset>

            <fieldset>
            <label for="s2_career">Carrera</label>
              <div>
                <select id="s2_career" name="s2_career">
                  <option value="volvo">Ciclos...</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
                </select>
              </div>
            </fieldset>

            <textarea name="name" rows="8" cols="80" placeholder="Comentarios"></textarea>

            <button type="button" name="s2_validate" id="s2_validate" class="validate">Registrar <i class="fa fa-check"></i></button>
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
