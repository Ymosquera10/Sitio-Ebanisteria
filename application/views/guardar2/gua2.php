<?php 

  $conexion=mysqli_connect('localhost','root','','arachoco');

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>mostrar datos</title>
</head>
<body>

<br>

  <table border="1" >
    <tr>
      <td>id</td>
      <td>Nombrep</td>
      <td>DescriP</td>
      <td>Medidas</td>
      <td>Garantia</td> 
      <td>Valor</td>
      <td>Descuentos</td>
      <td>Promociones</td>
      <td>Imagen</td>
    </tr>

    <?php 
    foreach($agregar as $a){
     ?>

    <tr>
      <td><?php echo $a['id'] ?></td>
      <td><?php echo $a['Nombrep'] ?></td>
      <td><?php echo $a['DescriP'] ?></td>
      <td><?php echo $a['Medidas'] ?></td>
      <td><?php echo $a['Garantia'] ?></td>
      <td><?php echo $a['Valor'] ?></td>
      <td><?php echo $a['Descuentos'] ?></td>
      <td><?php echo $a['Promociones'] ?></td>
      <td><?php echo $a['Imagen'] ?></td>
    </tr>
  <?php 
  }
   ?>
  </table>

</body>
</html>