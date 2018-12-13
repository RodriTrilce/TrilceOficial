{{! $breadcrumbs = Breadcrumbs::render('colegio-frequentquestions') }}
@extends('colegio.layouts.template')
@section('title', 'Preguntas frecuentes')
@section('content')

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-pregunta-frecuente.png') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-pregunta-frecuente-movil.png') }}" alt="">
    </div>
  </div>

<div class="row col-xs-12 center-xs container-base frequentquestions">
  <div class="col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md frequentquestions-block">


      <div class="js-tabs frequent_questions__tabs" id="tabs_frequent_questions">

          <ul class="js-tabs__header">
            <li><a href="#" class="js-tabs__title">Propuesta educativa</a></li>
            <li><a href="#" class="js-tabs__title">Matrícula</a></li>
            <li><a href="#" class="js-tabs__title">Otros</a></li>
          </ul>

          <div class="js-tabs__content js-badger-accordion_1">

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Cuál es nuestra propuesta educativa?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Nuestra propuesta ha sido desarrollada por una plana docente especializada en diversas materias, que a su vez controla el proceso de aprendizaje mediante evaluaciones permanentes. Asimismo, cuenta con un programa de valores que complementa la formación integral del alumno, la cual va de la mano con el apoyo de un equipo de tutoras.
                      </p>
                      @include('colegio.partials.ads')
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    En Trilce existen exámenes semanales y diarios, ¿no son muchas evaluaciones para sus estudiantes?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Es importante que los alumnos se adecúen a las exigencias académicas y es necesario que adquieran el hábito de estudio. Esto les dará buenos resultados en su preparación académica.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Por qué en Trilce se clasifica a los alumnos?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        <p>Las reagrupaciones se realizan al inicio de cada bimestre y tienen como objetivo agrupar a los alumnos con mayor conocimiento y, principalmente, motivar a los estudiantes a elevar su nivel académico.</p><br>
                        <p>Se clasifica a los alumnos en el primer salón, segundo salón y salones promedio. Por cada año de estudio, hay dos salones conformados por los alumnos con el mejor rendimiento académico (el primer y segundo salón). En los demás salones (salones promedio) se agrupan a los alumnos con diversos rendimientos académicos, para que de esta manera tengan el mismo nivel en promedio.</p><br>
                        <p>Cabe resaltar que la apertura de un primer o segundo salón depende de la cantidad de salones por año, por lo que puede darse el caso de que se abran solamente salones promedio.</p>
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Cuántas horas de inglés se dictan en el horario regular?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Nuestros alumnos reciben una sólida formación en inglés durante sus cuatro primeros años de secundaria. A diferencia de los colegios tradicionales, que lo llevan solo 2 horas semanales, en Trilce nuestros estudiantes de 1.<sup>o</sup> a 3.<sup>o</sup> reciben ocho horas del curso a la semana y en 4.<sup>o</sup>, cuatro horas a la semana. Además, en 5.<sup>o</sup> reforzamos su aprendizaje con talleres de 2 horas semanales por las tardes. Esto les permite obtener un buen nivel en el idioma.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿En Trilce se enseña el curso de religión?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Solamente se dicta el curso de religión en primaria (una hora a la semana). Trilce es un colegio laico que respeta la diversidad de creencias, por eso, trabajamos un programa de valores que contempla la formación ética del individuo. Este programa se desarrolla durante todo el año académico; se basa en las vivencias de los alumnos y la expresión de su sentir mediante actividades que promueven la sensibilidad y la toma de conciencia frente al entorno y la autonomía del adolescente. Si bien es cierto se respetan las creencias, se promueve la fe; por eso, los sacramentos como la primera comunión y confirmación son coordinados con representantes de la Iglesia. En los meses de mayo, agosto y octubre se organizan actividades en honor a la Virgen María, Santa Rosa y el Señor de los Milagros, respectivamente.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Trilce cuenta con talleres extracurriculares?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Sí, en Trilce contamos con un taller de teatro y otras actividades como las ferias regionales, concursos de declamación, debate, ajedrez, entre otros, porque consideramos que son importantes para la formación de nuestros estudiantes.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    Mi hijo(a) no es bueno(a) en matemáticas. ¿Se adaptará al nivel académico de Trilce?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Sí, en Trilce contribuimos al desarrollo de las habilidades de los alumnos en diferentes áreas, y logramos que destaquen según sus capacidades. Con respecto a los cursos de matemáticas, nosotros contamos con un servicio de asesorías especializadas en los cursos de mayor dificultad. Asimismo, a través del Departamento Psicopedagógico brindamos al padre de familia las pautas que estimulen y motiven a su hijo a adaptarse al sistema.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    Sobre las asesorías
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Las asesorías son gratuitas y se dictan para los alumnos de primaria y secundaria. Son un beneficio que le permite al alumno aclarar sus dudas sobre los temas desarrollados en clase a través de una explicación detallada. Estas se dan fuera del horario regular.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    Sobre la entrega de libros y material de estudio.
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        <strong>Inicial:</strong><br>
                        4 a 5 años (prekínder y kínder): se les entrega fichas para delinear y pintar.
                        <br><br>
                        <strong>Primaria:</strong><br>
                        1.<sup>o</sup> a 6.<sup>o</sup> grado: se les entrega 9 libros al año de manera gratuita
                        <br><br>
                        <strong>Secundaria:</strong><br>
                        1.<sup>o</sup> a 5.<sup>o</sup> de secundaria: se les entrega, de manera totalmente gratuita, una tablet que incluye todos los libros de estudio.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Se entregan exámenes bimestrales?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Los exámenes bimestrales son materiales clasificados que requieren de mucha privacidad. Sin embargo, si desea tener acceso a los exámenes bimestrales, solo tiene que solicitarlo en Coordinación y lo podrá revisar en presencia del tutor.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Hay normas sobre el corte de cabello de los alumnos?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Sí, tenemos límites por temas de higiene y presentación. Estas reglas están especificadas en el Manual de Convivencia (Reglamento Interno), aprobado por el Ministerio de Educación.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Hay una frecuente comunicación entre padres y docentes?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Sí existe una comunicación frecuente entre padres y docentes; los padres de familia pueden solicitar una reunión a través de la agenda de control.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Los alumnos usan uniformes?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Nuestros alumnos no utilizan uniforme escolar<sup>1</sup>, dado que no deseamos generar más gastos al padre de familia. Además, es importante que el alumno se sienta más cómodo para estudiar. El Ministerio de Educación tiene una disposición en la que se indica que el uso de uniforme no es obligatorio. Sin embargo, el alumno recibe las Normas de Convivencia (Reglamento Interno), en las cuales se hacen precisiones sobre la vestimenta que puede utilizar. 
                        <br><br>
                        <sup>1</sup> No aplica a todas las sedes.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    Calidad de la enseñanza de nuestros docentes
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Todos nuestros docentes poseen un excelente nivel académico y tienen la experiencia necesaria para enseñar adecuadamente; además, son evaluados constantemente en el transcurso del año para garantizar su preparación.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Qué grado de credibilidad tienen sus servicios?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Los resultados hablan por sí solos: primeros puestos en universidades prestigiosas como UNI, San Marcos y PUCP, y, sobre todo, miles de ingresantes (que después se convierten en excelentes universitarios) en diversas universidades del país.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿En Trilce se enseña el curso de arte?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        En Trilce se estimula al estudiante según sus cualidades en teatro, danza, declamación y en toda expresión que permita el desarrollo del arte y la creatividad. En primaria, nuestros alumnos llevan el curso en su horario de clases.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Qué cursos son evaluados en primaria y secundaria?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        <strong>Primaria:</strong> De 2.<sup>o</sup> a 6.<sup>o</sup> grado se evalúa matemática, comunicación, ciencia y ambiente, personal social e inglés (básico).
                        <br><br>
                        <strong>Secundaria:</strong> Matemática, comunicación e inglés (básico). Los exámenes cuentan con 50 preguntas aproximadamente.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

          </div>

          <div class="js-tabs__content js-badger-accordion_2">
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  Traslados internos 
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Si el padre de familia desea trasladar a su hijo a otra sede de Trilce, tendrá que realizar el siguiente trámite:
                      <br />
                      <br />
                      <strong>Requisitos:</strong><br>
                      - Libreta de notas<br>
                      - Copia del DNI del alumno<br>
                      - Comprobante del último pago<br><br>
                      <ul>
                        <li>Llevar la libreta de notas al colegio donde desea realizar el traslado.</li>
                        <li>El colegio realizará los trámites correspondientes (consulta de notas, conducta, etc.)</li>
                        <li>Una vez que el alumno sea aceptado en el colegio, cancelará la matrícula y solicitará la constancia de vacante.</li>
                        <li>La constancia de vacante deberá ser entregada al local de procedencia, para que realicen el trámite correspondiente de documentos del alumno. Es decir, el local de procedencia se encargará de enviar los documentos al colegio actual.</li>
                      </ul>
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  Trámite para solicitar constancia de Tercio Superior
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Este dato figura en la parte inferior de la libreta de notas. Si el padre de familia desea solicitar una constancia de Tercio Superior, deberá acercarse al área de atención al cliente presentando una solicitud simple. Ver costo en el cuadro de trámites documentarios.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  Código modular del colegio
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Consultar con la sede indicada (para que se coordine con el Área de Actas).
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Qué edad deben tener los niños que se matriculen en 1.<sup>o</sup> de primaria?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Los niños que van a matricularse en 1.<sup>o</sup> de primaria deben cumplir 6 años, como máximo, el 30 de marzo.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Los postulantes a los colegios Trilce reciben algún temario de cursos antes de pasar el proceso de admisión?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      No se entrega ningún tipo de temario para el proceso de admisión, ya que los postulantes son evaluados de acuerdo a su edad y nivel académico.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Hay descuentos por hermanos?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Sí, si estudian dos o más hermanos en nuestro colegio, hay un descuento de 15 soles para cada uno de ellos. Para aplicar a este descuento, es indispensable presentar una solicitud y una copia del recibo de matrícula.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Si un exalumno desea regresar al colegio, tendrá que ser evaluado nuevamente?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Si ya pasó más de un año académico, el alumno tendrá que pasar el proceso de admisión nuevamente.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <!--
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Un postulante, luego de no haber sido admitido, puede volver a postular?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Sí podrá hacerlo, pero deberá haber transcurrido un año desde dicho proceso de admisión.
                    </p>
                  </div>
                </dd>
              </div>
            </div>
            -->

          </div>

          <div class="js-tabs__content js-badger-accordion_3">
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿El colegio cuenta con movilidad propia?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      No cuenta con movilidad propia.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Se aceptan niños con NEE (Necesidades Educativas Especiales) en el colegio?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Sí aceptamos a niños con NEE, ya que somos un colegio inclusivo. El alumno deberá rendir las evaluaciones de admisión para que podamos conocer el nivel académico en el que se encuentra.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Qué ocurre si a mi hijo le cuesta adaptarse?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Si el alumno tiene problemas para adaptarse al colegio, cuentan con el apoyo del Departamento de Psicología y, en forma constante, con el de su tutora.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Cuentan con horarios de refrigerio (recreos)?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Sí, existen dos recesos para refrigerios y recreación tanto en primaria como en secundaria.
                    </p>
                  </div>
                </dd>
              </div>
            </div>



          </div>

      </div>

  </div>
</div>

@include('colegio.partials.ads')

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'frequent_questions';
  @parent
@endsection
