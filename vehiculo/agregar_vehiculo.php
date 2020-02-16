
<form action="vehiculo/guardar_vehiculo.php"  method="post">
  <div class="form-group">
    <label for="email">IDVehiculo</label>
    <input type="text"  disabled="disabled" class="form-control" id="id" name="id">
  </div>
  
  <div class="form-group">
    <label for="pwd">Marca:</label>
    <input type="text" class="form-control" id="Marca" name="Marca">
  </div>
  
 <div class="form-group">
    <label for="email">Modelo</label>
    <input type="text" class="form-control" id="Modelo" name="Modelo">
  </div>
   <div class="form-group">
    <label for="email">Tipo</label>
    <input type="text" class="form-control" id="Tipo" name="Tipo">
  </div>
   <div class="form-group">
    <label for="email">Valor Estimado</label>
    <input type="text" class="form-control" id="Valorestimado" name="ValorEstimado">
  </div>

  <div class="checkbox"> 
    <label><input type="checkbox" checked="checked" name="estado" >Estado</label>
  </div>
  
  <div align="right"> <button type="submit" class="btn btn-success">Guardar</button></div>
  
</form>