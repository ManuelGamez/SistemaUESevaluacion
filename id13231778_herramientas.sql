-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-04-2020 a las 06:44:42
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id13231778_herramientas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramienta1`
--

CREATE TABLE `herramienta1` (
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `unidad` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `valor1` float NOT NULL,
  `valor2` float NOT NULL,
  `valor3` float NOT NULL,
  `valor4` float NOT NULL,
  `valor5` float NOT NULL,
  `valor6` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramienta2`
--

CREATE TABLE `herramienta2` (
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unidad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valor1` float NOT NULL,
  `valor2` float NOT NULL,
  `valor3` float NOT NULL,
  `valor4` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramienta3`
--

CREATE TABLE `herramienta3` (
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unidad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valor1` float NOT NULL,
  `valor2` float NOT NULL,
  `valor3` float NOT NULL,
  `valor4` float NOT NULL,
  `valor5` float NOT NULL,
  `valor6` float NOT NULL,
  `valor7` float NOT NULL,
  `valor8` float NOT NULL,
  `valor9` float NOT NULL,
  `valor10` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramienta4`
--

CREATE TABLE `herramienta4` (
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unidad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valor1` float NOT NULL,
  `valor2` float NOT NULL,
  `valor3` float NOT NULL,
  `valor4` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramienta5`
--

CREATE TABLE `herramienta5` (
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `unidad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valor1` float NOT NULL,
  `valor2` float NOT NULL,
  `valor3` float NOT NULL,
  `valor4` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`nombre`, `usuario`, `password`) VALUES
('administrador', 'admin', 'admin12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `herramienta1`
--
ALTER TABLE `herramienta1`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `herramienta2`
--
ALTER TABLE `herramienta2`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `herramienta3`
--
ALTER TABLE `herramienta3`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `herramienta4`
--
ALTER TABLE `herramienta4`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `herramienta5`
--
ALTER TABLE `herramienta5`
  ADD PRIMARY KEY (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
