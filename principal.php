<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pricipal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


<?php 
include_once 'menu.php';
include_once 'Connection.php';
session_start();
//include_once 'menu.php';
?>
<div class="container">
<?php 
if (isset($_GET["menu"])) {


	if ($_GET["menu"]=="usuarios")
	 include_once 'usuarios/usuarios.php';
	
if ($_GET["menu"]=="agregarUsuarios")
	include_once 'usuarios/agregar.php';
	
if ($_GET["menu"]=="editarUsuarios")
	include_once 'usuarios/editar.php';
	
		
	
	  if ($_GET["menu"]=="clientes")
	include_once 'clientes/clientes.php';
	
	if ($_GET["menu"]=="agregar_cliente")
	include_once 'clientes/agregar_cliente.php';
	
		if ($_GET["menu"]=="editar_cliente")
	include_once 'clientes/editar_cliente.php';
	
	
		
		if ($_GET["menu"]=="poliza")
	include_once 'poliza/poliza.php';
	
	if ($_GET["menu"]=="agregar_poliza")
	include_once 'poliza/agregar_poliza.php';
	
	if ($_GET["menu"]=="editar_poliza")
	include_once 'poliza/editar_poliza.php';
	
			
		if ($_GET["menu"]=="tipopoliza")
	include_once 'tipopoliza/tipopoliza.php';
	
	if ($_GET["menu"]=="agregar_poliza")
	include_once 'tipopoliza/agregar_tipoPoliza.php';
	
	if ($_GET["menu"]=="editar_poliza")
	include_once 'tipopoliza/editar_tipoPoliza.php';
	
	
	
		if ($_GET["menu"]=="proveedores")
	include_once 'proveedores/proveedores.php';
	
	if ($_GET["menu"]=="agregar_proveedor")
	include_once 'proveedores/agregar_proveedor.php';
	
	if ($_GET["menu"]=="editar_proveedor")
	include_once 'proveedores/editar_proveedor.php';


	  if ($_GET["menu"]=="vehiculo")
	include_once 'vehiculo/vehiculo.php';
	
	if ($_GET["menu"]=="agregar_vehiculo")
	include_once 'vehiculo/agregar_vehiculo.php';
	
		if ($_GET["menu"]=="editar_vehiculo")
	include_once 'vehiculo/editar_vehiculo.php';
	
	
	
	  if ($_GET["menu"]=="vehiculopropietario")
	include_once 'vehiculopropietario/vehiculoPropietario.php';
	
	if ($_GET["menu"]=="agregar_vehiculo")
	include_once 'vehiculopropietario/agregar_vehiculoPropietario.php';
	
		if ($_GET["menu"]=="editar_vehiculo")
	include_once 'vehiculopropietario/editar_vehiculoPropietario.php';
	
	
		if ($_GET["menu"]=="formulario_imprimir")
	  include_once 'operaciones/ventas/formulario_imprimir.php';



	if ($_GET["menu"]=="ventas")
	include_once 'operaciones/ventas/ventas.php';
	
	if ($_GET["menu"]=="agregar_venta")
	include_once 'operaciones/ventas/agregar_venta.php';
	
		if ($_GET["menu"]=="editar_venta")
	include_once 'operaciones/ventas/editar_venta.php';
	
		if ($_GET["menu"]=="compras")
	include_once 'operaciones/compras/compras.php';
	
}
else
	include_once 'inicio.php';

?>
 
</div>

</body>
</html>

