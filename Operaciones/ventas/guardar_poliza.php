<?php 

include_once '../../Connection.php';


$request=Connection::runQueryId("INSERT INTO `poliza` (`FechaCarga`, `FechaInicio`, `FechaVencimiento`, `IDCliente`, `IDVehiculoPropietario`, `TipoPoliza`, `MontoAsegurado`, `estado`) VALUES  (now(),'".$_POST['fechaInicio']."','".$_POST['fechaHasta']."',".$_POST['cliente'].",".$_POST['vehiculo'].",'".$_POST['tipoPoliza']."'
,".$_POST['montoasegurado'].",1 )");



 header ("Location: ../../principal.php?menu=formulario_imprimir&polizaId=".$request);

?>

