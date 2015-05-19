-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2015 a las 11:39:44
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `horariosacademicos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE IF NOT EXISTS `asignatura` (
  `IDA` int(11) NOT NULL,
  `Asignatura` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Carrera` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Horas` int(11) NOT NULL,
  `Requerimiento` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Creditos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`IDA`, `Asignatura`, `Carrera`, `Horas`, `Requerimiento`, `Creditos`) VALUES
(1000, 'Administracion de Proyectos', 'Informatica', 6, 'Fundamentos de Administracion', 9),
(1001, 'Redes I', 'Informatica', 6, '', 8),
(1003, 'Redes II', 'Informatica', 6, 'Redes I', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturaasignada`
--

CREATE TABLE IF NOT EXISTS `asignaturaasignada` (
  `IDAsignatura` int(11) NOT NULL,
  `Asignatura` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `IDM` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asignaturaasignada`
--

INSERT INTO `asignaturaasignada` (`IDAsignatura`, `Asignatura`, `IDM`) VALUES
(0, 'Redes II', 11012604),
(1, 'Redes I', 11012604);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloques`
--

CREATE TABLE IF NOT EXISTS `bloques` (
  `IDBloque` int(11) NOT NULL,
  `Bloque` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `Seccion` int(11) NOT NULL,
  `Carrera` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NRC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `NRC` int(11) NOT NULL,
  `IDA` int(11) NOT NULL,
  `IDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`NRC`, `IDA`, `IDM`) VALUES
(56970, 1001, 11012606),
(56982, 1000, 11012604),
(56983, 1000, 11012605);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `IDHor` int(11) NOT NULL,
  `Dia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Hora` int(11) NOT NULL,
  `IDS` int(11) NOT NULL,
  `NCR` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`IDHor`, `Dia`, `Hora`, `IDS`, `NCR`) VALUES
(11, 'Martes', 7, 192, 1000),
(12, 'Martes', 11, 192, 1003),
(13, 'Martes', 15, 192, 1001),
(18, 'Lunes', 7, 102, 1000),
(19, 'Lunes', 11, 102, 1003),
(20, 'Lunes', 15, 102, 1001);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE IF NOT EXISTS `maestros` (
  `IDM` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ApellidoP` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ApellidoM` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`IDM`, `Nombre`, `ApellidoP`, `ApellidoM`) VALUES
(11012602, 'Maria', 'Sanchez', 'Medez'),
(11012603, 'Elida', 'Jimenez', 'Chang'),
(11012604, 'Joaquin', 'Ocaña', 'Molina'),
(11012605, 'Daniel', 'Olmos', 'Bolaños'),
(11012606, 'Valdemar', 'Nose', 'Nose'),
(11012607, 'Daniel', 'Villaseñor', 'Lopez'),
(11012608, 'Said', 'Cortina', 'Gaboa'),
(11012609, 'Cesar', 'Moral', 'Castro'),
(11012610, 'Elia', 'Loyo', 'Castro'),
(11012611, 'Elsa', 'Pato', 'Barato'),
(11012612, 'Soila', 'Cerda', 'Delrincon'),
(11012613, 'Alan', 'Brito', 'Delgado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE IF NOT EXISTS `salon` (
  `IDS` int(11) NOT NULL,
  `Salón` int(11) NOT NULL,
  `Horario` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`IDS`, `Salón`, `Horario`) VALUES
(1, 102, NULL),
(2, 192, NULL),
(3, 194, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `IDuser` int(5) NOT NULL,
  `Usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Logeado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IDuser`, `Usuario`, `Password`, `Logeado`) VALUES
(1, 'S11012604', 'A123456', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`IDA`);

--
-- Indices de la tabla `asignaturaasignada`
--
ALTER TABLE `asignaturaasignada`
  ADD PRIMARY KEY (`IDAsignatura`);

--
-- Indices de la tabla `bloques`
--
ALTER TABLE `bloques`
  ADD PRIMARY KEY (`IDBloque`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`NRC`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`IDHor`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`IDM`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`IDS`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IDuser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bloques`
--
ALTER TABLE `bloques`
  MODIFY `IDBloque` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `IDHor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `IDS` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IDuser` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
