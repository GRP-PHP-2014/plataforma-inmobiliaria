
-- CREACION DE LA BASE DE DATOS
create database plataforma_inmobiliaria;

-- CREACION DE LAS TABLAS NECESARIAS PARA EL MANEJO DE PERMISOS EN YII
create table AuthItem
(
   name                 varchar(64) not null,
   type                 integer not null,
   description          text,
   bizrule              text,
   data                 text,
   primary key (name)
);
 
create table AuthItemChild
(
   parent               varchar(64) not null,
   child                varchar(64) not null,
   primary key (parent,child),
   foreign key (parent) references AuthItem (name) on delete cascade on update cascade,
   foreign key (child) references AuthItem (name) on delete cascade on update cascade
);
 
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

create table parametros (
    nombre varchar(64) not null,
    descripcion varchar(1024),
    valor varchar(512) not null,
    primary key (nombre)
);

-- TABLA DE AUDITORIA DEL SISTEMA
create table auditoria (
    id bigint not null AUTO_INCREMENT,
    fecha datetime not null,
    objeto varchar(100) not null,
	operacion varchar(100) not null,
    primary key (id)
);

-- TABLA DE CLIENTES
create table clientes (
    id integer not null primary key auto_increment unique,
    email varchar(64) not null unique,
    nombre varchar(100),
    apellido varchar(100)
);

alter table clientes add direccion varchar(2048);

alter table clientes add comentarios varchar(2048);

create table estados_inmueble (
    id integer not null primary key auto_increment unique,
    nombre varchar(100) not null unique,
    descripcion varchar(1024)
);