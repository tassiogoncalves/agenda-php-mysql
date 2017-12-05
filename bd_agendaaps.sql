CREATE DATABASE  IF NOT EXISTS `agendaaps` ;

USE `agendaaps`;

DROP TABLE IF EXISTS `agenda`;

CREATE TABLE `agenda` (
  `cod_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `estado` varchar(40) DEFAULT NULL,
  `site` varchar(100) DEFAULT NULL,
  `observacao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cod_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `agenda` VALUES (1,'TASSIO GONCALVES','tassiogoncalvesg@gmail.com','','0000-00-00','(75) 98838-0830','Rua da Paz, 21',0,'BTN','Paulo Afonso','Bahia','',''),(7,'USER TEST','USER@TEST.COM','','0000-00-00','','',0,'','','','','');


DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `cod_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`cod_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','Administrador','admin@teste.com.br');

