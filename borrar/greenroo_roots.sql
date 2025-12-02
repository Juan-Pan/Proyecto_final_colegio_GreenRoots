-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-09-2022 a las 03:36:00
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
-- Base de datos: `greenroo_roots`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arbol`
--

DROP TABLE IF EXISTS `arbol`;
CREATE TABLE IF NOT EXISTS `arbol` (
  `Hoja` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Tronco` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Fruto` tinyint(4) NOT NULL,
  `Nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Descripción` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Ubicación` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Sitio` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Nombre`),
  UNIQUE KEY `Sitio` (`Sitio`),
  KEY `Hoja` (`Hoja`),
  KEY `Tronco` (`Tronco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autenticar_perfil`
--

DROP TABLE IF EXISTS `autenticar_perfil`;
CREATE TABLE IF NOT EXISTS `autenticar_perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(20) COLLATE utf32_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `perfil` (`perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `autenticar_perfil`
--

INSERT INTO `autenticar_perfil` (`id`, `perfil`) VALUES
(1, 'administrador'),
(2, 'colaborador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autenticar_usuario`
--

DROP TABLE IF EXISTS `autenticar_usuario`;
CREATE TABLE IF NOT EXISTS `autenticar_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_perfil` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf32_spanish2_ci NOT NULL,
  `password` varchar(32) COLLATE utf32_spanish2_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf32_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `id_perfil` (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `autenticar_usuario`
--

INSERT INTO `autenticar_usuario` (`id`, `id_perfil`, `username`, `password`, `nombre`) VALUES
(1, 1, 'Ash', 'fe9b28787c06cbac2237b06029bb940d', 'Ashlee'),
(2, 1, 'nikolai', '7905848b13606d3d6152bab509073724', 'Claudia'),
(3, 1, 'papaleta', '5700decbc7af4ab039118cf94c3906c8', 'Juan David');

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
  `Tipo_hoja` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  KEY `Tipo_hoja` (`Tipo_hoja`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitio`
--

DROP TABLE IF EXISTS `sitio`;
CREATE TABLE IF NOT EXISTS `sitio` (
  `biblioteca` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `patio` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `sendero` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sitio`
--

INSERT INTO `sitio` (`biblioteca`, `patio`, `sendero`) VALUES
('sendero', 'biblioteca', 'patio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tronco`
--

DROP TABLE IF EXISTS `tronco`;
CREATE TABLE IF NOT EXISTS `tronco` (
  `Tipo_tronco` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  KEY `Tipo_tronco` (`Tipo_tronco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autenticar_usuario`
--
ALTER TABLE `autenticar_usuario`
  ADD CONSTRAINT `usuario_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `autenticar_perfil` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `hoja`
--
ALTER TABLE `hoja`
  ADD CONSTRAINT `hoja_ibfk_1` FOREIGN KEY (`Tipo_hoja`) REFERENCES `arbol` (`Hoja`);

--
-- Filtros para la tabla `tronco`
--
ALTER TABLE `tronco`
  ADD CONSTRAINT `tronco_ibfk_1` FOREIGN KEY (`Tipo_tronco`) REFERENCES `arbol` (`Tronco`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
