<style>
.b2servicio_form {
    width: 100% !important;
    -webkit-box-sizing: border-box !important;
    -moz-box-sizing: border-box !important;
    box-sizing: border-box !important;
}
.ul-config{
    margin: auto !important;
    padding: 0 !important;
    border: 0 !important;
}
.ul-config li{
    list-style: none;
}
</style>
<section class="get-consultation" data-background="<?= $baseUrl ?>images/comunicate-4.jpg" data-stellar-background-ratio="0.6" style="background-size: 100%; background-position: 100% -1px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-8 fadeInUp wow mt-5">
          <div class="content-box" style="height: 550px;">
            <h4><span>Crearq</span> Vive el sueño</h4>
            <h3>Facilidad de contacto y respuesta rápida.</h3>
            <p>Comunicación inmediata, ofrecemos múltiples formas de contacto (teléfono, WhatsApp, redes sociales, etc.) y nos aseguramos en responder con rapidez.</p>
            <a href="#">CONTACTANOS <i class="fas fa-caret-right"></i></a>
          </div>
          <!-- end content-box -->
        </div>
        <div class="col-lg-4 col-md-8 fadeInUp wow mt-5">
          <div class="content-box" style="background: #20a7ae; height: 550px;">
            <h4><span>Crearq</span> Vive el sueño</h4>
            <h3>Guías personalizadas.</h3>
            <p>Entrega al cliente una guía paso a paso o un análisis de inversión personalizado después de una breve consulta, para que vea el valor y profesionalismo que puedes aportar.</p>
            <a href="#">CONTACTANOS <i class="fas fa-caret-right"></i></a>
          </div>
          <!-- end content-box -->
        </div>
        <div class="col-lg-4 col-md-8 fadeInUp wow mt-5">
          <div class="content-box" style="background: #68b330; height: 550px;">
            <h4><span>Crearq</span> Vive el sueño</h4>
            <h3>Credibilidad y confianza.</h3>
            <p>Mostramos nuestras experiencias y resultados comprobables, ya sea con testimonios de clientes satisfechos, historias de éxito o reseñas positivas.</p>
            <a href="#">CONTACTANOS <i class="fas fa-caret-right"></i></a>
          </div>
          <!-- end content-box -->
        </div>
        <!-- end col-6 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
<section class="about-content" style="padding: 50px;">
    <div class="container">
    <section class="contact about-content">
  <div class="container">
    <div class="row align-items-center">
   	<div class="col-lg-6 wow fadeInUp"> <b>01</b>
        <h4><span>Crearq</span> Tu hogar ideal te espera</h4>
        <small>Vive tus sueños </small> </div>
        <!-- end col-6 -->
        <div class="col-lg-3 col-md-6 wow fadeInUp"> 
        <address>
        	<strong>Visitanos</strong>
        	<p>Calle Armando Blondet 217, Of. 501<br>San Isidro, Lima, Perú</p>
        </address>
	   </div>
        <!-- end col-3 -->
        <div class="col-lg-3 col-md-6 wow fadeInUp"> 
        <address>
        	<strong>Contáctanos</strong>
        	<p><a href="#">ventas@inversioneshi.com</a> <br>+51 987 515 678</p>
        </address>
	   </div>
        <!-- end col-3 -->
	  </div>
       <!-- end row -->
    <div class="row align-items-center">
      <div class="col-lg-12">
        <div class="map">
          <div class="pattern-bg" data-stellar-ratio="1.03"></div>
          <!-- end pattern-bg -->
          <div class="holder" data-stellar-ratio="1.07"> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.2378765886474!2d-73.97644805915624!3d40.69075842971381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bb6c6fe52c7%3A0x2b3bb16e97b13c01!2sFort+Greene+Tennis+Courts!5e0!3m2!1sen!2str!4v1559831164025!5m2!1sen!2str" allowfullscreen></iframe>
          </div>
          <!-- end holder --> 
        </div>
      <!-- end map -->
    </div>
   </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
        <section class="b2servicio">
            <div class="b2servicio_deco1"><img src="<?= $baseUrl ?>images/contacto-deco2.png" width="141" height="200"></div>
            <div class="b2servicio_container ww_center">
                <div class="b2servicio_deco2"><img src="<?= $baseUrl ?>images/contacto-deco1.png" width="226" height="439"></div>
                <div class="b2servicio_content">
                    <div class="b2servicio_title">
                        <h2>DÉJANOS TUS DATOS
                        </h2>
                    </div>
                    <form class="b2servicio_form" action="/atencion-al-cliente/" id="formServicio" method="post"
                        data-hs-cf-bound="true">
                        <div class="b2servicio_dni">
                            <div class="input_select_box"><label>Documento de Identidad*</label>
                                <div class="input_select_left">
                                    <div class="input input_select"><span class="icon-arrow-bottom"></span><select
                                            class="validate[required]" name="document_type">
                                            <option value="DNI" selected="">DNI</option>
                                            <option value="CE">CE</option>
                                            <option value="Pasaporte">Pasaporte</option>
                                        </select></div>
                                </div>
                                <div class="input_select_right">
                                    <div class="input"><input class="validate[required] soloNumber" type="number"
                                            name="document"></div>
                                </div>
                            </div>
                        </div>
                        <ul class="ul-config">
                            <li>
                                <div class="input"><label>Nombre*</label><input class="validate[required]" type="text"
                                        name="name"></div>
                            </li>
                            <li class="ml-lg-3">
                                <div class="input"><label>Apellidos*</label><input class="validate[required]"
                                        type="text" name="lastname"></div>
                            </li>
                            <li>
                                <div class="input"><label>Email *</label><input class="validate[required,custom[email]]"
                                        type="email" name="email"></div>
                            </li>
                            <li class="ml-lg-3">
                                <div class="input"><label>Télefono / Celular*</label><input
                                        class="validate[required, custom[phone]] soloNumber" type="number" name="phone">
                                </div>
                            </li>
                            <li>
                                <div class="input"><label>Proyecto</label>
                                    <div class="input_select"><span class="icon-arrow-bottom"></span><select
                                            class="validate[required]" id="form_support_project" name="project">
                                            <option value="" disabled="disabled" selected="selected">Seleccione*</option>
                                            <option value="LOS GERANIOS 328" data-id="aliaga-435">LOS GERANIOS 328</option>
                                            <option value="ROMA 255" data-id="patria">ROMA 255</option>
                                            <option value="LAS LILAS 123" data-id="legado-torre-a">LAS LILAS 123</option>
                                            <option value="AUROSA 1940" data-id="legado-torre-a">AUROSA 1940</option>
                                            <option value="AQUA 2" data-id="legado-torre-a">AQUA 2</option>
                                        </select><input type="hidden" id="form_support_project_id" name="project_id">
                                    </div>
                                </div>
                            </li>
                            <li class="ml-lg-3">
                                <div class="input"><label>Tipo de departamento</label><input name="project_type"
                                        type="text"></div>
                            </li>
                            <li class="full">
                                <div class="input input_textarea"><label>Mensaje</label><textarea name="message"
                                        placeholder="Mensaje"></textarea></div>
                            </li>
                        </ul>
                        <div class="b2servicio_campos">
                            <p>(*) Campos obligatorios</p>
                        </div>
                        <div class="b2servicio_check">
                            <div class="input_checkbox"><input class="validate[required]" type="checkbox"
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
                        <div class="b2servicio_btn" id="btnServicio"><a class="btn btnServicio"
                                style="cursor: pointer; background-color: #68b330;"><span class="text-white">Enviar mis datos</span></a></div>
                    </form>
                </div>
            </div>
        </section>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end about-content -->
<section class="footer-bar">
    <div class="container">
        <div class="inner wow fadeIn">
            <div class="row">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
                    <figure><img src="images/footer-icon01.png" alt="Image"></figure>
                    <h3>Estamos ubicados</h3>
                    <p>Calle Armando Blondet 217, Of. 501<br>
                        San Isidro, Lima, Perú</p>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.10s">
                    <figure><img src="images/footer-icon02.png" alt="Image"></figure>
                    <h3>Horario de atencion</h3>
                    <p>Lunes a Viernes <strong>09:00</strong> a <strong>18:30</strong> <br>
                        Sabados y Domingos <strong>15:30</strong></p>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
                    <figure><img src="images/footer-icon03.png" alt="Image"></figure>
                    <h3>Nuestras oficinas</h3>
                    <p>Calle Armando Blondet 217, Of. 501<br>
                        San Isidro, Lima, Perú</p>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end inner -->
    </div>
    <!-- end container -->
</section>