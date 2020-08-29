<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from equipment where id = ".$_GET["id"];
$query = $con->query($sql1);
$equipment = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $equipment=$r;
  break;
}

  }
?>

<?php if($equipment!=null):?>

<form role="form" method="post" action="php/actualizar.php" autocomplete="off">
<div class="form-group">
    <label for="tipo_dispositivo">Tipo de Dispositivo</label>
    <input type="text" class="form-control" value="<?php echo $equipment->tipo_dispositivo; ?>" name="tipo_dispositivo" required>
  </div>
  <div class="form-group">
    <label for="marca">Marca</label>
    <input type="text" class="form-control" value="<?php echo $equipment->marca; ?>" name="marca" required>
  </div>
  <div class="form-group">
    <label for="modelo">Modelo</label>
    <input type="text" class="form-control" value="<?php echo $equipment->modelo; ?>" name="modelo" required>
  </div>
  <div class="form-group">
    <label for="serie">Serial</label>
    <input type="text" class="form-control" value="<?php echo $equipment->serie; ?>" name="serie" required>
  </div>
  <div class="form-group">
    <label for="os">Sistema Operativo</label>
    <input type="text" class="form-control" value="<?php echo $equipment->os; ?>" name="os" required>
  </div>
  <div class="form-group">
    <label for="licencia_os">Licencia OS</label>
    <input type="text" class="form-control" value="<?php echo $equipment->licencia_os; ?>" name="licencia_os" required>
  </div>
  <div class="form-group">
    <label for="paq_office">Version Office</label>
    <input type="text" class="form-control" value="<?php echo $equipment->paq_office; ?>" name="paq_office" required>
  </div>
  <div class="form-group">
    <label for="licencia_office">Licencia Office</label>
    <input type="text" class="form-control" value="<?php echo $equipment->licencia_office; ?>" name="licencia_office" required>
  </div>
  <div class="form-group">
    <label for="fecha_compra">Fecha de Compra</label>
    <input type="text" class="form-control" value="<?php echo $equipment->fecha_compra; ?>" name="fecha_compra" required>
  </div>
  <div class="form-group">
    <label for="proveedor">Proveedor</label>
    <input type="text" class="form-control" value="<?php echo $equipment->proveedor; ?>" name="proveedor" required>
  </div>
  <div class="form-group">
    <label for="num_activo">Numero Activo</label>
    <input type="text" class="form-control" value="<?php echo $equipment->num_activo; ?>" name="num_activo" required>
  </div>
  <div class="form-group">
    <label for="area_ubica">Área de Ubicación</label>
    <input type="text" class="form-control" value="<?php echo $equipment->area_ubica; ?>" name="area_ubica" required>
  </div>
  <div class="form-group">
    <label for="usuario_actual">Usuario Actual</label>
    <input type="text" class="form-control" value="<?php echo $equipment->usuario_actual; ?>" name="usuario_actual" required>
  </div>
  <div class="form-group">
    <label for="contac_usuario_act">Contacto Usuario</label>
    <input type="text" class="form-control" value="<?php echo $equipment->contac_usuario_act; ?>" name="contac_usuario_act" required>
  </div>
  <div class="form-group">
    <label for="funcio_responsa">Funcionario a Cargo</label>
    <input type="text" class="form-control" value="<?php echo $equipment->funcio_responsa; ?>" name="funcio_responsa" required>
  </div>
  <div class="form-group">
    <label for="contact_funcio_responsa">Contacto Funcionario</label>
    <input type="text" class="form-control" value="<?php echo $equipment->contact_funcio_responsa; ?>" name="contact_funcio_responsa" required>
  </div>
<input type="hidden" name="id" value="<?php echo $equipment->id; ?>">
  <button type="submit" class="btn btn-dark">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>