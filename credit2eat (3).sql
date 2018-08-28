-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Ago-2018 às 21:02
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `credit2eat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cli_id` int(10) NOT NULL,
  `cli_nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cli_matricula` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cli_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cli_telefone` int(11) NOT NULL,
  `cli_senha` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cli_divida` float DEFAULT '0',
  `id_usuario` int(11) DEFAULT NULL,
  `id_divida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cli_id`, `cli_nome`, `cli_matricula`, `cli_email`, `cli_telefone`, `cli_senha`, `cli_divida`, `id_usuario`, `id_divida`) VALUES
(5, 'Alex', '02060126', 'alek@gmail.com', 999393393, '81dc9bdb52d04dc20036dbd8313ed055', 0, NULL, NULL),
(6, 'Brenda Barbosa', '02060128', 'brendab@gmail.com', 995545121, 'e10adc3949ba59abbe56e057f20f883e', 0, NULL, NULL),
(7, 'Sandro Silva', 'sandro.silva', 'sandro.silva@ifrs.edu.br', 996644112, 'sandrosilva', 0, NULL, NULL),
(8, 'Lucas Sombra', '02060150', 'lucassombra@gmail.com', 994564512, '123', 0, NULL, NULL),
(9, 'Rafaella', '02060140', 'rafaella@rafaella.com', 943924943, '827ccb0eea8a706c4c34a16891f84e7b', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `divida`
--

CREATE TABLE `divida` (
  `id_divida` int(11) NOT NULL,
  `valor_divida` float DEFAULT NULL,
  `venda_id_venda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `prod_id` int(11) NOT NULL,
  `prod_nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prod_valor` float(5,2) NOT NULL,
  `prod_qnt_min` float NOT NULL,
  `prod_qnt` float NOT NULL,
  `prod_qnt_ven` int(11) DEFAULT '0',
  `prod_slug` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`prod_id`, `prod_nome`, `prod_valor`, `prod_qnt_min`, `prod_qnt`, `prod_qnt_ven`, `prod_slug`, `usuario_id`) VALUES
(6, 'Pizza', 5.00, 10, 20, 0, NULL, NULL),
(7, 'Enroladinho', 2.50, 15, 20, 0, NULL, NULL),
(8, 'Folhado de Frango', 5.00, 20, 40, 0, NULL, NULL),
(9, 'Pastel de Carne', 4.50, 12, 20, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(10) NOT NULL,
  `valor_venda` float NOT NULL,
  `a_prazo` tinyint(1) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `data_venda` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `valor_venda`, `a_prazo`, `id_cliente`, `data_venda`) VALUES
(1, 10, 0, 6, '2018-08-24 13:45:14'),
(2, 15, 0, 7, '2018-08-25 17:20:32'),
(6, 0, 0, 9, '0000-00-00 00:00:00'),
(7, 0, 0, 8, '0000-00-00 00:00:00'),
(8, 0, 8, 8, '0000-00-00 00:00:00'),
(9, 0, 8, 8, '2018-08-25 17:55:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_produto`
--

CREATE TABLE `venda_produto` (
  `venda_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda_produto`
--

INSERT INTO `venda_produto` (`venda_id`, `produto_id`) VALUES
(1, 7),
(2, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_id`),
  ADD KEY `id_divida` (`id_divida`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `divida`
--
ALTER TABLE `divida`
  ADD PRIMARY KEY (`id_divida`),
  ADD KEY `fk_divida_venda1_idx` (`venda_id_venda`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `venda_produto`
--
ALTER TABLE `venda_produto`
  ADD KEY `venda_id` (`venda_id`),
  ADD KEY `produto_id` (`produto_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cli_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `divida`
--
ALTER TABLE `divida`
  MODIFY `id_divida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `id_divida` FOREIGN KEY (`id_divida`) REFERENCES `divida` (`id_divida`),
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `divida`
--
ALTER TABLE `divida`
  ADD CONSTRAINT `fk_divida_venda1` FOREIGN KEY (`venda_id_venda`) REFERENCES `venda` (`id_venda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`cli_id`);

--
-- Limitadores para a tabela `venda_produto`
--
ALTER TABLE `venda_produto`
  ADD CONSTRAINT `produto_id` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`prod_id`),
  ADD CONSTRAINT `venda_id` FOREIGN KEY (`venda_id`) REFERENCES `venda` (`id_venda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
