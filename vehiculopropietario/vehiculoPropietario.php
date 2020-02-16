<script>

function confirmar(id){
var resu= confirm("Desea eliminar el usuario "+id+"?");
  if(resu){
  location.href = "vehiculo/eliminar.php?id="+id;
  }
 
}

</script>

<h4>Lista de VehiculosPropietarios</h4>
<div align="right"> <a href="principal.php?menu=agregar_vehiculoPropietario"  class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Agregar</a> </div>
   <table class="table table-striped">
    <thead>
      <tr>
        <th>IDCliente</th>
        <th>IDVehiculo</th>
        <th>Dominio</th>
		<th>Chasis</th>
		<th>Estado</th>
      </tr>
    </thead>
	
	<tbody>
<?php 

  $result=Connection::runQuery("SELECT * from vehiculopropietario");
	while($row=mysqli_fetch_array($result)){
	
	echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
		<td>$row[3]</td>
		<td>$row[4]</td>
		
		<td align='right'> <a href='principal.php?menu=editar_vehiculoPropietario&editarId=$row[0]'  class=\"btn btn-info\">Editar</a></td>
		<td align='right'> <a  onClick='confirmar($row[0])' class='btn btn-danger'>Eliminar</a></td>
		
      </tr>";
	}


?>

   </tbody>
  </table>