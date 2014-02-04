-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2014 a las 18:51:06
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `encuesta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `Id` int(15) NOT NULL AUTO_INCREMENT,
  `Pais` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=244 ;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`Id`, `Pais`) VALUES
(1, 'Angola'),
(2, 'Argelia'),
(3, 'Benín'),
(4, 'Botsuana'),
(5, 'Burkina Faso'),
(6, 'Burundi'),
(7, 'Cabo Verde'),
(8, 'Camerún'),
(9, 'Centroafricana, Rep.'),
(10, 'Chad'),
(11, 'Comoras'),
(12, 'Congo R D Rep. Dem. del Congo'),
(13, 'Congo R Rep. del Congo'),
(14, 'Costa de Marfil'),
(15, 'Egipto'),
(16, 'Eritrea'),
(17, 'Etiopía'),
(18, 'Gabón'),
(19, 'Gambia'),
(20, 'Ghana'),
(21, 'Guinea'),
(22, 'Guinea Ecuatorial'),
(23, 'Guinea-Bissau'),
(24, 'Kenia'),
(25, 'Lesoto'),
(26, 'Liberia'),
(27, 'Libia'),
(28, 'Madagascar'),
(29, 'Malaui'),
(30, 'Malí'),
(31, 'Marruecos'),
(32, 'Mauricio'),
(33, 'Mauritania'),
(34, 'Mozambique'),
(35, 'Namibia'),
(36, 'Níger'),
(37, 'Nigeria'),
(38, 'Ruanda'),
(39, 'Sahara Occidental'),
(40, 'Santo Tomé y Príncipe'),
(41, 'Senegal'),
(42, 'Seychelles'),
(43, 'Sierra Leona'),
(44, 'Somalia'),
(45, 'Somalilandia'),
(46, 'Suazilandia'),
(47, 'Sudáfrica'),
(48, 'Sudán'),
(49, 'Sudán del Sur'),
(50, 'Tanzania'),
(51, 'Togo'),
(52, 'Túnez'),
(53, 'Uganda'),
(54, 'Yibuti'),
(55, 'Zambia'),
(56, 'Zimbabue'),
(57, 'Anguila'),
(58, 'Antigua y Barbuda'),
(59, 'Argentina'),
(60, 'Aruba'),
(61, 'Bahamas'),
(62, 'Barbados'),
(63, 'Belice'),
(64, 'Bermudas'),
(65, 'Bolivia'),
(66, 'Brasil'),
(67, 'Caimán Caimán, Islas'),
(68, 'Canadá'),
(69, 'Chile'),
(70, 'Colombia'),
(71, 'Costa Rica'),
(72, 'Cuba'),
(73, 'Curazao'),
(74, 'Dominica'),
(75, 'Dominicana, Rep.'),
(76, 'Ecuador'),
(77, 'El Salvador'),
(78, 'Estados Unidos'),
(79, 'Granada'),
(80, 'Groenlandia'),
(81, 'Guatemala'),
(82, 'Guyana'),
(83, 'Haití'),
(84, 'Honduras'),
(85, 'Jamaica'),
(86, 'Malvinas Malvinas, Islas'),
(87, 'México'),
(88, 'Montserrat'),
(89, 'Nicaragua'),
(90, 'Panamá'),
(91, 'Paraguay'),
(92, 'Perú'),
(93, 'Puerto Rico'),
(94, 'San Bartolomé'),
(95, 'San Cristóbal y Nieves'),
(96, 'San Martín (Francia)'),
(97, 'San Martín (Países Bajos)'),
(98, 'San Pedro y Miquelón'),
(99, 'San Vicente y las Granadinas'),
(100, 'Santa Lucía'),
(101, 'Surinam'),
(102, 'Trinidad y Tobago'),
(103, 'Turcas y Caicos Turcas y Caicos, Islas'),
(104, 'Uruguay'),
(105, 'Venezuela'),
(106, 'Vírgenes Británicas, Islas'),
(107, 'Vírgenes de los Estados Unidos, Islas'),
(108, 'Abjasia'),
(109, 'Afganistán'),
(110, 'Arabia Saudita'),
(111, 'Armenia'),
(112, 'Azerbaiyán'),
(113, 'Bangladés'),
(114, 'Baréin'),
(115, 'Birmania'),
(116, 'Brunéi'),
(117, 'Bután'),
(118, 'Camboya'),
(119, 'Catar'),
(120, 'China'),
(121, 'Chipre'),
(122, 'Cocos Cocos, Islas'),
(123, 'Corea del Norte'),
(124, 'Corea del Sur'),
(125, 'Emiratos Árabes Unidos'),
(126, 'Filipinas'),
(127, 'Georgia'),
(128, 'Hong Kong'),
(129, 'India'),
(130, 'Indonesia'),
(131, 'Irak'),
(132, 'Irán'),
(133, 'Israel'),
(134, 'Japón'),
(135, 'Jordania'),
(136, 'Kazajistán'),
(137, 'Kirguistán'),
(138, 'Kuwait'),
(139, 'Laos'),
(140, 'Líbano'),
(141, 'Macao'),
(142, 'Malasia'),
(143, 'Maldivas'),
(144, 'Mongolia'),
(145, 'Nagorno Karabaj'),
(146, 'Navidad Navidad, Isla de'),
(147, 'Nepal'),
(148, 'Omán'),
(149, 'Osetia del Sur'),
(150, 'Pakistán'),
(151, 'Palestina'),
(152, 'Singapur'),
(153, 'Siria'),
(154, 'Sri Lanka'),
(155, 'Tailandia'),
(156, 'Taiwán'),
(157, 'Tayikistán'),
(158, 'Timor Oriental'),
(159, 'Turkmenistán'),
(160, 'Turquía'),
(161, 'Uzbekistán'),
(162, 'Vietnam'),
(163, 'Yemen'),
(164, 'Acrotiri y Dhekelia'),
(165, 'Albania'),
(166, 'Alemania'),
(167, 'Andorra'),
(168, 'Austria'),
(169, 'Bélgica'),
(170, 'Bielorrusia'),
(171, 'Bosnia y Herzegovina'),
(172, 'Bulgaria'),
(173, 'Checa, Rep.'),
(174, 'Chipre NorteChipre, RTN'),
(175, 'Croacia'),
(176, 'Dinamarca'),
(177, 'Eslovaquia'),
(178, 'Eslovenia'),
(179, 'España'),
(180, 'Estonia'),
(181, 'Feroe Feroe, Islas'),
(182, 'Finlandia'),
(183, 'Francia'),
(184, 'Gibraltar'),
(185, 'Grecia'),
(186, 'Guernsey'),
(187, 'Hungría'),
(188, 'Irlanda'),
(189, 'Islandia'),
(190, 'Italia'),
(191, 'Jersey Jersey'),
(192, 'Kosovo'),
(193, 'Letonia'),
(194, 'Liechtenstein'),
(195, 'Lituania'),
(196, 'Luxemburgo'),
(197, 'Macedonia'),
(198, 'Malta'),
(199, 'Man Man, Isla de'),
(200, 'Moldavia'),
(201, 'Mónaco'),
(202, 'Montenegro'),
(203, 'Noruega'),
(204, 'Países Bajos'),
(205, 'Polonia'),
(206, 'Portugal'),
(207, 'Reino Unido'),
(208, 'Rumania'),
(209, 'Rusia'),
(210, 'San Marino'),
(211, 'Serbia'),
(212, 'Suecia'),
(213, 'Suiza'),
(214, 'Svalbard'),
(215, 'Transnistria'),
(216, 'Ucrania'),
(217, 'Vaticano Vaticano, Ciudad del'),
(218, 'Australia'),
(219, 'Cook Cook, Islas'),
(220, 'Fiyi'),
(221, 'Guam'),
(222, 'Kiribati'),
(223, 'Marianas Marianas del Norte, Islas'),
(224, 'Marshall Marshall, Islas'),
(225, 'Micronesia'),
(226, 'Nauru'),
(227, 'Niue'),
(228, 'Norfolk Norfolk, Isla'),
(229, 'Nueva Caledonia'),
(230, 'Nueva Zelanda'),
(231, 'Palaos'),
(232, 'Papúa Nueva Guinea'),
(233, 'Pitcairn Pitcairn, Islas'),
(234, 'Polinesia Francesa'),
(235, 'Salomón Salomón, Islas'),
(236, 'Samoa'),
(237, 'Samoa Americana'),
(238, 'Santa Elena, Ascensión y Tristán de Acuña'),
(239, 'Tokelau'),
(240, 'Tonga'),
(241, 'Tuvalu'),
(242, 'Vanuatu'),
(243, 'Wallis y Futuna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `IdUsuario` int(100) NOT NULL,
  `uno` tinyint(4) NOT NULL,
  `dos` tinyint(1) NOT NULL,
  `dos_uno` text COLLATE utf8_spanish2_ci,
  `tres` tinyint(1) NOT NULL,
  `tres_uno` text COLLATE utf8_spanish2_ci,
  `cuatro` tinyint(1) NOT NULL,
  `cuatro_uno` text COLLATE utf8_spanish2_ci,
  `cinco` tinyint(1) NOT NULL,
  `seis` tinyint(1) NOT NULL,
  `siete` tinyint(1) NOT NULL,
  `ocho` tinyint(1) NOT NULL,
  `nueve` tinyint(1) NOT NULL,
  `diez` tinyint(1) NOT NULL,
  `IdPais` int(15) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `IdUsuario` (`IdUsuario`),
  KEY `IdPais` (`IdPais`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `respuestas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `CorreoElectronico` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--


--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `IdPais` FOREIGN KEY (`IdPais`) REFERENCES `pais` (`Id`),
  ADD CONSTRAINT `IdUsuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
