-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 04-11-2017 a las 01:36:11
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `catalog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `imagen` text CHARACTER SET utf8 COLLATE utf8_spanish_ci
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Joyería', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. ', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `texto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `media` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `links`
--

INSERT INTO `links` (`id`, `titulo`, `texto`, `media`) VALUES
(1, 'Acerca', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.', ''),
(2, 'Aviso de Privacidad', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `clave_producto` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disponible` tinyint(1) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `descripcion_corta` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `tags` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio_unitario` float DEFAULT NULL,
  `descuento` int(11) DEFAULT NULL,
  `precio_descuento` float DEFAULT NULL,
  `precio_mayoreo` float DEFAULT NULL,
  `cantidad_mayoreo` int(25) DEFAULT NULL,
  `categoria_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `anchura` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `altura` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `peso` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `inventario` int(11) DEFAULT NULL,
  `imagen_chica` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen_mediana_1` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen_mediana_2` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen_mediana_3` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen_grande` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `video` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `rating` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_extra` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `item_extra_2` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `val_item_extra` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `val_item_extra_2` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `clave_producto`, `tipo`, `disponible`, `visible`, `descripcion_corta`, `descripcion`, `tags`, `precio_unitario`, `descuento`, `precio_descuento`, `precio_mayoreo`, `cantidad_mayoreo`, `categoria_id`, `anchura`, `altura`, `peso`, `inventario`, `imagen_chica`, `imagen_mediana_1`, `imagen_mediana_2`, `imagen_mediana_3`, `imagen_grande`, `video`, `rating`, `item_extra`, `item_extra_2`, `val_item_extra`, `val_item_extra_2`) VALUES
(1, 'Sailor Moon Pendant', 'SMPEND1', 'nuevo', 1, 1, 'Sailor Moon Pendant collar Vintage de bronce antiguo Anime foto espacio colgante collar de la galaxia estrella luna mujer joyería collares', 'Descripción del producto:Tamaño: colgante: 27mm, cristal: 25mmLongitud de cadena: los cerca de 50 cmPeso: sobre 15g (sin embalaje)Material: aleación de zinc + vidrio Bañado: bronce antiguo. Plata Paquete: con el opp Sobre color: todos los productos se toman en la luz natural, pero porque la exhibición es diferente para Diversas razones como, usted ver los colores de la imagen puede ser diferencia minúscula del color en especie, Entienda por favor, gracias! ', 'joyería, sailor, moon', 75, 0, 0, 0, 0, '', '27mm', '25mm', '', 1, '110317_1544636905_101517_1730296584_pendienteSailorMoonip.jpg', '101517_1935794351_pendienteSailorMooni1.png', '101517_319513900_pendienteSailorMooni2.png', '', '101517_118993403_pendienteSailorMoonig.png', '', '2:50', '', '', '', ''),
(2, 'Reloj DKNY Análogo', 'RELOJ1', 'apartar', 1, 1, 'Reloj DKNY Análogo Dama Acero Inoxidable Mod. NY2459', 'Este reloj de pulsera DKNY tiene un diseño muy femenino que resalta tu buen gusto al vestir combinándolo con prendas casuales para la oficina o alguna reunión con tus amigas.\r\n\r\nTiene un extensible de piel de becerro en color beige con una caja de acero inoxidable en color dorado que te encantará. Su funcionamiento es con movimiento de cuarzo japonés.\r\n\r\nTamaño de la caja: 36 mm\r\n\r\nGrueso de la caja: 8 mm\r\n\r\nAncho de banda: 10 mm', 'rejoj, joyeria, dama', 1999, 0, 1999, 1999, 0, '1', '', '33mm', '', 0, '101517_350795780_relojip.jpg', '101517_290791395_relojm1.png', '101517_77784278_relojm2.png', '101517_268604539_relojm1.png', '', '', '0:0', '', '', '', ''),
(3, 'Argolla La Festa', 'ARGFESTA', 'usado', 1, 0, 'Argolla La Festa Oro blanco de 14K', 'Argolla de matrimonio en oro blanco de 14 K, este anillo tiene un acabado mate combinado con un texturizado al centro y contornos de doble bisel pulidos. En Joyería La Festa encontrarás las piezas más especiales para sellar tu compromiso, formalizar tu unión y adornar tu look de manera Única.', 'argolla, joyería', 5999, 0, 5999, 5999, 0, '1', '', '', '', 0, '101517_1069195435_argollamip.jpg', '101517_2076925751_argollam1.png', '101517_658901094_argollam2.png', '101517_452211118_argollam1.png', '', '', '0:0', '', '', '', ''),
(4, 'Pulsera Kpenko', 'PULKPE1', '', 0, NULL, 'Pulsera Kpenko Acero con Piel Sintetica', 'Luce con el estilo que te caracteriza todos los dí­as con esta pulsera Kpenko hecha con acero con piel sintética que le dará un toque de frescura y singularidad a tu outfit.', 'pulsera, joyería', 599, 0, 599, 599, 0, '1', '2,5cm', '8cm', '', 0, '101517_886648525_pulsip.png', '101517_1390705930_pulim1.png', '101517_1927025977_pulim1.png', '101517_1987077001_pulim1.png', '', '', '0:0', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema`
--

CREATE TABLE `sistema` (
  `id` int(11) NOT NULL,
  `color_header` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `color_content` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `logo` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `texto_header` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `texto_contacto` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `numero_categorias` int(10) DEFAULT NULL,
  `facebook` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `seo_activar` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `seo_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `seo_description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `seo_keywords` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sistema`
--

INSERT INTO `sistema` (`id`, `color_header`, `color_content`, `logo`, `texto_header`, `texto_contacto`, `numero_categorias`, `facebook`, `seo_activar`, `seo_title`, `seo_description`, `seo_keywords`) VALUES
(1, '#ffffff', '#ffffff', '101517_1445402532_logofhili.png', '<br>Bienvenidos a la Versión Beta 2.0 del Católogo', '<b>¿Tienes alguna duda, idea o sugerencia? </b><br>\r\nManda tus preguntas y mensajes a:<br>\r\nfeex5@hotmail.com<br>\r\ncon gusto te atenderemos<br><br>', 3, 'https://www.facebook.com/', 'si', 'Catálogo web', 'La Página donde encuentras lo que necesitas', 'Electrónica, joyería');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `permisos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_2` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `otro_contacto` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `tipo`, `permisos`, `email`, `nombre`, `apellido`, `telefono`, `telefono_2`, `otro_contacto`) VALUES
(1, 'admin', '26123bcd2533073e0e2ef4629098c421', 'admin', 'all', 'feex5@hotmail.com', 'JOSE FELIPE ', 'HERRERA RODRIGUEZ', '62228891', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sistema`
--
ALTER TABLE `sistema`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `sistema`
--
ALTER TABLE `sistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
