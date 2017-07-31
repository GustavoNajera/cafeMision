create database cafemisiondb;
use cafemisiondb;
create table if not exists cf_empresa (
  cf_historia longText,
  cf_produccion longText,
  cf_mision longText,
  cf_vision longText,
  cf_responsabilidad_social longText,
  cf_historia_in longText,
  cf_produccion_in longText,
  cf_mision_in longText,
  cf_vision_in longText,
  cf_responsabilidad_social_in longText
)
INSERT INTO `cf_empresa` (`cf_historia`, `cf_produccion`, `cf_mision`, `cf_vision`, `cf_responsabilidad_social`, `cf_historia_in`, `cf_produccion_in`, `cf_mision_in`, `cf_vision_in`, `cf_responsabilidad_social_in`) VALUES
('historia', 'produccion', 'mision', 'vision', 'social', 'a ingles', 'aa ingles', 'aaa ingles', 'aaaa ingles', 'aaaaa ingles');
DELIMITER $$
CREATE PROCEDURE obtenerInformacion() BEGIN select cf_historia,cf_produccion,cf_mision,cf_vision,cf_responsabilidad_social from cf_empresa; END $$
CREATE PROCEDURE obtenerInformacionIngles() BEGIN select cf_historia_in,cf_produccion_in,cf_mision_in,cf_vision_in,cf_responsabilidad_social_in from cf_empresa; END $$
CREATE PROCEDURE actualizarInformacion(IN historia longText,IN produccion longText,IN mision longText, IN vision longText,IN social longText) BEGIN update cf_empresa set cf_historia=historia,cf_produccion=produccion,cf_mision=mision,cf_vision=vision,cf_responsabilidad_social=social; END $$
CREATE PROCEDURE actualizarInformacionIngles(IN historia longText,IN produccion longText,IN mision longText, IN vision longText,IN social longText) BEGIN update cf_empresa set cf_historia_in=historia,cf_produccion_in=produccion,cf_mision_in=mision,cf_vision_in=vision,cf_responsabilidad_social_in=social; END $$
DELIMITER $$
create table if not exists cf_proceso_produccion (
   cf_id int auto_increment primary key,
   cf_nombre longText,
   cf_descripcion longText,
   cf_nombre_in longText,
   cf_descripcion_in longText  
)

INSERT INTO `cf_proceso_produccion` (`cf_id`, `cf_nombre`, `cf_descripcion`, `cf_nombre_in`, `cf_descripcion_in`) VALUES
(1, 'nombre proceso 1 actualizado', 'descripcion proceso 1 actualizado', 'proceso 1 ingles', 'descripcion proceso 1 ingles'),
(2, 'proceso 2', 'decripcion proceso 2', 'descripcion proceso 2 ingles', 'descripcion proceso 2 ingles');
DELIMITER $$
CREATE PROCEDURE obtenerEtapaProceso() BEGIN select cf_id,cf_nombre,cf_descripcion from cf_proceso_produccion; END $$
CREATE PROCEDURE obtenerEtapaProcesoIngles() BEGIN select cf_id,cf_nombre_in,cf_descripcion_in from cf_proceso_produccion; END $$
CREATE PROCEDURE actualizarEtapaProceso(IN id int,IN nombre longText,IN descripcion longText)
BEGIN update cf_proceso_produccion set cf_nombre=nombre,cf_descripcion=descripcion where cf_id = id ; END $$
CREATE PROCEDURE actualizarEtapaProcesoIngles(IN id int,IN nombre longText,IN descripcion longText)
BEGIN update cf_proceso_produccion set cf_nombre_in=nombre,cf_descripcion_in=descripcion where cf_id = id; END $$
CREATE PROCEDURE eliminarEtapaProceso(IN id int) BEGIN delete from  cf_proceso_produccion where  cf_id = id; END $$
CREATE PROCEDURE insertarEtapaProceso(IN nombre longText,IN descripcion longText,IN nombre_in longText,IN descripcion_in longText) 
BEGIN insert into cf_proceso_produccion VALUES (0,nombre,descripcion,nombre_in,descripcion_in); END $$
DELIMITER $$


create table if not exists cf_imagenes_produccion (
   cf_id int auto_increment primary key,
   cf_id_proceso int,
   cf_nombre longText,
   cf_ruta longText,
   FOREIGN KEY (cf_id_proceso) REFERENCES cf_proceso_produccion(cf_id)
)



create table if not exists cf_redes_sociales (
   cf_id int auto_increment primary key,
   cf_nombre longText,
   cf_enlace longText
)
DELIMITER $$
CREATE PROCEDURE optenerRedSocial() BEGIN select * from cf_redes_sociales; END $$
CREATE PROCEDURE actualizarRedSocial(IN id int,IN nombre longText,IN enlace longText)
BEGIN update cf_redes_sociales set cf_nombre=nombre,cf_enlace=enlace where cf_id = id; END $$
CREATE PROCEDURE eliminarRedSocial(IN id int) BEGIN delete from  cf_redes_sociales where  cf_id = id; END $$
CREATE PROCEDURE insertarRedSocial(IN nombre longText,IN enlace longText) 
BEGIN insert into cf_redes_sociales VALUES (0,nombre,enlace); END $$
DELIMITER $$
create table if not exists cf_socios (
   cf_id int auto_increment primary key,
   cf_nombre longText,
   cf_descripcion longText,
   cf_descripcion_in longText,
   cf_enlace longText
)
DELIMITER $$
CREATE PROCEDURE optenerSocios() BEGIN select cf_id,cf_nombre,cf_descripcion,cf_enlace from cf_socios; END $$
CREATE PROCEDURE optenerSociosIngles() BEGIN select cf_id,cf_nombre,cf_descripcion_in,cf_enlace from cf_socios; END $$
CREATE PROCEDURE actualizarSocios(IN id int,IN nombre longText,IN descripcion longText,IN enlace longText)
BEGIN update cf_socios set cf_nombre=nombre,cf_descripcion=descripcion,cf_enlace=enlace where cf_id = id; END $$
CREATE PROCEDURE actualizarSociosIngles(IN id int,IN nombre longText,IN enlace longText)
BEGIN update cf_socios set cf_nombre=nombre,cf_descripcion_in=descripcion,cf_enlace=enlace where cf_id = id; END $$
CREATE PROCEDURE eliminarSocios(IN id int) BEGIN delete from  cf_socios where  cf_id = id; END $$
CREATE PROCEDURE insertarSocios(IN nombre longText,IN descripcion longText,IN descripcion_in longText,IN enlace longText) 
BEGIN insert into cf_socios VALUES (0,nombre,descripcion,descripcion_in,enlace); END $$
DELIMITER $$

create table if not exists cf_imagenes (
   cf_id int auto_increment primary key,
   cf_nombre longText,
   cf_descripcion longText,
   cf_nombre_in longText,
   cf_descripcion_in longText, 
   cf_tipo int
)

DELIMITER $$
CREATE PROCEDURE optenerImagenesPorTipo(IN tipo int) BEGIN select cf_id,cf_nombre,cf_descripcion,cf_seccion from cf_imagenes where cf_tipo=tipo; END $$
CREATE PROCEDURE optenerImagenesPorTipoIngles(IN tipo int) BEGIN select cf_id,cf_nombre_in,cf_descripcion_in,cf_seccion from cf_imagenes where cf_tipo=tipo; END $$
CREATE PROCEDURE eliminarImagenes(IN id int) BEGIN delete from  cf_imagenes where  cf_id = id; END $$
CREATE PROCEDURE insertarImagenesPorTipo(IN nombre longText,IN descripcion longText,IN nombre_in longText, IN descripcion_in longText,IN tipo int) 
BEGIN insert into cf_imagenes VALUES (0,nombre,descripcion,nombre_,descripcion_in,tipo); END $$
DELIMITER $$


create table if not exists cf_paginas_amigas(
   cf_id int auto_increment primary key,
   cf_nombre longText,
   cf_enlace longText
)
create table if not exists cf_contacto (
   cf_id int auto_increment primary key,
   cf_telefono int,
   cf_correo longText,
   cf_direccion longText,
   cf_direccion_in longText
)

create table if not exists cf_contacto_galeria (
   cf_id int auto_increment primary key,
   cf_nombre int,
   cf_descripcion longText,
   cf_nombre_in int,
   cf_descripcion_in longText
)
create table if not exists cf_productos (
   cf_id int auto_increment primary key,
   cf_nombre longText,
   cf_descripcion longText,
   cf_nombre_in longText,
   cf_descripcion_in longText  
)