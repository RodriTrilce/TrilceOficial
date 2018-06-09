Puede descargar su ficha de inscripción prematrícula aquí
</p><form action="/academia/matricula-en-linea/descargar-pdf" method="post">
  {{ csrf_field() }}
  <input name="token" type="hidden" value="{{ encrypt('44965194') }}">
  <button type="submit">Descargar PDF</button>
</form>
