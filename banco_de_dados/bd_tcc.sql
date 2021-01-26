-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 26-Jan-2021 às 23:22
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd_tcc`
--
CREATE DATABASE IF NOT EXISTS `bd_tcc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_tcc`;



--
-- Estrutura da tabela `cadastro_prodquimico`
--

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

--
-- Extraindo dados da tabela `cadastro_prodquimico`
--





--
-- Estrutura da tabela `historico`
--

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

--
-- Extraindo dados da tabela `historico`
--




--
-- Estrutura da tabela `usuarios`
--

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

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nome_usuarios`, `email_usuarios`, `senha_usuarios`, `tipo_usuarios`, `ativo_usuarios`) VALUES
(1, 'Rodrigo Rauber Freitas', 'digorauberf@hotmail.com', '1234', 2, 1);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
