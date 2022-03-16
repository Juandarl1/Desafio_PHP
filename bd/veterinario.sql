-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-03-2022 a las 22:36:04
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

DROP TABLE IF EXISTS `cita`;
CREATE TABLE IF NOT EXISTS `cita` (
  `fecha_hora` datetime NOT NULL,
  `nombre_apellido` varchar(50) NOT NULL,
  `nombre_mascota` varchar(30) NOT NULL,
  PRIMARY KEY (`fecha_hora`),
  KEY `nombre_apellido` (`nombre_apellido`),
  KEY `nombre_mascota` (`nombre_mascota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `Cedula` int(5) NOT NULL,
  `nombre_apellido` varchar(50) NOT NULL,
  `nombre_mascota` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Cedula` (`Cedula`),
  KEY `nombre_apellido` (`nombre_apellido`),
  KEY `nombre_masacota` (`nombre_mascota`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `Cedula`, `nombre_apellido`, `nombre_mascota`) VALUES
(1, 72, 'Dilan', 'damian'),
(2, 102, 'Dilan Cogollo Maturana', 'damian'),
(3, 103, 'Felipe', 'Chavi');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`nombre_apellido`) REFERENCES `clientes` (`nombre_apellido`),
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`nombre_mascota`) REFERENCES `clientes` (`nombre_mascota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
