<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from equipment where name like '%$_GET[s]%' or lastname like '%$_GET[s]%' or address like '%$_GET[s]%' or email like '%$_GET[s]%' or phone like '%$_GET[s]%' ";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-sm table-hover">
<thead class="thead-dark">
<th scope=".col-">Nombre</th>
	  <th scope=".col-">Apellido</th>
	  <th scope=".col-">Email</th>
      <th scope=".col-">Dirección</th>
      <th scope=".col-">Nombre</th>
	  <th scope=".col-">Apellido</th>
	  <th scope=".col-">Email</th>
      <th scope=".col-">Dirección</th>
      <th scope=".col-">Nombre</th>
	  <th scope=".col-">Apellido</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
<td scope=".col-"><?php echo $r["name"]; ?></td>
	<td scope=".col-"><?php echo $r["lastname"]; ?></td>
	<td scope=".col-"><?php echo $r["email"]; ?></td>
	<td scope=".col-"><?php echo $r["address"]; ?></td>
	<td scope=".col-"><?php echo $r["phone"]; ?></td>
	<td scope=".col-"><?php echo $r["name"]; ?></td>
	<td scope=".col-"><?php echo $r["lastname"]; ?></td>
	<td scope=".col-"><?php echo $r["email"]; ?></td>
	<td scope=".col-"><?php echo $r["address"]; ?></td>
	<td style="width:150px;">
		<a href="./editar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
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
