-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2016 a las 01:16:39
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kingdom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biblioteca`
--

CREATE TABLE IF NOT EXISTS `biblioteca` (
  `id_usuario` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `fecha_adquisicion` date NOT NULL,
  `fecha_vencimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `biblioteca`
--

INSERT INTO `biblioteca` (`id_usuario`, `id_libro`, `fecha_adquisicion`, `fecha_vencimiento`) VALUES
(1, 3, '0000-00-00', '0000-00-00'),
(1, 5, '0000-00-00', '0000-00-00'),
(1, 6, '0000-00-00', '0000-00-00'),
(1, 7, '0000-00-00', '0000-00-00'),
(1, 12, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE IF NOT EXISTS `libro` (
  `id_libro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `autor` text NOT NULL,
  `genero` text NOT NULL,
  `anio` int(10) NOT NULL,
  `descripcion` text NOT NULL,
  `portada` varchar(100) NOT NULL,
  PRIMARY KEY (`id_libro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `nombre`, `autor`, `genero`, `anio`, `descripcion`, `portada`) VALUES
(1, '1 - Confesiones de un Vampiro', 'Anne Rice', 'Horror', 1976, 'Entrevista con el vampiro es el primer título de la famosa e inquietante serie de Crónicas Vampíricas. Narra la conversión de un joven de Nueva Orleans en eterno habitante de la noche. El protagonista, llevado por el sentimiento de culpabilidad que le ha causado la muerte de su hermano menor, anhela transformarse en un ser maldito. Sin embargo, ya desde el inicio de su vida sobrenatural se siente invadido por una pasión muy humana', 'entr.jpg'),
(2, '2 - Lestat El Vampiro', 'Anne Rice', 'Horror', 1985, 'Inmortal y sediendo de sangre humana, Lestat ansía descubrir el secreto de su inmortalidad. Eso le llevará a recorrer un variado espectro de lugares y entornos sociales que hace de la suya una apasionante biografía: desde el lascivo París del siglo XVIII hasta la Roma de Augusto y la Bretaña de los druidas; desde el Egipto satánico de la prehistoria hasta el mundo frenético de las estrellas del rock... prácticamente toda la historia. ', '3162-1.jpg'),
(3, 'Criptonomicon 1 - El Codigo Enigma', 'Neal Stephenson', 'Juvenil', 1999, 'La trama se desarrolla en dos líneas temporales narradas en paralelo: en una se presenta la labor de un grupo de criptógrafos y especialistas en decepción táctica de los Aliados durante la Segunda Guerra Mundial, dedicados a romper los códigos de comunicaciones del Eje Roma-Berlín-Tokio; la otra trama transcurre en la época actual, en la que descendientes de los protagonistas de la primera trama emplean tecnología punta criptográfica, de telecomunicaciones e informática para construir un paraíso de datos en el sultanato de Kinakuta, una isla ficticia en el mar de Sulú, entre Palawan (Filipinas) y la isla de Borneo.', 'Criptonomicon.jpg'),
(4, 'Forbidden', 'Tabitha Suzuma', 'Romance', 2013, 'No podemos. Si empezamos, ¿cómo vamos a pararlo? Lochan y Maya siempre se han sentido más amigos que hermanos. Ante la incapacidad de cuidarlos de su madre alcohólica y la ausencia de un padre que los abandonó, los dos jóvenes deben hacerse cargo de sus tres hermanos menores y esconder su situación a los servicios sociales, porque ninguno de los dos es mayor de edad. La responsabilidad que comparten y las dificultades a las que se enfrentan les unen, hasta empujarlos a enamorarse. Ambos saben que su relación está mal y que no debe continuar, pero al mismo tiempo no pueden controlar sus emociones y la atracción que los domina.', 'Forbidden.jpg'),
(5, 'Los Lobos Del Invierno', 'Anne Rice', 'Terror', 2014, 'Corre el mes de diciembre y los fuegos de roble arden en los majestuosos hogares de Nideck Point. Para Reuben Golding, ahora imbuido del don del lobo, esta Navidad promete ser como ninguna otra... De las sombras de la mansión surge un fantasma atormentado, implorante, incapaz de hablar pero no de abrazar y desear con cariño desesperado... Mientras Reuben se ve atrapado por las pasiones y anhelos de esta presencia espectral, se desvelan secretos asombrosos que hablan de un inframundo extraño, de espíritus centenarios que poseen sus propias historias antiguas y fantásticas y que hostigan con sus poderes oscuros.', 'Los Lobos Del Invierno.jpg'),
(6, 'Los 100', 'Kass Morgan', 'Juvenil', 2014, 'Hoy vamos a evacuar el Centro de Detención. Cien afortunados vais a tener la oportunidad de hacer historia. Vais a viajar a la Tierra. Cien jóvenes delincuentes han sido seleccionados para participar en la misión de control para recolonizar la Tierra. Son chicos y chicas de edades y procedencias distintas, algunos peligrosos, otros, ahora en peligro. Tras un brutal aterrizaje, los cien llegan a un maravilloso y salvaje planeta que solo han contemplado desde el espacio. Se cree que la atmósfera terrestre es tóxica, inhabitable. Y ha llegado el momento de averiguarlo. Mientras se enfrentan a los peligros de este mundo desconocido, los cien tratarán de formar una comunidad, pero si quieren sobrevivir tendrán que aprender a confiar los unos en los otros e, incluso, deberán dar al amor una segunda oportunidad, otra vez. Novela juvenil.', 'los 100.jpg'),
(7, 'La Chica Del Tren', 'Paula Hawkins', 'Intriga', 2015, 'Rachel toma siempre el tren de las 8.04 h. Cada mañana lo mismo: el mismo paisaje, las mismas casas… y la misma parada en la señal roja. Son solo unos segundos, pero le permiten observar a una pareja desayunando tranquilamente en su terraza. Siente que los conoce y se inventa unos nombres para ellos: Jess y Jason. Su vida es perfecta, no como la suya. Pero un día ve algo. Sucede muy deprisa, pero es suficiente. ¿Y si Jess y Jason no son tan felices como ella cree? ¿Y si nada es lo que parece? Tú no la conoces. Ella a ti, sí. Llevada al cine en 2016 con guión de Erin Cressida Wilson y dirigida por Tate Taylor, tiene como protagonistas principales a Emily Blunt, Rebecca Ferguson y Haley Bennett.', 'La Chica Del Tren.jpg'),
(8, 'El Cuaderno de Noah', 'Nicholas Sparks', 'Romance', 1996, 'Un hombre tiene un cuaderno, traído y llevado mil veces, en su regazo. Una mujer escucha lo que él le lee aunque no acaba de entender. El cuaderno de Noah cuenta la historia de Noah, un sureño que vuelve a casa después de la Segunda Guerra Mundial. Noah intenta que la plantación de la que procede vuelva a su antigua gloria, pero las imágenes de la joven que conoció hace catorce años no paran de perseguirle. No ha conseguido olvidar el verano que pasaron juntos. Es entonces cuando vuelve a dar con ella. Allie está comprometida pero la pasión que sintió por Noah no ha disminuido ni un ápice. Los obstáculos que impidieron su relación continúan existiendo y Allie se ve obligada a enfrentarse a sus sueños con su boda a tan solo unas semanas de suceder.', '9788499184401.jpg'),
(9, 'Hojas De Hierba', 'Walt Whitman', 'Romance', 1855, 'Hojas de hierba (Leaves of Grass, en inglés) (1855) es un libro de poemas del poeta estadounidense Walt Whitman (1819–1892). Entre los textos están «Canto de mí mismo», «Yo canto al cuerpo eléctrico», «De la cuna que se mece eternamente» y, en las posteriores ediciones, la elegía al asesinado presidente Abraham Lincoln (¡Oh, Capitán! ¡Mi Capitán!).', 'whitman.jpg'),
(10, '3 - La Reina de los Condenados', 'Anne Rice', 'Horror', 1988, 'Lestat, convertido en una famosa estrella del rock, despierta con su música a Akasha, la Reina de los Condenados. La que una vez fuera la reina del Nilo, toma a Lestat como amante y mano derecha, y vuelca todas sus fuerzas en la destrucción de vampiros y varones con el fin de que las hembras creen en un nuevo orden. Pese a las súplicas de Lestat, los deseos de la Reina son irrefrenables, y será necesario un sacrificio para acabar con sus ansias de destrucción. ', 'La+reina+de+los+condenados!!+W_.jpg'),
(11, 'La ultima Cancion', 'Nicholas Sparks', 'Romance', 2009, 'Verónica, una joven de 17 años en plena rebeldía adolescente que vive en Manhattan junto a su madre, va a pasar un verano a casa de su padre en una pequeña población de Carolina del Norte. Ella, que nunca ha superado el divorcio de sus padres, también ha renunciado a una brillante carrera como intérprete de piano, algo que su padre le inculcó desde niña ya que él mismo es músico profesional. Durante este verano, descubrirá el amor, la importancia de la amistad verdadera y se reconciliará con la figura paterna.', 'La_última_canción_Nicholas_Sparks_Roca_Bolsillo_2014-baja.jpg'),
(12, 'Un Final Perfecto', 'John Katzenbach', 'Intriga', 2012, 'Apenas unos kilómetros de distancia separan a tres mujeres que no se conocen entre sí. La Pelirroja Uno es una doctora soltera de cerca de cincuenta años; la Pelirroja Dos una profesora de escuela en la treintena y la Pelirroja Tres una estudiante de diecisiete años. Las tres son vulnerables. Las tres son el objetivo de un psicópata obsesionado por demostrar al mundo quién es él en realidad. Ahora que se acerca al final de su vida, necesita llevar a cabo su obra de arte final. Crímenes que serán estudiados en las universidades, de los que se hablará durante décadas. Crímenes perfectos.\r\n\r\nEl asesino les dice a las tres mujeres que va a matarlas. No saben cuándo ni cómo ni dónde. Sólo saben que él está ahí fuera, cada vez más cerca. Que lo sabe todo sobre ellas. Que las ha seguido durante meses. Y que ahora va a comenzar un terrible acoso psicológico que las empujará paso a paso hacia la muerte.\r\n\r\nComo si nadaran entre tiburones, no saben si el peligro está delante o detrás de ellas, si está cerca, si está lejos, si deben seguir nadando o si es mejor quedarse quietas, si deben unirse o actuar por separado... Sólo tienen dos salidas: esconderse y esperar, o luchar e intentar ser más listas que su depredador. ¿Conseguirán las tres mujeres cambiar el final del cuento, o serán devoradas por su peor pesadilla?', 'libro_1351504520.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE IF NOT EXISTS `novedades` (
  `ingreso` int(99) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  PRIMARY KEY (`ingreso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`ingreso`, `nombre`) VALUES
(1, '1 - Confesiones de un Vampiro'),
(2, '2 - Lestat El Vampiro'),
(3, 'Criptonomicon 1 - El Codigo Enigma'),
(4, 'Forbidden'),
(5, 'Los Lobos Del Invierno'),
(6, 'Los 100'),
(7, 'La Chica Del Tren'),
(8, '1 - Confesiones de un Vampiro'),
(9, '2 - Lestat El Vampiro'),
(10, 'Criptonomicon 1 - El Codigo Enigma'),
(11, 'Forbidden'),
(12, 'Los Lobos Del Invierno'),
(13, 'Los 100'),
(14, 'La Chica Del Tren'),
(15, 'Los Lobos Del Invierno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(45) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Tarjeta` int(18) DEFAULT NULL,
  `CV` int(11) DEFAULT NULL,
  `Contra` varchar(50) DEFAULT NULL,
  `tipo_sub` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `correo`, `Nombre`, `Tarjeta`, `CV`, `Contra`, `tipo_sub`) VALUES
(1, '', 'Juan Heza', 20140219, 0, '1719295', '0'),
(2, '', 'nancy', 1622758, 1622758, 'hola', '0'),
(3, '', 'nancy g', 1622758, 1622758, '1622758', '0'),
(4, 'juanehza@hotmail.com', 'juan', 45, 46576879, 'jkhdzvl', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
