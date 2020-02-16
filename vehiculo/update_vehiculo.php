<?php 

include_once '../Connection.php';
$estado=0;
if($_POST["estado"]=="on")
$estado=1;
	$result=Connection::runQuery("UPDATE `vehiculo` SET  `Marca`='".$_POST["Marca"]."',`Modelo`='".$_POST["Modelo"]."',`Tipo`='".$_POST["Tipo"]."',`ValorEstimado`='".$_POST["ValorEstimado"]."', estado= $estado  WHERE `IdVehiculo` =".$_POST["codigo"]);


  header ("Location: ../principal.php?menu=vehiculo");

?>

