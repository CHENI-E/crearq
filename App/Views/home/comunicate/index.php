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
<section class="get-consultation" data-background="<?= $baseUrl ?>images/portada/PORTADA-CONTACTANOS---WEB-2.png" data-stellar-background-ratio="0.6" style="background-size: 100%; background-position: 100% -1px;">
    <div class="bg-red">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</section>

<section class="about-content" style="padding: 50px;">
    <div class="container">
        <section class="contact about-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 wow fadeInUp"> <b>01</b>
                        <h4><span>Crearq</span> Tu hogar ideal te espera</h4>
                        <small>Vive tus sueños </small>
                    </div>
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
                <div class="row">

                    <!-- <div class="col-lg-6">
                        <div class="map">
                            <div class="pattern-bg" data-stellar-ratio="1.03"></div>
                            <div class="holder" data-stellar-ratio="1.07">
                                <iframe style="width: 300%;"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.2378765886474!2d-73.97644805915624!3d40.69075842971381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bb6c6fe52c7%3A0x2b3bb16e97b13c01!2sFort+Greene+Tennis+Courts!5e0!3m2!1sen!2str!4v1559831164025!5m2!1sen!2str" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-6 order-lg-2">
                        <div class="b2servicio_content">
                            <div class="b2servicio_title">
                                <h2>DÉJANOS TUS DATOS
                                </h2>
                            </div>
                            <form class="b2servicio_form" action="/atencion-al-cliente/" id="formServicio" method="post"
                                data-hs-cf-bound="true">
                                <div class="b2servicio_dni px-1">
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
                                <ul class="ul-config row d-flex justify-content-between">
                                    <li class="col-lg-6 px-1">
                                        <div class="input"><label>Nombre*</label><input class="validate[required]" type="text"
                                                name="name"></div>
                                    </li>
                                    <li class="col-lg-6 px-1">
                                        <div class="input"><label>Apellidos*</label><input class="validate[required]"
                                                type="text" name="lastname"></div>
                                    </li>
                                    <li class="col-lg-6 px-1">
                                        <div class="input"><label>Email *</label><input class="validate[required,custom[email]]"
                                                type="email" name="email"></div>
                                    </li>
                                    <li class="col-lg-6 px-1">
                                        <div class="input"><label>Télefono / Celular*</label><input
                                                class="validate[required, custom[phone]] soloNumber" type="number" name="phone">
                                        </div>
                                    </li>
                                    <li class="col-lg-6 px-1">
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
                                    <li class="col-lg-6 px-1">
                                        <div class="input"><label>Tipo de departamento</label><input name="project_type"
                                                type="text"></div>
                                    </li>
                                    <li class="col-lg-12 px-1">
                                        <div class="input input_textarea"><label>Mensaje</label><textarea name="message"
                                                placeholder="Mensaje"></textarea></div>
                                    </li>
                                </ul>
                                <div class="b2servicio_campos px-1">
                                    <p>(*) Campos obligatorios</p>
                                </div>
                                <div class="b2servicio_check px-1">
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
                                <div class="b2servicio_btn px-1" id="btnServicio"><a class="btn btnServicio"
                                        style="cursor: pointer; background-color: #68b330;"><span class="text-white">Enviar mis datos</span></a></div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 pt-5 order-lg-1">
                        <iframe style="width:100%; height:100%;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.2378765886474!2d-73.97644805915624!3d40.69075842971381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bb6c6fe52c7%3A0x2b3bb16e97b13c01!2sFort+Greene+Tennis+Courts!5e0!3m2!1sen!2str!4v1559831164025!5m2!1sen!2str" allowfullscreen></iframe>
                    </div>



                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
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
                    <h3>Contáctanos</h3>
                    <p>+ 51 987 515 678<br>
                    gerencia@crearqinmobiliaria.com</p>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end inner -->
    </div>
    <!-- end container -->
</section>