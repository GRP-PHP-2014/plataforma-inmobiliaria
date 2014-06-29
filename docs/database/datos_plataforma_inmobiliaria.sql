
-- ROLES NECESARIOS
insert into AuthItem (name , type , description, bizrule,data)
values('director' , 2, '', '', '');

insert into AuthItem (name , type , description, bizrule,data)
values('administrativo' , 2, '', '', '');

insert into AuthItem (name , type , description, bizrule,data)
values('agente' , 2, '', '', '');


-- USUARIO DIRECTOR
-- usuario: director
-- contrasenia: dr
insert into usuarios (usuario,email,contrasenia,nombre,apellido,ultimo_ingreso,habilitado)
values('director', 'director@php2014.com','$1$krg0WTeF$xI2URyXc.wDDh/sFW/d/7/' , 'juan','perez',null,true);
update usuarios set rol = 'director' where usuario = 'director';

-- ASIGNACION DE ROL PARA USUARIO DIRECTOR
insert into AuthAssignment (itemname,userid,bizrule,data)
values('director','director','','');

-- PARAMETROS DEL SISTEMA
insert into parametros(nombre,descripcion,valor) values ('cantidadBienesPortada' , 'Cantidad de bienes a mostrar en la portada del sitio' , '6');
insert into parametros(nombre,descripcion,valor) values ('emailAdminitrador' , 'Email del administrador del sitio' , 'admin@inmobiliaria.com');
insert into parametros(nombre,descripcion,valor) values ('directorioBaseImagenes' , 'Ruta base para las imagenes subidas en el sistema de archivos' , 'C:\\uploads');



insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (1,1,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (2,1,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (3,1,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (4,1,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (5,1,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (6,1,'2014-06-28');

