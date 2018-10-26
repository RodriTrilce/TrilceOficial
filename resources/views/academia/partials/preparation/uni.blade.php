<div class="row col-xs-12 center-xs container-base preparation__section">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
      <h1 class="preparation__title">¡Estudia con los mejores!</h1>
      <h3 class="preparation__subtitle">Encuentra todos nuestros ciclos disponibles</h3>
    </div>
</div>

@include('academia.partials.preparation.search')

<div class="row col-xs-12 center-xs container-base">
  <div class="col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="js-tabs frequent_questions__tabs preparation_tabs" id="preparation_tabs">

          <ul class="js-tabs__header">
            <li><a href="javascript:void();" class="js-tabs__title"><i class="fa fa-book"></i> Cursos</a></li>
            <li><a href="javascript:void();" class="js-tabs__title"><i class="fa fa-lightbulb-o"></i> Ciclos</a></li>
            <li><a href="javascript:void();" class="js-tabs__title"><i class="fa fa-pencil-square"></i> Beneficios</a></li>
          </ul>

          <div class="js-tabs__content js-badger-accordion_1" id="cursos">
            <div class="row col-xs-12 center-xs">
              <div class="row col-xs-12 col-sm-10 start-sm preparation__courses">
                <div class="col-xs-12 col-sm-6 preparation__courses-list">
                  <ul class="preparation__list-ul preparation__courses-list-ul ul-li-squared">
                    <li>Aritmética</li>
                    <li>Álgebra</li>
                    <li>Geometría</li>
                    <li>Trigonometría</li>
                    <li>Física</li>
                    <li>Química</li>
                    <li>Raz. Matemático</li>
                    <li>Raz. Verbal</li>
                    <li>Lengua</li>
                    <li>Literatura</li>
                    <li>Historia del Perú</li>
                    <li>Historia Universal</li>
                    <li>Geografía</li>
                    <li>Psicología</li>
                    <li>Economía</li>
                    <li>Filosofía y Lógica</li>
                    <li>Inglés</li>
                  </ul>
                </div>
                <div class="col-sm-6 xs-hide">
                  <img src="/static/images/academia/preparacion/1-cursos.png" class="preparation__item-image" alt="">
                </div>
              </div>
            </div>
          </div>

          <div class="js-tabs__content js-badger-accordion_2" id="ciclos">
            <div class="row col-xs-12 center-xs">
              <div class="row col-xs-12 col-sm-10 start-sm preparation__cicles">
                <div class="col-xs-12 col-sm-6 preparation__cicles__section">
                  <p>
                    <strong class="orange">Anual:</strong> Dirigido a alumnos que desean iniciar su preparación académica. Duración: 42 semanas aprox.
                  </p>

                  <p>
                    <strong class="orange">Repaso:</strong> Dirigido a alumnos que cuentan con base académica (Anual o Semestral completos) y próximos a postular en febrero. Duración: 9 semanas (primer inicio), 6 semanas (segundo inicio).
                  </p>

                  <p>
                    <strong class="orange">Semestral Mañana:</strong> Dirigido a alumnos que cuentan con una preparación académica previa. Duración: 23 semanas aprox.
                  </p>

                  <p>
                    <strong class="orange">Semestral Tarde:</strong> Dirigido a escolares que desean postular en el examen de Ingreso Escolar Nacional UNI. Duración: 18 semanas aprox.
                  </p>

                  <p>
                    <strong class="orange">Verano:</strong> Dirigido a alumnos que desean adquirir una base académica previa a una preparación  preuniversitaria. Duración: 7 semanas aprox.
                  </p>

                </div>
                <div class="col-sm-6 xs-hide">
                  <img src="/static/images/academia/preparacion/2-ciclos.png" class="preparation__item-image" alt="">
                </div>
              </div>
            </div>
          </div>

          <div class="js-tabs__content js-badger-accordion_3" id="beneficios">
            <div class="row col-xs-12 center-xs">
              <div class="row col-xs-12 col-sm-10 start-sm preparation__courses">
                <div class="col-xs-12 col-sm-6 preparation__courses-list">
                  <ul class="preparation__list-ul ul-li-squared">
                    <li>Más de 38 años de experiencia</li>
                    <li>Becas mensuales para nuestros alumnos más destacados*</li>
                    <li>La mejor plana docente</li>
                    <li>Orientación vocacional y psicopedagógica</li>
                    <li>Maratones dominicales de ciencias</li>
                    <li>Grupos de estudio por las tardes (gratuitos)</li>
                    <li>Libros totalmente gratis</li>
                    <li>Control tutorial</li>
                    <li>Exigencia y disciplina</li>
                    <li>Asesorías, simulacros tipo examen de admisión y seminarios dominicales gratuitos</li>
                    <li>Más horas de clases por menos costo</li>
                    <li>Intranet</li>
                    <li>Coloquios</li>
                  </ul>
                  <br>
                  <i><strong>*Beca completa, media beca y 1/4 de beca (según su rendimiento).</strong></i>
                </div>
                <div class="col-sm-6 xs-hide">
                  <img src="/static/images/academia/preparacion/3-beneficios.png" class="preparation__item-image" alt="">
                </div>
              </div>
            </div>
          </div>

    </div>

  </div>
</div>



<div class="row col-xs-12 center-xs container-base preparation__section">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
      <h1 class="preparation__title preparation__title--and">También preparamos a nuestros alumnos para ingresar a estas universidades:</h1>
    </div>
</div>
  <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
      <div class="row col-xs-12 col-sm-3 col-md-3 start-xs start-sm start-md beginning-container beginning-minus">


        <div class="col-xs beginning--item @if($type=='san-marcos') beginning--item-active @endif">
          <a href="/academia/preparacion-san-marcos" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation"><br /></div>
              <span class="item-a-university">SAN MARCOS</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($type=='pucp') beginning--item-active @endif">
          <a href="/academia/preparacion-pucp" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-pucp.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation"><br /></div>
              <span class="item-a-university">PUCP</span>
            </div>
          </a>
        </div>

      </div>
  </div>
