

<?php 

 $result=Connection::runQuery("SELECT poliza.*,clientes.*,vehiculopropietario.* FROM `poliza`,clientes,vehiculopropietario WHERE vehiculopropietario.IdCliente= poliza.IDCliente and poliza.IDCliente=clientes.IDCliente and `IDPoliza` =".$_GET["polizaId"]);

	while($row=mysqli_fetch_array($result)){
?>

ciones
IDPoliza
FechaCarga
FechaInicio
FechaVencimiento
IDCliente
IDVehiculoPropietario
TipoPoliza
MontoAsegurado
estado


IDCliente
DNI
Nombre
Apellido
Telefono
Sexo
estado


IdCliente
IDVehiculo
Dominio
Chasis
estado


 Mostrar todo	|			Número de filas:	Filtrar filas:
Buscar en esta tabla

<div class="container">
  <h2>Formulario a imprimir</h2>
  <p></p>            
  <table class="table">
    <thead>
      <tr>
        <th width="155">Datos del cliente</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nombre</td>
        <td width="309"><input type="text" id="nombre" name="nombre" disabled="disabled"  value="<?php echo $row["Nombre"]; ?>"  /></td>
      </tr>
      <tr>
        <td>Apellido</td>
        <td><input type="text" id="apellido" name="apellido" disabled="disabled"  value="<?php echo $row["Apellido"]; ?>"  /></td>
      </tr>
      <tr>
        <td>Telefono</td>
        <td><input type="text" id="telefono" name="telefono" disabled="disabled"  value="<?php echo $row["Telefono"]; ?>"  /></td>
      </tr>
	   <tr>
        <td>Sexo</td>
        <td><input type="text" id="sexo" name="sexo" disabled="disabled"  value="<?php echo $row["Sexo"]; ?>"  /></td>
      </tr>
	   </tr>
	   <tr>
        <td>Estado</td>
        <td><input type="text" id="estado" name="estado" disabled="disabled"  value="<?php echo $row["estado"]; ?>"  /></td>
      </tr>
	  
	   </tr>
	
	  
	  
	     </tr>
	   <tr>
        <td colspan="2"><h2> Datos del vehiculo <center><h2></td>
      </tr>
	  </tr>
	   <tr>
        <td>IDVehiculo</td>
        <td><input type="text" id="idvehiculo" name="idvehiculo" disabled="disabled"   value="<?php echo $row["IDVehiculo"]; ?>"  /></td>
      </tr>
	    </tr>
	   <tr>
        <td>Marca</td>
        <td><input type="text" id="marca" name="marca" disabled="disabled"  value="<?php echo $row["Dominio"]; ?>"  /></td>
      </tr>
	    </tr>
	   <tr>
        <td>Modelo</td>
        <td><input type="text" id="modelo" name="modelo" disabled="disabled"  value="<?php echo $row["Chasis"]; ?>"  /></td>
      </tr>
	    </tr>
	   <tr>
        <td>Tipo</td>
        <td><input type="text" id="tipo" name="tipo" disabled="disabled"  value="<?php echo datosTipo( $row["IDVehiculo"]); ?>"  /></td>
      </tr>
	    </tr>
	   <tr>
        <td>ValorEstimado</td>
        <td><input type="text" id="valorestimado" disabled="disabled"  name="valorestimado"  value="<?php echo datosTipo1( $row["IDVehiculo"]); ?>"  /></td>
      </tr>
	    </tr>
	   <tr>
        <td>Estado</td>
        <td><input type="text" id="estado" name="estado" disabled="disabled"   value="<?php echo $row["estado"]; ?>"  /></td>
      </tr>
	  
	     </tr>
	   <tr>
        <td colspan="2"><h2>Datos de poliza <h2></td>
      </tr>
	  
	  
	   <tr>
        <td>IDPoliza</td>
        <td><input type="text" id="idpoliza" name="idpoliza" disabled="disabled"  value="<?php echo $row["IDPoliza"]; ?>"  /></td>
      </tr>
	  
	   <tr>
        <td>FechaCarga</td>
        <td><input type="text" id="fechacarga" name="fechacarga" disabled="disabled"   value="<?php echo $row["FechaCarga"]; ?>"  /></td>
      </tr>
	  
	   <tr>
        <td>FechaInicio</td>
        <td><input type="text" id="fechainicio" name="fechainicio" disabled="disabled"  value="<?php echo $row["FechaInicio"]; ?>"  /></td>
	   </tr>
	   <tr>
        <td>FechaVencimiento</td>
        <td><input type="text" id="fechavencimiento" name="fechavencimiento" disabled="disabled"   value="<?php echo $row["FechaVencimiento"]; ?>"  /></td>
      </tr>
	   <tr>
        <td>IDCliente</td>
        <td><input type="text" id="idcliente" name="idcliente" disabled="disabled"  value="<?php echo $row["IDCliente"]; ?>"  /></td>
      </tr>
	   <tr>
        <td>IDVehiculoPropietario</td>
        <td><input type="text" id="idvehiculopropietario" name="idvehiculopropietario" disabled="disabled"   value="<?php echo $row["IDVehiculoPropietario"]; ?>"  /></td>
      </tr>
	   <tr>
        <td>TipoPoliza</td>
        <td><input type="text" id="tipopoliza" name="tipopoliza" disabled="disabled"   value="<?php echo $row["TipoPoliza"]; ?>"  /></td>
      </tr>
	   <tr>
        <td>MontoAsegurado</td>
        <td><input type="text" id="montoasegurado" name="montoasegurado" disabled="disabled"  value="<?php echo $row["MontoAsegurado"]; ?>"  /></td>
      </tr>
	   <tr>
        <td>Estado</td>
        <td><input type="text" id="estado" name="estado" disabled="disabled"   value="<?php echo $row["estado"]; ?>"  /></td>
      </tr>
    </tbody>
  </table>
  
  <div align="right"> <button type="submit" class="btn btn-success">Imprimir</button></div>
<?php 
}

 function datosTipo($id_vehiculo){
   $tipo="";
 
  $result1=Connection::runQuery("SELECT * FROM `vehiculo` WHERE `IDVehiculo`  =".$id_vehiculo);
  
  //echo "SELECT * FROM `vehiculo` WHERE `IDVehiculo`  =".$id_vehiculo;
  while($row1=mysqli_fetch_array($result1)){
  $tipo=$row1["Tipo"];
  }
  
 return $tipo;
 }
 
 
 function datosTipo1($id_vehiculo){
   $valor="";
 
  $result2=Connection::runQuery("SELECT * FROM `vehiculo` WHERE `ValorEstimado`  =".$id_vehiculo);
  
  //echo "SELECT * FROM `vehiculo` WHERE `IDVehiculo`  =".$id_vehiculo;
  while($row2=mysqli_fetch_array($result2)){
  $valor=$row2["ValorEstimado"];
  }

 return $valor;
 }
 
 



?>
