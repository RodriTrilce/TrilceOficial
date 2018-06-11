{{! $breadcrumbs = Breadcrumbs::render('academia-enrollment') }}
@extends('academia.layouts.template')
@section('title', 'Pre Matrícula en linea')
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-2"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Prematrícula</h1>
      </div>
    </div>
  </div>

  <div class="enrollment-steps" id="steps-guide">
    <div class="active">Paso 1</div>
    <div>Paso 2</div>
    <div>Paso 3</div>
  </div>

@if ($errors->any())
  <div class="row col-xs-12 center-xs" id="error-container">
    <div class="form-error">
        <ul class="form-error-ul">
        @foreach ($errors->all() as $error)
          <li class="form-li">{{ $error }}</li>
        @endforeach

          {{-- <li class="form-li">El campo <span>Test</span> debe ser mayor a 3 caracteres</li>
          <li class="form-li">El campo <span>Test</span> debe ser mayor a 3 caracteres</li> --}}
        </ul>
    </div>
  </div>
@endif

  <div class="row col-xs-11 col-sm-11 col-md-9 center-sm enrollment-forms container-base">
    <form class="col-xs-12" name="formenrollment" method="post" url="matricula-en-linea">
      @csrf

      <div class="tab tab1 row">
          <div class="col-xs-12 col-sm-5 col-md-6 center-sm xs-hide enrollment-img">
            <img src="{{ url('static/images/academia/img-enrollment-01.jpg') }}" alt="Matrícula en linea">
          </div>

          <div class="col-xs-12 col-sm-6 col-md-5 text-init blockb">
            <h2>Ficha de inscripción <span>2018</span></h2>
            <h3>Nuevos inicios</h3>
            <p>Para ayudarte a realizar este proceso rápidamente, ingresa los siguientes datos.</p>

            <div class="form">
                <div class="row col-xs-12 col-sm-10">

                  <div class="col-xs-12 col-sm-12">
                    <fieldset class="form-group">
                      <input type="number" min="0" name="step1_dni" placeholder="DNI" aria-label="DNI" minlength="8" maxLength="8" required>
                    </fieldset>
                  </div>

                  <div class="col-xs-12 col-sm-12">
                    <fieldset class="form-group">
                      <select name="step1_university" id="step1_university" aria-label="Universidad" required>
                        <option value="" selected disabled hidden>Universidad</option>
                        <option value="uni">UNI</option>
                        <option value="sm">San Marcos</option>
                        <option value="pucp">PUCP</option>
                      </select>
                    </fieldset>
                  </div>

                  <div class="col-xs-12 col-sm-12">
                    <fieldset class="form-group">
                      <select name="step1_venue" id="step1_venue" aria-label="Sede" required>
                        <option value="" selected disabled>Sede</option>
                      </select>
                    </fieldset>
                  </div>

                  <div class="col-xs-12 col-sm-12">
                    <fieldset class="form-group">
                      <select name="step1_cycle" id="step1_cycle" aria-label="Ciclo" required>
                        <option value="" selected disabled>Ciclo</option>
                      </select>
                    </fieldset>
                  </div>

                  <div class="col-xs-12 col-sm-12">
                    <fieldset class="form-group">
                      <select name="step1_turn" id="step1_turn" aria-label="Turno" required>
                        <option value="" selected disabled hidden >Turno</option>
                        <option value="Mañana">Mañana</option>
                        <option value="Tarde">Tarde</option>
                      </select>
                    </fieldset>
                  </div>

                  <input type="text" class="condition" name="step1_condition" placeholder="Condición" value="P" hidden readonly>
                </div>

                <!--
                <div class="col-xs-12 col-sm-10">
                  <div class="file-upload-wrapper form-group" data-text="Select your file!">
                      <input type="file" accept="image/jpeg, image/png" maxfilesize="0.700" mindimensions="500x500" name="step1_photo" class="file-upload-field" id="step1_photo" data-text="Adjuntar foto" required>
                  </div>
                  <p class="formats">
                    <span>- Formatos: .jpg, .png</span><br>
                    <span>- Peso máximo: 700kb</span>
                  </p>
                </div>
              -->

            </div>
          </div>
        </div>
      <!-- end step1 -->

      <div class="tab tab2 row center-xs">
          <div class="col-xs-12 col-sm-9 col-md-8 col-lg-7 text-init">
              <h2>Datos generales del <i>Alumno</i></h2>
              <h4>Generalidades</h4>

                <div class="row col-xs-12">
                  <div class="col-xs-12">
                    <fieldset class="form-group">
                      <input type="onlytext" minlength="3" name="step2_names" aria-label="Nombres y apellidos" placeholder="Apellido paterno / apellido materno / nombres" required>
                    </fieldset>
                  </div>
                </div>

                <div class="row col-xs-12">
                  <div class="col-xs-12 col-sm-3">
                    <fieldset class="form-group">
                      <select name="step2_district" id="step2_district" aria-label="Distrito" required>
                        <option value="" selected disabled>Distrito</option>
                        <option value="Lima">Lima</option>
                        <option value="Ancon">Ancon</option>
                        <option value="Ate">Ate</option>
                        <option value="Barranco">Barranco</option>
                        <option value="Brena">Bre&ntilde;a</option>
                        <option value="Carabayllo">Carabayllo</option>
                        <option value="Chaclacayo">Chaclacayo</option>
                        <option value="Chorrillos">Chorrillos</option>
                        <option value="Cieneguilla">Cieneguilla</option>
                        <option value="Comas">Comas</option>
                        <option value="El Agustino">El Agustino</option>
                        <option value="Independencia">Independencia</option>
                        <option value="Jesus Maria">Jesus Maria</option>
                        <option value="La Molina">La Molina</option>
                        <option value="La Victoria">La Victoria</option>
                        <option value="Lince">Lince</option>
                        <option value="Los Olivos">Los Olivos</option>
                        <option value="Lurigancho">Lurigancho</option>
                        <option value="Lurin">Lurin</option>
                        <option value="Magdalena Del Mar">Magdalena Del Mar</option>
                        <option value="Magdalena Vieja">Magdalena Vieja</option>
                        <option value="Miraflores">Miraflores</option>
                        <option value="Pachacamac">Pachacamac</option>
                        <option value="Pucusana">Pucusana</option>
                        <option value="Puente Piedra">Puente Piedra</option>
                        <option value="Punta Hermosa">Punta Hermosa</option>
                        <option value="Punta Negra">Punta Negra</option>
                        <option value="Rimac">Rimac</option>
                        <option value="San Bartolo">San Bartolo</option>
                        <option value="San Borja">San Borja</option>
                        <option value="San Isidro">San Isidro</option>
                        <option value="San Juan De Lurigancho">San Juan De Lurigancho</option>
                        <option value="San Juan De Miraflores">San Juan De Miraflores</option>
                        <option value="San Luis">San Luis</option>
                        <option value="San Martin De Porres">San Martin De Porres</option>
                        <option value="San Miguel">San Miguel</option>
                        <option value="Santa Anita">Santa Anita</option>
                        <option value="Santa Maria Del Mar">Santa Maria Del Mar</option>
                        <option value="Santa Rosa">Santa Rosa</option>
                        <option value="Santiago De Surco">Santiago De Surco</option>
                        <option value="Surquillo">Surquillo</option>
                        <option value="Villa El Salvador">Villa El Salvador</option>
                        <option value="Villa Maria Del Triunfo">Villa Maria Del Triunfo</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-sm">
                    <fieldset class="form-group">
                      <input type="text" class="inputfull" name="step2_address" placeholder="Dirección" aria-label="Dirección" required>
                    </fieldset>
                  </div>
                </div>

                <div class="row col-xs-12">
                  <div class="col-xs-12 col-sm">
                    <fieldset class="form-group">
                      <input type="tel" minlength="6" name="step2_phonehome" placeholder="Telf. Casa" aria-label="Telf. Casa" required>
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-sm">
                    <fieldset class="form-group">
                      <input type="tel" minlength="9" name="step2_mobile" placeholder="Celular" aria-label="Celular" required>
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-sm">
                    <fieldset class="form-group">
                      <input type="email" name="step2_email" placeholder="Correo electrónico" aria-label="Correo electrónico" required>
                    </fieldset>
                  </div>
                </div>

                <br />
                <h4>Datos académicos</h4>
                <div class="row col-xs-12">
                  <div class="col-xs-12 col-sm-6">
                    <fieldset class="form-group">
                      <input type="number" min="0" minlength="4" maxlength="4" name="step2_year_finish_school" placeholder="Año en que terminó el colegio" required>
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <fieldset class="form-group">
                      <input type="text" minlength="5" name="step2_school" placeholder="Colegio" required>
                    </fieldset>
                  </div>
                </div>

                <div class="row col-xs-12">
                  <div class="col-xs-12 col-sm-6">
                    <fieldset class="form-group">
                      <input type="text" minlength="3" name="step2_universitypostulate" placeholder="Universidad a la que postula" required>
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <fieldset class="form-group">
                      <input type="onlytext" minlength="5" name="step2_profession" placeholder="Carrera" required>
                    </fieldset>
                  </div>
                </div>

                <div class="row col-xs-12">
                  <div class="col-xs-12">
                    <fieldset class="form-group">
                      <input type="text" name="step2_oldacademy" placeholder="Academia de preparación anterior">
                    </fieldset>
                  </div>
                </div>

          </div>

      </div>
      <!-- end step2 -->

      <div class="tab tab3 row center-xs">

          <div class="col-xs-12 col-sm-9 col-md-8 col-lg-7 text-init">
              <h2>Datos generales del <i>Padre y/o apoderado</i></h2>

                <div class="row col-xs-12">
                  <div class="col-xs start-xs">
                    <fieldset class="form-group">
                      <label class="radio-inline">
                        <span>Apoderado</span> <input type="radio" name="step3_apoderate" id="step3_apoderate" value="attorney" aria-label="Apoderado" required>
                      </label>
                      <label class="radio-inline">
                        <span>Madre</span> <input type="radio" name="step3_apoderate" id="step3_apoderate" value="mother" aria-label="Apoderado" required>
                      </label>
                      <label class="radio-inline">
                        <span>Padre</span> <input type="radio" name="step3_apoderate" id="step3_apoderate" value="father" aria-label="Apoderado" required>
                      </label>
                    </fieldset>
                  </div>
                </div>

                <div class="row col-xs-12">
                  <div class="col-xs-12 col-sm-9">
                    <fieldset class="form-group">
                      <input type="onlytext" minlength="2" name="step3_names" placeholder="Nombres y apellidos" required>
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-sm">
                    <fieldset class="form-group">
                      <input type="number" min="0" minlength="8" maxLength="8" name="step3_dni" placeholder="DNI" required>
                    </fieldset>
                  </div>
                </div>

                <div class="row col-xs-12">
                  <div class="col-xs-12 col-sm">
                    <fieldset class="form-group">
                      <input type="tel" minlength="6" name="step3_phonehome" placeholder="Telf. Casa" required>
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-sm">
                    <fieldset class="form-group">
                      <input type="tel" minlength="6" name="step3_mobile" placeholder="Celular" required>
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <fieldset class="form-group">
                      <input type="email" name="step3_email" placeholder="Correo electrónico" required>
                    </fieldset>
                  </div>
                </div>

                <div class="row col-xs-12">
                  <div class="col-xs-12 col-sm-6">
                    <fieldset class="form-group">
                      <input type="text" name="step3_work_location" placeholder="Centro de trabajo" required>
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <fieldset class="form-group">
                      <input type="tel" minlength="5" name="step3_work_phone" placeholder="Télefono centro de trabajo" required>
                    </fieldset>
                  </div>
                </div>

                <div class="row col-xs-12">
                  <div class="col-xs-12 col-sm-6">
                    <fieldset class="form-group">
                      <input type="onlytext" name="step3_profession" placeholder="Ocupación" required>
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <fieldset class="form-group">
                      <input type="tel" minlength="6" name="step3_emergencyphone" placeholder="En caso de emergencias llamar a:" required>
                    </fieldset>
                  </div>
                </div>

                <div class="row col-xs-12">
                  <div class="col col-xs-12">
                    <fieldset class="form-group">
                      <label for="step3_tos"><span>Términos y Condiciones</span></label>
                      <input type="checkbox" name="checkbox" class="checkterms" id="step3_tos" aria-label="Confirmar Términos y Condiciones" required>
                    </fieldset>
                    <span><a id="termsActive">Leer términos y condiciones</a></span>
                  </div>

                  <div class="terms" id="terms">
                    <h1>CONDICIONES ECONÓMICAS Y DEL SERVICIO DE LA ACADEMIA PREUNIVERSITARIA</h1>
                    <ol class="list">
                    <li>La hora de ingreso es de lunes a sábado de 7:30 a. m. a 8:00 a. m. y se considerará
                    tardanza entre las 8:01 a. m. a 8:15 a. m. Posterior a esa hora, no se permitirá el ingreso a
                    la institución.</li>

                    <li>De realizarse el pago del ciclo de forma fraccionada en dos cuotas, este tendrá un recargo
                    adicional de S/<div id="terms-2"></div>. Este monto será recargado en la primera cuota, debiéndose cancelar
                    la segunda cuota en un lapso de <div id="terms-21"></div> días.</li>

                    <li>En el caso de que el padre de familia, apoderado o alumno mayor de edad opte por
                    retirarse habiéndose iniciado las clases, se le hará un cobro de S/<div id="terms-3">50</div> por concepto de
                    penalidad y un cobro de S/<div id="terms-31">30</div> por concepto de materiales, así como también se le
                    retendrá el monto de días asistidos y no asistidos sin justificación.</li>

                    <li>En caso el alumno solicite traslado de sede o traslado a otro turno o ciclo dentro del local
                    en donde se le presta servicio, se procederá a descontar los días asistidos y no asistidos sin
                    justificación. El monto restante podrá ser utilizado para las inscripciones en otro ciclo,
                    debiéndose abonar la diferencia.</li>

                    <li>En el caso de que el padre de familia, apoderado o alumno mayo de edad requiera la
                    devolución del dinero antes de iniciado el periodo de clases, la institución realizará el
                    cobro de S/<div id="terms-5">50</div> por concepto de gastos administrativos.</li>

                    <li>Para el trámite de postergación de matrícula, se procederá a descontar los días asistidos y
                    no asistidos sin justificación. El monto restante será reservado para el siguiente ciclo
                    académico inmediato en el cual al alumno se matricule. En caso decida no retomar la
                    preparación al ciclo siguiente, el monto reservado se le será restituido, a solicitud del
                    padre de familia, apoderado o alumno mayor de edad.</li>

                    <li>El ingreso a la academia se realiza portando la tarjeta de control con el recibo original de
                    pago adjunto: en caso de no estar al día en el pago de la pensión, no se le permitirá el
                    ingreso. Por la pérdida de la tarjeta o del recibo, se deberá cancelar S/10.00 por concepto
                    de duplicado.</li>

                    <li>El alumno será evaluado en forma constante por medio de exámenes de entrada,
                    simulacros de admisión, participación en clases, desarrollo de prácticas, tareas y buena
                    conducta. Dichas condiciones se tomarán en cuenta para las calificaciones de aula o
                    reagrupaciones.</li>

                    <li>La pérdida del libro <div id="terms-9"><select id="terms-9-s" class="terms-9"><option value="ciencia" selected>Ciencia</option><option value="letras">Letras</option></select></div> que otorga la institución dará lugar al cobro de S/<div id="terms-91"></div> por concepto
                    de duplicado.</li>

                    <li>La institución realiza maratones académicas en horario diurno y nocturno, sin ser
                    obligatoria la asistencia para el alumno. En caso asista, tendrá que efectuar el pago
                    adicional de S/<div id="terms-10">5</div>.</li>

                    <li> El dictado de clases iniciará siempre que se alcance el número mínimo de alumnos
                    matriculados establecido por la institución.</li>

                    <li>Manifiesto mi conformidad en caso la institución cambie la fecha de inicio del dictado de
                    clases del ciclo en cuestión.</li>

                    <li>En los casos de los ciclos anuales, semestrales o intensivos, el cobro de la pensión se hace
                    en 30 días; si pasado el vencimiento de dicha pensión el alumno opta por reingresar a la
                    academia deberá cancelar la pensión en los 30 días siguientes de vencida la pensión
                    anterior.</li>

                    <li> En el caso de que el alumno pida traslado de pago de la pensión mensual a otro alumno,
                    ya sea que se trate de un alumno nuevo o ya matriculado (en el ciclo anual, semestral,
                    intensivo, o en el ciclo de verano o repaso), se descontará de dicho monto la cantidad de
                    S/<div id="terms-14">50</div> por concepto de traslado de titularidad. Cabe precisar que el traslado de pago se
                    realizará única y exclusivamente por las pensiones que corresponden a los meses
                    pendientes de clases.</li>
                    </ol>

                    <p><strong>“Declaro tener conocimiento de que la Academia Preuniversitaria Trilce incluirá la información
                    personal de mi menor hijo (a), padres y/o apoderados en su base de datos en un tiempo indefinido
                    para fines de la actividad que desarrolla de acuerdo a la ley N° 29733"</strong></p>
                  </div>
                </div>

                <div class="row col-xs-12 captcha_enrollment">
                  <div class="col-xs-12">
                    <fieldset class="form-group">
                      <input type="captcha" class="captcha" name="captcha" id="captcha" aria-label="Captcha">
                    </fieldset>
                  </div>

                  <div class="col-xs-12">
                    <div class="g-recaptcha" data-callback="captcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                  </div>
                </div>

          </div>

      </div>
      <!-- end step3 -->

      <div class="row col-xs-12 col-sm-8 center-sm stepsarrows">
        <div class="col-xs start-xs">
          <fieldset>
            <button type="button" id="prev" class="validate"><i class="fa fa-angle-left"></i> Atras</button>
          </fieldset>
        </div>
        <div class="col-xs end-xs">
          <fieldset>
            <button type="button" id="next" class="validate">Siguiente <i class="fa fa-angle-right"></i></button>
          </fieldset>
        </div>
      </div>
      <!-- end steps -->

    </form>
  </div>


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'enrollment';

    function captcha(){
      if(grecaptcha.getResponse().length > 0){
        document.getElementById("captcha").value = 'valid';
      }
    }
  @parent
  <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
