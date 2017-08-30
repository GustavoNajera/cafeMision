-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2017 a las 14:22:23
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafemision`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `comment` text COLLATE utf8_bin NOT NULL,
  `userfk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `comment`
--

INSERT INTO `comment` (`idcomment`, `comment`, `userfk`) VALUES
(1, 'Este es el PRIMER comentario de prueba para el usuario Gustavo', 1),
(2, 'Este es el SEGUNDO comentario de prueba para el usuario Gustavo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `idgallery` int(11) NOT NULL,
  `image` int(11) NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `language` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`idgallery`, `image`, `description`, `language`) VALUES
(1, 1, 'Esta es la primera imagen en ingles', 'ingles'),
(2, 2, 'Esta es la segunda imagen en ingles', 'ingles'),
(3, 3, 'Esta es la tercera imagen en ingles', 'ingles'),
(4, 4, 'Esta es la cuarta imagen en ingles', 'ingles'),
(5, 5, 'Esta es la quinta imagen en ingles', 'ingles'),
(6, 6, 'Esta es la sexta imagen en ingles', 'ingles'),
(7, 7, 'Esta es la septima imagen en ingles', 'ingles'),
(8, 1, 'Esta es la primera imagen en español', 'español'),
(9, 2, 'Esta es la segunda imagen en español', 'español'),
(10, 3, 'Esta es la tercera imagen en español', 'español'),
(11, 4, 'Esta es la cuarta imagen en español', 'español'),
(12, 5, 'Esta es la quinta imagen en español', 'español'),
(13, 6, 'Esta es la sexta imagen en español', 'español'),
(14, 7, 'Esta es la septima imagen en español', 'español');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image`
--

CREATE TABLE `image` (
  `idimage` int(11) NOT NULL,
  `path` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `image`
--

INSERT INTO `image` (`idimage`, `path`) VALUES
(1, 'grid-padding-7-370x220-original.jpg'),
(2, 'grid-padding-4-370x220-original.jpg'),
(3, 'grid-padding-2-370x220-original.jpg'),
(4, 'grid-padding-3-370x220-original.jpg'),
(5, 'grid-padding-1-370x220-original.jpg'),
(6, 'grid-padding-5-370x220-original.jpg'),
(7, 'grid-padding-8-370x220-original.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `link`
--

CREATE TABLE `link` (
  `idlink` int(11) NOT NULL,
  `link` varchar(200) COLLATE utf8_bin NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organization`
--

CREATE TABLE `organization` (
  `idorganization` int(11) NOT NULL,
  `mission` text COLLATE utf8_bin NOT NULL,
  `vission` text COLLATE utf8_bin NOT NULL,
  `production` text COLLATE utf8_bin NOT NULL,
  `socialresponsability` text COLLATE utf8_bin NOT NULL,
  `history` text COLLATE utf8_bin NOT NULL,
  `facebook` text COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `language` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `organization`
--

INSERT INTO `organization` (`idorganization`, `mission`, `vission`, `production`, `socialresponsability`, `history`, `facebook`, `email`, `language`) VALUES
(1, 'Misión de prueba español', 'Visión de prueba español', 'producción de prueba español', 'Responsabilidad social prueba español', 'Coffee Shop is the place where you can get flavorful coffee strains from global elite brands and roasters at very affordable price.', 'www.facebook.com español', 'tavinchi.com@gmail.com español', 'español'),
(2, 'mission ingles', 'vission ingles', 'production ingles', 'social responsability ingles', 'Coffee Shop is the place where you can get flavorful coffee strains from global elite brands and roasters at very affordable price.', 'facebook ingles', 'email ingles', 'ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partner`
--

CREATE TABLE `partner` (
  `idpartner` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `language` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `process`
--

CREATE TABLE `process` (
  `idprocess` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `language` varchar(20) COLLATE utf8_bin NOT NULL,
  `image` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `process`
--

INSERT INTO `process` (`idprocess`, `name`, `description`, `language`, `image`) VALUES
(1, 'SELECTED COFFEE BEANS', 'Enjoy the aroma of selected coffee beans available at our shop. ingles', 'ingles', 'icon-service-3-84x84.png'),
(2, 'ELITE COFFEE', 'Take a sip of Elite Coffee, and revel in the different tastes.ingles', 'ingles', 'icon-service-4-84x84.png'),
(3, 'SELECTED COFFEE BEANS', 'Enjoy the aroma of selected coffee beans available at our shop. español', 'español', 'icon-service-3-84x84.png'),
(4, 'ELITE COFFEE', 'Take a sip of Elite Coffee, and revel in the different tastes.español', 'español', 'icon-service-4-84x84.png'),
(5, 'TASTY COFFEE', 'At Coffee Shop you can find lots of tasty coffee flavors ingles', 'ingles', 'icon-service-1-84x84.png'),
(6, 'TASTY COFFEE', 'At Coffee Shop you can find lots of tasty coffee flavors español', 'español', 'icon-service-1-84x84.png'),
(7, 'COOKING COFFEE', 'If you prefer to cook coffee, we have something special for you. ingles', 'ingles', 'icon-service-2-84x84.png'),
(8, 'COOKING COFFEE', 'If you prefer to cook coffee, we have something special for you. español', 'español', 'icon-service-2-84x84.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `idproduct` int(11) NOT NULL,
  `nameproduct` varchar(50) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `image` varchar(50) COLLATE utf8_bin NOT NULL,
  `language` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`idproduct`, `nameproduct`, `description`, `image`, `language`) VALUES
(1, 'ESPRESSO', 'Desciption of ESPRESSO ingles', 'barbers-1-370x310.jpg', 'ingles'),
(2, 'CAPPUCCINO', 'Desciption of CAPPUCCINOingles', 'barbers-2-370x310.jpg', 'ingles'),
(3, 'AMERICANO', 'Description of AMERICANO', 'barbers-3-370x310.jpg', 'ingles'),
(4, 'ESPRESSO', 'Descripción del expreso en español', 'barbers-1-370x310.jpg', 'español'),
(5, 'CAPPUCCINO', 'Descripción del café CAPPUCCINO', 'barbers-2-370x310.jpg', 'español'),
(6, 'AMERICANO', 'Descripción del AMERICANO pero en español', 'barbers-3-370x310.jpg', 'español');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textpage`
--

CREATE TABLE `textpage` (
  `idtextpage` int(11) NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  `language` varchar(20) COLLATE utf8_bin NOT NULL,
  `keytext` varchar(40) COLLATE utf8_bin NOT NULL,
  `page` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `textpage`
--

INSERT INTO `textpage` (`idtextpage`, `text`, `language`, `keytext`, `page`) VALUES
(1, 'Descriptive text about the page about us', 'ingles', 'DescripcionPrincipal', 'about'),
(2, 'About', 'ingles', 'TituloPrincipal', 'about'),
(3, 'Mission', 'ingles', 'mision', 'about'),
(4, 'Vission', 'ingles', 'vision', 'about'),
(5, 'Production', 'ingles', 'produccion', 'about'),
(6, 'Social Responsability', 'ingles', 'responsabilidadSocial', 'about'),
(7, 'Texto descriptivo sobre la pagina de sobre nosotros pero en español', 'español', 'DescripcionPrincipal', 'about'),
(8, 'Sobre Nosotros', 'español', 'TituloPrincipal', 'about'),
(9, 'Misión', 'español', 'mision', 'about'),
(10, 'Visión', 'español', 'vision', 'about'),
(11, 'Producción', 'español', 'produccion', 'about'),
(12, 'Responsabilidad Social', 'español', 'responsabilidadSocial', 'about'),
(13, 'PRODUCTS', 'ingles', 'TituloPrincipal', 'products'),
(14, 'Main description about the product page', 'ingles', 'DescripcionPrincipal', 'products'),
(15, 'PRODUCTOS', 'español', 'TituloPrincipal', 'products'),
(16, 'descripción principal sobre la pagina de productos', 'español', 'DescripcionPrincipal', 'products'),
(17, 'Testimonials', 'ingles', 'TituloPrincipal', 'comment'),
(18, 'This is the testimonial page', 'ingles', 'DescripcionPrincipal', 'comment'),
(19, 'new comment', 'ingles', 'btnNuevoComment', 'comment'),
(20, 'Similar products', 'ingles', 'productosSimilares', 'detalle'),
(21, 'Productos similares', 'español', 'productosSimilares', 'detalle'),
(22, 'GALLERY', 'ingles', 'TituloPrincipal', 'gallery'),
(23, 'GALERÍA', 'español', 'TituloPrincipal', 'gallery'),
(24, 'Café Misión', 'ingles', 'TituloPrincipal', 'index'),
(25, 'Café Misión', 'español', 'TituloPrincipal', 'index'),
(26, 'History', 'ingles', 'historia', 'index'),
(27, 'Historia', 'español', 'historia', 'index'),
(28, 'Procesos del café', 'español', 'procesos', 'index'),
(29, 'Coffee processes', 'ingles', 'procesos', 'index'),
(30, 'Testimonios', 'español', 'testimonios', 'index'),
(31, 'Testimonials', 'ingles', 'testimonios', 'index'),
(32, 'Productos', 'español', 'productos', 'index'),
(33, 'Products', 'ingles', 'productos', 'index'),
(34, 'Sobre nosotros', 'español', 'sobreNosotros', 'index'),
(35, 'About', 'ingles', 'sobreNosotros', 'index'),
(36, 'Read more', 'ingles', 'leerMas', 'index'),
(37, 'Leer mas', 'español', 'leerMas', 'index'),
(38, 'We provide a variety of services both to our new and regular customers. If you can think of anything connected with coffee, then we can offer it at our Coffee Shop.\r\nespañol', 'español', 'descripcionProcesos', 'index'),
(39, 'We provide a variety of services both to our new and regular customers. If you can think of anything connected with coffee, then we can offer it at our Coffee Shop.\r\ningles', 'ingles', 'descripcionProcesos', 'index'),
(40, 'Testimonials', 'ingles', 'testimonios', 'index'),
(41, 'Testimonios', 'español', 'testimonios', 'index'),
(42, 'We provide a variety of services both to our new and regular customers. If you can think of anything connected with coffee, then we can offer it at our Coffee Shop.\r\ningles. Ingles', 'ingles', 'descripcionTestimonios', 'index'),
(43, 'We provide a variety of services both to our new and regular customers. If you can think of anything connected with coffee, then we can offer it at our Coffee Shop.\r\ningles. Español', 'español', 'descripcionTestimonios', 'index'),
(44, 'Feel the real taste of coffee with our products. We offer high quality and tasty coffee variations from widely known brands.\r\nIngles', 'ingles', 'descripcionProductos', 'index'),
(45, 'Feel the real taste of coffee with our products. We offer high quality and tasty coffee variations from widely known brands.\r\nEspañol', 'español', 'descripcionProductos', 'index'),
(46, 'Coffee Shop is not only a place where you can get a hot and tasty coffee. Our team members also write interesting articles on everything concerning coffee.\r\ningles', 'ingles', 'descriSobreNosotros', 'index'),
(47, 'Coffee Shop is not only a place where you can get a hot and tasty coffee. Our team members also write interesting articles on everything concerning coffee.\r\nespañol', 'español', 'descriSobreNosotros', 'index'),
(48, 'Mission', 'ingles', 'mision', 'index'),
(49, 'Misión', 'español', 'mision', 'index'),
(50, 'Vission', 'ingles', 'vision', 'index'),
(51, 'Visión', 'español', 'vision', 'index'),
(52, 'Production', 'ingles', 'produccion', 'index'),
(53, 'Producción', 'español', 'produccion', 'index'),
(54, 'Social responsability', 'ingles', 'responsabilidadSocial', 'index'),
(55, 'Responsabilidad Social', 'español', 'responsabilidadSocial', 'index');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `name` varchar(16) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(16) COLLATE utf8_bin NOT NULL,
  `idcard` varchar(30) COLLATE utf8_bin NOT NULL,
  `user` varchar(30) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `image` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`iduser`, `name`, `lastname`, `idcard`, `user`, `email`, `password`, `image`) VALUES
(1, 'Gustavo', 'Nájera', '304900550', 'Gustavo Nájera', 'tavinchi.com@gmial.com', '1234', 'user1.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`),
  ADD KEY `userfk` (`userfk`);

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`idgallery`),
  ADD KEY `image` (`image`);

--
-- Indices de la tabla `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`idimage`);

--
-- Indices de la tabla `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`idlink`);

--
-- Indices de la tabla `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`idorganization`);

--
-- Indices de la tabla `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`idpartner`);

--
-- Indices de la tabla `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`idprocess`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`);

--
-- Indices de la tabla `textpage`
--
ALTER TABLE `textpage`
  ADD PRIMARY KEY (`idtextpage`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `idgallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `image`
--
ALTER TABLE `image`
  MODIFY `idimage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `link`
--
ALTER TABLE `link`
  MODIFY `idlink` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `organization`
--
ALTER TABLE `organization`
  MODIFY `idorganization` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `partner`
--
ALTER TABLE `partner`
  MODIFY `idpartner` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `process`
--
ALTER TABLE `process`
  MODIFY `idprocess` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `idproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `textpage`
--
ALTER TABLE `textpage`
  MODIFY `idtextpage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`userfk`) REFERENCES `user` (`iduser`) ON DELETE CASCADE;

--
-- Filtros para la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`image`) REFERENCES `image` (`idimage`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
