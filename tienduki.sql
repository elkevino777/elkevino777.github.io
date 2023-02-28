-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2023 a las 01:51:07
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienduki`
--

CREATE TABLE `tienduki` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tienduki`
--

INSERT INTO `tienduki` (`ID`, `nombre`, `correo`, `telefono`, `fecha_nacimiento`, `sexo`) VALUES
(1, 'kevin armenta', 'kevinarmenta59@gmail.com', '6673262044', '2005-09-06', 1),
(2, 'joseph', 'josephsexi69@gmail.com', '6675403583', '2006-06-29', 2),
(3, 'Goku Fernando', 'sayajinuwu@gmail.com', '6675981451', '2023-02-27', 1),
(4, 'eitan becerro\r\n', 'becerromansito@gmail.com', '', '2006-11-15', 1),
(5, 'polola polola', 'ppettto77@gmail.com', '6673262878', '2022-06-07', 2),
(6, 'popo', 'fluebygl@gmail.com', '6675981451', '1997-02-05', 2),
(7, 'xdesb mhnj', 'tvgecfrvf@gmail.com', '6673269799', '2005-02-03', 1),
(8, 'rtdrynj', 'htyhhnjj@gmail.com', '6675986532', '2007-02-21', 2),
(9, 'yurop', 'yurop@gmail.com', '6675984935', '2011-02-01', 1),
(10, 'tilin alfred', 'papupapu@gmail.com', '6675981346', '2007-02-22', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tienduki`
--
ALTER TABLE `tienduki`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tienduki`
--
ALTER TABLE `tienduki`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
