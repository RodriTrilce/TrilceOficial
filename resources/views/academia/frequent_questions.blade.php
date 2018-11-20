{{! $breadcrumbs = Breadcrumbs::render('academia-frequentquestions') }}
@extends('academia.layouts.template')
@section('title', 'Preguntas frecuentes')
@section('content')

<div class="header-double-top">
  <div class="row">
    <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
    <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-frequent-questions"></div>
    <div class="header-double-border"></div>
    <div class="header-double-title">
      <h1>Preguntas frecuentes</h1>
    </div>
  </div>
</div>

<div class="row col-xs-12 center-xs container-base frequentquestions">
  <div class="col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md frequentquestions-block">

      <div class="js-tabs frequent_questions__tabs" id="tabs_frequent_questions">

          <ul class="js-tabs__header">
              <li><a href="#" class="js-tabs__title">Propuesta Academica</a></li>
              <li><a href="#" class="js-tabs__title">Inscripción</a></li>
              <li><a href="#" class="js-tabs__title">Simulacros</a></li>
              <li><a href="#" class="js-tabs__title">Otros</a></li>
          </ul>

          <div class="js-tabs__content js-badger-accordion_1">
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Cuentan con asesorías por las tardes?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Así es, contamos con asesorías gratuitas (generalmente, solo de los cursos de ciencias), cuyo horario es programado por cada local.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Para qué universidades ofrecen preparación?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Academias Trilce ofrece preparación para <a href="/academia/preparacion-pucp" title="Preparación PUCP" alt="Preparación PUCP">PUCP</a>, <a href="/academia/preparacion-uni" title="Preparación UNI" alt="Preparación UNI">UNI</a> y <a href="/academia/preparacion-san-marcos" title="Preparación San Marcos" alt="Preparación San Marcos">San Marcos</a>. Si deseas postular a otra universidad, te recomendamos la preparación San Marcos.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Cuántos cursos dictan?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          La cantidad de cursos depende de la preparación que se elija; puedes consultar esta información <a href="/academia#inicios">aquí</a>.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Cuentan con biblioteca?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Sí contamos con biblioteca en nuestra sede de Santa Beatriz. Todos los alumnos de Academias Trilce pueden acceder a ella, solo tienen que acercarse portando su carné para el ingreso, que es hasta las 5 p. m. La biblioteca atiende hasta las 9 p. m.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Las academias se especializan en la preparación para ciertas carreras, como administración, ingeniería, etc.?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          La preparación se realiza para el examen de admisión de la universidad, no para la carrera.
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
                  ¿Cuándo inicia un nuevo ciclo académico?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Las fechas de nuestros nuevos inicios se pueden consultar <a href="/academia#inicios" alt="Fechas de preparación UNI, PUCP y San Marcos" title="Fechas de preparación UNI, PUCP y San Marcos">aquí</a> y a través de nuestras redes sociales.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Cuáles son los requisitos para la inscripción?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Nuestros requisitos son los siguientes: 2 fotos tamaños carné, copia de DNI del alumno y apoderado, 1 mica A4 y el pago de la mensualidad.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Es necesario llevar todos los documentos requeridos si estudié en el ciclo anterior?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Sí, es necesario, ya que se trata de un nuevo ciclo.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Debo realizar un pago adicional al momento de la inscripción?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        No hay pago de inscripción ni cuota de ingreso.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Cuál es el medio de pago?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        El pago se realiza en la misma sede; puede ser en efectivo o con tarjeta de crédito o débito (Visa o MasterCard).
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Puedo separar una vacante?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        No hay separación de vacantes, por lo que te recomendamos acercarte a la misma sede.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Se puede realizar un cambio de ciclo si este aún no ha culminado?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        El cambio de ciclo debe ser consultado en la Coordinación de la sede.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Qué ocurre si no cuento con DNI porque está en proceso de renovación?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        En ese caso, tienes que acercarte con el voucher entregado en Reniec.
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
                    ¿Hay simulacros y tienen algún costo?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Sí hay simulacros en la academia, sus fechas se anuncian previamente por la sede que los organice. Son gratuitos y las inscripciones se realizan <a href="/academia/simulacros-uni" title="Simulacros UNI, PUCP y San Marcos" alt="Simulacros UNI, PUCP y San Marcos">aquí</a>.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Qué pasa si olvidé el código de inscripción del simulacro?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Te recomendamos comunicarte con tu sede.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿En dónde encuentro los resultados del simulacro?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Te recomendamos ingresar <a href="/academia/simulacros-uni">aquí</a>.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿En dónde encuentro los solucionarios?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Te recomendamos ingresar <a href="/academia/solucionarios-uni" title="Solucionarios UNI, PUCP y San Marcos" alt="Solucionarios UNI, PUCP y San Marcos">aquí</a>.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>
          </div>
          <div class="js-tabs__content js-badger-accordion_4">

            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Hay academias en provincias?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Por el momento no contamos con academias en provincias.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Por qué no hay tolerancia con la hora de entrada?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        No se aceptan tardanzas consecutivas, esto está establecido en los reglamentos que se dan a conocer al momento de la matrícula.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Hay un break durante el día?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Sí, hay dos breaks de 10 minutos cada uno.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Tendré que comprar libros?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Todos los materiales están incluidos dentro del pago de la mensualidad.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Cuál es el trámite para obtener el duplicado del carné?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Tendrás que acercarte a la caja de la sede para realizar el pago de S/10 por el duplicado del carné.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>
            <div class="frequentquestions-question row col-xs-12">
              <div class="col-xs question-content">
                <h3 class="question-title js-badger-accordion-header">
                  <div class="question-title__signe"></div>
                  ¿Cómo justificar una falta o tardanza?
                </h3>
                  <dd class="badger-accordion__panel js-badger-accordion-panel">
                    <div class="js-badger-accordion-panel-inner">
                      <p class="question-answer">
                        Solo se justificarán las inasistencias o tardanzas por motivos médicos o trámites documentarios; en estos casos, deberás presentar un documento que lo demuestre junto con una copia del DNI del padre o apoderado, y llenar un formato que puedes solicitar en Atención al Cliente.
                      </p>
                    </div>
                  </dd>
              </div>
            </div>

          </div>

      </div>

  </div>
</div>

  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
  page = 'frequent_questions';
  @parent
@endsection
