-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2021 a las 18:13:23
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbs2938653`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `ID_Cita` int(8) NOT NULL,
  `Dia_Cita` date NOT NULL,
  `Usuario` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `Servicio` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`ID_Cita`, `Dia_Cita`, `Usuario`, `Servicio`) VALUES
(1, '2021-07-22', 'Lyra', 3),
(2, '2021-07-20', 'Avocado', 4),
(4, '2021-07-31', 'cookie', 5),
(6, '2021-08-02', 'cookie', 1),
(8, '2021-07-25', 'cookie', 5),
(9, '2021-08-18', 'Avocado', 4),
(10, '2021-08-18', 'Avocado', 4),
(11, '2021-08-18', 'Avocado', 4),
(12, '2021-08-27', 'Lyra', 4),
(13, '2021-08-12', 'Avocado', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `ID_Servicio` int(8) NOT NULL,
  `Tarotista` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `Nombre` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `Valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`ID_Servicio`, `Tarotista`, `Nombre`, `Valor`) VALUES
(1, 'Liz', 'Lectura de Lenormand', 15),
(2, 'Liz', 'Lectura Kármica', 19),
(3, 'Betty', 'Lectura Vincular', 15),
(4, 'Betty', 'Lectura General', 18),
(5, 'Liz', 'Lectura Gitana', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarotistas`
--

CREATE TABLE `tarotistas` (
  `ID_Tarotista` int(8) NOT NULL,
  `Alias` varchar(30) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `tarotistas`
--

INSERT INTO `tarotistas` (`ID_Tarotista`, `Alias`) VALUES
(2, 'Betty'),
(1, 'Liz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_Usuario` int(10) NOT NULL,
  `Apodo` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `Nombre` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Apellidos` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `passw` varchar(8) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_Usuario`, `Apodo`, `Nombre`, `Apellidos`, `FechaNacimiento`, `email`, `passw`) VALUES
(32, 'cookie', 'Adry', 'GH', '1989-02-06', 'that.cookie@email.com', '12345678'),
(33, 'Rocco', 'Rocco', 'Cimo', '2014-04-14', 'unrocco@email.com', '00000000'),
(34, 'Lyra', 'Leia', 'LA', '1989-08-06', 'leia@correo.com', '00000000'),
(35, 'Avocado', 'Lisa', 'Mar', '2014-12-29', 'esuncorreo@email.com', '12345678'),
(36, 'Purple', 'Violetta', 'Brown', '1994-06-16', 'emailto@email.com', '12345678'),
(38, 'Iselya', 'Isabella', 'BL', '1992-06-01', 'esuncorreofalso@email.com', '12345678'),
(39, 'Potho', 'Green', 'Verdoso', '1963-09-12', 'verdetequierover@email.com', '12345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`ID_Cita`),
  ADD KEY `ID_Usuario` (`Usuario`),
  ADD KEY `Servicio` (`Servicio`) USING BTREE;

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`ID_Servicio`),
  ADD UNIQUE KEY `Nombre` (`Nombre`),
  ADD KEY `ID_Tarotista` (`Tarotista`);

--
-- Indices de la tabla `tarotistas`
--
ALTER TABLE `tarotistas`
  ADD PRIMARY KEY (`ID_Tarotista`),
  ADD UNIQUE KEY `Alias` (`Alias`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Apodo` (`Apodo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `ID_Cita` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `ID_Servicio` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tarotistas`
--
ALTER TABLE `tarotistas`
  MODIFY `ID_Tarotista` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`Apodo`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`Servicio`) REFERENCES `servicios` (`ID_Servicio`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`Tarotista`) REFERENCES `tarotistas` (`Alias`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
