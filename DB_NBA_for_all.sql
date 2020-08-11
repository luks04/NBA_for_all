-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-08-2020 a las 17:08:44
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `NBA_for_all`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EQUIPO`
--

CREATE TABLE `EQUIPO` (
  `Id` int(2) NOT NULL,
  `Ruta` varchar(200) DEFAULT NULL,
  `Equipo` varchar(20) DEFAULT NULL,
  `Ganados` int(10) DEFAULT NULL,
  `Perdidos` int(10) DEFAULT NULL,
  `Local` varchar(10) DEFAULT NULL,
  `Visitante` varchar(10) DEFAULT NULL,
  `Rach` varchar(10) DEFAULT NULL,
  `Conferencia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `EQUIPO`
--

INSERT INTO `EQUIPO` (`Id`, `Ruta`, `Equipo`, `Ganados`, `Perdidos`, `Local`, `Visitante`, `Rach`, `Conferencia`) VALUES
(1, 'img/logos_equipos/WesternConference/logo_los_angeles_lakers.png', 'Lakers', 49, 44, '23 - 8', '26 - 6', 'L3', 'WESTERN CONFERENCE'),
(2, 'img/logos_equipos/WesternConference/logo_los_angeles_clippers.png', 'Clippers', 44, 20, '26 - 7', '19 - 13', 'W1', 'WESTERN CONFERENCE'),
(3, 'img/logos_equipos/WesternConference/logo_denver_nuggets.png', 'Nuggets', 43, 22, '21 - 8', '18 -14', 'L1', 'WESTERN CONFERENCE'),
(4, 'img/logos_equipos/WesternConference/logo_utah_jazz.png', 'Jazz', 41, 23, '21 10', '20 - 13', 'L1', 'WESTERN CONFERENCE'),
(5, 'img/logos_equipos/WesternConference/logo_oklahoma_city_thunder.png', 'Thunder', 40, 24, '20 - 13', '20 - 11', 'W3', 'WESTERN CONFERENCE'),
(6, 'img/logos_equipos/WesternConference/logo_houston_rockets.png', 'Rockets', 40, 24, '22 - 10', '18 -14 ', 'W1', 'WESTERN CONFERENCE'),
(7, 'img/logos_equipos/WesternConference/logo_dallas_mavericks.png', 'Mavericks', 40, 27, '19 - 15', '21 - 12', 'W1', 'WESTERN CONFERENCE'),
(8, 'img/logos_equipos/WesternConference/logo_memphis_grizzlies.png', 'Grizzlies', 32, 33, '18 -15', '14 - 18', 'L1', 'WESTERN CONFERENCE'),
(9, 'img/logos_equipos/WesternConference/logo_portland_trail_blazers.png', 'Trail Blazers', 29, 37, '18 - 14', '11 - 23', 'W1', 'WESTERN CONFERENCE'),
(10, 'img/logos_equipos/WesternConference/logo_new_orleans_pelicans.png', 'Pelicans', 28, 36, '13 - 19', '15 - 17', 'W2', 'WESTERN CONFERENCE'),
(11, 'img/logos_equipos/WesternConference/logo_sacramento_kings.png', 'Kings', 28, 36, '14 - 17', '14 - 19', 'L1', 'WESTERN CONFERENCE'),
(12, 'img/logos_equipos/WesternConference/logo_san_antonio_spurs.png', 'Spurs', 27, 36, '16 - 14', '11 - 22', 'W1', 'WESTERN CONFERENCE'),
(13, 'img/logos_equipos/WesternConference/logo_phoenix_suns.png', 'Suns', 26, 39, '13 - 22', '13 - 17', 'L1', 'WESTERN CONFERENCE'),
(14, 'img/logos_equipos/WesternConference/logo_minnesota_timberwolves.png', 'Timberwolves', 19, 45, '8 - 24', '11 - 21', 'L3', 'WESTERN CONFERENCE'),
(15, 'img/logos_equipos/WesternConference/logo_golden_state_warriors.png', 'Warriors', 15, 50, '8 - 26', '7 - 24', 'L1', 'WESTERN CONFERENCE'),
(16, 'img/logos_equipos/EasternConference/logo_milwaukee_bucks.png', 'Bucks', 45, 12, '28 - 3', '25 - 9', 'L3', 'EASTERN CONFERENCE'),
(17, 'img/logos_equipos/EasternConference/logo_toronto_raptors.png', 'Raptors', 46, 18, '23 - 9', '23 - 9', 'W4', 'EASTERN CONFERENCE'),
(18, 'img/logos_equipos/EasternConference/logo_boston_celtics.png', 'Celtics', 43, 21, '23 - 9', '20 - 12', 'W1', 'EASTERN CONFERENCE'),
(19, 'img/logos_equipos/EasternConference/logo_miami_heat.png', 'Heat', 41, 24, '27 - 5', '14 - 19', 'L1', 'EASTERN CONFERENCE'),
(20, 'img/logos_equipos/EasternConference/logo_indian_pacers.png', 'Pacers', 39, 26, '21 - 11', '18 - 15', 'L1', 'EASTERN CONFERENCE'),
(21, 'img/logos_equipos/EasternConference/logo_philadelphia_76ers.png', '76ers', 39, 20, '28 - 2', '8 - 24', 'W1', 'EASTERN CONFERENCE'),
(22, 'img/logos_equipos/EasternConference/logo_brooklyn_nets.png', 'Nets', 30, 34, '18 - 14 ', '12 - 20', 'W3', 'EASTERN CONFERENCE'),
(23, 'img/logos_equipos/EasternConference/logo_orlando_magic.png', 'Magic', 30, 35, '16 - 15', '14 - 20', 'W3', 'EASTERN CONFERENCE'),
(24, 'img/logos_equipos/EasternConference/logo_washigton_wizards.png', 'Wizards', 24, 40, '16 - 16', '8 - 24', 'W1', 'EASTERN CONFERENCE'),
(25, 'img/logos_equipos/EasternConference/logo_charlotte_hornets.png', 'Hornets', 23, 42, '8 - 21', '13 - 21', 'W1', 'EASTERN CONFERENCE'),
(26, 'img/logos_equipos/EasternConference/logo_chicago_bulls.png', 'Bulls', 22, 43, '14 - 20', '8 - 23', 'W1', 'EASTERN CONFERENCE'),
(27, 'img/logos_equipos/EasternConference/logo_new_york_knicks.png', 'Knicks', 21, 45, '11 - 22', '10 - 23', 'W1', 'EASTERN CONFERENCE'),
(28, 'img/logos_equipos/EasternConference/logo_detroit_pistons.png', 'Pistons', 20, 46, '11 - 22', '9 - 24', 'L5', 'EASTERN CONFERENCE'),
(29, 'img/logos_equipos/EasternConference/logo_atlanta_hawks.png', 'Hawks', 20, 47, '14 - 20', '6 - 27', 'L1', 'EASTERN CONFERENCE'),
(30, 'img/logos_equipos/EasternConference/logo_cleveland_cavaliers.png', 'Cavaliers', 200, 46, '11 - 25', '8 - 21', 'L1', 'EASTERN CONFERENCE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `HOME`
--

CREATE TABLE `HOME` (
  `Id` int(11) NOT NULL,
  `Contenido` varchar(500) NOT NULL,
  `Equipo1` varchar(20) DEFAULT NULL,
  `Equipo2` varchar(20) DEFAULT NULL,
  `Tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `HOME`
--

INSERT INTO `HOME` (`Id`, `Contenido`, `Equipo1`, `Equipo2`, `Tipo`) VALUES
(1, 'PRÓXIMOS ENCUENTROS', NULL, NULL, 'Titulo1_col1'),
(2, 'JUGADA DE LA SEMANA', NULL, NULL, 'Titulo1_col2'),
(3, 'NBA Stat Leaders 2019-20', NULL, NULL, 'Titulo2'),
(4, 'Este viernes jugarán los Cleveland Cavaliers vs Golden Sate Warriors.', 'Cavaliers', 'Warriors', 'Info'),
(6, 'Este sábado jugarán San Antonio Spurs vs Los Milwaukee Bucks.', 'Spurs', 'Bucks', 'Info'),
(7, '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/CDV2AwOeeis\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL, 'Video'),
(8, 'Mañana jugarán los Orlando Magic vs Cleveland Cavaliers.', 'Magic', 'Cavaliers', 'Info');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `IMAGEN`
--

CREATE TABLE `IMAGEN` (
  `Id` int(1) NOT NULL,
  `Ruta_img` varchar(34) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Seccion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `IMAGEN`
--

INSERT INTO `IMAGEN` (`Id`, `Ruta_img`, `Nombre`, `Seccion`) VALUES
(1, 'img/news/new_2.jpg', NULL, 'news'),
(2, 'img/news/new_3.jpg', NULL, 'news'),
(3, 'img/news/new_1.jpg', NULL, 'news'),
(4, 'img/rem_legends/kobe_bryant.jpeg', NULL, 'legend_1'),
(5, 'img/rem_legends/michael_jordan.jpg', NULL, 'legend_2'),
(6, 'img/carousel/carousel_2.jpg', 'Jordan vs Shaquille Oneal', 'carousel'),
(8, 'img/carousel/carousel_3.jpg', 'Stephen Curry', 'carousel'),
(9, 'img/nba_logo.png', NULL, 'logo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LEGENDS`
--

CREATE TABLE `LEGENDS` (
  `Id` int(11) NOT NULL,
  `Contenido` varchar(200) NOT NULL,
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `LEGENDS`
--

INSERT INTO `LEGENDS` (`Id`, `Contenido`, `Tipo`) VALUES
(1, 'REMEMBERING LEGENDS', 'Titulo'),
(2, 'Kobe Bryant', 'Titulo1_col1'),
(3, 'Michael Jordan', 'Titulo1_col2'),
(4, '\"Siempre tienes que estar al límite. Tienes que hacer cada entrenamiento, cada partido como si fuera el último\"', 'Frase1'),
(5, 'Kobe Bryant', 'NameFrase1'),
(6, '\"El talento gana partidos, pero el trabajo en equipo e inteligencia gana campeonatos\"', 'Frase2'),
(7, 'Michael Jordan', 'NameFrase2'),
(8, 'Logros y Premios', 'Titulo2_col1'),
(9, 'Logros y Premios', 'Titulo2_col2'),
(10, '4', 'Img'),
(11, '5', 'Img');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LOGRO`
--

CREATE TABLE `LOGRO` (
  `Id` int(2) NOT NULL,
  `Logros` varchar(100) DEFAULT NULL,
  `Leyenda` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `LOGRO`
--

INSERT INTO `LOGRO` (`Id`, `Logros`, `Leyenda`) VALUES
(1, '20 Temporadas', 'legend1'),
(2, '15 Playoffs	', 'legend1'),
(3, '7 Finales', 'legend1'),
(4, '5 Títulos', 'legend1'),
(5, '1 MVP de la NBA', 'legend1'),
(6, '2 MVP de las Finales', 'legend1'),
(7, '2 veces máximo anotador de la NBA', 'legend1'),
(8, '18 veces elegido para el All-Star Game', 'legend1'),
(9, '4 MVP del All-Star Game', 'legend1'),
(10, '2 veces segundo mejor equipo de la NBA', 'legend1'),
(11, '2 veces tercer mejor equipo de la NBA', 'legend1'),
(12, '9 veces mejor equipo defensivo de la NBA', 'legend1'),
(13, '3 veces segundo equipo defensivo de la NBA', 'legend1'),
(14, '1 vez segundo equipo de novatos de la NBA', 'legend1'),
(15, '17 veces jugador del mes de la NBA', 'legend1'),
(16, '33 veces jugador de la semana de la NBA', 'legend1'),
(17, '11 veces mejor equipo de la NBA', 'legend1'),
(18, '15 Temporadas', 'legend2'),
(19, '13 Playoffs', 'legend2'),
(20, '6 Finales', 'legend2'),
(21, '6 Títulos', 'legend2'),
(22, '5 MVP de la NBA', 'legend2'),
(23, '6 MVP de las Finales', 'legend2'),
(24, '10 veces máximo anotador de la NBA', 'legend2'),
(25, '14 veces elegido para el All-Star Game', 'legend2'),
(26, '3 veces máximo recuperador de balones de la NBA', 'legend2'),
(27, '3 MVP del All-Star Game', 'legend2'),
(28, '1 vez segundo mejor equipo de la NBA', 'legend2'),
(29, '9 veces mejor equipo defensivo de la NBA', 'legend2'),
(30, '1 vez mejor jugador defensivo de la NBA', 'legend2'),
(31, '1 vez mejor equipo de novatos de la NBA', 'legend2'),
(32, '1 vez novato del año en la NBA', 'legend2'),
(33, '16 veces jugador del mes de la NBA', 'legend2'),
(34, '25 veces jugador de la semana de la NBA', 'legend2'),
(35, '10 veces mejor equipo de la NBA', 'legend2'),
(36, '7 veces líder en eficiencia', 'legend2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `NEWS`
--

CREATE TABLE `NEWS` (
  `Id` int(11) NOT NULL,
  `Contenido` varchar(500) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Titulo` varchar(200) DEFAULT NULL,
  `Subtitulo` varchar(300) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL,
  `Img` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `NEWS`
--

INSERT INTO `NEWS` (`Id`, `Contenido`, `Tipo`, `Titulo`, `Subtitulo`, `Link`, `Img`) VALUES
(1, 'NEWS', 'Titulo', NULL, NULL, NULL, NULL),
(3, 'Los Bucks se convirtieron el domingo en el primer equipo de la NBA en asegurar su presencia en los playoffs gracias a la derrota de Washington frente a Chicago. Los Wizards se encuentran en el noveno lugar de la Conferencia Este que los Bucks han encabezado desde hace meses.', 'News', 'La NBA ya tiene al primer invitado a los playoffs', 'Tan solo una semana después del Juego de Estrellas, los Bucks de Milwaukee han obtenido un boleto para la postemporada.', 'https://www.chicagotribune.com/espanol/deportes/sns-es-milwaukee-bucks-playoffs-nba-20200224-sbwznpqdvbejfolly5zgxu2cba-story.html', 2),
(4, 'La última gran ofrenda a Kobe Bryant, que tuvo lugar en el Staples Center este lunes, resultó uno de los episodios más emotivos que se recuerdan en la NBA moderna. El pabellón angelino lució atestado de fieles a la causa (dentro y fuera del recinto), compañeros de profesión, leyendas de este deporte y también otras personalidades que quisieron rendir el último homenaje oficial a la leyenda de los Lakers.', 'News', 'Homenaje a Kobe Bryant', 'Este lunes se celebró el homenaje (Celebration of Life) en el Staples Center de Los Angeles', 'https://www.nbamaniacs.com/noticias/homenaje-a-kobe-bryant-la-nba-estados-unidos-y-el-mundo-rendidos-a-la-leyenda/', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TEAMSRANKING`
--

CREATE TABLE `TEAMSRANKING` (
  `Id` int(11) NOT NULL,
  `Contenido` varchar(100) NOT NULL,
  `Tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `TEAMSRANKING`
--

INSERT INTO `TEAMSRANKING` (`Id`, `Contenido`, `Tipo`) VALUES
(1, 'TEAMS RANKING', 'Titulo'),
(2, 'EASTERN CONFERENCE', 'Subtitulo1'),
(3, 'WESTERN CONFERENCE', 'Subtitulo2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIO`
--

CREATE TABLE `USUARIO` (
  `Id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `User_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `USUARIO`
--

INSERT INTO `USUARIO` (`Id`, `Username`, `Email`, `Password`, `User_level`) VALUES
(1, 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'editor_contenido', 'editor@gmail.com', 'ab56b4d92b40713acc5af89985d4b786', 2),
(20, 'luks04', 'luks@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `EQUIPO`
--
ALTER TABLE `EQUIPO`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `HOME`
--
ALTER TABLE `HOME`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `IMAGEN`
--
ALTER TABLE `IMAGEN`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `LEGENDS`
--
ALTER TABLE `LEGENDS`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `LOGRO`
--
ALTER TABLE `LOGRO`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `NEWS`
--
ALTER TABLE `NEWS`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `TEAMSRANKING`
--
ALTER TABLE `TEAMSRANKING`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `HOME`
--
ALTER TABLE `HOME`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `IMAGEN`
--
ALTER TABLE `IMAGEN`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `LEGENDS`
--
ALTER TABLE `LEGENDS`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `LOGRO`
--
ALTER TABLE `LOGRO`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `NEWS`
--
ALTER TABLE `NEWS`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `TEAMSRANKING`
--
ALTER TABLE `TEAMSRANKING`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
