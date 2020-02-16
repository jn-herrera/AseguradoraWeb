
<?php 

 $result=Connection::runQuery("SELECT * FROM `vehiculopropietario` WHERE `idCliente` =".$_GET["editarId"]);
 echo "SELECT * FROM `productos` WHERE `id` =".$_GET["editarId"];
	while($row=mysqli_fetch_array($result)){
?>


<form action="vehiculopropietario/update_vehiculopropietario.php"  method="post">
 
 <input type="hidden" id="codigo" name="codigo"  value="<?php echo $row[0]; ?>"  />
 
  <div class="form-group">
  
    <label for="email">Id</label>
    <input type="text" class="form-control"   disabled="disabled" value="<?php echo $row[0]; ?>">
  </div>
  
  <div class="form-group">
    <label for="email">Descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $row[1]; ?>">
  </div>
  <div class="form-group">
    <label for="pwd">Id Categoria</label>
    <input type="text" class="form-control" id="idcategoria" name="idcategoria" value="<?php echo $row[2]; ?>">
  </div>
  
 <div class="form-group">
    <label for="email">Precio Compra</label>
    <input type="text" class="form-control" id="preciocompra" name="preciocompra" value="<?php echo $row[3]; ?>">
  </div>
   <div class="form-group">
    <label for="email">Precio Venta</label>
    <input type="text" class="form-control" id="precioventa" name="precioventa" value="<?php echo $row[4]; ?>">
  </div>
   <div class="form-group">
    <label for="email">Stock Minimo</label>
    <input type="text" class="form-control" id="stockminimo" name="stockminimo" value="<?php echo $row[5]; ?>">
  </div>
     <div class="form-group">
    <label for="email">Stock</label>
    <input type="text" class="form-control" id="stock" name="stock" value="<?php echo $row[6]; ?>">
  </div>
       <div class="form-group">
    <label for="email">Estado</label>
    <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $row[7]; ?>">
 
  <div class="checkbox"> 
    <label><input type="checkbox" checked="checked" name="estado" >Estado</label>
  </div>
  <div align="right"> <button type="submit" class="btn btn-success">Editar</button></div>
  
</form>

<?php 
}
?>