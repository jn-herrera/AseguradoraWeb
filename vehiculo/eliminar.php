<?php 
include_once '../Connection.php';
$result=Connection::runQuery("DELETE FROM `productos` WHERE `id` = ".$_GET["id"]);
if($result){

 header("location: http://localhost/iesa/login_oficial/principal.php?menu=productos");
 
 
 include_once ('http://localhost/iesa/login_oficial/principal.php?menu=productos');
}

?>