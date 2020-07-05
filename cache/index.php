
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- <link rel="stylesheet" href="css/normalize.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
  
   <!-- <link rel="stylesheet" href="css/all.min.css"><!--AGREGAMOS LOS ICONOS (FONT-AWESOME) --> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q==" crossorigin="anonymous" />
  

  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap" rel="stylesheet"><!--AGREGAMOS LAS FUENTES-->
  
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"/><!--Css para el Mapa-->
  
<!--CARGANDO ARCHIVOS DE FORMA CONDICIONAL, SOLO PARA LAS PAGINAS QUE LOS NECESITEN-->
  <link rel="stylesheet" href="css/colorbox.css">
  <link rel="stylesheet" href="css/main.css">
  
  

  <meta name="theme-color" content="#fafafa">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body class="index">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <header class="site-header">
    <div class="hero">
       <div class="contenido-header">
         <nav class="redes-sociales">
           <a href=""><i class="fab fa-facebook-f"></i></a>
           <a href=""><i class="fab fa-twitter"></i></a>
           <a href=""><i class="fab fa-pinterest-p"></i></a>
           <a href=""><i class="fab fa-youtube"></i></a>
           <a href=""><i class="fab fa-instagram"></i></a>
         </nav>

         <div class="informacion-evento">
           <div class="clearfix">
              <p class="fecha"><i class="fas fa-calendar-alt"></i> 10-12 Dic</p>
              <p class="ciudad"><i class="fas fa-map-marker-alt"></i> Tegucigalpa, HN</p>
           </div>
           
           <h1 class="nombre-sitio">GdlWebCamp</h1>
           <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
         </div><!--.informacion evento-->
       </div>
    </div><!--.hero-->

  </header>

  <div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
         <a href="index.php">
            <img src="img/logo.svg" alt="logo GdlWebCamp">
         </a>
      </div>

      <div class="menu-movil">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="navegacion-principal clearfix">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php">Invitados</a>
        <a href="registro.php">Reservaciones</a>
      </nav>
    </div><!--.contenedor-->
  </div><!--.barra-->

  <section class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus convallis blandit. Praesent ut sem vitae lorem porta volutpat.
       Pellentesque nec nunc et quam fermentum fringilla et at sem. Morbi ultrices iaculis scelerisque. Aliquam erat volutpat. Sed ornare lacinia scelerisque.  
    </p>
  </section><!--.seccion-->

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4"><!--PONEMOS LOS MP4 PRIMERO PORQUE LOS DISPOSITIVOS DE APPLE SINO DETECTA PRIMERO UN VIDEO MP4, NO REPRODUCIRA NADA-->
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div><!--.contenedor-video-->

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del evento</h2>

          
 
          <!--CREAR EL MENU DE LOS EVENTOS QUE SEA DINAMICO DESDE LA BASE DE DATOS-->
          <nav class="menu-programa">
                                            <a href="#seminario">
                    <i class="fas fa fa-university" aria-hidden="true"></i> Seminario                </a>
                                            <a href="#conferencia">
                    <i class="fas fa fa-comment" aria-hidden="true"></i> Conferencia                </a>
                                            <a href="#taller">
                    <i class="fas fa fa-code" aria-hidden="true"></i> Taller                </a>
              
          </nav>
          
           

          
          
                                                                      <div id="seminario" class="info-curso ocultar clearfix">
                                          <div class="detalle-evento">
                          <h3>Dise�o UI y UX para m�viles</h3>
                          <p><i class="fas fa-clock"></i>10:00:00</p>
                          <p><i class="fas fa-calendar"></i>2020-12-11</p>
                          <p><i class="fas fa-user"></i>Susan Sanchez</p>
                        </div>
  
                                                                                      <div class="detalle-evento">
                          <h3>Aprende a Programar en una ma�ana</h3>
                          <p><i class="fas fa-clock"></i>10:00:00</p>
                          <p><i class="fas fa-calendar"></i>2020-12-12</p>
                          <p><i class="fas fa-user"></i>Gregorio Sanchez</p>
                        </div>
  
                    
                   <a href="calendario.php" class="button float-right">Ver Todos</a>    
                   </div><!--#talleres-->
                                                                    
                                                                      <div id="conferencia" class="info-curso ocultar clearfix">
                                          <div class="detalle-evento">
                          <h3>Como ser freelancer</h3>
                          <p><i class="fas fa-clock"></i>10:00:00</p>
                          <p><i class="fas fa-calendar"></i>2020-12-11</p>
                          <p><i class="fas fa-user"></i>Susan Sanchez</p>
                        </div>
  
                                                                                      <div class="detalle-evento">
                          <h3>Tecnolog��as del Futuro</h3>
                          <p><i class="fas fa-clock"></i>17:00:00</p>
                          <p><i class="fas fa-calendar"></i>2020-12-11</p>
                          <p><i class="fas fa-user"></i>Rafael Bautista</p>
                        </div>
  
                    
                   <a href="calendario.php" class="button float-right">Ver Todos</a>    
                   </div><!--#talleres-->
                                                                    
                                                                      <div id="taller" class="info-curso ocultar clearfix">
                                          <div class="detalle-evento">
                          <h3>Responsive Web Design</h3>
                          <p><i class="fas fa-clock"></i>10:00:00</p>
                          <p><i class="fas fa-calendar"></i>2020-12-11</p>
                          <p><i class="fas fa-user"></i>Rafael Bautista</p>
                        </div>
  
                                                                                      <div class="detalle-evento">
                          <h3>Flexbox</h3>
                          <p><i class="fas fa-clock"></i>12:00:00</p>
                          <p><i class="fas fa-calendar"></i>2020-12-11</p>
                          <p><i class="fas fa-user"></i>Shari Herrera</p>
                        </div>
  
                    
                   <a href="calendario.php" class="button float-right">Ver Todos</a>    
                   </div><!--#talleres-->
                                                                    


        </div><!--.programa-evento-->
      </div><!--.contenedor-->
    </div><!--.contenido-programa-->
  </section><!--.programa-->

   
    
      <section class="invitados contenedor seccion">
          <h2>Invitados</h2>
          <ul class="lista-invitados clearfix"> 
          <!--DAR RESULTADOS DE LA BASE DE DATOS.-->
                                <li>
                    <div class="invitado">
                      <a class="invitado_info" href="#invitado1">
                          <img src="img/invitados/invitado1.jpg" alt="imagen invitado">
                          <p>Rafael Bautista</p>
                      </a>
                    </div>
                  </li>     
                  <div style="display:none;">
                       <div class="invitado_info" id="invitado1">
                            <h2>Rafael Bautista</h2>
                            <img src="img/invitados/invitado1.jpg" alt="imagen invitado">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna neque viverra justo nec ultrices. Tempus urna et pharetra pharetra massa massa ultricies mi.</p>
                       </div> 
                  </div>   
                                <li>
                    <div class="invitado">
                      <a class="invitado_info" href="#invitado2">
                          <img src="img/invitados/invitado2.jpg" alt="imagen invitado">
                          <p>Shari Herrera</p>
                      </a>
                    </div>
                  </li>     
                  <div style="display:none;">
                       <div class="invitado_info" id="invitado2">
                            <h2>Shari Herrera</h2>
                            <img src="img/invitados/invitado2.jpg" alt="imagen invitado">
                            <p>Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Dolor sed viverra ipsum nunc aliquet bibendum. Aliquam malesuada bibendum arcu vitae. Integer quis auctor elit sed vulputate mi sit amet mauris. Id diam maecenas ultricies mi eget mauris pharetra et ultrices.</p>
                       </div> 
                  </div>   
                                <li>
                    <div class="invitado">
                      <a class="invitado_info" href="#invitado3">
                          <img src="img/invitados/invitado3.jpg" alt="imagen invitado">
                          <p>Gregorio Sanchez</p>
                      </a>
                    </div>
                  </li>     
                  <div style="display:none;">
                       <div class="invitado_info" id="invitado3">
                            <h2>Gregorio Sanchez</h2>
                            <img src="img/invitados/invitado3.jpg" alt="imagen invitado">
                            <p>Tempus urna et pharetra pharetra massa massa ultricies mi. Sed faucibus turpis in eu mi bibendum neque egestas congue. Adipiscing enim eu turpis egestas pretium aenean pharetra magna ac. Commodo elit at imperdiet dui accumsan sit amet nulla. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper.</p>
                       </div> 
                  </div>   
                                <li>
                    <div class="invitado">
                      <a class="invitado_info" href="#invitado4">
                          <img src="img/invitados/invitado4.jpg" alt="imagen invitado">
                          <p>Susana Rivera</p>
                      </a>
                    </div>
                  </li>     
                  <div style="display:none;">
                       <div class="invitado_info" id="invitado4">
                            <h2>Susana Rivera</h2>
                            <img src="img/invitados/invitado4.jpg" alt="imagen invitado">
                            <p>Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Dolor sed viverra ipsum nunc aliquet bibendum. Aliquam malesuada bibendum arcu vitae. Integer quis auctor elit sed vulputate mi sit amet mauris. Id diam maecenas ultricies mi eget mauris pharetra et ultrices.</p>
                       </div> 
                  </div>   
                                <li>
                    <div class="invitado">
                      <a class="invitado_info" href="#invitado5">
                          <img src="img/invitados/invitado5.jpg" alt="imagen invitado">
                          <p>Harold Garcia</p>
                      </a>
                    </div>
                  </li>     
                  <div style="display:none;">
                       <div class="invitado_info" id="invitado5">
                            <h2>Harold Garcia</h2>
                            <img src="img/invitados/invitado5.jpg" alt="imagen invitado">
                            <p>Adipiscing enim eu turpis egestas pretium aenean pharetra magna ac. Commodo elit at imperdiet dui accumsan sit amet nulla. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Dolor sed viverra ipsum nunc aliquet bibendum. Aliquam malesuada bibendum arcu vitae.</p>
                       </div> 
                  </div>   
                                <li>
                    <div class="invitado">
                      <a class="invitado_info" href="#invitado6">
                          <img src="img/invitados/invitado6.jpg" alt="imagen invitado">
                          <p>Susan Sanchez</p>
                      </a>
                    </div>
                  </li>     
                  <div style="display:none;">
                       <div class="invitado_info" id="invitado6">
                            <h2>Susan Sanchez</h2>
                            <img src="img/invitados/invitado6.jpg" alt="imagen invitado">
                            <p>Stas pretium aenean pharetra magna ac. Commodo elit at imperdiet dui accumsan sit amet nulla. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Dolor sed viverra ipsum nunc aliquet bibendum.</p>
                       </div> 
                  </div>   
                            
            </ul>
      </section>      

         

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero"></p>Invitados</li>
        <li><p class="numero"></p>Talleres</li>
        <li><p class="numero"></p>Dias</li>
        <li><p class="numero"></p>Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por dia</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Todos los dias</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 dias</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa"></div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus convallis blandit. Praesent ut sem vitae lorem porta volutpat.</p>
          <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--.testimonial-->

      <div class="testimonial">
        <blockquote>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus convallis blandit. Praesent ut sem vitae lorem porta volutpat.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--.testimonial-->

      <div class="testimonial">
        <blockquote>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus convallis blandit. Praesent ut sem vitae lorem porta volutpat.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--.testimonial-->
    </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>registrate al newsletter</p>
      <h3>GdlWebCamp</h3>
      <a href="#mc_embed_signup" class="boton_newsletter button transparente">Registro</a>
    </div><!--.contenido-->
  </div><!--.newsletter-->
                  
  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p>dias</li>
        <li><p id="horas" class="numero"></p>horas</li>
        <li><p id="minutos" class="numero"></p>minutos</li>
        <li><p id="segundos" class="numero"></p>segundos</li>
      </ul>
    </div>
  </section>
 
  <footer class="site-footer">
    <div class="contenedor clearfix">
      <div class="footer-informacion">
        <h3>Sobre <span>GdlWebCamp</span></h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus convallis blandit. Praesent ut sem vitae lorem porta volutpat.</p>
      </div>

      <div class="ultimos-tweets">
      <h3>últimos <span>tweets</span></h3>
        <a class="twitter-timeline" data-height="400" data-theme="light" href="https://twitter.com/jeza077?ref_src=twsrc%5Etfw">Tweets by jeza077</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>

      <div class="menu">
          <h3>Redes <span>sociales</span></h3>
          <nav class="redes-sociales">
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-pinterest-p"></i></a>
              <a href=""><i class="fab fa-youtube"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
            </nav>
      </div>
    </div>

    <p class="copyright">
      Todos los Derechos Reservados GDLWEBCAMP 2019.
    </p>

<!--------------------------------------------- Begin Mailchimp Signup Form ----------------------------------------------------->
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
      /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
        We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    </style>
  <div style= "display:none;">
    <div id="mc_embed_signup">
    <form action="https://GdlWebCamp.us19.list-manage.com/subscribe/post?u=eadc400bb6f7e52f23eff1af4&amp;id=f63b4d1fbb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
      <h2>Suscribete al Newsletter y no te pierdas nada de este evento</h2>
    <div class="indicates-required"><span class="asterisk">*</span> es obligatorio</div>
    <div class="mc-field-group">
      <label for="mce-EMAIL">Correo Electronico  <span class="asterisk">*</span>
    </label>
      <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
    </div>
      <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_eadc400bb6f7e52f23eff1af4_f63b4d1fbb" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        </div>
    </form>
    </div>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday'; /*
    * Translated default messages for the $ validation plugin.
    * Locale: ES
    */
    $.extend($.validator.messages, {
      required: "Este campo es obligatorio.",
      remote: "Por favor, rellena este campo.",
      email: "Por favor, escribe una dirección de correo válida",
      url: "Por favor, escribe una URL válida.",
      date: "Por favor, escribe una fecha válida.",
      dateISO: "Por favor, escribe una fecha (ISO) válida.",
      number: "Por favor, escribe un número entero válido.",
      digits: "Por favor, escribe sólo dígitos.",
      creditcard: "Por favor, escribe un número de tarjeta válido.",
      equalTo: "Por favor, escribe el mismo valor de nuevo.",
      accept: "Por favor, escribe un valor con una extensión aceptada.",
      maxlength: $.validator.format("Por favor, no escribas más de {0} caracteres."),
      minlength: $.validator.format("Por favor, no escribas menos de {0} caracteres."),
      rangelength: $.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
      range: $.validator.format("Por favor, escribe un valor entre {0} y {1}."),
      max: $.validator.format("Por favor, escribe un valor menor o igual a {0}."),
      min: $.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
    });}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    <!--End mc_embed_signup-->
  </div>    
</footer>




  <!-- // <script src="js/vendor/modernizr-3.7.1.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>

  <!-- // <script src="js/jquery.animateNumber.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-animateNumber/0.0.14/jquery.animateNumber.min.js" integrity="sha512-WY7Piz2TwYjkLlgxw9DONwf5ixUOBnL3Go+FSdqRxhKlOqx9F+ee/JsablX84YBPLQzUPJsZvV88s8YOJ4S/UA==" crossorigin="anonymous"></script>
  
  <!-- // <script src="js/jquery.countdown.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" integrity="sha512-lteuRD+aUENrZPTXWFRPTBcDDxIGWe5uu0apPEn+3ZKYDwDaEErIK9rvR0QzUGmUQ55KFE2RqGTVoZsKctGMVw==" crossorigin="anonymous"></script>

  <!-- // <script src="js/jquery.lettering.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js" integrity="sha512-9ex1Kp3S7uKHVZmQ44o5qPV6PnP8/kYp8IpUHLDJ+GZ/qpKAqGgEEH7rhYlM4pTOSs/WyHtPubN2UePKTnTSww==" crossorigin="anonymous"></script>

<!---------CARGANDO ARCHIVOS DE FORMA CONDICIONAL, SOLO PARA LAS PAGINAS QUE LOS NECESITEN---------->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js" integrity="sha512-DAVSi/Ovew9ZRpBgHs6hJ+EMdj1fVKE+csL7mdf9v7tMbzM1i4c/jAvHE8AhcKYazlFl7M8guWuO3lDNzIA48A==" crossorigin="anonymous"></script>
  
  <script src="js/main.min.js"></script>
  <script src="js/cotizador.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script><!--Scrip para el Mapa-->

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>

  <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us19.list-manage.com","uuid":"eadc400bb6f7e52f23eff1af4","lid":"f63b4d1fbb","uniqueMethods":true}) })</script>

