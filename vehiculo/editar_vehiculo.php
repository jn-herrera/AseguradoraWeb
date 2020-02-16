
<?php 

 $result=Connection::runQuery("SELECT * FROM `vehiculo` WHERE `IDVehiculo` =".$_GET["editarId"]);
 //echo "SELECT * FROM `productos` WHERE `id` =".$_GET["editarId"];
	while($row=mysqli_fetch_array($result)){
?>


<form action="vehiculo/update_vehiculo.php"  method="post">
 
 <input type="hidden" id="codigo" name="codigo"  value="<?php echo $row[0]; ?>"  />
 
  <div class="form-group">
  
    <label for="email">IDVehiculo</label>
    <input type="text" class="form-control"   disabled="disabled" value="<?php echo $row[0]; ?>">
  </div>
  
  <div class="form-group">
    <label for="email">Marca</label>
    <input type="text" class="form-control" id="Marca" name="Marca" value="<?php echo $row[1]; ?>">
  </div>
  <div class="form-group">
    <label for="pwd">Modelo</label>
    <input type="text" class="form-control" id="Modelo" name="Modelo" value="<?php echo $row[2]; ?>">
  </div>
  
 <div class="form-group">
    <label for="email">Tipo</label>
    <input type="text" class="form-control" id="Tipo" name="Tipo" value="<?php echo $row[3]; ?>">
  </div>
   <div class="form-group">
    <label for="email">Valor estimado</label>
    <input type="text" class="form-control" id="ValorEstimado" name="ValorEstimado" value="<?php echo $row[4]; ?>">
  </div>
 

  <div class="checkbox"> 
    <label><input type="checkbox" checked="checked" name="estado" >Estado</label>
  </div>
  <div align="right"> <button type="submit" class="btn btn-success">Editar</button></div>
  
</form>

<?php 
}
?>