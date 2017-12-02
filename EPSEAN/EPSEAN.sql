-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-11-2017 a las 10:34:32
-- Versión del servidor: 5.7.19-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `EPSEAN`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `med_id` smallint(4) UNSIGNED NOT NULL,
  `med_nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `med_apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `med_genero` enum('MASCULINO','FEMENINO') COLLATE utf8_spanish_ci NOT NULL,
  `med_telefono` int(10) UNSIGNED NOT NULL,
  `med_correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `med_especialidad` enum('MEDICINA GENERAL','ODONTOLOGIA','PEDIATRIA') COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`med_id`, `med_nombres`, `med_apellidos`, `med_genero`, `med_telefono`, `med_correo`, `med_especialidad`) VALUES
(1, 'Harold', 'Sanchez', 'MASCULINO', 3102589741, 'hsanchez@epsean.com', 'MEDICINA GENERAL'),
(2, 'Sara', 'Forero', 'FEMENINO', 3152541230, 'sforero@epsean.com', 'ODONTOLOGIA'),
(3, 'Ignacio', 'Albarracin', 'MASCULINO', 3186521478, 'ialbarracin@epsean.com', 'PEDIATRIA'),
(4, 'Henry', 'Arevalo', 'MASCULINO', 2589741, 'harevalo@epsean.com', 'MEDICINA GENERAL');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`med_id`),
  ADD KEY `med_especialidad` (`med_especialidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `med_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
