<?php 
include_once '../Connection.php';
$result=Connection::runQuery("DELETE FROM `clientes` WHERE `IDCliente` = ".$_GET["id"]);
if($result){

 header("location: http://localhost/iesa/aseguradora/principal.php?menu=clientes");
 
 
 include_once ('http://localhost/iesa/aseguradora/principal.php?menu=clientes');
}

?>