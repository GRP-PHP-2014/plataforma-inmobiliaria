
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
)

-- TABLA DE AUDITORIA DEL SISTEMA
create table auditoria (
    id bigint not null AUTO_INCREMENT,
    fecha datetime not null,
    objeto varchar(100) not null,
	operacion varchar(100) not null,
    primary key (id)
)

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

create table imagenes_inmueble (
    id integer not null primary key auto_increment unique,
    id_inmueble integer not null,
    ruta varchar(512) not null,
	foreign key (id_inmueble) references inmuebles(id)
);