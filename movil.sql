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
(3, '38043690184', '89345678910111213001', 'Linea', 'Disponible', 7, 21, '2021-05-07 08:00', 1),
(4, '38043469040', '89345678910111213002', 'Linea', 'Disponible', 7, 21, '2021-05-08 08:00', 1),
(5, '01145457894', '12345678910', 'Linea', 'Asignado', 7, 23, '2023-04-27 17:06:23', 1),
(6, '0154879674', '12345678910', 'Linea', 'Asignado', 7, 21, '2023-04-27 18:34:02', 1),
(7, '01659874842', '65478141245475', 'Linea', 'Asignado', 12, 27, '2023-04-27 18:33:19', 1),
(8, '1145789654', '9843598432143572765618', 'Linea', 'Asignado', 13, 25, '2023-05-02 10:43:07', 1),
(9, '1158789654', '56432138486418674', 'Linea', 'Disponible', 11, 26, '2023-05-02 23:02:11', 1);

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
(2, 'nuevo', 'e26c062fedf6b32834e4de93f9c8b644', 2);

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
