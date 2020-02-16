<?php 

include_once '../Connection.php';
$estado=0;
if($_POST["estado"]=="on")
$estado=1;
$result=Connection::runQuery("UPDATE `productos` SET  `descripcion`='".$_POST["descripcion"]."',`idCategoria`='".$_POST["idcategoria"]."',`precioCompra`='".$_POST["preciocompra"]."',`precioVenta`='".$_POST["precioventa"]."',`stockMinimo`='".$_POST["stockminimo"]."',`stock`='".$_POST["stock"]."', estado= $estado  WHERE `id` =".$_POST["codigo"]);


  header ("Location: ../principal.php?menu=productos");

?>

