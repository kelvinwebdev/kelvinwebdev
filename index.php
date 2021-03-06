<?php
include("config/bd.php");

$sql = $connection->prepare("SELECT * FROM sobremi");
$sql->execute();
$descripcion = $sql->fetch(PDO::FETCH_LAZY);


$sql = $connection->prepare("SELECT * FROM habilidades");
$sql->execute();
$skill = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $connection->prepare("SELECT * FROM educacion");
$sql->execute();
$educacion = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql = $connection->prepare("SELECT * FROM portafolio");
$sql->execute();
$portafolio = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $connection->prepare("SELECT * FROM testimonios");
$sql->execute();
$testimonios = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelvin Valera - Web Designer</title>

    <link rel="icon" href="img/Logo.png" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/style-switcher.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" class="alternate-style" title="color-1" href="css/color-1.css" disabled>
    <link rel="stylesheet" class="alternate-style" title="color-2" href="css/color-2.css" disabled>
    <link rel="stylesheet" class="alternate-style" title="color-3" href="css/color-3.css" disabled>
    <link rel="stylesheet" class="alternate-style" title="color-4" href="css/color-4.css" disabled>
    <link rel="stylesheet" class="alternate-style" title="color-5" href="css/color-5.css" disabled>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RBCFJ9B0MQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-RBCFJ9B0MQ');
    </script>

</head>

<body class="dark">

    <div class="header">
        <div class="container">
            <div class="row justify-content-between">
                <div class="logo">
                    <a href="index.php">K</a>
                </div>

                <div class="hamburger-btn outer-shadow hover-in-shadow">
                    <span></span>
                </div>
            </div>
        </div>
    </div>



    <!-- MENU -->

    <div class="nav-menu">
        <div class="close-nav-menu outer-shadow hover-in-shadow">&times;</div>

        <div class="nav-menu-inner">
            <ul>
                <li><a href="#home" class="link-item inner-shadow active">Inicio</a></li>
                <li><a href="#about" class="link-item outer-shadow hover-in-shadow">Sobre mi</a></li>
                <li>
                    <a href="#services" class="link-item outer-shadow hover-in-shadow">Servicios</a>
                </li>
                <li>
                    <a href="#portfolio" class="link-item outer-shadow hover-in-shadow">Portafolio</a>
                </li>
                <li>
            <a href="#testimonial" class="link-item outer-shadow hover-in-shadow">Testimonios</a>
          </li>
                <li><a href="#contact" class="link-item outer-shadow hover-in-shadow">Contacto</a></li>
            </ul>
        </div>
        <p class="copyright-text">&copy;Desarrollado por Kelvin Valera</p>

    </div>
    <div class="fade-out-effect"></div>


    <!-- INICIO -->

    <div class="home-section section active" id="home">
        <div class="effect-wrap">
            <div class="effect effect-1"></div>
            <div class="effect effect-2">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="effect effect-3"></div>
            <div class="effect effect-4"></div>
            <div class="effect effect-5">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <div class="container">
            <div class="row full-screen align-items-center">
                <div class="home-text">
                    <p>??Hola!</p>
                    <h2>Soy Kelvin Valera</h2>
                    <h1>Dise??ador Web</h1>
                    <a href="#about" class="link-item btn-1 outer-shadow hover-in-shadow">Leer m??s</a>
                </div>

                <div class="home-img">
                    <div class="img-box inner-shadow">
                        <img class="outer-shadow" src="img/Logo.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about-section section" id="about">
        <div class="container">

            <div class="row">
                <div class="section-title">
                    <h2 data-heading="main info">Sobre mi</h2>
                </div>
            </div>

            <div class="row">
                <div class="about-img">
                    <div class="img-box-inner-shadow">
                        <img src="img/foto.png" class="outer-shadow" alt="" />
                    </div>
                </div>

                <div class="about-info">
                    <p>
                        <?php echo $descripcion["descripcion"]; ?>
                    </p>

                    <p>
                        Mi misi??n es ayudarte emprender e impulsar tu marca!
                    </p>

                    <a href="cv.pdf" class="btn-1 outer-shadow hover-in-shadow">Descargar CV</a>

                    <a href="#contact" class="link-item btn-1 outer-shadow hover-in-shadow">Contratarme</a>
                </div>
            </div>
        </div>

        <!-- Tabs About -->

        <div class="row">
            <div class="about-tabs">
                <span class="tab-item outer-shadow active" data-target=".skills">Habilidades</span>

                <span class="tab-item" data-target=".education">Educaci??n</span>
            </div>
        </div>



        <div class="row">
            <div class="skills tab-content active">
                <div class="row">


                    <!-- item Habilidad inicio -->
                    <?php foreach ($skill as $habilidad) { ?>

                        <div class="skill-item">
                            <p><?php echo $habilidad["habilidad"] ?></p>
                            <div class="progress inner-shadow">
                                <div class="progress-bar" style="width: <?php echo $habilidad["porcentaje"] . "%"; ?>">
                                    <span><?php echo $habilidad["porcentaje"] . "%" ?></span>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    <!-- item Habilidad fin -->
                </div>
            </div>
        </div>

        <!-- EDUCACION -->

        <div class="row">
            <div class="education tab-content">
                <div class="row">
                    <div class="timeline">
                        <div class="row">
                            <!-- timeline inicio -->

                            <?php foreach ($educacion as $educ) { ?>

                                <div class="timeline-item">
                                    <div class="timeline-item-inner outer-shadow">
                                        <i class="fas fa-graduation-cap icon"></i>
                                        <span><?php echo $educ["fecha"] ?></span>
                                        <h3><?php echo $educ["nombre"] ?></h3>
                                        <p>
                                            <?php echo $educ["descripcion"] ?>
                                        </p>
                                    </div>
                                </div>

                            <?php } ?>
                            <!-- timeline fin -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!-- SERVICIOS -->

    <section class="service-section section" id="services">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-heading="Services">??Que Hago?</h2>
                </div>
            </div>

            <div class="row">
                <!-- SERVICIOS ITEMS INICIO -->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-mobile-alt"></i>
                        </div>

                        <h3>Dise??o Responsivo</h3>
                        <p>
                            Filosof??a del dise??o web cuyo objetivo es el de adaptar la apariencia de los sitios web al
                            dispositivo que se est?? usando para visitarlos.
                        </p>
                    </div>
                </div>
                <!-- SERVICIOS ITEMS FIN -->

                <!-- SERVICIOS ITEMS INICIO -->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-laptop-code"></i>
                        </div>

                        <h3>Dise??o Web</h3>
                        <p>
                            ??rea enfocada en el dise??o de sitios y aplicaciones para web.
                        </p>
                    </div>
                </div>
                <!-- SERVICIOS ITEMS FIN -->

                <!-- SERVICIOS ITEMS INICIO -->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-palette"></i>
                        </div>

                        <h3>Dise??o UI</h3>
                        <p>
                            Dise??o de interfaz de usuario, es el resultado de definir la forma, funci??n, utilidad,
                            ergonom??a, imagen de marca y otros aspectos que afectan a la apariencia externa de las
                            interfaces de usuarios en sistemas de todo tipo.
                        </p>
                    </div>
                </div>
                <!-- SERVICIOS ITEMS FIN -->

                <!-- SERVICIOS ITEMS INICIO -->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-code"></i>
                        </div>

                        <h3>C??digo Limpio</h3>
                        <p>
                            Es el arte del desarrollo que consiste en aplicar t??cnicas simples que faciliten la
                            escritura, lectura e interpretaci??n de un c??digo, volvi??ndolo mas f??cil de entender.
                        </p>
                    </div>
                </div>
                <!-- SERVICIOS ITEMS FIN -->

                <!-- SERVICIOS ITEMS INICIO -->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-shopping-cart"></i>
                        </div>

                        <h3>E - commerce</h3>
                        <p>
                            Es definido como la venta, compra y distribuci??n de alg??n suministro, producto, servicio o
                            informaci??n a traves de internet.
                        </p>
                    </div>
                </div>
                <!-- SERVICIOS ITEMS FIN -->

                <!-- SERVICIOS ITEMS INICIO -->
                <div class="service-item">
                    <div class="service-item-inner outer-shadow">
                        <div class="icon inner-shadow">
                            <i class="fas fa-bullhorn"></i>
                        </div>

                        <h3>Gran Apoyo</h3>
                        <p>
                            A lo largo del proceso sea cual sea el servicio elegido por ti como cliente, tendr??s mi
                            apoyo y completa disposici??n en ayudarte a cumplir tus objetivos!
                        </p>
                    </div>
                </div>
                <!-- SERVICIOS ITEMS FIN -->
            </div>
        </div>
    </section>




    <section class="portfolio-section section" id="portfolio">

        <div class="container">

            <div class="row">
                <div class="section-title">
                    <h2 data-heading="portfolio">Ultimos Proyectos</h2>
                </div>
            </div>

            <!-- FILTRO PORTAFOLIO -->

            <div class="row">
                <div class="portfolio-filter">
                    <span class="filter-item outer-shadow active" data-target="all">Todos los Proyectos</span>
                </div>
            </div>


            <!-- ITEMS PORTAFOLIO INICIO -->

            <div class="row portfolio-items">

                <?php foreach ($portafolio as $portfolio) { ?>
                    <!-- INICIO ITEM -->
                    <div class="portfolio-item" data-category="web-aplication">
                        <div class="portfolio-item-inner outer-shadow">
                            <div class="portfolio-item-img">
                                <img src="<?php echo "img/" . $portfolio["portada"] ?>" alt="" data-screenshot="
                                <?php echo "img/" . $portfolio["imagen"] ?>" />

                                <span class="view-project">Ver Proyecto</span>
                            </div>
                            <p class="portfolio-item-title"><?php echo $portfolio["titulo"] ?></p>

                            <!-- DETALLES PORTAFOLIO INICIO -->

                            <div class="portfolio-item-details">
                                <div class="row">
                                    <div class="description">
                                        <h3>Descripci??n:</h3>
                                        <p>
                                            <?php echo $portfolio["descripcion"] ?>
                                        </p>
                                    </div>
                                    <div class="info">
                                        <h3>informaci??n del Proyecto</h3>

                                        <ul>
                                            <li>Enlace - <span><a Target="_blank" href="<?php echo $portfolio["enlace"] ?>">Visitar Sitio</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- DETALLES PORTAFOLIO FIN -->
                        </div>
                    </div>

                <?php  } ?>
                <!-- FIN ITEM -->


            </div>

    </section>


    <section class="testimonial-section section" id="testimonial">
    <div class="container">
      <div class="row">
        <div class="section-title">
          <h2 data-heading="testimonial">Testimonios</h2>
        </div>
      </div>
      <div class="row">
        <div class="testi-box">

            
            <div class="testi-slider outer-shadow">
                <div class="testi-slider-container">
                <?php foreach ($testimonios as $test) { ?>


              <!-- Item testimonio inicio -->
              <div class="testi-item active">

                <p><?php echo $test["testimonio"] ?></p>
                <img src="<?php echo "img/" . $test["imagen"] ?>" alt="">

                <span><?php echo $test["nombre"] ?></span>
              </div>
              <!-- Item testimonio fin -->

              <?php  } ?>
            </div>
          </div>



          <div class="testi-slider-nav">
            <span class="prev outer-shadow hover-in-shadow"><i class="fas fa-angle-left"></i></span>
            <span class="next outer-shadow hover-in-shadow"><i class="fas fa-angle-right"></i></span>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- SECCION DE CONTACTO -->



    <section class="contact-section section" id="contact">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-heading="contact">Dejame un mensaje</h2>
                </div>
            </div>

            <div class="row">
                <!-- ITEM CONTACTO INICIO -->
                <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                        <i class="fas fa-phone"></i>
                        <span>Telefono</span>
                        <p>+58 412 159 47 33</p>
                    </div>
                </div>
                <!-- ITEM CONTACTO FIN -->

                <!-- ITEM CONTACTO INICIO -->
                <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                        <i class="fas fa-envelope"></i>
                        <span>Email</span>
                        <p>KVALERA200244@GMAIL.COM</p>
                    </div>
                </div>
                <!-- ITEM CONTACTO FIN -->

                <!-- ITEM CONTACTO INICIO -->
                <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Direcci??n</span>
                        <p>Venezuela, Carabobo</p>
                    </div>
                </div>
                <!-- ITEM CONTACTO FIN -->
            </div>


            <div class="row">
                <div class="contact-form">
                    <form name="contact" method="post" data-netlify="true" action="">

                        <div class="row">
                            <div class="w-50">
                                <div class="input-group outer-shadow hover-in-shadow">
                                    <input required name="name" type="text" placeholder="Nombre" class="input-control">
                                </div>

                                <div class="input-group outer-shadow hover-in-shadow">
                                    <input required name="email" type="text" placeholder="Email" class="input-control">
                                </div>

                                <div class="input-group outer-shadow hover-in-shadow">
                                    <input required name="asunto" type="text" placeholder="Asunto" class="input-control">
                                </div>
                            </div>

                            <div class="w-50">
                                <div class="input-group outer-shadow hover-in-shadow">
                                    <textarea required name="message" class="input-control" placeholder="Mensaje..."></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="submit-btn">
                                <button type="submit" class="btn-1 outer-shadow hover-in-shadow">Enviar Mensaje</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>

    <!-- POPUP PORTAFOLIO INICIO -->

    <div class="pp portfolio-popup">

        <div class="pp-details">
            <div class="pp-details-inner">
                <div class="pp-title">
                    <h2>Personal Portafolio</h2>
                    <p>Category - <span class="pp-project-category">Web aplication</span></p>
                </div>
                <div class="pp-project-details">
                    <div class="row">
                        <div class="description">
                            <h3>Project Brief:</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Hic, explicabo aperiam sequi, doloribus sunt distinctio
                                natus totam id labore minima provident quos illum quo
                                dignissimos nisi iusto. Consequatur, ea totam.
                            </p>
                        </div>
                        <div class="info">
                            <h3>Project info</h3>

                            <ul>
                                <li>Date - <span>2021</span></li>
                                <li>Client - <span>xyz</span></li>
                                <li>Tools - <span>Html, CSS, JavaScript</span></li>
                                <li>Web - <span><a href="#">www.domain.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!--  -->


        <div class="separator"></div>

        <div class="pp-main">
            <div class="pp-main-inner">
                <div class="pp-project-details-btn outer-shadow hover-in-shadow">Project Details <i class="fas fa-plus"></i></div>
                <div class="pp-close outer-shadow hover-in-shadow">&times;</div>
                <img src="img/portfolio/large/project-1/1.png" alt="" class="pp-img outer-shadow">
                <div class="pp-counter">1 of 6</div>
            </div>

            <div class="pp-loader">
                <div class=""></div>
            </div>

            <!-- pp navigation -->
            <div class="pp-prev"><i class="fas fa-play"></i></div>
            <div class="pp-next"><i class="fas fa-play"></i></div>

        </div>
    </div>

    <!-- POPUP PORTAFOLIO FIN -->


    <!-- SWITCH -->

    <div class="style-switcher outer-shadow">

        <div class="style-switcher-toggler s-icon outer-shadow hover-in-shadow">
            <i class="fas fa-cog fa-spin"></i>
        </div>

        <div class="day-night s-icon outer-shadow hover-in-shadow">
            <i class="fas"></i>
        </div>

        <h4>Theme Colors</h4>

        <div class="colors">

            <span class="color-1" onclick="setActiveStyle('color-1')"></span>

            <span class="color-2" onclick="setActiveStyle('color-2')"></span>

            <span class="color-3" onclick="setActiveStyle('color-3')"></span>

            <span class="color-4" onclick="setActiveStyle('color-4')"></span>

            <span class="color-5" onclick="setActiveStyle('color-5')"></span>

        </div>
    </div>
    <!-- Scripts -->

    <script src="https://kit.fontawesome.com/70414ff70f.js" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>
    <script src="js/style-switcher.js"></script>
</body>

</html>