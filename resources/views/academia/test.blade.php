Puede descargar su ficha de inscripción prematrícula aquí
</p><form action="/academia/matricula-en-linea/descargar-pdf" method="post">
  {{ csrf_field() }}
  <input name="token" type="hidden" value="{{ encrypt('06852111') }}">
  <button type="submit"><strong>Descargar PDF</strong></button>
</form>
