<form class="col-xs-12 col-sm col-md-7 col-lg-7 simulacrum-form" name="simulacro_form" id="simulacro_form" method="post" action="">
        @csrf
        <div class="row start-xs step-1 step-container">
          <h2>Regístrate para participar</h2>

          <div class="row col-xs-12 start-xs simulacrum-step1-steps">
            <div class="col-xs-4">
              <div class="number">1</div>
              <div class="text">Ingresa tus datos</div>
            </div>
            <div class="col-xs-4">
              <div class="number">2</div>
              <div class="text">Presiona "Registrarme"</div>
            </div>
          </div>

        </div>

        <div class="row start-x step-2 step-container">
          <h2>Déjanos tus datos</h2>
          <div class="col-xs-12 start-xs">
            
            <fieldset>
              <input type="hidden" name="TIPO_DOCUMENTO" value="01" />
              <input type="hidden" name="CODE_URL" id="CODE_URL" value="{{ $codurl }}">
            </fieldset>

            <div class="col-xs-12">
              <fieldset class="form-group">
                <input
                  type="number"
                  name="NRO_DOCUMENTO"
                  id="step1_dni"
                  placeholder="DNI"
                  aria-label="DNI"
                  min="0"
                  max="99999999"
                  minlength="8"
                  maxLength="8"
                  required
                />
              </fieldset>
            </div>

            <fieldset class="form-group">
              <input
              type="onlytext"
              name="NOMBRES"
              id="names"
              placeholder="Nombres"
              required
              />
            </fieldset>

            <fieldset class="form-group">
              <input
                type="onlytext"
                name="PRIMER_APELLIDO"
                id="step1_PRIMER_APELLIDO"
                placeholder="Apellido paterno"
                aria-label="Apellido paterno"
                required
              />
            </fieldset>

            <fieldset class="form-group">
              <input
                type="onlytext"
                name="SEGUNDO_APELLIDO"
                id="step1_SEGUNDO_APELLIDO"
                placeholder="Apellido materno"
                required
              />
            </fieldset>

            <fieldset class="form-group">
              <input
              type="email"
              name="CORREO_E"
              id="email"
              placeholder="Email"
              required
              />
            </fieldset>

            <fieldset class="form-group">
                <select name="TIPO_INSTITUCION" id="cbx_institucion" data-name="Tipo de Institución" aria-label="Tipo de Institución" required>
                    <option value="" selected="" disabled="" hidden="">Tipo de Institución</option>
                    <option value="1">NACIONAL</option>
                    <option value="2">PARTICULAR</option>
                </select>
            </fieldset>

            <fieldset class="form-group">
              <select
                name="BLDG_TBL"
                id="cbx_venue"
                data-name="Local Inscripción"
                aria-label="Local inscripción"
                required>
                  <option value="" selected disabled hidden>Local inscripción</option>
              </select>
            </fieldset>
            
            <fieldset class="form-group">
              <select
                name="NIVEL_ESTUDIO"
                id="cbx_type"
                data-name="Tipo examen"
                aria-label="Tipo examen"
                required>
                  <option value="" selected disabled hidden>Tipo de Examen</option>
              </select>
            </fieldset>
                      
            

            <button type="submit" id="form_submit" class="validate">Registrarme <i class="fa fa-check"></i></button>
          </div>
        </div>

      </form>