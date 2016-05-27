-- phpMyAdmin SQL Dump
-- version 4.3.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Tempo de geração: 03/05/2016 às 18:09
-- Versão do servidor: 5.5.42
-- Versão do PHP: 5.4.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `nerdphone`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `celulares`
--

CREATE TABLE IF NOT EXISTS `celulares` (
  `Id` mediumint(9) NOT NULL,
  `marca` varchar(25) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `processador` int(11) DEFAULT NULL,
  `memoria` int(11) DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `camera` int(11) DEFAULT NULL,
  `descricao` text,
  `imagem` varchar(30) DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `celulares`
--

INSERT INTO `celulares` (`Id`, `marca`, `modelo`, `processador`, `memoria`, `ram`, `camera`, `descricao`, `imagem`, `preco`) VALUES
(1, 'LG', 'Optimus L5 E612', 800, 4000, 512, 5, 'otimo produto realmente sensacional', 'prod1.jpg', '100.00'),
(2, 'LG', 'Prime Plus 4G H522f', NULL, 8000, 1000, 8, 'otimo produto realmente sensacional', 'prod1.jpg', '200.00'),
(3, 'Motorola', 'Moto G 3', 1400, 16000, 2000, 13, 'otimo produto realmente sensacional', 'prod1.jpg', '300.00'),
(4, 'Motorola', 'Moto Maxx', 2700, 64000, 3000, 21, 'otimo produto realmente sensacional', 'prod1.jpg', '400.00'),
(5, 'Samsung', 'Galaxy S7', 2200, 64000, 4000, 12, 'otimo produto realmente sensacional', 'prod1.jpg', '500.00'),
(6, 'Samsung', 'Galaxy ACE 4 LTE', 1200, 8000, 1000, 5, 'otimo produto realmente sensacional', 'prod1.jpg', '600.00'),
(7, 'Apple', 'Iphone 6s Plus', 2000, 128000, 2000, 12, 'otimo produto realmente sensacional', 'prod1.jpg', '700.00'),
(8, 'Apple', 'Iphone 6s Plus', 2000, 128000, 2000, 12, 'otimo produto realmente sensacional', 'prod1.jpg', '800.00'),
(9, '', '1500', 0, 0, 0, 0, '', NULL, '0.00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'jorge.mendesx@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'bil@gmail.com', '123');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `celulares`
--
ALTER TABLE `celulares`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `celulares`
--
ALTER TABLE `celulares`
  MODIFY `Id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
