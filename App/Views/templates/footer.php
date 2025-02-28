
<style>
    /* Estilos del botón flotante */
    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #25D366;
        color: white;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        text-decoration: none;
        z-index: 1000;
        transition: transform 0.3s ease-in-out;
        box-shadow: 0 0 10px rgba(37, 211, 102, 0.8);
        animation: respirar 1.5s infinite alternate ease-in-out;
    }

    /* Efecto de hover */
    .whatsapp-float:hover {
        transform: scale(1.1);
    }

    /* Animación de "respiración" en los bordes */
    @keyframes respirar {
        0% {
            box-shadow: 0 0 10px rgba(37, 211, 102, 0.8);
        }
        100% {
            box-shadow: 0 0 20px rgba(37, 211, 102, 1), 0 0 40px rgba(37, 211, 102, 0.5);
        }
    }

    /* Icono dentro del botón */
    .whatsapp-icon {
        font-size: 30px;
    }
</style>

<section class="footer-bar">
  <div class="container">
    <!-- PUEDO QUITAR EL mb-5 PARA DESABILITAR EL SHADOW -->
    <div class="inner wow fadeIn shadow-lg mb-5 bg-body-tertiary rounded">
      <div class="row justify-content-center">

        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
          <figure><img src="images/footer-icon01.png" alt="Image"></figure>
          <h3>Estamos ubicados</h3>
          <p>Calle Armando Blondet 217, Of. 501<br>
            San Isidro, Lima, Perú</p>
        </div>

        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.10s">
          <figure><img src="images/footer-icon02.png" alt="Image"></figure>
          <h3>Horario de atencion</h3>
          <p>Lunes a Viernes <strong>09:00</strong> a <strong>18:30</strong> 
        </div>

      </div>
    </div>
  </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s"> <img src="<?= $baseUrl ?>images/logo-crearq.png" alt="Image" class="logo">
                <p>Crearp es crear, diseñar, idear, construir y proyectar innovación. Una arquitectura nueva y fresca plasmada en la mejor distribución de espacios en los departamentos.</p>
                <!-- end select-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.10s">
                <ul class="footer-menu">
                    <li><a href="#">Incio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Proyectos</a></li>
                    <li><a href="#">Post Venta</a></li>
                </ul>
            </div>
            <!-- end col-2 -->
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                <ul class="footer-menu">
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Inversionistas</a></li>
                    <li><a href="#">Contactanos</a></li>
                    <li><a href="<?=$baseUrl?>LibroReclamacion">Libro de Reclamaciones</a></li>
                </ul>
            </div>
            <!-- end col-2 -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.20s">
                <div class="contact-box">
                    <h5>CALL CENTER</h5>
                    <h3>+51 967 782 740</h3>
                    <p><a href="#">ventas@inversioneshi.com</a></p>
                    <ul>
                        <li><a href="https://www.facebook.com/crearqconstructora/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/crearqconstructora/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.tiktok.com/@crearq.inmobiliaria/" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                        <!-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li> -->
                    </ul>
                </div>
                <!-- end contact-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-12"> <span class="copyright">© 2024 Crearq | Encuetra tu nuevo hogar aqui</span> <span class="creation">Sitio creado por <a href="#">Marco</a></span> </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>


<a href="https://wa.me/967782740" 
    class="whatsapp-float" 
    target="_blank" 
    title="Chatea con nosotros en WhatsApp">
    <span class="whatsapp-icon">
        <img src="<?=$baseUrl?>images/WhatsApp.png" class="w-100" alt="">
    </span>
</a>


<!-- JS FILES -->
<script src="<?= $baseUrl ?>js/jquery.min.js"></script>
<script src="<?= $baseUrl ?>js/popper.min.js"></script>
<script src="<?= $baseUrl ?>js/bootstrap.min.js"></script>
<script src="<?= $baseUrl ?>js/swiper.min.js"></script>
<script src="<?= $baseUrl ?>js/fancybox.min.js"></script>
<script src="<?= $baseUrl ?>js/odometer.min.js"></script>
<script src="<?= $baseUrl ?>js/wow.min.js"></script>
<script src="<?= $baseUrl ?>js/text-rotater.js"></script>
<script src="<?= $baseUrl ?>js/jquery.stellar.js"></script>
<script src="<?= $baseUrl ?>js/isotope.min.js"></script>
<script src="<?= $baseUrl ?>js/scripts.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>

    var splide = new Splide( '.splide', {
    type   : 'loop',
    perPage: 3,
    perMove: 1,
    } );

    splide.mount();

</script>
</body>

<!-- Mirrored from themezinho.net/hompark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2024 04:26:10 GMT -->

</html>