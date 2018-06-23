<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Gracias por su inscripción</title>
    <style>

    .mail{
      max-width: 700px;
      height: 675px;
      font-family: 'arial';
      background-image: url('http://67.205.139.190/static/images/academia/mail/enrollment-template-bg.jpg');
      background-size: contain;
      background-repeat: no-repeat;
      padding-top: 15%;
    }

    @media (max-width:767px){
      .mail{
        font-size: 12px;
        padding-top: 40%;
      }
    }

    .mail > *{
      margin:0;
      padding: 0;
    }

    .text{

      color: white;
      width: 100%;
    }

    .thanks{
      font-size: 2.5rem;
      text-align: center;
      top: 40%;
    }


    .names{
      font-size: 1.15rem;
      width: 100%;
      bottom: 48%;
      text-align: center;
    }

    .for-register{
      font-size: .8rem;
      width: 100%;
      text-align: center;
      bottom: 46%;
    }

    .download{
      font-size: .9rem;
      width: 100%;
      bottom: 34%;
      text-align: center;
    }

    .here{
      text-decoration: underline;
      font-weight: bold;
    }

    .here a, a:link, a:visited{
      text-decoration: none;
      color:white;
    }

    @media (max-width:767px){
      .thanks{
        font-size: 1.4rem;
      }

      .names{
        font-size: .9rem;
      }
      .for-register{
        font-size: .75rem;
        bottom: 43%;
      }

      .download{
        font-size: .65rem;

      }

    }
    </style>
</head>
<body>
<div class="mail">
  <div class="text thanks">Gracias</div>
  <div class="text names">{{$data->step2_names}}</div>
  <div class="text for-register">por registrarte</div>
  <div class="text download"><a href="http://67.205.139.190/academia/matricula-en-linea/descargar-pdf?token={{ encrypt($data->step1_dni) }}" target="_blank">Descargue su ficha de inscripción <span class="here">aquí</span></a></div>
</div>
</body>
</html>
