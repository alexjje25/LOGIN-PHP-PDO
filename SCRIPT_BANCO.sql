-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Maio-2021 às 14:59
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `telefone`, `email`, `senha`) VALUES
(1, 'alex da silva santos', '11966173587', 'alex.toninato30@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'alex da silva santos', '11966173587', 'alex0123', '202cb962ac59075b964b07152d234b70'),
(3, 'LAURA', '11966173625', 'alex.nsa32@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'laura', '11966173587', 'alex.nsa33@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'alex da silva santos', 'alex222@gmail.com', 'alex', '202cb962ac59075b964b07152d234b70'),
(6, 'LAURA', '11966173587', 'alex0123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'alex da silva santos', '8935535', 'alex0123@', '202cb962ac59075b964b07152d234b70'),
(8, 'willian', '111966173625', 'wburlani@gmai.com', '202cb962ac59075b964b07152d234b70'),
(9, 'alex da silva santos', '11966173587', 'gvhfhf', 'c20ad4d76fe97759aa27a0c99bff6710');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
