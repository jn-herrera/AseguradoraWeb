

<form action="poliza/guardar_poliza.php"  method="post">
  <div class="form-group">
    <label for="email">IDPoliza</label>
    <input type="text" class="form-control"  disabled="disabled" id="idpoliza" name="idpoliza">
  </div>
  <div class="form-group">
    <label for="pwd">Fecha Carga</label>
    <input type="text" class="form-control" id="FechaCarga" name="FechaCarga">
  </div>
  
 <div class="form-group">
    <label for="email">Fecha Inicio</label>
    <input type="text" class="form-control" id="FechaInicio" name="FechaInicio">
  </div>
   <div class="form-group">
    <label for="email">Fecha Vencimiento</label>
    <input type="text" class="form-control" id="FechaVencimiento" name="FechaVencimiento">
  </div>
   <div class="form-group">
    <label for="email">IDCliente</label>
    <input type="text" class="form-control" id="IdCliente" name="IdCliente">
  </div>
   <div class="form-group">
    <label for="email">IDVehiculo Propietario</label>
    <input type="text" class="form-control" id="IdVehiculoPropietario" name="IdVehiculoPropietario">
  </div>
   <div class="form-group">
    <label for="email">Tipo Poliza</label>
    <input type="text" class="form-control" id="tipoPoliza" name="TipoPoliza">
  </div>
   <div class="form-group">
    <label for="email">Monto Asegurado</label>
    <input type="text" class="form-control" id="montoAsegurado" name="montoAsegurado">
  </div>

  <div class="checkbox"> 
    <label><input type="checkbox" checked="checked" name="estado" >Estado</label>
  </div>
  
  <div align="right"> <button type="submit" class="btn btn-success">Guardar</button></div>
  
</form>