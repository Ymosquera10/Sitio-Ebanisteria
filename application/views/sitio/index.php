<!DOCTYPE html>
<html lang="en">

<head>
	<title>ARACHOCO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="<?php echo base_url('assets/sitio/assets/img/apple-icon.png'); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/sitio/assets/img/favicon.jpeg'); ?>">

	<link rel="stylesheet" href="<?php echo base_url('assets/sitio/assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/sitio/assets/css/templatemo.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/sitio/assets/css/custom.css'); ?>">

	<!-- Load fonts style after rendering the layout styles -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
	<link rel="stylesheet" href="<?php echo base_url('assets/sitio/assets/css/fontawesome.min.css'); ?>">
	<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
	<!-- Start Top Nav -->
	<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
		<div class="container text-light">
			<div class="w-100 d-flex justify-content-between">
				<div>
					<i class="fa fa-envelope mx-2"></i>
					<a class="navbar-sm-brand text-light text-decoration-none"
						href="mailto:info@company.com">yonimosqueramosquera237@gmail.com</a>
					<i class="fa fa-phone mx-2"></i>
					<a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">3115152685</a>
					
				</div>
				<div>
					<a class="text-light" href="https://web.facebook.com/profile.php?id=100087576896137" target="_blank" rel="sponsored"><i
							class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
					<a class="text-light" href="https://www.instagram.com/" target="_blank"><i
							class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
					<a class="text-light" href="https://www.youtube.com/channel/UCf_2VhO_7-7zWOdJqf0h2Rg" target="_blank"><i
							class="fab fa-youtube fa-sm fa-fw me-2"></i></a>
				</div>
			</div>
		</div>
	</nav>
	<!-- Close Top Nav -->


	<!-- Header -->
	<nav class="navbar navbar-expand-lg navbar-light shadow">
		<div class="container d-flex justify-content-between align-items-center">

			<a class="navbar-brand text-success logo h1 align-self-center"
				href="<?php echo base_url('index.php/sitio'); ?>">
				Arachocó
			</a>

			<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
				data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
				id="templatemo_main_nav">
				<div class="flex-fill">
					<ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('index.php/sitioprodu'); ?>">Productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('index.php/contacto'); ?>">Contacto</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('index.php/iniciar'); ?>">Sesión</a>
						</li>
					</ul>
				</div>
				<div class="navbar align-self-center d-flex">
					<a class="nav-icon position-relative text-decoration-none"
						href="<?php echo base_url('index.php/ver_carrito'); ?>">
						<i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"><?php //echo $conteo[''];?></i>
						<span
							class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
					</a>

				</div>
			</div>

		</div>
	</nav>
	<!-- Close Header -->

	<!-- Modal -->
	<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="w-100 pt-1 mb-5 text-right">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="" method="get" class="modal-content modal-body border-0 p-0">
				<div class="input-group mb-2">
					<input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
					<button type="submit" class="input-group-text bg-success text-light">
						<i class="fa fa-fw fa-search text-white"></i>
					</button>
				</div>
			</form>
		</div>
	</div>



	<!-- Start Banner Hero -->
	<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
		<ol class="carousel-indicators">
			<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
			<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
			<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="container">
					<div class="row p-5">
						<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
							<img class="img-fluid"
								src="<?php echo base_url('assets/sitio/assets/img/cocinacop.jpg'); ?>" width="" height=""
								alt="">
						</div>
						<div class="col-lg-6 mb-0 d-flex align-items-center">
							<div class="text-align-left align-self-center">
								<h1 class="h1 text-success"><b>Arachocó</b></h1>

								<p>
									Este sitio web se ha creado con el objetivo de que nuestra empresa crezca, y para
									que el usuario o comprador lo pueda hacer desde la comodidad de su casa.

								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="container">
					<div class="row p-5">
						<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
							<img class="img-fluid"
								src="<?php echo base_url('assets/sitio/assets/img/cama-matrimonio-moderna-7.jpg');?>" width="" height=""
								alt="">
						</div>
						<div class="col-lg-6 mb-0 d-flex align-items-center">
							<div class="text-align-left">
								<h1 class="h1 text-success"><b>Arachoco</b></h1>

								<p>
									Este sitio web se ha creado con el objetivo de que nuestra empresa crezca, y para
									que el usuario o comprador lo pueda hacer desde la comodidad de su casa.

								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="container">
					<div class="row p-5">
						<div class="mx-auto col-md-8 col-lg-6 order-lg-last">
							<img class="img-fluid" src="<?php echo base_url('assets/sitio/assets/img/imagen_cop.jpeg'); ?>" width="" height=""
								alt="">
						</div>
						<div class="col-lg-6 mb-0 d-flex align-items-center">
							<div class="text-align-left">
								<h1 class="h1 text-success"><b>Arachoco</b></h1>

								<p>
									Este sitio web se ha creado con el objetivo de que nuestra empresa crezca, y para
									que el usuario o comprador lo pueda hacer desde la comodidad de su casa.

								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
			role="button" data-bs-slide="prev">
			<i class="fas fa-chevron-left"></i>
		</a>
		<a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
			role="button" data-bs-slide="next">
			<i class="fas fa-chevron-right"></i>
		</a>
	</div>
	<!-- End Banner Hero -->


	<!-- Start Categories of The Month -->
	<section class="container py-5">
		<div class="row text-center pt-3">
			<div class="col-lg-6 m-auto">
				<h1 class="h1">ARACHOCÓ</h1>
				<p>
					EMPRESA ENCARGADA DE FABRICACIÓN DE CAMAS, MUEBLES ETC.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-4 p-5 mt-3">
				<a href="#"><img src="<?php echo base_url('assets/sitio/assets/img/armario-cocina.jpg'); ?>"
						class="rounded-circle img-fluid border"></a>
				<h5 class="text-center mt-3 mb-3">Armario cocina</h5>
				<p class="text-center"><a class="btn btn-success">En Promoción</a></p>
			</div>
			<div class="col-12 col-md-4 p-5 mt-3">
				<a href="#"><img src="<?php echo base_url('assets/sitio/assets/img/cocina-enhet.jpg'); ?>"
						class="rounded-circle img-fluid border"></a>
				<h2 class="h5 text-center mt-3 mb-3">Cocina enhet</h2>
				<p class="text-center"><a class="btn btn-success">En Promoción</a></p>
			</div>
			<div class="col-12 col-md-4 p-5 mt-3">
				<a href="#"><img src="<?php echo base_url('assets/sitio/assets/img/catalogo-de-cocinas.jpg'); ?>"
						class="rounded-circle img-fluid border"></a>
				<h2 class="h5 text-center mt-3 mb-3">Cocinas</h2>
				<p class="text-center"><a class="btn btn-success">En Promoción</a></p>
			</div>
		</div>
	</section>
	<!-- End Categories of The Month -->


	<!-- Start Featured Product -->
	<section class="bg-light">
		<div class="container py-5">
			<div class="row text-center py-3">
				<div class="col-lg-6 m-auto">
					<h1 class="h1">Productos</h1>
				</div>
			</div>
			<div class="row">
				<?php foreach ($pasando as $a): ?>
				<div class="col-12 col-md-4 mb-4">
					<div class="card h-80">

						<a href="#">

							<img src="<?php echo base_url() . 'assets/archivo/' . $a->Imagen; ?>" width="354"
								height="300" class="img-responsive" />
						</a>
						<div class="card-body">
							<ul class="list-unstyled d-flex justify-content-between">
								<li>
									<i class="text-warning fa fa-star"></i>
									<i class="text-warning fa fa-star"></i>
									<i class="text-warning fa fa-star"></i>
									<i class="text-warning fa fa-star"></i>
									<i class="text-warning fa fa-star"></i>
								</li>
								<li class="text-muted text-right"></li>
								<!--PARA AÑADIR AL CARRITO-->
							</ul>
							<a href="#" class="h2 text-decoration-none text-dark"></a>
							<p class="card-text">
							<h1>
								<?php echo $a->Nombrep; ?>
							</h1>
							<h2>
								<?php echo $a->Valor; ?>
							</h2>

							</p>
							<form action="<?php echo base_url('index.php/carro'); ?>" method="post"
								enctype="multipart/form-data">
								<input type="hidden" name="Nombrep" value="<?php echo $a->Nombrep; ?>">
								<input type="hidden" name="DescriP" value="<?php echo $a->DescriP; ?>">
								<input type="hidden" name="Medidas" value="<?php echo $a->Medidas; ?>">
								<input type="hidden" name="Garantia" value="<?php echo $a->Garantia; ?>">
								<input type="hidden" name="Valor" value="<?php echo $a->Valor; ?>">
								<input type="hidden" name="Descuentos" value="<?php echo $a->Descuentos; ?>">
								<input type="hidden" name="Promociones" value="<?php echo $a->Promociones; ?>">
								<input type="file"   value="<?php echo base_url() . 'assets/archivo/' . $a->Imagen; ?>"
									name="Imagen" accept="image/*" style="visibility: hidden">

								<button type="submit" class="btn btn-success">Añadir al carrito
								</button>
								<p class="text-muted"></p>
						</div>

					</div>
				</div>
				</form>
				<?php endforeach; ?>

			</div>
		</div>
	</section>
	<!-- End Featured Product -->


	<!-- Start Footer -->
	<footer class="bg-dark" id="tempaltemo_footer">
		<div class="container">
			<div class="row">

				<div class="col-md-4 pt-5">
					<h2 class="h2 text-success border-bottom pb-3 border-light logo">ARACHOCÓ</h2>
					<ul class="list-unstyled text-light footer-link-list">
						<li>
							<i class="fas fa-map-marker-alt fa-fw"></i>
							Ubicacion: Quibdó, Chocó, Colombia
						</li>
						<li>
							<i class="fa fa-phone fa-fw"></i>
							<a class="text-decoration-none" href="tel:010-020-0340">Telefono: 3115152685</a>
						</li>
						<li>
							<i class="fa fa-envelope fa-fw"></i>
							<a class="text-decoration-none" href="mailto:info@company.com">Correo:
								yonim133@gmail.com</a>
						</li>
					</ul>
				</div>

				<div class="col-md-4 pt-5">
					<h2 class="h2 text-light border-bottom pb-3 border-light">PRODUCTOS</h2>
					<ul class="list-unstyled text-light footer-link-list">
						<li><a class="text-decoration-none"
								href="<?php echo base_url('index.php/muebles'); ?>">Muebles</a></li>
						<li><a class="text-decoration-none" href="<?php echo base_url('index.php/camas'); ?>">Camas</a>
						</li>
						<li><a class="text-decoration-none"
								href="<?php echo base_url('index.php/chifonier'); ?>">Chifonier</a></li>
						<li><a class="text-decoration-none" href="<?php echo base_url('index.php/cocina'); ?>">Cocinas
								integrales</a></li>
						<li><a class="text-decoration-none"
								href="<?php echo base_url('index.php/comedores'); ?>">Comedores</a></li>

					</ul>
				</div>

				<div class="col-md-4 pt-5">
					<h2 class="h2 text-light border-bottom pb-3 border-light">DESARROLLADOR</h2>
					<ul class="list-unstyled text-light footer-link-list">
						<li><a class="text-decoration-none" href="#">YONI MOSQUERA</a></li>
						

					</ul>
				</div>

			</div>

			<div class="row text-light mb-4">
				<div class="col-12 mb-3">
					<div class="w-100 my-3 border-top border-light"></div>
				</div>
				<div class="col-auto me-auto">
					<ul class="list-inline text-left footer-icons">
						<li class="list-inline-item border border-light rounded-circle text-center">
							<a class="text-light text-decoration-none" target="_blank"
								href="https://web.facebook.com/profile.php?id=100087576896137"><i
									class="fab fa-facebook-f fa-lg fa-fw"></i></a>
						</li>
						<li class="list-inline-item border border-light rounded-circle text-center">
							<a class="text-light text-decoration-none" target="_blank"
								href="https://www.instagram.com/invites/contact/?i=1imrutjvqtfb4&utm_content=pgxc3n0"><i
									class="fab fa-instagram fa-lg fa-fw"></i></a>
						</li>
						<li class="list-inline-item border border-light rounded-circle text-center">
						<a class="text-light" href="https://www.youtube.com/channel/UCf_2VhO_7-7zWOdJqf0h2Rg" target="_blank"><i
							class="fab fa-youtube fa-sm fa-fw me-2"></i></a>
						</li>
					</ul>
				</div>

			</div>
		</div>

		<div class="w-100 bg-black py-3">
			<div class="container">
				<div class="row pt-2">
					<div class="col-12">
						<p class="text-center text-light">
							ARACHOCÓ &copy; 2022
						</p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->

	<!-- Start Script -->
	<script src="<?php echo base_url('assets/sitio/assets/js/jquery-1.11.0.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/sitio/assets/js/jquery-migrate-1.2.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/sitio/assets/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/sitio/assets/js/templatemo.js'); ?>"></script>
	<script src="<?php echo base_url('assets/sitio/assets/js/custom.js'); ?>"></script>
	<!-- End Script -->
</body>

</html>