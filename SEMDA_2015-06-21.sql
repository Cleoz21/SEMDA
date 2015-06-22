# ************************************************************
# Sequel Pro SQL dump
# Versi�n 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.25)
# Base de datos: SEMDA
# Tiempo de Generaci�n: 2015-06-22 02:23:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla empleados
# ------------------------------------------------------------

DROP TABLE IF EXISTS `empleados`;

CREATE TABLE `empleados` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `sueldo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;

INSERT INTO `empleados` (`id`, `nombre`, `sueldo`)
VALUES
	(1,'Juan',1000),
	(2,'Javier',800),
	(3,'Jaime',1250);

/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla fichaAlumno
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fichaAlumno`;

CREATE TABLE `fichaAlumno` (
  `rut` int(8) unsigned NOT NULL,
  `direccion` varchar(100) NOT NULL DEFAULT '',
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `telefono` int(10) unsigned NOT NULL,
  `nombreFamiliar` varchar(100) NOT NULL DEFAULT '',
  `carrera` varchar(100) NOT NULL DEFAULT '',
  `añoIngreso` int(4) NOT NULL,
  `especialista` varchar(20) DEFAULT NULL,
  `seleccion` int(1) unsigned DEFAULT NULL,
  `observaciones` varchar(240) DEFAULT NULL,
  `diagnostico` varchar(240) DEFAULT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `fichaAlumno` WRITE;
/*!40000 ALTER TABLE `fichaAlumno` DISABLE KEYS */;

INSERT INTO `fichaAlumno` (`rut`, `direccion`, `nombre`, `telefono`, `nombreFamiliar`, `carrera`, `añoIngreso`, `especialista`, `seleccion`, `observaciones`, `diagnostico`)
VALUES
	(18015730,'Navío San Martín #395. San Roque.','Manuel Valdivia Espósito',8876876,'Teresa Espósito Troncoso','Ingeniería Civil Informática',2010,'',0,NULL,NULL),
	(19090655,'No me acuerdo bien. Villa Alemana','Valentina Javiera Inostroza Neira',1234567,'Pamela Neira','Terapia Ocupacional',2014,'',1,'','');

/*!40000 ALTER TABLE `fichaAlumno` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
