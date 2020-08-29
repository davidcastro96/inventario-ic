<?php

if(!empty($_POST)){
	if(isset($_POST["tipo_dispositivo"]) &&isset($_POST["marca"]) &&isset($_POST["modelo"]) &&isset($_POST["serie"]) &&isset($_POST["os"]) &&isset($_POST["licencia_os"]) &&isset($_POST["paq_office"]) &&isset($_POST["licencia_office"]) &&isset($_POST["fecha_compra"]) &&isset($_POST["proveedor"]) &&isset($_POST["num_activo"]) &&isset($_POST["area_ubica"]) &&isset($_POST["usuario_actual"]) &&isset($_POST["contac_usuario_act"]) &&isset($_POST["funcio_responsa"]) &&isset($_POST["contact_funcio_responsa"])){
		if($_POST["tipo_dispositivo"]!=""&& $_POST["marca"]!=""&& $_POST["modelo"]!=""&& $_POST["serie"]!=""&& $_POST["os"]!=""&& $_POST["licencia_os"]!=""&& $_POST["paq_office"]!=""&& $_POST["licencia_office"]!=""&& $_POST["fecha_compra"]!=""&& $_POST["proveedor"]!=""&& $_POST["num_activo"]!=""&& $_POST["area_ubica"]!=""&& $_POST["usuario_actual"]!=""&& $_POST["contac_usuario_act"]!=""&& $_POST["funcio_responsa"]!=""&& $_POST["contact_funcio_responsa"]!=""){
			include "conexion.php";
			
			$sql = "insert into equipment(tipo_dispositivo,marca,modelo,serie,os,licencia_os,paq_office,licencia_office,fecha_compra,proveedor,num_activo,area_ubica,usuario_actual,contac_usuario_act,funcio_responsa,contact_funcio_responsa,create_at) value (\"$_POST[tipo_dispositivo]\",\"$_POST[marca]\",\"$_POST[modelo]\",\"$_POST[serie]\",\"$_POST[os]\",\"$_POST[licencia_os]\",\"$_POST[paq_office]\",\"$_POST[licencia_office]\",\"$_POST[fecha_compra]\",\"$_POST[proveedor]\",\"$_POST[num_activo]\",\"$_POST[area_ubica]\",\"$_POST[usuario_actual]\",\"$_POST[contac_usuario_act]\",\"$_POST[funcio_responsa]\",\"$_POST[contact_funcio_responsa]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}