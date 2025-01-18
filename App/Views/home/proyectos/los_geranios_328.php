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
<!-- property-plans -->
  <img src="<?= $baseUrl ?>images/portada/GERANIOS-2.png" class="w-100" alt="">

  
  <section class="property-plans about-content pt-5 pb-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 wow fadeInUp"> <b>05</b>
          <h4><span>Crearq</span> Adaptable</h4>
          <h3>Hogares que crean recuerdos</h3>
          <p>Te esperamos en nuestra oficina de ventas para que tengas todas estas oportunidades con precios accesibles y oportunidades de pago adecuadas...</p>
          <table>
            <tbody>
              <tr>
                <td>Total area:</td>
                <td>100 m²</td>
              </tr>
              <tr>
                <td>Comedor:</td>
                <td>1 principal</td>
              </tr>
              <tr>
                <td>Baños:</td>
                <td>3</td>
              </tr>
              <tr>
                <td>Espacio:</td>
                <td>Sala - Comedor</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- end col-6 -->
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.05s">
          <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="pill" href="#tab-one">1 Sala 47m²</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#tab-two" role="tab">2 Sala 65m²</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#tab-three" role="tab">3 Sala 90m²</a> </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-one">
              <figure><img src="<?= $baseUrl ?>images/plan01.jpg" alt="Image"></figure>
            </div>
            <!-- end tab-pane -->
            <div class="tab-pane fade" id="tab-two">
              <figure><img src="<?= $baseUrl ?>images/plan02.jpg" alt="Image"></figure>
            </div>
            <!-- end tab-pane -->
            <div class="tab-pane fade" id="tab-three">
              <figure><img src="<?= $baseUrl ?>images/plan03.jpg" alt="Image"></figure>
            </div>
            <!-- end tab-pane -->
          </div>
          <!-- end tab-contnet -->
        </div>
        <!-- end col-6 -->
      </div>
      <!-- end row -->
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
    </div>
    <!-- end container -->
  </section>

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