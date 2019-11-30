-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-11-2019 a las 19:37:59
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtdg`
--
CREATE DATABASE IF NOT EXISTS `bdtdg` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdtdg`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesorias`
--

DROP TABLE IF EXISTS `asesorias`;
CREATE TABLE IF NOT EXISTS `asesorias` (
  `id_asesoria` varchar(20) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_persona` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id_asesoria`,`id_proyecto`,`id_persona`),
  KEY `id_proyecto` (`id_proyecto`),
  KEY `id_persona` (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cofinanciador`
--

DROP TABLE IF EXISTS `cofinanciador`;
CREATE TABLE IF NOT EXISTS `cofinanciador` (
  `id_cofinanciador` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cofinanciador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_proyecto`
--

DROP TABLE IF EXISTS `documentos_proyecto`;
CREATE TABLE IF NOT EXISTS `documentos_proyecto` (
  `id_documento` varchar(20) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `fecha_documento` date NOT NULL,
  `enlace_documento` varchar(100) NOT NULL,
  PRIMARY KEY (`id_documento`,`id_proyecto`),
  KEY `id_proyecto` (`id_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `id_persona` varchar(20) NOT NULL,
  `id_estudiante` varchar(20) NOT NULL,
  `promedio` float NOT NULL,
  PRIMARY KEY (`id_persona`),
  UNIQUE KEY `id_estudiante` (`id_estudiante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_persona`, `id_estudiante`, `promedio`) VALUES
('123', 'asd', 2),
('767', '312', 132),
('868', '2', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `id_persona` varchar(20) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tipo` varchar(3) NOT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombres`, `apellidos`, `telefono`, `email`, `tipo`) VALUES
('1', 'wert', 'asdss', '123', 'asd', 'a'),
('123', '', 'ads', 'adas', 'asd@asd', 'asd'),
('1233', '', 'ads', 'adas', 'asd@asd', 'asd'),
('767', 'asd', 'ads', 'das', 'asd@asd', 'das'),
('868', 'asdasdggg', 'asd', '2222', 'asd', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `categoria_producto` varchar(20) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `fecha`, `categoria_producto`) VALUES
('1', '2019-11-15', 'Producto 1'),
('2', '2019-11-27', 'Producto 2'),
('3', '2019-11-19', 'Producto 3'),
('4', '2019-11-27', 'Producto 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

DROP TABLE IF EXISTS `proyecto`;
CREATE TABLE IF NOT EXISTS `proyecto` (
  `id_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `fechaInsc` date NOT NULL,
  `fechaini` date DEFAULT NULL,
  `fechafin` date DEFAULT NULL,
  `cofinanciado` varchar(2) NOT NULL,
  `presupuesto` double NOT NULL,
  `porccof` float NOT NULL,
  `estado` varchar(20) NOT NULL,
  `observaciones` text NOT NULL,
  `tipo_proyecto` varchar(3) NOT NULL,
  `id_producto` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_proyecto`),
  UNIQUE KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `titulo`, `fechaInsc`, `fechaini`, `fechafin`, `cofinanciado`, `presupuesto`, `porccof`, `estado`, `observaciones`, `tipo_proyecto`, `id_producto`) VALUES
(1, 'hhhhhh', '2019-10-18', '2019-10-25', '2019-10-01', 'no', 56, 45, '132456789', '5', '6', NULL),
(2, 'hhhhhh', '2019-10-18', '2019-10-25', '2019-10-01', 'no', 56, 45, '132456789', '5', '6', NULL),
(3, 'asda', '2019-10-01', '2019-10-03', '2019-10-10', 'no', 123, 1231, 'asdasd', 'asd', 'as', NULL),
(4, '', '2019-10-01', '2019-10-03', '2019-10-10', 'no', 123, 1231, 'asdasd', 'asd', 'as', NULL),
(5, 'asd', '2019-10-01', '2019-10-01', '2019-10-10', 'no', 132, 231, 'ads', 'asd', 'asd', NULL),
(6, 'asdad', '2019-10-01', '2019-10-01', '2019-10-10', 'no', 132, 32, 'asd', 'asd', 'asd', NULL),
(7, 'asd', '2019-10-01', '2019-10-01', '2019-10-04', 'no', 123, 312, '2', '12', 'sda', NULL),
(8, 'asd', '2019-10-01', '2019-10-01', '2019-09-12', 'no', 123, 13, 'ads', 'asd', 'asd', NULL),
(12, 'uno', '2019-11-10', '2019-11-02', '2019-11-17', 'no', 123, 12, 'asd', 'asdasd', 'asd', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_financiado`
--

DROP TABLE IF EXISTS `proyecto_financiado`;
CREATE TABLE IF NOT EXISTS `proyecto_financiado` (
  `id_proyecto` int(11) NOT NULL,
  `id_financiador` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `porcentaje_financiado` varchar(100) NOT NULL,
  PRIMARY KEY (`id_proyecto`,`id_financiador`),
  KEY `id_financiador` (`id_financiador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_persona`
--

DROP TABLE IF EXISTS `proyecto_persona`;
CREATE TABLE IF NOT EXISTS `proyecto_persona` (
  `id_persona` varchar(20) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `rol` varchar(20) NOT NULL,
  PRIMARY KEY (`id_persona`,`id_proyecto`),
  KEY `FKIDPROYECTO` (`id_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_sesion`
--

DROP TABLE IF EXISTS `usuario_sesion`;
CREATE TABLE IF NOT EXISTS `usuario_sesion` (
  `id_persona` varchar(20) NOT NULL,
  `privilegios` varchar(20) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_sesion`
--

INSERT INTO `usuario_sesion` (`id_persona`, `privilegios`, `usuario`, `clave`) VALUES
('1', '', 'admin', 'admin123');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asesorias`
--
ALTER TABLE `asesorias`
  ADD CONSTRAINT `asesorias_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`),
  ADD CONSTRAINT `asesorias_ibfk_2` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `documentos_proyecto`
--
ALTER TABLE `documentos_proyecto`
  ADD CONSTRAINT `documentos_proyecto_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `proyecto_financiado`
--
ALTER TABLE `proyecto_financiado`
  ADD CONSTRAINT `proyecto_financiado_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`),
  ADD CONSTRAINT `proyecto_financiado_ibfk_2` FOREIGN KEY (`id_financiador`) REFERENCES `cofinanciador` (`id_cofinanciador`);

--
-- Filtros para la tabla `proyecto_persona`
--
ALTER TABLE `proyecto_persona`
  ADD CONSTRAINT `proyecto_persona_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`),
  ADD CONSTRAINT `proyecto_persona_ibfk_2` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`);

--
-- Filtros para la tabla `usuario_sesion`
--
ALTER TABLE `usuario_sesion`
  ADD CONSTRAINT `usuario_sesion_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
