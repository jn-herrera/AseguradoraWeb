<script>

function confirmar(id){
var resu= confirm("Desea eliminar el usuario "+id+"?");
  if(resu){
  location.href = "vehiculo/eliminar.php?id="+id;
  }
 
}

</script>

<h4>Lista de Vehiculos</h4>
<div align="right"> <a href="principal.php?menu=agregar_vehiculo"  class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Agregar</a> </div>
   <table class="table table-striped">
    <thead>
      <tr>
        <th>IDVehiculo</th>
        <th>Marca</th>
        <th>Modelo</th>
		<th>Tipo</th>
        <th>Valor Estimado</th>
		<th>Estado</th>
      </tr>
    </thead>
	
	<tbody>
<?php 

  $result=Connection::runQuery("SELECT * from vehiculo");
	while($row=mysqli_fetch_array($result)){
	
	echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
		<td>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		<td align='right'> <a href='principal.php?menu=editar_vehiculo&editarId=$row[0]'  class=\"btn btn-info\">Editar</a></td>
		<td align='right'> <a  onClick='confirmar($row[0])' class='btn btn-danger'>Eliminar</a></td>
		
      </tr>";
	}


?>

   </tbody>
  </table>