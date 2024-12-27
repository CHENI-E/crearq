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
<header class="slider">
  <div class="slider-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" data-background="<?= $baseUrl ?>images/portada/portada-santa-maría.png" data-stellar-background-ratio="1.15">
        <div class="container">
          <h1><span>Las Lilas 123</span></h1>
          <h2>Vive en Valle Hemorso</h2>
          <a href="#">Ver Proyecto <i class="fas fa-caret-right"></i></a>
          <figure><img src="<?= $baseUrl ?>images/services-icon01.png" alt="Image"></figure>
        </div>
        <!-- end container -->
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide" data-background="<?= $baseUrl ?>images/portada/portada-geranios.png" data-stellar-background-ratio="1.15">
        <div class="container">
          <h1><span>Geranios</span> Lince</h1>
          <h2>Entrega Abril 2025</h2>
          <a href="#">Ver Proyecto <i class="fas fa-caret-right"></i></a>
          <figure><img src="<?= $baseUrl ?>images/services-icon08.png" alt="Image"></figure>
        </div>
        <!-- end container -->
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide" data-background="<?= $baseUrl ?>images/portada/portada-aurora.png" data-stellar-background-ratio="1.15">
        <div class="container">
          <h1><span>Roma</span> Miraflores</h1>
          <h2>Entre Febrero 2025</h2>
          <a href="#">Ver Proyecto <i class="fas fa-caret-right"></i></a>
          <figure><img src="<?= $baseUrl ?>images/services-icon07.png" alt="Image"></figure>
        </div>
        <!-- end container -->
      </div>
      <!-- end swiper-slide -->
    </div>
    <!-- Add Pagination -->
    <div class="inner-elements">
      <div class="container">
        <div class="pagination"></div>
        <!-- end pagination -->
        <div class="button-prev">PREV</div>
        <!-- end button-prev -->
        <div class="button-next">NEXT</div>
        <!-- end button-next -->
        <div class="social-media">
          <h6>SOCIAL MEDIA</h6>
          <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-google"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
        <!-- end social-media -->
      </div>
      <!-- end container -->
    </div>
    <!-- end inner-elements -->
  </div>
  <!-- end slider-container -->
</header>


<!-- FILTRO DE PROYECTOS -->
<section class="photo-gallery pt-0 pb-0">
  <div class="container">
    <div class="row">
    	<div class="col-12">
    	<ul class="gallery-filter">
   			<li><a href="javascript:void(0);" data-filter="*" class="current">TODOS LOS PROYECTOS</a></li>
          	<li><a href="javascript:void(0);" data-filter=".miraflores">MIRAFLORES</a></li>
          	<li><a href="javascript:void(0);" data-filter=".surquillo">SURQUILLO</a></li>
          	<li><a href="javascript:void(0);" data-filter=".surco">SURCO</a></li>
            <li><a href="javascript:void(0);" data-filter=".lince">LINCE</a></li>
            <li><a href="javascript:void(0);" data-filter=".p_libre">PUEBLO LIBRE</a></li>
   		</ul>
    		<ul class="gallery">
    			<li class="miraflores"><a href="<?= $baseUrl ?>images/proyectos/GERANIOS-328---WEB-1---TRANSPARENCIA.png" data-fancybox><img src="<?= $baseUrl ?>images/proyectos/GERANIOS-328---WEB-1---TRANSPARENCIA.png" alt="Image"></a></li>
          <li class="surco"><a href="<?= $baseUrl ?>images/proyectos/LAS-LILAS-123---WEB-1---TRANSPARENCIA.png" data-fancybox><img src="<?= $baseUrl ?>images/proyectos/LAS-LILAS-123---WEB-1---TRANSPARENCIA.png" alt="Image"></a></li>
          <li class="surquillo"><a href="<?= $baseUrl ?>images/proyectos/PARQ---WEB-1---TRANSPARENCIA.png" data-fancybox><img src="<?= $baseUrl ?>images/proyectos/PARQ---WEB-1---TRANSPARENCIA.png" alt="Image"></a></li>
          <li class="lince"><a href="<?= $baseUrl ?>images/proyectos/RODIN-245---WEB-1---TRANSPARENCIA.png" data-fancybox><img src="<?= $baseUrl ?>images/proyectos/RODIN-245---WEB-1---TRANSPARENCIA.png" alt="Image"></a></li>
          <li class="p_libre"><a href="<?= $baseUrl ?>images/proyectos/ROMA-255---WEB-1-TRANSPARENCIA.png" data-fancybox><img src="<?= $baseUrl ?>images/proyectos/ROMA-255---WEB-1-TRANSPARENCIA.png" alt="Image"></a></li>
    		</ul>
    	</div>
    	<!-- end col-12 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>




<section class="recent-gallery">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 wow fadeInUp">
        <h4>Más de <span>19 años</span> de trayectoria nos han permitido conectar a cientos de personas con sus hogares ideales y oportunidades de inversión únicas.</h4>
        <!-- <h3>Más de <span>19 años</span> de experiencia nos respaldan</h3> -->
        <!-- <a href="#" class="link">SEE ALL GALLERY <i class="fas fa-caret-right"></i></a> -->
      </div>
      <!-- end col-5 -->
      <div class="col-lg-7">
        <div class="row inner">

          <section class="splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <div class="col-md-12 wow fadeInUp" data-wow-delay="0.05s">
                    <figure data-stellar-ratio="1"> <a href="<?= $baseUrl ?>images/inicio/proyecto-santiago.jpg" data-fancybox><img src="<?= $baseUrl ?>images/inicio/proyecto-santiago.jpg" alt="Image"></a> </figure>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="col-md-12 wow fadeInUp" data-wow-delay="0.15s">
                    <figure data-stellar-ratio="1"> <a href="<?= $baseUrl ?>images/inicio/proyecto-aurora.jpg" data-fancybox><img src="<?= $baseUrl ?>images/inicio/proyecto-aurora.jpg" alt="Image"></a> </figure>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="col-md-12 wow fadeInUp" data-wow-delay="0.25s">
                    <figure data-stellar-ratio="1"> <a href="<?= $baseUrl ?>images/inicio/proyecto-san-gabriel.jpg" data-fancybox><img src="<?= $baseUrl ?>images/inicio/proyecto-san-gabriel.jpg" alt="Image"></a> </figure>
                  </div>
                </li>


                <li class="splide__slide">
                  <div class="col-md-12 wow fadeInUp" data-wow-delay="0s">
                    <figure data-stellar-ratio="1"> <a href="<?= $baseUrl ?>images/inicio/aurora-proyecto-home.jpg" data-fancybox><img src="<?= $baseUrl ?>images/inicio/aurora-proyecto-home.jpg" alt="Image"></a> </figure>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="col-md-12 wow fadeInUp" data-wow-delay="0.05s">
                    <figure data-stellar-ratio="1"> <a href="<?= $baseUrl ?>images/inicio/proyecto-rialto.jpg" data-fancybox><img src="<?= $baseUrl ?>images/inicio/proyecto-rialto.jpg" alt="Image"></a> </figure>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="col-md-12 wow fadeInUp" data-wow-delay="0.10s">
                    <figure data-stellar-ratio="1"> <a href="<?= $baseUrl ?>images/inicio/proyecto-carmelo.jpg" data-fancybox><img src="<?= $baseUrl ?>images/inicio/proyecto-carmelo.jpg" alt="Image"></a> </figure>
                  </div>
                </li>


                <li class="splide__slide">
                  <div class="col-md-12 wow fadeInUp" data-wow-delay="0s">
                    <figure data-stellar-ratio="1"> <a href="<?= $baseUrl ?>images/inicio/galvez-proyecto.jpg" data-fancybox><img src="<?= $baseUrl ?>images/inicio/galvez-proyecto.jpg" alt="Image"></a> </figure>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="col-md-12 wow fadeInUp" data-wow-delay="0.05s">
                    <figure data-stellar-ratio="1"> <a href="<?= $baseUrl ?>images/inicio/aqua1-front.jpg" data-fancybox><img src="<?= $baseUrl ?>images/inicio/aqua1-front.jpg" alt="Image"></a> </figure>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="col-md-12 wow fadeInUp" data-wow-delay="0.10s">
                    <figure data-stellar-ratio="1"> <a href="<?= $baseUrl ?>images/inicio/aqua2-pequeno-front.jpg" data-fancybox><img src="<?= $baseUrl ?>images/inicio/aqua2-pequeno-front.jpg" alt="Image"></a> </figure>
                  </div>
                </li>

                <li class="splide__slide">
                  <div class="col-md-12 wow fadeInUp" data-wow-delay="0s">
                    <figure data-stellar-ratio="1"> <a href="<?= $baseUrl ?>images/inicio/proyecto-kalynka.jpg" data-fancybox><img src="<?= $baseUrl ?>images/inicio/proyecto-kalynka.jpg" alt="Image"></a> </figure>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="col-md-12 wow fadeInUp" data-wow-delay="0.05s">
                    <figure data-stellar-ratio="1"> <a href="<?= $baseUrl ?>images/inicio/proyecto-victoria.jpg" data-fancybox><img src="<?= $baseUrl ?>images/inicio/proyecto-victoria.jpg" alt="Image"></a> </figure>
                  </div>
                </li>

              </ul>
            </div>
          </section>


          <!-- <div class="col-md-4 wow fadeInUp" data-wow-delay="0s">
              <figure data-stellar-ratio="1.07"> <a href="<?= $baseUrl ?>images/gallery-thumb01.jpg" data-fancybox><img src="<?= $baseUrl ?>images/gallery-thumb01.jpg" alt="Image"></a> </figure>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.05s">
              <figure data-stellar-ratio="1.15"> <a href="<?= $baseUrl ?>images/gallery-thumb02.jpg" data-fancybox><img src="<?= $baseUrl ?>images/gallery-thumb02.jpg" alt="Image"></a> </figure>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.10s">
              <figure data-stellar-ratio="1.04"> <a href="<?= $baseUrl ?>images/gallery-thumb03.jpg" data-fancybox><img src="<?= $baseUrl ?>images/gallery-thumb03.jpg" alt="Image"></a> </figure>
            </div> -->

        </div>
        <!-- end row -->
      </div>
      <!-- end col-7 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>



<!-- FORMULARIO CON EL MAPA -->
<section class="about-content pt-0" style="padding: 50px;">
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