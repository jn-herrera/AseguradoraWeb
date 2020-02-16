<div class="panel panel-primary">
    <div class="panel-heading" align="center"><h2>Registrar - Nueva Poliza</h2></div>
    <div class="panel-body">
      <form class="form-horizontal" action="Operaciones/ventas/guardar_poliza.php" method="post" id="myForm">
	  
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
          <label for="sel1" class="control-label col-sm-2" >Clientes:</label>
        <div class="col-sm-10">
          <select class="form-control" id="cliente" name="cliente">
          <option></option>
        <?php
          $direccion="";
            $result1=Connection::runQuery("SELECT * from clientes");
              while($row1=mysqli_fetch_array($result1)){
               
			   echo " <option value='$row1[0]' >$row1[0] - $row1[2]  - $row1[3]</option> ";

                  $direccion=$row1[2];
              }
        ?>
          </select>
        </div>
        </div>
		
		   <div class="form-group">
          <label for="sel1" class="control-label col-sm-2" >Vehiculo:</label>
        <div class="col-sm-10">
          <select class="form-control" id="vehiculo" name="vehiculo">
          <option></option>
        <?php
          $direccion="";
            $result1=Connection::runQuery("SELECT * from vehiculo");
              while($row1=mysqli_fetch_array($result1)){
               
			   echo "<option value='$row1[0]' >$row1[0] - $row1[1]  ";

                  $direccion=$row1[2];
              }
        ?>
          </select>
        </div>
        </div>
		
	
		
		
        <div class="form-group">
          <label class="control-label col-sm-2" for="direccion">Fecha desde:</label>
		  <div class="row">
          <div class="col-sm-4"><input type="Date" class="form-control" id="fechaInicio"  name="fechaInicio" value=""></div>
          
        </div>
		</div>
		
        <div class="form-group">
          <label class="control-label col-sm-2" for="direccion">Fecha Hasta:</label>
		  <div class="row">
          <div class="col-sm-4"><input type="Date" class="form-control" id="fechaHasta"  name="fechaHasta" value=""></div>
          
        </div>
		</div>
       <div class="form-group">
          <label class="control-label col-sm-2" for="producto">Tipo de Poliza:</label>
          <div class="col-sm-10">
            <select class="form-control" id="tipoPoliza" name="tipoPoliza">
          <option></option>
        <?php

            $result1=Connection::runQuery("SELECT * from tipo_poliza");
              while($row1=mysqli_fetch_array($result1)){
                echo " <option value='$row1[0]' >$row1[0] - $row1[1] - $$row1[2]</option> ";

              }
        ?>
          </select>
          </div>
        </div>
		
        <div class="form-group">
          <label class="control-label col-sm-2" for="cantart">Monto asegurado:</label>
          <div class="row">
            <div class="col-sm-3"><input type="cantart" class="form-control" id="montoasegurado" name="montoasegurado"  value=""></div>
			
			
			
		
    
          </div>
        </div>

     

     <div class="form-group" align="right">
          <div class="col-sm-offset-2 col-sm-10">
          
		  
		   <div align="right"> <button type="submit" class="btn btn-success">Guardar</button></div>
			 
          </div>
        </div>
   <!-- </form>-->
    </div>
    </div>
</div>
  </div>
