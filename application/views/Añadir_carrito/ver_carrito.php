<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Yoni</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/admin/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/admin/Agregar_productos');?>">
    <link
        href="<?php echo base_url('fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i');?>"     rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/admin/css/sb-admin-2.min.css');?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
<body>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="table-dark">
                    <tr>

                        <th>Nombrep</th>
                        <th>DescriP</th>
                        <th>Medidas</th>
                        <th>Garantia</th>
                        <th>Valor</th>
                        <th>Descuentos</th>
                        <th>Promociones</th>
                        <th>ACCION</th>
                        <!--<th>ACCION</th>-->
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($listando as $a) { ?>
                    <tr>

                        <td>
                            <?php echo $a->Nombrep; ?>
                        </td>
                        <td>
                            <?php echo $a->DescriP; ?>
                        </td>
                        <td>
                            <?php echo $a->Medidas; ?>
                        </td>
                        <td>
                            <?php echo $a->Garantia; ?>
                        </td>
                        <td>
                            <?php echo $a->Valor; ?>
                        </td>
                        <td>
                            <?php echo $a->Descuentos; ?>
                        </td>
                        <td>
                            <?php echo $a->Promociones; ?>
                        </td>
                        


                        <td>
                            <a type='submit' class='btn btn-danger'
                                href='<?php echo base_url() . "index.php/eliminar2/". $a->_id; ?>'>Eliminar Producto</a>
                        </td>
                        <!--<td>
                            <a type='submit' class='btn btn-danger'
                                href="<?php echo base_url('index.php/sitio'); ?>"></a>
                        </td>-->



                    </tr>


                    <?php } ?>
                </tbody> <!-- 2 -->
            </table>

            </dssiv>
        </div>

</body>

</html>