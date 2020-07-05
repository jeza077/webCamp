<?php
    // Definir un nombre para cachear
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);

    // Definir archivo para cachear (puede ser .php también)
    $archivoCache = 'cache/'.$pagina.'.php';
    // Cuanto tiempo deberá estar este archivo almacenado
    $tiempo = 36000;
    // Checar que el archivo exista, el tiempo sea el adecuado y muestralo
    if (file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)) {
      include($archivoCache);
        exit;
    }
    // Si el archivo no existe, o el tiempo de cacheo ya se venció genera uno nuevo
    ob_start();
?>

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
  <?php 
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);
      if($pagina == 'invitados' || $pagina == 'index'){
        echo '<link rel="stylesheet" href="css/colorbox.css">';
      } else if($pagina == 'conferencia'){
        // echo '<link rel="stylesheet" href="css/lightbox.css">';
        echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css" integrity="sha512-39cUEe00wnlnuDLBvI4rVDbzYOXdLiAo/CVCjRmVWGQ/arXeqYoC8M1Gj1K3UeX4ZtrsvnjKqOGLq6hGNYDgLQ==" crossorigin="anonymous" />';
      }
  ?>

  <link rel="stylesheet" href="css/main.css">
  
  

  <meta name="theme-color" content="#fafafa">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body class="<?php echo$pagina; ?>">
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
