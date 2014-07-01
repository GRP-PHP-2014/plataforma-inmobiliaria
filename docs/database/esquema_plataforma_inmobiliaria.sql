CREATE DATABASE  IF NOT EXISTS `plataforma_inmobiliaria` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `plataforma_inmobiliaria`;

-- CREACION DE LAS TABLAS NECESARIAS PARA EL MANEJO DE PERMISOS EN YII
DROP TABLE IF EXISTS `AuthItem`;
create table AuthItem
(
   name                 varchar(64) not null,
   type                 integer not null,
   description          text,
   bizrule              text,
   data                 text,
   primary key (name)
);
 
DROP TABLE IF EXISTS `AuthItemChild`;
create table AuthItemChild
(
   parent               varchar(64) not null,
   child                varchar(64) not null,
   primary key (parent,child),
   foreign key (parent) references AuthItem (name) on delete cascade on update cascade,
   foreign key (child) references AuthItem (name) on delete cascade on update cascade
);
 
DROP TABLE IF EXISTS `AuthAssignment`;
create table AuthAssignment
(
   itemname             varchar(64) not null,
   userid               varchar(64) not null,
   bizrule              text,
   data                 text,
   primary key (itemname,userid),
   foreign key (itemname) references AuthItem (name) on delete cascade on update cascade
);


-- TABLA DE USUARIOS
DROP TABLE IF EXISTS `usuarios`;
create table usuarios (
    usuario varchar(64) not null,
    email varchar(64) not null,
    contrasenia varchar(64) not null,
    nombre varchar(100),
    apellido varchar(100),
    ultimo_ingreso date,
    habilitado boolean,
    primary key (usuario),
    unique (email)
);

alter table usuarios add column rol varchar(50);

DROP TABLE IF EXISTS `parametros`;
create table parametros (
    nombre varchar(64) not null,
    descripcion varchar(1024),
    valor varchar(512) not null,
    primary key (nombre)
);

-- TABLA DE AUDITORIA DEL SISTEMA
DROP TABLE IF EXISTS `auditoria`;
create table auditoria (
    id bigint not null AUTO_INCREMENT,
    fecha datetime not null,
    objeto varchar(100) not null,
	operacion varchar(100) not null,
    primary key (id)
);

-- TABLA DE CLIENTES
DROP TABLE IF EXISTS `clientes`;
create table clientes (
    id integer not null primary key auto_increment unique,
    email varchar(64) not null unique,
    nombre varchar(100),
    apellido varchar(100)
);

alter table clientes add direccion varchar(2048);

alter table clientes add comentarios varchar(2048);

DROP TABLE IF EXISTS `estados_inmueble`;
create table estados_inmueble (
    id integer not null primary key auto_increment unique,
    nombre varchar(100) not null unique,
    descripcion varchar(1024)
);

DROP TABLE IF EXISTS `inmuebles`;
create table inmuebles (
    id integer not null primary key auto_increment unique,
    titulo varchar(100) not null,
    descripcion varchar(2048) not null,
    tipo_inmueble varchar(50) not null,
    vista_al_mar boolean,
    tiene_calefaccion boolean,
    gastos_comunes double,
    anio_construccion_aproximado integer,
    coord_latitud long,
    coord_longitud long,
    cant_banios integer,

    /* casa */
    mts2_edificados integer,
    cant_plantas_casa integer,
    es_propiedad_horizontal boolean,
    cant_dormitorios integer,

    /* apartamento */
    numero_de_piso integer,
    tiene_ascensor boolean,
    tiene_porteria boolean,
    tiene_portero_electrico boolean,
    tiene_vigilancia boolean,

    /* local */
    tipo_local varchar(50),
    tipo_local_observacion varchar(1024),
    tiene_planta_alta boolean,
    altura_salon_principal integer,
    cant_plantas_local integer,
    tiene_estacionamiento boolean,
    tiene_deposito boolean,
    potencia_contratada varchar(10)

);


alter table inmuebles add fk_estado integer not null;
alter table inmuebles add foreign key (fk_estado) references estados_inmueble(id);
alter table inmuebles add precio_publicacion float;
alter table inmuebles add operacion_publicacion varchar(50);
alter table inmuebles add direccion_corta varchar(128);
alter table inmuebles add direccion_larga varchar(2048);

DROP TABLE IF EXISTS `imagenes_inmueble`;
create table imagenes_inmueble (
    id integer not null primary key auto_increment unique,
    id_inmueble integer not null,
    ruta varchar(512) not null,
	foreign key (id_inmueble) references inmuebles(id)
);

alter table auditoria add descripcion varchar(512);

alter table auditoria add usuario varchar(50) not null;

DROP TABLE IF EXISTS `tipo_notificacion`;
create table tipo_notificacion
(
    id bigint not null AUTO_INCREMENT,
    nombre varchar(64) not null,
    descripcion varchar(512),
    primary key (id)
);

DROP TABLE IF EXISTS `departamentos`;
CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `ciudades`;
CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `departamento` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `nombre` (`nombre`),
  KEY `departamento` (`departamento`),
  CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`departamento`) REFERENCES `departamentos` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `barrios`;
CREATE TABLE `barrios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `ciudad` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `ciudad` (`ciudad`),
  CONSTRAINT `barrios_ibfk_1` FOREIGN KEY (`ciudad`) REFERENCES `ciudades` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `destacado_inmueble`;
CREATE TABLE destacado_inmueble (
  id int(11) NOT NULL AUTO_INCREMENT,
  id_inmueble integer NOT NULL,
  update_timestamp datetime NOT NULL,
  PRIMARY KEY (id),
  CONSTRAINT fk_destacado_inmueble FOREIGN KEY (id_inmueble) REFERENCES inmuebles (id)
);

