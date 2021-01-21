-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-01-2021 a las 20:22:20
-- Versión del servidor: 5.7.31-0ubuntu0.18.04.1
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ele`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoras`
--

CREATE TABLE `bitacoras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cuando` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `que` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categorias`, `descripcion`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'Audifonos', 'Lo mejor en audifonos', 'audifonos', '2020-12-17 01:08:08', '2020-12-17 01:08:08'),
(2, 'telefonos', 'Lo mejor en telefonia', 'telefonos', '2020-12-17 01:08:08', '2020-12-17 01:08:08'),
(3, 'electronica', 'Lo mejor en electronica', 'electronica', '2020-12-17 01:08:08', '2020-12-17 01:08:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_10_164408_create_usuarios_table', 1),
(5, '2020_11_10_230810_create_categorias_table', 1),
(6, '2020_11_11_002437_create_productos_table', 1),
(7, '2020_11_26_184655_create_bitacoras_table', 1),
(8, '2020_12_03_232626_create_preguntas_table', 1),
(9, '2020_12_09_045243_create_transacciones_table', 1),
(10, '2020_12_09_053833_create_mproductos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mproductos`
--

CREATE TABLE `mproductos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom_Producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precioU` double(8,2) NOT NULL,
  `tipo_producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregunta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom_Producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precioU` double(8,2) NOT NULL,
  `tipo_producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transacciones`
--

CREATE TABLE `transacciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exelente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bueno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `normal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puede_mejorar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `malo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `codigo`, `tipo`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'supervisor josue', 'super@gmail.com', 'adm1', '1', NULL, '$2y$10$unfyU08CTjilw4M5q1Pygu66k9S5AwvECXb7QgQyzH9wQKaZPfsl2', NULL, '2020-12-17 01:08:08', '2020-12-17 01:08:08'),
(2, 'admin williams', 'williams@gmail.com', 'adm2', '2', NULL, '$2y$10$bGBRe1Gavt17HqBWR4hwS.bjTR2Qi6iukigcLCLSkd6RgiBtll17W', NULL, '2020-12-17 01:08:08', '2020-12-17 01:08:08'),
(3, 'encargado alejandro', 'alejandro@gmail.com', 'adm3', '3', NULL, '$2y$10$i6iMk9s1ZQbfIa6PPqKD6eIm8Ct5mdX7lNa1Ovf6jlqiK/o1OvJOq', NULL, '2020-12-17 01:08:08', '2020-12-17 01:08:08'),
(4, 'cliente fernando', 'fernando@gmail.com', 'casa1', '4', NULL, '$2y$10$Ic23D226QfJTksPtZo.FCeKR1QHNl0eMkgfp/DF.PybSR14sFATSy', NULL, '2020-12-17 01:08:08', '2020-12-17 01:08:08'),
(5, 'Contador', 'contador@gmail.com', 'casa1', '5', NULL, '$2y$10$oXE.aAta5n3d.F54HDYPGuhHmhiHJuLZ9gxw8tvegToOmW6j8LV3K', NULL, '2020-12-17 01:08:08', '2020-12-17 01:08:08'),
(6, 'papanoe', 'admin@gmail.com', NULL, '4', NULL, '$2y$10$Nw.j1xYfAnB9A8HVY8CbvOTBjYZYrRC0PXM/v9j26iZ7484KAoy.q', NULL, '2020-12-17 01:31:11', '2020-12-17 01:31:11'),
(7, 'anonimo', 'josue_conejito19@hotmail.com', NULL, '4', NULL, '$2y$10$Q0oQX1Q9yl78Ar2pAtYw.uHuliYEoHH02uSjtl8ZDVyH/qNhUSKwu', NULL, '2020-12-17 02:28:40', '2020-12-17 02:28:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contraseña` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categorias_categorias_unique` (`categorias`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mproductos`
--
ALTER TABLE `mproductos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mproductos_nom_producto_unique` (`Nom_Producto`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productos_nom_producto_unique` (`Nom_Producto`);

--
-- Indices de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_correo_unique` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `mproductos`
--
ALTER TABLE `mproductos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
