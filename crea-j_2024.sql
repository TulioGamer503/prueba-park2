-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2024 a las 02:01:33
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
-- Base de datos: `crea-j 2024`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ID_Administrador` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `CorreoElectronico` varchar(100) DEFAULT NULL,
  `Contraseña` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradoradministravigilante`
--

CREATE TABLE `administradoradministravigilante` (
  `ID_Administrador` int(11) NOT NULL,
  `ID_Vigilante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacioestacionamiento`
--

CREATE TABLE `espacioestacionamiento` (
  `ID_EspacioEstacionamiento` int(11) NOT NULL,
  `Estado` enum('ocupado','desocupado') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `CorreoElectronico` varchar(100) DEFAULT NULL,
  `Contraseña` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariovisualizaestacionamiento`
--

CREATE TABLE `usuariovisualizaestacionamiento` (
  `ID_Usuario` int(11) NOT NULL,
  `ID_EspacioEstacionamiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vigilante`
--

CREATE TABLE `vigilante` (
  `ID_Vigilante` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `CorreoElectronico` varchar(100) DEFAULT NULL,
  `Contraseña` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vigilanteadministraespacio`
--

CREATE TABLE `vigilanteadministraespacio` (
  `ID_Vigilante` int(11) NOT NULL,
  `ID_EspacioEstacionamiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_Administrador`);

--
-- Indices de la tabla `administradoradministravigilante`
--
ALTER TABLE `administradoradministravigilante`
  ADD PRIMARY KEY (`ID_Administrador`,`ID_Vigilante`),
  ADD KEY `ID_Vigilante` (`ID_Vigilante`);

--
-- Indices de la tabla `espacioestacionamiento`
--
ALTER TABLE `espacioestacionamiento`
  ADD PRIMARY KEY (`ID_EspacioEstacionamiento`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- Indices de la tabla `usuariovisualizaestacionamiento`
--
ALTER TABLE `usuariovisualizaestacionamiento`
  ADD PRIMARY KEY (`ID_Usuario`,`ID_EspacioEstacionamiento`),
  ADD KEY `ID_EspacioEstacionamiento` (`ID_EspacioEstacionamiento`);

--
-- Indices de la tabla `vigilante`
--
ALTER TABLE `vigilante`
  ADD PRIMARY KEY (`ID_Vigilante`);

--
-- Indices de la tabla `vigilanteadministraespacio`
--
ALTER TABLE `vigilanteadministraespacio`
  ADD PRIMARY KEY (`ID_Vigilante`,`ID_EspacioEstacionamiento`),
  ADD KEY `ID_EspacioEstacionamiento` (`ID_EspacioEstacionamiento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID_Administrador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `espacioestacionamiento`
--
ALTER TABLE `espacioestacionamiento`
  MODIFY `ID_EspacioEstacionamiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vigilante`
--
ALTER TABLE `vigilante`
  MODIFY `ID_Vigilante` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradoradministravigilante`
--
ALTER TABLE `administradoradministravigilante`
  ADD CONSTRAINT `administradoradministravigilante_ibfk_1` FOREIGN KEY (`ID_Administrador`) REFERENCES `administrador` (`ID_Administrador`),
  ADD CONSTRAINT `administradoradministravigilante_ibfk_2` FOREIGN KEY (`ID_Vigilante`) REFERENCES `vigilante` (`ID_Vigilante`);

--
-- Filtros para la tabla `usuariovisualizaestacionamiento`
--
ALTER TABLE `usuariovisualizaestacionamiento`
  ADD CONSTRAINT `usuariovisualizaestacionamiento_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`),
  ADD CONSTRAINT `usuariovisualizaestacionamiento_ibfk_2` FOREIGN KEY (`ID_EspacioEstacionamiento`) REFERENCES `espacioestacionamiento` (`ID_EspacioEstacionamiento`);

--
-- Filtros para la tabla `vigilanteadministraespacio`
--
ALTER TABLE `vigilanteadministraespacio`
  ADD CONSTRAINT `vigilanteadministraespacio_ibfk_1` FOREIGN KEY (`ID_Vigilante`) REFERENCES `vigilante` (`ID_Vigilante`),
  ADD CONSTRAINT `vigilanteadministraespacio_ibfk_2` FOREIGN KEY (`ID_EspacioEstacionamiento`) REFERENCES `espacioestacionamiento` (`ID_EspacioEstacionamiento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
