{{! $breadcrumbs = Breadcrumbs::render('academia-aboutus') }}
@extends('academia.layouts.template')
@section('title', 'Acerca de Nosotros')
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6"></div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-double-w-aboutus"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Nosotros</h1>
        <p>Trilce desde sus inicios. <br> #EstoEsTrilce</p>
      </div>
    </div>
  </div>

  <div class="row col-xs-12 center-xs about-container container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="row col-xs-12 about-history">
        <div class="row col-xs-12 xs-hide col-sm-3 about-history--left">
          <img src="{{ url('/static/images/academia/img-nosotros-academia.jpg') }}" alt="Sobre nosotros">
        </div>
        <div class="col-xs-12 col-sm about-history--right">
          <h1 class="about-history--title">Nuestra historia</h1>
          <div class="about-history--pcontainer">
            <p>
              El 7 de diciembre de 1979, un grupo de amigos, estudiantes de la UNI, decidieron fundar una academia preuniversitaria para postulantes a esa universidad; fue así que el primer lunes de enero de 1980 y con menos de una centena de estudiantes, la Academia Trilce abrió sus puertas en un local ubicado en Jr. Callao 209, Cercado de Lima.
            </p>

            <p>
              Siete años después Trilce contaba con más de 3000 alumnos y se dedicaba también a la preparación para San Marcos y Católica en sus respectivos locales exclusivos.
            </p>

            <p>
              El año 1996, Trilce fundó el primer colegio preuniversitario del Perú en uno de sus locales, ubicado en Miraflores. Con esto, Trilce confirmó su liderazgo y excelencia académica con un método de enseñanza escolar totalmente innovador.
            </p>

            <p>
              Actualmente, Trilce cuenta con 18 colegios en Lima, 6 en provincias, 6 academias, 2000 trabajadores y más de 24 000 alumnos.
            </p>
          </div>
        </div>
      </div>
      <hr class="grayhr2" />
      <div class="row col-xs-12 center-xs about-vm">
        <div class="row col-xs-12 col-sm-11 start-xs start-sm">
          <div class="row col-xs-12 col-sm about-vm--item">
            <h2 class="item-title">Visión</h2>
            <p class="item-p">Mantener el liderazgo educativo cumpliendo con los más exigentes estándares internacionales de calidad y, de esta forma, contribuir con la mejora de la educación en nuestro país.</p>
          </div>
          <div class="col-xs-12 col-sm about-vm--item">
            <h2 class="item-title">Misión</h2>
            <p class="item-p">Somos una organización educativa que forma líderes con un alto nivel académico y una sólida formación en valores que les permita afrontar con éxito los retos de su vida personal y profesional.</p>
          </div>
        </div>
      </div>
      <hr class="grayhr2" />
      <div class="row col-xs-12 start-xs about-v">
        <div class="col-xs-12 start-xs">
          <h2 class="about-v--title">Nuestros Valores</h2>
        </div>
        <div class="row col-xs-12 center-xs about-v--vgrid">
          {{-- (.vgrid-item>)*15 --}}
          {{-- (.vgrid-item>img[src='{{ url('/static/images/colegio/svg/ico-nosotros-0$@1.svg') }}']+)*15 --}}

          {{-- (.vgrid-item>(.row.col-xs-12.start-xs>((.row.col-xs-2.col-sm-12.vgrid-item--img>img[src='{{ url('/static/images/colegio/svg/ico-nosotros-0$@1.svg') }}'])+(.row.col-xs-10.col-sm-12.vgrid-item--text>(h3>{valor})+(p>{texto})))))*15 --}}

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-01.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Generosidad</h3>
                </div>
                <div class="col-xs-12">
                  <p>Con mi ayuda lograrás tus metas.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-02.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Honestidad</h3>
                </div>
                <div class="col-xs-12">
                  <p>El éxito solo perdura con la verdad.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-03.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Puntualidad</h3>
                </div>
                <div class="col-xs-12">
                  <p>Para hacerlo bien, lo hago a tiempo.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-04.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Responsabilidad</h3>
                </div>
                <div class="col-xs-12">
                  <p>Si hay que hacerlo depende de mi.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-05.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Fortaleza</h3>
                </div>
                <div class="col-xs-12">
                  <p>Las caídas son solo peldaños en el ascenso.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-06.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Identidad nacional</h3>
                </div>
                <div class="col-xs-12">
                  <p>Yo soy el Perú, por eso lo valoro y respeto.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-07.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Orden</h3>
                </div>
                <div class="col-xs-12">
                  <p>Soy eficiente porque soy ordenado.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-08.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Justicia</h3>
                </div>
                <div class="col-xs-12">
                  <p>Dar a cada uno lo que se merece y corresponde.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-09.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Honradez</h3>
                </div>
                <div class="col-xs-12">
                  <p>Si no es mío, lo cuido y lo devuelvo.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-10.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Perseverancia</h3>
                </div>
                <div class="col-xs-12">
                  <p>Nunca dejar de luchar por ser mejor.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-11.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Amistad</h3>
                </div>
                <div class="col-xs-12">
                  <p>Un amigo es un nuevo hermano</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-12.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Solidaridad</h3>
                </div>
                <div class="col-xs-12">
                  <p>No me tiene que sobrar para compartir.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-13.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Gratitud</h3>
                </div>
                <div class="col-xs-12">
                  <p>Si hago un favor, no lo recuerdo; si lo recibo, nunca lo olvido.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-14.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Respeto</h3>
                </div>
                <div class="col-xs-12">
                  <p>Tus derechos y deberes son tan importantes como los míos.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="vgrid-item">
            <div class="row col-xs-12 start-xs align-content-baseline">
              <div class="row col-xs-2 col-sm-12 vgrid-item--img"><img src="{{ url('/static/images/colegio/svg/ico-nosotros-15.svg') }}" alt=""></div>
              <div class="row col-xs-10 col-sm-12 vgrid-item--text">
                <div class="col-xs-12">
                  <h3>Lealtad</h3>
                </div>
                <div class="col-xs-12">
                  <p>Si confías en mí, no te defraudaré.</p>
                </div>
              </div>
            </div>

          </div>



        </div>
      </div>

    </div>
  </div>


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'about_us';
  @parent
@endsection
