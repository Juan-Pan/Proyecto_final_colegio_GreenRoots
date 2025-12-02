-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-08-2022 a las 17:17:13
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `green_roots`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arbol`
--

DROP TABLE IF EXISTS `arbol`;
CREATE TABLE IF NOT EXISTS `arbol` (
  `Hoja` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Tronco` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Fruto` tinyint(2) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Descripción` text COLLATE utf8_spanish2_ci NOT NULL,
  `Ubicación` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Sitio` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--

DROP TABLE IF EXISTS `contador`;
CREATE TABLE IF NOT EXISTS `contador` (
  `id` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Url` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Ip` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoja`
--

DROP TABLE IF EXISTS `hoja`;
CREATE TABLE IF NOT EXISTS `hoja` (
  `Tipo_hoja` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitio`
--

DROP TABLE IF EXISTS `sitio`;
CREATE TABLE IF NOT EXISTS `sitio` (
  `1` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `2` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `3` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tronco`
--

DROP TABLE IF EXISTS `tronco`;
CREATE TABLE IF NOT EXISTS `tronco` (
  `Tipo_tronco` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
