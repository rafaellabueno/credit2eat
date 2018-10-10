-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Out-2018 às 03:14
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

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

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `cli_id` int(10) NOT NULL,
  `cli_nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cli_matricula` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cli_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_telefone` int(11) DEFAULT NULL,
  `cli_senha` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_divida` float DEFAULT '0',
  `id_usuario` int(11) DEFAULT NULL,
  `id_divida` int(11) DEFAULT NULL,
  `valido` tinyint(1) NOT NULL,
  `cli_curso` varchar(60) NOT NULL,
  `imagem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cli_id`, `cli_nome`, `cli_matricula`, `cli_email`, `cli_telefone`, `cli_senha`, `cli_divida`, `id_usuario`, `id_divida`, `valido`, `cli_curso`, `imagem`) VALUES
(12, 'Venda à Vista', '666', '', 0, '', 0, NULL, NULL, 1, '0', ''),
(22, 'Lucas Sombra Almeida', '02060148', 'precutshadow@gmail.com', NULL, '$2y$10$pSzN2CL7AKN4dhl/6DHlG.FhPp1MynIeAxmGqPnO7N76emd6ioPRi', 0, 25, NULL, 1, 'Técnico em Informática', ''),
(23, 'Guilherme Bragagnollo Teixeira', '02060156', 'guilherme.b.tei@gmail.com', NULL, '$2y$10$xmxDBbwT8cO7Ny5mfAFQVeeovkYthhNxQ7wLn8LZw0dH/CZ83/zqe', 8.5, 25, NULL, 1, 'Técnico em Informática', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `divida`
--

DROP TABLE IF EXISTS `divida`;
CREATE TABLE `divida` (
  `id_divida` int(11) NOT NULL,
  `valor_divida` float DEFAULT NULL,
  `venda_id_venda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `produto` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `qntd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id`, `produto`, `data`, `qntd`) VALUES
(18, 7, '2018-10-05 22:38:21', 22),
(19, 7, '2018-10-05 22:40:44', 2),
(20, 12, '2018-10-05 22:43:22', 3),
(21, 12, '2018-10-06 16:17:09', 1),
(22, 7, '2018-10-06 16:26:27', 5),
(23, 9, '2018-10-06 16:30:07', 2),
(24, 9, '2018-10-08 13:04:13', 2),
(25, 11, '2018-10-09 01:25:11', 2),
(26, 13, '2018-10-09 13:58:31', 10),
(27, 12, '2018-10-09 20:16:24', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacoes`
--

DROP TABLE IF EXISTS `notificacoes`;
CREATE TABLE `notificacoes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `notificacoes`
--

INSERT INTO `notificacoes` (`id`, `titulo`, `data`) VALUES
(13, 'O produto Croissant de Frango possui poucas unidades!', '2018-10-09 22:31:07'),
(14, 'O produto Croissant de Frango possui poucas unidades!', '2018-10-10 00:53:09'),
(15, 'O produto Negrinho possui poucas unidades!', '2018-10-10 00:54:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
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
(6, 'Pizza', 5.00, 10, 111, 6, NULL, 25),
(7, 'Enroladinho', 3.50, 15, 39, 4, NULL, 25),
(8, 'Folhado de Frango', 5.00, 20, 45, 6, NULL, 25),
(9, 'Pastel de Carne', 4.50, 12, 18, 5, NULL, 25),
(10, 'Refrigerante 2L', 8.00, 12, 32, 2, NULL, 25),
(11, 'Chocolate', 5.00, 10, 52, 7, NULL, 25),
(12, 'Croissant de Frango', 5.00, 12, 6, 12, NULL, 25),
(13, 'Negrinho', 3.00, 10, -10, 20, NULL, 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(25, 'admin', 'admin@admin.com', '$2y$10$ZunbSr7qmQEjGIKwdGq.veIsuH8i.1oEieal7NYJMfboXSUbeHDBy');

-- --------------------------------------------------------

--
-- Estrutura da tabela `valor_prazo`
--

DROP TABLE IF EXISTS `valor_prazo`;
CREATE TABLE `valor_prazo` (
  `id` int(11) NOT NULL,
  `valor_prazo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `valor_prazo`
--

INSERT INTO `valor_prazo` (`id`, `valor_prazo`) VALUES
(1, 0.25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

DROP TABLE IF EXISTS `venda`;
CREATE TABLE `venda` (
  `id_venda` int(10) NOT NULL,
  `valor_venda` float NOT NULL,
  `id_cliente` int(10) DEFAULT NULL,
  `data_venda` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `a_prazo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `valor_venda`, `id_cliente`, `data_venda`, `id_user`, `a_prazo`) VALUES
(115, 0, 22, '2018-10-09 20:10:33', 25, NULL),
(116, 0, 23, '2018-10-09 22:31:07', 25, NULL),
(117, 0, 23, '2018-10-10 00:30:01', 25, NULL),
(118, 0, 23, '2018-10-10 00:52:12', 25, NULL),
(119, 0, 23, '2018-10-10 00:53:09', 25, NULL),
(120, 0, 23, '2018-10-10 00:54:22', 25, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_produto`
--

DROP TABLE IF EXISTS `venda_produto`;
CREATE TABLE `venda_produto` (
  `venda_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `pendente` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda_produto`
--

INSERT INTO `venda_produto` (`venda_id`, `produto_id`, `pendente`) VALUES
(115, 8, 0),
(115, 8, 0),
(116, 12, 0),
(117, 11, 0),
(118, 9, 0),
(118, 7, 0),
(119, 12, 1),
(120, 13, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_id`),
  ADD UNIQUE KEY `cli_matricula` (`cli_matricula`),
  ADD KEY `id_divida` (`id_divida`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `divida`
--
ALTER TABLE `divida`
  ADD PRIMARY KEY (`id_divida`),
  ADD KEY `fk_divida_venda1_idx` (`venda_id_venda`);

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notificacoes`
--
ALTER TABLE `notificacoes`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `cli_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `divida`
--
ALTER TABLE `divida`
  MODIFY `id_divida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `notificacoes`
--
ALTER TABLE `notificacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

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
