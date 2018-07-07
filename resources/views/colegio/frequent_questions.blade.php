{{! $breadcrumbs = Breadcrumbs::render('colegio-frequentquestions') }}
@extends('colegio.layouts.template')
@section('title', 'Preguntas frecuentes')
@section('content')

  <div class="header-double-image">
    <div class="row col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-pregunta-frecuente.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-pregunta-frecuente-movil.jpg') }}" alt="">
    </div>
  </div>

  <div class="row col-xs-12 center-xs container-base frequentquestions">
    <div class="col-xs-12">
      <h1 class="frequentquestions-title">Preguntas frecuentes</h1>
    </div>

    <div class="col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md frequentquestions-block">

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿Cómo es el sistema TRILCE?</h3>
              <p class="question-answer">Es un sistema preuniversitario desarrollado por una plana docente de la especialidad según el curso que dicta, que a su vez controla el proceso de aprendizaje mediante evaluaciones permanentes (exámenes diarios y simulacros semanales tipo admisión). Asimismo, cuenta con un programa de valores que complementa la formación integral del alumno el cual va de la mano con el apoyo tutorial desempeñado por un equipo de tutoras profesionales en la rama de psicología, educación o ciencias sociales.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿Por qué en 4° y 5° de secundaria no existen horas de inglés en el horario regular?</h3>
              <p class="question-answer">Los tres primeros años, los alumnos de Trilce, reciben una formación sólida del curso de inglés, ´llevando ocho horas a la semana (a diferencia de los colegios tradicionales que lo llevan solo 2 horas semanales), permitiéndoles obtener un buen nivel en el idioma, área que se complementa  en los posteriores grados (4° y 5°) mediante talleres de 4 horas semanales por las tardes.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿Por qué no se enseña el curso de religión?</h3>
              <p class="question-answer">TRILCE es un colegio laico que respeta la diversidad de creencias, por ello trabajamos un programa de valores que contempla la formación ética del individuo, este programa se desarrolla durante todo el año académico y se basa en las vivencias de los alumnos y la expresión de su sentir mediante actividades que promueven la sensibilidad y la toma de conciencia frente al entorno y la autonomía del adolescente. Si bien es cierto se respetan las creencias, se promueve la fe católica por eso los sacramentos como la primera comunión y de confirmación son coordinados con representantes de la iglesia. En los meses de mayo, agosto y octubre se organizan actividades por la Virgen María, Santa Rosa y el Señor de los Milagros respectivamente.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Otros colegios tienen talleres de danzas, deportes, etc., que en TRILCE no existen. ¿Qué respondería?</h3>
              <p class="question-answer">La información no es correcta, en Trilce contamos con un taller de teatro y otras actividades como las ferias regionales. Concursos de declamación, debate, ajedrez, entre otros, porque consideramos que es importante para la formación de nuestros estudiantes.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Mi hijo (a) no es bueno(a) en matemáticas, ¿se adaptará al sistema de TRILCE?</h3>
              <p class="question-answer">Sí, si bien es cierto TRILCE se caracteriza por ser un colegio preuniversitario también contribuimos al desarrollo de las habilidades de los alumnos en las diferentes áreas, logrando que destaquen según sus capacidades. Con respecto a los cursos de matemáticas nosotros contamos con un servicio de asesorías especializadas en los cursos de mayor dificultad de esta manera los reforzamos para que minimicen sus falencias. Asimismo, a través del Departamento Psicopedagógico brindamos al padre de familia las pautas que estimulen y motiven a su hijo a la adaptación al sistema.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿Sobre las asesorías?</h3>
              <p class="question-answer">Las asesorías son gratuitas que se dictan para los alumnos de primaria y secundaria, es un beneficio que le permite al alumno aclarar sus dudas sobre los temas desarrollados en clase, brindándoles una explicación detallada al respecto. Estas se dan fuera del horario regular.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Traslados internos:</h3>
              <p class="question-answer">Si el padre de familia desea trasladar a su hijo a otro local TRILCE, tendrá que realizar el siguiente trámite.<br><br>
    <strong>Requisitos:</strong><br>
  <ol>
    <li>Libreta de Notas</li>
    <li>Copia del DNI del alumno</li>
    <li>Voucher del último pago</li>
  </ol>
<br />
<ul>
    <li>Llevar la libreta de notas al colegio donde desea realizar el traslado.</li>
    <li>El colegio realizará los trámites correspondientes (Consulta de notas, conducta, etc).</li>
    <li>Una vez que el alumno sea aceptado en el colegio, cancelará la matrícula y solicitará la constancia de vacante.</li>
    <li>La constancia de vacante deberá  ser entregada al local de procedencia, para que realicen el trámite correspondiente de documentos del alumno. (El colegio se encarga de enviar los documentos al colegios actual.</li>
</ul>

  </p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Trámite para solicitar constancia del Tercio Superior:</h3>
              <p class="question-answer"> Este dato figura en la parte inferior de la libreta de notas, si el padre de familia desea solicitar una constancia del Tercio Superior, deberá acercarse al área de atención al cliente presentando una solicitud simple.  Ver costo en el cuadro de Trámites documentarios.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Para solicitar descuentos por hermanos:</h3>
              <p class="question-answer">Explicamos al padre de familia que presente su solicitud, exponiendo y sustentando los motivos por el cual solicita el descuento. Asimismo, recalcamos.  En caso pregunten a quién se le otorga la beca, indicar que es al mayor de los hermanos.

    La solicitud se envía hasta el 15 de enero</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Código modular del colegio:</h3>
              <p class="question-answer">Especificar la sede Consultar con la sede Trilce indicada (para que se coordine con el área de  Actas).</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Sobre entrega de libros, material de estudio y cursos.</h3>
              <p class="question-answer"><strong>Inicial:</strong><br>
    4 - 5 años (Pre-Kinder y Kinder): Se les entrega fichas para (Delinear y pintar).<br><br>
    <strong>Primaria:</strong><br>
    1° a 6° grado: Se les entrega libros por áreas.<br>
    1° a 4° grado: Cuentan con un profesor por varios cursos, un profesor de inglés y uno de computación.<br>
    *A partir de 5° grado cuentas con un profesor por curso (Polidocencia).<br>
    *Religión: Se dicta el curso de religión a los alumnos de inicial (Pre-Kinder y Kinder) y primaria de 1° a 6° grado.<br><br>

    <strong>Secundaria:</strong><br>
    Formación de valores: Se trabaja un valor por mes de 1° a 5° de secundaria.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Sobre la cantidad de alumnos:</h3>
              <p class="question-answer">El personal de tutoría se encuentra capacitado y especializado en las carreras de psicología y educación para el dominio de grupos. Por otro lado, nuestras aulas son amplias, ventiladas y con bastante iluminación natural y artificial.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Sobre la infraestructura:</h3>
              <p class="question-answer">En todos los locales: resaltar las comodidades en las aulas, corredores, baños, entre otros.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">No se entregan exámenes bimestrales.</h3>
              <p class="question-answer">Los PPFF tienen acceso a los exámenes bimestrales; si algún alumno o PP.FF. tiene alguna duda, solo tiene que solicitarlo en Coordinación y lo podrá revisar en presencia del tutor. Además es un material clasificado que requiere de mucha privacidad.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Corte de Cabello.</h3>
              <p class="question-answer">Hay límites razonables sin llegar a extremos, por higiene, por presentación y así también lo indica el Manual de Convivencia (Reglamento interno), aprobado por el Ministerio de Educación.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Cobro de pensión adelantado (julio y diciembre).</h3>
              <p class="question-answer">Es para cumplir con las obligaciones propias de la fecha.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">No hay una frecuente comunicación con los docentes (padres - docentes).</h3>
              <p class="question-answer">Sí se puede conversar con los docentes, se debe solicitar una entrevista anticipadamente.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Poco tiempo de refrigerio (recreos).</h3>
              <p class="question-answer">Existen dos recreos, el primero dura 15 minutos y el segundo 20 minutos. En 5to tienen otro régimen dos recreos de 15 minutos  y almuerzo de 20 minutos.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Largas jornadas y no cuentan con un horario de almuerzo.</h3>
              <p class="question-answer">Si se trata de actividades fuera del horario, el estudiante tiene entre 45 minutos y una hora de descanso.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Pensiones elevadas</h3>
              <p class="question-answer">Los precios son accesibles, nos permiten cubrir los costos en infraestructura y poderles brindar un servicio de excelente calidad, tanto en lo formativo como en lo académico. Solo si el padre insiste, se debe involucrar el mantenimiento de la infraestructura, el incremento del costo de vida, insumos, etc.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Muchos exámenes (semanal, diario)</h3>
              <p class="question-answer">Es importante que los alumnos se adecuen a las exigencias académicas, es necesario que adquieran el hábito de estudio y acostumbrarse a competir. Esto les dará buenos resultados en su preparación académica. ¡Nos está dando buenos resultados!</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Sobre las reagrupaciones (cuando bajan de aula)</h3>
              <p class="question-answer">Buscamos competitividad entre nuestros alumnos y que se esfuercen, bimestre a bimestre, a mejorar su nivel académico. En Trilce  todos los docentes son de excelente nivel y la disciplina es fundamental, independiente de la sección en que se encuentren.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Sobre los uniformes</h3>
              <p class="question-answer">Le explicamos al padre de familia en primer lugar que es para no generar más gastos, también se recalca que el Ministerio de Educación tiene una disposición en el cual se indica que el uso de uniforme no es obligatorio. Es importante que el alumno se sienta más cómodo para estudiar.  Se debe recalcar que sin embargo el alumno recibe las normas de convivencia (reglamento interno)  en el cual se hacen precisiones sobre la vestimenta que el alumno puede utilizar.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Descuentos hermanos y alumnos nuevos.</h3>
              <p class="question-answer">Explicamos al padre de familia que presente su solicitud, exponiendo y sustentando los motivos por el cual solicita el descuento. Asimismo, recalcamos que por dos hermanos: un cuarto de beca, uno de ellos; 3 y 4 hnos. media beca uno de ellos. Lógicamente deben ser evaluados como cualquier alumno que ingresa a Trilce. En caso pregunten a quién se le otorga la beca, indicar que es al mayor de los hermanos.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Docentes sin metodología adecuada</h3>
              <p class="question-answer">Todos nuestros docentes poseen un excelente nivel académico y tienen la experiencia necesaria para enseñar adecuadamente.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Retiros por bajo rendimiento</h3>
              <p class="question-answer">Le indicamos que todo alumno que se incorpora a la institución tiene un periodo de adaptación, le planteamos el sistema de asesorías, derivamos al departamento psicopedagógico. Los alumnos nuevos deben esforzarse más y tener la paciencia para adecuarse al sistema, además de lo indicado, los profesores van a ayudarlos a que puedan nivelarse en el menor tiempo.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Falta de adaptación</h3>
              <p class="question-answer">En el caso que el tema se refiera a la adaptación con sus compañeros o profesores, cuentan con el apoyo del departamento de psicología y en forma constante con el de su tutora.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">No cuenta con un ambiente amplio de esparcimiento</h3>
              <p class="question-answer">Sobre este punto se debe dar una información específica para cada local, la supervisora debe conversar con el director para saber con exactitud la información a dar. Por ejemplo en Los Olivos la información es simple por su infraestructura, en Maranga utilizan el complejo deportivo que está al frente, etc.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Retención de la tarjeta de control por falta de pago</h3>
              <p class="question-answer">Sistema por el cual el PP.FF. debe acercarse al colegio para conversar con la Dirección sobre su deuda y reprogramar dichas fechas. Recordar que el retener la tarjeta no implica que el alumno esté impedido de ingresar al colegio.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Testimonio: “No estoy de acuerdo con las clasificaciones que realizan con los alumnos a los niveles avanzados, intermedios y básicos”</h3>
              <p class="question-answer">El propósito no es limitar al alumno, solo se desea que vayan de menos a más y de acuerdo a su ritmo de aprendizaje, incentivando el esfuerzo para mejorar su nivel. Todos los niveles cuentan con la misma calidad de profesores.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">No se aceptan repitentes</h3>
              <p class="question-answer">Indicar que el alumno deberá pasar por la evaluaciones según el proceso de admisión.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Testimonio: “La competencia me ofrece la misma calidad de servicio y que resultado, grado de credibilidad tienen sus servicios”.</h3>
              <p class="question-answer">Trilce cuenta con la mejor plana docente y el mejor sistema académico, por otro lado nuestros resultados hablan por sí solos: Primeros puestos en las diferentes universidades como UNI, San Marcos y Católica; y sobre todo miles de ingresantes (además excelentes universitarios) en muchas universidades del país, además se debe recalcar el tema de valores.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Testimonio: “Como usted me garantiza que mi hijo ingresara a la Universidad”.</h3>
              <p class="question-answer">Eso no se  puede garantizar. Lo que sí le garantizamos es una excelente preparación académica, un excelente nivel en matemática, ciencias y letras, además de un programa de formación en valores.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">Caso alumno antiguo: “Mi hijo NO entiende algunos cursos”.</h3>
              <p class="question-answer">Al alumno se le brindará asesorías gratuitas y un control constante por parte de la tutora del aula para que el padre de familia conozca el progreso de su hijo”.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿Cuántas horas de clases enseñan arte? (pregunta probable por el motivo del comercial).</h3>
              <p class="question-answer"> Si bien es cierto que la dedicación al aspecto académico es una de las prioridades, también lo es la parte formativa, es en ese  punto en lo que respecta al arte, en Trilce se estimula al alumno según sus cualidades ya sea en las danzas, declamación, teatro y toda expresión que permita el desarrollo de la creatividad. En resumen no le puedo indicar el número de horas, pero sí la forma en que se trabaja este aspecto.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿Puede explicar cuál es el sistema académico en TRILCE? </h3>
              <p class="question-answer">En un sistema preuniversitario, desarrollado por una plana docente de la especialidad según el curso que dictan.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿Se aceptan niños especiales en el colegio?</h3>
              <p class="question-answer">Sí aceptamos a niños especiales, ya que somos un colegio inclusivo, el alumno (a) deberá rendir las evaluaciones de admisión para saber el nivel académico en el que se encuentra.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿Qué edad deben tener los niños que van a matricularse en 1º grado de Primaria?</h3>
              <p class="question-answer">Los niños que van a matricularse en 1º grado de Primaria deben cumplir 6 años, como máximo, el 30 de junio del año en curso.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title"> ¿Qué edad deben tener los alumnos que van a matricularse en el nivel secundaria?</h3>
              <p class="question-answer">
                <p>El tercer y último nivel dura cinco años. Atiende a jóvenes de entre 11 (o 12) a 16 (o 17) años de edad.</p><br>
                <p><i>*A los alumnos que no cuenten con la edad mencionada, se les indicará que son disposiciones del Ministerio de Educación.</i></p>
    </p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿Los postulantes reciben algún temario de cursos antes de rendir evaluaciones?</h3>
              <p class="question-answer">No se entrega ningún tipo de temario antes de las evaluaciones, ya que los  los postulantes son evaluados de acuerdo a su edad y nivel académico en curso.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿Si un ex alumno desea regresar al colegio, tendrá que ser evaluado nuevamente?</h3>
              <p class="question-answer">Si ya pasó más de un año académico, el alumno tendrá que pasar el proceso de admisión nuevamente.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿Un postulante luego de no haber sido admitido, puede volver a postular?</h3>
              <p class="question-answer">Sí podrá hacerlo, pero deberá haber transcurrido un año de dicho proceso de admisión.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿El colegio cuenta con movilidad propia?</h3>
              <p class="question-answer">No cuenta con movilidad propia.</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿En qué consiste la evaluación académica (Primaria) cursos que son evaluados?</h3>
              <p class="question-answer">De 2° a 6° grado: Matemática, Comunicación, Ciencia y Ambiente, Personal Social e Inglés(Básico).</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title"> ¿En qué consiste la evaluación académica (Secundaria)cursos que son evaluados?</h3>
              <p class="question-answer">Matemática, comunicación e Inglés (Básico). Cantidad de preguntas Aprox 50</p>
            </div>
          </div>

    <div class="frequentquestions-question row col-xs-12">
      <div class="row col-xs-1 question-number"></div>
      <div class="col-xs question-content">
        <h3 class="question-title">¿Por qué solo algunos colegios TRILCE cuentan con ITS</h3>
              <p class="question-answer">
                <p>El Ingreso por ITS es una modalidad dirigida a los mejores alumnos de 5° de Secundaria de un grupo de colegios seleccionado por la  PUCP, luego de realizar un estudio sobre el rendimiento de sus egresados en la Universidad.</p>
                <p>Luego de brindar la información sobre ITS, se menciona al padre de familia que el alumno también puede rendir el examen en la modalidad Primera Opción y que contamos con un aula exclusiva para la preparación Católica.</p>
              </p>
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
