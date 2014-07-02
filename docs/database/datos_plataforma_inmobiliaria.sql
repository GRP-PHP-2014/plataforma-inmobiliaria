
-- ROLES NECESARIOS
insert into AuthItem (name , type , description, bizrule,data)
values('director' , 2, '', '', '');

insert into AuthItem (name , type , description, bizrule,data)
values('administrativo' , 2, '', '', '');

insert into AuthItem (name , type , description, bizrule,data)
values('agente' , 2, '', '', '');

INSERT INTO `usuarios` VALUES 
('afontes','director@php2014.com','$1$Tjv7tqTJ$.O.123LlOlq6FnNFM7LN8.','Alejandro','Fontes',NULL,1,'director'),
('mrodriguez','mrodriguez@gmail.com','$1$UQuRVKk0$wUrX3YsP6/bxHFKToL.7i.','Mauricio','Rodriguez',NULL,NULL,'director'),
('pdesosa','pdesosa@gmail.com','$1$TymVjAQg$Qo8A1wC7/nGXArlrJKFx80','Pablo','De Sosa',NULL,NULL,'director');


INSERT INTO `AuthAssignment` VALUES 
('director','afontes','',''),
('director','mrodriguez','',''),
('director','pdesosa','','');

-- PARAMETROS DEL SISTEMA
insert into parametros(nombre,descripcion,valor) values ('cantidadBienesPortada' , 'Cantidad de bienes a mostrar en la portada del sitio' , '6');
insert into parametros(nombre,descripcion,valor) values ('emailAdminitrador' , 'Email del administrador del sitio' , 'admin@inmobiliaria.com');
insert into parametros(nombre,descripcion,valor) values ('directorioBaseImagenes' , 'Ruta base para las imagenes subidas en el sistema de archivos' , '/plataforma-inmobiliaria');

insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (1,null,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (2,null,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (3,null,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (4,null,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (5,null,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (6,null,'2014-06-28');

insert into estados_inmueble (nombre, descripcion) values ('Pendiente de publicacion' , '');
insert into estados_inmueble (nombre, descripcion) values ('Publicada' , '');
insert into estados_inmueble (nombre, descripcion) values ('Ocupada' , '');