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

                  <h1 class="sub-title"><strong>Lectura</strong></h1>
                  <ul class="ul-li-squared">
                    <li>Lectura Comprensiva e Interpretativa</li>
                    <li>Lectura Crítica</li>
                  </ul>
                  <br /><br />
                  </p>

                  <h1 class="sub-title"><strong>Redacción</strong></h1>
                  <ul class="ul-li-squared">
                    <li>Ortografía y Puntuación</li>
                    <li>Vocabulario y Construcción Oracional</li>
                  </ul>
                  <br /><br />
                  </p>

                  <h1 class="sub-title"><strong>Matemática</strong></h1>
                  <ul class="ul-li-squared">
                    <li>Aritmética y Estadística</li>
                    <li>Álgebra</li>
                    <li>Geometría</li>
                    <li>Trigonometría</li>
                  </ul>
                  <br />



                </div>
                <div class="col-sm-6 xs-hide">
                  <img src="/static/images/academia/preparacion/pucp-1-cursos.png" class="preparation__item-image" alt="">
                </div>
              </div>
            </div>
          </div>

          <div class="js-tabs__content js-badger-accordion_2" id="ciclos">
            <div class="row col-xs-12 center-xs">
              <div class="row col-xs-12 col-sm-10 start-sm preparation__cicles">
                <div class="col-xs-12 col-sm-6 preparation__cicles__section">
                  <p>
                    <strong class="orange">Primera Opción:</strong> Dirigido a alumnos que se encuentran en 5.<sup>o</sup> de secundaria.
                  </p>

                  <p>
                    <strong class="orange">Semestral:</strong> Dirigido a alumnos que ya egresaron de secundaria.
                  </p>

                  <p>
                    <strong class="orange">Repaso:</strong> Dirigido a alumnos que cuentan con una preparación previa y postularán este año; es 100 % práctico.
                  </p>

                  <p>
                    <strong class="orange">Verano:</strong> Dirigido a alumnos que desean prepararse para una próxima postulación (en julio) y a escolares que desean un avance académico.
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
                    <li>La mejor plana docente especializada en el sistema PUCP</li>
                    <li>Material académico gratuito</li>
                    <li>Tutoría personalizada</li>
                    <li>Exigencia y disciplina</li>
                    <li>Intranet</li>
                    <li>Maratones académicas</li>
                    <li>Orientación vocacional y psicopedagógica</li>
                    <li>Asesorías y seminarios gratuitos</li>
                    <li>Exámenes semanales</li>
                    <li>Más de 38 años de experiencia</li>
                    <li>Becas mensuales para nuestros alumnos más destacados (sede Torrico)</li>
                    <li>Exámenes tipo admisión</li>
                  </ul>
                </div>
                <div class="col-sm-6 xs-hide">
                  <img src="/static/images/academia/preparacion/pucp-3-beneficios.png" class="preparation__item-image" alt="">
                </div>
              </div>
            </div>
          </div>

    </div>

  </div>
</div>



<div class="row col-xs-12 center-xs container-base preparation__section">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
      <h1 class="preparation__title preparation__title--and">También contamos con la preparación</h1>
    </div>
</div>
  <div class="row col-xs-12 center-xs beginning beginning-minus container-base">
      <div class="row col-xs-12 col-sm-3 col-md-3 start-xs start-sm start-md beginning-container beginning-minus">

        <div class="col-xs beginning--item @if($type=='uni') beginning--item-active @endif">
          <a href="/academia/preparacion-uni" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-uni.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation"><br></div>
              <span class="item-a-university">UNI</span>
            </div>
          </a>
        </div>

        <div class="beginning-breakline"></div>

        <div class="col-xs beginning--item @if($type=='san-marcos') beginning--item-active @endif">
          <a href="/academia/preparacion-san-marcos" class="item-a">
            <div class="item-a-container">
              <img class="item-a-img" src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}" alt="Nuevos Inicios">
              <div class="item-a-preparation"><br /></div>
              <span class="item-a-university">SAN MARCOS</span>
            </div>
          </a>
        </div>


      </div>
  </div>
