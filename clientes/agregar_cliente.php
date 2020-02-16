
<form action="clientes/guardar_cliente.php"  method="post">
  <div class="form-group">
    <label for="email">IDCliente</label>
    <input type="text" class="form-control"  disabled="disabled" id="usuario" name="usuario">
  </div>
  <div class="form-group">
    <label for="pwd">DNI</label>
    <input type="text" class="form-control" id="Dni" name="Dni">
  </div>
  
 <div class="form-group">
    <label for="email">Nombre</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre">
  </div>
   <div class="form-group">
    <label for="email">Apellido</label>
    <input type="text" class="form-control" id="Apellido" name="Apellido">
  </div>
   <div class="form-group">
    <label for="email">Telefono</label>
    <input type="text" class="form-control" id="Telefono" name="Telefono">
  </div>
   <div class="form-group">
    <label for="email">Sexo</label>
    <input type="text" class="form-control" id="Sexo" name="Sexo">
  </div>

  <div class="checkbox"> 
    <label><input type="checkbox" checked="checked" name="estado" >Estado</label>
  </div>
  
  <div align="right"> <button type="submit" class="btn btn-success">Guardar</button></div>
  
</form>