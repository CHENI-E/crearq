
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

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s"> <img src="<?= $baseUrl ?>images/logo-crearq.png" alt="Image" class="logo">
                <p>Crearq es crear, diseñar, idear, construir y proyectar innovación. Una arquitectura nueva y fresca plasmada en la mejor distribución de espacios en los departamentos.</p>
                <!-- end select-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.10s">
                <ul class="footer-menu">
                    <li><a href="<?= $baseUrl ?>">Incio</a></li>
                    <li><a href="<?= $baseUrl ?>nosotros">Nosotros</a></li>
                    <li><a href="<?= $baseUrl ?>">Proyectos</a></li>
                    <li><a href="<?= $baseUrl ?>postVenta">Post Venta</a></li>
                </ul>
            </div>
            <!-- end col-2 -->
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                <ul class="footer-menu">
                    <li><a href="<?= $baseUrl ?>servicio">Servicios</a></li>
                    <li><a href="<?= $baseUrl ?>inversionistas">Inversionistas</a></li>
                    <li><a href="<?= $baseUrl ?>comunicate">Contactanos</a></li>
                    <li><a href="<?= $baseUrl ?>LibroReclamacion">Libro de Reclamaciones</a></li>
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
                        <li>
                            <a href="https://www.tiktok.com/@crearq.inmobiliaria/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                                </svg>
                            </a>
                        </li>
                        <!-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li> -->
                    </ul>
                </div>
                <!-- end contact-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-12"> <span class="copyright">© 2025 Crearq | Encuentra tu nuevo hogar aqui</span></div>
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



</html>