<?php 

include_once '../Connection.php';
$estado=0;
if($_POST["estado"]=="on")
$estado=1;


	
$result=Connection::runQuery("UPDATE `clientes` SET  `DNI`='".$_POST["Dni"]."',`Nombre`='".$_POST["Nombre"]."',`Apellido`='".$_POST["Apellido"]."',`Telefono`='".$_POST["Telefono"]."',`Sexo`='".$_POST["Sexo"]."', estado= $estado  WHERE `IDCliente` =".$_POST["codigo"]);


  header ("Location: ../principal.php?menu=clientes");

?>

