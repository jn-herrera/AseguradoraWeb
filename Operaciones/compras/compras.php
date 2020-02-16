
<script>

var productos = new Array();

function  agregarProducto(){

var table = document.getElementById("tablaPedido");
 var row = table.insertRow(1);

   var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
 


   var e = document.getElementById("cbproducto");
   var cod_producto = e.options[e.selectedIndex].value;
   var desc_producto = e.options[e.selectedIndex].text;

  // var precio =desc_producto.substr(0,10);
   var array= desc_producto.split("$");
   
    cell1.innerHTML =cod_producto;
	cell2.innerHTML =array[0];
	cell3.innerHTML =document.getElementById("cantidad").value;
	cell4.innerHTML =array[1];
	cell5.innerHTML =Number(array[1]) * Number(document.getElementById("cantidad").value);
	cell6.innerHTML ="<button type='button' class='btn btn-danger' onclick='eliminarFila(this)'>Eliminar</button>";
	
	  var total = 0;

  for(i=1;table.rows[i]; i++) {
    total += Number(table.rows[i].cells[4].innerHTML);
    document.getElementById("resultado").value = total;

	}
	
var items = {
		  idProducto: cod_producto,
		  cantidad: document.getElementById("cantidad").value,
		  precio:array[1],
		  subTotal:Number(array[1]) * Number(document.getElementById("cantidad").value)
		};	
productos.push(items);	
	

}


function  confirmar(){

	var f = new Date();
	
	  var factura = {
	  idProveedor: document.getElementById("poroveedor_id").value,
	  Nrofactura: document.getElementById("nrofactura").value,
	  fecha: f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear(),
	  idUsuario: <?php echo  $_SESSION["usuarioId"]; ?>,	
	  Total:document.getElementById("resultado").value,
	  tipo:"1",
	  detalle_compras:productos // 
	};
document.getElementById("factura").value=JSON.stringify(factura);

document.getElementById("myForm").submit();

console.log(JSON.stringify(factura));

}


function eliminarFila(btn) {
var row = btn.parentNode.parentNode; 
if( confirm("Desea eliminar la fila "+row.rowIndex)){
     row.parentNode.removeChild(row); 
	 productos.splice(row.rowIndex,1);// elimina el elimento indicado con la cantidad indicada
	 
	 }
 } 



</script>

  <div class="panel panel-primary">
    <div class="panel-heading" align="center"><h2>Compras</h2></div>
    <div class="panel-body">
      <form class="form-horizontal" action="Operaciones/compras/setNuevo.php" method="post" id="myForm">
	  <input name="factura" type="hidden" id="factura" />
         <div class="form-group">
         <!--<label class="control-label col-sm-2" for="fecha"></label>-->
          <div class="col-sm-10"  align="right">
  <script>
var f = new Date();
document.write("Fecha: "+f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
</script>
          </div>
        </div>
		
		
		   <div class="form-group">
          <label for="sel1" class="control-label col-sm-2" >Proveedor:</label>
        <div class="col-sm-10">
          <select class="form-control" id="poroveedor_id" name="poroveedor_id">
          <option></option>
		  
		  
        <?php
          $direccion="";
            $result1=Connection::runQuery("SELECT * from proveedores");
              while($row1=mysqli_fetch_array($result1)){
               
			   echo " <option value='$row1[0]' >$row1[0]-$row1[1]</option> ";

                  $direccion=$row1[2];
              }
        ?>
		
          </select>
        </div>
		   </div>
		   
		   
		   
		
		   <div class="form-group">
          <label for="sel1" class="control-label col-sm-2" >Nro factura:</label>
        <div class="col-sm-10">
        <div class="col-sm-4"><input type="nrofactura" class="form-control" id="nrofactura"  name="nrofactura" value=""></div>
        </div>
        </div>
		

		
       <div class="form-group">
          <label class="control-label col-sm-2" for="producto">Producto:</label>
          <div class="col-sm-10">
            <select class="form-control" id="cbproducto">
          <option></option>
        <?php

            $result1=Connection::runQuery("SELECT * from productos");
              while($row1=mysqli_fetch_array($result1)){
                echo " <option value='$row1[0]' >$row1[1] $ $row1[4]</option> ";

              }
        ?>
          </select>
          </div>
        </div>
		
        <div class="form-group">
          <label class="control-label col-sm-2" for="cantart">Cantidad Articulo:</label>
          <div class="row">
            <div class="col-sm-3"><input type="cantart" class="form-control" id="cantidad" name="cantidad"></div>
		
    
            <div class="col-sm-2"><button type="button" onClick="agregarProducto()" class="btn btn-primary"> + </button></div>
			
          </div>
        </div>

      
      <table class="table table-bordered" id="tablaPedido">
        <thead>
        <tr>
        <th>Codigo</th>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
        <th>Subtotal</th>
        <th>Eliminar</th>
          </tr>
        </thead>
		<tbody>
    

    	</tbody>
      </table>
	  
 <div>
      <label> <h4>TOTAL</h4> </label>
      <input type = "text" id = "resultado"/>
  </div>


     <div class="form-group" align="right">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="button" class="btn btn-primary" onclick="confirmar()">Registrar compra</button>
          </div>
        </div>
      </form>
    </div>
    </div>
</div>
  </div>
