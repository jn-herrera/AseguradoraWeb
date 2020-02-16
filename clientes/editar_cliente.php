

<?php 

 $result=Connection::runQuery("SELECT * FROM `clientes` WHERE `IDCliente` =".$_GET["editarId"]);
 //echo "SELECT * FROM `clientes` WHERE `id` =".$_GET["editarId"];
	while($row=mysqli_fetch_array($result)){
?>


<form action="clientes/update_cliente.php"  method="post">
 
 <input type="hidden" id="codigo" name="codigo"  value="<?php echo $row[0]; ?>"  />
 
  <div class="form-group">
  
    <label for="email">IDCliente</label>
    <input type="text" class="form-control"   disabled="disabled" value="<?php echo $row[0]; ?>">
  </div>
  
  <div class="form-group">
    <label for="email">DNI</label>
    <input type="text" class="form-control" id="Dni" name="Dni" value="<?php echo $row[1]; ?>">
  </div>
  <div class="form-group">
    <label for="pwd">Nombre</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $row[2]; ?>">
  </div>
  
 <div class="form-group">
    <label for="email">Apellido</label>
    <input type="text" class="form-control" id="Apellido" name="Apellido" value="<?php echo $row[3]; ?>">
  </div>
   <div class="form-group">
    <label for="email">Telefono</label>
    <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo $row[4]; ?>">
  </div>
   <div class="form-group">
    <label for="email">Sexo</label>
    <input type="text" class="form-control" id="Sexo" name="Sexo" value="<?php echo $row[5]; ?>">
  </div>
 
  <div class="checkbox"> 
    <label><input type="checkbox" checked="checked" name="estado" >Estado</label>
  </div>
  
  <div align="right"> <button type="submit" class="btn btn-success">Editar</button></div>
  
</form>

<?php 
}
?>