Delete From `destacado_inmueble`;
Delete From `inmuebles`;
Delete From `estados_inmueble`;
Delete From `parametros`;
Delete From `AuthAssignment`;
Delete From `clientes`;
Delete From `usuarios`;
Delete From `auditoria`;
Delete From `AuthItem`;
Delete From `barrios`;
Delete From `ciudades`;
Delete From `departamentos`;
Delete From `tipo_notificacion`;


alter table inmuebles          auto_increment=0;
alter table estados_inmueble   auto_increment=0;
alter table destacado_inmueble auto_increment=0;
alter table parametros         auto_increment=0;
alter table AuthAssignment     auto_increment=0;
alter table clientes           auto_increment=0;
alter table auditoria          auto_increment=0;
alter table usuarios           auto_increment=0;
alter table AuthItem           auto_increment=0;
alter table barrios            auto_increment=0;
alter table ciudades           auto_increment=0;
alter table departamentos      auto_increment=0;
alter table tipo_notificacion  auto_increment=0;


insert into tipo_notificacion (id,nombre,descripcion) values (1,'Basica','Basica');
insert into tipo_notificacion (id,nombre,descripcion) values (2,'Urgente','Urgente');


insert into departamentos (id,nombre) values (1,'Montevideo');
insert into departamentos (id,nombre) values (2,'Canelones');
insert into departamentos (id,nombre) values (3,'Soriano');
insert into departamentos (id,nombre) values (4,'Treinta y Tres');
insert into departamentos (id,nombre) values (5,'Flores');
insert into departamentos (id,nombre) values (6,'Florida');
insert into departamentos (id,nombre) values (7,'Artigas');
insert into departamentos (id,nombre) values (8,'Tacuarembo');
insert into departamentos (id,nombre) values (9,'Cerro Largo');
insert into departamentos (id,nombre) values (10,'Colonia');
insert into departamentos (id,nombre) values (11,'Lavalleja');
insert into departamentos (id,nombre) values (12,'Maldonado');
insert into departamentos (id,nombre) values (13,'Paysandú');
insert into departamentos (id,nombre) values (14,'Río Negro');
insert into departamentos (id,nombre) values (15,'Rivera');
insert into departamentos (id,nombre) values (16,'Rocha');
insert into departamentos (id,nombre) values (17,'Salto');
insert into departamentos (id,nombre) values (18,'San José');


insert into ciudades (id,id_departamento,nombre) values (1,1,'Montevideo');

insert into ciudades (id,id_departamento,nombre) values (1,1,'Bella Unión');
insert into ciudades (id,id_departamento,nombre) values (2,1,'Carmelo');
insert into ciudades (id,id_departamento,nombre) values (3,1,'Chuy');
insert into ciudades (id,id_departamento,nombre) values (4,1,'Delta del Tigre');
insert into ciudades (id,id_departamento,nombre) values (5,1,'Dolores	Soriano');
insert into ciudades (id,id_departamento,nombre) values (6,1,'El Pinar');
insert into ciudades (id,id_departamento,nombre) values (7,1,'Fray Bentos');
insert into ciudades (id,id_departamento,nombre) values (8,1,'La Paz');
insert into ciudades (id,id_departamento,nombre) values (9,1,'Las Piedras');
insert into ciudades (id,id_departamento,nombre) values (10,1,'Lomas de Solymar');
insert into ciudades (id,id_departamento,nombre) values (11,1,'Nueva Helvecia');
insert into ciudades (id,id_departamento,nombre) values (12,1,'Pando');
insert into ciudades (id,id_departamento,nombre) values (13,1,'Paso de Carrasco');
insert into ciudades (id,id_departamento,nombre) values (14,1,'Paso de los Toros');
insert into ciudades (id,id_departamento,nombre) values (15,1,'Progreso');
insert into ciudades (id,id_departamento,nombre) values (16,1,'Río Branco');
insert into ciudades (id,id_departamento,nombre) values (17,1,'San Carlos');
insert into ciudades (id,id_departamento,nombre) values (18,1,'Santa Lucia');
insert into ciudades (id,id_departamento,nombre) values (19,1,'Solymar');
insert into ciudades (id,id_departamento,nombre) values (20,1,'Trinidad');
insert into ciudades (id,id_departamento,nombre) values (21,1,'Young');


insert into barrios (id,nombre,id_ciudad) values (1,'La Blanqueada',1);
insert into barrios (id,nombre,id_ciudad) values (2,'Aguada',1);
insert into barrios (id,nombre,id_ciudad) values (3,'Barrio Sur',1);
insert into barrios (id,nombre,id_ciudad) values (4,'Palermo',1);
insert into barrios (id,nombre,id_ciudad) values (5,'Buceo',1);
insert into barrios (id,nombre,id_ciudad) values (6,'Carrasco',1);
insert into barrios (id,nombre,id_ciudad) values (7,'Centro',1);
insert into barrios (id,nombre,id_ciudad) values (8,'Cerro',1);
insert into barrios (id,nombre,id_ciudad) values (9,'Cordón',1);
insert into barrios (id,nombre,id_ciudad) values (10,'Parque Rodó',1);
insert into barrios (id,nombre,id_ciudad) values (11,'Pocitos',1);
insert into barrios (id,nombre,id_ciudad) values (12,'Prado',1);
insert into barrios (id,nombre,id_ciudad) values (13,'Punta Carretas',1);
insert into barrios (id,nombre,id_ciudad) values (14,'Punta Gorda',1);
insert into barrios (id,nombre,id_ciudad) values (15,'Cordón',1);
insert into barrios (id,nombre,id_ciudad) values (16,'Cordón',1);


-- ROLES NECESARIOS

insert into AuthItem (name , type , description, bizrule, data)
values('director' , 2, 'director', '', '');

insert into AuthItem (name , type , description, bizrule, data)
values('administrativo' , 2, 'administrativo', '', '');

insert into AuthItem (name , type , description, bizrule, data)
values('agente' , 2, 'agente', '', '');



INSERT INTO `usuarios` VALUES 
('afontes',   'director@php2014.com',   '$1$Tjv7tqTJ$.O.123LlOlq6FnNFM7LN8.', 'Alejandro', 'Fontes',    NULL, 1, 'director'),
('mrodriguez','mrodriguez@gmail.com',   '$1$UQuRVKk0$wUrX3YsP6/bxHFKToL.7i.', 'Mauricio',  'Rodriguez', NULL, 1, 'director'),
('pdesosa',   'pdesosa@gmail.com',      '$1$TymVjAQg$Qo8A1wC7/nGXArlrJKFx80', 'Pablo',     'De Sosa',   NULL, 1, 'director'),
('msteffen',  'desarrollogx@gmail.com', '$1$Ky..LQ..$6.XgdmFxdeac9JwrA0LZY/', 'Mauro',     'Steffen',   NULL, 1, 'director');


-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`id`, `fecha`, `objeto`, `operacion`, `descripcion`, `usuario`) VALUES
(1, '2014-07-10 03:59:12',  'usuario',  'login',  '', 'afontes'),
(2, '2014-07-10 04:02:24',  'usuario',  'login',  '', 'afontes'),
(3, '2014-07-10 04:32:16',  'usuario',  'login',  '', 'afontes'),
(4, '2014-07-10 04:55:42',  'usuario',  'login',  '', 'afontes'),
(5, '2014-07-10 05:54:52',  'usuario',  'login',  '', 'afontes'),
(6, '2014-07-10 05:56:47',  'inmueble', 'alta',  '1', 'afontes'),
(7, '2014-07-10 06:00:53',  'inmueble', 'alta',  '1', 'afontes'),
(8, '2014-07-11 07:23:14',  'usuario',  'login',  '', 'afontes'),
(9, '2014-07-10 07:59:12',  'usuario',  'login',  '', 'afontes'),
(10, '2014-07-10 08:02:24', 'usuario',  'login',  '', 'Mauricio'),
(11, '2014-07-10 08:32:16', 'usuario',  'login',  '', 'Mauricio'),
(12, '2014-07-10 08:55:42', 'usuario',  'login',  '', 'Mauricio'),
(13, '2014-07-10 09:54:52', 'usuario',  'login',  '', 'Mauricio'),
(14, '2014-07-10 09:56:47', 'inmueble', 'alta',  '1', 'Mauricio'),
(15, '2014-07-10 10:00:53', 'inmueble', 'alta',  '1', 'Mauricio');


INSERT INTO `AuthAssignment` VALUES 
('director','afontes','',''),
('director','mrodriguez','',''),
('director','pdesosa','','');

insert into clientes (id , email , nombre, apellido, direccion,comentarios)
values(1, 'hugo@gmail.com' , 'Hugo', 'Donald', 'Av Italia 1635', 'Buen Comprador');

insert into clientes (id , email , nombre, apellido, direccion,comentarios)
values(2, 'paco@gmail.com' , 'Paco', 'Donald', 'Av Italia 1635', 'Buen Comprador');

insert into clientes (id , email , nombre, apellido, direccion,comentarios)
values(3, 'luis@gmail.com' , 'Luis', 'Donald', 'Av Italia 1635', 'Buen Comprador');

-- PARAMETROS DEL SISTEMA


insert into parametros(nombre,descripcion,valor) values ('cantidadBienesPortada' , 'Cantidad de bienes a mostrar en la portada del sitio' , '6');
insert into parametros(nombre,descripcion,valor) values ('emailAdminitrador' , 'Email del administrador del sitio' , 'admin@inmobiliaria.com');
insert into parametros(nombre,descripcion,valor) values ('directorioBaseImagenes' , 'Ruta base para las imagenes subidas en el sistema de archivos' , '/plataforma-inmobiliaria');





insert into estados_inmueble (id, nombre, descripcion) values (1, 'Pendiente de publicacion' , '');
insert into estados_inmueble (id, nombre, descripcion) values (2, 'Publicada' , '');
insert into estados_inmueble (id, nombre, descripcion) values (3, 'Ocupada' , '');


-- Volcado de datos para la tabla `inmuebles`
--


INSERT INTO `inmuebles` (`id`, `titulo`, `descripcion`, `tipo_inmueble`, `vista_al_mar`, `tiene_calefaccion`, `gastos_comunes`, `anio_construccion_aproximado`, `coord_latitud`, `coord_longitud`, `cant_banios`, `mts2_edificados`, `cant_plantas_casa`, `es_propiedad_horizontal`, `cant_dormitorios`, `numero_de_piso`, `tiene_ascensor`, `tiene_porteria`, `tiene_portero_electrico`, `tiene_vigilancia`, `tipo_local`, `tipo_local_observacion`, `tiene_planta_alta`, `altura_salon_principal`, `cant_plantas_local`, `tiene_estacionamiento`, `tiene_deposito`, `potencia_contratada`, `fk_estado`, `precio_publicacion`, `operacion_publicacion`, `direccion_corta`, `direccion_larga`, `id_departamento`, `id_ciudad`, `id_barrio`) VALUES
(1, 'Casa', 'Casa', 'apartamento', 0, 0, 90, 2014, '-4148659.8740464', '-6250739.2614183', NULL, 25, NULL, 0, 1, 2, 0, 0, 0, 0, '', '', 1, NULL, NULL, 0, 0, '', 1, 800, 'alquiler', 'Gregorio Funes', NULL, NULL, NULL, NULL);

INSERT INTO `inmuebles` (`id`, `titulo`, `descripcion`, `tipo_inmueble`, `vista_al_mar`, `tiene_calefaccion`, `gastos_comunes`, `anio_construccion_aproximado`, `coord_latitud`, `coord_longitud`, `cant_banios`, `mts2_edificados`, `cant_plantas_casa`, `es_propiedad_horizontal`, `cant_dormitorios`, `numero_de_piso`, `tiene_ascensor`, `tiene_porteria`, `tiene_portero_electrico`, `tiene_vigilancia`, `tipo_local`, `tipo_local_observacion`, `tiene_planta_alta`, `altura_salon_principal`, `cant_plantas_local`, `tiene_estacionamiento`, `tiene_deposito`, `potencia_contratada`, `fk_estado`, `precio_publicacion`, `operacion_publicacion`, `direccion_corta`, `direccion_larga`, `id_departamento`, `id_ciudad`, `id_barrio`) VALUES
(2, 'Casa', 'Casa', 'apartamento', 0, 0, 90, 2014, '-4148659.8740464', '-6250739.2614183', NULL, 25, NULL, 0, 1, 2, 0, 0, 0, 0, '', '', 1, NULL, NULL, 0, 0, '', 1, 800, 'alquiler', 'Gregorio Funes', NULL, NULL, NULL, NULL);

INSERT INTO `inmuebles` (`id`, `titulo`, `descripcion`, `tipo_inmueble`, `vista_al_mar`, `tiene_calefaccion`, `gastos_comunes`, `anio_construccion_aproximado`, `coord_latitud`, `coord_longitud`, `cant_banios`, `mts2_edificados`, `cant_plantas_casa`, `es_propiedad_horizontal`, `cant_dormitorios`, `numero_de_piso`, `tiene_ascensor`, `tiene_porteria`, `tiene_portero_electrico`, `tiene_vigilancia`, `tipo_local`, `tipo_local_observacion`, `tiene_planta_alta`, `altura_salon_principal`, `cant_plantas_local`, `tiene_estacionamiento`, `tiene_deposito`, `potencia_contratada`, `fk_estado`, `precio_publicacion`, `operacion_publicacion`, `direccion_corta`, `direccion_larga`, `id_departamento`, `id_ciudad`, `id_barrio`) VALUES
(3, 'Casa', 'Casa', 'apartamento', 0, 0, 90, 2014, '-4148659.8740464', '-6250739.2614183', NULL, 25, NULL, 0, 1, 2, 0, 0, 0, 0, '', '', 1, NULL, NULL, 0, 0, '', 1, 800, 'alquiler', 'Gregorio Funes', NULL, NULL, NULL, NULL);

INSERT INTO `inmuebles` (`id`, `titulo`, `descripcion`, `tipo_inmueble`, `vista_al_mar`, `tiene_calefaccion`, `gastos_comunes`, `anio_construccion_aproximado`, `coord_latitud`, `coord_longitud`, `cant_banios`, `mts2_edificados`, `cant_plantas_casa`, `es_propiedad_horizontal`, `cant_dormitorios`, `numero_de_piso`, `tiene_ascensor`, `tiene_porteria`, `tiene_portero_electrico`, `tiene_vigilancia`, `tipo_local`, `tipo_local_observacion`, `tiene_planta_alta`, `altura_salon_principal`, `cant_plantas_local`, `tiene_estacionamiento`, `tiene_deposito`, `potencia_contratada`, `fk_estado`, `precio_publicacion`, `operacion_publicacion`, `direccion_corta`, `direccion_larga`, `id_departamento`, `id_ciudad`, `id_barrio`) VALUES
(4, 'Casa', 'Casa', 'apartamento', 0, 0, 90, 2014, '-4148659.8740464', '-6250739.2614183', NULL, 25, NULL, 0, 1, 2, 0, 0, 0, 0, '', '', 1, NULL, NULL, 0, 0, '', 1, 800, 'alquiler', 'Gregorio Funes', NULL, NULL, NULL, NULL);

INSERT INTO `inmuebles` (`id`, `titulo`, `descripcion`, `tipo_inmueble`, `vista_al_mar`, `tiene_calefaccion`, `gastos_comunes`, `anio_construccion_aproximado`, `coord_latitud`, `coord_longitud`, `cant_banios`, `mts2_edificados`, `cant_plantas_casa`, `es_propiedad_horizontal`, `cant_dormitorios`, `numero_de_piso`, `tiene_ascensor`, `tiene_porteria`, `tiene_portero_electrico`, `tiene_vigilancia`, `tipo_local`, `tipo_local_observacion`, `tiene_planta_alta`, `altura_salon_principal`, `cant_plantas_local`, `tiene_estacionamiento`, `tiene_deposito`, `potencia_contratada`, `fk_estado`, `precio_publicacion`, `operacion_publicacion`, `direccion_corta`, `direccion_larga`, `id_departamento`, `id_ciudad`, `id_barrio`) VALUES
(5, 'Casa', 'Casa', 'apartamento', 0, 0, 90, 2014, '-4148659.8740464', '-6250739.2614183', NULL, 25, NULL, 0, 1, 2, 0, 0, 0, 0, '', '', 1, NULL, NULL, 0, 0, '', 1, 800, 'alquiler', 'Gregorio Funes', NULL, NULL, NULL, NULL);

INSERT INTO `inmuebles` (`id`, `titulo`, `descripcion`, `tipo_inmueble`, `vista_al_mar`, `tiene_calefaccion`, `gastos_comunes`, `anio_construccion_aproximado`, `coord_latitud`, `coord_longitud`, `cant_banios`, `mts2_edificados`, `cant_plantas_casa`, `es_propiedad_horizontal`, `cant_dormitorios`, `numero_de_piso`, `tiene_ascensor`, `tiene_porteria`, `tiene_portero_electrico`, `tiene_vigilancia`, `tipo_local`, `tipo_local_observacion`, `tiene_planta_alta`, `altura_salon_principal`, `cant_plantas_local`, `tiene_estacionamiento`, `tiene_deposito`, `potencia_contratada`, `fk_estado`, `precio_publicacion`, `operacion_publicacion`, `direccion_corta`, `direccion_larga`, `id_departamento`, `id_ciudad`, `id_barrio`) VALUES
(6, 'Casa', 'Casa', 'apartamento', 0, 0, 90, 2014, '-4148659.8740464', '-6250739.2614183', NULL, 25, NULL, 0, 1, 2, 0, 0, 0, 0, '', '', 1, NULL, NULL, 0, 0, '', 1, 800, 'alquiler', 'Gregorio Funes', NULL, NULL, NULL, NULL);

INSERT INTO `inmuebles` (`id`, `titulo`, `descripcion`, `tipo_inmueble`, `vista_al_mar`, `tiene_calefaccion`, `gastos_comunes`, `anio_construccion_aproximado`, `coord_latitud`, `coord_longitud`, `cant_banios`, `mts2_edificados`, `cant_plantas_casa`, `es_propiedad_horizontal`, `cant_dormitorios`, `numero_de_piso`, `tiene_ascensor`, `tiene_porteria`, `tiene_portero_electrico`, `tiene_vigilancia`, `tipo_local`, `tipo_local_observacion`, `tiene_planta_alta`, `altura_salon_principal`, `cant_plantas_local`, `tiene_estacionamiento`, `tiene_deposito`, `potencia_contratada`, `fk_estado`, `precio_publicacion`, `operacion_publicacion`, `direccion_corta`, `direccion_larga`, `id_departamento`, `id_ciudad`, `id_barrio`) VALUES
(7, 'Casa', 'Casa', 'apartamento', 0, 0, 90, 2014, '-4148659.8740464', '-6250739.2614183', NULL, 25, NULL, 0, 1, 2, 0, 0, 0, 0, '', '', 1, NULL, NULL, 0, 0, '', 1, 800, 'alquiler', 'Gregorio Funes', NULL, NULL, NULL, NULL);

INSERT INTO `inmuebles` (`id`, `titulo`, `descripcion`, `tipo_inmueble`, `vista_al_mar`, `tiene_calefaccion`, `gastos_comunes`, `anio_construccion_aproximado`, `coord_latitud`, `coord_longitud`, `cant_banios`, `mts2_edificados`, `cant_plantas_casa`, `es_propiedad_horizontal`, `cant_dormitorios`, `numero_de_piso`, `tiene_ascensor`, `tiene_porteria`, `tiene_portero_electrico`, `tiene_vigilancia`, `tipo_local`, `tipo_local_observacion`, `tiene_planta_alta`, `altura_salon_principal`, `cant_plantas_local`, `tiene_estacionamiento`, `tiene_deposito`, `potencia_contratada`, `fk_estado`, `precio_publicacion`, `operacion_publicacion`, `direccion_corta`, `direccion_larga`, `id_departamento`, `id_ciudad`, `id_barrio`) VALUES
(8, 'Casa', 'Casa', 'apartamento', 0, 0, 90, 2014, '-4148659.8740464', '-6250739.2614183', NULL, 25, NULL, 0, 1, 2, 0, 0, 0, 0, '', '', 1, NULL, NULL, 0, 0, '', 1, 800, 'alquiler', 'Gregorio Funes', NULL, NULL, NULL, NULL);

INSERT INTO `inmuebles` (`id`, `titulo`, `descripcion`, `tipo_inmueble`, `vista_al_mar`, `tiene_calefaccion`, `gastos_comunes`, `anio_construccion_aproximado`, `coord_latitud`, `coord_longitud`, `cant_banios`, `mts2_edificados`, `cant_plantas_casa`, `es_propiedad_horizontal`, `cant_dormitorios`, `numero_de_piso`, `tiene_ascensor`, `tiene_porteria`, `tiene_portero_electrico`, `tiene_vigilancia`, `tipo_local`, `tipo_local_observacion`, `tiene_planta_alta`, `altura_salon_principal`, `cant_plantas_local`, `tiene_estacionamiento`, `tiene_deposito`, `potencia_contratada`, `fk_estado`, `precio_publicacion`, `operacion_publicacion`, `direccion_corta`, `direccion_larga`, `id_departamento`, `id_ciudad`, `id_barrio`) VALUES
(9, 'Casa', 'Casa', 'apartamento', 0, 0, 90, 2014, '-4148659.8740464', '-6250739.2614183', NULL, 25, NULL, 0, 1, 2, 0, 0, 0, 0, '', '', 1, NULL, NULL, 0, 0, '', 1, 800, 'alquiler', 'Gregorio Funes', NULL, NULL, NULL, NULL);

INSERT INTO `inmuebles` (`id`, `titulo`, `descripcion`, `tipo_inmueble`, `vista_al_mar`, `tiene_calefaccion`, `gastos_comunes`, `anio_construccion_aproximado`, `coord_latitud`, `coord_longitud`, `cant_banios`, `mts2_edificados`, `cant_plantas_casa`, `es_propiedad_horizontal`, `cant_dormitorios`, `numero_de_piso`, `tiene_ascensor`, `tiene_porteria`, `tiene_portero_electrico`, `tiene_vigilancia`, `tipo_local`, `tipo_local_observacion`, `tiene_planta_alta`, `altura_salon_principal`, `cant_plantas_local`, `tiene_estacionamiento`, `tiene_deposito`, `potencia_contratada`, `fk_estado`, `precio_publicacion`, `operacion_publicacion`, `direccion_corta`, `direccion_larga`, `id_departamento`, `id_ciudad`, `id_barrio`) VALUES
(10, 'Casa', 'Casa', 'apartamento', 0, 0, 90, 2014, '-4148659.8740464', '-6250739.2614183', NULL, 25, NULL, 0, 1, 2, 0, 0, 0, 0, '', '', 1, NULL, NULL, 0, 0, '', 1, 800, 'alquiler', 'Gregorio Funes', NULL, NULL, NULL, NULL);

INSERT INTO `inmuebles` (`id`, `titulo`, `descripcion`, `tipo_inmueble`, `vista_al_mar`, `tiene_calefaccion`, `gastos_comunes`, `anio_construccion_aproximado`, `coord_latitud`, `coord_longitud`, `cant_banios`, `mts2_edificados`, `cant_plantas_casa`, `es_propiedad_horizontal`, `cant_dormitorios`, `numero_de_piso`, `tiene_ascensor`, `tiene_porteria`, `tiene_portero_electrico`, `tiene_vigilancia`, `tipo_local`, `tipo_local_observacion`, `tiene_planta_alta`, `altura_salon_principal`, `cant_plantas_local`, `tiene_estacionamiento`, `tiene_deposito`, `potencia_contratada`, `fk_estado`, `precio_publicacion`, `operacion_publicacion`, `direccion_corta`, `direccion_larga`, `id_departamento`, `id_ciudad`, `id_barrio`) VALUES
(11, 'Casa', 'Casa', 'apartamento', 0, 0, 90, 2014, '-4148659.8740464', '-6250739.2614183', NULL, 25, NULL, 0, 1, 2, 0, 0, 0, 0, '', '', 1, NULL, NULL, 0, 0, '', 1, 800, 'alquiler', 'Gregorio Funes', NULL, NULL, NULL, NULL);

INSERT INTO `inmuebles` (`id`, `titulo`, `descripcion`, `tipo_inmueble`, `vista_al_mar`, `tiene_calefaccion`, `gastos_comunes`, `anio_construccion_aproximado`, `coord_latitud`, `coord_longitud`, `cant_banios`, `mts2_edificados`, `cant_plantas_casa`, `es_propiedad_horizontal`, `cant_dormitorios`, `numero_de_piso`, `tiene_ascensor`, `tiene_porteria`, `tiene_portero_electrico`, `tiene_vigilancia`, `tipo_local`, `tipo_local_observacion`, `tiene_planta_alta`, `altura_salon_principal`, `cant_plantas_local`, `tiene_estacionamiento`, `tiene_deposito`, `potencia_contratada`, `fk_estado`, `precio_publicacion`, `operacion_publicacion`, `direccion_corta`, `direccion_larga`, `id_departamento`, `id_ciudad`, `id_barrio`) VALUES
(12, 'Casa', 'Casa', 'apartamento', 0, 0, 90, 2014, '-4148659.8740464', '-6250739.2614183', NULL, 25, NULL, 0, 1, 2, 0, 0, 0, 0, '', '', 1, NULL, NULL, 0, 0, '', 1, 800, 'alquiler', 'Gregorio Funes', NULL, NULL, NULL, NULL);

insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (1,1,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (2,2,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (3,3,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (4,4,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (5,5,'2014-06-28');
insert into destacado_inmueble (id,id_inmueble,update_timestamp) values (6,6,'2014-06-28');
