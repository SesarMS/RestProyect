-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2024 a las 01:46:59
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cesarrest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_categoria`
--

CREATE TABLE `tm_categoria` (
  `CAT_ID` int(11) NOT NULL,
  `CAT_NOM` varchar(50) DEFAULT NULL,
  `CAT_OBS` varchar(250) DEFAULT NULL,
  `EST` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_categoria`
--

INSERT INTO `tm_categoria` (`CAT_ID`, `CAT_NOM`, `CAT_OBS`, `EST`) VALUES
(1, 'Electrónicos', 'Productos electrónicos', 1),
(2, 'Ropa', 'Ropa de moda', 1),
(3, 'Hogar', 'Artículos para el hogar', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_producto`
--

CREATE TABLE `tm_producto` (
  `producto_id` int(11) NOT NULL,
  `producto_nombre` varchar(255) DEFAULT NULL,
  `producto_descripcion` varchar(255) DEFAULT NULL,
  `CAT_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_producto`
--

INSERT INTO `tm_producto` (`producto_id`, `producto_nombre`, `producto_descripcion`, `CAT_ID`) VALUES
(1, 'Smartphone', 'Teléfono inteligente de última generación', 1),
(2, 'Camiseta', 'Camiseta de algodón de alta calidad', 2),
(3, 'Juego de Sábanas', 'Juego de sábanas de seda para cama king-size', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  ADD PRIMARY KEY (`CAT_ID`);

--
-- Indices de la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  ADD PRIMARY KEY (`producto_id`),
  ADD KEY `fk_tm_producto_categoria` (`CAT_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  MODIFY `CAT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  MODIFY `producto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  ADD CONSTRAINT `fk_tm_producto_categoria` FOREIGN KEY (`CAT_ID`) REFERENCES `tm_categoria` (`CAT_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
