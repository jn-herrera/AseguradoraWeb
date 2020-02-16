
<form action="vehiculopropietario/guardar_vehiculoPropietario.php"  method="post">
  <div class="form-group">
    <label for="email">ID</label>
    <input type="text"  disabled="disabled" class="form-control" id="id" name="id">
  </div>
  <div class="form-group">
    <label for="pwd">Descripcion:</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion">
  </div>
  
 <div class="form-group">
    <label for="email">Id Categoria</label>
    <input type="text" class="form-control" id="idCategoria" name="idCategoria">
  </div>
   <div class="form-group">
    <label for="email">Precio Compra</label>
    <input type="text" class="form-control" id="precioCompra" name="precioCompra">
  </div>
   <div class="form-group">
    <label for="email">Precio Venta</label>
    <input type="text" class="form-control" id="precioVenta" name="precioVenta">
  </div>
   <div class="form-group">
    <label for="email">Stock Minimo</label>
    <input type="text" class="form-control" id="stockMinimo" name="stockMinimo">
  </div>
   <div class="form-group">
    <label for="email">Stock</label>
    <input type="text" class="form-control" id="stock" name="stock">
  </div>
  <div class="checkbox"> 
    <label><input type="checkbox" checked="checked" name="estado" >Estado</label>
  </div>
  
  <div align="right"> <button type="submit" class="btn btn-success">Guardar</button></div>
  
</form>