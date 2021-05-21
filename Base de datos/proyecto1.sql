-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2021 a las 13:07:39
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `cod_administrador` int(11) NOT NULL,
  `correo` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`cod_administrador`, `correo`, `nombres`, `apellidos`) VALUES
(101, 75854549, 'Juan Carlos', 'Herrera Sanches'),
(3, 1234567, 'einer andres ', 'rios'),
(5, 1234567, 'juan', 'perez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE `doctor` (
  `cod_doctor` int(11) NOT NULL,
  `correo` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `doctor`
--

INSERT INTO `doctor` (`cod_doctor`, `correo`, `nombres`, `apellidos`) VALUES
(101, 75854549, 'Juan Carlos', 'Herrera Sanches'),
(365, 12346, 'emerson', 'rios'),
(0, 123456, 'pedro', 'roa'),
(0, 0, '', ''),
(0, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `password`) VALUES
('JUAN', 1234),
('EINER', 1234),
('pedro', 12345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `cod_paciente` int(11) NOT NULL,
  `correo` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`cod_paciente`, `correo`, `nombres`, `apellidos`) VALUES
(101, 75854549, 'Juan Carlos', 'Herrera Sanches'),
(105, 75854553, 'juan', 'gutierrez'),
(134, 0, 'juan', 'perez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagocurso`
--

CREATE TABLE `pagocurso` (
  `id` int(12) NOT NULL,
  `total` int(12) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroadministrador`
--

CREATE TABLE `registroadministrador` (
  `id` int(11) NOT NULL,
  `correo` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `primernombre` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `segundonombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registroadministrador`
--

INSERT INTO `registroadministrador` (`id`, `correo`, `primernombre`, `segundonombre`) VALUES
(1, 'einer@ucundinamarca.edu.', 'einer', 'rios'),
(10, 'lafara@123.com', 'firulo', 'jimenez'),
(11, 'lafara@123.com', 'pedro', 'rios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrodoctor`
--

CREATE TABLE `registrodoctor` (
  `id` int(11) NOT NULL,
  `correo` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `primernombre` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `segundonombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registropaciente`
--

CREATE TABLE `registropaciente` (
  `id` int(11) NOT NULL,
  `correo` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `primernombre` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `segundonombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `Contraseña` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagocurso`
--
ALTER TABLE `pagocurso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registroadministrador`
--
ALTER TABLE `registroadministrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrodoctor`
--
ALTER TABLE `registrodoctor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registropaciente`
--
ALTER TABLE `registropaciente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagocurso`
--
ALTER TABLE `pagocurso`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registroadministrador`
--
ALTER TABLE `registroadministrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `registrodoctor`
--
ALTER TABLE `registrodoctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4445;

--
-- AUTO_INCREMENT de la tabla `registropaciente`
--
ALTER TABLE `registropaciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
