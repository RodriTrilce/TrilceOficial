{{! $breadcrumbs = Breadcrumbs::render('academia-your-best-option') }}
@extends('academia.layouts.template')
@section('title', '¿Por qué somos tu mejor opción?')
@section('content')

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/academia/banners/your-best-option.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/academia/banners/your-best-option.jpg') }}" alt="">
    </div>
  </div>

  <div class="row col-xs-12 center-xs about-container container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="row col-xs-12">
        <div class="col-xs-3">
          <img src="{{ url('/static/images/academia/tu-mejor-opcion/your-best-option-text1.svg') }}" alt="Por qué somos tu mejor opción">
        </div>
        <div class="col-xs">
          <h1>
            Estudia
            <br>
            con los mejores
          </h1>
          <p>
            Somos una organización educativa dedicada a la preparación exclusiva de los postulantes a las mejores universidades del país: <strong>PUCP</strong>, <strong>San Marcos</strong> y <strong>UNI</strong>. Nuestro plan de estudios y material académico están diseñados de acuerdo al examen de admisión de cada universidad. Nuestros años de experiencia y dedicación respaldan nuestros resultados: ingresos masivos y primeros puestos.
          </p>
        </div>
      </div>


      <hr class="grayhr2" />

      <div class="row col-xs-12">
        <div class="row col-xs-12 col-sm-3 best-option-item">
          <div class="col-xs-2 col-sm-12 item-image"><img src="{{ url('/static/images/academia/tu-mejor-opcion/ico-01.svg') }}" alt=""></div>
          <div class="col-xs col-sm-12 item-text">
            <span class="item-text-l"><strong>|</strong></span> Más de 38 años de experiencia.
          </div>
        </div>
        <div class="row col-xs-12 col-sm-3 best-option-item">
          <div class="col-xs-2 col-sm-12 item-image"><img src="{{ url('/static/images/academia/tu-mejor-opcion/ico-02.svg') }}" alt=""></div>
          <div class="col-xs col-sm-12 item-text">
            <span class="item-text-l"><strong>|</strong></span> Exámenes semanales.
          </div>
        </div>
        <div class="row col-xs-12 col-sm-3 best-option-item">
          <div class="col-xs-2 col-sm-12 item-image"><img src="{{ url('/static/images/academia/tu-mejor-opcion/ico-03.svg') }}" alt=""></div>
          <div class="col-xs col-sm-12 item-text">
            <span class="item-text-l"><strong>|</strong></span> Exámenes tipo admisión.
          </div>
        </div>
        <div class="row col-xs-12 col-sm-3 best-option-item">
          <div class="col-xs-2 col-sm-12 item-image"><img src="{{ url('/static/images/academia/tu-mejor-opcion/ico-04.svg') }}" alt=""></div>
          <div class="col-xs col-sm-12 item-text">
            <span class="item-text-l"><strong>|</strong></span> Becas mensuales para nuestros alumnos más destacados (Sede Torrico).
          </div>
        </div>
        <div class="row col-xs-12 col-sm-3 best-option-item">
          <div class="col-xs-2 col-sm-12 item-image"><img src="{{ url('/static/images/academia/tu-mejor-opcion/ico-05.svg') }}" alt=""></div>
          <div class="col-xs col-sm-12 item-text">
            <span class="item-text-l"><strong>|</strong></span> La mejor plana docente especializada en el sistema PUCP.
          </div>
        </div>
        <div class="row col-xs-12 col-sm-3 best-option-item">
          <div class="col-xs-2 col-sm-12 item-image"><img src="{{ url('/static/images/academia/tu-mejor-opcion/ico-06.svg') }}" alt=""></div>
          <div class="col-xs col-sm-12 item-text">
            <span class="item-text-l"><strong>|</strong></span> Asesorías y seminarios gratuitos.
          </div>
        </div>
        <div class="row col-xs-12 col-sm-3 best-option-item">
          <div class="col-xs-2 col-sm-12 item-image"><img src="{{ url('/static/images/academia/tu-mejor-opcion/ico-07.svg') }}" alt=""></div>
          <div class="col-xs col-sm-12 item-text">
            <span class="item-text-l"><strong>|</strong></span> Maratones académicas.
          </div>
        </div>
        <div class="row col-xs-12 col-sm-3 best-option-item">
          <div class="col-xs-2 col-sm-12 item-image"><img src="{{ url('/static/images/academia/tu-mejor-opcion/ico-08.svg') }}" alt=""></div>
          <div class="col-xs col-sm-12 item-text">
            <span class="item-text-l"><strong>|</strong></span> Orientación vocacional y psicopedagógica.
          </div>
        </div>
        <div class="row col-xs-12 col-sm-3 best-option-item">
          <div class="col-xs-2 col-sm-12 item-image"><img src="{{ url('/static/images/academia/tu-mejor-opcion/ico-09.svg') }}" alt=""></div>
          <div class="col-xs col-sm-12 item-text">
            <span class="item-text-l"><strong>|</strong></span> Material académico gratuito.
          </div>
        </div>
        <div class="row col-xs-12 col-sm-3 best-option-item">
          <div class="col-xs-2 col-sm-12 item-image"><img src="{{ url('/static/images/academia/tu-mejor-opcion/ico-10.svg') }}" alt=""></div>
          <div class="col-xs col-sm-12 item-text">
            <span class="item-text-l"><strong>|</strong></span> Exigencia y disciplina.
          </div>
        </div>
        <div class="row col-xs-12 col-sm-3 best-option-item">
          <div class="col-xs-2 col-sm-12 item-image"><img src="{{ url('/static/images/academia/tu-mejor-opcion/ico-11.svg') }}" alt=""></div>
          <div class="col-xs col-sm-12 item-text">
            <span class="item-text-l"><strong>|</strong></span> Tutoría personalizada.
          </div>
        </div>
        <div class="row col-xs-12 col-sm-3 best-option-item">
          <div class="col-xs-2 col-sm-12 item-image"><img src="{{ url('/static/images/academia/tu-mejor-opcion/ico-12.svg') }}" alt=""></div>
          <div class="col-xs col-sm-12 item-text">
            <span class="item-text-l"><strong>|</strong></span> Intranet para alumnos.
          </div>
        </div>
      </div>

      <hr class="grayhr2" />

      <div class="row col-xs-12">
        <div class="col-xs-12 col-sm-2 best-option-courses">
          <h3>Cursos por universidad</h3>
          <h4>Entérate más visitando</h4>
          <a href="/academia/preparacion-pucp/" class="button-a button-a-gray">Nuevos inicios <i class="fa fa-angle-right"></i></a>
        </div>

        <div class="row col-xs-12 col-sm best-option-courses-items">
          <div class="col-xs-12 col-sm-4 item">
            <div class="col-xs-12 item-header">
              <div class="col-xs-12 item-header-image">
                <img src="{{ url('/static/images/academia/svg/logo-uni.svg') }}" alt="">
              </div>
              <br>
              <h4>
                <span>Preparación</span>
                <br>
                UNI
              </h4>
            </div>

            <hr class="separator-squared separator-orange">
            <div class="col-xs-12 item-list">
              <h4>Ciencias</h4>
              <ul>
                <li>Aritmética</li>
                <li>Álgebra</li>
                <li>Geometría</li>
                <li>Trigonometría</li>
                <li>Física</li>
                <li>Química</li>
                <li>Raz. Matemático </li>
              </ul>

              <h4>Letras</h4>
              <ul>
                <li>Raz. Verbal</li>
                <li>Lengua · Literatura</li>
                <li>Historia del Perú</li>
                <li>Historia Universal</li>
                <li>Geografía</li>
                <li>Psicología</li>
                <li>Economía</li>
                <li>Filosofía y Lógica</li>
                <li>Inglés</li>
              </ul>

            </div>
          </div>
          <div class="col-xs-12 col-sm-4 item">
            <div class="col-xs-12 item-header">
              <div class="col-xs-12 item-header-image">
                <img src="{{ url('/static/images/academia/svg/logo-unmsm.svg') }}" alt="">
              </div>
              <br />
              <h4>
                <span>Preparación</span>
                <br>
                San Marcos
              </h4>
            </div>

            <hr class="separator-squared separator-orange">
            <div class="col-xs-12 item-list">
              <h4>Habilidad Matemática (RM)</h4>
              <ul>
                <li>Conocimientos</li>
                <li>Aritmética</li>
                <li>Álgebra</li>
                <li>Geometría</li>
                <li>Trigonometría</li>
                <li>Física </li>
              </ul>

              <h4>Habilidad Verbal (RV)</h4>
              <ul>
                <li>Química</li>
                <li>Ciencias Biológicas</li>
                <li>Filosofía y Lógica</li>
                <li>Lengua</li>
                <li>Literatura</li>
                <li>Historia del Perú</li>
                <li>Historia Universal</li>
                <li>Geografía</li>
                <li>Psicología</li>
                <li>Economía</li>
                <li>Cívica</li>
              </ul>

            </div>
          </div>
          <div class="col-xs-12 col-sm-4 item">
            <div class="col-xs-12 item-header">
              <div class="col-xs-12 item-header-image">
                <img src="{{ url('/static/images/academia/svg/logo-pucp.svg') }}" alt="">
              </div>
              <br />
              <h4>
                <span>Preparación</span>
                <br>
                PUCP
              </h4>
            </div>

            <hr class="separator-squared separator-orange">
            <div class="col-xs-12 item-list">
              <h4>Lectura</h4>
              <ul>
                <li>Lectura Comprensiva  e Interpretativa</li>
                <li>Lectura Crítica</li>
              </ul>

              <h4>Redacción</h4>
              <ul>
                <li>Ortografía y Puntuación</li>
                <li>Vocabulario y  Construcción Oracional</li>
              </ul>

              <h4>Matemática</h4>
              <ul>
                <li>Aritmética y Estadística</li>
                <li>Álgebra</li>
                <li>Geometría</li>
                <li>Trigonometría </li>
              </ul>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'your_best_option';
  @parent
@endsection
