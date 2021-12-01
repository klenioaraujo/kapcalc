-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2021 às 11:19
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `kapcalc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `calculos`
--

CREATE TABLE `calculos` (
  `Id` int(11) NOT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `time_stamp` timestamp NULL DEFAULT NULL,
  `operation` varchar(255) DEFAULT NULL,
  `result` decimal(12,4) DEFAULT NULL,
  `bonus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `calculos`
--

INSERT INTO `calculos` (`Id`, `ip`, `time_stamp`, `operation`, `result`, `bonus`) VALUES
(35, '::1', '2021-11-23 11:18:09', 'multiplicar', '24.0000', 'sem bonus');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `calculos`
--
ALTER TABLE `calculos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `calculos`
--
ALTER TABLE `calculos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
