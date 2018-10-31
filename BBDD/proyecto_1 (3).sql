-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2018 a las 20:27:31
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
-- Estructura de tabla para la tabla `tbl_disponible`
--

CREATE TABLE `tbl_disponible` (
  `id_disponible` int(3) NOT NULL,
  `nom_disponible` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_disponible`
--

INSERT INTO `tbl_disponible` (`id_disponible`, `nom_disponible`) VALUES
(0, 'Disponible'),
(1, 'No disponible');

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

--
-- Volcado de datos para la tabla `tbl_incidencia`
--

INSERT INTO `tbl_incidencia` (`id_incidencia`, `id_reserva`, `id_tipus_incidencia`, `descripcion`) VALUES
(18, 34, 1, 'no me va nada'),
(19, 36, 2, 'no me va nada'),
(20, 39, 2, 'no me vanada'),
(21, 41, 2, 'dadadasd'),
(22, 43, 1, 'dads'),
(23, 44, 1, 'dasda'),
(24, 42, 1, '1'),
(25, 45, 1, 'dad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_recurso`
--

CREATE TABLE `tbl_recurso` (
  `id_recurso` int(11) NOT NULL,
  `nombre_recurso` char(30) DEFAULT NULL,
  `disponible` int(3) DEFAULT NULL,
  `id_tipus_recurso` int(11) DEFAULT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_recurso`
--

INSERT INTO `tbl_recurso` (`id_recurso`, `nombre_recurso`, `disponible`, `id_tipus_recurso`, `Descripcion`, `Imagen`) VALUES
(1, 'Sala multidisciplinaria 1', 1, 1, 'Sala con capacidad para 30 personas ideal para hacer prácticas físicas como es el yoga o pilates.', 'sala1.png'),
(2, 'Sala multidisciplinaria 2', 1, 1, 'Sala con capacidad para 20 personas con espejo gigantes ideal para actividades fuera del tiempo de trabajo.', 'sala2.png'),
(3, 'Sala multidisciplinaria 3', 1, 1, 'Sala con capacidad para 70 oyentes ideal para presentaciones. Dispones de 60 sillas, proyectos y pantalla.', 'sala3.png'),
(4, 'Sala multidisciplinaria 4', 0, 1, 'Sala con capacidad para 20 personas destinada a presentaciones pequeñas. Dispone de sillas, proyector y pantalla.', 'sala4.png'),
(5, 'Sala de informática 1', 0, 1, 'Sala con 15 ordenadores. Posibilidad de realizar presentaciones ya que dispone de proyector y pantalla.', 'informatica1.png'),
(6, 'Sala de informática 2', 0, 1, 'Sala con 30 ordenadores destinados al trabajo. No dispone de aire acondicionado.', 'informatica2.png'),
(7, 'Taller de cocina', 0, 1, 'Espacio grande con cocina y con capacidad para 15 personas. Dispone de fogones, horno, lavadero y los utensilios necesarios en una cocina.', 'cocina.png'),
(8, 'Despacho para entrevistas 1', 0, 1, 'Despacho grande con una mesa, dos sillas y un espacio destinado a la espera', 'despacho1.png'),
(9, 'Despacho para entrevistas 2', 0, 1, 'Despacho pequeño con unicamente una mesa y dos sillones.', 'despacho2.png'),
(10, 'Salón de actos', 0, 1, 'Salón grande con capacidad para 100 oyentes. Incluye proyectos y mesa delante de la pantalla para presentaciones.', 'actos.png'),
(11, 'Sala de reuniones', 0, 1, 'Sala con 12 sillas colocada en forma de \'U\'. Destinado a reuniones o presentaciones.', 'reuniones.png'),
(12, 'Proyector Epson', 0, 2, 'Proyector de iluminación acentuada de 2000 lúmenes WXGA en blanco, con un diseño de ruido visual reducido, ideal para expositores.', 'epson.png'),
(13, 'Proyector MaxVisual', 0, 2, 'Proyector con lámpara LED con vidas útil de 20.000 horas. Solo permite verse con luz ambiente.', 'maxvisual.png'),
(14, 'Ordenador portátil Apple', 0, 2, 'Apple MacBook Air - Ordenador portátil de 13\' (Intel Core i5, 8 GB RAM, 128 GB, macOS Sierra), color gris - Teclado QWERTY ', 'mac.png'),
(15, 'Ordenador portátil HP', 0, 2, 'HP Notebook 15-bs033ns - Portátil de 15\'(Intel Core i3-6006U Ram 4 GB Disco Duro 1 TB), Color Negro', 'hp.png'),
(16, 'Ordenador portátil Lenovo', 0, 2, '\r\nLenovo IdeaPad 320-15IKB - Ordenador portátil de 15.6\' HD (Intel Core i5-8250U, 4GB RAM, 128GB SSD, Windows Home 10) blanco. Teclado QWERTY español', 'lenovo.png'),
(17, 'Teléfono móvil Apple', 0, 2, 'Apple iPhone 8 SIM única 4G 64GB Plata - Smartphone (11,9 cm (4.7\'), 64 GB, 12 MP, iOS, 11, Plata)', 'apple.png'),
(18, 'Teléfono móvil Samsung', 0, 2, 'Samsung Galaxy Note9 (Android, 6 GB de RAM, 128 GB, MicroSD 512 GB) [Versión española] Negro', 'samsung.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reserva`
--

CREATE TABLE `tbl_reserva` (
  `id_reserva` int(11) NOT NULL,
  `id_recurso` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `f_inici` date NOT NULL,
  `f_devol` date NOT NULL,
  `h_ini` time NOT NULL,
  `h_devol` time NOT NULL,
  `incidencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_reserva`
--

INSERT INTO `tbl_reserva` (`id_reserva`, `id_recurso`, `id_usuario`, `f_inici`, `f_devol`, `h_ini`, `h_devol`, `incidencia`) VALUES
(34, 1, 2, '2018-10-31', '2018-10-31', '19:07:03', '19:23:51', 1),
(35, 2, 16, '2018-10-31', '2018-10-31', '19:07:12', '19:07:38', 0),
(36, 2, 2, '2018-10-31', '2018-10-31', '19:21:57', '19:22:20', 0),
(37, 1, 2, '2018-10-31', '2018-10-31', '19:22:46', '19:23:51', 0),
(38, 1, 2, '2018-10-31', '2018-10-31', '19:23:52', '19:23:55', 0),
(39, 1, 2, '2018-10-31', '2018-10-31', '19:23:56', '19:24:08', 0),
(40, 2, 2, '2018-10-31', '2018-10-31', '19:24:03', '19:24:07', 0),
(41, 1, 2, '2018-10-31', '2018-10-31', '19:24:10', '19:38:06', 0),
(42, 2, 16, '2018-10-31', '2018-10-31', '19:24:28', '20:25:20', 0),
(43, 3, 2, '2018-10-31', '2018-10-31', '19:25:36', '19:25:42', 0),
(44, 3, 16, '2018-10-31', '0000-00-00', '19:25:48', '00:00:00', 1),
(45, 1, 2, '2018-10-31', '0000-00-00', '19:38:08', '00:00:00', 1),
(46, 2, 16, '2018-10-31', '0000-00-00', '20:25:35', '00:00:00', 0);

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
  `id_tipus_usuario` int(11) NOT NULL,
  `sexo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `nombre`, `apellido`, `dni`, `nick`, `contra`, `id_tipus_usuario`, `sexo`) VALUES
(1, 'Ernest', 'Azanza', '47192064Z', 'eazanza', '1e79137d72df1a869094070b2e602156', 1, 'M'),
(2, 'Daniel', 'Soriano', '47293043V', 'soriano69', 'aa47f8215c6f30a0dcdb2a36a9f4168e', 1, 'M'),
(3, 'Kyrenia', 'Muñoz', '47856523C', 'lakyree', 'fab4784ec2290835a73d8d373a69273d', 1, 'F'),
(4, 'Joel', 'Moreno', '47582204S', 'joelito19', 'c000ccf225950aac2a082a59ac5e57ff', 0, 'M'),
(5, 'Marc', 'Hernandez', '47885206B', 'marcotaku', '97e1e59c0375e0f55c10d4314db20466', 0, 'M'),
(6, 'Adrià', 'Soto', '47882311N', 'sotodelreal', 'cba7fd79e3f4e142fdbd0be69eb45c6a', 0, 'M'),
(7, 'David', 'Sanchez', '47520036V', 'dsanchez', '172522ec1028ab781d9dfd17eaca4427', 0, 'M'),
(8, 'Daenerys', 'Targaryen', '47956422D', 'dtargaryen', '93ee42882ea5a7ebb49d7fa64854949e', 0, 'F'),
(9, 'Jon', 'Snow', '47775620P', 'jsnow', '006cb570acdab0e0bfc8e3dcb7bb4edf', 0, 'M'),
(10, 'Cersei', 'Lannister', '47005469R', 'clannister', '1c6c87e0931b2f5dc302f1a6dcdca5a2', 0, 'F'),
(11, 'Tyrion', 'Lannister', '47552141B', 'tlannister', '96bbe532072f59e4ecad83494dc70419', 0, 'M'),
(12, 'Arya', 'Stark', '48996502L', 'astark', '5882985c8b1e2dce2763072d56a1d6e5', 0, 'F'),
(13, 'Khal', 'Drogo', '45659802K', 'kdrogo', 'c64b8e18a0eca2ffb28258000cded42a', 0, 'M'),
(14, 'Joffrey', 'Baratheon', '46969920J', 'jbaratheon', 'e37cd6095ce77b89a96a60b9c9fae0a3', 0, 'M'),
(15, 'Jaime', 'Lannister', '44657820L', 'jlannister', 'fde2fdb1dbf604aede0ffee76d26e4ce', 0, 'M'),
(16, 'Caminante', 'Blanco', '00000000A', 'cblanco', 'ad68033e628faa22152edd4640a92f21', 0, 'M'),
(17, 'Carrero', 'Blanco', '39562247C', 'neilamstrong', 'e254173fbb1bb21ef535e543ac3c080b', 0, 'M'),
(18, 'Mariano', 'Rajoy', '46520014M', 'mrajoy', '0804048efcb1f0b3c2f18a4412b1016c', 0, 'M'),
(19, 'Felipe', 'IV', '00000001A', 'valtonyc', '7e04da88cbb8cc933c7b89fbfe121cca', 0, 'M'),
(20, 'Carles', 'Puigdemont', '00001714C', 'krls', 'e0aaedf7bccb1c80f5730cda9cf159e5', 0, 'M');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_disponible`
--
ALTER TABLE `tbl_disponible`
  ADD PRIMARY KEY (`id_disponible`);

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
  ADD KEY `id_tipus_recurso` (`id_tipus_recurso`),
  ADD KEY `fk_disponible` (`disponible`);

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
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `FK_id_tipus_usuario` (`id_tipus_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  MODIFY `id_incidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tbl_recurso`
--
ALTER TABLE `tbl_recurso`
  MODIFY `id_recurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
  MODIFY `id_tipus_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  ADD CONSTRAINT `fk_disponible` FOREIGN KEY (`disponible`) REFERENCES `tbl_disponible` (`id_disponible`),
  ADD CONSTRAINT `tbl_recurso_ibfk_1` FOREIGN KEY (`id_tipus_recurso`) REFERENCES `tbl_tipus_recurso` (`id_tipus_recurso`);

--
-- Filtros para la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD CONSTRAINT `tbl_reserva_ibfk_1` FOREIGN KEY (`id_recurso`) REFERENCES `tbl_recurso` (`id_recurso`),
  ADD CONSTRAINT `tbl_reserva_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`);

--
-- Filtros para la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `FK_id_tipus_usuario` FOREIGN KEY (`id_tipus_usuario`) REFERENCES `tbl_tipus_usuario` (`id_tipus_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
