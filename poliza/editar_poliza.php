

<?php 

 $result=Connection::runQuery("SELECT * FROM `clientes` WHERE `IDCliente` =".$_GET["editarId"]);
 //echo "SELECT * FROM `clientes` WHERE `id` =".$_GET["editarId"];
	while($row=mysqli_fetch_array($result)){
?>


<form action="poliza/update_poliza.php"  method="post">
 
 <input type="hidden" id="codigo" name="codigo"  value="<?php echo $row[0]; ?>"  />
 
  <div class="form-group">
  
    <label for="email">IDPoliza</label>
    <input type="text" class="form-control"   disabled="disabled" value="<?php echo $row[0]; ?>">
  </div>
  
  <div class="form-group">
    <label for="email">Fecha de Carga</label>
    <input type="text" class="form-control" id="FechaCarga" name="FechaCarga" value="<?php echo $row[1]; ?>">
  </div>
  <div class="form-group">
    <label for="pwd">Fecha de Vencimiento</label>
    <input type="text" class="form-control" id="FechaVencimiento" name="FechaVencimiento" value="<?php echo $row[2]; ?>">
  </div>
  
 <div class="form-group">
    <label for="email">IDCliente</label>
    <input type="text" class="form-control" id="IdCliente" name="IdCliente" value="<?php echo $row[3]; ?>">
  </div>
   <div class="form-group">
    <label for="email">ID Vehiculo Propietario</label>
    <input type="text" class="form-control" id="IdVehiculoPropietario" name="IdVehiculoPropietario" value="<?php echo $row[4]; ?>">
  </div>
   <div class="form-group">
    <label for="email">Tipo de Poliza</label>
    <input type="text" class="form-control" id="TipoPoliza" name="TipoPoliza" value="<?php echo $row[5]; ?>">
  </div>
  <div class="form-group">
    <label for="email">Monto Asegurado</label>
    <input type="text" class="form-control" id="MontoAsegurado" name="MontoAsegurado" value="<?php echo $row[6]; ?>">
  </div>
 
  <div class="checkbox"> 
    <label><input type="checkbox" checked="checked" name="estado" >Estado</label>
  </div>
  
  <div align="right"> <button type="submit" class="btn btn-success">Editar</button></div>
  
</form>

<?php 
}
?>