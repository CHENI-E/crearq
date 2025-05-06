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
 <img src="<?= $baseUrl ?>images/portada3/INVERTIR.jpg" class="w-100" alt="">
<!-- <section class="get-consultation" data-background="<?= $baseUrl ?>images/servicios_1.jpg" data-stellar-background-ratio="0.6" style="background-size: 100%; background-position: 100% -1px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 fadeInUp wow mt-5" style="margin-top: 20% !important;">
        <div class="content-box">
          <p class="p-0 m-0 text-justify">El sector inmobiliario es uno de los rubros de nuestra economía que más ha crecido en los últimos tiempos, y aun tiene por desarrollarse mucho mas; es por eso, que se presenta
            como una de las inversiones más seguras del mercado y con una interesante tasa de retorno, nuestra empresa esta a abierta a asociarse con diferentes inversionistas y/o propietarios
            de terrenos para desarrollar un proyecto inmobiliario y/o comercial formando una alianza estratégica, donde el inversionista compra la totalidad de un terreno o un porcentaje del mismo
            y nosotros completamos el otro porcentaje, y el inversionista tiene la seguridad que su terreno, durante todo el proyecto va a estar a su nombre además que nuestra empresa desarrollará
            un proyecto rentable en base a nuestra experiencia.
          </p>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section class="recent-posts" style="padding: 0px; margin-top:90px !important;">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInUp">
        <h4><span>¿Deseas Invertir?</span></h4>
        <small>Crearq </small>
      </div>

      <div class="col-lg-12 wow fadeInUp" data-wow-delay="0s">
        <div class="post-box">
          <span class="text-justify">
            El sector inmobiliario es uno de los rubros de nuestra economía que más ha crecido en los últimos tiempos, y aun tiene por desarrollarse mucho mas; es por eso, que se presenta
            como una de las inversiones más seguras del mercado y con una interesante tasa de retorno, nuestra empresa esta a abierta a asociarse con diferentes inversionistas y/o propietarios
            de terrenos para desarrollar un proyecto inmobiliario y/o comercial formando una alianza estratégica, donde el inversionista compra la totalidad de un terreno o un porcentaje del mismo
            y nosotros completamos el otro porcentaje, y el inversionista tiene la seguridad que su terreno, durante todo el proyecto va a estar a su nombre además que nuestra empresa desarrollará
            un proyecto rentable en base a nuestra experiencia.</span>
        </div>
      </div>

    </div>
  </div>
</section>


</section>
<!-- end recent-posts -->
<section class="contact about-content mb-5" style="margin-top: 50px !important;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-lg-2">
        <div class="b2servicio_content">
          <div class="b2servicio_title">
            <h2>DÉJANOS TUS DATOS
            </h2>
          </div>
          <form class="b2servicio_form" action="<?=$baseUrl?>Home/storeEmail" id="formServicio" method="post" data-hs-cf-bound="true">
            <input type="hidden" name="i" value="6" required>
            <div class="b2servicio_dni px-1">
              <div class="input_select_box"><label>Documento de Identidad*</label>
                <div class="input">
                    <input class="validate[required] soloNumber" type="number" required name="document">
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
                    class="validate[required, custom[phone]] soloNumber" type="number" name="phone" required >
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

<section class="footer-bar" id="footer-rosado">
  <div class="container">
    <!-- PUEDO QUITAR EL mb-5 PARA DESABILITAR EL SHADOW -->
    <div class="inner wow fadeIn shadow-lg mb-5 bg-body-tertiary rounded">
      <div class="row justify-content-center">

        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
          <figure><img src="<?=$baseUrl?>images/footer-icon01.png" alt="Image"></figure>
          <h3>Estamos ubicados</h3>
          <p>Calle Armando Blondet 217, Of. 501<br>
            San Isidro, Lima, Perú</p>
        </div>

        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.10s">
          <figure><img src="<?=$baseUrl?>images/footer-icon02.png" alt="Image"></figure>
          <h3>Horario de atencion</h3>
          <p>Lunes a Viernes <strong>09:00</strong> a <strong>18:30</strong> 
        </div>

      </div>
    </div>
  </div>
</section>
