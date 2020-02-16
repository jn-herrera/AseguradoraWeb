<script>

function confirmar(id){
var resu= confirm("Desea eliminar el usuario "+id+"?");
  if(resu){
  location.href = "vehiculo/eliminar.php?id="+id;
  }
 
}

</script>

<h4>Lista Tipos de Polizas</h4>
<div align="right"> <a href="principal.php?menu=agregar_tipoPoliza"  class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Agregar</a> </div>
   <table class="table table-striped">
    <thead>
      <tr>
        <th>IDTipo</th>
        <th>Descripcion</th>
        <th>Costo</th>
		<th>Estado</th>
      </tr>
    </thead>
	
	<tbody>
<?php 

  $result=Connection::runQuery("SELECT * from tipo_poliza");
	while($row=mysqli_fetch_array($result)){
	
	echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
		<td>$row[3]</td>
		
		<td align='right'> <a href='principal.php?menu=editar_tipoPoliza&editarId=$row[0]'  class=\"btn btn-info\">Editar</a></td>
		<td align='right'> <a  onClick='confirmar($row[0])' class='btn btn-danger'>Eliminar</a></td>
		
      </tr>";
	}


?>

   </tbody>
  </table>