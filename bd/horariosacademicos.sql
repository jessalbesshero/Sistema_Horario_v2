-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2015 a las 09:06:55
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

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
(1001, 'Algebra', 'Informática', 40, '', 9),
(1002, 'Sistemas Operativos', 'Informática', 10, 'Programación en sistemas', 9),
(1003, 'Redes II', 'Informatica', 6, 'Redes I', 8),
(1004, 'Desarrollo de Aplicaciones en Red', 'Informática', 40, 'Programación Avanzada', 10),
(1999, 'Administracion de Proyectos', 'Informatica', 6, 'Fundamentos de Administración', 9),
(2001, 'Cálculo', 'Estadística', 8, 'Pre-cálculo', 9),
(2999, 'Pre-cálculo', 'Estadística', 9, 'Algebra', 10);

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
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
  `idCarrera` int(11) NOT NULL,
  `nombreCarrera` varchar(70) NOT NULL,
  `creditos` int(11) NOT NULL,
  `jefeCarrera` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idCarrera`, `nombreCarrera`, `creditos`, `jefeCarrera`) VALUES
(1, 'Licenciatura en Informática', 380, 'Jefe Carrera Lic Info'),
(2, 'Estadística', 360, 'Jefe Carrera Esta'),
(3, 'Licenciatura en Ingeniería del Software', 360, 'Jefe Carrera Lic Inge Soft');

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
(48500, 1002, 1002),
(50150, 1003, 1003),
(70200, 1004, 1004),
(70500, 1001, 1001);

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
(3, 'Miguel', 'Paterno', 'Materno'),
(4, 'Sirio', 'Paterno', 'Materno'),
(5, 'Siria', 'Paterno', 'Materno'),
(100, 'Juan', 'Juan', 'Juan'),
(2000, 'Maestro', 'Apellido', 'Apellido'),
(3000, 'Maestra', 'Apellido', 'Apellido'),
(4001, 'Maestra', 'Apellido', 'Apellido'),
(50000, 'Maestro', 'Apellido', 'Apellido'),
(12345678, 'Maestro', 'Apellidos', 'Apellidos'),
(123456789, 'Maestro', 'Apellido', 'Apellido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE IF NOT EXISTS `salon` (
`IDS` int(11) NOT NULL,
  `Salon` int(11) NOT NULL,
  `Horario` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`IDS`, `Salon`, `Horario`) VALUES
(2, 102, '9-10'),
(3, 103, '7-9'),
(4, 104, '7-9'),
(10, 103, '7-9'),
(11, 103, '15-17'),
(12, 103, '17-19'),
(20, 104, '7-9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`IDuser` int(5) NOT NULL,
  `Usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Logeado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IDuser`, `Usuario`, `Password`, `Logeado`) VALUES
(1, 'S11012604', 'A123456', 0),
(2, 'maestro', 'maestro', 1);

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
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
 ADD PRIMARY KEY (`idCarrera`);

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
MODIFY `IDS` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `IDuser` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
