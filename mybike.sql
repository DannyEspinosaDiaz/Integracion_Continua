-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2020 a las 17:25:58
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mybike`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `nº` int(11) NOT NULL,
  `fullname` char(70) COLLATE utf8_spanish2_ci NOT NULL,
  `typeid` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id` int(10) NOT NULL,
  `numberphone` char(10) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `typebike` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `serialbike` int(10) NOT NULL,
  `typeuser` char(13) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`nº`, `fullname`, `typeid`, `id`, `numberphone`, `pass`, `typebike`, `serialbike`, `typeuser`) VALUES
(18, 'Danny Espinosa Diaz', 'Cédula de ciudadania', 1070782330, '3208188167', '123', 'GW', 987654321, 'Administrador'),
(20, 'Prueba', 'Tarjeta de identidad', 132456, '123465', '123', 'Cannondale', 123456, 'Usuario'),
(21, 'Prueba', 'Tarjeta de identidad', 132456, '123465', '123', '', 123456, 'Tipo de usuar'),
(22, 'Prueba', 'Tarjeta de identidad', 132456, '123465', '123', '', 123456, 'Tipo de usuar'),
(23, 'Prueba', 'Tarjeta de identidad', 132456, '123465', '123', '', 123456, 'Tipo de usuar'),
(25, 'Prueba', 'Tarjeta de identidad', 12345789, '123465', '123', '', 123456, 'Tipo de usuar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nº`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `nº` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
