<?php 

include_once '../Connection.php';
$estado=0;
if($_POST["estado"]=="on")
$estado=1;


  $result=Connection::runQuery("INSERT INTO `poliza` (`FechaCarga` ,`FechaInicio`,`FechaVencimiento`,`IDCliente`,`IDVehiculoPropietario`,`TipoPoliza`,`MontoAsegurado`,`estado`) VALUES ('".$_POST["FechaCarga"]."','".$_POST["FechaInicio"]."','".$_POST["FechaVencimiento"]."','".$_POST["IdCliente"]."','".$_POST["IdVehiculoPropietario"]."','".$_POST["TipoPoliza"]."','".$_POST["montoAsegurado"]."',1)");

  header ("Location: ../principal.php?menu=poliza");

?>

