-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Nov-2024 às 14:21
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`can_candidato`, `can_nome`, `can_sobrenome`, `can_numero`, `can_partido`) VALUES
(2, 'Julin da bunda', 'Oliveira', 22, 'PSOL'),
(8, 'Tavin2', 'Prime2', 22, 'PSPL2'),
(4, 'Felps', 'Prado', 13, 'PT'),
(7, 'Tavin', 'Prime', 76, 'PSPL'),
(6, 'Matheus ', 'Araujo', 99, 'PL');

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `eleitor`
--

INSERT INTO `eleitor` (`ele_cod`, `ele_nome`, `ele_sobrenome`, `ele_telefone`, `ele_cpf`) VALUES
(2, 'Gabriel', 'Baroni', 19998982, 2147483647),
(3, 'Gabriel', 'Baroni', 19998982, 2147483647),
(5, 'Matheus ', 'Araujo', 1998767867, 9999),
(7, 'Matheus ', 'Araujo', 1999889, 5555);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
