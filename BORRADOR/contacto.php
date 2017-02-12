
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
                  <input class="grid_4" type="text" name="nombre" id="nombre" placeholder="Nombre" pattern="^\D*$" required oninput="habilitar_condiciones()">

                  <input class="grid_4" type="text" name="apellido1" id="ape1" placeholder="Apellido 1" pattern="^\D*$" required>

                  <input class="grid_4" type="text" name="apellido2" id="ape2" placeholder="Apellido 2" pattern="^\D*$" required>

                  <input class="grid_4" type="email" name="email" id="email" placeholder="E-mail" required pattern="^[a-zA-Z0-9_\-\.~]{2,}@[a-zA-Z0-9_\-\.~]{2,}\.[a-zA-Z]{2,4}$">

                  <input class="grid_4" type="tel" name="tfijo" id="telf" placeholder="Teléfono fijo" pattern="^9\d{8}$">

                  <input class="grid_4" type="tel" name="tmovil" id="telm" placeholder="Teléfono móvil" required pattern="(7|6)\d{8}">

                      <textarea class="grid_12" name="descripcion" placeholder="Descripción" required></textarea>
                  <select class="grid_12" name="asunto">
                      <option value="no">Seleccione un tipo de asunto</option>
                      <option value="1" >Pregunta</option>
                      <option value="2" >Reserva</option>
                      <option value="3" >Sugerencia</option>
                      <option value="4" >Reclamacion</option>
                      <option value="5" >Otros</option>
                  </select>
                  <div class="grid_4"></div><label for="condiciones" class="grid_4"><input type="checkbox" id="condiciones" class="condiciones" name="condiciones" required disabled> Acepta los <spam class="link" onclick="window.open('licencia.html','Términos de licencia','height=500,width=800,left=100,top=100');">Términos y condiciones</spam> de uso</label>


                  <input class="grid_12 submit" type="submit" name="formulario">

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