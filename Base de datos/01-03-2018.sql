-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 50.62.209.40:3306
-- Tiempo de generación: 07-03-2018 a las 19:26:51
-- Versión del servidor: 5.5.43-37.2-log
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafemision`
--
-- CREATE DATABASE IF NOT EXISTS `cafemision` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
-- USE `cafemision`;

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
(5, 'hola mundo jajaja', 6),
(6, 'Este es el comentario de andresito', 7),
(8, 'Prueba con usuario 03', 10),
(9, 'xfxvf', 6),
(10, 'zxcx', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `idgallery` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8_bin NOT NULL,
  `descriptionEs` text COLLATE utf8_bin NOT NULL,
  `descriptionIn` text COLLATE utf8_bin NOT NULL
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
(1, 'La calidad total en el café impulsando el desarrollo de la comunidad es nuestra misión, empezando por su cultivo y cuidado antes, durante y después de la cosecha, comprometiéndonos a brindar a nuestros clientes nacionales e internacionales la selección más estricta del mejor grano, conservando al máximo el sabor, aroma y la frescura.', 'Ubicarnos a nivel nacional e internacional como una marca de café premiun, preferida por los consumidores nacionales y extranjeros gracias a su labor artesanal en pro del bienestar social, calidad, sabor, aroma que caracteriza a Café Misión de Costa Rica S.A.', 'Nuestra cercana relación con el ICAFE, MAG, Ministerio de Salud y PROCOMER a garantizado tanto nuestras cosechas como el control de los procesos de producción.', 'Es un orgullo y un compromiso importante para Café Misión de Costa Rica convertirse en Empresa socialmente responsable, pues nos compromete con la sociedad no sólo a presentar un servicio y productos de calidad, también a contribuir en que nuestro entorno sea mejor dentro y fuera de nuestra empresa.', '"Es en esa concordancia entre la calidad en el trabajo y la visión social, como obtenemos una cosecha excelente, y nos lleva a dirigimos a un mercado donde lo que nos diferencia es el valor y aprecio por el ser humano de la mano con la calidad del producto"', '66www.facebook.com español', '6121216tavinchi.com@gmail.com', 'spanish'),
(2, 'The total quality of coffee promoting community development is our mission, starting with its cultivation and care before, during and after harvest, committing ourselves to offer our national and international clients the strictest selection of the best grain, keeping maximum flavor, aroma and freshness.', 'To place ourselves at the national and international level as a premiun coffee brand, preferred by domestic and foreign consumers thanks to its artisan work in favor of social welfare, quality, flavor, aroma that characterizes Café Misión S.A from Costa Rica.', 'Our close relationship with ICAFE, MAG, Ministry of Health and PROCOMER guarantees both our crops and the control of production processes.', 'It is a pride and an important commitment for Café Misión de Costa Rica to become a socially responsible company, as we are committed to society not only to present a service and quality products, but also to contribute to our better environment both inside and outside our business.', '"It is in this concordance between the quality of work and the social vision, as we obtain an excellent harvest, and leads us to a market where there is no difference in value and appreciation for the human being hand in hand with the quality of product"', '77facebook ingles', '77prueba@gmail.com', 'ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partners`
--

CREATE TABLE `partners` (
  `idpartner` int(11) NOT NULL,
  `link` varchar(200) COLLATE utf8_bin NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `partners`
--

INSERT INTO `partners` (`idpartner`, `link`, `name`) VALUES
(1, 'www.google.com', 'google'),
(5, 'www.facebook.com2', 'facebook3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `process`
--

CREATE TABLE `process` (
  `idprocess` int(11) NOT NULL,
  `namees` varchar(30) COLLATE utf8_bin NOT NULL,
  `namein` varchar(100) COLLATE utf8_bin NOT NULL,
  `descriptiones` text COLLATE utf8_bin NOT NULL,
  `descriptionin` text COLLATE utf8_bin NOT NULL,
  `image` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `process`
--

INSERT INTO `process` (`idprocess`, `namees`, `namein`, `descriptiones`, `descriptionin`, `image`) VALUES
(1, 'SELECTED COFFEE BEANS es', 'SELECTED COFFEE BEANS in', 'Enjoy the aroma of selected coffee beans available at our shop. español', 'Enjoy the aroma of selected coffee beans available at our shop. ingles', 'icon-service-3-84x84.png'),
(4, 'ELITE COFFEE es2', 'ELITE COFFEE in34', 'Take a sip of Elite Coffee, and revel in the different tastes.español', 'Take a sip of Elite Coffee, and revel in the different tastes. in', 'Cama-Tarima2.jpg'),
(5, 'TASTY COFFEE es', 'TASTY COFFEE in', 'At Coffee Shop you can find lots of tasty coffee flavor español', 'At Coffee Shop you can find lots of tasty coffee flavor ingles', 'icon-service-1-84x84.png'),
(7, 'COOKING COFFEE español', 'COOKING COFFEE ingles', 'If you prefer to cook coffee, we have something special for you. español', 'If you prefer to cook coffee, we have something special for you. ingles', 'icon-service-2-84x84.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `idproduct` int(11) NOT NULL,
  `namein` varchar(50) COLLATE utf8_bin NOT NULL,
  `namees` varchar(100) COLLATE utf8_bin NOT NULL,
  `descriptiones` text COLLATE utf8_bin NOT NULL,
  `descriptionin` text COLLATE utf8_bin NOT NULL,
  `image` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(2, 'ABOUT', 'ingles', 'TituloPrincipal', 'about'),
(3, 'Mission', 'ingles', 'mision', 'about'),
(4, 'Vission', 'ingles', 'vision', 'about'),
(5, 'Production', 'ingles', 'produccion', 'about'),
(6, 'Social Responsability', 'ingles', 'responsabilidadSocial', 'about'),
(7, 'Texto descriptivo sobre la pagina de sobre nosotros pero en español', 'spanish', 'DescripcionPrincipal', 'about'),
(8, 'Sobre Nosotros', 'spanish', 'TituloPrincipal', 'about'),
(9, 'Misión', 'spanish', 'mision', 'about'),
(10, 'Visión', 'spanish', 'vision', 'about'),
(11, 'Producción', 'spanish', 'produccion', 'about'),
(12, 'Responsabilidad Social', 'spanish', 'responsabilidadSocial', 'about'),
(13, 'PRODUCTS', 'ingles', 'TituloPrincipal', 'products'),
(14, 'Main description about the product page', 'ingles', 'DescripcionPrincipal', 'products'),
(15, 'PRODUCTOS', 'spanish', 'TituloPrincipal', 'products'),
(16, 'descripción principal sobre la pagina de productos', 'spanish', 'DescripcionPrincipal', 'products'),
(17, 'Testimonials', 'ingles', 'TituloPrincipal', 'comment'),
(18, 'This is the testimonial page', 'ingles', 'DescripcionPrincipal', 'comment'),
(19, 'new comment', 'ingles', 'btnNuevoComment', 'comment'),
(20, 'Similar products', 'ingles', 'productosSimilares', 'detalle'),
(21, 'Productos similares', 'spanish', 'productosSimilares', 'detalle'),
(22, 'GALLERY', 'ingles', 'TituloPrincipal', 'gallery'),
(23, 'GALERÍA', 'spanish', 'TituloPrincipal', 'gallery'),
(24, 'Café Misión', 'ingles', 'TituloPrincipal', 'index'),
(25, 'Café Misión', 'spanish', 'TituloPrincipal', 'index'),
(26, 'History', 'ingles', 'historia', 'index'),
(27, 'Historia', 'spanish', 'historia', 'index'),
(28, 'Procesos del café', 'spanish', 'procesos', 'index'),
(29, 'Coffee processes', 'ingles', 'procesos', 'index'),
(30, 'Testimonios', 'spanish', 'testimonios', 'index'),
(31, 'Testimonials', 'ingles', 'testimonios', 'index'),
(32, 'Productos', 'spanish', 'productos', 'index'),
(33, 'Products', 'ingles', 'productos', 'index'),
(34, 'Sobre nosotros', 'spanish', 'sobreNosotros', 'index'),
(35, 'About', 'ingles', 'sobreNosotros', 'index'),
(36, 'Read more', 'ingles', 'leerMas', 'index'),
(37, 'Leer mas', 'spanish', 'leerMas', 'index'),
(38, 'We provide a variety of services both to our new and regular customers. If you can think of anything connected with coffee, then we can offer it at our Coffee Shop.\r\nespañol', 'spanish', 'descripcionProcesos', 'index'),
(39, 'We provide a variety of services both to our new and regular customers. If you can think of anything connected with coffee, then we can offer it at our Coffee Shop.\r\ningles', 'ingles', 'descripcionProcesos', 'index'),
(40, 'Testimonials', 'ingles', 'testimonios', 'index'),
(41, 'Testimonios', 'spanish', 'testimonios', 'index'),
(42, 'We provide a variety of services both to our new and regular customers. If you can think of anything connected with coffee, then we can offer it at our Coffee Shop.\r\ningles. Ingles', 'ingles', 'descripcionTestimonios', 'index'),
(43, 'We provide a variety of services both to our new and regular customers. If you can think of anything connected with coffee, then we can offer it at our Coffee Shop.\r\ningles. Español', 'spanish', 'descripcionTestimonios', 'index'),
(44, 'Feel the real taste of coffee with our products. We offer high quality and tasty coffee variations from widely known brands.\r\nIngles', 'ingles', 'descripcionProductos', 'index'),
(45, 'Feel the real taste of coffee with our products. We offer high quality and tasty coffee variations from widely known brands.\r\nEspañol', 'spanish', 'descripcionProductos', 'index'),
(46, 'Coffee Shop is not only a place where you can get a hot and tasty coffee. Our team members also write interesting articles on everything concerning coffee.\r\ningles', 'ingles', 'descriSobreNosotros', 'index'),
(47, 'Coffee Shop is not only a place where you can get a hot and tasty coffee. Our team members also write interesting articles on everything concerning coffee.\r\nespañol', 'spanish', 'descriSobreNosotros', 'index'),
(48, 'Mission', 'ingles', 'mision', 'index'),
(49, 'Misión', 'spanish', 'mision', 'index'),
(50, 'Vission', 'ingles', 'vision', 'index'),
(51, 'Visión', 'spanish', 'vision', 'index'),
(52, 'Production', 'ingles', 'produccion', 'index'),
(53, 'Producción', 'spanish', 'produccion', 'index'),
(54, 'Social responsability', 'ingles', 'responsabilidadSocial', 'index'),
(55, 'Responsabilidad Social', 'spanish', 'responsabilidadSocial', 'index'),
(56, 'Registrar', 'spanish', 'TituloPrincipal', 'register'),
(57, 'Register', 'ingles', 'TituloPrincipal', 'register'),
(58, 'Correo', 'spanish', 'TituloCorreo', 'register'),
(59, 'Email', 'ingles', 'TituloCorreo', 'register'),
(60, 'Carné', 'spanish', 'TituloCarne', 'register'),
(61, 'Carné', 'ingles', 'TituloCarne', 'register'),
(62, 'Nombre', 'spanish', 'TituloName', 'register'),
(63, 'Name', 'ingles', 'TituloName', 'register'),
(64, 'Apellido', 'spanish', 'TituloApellido', 'register'),
(65, 'Lastname', 'ingles', 'TituloApellido', 'register'),
(66, 'Contraseña', 'spanish', 'TituloContrasena', 'register'),
(67, 'password', 'ingles', 'TituloContrasena', 'register'),
(68, 'Usuario', 'spanish', 'TituloUsuario', 'register'),
(69, 'User', 'ingles', 'TituloUsuario', 'register'),
(70, 'Imagen', 'spanish', 'TituloImagen', 'register'),
(71, 'Image', 'ingles', 'TituloImagen', 'register'),
(72, 'Insertar', 'spanish', 'TituloInsertar', 'register'),
(73, 'Insert', 'ingles', 'TituloInsertar', 'register'),
(74, 'Asegúrese de no dejar ningún campo en blanco', 'spanish', 'Descripcion', 'register'),
(75, '\r\nBe sure not to leave any fields blank', 'ingles', 'Descripcion', 'register'),
(76, 'Session', 'ingles', 'TituloPrincipal', 'sesion'),
(77, 'Sesión', 'spanish', 'TituloPrincipal', 'sesion'),
(78, 'Usuario', 'spanish', 'usuario', 'sesion'),
(79, 'User', 'ingles', 'usuario', 'sesion'),
(80, 'contraseña', 'spanish', 'password', 'sesion'),
(81, 'Password', 'ingles', 'password', 'sesion'),
(82, 'Socios', 'spanish', 'socios', 'index'),
(83, 'Partners', 'ingles', 'socios', 'index'),
(84, 'Los siguientes son socios que colaboran en el desarrollo de nuestras actividades.', 'ingles', 'descripcionSocios', 'index'),
(85, '\r\nThe following are partners who collaborate in the development of our activities.', 'spanish', 'descripcionSocios', 'index'),
(86, 'Testimonios', 'spanish', 'TituloPrincipal', 'comment'),
(87, 'Esta es la pagina principal para acceder a comentarios realizados por la comunidad. Para añadir un comentario primero debe registrarse, luego volver a la vista principal de comentarios.', 'spanish', 'DescripcionPrincipal', 'comment'),
(88, 'Nuevo Comentario', 'spanish', 'btnNuevoComment', 'comment'),
(89, 'Sobre Nosotros', 'spanish', 'item1', 'all'),
(90, 'About us', 'ingles', 'item1', 'all'),
(91, 'Productos', 'spanish', 'item2', 'all'),
(92, 'Products', 'ingles', 'item2', 'all'),
(93, 'Galería', 'spanish', 'item3', 'all'),
(94, 'Gallery', 'ingles', 'item3', 'all'),
(95, 'Contacto', 'spanish', 'item4', 'all'),
(96, 'Contact', 'ingles', 'item4', 'all'),
(97, 'Comentarios', 'spanish', 'item5', 'all'),
(98, 'Comments', 'ingles', 'item5', 'all'),
(99, 'Idioma', 'spanish', 'item6', 'all'),
(100, 'Languaje', 'ingles', 'item6', 'all'),
(101, 'Registrarse', 'spanish', 'item7', 'all'),
(102, 'Sign up', 'ingles', 'item7', 'all'),
(103, 'Sign in', 'ingles', 'item8', 'all'),
(104, 'Ingresar', 'spanish', 'item8', 'all'),
(105, 'Salir', 'spanish', 'item9', 'all'),
(106, 'Sign Out', 'ingles', 'item9', 'all'),
(107, 'Mi cuenta', 'spanish', 'item10', 'all'),
(108, 'My account\r\n', 'ingles', 'item10', 'all'),
(109, 'Proceso', 'spanish', 'item11', 'all'),
(110, 'Process', 'ingles', 'item11', 'all'),
(111, 'Socios', 'spanish', 'item12', 'all'),
(112, 'Partners', 'ingles', 'item12', 'all'),
(113, 'Texto eN página', 'spanish', 'item13', 'all'),
(114, 'Text in page', 'ingles', 'item13', 'all'),
(115, 'Organización', 'spanish', 'item14', 'all'),
(116, 'Company', 'ingles', 'item14', 'all'),
(117, 'Español', 'spanish', 'item15', 'all'),
(118, 'Spanish', 'ingles', 'item15', 'all'),
(119, 'Inglés', 'spanish', 'item16', 'all'),
(120, 'English', 'ingles', 'item16', 'all');

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
  `image` varchar(100) COLLATE utf8_bin NOT NULL,
  `role` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`iduser`, `name`, `lastname`, `idcard`, `user`, `email`, `password`, `image`, `role`) VALUES
(5, 'Administrador6', 'administrador', '123', 'admin', 'admin@gmail.com', 'admin', 'user1.jpg', 'administrador'),
(6, 'tavo', 'najera', '304900550', 'tavo', 'tavo.nn.20@hotmail.es', '1234', 'user1.jpg', 'empleado'),
(7, 'Andres', 'Najera', '304900550', 'andres', 'tavo.nn.20@hotmail.es', '1234', 'zoid-transformer.jpg', 'empleado'),
(10, 'Gustavo', 'Najera', '12e32423', 'prueba03', 'tavinchi.com@gmail.com', '12345', '2.jpg', 'empleado'),
(11, '6666666', 'tav666666666inch', '66666666', 'tavoprueba2', 'tavinchi.com@gmail.com', '123456789', 'ojo fondo.jpg', 'empleado'),
(12, 'QMarcoPoloXTR', 'QMarcoPoloXTRGJ', '85399323295', 'QMarcoPoloXTR', 'sheryll@pomelo.securemail.co.pl', 'c3jcz%53TkP', '', 'empleado'),
(13, 'XMikoDikoX', 'XMikoDikoXUX', '88125361144', 'XMikoDikoX', 'lakiesha@pulser.securemail.co.pl', '5jqu35tTg@C', '', 'empleado'),
(14, 'Francisco', 'Lobo', '304370891', 'flobo', 'loboporras@gmail.com', 'ABC123xyz', '', 'empleado'),
(15, 'DarrylNes', 'DarrylNesWQ', '82515943714', 'DarrylNes', 'monicalee923@yahoo.com', 'y97xYq%u7jN', '', 'empleado');

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
  ADD PRIMARY KEY (`idgallery`);

--
-- Indices de la tabla `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`idorganization`);

--
-- Indices de la tabla `partners`
--
ALTER TABLE `partners`
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
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `idgallery` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `organization`
--
ALTER TABLE `organization`
  MODIFY `idorganization` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `partners`
--
ALTER TABLE `partners`
  MODIFY `idpartner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `process`
--
ALTER TABLE `process`
  MODIFY `idprocess` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `idproduct` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `textpage`
--
ALTER TABLE `textpage`
  MODIFY `idtextpage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`userfk`) REFERENCES `user` (`iduser`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
