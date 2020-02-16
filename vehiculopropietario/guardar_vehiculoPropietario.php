<?php 

include_once '../Connection.php';
$estado=0;
if($_POST["estado"]=="on")
$estado=1;


  $result=Connection::runQuery("INSERT INTO `productos`(`descripcion` ,`idCategoria`,`precioCompra`,`precioVenta`,`stockMinimo`,`stock`,`estado`) VALUES ('".$_POST["descripcion"]."','".$_POST["idCategoria"]."','".$_POST["precioCompra"]."','".$_POST["precioVenta"]."','".$_POST["stockMinimo"]."','".$_POST["stock"]."',1)");

  header ("Location: ../principal.php?menu=vehiculopropietario");

?>

