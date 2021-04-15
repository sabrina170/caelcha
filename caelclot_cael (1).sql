-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2021 a las 23:40:49
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `caelclot_cael`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Precio` decimal(20,2) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Imagen` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(2, 'WHITE PERFORMANCE', '190.00', 'Cuando la versatilidad es la llave, WHITE PERFORMANCE es la clave. Camisa 100% Algodón OXFORD.', 'static\\galeria\\10.jpg'),
(3, 'GREEN OASIS', '190.00', 'Realza la fineza de una buena prenda. GREEN OASIS, la mejor manera de vestir sin aprietos. Camisa 100% Algodón OXFORD.', 'static\\galeria\\11.jpg'),
(4, 'PINKWARD', '190.00', 'Realza la fineza de una buena prenda GREEN OASIS la mejor manera de vestir sin aprietos. Camisa 100% algodon OXFORD.', 'static\\galeria\\12.jpg'),
(5, 'BLUE MONDAY', '190.00', 'Un buen día vistiendo a tu gusto. Camisa azul con rayas 100% Algodón TWILL.', 'static\\galeria\\13.jpg'),
(6, 'BACK IN BLACK', '190.00', 'La rosa de la elegancia florece en negro BACK IN BLACK . Camisa negra 100% Algodón Dobby.', 'static\\galeria\\14.jpg'),
(7, 'YOUNG FEELING', '190.00', 'Vive libre, vive cómodo, vive joven. YOUNG FEELING es para ti. Camisa rosa con rayas 100% Algodón Dobby.', 'static\\galeria\\15.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
