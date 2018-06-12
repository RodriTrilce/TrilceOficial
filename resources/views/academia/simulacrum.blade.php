{{! $breadcrumbs = Breadcrumbs::render('academia-simulacrum', $university->short_name) }}
@extends('academia.layouts.template')
@section('title', 'Simulacros de '. $university->name)
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-1"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Simulacros</h1>
        <p class="header-double-p-up">Inscripción a los simulacros y Resultados de los exámenes</p>
      </div>
    </div>
  </div>

  <div class="nuevos-i nuevos-i-force-minus container-base">
    <div class="row center-xs">
      <div class="row nuevos-i-box col-xs-12 col-sm-9 col-md-8 between-xs center-sm center-md nuevos-i-border">

        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($university->short_name=='UNI') nuevos-i-active @endif">
          <a href="/academia/simulacros-uni">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/ico-logo-uni.jpg" alt="UNI">
              <h4>Simulacro</h4>
              <h3>UNI</h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($university->short_name=='San Marcos') nuevos-i-active @endif">
          <a href="/academia/simulacros-san-marcos">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/ico-logo-sm.jpg" alt="UNMSM">
              <h4>Simulacro</h4>
              <h3>San Marcos</h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>
        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($university->short_name=='PUCP') nuevos-i-active @endif">
          <a href="/academia/simulacros-pucp">
            <div class="nuevos-i-top">
              <img src="/static/images/academia/ico-logo-cato.jpg" alt="PUCP">
              <h4>Simulacro</h4>
              <h3>PUCP</h3>
            </div>
            <div class="nuevos-i-bottom">
              <hr>
              <span>Más información <i class="fa fa-search"></i></span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>

  <div class="row col-xs-12 start-xs center-sm simulacrum container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="col-xs-12 col-sm simulacrum-info">
        <h2 class="simulacrum-info-title">Sobre el simulacro {{ strtoupper($university->short_name)}}</h2>
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
      <div class="col-xs-12 col-sm simulacrum-form container-base">
        <div class="row start-xs step-1" id="step1">
          <h2>Regístrate para participar</h2>
          <ul>
            <li>1. Ingresa tu DNI</li>
            <li>2. Presiona "Validar Datos"</li>
            <li>3. Al final del registro, no olvides anotar tu código de inscripción</li>
          </ul>
          <div class="col-xs-6 text-init">
            <input type="text" name="f1_dni" id="s1_dni" placeholder="DNI">
            <button type="button" name="f1_validate" id="f1_validate" class="validate">Validar <i class="fa fa-check"></i></button>
          </div>
        </div>

        <div class="row start-x step-2" id="step2">
          <h2>Déjanos tus datos</h2>
          <div class="col-xs-12 col-sm-11 text-init">
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
      </div>

    </div>
  </div>

  <div class="row center-xs center-sm text-init simulacrum container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs simulacrum-results">
      @foreach ($data as $key => $v)
        <div class="col-xs-12 col-sm-2">
          <a href="{{ $v->url }}" target="_blank">
            <div class="simulacrum-results-pdf">
              <i class="fa fa-file-pdf-o"></i>
            </div>
            <div class="simulacrum-results-text">
              <span>{{ $v->name }}</span>
              <span>{{ $v->description }}</span>
              <span>{{ date('d-m-Y', strtotime($v->created_at)) }}</span>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'simulacrum';
  @parent

@endsection
