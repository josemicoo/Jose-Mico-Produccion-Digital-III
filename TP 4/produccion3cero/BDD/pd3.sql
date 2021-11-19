-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 06:48:07
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pd3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `id` int(8) NOT NULL,
  `nombre` varchar(32) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(32) COLLATE utf8mb4_spanish_ci NOT NULL,
  `bio` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id`, `nombre`, `apellido`, `bio`, `imagen`) VALUES
(1, 'Juan', 'Alvarez', '', ''),
(2, '<h1>Christo</h1>', '', '<p><strong>Christo Vladimirov Javacheff</strong>, conocido como Christo, nació el 13 de junio de 1935. El mismo día que la que sería su mujer y socia en el mundo del arte: Jeanne-Claude Denat de Guillebon.</p> <p>Christo era hijo de una familia de la élite búlgara. Al principio, quiso dedicarse al teatro hasta que finalmente se decidió por el arte. Decepcionado con sus estudios se escapó y, escondido en un camión, llegó a París.</p> En este lugar Christo comezó a pintar retratos y venderlos a domicilio. Fue así como conoció a la que sería su pareja, en la peluquería de su madre. Desde ese momento, Christo y Jeanne-Claude ya no se separarían hasta la muerte de ella en 2009. <p>Christo es conocido como el artista envolvedor. Esto se debe a que, en sus obras, se dedicaba a envolver objetos urbanos, rurales y naturales. Este artista comenzó a utilizar esta técnica entre los años 50 y 60.</p> <p>Una época en la que el expresionismo abstracto estaba de moda. Pero, ¿Por qué Christo envolvía construcciones?. Esta pareja quería romper con lo que había en ese momento y realizar un arte más presencial. Al envolver obras, los artistas permitían disfrutar de la pieza así como de los alrededores. De esta forma, hacían que sientieras la importancia del espacio.</p>', 'images/imagen1_3BDD.jpg'),
(5, '<h1>Waler', 'De Maria </h1>', '<br>\r\n<strong> Walter De Maria </strong>\r\nWalter de Maria, era un escultor norteamericano nacido en 1935, en Albany y fallecido en 2013. Estudió arte en la Universidad de California en Berkeley, entre 1953 y 1959. Desde este año hizo sus primeras obras de escultura. En 1960 se acento en Nueva York, realizando su primera exposición individual tres años más tarde. Walter de Maria fue el autor de algunos de los mayores proyectos de Land Art al aire libre, desde el final de la década de 1960, en los cuales el acto de realización, el carácter efímero y su propia forma de degradación de trabajo se asumen como elementos fundamentales de la creación artística. Su último trabajo a gran escala El Campo de relámpagos, un proyecto de Land Art construido sobre una llanura zona semidesértica de nuevo México, en Estados Unidos, entre 1971 y 1977, se compone de cuatrocientos esquejes de siete metros de altura, colocado en un arreglo geométrico riguroso.', 'images/imagen2_3.png\r\n'),
(6, '<h1>Andy', 'Goldsworthy</h1>', '<p>Escultor (y fotógrafo) de Land Art,<strong> Andy Goldsworthy </strong> crea su obra escultórica en lugares específicos y utiliza herramientas y materiales naturales, dando como resultado obras efímeras.Por ello en su arte es de suma importancia la fotografía, que documenta el proceso de creación. </p> <p>Goldsworthy usa flores, hojas, hielo, barro, nieve, piedras, ramas, espinas… Y las manipula solo con sus manos (a veces con sus dientes también). Son famosas sus piedras en equilibrio que se sostienen como por arte de magia.</p><p> El arte para Goldsworthy es quizás una forma de entenderla, de explorarla, de dominarla, aunque sea solo por los instantes que dure la obra. Pero Goldsworthy no busca el paraíso en la tierra, no parece un místico. Su obra parece que busca más bien entender la gravedad, la biología, los materiales… </p>', 'images/imagen3_3.png'),
(7, 'El Pepe', 'Pepichum', '', ''),
(8, 'Mariano', 'Ingerto', '', ''),
(9, 'Lucky', 'Massaro', '', ''),
(10, 'Marco', 'Ruben', '', ''),
(11, 'Franco', 'Cervi', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(8) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(32) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `usuario`, `password`) VALUES
(1, 'Jose', 'Mico', 'jrmico@outlook.com', 'josemicoo', '277d36e06ea6c96ac7848850fe98fc13'),
(2, 'Jose', 'Mico', 'micojoser@gmail.com', 'josermico', '90a50b62439fbde62347a9adac0e39c3'),
(3, 'Marco', 'Ruben', 'marco@ruben.com', 'MR9', '4a8c79ddddd6109289084e80aa41cdf2'),
(4, 'Mariano', 'Ingerto', 'mariano@ingerto.com', 'Mariano', '202cb962ac59075b964b07152d234b70'),
(5, 'elpepin', 'pepito', 'pepin@gmail.com', 'pepin', '202cb962ac59075b964b07152d234b70'),
(6, 'Jose', 'Mico', 'jrmi@fdfd.com', 'pepinto', '202cb962ac59075b964b07152d234b70'),
(7, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'Papi', 'Champ', 'papichamp@mail.com', 'papichamp', '202cb962ac59075b964b07152d234b70'),
(9, 'Mati', 'Di Constanza', 'matidi@gfmai.com', 'mati', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'Josecito', 'Mico', 'pepin@pepin.con', 'pepinito', '202cb962ac59075b964b07152d234b70'),
(11, 'pepe', 'pep', 'pep@pep.com', 'pepe', '202cb962ac59075b964b07152d234b70'),
(12, 'pepe', 'pep', 'pep@pep.com', 'pepe', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'pepe', 'pep', 'pep@pep.com', 'pepe', '250cf8b51c773f3f8dc8b4be867a9a02'),
(14, 'pepe', 'pepito', 'pepepe@pepepep.com', 'pepepe', '202cb962ac59075b964b07152d234b70'),
(15, 'jose', 'mico', 'jmico@mico.com', 'jmico', '202cb962ac59075b964b07152d234b70'),
(16, 'Jose', 'Mico', 'jmico@mico.com', 'jmicoo', '202cb962ac59075b964b07152d234b70'),
(17, 'Jose', 'Mico', 'jmico@mico.com', 'jmicoo', '202cb962ac59075b964b07152d234b70'),
(18, 'Josecito', 'Mico', 'josecito@123.com', 'josecito', '202cb962ac59075b964b07152d234b70'),
(19, 'Josee', 'Micoo', 'josemico@mico.com', 'josemicooo', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
