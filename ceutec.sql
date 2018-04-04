-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generaci�n: 30-09-2014 a las 02:42:03
-- Versi�n del servidor: 5.6.21
-- Versi�n de PHP: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `ceutec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `base`
--

CREATE TABLE `base` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contra` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `numerocuenta` varchar(100) NOT NULL,
  `carrera` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `base`
--

INSERT INTO `base` (`id`, `nombre`, `contra`, `correo`, `numerocuenta`, `carrera`) VALUES
(3, 'a', 'a', 'a', '1', 'a'),
(4, 'Carlos Flores', 'a', 'carlos-flores', '41011069', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canchas`
--

CREATE TABLE `canchas` (
`IDCancha` int(10) unsigned NOT NULL,
  `Descripcion` varchar(60) NOT NULL,
  `Observacion` varchar(120) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `canchas`
--

INSERT INTO `canchas` (`IDCancha`, `Descripcion`, `Observacion`) VALUES
(1, 'Cancha Futbol', NULL),
(2, 'Cancha Volleyball/Basketball', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DeporteTipo`
--

CREATE TABLE `DeporteTipo` (
`IdTipoDeporte` int(11) NOT NULL,
  `Descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `DeporteTipo`
--

INSERT INTO `DeporteTipo` (`IdTipoDeporte`, `Descripcion`) VALUES
(1, 'Futbol'),
(2, 'Voleibol'),
(3, 'Basketball'),
(4, 'Ping Pong');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Equipos`
--

CREATE TABLE `Equipos` (
`IdTorneo` int(11) NOT NULL,
  `NombreEquipo` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `cuenta` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `carrera` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Equipos`
--

INSERT INTO `Equipos` (`IdTorneo`, `NombreEquipo`, `nombre`, `cuenta`, `telefono`, `correo`, `carrera`) VALUES
(11, 'estrellas', 'Carlos Dario Flores Nuñez', '41011069', '97015834', 'a', 'Ing. en Informática'),
(10, 'estrellas', 'Carlos Dario Flores Nuñez', '41011060', '97015834', 'a', 'Lic. en Derecho'),
(9, 'estrellas', 'Carlos Dario Flores Nuñez', '41011039', '97015834', 'a', 'Lic. en Turismo'),
(8, 'estrellas', 'Carlos Dario Flores Nuñez', '41013069', '97015834', 'a', 'Lic. en Diseño Gráfico'),
(7, 'estrellas', 'Carlos Dario Flores Nuñez', '42011069', '97015834', 't', 'Lic. en Diseño Gráfico'),
(6, 'estrellas', 'Carlos Dario Flores Nuñez', '81011069', '97015834', 'r', 'Lic. en Mercadotécnia'),
(5, 'masters', 'Carlos Dario Flores Nuñez', 'aqw', '97015834', 'fr', 'Lic. en Diseño Gráfico'),
(4, 'estrellas', 'Carlos Dario Flores Nuñez', '31011069', '97015834', 'd', 'Lic. en Diseño Gráfico'),
(3, 'estrellas', 'Carlos Dario Flores Nuñez', '41511069', '97015834', 'q', 'Lic. en Diseño Gráfico'),
(2, 'estrellas', 'Carlos Dario Flores Nuñez', '456511069', '97015834', 'q', 'Lic. en Administración de Empresas'),
(1, 'estrellas', 'Carlos Dario Flores Nuñez', 'aqw', '24406189', 'a', 'Ing. en Informática'),
(48, 'Fullsoccer', '', '', '', '', ''),
(47, 'Fullsoccer', '', '', '', '', ''),
(46, 'Fullsoccer', '', '', '', '', ''),
(45, 'Fullsoccer', 'Carlos Dario Flores Nuñez', '11111118', '3054361408', 'hg', 'Lic. en Turismo'),
(44, 'Fullsoccer', 'Carlos vFlores Nuñez', '11111117', '97015834', 'ds', 'Lic. en Administración de Empresas'),
(19, 'nuevos', 'Carlos Dario', '41011069', '24406189', 'carlos-flores', 'Ing. en Informática'),
(43, 'Fullsoccer', 'dsf', '11111116', '3054361408', 'carlos-flores', 'Lic. en Turismo'),
(42, 'Fullsoccer', 'as', '11111115', '24406189', 'u', 'Lic. en Administración de Empresas'),
(25, 'nuevos2', 'Carlos Dario Flores Nuñez', '41011069', '97015834', 'carlos-flores', 'Ing. en Informática'),
(41, 'Fullsoccer', 'Carlos Dario Flores Nuñez', '11111114', '97015834', 'fr', 'Lic. en Administración de Empresas'),
(40, 'Fullsoccer', 'Carlos Dario Flores Nuñez / Aereo', '41011069', '3054361408', 'carlos-flores', 'Lic. en Administración de Empresas'),
(39, 'Fullsoccer', 'Carlos Dario Flores Nuñez / Aereo', '11111113', '3054361408', '2c', 'Lic. en Turismo'),
(37, 'Fullsoccer', 'Carlos Dario Flores Nuñez', '11111111', '24406189', 'carlos-flores', 'Ing. en Informática'),
(36, 'nuevos2', 'cv', '4343', '77', 'a2', 'Lic. en Turismo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
`IDEstado` int(10) unsigned NOT NULL,
  `Descripcion` varchar(60) NOT NULL,
  `Observacion` varchar(120) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`IDEstado`, `Descripcion`, `Observacion`) VALUES
(1, 'Disponible', ''),
(2, 'Reservado', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoimplemento`
--

CREATE TABLE `estadoimplemento` (
`IDEstadoImplemento` int(10) unsigned NOT NULL,
  `Descripcion` varchar(60) NOT NULL,
  `Observacion` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estadoimplemento`
--

INSERT INTO `estadoimplemento` (`IDEstadoImplemento`, `Descripcion`, `Observacion`) VALUES
(1, 'Disponible', NULL),
(2, 'Prestado', NULL),
(3, 'Extraviado', NULL),
(4, 'Da�ado', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
`IdEstudiante` int(8) unsigned NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Apellido` varchar(60) NOT NULL,
  `Telefono` varchar(11) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `contra` varchar(100) NOT NULL,
  `Carrera` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41151071 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`IdEstudiante`, `Nombre`, `Apellido`, `Telefono`, `Correo`, `contra`, `Carrera`) VALUES
(40911114, 'Rony', 'Rodriguez', '31769255', 'gnrronny_0890@unitec.edu', 'pollito', 'Ing. en Informática'),
(41011069, 'Carlos Dario', 'Flores Nuñez', '32477582', 'carlos-flores@unitec.edu', 'a', 'Ing. en Informatica'),
(41111056, 'Anngy', 'Sanchez', '', 'amoore@unitec.edu', '', 'Informatica'),
(41151070, 'Derek', 'Jimenez', '', 'derek.jimenez@unitec.edu', '', 'Informatica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gt`
--

CREATE TABLE `gt` (
`id` int(11) NOT NULL,
  `torneo` varchar(200) NOT NULL,
  `grupo` varchar(200) NOT NULL,
  `fecha` varchar(40) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gt`
--

INSERT INTO `gt` (`id`, `torneo`, `grupo`, `fecha`) VALUES
(4, 'Jaguar Champions League', 'masters', '30/09/2014'),
(5, 'futbol', 'masters', '14/09/2014');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `implementos`
--

CREATE TABLE `implementos` (
`IDImplemento` int(10) unsigned NOT NULL,
  `Descripcion` varchar(60) NOT NULL,
  `TipoDeporte` varchar(11) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Observacion` varchar(120) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `implementos`
--

INSERT INTO `implementos` (`IDImplemento`, `Descripcion`, `TipoDeporte`, `Estado`, `Observacion`) VALUES
(1, 'Balon Rayado Futbol', 'Futbol', 'Disponible', ''),
(2, 'Balon Voleibol', 'Voleibol', 'Disponible', ''),
(3, 'Balon Basketball', 'Basketball', 'Prestado', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamoimplemento`
--

CREATE TABLE `prestamoimplemento` (
`IDPrestamoImplemento` int(10) unsigned NOT NULL,
  `IDImplemento` int(10) unsigned NOT NULL,
  `IDEstudiante` int(10) unsigned NOT NULL,
  `FechaPrestamo` varchar(20) NOT NULL,
  `HoraPrestamo` varchar(20) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `PrestadoPor` varchar(60) DEFAULT NULL,
  `HoraDevolucion` varchar(20) DEFAULT NULL,
  `RecibidoPor` varchar(60) DEFAULT NULL,
  `Observacion` varchar(120) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prestamoimplemento`
--

INSERT INTO `prestamoimplemento` (`IDPrestamoImplemento`, `IDImplemento`, `IDEstudiante`, `FechaPrestamo`, `HoraPrestamo`, `Estado`, `PrestadoPor`, `HoraDevolucion`, `RecibidoPor`, `Observacion`) VALUES
(1, 1, 41151070, '9/20/2014', '12:32:07 AM', 'Devuelto', NULL, NULL, NULL, NULL),
(2, 2, 41151070, '9/20/2014', '3:25:48 PM', 'Devuelto', NULL, NULL, NULL, NULL),
(3, 3, 41151070, '9/26/2014', '6:05:45 PM', 'Devuelto', NULL, NULL, NULL, NULL),
(4, 3, 41151070, '9/26/2014', '6:10:38 PM', 'Prestado', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacioncancha`
--

CREATE TABLE `reservacioncancha` (
`IdReservacion` int(10) unsigned NOT NULL,
  `IdCancha` int(10) unsigned NOT NULL,
  `FechaReservacion` varchar(20) NOT NULL,
  `HoraReservacion` varchar(20) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `IdEstudiante` int(8) unsigned NOT NULL,
  `AprobadoPor` int(10) unsigned DEFAULT NULL,
  `FechaHoraSolicitud` varchar(60) NOT NULL,
  `PrestadoPor` varchar(60) DEFAULT NULL,
  `FechaDevolucion` varchar(20) DEFAULT NULL,
  `RecibidoPor` varchar(60) DEFAULT NULL,
  `Observacion` varchar(120) DEFAULT NULL,
  `Ejecutada` varchar(20) DEFAULT NULL,
  `IdEstudiante2` int(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reservacioncancha`
--

INSERT INTO `reservacioncancha` (`IdReservacion`, `IdCancha`, `FechaReservacion`, `HoraReservacion`, `Estado`, `IdEstudiante`, `AprobadoPor`, `FechaHoraSolicitud`, `PrestadoPor`, `FechaDevolucion`, `RecibidoPor`, `Observacion`, `Ejecutada`, `IdEstudiante2`) VALUES
(1, 2, '9/22/2014', '4:00:00 PM', 'Aprobada', 41151070, NULL, '9/20/2014 4:04:02 AM', NULL, NULL, NULL, NULL, NULL, 0),
(2, 1, '9/22/2014', '5:00:00 PM', 'Denegada', 41151070, NULL, '9/20/2014 3:32:07 PM', NULL, NULL, NULL, NULL, NULL, 0),
(10, 2, '10/03/2014', '07:00:00 PM', 'Pendiente', 41011069, NULL, ' 09/26/14 12:36:33 AM', NULL, NULL, NULL, NULL, NULL, 0),
(12, 2, '10/01/2014', '08:00:00 PM', 'Pendiente', 41011069, NULL, ' 09/26/14 01:45:16 AM', NULL, NULL, NULL, NULL, NULL, 41011069),
(13, 2, '10/28/2014', '06:00:00 PM', 'Denegada', 41011069, NULL, ' 09/26/14 05:34:19 AM', NULL, NULL, NULL, NULL, NULL, 0),
(14, 1, '10/02/2014', '02:00:00 PM', 'Aprobada', 41011069, NULL, ' 09/26/14 05:42:09 AM', NULL, NULL, NULL, NULL, NULL, 41011069),
(15, 2, '10/03/2014', '07:00:00 PM', 'Pendiente', 40911114, NULL, ' 09/26/14 08:30:51 PM', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reto`
--

CREATE TABLE `reto` (
`id` int(11) NOT NULL,
  `numerocuenta` int(11) NOT NULL,
  `cancha` varchar(200) NOT NULL,
  `anyo` varchar(100) NOT NULL,
  `mes` varchar(100) NOT NULL,
  `dia` varchar(100) NOT NULL,
  `periodo` varchar(200) NOT NULL,
  `fecha` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reto`
--

INSERT INTO `reto` (`id`, `numerocuenta`, `cancha`, `anyo`, `mes`, `dia`, `periodo`, `fecha`) VALUES
(2, 2, '1', '2014', '09', '29', '08:00:00 PM', '2014-10-26'),
(24, 41011069, '2', '2014', '09', '30', '06:00:00 PM', '2014-09-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
`id` int(11) NOT NULL,
  `numerocuenta` int(50) NOT NULL,
  `anyo` varchar(50) NOT NULL,
  `mes` varchar(50) NOT NULL,
  `dia` varchar(100) NOT NULL,
  `hora` varchar(50) NOT NULL,
  `cancha` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `numerocuenta2` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id`, `numerocuenta`, `anyo`, `mes`, `dia`, `hora`, `cancha`, `estado`, `numerocuenta2`) VALUES
(1, 41011069, '2014', '09', '30', '20', '', 'Pendiente', '0'),
(3, 41011069, '30', '09', '2014', '17', 'Basket', 'Pendiente', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla`
--

CREATE TABLE `tabla` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` int(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temp`
--

CREATE TABLE `temp` (
`id` int(8) NOT NULL,
  `nombret` varchar(50) NOT NULL,
  `apellidot` varchar(100) NOT NULL,
  `telefonot` varchar(11) NOT NULL,
  `contrat` varchar(50) NOT NULL,
  `numerocuentat` int(50) NOT NULL,
  `carrerat` varchar(100) NOT NULL,
  `correot` varchar(50) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temp`
--

INSERT INTO `temp` (`id`, `nombret`, `apellidot`, `telefonot`, `contrat`, `numerocuentat`, `carrerat`, `correot`, `num`) VALUES
(1, 'c', '', '', 'c', 3, 'Mercadotecnia', 'c', 6641);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo`
--

CREATE TABLE `torneo` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `periodo` varchar(3) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `torneo`
--

INSERT INTO `torneo` (`id`, `nombre`, `periodo`, `tipo`, `year`) VALUES
(1, 'Jaguar Champions League', 'IV', 'Futbol', 2014);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
`IDUsuario` int(8) unsigned NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Contrase�a` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41151071 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IDUsuario`, `Nombre`, `Contrase�a`) VALUES
(41151070, 'djimenez', 'loaded12');

--
-- �ndices para tablas volcadas
--

--
-- Indices de la tabla `base`
--
ALTER TABLE `base`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `canchas`
--
ALTER TABLE `canchas`
 ADD PRIMARY KEY (`IDCancha`) USING BTREE;

--
-- Indices de la tabla `DeporteTipo`
--
ALTER TABLE `DeporteTipo`
 ADD PRIMARY KEY (`IdTipoDeporte`);

--
-- Indices de la tabla `Equipos`
--
ALTER TABLE `Equipos`
 ADD PRIMARY KEY (`IdTorneo`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
 ADD PRIMARY KEY (`IDEstado`) USING BTREE;

--
-- Indices de la tabla `estadoimplemento`
--
ALTER TABLE `estadoimplemento`
 ADD PRIMARY KEY (`IDEstadoImplemento`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
 ADD PRIMARY KEY (`IdEstudiante`) USING BTREE;

--
-- Indices de la tabla `gt`
--
ALTER TABLE `gt`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `implementos`
--
ALTER TABLE `implementos`
 ADD PRIMARY KEY (`IDImplemento`);

--
-- Indices de la tabla `prestamoimplemento`
--
ALTER TABLE `prestamoimplemento`
 ADD PRIMARY KEY (`IDPrestamoImplemento`);

--
-- Indices de la tabla `reservacioncancha`
--
ALTER TABLE `reservacioncancha`
 ADD PRIMARY KEY (`IdReservacion`) USING BTREE;

--
-- Indices de la tabla `reto`
--
ALTER TABLE `reto`
 ADD PRIMARY KEY (`id`,`numerocuenta`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla`
--
ALTER TABLE `tabla`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temp`
--
ALTER TABLE `temp`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `torneo`
--
ALTER TABLE `torneo`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`IDUsuario`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `base`
--
ALTER TABLE `base`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `canchas`
--
ALTER TABLE `canchas`
MODIFY `IDCancha` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `DeporteTipo`
--
ALTER TABLE `DeporteTipo`
MODIFY `IdTipoDeporte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `Equipos`
--
ALTER TABLE `Equipos`
MODIFY `IdTorneo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
MODIFY `IDEstado` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `estadoimplemento`
--
ALTER TABLE `estadoimplemento`
MODIFY `IDEstadoImplemento` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
MODIFY `IdEstudiante` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41151071;
--
-- AUTO_INCREMENT de la tabla `gt`
--
ALTER TABLE `gt`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `implementos`
--
ALTER TABLE `implementos`
MODIFY `IDImplemento` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `prestamoimplemento`
--
ALTER TABLE `prestamoimplemento`
MODIFY `IDPrestamoImplemento` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `reservacioncancha`
--
ALTER TABLE `reservacioncancha`
MODIFY `IdReservacion` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `reto`
--
ALTER TABLE `reto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tabla`
--
ALTER TABLE `tabla`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `temp`
--
ALTER TABLE `temp`
MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `torneo`
--
ALTER TABLE `torneo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `IDUsuario` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41151071;