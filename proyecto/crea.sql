-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2024 a las 23:17:04
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `nombre` text NOT NULL,
  `password` text NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `email`, `nombre`, `password`, `fecha_registro`) VALUES
(2, 'jr', 'jrsanchez@gmail.com', '123', '2024-06-19 15:35:20'),
(4, 'a', 'a', 'a', '2024-06-19 15:38:20'),
(5, 'a', 'a', 'a', '2024-06-19 15:38:20'),
(6, 'a', 'a', 'a', '2024-06-19 15:38:33'),
(7, 'a', 'a', 'a', '2024-06-19 15:38:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `email` text NOT NULL,
  `contra` text NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `apellido`, `email`, `contra`, `fecha_registro`) VALUES
(5, 'aaa', '', 'aaa', 'aaa@gmail.com', '2024-05-14 13:00:21'),
(6, 'aaa', '', 'aaa', 'aaa@gmail.com', '2024-05-14 13:00:31'),
(7, 'aaa', '', 'aaa', 'aaa@gmail.com', '2024-05-14 13:09:12'),
(8, 'a', '', 'a', 'a@gmail.com', '2024-05-14 13:09:22'),
(9, 'a', '', 'a', 'a@gmail.com', '2024-05-14 13:10:30'),
(10, 'a', '', 'a', 'a@gmail.com', '2024-05-14 13:23:08'),
(11, 'a', '', 'a', 'a@gmail.com', '2024-05-14 13:23:24'),
(12, 'jacinto', '', 'jr73@gmail.com', '123', '2024-05-26 18:31:27'),
(13, 'a', '', 'a', 'a', '2024-06-20 17:11:56'),
(14, 'julio', '', 'a', 'jr73@gmail.com', '2024-06-22 10:27:38'),
(15, 'julio', 'jacinto', 'jrsanchez@gmail.com', '$2y$10$wJEa/zTQhc94lROzR9ZsM.yos5K2VJMVhMkd4uLJ//SM/ojupvf6q', '2024-06-22 10:49:46'),
(16, 'julio', 'jacinto', 'jrsanchez@gmail.com', '$2y$10$H80SZEdGPxDg5fi4vB1v/uHD0RHslkUtMlcAWf0BN1Jb.JiVkafhC', '2024-06-22 10:51:03'),
(17, 'julio', 'jacinto', 'jrsanchez@gmail.com', '$2y$10$YNIncSUV//wGzcGaFBAtt.OAULvBfCNyQZTHJhr1o26GM8kq78piu', '2024-06-22 10:51:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id` int(11) NOT NULL,
  `reporte` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
