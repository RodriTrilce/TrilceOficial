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

  <div class="row col-xs-12 center-xs container-base">
    <div class="row col-xs-12 col-sm-9 start col-md-8 start-sm start-md enrollment-forms">
    <form class="col-xs-12" name="formenrollment" method="post" url="matricula-en-linea">
      @csrf

      <div class="tab tab1 row">
          <div class="col-xs center-xs xs-hide enrollment-img">
            <img src="{{ url('static/images/academia/img-enrollment-01.jpg') }}" alt="Matrícula en linea">
          </div>

          <div class="col-xs start-xs blockb">
            <h2>Ficha de inscripción <span>2018</span></h2>
            <h3>Nuevos inicios</h3>
            <p>Para ayudarte a realizar este proceso rápidamente, ingresa los siguientes datos.</p>

            <div class="form">
                <div class="row col-xs-12">

                  <div class="col-xs-12">
                    <fieldset class="form-group">
                      <input type="number" min="0" name="step1_dni" placeholder="DNI" aria-label="DNI" minlength="8" maxLength="8" required>
                    </fieldset>
                  </div>

                  <div class="col-xs-12">
                    <fieldset class="form-group">
                      <select name="step1_university" id="step1_university" aria-label="Universidad" required>
                        <option value="" selected disabled hidden>Universidad</option>
                        <option value="uni">UNI</option>
                        <option value="sm">San Marcos</option>
                        <option value="pucp">PUCP</option>
                      </select>
                    </fieldset>
                  </div>

                  <div class="col-xs-12">
                    <fieldset class="form-group">
                      <select name="step1_venue" id="step1_venue" aria-label="Sede" required>
                        <option value="" selected disabled>Sede</option>
                      </select>
                    </fieldset>
                  </div>

                  <div class="col-xs-12">
                    <fieldset class="form-group">
                      <select name="step1_cycle" id="step1_cycle" aria-label="Ciclo" required>
                        <option value="" selected disabled>Ciclo</option>
                      </select>
                    </fieldset>
                  </div>

                  <div class="col-xs-12">
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

      <div class="tab tab2 row center-xs">
          <div class="row col-xs-12 start-xs">
              <h2>Datos generales del <i>Alumno</i></h2>
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
                      <input type="text" minlength="3" name="step2_universitypostulate" placeholder="Universidad a la que postula" list="universityList" required>
                      <datalist id="universityList" title="Escoge una sugerencia">
                        <option value="Universidad Católica Sedes Sapientiae">
                        <option value="Universidad Nacional Mayor de San Marcos">
                        <option value="Universidad Nacional de San Cristóbal de Huamanga">
                        <option value="Universidad Nacional de San Antonio Abad del Cusco">
                        <option value="Universidad Nacional de Trujillo">
                        <option value="Universidad Nacional de San Agustín">
                        <option value="Universidad Nacional de Ingeniería">
                        <option value="Universidad Nacional Agraria La Molina">
                        <option value="Universidad Nacional San Luis Gonzaga">
                        <option value="Universidad Nacional del Centro del Perú">
                        <option value="Universidad Nacional de la Amazonía Peruana">
                        <option value="Universidad Nacional del Altiplano">
                        <option value="Universidad Nacional de Piura">
                        <option value="Universidad Nacional de Cajamarca">
                        <option value="Universidad Nacional Federico Villarreal">
                        <option value="Universidad Nacional Agraria de la Selva">
                        <option value="Universidad Nacional Hermilio Valdizán">
                        <option value="Universidad Nacional de Educación Enrique Guzmán y Valle">
                        <option value="Universidad Nacional Daniel Alcides Carrión">
                        <option value="Universidad Nacional del Callao">
                        <option value="Universidad Nacional José Faustino Sánchez Carrión">
                        <option value="Universidad Nacional Pedro Ruiz Gallo">
                        <option value="Universidad Nacional Jorge Basadre Grohmann">
                        <option value="Universidad Nacional Santiago Antúnez de Mayolo">
                        <option value="Universidad Nacional de San Martín">
                        <option value="Universidad Nacional de Ucayali">
                        <option value="Universidad Nacional de Tumbes">
                        <option value="Universidad Nacional del Santa">
                        <option value="Universidad Nacional de Huancavelica">
                        <option value="Universidad Nacional Amazónica de Madre de Dios">
                        <option value="Universidad Nacional Toribio Rodríguez de Mendoza de Amazonas">
                        <option value="Universidad Nacional Micaela Bastidas de Apurímac">
                        <option value="Universidad Nacional Intercultural de la Amazonía">
                        <option value="Universidad Nacional Tecnológica de Lima Sur">
                        <option value="Universidad Nacional José María Arguedas">
                        <option value="Universidad Nacional de Moquegua">
                        <option value="Universidad Nacional de Juliaca">
                        <option value="Universidad Nacional de Jaén">
                        <option value="Universidad Nacional de Frontera">
                        <option value="Universidad Nacional Autónoma de Chota">
                        <option value="Universidad Nacional de Barranca">
                        <option value="Universidad Nacional de Cañete">
                        <option value="Universidad Nacional Intercultural 'Fabiola Salazar Legua' de Bagua">
                        <option value="Universidad Nacional Intercultural de la Selva Central Juan Santos Atahualpa">
                        <option value="Universidad Nacional Intercultural de Quillabamba">
                        <option value="Universidad Nacional Autónoma de Alto Amazonas">
                        <option value="Universidad Nacional Autónoma Altoandina de Tarma">
                        <option value="Universidad Nacional Autónoma de Huanta">
                        <option value="Universidad Nacional Tecnológica de San Juan de Lurigancho">
                        <option value="Universidad Autónoma Municipal de Los Olivos">
                        <option value="Universidad Nacional Autónoma de Tayacaja Daniel Hernández Morillo">
                        <option value="Universidad Nacional Ciro Alegría">
                        <option value="Universidad Nacional Tecnológica de Lima Sur mediante Ley">
                        <option value="Pontificia Universidad Católica del Perú">
                        <option value="Universidad Peruana Cayetano Heredia">
                        <option value="Universidad Católica de Santa María">
                        <option value="Universidad del Pacífico">
                        <option value="Universidad de Lima">
                        <option value="Universidad de San Martín de Porres">
                        <option value="Universidad Femenina del Sagrado Corazón">
                        <option value="Universidad Inca Garcilaso de la Vega">
                        <option value="Universidad de Piura">
                        <option value="Universidad Ricardo Palma">
                        <option value="Universidad Andina Néstor Cáceres Velásquez">
                        <option value="Universidad Peruana Los Andes">
                        <option value="Universidad Peruana Unión">
                        <option value="Universidad Andina del Cusco">
                        <option value="Universidad Tecnológica de los Andes">
                        <option value="Universidad Privada de Tacna">
                        <option value="Universidad Particular de Chiclayo">
                        <option value="Universidad Católica Los Ángeles de Chimbote">
                        <option value="Universidad San Pedro">
                        <option value="Universidad Privada Antenor Orrego">
                        <option value="Universidad de Huánuco">
                        <option value="Universidad José Carlos Mariátegui">
                        <option value="Universidad Privada Marcelino Champagnat">
                        <option value="Universidad Cientfica del Perú">
                        <option value="Universidad Privada César Vallejo">
                        <option value="Universidad Peruana de Ciencias Aplicadas">
                        <option value="Universidad Privada del Norte">
                        <option value="Universidad San Ignacio de Loyola">
                        <option value="Universidad Alas Peruanas">
                        <option value="Universidad Privada Norbert Wiener">
                        <option value="Universidad Católica San Pablo">
                        <option value="Universidad Privada de Ica S.A.">
                        <option value="Universidad Privada San Juan Bautista SAC">
                        <option value="Universidad Tecnológica del Perú">
                        <option value="Universidad Continental">
                        <option value="Universidad Científica del Sur">
                        <option value="Universidad Católica Santo Toribio de Mogrovejo">
                        <option value="Universidad Privada Antonio Guillermo Urrelo">
                        <option value="Universidad Católica Sedes Sapientiae">
                        <option value="Universidad Señor de Sipán">
                        <option value="Universidad Católica de Trujillo Benedicto XVI">
                        <option value="Universidad para el Desarrollo Andino">
                        <option value="Universidad Peruana de Ciencias e Informática">
                        <option value="Universidad Sergio Bernales">
                        <option value="Universidad Peruana de las Américas">
                        <option value="Universidad ESAN">
                        <option value="Universidad Antonio Ruiz de Montoya">
                        <option value="Universidad Privada Telesup">
                        <option value="Universidad Privada de Pucallpa">
                        <option value="Universidad Autónoma de Ica SAC">
                        <option value="Universidad Privada San Carlos">
                        <option value="Universidad Peruana Simón Bolivar">
                        <option value="Universidad Peruana del Oriente">
                        <option value="Universidad de Ciencias y Humanidades">
                        <option value="Universidad Peruana de Integración Global">
                        <option value="Universidad Autónoma del Perú">
                        <option value="Universidad Privada Juan Meja Baca">
                        <option value="Universidad Jaime Bausate y Meza">
                        <option value="Universidad Peruana del Centro">
                        <option value="Universidad Privada Arzobispo Loayza">
                        <option value="Universidad Le Cordon Bleu">
                        <option value="Universidad Privada de Huancayo ' Franklin Roosevelt '">
                        <option value="Universidad de Lambayeque">
                        <option value="Universidad de Ciencias y Artes de América Latina">
                        <option value="Universidad Peruana de Arte Orval">
                        <option value="Universidad Privada de la Selva Peruana ">
                        <option value="Universidad Ciencias de la Salud">
                        <option value="Universidad de Ayacucho Federico Froebel">
                        <option value="Universidad Peruana de Investigación y Negocios">
                        <option value="Universidad Peruana Austral del Cusco">
                        <option value="Universidad Autónoma San Francisco">
                        <option value="Universidad San Andrés">
                        <option value="Universidad Interamericana para el Desarrollo">
                        <option value="Universidad Privada Juan Pablo II">
                        <option value="Universidad Privada Leonardo Da Vinci SAC.">
                        <option value="Universidad de Ingeniería y Tecnología">
                        <option value="Universidad La Salle">
                        <option value="Universidad Latinoamericana CIMA">
                        <option value="Universidad Privada de Trujillo">
                        <option value="Universidad Privada Autónoma del Sur">
                        <option value="Universidad María Auxiliadora">
                        <option value="Universidad Politécnica Amazónica">
                        <option value="Universidad Santo Domingo de Guzmán">
                        <option value="Universidad Marítima del Perú">
                        <option value="Universidad Privada Líder Peruana">
                        <option value="Universidad Privada Peruano Alemana">
                        <option value="Universidad Global del Cusco">
                        <option value="Universidad Santo Tomás de Aquino de Ciencia e Integración">
                        <option value="Universidad Privada SISE">
                        <option value="Universidad Seminario Evangélico de Lima">
                        <option value="Universidad Seminario Bíblico Andino">
                        <option value="Universidad Católica San José">
                      </datalist>
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

      <div class="tab tab3 row center-xs">

          <div class="row col-xs-12 start-xs">
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

      <div class="row col-xs-12 between-xs stepsarrows">
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
