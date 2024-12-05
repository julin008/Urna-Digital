-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Nov-2024 às 14:21
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `urna`
--
CREATE DATABASE IF NOT EXISTS `urna` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `urna`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

DROP TABLE IF EXISTS `candidato`;
CREATE TABLE IF NOT EXISTS `candidato` (
  `can_candidato` int NOT NULL AUTO_INCREMENT,
  `can_nome` varchar(100) NOT NULL,
  `can_sobrenome` varchar(150) NOT NULL,
  `can_numero` int NOT NULL,
  `can_partido` varchar(150) NOT NULL,
  PRIMARY KEY (`can_candidato`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eleitor`
--

DROP TABLE IF EXISTS `eleitor`;
CREATE TABLE IF NOT EXISTS `eleitor` (
  `ele_cod` int NOT NULL AUTO_INCREMENT,
  `ele_nome` varchar(100) NOT NULL,
  `ele_sobrenome` varchar(100) NOT NULL,
  `ele_telefone` int NOT NULL,
  `ele_cpf` int NOT NULL,
  PRIMARY KEY (`ele_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `eleitor`
--

INSERT INTO `eleitor` (`ele_cod`, `ele_nome`, `ele_sobrenome`, `ele_telefone`, `ele_cpf`) VALUES
(12, 'ANA LUIZA ', 'FERNANDES', 2, 2),
(11, 'ANA BEATRIZ ', 'CARPIN DE SOUSA', 1, 1),
(13, 'DANIEL ', 'FURLAN DO NASCIMENTO', 3, 3),
(14, 'DAVI ', 'MOSNA DE JESUS', 4, 4),
(15, 'ENZO ', 'NARDO ANTONIO', 5, 5),
(16, 'FELIPE ', 'DOS SANTOS DO PRADO', 6, 6),
(17, 'FELIPE ', 'OLIVEIRA DOS SANTOS', 7, 7),
(18, 'GABRIEL ', 'BARONI', 8, 8),
(19, 'GABRIELLY ', 'CAROLINE GOMES', 9, 9),
(20, 'GEOVANA ', 'SANTOS DE LIMA', 10, 10),
(21, 'GUILHERME ', 'HENRIQUE DOMINGUES BROCATTO', 11, 11),
(22, 'HENRIQUE ', 'SANTAROSA DE OLIVEIRA', 12, 12),
(23, 'JOSÉ ', 'LUIZ BERTOLATO FERREIRA', 13, 13),
(24, 'JULIA ', 'PACHECO DE MELO', 14, 14),
(25, 'JULIO CESAR ', 'DE OLIVEIRA', 15, 15),
(26, 'KAMILLY ', 'DOS SANTOS PONTES', 16, 16),
(27, 'LAURA ', 'VIDAL ROCHA', 17, 17),
(28, 'LEONARDO ', 'DA SILVA SANTOS', 18, 18),
(29, 'MARCOS ', 'DE OLIVEIRA NASCIMENTO', 19, 19),
(30, 'MARIA CLARA ', 'SARTORETO RUIZ', 20, 20),
(31, 'MARIA EDUARDA ', 'RIZZO FRUCTUOSO', 21, 21),
(32, 'MARIA FERNANDA ', 'VASSOLER', 22, 22),
(33, 'MARIANA ', 'DE ARAUJO DOS SANTOS', 23, 23),
(34, 'MARIANA ', 'JACOMUSSI DE OLIVEIRA', 24, 24),
(35, 'MATHEUS ', 'ARAUJO DA SILVA', 25, 25),
(36, 'MIGUEL ', 'CAIRES MONTALVÃO', 26, 26),
(37, 'NICOLE ', 'CRISTINA RODRIGUES', 27, 27),
(38, 'OTÁVIO ', 'MONTEIRO DE OLIVEIRA', 28, 28),
(39, 'RAFAEL ', 'JULIO GARCIA', 29, 29),
(40, 'VINÍCIUS ', 'ROBERTO DA SILVA', 30, 30),
(41, 'WINA HIDIE ', 'HIDIE SOUZA DE MORAES NALIN', 31, 31);

-- --------------------------------------------------------

--
-- Estrutura da tabela `voto`
--

DROP TABLE IF EXISTS `voto`;
CREATE TABLE IF NOT EXISTS `voto` (
  `vot_cod` int NOT NULL AUTO_INCREMENT,
  `vot_ele_cod` int NOT NULL,
  `vot_voto` int NOT NULL,
  PRIMARY KEY (`vot_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `voto`
--

INSERT INTO `voto` (`vot_cod`, `vot_ele_cod`, `vot_voto`) VALUES
(1, 37, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
