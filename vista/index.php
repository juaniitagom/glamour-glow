<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
        rel="stylesheet"/>
    <link rel="stylesheet" href="../styles.css" />
    <link rel="icon" href="../assets/imagenes/kiss-logo.png">
    <title>Glamour Glow</title>
</head>
<body>
    <header class="header">
        <nav>
            <div class="nav__header">
                <div class="nav__logo">
                    <a href="#">
                        <img
                            src="../assets/imagenes/Logoo-dark.png"
                            alt="logo"
                            class="nav__logo-dark"
                        />
                        <img
                            src="../assets/imagenes/logoo-white.png"
                            alt="logo"
                            class="nav__logo-white"
                        />
                    </a>
                </div>
                <div class="nav__menu__btn" id="menu-btn">
                    <ul>
                    <li><a href="../login/inicio.php" >INICIAR SESION</a></li>
</ul>
                </div>
            </div>
            <ul class="nav__links" id="nav-links">
                <li><a href="../login/inicio.php">INICIAR SESION</a></li>
                <li><a href="#menu">SERVICIOS</a></li>
                <li><a href="#contactanos">CONTACTANOS</a></li>
            </ul>
        </nav>
        <div class="section__container header__container" id="home">
            <div class="header__image">
            
            </div>
            <div class="header__content">
                <h2>El estilo que mereces, el cuidado que necesitas.</h2>
                <h1>GLAMOUR<br /><span>GLOW</span></h1>
            </div>
        </div>
    </header>

    <section class="section__container order__container" id="menu">
    <h3>NUESTRA ESPECIALIDAD</h3>
    <h2 class="section__header">ELIGE QUE QUIERES HOY</h2>
    <p class="section__description">
      Aquí puedes ver los servicios generales
    </p>
    <div class="order__grid">
      <div class="order__card">
        <img src="../assets/imagenes/order-1.png" alt="order" />
        <h4>Maquillaje</h4>
        <p>
                    Todo tipo de maquillaje: Social, Quince Años y Artistico
                </p>
        <a href="SERVICIOS/maquillaje.php" class="btn">Mostrar mas</a>
      </div>
      <div class="order__card">
        <img src="../assets/imagenes/order-2.png" alt="order" />
        <h4>Uñas</h4>
        <p>
                    Acrílicas, semi permanentes y  pedicure
                </p>
        <a href="SERVICIOS/uñas.php" class="btn">Mostrar mas</a>
      </div>
      <div class="order__card">
        <img src="../assets/imagenes/order-3.png" alt="order" />
        <h4>Cabello</h4>
        <p>
                    Tinturas, peinados para niñas, para fiestas, keratinas.
                </p>
        <a href="SERVICIOS/cabello.php" class="btn">Mostrar mas</a>
      </div>
    </div>
  </section>

    <section class="section__container event__container" id="event">
        <div class="event__content">
            <div class="event__image">
                <img src="../assets/imagenes/event.png" alt="event" />
            </div>
            <div class="event__details">
                <h3>DESCUBRE</h3>
                <h2 class="section__header">NUESTROS EVENTOS</h2>
                <p class="section__description">
                    Estamos emocionados de anunciar que se avecinan promociones increíbles para días especiales en nuestro salón de belleza. Queremos consentirte y ayudarte a lucir tu mejor versión, por eso hemos preparado descuentos exclusivos y paquetes especiales para que disfrutes de nuestros servicios de peluquería, estética, y spa.

                    Mantente atento a nuestras redes sociales y nuestra página web para más detalles. ¡No querrás perderte estas oportunidades únicas de sentirte y verte espectacular!
                </p>
            </div>
        </div>
    </section>

    <section id="contactanos">
        <footer class="footer">
            <div class="section__container footer__container">
                <div class="footer__logo">
                    <img src="../assets/imagenes/Logoo-white (2).png" alt="logo" />
                </div> 
                <div class="footer__content">
                    <p>
                        Bienvenidos a nuestro salón Glamour Glow con la mejor atención al cliente, el mejor servicio 
                        y los mejores precios para ti. Nos dedicamos a cuidar y mejorar la imagen de nuestras clientas.
                        Ven y atrévete a explorar nuestros servicios.
                    </p>
                    <div>
                        <ul class="footer__links">
                            <li>
                                <span><i class="ri-map-pin-2-fill"></i></span>
                                Medellín 
                            </li>
                            <li>
                                <span><i class="ri-mail-fill"></i></span>
                               glamourgloow@gmail.com
                            </li>
                        </ul>
                        <div class="footer__socials">
                            <a href="https://www.instagram.com/glamourgloww___?igsh=MXpmb2l5M2F1am9v"target="_blank"><i class="ri-instagram-fill"></i></a>
                            <a href="https://chat.whatsapp.com/ETWQHrzEk73GgG1DJIboHN"target="_blank"> <i class="ri-whatsapp-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bar">
                Copyright © 2024 Glamour Glow. Todos los derechos reservados.
            </div>
        </footer>
    </section>

   
</body>
</html>
