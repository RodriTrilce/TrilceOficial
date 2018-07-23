{{! $breadcrumbs = Breadcrumbs::render('colegio-educationalproposal') }}
@extends('colegio.layouts.template')
@section('title', 'Propuesta educativa')
@section('content')

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-prop-educativa.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-propuesta-educativa-movil.png') }}" alt="">
    </div>
  </div>

<div class="row center-xs center-sm container-base educationalproposal-container">
  <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">


    <div class="js-tabs" id="tabs_educational_propuse">

      <ul class="js-tabs__header">
        <li><a href="javascript:void(0);" class="js-tabs__title"><img src="/static/images/colegio/old-educational-propuse/p_elevado_nivel_academico.png" alt=""> Elevado nivel académico</a></li>

        <li><a href="javascript:void(0);" class="js-tabs__title"><img src="/static/images/colegio/old-educational-propuse/p_mejor_plana_docencia.png" alt=""> La mejor plana docente</a></li>

        <li><a href="javascript:void(0);" class="js-tabs__title"><img src="/static/images/colegio/old-educational-propuse/p_tutoria_personalizada.png" alt=""> Tutoría personalizada</a></li>

        <li><a href="javascript:void(0);" class="js-tabs__title"><img src="/static/images/colegio/old-educational-propuse/p_desarrollo_personal.png" alt=""> Desarrollo Personal</a></li>

        <li><a href="javascript:void(0);" class="js-tabs__title"><img src="/static/images/colegio/old-educational-propuse/p_sistema_5.png" alt=""> Sistema 5.° Año</a></li>

        <li><a href="javascript:void(0);" class="js-tabs__title"><img src="/static/images/colegio/old-educational-propuse/p_innovacion_tecnologica.png" alt=""> Innovación y tecnología</a></li>

        <li><a href="javascript:void(0);" class="js-tabs__title"><img src="/static/images/colegio/old-educational-propuse/p_resultados_comprobados.png" alt=""> Resultados comprobados</a></li>
      </ul>

      <div class="js-tabs__content">
        <div class="row col-xs-12 ep-generic-title">
          <span class="number">1</span> <h2>Elevado nivel académico</h2>
        </div>

        <div class="row col-xs-12">
          <ul class="ep-generic-list">
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                Sistema académico del más alto nivel en el país.
            </li>
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                38 años de experiencia en preparación preuniversitaria.
            </li>
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                Alumnos con un excelente conocimiento en las áreas de matemáticas, ciencias y letras.
            </li>
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                Profesores especializados por curso.
            </li>
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                Evaluaciones permanentes.
            </li>
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                Asesorías gratuitas fuera del horario escolar.
            </li>
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                Libros digitales gratuitos de todos los cursos incluidos en la tablet Trilce y elaborados por los docentes más experimentados de la institución.
            </li>
          </ul>

        </div>
      </div>

      <div class="js-tabs__content">
        <div class="row col-xs-12 ep-generic-title">
          <span class="number">2</span> <h2>La mejor plana docente</h2>
        </div>

        <div class="row col-xs-12">
          <ul class="ep-generic-list">
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                Pertenecientes a la Academia Trilce.
            </li>
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                Seleccionados de las mejores universidades del Perú.
            </li>
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                Permanentemente capacitados y evaluados.
            </li>
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                Comprometidos con los valores de la institución.
            </li>

          </ul>
        </div>
      </div>

      <div class="js-tabs__content">
        <div class="row col-xs-12 ep-generic-title">
          <span class="number">3</span> <h2>Tutoría personalizada</h2>
        </div>

        <div class="row col-xs-12">
          <ul class="ep-generic-list">
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                Una tutora por aula de manera permanente.
            </li>
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                Encargada del seguimiento académico y desarrollo personal.
            </li>
            <li>
                <span class="icon_local_span"><i class="fa fa-square-o" aria-hidden="true"></i></span>
                Vela por el cumplimiento de las normas de conducta tanto dentro como fuera del aula.
            </li>
          </ul>
        </div>
      </div>

      <div class="js-tabs__content">
        <div class="row col-xs-12 ep-generic-title">
          <span class="number">4</span> <h2>Desarrollo personal</h2>
        </div>

        <div class="row col-xs-12 ep-large-container">
          <div class="col-xs-12 col-sm-3 ep-stepfour-left">
            <p>
              Incentivamos las destrezas artísticas e intelectuales de nuestros alumnos, así como su desarrollo físico, el aprecio por nuestra cultura y la formación en valores.
            </p>
          </div>

          <div class="row col-xs-12 col-sm ep-stepfour-right ep-stepfour-container">

              <div class="row col-xs-12 col-sm-4 ep-stepfour-item">
                <div class="col-xs-12 item-title">Habilidades intelectuales</div>
                <div class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</div>
              </div>
              <div class="row col-xs-12 col-sm-4 ep-stepfour-item">
                <div class="col-xs-12 item-title">Habilidades intelectuales</div>
                <div class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</div>
              </div>
              <div class="row col-xs-12 col-sm-4 ep-stepfour-item">
                <div class="col-xs-12 item-title">Habilidades intelectuales</div>
                <div class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</div>
              </div>
              <div class="row col-xs-12 col-sm-4 ep-stepfour-item">
                <div class="col-xs-12 item-title">Habilidades intelectuales</div>
                <div class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</div>
              </div>
              <div class="row col-xs-12 col-sm-4 ep-stepfour-item">
                <div class="col-xs-12 item-title">Habilidades intelectuales</div>
                <div class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</div>
              </div>
              <div class="row col-xs-12 col-sm-4 ep-stepfour-item">
                <div class="col-xs-12 item-title">Habilidades intelectuales</div>
                <div class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</div>
              </div>
              <div class="row col-xs-12 col-sm-4 ep-stepfour-item">
                <div class="col-xs-12 item-title">Habilidades intelectuales</div>
                <div class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</div>
              </div>

          </div>
        </div>
      </div>

      <div class="js-tabs__content">

      </div>

      <div class="js-tabs__content">

      </div>

      <div class="js-tabs__content">

      </div>


    </div>

  </div>
</div>

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'educational_proposal';
  @parent
@endsection
