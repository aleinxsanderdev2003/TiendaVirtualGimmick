-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2021 a las 19:01:17
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id_banner` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `texto_one` text NOT NULL,
  `texto_two` text NOT NULL,
  `boton` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id_banner`, `imagen`, `categoria`, `texto_one`, `texto_two`, `boton`, `estado`) VALUES
(1, 'slider5.jpg', 'Electrónica', '<span>HASTA EL</span> 40% <span>DE DESCUENTO</span>', 'OFERTA VALIDA HASTA EL 20 DE FEBRERO DE 2021', 'shop?to=products', 0),
(2, 'slider6.jpg', 'Hogar', '50 % DTO EN MUEBLES', 'OFERTA VALIDA HASTA EL 25 DE FEBRERO DE 2021', 'shop?to=products', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletines`
--

CREATE TABLE `boletines` (
  `id_boletin` int(11) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_registro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_compras`
--

CREATE TABLE `carrito_compras` (
  `id_carrito` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `cantidad` varchar(10) NOT NULL,
  `fecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`, `estado`) VALUES
(1, 'Celulares', 0),
(2, 'Computadores', 0),
(3, 'TV', 0),
(4, 'Audio', 0),
(5, 'Electrodomésticos', 0),
(6, 'Videojuegos', 0),
(7, 'Cámaras', 0),
(8, 'Hogar', 0),
(9, 'Inteligente', 0),
(10, 'Accesorios', 0),
(11, 'Deportes', 0),
(12, 'Carros', 0),
(13, 'Motos', 0),
(14, 'Netflix y otros', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id_config` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `favicon` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `pie_pagina` varchar(200) NOT NULL,
  `telefono` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id_config`, `titulo`, `favicon`, `nombre`, `logo`, `pie_pagina`, `telefono`, `correo`, `direccion`, `color`) VALUES
(1, 'Chiphysi Tienda Online | Los mejores productos', 'Logo2d89712cd0d4e6016cfc97bd7200fe16.png', 'Tienda Chiphysi ', 'Logob00715bb642ed180afe0b7cb68a72a69.png', '©Copyright 2021 CHIPHYSI Todos Los Derechos Reservados.', '(+57) 323 334 13 44', 'soporte@economictheme.net', 'Tienda Online', '#ea3a3c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamento` int(2) UNSIGNED NOT NULL,
  `departamento` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `departamento`) VALUES
(1, 'ANTIOQUIA'),
(2, 'ATLÁNTICO'),
(3, 'BOGOTÁ, D.C.'),
(4, 'BOYACÁ'),
(5, 'CALDAS'),
(6, 'CÓRDOBA'),
(7, 'CUNDINAMARCA'),
(8, 'CHOCÓ'),
(9, 'HUILA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dinero_entrada`
--

CREATE TABLE `dinero_entrada` (
  `id_entrada` int(11) NOT NULL,
  `id_moderador` int(11) NOT NULL,
  `remitente` varchar(50) NOT NULL,
  `concepto` text NOT NULL,
  `valor` varchar(20) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL COMMENT '(0.pendiente) (1.aprobado)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_detalle`
--

CREATE TABLE `pedido_detalle` (
  `id_detalle` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `cantidad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `resumen` text NOT NULL,
  `descripcion` text NOT NULL,
  `precio` varchar(20) NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `condicion` varchar(20) NOT NULL,
  `descuento` varchar(10) NOT NULL,
  `estrellas` varchar(10) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL,
  `stock` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_imagenes`
--

CREATE TABLE `productos_imagenes` (
  `id_imagen` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `fecha_registro` varchar(50) NOT NULL,
  `ultima_conexion` varchar(50) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `direccion_one` varchar(200) NOT NULL,
  `direccion_two` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `correo`, `telefono`, `clave`, `fecha_registro`, `ultima_conexion`, `ip`, `departamento`, `direccion_one`, `direccion_two`, `estado`, `rol`) VALUES
(1, 'administrador', '', 'admin@gmail.com', '123456789', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-01-25 8:19 pm', '2021-01-24 01:54 pm', '::1', '', '', '', 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indices de la tabla `boletines`
--
ALTER TABLE `boletines`
  ADD PRIMARY KEY (`id_boletin`);

--
-- Indices de la tabla `carrito_compras`
--
ALTER TABLE `carrito_compras`
  ADD PRIMARY KEY (`id_carrito`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id_config`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `dinero_entrada`
--
ALTER TABLE `dinero_entrada`
  ADD PRIMARY KEY (`id_entrada`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `pedido_detalle`
--
ALTER TABLE `pedido_detalle`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `productos_imagenes`
--
ALTER TABLE `productos_imagenes`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `boletines`
--
ALTER TABLE `boletines`
  MODIFY `id_boletin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrito_compras`
--
ALTER TABLE `carrito_compras`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamento` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `dinero_entrada`
--
ALTER TABLE `dinero_entrada`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido_detalle`
--
ALTER TABLE `pedido_detalle`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos_imagenes`
--
ALTER TABLE `productos_imagenes`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
