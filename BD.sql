-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-05-2022 a las 19:46:15
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

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`NumeroAsistencia`, `FechaRegistro`, `NIF`, `HoraEntrada`) VALUES
(1, '2022-05-02', '11111111A', '19:56:04'),
(2, '2022-05-02', '22222222B', '17:08:26'),
(3, '2022-05-02', '22222222B', '17:08:26'),
(22, '2022-05-30', '11111111A', '20:28:18'),
(24, '2022-05-31', 'jj', '15:37:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `NIF` varchar(9) NOT NULL,
  `NombreEmpleado` varchar(50) NOT NULL,
  `Puesto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`NIF`, `NombreEmpleado`, `Puesto`) VALUES
('00000000A', 'admin', 'admin'),
('11111111A', 'borja zazo', 'conductor'),
('22222222B', 'Fernando Alonso', 'Mecanico'),
('33333333C', 'Esteban Occon', 'Suplente'),
('De', 'De', 'De'),
('gg', 'gg', 'gg'),
('hh', 'hh', 'hh'),
('jj', 'jj', 'jj'),
('oo', 'oo', 'oo'),
('qq', 'qq', 'qq'),
('ROOOOOOOT', 'rootname', 'admin'),
('teeeeeest', 'testname', 'tester'),
('tytyty', 'tyyy', 'tyty'),
('usuario', 'usuario', 'usuario'),
('uu', 'uu', 'jjuu'),
('wew', 'wew', 'wewe'),
('ww', 'ww', 'ww'),
('xxx', 'xxxxxxxxxxxxxxx', 'xxxxx'),
('yt', 'yt', 'yt'),
('ytryrt', 'tyrtyt', 'tyrytr'),
('yy', 'yy', 'yy');

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

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`FechaRegistro`, `NIF`, `HoraEntrada`, `HoraSalida`) VALUES
('2022-05-02', '11111111A', '19:56:04', '22:56:04'),
('2022-05-02', '22222222B', '17:08:26', '21:08:58'),
('2022-05-03', '22222222B', '08:03:29', NULL),
('2022-05-03', '33333333C', '08:03:29', '13:03:29'),
('2022-05-28', '11111111A', '16:49:10', NULL),
('2022-05-30', '11111111A', '20:28:18', NULL),
('2022-05-30', 'jj', '22:29:53', '22:30:52'),
('2022-05-30', 'jj', '22:30:52', '22:32:01'),
('2022-05-31', 'jj', '15:37:34', NULL),
('2022-05-31', 'jj', '15:37:45', '15:38:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `NIF` varchar(9) CHARACTER SET utf8mb4 NOT NULL,
  `nombreusuario` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `contraseña` varchar(444) CHARACTER SET utf8mb4 NOT NULL,
  `permiso` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`NIF`, `nombreusuario`, `contraseña`, `permiso`) VALUES
('00000000A', 'admin', '$2y$04$wkde4C2UWSW3H.QiDw0UqeqO4jIbol/mN98fGJ4ducJq42d5wQouq', 4),
('De', 'De', '$2y$04$HIAtuO57jOsU8.Hrg4TWse5qgw9q93gonMaHXZ.JRNNdD6rEG3NW.', NULL),
('gg', 'gg', '$2y$04$FLwsD71d/iR.cXLCyj1yXOZJONLOWFsPQIE0VNzXHeLnSdBy5Lqw6', NULL),
('hh', 'hh', '$2y$04$rRxLjVkt3efWIhFm9ntiVu2xG1kuRsSYh7w/AVxdKmz9xsAwg3oai', NULL),
('jj', 'jj', '$2y$04$6DqNDN0jn84/Wq1zF8AHVuh2br7Qae6WojL3Gmlg/Sq33zE6jVVr2', 1),
('oo', 'oo', '$2y$04$M8xaTahtFm6cXBFlPWCXv.nn5w2TQokdfsX.6Ca22vAn6hRfeTVyW', 1),
('qq', 'qq', '$2y$04$v/yaN/CFZfpR4L1KkUtQO.aEzmE.kgW2HCJA.OWszZM5QzVcsLVF2', 1),
('ROOOOOOOT', 'root', '$2y$04$AlxtVLJrq4z8kXxlHpinye69iJYUobxswZSh1u.8FVzVwVkNQdrVG', 4),
('teeeeeest', 'test1', '$2y$04$St602aO4d0VZmh59WTh8Legsbrt7mBCzSrBOFPHk/qHWLa1Hh2Fom', NULL),
('usuario', 'usuario', '$2y$04$LH84XLlBIbRBptPjt9cgFe0IuVZFqUuYQkGS8eNm8bNBCh9L.br9W', NULL),
('yy', 'yy', '$2y$04$N9Y681/J8RVJdYHl4FaUd.q4nhsYJTQQ2BThclXusuwU4o.tdpP0y', NULL);

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
  MODIFY `NumeroAsistencia` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
