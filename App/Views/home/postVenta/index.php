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
<img src="<?= $baseUrl ?>images/portada3/POST-VENTA.jpg" class="w-100" alt="">
<!-- <section class="property-customization" style="padding: 260px;">

    <div class="video-bg" style="background: linear-gradient(161deg, #26282b 0%, #26282b 60%, #20a7ae 100%);">
        <video src="<?= $baseUrl ?>videos/video03.mp4" loop autoplay muted></video>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp before-titulo-postVenta">
                <h3 class="banner-titulo-postVenta">Nos esforzamos cada día por brindarles un </h3>
                <h2><span style="color: #a555b6">excelente servicio</span></h2>
            </div>
        </div>
    </div>

</section> -->
<section class="about-content" style="padding: 20px;">
    <div class="container">
        <section class="b1servicio row">

            <div class="b1servicio_content col-lg-6 mb-5">
                <div class="b1servicio_wrap ww_center">
                    <div class="b1servicio_title">
                        <div class="title_light title_40 title_black"><span>POST VENTA</span>
                            <h2>Siempre a tu <strong style="color: #68b330;">disposición</strong></h2>
                        </div>
                    </div>
                    <div class="b1servicio_text">
                        <p>En Crearq, nuestro equipo de postventa está disponible para asegurarse de que tu experiencia sea completamente satisfactoria.
                            Te ofrecemos asistencia personalizada para resolver cualquier duda o inquietud que puedas tener sobre tu apartamento. Tu tranquilidad es nuestra misión, y estamos aquí para acompañarte en cada etapa, incluso después de la firma.</p>
                    </div>
                    <div class="b1servicio_info">
                        <div class="b1servicio_direction"><span>UBÍCANOS EN</span>
                            <p>Calle Armando Blondet 217, Of 501, San Isidro</p>
                        </div>
                        <div class="b1servicio_datos">
                            <div class="b1servicio_link"><span>ESCRÍBENOS</span><a
                                    href="#">postventa@crearqinmobiliaria.com</a>
                            </div>
                            <div class="b1servicio_link"><span>Teléfono</span><a
                                    href="tel:+519471685395193844467596">+ 51 961 550 654</a></div>
                        </div>
                    </div>
                    <!-- <div class="b1servicio_btn"><a class="btn btn_black"
                            href="https://www.pvi.pe/propietarios/invent/propietarios/login"
                            target="_blank"><span>Reclamos Post Venta</span></a>
                    </div> -->
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="b2servicio_title">
                    <h2>DÉJANOS TUS DATOS
                    </h2>
                </div>
                <form class="b2servicio_form" action="<?=$baseUrl?>Home/storeEmail" id="formServicio" method="post" data-hs-cf-bound="true">
                    <input type="hidden" name="i" value="postventa" required>
                    <div class="b2servicio_dni px-1">
                        <div class="input_select_box"><label>Documento de Identidad*</label>
                            <div class="input_select_left">
                                <div class="input input_select"><span class="icon-arrow-bottom"></span><select required 
                                        class="validate[required]" name="document_type">
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
                            <div class="input"><label>Nombre*</label><input class="validate[required]" type="text" required maxlength="30"
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
                        <li class="col-lg-6 px-1">
                            <div class="input"><label>Proyecto</label>
                                <div class="input_select"><span class="icon-arrow-bottom"></span><select required 
                                        class="validate[required]" id="form_support_project" name="project">
                                        <option value="" disabled="disabled" selected="selected">Seleccione*</option>
                                        <option value="LOS GERANIOS 328" data-id="aliaga-435">LOS GERANIOS 328</option>
                                        <option value="ROMA 255" data-id="patria">ROMA 255</option>
                                        <option value="LAS LILAS 123" data-id="legado-torre-a">LAS LILAS 123</option>
                                        <option value="AURORA 1940" data-id="legado-torre-a">AURORA 1940</option>
                                        <option value="AQUA 2" data-id="legado-torre-a">AQUA 2</option>
                                        <option value="CLÍNICA RISO" data-id="legado-torre-a">CLÍNICA RISO</option>
                                    </select><input type="hidden" id="form_support_project_id" name="project_id">
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-6 px-1">
                            <div class="input"><label>Número de departamento</label><input name="numero_departamento" type="text" maxlength="20" required ></div>
                        </li>
                        <li class="col-lg-12 px-1">
                            <div class="input"><label>Mencione el ambiente que desea que inspeccionemos</label>
                                <div class="input_select"><span class="icon-arrow-bottom"></span>
                                    <select required class="validate[required]" id="form_support_project" name="ambiente_inspeccionar">
                                        <option value="" disabled="disabled" selected="selected">Seleccione*</option>
                                        <option value="Ambiente Multiple" data-id="aliaga-435">Ambiente Multiple</option>
                                        <option value="Sala" data-id="aliaga-435">Sala</option>
                                        <option value="Comedor" data-id="aliaga-435">Comedor</option>
                                        <option value="Dormitorio" data-id="aliaga-435">Dormitorio</option>
                                        <option value="Baño" data-id="aliaga-435">Baño</option>
                                        <option value="Cocina" data-id="aliaga-435">Cocina</option>
                                        <option value="Patio" data-id="aliaga-435">Patio</option>
                                        <option value="Piscina" data-id="aliaga-435">Piscina</option>
                                        <option value="Estación de enfermeras" data-id="aliaga-435">Estación de enfermeras</option>
                                        <option value="Hospitalización" data-id="aliaga-435">Hospitalización</option>
                                        <option value="Quirófano" data-id="aliaga-435">Quirófano</option>
                                        <option value="Recuperación" data-id="aliaga-435">Recuperación</option>
                                        <option value="Consultorios" data-id="aliaga-435">Consultorios</option>
                                        <option value="Clínica Risol" data-id="aliaga-435">Clínica Risol</option>
                                        <option value="Otro" data-id="aliaga-435">Otro</option>
                                    </select><input type="hidden" id="form_support_project_id" name="project_id">
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-12 px-1">
                            <div class="input input_textarea"><label>Detalle del Problema</label><textarea name="message"
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

        </section>

    </div>
    <!-- end container -->
</section>
<!-- end about-content -->

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