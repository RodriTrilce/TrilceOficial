<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Mensaje de forulario</title>
</head>
<body>
    <h2>Gracias <strong>{{$data->step2_names}}</strong> por registrarse.</h1>
    <p>
      <a href="http://67.205.139.190/academia/matricula-en-linea/descargar-pdf?token={{ encrypt($data->step1_dni) }}">Descargue su ficha de inscripción aquí.</a>
    </p>
</body>
</html>
