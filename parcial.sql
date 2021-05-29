-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2021 a las 21:34:52
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parcial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carril`
--

CREATE TABLE `carril` (
  `id_carril` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carril`
--

INSERT INTO `carril` (`id_carril`, `nombre`) VALUES
(1, 'CARRIL 1'),
(2, 'CARRIL 2'),
(3, 'CARRIL 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hijos`
--

CREATE TABLE `hijos` (
  `id_hijo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `identi` varchar(100) NOT NULL,
  `grado` varchar(100) NOT NULL,
  `padre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hijos`
--

INSERT INTO `hijos` (`id_hijo`, `nombre`, `identi`, `grado`, `padre_id`) VALUES
(2, 'Maria', '2327', 'Primaria', 1),
(4, 'geral', '567567567', 'Bachillerato', 1),
(5, 'Luisa Fernanda W', '8263862', 'Pre-escolar', 2),
(6, 'Linda Palma Vera', '758769', 'Primaria', 3),
(7, 'Ana maria gonazales', '524564654', 'Pre-escolar', 4),
(8, 'oscar', '45564', 'Primaria', 4),
(9, 'Luisa', '56465466545', 'Bachillerato', 4),
(11, 'felipe', '345654', 'Primaria', 5),
(12, 'geral', '758769', 'Pre-escolar', 6),
(13, 'oscar', '8263862', 'Bachillerato', 6),
(14, 'Luisa Fernanda W', '6467', 'Primaria', 6),
(15, 'Riki', '758769', 'Primaria', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `id_padre` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`id_padre`, `nombre`, `cedula`, `correo`, `clave`) VALUES
(1, 'RICARDO HS', '1143994844', 'rikillohs@gmail.com', '0000'),
(2, 'Jose Gonzales', '7152715', 'sjaghahj', '0000'),
(3, 'Mariantonela', '1234', 'hjghhj', '0000'),
(4, 'Jose gomez', '1234', 'com.com', '1234'),
(5, 'Josefina', '54321', 'm.com', '54321'),
(6, 'RICARDO', '1234', 'hs@hs.com', '1234'),
(7, 'MARIA LOPEZ', '54321', 'rikillohs@gmail.com', '54321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padresxcarril`
--

CREATE TABLE `padresxcarril` (
  `id_pac` int(11) NOT NULL,
  `id_carril` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padrexhijos`
--

CREATE TABLE `padrexhijos` (
  `id` int(11) NOT NULL,
  `id_hijo` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carril`
--
ALTER TABLE `carril`
  ADD PRIMARY KEY (`id_carril`);

--
-- Indices de la tabla `hijos`
--
ALTER TABLE `hijos`
  ADD PRIMARY KEY (`id_hijo`),
  ADD KEY `padre` (`padre_id`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`id_padre`);

--
-- Indices de la tabla `padresxcarril`
--
ALTER TABLE `padresxcarril`
  ADD PRIMARY KEY (`id_pac`),
  ADD KEY `foreigncarril` (`id_carril`),
  ADD KEY `foreignpadre` (`id_padre`);

--
-- Indices de la tabla `padrexhijos`
--
ALTER TABLE `padrexhijos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreinghijo` (`id_hijo`),
  ADD KEY `foreingpadre` (`id_padre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carril`
--
ALTER TABLE `carril`
  MODIFY `id_carril` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `hijos`
--
ALTER TABLE `hijos`
  MODIFY `id_hijo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `id_padre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `padresxcarril`
--
ALTER TABLE `padresxcarril`
  MODIFY `id_pac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `padrexhijos`
--
ALTER TABLE `padrexhijos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
