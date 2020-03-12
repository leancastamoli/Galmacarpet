-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2020 a las 14:05:17
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galmacarpet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `subtipo` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `modelo` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `variacion` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `titulo` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dibujo` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `colores` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_lana` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `tipo`, `subtipo`, `modelo`, `variacion`, `titulo`, `dibujo`, `colores`, `tipo_lana`, `imagen`) VALUES
(16, 'custom_rug', '', '', '', 'daniel1234', 'adios', 'adios', 'perfecto', 'catalogo.jpg'),
(17, 'custom_rug', '', '', '', 'dsadsa1', 'sadsa', 'dsadsa', 'dsadsa', 'catalogo.jpg'),
(18, 'custom_rug', '', '', '', 'a', 'a', 'a', 'a', 'everis.jpg'),
(19, 'pasillos', '2g', '', '', 's', 's', 's', 's', 'everis.jpg'),
(20, 'moqueta', 'residencial', 'infinity', '', 'o', 'o', 'o', 'o', 'everis.jpg'),
(21, 'moqueta', 'contract', 'custom_carpet', '3g', 'v', 'v', 'v', 'v', 'everis.jpg'),
(22, 'pasillos', '1g', '', '', 'titulo2', 'tidsallls', 'azul', 'verde', 'everis.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contraseña` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `correo`, `tipo`, `contraseña`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'admin'),
(2, 'trabajador', 'trabajador@trabajador.com', 'trabajador', 'trabajador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
