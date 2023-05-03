-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-05-2023 a las 08:50:15
-- Versión del servidor: 5.5.55
-- Versión de PHP: 5.4.45-0+deb7u8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `movil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `App`
--

CREATE TABLE IF NOT EXISTS `App` (
  `ID_App` int(11) NOT NULL AUTO_INCREMENT,
  `App` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_App`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `App`
--

INSERT INTO `App` (`ID_App`, `App`) VALUES
(2, 'User'),
(3, 'App'),
(4, 'Permiso'),
(8, 'Area'),
(9, 'Linea'),
(10, 'Organismo'),
(11, 'Plan'),
(12, 'Equipo'),
(13, 'Sim'),
(14, 'Referencia'),
(15, 'Historial'),
(16, 'Consulta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Area`
--

CREATE TABLE IF NOT EXISTS `Area` (
  `ID_Area` int(11) NOT NULL AUTO_INCREMENT,
  `Area` varchar(400) NOT NULL,
  PRIMARY KEY (`ID_Area`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=346 ;

--
-- Volcado de datos para la tabla `Area`
--

INSERT INTO `Area` (`ID_Area`, `Area`) VALUES
(1, 'N/A'),
(2, 'Secretaria General y Legal de la Gobernación'),
(4, 'Secretaria de Agricultura y Re'),
(5, 'Secretaria de Ambiente '),
(6, 'Dirección de Comunicaciones '),
(7, 'Secretaria de Cultura'),
(8, 'Secretaria de Deporte y Juvent'),
(9, 'Secretaria de Ganadería '),
(10, 'Secretaria de la Mujer'),
(11, 'Secretaria de Mineria y Energi'),
(12, 'Secretaria de Prensa y Difusió'),
(13, 'Secretaria de Tierra y Hábitat'),
(14, 'Secretaria de Turismo'),
(15, 'Secretaria de Participación So'),
(16, 'Subsecretaria de Juventud y So'),
(17, 'Subsecretaría de Desarrollo e '),
(18, 'Direccion General para Persona'),
(19, 'Direccion General de Politicas'),
(20, 'Direccion General de Recidenci'),
(21, 'Administracion Provincial de V'),
(22, 'Secretaria de Gestion Previsio'),
(23, 'Secretaria de la unidad Egecut'),
(24, 'Secretaria de la Unidad Provin'),
(25, 'Secretaria de Relaciones Insti'),
(26, 'Secretaria de Participación So'),
(27, 'Secretaria de Gobierno y Justi'),
(28, 'Secretaria de Seguridad'),
(29, 'Secretaria de Derechos Humanos'),
(30, 'Secretaria de Trabajo'),
(31, 'Secretaria de Gestión Educativ'),
(32, 'Secretaria de Coordinacion Adm'),
(33, 'Secretaria de Ciencias y Tecno'),
(34, 'Secretaria de Prevención de ad'),
(35, 'Secretaria de Hacienda'),
(36, 'Secretaria de Finanzas publica'),
(37, 'Secretaria de Obras Publicas'),
(38, 'Administración Provincial de V'),
(39, 'I.P.LAR'),
(40, 'EUCOP'),
(41, 'Secretaria de Industria y Prom'),
(42, 'Secretaria de Integración regi'),
(43, 'Secretaria de Desarrollo Local'),
(44, 'Secretaria de Desarrollo Econó'),
(45, 'Administración Provincial de R'),
(46, 'Subsecretaria Legal, Tecnica y'),
(47, ' Subsecretaría de Prevención d'),
(48, 'Subsecretaria de Planificacion'),
(49, 'Subsecretaria de Atención Medi'),
(50, 'Subsecretaria General de Admin'),
(51, 'Administración provincial de O'),
(52, 'Subsecretaria de Administracio'),
(53, 'Subsecretaria de Energia'),
(54, 'Subsecretaria de Transporte y '),
(55, 'Subsecretaria de Abordaje Terr'),
(56, 'Subsecretaria de Desarrollo Hu'),
(57, 'Subsecretaria de Niñez y Adole'),
(58, 'Subsecretaria de Economía Soci'),
(59, 'Subsecretaria de Empleo'),
(60, 'Dirección General de Despacho '),
(61, 'Dirección General de Personas '),
(62, 'Dirección de Gestión Publica '),
(63, 'Dirección General Operativa de'),
(64, 'Dirección General de Ceremonia'),
(65, 'Dirección General de CAP y Con'),
(66, 'Dirección General de Imprenta '),
(67, 'Dirección General de Programas'),
(68, 'Dirección General de Asuntos d'),
(69, 'Dirección de Aeronáutica  '),
(70, 'Dirección de Comunicaciones y '),
(71, 'Dirección de archivo, Digesto '),
(72, 'Dirección General de Relacione'),
(73, 'Dirección General  de Proyecto'),
(74, 'Instituto Provincial de la Adm'),
(75, 'Dirección de Teatro y Comedia'),
(76, 'Dirección General de Asuntos L'),
(77, 'Dirección de Políticas de Incl'),
(78, 'Dirección del Patronato De Lib'),
(79, 'Dirección General  de Relacion'),
(80, 'Dirección General de Higiene y'),
(81, 'Dirección General de Policía d'),
(82, 'Dirección General del Registro'),
(83, 'Dirección General del Servicio'),
(84, 'Dirección General de Gestión C'),
(85, 'Dirección General de Seguridad'),
(86, 'Dirección General de Investiga'),
(87, 'Dirección General de Planeamie'),
(88, 'Dirección General de Administr'),
(89, 'Dirección de Unidad Operativa '),
(90, 'Dirección General de Asuntos I'),
(91, 'Instituto Superior de Segurida'),
(92, 'Escuela de Cadetes'),
(93, 'Unidad Regional I Villa Unión '),
(94, 'Comisaria Villa Unión '),
(95, 'Comisaria Villa Castelli'),
(96, 'Comisaria Vinchina'),
(97, 'Sub Comisaria Guandacol'),
(98, 'Unidad Regional II Chilecito'),
(99, 'Comisaria Chilecito'),
(100, 'Comisaria Del Menor y la Mujer'),
(101, 'Comisaria Nonogasta'),
(102, 'Comisaria Vichigasta'),
(103, 'Comisaria Famatina'),
(104, 'Comisaria Machigasta'),
(105, 'Comisaria Anguinan'),
(106, 'Unidad Regional III Aimogasta '),
(107, 'Comisaria Aimogasta'),
(108, 'Comisaria Aminga'),
(109, 'Comisaria San Blas de los Sauc'),
(110, 'Comisaria Anillaco'),
(111, 'Sub Comisaria Villa Mazan'),
(112, 'Unidad Regional IV Capital'),
(113, 'Comisaría I'),
(114, 'Comisaría II'),
(115, 'Comisaría III'),
(116, 'Comisaría IV'),
(117, 'Comisaría V'),
(118, 'Comisaría VI'),
(119, 'Comisaría VII'),
(120, 'Comisaría Casa de Gobierno'),
(121, 'Comisaría Poder Legislativo'),
(122, 'Comisaría Poder Judicial '),
(123, 'Comisaría del Menor y la Mujer'),
(124, 'Comisaría Sanagasta'),
(125, 'Cuerpo de Infantería'),
(126, 'Prevención Urbana  '),
(127, 'Policía Montada '),
(128, 'Cuerpo de Bomberos'),
(129, 'Accidentes Viales'),
(130, 'Alcaidia'),
(131, 'División CAPE '),
(132, 'Unidad Regional V Chamical'),
(133, 'Comisaría I Chamical'),
(134, 'Comisaría II Chamical'),
(135, 'Comisaría Olta'),
(136, 'Comisaría Tama'),
(137, 'Comisaría Patquia'),
(138, 'Sub Comisaría Chañar'),
(139, 'Comisaría Punta de los Llanos'),
(140, 'Unidad Regional VI Chepes'),
(141, 'Comisaría Chepes'),
(142, 'Comisaría Ulapes'),
(143, 'Comisaría Malanzan'),
(144, 'Sub Comisaría Deciderio Tello '),
(145, 'Comisaría Catuna'),
(146, 'Comisaría Milagro'),
(147, 'Dirección General  de Educació'),
(148, 'Dirección General de Educación'),
(149, 'Dirección General de Nivel Ini'),
(150, 'Dirección General de Planeamie'),
(151, 'Dirección General de Ciencias '),
(152, 'Dirección General de Modalidad'),
(153, 'Dirección General de Legal, Té'),
(154, 'Coordinación General de Despac'),
(155, 'Dirección General de Administr'),
(156, 'Coordinación de Área de Tesore'),
(157, 'Dirección General de Mantenimi'),
(158, 'Dirección General de Relevamie'),
(159, 'Dirección de Gestión Privada '),
(160, 'Prensa y Ceremonial de Educaci'),
(161, 'Dirección General de Gestión A'),
(162, 'Dirección General de Asuntos J'),
(163, 'Dirección General de Personal'),
(164, 'Dirección de Atención Primaria'),
(165, 'Dirección de Reconocimientos M'),
(166, 'Plan Nacer-Seguro Materno Infa'),
(167, 'Dirección General de Fiscaliza'),
(168, 'Dirección General Hospital Ver'),
(169, 'Director Medico '),
(170, 'Unidad de Control Interno Haci'),
(171, 'Contaduría General de la Provi'),
(172, 'Sub Contaduría General de la P'),
(173, 'Tesorería General de la Provin'),
(174, 'Sub Tesoreria General de Conc'),
(175, 'Sub Tesoreria General de Pagos'),
(176, 'Dirección General de Administr'),
(177, 'Coordinación de Área de Despac'),
(178, 'Coordinación de Área de Gestió'),
(179, 'Dirección General de Presupues'),
(180, 'Dirección General de Formulaci'),
(181, 'Dirección General de Recursos '),
(182, 'Subdirección General de Recur'),
(183, 'Subdirección de Procesamiento,'),
(184, 'Dirección General de Asuntos L'),
(185, 'Dirección General de Obligacio'),
(186, 'Direccion de Administracion '),
(187, 'Dirección General de Deuda Púb'),
(188, 'Dirección General de Ingresos '),
(189, 'Subdirección de Recaudación  '),
(190, 'Subdirección de Administración'),
(191, 'Subdirección de Fiscalización '),
(192, 'Dirección General de Bienes Fi'),
(193, 'Administración Provincial de J'),
(194, 'Dirección de Asuntos Jurídicos'),
(195, 'Coordinación de Gestión Instit'),
(196, 'Dirección de Obras de Infraest'),
(197, 'Dirección General de Proyectos'),
(198, 'Registro de Contratista'),
(199, 'Delegación Fiscal del Tribunal'),
(200, 'Dirección de Registro Provinci'),
(201, 'Coordinación de Despacho '),
(202, 'Coordinación de Mantenimiento '),
(203, 'Esc. Normal Nº1 Pedro Ignacio '),
(204, 'Esc. Nº127 Capital Federal'),
(205, 'Esc. Nº162 Pablo VII'),
(206, 'Esc. Nº218 Mercedes Stipanicic'),
(207, 'Esc. Nº230 Supervisora Casa de'),
(208, 'Esc. Nº287 Maestro Armando Her'),
(209, 'Esc. Nº299 Juan Jose Paso '),
(210, 'Esc. Nº 395 Malvinas Argentina'),
(211, 'Esc. Nº 398 Monseñor Angelelli'),
(212, 'Esc. Nº 403'),
(213, 'Esc. Nº 405 Padre Armando Amir'),
(214, 'Esc. Nº 17 La Rioja Española'),
(215, 'Esc. Nº 37 Provincia de Santa '),
(216, 'Esc. Nº 56 Gral. Manuel Belgra'),
(217, 'Esc. Nº 202 Isla Nueva'),
(218, 'Esc. Nº 245 Pedro Ignacio de C'),
(219, 'Esc. Nº 280 Tambor de Tacuari '),
(220, 'Esc. Nº 361 Expedición Auxilia'),
(221, 'Esc. Nº 394 San José de Calasa'),
(222, 'Esc. Nº 412 Papa Francisco'),
(223, 'Esc. Nº 39 Timoteo Gordillo'),
(224, 'Esc. Nº 167 '),
(225, 'Esc. Nº 191 Sarmiento'),
(226, 'Esc. Nº 192 Dr. Nicolás Avella'),
(227, 'Esc. Nº 250 Bartolomé Mitre '),
(228, 'Esc. Nº 251 Ceferino Namuncura'),
(229, 'Esc. Nº 411 Rene Favaloro'),
(230, 'Esc. Nº 177 Dr. Mariano Moreno'),
(231, 'Esc. Nº 178 Dia de las América'),
(232, 'Esc. Nº 190 Gral. San Martin'),
(233, 'Esc. Nº 243 Gdor. Benjamín de '),
(234, 'Esc. Nº 244 Francisco Telechea'),
(235, 'Esc. Nº 248 Francisca Geronima'),
(236, 'Esc. Nº 249 Gral. Manuel Belgr'),
(237, 'Esc. Nº 252 Bernardino Rivadav'),
(238, 'Esc. Nº 397 Mercedita de San M'),
(239, 'Esc. Nº 409 '),
(240, 'Esc. Nº 55 José Santiago Pioli'),
(241, 'Esc. Nº 201 Juan Facundo Carri'),
(242, 'Esc. Nº 309 Gdor. Manuel Vicen'),
(243, 'Esc. Nº 326 Estaurofila Luna D'),
(244, 'Esc. Nº 365 Provincia de Misio'),
(245, 'Esc. Nº 369 Maestro Humberto P'),
(246, 'Esc. Nº 386 '),
(247, 'Esc. Nº 407 Prof. Raúl Delfor '),
(248, 'Esc. Nº 11 Provincia de Tucuma'),
(249, 'Esc. Nº 54 Provincia de Buenos'),
(250, 'Esc. Nº 164 Juana Loreto de Ar'),
(251, 'Esc. Nº 175 Gral. Manuel Belgr'),
(252, 'Esc. Nº 353 Batallón de Ingeni'),
(253, 'Esc. Nº 396 Caudillos Riojanos'),
(254, 'Esc. Nº 408 Faldeo del Velazco'),
(255, 'Esc. Nº 410 Los Bulevares'),
(256, 'Esc. Nº 1 Pablo Pizzuno'),
(257, 'Esc. Nº 2 Timoteo Gordillo'),
(258, 'Esc. Nº 29 Provincia de Mendoz'),
(259, 'Esc. Nº 107 Juan Domingo Perón'),
(260, 'Esc. Nº 259 Nicolas Davila '),
(261, 'Esc. Nº 260 Juan Ramirez de Ve'),
(262, 'Esc. Nº 414 Prof. Julian Amate'),
(263, 'Esc. Normal Joaquin Victor Gon'),
(264, 'Esc. Nº 3 Joaquin Victor Gonza'),
(265, 'Esc. Nº 6 Sargento Juan Bautis'),
(266, 'Esc. Nº 129 Ciudad de Buenos A'),
(267, 'Esc. Nº 166 Rodolfo N. Carmona'),
(268, 'Esc. Nº 189 Emilio Alfredo Hun'),
(269, 'Esc. Nº 194 Bartolomé Mitre '),
(270, 'Esc. Nº 261 9 de Julio'),
(271, 'Esc. Nº 262 Mercedes Bustamant'),
(272, 'Esc. Nº 370 Maestro Fermín Mor'),
(273, 'Esc. Nº 13 Rosario Vera Peñalo'),
(274, 'Esc. Nº 15 Provincia de San Lu'),
(275, 'Esc. Nº 81 '),
(276, 'Esc. Nº 87 Sergio Simeon Rosa '),
(277, 'Esc. Nº 88 Andrea Picón Zalaza'),
(278, 'Esc. Nº 100 '),
(279, 'Esc. Nº 101 Rosendo Romero '),
(280, 'Esc. Nº 102 '),
(281, 'Esc. Nº 111'),
(282, 'Esc. Nº 156 Direc. Vitalia B. '),
(283, 'Esc. Nº 281 25 de Mayo'),
(284, 'Esc. Nº 27 Gobernación de Sant'),
(285, 'Esc. Nº 187 El Cadillo'),
(286, 'Esc. Nº 322 José Ignacio Thame'),
(287, 'Esc. Nº 413 '),
(288, 'Esc. Nº 16 Juan Ramirez de Vel'),
(289, 'Esc. Nº 35 Maria Rosa Tapia de'),
(290, 'Esc. Nº 45 '),
(291, 'Esc. Nº 114 Nicolás Lanzillott'),
(292, 'Esc. Nº 128 '),
(293, 'Esc. Nº 221 Julian Noe Aguilar'),
(294, 'Esc. Nº 10 '),
(295, 'Esc. Nº 19 Domingo Matheu'),
(296, 'Esc. Nº 51 Provincia de Jujuy '),
(297, 'Esc. Nº 57 Bernardino Rivadavi'),
(298, 'Esc. Nº 103 Coronel Nicolás Ba'),
(299, 'Esc. Nº 108'),
(300, 'Esc. Nº 141 Ricardo Rojas'),
(301, 'Esc. Nº 174 Provincia de Salta'),
(302, 'Esc. Nº 195 Provincia de Catam'),
(303, 'Esc. Nº 256 Gregoria Matorra d'),
(304, 'Esc. Nº 257 Gral. José de San '),
(305, 'Esc. Nº 270 Belindo de la Fuen'),
(306, 'Esc. Nº 401 '),
(307, 'Esc. Nº 8 Provincia de Formosa'),
(308, 'Esc. Nº 9 Hipolito Yrigoyen '),
(309, 'Esc. Nº 18 Alicia Carrizo'),
(310, 'Esc. Nº 28 Humberto Alejandro '),
(311, 'Esc. Nº 71 Direc. Andrea Paez '),
(312, 'Esc. Nº 72 Domingo Faustino Sa'),
(313, 'Esc. Nº 73 Vicente Calderón '),
(314, 'Esc. Nº 352 Guillermo Paez '),
(315, 'Esc. Nº 20 Azucena de las Merc'),
(316, 'Esc. Nº 79 Amigo Devoto '),
(317, 'Esc. Nº 80 Provincia de la Pam'),
(318, 'Esc. Nº 168 Jornada Completa'),
(319, 'Esc. Nº 4 Provincia de Córdoba'),
(320, 'Esc. Nº 7 Ramon Agapito Luján '),
(321, 'Esc. Nº 50 '),
(322, 'Esc. Nº 89'),
(323, 'Esc. Nº 90'),
(324, 'Esc. Nº 105 Anfiloquia Velarde'),
(325, 'Esc. Nº 120 Maestra de la Patr'),
(326, 'Esc. Nº 183 El Chacho'),
(327, 'Esc. Nº 269 Juan Facundo Quiro'),
(328, 'Esc. Nº 310 Dr. Esteban A. Gas'),
(329, 'Esc. Nº 313 Mariano Boedo'),
(330, 'Esc. Nº 351'),
(331, 'Esc. Nº 388 '),
(332, 'Esc. Normal Nº 4 Republica de '),
(333, 'Esc. Nº 267 Gral. Angel Vicent'),
(334, 'Esc. Nº 136 Nicolasa Vera Luna'),
(335, 'Esc. Nº 151 Provincia de Corri'),
(336, 'Esc. Nº 258 Rosario Vera Peñal'),
(337, 'Esc. Nº 264 Prof. Luis Torres '),
(338, 'Esc. Nº 415 Padre Carlos de Di'),
(339, 'Esc. Nº 14 Justo josé de Urqui'),
(340, 'Esc. Nº 214 Pedro Celestino Ro'),
(341, 'Esc. Normal Nº 3 Juan Facundo '),
(342, 'Esc. Nº 96 17 de Agosto de 1.8'),
(343, 'Esc. Nº 98 '),
(344, 'Esc. Nº 255 Joaquin Victor Gon'),
(345, 'Esc. Nº 402');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Equipo`
--

CREATE TABLE IF NOT EXISTS `Equipo` (
  `ID_Equipo` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(20) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Modelo` varchar(20) NOT NULL,
  `Imei` varchar(50) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Fecha` varchar(20) NOT NULL,
  `User_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID_Equipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `Equipo`
--

INSERT INTO `Equipo` (`ID_Equipo`, `Marca`, `Tipo`, `Modelo`, `Imei`, `Estado`, `Fecha`, `User_ID`) VALUES
(1, 'N/A', 'N/A', 'N/A', 'N/A', 'Asignado', '2020-08-29 06:17:42', 1),
(2, 'Samsung', 'Smarphone', 'A71', '32103254697987654646543624131465', 'Baja', '2023-04-27 17:12:40', 1),
(3, 'Motorola', 'Smarphone', 'v-20', '12345678910', 'Asignado', '2023-04-27 17:12:51', 1),
(4, 'Motorola ', 'Smartphone', 'v-30', '0987654321', 'Disponible', '2023-04-27 18:23:00', 1),
(5, 'xiaomi ', 'Smartphone', 'redmi note 11', '654654897981165318467', 'Disponible', '2023-05-02 10:42:31', 1),
(6, 'Sangsung', 'Smartphone', 'v-34', '34534534534534543534', 'Disponible', '2023-05-02 23:03:01', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Historial`
--

CREATE TABLE IF NOT EXISTS `Historial` (
  `ID_Historial` int(11) NOT NULL AUTO_INCREMENT,
  `Sim_ID` int(11) NOT NULL,
  `Linea_ID` int(11) NOT NULL,
  `Equipo_ID` int(11) NOT NULL,
  `Plan_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Entidad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Comentario` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_Historial`),
  KEY `Sim_ID` (`Sim_ID`),
  KEY `Linea_ID` (`Linea_ID`,`Equipo_ID`),
  KEY `Plan_ID` (`Plan_ID`),
  KEY `User_ID` (`User_ID`),
  KEY `Equipo_ID` (`Equipo_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Volcado de datos para la tabla `Historial`
--

INSERT INTO `Historial` (`ID_Historial`, `Sim_ID`, `Linea_ID`, `Equipo_ID`, `Plan_ID`, `User_ID`, `Entidad`, `Comentario`, `Fecha`) VALUES
(39, 271, 1, 1, 1, 1, 'Linea', 'Se cambia el imei 89345678910111213269, debido a que se rompió y se asigna nuevo imei 35446410908321201', '2021-05-12 00:44:05'),
(40, 1, 1, 2, 1, 1, 'Equipo', 'por error sadhasdhaksjdh', '2022-03-30 21:17:35'),
(41, 328, 1, 1, 1, 1, 'Linea', 'cambio de plan , por que se lo merece', '2023-04-27 17:09:45'),
(42, 1, 1, 3, 1, 1, 'Equipo', 'este usuario pide otro equipo mas completo', '2023-04-27 17:11:05'),
(43, 1, 1, 2, 1, 1, 'Equipo', 'el equipo no funciona bien ', '2023-04-27 17:12:40'),
(44, 330, 1, 1, 1, 1, 'Linea', 'la linea se suspende por ejemplo ', '2023-04-27 18:27:57'),
(45, 330, 1, 1, 1, 1, 'Linea', 'la linea queda disponible por ejemplo', '2023-04-27 18:28:33'),
(46, 330, 1, 1, 1, 1, 'Linea', 'suspendo la lina por ejemplo ', '2023-04-27 18:33:19'),
(47, 329, 1, 1, 1, 1, 'Linea', 'se le cambia el plan por ejemplo ', '2023-04-27 18:34:40'),
(48, 330, 1, 1, 1, 1, 'Linea', 'activo para probar el chofer , nuevo con select ', '2023-05-02 10:39:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Linea`
--

CREATE TABLE IF NOT EXISTS `Linea` (
  `ID_Linea` int(11) NOT NULL AUTO_INCREMENT,
  `Sim_ID` int(11) NOT NULL,
  `Usuario` varchar(40) NOT NULL,
  `Funcion` varchar(40) NOT NULL,
  `Organismo_ID` int(11) NOT NULL,
  `Area_ID` int(11) NOT NULL,
  `Plan_ID` int(11) NOT NULL,
  `Equipo_ID` int(11) NOT NULL,
  `Fecha` varchar(20) NOT NULL,
  `User_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID_Linea`),
  KEY `User_ID` (`User_ID`),
  KEY `Equipo_ID` (`Equipo_ID`),
  KEY `Plan_ID` (`Plan_ID`),
  KEY `Area_ID` (`Area_ID`),
  KEY `Organismo_ID` (`Organismo_ID`),
  KEY `Sim_ID` (`Sim_ID`),
  KEY `Area_ID_2` (`Area_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `Linea`
--

INSERT INTO `Linea` (`ID_Linea`, `Sim_ID`, `Usuario`, `Funcion`, `Organismo_ID`, `Area_ID`, `Plan_ID`, `Equipo_ID`, `Fecha`, `User_ID`) VALUES
(1, 1, 'N/A', 'N/A', 1, 1, 1, 1, 'N/A', 1),
(3, 271, 'Luciano Montero', 'Director General', 20, 2, 27, 1, '2021-05-11 23:00:02', 1),
(4, 6, 'Marcelo Roldan', 'Secretario de Modernización', 22, 29, 22, 1, '2022-03-30 21:08:54', 1),
(5, 328, 'Ariel Montero', 'Empleado', 2, 9, 23, 3, '2023-04-27 17:07:30', 1),
(6, 329, 'Matias ', 'programador', 5, 18, 21, 4, '2023-04-27 18:31:44', 1),
(8, 330, 'gabriel roldan', 'Chofer', 2, 2, 27, 4, '2023-05-02 10:39:40', 1),
(9, 331, 'Horacio guarani', 'Cantante', 5, 7, 25, 5, '2023-05-02 10:53:31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Organismo`
--

CREATE TABLE IF NOT EXISTS `Organismo` (
  `ID_Organismo` int(11) NOT NULL AUTO_INCREMENT,
  `Organismo` varchar(400) NOT NULL,
  PRIMARY KEY (`ID_Organismo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `Organismo`
--

INSERT INTO `Organismo` (`ID_Organismo`, `Organismo`) VALUES
(1, 'N/A'),
(2, 'Ministerio de Hacienda'),
(3, 'Ministerio de Educacion'),
(4, 'Ministerio de Infraestructura'),
(5, 'Ministerio de Gobierno'),
(6, 'Ministerio de Desarrollo Social'),
(7, 'Ministerio de Industria '),
(8, 'Ministerio de Salud'),
(19, 'Ministerio de Produccion'),
(20, 'Gobernacion'),
(21, 'Secretaria General y Legal de la Gobernación'),
(22, 'Asesoría General De Gobierno '),
(23, 'Funcion Judicial'),
(24, 'Función Legislativa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Permiso`
--

CREATE TABLE IF NOT EXISTS `Permiso` (
  `ID_Permiso` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `App_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID_Permiso`),
  KEY `kf_user_id` (`User_ID`),
  KEY `kf_app_id` (`App_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=46 ;

--
-- Volcado de datos para la tabla `Permiso`
--

INSERT INTO `Permiso` (`ID_Permiso`, `User_ID`, `App_ID`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 4),
(7, 1, 8),
(12, 1, 9),
(13, 1, 10),
(14, 1, 11),
(16, 1, 12),
(17, 23, 9),
(18, 23, 10),
(19, 23, 8),
(20, 23, 2),
(22, 23, 4),
(23, 23, 3),
(24, 23, 11),
(25, 1, 13),
(26, 23, 13),
(27, 1, 14),
(28, 1, 15),
(29, 1, 16),
(30, 24, 8),
(31, 24, 9),
(32, 24, 10),
(33, 24, 11),
(34, 24, 12),
(35, 24, 13),
(36, 24, 14),
(37, 24, 15),
(38, 24, 16),
(39, 25, 13),
(40, 22, 8),
(41, 22, 10),
(42, 26, 9),
(43, 26, 12),
(44, 26, 13),
(45, 26, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Plan`
--

CREATE TABLE IF NOT EXISTS `Plan` (
  `ID_Plan` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Minutos` varchar(20) NOT NULL,
  `Datos` varchar(20) NOT NULL,
  `Sms` varchar(20) NOT NULL,
  `Cobertura` varchar(20) NOT NULL,
  `Costo` decimal(25,2) NOT NULL,
  `Fecha` varchar(20) NOT NULL,
  `User_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID_Plan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `Plan`
--

INSERT INTO `Plan` (`ID_Plan`, `Nombre`, `Minutos`, `Datos`, `Sms`, `Cobertura`, `Costo`, `Fecha`, `User_ID`) VALUES
(1, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 0.00, 'N/A', 1),
(21, 'Conexión Total Premiun 4XL(PBEXL)', '1000', '20', '5000', 'Internacional', 2575.00, '6/10/2020  11:42:10', 24),
(22, 'Empresa Conexion Total L (PTIEM)', '1000', '5', '5000', 'Internacional', 1110.00, '6/10/2020  11:46:13', 24),
(23, 'Plan  Executive Flex  Total XS', '100', '500', '5000', 'Nacional', 695.00, '6/10/2020  11:48:24', 24),
(24, 'Plan Internet 3gb', '0', '3', '0', 'Nacional', 800.00, '2021-05-08 01:00:37', 1),
(25, 'Plan Internet 50gb', '0', '50', '0', 'Nacional', 800.00, '2021-05-08 01:01:48', 1),
(26, 'Plan Libre Empresas 8gb', '10000', '8', '2000', 'Nacional', 800.00, '2021-05-08 01:05:21', 1),
(27, 'Plan Ti Empresas Ilimitado', '10000', '8', '2000', 'Nacional', 800.00, '2021-05-08 01:06:05', 1),
(28, 'Plan Datos Ilimitado Ggcc', '10000', '50', '20000', 'Nacional', 2000.00, '2021-05-08 01:32:27', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Referencia`
--

CREATE TABLE IF NOT EXISTS `Referencia` (
  `ID_Referencia` int(11) NOT NULL AUTO_INCREMENT,
  `Cuenta` int(20) NOT NULL,
  `Referencia` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Periodo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_Referencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `Referencia`
--

INSERT INTO `Referencia` (`ID_Referencia`, `Cuenta`, `Referencia`, `Periodo`) VALUES
(1, 0, 'N/A', 'N/A'),
(7, 100002, '1388503007', '21'),
(11, 100005, '4237213400', '21'),
(12, 100010, '5002678502', '21'),
(13, 100012, '0741849001', '21'),
(14, 1058749, '46546787411', '14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sim`
--

CREATE TABLE IF NOT EXISTS `Sim` (
  `ID_Sim` int(11) NOT NULL AUTO_INCREMENT,
  `Numero` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Imei` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Tipo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Estado` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Referencia_ID` int(11) NOT NULL,
  `Plan_ID` int(11) NOT NULL,
  `Fecha` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `User_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID_Sim`),
  KEY `User_ID` (`User_ID`),
  KEY `Plan_ID` (`Plan_ID`),
  KEY `Referencia_ID` (`Referencia_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=333 ;

--
-- Volcado de datos para la tabla `Sim`
--

INSERT INTO `Sim` (`ID_Sim`, `Numero`, `Imei`, `Tipo`, `Estado`, `Referencia_ID`, `Plan_ID`, `Fecha`, `User_ID`) VALUES
(1, 'N/A', 'N/A', 'N/A', 'N/A', 1, 1, 'N/A', 1),
(3, '3804369018', '89345678910111213001', 'Linea', 'Disponible', 7, 21, '2021-05-07 08:00', 1),
(4, '3804369040', '89345678910111213002', 'Linea', 'Disponible', 7, 21, '2021-05-08 08:00', 1),
(5, '3804369070', '89345678910111213003', 'Linea', 'Disponible', 7, 21, '2021-05-09 08:00', 1),
(6, '3804203965', '89345678910111213004', 'Linea', 'Asignado', 7, 22, '2021-05-10 08:00', 1),
(7, '3804204091', '89345678910111213005', 'Linea', 'Disponible', 7, 22, '2021-06-07 11:22:06', 1),
(8, '3804218778', '89345678910111213006', 'Linea', 'Disponible', 7, 22, '2021-05-12 08:00', 1),
(9, '3804240105', '89345678910111213007', 'Linea', 'Disponible', 7, 22, '2021-05-13 08:00', 1),
(10, '3804240627', '89345678910111213008', 'Linea', 'Disponible', 7, 22, '2021-05-14 08:00', 1),
(11, '3804240731', '89345678910111213009', 'Linea', 'Disponible', 7, 22, '2021-05-15 08:00', 1),
(12, '3804240854', '89345678910111213010', 'Linea', 'Disponible', 7, 22, '2021-05-16 08:00', 1),
(13, '3804241034', '89345678910111213011', 'Linea', 'Disponible', 7, 22, '2021-05-17 08:00', 1),
(14, '3804241235', '89345678910111213012', 'Linea', 'Disponible', 7, 22, '2021-05-18 08:00', 1),
(15, '3804241286', '89345678910111213013', 'Linea', 'Disponible', 7, 22, '2021-05-19 08:00', 1),
(16, '3804241524', '89345678910111213014', 'Linea', 'Disponible', 7, 22, '2021-05-20 08:00', 1),
(17, '3804242182', '89345678910111213015', 'Linea', 'Disponible', 7, 22, '2021-05-21 08:00', 1),
(18, '3804242595', '89345678910111213016', 'Linea', 'Disponible', 7, 22, '2021-05-22 08:00', 1),
(19, '3804242781', '89345678910111213017', 'Linea', 'Disponible', 7, 22, '2021-05-23 08:00', 1),
(20, '3804242789', '89345678910111213018', 'Linea', 'Disponible', 7, 22, '2021-05-24 08:00', 1),
(21, '3804242904', '89345678910111213019', 'Linea', 'Disponible', 7, 22, '2021-05-25 08:00', 1),
(22, '3804243811', '89345678910111213020', 'Linea', 'Disponible', 7, 22, '2021-05-26 08:00', 1),
(23, '3804243849', '89345678910111213021', 'Linea', 'Disponible', 7, 22, '2021-05-27 08:00', 1),
(24, '3804260025', '89345678910111213022', 'Linea', 'Disponible', 7, 22, '2021-05-28 08:00', 1),
(25, '3804260329', '89345678910111213023', 'Linea', 'Disponible', 7, 22, '2021-05-29 08:00', 1),
(26, '3804260330', '89345678910111213024', 'Linea', 'Disponible', 7, 22, '2021-05-30 08:00', 1),
(27, '3804260332', '89345678910111213025', 'Linea', 'Disponible', 7, 22, '2021-05-31 08:00', 1),
(28, '3804260335', '89345678910111213026', 'Linea', 'Disponible', 7, 22, '2021-06-01 08:00', 1),
(29, '3804274034', '89345678910111213027', 'Linea', 'Disponible', 7, 22, '2021-06-02 08:00', 1),
(30, '3804292177', '89345678910111213028', 'Linea', 'Disponible', 7, 22, '2021-06-03 08:00', 1),
(31, '3804304949', '89345678910111213029', 'Linea', 'Disponible', 7, 22, '2021-06-04 08:00', 1),
(32, '3804305555', '89345678910111213030', 'Linea', 'Disponible', 7, 22, '2021-06-05 08:00', 1),
(33, '3804307735', '89345678910111213031', 'Linea', 'Disponible', 7, 22, '2021-06-06 08:00', 1),
(34, '3804307739', '89345678910111213032', 'Linea', 'Disponible', 7, 22, '2021-06-07 08:00', 1),
(35, '3804307752', '89345678910111213033', 'Linea', 'Disponible', 7, 22, '2021-06-08 08:00', 1),
(36, '3804307760', '89345678910111213034', 'Linea', 'Disponible', 7, 22, '2021-06-09 08:00', 1),
(37, '3804309191', '89345678910111213035', 'Linea', 'Disponible', 7, 22, '2021-06-10 08:00', 1),
(38, '3804335647', '89345678910111213036', 'Linea', 'Disponible', 7, 22, '2021-06-11 08:00', 1),
(39, '3804335663', '89345678910111213037', 'Linea', 'Disponible', 7, 22, '2021-06-12 08:00', 1),
(40, '3804340093', '89345678910111213038', 'Linea', 'Disponible', 7, 22, '2021-06-13 08:00', 1),
(41, '3804340097', '89345678910111213039', 'Linea', 'Disponible', 7, 22, '2021-06-14 08:00', 1),
(42, '3804340098', '89345678910111213040', 'Linea', 'Disponible', 7, 22, '2021-06-15 08:00', 1),
(43, '3804340103', '89345678910111213041', 'Linea', 'Disponible', 7, 22, '2021-06-16 08:00', 1),
(44, '3804340108', '89345678910111213042', 'Linea', 'Disponible', 7, 22, '2021-06-17 08:00', 1),
(45, '3804340112', '89345678910111213043', 'Linea', 'Disponible', 7, 22, '2021-06-18 08:00', 1),
(46, '3804340117', '89345678910111213044', 'Linea', 'Disponible', 7, 22, '2021-06-19 08:00', 1),
(47, '3804340118', '89345678910111213045', 'Linea', 'Disponible', 7, 22, '2021-06-20 08:00', 1),
(48, '3804340124', '89345678910111213046', 'Linea', 'Disponible', 7, 22, '2021-06-21 08:00', 1),
(49, '3804340127', '89345678910111213047', 'Linea', 'Disponible', 7, 22, '2021-06-22 08:00', 1),
(50, '3804340129', '89345678910111213048', 'Linea', 'Disponible', 7, 22, '2021-06-23 08:00', 1),
(51, '3804340133', '89345678910111213049', 'Linea', 'Disponible', 7, 22, '2021-06-24 08:00', 1),
(52, '3804340135', '89345678910111213050', 'Linea', 'Disponible', 7, 22, '2021-06-25 08:00', 1),
(53, '3804340138', '89345678910111213051', 'Linea', 'Disponible', 7, 22, '2021-06-26 08:00', 1),
(54, '3804340139', '89345678910111213052', 'Linea', 'Disponible', 7, 22, '2021-06-27 08:00', 1),
(55, '3804340140', '89345678910111213053', 'Linea', 'Disponible', 7, 22, '2021-06-28 08:00', 1),
(56, '3804355952', '89345678910111213054', 'Linea', 'Disponible', 7, 22, '2021-06-29 08:00', 1),
(57, '3804369042', '89345678910111213055', 'Linea', 'Disponible', 7, 22, '2021-06-30 08:00', 1),
(58, '3804369083', '89345678910111213056', 'Linea', 'Disponible', 7, 22, '2021-07-01 08:00', 1),
(59, '3804369089', '89345678910111213057', 'Linea', 'Disponible', 7, 22, '2021-07-02 08:00', 1),
(60, '3804369106', '89345678910111213058', 'Linea', 'Disponible', 7, 22, '2021-07-03 08:00', 1),
(61, '3804369135', '89345678910111213059', 'Linea', 'Disponible', 7, 22, '2021-07-04 08:00', 1),
(62, '3804369138', '89345678910111213060', 'Linea', 'Disponible', 7, 22, '2021-07-05 08:00', 1),
(63, '3804369147', '89345678910111213061', 'Linea', 'Disponible', 7, 22, '2021-07-06 08:00', 1),
(64, '3804379110', '89345678910111213062', 'Linea', 'Disponible', 7, 22, '2021-07-07 08:00', 1),
(65, '3804387166', '89345678910111213063', 'Linea', 'Disponible', 7, 22, '2021-07-08 08:00', 1),
(66, '3804440025', '89345678910111213064', 'Linea', 'Disponible', 7, 22, '2021-07-09 08:00', 1),
(67, '3804440029', '89345678910111213065', 'Linea', 'Disponible', 7, 22, '2021-07-10 08:00', 1),
(68, '3804440030', '89345678910111213066', 'Linea', 'Disponible', 7, 22, '2021-07-11 08:00', 1),
(69, '3804440034', '89345678910111213067', 'Linea', 'Disponible', 7, 22, '2021-07-12 08:00', 1),
(70, '3804440038', '89345678910111213068', 'Linea', 'Disponible', 7, 22, '2021-07-13 08:00', 1),
(71, '3804440040', '89345678910111213069', 'Linea', 'Disponible', 7, 22, '2021-07-14 08:00', 1),
(72, '3804440041', '89345678910111213070', 'Linea', 'Disponible', 7, 22, '2021-07-15 08:00', 1),
(73, '3804440044', '89345678910111213071', 'Linea', 'Disponible', 7, 22, '2021-07-16 08:00', 1),
(74, '3804440049', '89345678910111213072', 'Linea', 'Disponible', 7, 22, '2021-07-17 08:00', 1),
(75, '3804440051', '89345678910111213073', 'Linea', 'Disponible', 7, 22, '2021-07-18 08:00', 1),
(76, '3804440052', '89345678910111213074', 'Linea', 'Disponible', 7, 22, '2021-07-19 08:00', 1),
(77, '3804440053', '89345678910111213075', 'Linea', 'Disponible', 7, 22, '2021-07-20 08:00', 1),
(78, '3804440054', '89345678910111213076', 'Linea', 'Disponible', 7, 22, '2021-07-21 08:00', 1),
(79, '3804440055', '89345678910111213077', 'Linea', 'Disponible', 7, 22, '2021-07-22 08:00', 1),
(80, '3804440059', '89345678910111213078', 'Linea', 'Disponible', 7, 22, '2021-07-23 08:00', 1),
(81, '3804440060', '89345678910111213079', 'Linea', 'Disponible', 7, 22, '2021-07-24 08:00', 1),
(82, '3804440061', '89345678910111213080', 'Linea', 'Disponible', 7, 22, '2021-07-25 08:00', 1),
(83, '3804440062', '89345678910111213081', 'Linea', 'Disponible', 7, 22, '2021-07-26 08:00', 1),
(84, '3804440063', '89345678910111213082', 'Linea', 'Disponible', 7, 22, '2021-07-27 08:00', 1),
(85, '3804440064', '89345678910111213083', 'Linea', 'Disponible', 7, 22, '2021-07-28 08:00', 1),
(86, '3804440065', '89345678910111213084', 'Linea', 'Disponible', 7, 22, '2021-07-29 08:00', 1),
(87, '3804440066', '89345678910111213085', 'Linea', 'Disponible', 7, 22, '2021-07-30 08:00', 1),
(88, '3804440067', '89345678910111213086', 'Linea', 'Disponible', 7, 22, '2021-07-31 08:00', 1),
(89, '3804440068', '89345678910111213087', 'Linea', 'Disponible', 7, 22, '2021-08-01 08:00', 1),
(90, '3804440071', '89345678910111213088', 'Linea', 'Disponible', 7, 22, '2021-08-02 08:00', 1),
(91, '3804440827', '89345678910111213089', 'Linea', 'Disponible', 7, 22, '2021-08-03 08:00', 1),
(92, '3804441008', '89345678910111213090', 'Linea', 'Disponible', 7, 22, '2021-08-04 08:00', 1),
(93, '3804441032', '89345678910111213091', 'Linea', 'Disponible', 7, 22, '2021-08-05 08:00', 1),
(94, '3804441513', '89345678910111213092', 'Linea', 'Disponible', 7, 22, '2021-08-06 08:00', 1),
(95, '3804442600', '89345678910111213093', 'Linea', 'Disponible', 7, 22, '2021-08-07 08:00', 1),
(96, '3804442601', '89345678910111213094', 'Linea', 'Disponible', 7, 22, '2021-08-08 08:00', 1),
(97, '3804442602', '89345678910111213095', 'Linea', 'Disponible', 7, 22, '2021-08-09 08:00', 1),
(98, '3804442606', '89345678910111213096', 'Linea', 'Disponible', 7, 22, '2021-08-10 08:00', 1),
(99, '3804442612', '89345678910111213097', 'Linea', 'Disponible', 7, 22, '2021-08-11 08:00', 1),
(100, '3804442615', '89345678910111213098', 'Linea', 'Disponible', 7, 22, '2021-08-12 08:00', 1),
(101, '3804442616', '89345678910111213099', 'Linea', 'Disponible', 7, 22, '2021-08-13 08:00', 1),
(102, '3804442617', '89345678910111213100', 'Linea', 'Disponible', 7, 22, '2021-08-14 08:00', 1),
(103, '3804442618', '89345678910111213101', 'Linea', 'Disponible', 7, 22, '2021-08-15 08:00', 1),
(104, '3804442620', '89345678910111213102', 'Linea', 'Disponible', 7, 22, '2021-08-16 08:00', 1),
(105, '3804442625', '89345678910111213103', 'Linea', 'Disponible', 7, 22, '2021-08-17 08:00', 1),
(106, '3804442627', '89345678910111213104', 'Linea', 'Disponible', 7, 22, '2021-08-18 08:00', 1),
(107, '3804442628', '89345678910111213105', 'Linea', 'Disponible', 7, 22, '2021-08-19 08:00', 1),
(108, '3804442630', '89345678910111213106', 'Linea', 'Disponible', 7, 22, '2021-08-20 08:00', 1),
(109, '3804442632', '89345678910111213107', 'Linea', 'Disponible', 7, 22, '2021-08-21 08:00', 1),
(110, '3804442635', '89345678910111213108', 'Linea', 'Disponible', 7, 22, '2021-08-22 08:00', 1),
(111, '3804446476', '89345678910111213109', 'Linea', 'Disponible', 7, 22, '2021-08-23 08:00', 1),
(112, '3804446603', '89345678910111213110', 'Linea', 'Disponible', 7, 22, '2021-08-24 08:00', 1),
(113, '3804447002', '89345678910111213111', 'Linea', 'Disponible', 7, 22, '2021-08-25 08:00', 1),
(114, '3804447003', '89345678910111213112', 'Linea', 'Disponible', 7, 22, '2021-08-26 08:00', 1),
(115, '3804447008', '89345678910111213113', 'Linea', 'Disponible', 7, 22, '2021-08-27 08:00', 1),
(116, '3804447272', '89345678910111213114', 'Linea', 'Disponible', 7, 22, '2021-08-28 08:00', 1),
(117, '3804448005', '89345678910111213115', 'Linea', 'Disponible', 7, 22, '2021-08-29 08:00', 1),
(118, '3804449006', '89345678910111213116', 'Linea', 'Disponible', 7, 22, '2021-08-30 08:00', 1),
(119, '3804482471', '89345678910111213117', 'Linea', 'Disponible', 7, 22, '2021-08-31 08:00', 1),
(120, '3804505426', '89345678910111213118', 'Linea', 'Disponible', 7, 22, '2021-09-01 08:00', 1),
(121, '3804507009', '89345678910111213119', 'Linea', 'Disponible', 7, 22, '2021-09-02 08:00', 1),
(122, '3804522168', '89345678910111213120', 'Linea', 'Disponible', 7, 22, '2021-09-03 08:00', 1),
(123, '3804545288', '89345678910111213121', 'Linea', 'Disponible', 7, 22, '2021-09-04 08:00', 1),
(124, '3804546178', '89345678910111213122', 'Linea', 'Disponible', 7, 22, '2021-09-05 08:00', 1),
(125, '3804580300', '89345678910111213123', 'Linea', 'Disponible', 7, 22, '2021-09-06 08:00', 1),
(126, '3804589242', '89345678910111213124', 'Linea', 'Disponible', 7, 22, '2021-09-07 08:00', 1),
(127, '3804589402', '89345678910111213125', 'Linea', 'Disponible', 7, 22, '2021-09-08 08:00', 1),
(128, '3804616642', '89345678910111213126', 'Linea', 'Disponible', 7, 22, '2021-09-09 08:00', 1),
(129, '3804616643', '89345678910111213127', 'Linea', 'Disponible', 7, 22, '2021-09-10 08:00', 1),
(130, '3804616644', '89345678910111213128', 'Linea', 'Disponible', 7, 22, '2021-09-11 08:00', 1),
(131, '3804625441', '89345678910111213129', 'Linea', 'Disponible', 7, 22, '2021-09-12 08:00', 1),
(132, '3804640356', '89345678910111213130', 'Linea', 'Disponible', 7, 22, '2021-09-13 08:00', 1),
(133, '3804640380', '89345678910111213131', 'Linea', 'Disponible', 7, 22, '2021-09-14 08:00', 1),
(134, '3804640385', '89345678910111213132', 'Linea', 'Disponible', 7, 22, '2021-09-15 08:00', 1),
(135, '3804642350', '89345678910111213133', 'Linea', 'Disponible', 7, 22, '2021-09-16 08:00', 1),
(136, '3804662365', '89345678910111213134', 'Linea', 'Disponible', 7, 22, '2021-09-17 08:00', 1),
(137, '3804663016', '89345678910111213135', 'Linea', 'Disponible', 7, 22, '2021-09-18 08:00', 1),
(138, '3804663309', '89345678910111213136', 'Linea', 'Disponible', 7, 22, '2021-09-19 08:00', 1),
(139, '3804663408', '89345678910111213137', 'Linea', 'Disponible', 7, 22, '2021-09-20 08:00', 1),
(140, '3804664046', '89345678910111213138', 'Linea', 'Disponible', 7, 22, '2021-09-21 08:00', 1),
(141, '3804664063', '89345678910111213139', 'Linea', 'Disponible', 7, 22, '2021-09-22 08:00', 1),
(142, '3804670202', '89345678910111213140', 'Linea', 'Disponible', 7, 22, '2021-09-23 08:00', 1),
(143, '3804677342', '89345678910111213141', 'Linea', 'Disponible', 7, 22, '2021-09-24 08:00', 1),
(144, '3804684411', '89345678910111213142', 'Linea', 'Disponible', 7, 22, '2021-09-25 08:00', 1),
(145, '3804685439', '89345678910111213143', 'Linea', 'Disponible', 7, 22, '2021-09-26 08:00', 1),
(146, '3804685509', '89345678910111213144', 'Linea', 'Disponible', 7, 22, '2021-09-27 08:00', 1),
(147, '3804688175', '89345678910111213145', 'Linea', 'Disponible', 7, 22, '2021-09-28 08:00', 1),
(148, '3804688246', '89345678910111213146', 'Linea', 'Disponible', 7, 22, '2021-09-29 08:00', 1),
(149, '3804688250', '89345678910111213147', 'Linea', 'Disponible', 7, 22, '2021-09-30 08:00', 1),
(150, '3804688499', '89345678910111213148', 'Linea', 'Disponible', 7, 22, '2021-10-01 08:00', 1),
(151, '3804688562', '89345678910111213149', 'Linea', 'Disponible', 7, 22, '2021-10-02 08:00', 1),
(152, '3804688583', '89345678910111213150', 'Linea', 'Disponible', 7, 22, '2021-10-03 08:00', 1),
(153, '3804688591', '89345678910111213151', 'Linea', 'Disponible', 7, 22, '2021-10-04 08:00', 1),
(154, '3804688609', '89345678910111213152', 'Linea', 'Disponible', 7, 22, '2021-10-05 08:00', 1),
(155, '3804688641', '89345678910111213153', 'Linea', 'Disponible', 7, 22, '2021-10-06 08:00', 1),
(156, '3804688915', '89345678910111213154', 'Linea', 'Disponible', 7, 22, '2021-10-07 08:00', 1),
(157, '3804688923', '89345678910111213155', 'Linea', 'Disponible', 7, 22, '2021-10-08 08:00', 1),
(158, '3804688932', '89345678910111213156', 'Linea', 'Disponible', 7, 22, '2021-10-09 08:00', 1),
(159, '3804688935', '89345678910111213157', 'Linea', 'Disponible', 7, 22, '2021-10-10 08:00', 1),
(160, '3804688944', '89345678910111213158', 'Linea', 'Disponible', 7, 22, '2021-10-11 08:00', 1),
(161, '3804688964', '89345678910111213159', 'Linea', 'Disponible', 7, 22, '2021-10-12 08:00', 1),
(162, '3804688965', '89345678910111213160', 'Linea', 'Disponible', 7, 22, '2021-10-13 08:00', 1),
(163, '3804688967', '89345678910111213161', 'Linea', 'Disponible', 7, 22, '2021-10-14 08:00', 1),
(164, '3804689654', '89345678910111213162', 'Linea', 'Disponible', 7, 22, '2021-10-15 08:00', 1),
(165, '3804796010', '89345678910111213163', 'Linea', 'Disponible', 7, 22, '2021-10-16 08:00', 1),
(166, '3804851523', '89345678910111213164', 'Linea', 'Disponible', 7, 22, '2021-10-17 08:00', 1),
(167, '3804851575', '89345678910111213165', 'Linea', 'Disponible', 7, 22, '2021-10-18 08:00', 1),
(168, '3804851589', '89345678910111213166', 'Linea', 'Disponible', 7, 22, '2021-10-19 08:00', 1),
(169, '3804851594', '89345678910111213167', 'Linea', 'Disponible', 7, 22, '2021-10-20 08:00', 1),
(170, '3804851599', '89345678910111213168', 'Linea', 'Disponible', 7, 22, '2021-10-21 08:00', 1),
(171, '3804851656', '89345678910111213169', 'Linea', 'Disponible', 7, 22, '2021-10-22 08:00', 1),
(172, '3804851774', '89345678910111213170', 'Linea', 'Disponible', 7, 22, '2021-10-23 08:00', 1),
(173, '3804851829', '89345678910111213171', 'Linea', 'Disponible', 7, 22, '2021-10-24 08:00', 1),
(174, '3804851837', '89345678910111213172', 'Linea', 'Disponible', 7, 22, '2021-10-25 08:00', 1),
(175, '3804851948', '89345678910111213173', 'Linea', 'Disponible', 7, 22, '2021-10-26 08:00', 1),
(176, '3804852012', '89345678910111213174', 'Linea', 'Disponible', 7, 22, '2021-10-27 08:00', 1),
(177, '3804852138', '89345678910111213175', 'Linea', 'Disponible', 7, 22, '2021-10-28 08:00', 1),
(178, '3804852203', '89345678910111213176', 'Linea', 'Disponible', 7, 22, '2021-10-29 08:00', 1),
(179, '3804852209', '89345678910111213177', 'Linea', 'Disponible', 7, 22, '2021-10-30 08:00', 1),
(180, '3804852263', '89345678910111213178', 'Linea', 'Disponible', 7, 22, '2021-10-31 08:00', 1),
(181, '3804852345', '89345678910111213179', 'Linea', 'Disponible', 7, 22, '2021-11-01 08:00', 1),
(182, '3804852417', '89345678910111213180', 'Linea', 'Disponible', 7, 22, '2021-11-02 08:00', 1),
(183, '3804852952', '89345678910111213181', 'Linea', 'Disponible', 7, 22, '2021-11-03 08:00', 1),
(184, '3804853025', '89345678910111213182', 'Linea', 'Disponible', 7, 22, '2021-11-04 08:00', 1),
(185, '3804853052', '89345678910111213183', 'Linea', 'Disponible', 7, 22, '2021-11-05 08:00', 1),
(186, '3804853107', '89345678910111213184', 'Linea', 'Disponible', 7, 22, '2021-11-06 08:00', 1),
(187, '3804853132', '89345678910111213185', 'Linea', 'Disponible', 7, 22, '2021-11-07 08:00', 1),
(188, '3804853154', '89345678910111213186', 'Linea', 'Disponible', 7, 22, '2021-11-08 08:00', 1),
(189, '3804853159', '89345678910111213187', 'Linea', 'Disponible', 7, 22, '2021-11-09 08:00', 1),
(190, '3804853260', '89345678910111213188', 'Linea', 'Disponible', 7, 22, '2021-11-10 08:00', 1),
(191, '3804853366', '89345678910111213189', 'Linea', 'Disponible', 7, 22, '2021-11-11 08:00', 1),
(192, '3804853384', '89345678910111213190', 'Linea', 'Disponible', 7, 22, '2021-11-12 08:00', 1),
(193, '3804853513', '89345678910111213191', 'Linea', 'Disponible', 7, 22, '2021-11-13 08:00', 1),
(194, '3804853587', '89345678910111213192', 'Linea', 'Disponible', 7, 22, '2021-11-14 08:00', 1),
(195, '3804853664', '89345678910111213193', 'Linea', 'Disponible', 7, 22, '2021-11-15 08:00', 1),
(196, '3804853665', '89345678910111213194', 'Linea', 'Disponible', 7, 22, '2021-11-16 08:00', 1),
(197, '3804860036', '89345678910111213195', 'Linea', 'Disponible', 7, 22, '2021-11-17 08:00', 1),
(198, '3804860037', '89345678910111213196', 'Linea', 'Disponible', 7, 22, '2021-11-18 08:00', 1),
(199, '3804860038', '89345678910111213197', 'Linea', 'Disponible', 7, 22, '2021-11-19 08:00', 1),
(200, '3804860039', '89345678910111213198', 'Linea', 'Disponible', 7, 22, '2021-11-20 08:00', 1),
(201, '3804860040', '89345678910111213199', 'Linea', 'Disponible', 7, 22, '2021-11-21 08:00', 1),
(202, '3804860193', '89345678910111213200', 'Linea', 'Disponible', 7, 22, '2021-06-07 11:17:17', 1),
(203, '3804860240', '89345678910111213201', 'Linea', 'Disponible', 7, 22, '2021-11-23 08:00', 1),
(204, '3804861896', '89345678910111213202', 'Linea', 'Disponible', 7, 22, '2021-11-24 08:00', 1),
(205, '3804861975', '89345678910111213203', 'Linea', 'Disponible', 7, 22, '2021-11-25 08:00', 1),
(206, '3804863335', '89345678910111213204', 'Linea', 'Disponible', 7, 22, '2021-11-26 08:00', 1),
(207, '3804863588', '89345678910111213205', 'Linea', 'Disponible', 7, 22, '2021-11-27 08:00', 1),
(208, '3804864935', '89345678910111213206', 'Linea', 'Disponible', 7, 22, '2021-11-28 08:00', 1),
(209, '3804869041', '89345678910111213207', 'Linea', 'Disponible', 7, 22, '2021-11-29 08:00', 1),
(210, '3804870592', '89345678910111213208', 'Linea', 'Disponible', 7, 22, '2021-11-30 08:00', 1),
(211, '3804870678', '89345678910111213209', 'Linea', 'Disponible', 7, 22, '2021-12-01 08:00', 1),
(212, '3804871815', '89345678910111213210', 'Linea', 'Disponible', 7, 22, '2021-12-02 08:00', 1),
(213, '3804878308', '89345678910111213211', 'Linea', 'Disponible', 7, 22, '2021-12-03 08:00', 1),
(214, '3804879116', '89345678910111213212', 'Linea', 'Disponible', 7, 22, '2021-12-04 08:00', 1),
(215, '3804881035', '89345678910111213213', 'Linea', 'Disponible', 7, 22, '2021-12-05 08:00', 1),
(216, '3804881289', '89345678910111213214', 'Linea', 'Disponible', 7, 22, '2021-12-06 08:00', 1),
(217, '3804896101', '89345678910111213215', 'Linea', 'Disponible', 7, 22, '2021-12-07 08:00', 1),
(218, '3804897104', '89345678910111213216', 'Linea', 'Disponible', 7, 22, '2021-12-08 08:00', 1),
(219, '3804898101', '89345678910111213217', 'Linea', 'Disponible', 7, 22, '2021-12-09 08:00', 1),
(220, '3804258191', '89345678910111213218', 'Linea', 'Disponible', 7, 28, '2021-12-10 08:00', 1),
(221, '3804353867', '89345678910111213219', 'Linea', 'Disponible', 7, 23, '2021-12-11 08:00', 1),
(222, '3804379342', '89345678910111213220', 'Linea', 'Disponible', 7, 23, '2021-12-12 08:00', 1),
(223, '3804447004', '89345678910111213221', 'Linea', 'Disponible', 7, 23, '2021-12-13 08:00', 1),
(224, '3804504000', '89345678910111213222', 'Linea', 'Disponible', 7, 23, '2021-12-14 08:00', 1),
(225, '3804640308', '89345678910111213223', 'Linea', 'Disponible', 7, 23, '2021-12-15 08:00', 1),
(226, '3804715502', '89345678910111213224', 'Linea', 'Disponible', 7, 23, '2021-12-16 08:00', 1),
(227, '3804852486', '89345678910111213225', 'Linea', 'Disponible', 7, 23, '2021-12-17 08:00', 1),
(228, '3804852718', '89345678910111213226', 'Linea', 'Disponible', 7, 23, '2021-12-18 08:00', 1),
(229, '3804852820', '89345678910111213227', 'Linea', 'Disponible', 7, 23, '2021-12-19 08:00', 1),
(230, '3804852885', '89345678910111213228', 'Linea', 'Disponible', 7, 23, '2021-12-20 08:00', 1),
(231, '3804852934', '89345678910111213229', 'Linea', 'Disponible', 7, 23, '2021-12-21 08:00', 1),
(232, '3804343589', '89345678910111213230', 'Modem', 'Disponible', 7, 24, '2021-12-22 08:00', 1),
(233, '3804343591', '89345678910111213231', 'Modem', 'Disponible', 7, 24, '2021-12-23 08:00', 1),
(234, '3804212896', '89345678910111213232', 'Modem', 'Disponible', 7, 25, '2021-12-24 08:00', 1),
(235, '3804371125', '89345678910111213233', 'Modem', 'Disponible', 7, 25, '2021-12-25 08:00', 1),
(236, '3804247395', '89345678910111213234', 'Linea', 'Disponible', 7, 26, '2021-12-26 08:00', 1),
(237, '3804247662', '89345678910111213235', 'Linea', 'Disponible', 7, 26, '2021-12-27 08:00', 1),
(238, '3804250599', '89345678910111213236', 'Linea', 'Disponible', 7, 26, '2021-12-28 08:00', 1),
(239, '3804250601', '89345678910111213237', 'Linea', 'Disponible', 7, 26, '2021-12-29 08:00', 1),
(240, '3804250602', '89345678910111213238', 'Linea', 'Disponible', 7, 26, '2021-12-30 08:00', 1),
(241, '3804250926', '89345678910111213239', 'Linea', 'Disponible', 7, 26, '2021-12-31 08:00', 1),
(242, '3804341532', '89345678910111213240', 'Linea', 'Disponible', 7, 26, '2022-01-01 08:00', 1),
(243, '3804581361', '89345678910111213241', 'Linea', 'Disponible', 7, 26, '2022-01-02 08:00', 1),
(244, '3804581362', '89345678910111213242', 'Linea', 'Disponible', 7, 26, '2022-01-03 08:00', 1),
(245, '3804863258', '89345678910111213243', 'Linea', 'Disponible', 7, 26, '2022-01-04 08:00', 1),
(246, '3825660191', '89345678910111213244', 'Linea', 'Disponible', 7, 26, '2022-01-05 08:00', 1),
(247, '1154728163', '89345678910111213245', 'Linea', 'Asignado', 7, 27, '2022-01-06 08:00', 1),
(248, '3804260026', '89345678910111213246', 'Linea', 'Disponible', 7, 27, '2022-01-07 08:00', 1),
(249, '3804260029', '89345678910111213247', 'Linea', 'Disponible', 7, 27, '2022-01-08 08:00', 1),
(250, '3804260324', '89345678910111213248', 'Linea', 'Disponible', 7, 27, '2022-01-09 08:00', 1),
(251, '3804260327', '89345678910111213249', 'Linea', 'Disponible', 7, 27, '2022-01-10 08:00', 1),
(252, '3804260331', '89345678910111213250', 'Linea', 'Disponible', 7, 27, '2022-01-11 08:00', 1),
(253, '3804260334', '89345678910111213251', 'Linea', 'Disponible', 7, 27, '2022-01-12 08:00', 1),
(254, '3804260345', '89345678910111213252', 'Linea', 'Disponible', 7, 27, '2022-01-13 08:00', 1),
(255, '3804260346', '89345678910111213253', 'Linea', 'Disponible', 7, 27, '2022-01-14 08:00', 1),
(256, '3804260348', '89345678910111213254', 'Linea', 'Disponible', 7, 27, '2022-01-15 08:00', 1),
(257, '3804260350', '89345678910111213255', 'Linea', 'Disponible', 7, 27, '2022-01-16 08:00', 1),
(258, '3804301255', '89345678910111213256', 'Linea', 'Disponible', 7, 27, '2022-01-17 08:00', 1),
(259, '3804304848', '89345678910111213257', 'Linea', 'Disponible', 7, 27, '2022-01-18 08:00', 1),
(260, '3804305757', '89345678910111213258', 'Linea', 'Disponible', 7, 27, '2022-01-19 08:00', 1),
(261, '3804305858', '89345678910111213259', 'Linea', 'Disponible', 7, 27, '2022-01-20 08:00', 1),
(262, '3804306888', '89345678910111213260', 'Linea', 'Disponible', 7, 27, '2022-01-21 08:00', 1),
(263, '3804307746', '89345678910111213261', 'Linea', 'Disponible', 7, 27, '2022-01-22 08:00', 1),
(264, '3804311393', '89345678910111213262', 'Linea', 'Disponible', 7, 27, '2022-01-23 08:00', 1),
(265, '3804340091', '89345678910111213263', 'Linea', 'Disponible', 7, 27, '2022-01-24 08:00', 1),
(266, '3804340092', '89345678910111213264', 'Linea', 'Disponible', 7, 27, '2022-01-25 08:00', 1),
(267, '3804340101', '89345678910111213265', 'Linea', 'Disponible', 7, 27, '2022-01-26 08:00', 1),
(268, '3804340111', '89345678910111213266', 'Linea', 'Disponible', 7, 27, '2022-01-27 08:00', 1),
(269, '3804340113', '89345678910111213267', 'Linea', 'Disponible', 7, 27, '2022-01-28 08:00', 1),
(270, '3804340119', '89345678910111213268', 'Linea', 'Disponible', 7, 27, '2022-01-29 08:00', 1),
(271, '3804340120', '35446410908321201', 'Linea', 'Asignado', 7, 27, '2021-06-07 11:47:36', 1),
(272, '3804340125', '89345678910111213270', 'Linea', 'Disponible', 7, 27, '2022-01-31 08:00', 1),
(273, '3804340141', '89345678910111213271', 'Linea', 'Disponible', 7, 27, '2022-02-01 08:00', 1),
(274, '3804340146', '89345678910111213272', 'Linea', 'Disponible', 7, 27, '2022-02-02 08:00', 1),
(275, '3804340147', '89345678910111213273', 'Linea', 'Disponible', 7, 27, '2022-02-03 08:00', 1),
(276, '3804441267', '89345678910111213274', 'Linea', 'Disponible', 7, 27, '2022-02-04 08:00', 1),
(277, '3804444662', '89345678910111213275', 'Linea', 'Disponible', 7, 27, '2022-02-05 08:00', 1),
(278, '3804446001', '89345678910111213276', 'Linea', 'Disponible', 7, 27, '2022-02-06 08:00', 1),
(279, '3804509007', '89345678910111213277', 'Linea', 'Disponible', 7, 27, '2022-02-07 08:00', 1),
(280, '3804560945', '89345678910111213278', 'Linea', 'Disponible', 7, 27, '2022-02-08 08:00', 1),
(281, '3804589247', '89345678910111213279', 'Linea', 'Disponible', 7, 27, '2022-02-09 08:00', 1),
(282, '3804640054', '89345678910111213280', 'Linea', 'Disponible', 7, 27, '2022-02-10 08:00', 1),
(283, '3804662420', '89345678910111213281', 'Linea', 'Disponible', 7, 27, '2022-02-11 08:00', 1),
(284, '3804667538', '89345678910111213282', 'Linea', 'Disponible', 7, 27, '2022-02-12 08:00', 1),
(285, '3804670006', '89345678910111213283', 'Linea', 'Disponible', 7, 27, '2022-02-13 08:00', 1),
(286, '3804675248', '89345678910111213284', 'Linea', 'Disponible', 7, 27, '2022-02-14 08:00', 1),
(287, '3804675355', '89345678910111213285', 'Linea', 'Disponible', 7, 27, '2022-02-15 08:00', 1),
(288, '3804675542', '89345678910111213286', 'Linea', 'Disponible', 7, 27, '2022-02-16 08:00', 1),
(289, '3804675652', '89345678910111213287', 'Linea', 'Disponible', 7, 27, '2022-02-17 08:00', 1),
(290, '3804675687', '89345678910111213288', 'Linea', 'Disponible', 7, 27, '2022-02-18 08:00', 1),
(291, '3804675706', '89345678910111213289', 'Linea', 'Disponible', 7, 27, '2022-02-19 08:00', 1),
(292, '3804675731', '89345678910111213290', 'Linea', 'Disponible', 7, 27, '2022-02-20 08:00', 1),
(293, '3804675795', '89345678910111213291', 'Linea', 'Disponible', 7, 27, '2022-02-21 08:00', 1),
(294, '3804675883', '89345678910111213292', 'Linea', 'Disponible', 7, 27, '2022-02-22 08:00', 1),
(295, '3804676229', '89345678910111213293', 'Linea', 'Disponible', 7, 27, '2022-02-23 08:00', 1),
(296, '3804676326', '89345678910111213294', 'Linea', 'Disponible', 7, 27, '2022-02-24 08:00', 1),
(297, '3804676474', '89345678910111213295', 'Linea', 'Disponible', 7, 27, '2022-02-25 08:00', 1),
(298, '3804676627', '89345678910111213296', 'Linea', 'Disponible', 7, 27, '2022-02-26 08:00', 1),
(299, '3804676810', '89345678910111213297', 'Linea', 'Disponible', 7, 27, '2022-02-27 08:00', 1),
(300, '3804676876', '89345678910111213298', 'Linea', 'Disponible', 7, 27, '2022-02-28 08:00', 1),
(301, '3804676963', '89345678910111213299', 'Linea', 'Disponible', 7, 27, '2022-03-01 08:00', 1),
(302, '3804677021', '89345678910111213300', 'Linea', 'Disponible', 7, 27, '2022-03-02 08:00', 1),
(303, '3804677071', '89345678910111213301', 'Linea', 'Disponible', 7, 27, '2022-03-03 08:00', 1),
(304, '3804677084', '89345678910111213302', 'Linea', 'Disponible', 7, 27, '2022-03-04 08:00', 1),
(305, '3804677181', '89345678910111213303', 'Linea', 'Disponible', 7, 27, '2022-03-05 08:00', 1),
(306, '3804677347', '89345678910111213304', 'Linea', 'Disponible', 7, 27, '2022-03-06 08:00', 1),
(307, '3804677400', '89345678910111213305', 'Linea', 'Disponible', 7, 27, '2022-03-07 08:00', 1),
(308, '3804677439', '89345678910111213306', 'Linea', 'Disponible', 7, 27, '2022-03-08 08:00', 1),
(309, '3804677447', '89345678910111213307', 'Linea', 'Disponible', 7, 27, '2022-03-09 08:00', 1),
(310, '3804677883', '89345678910111213308', 'Linea', 'Disponible', 7, 27, '2022-03-10 08:00', 1),
(311, '3804677975', '89345678910111213309', 'Linea', 'Disponible', 7, 27, '2022-03-11 08:00', 1),
(312, '3804680813', '89345678910111213310', 'Linea', 'Disponible', 7, 27, '2022-03-12 08:00', 1),
(313, '3804680885', '89345678910111213311', 'Linea', 'Disponible', 7, 27, '2022-03-13 08:00', 1),
(314, '3804681270', '89345678910111213312', 'Linea', 'Disponible', 7, 27, '2022-03-14 08:00', 1),
(315, '3804681558', '89345678910111213313', 'Linea', 'Disponible', 7, 27, '2022-03-15 08:00', 1),
(316, '3804681564', '89345678910111213314', 'Linea', 'Disponible', 7, 27, '2022-03-16 08:00', 1),
(317, '3804681569', '89345678910111213315', 'Linea', 'Disponible', 7, 27, '2022-03-17 08:00', 1),
(318, '3804681959', '89345678910111213316', 'Linea', 'Disponible', 7, 27, '2022-03-18 08:00', 1),
(319, '3804682046', '89345678910111213317', 'Linea', 'Disponible', 7, 27, '2022-03-19 08:00', 1),
(320, '3804682118', '89345678910111213318', 'Linea', 'Disponible', 7, 27, '2022-03-20 08:00', 1),
(321, '3804682316', '89345678910111213319', 'Linea', 'Disponible', 7, 27, '2022-03-21 08:00', 1),
(322, '3804682367', '89345678910111213320', 'Linea', 'Disponible', 7, 27, '2022-03-22 08:00', 1),
(323, '3804688018', '89345678910111213321', 'Linea', 'Disponible', 7, 27, '2022-03-23 08:00', 1),
(324, '3804688236', '89345678910111213322', 'Linea', 'Disponible', 7, 27, '2022-03-24 08:00', 1),
(325, '3804688613', '89345678910111213323', 'Linea', 'Disponible', 7, 27, '2022-03-25 08:00', 1),
(326, '3804688638', '89345678910111213324', 'Linea', 'Disponible', 7, 27, '2022-03-26 08:00', 1),
(327, '3804888946', '89345678910111213325', 'Linea', 'Disponible', 7, 27, '2022-03-27 08:00', 1),
(328, '01145457894', '12345678910', 'Linea', 'Asignado', 7, 23, '2023-04-27 17:06:23', 1),
(329, '0154879674', '12345678910', 'Linea', 'Asignado', 7, 21, '2023-04-27 18:34:02', 1),
(330, '01659874842', '65478141245475', 'Linea', 'Asignado', 12, 27, '2023-04-27 18:33:19', 1),
(331, '1145789654', '9843598432143572765618', 'Linea', 'Asignado', 13, 25, '2023-05-02 10:43:07', 1),
(332, '1158789654', '56432138486418674', 'Linea', 'Disponible', 11, 26, '2023-05-02 23:02:11', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `ID_User` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) NOT NULL,
  `Clave` varchar(100) NOT NULL,
  `Estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_User`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `User`
--

INSERT INTO `User` (`ID_User`, `User`, `Clave`, `Estado`) VALUES
(1, 'Admin', 'e3afed0047b08059d0fada10f400c1e5', 1),
(22, 'diego', '078c007bd92ddec308ae2f5115c1775d', 2),
(23, 'lmontero', '1e735698970a4dbe37cb8dfa87028881', 1),
(24, 'ggonzalez', '4dfbda1a02643bba2221d4b725698099', 1),
(25, 'nuevo', 'e26c062fedf6b32834e4de93f9c8b644', 2),
(26, 'Matias', '090c36e3bb39377468363197afb3e91b', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Historial`
--
ALTER TABLE `Historial`
  ADD CONSTRAINT `Historial_ibfk_1` FOREIGN KEY (`Linea_ID`) REFERENCES `Linea` (`ID_Linea`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Historial_ibfk_2` FOREIGN KEY (`Sim_ID`) REFERENCES `Sim` (`ID_Sim`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Historial_ibfk_3` FOREIGN KEY (`Plan_ID`) REFERENCES `Plan` (`ID_Plan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Historial_ibfk_4` FOREIGN KEY (`Equipo_ID`) REFERENCES `Equipo` (`ID_Equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Linea`
--
ALTER TABLE `Linea`
  ADD CONSTRAINT `Linea_ibfk_3` FOREIGN KEY (`Equipo_ID`) REFERENCES `Equipo` (`ID_Equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Linea_ibfk_4` FOREIGN KEY (`Organismo_ID`) REFERENCES `Organismo` (`ID_Organismo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Linea_ibfk_6` FOREIGN KEY (`User_ID`) REFERENCES `User` (`ID_User`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Linea_ibfk_7` FOREIGN KEY (`Sim_ID`) REFERENCES `Sim` (`ID_Sim`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Linea_ibfk_8` FOREIGN KEY (`Plan_ID`) REFERENCES `Plan` (`ID_Plan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Linea_ibfk_9` FOREIGN KEY (`Area_ID`) REFERENCES `Area` (`ID_Area`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Permiso`
--
ALTER TABLE `Permiso`
  ADD CONSTRAINT `Permiso_ibfk_2` FOREIGN KEY (`App_ID`) REFERENCES `App` (`ID_App`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Permiso_ibfk_3` FOREIGN KEY (`User_ID`) REFERENCES `User` (`ID_User`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Sim`
--
ALTER TABLE `Sim`
  ADD CONSTRAINT `Sim_ibfk_1` FOREIGN KEY (`Plan_ID`) REFERENCES `Plan` (`ID_Plan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Sim_ibfk_2` FOREIGN KEY (`Referencia_ID`) REFERENCES `Referencia` (`ID_Referencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
