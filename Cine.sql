-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for cine
CREATE DATABASE IF NOT EXISTS `cine` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cine`;

-- Dumping structure for table cine.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `IDAdministrador` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  PRIMARY KEY (`IDAdministrador`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table cine.administrador: ~2 rows (approximately)
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` (`IDAdministrador`, `email`, `pass`, `nombre`, `apellido`) VALUES
	(1, 'root@cinema.com', 'root', 'Clint', 'Eastwood'),
	(2, 'admin@cinema.com', 'admin', 'Wes', 'Anderson');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;

-- Dumping structure for procedure cine.AgregarFuncion
DELIMITER //
CREATE PROCEDURE `AgregarFuncion`( lfecha DATE, lhorario VARCHAR(10), lpelicula VARCHAR(100), lsala VARCHAR(100) )
BEGIN
	SELECT @lIDPelicula := IDPelicula FROM Peliculas WHERE nombre = lpelicula ORDER BY nombre LIMIT 1;
	SELECT @lIDSala := IDSala FROM Salas WHERE nombre = lsala ORDER BY nombre LIMIT 1;
	INSERT INTO funciones (IDFuncion, fecha, horario, IDPelicula, IDSala)
	VALUES (DEFAULT, lfecha, lhorario, @lIDPelicula, @lIDSala);
	
END//
DELIMITER ;

-- Dumping structure for procedure cine.AgregarPelicula
DELIMITER //
CREATE PROCEDURE `AgregarPelicula`( lnombre VARCHAR(100), lclasificacion VARCHAR(30),
lduracion VARCHAR(10), lsinopsis TINYTEXT, limg VARCHAR(200) )
Begin

IF  NOT EXISTS (SELECT 1 FROM Peliculas WHERE nombre = lnombre) THEN

		INSERT IGNORE INTO Peliculas (IDPelicula , nombre, clasificacion, duracion, sinopsis, img)
		VALUES (default, lnombre, lclasificacion, lduracion, lsinopsis, limg);

End IF ;
END//
DELIMITER ;

-- Dumping structure for function cine.AgregarSala
DELIMITER //
CREATE FUNCTION `AgregarSala`( lnombre VARCHAR(100) ) RETURNS int(11)
BEGIN

   DECLARE income INT;

   SET income = 0;

   IF NOT EXISTS(SELECT nombre FROM salas WHERE nombre = lnombre ORDER BY nombre LIMIT 1) THEN
   		INSERT INTO Salas (IDSala, nombre) VALUES (DEFAULT, lnombre);
         SET income = 1;
    ELSE
        SET income = 0;
    END IF;
   RETURN income;

END//
DELIMITER ;

-- Dumping structure for table cine.asientos
CREATE TABLE IF NOT EXISTS `asientos` (
  `IDAsiento` int(11) NOT NULL AUTO_INCREMENT,
  `disponibles` int(11) NOT NULL,
  `ocupados` int(11) NOT NULL,
  PRIMARY KEY (`IDAsiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cine.asientos: ~0 rows (approximately)
/*!40000 ALTER TABLE `asientos` DISABLE KEYS */;
/*!40000 ALTER TABLE `asientos` ENABLE KEYS */;

-- Dumping structure for table cine.boleto
CREATE TABLE IF NOT EXISTS `boleto` (
  `IDBoleto` int(11) NOT NULL AUTO_INCREMENT,
  `fila` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `IDAsiento` int(11) NOT NULL,
  PRIMARY KEY (`IDBoleto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cine.boleto: ~0 rows (approximately)
/*!40000 ALTER TABLE `boleto` DISABLE KEYS */;
/*!40000 ALTER TABLE `boleto` ENABLE KEYS */;

-- Dumping structure for table cine.funciones
CREATE TABLE IF NOT EXISTS `funciones` (
  `IDFuncion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `horario` varchar(10) NOT NULL,
  `IDPelicula` int(11) NOT NULL,
  `IDSala` int(11) NOT NULL,
  PRIMARY KEY (`IDFuncion`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table cine.funciones: ~7 rows (approximately)
/*!40000 ALTER TABLE `funciones` DISABLE KEYS */;
INSERT INTO `funciones` (`IDFuncion`, `fecha`, `horario`, `IDPelicula`, `IDSala`) VALUES
	(4, '2022-03-30', '13:35', 12, 5),
	(6, '2022-04-04', '21:03', 14, 9),
	(7, '2022-04-05', '15:15', 13, 1),
	(8, '2022-04-05', '22:15', 13, 5),
	(9, '2022-04-04', '15:45', 1, 4),
	(10, '2022-04-05', '18:09', 13, 2),
	(11, '2022-03-28', '18:11', 13, 1);
/*!40000 ALTER TABLE `funciones` ENABLE KEYS */;

-- Dumping structure for procedure cine.Login
DELIMITER //
CREATE PROCEDURE `Login`(
	IN inemail VARCHAR(100),
	IN inpass VARCHAR(100),
	OUT lIDAdministrador INT,
	OUT lemail VARCHAR(100),
	OUT lpass VARCHAR(100),
	OUT lnombre VARCHAR(100),
	OUT lapellido VARCHAR(100))
BEGIN
		-- id
		SELECT
            IDAdministrador INTO lIDAdministrador
        FROM 
				administrador
        WHERE
            email = inemail 
				AND pass = inpass;

		-- email
		SELECT
            email INTO lemail
        FROM 
				administrador
        WHERE
            email = inemail 
				AND pass = inpass;

		-- pass
		SELECT
            pass INTO lpass
        FROM 
				administrador
        WHERE
            email = inemail 
				AND pass = inpass;

		-- nombre
		SELECT
            nombre INTO lnombre
        FROM 
				administrador
        WHERE
            email = inemail 
				AND pass = inpass;
				
		-- apellido
		SELECT
            apellido INTO lapellido
        FROM 
				administrador
        WHERE
            email = inemail 
				AND pass = inpass;

END//
DELIMITER ;

-- Dumping structure for function cine.PeliculaExiste
DELIMITER //
CREATE FUNCTION `PeliculaExiste`( lnombre VARCHAR(100), limg VARCHAR(200) ) RETURNS int(11)
BEGIN

   DECLARE income INT;

   SET income = 0;

   IF NOT EXISTS(SELECT nombre, img FROM Peliculas WHERE nombre = lnombre AND img = limg ORDER BY nombre LIMIT 1) THEN
        SET income = 1;
    ELSE
        SET income = 0;
    END IF;
   RETURN income;

END//
DELIMITER ;

-- Dumping structure for table cine.peliculas
CREATE TABLE IF NOT EXISTS `peliculas` (
  `IDPelicula` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `clasificacion` varchar(30) NOT NULL,
  `duracion` varchar(10) NOT NULL,
  `sinopsis` tinytext,
  `img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`IDPelicula`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table cine.peliculas: ~7 rows (approximately)
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` (`IDPelicula`, `nombre`, `clasificacion`, `duracion`, `sinopsis`, `img`) VALUES
	(1, 'Lawrence of Arabia', 'PG-13', '4:00', 'T.E. Lawrence, un oficial británico, es enviado al desierto para participar en una campaña de apoyo a los árabes contra Turquía. Los nativos adoran a Lawrence porque ha demostrado sobradamente ser un amante del desierto y del pueblo árabe.', 'Awrence.png'),
	(2, 'Star Wars V', 'PG', '2:30', 'Son tiempos adversos para la rebelión. Aunque la Estrella de la Muerte ha sido destruida, las tropas imperiales han hecho salir a las fuerzas rebeldes de sus bases ocultas y los persiguen a través de la galaxia.', 'wars.png'),
	(3, 'Toy Story', 'PG-13', '2:00', 'Cuando su dueño Andy se prepara para ir a la universidad, el vaquero Woody, el astronauta Buzz y el resto de sus amigos juguetes comienzan a preocuparse por su incierto futuro.', 'Story.png'),
	(4, 'Adoption', 'R', '1:30', 'Una mujer de mediana edad, viuda y solitaria, forma una amistad inusual con una joven de un hogar de niños.', 'adoption.png'),
	(5, 'Shiva', 'R', '2:30', 'Lorem Ipsum', 'shiva.png'),
	(12, 'They Call me Trinity', 'PG-13', '4:00', 'Dos hermanos con poco talento fallan en su intento de cumplir el último deseo de su padre de convertirse en famosos criminales.', 'trinity.png'),
	(13, 'Batmamn', 'G', '1:10', 'dsaadsfds', 'batman.png');
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;

-- Dumping structure for table cine.salas
CREATE TABLE IF NOT EXISTS `salas` (
  `IDSala` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`IDSala`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table cine.salas: ~8 rows (approximately)
/*!40000 ALTER TABLE `salas` DISABLE KEYS */;
INSERT INTO `salas` (`IDSala`, `nombre`) VALUES
	(1, 'Sala 1'),
	(2, 'Sala 2'),
	(3, 'Sala 3'),
	(4, 'Sala 4'),
	(5, 'Sala 5'),
	(6, 'Sala 6'),
	(7, 'Sala H'),
	(9, 'Sala G');
/*!40000 ALTER TABLE `salas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
