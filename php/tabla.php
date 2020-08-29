<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from equipment";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-sm table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
	  <th scope="col-xs-1">Tipo de Dispositivos</th>
      <th scope="col-xs-1">Marca</th>
	  <th scope="col-xs-1">Modelo</th>
	  <th scope="col-xs-1">Serial</th>
      <th scope="col-xs-1">Sistema Operativo</th>
      <th scope="col-xs-1">Licencia OS</th>
	  <th scope="col-xs-1">Version Office</th>
	  <th scope="col-xs-1">Licencia Office</th>
      <th scope="col-xs-1">Fecha de Compra</th>
      <th scope="col-xs-1">Proveedor</th>
	  <th scope="col-xs-1">Numero Activo</th>
	  <th scope="col-xs-1">Área de Ubicación</th>
	  <th scope="col-xs-1">Usuario Actual y Contacto</th>
	  <th scope="col-xs-1">Funcionario a Cargo y Contacto</th>
	  <th scope="col-xs-1">Acciones</th>
    </tr>
  </thead>	

<?php while ($r=$query->fetch_array()):?>
<tr>
	<td scope="col-xs-1"><?php echo $r["tipo_dispositivo"]; ?></td>
	<td scope="col-xs-1"><?php echo $r["marca"]; ?></td>
	<td scope="col-xs-1"><?php echo $r["modelo"]; ?></td>
	<td scope="col-xs-1"><?php echo $r["serie"]; ?></td>
	<td scope="col-xs-1"><?php echo $r["os"]; ?></td>
	<td scope="col-xs-1"><?php echo $r["licencia_os"]; ?></td>
	<td scope="col-xs-1"><?php echo $r["paq_office"]; ?></td>
	<td scope="col-xs-1"><?php echo $r["licencia_office"]; ?></td>
	<td scope="col-xs-1"><?php echo $r["fecha_compra"]; ?></td>
	<td scope="col-xs-1"><?php echo $r["proveedor"]; ?></td>
	<td scope="col-xs-1"><?php echo $r["num_activo"]; ?></td>
	<td scope="col-xs-1"><?php echo $r["area_ubica"]; ?></td>
	<td scope="col-xs-1"><?php echo $r["usuario_actual"]; ?><br><?php echo $r["contac_usuario_act"]; ?></td>
	<td scope="col-xs-1"><?php echo $r["funcio_responsa"]; ?><br><?php echo $r["contact_funcio_responsa"]; ?></td>
	<td style="width:155px;">
		<a href="./editar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
