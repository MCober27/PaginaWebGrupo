
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->

      <main>
        <section class="well1">
          <div class="container">
            <h2>¿Necesitas ayuda? Contacte con nosotros desde este formulario</h2>
            <form class="propio" method="post" action="">
              <fieldset class="row">
                  <input class="grid_4" type="text" name="obligatorios" id="nombre" placeholder="Nombre*" pattern="^\D*$" required oninput="comprobarCampos();">

                  <input class="grid_4" type="text" name="obligatorios" id="ape1" placeholder="Apellido 1*" pattern="^\D*$" required oninput="comprobarCampos();">

                  <input class="grid_4" type="text" name="obligatorios" id="ape2" placeholder="Apellido 2*" pattern="^\D*$" required oninput="comprobarCampos();">

                  <input class="grid_4" type="email" name="obligatorios" id="email" placeholder="E-mail*" required pattern="^[a-zA-Z0-9_\-\.~]{2,}@[a-zA-Z0-9_\-\.~]{2,}\.[a-zA-Z]{2,4}$" oninput="comprobarCampos();">

                  <input class="grid_4" type="tel" name="tfijo" id="telf" placeholder="Teléfono fijo" pattern="^9\d{8}$">

                  <input class="grid_4" type="tel" name="obligatorios" id="telm" placeholder="Teléfono móvil*" required pattern="(7|6)\d{8}" oninput="comprobarCampos();">

                      <textarea class="grid_12" name="obligatorios" id="descripcion" placeholder="Descripción*" required oninput="comprobarCampos();"></textarea>
                  <select class="grid_12" name="asunto" id="asunto"onchange="Asunto()">
                      <option value="no">Seleccione un tipo de asunto</option>
                      <option value="1" >Pregunta</option>
                      <option value="2" >Reserva</option>
                      <option value="3" >Sugerencia</option>
                      <option value="4" >Reclamacion</option>
                      <option value="5" >Otros</option>
                  </select>
                  <div class="grid_4"></div><label for="condiciones" class="grid_4"><input type="checkbox" id="condiciones" class="condiciones" name="condiciones" required disabled onclick="Terminos()"> Acepta los <spam class="link" onclick="window.open('licencia.html','Términos de licencia','height=500,width=800,left=100,top=100');">Términos y condiciones</spam> de uso</label>


                  <input class="grid_12 submit" type="submit" name="formulario" id="boton" disabled onsubmit="validar()">

              </fieldset>
            </form>

          </div>

        </section>

      </main>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
    </div>

  </body>
</html>