

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE DATABASE IF NOT EXISTS `bd_tcc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_tcc`;





CREATE TABLE IF NOT EXISTS `cadastro_prodquimico` (
  `id_prodquimico` int(10) NOT NULL AUTO_INCREMENT,
  `nome_prodquimico` varchar(200) NOT NULL,
  `quantidade_prodquimico` varchar(100) NOT NULL,
  `valores_prodquimico` int(11) NOT NULL,
  `formula_prodquimico` varchar(300) NOT NULL,
  `observacao_prodquimico` varchar(300) NOT NULL,
  `local_prodquimico` varchar(300) NOT NULL,
  `id_foto` int(11) NOT NULL,
  PRIMARY KEY (`id_prodquimico`),
  UNIQUE KEY `nome_prodquimico` (`nome_prodquimico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;


CREATE TABLE IF NOT EXISTS `historico` (
  `id_historico` int(100) NOT NULL AUTO_INCREMENT,
  `acao_historico` int(3) NOT NULL,
  `quantidade_historico` varchar(100) NOT NULL,
  `valor_historico` int(3) NOT NULL,
  `nomeprod_historico` varchar(200) NOT NULL,
  `usuario_historico` int(3) NOT NULL,
  `data_historico` varchar(300) NOT NULL,
  `hora_historico` varchar(100) NOT NULL,
  PRIMARY KEY (`id_historico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;



CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int(10) NOT NULL AUTO_INCREMENT,
  `nome_usuarios` varchar(100) NOT NULL,
  `email_usuarios` varchar(200) NOT NULL,
  `senha_usuarios` varchar(100) NOT NULL,
  `tipo_usuarios` smallint(3) NOT NULL DEFAULT '0',
  `ativo_usuarios` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_usuarios`),
  UNIQUE KEY `email_usuarios` (`email_usuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;
