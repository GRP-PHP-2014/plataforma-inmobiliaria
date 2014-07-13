-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-07-2014 a las 17:39:08
-- Versión del servidor: 5.5.36
-- Versión de PHP: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `plataforma_inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE IF NOT EXISTS `auditoria` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `objeto` varchar(100) NOT NULL,
  `operacion` varchar(100) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  `usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`id`, `fecha`, `objeto`, `operacion`, `descripcion`, `usuario`) VALUES
(70, '2014-07-02 00:16:55', 'inmueble', 'alta', '59', 'mrodriguez'),
(71, '2014-07-02 00:20:55', 'inmueble', 'alta', '60', 'mrodriguez'),
(72, '2014-07-02 00:23:31', 'inmueble', 'alta', '61', 'mrodriguez'),
(73, '2014-07-02 00:27:32', 'inmueble', 'alta', '62', 'mrodriguez'),
(74, '2014-07-02 00:32:48', 'inmueble', 'alta', '63', 'mrodriguez'),
(75, '2014-07-02 00:35:33', 'inmueble', 'alta', '64', 'mrodriguez'),
(76, '2014-07-02 00:45:21', 'usuario', 'logout', '', 'mrodriguez'),
(77, '2014-07-02 03:27:46', 'usuario', 'logout', '', ''),
(78, '2014-07-02 03:27:52', 'usuario', 'login', '', 'mrodriguez'),
(79, '2014-07-03 03:56:18', 'usuario', 'logout', '', 'mrodriguez'),
(80, '2014-07-03 03:56:31', 'usuario', 'login', '', 'mrodriguez'),
(81, '2014-07-03 04:41:50', 'usuario', 'logout', '', ''),
(82, '2014-07-03 04:42:04', 'usuario', 'login', '', 'mrodriguez'),
(83, '2014-07-03 05:34:06', 'usuario', 'logout', '', 'mrodriguez'),
(84, '2014-07-03 05:34:11', 'usuario', 'login', '', 'mrodriguez'),
(85, '2014-07-03 05:38:15', 'usuario', 'logout', '', 'mrodriguez'),
(86, '2014-07-03 05:38:21', 'usuario', 'login', '', 'mrodriguez'),
(87, '2014-07-03 05:39:14', 'usuario', 'logout', '', 'mrodriguez'),
(88, '2014-07-03 05:39:19', 'usuario', 'login', '', 'mrodriguez'),
(89, '2014-07-04 01:22:55', 'usuario', 'logout', '', 'mrodriguez'),
(90, '2014-07-04 01:23:22', 'usuario', 'login', '', 'esilvera'),
(91, '2014-07-04 01:52:46', 'usuario', 'logout', '', 'esilvera'),
(92, '2014-07-04 01:59:18', 'usuario', 'login', '', 'esilvera'),
(93, '2014-07-04 02:18:52', 'usuario', 'logout', '', 'esilvera'),
(94, '2014-07-04 02:19:05', 'usuario', 'login', '', 'mrodriguez'),
(95, '2014-07-04 02:19:49', 'usuario', 'logout', '', 'mrodriguez'),
(96, '2014-07-04 02:19:54', 'usuario', 'login', '', 'mterra'),
(97, '2014-07-04 03:26:24', 'usuario', 'logout', '', 'mterra'),
(98, '2014-07-04 03:26:57', 'usuario', 'login', '', 'mrodriguez'),
(99, '2014-07-06 02:46:12', 'usuario', 'login', '', 'mrodriguez'),
(100, '2014-07-08 02:16:58', 'usuario', 'logout', '', 'mrodriguez'),
(101, '2014-07-08 02:17:08', 'usuario', 'login', '', 'mrodriguez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthAssignment`
--

CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('administrativo', 'msteffen', NULL, NULL),
('administrativo', 'mterra', NULL, NULL),
('agente', 'esilvera', NULL, NULL),
('director', 'afontes', '', ''),
('director', 'mrodriguez', '', ''),
('director', 'pdesosa', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthItem`
--

CREATE TABLE IF NOT EXISTS `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `AuthItem`
--

INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('administrativo', 2, '', '', ''),
('agente', 2, '', '', ''),
('director', 2, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthItemChild`
--

CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE IF NOT EXISTS `barrios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) DEFAULT NULL,
  `id_ciudad` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_barrio_ciudad` (`id_ciudad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `barrios`
--

INSERT INTO `barrios` (`id`, `nombre`, `id_ciudad`) VALUES
(1, 'Centro', 1),
(2, 'Colon', 1),
(3, 'Parque Rodo', 1),
(4, 'Palermo', 1),
(5, 'Sayago', 1),
(6, 'Punta Gorda', 1),
(7, 'Aguada', 1),
(8, 'Pocitos', 1),
(9, 'Paso de la arena', 1),
(10, 'Ciudad Vieja', 1),
(11, 'La comercial', 1),
(12, 'Piedras blancas', 1),
(13, 'Jardines', 2),
(14, 'Union', 1),
(15, 'La Paz', 1),
(16, 'Cordon', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) DEFAULT NULL,
  `id_departamento` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ciudad_departamento` (`id_departamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `nombre`, `id_departamento`) VALUES
(1, 'Montevideo', 1),
(2, 'Lascano', 2),
(3, 'La Paloma', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `direccion` varchar(2048) DEFAULT NULL,
  `comentarios` varchar(2048) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `email`, `nombre`, `apellido`, `direccion`, `comentarios`) VALUES
(4, 'jsuarez@gmail.com', 'Juan', 'Suarez', 'Avenida italia 5593', ''),
(5, 'hacosta', 'Humberto', 'Acosta', '18 dwe julio 8878', ''),
(6, 'hcedrez', 'Horacio', 'Cedrez', '', ''),
(7, 'jvelazquez', 'Joaquin', 'Velazquez', 'Camino Maldonado 1221', ''),
(8, 'pelo8888@gmail.com', 'Alejandro ', 'Fontes', '', ''),
(9, 'fgonzalez@gmail.com', 'Federico ', 'Gonzalez', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`) VALUES
(1, 'Montevideo'),
(2, 'Rocha');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacado_inmueble`
--

CREATE TABLE IF NOT EXISTS `destacado_inmueble` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inmueble` int(11) DEFAULT NULL,
  `update_timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_destacado_inmueble` (`id_inmueble`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `destacado_inmueble`
--

INSERT INTO `destacado_inmueble` (`id`, `id_inmueble`, `update_timestamp`) VALUES
(1, 59, '2014-07-02 00:36:07'),
(2, 60, '2014-07-02 00:36:07'),
(3, 61, '2014-07-02 00:36:07'),
(4, 62, '2014-07-02 00:36:08'),
(5, 63, '2014-07-02 00:36:08'),
(6, 64, '2014-07-02 00:36:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_inmueble`
--

CREATE TABLE IF NOT EXISTS `estados_inmueble` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `estados_inmueble`
--

INSERT INTO `estados_inmueble` (`id`, `nombre`, `descripcion`) VALUES
(3, 'Pendiente de publicacion', 'Inmuebles pendientes de validacion del director'),
(4, 'Publicada', 'Inmuebles actualmente publicados en el sitio'),
(5, 'Ocupada', 'Inmuebles actualmente alquilados (o comprados) por algun cliente del sitio'),
(6, 'Cancelado', 'Inmuebles cancelados por el cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_inmueble`
--

CREATE TABLE IF NOT EXISTS `imagenes_inmueble` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inmueble` int(11) NOT NULL,
  `ruta` varchar(512) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_inmueble` (`id_inmueble`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=118 ;

--
-- Volcado de datos para la tabla `imagenes_inmueble`
--

INSERT INTO `imagenes_inmueble` (`id`, `id_inmueble`, `ruta`) VALUES
(107, 59, 'imagen3.jpg'),
(108, 59, 'imagen8.jpg'),
(109, 60, 'imagen5.jpg'),
(110, 61, 'imagen6.jpg'),
(111, 61, 'imagen7.jpg'),
(112, 62, 'imagen8.jpg'),
(113, 62, 'imagen9.jpg'),
(114, 63, '140207204724440.jpg'),
(115, 63, 'imagen2.jpg'),
(116, 64, 'imagen9.jpg'),
(117, 64, 'images (2).jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE IF NOT EXISTS `inmuebles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(2048) NOT NULL,
  `tipo_inmueble` varchar(50) NOT NULL,
  `vista_al_mar` tinyint(1) DEFAULT NULL,
  `tiene_calefaccion` tinyint(1) DEFAULT NULL,
  `gastos_comunes` double DEFAULT NULL,
  `anio_construccion_aproximado` int(11) DEFAULT NULL,
  `coord_latitud` mediumtext,
  `coord_longitud` mediumtext,
  `cant_banios` int(11) DEFAULT NULL,
  `mts2_edificados` int(11) DEFAULT NULL,
  `cant_plantas_casa` int(11) DEFAULT NULL,
  `es_propiedad_horizontal` tinyint(1) DEFAULT NULL,
  `cant_dormitorios` int(11) DEFAULT NULL,
  `numero_de_piso` int(11) DEFAULT NULL,
  `tiene_ascensor` tinyint(1) DEFAULT NULL,
  `tiene_porteria` tinyint(1) DEFAULT NULL,
  `tiene_portero_electrico` tinyint(1) DEFAULT NULL,
  `tiene_vigilancia` tinyint(1) DEFAULT NULL,
  `tipo_local` varchar(50) DEFAULT NULL,
  `tipo_local_observacion` varchar(1024) DEFAULT NULL,
  `tiene_planta_alta` tinyint(1) DEFAULT NULL,
  `altura_salon_principal` int(11) DEFAULT NULL,
  `cant_plantas_local` int(11) DEFAULT NULL,
  `tiene_estacionamiento` tinyint(1) DEFAULT NULL,
  `tiene_deposito` tinyint(1) DEFAULT NULL,
  `potencia_contratada` varchar(10) DEFAULT NULL,
  `fk_estado` int(11) NOT NULL,
  `precio_publicacion` float DEFAULT NULL,
  `operacion_publicacion` varchar(50) DEFAULT NULL,
  `direccion_corta` varchar(128) DEFAULT NULL,
  `direccion_larga` varchar(2048) DEFAULT NULL,
  `id_departamento` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `id_barrio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `fk_estado` (`fk_estado`),
  KEY `fk_departamento` (`id_departamento`),
  KEY `fk_ciudad` (`id_ciudad`),
  KEY `fk_barrio` (`id_barrio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`id`, `titulo`, `descripcion`, `tipo_inmueble`, `vista_al_mar`, `tiene_calefaccion`, `gastos_comunes`, `anio_construccion_aproximado`, `coord_latitud`, `coord_longitud`, `cant_banios`, `mts2_edificados`, `cant_plantas_casa`, `es_propiedad_horizontal`, `cant_dormitorios`, `numero_de_piso`, `tiene_ascensor`, `tiene_porteria`, `tiene_portero_electrico`, `tiene_vigilancia`, `tipo_local`, `tipo_local_observacion`, `tiene_planta_alta`, `altura_salon_principal`, `cant_plantas_local`, `tiene_estacionamiento`, `tiene_deposito`, `potencia_contratada`, `fk_estado`, `precio_publicacion`, `operacion_publicacion`, `direccion_corta`, `direccion_larga`, `id_departamento`, `id_ciudad`, `id_barrio`) VALUES
(59, 'BUEN CHALET, AL FRENTE!!', 'BUEN CHALET AL FRENTE EN PROPIEDAD HORIZONTAL, CONSTA DE 3 DORMITORIOS, LIVING COMEDOR, COCINA AMPLIA, BAÑO, JARDÍN, COCHERA, PATIO, ENTRADA LATERAL Y PARRILLERO CERRADO. 2 LÍNEAS DE ÓMNIBUS A 1 CUADRA,POR APARICIO SARAVIA, BUENOS SERVICIOS EN LA ZONA. NECESITA ARREGLOS.\r\n\r\n \r\n\r\n \r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CODIGO DE REFERENCIA!!!!', 'apartamento', 0, 1, 120, 1980, '-34.898346403515674', '-56.17513826909129', 1, NULL, NULL, 0, 2, 4, 1, 1, 0, 0, '', '', 0, NULL, NULL, 0, 0, '', 4, 85000, 'venta', 'Garzon 1503', NULL, NULL, NULL, NULL),
(60, 'BUEN INMUEBLE, AMPLIO TERRENO', 'BUENA PROPIEDAD, CON AMPLIO TERRENO, CONSTA DE 3 DORMITORIOS, LIVING COMEDOR CON ESTUFA HOGAR, COCINA, BAÑO, JARDÍN, ENTRADA LATERAL, PATIO CON PARRILLERO, GARAJE PARA VARIOS AUTOS CON BAÑO SOCIAL Y AMPLIO TERRENO.\r\n\r\n \r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CODIGO DE REFERENCIA!!!', 'casa', 0, 0, 0, 1979, '-34.88123848731461', '-56.14308050694591', 2, 150, 1, 1, 2, NULL, 0, 0, 0, 0, '', '', 0, NULL, NULL, 0, 0, '', 4, 90000, 'venta', 'Avenida Italia 1309', NULL, NULL, NULL, NULL),
(61, 'APTO A ESTRENAR!!!', 'HERMOSO APARTAMENTO RECICLADO, A ESTRENAR, EN PLANTA ALTA, EL APTO CONSTA DE 2 DORMITORIOS, COCINA COMEDOR, TODO CON PISO FLOTANTE, BAÑO, JARDÍN CON ENTRADA PARA AUTOS Y PARRILLERO. \r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CODIGO DE REFERENCIA!!!! ', 'apartamento', 0, 1, 150, 1975, '-34.901514145211074', '-56.18457964482304', 1, NULL, NULL, 0, 2, 1, 0, 1, 1, 1, '', '', 0, NULL, NULL, 0, 0, '', 4, 70000, 'venta', 'Yaguaron 1568', NULL, NULL, NULL, NULL),
(62, 'SOBRE AV SAYAGO!! LINDA CASA!!', 'BUENA CASA EN PROPIEDAD HORIZONTAL AL FRENTE, UBICADA SOBRE AVENIDA SAYAGO ESQUINA CAMINO EDISON, CONSTA DE 2 DORMITORIOS, LIVING COMEDOR,COCINA, BAÑO, JARDÍN CON ENTRADA PARA AUTOS, PATIO Y ACCESO A LA AZOTEA. BUENA LOCOMOCIÓN EN LA ZONA.\r\n\r\n \r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CODIGO DE REFERENCIA!!!', 'casa', 0, 0, 0, NULL, '-34.90932738566636', '-56.18663958134717', 2, 300, 1, 0, 3, NULL, 0, 0, 0, 0, '', '', 0, NULL, NULL, 0, 0, '', 4, 66500, 'venta', 'Av Sayago 2565', NULL, NULL, NULL, NULL),
(63, 'BUENA PROPIEDAD SOBRE AV LEZICA', 'BUEN INMUEBLE UBICADO SOBRE LA AVENIDA LEZICA, EN PROPIEDAD HORIZONTAL, CONSTA DE 2 DORMITORIOS, LIVING COMEDOR, COCINA, BAÑO, GALPÓN CON TRIFÁSICA, AMPLIO TERRENO CON GALPÓN. NECESITA ARREGLOS, MUY BUENA LOCOMOCIÓN, PRÓXIMA AL CENTRO COMERCIAL DE VILLA COLÓN.\r\n\r\n \r\n\r\n \r\n\r\n \r\n\r\nPOR CONSULTAS NO OLVIDE EL CODIGO DE REFERENCIA!!!!!', 'casa', 0, 0, 0, 1991, '-34.871873387037745', '-56.17016008915957', 1, 69, 2, 0, 2, NULL, 0, 0, 0, 0, '', '', 0, NULL, NULL, 0, 0, '', 4, 73300, 'venta', 'Av Lezica 2678', NULL, NULL, NULL, NULL),
(64, 'ESTUPENDA PROPIEDAD', 'Casa de 4 dormitorios, living comedor, cocina, baño, garaje, jardín, fondo, salón de 80 M2 con 2 baños y 2 piezas.\r\n\r\nPOR CONSULTAS NO OLVIDE SU CODIGO DE REFERENCIA!!!', 'casa', 0, 1, 0, 1984, '-34.91200201788226', '-56.180116449023025', 2, 156, 1, 1, 4, 1, 0, 0, 0, 0, '', '', 0, NULL, NULL, 0, 0, '', 4, 87000, 'alquiler', 'Isla de flores 1478', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE IF NOT EXISTS `parametros` (
  `nombre` varchar(64) NOT NULL,
  `descripcion` varchar(1024) DEFAULT NULL,
  `valor` varchar(512) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parametros`
--

INSERT INTO `parametros` (`nombre`, `descripcion`, `valor`) VALUES
('cantidadBienesPortada', 'Cantidad de bienes a mostrar en la portada del sitio', '6'),
('directorioBaseImagenes', 'Ruta base para las imagenes subidas en el sistema de archivos', '/plataforma-inmobiliaria'),
('emailAdminitrador', 'Email del administrador del sitio', 'admin@inmobiliaria.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_notificacion`
--

CREATE TABLE IF NOT EXISTS `tipo_notificacion` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `descripcion` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `contrasenia` varchar(64) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `ultimo_ingreso` date DEFAULT NULL,
  `habilitado` tinyint(1) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `email`, `contrasenia`, `nombre`, `apellido`, `ultimo_ingreso`, `habilitado`, `rol`) VALUES
('afontes', 'director@php2014.com', '$1$Tjv7tqTJ$.O.123LlOlq6FnNFM7LN8.', 'Alejandro', 'Fontes', NULL, 1, 'director'),
('esilvera', 'esilvera@gmail.com', '$1$Boc57cpX$6tmkQMcqgWV3G4Ho/rNu/0', 'Edwin', 'Silvera', NULL, NULL, 'agente'),
('mrodriguez', 'mrodriguez@gmail.com', '$1$UQuRVKk0$wUrX3YsP6/bxHFKToL.7i.', 'Mauricio', 'Rodriguez', NULL, NULL, 'director'),
('msteffen', 'msteffen@gmail.com', 'msteffen', 'Mauro', 'Steffen', NULL, NULL, 'administrativo'),
('mterra', 'mterra@gmail.com', '$1$SI0KFvN9$XRuTOJJqkDruEyR.NPz.u0', 'Maribel', 'Terra', NULL, NULL, 'administrativo'),
('pdesosa', 'pdesosa@gmail.com', '$1$TymVjAQg$Qo8A1wC7/nGXArlrJKFx80', 'Pablo', 'de Sosa', NULL, NULL, 'director');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `AuthAssignment`
--
ALTER TABLE `AuthAssignment`
  ADD CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `AuthItemChild`
--
ALTER TABLE `AuthItemChild`
  ADD CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `barrios`
--
ALTER TABLE `barrios`
  ADD CONSTRAINT `fk_barrio_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id`);

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `fk_ciudad_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id`);

--
-- Filtros para la tabla `destacado_inmueble`
--
ALTER TABLE `destacado_inmueble`
  ADD CONSTRAINT `fk_destacado_inmueble` FOREIGN KEY (`id_inmueble`) REFERENCES `inmuebles` (`id`);

--
-- Filtros para la tabla `imagenes_inmueble`
--
ALTER TABLE `imagenes_inmueble`
  ADD CONSTRAINT `imagenes_inmueble_ibfk_1` FOREIGN KEY (`id_inmueble`) REFERENCES `inmuebles` (`id`);

--
-- Filtros para la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD CONSTRAINT `fk_barrio` FOREIGN KEY (`id_barrio`) REFERENCES `barrios` (`id`),
  ADD CONSTRAINT `fk_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id`),
  ADD CONSTRAINT `fk_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `inmuebles_ibfk_1` FOREIGN KEY (`fk_estado`) REFERENCES `estados_inmueble` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
