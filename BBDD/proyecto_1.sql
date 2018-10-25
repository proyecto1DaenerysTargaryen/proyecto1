-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2018 a las 18:09:12
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_incidencia`
--

CREATE TABLE `tbl_incidencia` (
  `id_incidencia` int(11) NOT NULL,
  `id_reserva` int(11) DEFAULT NULL,
  `id_tipus_incidencia` int(11) DEFAULT NULL,
  `descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_recurso`
--

CREATE TABLE `tbl_recurso` (
  `id_recurso` int(11) NOT NULL,
  `nombre_recurso` char(30) DEFAULT NULL,
  `cantidad` int(3) DEFAULT NULL,
  `id_tipus_recurso` int(11) DEFAULT NULL,
  `disponible` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_recurso`
--

INSERT INTO `tbl_recurso` (`id_recurso`, `nombre_recurso`, `cantidad`, `id_tipus_recurso`, `disponible`) VALUES
(1, 'Sala multidisciplinaria', 4, 1, 4),
(2, 'Sala de informàtica', 2, 1, 2),
(3, 'Taller de cocina', 1, 1, 1),
(4, 'Despacho para entrevistas', 2, 1, 2),
(5, 'Salón de actos', 1, 1, 1),
(6, 'Sala de reuniones', 1, 1, 1),
(7, 'Proyector', 2, 2, 2),
(8, 'Ordenador portátil', 3, 2, 3),
(9, 'Teléfono móvil', 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reserva`
--

CREATE TABLE `tbl_reserva` (
  `id_reserva` int(11) NOT NULL,
  `id_recurso` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `disponible` int(3) DEFAULT NULL,
  `f_inici` date NOT NULL,
  `f_devol` date NOT NULL,
  `h_ini` time NOT NULL,
  `h_devol` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipus_incidencia`
--

CREATE TABLE `tbl_tipus_incidencia` (
  `id_tipus_incidencia` int(11) NOT NULL,
  `nombre_tipus_incidencias` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipus_incidencia`
--

INSERT INTO `tbl_tipus_incidencia` (`id_tipus_incidencia`, `nombre_tipus_incidencias`) VALUES
(1, 'Leve'),
(2, 'Grave');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipus_recurso`
--

CREATE TABLE `tbl_tipus_recurso` (
  `id_tipus_recurso` int(11) NOT NULL,
  `nombre_tipus_recurso` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipus_recurso`
--

INSERT INTO `tbl_tipus_recurso` (`id_tipus_recurso`, `nombre_tipus_recurso`) VALUES
(1, 'Sala'),
(2, 'Dispositivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipus_usuario`
--

CREATE TABLE `tbl_tipus_usuario` (
  `id_tipus_usuario` int(11) NOT NULL,
  `nombre_tipus_usuario` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipus_usuario`
--

INSERT INTO `tbl_tipus_usuario` (`id_tipus_usuario`, `nombre_tipus_usuario`) VALUES
(0, 'Usuario'),
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` char(30) DEFAULT NULL,
  `apellido` char(30) DEFAULT NULL,
  `dni` char(9) DEFAULT NULL,
  `nick` char(30) DEFAULT NULL,
  `contra` char(100) DEFAULT NULL,
  `id_tipus_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `nombre`, `apellido`, `dni`, `nick`, `contra`, `id_tipus_usuario`) VALUES
(0, 'administrador', 'total', '11111111A', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(1, 'Ernest', 'Azanza', '47192064Z', 'eazanza', '1e79137d72df1a869094070b2e602156', 1),
(2, 'Daniel', 'Soriano', '47293043V', 'soriano69', 'aa47f8215c6f30a0dcdb2a36a9f4168e', 1),
(3, 'Kyrenia', 'Muñoz', '47856523C', 'lakyree', 'fab4784ec2290835a73d8d373a69273d', 1),
(4, 'Joel', 'Moreno', '47582204S', 'joelito19', 'c000ccf225950aac2a082a59ac5e57ff', 0),
(5, 'Marc', 'Hernandez', '47885206B', 'marcotaku', '97e1e59c0375e0f55c10d4314db20466', 0),
(6, 'Adrià', 'Soto', '47882311N', 'sotodelreal', 'cba7fd79e3f4e142fdbd0be69eb45c6a', 0),
(7, 'David', 'Sanchez', '47520036V', 'dsanchez', '172522ec1028ab781d9dfd17eaca4427', 0),
(8, 'Daenerys', 'Targaryen', '47956422D', 'dtargaryen', '93ee42882ea5a7ebb49d7fa64854949e', 0),
(9, 'Jon', 'Snow', '47775620P', 'jsnow', '006cb570acdab0e0bfc8e3dcb7bb4edf', 0),
(10, 'Cersei', 'Lannister', '47005469R', 'clannister', '1c6c87e0931b2f5dc302f1a6dcdca5a2', 0),
(11, 'Tyrion', 'Lannister', '47552141B', 'tlannister', '96bbe532072f59e4ecad83494dc70419', 0),
(12, 'Arya', 'Stark', '48996502L', 'astark', '5882985c8b1e2dce2763072d56a1d6e5', 0),
(13, 'Khal', 'Drogo', '45659802K', 'kdrogo', 'c64b8e18a0eca2ffb28258000cded42a', 0),
(14, 'Joffrey', 'Baratheon', '46969920J', 'jbaratheon', 'e37cd6095ce77b89a96a60b9c9fae0a3', 0),
(15, 'Jaime', 'Lannister', '44657820L', 'jlannister', 'fde2fdb1dbf604aede0ffee76d26e4ce', 0),
(16, 'Caminante', 'Blanco', '00000000A', 'cblanco', 'ad68033e628faa22152edd4640a92f21', 0),
(17, 'Carrero', 'Blanco', '39562247C', 'neilamstrong', 'e254173fbb1bb21ef535e543ac3c080b', 0),
(18, 'Mariano', 'Rajoy', '46520014M', 'mrajoy', '0804048efcb1f0b3c2f18a4412b1016c', 0),
(19, 'Felipe', 'IV', '00000001A', 'valtonyc', '7e04da88cbb8cc933c7b89fbfe121cca', 0),
(20, 'Carles', 'Puigdemont', '00001714C', 'krls', 'e0aaedf7bccb1c80f5730cda9cf159e5', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  ADD PRIMARY KEY (`id_incidencia`),
  ADD KEY `id_reserva` (`id_reserva`),
  ADD KEY `id_tipus_incidencia` (`id_tipus_incidencia`);

--
-- Indices de la tabla `tbl_recurso`
--
ALTER TABLE `tbl_recurso`
  ADD PRIMARY KEY (`id_recurso`),
  ADD KEY `id_tipus_recurso` (`id_tipus_recurso`);

--
-- Indices de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_recurso` (`id_recurso`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tbl_tipus_incidencia`
--
ALTER TABLE `tbl_tipus_incidencia`
  ADD PRIMARY KEY (`id_tipus_incidencia`);

--
-- Indices de la tabla `tbl_tipus_recurso`
--
ALTER TABLE `tbl_tipus_recurso`
  ADD PRIMARY KEY (`id_tipus_recurso`);

--
-- Indices de la tabla `tbl_tipus_usuario`
--
ALTER TABLE `tbl_tipus_usuario`
  ADD PRIMARY KEY (`id_tipus_usuario`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  MODIFY `id_incidencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_recurso`
--
ALTER TABLE `tbl_recurso`
  MODIFY `id_recurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_tipus_incidencia`
--
ALTER TABLE `tbl_tipus_incidencia`
  MODIFY `id_tipus_incidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_tipus_recurso`
--
ALTER TABLE `tbl_tipus_recurso`
  MODIFY `id_tipus_recurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_tipus_usuario`
--
ALTER TABLE `tbl_tipus_usuario`
  MODIFY `id_tipus_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  ADD CONSTRAINT `tbl_incidencia_ibfk_1` FOREIGN KEY (`id_reserva`) REFERENCES `tbl_reserva` (`id_reserva`),
  ADD CONSTRAINT `tbl_incidencia_ibfk_2` FOREIGN KEY (`id_tipus_incidencia`) REFERENCES `tbl_tipus_incidencia` (`id_tipus_incidencia`);

--
-- Filtros para la tabla `tbl_recurso`
--
ALTER TABLE `tbl_recurso`
  ADD CONSTRAINT `tbl_recurso_ibfk_1` FOREIGN KEY (`id_tipus_recurso`) REFERENCES `tbl_tipus_recurso` (`id_tipus_recurso`);

--
-- Filtros para la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD CONSTRAINT `tbl_reserva_ibfk_1` FOREIGN KEY (`id_recurso`) REFERENCES `tbl_recurso` (`id_recurso`),
  ADD CONSTRAINT `tbl_reserva_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
