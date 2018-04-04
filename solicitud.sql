-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-09-2014 a las 10:11:42
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ceutec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE IF NOT EXISTS `solicitud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numerocuenta` varchar(50) NOT NULL,
  `anyo` varchar(50) NOT NULL,
  `mes` varchar(50) NOT NULL,
  `dia` varchar(100) NOT NULL,
  `hora` varchar(50) NOT NULL,
  `cancha` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `numerocuenta2` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id`, `numerocuenta`, `anyo`, `mes`, `dia`, `hora`, `cancha`, `estado`, `numerocuenta2`) VALUES
(1, '1', '2014', '09', '30', '20', '', '', '0'),
(3, '1', '30', '09', '2014', '17', 'Basket', 'pendiente', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
