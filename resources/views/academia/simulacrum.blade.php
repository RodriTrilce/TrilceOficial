@extends('academia.layouts.template')

@section('title', 'Simulacros de '. $title)

@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-1"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Simulacros</h1>
        <p class="header-double-p-up">Inscripción a los simulacros {{$title}} y Resultados de los examenes</p>
      </div>
    </div>
  </div>

  <div class="nuevos-i nuevos-i-force-minus">
    <div class="row center-xs">
      <div class="row nuevos-i-box col-xs-12 col-md-9 col-sm-12 between-xs center-sm center-md center-lg nuevos-i-border">

        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($type=='uni') nuevos-i-active @endif">
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
        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($type=='san-marcos') nuevos-i-active @endif">
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
        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 @if($type=='pucp') nuevos-i-active @endif">
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

  <div class="row center-xs center-sm text-init simulacrum">
    <div class="col-xs-12 col-sm-9">
      <div class="row">
        <div class="col-xs-12 col-sm simulacrum-info">
          <h1>Sobre el simulacro {{ strtoupper($title)}}</h1>
          <ul>
            <li>
              <span>Inscripciones:</span>
              <p>{$data->date_signup}</p>
            </li>
            <li>
              <span>Fecha del examen:</span>
              <p>{$data->date_exam}</p>
            </li>
            <li>
              <span>Hora:</span>
              <p>$date->hour</p>
            </li>
            <li>
              <span>Locales</span>
              <p>$date->avenue</p>
            </li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm simulacrum-form">
          <div class="row start-xs step-1" id="step1">
            <h2>Regístrate para participar</h2>
            <ul>
              <li>1. Ingresa tu DNI</li>
              <li>2. Presiona "Validar Datos"</li>
              <li>3. Al final del registro, no olvides anotar tu código de inscripción</li>
            </ul>
            <div class="col-xs-6 text-init">
              <input type="text" name="f1_dni" id="s1_dni" placeholder="colocar DNI">
              <button type="button" name="f1_validate" id="f1_validate" class="validate">Validar <i class="fa fa-check"></i></button>
            </div>
          </div>

          <div class="row start-x step-2" id="step2">
            <h2>Déjanos tus datos</h2>
            <div class="col-xs-8 text-init">
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
                <label>Local Inscripción</label>
                <select>
                  <option value="volvo">Ciclos...</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
                </select>
              </fieldset>
              
              <fieldset>
                <label>Tipo de examen</label>
                <select>
                  <option value="volvo">Ciclos...</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
                </select>
              </fieldset>
              
              <fieldset>
                <label>Área</label>
                <select>
                  <option value="volvo">Ciclos...</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
                </select>
              </fieldset>
              
              <fieldset>
              <label>Carrera</label>
                <select>
                  <option value="volvo">Ciclos...</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
                </select>
              </fieldset>
              
              <textarea name="name" rows="8" cols="80" placeholder="Comentarios"></textarea>
              
              <button type="button" name="s2_validate" id="s2_validate" class="validate">Registrar <i class="fa fa-check"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row center-xs center-sm text-init simulacrum">
    <div class="col-xs-12 col-sm-9">
      <div class="row">
        
      </div>
    </div>
  </div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
  @parent

@endsection