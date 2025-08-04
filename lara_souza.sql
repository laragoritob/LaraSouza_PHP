-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/08/2025 às 22:09
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lara_souza`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `ID` int(11) NOT NULL COMMENT 'ID é o campo responsável por identificar as tabelas',
  `Nome` varchar(20) NOT NULL COMMENT 'Este campo irá guardar o nome da tarefa executada',
  `Descricao` text NOT NULL COMMENT 'Este campo irá guardar a descrição da tarefa executada',
  `Prazo` date NOT NULL COMMENT 'Este campo irá guardar a data do prazo para a tarefa',
  `Prioridade` int(11) NOT NULL COMMENT 'Este campo irá guardar a classificação de prioridade',
  `Concluida` tinyint(1) NOT NULL COMMENT 'Este campo irá guardar se a tarefa está concluída ou não'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tarefas`
--

INSERT INTO `tarefas` (`ID`, `Nome`, `Descricao`, `Prazo`, `Prioridade`, `Concluida`) VALUES
(1, 'Estudar PHP', 'Continuar meus estudos de PHP e MySQL', '0000-00-00', 1, 0),
(23, ':D', 'AAAAAAAAA', '2025-09-30', 0, 0),
(24, 'rafaela', 'bia', '2008-10-08', 0, 0),
(25, 'heloisa', 'catarina', '2008-09-29', 0, 0),
(26, 'bruno', 'gatos', '2009-04-12', 2, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID é o campo responsável por identificar as tabelas', AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
