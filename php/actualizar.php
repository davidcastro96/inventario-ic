<?php

if(!empty($_POST)){
	if(isset($_POST["tipo_dispositivo"]) &&isset($_POST["marca"]) &&isset($_POST["modelo"]) &&isset($_POST["serie"]) &&isset($_POST["os"]) &&isset($_POST["licencia_os"]) &&isset($_POST["paq_office"]) &&isset($_POST["licencia_office"]) &&isset($_POST["fecha_compra"]) &&isset($_POST["proveedor"]) &&isset($_POST["num_activo"]) &&isset($_POST["area_ubica"]) &&isset($_POST["usuario_actual"]) &&isset($_POST["contac_usuario_act"]) &&isset($_POST["funcio_responsa"]) &&isset($_POST["contact_funcio_responsa"])){
		if($_POST["tipo_dispositivo"]!=""&& $_POST["marca"]!=""&& $_POST["modelo"]!=""&& $_POST["serie"]!=""&& $_POST["os"]!=""&& $_POST["licencia_os"]!=""&& $_POST["paq_office"]!=""&& $_POST["licencia_office"]!=""&& $_POST["fecha_compra"]!=""&& $_POST["proveedor"]!=""&& $_POST["num_activo"]!=""&& $_POST["area_ubica"]!=""&& $_POST["usuario_actual"]!=""&& $_POST["contac_usuario_act"]!=""&& $_POST["funcio_responsa"]!=""&& $_POST["contact_funcio_responsa"]!=""){
			include "conexion.php";
			
			$sql = "update equipment set tipo_dispositivo=\"$_POST[tipo_dispositivo]\",marca=\"$_POST[marca]\",modelo=\"$_POST[modelo]\",serie=\"$_POST[serie]\",os=\"$_POST[os]\",licencia_os=\"$_POST[licencia_os]\",paq_office=\"$_POST[paq_office]\",licencia_office=\"$_POST[licencia_office]\",fecha_compra=\"$_POST[fecha_compra]\",proveedor=\"$_POST[proveedor]\",num_activo=\"$_POST[num_activo]\",area_ubica=\"$_POST[area_ubica]\",usuario_actual=\"$_POST[usuario_actual]\",contac_usuario_act=\"$_POST[contac_usuario_act]\",funcio_responsa=\"$_POST[funcio_responsa]\",contact_funcio_responsa=\"$_POST[contact_funcio_responsa]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>