<!doctype html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#282828" />
    <title><?= $title ?? 'Crearq' ?></title>
    <meta name="author" content="Marco">
    <meta name="description" content="Crearq | Raquel">
    <meta name="keywords" content="Crearq">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="Crearq | Raquel">
    <meta property="og:image" content="preview.html">
    <meta property="og:site_name" content="Crearq">
    <meta property="og:title" content="Crearq">
    <meta property="og:type" content="website">


    <!-- FAVICON FILES -->
    <link href="<?= $baseUrl ?>ico/crearq-icon-144.png" rel="crearq-icon" sizes="144x144">
    <link href="<?= $baseUrl ?>ico/crearq-icon-114.png" rel="crearq-icon" sizes="114x114">
    <link href="<?= $baseUrl ?>ico/crearq-icon-72.png" rel="crearq-icon" sizes="72x72">
    <link href="<?= $baseUrl ?>ico/crearq-icon-57.png" rel="crearq-icon">
    <link href="<?= $baseUrl ?>images/faviconCrearq.png" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="<?= $baseUrl ?>css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>css/animate.min.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>css/fancybox.min.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>css/odometer.min.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>css/swiper.min.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>css/style.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>css/postVenta.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Crearq",
    "url": "https://www.inversioneshi.com/", 
    "logo": "https://www.inversioneshi.com/ico/crearq-icon-114.png"
    }
    </script>

    
</head>

<body>

    <div class="preloader">
        <div class="layer"></div>
        <div class="inner">
            <figure><img src="<?= $baseUrl ?>images/preloader.gif" alt="Image"></figure>
            <p><span class="text-rotater" data-text="Homepark | Elements | Loading">Cargando</span></p>
        </div>
    </div>

    <!-- end prelaoder -->
    <div class="transition-overlay">
        <div class="layer"></div>
    </div>


    <!-- end transition-overlay -->
    <div class="side-navigation">
        <div class="menu">
            <ul>
                <li><a href="<?= $baseUrl ?>">INICIO</a></li>
                <li><a href="<?= $baseUrl ?>nosotros">NOSOTROS</a></li>
                <li><a href="#">PROYECTOS</a>
                    <ul>
                        <li><a href="<?= $baseUrl ?>proyectos/los_geranios_328">LOS GERANIOS 328</a></li>
                        <li><a href="<?= $baseUrl ?>proyectos/roma_255">ROMA 255</a></li>
                        <li><a href="<?= $baseUrl ?>proyectos/las_lilas_123">LAS LILAS 123</a></li>
                        <li><a href="<?= $baseUrl ?>proyectos/aurora_1940">AURORA 1940</a></li>
                        <li><a href="<?= $baseUrl ?>proyectos/rodin">RODIN</a></li>
                        <li><a href="<?= $baseUrl ?>proyectos/parq">PARQ</a></li>
                    </ul>
                </li>
                <li><a href="<?= $baseUrl ?>postVenta">POST VENTA</a></li>
                <li><a href="<?= $baseUrl ?>servicio">SERVICIO</a></li>
                <li><a href="<?= $baseUrl ?>inversionistas">INVERSIONISTAS</a></li>
                <!-- <li><a href="<?= $baseUrl ?>blog">Blog</a></li> -->
                <li><a href="<?= $baseUrl ?>comunicate">COMUNÍCATE</a></li>
            </ul>
        </div>
        <!-- end menu -->
        <div class="side-content">
            <figure> <img src="<?= $baseUrl ?>images/logo-crearq.png" alt="Image"> </figure>
            <p>Somos una compañía con más de 20 años de experiencia y mucha pasión por la arquitectura.</p>
            <!-- <ul class="gallery">
                <li><a href="<?= $baseUrl ?>images/gallery-thumb01.jpg" data-fancybox><img src="<?= $baseUrl ?>images/gallery-thumb01.jpg" alt="Image"></a></li>
                <li><a href="<?= $baseUrl ?>images/gallery-thumb02.jpg" data-fancybox><img src="<?= $baseUrl ?>images/gallery-thumb02.jpg" alt="Image"></a></li>
                <li><a href="<?= $baseUrl ?>images/gallery-thumb03.jpg" data-fancybox><img src="<?= $baseUrl ?>images/gallery-thumb03.jpg" alt="Image"></a></li>
            </ul> -->
            <h6>+51 967 782 740</h6>
            <p><a href="#">ventas@inversioneshi.com</a></p>
            <ul class="social-media">
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
            <small>© 2024 Crearq | Encuetra tu nuevo hogar aqui</small>
        </div>
        <!-- end side-content -->
    </div>
    <!-- end side-navigation -->

    <nav class="navbar">
        <div class="container">
            <div class="upper-side">
                <div class="logo"> <a href="<?= $baseUrl ?>"><img src="<?= $baseUrl ?>images/logo-crearq.png" alt="Image"></a> </div>
                <!-- end logo -->

                <div class="phone-email pr-5">
                    <div class="menu">
                        <ul class="mb-0">
                            <li><a href="<?= $baseUrl ?>">INICIO</a></li>
                            <li><a href="<?= $baseUrl ?>nosotros">NOSOTROS</a></li>
                            <li><a href="#">PROYECTOS</a>
                                <ul>
                                    <li><a href="<?= $baseUrl ?>proyectos/los_geranios_328">LOS GERANIOS 328</a></li>
                                    <li><a href="<?= $baseUrl ?>proyectos/roma_255">ROMA 255</a></li>
                                    <li><a href="<?= $baseUrl ?>proyectos/las_lilas_123">LAS LILAS 123</a></li>
                                    <li><a href="<?= $baseUrl ?>proyectos/aurora_1940">AURORA 1940</a></li>
                                    <li><a href="<?= $baseUrl ?>proyectos/rodin">RODIN</a></li>
                                    <li><a href="<?= $baseUrl ?>proyectos/parq">PARQ</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= $baseUrl ?>postVenta">POST VENTA</a></li>
                            <li><a href="<?= $baseUrl ?>servicio">SERVICIO</a></li>
                            <li><a href="<?= $baseUrl ?>inversionistas">INVERSIONISTAS</a></li>
                            <!-- <li><a href="<?= $baseUrl ?>blog">BLOG</a></li> -->
                            <li><a href="<?= $baseUrl ?>comunicate">COMUNÍCATE</a></li>
                        </ul>
                    </div>
                </div>
                <div class="hamburger"> <span></span> <span></span> <span></span><span></span> </div>
            </div>

            <!-- <div class="menu">
                <ul>
                    <li><a href="<?= $baseUrl ?>">INICIO</a></li>
                    <li><a href="<?= $baseUrl ?>nosotros">NOSOTROS</a></li>
                    <li><a href="#">PROYECTOS</a>
                        <ul>
                            <li><a href="<?= $baseUrl ?>proyectos/los_geranios_328">LOS GERANIOS 328</a></li>
                            <li><a href="<?= $baseUrl ?>proyectos/roma_255">ROMA 255</a></li>
                            <li><a href="<?= $baseUrl ?>proyectos/las_lilas_123">LAS LILAS 123</a></li>
                            <li><a href="<?= $baseUrl ?>proyectos/aurora_1940">AURORA 1940</a></li>
                            <li><a href="<?= $baseUrl ?>proyectos/aqua_2">AQUA 2</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= $baseUrl ?>postVenta">POST VENTA</a></li>
                    <li><a href="<?= $baseUrl ?>servicio">SERVICIO</a></li>
                    <li><a href="<?= $baseUrl ?>inversionistas">INVERSIONISTAS</a></li>
                    <li><a href="<?= $baseUrl ?>blog">BLOG</a></li>
                    <li><a href="<?= $baseUrl ?>comunicate">COMUNÍCATE</a></li>
                </ul>
            </div> -->

        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->