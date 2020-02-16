<?php 

include_once '../Connection.php';
$estado=0;
if($_POST["estado"]=="on")
$estado=1;


  $result=Connection::runQuery("INSERT INTO `clientes` (`DNI` ,`Nombre`,`Apellido`,`Telefono`,`Sexo`,`estado`) VALUES ('".$_POST["Dni"]."','".$_POST["Nombre"]."','".$_POST["Apellido"]."','".$_POST["Telefono"]."','".$_POST["Sexo"]."',1)");

  header ("Location: ../principal.php?menu=clientes");

?>

