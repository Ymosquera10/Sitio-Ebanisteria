<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Yoni</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/admin/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/admin/css/sb-admin-2.min.css');?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Agregar Productos</h1>
                            </div>
                            
                            <form action="<?php echo base_url('index.php/guardar2');?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group ">
                                    <input type="text" class="form-control form-control-user" name="Nombrep" required 
                                        placeholder="Nombrep">
                                </div>

                                 

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="DescriP" required 
                                        placeholder="DescriP">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="Medidas" required 
                                        placeholder="Medidas">
                                </div>
                                           
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="Garantia" required 
                                        placeholder="Garantia">
                                </div>
                               
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="Valor" required 
                                        placeholder="Valor">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="Descuentos" required 
                                        placeholder="Descuentos">
                                </div>



                                  <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="Promociones" required 
                                        placeholder="Promociones">
                                </div>

                                 <div class="form-group">
                                    <div class="custon-file">
                                    <input type="file" class="form-control form-control-user" name="Imagen" accept="image/*" required 
                                        placeholder="Imagen">
                                  </div>
                                </div>
                                </div>

                                
                              
                                   <div class="row">  
                                <div class="col-sm-12 col-md-12 col-xs-12">  
                                    <div class="form-group">  
                                        <div class="form-check">  
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>  
                                            <label class="form-check-label" for="invalidCheck">  
                                                Aceptar los términos y condiciones.  
                                            </label>                                                
                                        </div>  
                                    </div>  
                                </div>  
                            </div>  
                                    
                                </div>


                                </div>

                                  <div class="col-lg-12 col-md-12 col-xs-12"> 
                                    <div class="form-group" >
                                        <div class="form-check" >
                                    <input type="Submit">
                                        </div>
                                    </div>
                                  </div>
                                   
                                <hr>
                                                            </form>
                            <hr>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/admin/js/sb-admin-2.min.js');?>"></script>

</body>

</html>