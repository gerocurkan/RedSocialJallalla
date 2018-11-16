-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2018 a las 16:18:05
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jallalla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `alias` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `alias`, `email`, `fechaNacimiento`, `password`, `imagen`) VALUES
(1, 'ernesto', 'lopez', 'ernelopez', 'ernelopez@hotmail.com', '1988-04-12', '123', ''),
(2, 'nada', 'cur', 'nadacur', 'nadacur@hotmail.com', '1995-04-30', '145', ''),
(3, 'Thomas', 'curkan', 'thocur', 'thocur@hotmail.com', '1994-04-30', '1234', ''),
(5, 'romina', 'perez', 'romiperez', 'romiperez@homail.com', '1994-04-30', 'asdf', ''),
(6, 'romina', 'perez', 'romiperez', 'romiperez@homail.com', '1994-04-30', 'wer', ''),
(7, 'juli', 'juli', 'julijuli', 'julijuli@hotmail.com', '1994-04-30', '1234', ''),
(8, 'Thomas', 'curkan', 'thomycurkan', 'thomycurka@gmail.com', '1995-02-25', '123', ''),
(9, 'Thomas', 'curkan', 'thomycurkan', 'thomycurka@gmail.com', '1995-02-25', '1234', ''),
(10, 'marta', 'marta', 'marta1', 'marta@hotmail.com', '1984-02-10', 'gero', ''),
(11, 'Thomas', 'perez', 'thp', 'thp@hotm.com', '1984-01-01', '123', ''),
(12, 'Thomas', 'carlos', 'thomycurk', 'gero@hotmail.com', '1995-02-01', '123', ''),
(13, 'lala', 'lalal', 'lala2', 'lala@hotmail.com', '1994-02-01', '145', ''),
(14, 'geronimo', 'curkan', 'gero.curkan', 'gerocurkan@hotmail.com', '1994-04-30', '123', ''),
(15, 'patricio', 'perez', 'pato', 'pato@hotmail.com', '1993-03-01', '123', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
