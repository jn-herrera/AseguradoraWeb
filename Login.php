<?php 
include_once 'Connection.php';
session_start();
$usuario   = $_POST['usuario'];
$clave = $_POST['clave'];

$resultado=Connection::runQuery("SELECT * FROM  usuarios WHERE  usuario like '$usuario' AND clave like '$clave' ");
$row = mysqli_fetch_array($resultado);

if ( strlen($row["id"])>0){
  $_SESSION["autenticado"] = "si";
  $_SESSION["usuarioId"] = $row["id"];
  $_SESSION["nombre"] = $row["usuario"];
  
 header ("Location: principal.php");
}else{

 header ("Location: index.php");
 //echo "El usuario NO ES correcto";
}



?>