-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2022 a las 02:52:05
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

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

CREATE TABLE `arbol` (
  `id` int(11) NOT NULL,
  `id_hoja` int(11) NOT NULL,
  `id_tronco` int(11) NOT NULL,
  `fruto` int(11) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `origen` int(11) NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `sitio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `arbol`
--

INSERT INTO `arbol` (`id`, `id_hoja`, `id_tronco`, `fruto`, `nombre`, `origen`, `link`, `sitio`) VALUES
(1, 1, 1, 1, 'aguacatillo', 2, 'https://greenroots.com.co/arbol.php', 2),
(2, 2, 3, 1, 'yarumo', 2, 'https://greenroots.com.co/arbol1.php', 2),
(3, 3, 1, 1, 'clavelino', 1, 'https://greenroots.com.co/arbol2.php', 2),
(4, 3, 2, 1, 'leucena', 1, 'https://greenroots.com.co/arbol3.php', 2),
(5, 4, 3, 1, 'higueron', 1, 'https://greenroots.com.co/arbol4.php', 2),
(6, 5, 1, 1, 'guayacán de Manizales ', 2, 'https://greenroots.com.co/arbol5.php', 2),
(7, 1, 1, 1, 'swinglea', 1, 'https://greenroots.com.co/arbol6.php', 2),
(8, 4, 1, 1, 'limón', 2, 'https://greenroots.com.co/arbol7.php', 2),
(9, 3, 1, 1, 'ébano ', 2, 'https://greenroots.com.co/arbol8.php', 2),
(10, 14, 4, 1, 'palma real', 1, 'https://greenroots.com.co/arbol9.php', 2),
(11, 14, 4, 1, 'palma real', 1, 'https://greenroots.com.co/arbol9.php', 2),
(12, 6, 3, 2, 'guaduilla', 1, 'https://greenroots.com.co/arbol10.php', 1),
(13, 7, 2, 2, 'guadua ', 2, 'https://greenroots.com.co/arbol11.php', 1),
(14, 8, 1, 1, 'hayuelo', 2, 'https://greenroots.com.co/arbol12.php', 1),
(15, 14, 3, 1, 'palma real', 1, 'https://greenroots.com.co/arbol13.php', 1),
(16, 9, 2, 1, 'algarrobo ', 1, 'https://greenroots.com.co/arbol15.php', 5),
(17, 10, 2, 2, 'guanábano', 2, 'https://greenroots.com.co/arbol16.php', 5),
(18, 10, 2, 2, 'guanábano', 2, 'https://greenroots.com.co/arbol18.php', 5),
(20, 11, 2, 1, 'guayabo', 2, 'https://greenroots.com.co/arbol19.php', 5),
(21, 14, 4, 1, 'palma real', 1, 'https://greenroots.com.co/arbol20.php', 3),
(22, 4, 3, 1, 'higueron', 1, 'https://greenroots.com.co/arbol21.php', 3),
(23, 3, 1, 2, 'carbonero', 2, 'https://greenroots.com.co/arbol22.php', 3),
(24, 12, 2, 2, 'nogal', 1, 'https://greenroots.com.co/arbol23.php', 3),
(25, 3, 1, 1, 'leucena', 1, 'https://greenroots.com.co/arbol24.php', 3),
(26, 3, 1, 1, 'leucena', 1, 'https://greenroots.com.co/arbol25.php', 3),
(28, 3, 1, 2, 'carbonero', 2, 'https://greenroots.com.co/arbol26.php', 3),
(31, 15, 2, 1, 'samán', 2, 'https://greenroots.com.co/arbol27.php', 3),
(32, 1, 1, 1, 'aguacatillo', 2, 'https://greenroots.com.co/arbol28.php', 3),
(33, 13, 2, 2, 'lechero', 1, 'https://greenroots.com.co/arbol29.php', 3),
(34, 3, 1, 2, 'carbonero', 2, 'https://greenroots.com.co/arbol31.php', 3),
(35, 3, 1, 1, 'leucena', 1, 'https://greenroots.com.co/arbol32.php', 3),
(36, 13, 2, 2, 'lechero', 1, 'https://greenroots.com.co/arbol33.php', 3),
(37, 1, 1, 1, 'aguacatillo', 2, 'https://greenroots.com.co/arbol34.php', 3),
(38, 10, 2, 2, 'guanábano', 2, 'https://greenroots.com.co/arbol35.php', 3),
(39, 13, 2, 2, 'lechero', 1, 'https://greenroots.com.co/arbol36.php', 3),
(40, 4, 2, 1, 'majagua', 1, 'https://greenroots.com.co/arbol37.php', 3),
(41, 13, 2, 1, 'matapalo', 2, 'https://greenroots.com.co/arbol38.php', 3),
(42, 4, 1, 1, 'limón', 1, 'https://greenroots.com.co/arbol39.php', 3),
(43, 4, 3, 1, 'higueron', 1, 'https://greenroots.com.co/arbol40.php', 3),
(44, 11, 1, 1, 'guayabo', 2, 'https://greenroots.com.co/arbol41.php', 3),
(45, 13, 2, 1, 'eucalipto', 1, 'https://greenroots.com.co/arbol42.php', 3),
(46, 10, 2, 2, 'guanábano', 2, 'https://greenroots.com.co/arbol43.php', 3),
(47, 4, 2, 1, 'majagua', 1, 'https://greenroots.com.co/arbol44.php', 3),
(48, 10, 2, 2, 'guanábano', 2, 'https://greenroots.com.co/arbol45.php', 3),
(49, 13, 2, 1, 'matapalo', 2, 'https://greenroots.com.co/arbol46.php', 3),
(50, 13, 2, 1, 'palo blanco', 1, 'https://greenroots.com.co/arbol47.php', 3),
(51, 4, 2, 1, 'almendro', 1, 'https://greenroots.com.co/arbol48.php', 3),
(52, 4, 3, 1, 'higueron', 1, 'https://greenroots.com.co/arbol49.php', 4),
(53, 14, 1, 1, 'palma reina', 1, 'https://greenroots.com.co/arbol50.php', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autenticar_perfil`
--

CREATE TABLE `autenticar_perfil` (
  `id` int(11) NOT NULL,
  `perfil` varchar(20) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

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

CREATE TABLE `autenticar_usuario` (
  `id` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf32_spanish2_ci NOT NULL,
  `password` varchar(32) COLLATE utf32_spanish2_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

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

CREATE TABLE `contador` (
  `id` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Url` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `Ip` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fruto`
--

CREATE TABLE `fruto` (
  `id_fruto` int(11) NOT NULL,
  `fruto` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `fruto`
--

INSERT INTO `fruto` (`id_fruto`, `fruto`) VALUES
(1, 'si'),
(2, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoja`
--

CREATE TABLE `hoja` (
  `id_hoja` int(11) NOT NULL,
  `tipo_hoja` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `hoja`
--

INSERT INTO `hoja` (`id_hoja`, `tipo_hoja`) VALUES
(4, 'alterna'),
(9, 'bifoliada'),
(15, 'binnada'),
(3, 'bipinnada'),
(7, 'caulinares'),
(1, 'eliptica'),
(11, 'eliptica-oblonga'),
(10, 'eliptica-obovada'),
(12, 'imparipinada'),
(13, 'lanceolada'),
(8, 'lanceolada-lineal'),
(5, 'opuesta'),
(2, 'peltada'),
(14, 'pinnada'),
(6, 'pseudopeciolada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origen`
--

CREATE TABLE `origen` (
  `id_origen` int(11) NOT NULL,
  `origen` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `origen`
--

INSERT INTO `origen` (`id_origen`, `origen`) VALUES
(1, 'exotica '),
(2, 'nativa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitio`
--

CREATE TABLE `sitio` (
  `id_sitio` int(11) NOT NULL,
  `sitio` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sitio`
--

INSERT INTO `sitio` (`id_sitio`, `sitio`) VALUES
(1, 'patios'),
(2, 'biblioteca'),
(3, 'sendero'),
(4, 'entrada'),
(5, 'musica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tronco`
--

CREATE TABLE `tronco` (
  `id_tronco` int(11) NOT NULL,
  `tipo_tronco` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tronco`
--

INSERT INTO `tronco` (`id_tronco`, `tipo_tronco`) VALUES
(1, 'delgado'),
(3, 'delgado_liso'),
(2, 'grueso'),
(4, 'grueso-liso');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arbol`
--
ALTER TABLE `arbol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Hoja` (`id_hoja`),
  ADD KEY `Tronco` (`id_tronco`),
  ADD KEY `fruto` (`fruto`),
  ADD KEY `sitio` (`sitio`),
  ADD KEY `arbol_ibfk_5` (`origen`);

--
-- Indices de la tabla `autenticar_perfil`
--
ALTER TABLE `autenticar_perfil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `perfil` (`perfil`);

--
-- Indices de la tabla `autenticar_usuario`
--
ALTER TABLE `autenticar_usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_perfil` (`id_perfil`);

--
-- Indices de la tabla `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fruto`
--
ALTER TABLE `fruto`
  ADD PRIMARY KEY (`id_fruto`);

--
-- Indices de la tabla `hoja`
--
ALTER TABLE `hoja`
  ADD PRIMARY KEY (`id_hoja`),
  ADD KEY `Tipo_hoja` (`tipo_hoja`);

--
-- Indices de la tabla `origen`
--
ALTER TABLE `origen`
  ADD PRIMARY KEY (`id_origen`);

--
-- Indices de la tabla `sitio`
--
ALTER TABLE `sitio`
  ADD PRIMARY KEY (`id_sitio`);

--
-- Indices de la tabla `tronco`
--
ALTER TABLE `tronco`
  ADD PRIMARY KEY (`id_tronco`),
  ADD KEY `Tipo_tronco` (`tipo_tronco`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arbol`
--
ALTER TABLE `arbol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `autenticar_perfil`
--
ALTER TABLE `autenticar_perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `autenticar_usuario`
--
ALTER TABLE `autenticar_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `arbol`
--
ALTER TABLE `arbol`
  ADD CONSTRAINT `arbol_ibfk_1` FOREIGN KEY (`id_hoja`) REFERENCES `hoja` (`id_hoja`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `arbol_ibfk_2` FOREIGN KEY (`id_tronco`) REFERENCES `tronco` (`id_tronco`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `arbol_ibfk_3` FOREIGN KEY (`fruto`) REFERENCES `fruto` (`id_fruto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `arbol_ibfk_4` FOREIGN KEY (`sitio`) REFERENCES `sitio` (`id_sitio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `arbol_ibfk_5` FOREIGN KEY (`origen`) REFERENCES `origen` (`id_origen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `autenticar_usuario`
--
ALTER TABLE `autenticar_usuario`
  ADD CONSTRAINT `usuario_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `autenticar_perfil` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
