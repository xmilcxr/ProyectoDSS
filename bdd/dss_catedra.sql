-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-03-2024 a las 17:44:40
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dss_catedra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_tipo`
--

DROP TABLE IF EXISTS `cuenta_tipo`;
CREATE TABLE IF NOT EXISTS `cuenta_tipo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(75) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

DROP TABLE IF EXISTS `prestamo`;
CREATE TABLE IF NOT EXISTS `prestamo` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `DUI` varchar(10) NOT NULL,
  `Tipo de cuenta` varchar(75) NOT NULL,
  `Cantidad` decimal(65,2) NOT NULL,
  `Interes` int(3) NOT NULL,
  `Estado` varchar(9) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales_banco`
--

DROP TABLE IF EXISTS `sucursales_banco`;
CREATE TABLE IF NOT EXISTS `sucursales_banco` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Direccion` varchar(400) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Nombre del Gerente` varchar(350) NOT NULL,
  `Apellidos del Gerente` varchar(350) NOT NULL,
  `Email del Gerente` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DUI` varchar(10) NOT NULL,
  `Nombre Usuario` varchar(20) NOT NULL,
  `Nombres` varchar(350) NOT NULL,
  `Apellidos` varchar(350) NOT NULL,
  `Fecha de nacimiento` date NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `Correo Electronico` varchar(200) NOT NULL,
  `Salario` decimal(65,2) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Tipo de cuenta` varchar(75) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
