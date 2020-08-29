<html>
	<head>
		<title>Actualizar y ver</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
		<h3>Registros</h3>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-dark">Agregar un registro</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Cerrar</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregar.php">
  <div class="form-group">
    <label for="tipo_dispositivo">Tipo de Dispositivo</label>
    <input type="text" class="form-control" name="tipo_dispositivo" required placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="marca">Marca</label>
    <input type="text" class="form-control" name="marca" required placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="modelo">Modelo</label>
    <input type="text" class="form-control" name="modelo" required placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="serie">Serial</label>
    <input type="text" class="form-control" name="serie" require placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="os">Sistema Operativo</label>
    <input type="text" class="form-control" name="os" require placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="licencia_os">Licencia OS</label>
    <input type="text" class="form-control" name="licencia_os" require placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="paq_office">Version Office</label>
    <input type="text" class="form-control" name="paq_office" require placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="licencia_office">Licencia Office</label>
    <input type="text" class="form-control" name="licencia_office" require placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="fecha_compra">Fecha de Compra</label>
    <input type="text" class="form-control" name="fecha_compra" require placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="proveedor">Proveedor</label>
    <input type="text" class="form-control" name="proveedor" require placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="num_activo">Numero Activo</label>
    <input type="text" class="form-control" name="num_activo" require placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="area_ubica">Área de Ubicación</label>
    <input type="text" class="form-control" name="area_ubica" require placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="usuario_actual">Usuario Actual</label>
    <input type="text" class="form-control" name="usuario_actual" require placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="contac_usuario_act">Contacto Usuario</label>
    <input type="text" class="form-control" name="contac_usuario_act" require placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="funcio_responsa">Funcionario a Cargo</label>
    <input type="text" class="form-control" name="funcio_responsa" require placeholder="requerido">
  </div>
  <div class="form-group">
    <label for="contact_funcio_responsa">Contacto Funcionario</label>
    <input type="text" class="form-control" name="contact_funcio_responsa" require placeholder="requerido">
  </div>

  <button type="submit" class="btn btn-dark">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>