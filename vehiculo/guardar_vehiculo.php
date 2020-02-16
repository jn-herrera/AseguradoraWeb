<?php 

include_once '../Connection.php';
$estado=0;
if($_POST["estado"]=="on")
$estado=1;


  $result=Connection::runQuery("INSERT INTO `vehiculo`(`Marca` ,`Modelo`,`Tipo`,`ValorEstimado`,`estado`) VALUES ('".$_POST["Marca"]."','".$_POST["Tipo"]."','".$_POST["valorEstimado"]."',1)");

  header ("Location: ../principal.php?menu=vehiculo");

?>

