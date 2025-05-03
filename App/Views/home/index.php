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
  .bg-19experiencia{
    background: #e5e4df;
    margin: 70px 0px 50px 0px;
  }
</style>


<header class="slider" hidden>
  <div class="slider-container">
    <div class="swiper-wrapper">
      <!-- PROYECTO LAS LILAS -->
      <div class="swiper-slide" data-background="<?= $baseUrl ?>images/portada3/las-lilas.png" data-stellar-background-ratio="1.15">
      </div>
      <!-- PROYECTO GERANIOS -->
      <div class="swiper-slide" data-background="<?= $baseUrl ?>images/portada3/geranios.png" data-stellar-background-ratio="1.15">
      </div>
      <!-- PROYECTO ROMA -->
      <div class="swiper-slide" data-background="<?= $baseUrl ?>images/portada3/roma.png" data-stellar-background-ratio="1.15">
      </div>
      <!-- PROYECTO AURORA -->
      <div class="swiper-slide" data-background="<?= $baseUrl ?>images/portada3/aurora.png" data-stellar-background-ratio="1.15">
      </div>
      <!-- PROYECTO RODIN -->
      <div class="swiper-slide" data-background="<?= $baseUrl ?>images/portada3/rodin.png" data-stellar-background-ratio="1.15">
      </div>
      <!-- PROYECTO PARQ -->
      <div class="swiper-slide" data-background="<?= $baseUrl ?>images/portada3/parq.png" data-stellar-background-ratio="1.15">
      </div>
      <!-- PROYECTO AQUA2 -->
      <div class="swiper-slide" data-background="<?= $baseUrl ?>images/portada3/aqua-2.png" data-stellar-background-ratio="1.15">
      </div>

    </div>
    <!-- Add Pagination -->
    <div class="inner-elements">
      <div class="container">
        <div class="pagination"></div>
        <!-- end pagination -->
        <div class="button-prev"><<</div>
        <!-- end button-prev -->
        <div class="button-next">>></div>
        <!-- end button-next -->
        <div class="social-media">
          <h6>REDES SOCIALES</h6>
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

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= $baseUrl ?>images/portada3/las-lilas.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= $baseUrl ?>images/portada3/geranios.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= $baseUrl ?>images/portada3/roma.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= $baseUrl ?>images/portada3/aurora.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= $baseUrl ?>images/portada3/rodin.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= $baseUrl ?>images/portada3/parq.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= $baseUrl ?>images/portada3/aqua-2.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- FILTRO DE PROYECTOS -->
<section class="photo-gallery pt-2 pb-0 mt-5">
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
            <!-- <li><a href="javascript:void(0);" data-filter=".santa_maria_mar">SANTA MARÍA DEL MAR</a></li> -->
   		</ul>
    		<ul class="gallery">
    			<li class="lince"><a href="<?= $baseUrl ?>proyectos/los_geranios_328"><img src="<?= $baseUrl ?>images/proyectos/GERANIOS-328---WEB-1---TRANSPARENCIA.png" alt="Image"></a></li>
          <li class="surco"><a href="<?= $baseUrl ?>proyectos/las_lilas_123"><img src="<?= $baseUrl ?>images/proyectos/LILAS.jpg" alt="Image"></a></li>
          <li class="p_libre"><a href="<?= $baseUrl ?>proyectos/parq"><img src="<?= $baseUrl ?>images/proyectos/PARQ.jpg" alt="Image"></a></li>
          <li class="surquillo"><a href="<?= $baseUrl ?>proyectos/rodin"><img src="<?= $baseUrl ?>images/proyectos/RODIN.jpg" alt="Image"></a></li>
          <li class="miraflores"><a href="<?= $baseUrl ?>proyectos/roma_255"><img src="<?= $baseUrl ?>images/proyectos/ROMA.jpg" alt="Image"></a></li>
          <!-- <li class="santa_maria_mar"><a href="<?= $baseUrl ?>proyectos/aqua_2"><img src="<?= $baseUrl ?>images/proyectos/Avance-Web-aqua-2-sin-fondo.png" alt="Image"></a></li> -->
          <li class="miraflores"><a href="<?= $baseUrl ?>proyectos/aurora_1940"><img src="<?= $baseUrl ?>images/proyectos/AURORA.jpg" alt="Image"></a></li>
        </ul>
    	</div>
    	<!-- end col-12 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>




<section class="recent-gallery bg-19experiencia">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 wow fadeInUp">
        <h4>Más de <span>20 años</span> de trayectoria nos han permitido conectar a cientos de personas con sus hogares ideales y oportunidades de inversión únicas.</h4>
        <!-- <h3>Más de <span>19 años</span> de experiencia nos respaldan</h3> -->
        <!-- <a href="#" class="link">SEE ALL GALLERY <i class="fas fa-caret-right"></i></a> -->
      </div>
      <!-- end col-5 -->
      <div class="col-lg-7">
        <div class="">

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
<section class="about-content pt-0" style="padding: 20px;">
  <div class="m-auto">
    <section class="contact about-content">
      <div class="">
        <div class="row">
          <div class="col-lg-6 order-lg-2 col-12">
            <div class="b2servicio_content">
              <div class="b2servicio_title">
                <h2>DÉJANOS TUS DATOS
                </h2>
              </div>
              <form class="b2servicio_form" action="<?=$baseUrl?>Home/storeEmail" id="formServicio" method="post" data-hs-cf-bound="true">
                <input type="hidden" name="i" value="7" required>
                <div class="b2servicio_dni px-1">
                  <div class="input_select_box"><label>Documento de Identidad*</label>
                    <div class="input_select_left">
                      <div class="input input_select"><span class="icon-arrow-bottom"></span><select
                          class="validate[required]" name="document_type" required >
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


