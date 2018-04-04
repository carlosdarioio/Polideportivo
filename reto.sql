-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-09-2014 a las 10:11:33
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
-- Estructura de tabla para la tabla `reto`
--

CREATE TABLE IF NOT EXISTS `reto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numerocuenta` varchar(200) NOT NULL,
  `cancha` varchar(200) NOT NULL,
  `anyo` varchar(100) NOT NULL,
  `mes` varchar(100) NOT NULL,
  `dia` varchar(100) NOT NULL,
  `periodo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`,`numerocuenta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `reto`
--

INSERT INTO `reto` (`id`, `numerocuenta`, `cancha`, `anyo`, `mes`, `dia`, `periodo`) VALUES
(1, '1', 'Futbol', '2014', '09', '26', '16'),
(2, '2', 'Futbol', '2014', '10', '26', '20'),
(3, '1', 'Basket', '2014', '09', '16', '11'),
(5, '1', 'Futbol', '2014', '09', '26', '14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
