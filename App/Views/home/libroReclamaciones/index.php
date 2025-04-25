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

<img src="<?= $baseUrl ?>images/portada3/contactanos-web.png" class="w-100" alt="">
<!-- <section class="get-consultation" data-background="<?= $baseUrl ?>images/portada3/contactanos-web.png" data-stellar-background-ratio="0.6" style="background-size: 100%; background-position: 100% -1px;">
    <div class="bg-red">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</section> -->

<section class="recent-posts" style="padding: 0px; margin-top:90px !important;">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeInUp">
        <h4><span>Libro</span> de Reclamaciones</h4>
        <small>Crearq </small>
      </div>

      <div class="col-lg-12 wow fadeInUp" data-wow-delay="0s">
        <div class="post-box">
          <span class="text-justify">
            Conforme a lo establecido en el Código de Protección y Defensa del Consumidor,
            esta institución cuenta con un libro de reclamaciones a su disposición.</span>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="about-content" style="padding: 50px;">
    <div class="container">
        <section class="contact about-content">
            <div class="container">
                <!-- end row -->
                <div class="row">

                    <div class="col-lg-12 order-lg-2">
                        <div class="b2servicio_content">
                            <div class="b2servicio_title">
                                <h2>Indícanos el lugar en el que se dieron los sucesos del reclamo:</h2>
                            </div>
                            <form class="b2servicio_form" action="<?=$baseUrl?>Home/storeEmail" id="formServicio" method="post"
                                data-hs-cf-bound="true">
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
                                        <div class="input"><label>Proyecto</label>
                                            <div class="input_select"><span class="icon-arrow-bottom"></span><select required 
                                                    class="validate[required]" id="form_support_project" name="project">
                                                    <option value="" disabled="disabled" selected="selected">Seleccione*</option>
                                                    <option value="LOS GERANIOS 328" data-id="aliaga-435">LOS GERANIOS 328</option>
                                                    <option value="ROMA 255" data-id="patria">ROMA 255</option>
                                                    <option value="LAS LILAS 123" data-id="legado-torre-a">LAS LILAS 123</option>
                                                    <option value="AURORA 1940" data-id="legado-torre-a">AURORA 1940</option>
                                                    <option value="AQUA 2" data-id="legado-torre-a">AQUA 2</option>
                                                </select><input type="hidden" id="form_support_project_id" name="project_id">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-12 px-1">
                                        <div class="input input_textarea"><label>Reclamo</label><textarea name="message" required 
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
                                        style="cursor: pointer; background-color: #68b330;"><span class="text-white">Enviar mi Reclamo</span></button></div>
                            </form>
                        </div>
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
