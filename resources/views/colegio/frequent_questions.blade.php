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
            <li><a href="#" class="js-tabs__title">Propuesta Educativa</a></li>
            <li><a href="#" class="js-tabs__title">Trámites y admisión</a></li>
            <li><a href="#" class="js-tabs__title">Otros</a></li>
          </ul>

          <div class="js-tabs__content js-badger-accordion_1">

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Cómo es el sistema Trilce?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Es un sistema desarrollado por una plana docente de la especialidad según el curso que dicta, que a su vez controla el proceso de aprendizaje mediante evaluaciones permanentes (exámenes diarios y simulacros semanales tipo admisión). Asimismo, cuenta con un programa de valores que complementa la formación integral del alumno, la cual va de la mano con el apoyo de un equipo de tutoras especializadas en la rama de psicología, educación o ciencias sociales.
                      </p>
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
                    ¿Por qué en Trilce se clasifica a los alumnos por niveles (avanzado, intermedio y básico)?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Las reagrupaciones (clasificación en aulas según el rendimiento académico de los alumnos) existen para que aprendan a su propio ritmo e incentivar su esfuerzo para mejorar su nivel. Todos los niveles cuentan con la misma calidad de enseñanza.
                        <br/>Buscamos que nuestros alumnos se esfuercen, bimestre a bimestre, para mejorar su nivel académico. En Trilce todos los docentes son de excelente nivel y la disciplina es fundamental, independientemente de la sección en que se encuentren.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Por qué en 4.o y 5.o de secundaria no existen horas de inglés en el horario regular?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Los tres primeros años, los alumnos de Trilce reciben una formación sólida en inglés y llevan ocho horas del curso a la semana (a diferencia de los colegios tradicionales, que lo llevan solo 2 horas semanales), lo que se complementa en los posteriores grados (4.o y 5.o) mediante talleres de 4 horas semanales por las tardes. Esto les permite obtener un buen nivel en el idioma.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿En Trilce se enseña religión?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Trilce es un colegio laico que respeta la diversidad de creencias; por ello, trabajamos un programa de valores que contempla la formación ética del individuo. Este programa se desarrolla durante todo el año académico; se basa en las vivencias de los alumnos y la expresión de su sentir mediante actividades que promueven la sensibilidad y la toma de conciencia frente al entorno y la autonomía del adolescente. Si bien es cierto se respetan las creencias, se promueve la fe; por eso, los sacramentos como la primera comunión y confirmación son coordinados con representantes de la Iglesia. En los meses de mayo, agosto y octubre se organizan actividades en honor a la Virgen María, Santa Rosa y el Señor de los Milagros, respectivamente.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Por qué Trilce no cuenta con talleres de danzas, deportes, etc. que otros colegios sí tienen?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        La información no es correcta, en Trilce contamos con un taller de teatro y otras actividades como las ferias regionales, concursos de declamación, debate, ajedrez, entre otros, porque consideramos que son importantes para la formación de nuestros estudiantes.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    Mi hijo(a) no es bueno(a) en matemáticas. ¿Se adaptará al sistema de Trilce?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Sí, en Trilce contribuimos al desarrollo de las habilidades de los alumnos en diferentes áreas, y logramos que destaquen según sus capacidades. Con respecto a los cursos de matemáticas, nosotros contamos con un servicio de asesorías especializadas en los cursos de mayor dificultad, de esta manera los reforzamos para que minimicen sus falencias. Asimismo, a través del Departamento Psicopedagógico brindamos al padre de familia las pautas que estimulen y motiven a su hijo a adaptarse al sistema.
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
                    Sobre la entrega de libros, material de estudio y cursos
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        <strong>Inicial:</strong> <br>
                        4 a 5 años (prekínder y kínder): Se les entrega fichas para delinear y pintar. <br><br>
                        <strong>Primaria:</strong><br>
                        1.<sup>o</sup> a 6.<sup>o</sup> grado: se les entrega libros por áreas.<br>
                        1.<sup>o</sup> a 4.<sup>o</sup> grado: cuentan con un profesor por varios cursos, un profesor de inglés y uno de computación.<br>
                        *A partir de 5.o grado cuentan con un profesor por curso (polidocencia).<br>
                        *Religión: se dicta el curso de religión a los alumnos de inicial (prekínder y kínder) y primaria.<br><br>
                        <strong>Secundaria:</strong><br>
                        Formación de valores: de 1.<sup>o</sup> a 5.<sup>o</sup> de secundaria, se trabaja un valor por mes.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    Sobre la cantidad de alumnos
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        El personal de tutoría se encuentra capacitado para el dominio de grupos y está especializado en las carreras de psicología y educación. Por otro lado, nuestras aulas son amplias, ventiladas y con bastante iluminación natural y artificial.
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
                    Sobre la infraestructura
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        En todos los locales: resaltar las comodidades en las aulas, corredores, baños, entre otros.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>
            -->

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
                        Si el padre de familia desea conversar con los docentes, debe solicitar una entrevista anticipadamente.
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
                        <small><sup>1</sup> No aplica a todas las sedes.</small>
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
                        Todos nuestros docentes poseen un excelente nivel académico y tienen la experiencia necesaria para enseñar adecuadamente.
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
                        Trilce cuenta con una excelente plana docente y sistema académico; por otro lado, nuestros resultados hablan por sí solos: primeros puestos en universidades prestigiosas como UNI, San Marcos y PUCP, y, sobre todo, miles de ingresantes (que después se convierten en excelentes universitarios) en diversas universidades del país.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Cómo me garantizan que mi hijo ingresará a la universidad?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Eso no se puede garantizar. Lo que sí le garantizamos es que le brindaremos a su hijo una excelente preparación académica, pues contamos con un alto nivel en matemática, ciencias y letras, además de una sólida formación en valores.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Qué pasa si mi hijo no entiende algunos cursos?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Al alumno se le brindará asesorías gratuitas y un control constante por parte de la tutora del aula para que el padre de familia conozca el progreso de su hijo.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Cuántas horas de clases enseñan arte?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Si bien es cierto que la dedicación al aspecto académico es una de las prioridades, también lo es la parte formativa. En Trilce se estimula al alumno según sus cualidades, ya sea en las danzas, declamación, teatro y en toda expresión que permita el desarrollo de la creatividad. No se puede indicar el número preciso de horas que se dedican a las artes, pero sí la forma en que se trabaja este aspecto.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Los postulantes reciben algún temario de cursos antes de rendir evaluaciones?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        No se entrega ningún tipo de temario antes de las evaluaciones, ya que los postulantes son evaluados de acuerdo a su edad y nivel académico.
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Qué cursos son evaluados en primaria?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        De 2.<sup>o</sup> a 6.<sup>o</sup> grado se evalúa matemática, comunicación, ciencia y ambiente, personal social e inglés (básico).
                      </p>
                    </div>
                  </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                     ¿Qué cursos son evaluados en secundaria?
                  </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Matemática, comunicación e inglés (básico). Los exámenes cuentan con 50 preguntas aproximadamente.
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
                      ¿Por qué solo algunos colegios Trilce cuentan con ITS?
                    </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          El ingreso por ITS es una modalidad dirigida a los mejores alumnos de 5.° de secundaria de un grupo de colegios seleccionados por la PUCP a partir de un estudio sobre el rendimiento de sus egresados en la universidad.
                          El alumno también puede rendir el examen de admisión de la PUCP en la modalidad de Primera Opción; para esto, contamos con un aula exclusiva de preparación para la PUCP.
                        </p>
                      </div>
                    </dd>
                  </div>
                </div>
                -->
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
                  Solicitudes de descuentos por hermanos
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      El padre de familia puede presentar su solicitud de descuento, en la cual tendrá que exponer y sustentar los motivos por los que lo solicita. Se otorgará la beca al mayor de los hermanos. La solicitud se envía hasta el 15 de enero.
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
                      Consultar con la sede Trilce indicada (para que se coordine con el Área de Actas).
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Las pensiones son elevadas?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Los precios son accesibles, nos permiten cubrir los costos en infraestructura y poderles brindar un servicio de excelente calidad, tanto en lo formativo como en lo académico. Solo si el padre insiste, se debe involucrar el mantenimiento de la infraestructura, el incremento del costo de vida, insumos, etc.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  Descuentos para hermanos y alumnos nuevos
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      En caso el padre de familia desee un descuento, tendrá que presentar su solicitud, exponiendo y sustentando los motivos por los cuales solicita el descuento. Asimismo, recalcamos que por dos hermanos matriculados en nuestra institución, uno recibe un cuarto de beca; por tres y cuatro hermanos, uno de ellos recibe media beca. Para esto, deben ser evaluados como cualquier alumno que ingresa a Trilce. Se otorga la beca al mayor de los hermanos.
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
                   Retención de la tarjeta de control por falta de pago
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Sistema por el cual el padre de familia debe acercarse al colegio para conversar con la Dirección sobre su deuda y reprogramar dichas fechas. La retención de la tarjeta de control no implica que el alumno esté impedido de ingresar al colegio.
                    </p>
                  </div>
                </dd>
              </div>
            </div>-->

            <!--
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                   ¿Se aceptan repitentes?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      El alumno deberá pasar por evaluaciones según el proceso de admisión.
                    </p>
                  </div>
                </dd>
              </div>
            </div>-->

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
                  ¿Qué edad deben tener los niños que se matriculen en 1.<sup>o</sup> de primaria?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Los niños que van a matricularse en 1.<sup>o</sup> de primaria deben cumplir 6 años, como máximo, el 30 de junio del año en curso.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                   ¿Qué edad deben tener los alumnos que se matriculen en secundaria?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      El tercer y último nivel dura cinco años. Según las disposiciones del Ministerio de Educación, los alumnos de secundaria deben ser jóvenes de entre 11 (o 12) a 16 (o 17) años de edad.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Se aceptan niños especiales en el colegio?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Sí aceptamos a niños especiales, ya que somos un colegio inclusivo. El alumno deberá rendir las evaluaciones de admisión para saber el nivel académico en el que se encuentra.
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
                  ¿Cuál es el tiempo de refrigerio (recreos)?
                </h3>
                <dd class="badger-accordion__panel js-badger-accordion-panel">
                  <div class="js-badger-accordion-panel-inner">
                    <p class="question-answer">
                      Existen dos recreos, el primero dura 15 minutos y el segundo 20 minutos. En 5.<sup>o</sup> de secundaria tienen otro régimen: dos recreos de 15 minutos y 20 minutos para el almuerzo.
                      <br>Si el alumno tiene actividades fuera del horario, contará con un descanso de 45 minutos a una hora.
                    </p>
                  </div>
                </dd>
              </div>
            </div>

          </div>



      </div>


  </div>
</div>

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'frequent_questions';
  @parent
@endsection
