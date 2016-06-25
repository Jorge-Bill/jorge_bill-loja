-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2016 at 05:12 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'esporte'),
(2, 'escolar'),
(3, 'mobilidade'),
(4, 'guloseimas');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text,
  `categoria_id` int(11) DEFAULT NULL,
  `usado` tinyint(1) DEFAULT '0',
  `imagem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `categoria_id`, `usado`, `imagem`) VALUES
(1, 'carro', '20000.00', 'Descricao deste produto', 3, 0, 'carro-velho.jpg'),
(2, 'motocicleta', '10000.00', 'Descricao deste produto', 3, 0, 'moto.jpg'),
(5, 'playstation', '100.00', 'Descricao deste produto', 3, 0, 'play.jpg'),
(9, 'techpix', '999.00', 'Descricao deste produto', 3, 0, 'tech.jpg'),
(10, 'Notebook', '10000.00', 'Descricao deste produto', 3, 0, 'note.jpg'),
(11, 'Smartphone Ostentação', '50000.00', 'Descricao deste produto', 3, 0, 'celular.jpg'),
(12, 'Suplemento MONSTER', '300.00', 'Descricao deste produto', 4, 0, 'monstro.png'),
(13, 'milkshake de way', '99.00', 'um milkshake pra te deixar monstrao', 4, 0, 'whey.gif'),
(14, 'Doces Diferenciados', '100.00', 'doces pra te fazer viajar na maionese', 4, 0, 'doce.jpg'),
(15, 'charuto cubano', '999.00', 'um charuto cubano extremamente caro e gurmê.', 4, 0, 'charuto.jpg'),
(16, 'bicicleta', '500.00', 'uma bike pra vc andar por ai', 1, 0, 'bicicleta.jpg'),
(17, 'skate quebrado', '50.00', 'um skate para vc voar por ai mas ele nao voa mais', 3, 1, 'skate.jpg'),
(18, 'blusa', '10.00', 'uma blusa amassada', 2, 1, 'blusa.jpg'),
(19, 'Audi A4', '3999.00', 'um audi de ultima geração', 3, 0, 'audi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'jorge.mendesx@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'bil@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
