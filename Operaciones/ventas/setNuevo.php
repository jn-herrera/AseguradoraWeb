	<?php 
///header("Content-type: text/plain; charset=utf-8");

$json_web = $_POST["factura"];//@file_get_contents('php://input');


include_once("../../Connection.php");

$json1 = json_decode($json_web, true);

$request=Connection::runQueryId("INSERT INTO `ventas`(`idCliente`, `fecha`, `idUsuario`, `Total`, `tipo`) VALUES  ('".$json1['idCliente']."',now(),'".$json1['idUsuario']."','".$json1['Total']."',1 )");

$detalle_venta = $json1['detalle_venta'];
for ($i=0; $i<count($detalle_venta);$i++ ){
$request2=Connection::runQuery("INSERT INTO `detalle_ventas`( `idVenta`, `idProducto`, `cantidad`, `precio`, `subtotal`) VALUES (".$request.",".$detalle_venta[$i]['idProducto'].",".$detalle_venta[$i]['cantidad'].",".$detalle_venta[$i]['precio'].",".$detalle_venta[$i]['subTotal']." )");


Connection::runQuery("UPDATE `productos` SET `stock`= stock - ".$detalle_venta[$i]['cantidad']."  WHERE `id`=".$detalle_venta[$i]['idProducto']);
 header ("Location: ../../principal.php?menu=ventas");

}







?>