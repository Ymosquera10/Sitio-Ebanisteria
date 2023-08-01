<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title align="center" >Arachoco</title>
    <link rel="icon" type="image/png" href="aki/buy online logo.PNG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--Hojas de Estilo -->    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  
    <!--Hojas de Estilo -->
</head>
<body >
<h3 align="center"><img src="<?php echo base_url('assets/sitio/images/buy online logo.PNG');?>"  width="250" height="250"></h3>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('index.php/sitio');?>">INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ESTANTE DE PRODUCTOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('index.php/chifonier');?>">Chifonier</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/camas');?>">Camas</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/comedores');?>">Comedores</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/cocina');?>">Cocinas integrales</a>
           <a class="dropdown-item" href="<?php echo base_url('index.php/muebles');?>">Muebles</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('index.php/sitio');?>">SALIR</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="paginas/registro.html" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="<?php echo base_url('index.php/chifonier');?>">
      <input class="form-control mr-sm-2" type="Buscar" placeholder="Chifonier" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
    </form>
    <form class="form-inline my-2 my-lg-0"action="<?php echo base_url('index.php/camas');?>">
      <input class="form-control mr-sm-2" type="Buscar" placeholder="Camas" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
    </form>
    <form class="form-inline my-2 my-lg-0"action="<?php echo base_url('index.php/comedores');?>">
      <input class="form-control mr-sm-2" type="Buscar" placeholder="Comedores" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
    </form>
    <form class="form-inline my-2 my-lg-0"action="<?php echo base_url('index.php/cocina');?>">
      <input class="form-control mr-sm-2" type="Buscar" placeholder="Cocinas integrales" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
    </form>
    <form class="form-inline my-2 my-lg-0"action="<?php echo base_url('index.php/muebles');?>">
      <input class="form-control mr-sm-2" type="Buscar" placeholder="Muebles" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
    </form>
  </div>
</nav>
    
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('assets/sitio/images/demo/chifonier/chifo4.png');?>" height="280" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/sitio/images/demo/imagen3.jpg');?>" height="300"   width="150">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/sitio/images/demo/imagen5.gif');?>" height="300"   width="150">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!--Archivos de javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #F8F9F9;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">
          	Conoce un poco sobre nuestro negocio y qué ofrecemos!
          	Este sitio web se ha diseñado para el crecimiento de la empresa llamada(arachocó). Con el fin de expandir nuestra empresa y así obtener más clientela y mejorar nuestro servicios.
          </h6>  
        </div>
        <!-- Grid column -->
	<div style="text-align:center;padding:1em 0;"> <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/es/city/3688689"><span style="color:gray;">Hora actual en:</span><br />Quibdó, Colombia</a></h4> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FBogota&show=hour_minute" width="100%" height="90" frameborder="0" seamless></iframe> </div>
        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Arachoco</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        
        <p>Este sitio web se ha creado con el objetivo de que nuestra empresa crezca, y para que el usuario o comprador lo pueda hacer desde la comodidad de su casa</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Productos</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="">Muebles</a>
        </p>
        <p>
          <a href="">Camas</a>
        </p>
        <p>
          <a href="">Chifonier</a>
        </p>
        <p>
          <a href="">Cocinas integrales</a>
        </p>
        <p>
          <a href="">Comedores</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Desarollador</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a>YONI MOSQUERA</a>
        </p>
        
        

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contacto</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-envelope mr-3"></i>Correo: yonim133@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i>Telefono: 3115152685 </p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Arachocó
    <a >2022</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    <!--Archivos de javascript-->
</body>
</html>