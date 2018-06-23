
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Trilce - inscripción de matrícula en linea</title>

  <style type="text/css">

    /* Outlines the grids, remove when sending */
    /*table td { border: 1px solid cyan; }*/

    /* CLIENT-SPECIFIC STYLES */
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; color: white; font-family: 'arial'}
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { -ms-interpolation-mode: bicubic; }

    /* RESET STYLES */
    img { border: 0; outline: none; text-decoration: none; }
    table { border-collapse: collapse !important; background: #f4633a}
    body { margin: 0 !important; padding: 0 !important; width: 100% !important; }

    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }

    /* ANDROID CENTER FIX */
    div[style*="margin: 16px 0;"] { margin: 0 !important; }

    /* MEDIA QUERIES */
    @media all and (max-width:639px){
      .wrapper{ width:320px!important; padding: 0 !important; }
      .container{ width:300px!important;  padding: 0 !important; }
      .mobile{ width:300px!important; display:block!important; padding: 0 !important; }
      .img{ width:100% !important; height:auto !important; }
      *[class="mobileOff"] { width: 0px !important; display: none !important; }
      *[class*="mobileOn"] { display: block !important; max-height:none !important; }
    }

    .wrapper{
      border-left: 11px solid #fff;
      border-right: 11px solid #fff;
    }

    .wrapper-first{
      border-top: 0;
      border-right: 11px solid transparent;
    }

    .wrapper-end{
      border-bottom: 11px solid #fff;
    }

    .fixborder{
      width: 100%;
      background: white;
      height: 9px;
    }
    .toptopbar{
      border-top: 11px solid white;
      width: 100%;
    }

    .gracias{
      font-size: 40px;
    }

    .nombre{
      font-size: 20px;
    }
  </style>
</head>
<body style="margin:0; padding:0; background-color:#f4633a;">

  <span style="display: block; width: 640px !important; max-width: 640px; height: 1px" class="mobileOff"></span>

  <center>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f4633a" style="margin-top:30px">
      <tr>
        <td align="center" valign="top">

          <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper wrapper-first" bgcolor="#FFFFFF">
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">

              <table width="100%">
                <tr>
                  <td width="100%" class="toptopbar" valign="top">
                    &nbsp;
                  </td>
                  <td style="text-align:right">
                    <img src="{{ env('APP_URL') }}/static/images/academia/mail/enrollment-template-t.png">
                  </td>
                </tr>
              </table>

              </td>
            </tr>
            <tr>
              <td align="center" valign="top">

                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td align="center" valign="top">
                      <span class="gracias">Gracias</span>
                    </td>
                  </tr>
                </table>

              </td>
            </tr>
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
          </table>

          <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#FFFFFF">
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top">

                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td align="center" valign="top">
                      <span class="nombre">{{$data->step2_names}}</span>
                    </td>
                  </tr>
                  <!-- <tr>
                    <td width="300" class="mobile" align="center" valign="top">
                      Grid Two
                    </td>
                    <td width="300" class="mobile" align="center" valign="top">
                      Grid Two
                    </td>
                  </tr> -->
                </table>

              </td>
            </tr>
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
          </table>

          <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#FFFFFF">
            <tr>
             <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top">

                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td align="center" valign="top">
                      <span class="registrarte">por registrarte</span>
                    </td>
                  </tr>
                  <!-- <tr>
                      <td width="200" class="mobile" align="center" valign="top">
                        Grid Three
                      </td>
                      <td width="200" class="mobile" align="center" valign="top">
                        Grid Three
                      </td>
                      <td width="200" class="mobile" align="center" valign="top">
                        Grid Three
                      </td>
                  </tr> -->
                </table>

              </td>
            </tr>
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
          </table>

          <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#FFFFFF">
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top">

                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td align="center" valign="top">
                      <span class="registrarte"><a href="{{ env('APP_URL') }}/academia/matricula-en-linea/descargar-pdf?token={{ encrypt($data->step1_dni) }}" target="_blank">Descargue su ficha de matrícula aquí</a></span>
                    </td>
                  </tr>
                  <!-- <tr>
                    <td width="150" class="mobile" align="center" valign="top">
                      Grid Four
                    </td>
                    <td width="150" class="mobile" align="center" valign="top">
                      Grid Four
                    </td>
                    <td width="150" class="mobile" align="center" valign="top">
                      Grid Four
                    </td>
                    <td width="150" class="mobile" align="center" valign="top">
                      Grid Four
                    </td>
                  </tr> -->
                </table>

              </td>
            </tr>
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
          </table>

          <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper wrapper-end" bgcolor="#FFFFFF">
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="top">

                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <!-- <tr>
                    <td width="120" class="mobile" align="center" valign="top">
                      Grid Five
                    </td>
                    <td width="120" class="mobile" align="center" valign="top">
                      Grid Five
                    </td>
                    <td width="120" class="mobile" align="center" valign="top">
                      Grid Five
                    </td>
                    <td width="120" class="mobile" align="center" valign="top">
                      Grid Five
                    </td>
                    <td width="120" class="mobile" align="center" valign="top">
                      Grid Five
                    </td>
                  </tr> -->
                </table>

              </td>
            </tr>
            <tr>
              <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
            </tr>
          </table>

        </td>
      </tr>
    </table>
  </center>
</body>
</html>
