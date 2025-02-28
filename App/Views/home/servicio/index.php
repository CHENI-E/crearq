<style>
  .b2servicio_form {
    width: 100% !important;
    -webkit-box-sizing: border-box !important;
    -moz-box-sizing: border-box !important;
    box-sizing: border-box !important;
  }

  .ul-config {
    margin: auto !important;
    padding: 0 !important;
    border: 0 !important;
  }

  .ul-config li {
    list-style: none;
  }
</style>
<!-- property-plans -->
<img src="<?= $baseUrl ?>images/portada3/servicios-web.png" class="w-100" alt="">
<!-- <section class="get-consultation" data-background="<?= $baseUrl ?>images/servicios_1.jpg" data-stellar-background-ratio="0.6" style="background-size: 100%; background-position: 100% -1px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-8 fadeInUp wow mt-5" style="margin-top: 20% !important;">
        <div class="content-box">
          <h4><span>Conocemos</span> bien el negocio.</h4>
          <p class="text-justify">Nuestra experiencia nos permite construir o gerenciar proyectos comerciales o residenciales de manera eficiente, minimizando riesgos y costos y maximizando los buenos resultados.</p>
        </div>
      </div>
    </div>
  </div>
</section> -->


<section class="recent-posts" style="padding: 0px; margin-top:90px !important;">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInUp">
        <h4><span>Conocemos</span> bien el negocio</h4>
        <small>Crearq </small>
      </div>

      <div class="col-lg-12 wow fadeInUp" data-wow-delay="0s">
        <div class="post-box">
          <span class="text-justify">
            Nuestra experiencia nos permite construir o gerenciar proyectos
            comerciales o residenciales de manera eficiente, minimizando riesgos y costos y maximizando los buenos resultados.</span>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="recent-posts" style="padding: 0px; margin-top:90px !important;">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInUp">
        <h4><span>Crearq</span> Espacios recreativos</h4>
        <small>Diseño de excelencia </small>
      </div>

      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0s">
        <div class="post-box">
          <div class="w-100 text-center"> <img class="text-center" id="servicio_imagen_construccion" src="<?= $baseUrl ?>images/servicio/construccion-ico.png" alt="Image"> </div>
          <div class="text-center w-100"><span>CONSTRUCCIÓN</span></div>
          <span class="text-justify">
            Nuestro equipo lo integran profesionales con amplia experiencia en el campo de la construcción, que aplican técnicas modernas de construcción, las cuales nos permiten ofrecer a nuestros
            clientes un presupuesto competitivo en el mercado y un ahorro significativo en el plazo de ejecución.</span>
        </div>
      </div>

      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.20s">
        <div class="post-box">
          <div class="w-100 text-center"> <img class="text-center" id="servicio_imagen_integral" src="<?= $baseUrl ?>images/servicio/integral_ico.png" alt="Image"> </div>
          <div class="text-center w-100"><span>PROYECTOS INTEGRALES</span></div>
          <span class="text-justify">CREARQ se ocupa del desarrollo total del proyecto, desde la conceptualización y desarrollo de planos, hasta la entrega de llaves, nuestra experiencia y sistema de gerenciamiento nos permite
            optimizar los tiempos y costos, en base a métodos de construcción modernos obteniendo un significativo ahorro en tiempo y dinero.</span>
        </div>
      </div>

      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.10s">
        <div class="post-box">
          <div class="w-100 text-center"> <img class="text-center" id="servicio_imagen_gerencia" src="<?= $baseUrl ?>images/servicio/gerencia_ico.png" alt="Image"> </div>
          <div class="text-center w-100"><span>GERENCIAMIENTO DE OBRAS</span></div>
          <span class="text-justify"> Nos encargamos del gerenciamiento del proyecto, llevando un control de los recursos asignados y optimizándolos mejorando el tiempo de ejecución y el presupuesto de obra en base
            a herramientas de gestión modernas y un continuo seguimiento en la aplicación de las mismas.</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FORMULARIO CON EL MAPA -->
<section class="about-content " style="padding: 50px;">
  <div class="container">
    <section class="contact about-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-lg-2">
            <div class="b2servicio_content">
              <div class="b2servicio_title">
                <h2>DÉJANOS TUS DATOS
                </h2>
              </div>
              <form class="b2servicio_form" action="<?= $baseUrl ?>Home/storeEmail" id="formServicio" method="post" data-hs-cf-bound="true">
                <input type="hidden" name="i" value="9" required>
                <div class="b2servicio_dni px-1">
                  <div class="input_select_box"><label>Documento de Identidad*</label>
                    <div class="input_select_left">
                      <div class="input input_select"><span class="icon-arrow-bottom"></span><select
                          class="validate[required]" name="document_type" required>
                          <option value="DNI" selected="">DNI</option>
                          <option value="CE">CE</option>
                          <option value="Pasaporte">Pasaporte</option>
                        </select></div>
                    </div>
                    <div class="input_select_right">
                      <div class="input"><input class="validate[required] soloNumber" type="number" required
                          name="document"></div>
                    </div>
                  </div>
                </div>
                <ul class="ul-config row d-flex justify-content-between">
                  <li class="col-lg-6 px-1">
                    <div class="input"><label>Nombre*</label><input class="validate[required]" type="text" required
                        name="name"></div>
                  </li>
                  <li class="col-lg-6 px-1">
                    <div class="input"><label>Apellidos*</label><input class="validate[required]" required
                        type="text" name="lastname"></div>
                  </li>
                  <li class="col-lg-6 px-1">
                    <div class="input"><label>Email *</label><input class="validate[required,custom[email]]" required
                        type="email" name="email"></div>
                  </li>
                  <li class="col-lg-6 px-1">
                    <div class="input"><label>Télefono / Celular*</label><input
                        class="validate[required, custom[phone]] soloNumber" type="number" name="phone" required>
                    </div>
                  </li>
                  <li class="col-lg-12 px-1">
                    <div class="input"><label>¿Qué servicio necesitas?</label><input
                        class="" type="text" name="servicio" required>
                    </div>
                  </li>
                  <li class="col-lg-12 px-1">
                    <div class="input input_textarea"><label>Mensaje</label><textarea name="message" required
                        placeholder="Mensaje"></textarea></div>
                  </li>
                </ul>
                <div class="b2servicio_campos px-1">
                  <p>(*) Campos obligatorios</p>
                </div>
                <div class="b2servicio_check px-1">
                  <div class="input_checkbox"><input class="validate[required]" type="checkbox" required
                      id="supportcheck" name="terminos"><label for="supportcheck">
                      <div class="input_checkbox_box"></div>
                      <div class="input_checkbox_text">He leído y acepto la
                        <a href="/terminos-y-condiciones/" target="_blank">Términos y condiciones</a>
                        y las
                        <a href="/politicas-de-privacidad/" target="_blank">Políticas de Privacidad</a>
                        de Crearq.
                      </div>
                    </label></div>
                </div><input type="hidden" id="form__token"
                  value="DFv6KfFCPIaf9cvqh_gEG_GpO9w2LwexIQ7Q2xfnFZI">
                <div class="b2servicio_btn px-1" id="btnServicio"><button type="submit" class="btn btnServicio"
                    style="cursor: pointer; background-color: #68b330;"><span class="text-white">Enviar mis datos</span></button></div>
              </form>
            </div>
          </div>

          <div class="col-lg-6 pt-5 order-lg-1">
            <iframe style="width:100%; height:100%;"
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7802.479403328077!2d-77.022379!3d-12.095736000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c865504950a9%3A0x21193b6f6c6ee4c2!2sC.%20Armando%20Blondet%20217%2C%20San%20Isidro%2015047!5e0!3m2!1ses!2spe!4v1740546573452!5m2!1ses!2spe"
              allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
  </div>
  <!-- end container -->
</section>


<script>
  var baseurl = "<?= $baseUrl ?>";
  var img = document.getElementById("servicio_imagen_construccion");
  var imgOriginal = baseurl + 'images/servicio/construccion-ico.png';
  var imgHover = baseurl + "images/servicio/construccion-ico-full.png";

  img.addEventListener("mouseover", function() {
    img.src = imgHover;
  });

  img.addEventListener("mouseout", function() {
    img.src = imgOriginal;
  });


  var img2 = document.getElementById("servicio_imagen_integral");
  var imgOriginal2 = baseurl + 'images/servicio/integral_ico.png';
  var imgHover2 = baseurl + "images/servicio/integral_ico-full.png";

  img2.addEventListener("mouseover", function() {
    img2.src = imgHover2;
  });

  img2.addEventListener("mouseout", function() {
    img2.src = imgOriginal2;
  });


  var img3 = document.getElementById("servicio_imagen_gerencia");
  var imgOriginal3 = baseurl + 'images/servicio/gerencia_ico.png';
  var imgHover3 = baseurl + "images/servicio/gerencia_ico-full.png";

  img3.addEventListener("mouseover", function() {
    img3.src = imgHover3;
  });

  img3.addEventListener("mouseout", function() {
    img3.src = imgOriginal3;
  });
</script>