# SQL-Front 5.1  (Build 4.16)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: p21
# ------------------------------------------------------
# Server version 5.5.5-10.4.24-MariaDB

#
# Source for table torcedores
#

DROP TABLE IF EXISTS `torcedores`;
CREATE TABLE `torcedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `documento` varchar(30) DEFAULT NULL,
  `cep` varchar(30) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `uf` varchar(10) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ativo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table torcedores
#

LOCK TABLES `torcedores` WRITE;
/*!40000 ALTER TABLE `torcedores` DISABLE KEYS */;
INSERT INTO `torcedores` VALUES (1,'teste 1 x','documento teste','','','','','','','andre@teste.com','');
INSERT INTO `torcedores` VALUES (2,'teste 2 ss','','','','','','','','teste2@gmail.com','');
INSERT INTO `torcedores` VALUES (3,'teste3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'teste3@teste.com',NULL);
/*!40000 ALTER TABLE `torcedores` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
