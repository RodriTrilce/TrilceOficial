Hola, {{ $data->step2_names }}.

Te enviamos tu ficha de inscripción - Trilce Academia

Descarga en el siguiente enlace:
{{ env('APP_URL') }}/academia/matricula-en-linea/descargar-pdf?token={{ encrypt($data->step1_dni) }}
