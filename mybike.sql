-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2020 a las 05:50:35
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
  `firstname` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `lastname` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `type` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id` int(10) NOT NULL,
  `password` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `typeBike` char(30) COLLATE utf8_spanish2_ci NOT NULL,
  `serialBike` int(10) NOT NULL,
  `typeUser` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `type`, `id`, `password`, `typeBike`, `serialBike`, `typeUser`) VALUES
('Danny', 'Espinosa Diaz', 'Cédula de ciudadania', 1070782330, '12345', '', 0, 1),
('prueba', 'prueba', 'Cédula de ciudadania', 1070782331, '12345', '', 0, 2),
('Alejandro', 'Sainz', 'Cédula de ciudadania', 12345, '12345', '', 0, 1),
('Carlos Ivan', 'Rivera Parra', 'Cédula de ciudadania', 123, '132', '', 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
