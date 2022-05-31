-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-05-2022 a las 17:15:56
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id18831733_asistencias_empleados`
--
CREATE DATABASE IF NOT EXISTS `id18831733_asistencias_empleados` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id18831733_asistencias_empleados`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `NumeroAsistencia` int(7) NOT NULL,
  `FechaRegistro` date NOT NULL,
  `NIF` varchar(9) NOT NULL,
  `HoraEntrada` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `NIF` varchar(9) NOT NULL,
  `NombreEmpleado` varchar(50) NOT NULL,
  `Puesto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `FechaRegistro` date NOT NULL,
  `NIF` varchar(9) NOT NULL,
  `HoraEntrada` time NOT NULL,
  `HoraSalida` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `NIF` varchar(9) CHARACTER SET utf8mb4 NOT NULL,
  `nombreusuario` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `contraseña` varchar(444) CHARACTER SET utf8mb4 NOT NULL,
  `permiso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`NumeroAsistencia`),
  ADD KEY `foreign` (`FechaRegistro`,`NIF`,`HoraEntrada`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`NIF`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`FechaRegistro`,`NIF`,`HoraEntrada`),
  ADD KEY `foreing NIF` (`NIF`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`NIF`),
  ADD UNIQUE KEY `nombreusuario` (`nombreusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `NumeroAsistencia` int(7) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `foreign` FOREIGN KEY (`FechaRegistro`,`NIF`,`HoraEntrada`) REFERENCES `registro` (`FechaRegistro`, `NIF`, `HoraEntrada`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `foreing NIF` FOREIGN KEY (`NIF`) REFERENCES `empleado` (`NIF`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `nif` FOREIGN KEY (`NIF`) REFERENCES `empleado` (`NIF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
