-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2018 a las 14:29:38
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbbiosistemas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'asus', NULL, NULL),
(2, 'acer', NULL, NULL),
(3, 'dell', NULL, NULL),
(4, 'hp', NULL, NULL),
(10, 'samsung', NULL, NULL),
(11, 'lg', NULL, NULL),
(20, 'optoma', NULL, NULL),
(21, 'epson', NULL, NULL),
(30, 'otra', NULL, NULL),
(5, 'lenovo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2017_10_07_214215_create_marcas_table', 1),
(15, '2017_10_07_214352_create_productos_table', 1),
(16, '2017_10_08_084124_create_pulgadas_notebooks_table', 1),
(17, '2017_10_08_084156_create_processors_table', 1),
(18, '2017_10_08_084606_create_notebooks_table', 1),
(19, '2017_10_08_085345_create_monitor_pulgadas_table', 1),
(20, '2017_10_08_085524_create_monitors_table', 1),
(21, '2017_10_08_090414_create_proyectors_table', 1),
(22, '2017_10_08_142618_create_detalles_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitors`
--

CREATE TABLE `monitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `resolucion` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `conectividad` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `curvatura` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `aspect_ratio` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `brightness` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `monitor_pulgada` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `monitors`
--

INSERT INTO `monitors` (`id`, `resolucion`, `conectividad`, `curvatura`, `aspect_ratio`, `brightness`, `color`, `descripcion`, `producto_id`, `monitor_pulgada`, `created_at`, `updated_at`) VALUES
(1, 'Full HD (1080p) 1920 x 1080 at 240 Hz', 'DP 1.2 HDMI 1.4 4 x USB3.0 Audio Out', '170°/160°', '16:9', '400 nits', 'negro', '25" gaming monitor with 240Hz refresh rate and 1-ms response time. Featuring NVIDIA® G-Sync™ technology and custom AlienFX™ lighting.', 1, 1, '2018-02-20 12:36:01', '2018-02-26 13:51:53'),
(2, '1920 x 1080', 'VGA, HDMI', '1800R', '16:9', '250cd/m2', 'negro', 'Featuring an ultra-slim and sleek profile the Samsung CF390 monitor measures less than 0.5inch thick. Make a stylish statement while staying productive with the 24" curved screen. The simple circular stand will add a modern look to your space.', 5, 1, '2018-02-24 15:00:14', '2018-02-24 15:00:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitor_pulgadas`
--

CREATE TABLE `monitor_pulgadas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `monitor_pulgadas`
--

INSERT INTO `monitor_pulgadas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, '24', NULL, NULL),
(2, '27', NULL, NULL),
(3, '32', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notebooks`
--

CREATE TABLE `notebooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `procesador` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `disco_rigido` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `ram` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `descripcionB` text COLLATE utf8_spanish2_ci,
  `video` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `resolucion` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `bateria` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `conectividad` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `so` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `color` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `pulgada_id` int(10) UNSIGNED NOT NULL,
  `processor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `peso` double(2,1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `notebooks`
--

INSERT INTO `notebooks` (`id`, `procesador`, `disco_rigido`, `ram`, `descripcion`, `descripcionB`, `video`, `resolucion`, `bateria`, `conectividad`, `so`, `color`, `producto_id`, `pulgada_id`, `processor_id`, `created_at`, `updated_at`, `peso`) VALUES
(1, 'Intel CORE i7-7700HQ 3.80hz TURBO BOOST', '128GB disco solido, 1.000 GB disco hibrido', '16GB RAM DDR4 maximo 32GB', 'ROG Strix GL703 provides all the necessary tools to raise your mastery of the game to the next level. Engineered with the newest Intel® Core™ i7 processor, up to NVIDIA® GeForce® GTX 1050 graphics, and Windows 10 Pro, Strix GL703 equips you to control the competition. So gear up, stake your ground, and get ready to win!', 'Start your smooth gaming experience with Strix GL703! The very latest 7th Generation Intel Core i7 quad-core processor and NVIDIA® GeForce® GTX 1050 graphics deliver performance that\'s as superior as your gaming prowess. Strix GL703 also offers up to 32GB of fast DDR4 2400MHz memory — more than enough RAM to game while streaming videos or surfing the internet!', 'GeForce GTX 1050 4GB DDR5', '17.3 inch IPS LED Backlit Display FULL HD resolution (1920 x 1080)', '4 celdas', 'HDMI , mini display port, red 10/100/1000, WiFi AC, USB 3.0, BLUETOOTH', 'Windows 10', 'negro', 2, 4, 3, '2018-02-20 13:00:26', '2018-02-26 14:40:28', 3.0),
(2, 'Intel® Core™ i7-7500U Turbo boost', '250 GB disco solido', '16GB RAM DDR4', '¿Por qué lo delgado y liviano debe tener limitaciones? La última laptop ENVY, de elegancia llamativa y también potencia excepcional, brinda portabilidad mediante un diseño inspirado. Es delgada, está esculpida y viene equipada con el último hardware para afrontar casi todo lo que decida afrontar en casi cualquier lugar que se imagine.', NULL, 'Video Intel HD 620', '13.3 Pulg QHD+ (3200 x 1800) pantalla LED, TOUCHSCREEN', 'Bateria 9.5 hs max', 'WiFi AC, USB 3.0, USB C, HDMI, BLUETOOTH', 'Windows 10', 'color plateado', 4, 1, 3, '2018-02-21 15:37:20', '2018-02-21 15:37:20', 1.5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('webdesarrollo@protonmail.com', '$2y$10$c03hN9UZEHUxN2FM7SvJzeEAWTamrpqJOSXDib/vsgKlhewzA7QGy', '2018-03-04 12:59:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `processors`
--

CREATE TABLE `processors` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `processors`
--

INSERT INTO `processors` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'i3', NULL, NULL),
(2, 'i5', NULL, NULL),
(3, 'i7', NULL, NULL),
(4, 'i9', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen1` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen2` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `imagen3` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `imagen4` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo` enum('notebook','proyector','monitor') COLLATE utf8_spanish2_ci NOT NULL,
  `marca_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `titulo`, `nombre`, `precio`, `imagen`, `imagen1`, `imagen2`, `imagen3`, `imagen4`, `link`, `tipo`, `marca_id`, `created_at`, `updated_at`) VALUES
(1, 'DELL Alienware AW2518H', 'DELLAlienwareAW2518H', '21000.00', '23Alienware1.jpg', '23Alienware2.jpg', NULL, NULL, NULL, 'https://www.dell.com/en-us/shop/new-alienware-25-gaming-monitor-aw2518h/apd/210-amsr/monitors-monitor-accessories', 'monitor', 3, '2018-02-20 12:30:23', '2018-02-20 12:30:23'),
(2, 'ASUS STRIX GL703V', 'ASUSSTRIXGL703V', '39500.00', '39ASUS STRIX 17 1.jpg', '39ASUS STRIX 17 GL703V 2.jpg', '39ASUS STRIX 17 GL703V 3.png', NULL, NULL, 'https://www.asus.com/us/Laptops/ROG-Strix-GL703/', 'notebook', 1, '2018-02-20 12:52:39', '2018-02-20 12:52:39'),
(3, 'Epson PowerLite X17', 'EpsonPowerLiteX17', '16475.00', '20EPSON X17 1.jpg', '20EPSON X17 2.jpg', NULL, NULL, NULL, 'https://epson.com.ar/Para-el-trabajo/Proyectores/Salas-de-Reuniones/Proyector-Epson-PowerLite-X17-XGA-3LCD/p/V11H569020', 'proyector', 21, '2018-02-20 15:39:20', '2018-02-20 15:39:20'),
(4, 'HP Envy X360 13', 'HPEnvyX36013', '34900.00', '24HP ENVY 13-ad001la 1.jpg', '25HP ENVY 13-ad001la 2.JPG', '25HP ENVY 13-ad001la 3.JPG', NULL, NULL, 'https://www.hponline.com.ar/p/combo-notebook-hp-envy-13-ad001la-altavoz-hp-inala-mbrico-s6500-js2fgk', 'notebook', 4, '2018-02-21 15:31:25', '2018-02-21 15:31:25'),
(5, 'Samsung CF390 Curved', 'SamsungCF390Curved', '4900.00', '52CF390 Curved LED Monitor 1.jpg', '2CF390 Curved LED Monitor 2.jpg', '2CF390 Curved LED Monitor 3.jpg', NULL, NULL, 'https://www.samsung.com/us/computing/monitors/led/samsung-24-curved-led-monitor-lc24f390fhnxza/', 'monitor', 10, '2018-02-24 14:54:02', '2018-02-25 13:24:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectors`
--

CREATE TABLE `proyectors` (
  `id` int(10) UNSIGNED NOT NULL,
  `lumenes` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `lente` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `duracion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `conectividad` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `3d` tinyint(1) NOT NULL,
  `contraste` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proyectors`
--

INSERT INTO `proyectors` (`id`, `lumenes`, `lente`, `duracion`, `conectividad`, `descripcion`, `3d`, `contraste`, `producto_id`, `created_at`, `updated_at`) VALUES
(1, '2700 lumenes', NULL, 'hasta 6.000 horas', 'HDMI, Wireless, USB, VGA', 'Lampara reemplazable por el usuario de 6000 horas. Resolución nativa WXGA (1280x800). Soporta resolución máxima 1080p (1920x1080). Excelente reproducción de colores. Conector HDMI digital. Doble corrección de imagen (KEYSTONE) horizontal y vertical. Corrección de esquinas por separado. Lee archivos desde puerto USB. Incluye Bolso de transporte.', 0, '10.000:1', 3, '2018-02-20 15:55:20', '2018-02-26 13:59:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pulgadas_notebooks`
--

CREATE TABLE `pulgadas_notebooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pulgadas_notebooks`
--

INSERT INTO `pulgadas_notebooks` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, '13', NULL, NULL),
(2, '14', NULL, NULL),
(3, '15', NULL, NULL),
(4, '17', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` enum('false','true') COLLATE utf8_spanish2_ci DEFAULT 'true',
  `type` enum('user','admin') COLLATE utf8_spanish2_ci DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `active`, `type`) VALUES
(1, 'fabian', 'webdesarrollo@protonmail.com', '$2y$10$xVGsFkr57hH9gvZj.2uxoud0YF4q20RSVmLLlp4yitbRAZefq.EVy', 'sxzbKy2HFfVsZ9X9axZmCIEnEmZR7IWtoSS83GPAwo9Li7UplZfIq89OXlTI', '2018-01-20 14:23:45', '2018-01-20 14:23:45', 'true', 'admin'),
(2, 'Sergio', 'webdesarrollo2@gmail.com', '$2y$10$kRfP/0Eo3N0nFAdNKsPqTeRvWtXSRbbMmI7JVFlRK7eQlo6g94uiG', '5Y42HX0qWF8OKr36fPapFW8GKqurGLqHtjD4lIanihcZiRNMpqqiFqFUTDgQ', '2018-01-29 13:20:37', '2018-03-04 14:16:13', 'true', 'admin'),
(3, 'Felix Pinillas', 'kmiller@armyspy.com', '123456', NULL, '2018-01-30 19:45:57', '2018-01-31 17:36:03', 'true', 'user'),
(5, 'Francisco Lima', 'bb3cac7@mozej.com', '123456', NULL, '2018-01-31 15:15:46', '2018-01-31 15:19:05', 'false', 'user'),
(4, 'Dolores Aguero', 'umasexo-7668@yopmail.com', '$2y$10$fWHx6HZ/Id/a9FEj.JdvWerCSCA7zuEJ2MaExanAy.1xbt4gW6Zba', 'uVEcv3FFvjf83T8ETx4oFdmp5KWyuzhw7uHihbkVnxJ0j2VmgaH975n2kPEx', '2018-01-30 19:48:07', '2018-01-30 19:48:07', 'true', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `monitors`
--
ALTER TABLE `monitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monitors_producto_id_foreign` (`producto_id`),
  ADD KEY `monitors_monitor_pulgada_foreign` (`monitor_pulgada`);

--
-- Indices de la tabla `monitor_pulgadas`
--
ALTER TABLE `monitor_pulgadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notebooks`
--
ALTER TABLE `notebooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notebooks_producto_id_foreign` (`producto_id`),
  ADD KEY `notebooks_pulgada_id_foreign` (`pulgada_id`),
  ADD KEY `notebooks_processor_id_foreign` (`processor_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `processors`
--
ALTER TABLE `processors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productos_nombre_unique` (`nombre`),
  ADD KEY `productos_marca_id_foreign` (`marca_id`);

--
-- Indices de la tabla `proyectors`
--
ALTER TABLE `proyectors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyectors_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `pulgadas_notebooks`
--
ALTER TABLE `pulgadas_notebooks`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `monitors`
--
ALTER TABLE `monitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `monitor_pulgadas`
--
ALTER TABLE `monitor_pulgadas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `notebooks`
--
ALTER TABLE `notebooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `processors`
--
ALTER TABLE `processors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `proyectors`
--
ALTER TABLE `proyectors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pulgadas_notebooks`
--
ALTER TABLE `pulgadas_notebooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
