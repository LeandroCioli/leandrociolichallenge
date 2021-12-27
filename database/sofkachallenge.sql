-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2021 a las 23:35:28
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sofkachallenge`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `passwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idAdmin`, `username`, `passwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `dificultad` varchar(15) NOT NULL,
  `pregunta` varchar(100) NOT NULL,
  `respuesta` varchar(100) NOT NULL,
  `incorrecta1` varchar(100) NOT NULL,
  `incorrecta2` varchar(100) NOT NULL,
  `incorrecta3` varchar(100) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`dificultad`, `pregunta`, `respuesta`, `incorrecta1`, `incorrecta2`, `incorrecta3`, `imagen`) VALUES
('Muy Facil', '¿Cuál es la hormona que les cambia el tono de voz a los hombres?', 'Testosterona', 'Progesterona', 'Inhibina', 'Melatonina', NULL),
('Muy Facil', '¿Qué codificación utiliza solamente 0 y 1?', 'Binario', 'Decimal', 'Octal', 'Hexadecimal', NULL),
('Muy Facil', '¿Cuál es el símbolo químico del hierro?', 'Fe', 'Hi', 'Fi', 'Hu', NULL),
('Muy Facil', '¿Qué animal siempre cae de pie?', 'Gato', 'Perro', 'Gallina', 'Ratón', NULL),
('Muy Facil', '¿Qué ciencia se ocupa del clima?', 'Meteorología', 'Antropología', 'Física', 'Geología', NULL),
('Facil', '¿Qué personaje de Disney perdió su zapato de cristal?', 'Cenicienta', 'Tiana', 'Blancanieves', 'La Sirenita', NULL),
('Facil', '¿Qué Beatle fue asesinado por un fan?', 'Jonh Lennon', 'George Harrison', 'Ringo Star', 'Ninguno', NULL),
('Facil', '¿Quién es Mario Casas?', 'Un Actor', 'Un Científico', 'Un Futbolísta', 'Un Político', NULL),
('Facil', '¿Cómo se llama la bebé de Los Simpsons?', 'Maggie', 'Marge', 'Lisa', 'Magi', NULL),
('Facil', '¿Cuál es la nacionalidad de la cantante Shakira?', 'Colombiana', 'Venezolana', 'Ecuatoriana', 'Peruana', NULL),
('Intermedio', '¿Cómo se llama el ayudante de Iron Man?', 'Jarvis', 'Tony', 'Jef', 'Alex', NULL),
('Intermedio', '¿Qué son los triglicéridos?', 'Lípidos', 'Glúcidos', 'Proteínas', 'Vitaminas', NULL),
('Intermedio', '¿Cuánto pesa aproximadamente un bebé elefante al nacer?', 'Entre 70 Y 100 Kilos', 'Entre 120 Y 150 Kilos', 'Entre 50 Y 70 Kilos', 'Entre 100 Y 120 Kilos', NULL),
('Intermedio', '¿Qué metal es líquido a temperatura ambiente?', 'Mercurio', 'Hierro', 'Wolframio', 'Níquel', NULL),
('Intermedio', '¿Cuál es el mamífero más grande conocido hasta la actualidad?', 'Ballena Azul', 'Cachalote', 'Elefante', 'Rinoceronte', NULL),
('Dificil', '¿En qué año viajó el primer hombre a la luna?', '1969', '1968', '1979', '1957', NULL),
('Dificil', '¿Cuál es la distribución de Linux más usada?', 'Ubuntu', 'Debian', 'Fedora', 'Mint', NULL),
('Dificil', '¿Quién fue el inventor de la bombilla?', 'Edison', 'Newton', 'Fahrenheit', 'Janssen', NULL),
('Dificil', '¿Qué hay que ponerle a un vidrio para convertirlo en un espejo?', 'Aluminio', 'Mercurio', 'Plomo', 'Yodo', NULL),
('Dificil', '¿Quién postuló la ley del principio de inercia?', 'Isaac Newton', 'Albert Einstein', 'Víctor Alvarado', 'John Kennedy', NULL),
('Muy Dificil', '¿Cuál es la capital de Vizcaia, País Vasco?', 'Bilbao', 'Sopuerta', 'Donostia', 'Vitoria', NULL),
('Muy Dificil', '¿En qué año se fundó The Walt Disney Company?', '1923', '1972', '2000', '1984', NULL),
('Muy Dificil', '¿Cuál de los siguientes órganos NO es parte del sistema inmunológico?', 'Esófago', 'Médula Ósea', 'Bazo', 'Timo', NULL),
('Muy Dificil', '¿Quién descubrió el sistema binario (base 2)?', 'Gottfried W. Leibnitz', 'Euclides De Alejandría', 'Arquímedes De Siracusa', 'Apolonio De Perge', NULL),
('Muy Dificil', '¿Quién recibió en 2009 el Premio Nobel de la Paz?', 'Barack Obama', 'Bill Clinton', 'Homer Simpson', 'Michelle Obama', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `IdUser` int(11) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Passwd` varchar(200) NOT NULL,
  `Dinero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
