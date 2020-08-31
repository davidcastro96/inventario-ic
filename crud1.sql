-- Informacion de la tabla en la BD
create database inventario;
use inventario;

create table equipment(
	id int not null auto_increment primary key,
	tipo_dispositivo varchar(100) not null,
	marca varchar(100) not null,
	modelo varchar(100) not null,
	serie varchar(100) not null,
	os varchar(100) not null,
	licencia_os varchar(100) not null,
	paq_office varchar(100) not null,
	licencia_office varchar(100) not null,
	fecha_compra varchar(100) not null,
	proveedor varchar(100) not null,
	num_activo varchar(100) not null,
	area_ubica varchar(100) not null,
	usuario_actual varchar(100) not null,
	contac_usuario_act varchar(100) not null,
	funcio_responsa varchar(100) not null,
	contact_funcio_responsa varchar(100) not null,
	created_at datetime not null,
);