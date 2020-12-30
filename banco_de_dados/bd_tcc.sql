-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 09-Jul-2020 às 14:16
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_prodquimico`
--

CREATE TABLE IF NOT EXISTS `cadastro_prodquimico` (
  `id_prodquimico` int(10) NOT NULL AUTO_INCREMENT,
  `nome_prodquimico` varchar(200) NOT NULL,
  `quantidade_prodquimico` int(100) NOT NULL,
  PRIMARY KEY (`id_prodquimico`),
  UNIQUE KEY `nome_prodquimico` (`nome_prodquimico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncia`
--

CREATE TABLE IF NOT EXISTS `denuncia` (
  `id_denuncia` int(10) NOT NULL AUTO_INCREMENT,
  `status_denuncia` smallint(3) NOT NULL DEFAULT '0',
  `descricao_denuncia` varchar(200) NOT NULL,
  PRIMARY KEY (`id_denuncia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int(10) NOT NULL AUTO_INCREMENT,
  `nome_usuarios` varchar(100) NOT NULL,
  `email_usuarios` varchar(200) NOT NULL,
  `senha_usuarios` varchar(100) NOT NULL,
  `tipo_usuarios` smallint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_usuarios`),
  UNIQUE KEY `email_usuarios` (`email_usuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nome_usuarios`, `email_usuarios`, `senha_usuarios`, `tipo_usuarios`) VALUES
(1, 'Rodrigo Rauber Freitas', 'digorauberf@gmail.com', 'superadmin', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
