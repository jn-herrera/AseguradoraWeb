<script>

function confirmar(id){
var resu= confirm("Desea eliminar el usuario "+id+"?");
  if(resu){
  location.href = "vehiculo/eliminar.php?id="+id;
  }
 
}

</script>

<h4>Lista de Polizas</h4>
<div align="right"> <a href="principal.php?menu=agregar_poliza"  class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Agregar</a> </div>
   <table class="table table-striped">
    <thead>
      <tr>
        <th>IDPoliza</th>
        <th>FechaCarga</th>
        <th>Fecha de Inicio</th>
		<th>Fecha de Vencimiento</th>
        <th>ID Cliente</th>
		<th>IDVehiculoPropietario</th>
		<th>TipoPoliza</th>
		<th>Monto Asegurado</th>
      </tr>
    </thead>
	
	<tbody>
<?php 

  $result=Connection::runQuery("SELECT * from poliza");
	while($row=mysqli_fetch_array($result)){
	
	echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
		<td>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		<td>$row[6]</td>
		<td>$row[7]</td>
		<td align='right'> <a href='principal.php?menu=editar_poliza&editarId=$row[0]'  class=\"btn btn-info\">Editar</a></td>
		<td align='right'> <a  onClick='confirmar($row[0])' class='btn btn-danger'>Eliminar</a></td>
		
      </tr>";
	}


?>

   </tbody>
  </table>