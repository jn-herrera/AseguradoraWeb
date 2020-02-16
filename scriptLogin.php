<?php
// El nombre del host, usualmente localhost
include_once 'Connection.php';
session_start();


//Cogemos los datos que nos llegan desde el formulario
//( lo tendremos que crear)
$usuario   = $_POST['UserName'];
$clave = $_POST['Password'];





$row = mysqli_fetch_array(Connection::runQueryLogin("SELECT * FROM  usuarios WHERE  usuario like '$usuario' AND clave like '$clave' "));

$empresa = explode("/", $_SERVER["REQUEST_URI"]);

if ( strlen($row["id"])>0 && strcasecmp($empresa[1],$usuario )==0)
{
   
    // titulo 
    //$titulo=$row['id_usuario'];
   $_SESSION["autenticado"] = "si";
   $_SESSION["usuario"] =$row["empresa"];
   $_SESSION["id_usuario"] = $row["id"];
  header ("Location: ../Login.php");
}
else
{
// echo $sql;
   $_SESSION["u"] = "Las credenciales ingresada no es valida";
    header("location:../index.php?login=error");

}


?>