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

-- --------------------------------------------------------

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

INSERT INTO `cadastro_prodquimico` (`id_prodquimico`, `nome_prodquimico`, `quantidade_prodquimico`, `valores_prodquimico`, `formula_prodquimico`, `observacao_prodquimico`, `local_prodquimico`, `id_foto`) VALUES
(17, 'MercÃºrio', '1600', 1, 'Hg', 'O grande mercÃºrio, metal foda', 'AB2', 1),
(18, 'Cobalto', '1400', 4, 'Co', 'Ã‰ o cobalto', 'AB1', 2),
(19, 'Ãgua', '1400', 3, 'H2O', 'Ã¡gua show', 'AB1', 3),
(21, 'Qualquer', '1400', 1, 'eqwe', 'dqdwqe', 'AB3', 4),
(25, 'Teste', '1400', 1, 'dqfwqd', 'dqdqwd', 'qqq', 5),
(27, 'dqwd', '1400', 1, 'fwefe', 'dqd', 'qeweqe', 6),
(29, 'grr', '1400', 1, 'gfw', 'wqdwq', 'eqwe', 7),
(31, 'dqd', '1400', 1, 'fgew', 'rgqe', 'eqwe', 8),
(33, 'xuxu', '1400', 1, 'fgew', 'rgqe', 'eqwe', 9),
(34, 'Ronaldinho', '1400', 1, 'fgew', 'rgqe', 'eqwe', 10),
(35, 'popo', '1400', 1, 'wjfoe', 'cef', 'eqwpjeqwo', 11),
(36, 'coroi', '1400', 1, 'wjfoe', 'cef', 'eqwpjeqwo', 12),
(37, 'pauta', '1400', 1, 'wjfoe', 'cef', 'eqwpjeqwo', 13),
(38, 'fefdw', '1400', 1, 'iklm', 'yggui', 'kik', 14),
(39, 'fe', '1400', 1, 'iklm', 'yggui', 'kik', 15),
(40, 'dw', '1400', 1, 'iklm', 'yggui', 'kik', 16),
(41, 'esse aqui', '1400', 1, 'iklm', 'yggui', 'kik', 17),
(42, 'han', '1400', 1, 'iklm', 'yggui', 'kik', 18),
(43, 'han 2', '1400', 1, 'iklm', 'yggui', 'kik', 19),
(44, 'han 3', '1400', 1, 'iklm', 'yggui', 'kik', 20),
(45, 'han 4', '1400', 1, 'iklm', 'yggui', 'kik', 21),
(46, 'Ferro', '1400', 2, 'Fe', 'FERRO FODA', 'M1', 22),
(47, 'Cobre', '1400', 2, 'Cu', 'Cobre de monte', 'M1', 23);

-- --------------------------------------------------------

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

INSERT INTO `historico` (`id_historico`, `acao_historico`, `quantidade_historico`, `valor_historico`, `nomeprod_historico`, `usuario_historico`, `data_historico`, `hora_historico`) VALUES
(1, 1, '123', 1, 'xuxu', 1, '22/01/2021', ''),
(2, 1, '123', 1, 'Ronaldinho', 1, '22/01/2021', '21:51'),
(3, 1, '13123', 1, 'popo', 1, '22/01/2021', ' '),
(4, 1, '13123', 1, 'coroi', 1, '22/01/2021', ' '),
(5, 1, '13123', 1, 'pauta', 1, '22/01/2021', ' '),
(6, 1, '21', 1, 'fefdw', 1, '23/01/2021', ''),
(7, 1, '21', 1, 'fe', 1, '23/01/2021', ''),
(8, 1, '21', 1, 'dw', 1, '23/01/2021', ''),
(9, 1, '21', 1, 'esse aqui', 1, '23/01/2021', '20:22'),
(10, 1, '21', 1, 'han', 1, '23/01/2021', '20:24'),
(11, 1, '21', 1, 'han 2', 1, '23/01/2021', '20:27'),
(12, 1, '21', 1, 'han 3', 1, '23/01/2021', '20:28'),
(13, 1, '21', 1, 'han 4', 1, '23/01/2021', '20:28'),
(14, 1, '100', 1, 'MercÃºrio', 1, '23/01/2021', '21:15'),
(15, 1, '100', 1, 'MercÃºrio', 1, '23/01/2021', '21:15'),
(16, 1, '200', 1, 'MercÃºrio', 1, '23/01/2021', '21:18'),
(17, 1, '200', 1, 'MercÃºrio', 1, '23/01/2021', '21:18'),
(18, 1, '400', 1, 'MercÃºrio', 1, '23/01/2021', '21:21'),
(19, 1, '200', 1, 'MercÃºrio', 1, '24/01/2021', '16:40'),
(20, 0, '200', 1, 'MercÃºrio', 1, '24/01/2021', '16:53'),
(21, 1, '200', 1, 'MercÃºrio', 1, '24/01/2021', '17:56'),
(22, 0, '200', 1, 'MercÃºrio', 1, '24/01/2021', '17:57'),
(23, 1, '20', 2, 'Ferro', 1, '24/01/2021', '18:10'),
(24, 2, '40.8', 2, 'Cobre', 1, '24/01/2021', '18:13'),
(25, 1, '200', 3, 'Ãgua', 1, '24/01/2021', '18:21'),
(26, 0, '200', 1, 'MercÃºrio', 1, '24/01/2021', '18:21'),
(27, 1, '200', 1, 'MercÃºrio', 1, '24/01/2021', '18:23');

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
  `ativo_usuarios` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_usuarios`),
  UNIQUE KEY `email_usuarios` (`email_usuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nome_usuarios`, `email_usuarios`, `senha_usuarios`, `tipo_usuarios`, `ativo_usuarios`) VALUES
(1, 'Rodrigo Rauber Freitas', 'digorauberf@hotmail.com', '1234', 2, 1),
(2, 'Gustavo Bottega FalcÃ£o', 'gustavobottegafalcao.gb@gmail.com', '1234', 0, 1),
(3, 'Bruno B.', 'brunob@gmail.com', '123', 1, 1),
(4, 'JÃ£o', 'jÃ£o@gmail.com', '123', 0, 1),
(5, 'Rafael Rauber Freitas', 'rafael__rauberf@hotmail.com', '123', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
