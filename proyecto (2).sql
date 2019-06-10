-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2019 a las 01:59:38
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `idanuncio` int(11) NOT NULL,
  `idinstitucion` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anuncio`
--

INSERT INTO `anuncio` (`idanuncio`, `idinstitucion`, `fecha`, `imagen`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
(2, NULL, '2019-05-23', 'C:\\XAMPP\\tmp\\phpA44F.tmp', 'Este es el anuncio de pruebas', 1, '2019-05-19', '2019-06-06'),
(3, NULL, '2019-06-22', 'C:\\XAMPP\\tmp\\phpBDF9.tmp', 'anuncio', 1, '2019-06-05', '2019-06-06'),
(4, NULL, '2019-06-22', 'C:\\XAMPP\\tmp\\phpC0E8.tmp', 'anuncio', 2, '2019-06-05', '2019-06-05'),
(5, NULL, '2019-06-30', '1559861980Arcadia Quest.jfif', 'esto es una prueba de un anuncio', 2, '2019-06-06', '2019-06-06'),
(6, NULL, '2019-06-21', '1559820476WhatsApp Image 2019-05-08 at 7.25.10 PM.jpg', 'loremmm', 2, '2019-06-06', '2019-06-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `nombrec` varchar(80) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `estado` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `idusuario`, `nombrec`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
(8, NULL, 'MEDIO AMBIENTE', '', 1, '2019-05-19', '2019-05-19'),
(9, NULL, 'jose', '', 1, '2019-05-19', '2019-05-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `idexamen` int(11) NOT NULL,
  `idinstitucion` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `costo` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `examen`
--

INSERT INTO `examen` (`idexamen`, `idinstitucion`, `fecha`, `costo`, `estado`, `created_at`, `updated_at`) VALUES
(2, NULL, '2000-05-15', 40000, 1, '2019-05-19', '2019-06-05'),
(3, NULL, '2019-06-27', 40000, 2, '2019-06-05', '2019-06-05'),
(4, NULL, '2019-06-30', 35000, 2, '2019-06-05', '2019-06-05'),
(5, NULL, '2019-06-28', 34500, 1, '2019-06-05', '2019-06-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `idinstitucion` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `nombrei` varchar(80) DEFAULT NULL,
  `pagina` varchar(200) DEFAULT NULL,
  `direccion` varchar(80) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`idinstitucion`, `idusuario`, `nombrei`, `pagina`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 3, 'UNIVERSIDAD DE ANTIOQUIA', 'UDEA.COM', 'CL 89B # 45-67', '2019-05-21', '2019-05-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `idoferta` int(11) NOT NULL,
  `idcategoria` int(11) DEFAULT NULL,
  `idinstitucion` int(11) DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `medida` varchar(80) NOT NULL,
  `nombref` varchar(80) DEFAULT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`idoferta`, `idcategoria`, `idinstitucion`, `duracion`, `medida`, `nombref`, `descripcion`, `estado`, `updated_at`, `created_at`) VALUES
(21, 8, NULL, 6, 'Años', 'prueba', 'loremenes', 2, '2019-06-06', '2019-06-05'),
(22, 8, NULL, 100, 'Años', 'papuchon', 'hola bebes como estan, esta pagina esta quedando muy papa', 2, '2019-06-05', '2019-06-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `nivel_formacion` varchar(80) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `idtipo` int(11) NOT NULL,
  `nombret` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`idtipo`, `nombret`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'INSTITUCION'),
(3, 'USUARIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `tipo_usuario` int(11) NOT NULL DEFAULT '3',
  `usuario` varchar(80) NOT NULL,
  `contraseña` varchar(80) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `tipo_usuario`, `usuario`, `contraseña`, `correo`, `estado`, `created_at`, `updated_at`) VALUES
(3, 2, 'institutucion', '1234', 'example@gmail.com', 1, '2019-05-07', '2019-05-01'),
(19, 3, 'ads', '$2y$10$6J9kjv08hZ2dBkAjj8zNCO8uf9j97P6qe0pbAqsslNuAreSfC2m.m', 'examples@gmail.com', 1, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`idanuncio`),
  ADD KEY `idinstitucion` (`idinstitucion`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`idexamen`),
  ADD KEY `idinstitucion` (`idinstitucion`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`idinstitucion`),
  ADD UNIQUE KEY `idinstitucion` (`idinstitucion`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`idoferta`),
  ADD UNIQUE KEY `idoferta` (`idoferta`),
  ADD KEY `idcategoria` (`idcategoria`),
  ADD KEY `idinstitucion` (`idinstitucion`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idperfil`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `idusuario` (`idusuario`),
  ADD KEY `tipo_usuario` (`tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `idanuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `examen`
--
ALTER TABLE `examen`
  MODIFY `idexamen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `idinstitucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `idoferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `anuncio_ibfk_1` FOREIGN KEY (`idinstitucion`) REFERENCES `institucion` (`idinstitucion`);

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `examen_ibfk_1` FOREIGN KEY (`idinstitucion`) REFERENCES `institucion` (`idinstitucion`);

--
-- Filtros para la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD CONSTRAINT `institucion_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `oferta_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`),
  ADD CONSTRAINT `oferta_ibfk_2` FOREIGN KEY (`idinstitucion`) REFERENCES `institucion` (`idinstitucion`);

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`idtipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
