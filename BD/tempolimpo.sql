-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.25-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.2.0.6576
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para tempolimpo
CREATE DATABASE IF NOT EXISTS `tempolimpo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `tempolimpo`;

-- Volcando estructura para tabla tempolimpo.roles_usuario
CREATE TABLE IF NOT EXISTS `roles_usuario` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_rol` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `crea_rol` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `actu_rol` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `elim_rol` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='espacio exclusivo para los roles de usuario en el sistema tempolimpo';

-- Volcando datos para la tabla tempolimpo.roles_usuario: ~1 rows (aproximadamente)
INSERT INTO `roles_usuario` (`id_rol`, `nombre_rol`, `estado_rol`, `crea_rol`, `actu_rol`, `elim_rol`) VALUES
	(1, 'desarrollador', 'Activo', NULL, NULL, NULL);

-- Volcando estructura para tabla tempolimpo.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_doc_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `num_doc_usu` bigint(20) NOT NULL DEFAULT 0,
  `nombre_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `telefono_usu` bigint(20) NOT NULL DEFAULT 0,
  `correo_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `pwd_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `rol_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `crea_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `actu_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `del_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `estado_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='espacio exclusivo para los usuarios del sistema tempolimpo';

-- Volcando datos para la tabla tempolimpo.usuarios: ~0 rows (aproximadamente)
INSERT INTO `usuarios` (`id_usu`, `tipo_doc_usu`, `num_doc_usu`, `nombre_usu`, `telefono_usu`, `correo_usu`, `pwd_usu`, `rol_usu`, `crea_usu`, `actu_usu`, `del_usu`, `estado_usu`) VALUES
	(1, 'Cc', 1119217998, 'Jose Julio Bohorquez Delgado', 3178773186, 'bd@gmail.com', 'bdjj2355', '', '0', '0', '0', 'Activo');

-- Volcando estructura para tabla tempolimpo.zonas
CREATE TABLE IF NOT EXISTS `zonas` (
  `id_zona` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_zona` bigint(20) DEFAULT NULL,
  `nombre_zona` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_zona` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `crea_zona` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edit_zona` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `elim_zona` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_zona`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='espacio exclusivo para las zonas y codigos de zona en tempolimpo';

-- Volcando datos para la tabla tempolimpo.zonas: ~0 rows (aproximadamente)
INSERT INTO `zonas` (`id_zona`, `codigo_zona`, `nombre_zona`, `estado_zona`, `crea_zona`, `edit_zona`, `elim_zona`) VALUES
	(1, 119, 'Codito Norte', 'Activa', NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
