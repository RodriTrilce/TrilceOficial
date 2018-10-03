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
              <li><a href="#" class="js-tabs__title">Sobre la academia</a></li>
              <li><a href="#" class="js-tabs__title">Matrícula</a></li>
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
                          Así es, contamos con asesorías gratuitas que son programadas por el tutor del aula.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Por qué solo tienen tres tipos de preparación?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Academias Trilce ofrece preparación para PUCP, UNI y San Marcos. La primera se enfoca en letras; la segunda, en números; y la última es 50% letras y 50% números. La preparación San Marcos es la indicada para alumnos que deseen postular a otra institución.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Cuántos cursos llevan los alumnos?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          La cantidad de cursos depende de la preparación que se elija; de igual manera, se puede solicitar esta información en la misma sede.
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
                          Solo la sede de Santa Beatriz cuenta con biblioteca, pero todos los alumnos de Academias Trilce pueden acceder a ella. Solo tienen que acercarse portando su carné para el ingreso.
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
                    ¿Cuándo se abre un nuevo ciclo académico?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Las fechas de nuestros nuevos inicios se anuncian a través nuestra <a href="/academia/" target="_blank">página web</a> y de las redes sociales.
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
                          2 fotos tamaños carné, copia de DNI del alumno y apoderado, 1 mica A4 y el primer pago de la mensualidad adelantado.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Es necesario llevar todos los documentos requeridos si el alumno estudió en el ciclo anterior?
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
                    ¿Debo realizar un pago adicional al momento de la matrícula?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          No hay pago de inscripción ni cuota de ingreso al momento de la matrícula.
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
                    ¿Puedo separar una vacante si me encuentro de viaje?
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
                    ¿Hay simulacros para los alumnos y tienen algún costo?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Sí hay simulacros en la academia, sus fechas se anuncian previamente por la sede que los organice. Son gratuitos y las inscripciones se realizan en la página de Facebook de Trilce.
                        </p>
                      </div>
                    </dd>
                </div>
              </div>

              <div class="frequentquestions-question row col-xs-12">
                <div class="col-xs question-content">
                  <h3 class="question-title js-badger-accordion-header">
                    <div class="question-title__signe"></div>
                    ¿Qué pasa si me olvidé del código de inscripción del simulacro?
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
                          Te recomendamos ingresar al siguiente <a href="/academia/simulacros-uni" target="_blank">aquí</a>
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
                          Te recomendamos ingresar al siguiente <a href="/academia/solucionarios-uni" target="_blank">aquí</a>
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
                          No, solo contamos con academias en Lima.
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
                    ¿Los alumnos tienen un break durante el día?
                  </h3>
                    <dd class="badger-accordion__panel js-badger-accordion-panel">
                      <div class="js-badger-accordion-panel-inner">
                        <p class="question-answer">
                          Sí, los alumnos cuentan con un break de 10 minutos.
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
                          El alumno o apoderado se tendrá que acercar a la caja de la sede para realizar el pago de S/10 por el duplicado del carné.
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
                          El apoderado tendrá que realizar la justificación de manera presencial o mediante un documento escrito en el que indique el motivo de la falta o tardanza del alumno. Además, deberá incluir un número telefónico para que el tutor pueda comunicarse con él y corroborar la información.
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
