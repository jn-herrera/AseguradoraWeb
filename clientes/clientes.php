<script>

function confirmar(id){
var resu= confirm("Desea eliminar el cliente "+id+"?");
  if(resu){
  location.href = "clientes/eliminar.php?id="+id;
  }
 
}

</script>

<h4>Lista de Clientes</h4>
<div align="right"> <a href="principal.php?menu=agregar_cliente"  class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Agregar</a> </div>
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Dni</th>
        <th>Nombre</th>
		<th>Apellido</th>
        <th>Telefono</th>
		<th>Sexo</th>
		<th>estado</th>
      </tr>
    </thead>
	
	<tbody>
<?php 

  $result=Connection::runQuery("SELECT * from clientes");
	while($row=mysqli_fetch_array($result)){
	
	echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
		<td>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		<td>$row[6]</td>
		<td align='right'> <a href='principal.php?menu=editar_cliente&editarId=$row[0]'  class=\"btn btn-info\">Editar</a></td>
		<td align='right'> <a  onClick='confirmar($row[0])' class='btn btn-danger'>Eliminar</a></td>
		
      </tr>";
	}

//SELECT `id`, `usuario`, `clave`, `TipoUsuario`, `estado`

?>

   </tbody>
  </table>