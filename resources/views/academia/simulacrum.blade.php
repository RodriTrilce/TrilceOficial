{{! $breadcrumbs = Breadcrumbs::render('academia-simulacrum', $university->short_name) }}
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
        {{-- <p class="header-double-p-up">Inscripción a los simulacros y Resultados de los exámenes</p> --}}
      </div>
    </div>
  </div>

  <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-sm center-md">
      <div class="row col-xs-12 col-sm-8 col-md-7 start-xs start-sm start-md beginning-container beginning-minus">

        <div class="col-xs beginning--item @if($university->short_name=='UNI') beginning--item-active @endif">
          <a href="/academia/simulacros-uni" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">UNI</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($university->short_name=='San Marcos') beginning--item-active @endif">
          <a href="/academia/simulacros-san-marcos" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">SAN MARCOS</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($university->short_name=='PUCP') beginning--item-active @endif">
          <a href="/academia/simulacros-pucp" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-pucp.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation">Preparación</div>
              <span class="item-a-university">CATÓLICA</span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>

  <div class="clearfix"></div>



  @if($university->short_name=='UNI')

    <br><br>

    <div class="row col-xs-12 center-xs admission-ads">
            <div class="admission-ads__container">
              <a href="http://app.trilce.edu.pe/uni/registro/" target="_blank" class="admission-ads__link">
                <h1>¡Participa en nuestro Simulacro UNI - Ciclo Verano!</h1>
                <button class="admission-ads__container-cta banner__button-cta banner__button-cta--white" type="button" name="button">
                  Inscríbete aquí
                </button>
              </a>
            </div>
    </div>


  @endif



  {{-- <div class="row col-xs-12 start-xs center-sm simulacrum container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

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

      <div class="col-xs-12 col-sm simulacrum-form">
        <div class="row start-xs step-1 step-container" id="step1">
          <h2>Regístrate para participar</h2>

          <div class="row col-xs-12 start-xs simulacrum-step1-steps">
            <div class="col-xs-4">
              <div class="number">1</div>
              <div class="text">Ingresa tu DNI</div>
            </div>
            <div class="col-xs-4">
              <div class="number">2</div>
              <div class="text">Presiona "Vallidar datos"</div>
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
        <div class="row start-x step-2 step-container" id="step2">
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
      </div>

    </div>
  </div> --}}

  <div class="row center-xs center-sm text-init simulacrum container-base">

    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs">
      <h2 class="simulacrum-info-title simulacrum-info-title-bottom">Resultados del proceso</h2>
    </div>

    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs simulacrum-results">
      @foreach ($data as $key => $v)
        <div class="col-xs-12 col-sm-3 col-md-2">
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
