DROP DATABASE IF EXISTS iesalandalus;
CREATE DATABASE iesalandalus;

USE iesalandalus;

CREATE TABLE `ies_alumno` (
  `id` int(3) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` int(9) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `curso` int(3) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ies_alumno`
--

INSERT INTO `ies_alumno` (`id`, `usuario`, `pass`, `nombre`, `apellidos`, `telefono`, `email`, `curso`, `activo`) VALUES
(2, '@aida2', '12345678', 'Aida', 'De la Pena Fernández', NULL, '', 7, 1),
(3, '@hugo3', '12345678', 'Hugo', 'Domínguez Rincón', NULL, '', 7, 1),
(4, '@dorian4', '12345678', 'Dorian', 'Hernández Bautista', NULL, '', 7, 1),
(5, '@franciscojavier5', '12345678', 'Francisco Javier', 'Hernández Medina', NULL, '', 7, 1),
(7, '@estefania7', '12345678', 'Estefanía', 'Ruiz Merelo', NULL, '', 7, 1),
(8, '@aida8', '12345678', 'Aida', 'Vargas Cara', NULL, '', 7, 1),
(9, '@rafael9', '12345678', 'Rafael', 'Galdeano Pomares', NULL, '', 8, 1),
(10, '@sergio10', '12345678', 'Sergio', 'García Rodríguez', NULL, '', 8, 0),
(11, '@iratxe11', '12345678', 'Iratxe', 'Guerra Bonet', NULL, '', 8, 1),
(12, '@lidia12', '12345678', 'Lidia', 'Lupión Peralta', NULL, '', 8, 1),
(13, '@adrian13', '12345678', 'Adrián', 'Peña Pomares', NULL, '', 8, 1),
(14, '@imad14', '12345678', 'Imad', 'Benakri', NULL, '', 10, 0),
(15, '@antoniojavier15', '12345678', 'Antonio Javier', 'Fernández Sánchez', NULL, '', 10, 0),
(16, '@ana16', '12345678', 'Ana', 'Jiménez Manzano', NULL, '', 10, 0),
(17, '@luis17', '12345678', 'Luis', 'Rodríguez García', NULL, '', 10, 1),
(18, '@kevin18', '12345678', 'Kevin', 'Suárez Ruiz', NULL, '', 10, 1),
(19, '@alba19', '12345678', 'Alba', 'Amador Heredia', NULL, '', 1, 1),
(20, '@moises20', '12345678', 'Moisés', 'Amador Heredia', NULL, '', 1, 1),
(21, '@josegabriel21', '12345678', 'José Gabriel', 'Barranco Fernández', NULL, '', 1, 0),
(22, '@ramon22', '12345678', 'Ramón', 'Fernández Cortés', NULL, '', 1, 0),
(23, '@gloria23', '12345678', 'Gloria', 'Fernández Fernández', NULL, '', 1, 1),
(24, '@joseantonio24', '12345678', 'José Antonio', 'Fernández Heredia', NULL, '', 1, 1),
(25, '@mariaconcepcion25', '12345678', 'María Concepción', 'Fernández Heredia', NULL, '', 1, 1),
(26, '@gema26', '12345678', 'Gema', 'Fornieles Torres', NULL, '', 1, 1),
(27, '@purificacion27', '12345678', 'Purificación', 'Garcés Heredia', NULL, '', 1, 1),
(28, '@jose28', '12345678', 'José', 'Gómez Moreno', NULL, '', 1, 1),
(29, '@baldomero29', '12345678', 'Baldomero', 'Heredia Cortés', NULL, '', 1, 1),
(30, '@aroa30', '12345678', 'Aroa', 'Ruiz Merelo', NULL, '', 1, 1),
(31, '@purificacion31', '12345678', 'Purificación', 'Santiago Fernández', NULL, '', 1, 1),
(32, '@julia32', '12345678', 'Julia', 'Utrera Puga', NULL, '', 1, 1),
(33, '@maria33', '12345678', 'María', 'Amador Heredia', NULL, '', 2, 1),
(34, '@marina34', '12345678', 'Marina', 'Amador Heredia', NULL, '', 2, 1),
(35, '@josefrancisco35', '12345678', 'José Francisco', 'Fernández Cortés', NULL, '', 2, 1),
(36, '@mariasoledad36', '12345678', 'María Soledad', 'Fernández Cortés', NULL, '', 2, 1),
(37, '@saray37', '12345678', 'Saray', 'Fernández Fernández', NULL, '', 2, 1),
(38, '@raul38', '12345678', 'Raúl', 'García Capilla', NULL, '', 2, 1),
(39, '@antonia39', '12345678', 'Antonia', 'Gómez Fernández', NULL, '', 2, 1),
(40, '@yinara40', '12345678', 'Yinara', 'Gómez Heredia', NULL, '', 2, 0),
(41, '@giovani41', '12345678', 'Giovani', 'Heredia Fernández', NULL, '', 2, 1),
(42, '@francisco42', '12345678', 'Francisco', 'Heredia Heredia', NULL, '', 2, 1),
(43, '@juanjose43', '12345678', 'Juan José', 'Jiménez Padilla', NULL, '', 2, 1),
(44, '@ivan44', '12345678', 'Iván', 'Ruiz Peralta', NULL, '', 2, 1),
(45, '@francisco45', '12345678', 'Francisco', 'Santiago Fernández', NULL, '', 2, 1),
(46, '@yandira46', '12345678', 'Yandira', 'Barrionuevo González', NULL, '', 9, 1),
(47, '@daniel47', '12345678', 'Daniel', 'Barroso Hermoso', NULL, '', 9, 1),
(48, '@gadordelpilar48', '12345678', 'Gádor del Pilar', 'Céspedes Fernández', NULL, '', 9, 1),
(49, '@samara49', '12345678', 'Samara', 'Cortés Heredia', NULL, '', 9, 0),
(50, '@mariaemilia50', '12345678', 'María Emilia', 'Fernández Cortés', NULL, '', 9, 1),
(51, '@clara51', '12345678', 'Clara', 'Fernández Fernández', NULL, '', 9, 1),
(52, '@concepcion52', '12345678', 'Concepción', 'Heredia Fernández', NULL, '', 9, 1),
(53, '@nor53', '12345678', 'Nor', 'Mennai', NULL, '', 9, 1),
(54, '@jennifer54', '12345678', 'Jennifer', 'Milán Barskikh', NULL, '', 9, 1),
(55, '@cristian55', '12345678', 'Cristian', 'Montes López', NULL, '', 9, 1),
(56, '@elena56', '12345678', 'Elena', 'Moral Callejón', NULL, '', 9, 1),
(57, '@hamza57', '12345678', 'Hamza', 'Ouadi Bouziane', NULL, '', 9, 1),
(58, '@mirian58', '12345678', 'Mirian', 'Pérez Jiménez', NULL, '', 9, 1),
(59, '@robertocarlos59', '12345678', 'Roberto Carlos', 'Soto Heredia', NULL, '', 9, 1),
(60, '@rebeca60', '12345678', 'Rebeca', 'Utrera Cortés', NULL, '', 9, 0),
(61, '@lucia61', '12345678', 'Lucía', 'Villegas Castillo', NULL, '', 9, 1),
(62, '@ciprianionut62', '12345678', 'Ciprian Ionut', 'Andreies', NULL, '', 3, 1),
(63, '@lucia63', '12345678', 'Lucía', 'Cortes Fernández', NULL, '', 3, 1),
(64, '@ainhoa64', '12345678', 'Ainhoa', 'Cortés Heredia', NULL, '', 3, 1),
(65, '@albamaria65', '12345678', 'Alba María', 'Cortés Heredia', NULL, '', 3, 1),
(66, '@yassin66', '12345678', 'Yassin', 'El Assaly El Ammari', NULL, '', 3, 0),
(67, '@ismael67', '12345678', 'Ismael', 'Fernández Chergui', NULL, '', 3, 1),
(68, '@antoniojose68', '12345678', 'Antonio José', 'Fernández Fernández', NULL, '', 3, 1),
(69, '@mariadelcarmen69', '12345678', 'María del Carmen', 'Fernández Fernández', NULL, '', 3, 1),
(70, '@jose70', '12345678', 'José', 'Fernández Heredia', NULL, '', 3, 1),
(71, '@antoniojose71', '12345678', 'Antonio José', 'García Díaz', NULL, '', 3, 1),
(72, '@carmendolores72', '12345678', 'Carmen Dolores', 'Gómez Cortés', NULL, '', 3, 1),
(73, '@emilia73', '12345678', 'Emilia', 'Gómez Fernández', NULL, '', 3, 0),
(74, '@bonifaciojavier74', '12345678', 'Bonifacio Javier', 'González Torres', NULL, '', 3, 1),
(75, '@robertocarlos75', '12345678', 'Roberto Carlos', 'Guglieri Rodríguez', NULL, '', 3, 1),
(76, '@raul76', '12345678', 'Raúl', 'Guillén Salinas', NULL, '', 3, 0),
(77, '@alexandro77', '12345678', 'Alexandro', 'Heredia Cortés', NULL, '', 3, 1),
(78, '@gabriela78', '12345678', 'Gabriela', 'Heredia Fernández', NULL, '', 3, 1),
(79, '@gabriela79', '12345678', 'Gabriela', 'Heredia Fernández', NULL, '', 3, 1),
(80, '@baldomero80', '12345678', 'Baldomero', 'Heredia Heredia', NULL, '', 3, 1),
(81, '@franciscojose81', '12345678', 'Francisco José', 'Heredia Heredia', NULL, '', 3, 1),
(82, '@mariatrinidad82', '12345678', 'María Trinidad', 'López Cortés', NULL, '', 3, 0),
(83, '@ainara83', '12345678', 'Ainara', 'Pérez Muñoz', NULL, '', 3, 0),
(84, '@triana84', '12345678', 'Triana', 'Reyes López', NULL, '', 3, 0),
(85, '@maria85', '12345678', 'María', 'Rodríguez Fernández', NULL, '', 3, 1),
(86, '@franciscojose86', '12345678', 'Francisco José', 'Ruiz Heredia', NULL, '', 3, 1),
(87, '@francisca87', '12345678', 'Francisca', 'Santiago Fernández', NULL, '', 3, 1),
(88, '@diego88', '12345678', 'Diego', 'Santiago Heredia', NULL, '', 3, 1),
(89, '@mariadolores89', '12345678', 'María Dolores', 'Torres Torres', NULL, '', 3, 1),
(90, '@cristian90', '12345678', 'Cristian', 'Vargas Aguilera', NULL, '', 3, 1),
(91, '@yanira91', '12345678', 'Yanira', 'Vargas Escudero', NULL, '', 3, 1),
(92, '@candida92', '12345678', 'Cándida', 'Barranco Rodríguez', NULL, '', 5, 1),
(93, '@miguelangel93', '12345678', 'Miguel Ángel', 'Boucetta Mayor', NULL, '', 5, 1),
(94, '@Victorjose94', '12345678', 'Víctor José', 'Fernández Bonilla', NULL, '', 5, 1),
(95, '@franciscomiguel95', '12345678', 'Francisco Miguel', 'Fernández Cabrera', NULL, '', 5, 1),
(96, '@indalecio96', '12345678', 'Indalecio', 'Gómez Cortés', NULL, '', 5, 1),
(97, '@susana97', '12345678', 'Susana', 'González Limonchi', NULL, '', 5, 1),
(98, '@ivan98', '12345678', 'Iván', 'Heredia Cortés', NULL, '', 5, 0),
(99, '@david99', '12345678', 'David', 'Heredia Fernández', NULL, '', 5, 1),
(100, '@josemanuel100', '12345678', 'José Manuel', 'Jiménez López', NULL, '', 5, 1),
(101, '@alejandro101', '12345678', 'Alejandro', 'Marfil Torres', NULL, '', 5, 1),
(102, '@izan102', '12345678', 'Izan', 'Martínez Heredia', NULL, '', 5, 1),
(103, '@lucia103', '12345678', 'Lucía', 'Padilla López', NULL, '', 5, 1),
(104, '@albamaria104', '12345678', 'Alba María', 'Salinas López', NULL, '', 5, 1),
(105, '@jeffrie105', '12345678', 'Jeffrie', 'Sánchez Fernández', NULL, '', 5, 1),
(106, '@carmennicoleta106', '12345678', 'Carmen Nicoleta', 'Toader', NULL, '', 5, 1),
(107, '@ainhoa107', '12345678', 'Ainhoa', 'Torres Campoy', NULL, '', 5, 0),
(108, '@sandra108', '12345678', 'Sandra', 'Torres Fernández', NULL, '', 5, 1),
(109, '@lucia109', '12345678', 'Lucía', 'Von Hagen Limonchi', NULL, '', 5, 1),
(110, '@josestephano110', '12345678', 'José Stephano', 'Castañeda Sánchez', NULL, '', 6, 1),
(111, '@yainara111', '12345678', 'Yainara', 'Cortés Cortés', NULL, '', 6, 1),
(112, '@rosaisabel112', '12345678', 'Rosa Isabel', 'Domínguez López', NULL, '', 6, 1),
(113, '@cristian113', '12345678', 'Cristian', 'Fernández Cortés', NULL, '', 6, 1),
(114, '@gabriela114', '12345678', 'Gabriela', 'Gómez Moreno', NULL, '', 6, 1),
(115, '@juanmanuel115', '12345678', 'Juan Manuel', 'Heredia Cortés', NULL, '', 6, 1),
(116, '@franciscoramon116', '12345678', 'Francisco Ramón', 'Heredia Fernández', NULL, '', 6, 1),
(117, '@lola117', '12345678', 'Lola', 'Heredia Fernández', NULL, '', 6, 1),
(118, '@adan118', '12345678', 'Adán', 'Ibáñez Peralta', NULL, '', 6, 1),
(119, '@juanmiguel119', '12345678', 'Juan Miguel', 'López Padilla', NULL, '', 6, 0),
(120, '@marina120', '12345678', 'Marina', 'Sánchez Campoy', NULL, '', 6, 1),
(121, '@ilyass121', '12345678', 'Ilyass', 'Tahiri', NULL, '', 6, 1),
(122, '@alexandraflorentin1', '12345678', 'Alexandra Florentina', 'Zlotea', NULL, '', 6, 1),
(123, '@joseantonio123', '12345678', 'José Antonio', 'Casas López', NULL, '', 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ies_asignatura`
--

CREATE TABLE `ies_asignatura` (
  `id` int(3) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nombre_corto` varchar(100) NOT NULL,
  `curso` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ies_asignatura`
--

INSERT INTO `ies_asignatura` (`id`, `nombre`, `nombre_corto`, `curso`) VALUES
(1, 'Tratamiento informático de datos', 'Trat. Info. datos', 7),
(2, 'Atención al Cliente', 'At. Cliente', 7),
(3, 'Prevención de riesgos laborales', 'Prevención de riesgos laborales', 8),
(4, 'Aplicaciones básicas de ofimática', 'Aplicaciones básicas de ofimática', 8),
(104, 'Preparación del entorno profesional', 'Preparación', 9),
(105, 'Cuidados estéticos básicos de uñas', 'Cuidados Est.', 9),
(106, 'Depilación mecánica y decoloración del vello superfluo', 'Depilación y Dec.', 9),
(107, 'Maquillaje', 'Maquillaje', 9),
(108, 'Lavado y cambios de forma del cabello', 'Lavado', 9),
(109, 'Cambio de color del cabello', 'Cambio color', 9),
(110, 'Atención al cliente', 'At. Cliente', 9),
(111, 'Ciencias aplicadas I', 'Ciencias Apl. I', 9),
(112, 'Ciencias aplicadas II', 'Ciencias Apl. II', 9),
(113, 'Comunicación y sociedad I. Inglés', 'Comun. y Soc. I - Inglés', 9),
(114, 'Comunicación y sociedad II', 'Comun. y Soc. II', 9),
(115, 'Formación en centros de trabajo', 'Form. centros', 9),
(116, 'Ciencias aplicadas I', 'Ciencias Apl. I', 7),
(117, 'Comunicación y sociedad I', 'Comun. y sociedad I', 7),
(118, 'Técnicas administrativas básicas', 'Téc. administrativas', 7),
(120, 'Archivo y comunicación', 'Archivo y comunicación', 8),
(121, 'Ciencias aplicadas II', 'Ciencias Apl. II', 8),
(122, 'Comunicación y sociedad II', 'Comunicación y sociedad II', 8),
(123, 'Formación en centros de trabajo', 'Formación en centros de trabajo', 8),
(124, 'Preparación de pedidos y venta de productos', 'Preparación de pedidos y venta de productos', 8),
(126, 'U.F. Prevención FPB', 'U.F. Prevención FPB', 8),
(127, 'Matemáticas', 'Mates', 1),
(128, 'Matemáticas', 'Mates', 3),
(129, 'Matemáticas', 'Mates', 5),
(130, 'Matemáticas', 'Mates', 6),
(131, 'Lengua', 'Lengua', 1),
(132, 'Lengua', 'Lengua', 3),
(133, 'Lengua', 'Lengua', 5),
(134, 'Lengua', 'Lengua', 6),
(135, 'Sociales', 'Sociales', 1),
(136, 'Sociales', 'Sociales', 3),
(137, 'Sociales', 'Sociales', 5),
(138, 'Música', 'Música', 1),
(139, 'Música', 'Música', 3),
(140, 'Ed. Física', 'Ed. Física', 1),
(141, 'Ed. Física', 'Ed. Física', 5),
(142, 'Plástica', 'Plást.', 1),
(143, 'Plástica', 'Plást.', 3),
(144, 'Biología', 'Biolog.', 1),
(145, 'Inglés', 'Inglés', 1),
(146, 'Inglés', 'Inglés', 3),
(147, 'Inglés', 'Inglés', 5),
(148, 'Inglés', 'Inglés', 6),
(149, 'Optativa', 'Optativa', 1),
(150, 'Optativa', 'Optativa', 3),
(154, 'Valores éticos', 'V. Éticos', 1),
(155, 'Valores éticos', 'V. Éticos', 3),
(156, 'Valores éticos', 'V. Éticos', 5),
(157, 'Matemáticas', 'Mates', 2),
(158, 'Lengua', 'Lengua', 2),
(159, 'Sociales', 'Sociales', 2),
(160, 'Música', 'Música', 2),
(161, 'Ed. Física', 'Ed. Física', 2),
(162, 'Ed. Física', 'Ed. Física', 3),
(163, 'Plástica', 'Plást.', 2),
(164, 'Biología', 'Biolog.', 2),
(165, 'Inglés', 'Inglés', 2),
(166, 'Optativa', 'Optativa', 2),
(168, 'Valores éticos', 'V. Éticos', 2),
(169, 'Física y Química', 'FyQ', 3),
(170, 'Tecnología', 'Tecno.', 3),
(171, 'Tecnología', 'Tecno.', 5),
(172, 'Tecnología', 'Tecno.', 6),
(173, 'Física y Química', 'FyQ', 5),
(174, 'Ciudadanía', 'Ciudadanía', 5),
(175, 'Libre disposición', 'Libre D.', 5),
(176, 'Optativa', 'Optativa', 5),
(177, 'Geografía', 'Geografía', 6),
(178, 'Biología', 'Biolog.', 6),
(179, 'Física y Química', 'FyQ', 6),
(180, 'Iniciación', 'Iniciación', 6),
(181, 'Ámbito de comunicación y lenguaje', 'Ámbito de comunicación y lenguaje', 10),
(182, 'Audición y Lenguaje', 'Audición y Lenguaje', 10),
(183, 'Ámbito de conocimiento corporal y de la construcción de la Identidad', 'Ámbito de conocimiento corporal y de la construcción de la Identidad', 10),
(184, 'Ámbito de conocimiento y participación en el medio físico y social', 'Ámbito de conocimiento y participación en el medio físico y social', 10),
(185, 'Orientación FBP', 'Orient.', 9),
(186, 'Orientación FBP 2º', 'Orient.', 8),
(187, 'Orientación FPB 1º', 'Orient.', 7),
(188, 'Orientación', 'Orient.', 5),
(189, 'Orientación', 'Orient.', 3),
(190, 'Orientación', 'Orient.', 2),
(191, 'Orientación', 'Orient.', 1),
(192, 'Francés', 'Francés', 1),
(193, 'Francés', 'Francés', 2),
(194, 'Francés', 'Francés', 3),
(195, 'Biología y Geología', 'Biolog. Y G.', 5),
(196, 'Religión', 'Relig.', 1),
(197, 'Religión', 'Relig.', 2),
(198, 'Religión', 'Relig.', 3),
(199, 'Religión', 'Relig.', 5),
(200, 'Religión', 'Relig.', 6),
(201, 'Taller de escritura', 'Taller Esc.', 3),
(202, 'Salud en el deporte', 'Salud Dep.', 1),
(203, 'Salud en el deporte', 'Salud Dep.', 2),
(204, 'Salud en el deporte', 'Salud Dep.', 3),
(205, 'Valores éticos', 'V. Éticos', 6),
(206, 'Música', 'Música', 6),
(207, 'Plástica', 'Plást.', 6),
(208, 'Ed. Física', 'Ed. Física', 6),
(209, 'Orientación', 'Orient.', 6),
(210, 'Comunicación y sociedad I. Lengua', 'Comun. y Soc. I - Lengua', 9),
(211, 'Comunicación y sociedad I. Sociales', 'Comun. y Soc. I - Sociales', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ies_curso`
--

CREATE TABLE `ies_curso` (
  `id` int(3) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ies_curso`
--

INSERT INTO `ies_curso` (`id`, `nombre`) VALUES
(1, '1º ESO A'),
(2, '1º ESO B'),
(3, '2º ESO'),
(5, '3º ESO'),
(6, '4º ESO'),
(7, '1º FPB Admin.'),
(8, '2º FPB Admin.'),
(9, '1º FPB Peluq.'),
(10, '1º EEUE ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ies_profesor`
--

CREATE TABLE `ies_profesor` (
  `id` int(3) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tutor_curso` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ies_profesor`
--

INSERT INTO `ies_profesor` (`id`, `usuario`, `pass`, `nombre`, `apellidos`, `email`, `tutor_curso`) VALUES
(1, 'amador', '12345678', 'Amador', 'Campos Aznar', 'amador.campos@iesalandalus.org', 7),
(2, 'alejandro', '12345678', 'Alejandro', 'Cardona Mena', '', 7),
(3, 'alberto', '12345678', 'Alberto', 'Gordillo Fernández', '', 6),
(4, 'blanca', '12345678', 'Blanca', 'Lebrón García', '', 7),
(5, 'elisa', '12345678', 'Elisa', 'María Cobo Jiménez', '', 8),
(6, 'francisco', '12345678', 'Francisco', 'Cortes Sánchez', '', 2),
(7, 'gloria', '12345678', 'Gloria Concepción', 'Alcántara Villén', '', 0),
(8, 'inma', '12345678', 'Inmaculada', 'Bellido Rodríguez', '', 1),
(9, 'juan', '12345678', 'Juan Urbano Óscar', 'Jiménez Carrillo', '', 0),
(10, 'lidia', '12345678', 'Lidia', 'Hidalgo Antequera', '', 0),
(11, 'maite', '12345678', 'Maite', 'Jiménez Morcillo', 'maitejm74@gmail.com', 5),
(12, 'carmen', '12345678', 'María del Carmen', 'Molina García', '', 8),
(13, 'maria', '12345678', 'María José', 'Ruano Moya', '', 0),
(14, 'msalbar906', '12345678', 'María Isabel', 'Salinas Barroso', '', 0),
(15, 'natividad', '12345678', 'María Natividad', 'Sánchez Moreno', '', 9),
(16, 'nuria', '12345678', 'Nuria', 'Codina Puerta', '', 0),
(17, 'nuraie', '12345678', 'Nuria', 'Estévez Caparrós', '', 0),
(18, 'pablo', '12345678', 'Pablo', 'López Cardenete', '', 1),
(19, 'patricia', '12345678', 'Patricia', 'Lucena López', '', 3),
(21, 'luis', '12345678', 'Luis', 'Ayala Ortega', '', 0),
(22, 'rocio', '12345678', 'Rocío Elena', 'García Borja', '', 0),
(23, 'salvador', '12345678', 'Salvador', 'Domínguez Palomo', '', 0),
(24, 'mariadelmar', '12345678', 'María del Mar', 'Sánchez Sánchez', '', 10),
(25, 'helena', '12345678', 'Helena Mª', 'Porcel Sánchez', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ies_trimestres`
--

CREATE TABLE `ies_trimestres` (
  `id` int(2) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nombre2` varchar(50) NOT NULL,
  `orden` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ies_trimestres`
--

INSERT INTO `ies_trimestres` (`id`, `nombre`, `nombre2`, `orden`) VALUES
(1, '1er Trimestre', '1ª Evaluación', 1),
(2, '2º Trimestre', '2ª Evaluación', 2),
(3, '3er Trimestre', '3ª Evaluación', 3),
(4, '1ª Final / Ordinaria', '1ª Final / Ordinaria. 3ª Evaluación', 4),
(5, '2ª Final / Extraordinaria', '2ª Final / Ordinaria. 3ª Evaluación', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ies_alumno`
--
ALTER TABLE `ies_alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ies_asignatura`
--
ALTER TABLE `ies_asignatura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ies_curso`
--
ALTER TABLE `ies_curso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ies_profesor`
--
ALTER TABLE `ies_profesor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ies_trimestres`
--
ALTER TABLE `ies_trimestres`
  ADD PRIMARY KEY (`id`);

