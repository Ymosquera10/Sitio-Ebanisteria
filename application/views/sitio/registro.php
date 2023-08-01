<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Registro</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/sitio/assets/img/favicon.jpeg');?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/sitio/assets/csss/bootstrap.min.css');?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/sitio/assets/csss/style.css');?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/sitio/assets/csss/responsive.css');?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/sitio/assets/csss/custom.css');?>">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
       
    </header>
    <!-- End Main Top -->

   

    <!-- NO ELIMINAR -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Compra</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- INICIO REGISTRO  -->
    <!-- Start Cart  -->
                            <h3>Llenar Formulario de Compra</h3>
                        </div>
                        <!---  ACTION-->
                        <form method="post" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="firstName">nombre *</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="lastName">apellido *</label>
                                    <input type="text" class="form-control" name="apellido" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="correo">correo *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="correo" placeholder="" required>
                                    <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="direccion">direccion*</label>
                                <input type="email" class="form-control" name="direccion" placeholder="">
                                <div class="invalid-feedback"> por favor ingresar direccion valida. </div>
                            </div>
                            <div class="mb-3">
                                <label for="telefono">telefono*</label>
                                <input type="text" class="form-control" name="telefono" placeholder="" required>
                                <div class="invalid-feedback"> por favor ingrse su telefono </div>
                            </div>
                            <div class="mb-3">
                                <label for="cedula">cedula*</label>
                                <input type="text" class="form-control" name="cedula" placeholder=""> </div>
                            <div class="row">

                            <!--INICIO FORMULARIO-->

                                <div class="col-md-3 mb-3">
                                    <label for="country">País *</label>
                                    <select class="wide w-100" id="country">
									<option value="Choose..." data-display="Select">Elegir A</option>
									<option value="Colombia">Colombia</option>
                                    <option value="Estados Unidos">Estados Unidos</option>
								</select>
                                    <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="state">Provincia *</label>
                                    <select class="wide w-100" id="state">
									<option data-display="Select">Elegir A</option>
                                    <option>Chocó</option>
                                    <option>Istmina</option>
									<option>California</option>
								</select>
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                                
                            </div>
                            <hr class="mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="same-address">
                                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save-info">
                                <label class="custom-control-label" for="save-info">Save this information for next time</label>
                            </div>
                            <hr class="mb-4">
                            <div class="title"> <span>PAGOS</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="credit">Tarjeta de Crédito</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="debit">Tarjeta Débito</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Nombre en la tarjeta</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required> <small class="text-muted"></small>
                                    <div class="invalid-feedback"> Name on card is required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Número de Tarjeta de Crédito</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback"> Credit card number is required </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiracion</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback"> Expiration date required </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback"> Security code required </div>
                                </div>
                    <!-- FIN FORMULARIOS   -->

                                <div class="col-md-6 mb-3">
                                    <div class="payment-icon">
                                        <ul>
                                            <li><img class="img-fluid" src="<?php echo base_url('assets/template/sitio/images/payment-icon/1.png');?>" alt=""></li>
                                            <li><img class="img-fluid" src="<?php echo base_url('assets/template/sitio/images/payment-icon/2.png');?>" alt=""></li>
                                            <li><img class="img-fluid" src="<?php echo base_url('assets/template/sitio/images/payment-icon/3.png');?>" alt=""></li>
                                            <li><img class="img-fluid" src="<?php echo base_url('assets/template/sitio/images/payment-icon/5.png');?>" alt=""></li>
                                            <li><img class="img-fluid" ="<?php echo base_url('assets/template/sitio/images/payment-icon/7.png');?>" alt=""></li>
                                        </ul>src
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-1"> </form>
                    </div>
                </div>
                
    <!--metodo de compra-->
                        <div class="col-12 d-flex shopping-box"> <a href="checkout.html" class="ml-auto btn hvr-hover">Realizar Pedido</a> </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
<!-- FIN REGISTRO -->





</body>

</html>