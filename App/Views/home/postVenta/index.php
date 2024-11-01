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
<section class="property-customization" style="padding: 260px;">
    <div class="video-bg" style="background: linear-gradient(161deg, #26282b 0%, #26282b 60%, #20a7ae 100%);">
        <video src="<?= $baseUrl ?>videos/video03.mp4" loop autoplay muted></video>
    </div>
    <!-- end video-bg -->
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp before-titulo-postVenta">
                <h4 class="banner-titulo-postVenta">Nos esforzamos cada día por brindarles un <span>excelente servicio</span></h4>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end page-header -->
<section class="about-content" style="padding: 50px;">
    <div class="container">
        <section class="b1servicio">
            <div class="b1servicio_content">
                <div class="b1servicio_wrap ww_center">
                    <div class="b1servicio_title">
                        <div class="title_light title_40 title_black"><span>POST VENTA</span>
                            <h2>Siempre a tu <strong style="color: #68b330;">disposición</strong></h2>
                        </div>
                    </div>
                    <div class="b1servicio_text">
                        <p>En Crearq, nuestro equipo de postventa está disponible para asegurarse de que tu experiencia sea completamente satisfactoria. 
                            Te ofrecemos asistencia personalizada para resolver cualquier duda o inquietud que puedas tener, así como apoyo en la gestión de trámites y 
                            servicios relacionados con tu propiedad. Tu tranquilidad es nuestra misión, y estamos aquí para acompañarte en cada etapa, incluso después de la firma.</p>
                    </div>
                    <div class="b1servicio_info">
                        <div class="b1servicio_direction"><span>UBÍCANOS EN</span>
                            <p>Calle Armando Blondet 217, Of 501, San Isidro</p>
                        </div>
                        <div class="b1servicio_datos">
                            <div class="b1servicio_link"><span>ESCRÍBENOS</span><a
                                    href="#">ventas@inversioneshi.com</a>
                            </div>
                            <div class="b1servicio_link"><span>Teléfono</span><a
                                    href="tel:+519471685395193844467596">+ 51 987 515 678</a></div>
                        </div>
                    </div>
                    <!-- <div class="b1servicio_btn"><a class="btn btn_black"
                            href="https://www.pvi.pe/propietarios/invent/propietarios/login"
                            target="_blank"><span>Reclamos Post Venta</span></a>
                    </div> -->
                </div>
            </div>
            <div class="b1servicio_img" style="background-image: url('<?= $baseUrl ?>images/post_venta_1.jpg');">
            </div>
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
                    <h3>Address Infos</h3>
                    <p>Kyiv | G. Stalingrada Avenue, 6 <br>
                        Vilnius | Antakalnio St. 17</p>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.10s">
                    <figure><img src="images/footer-icon02.png" alt="Image"></figure>
                    <h3>Working Hours</h3>
                    <p>Monday to Friday <strong>09:00</strong> to <strong>18:30</strong> <br>
                        Saturday we work until <strong>15:30</strong></p>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
                    <figure><img src="images/footer-icon03.png" alt="Image"></figure>
                    <h3>Sales Office</h3>
                    <p>Boryssa Himry 124 B Block Pozniaky<br>
                        Kiev Oblast - Ukraine</p>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end inner -->
    </div>
    <!-- end container -->
</section>