-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Out-2018 às 13:44
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
  `cli_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_telefone` int(11) DEFAULT NULL,
  `cli_senha` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_divida` float DEFAULT '0',
  `id_usuario` int(11) DEFAULT NULL,
  `id_divida` int(11) DEFAULT NULL,
  `valido` tinyint(1) NOT NULL,
  `cli_curso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cli_id`, `cli_nome`, `cli_matricula`, `cli_email`, `cli_telefone`, `cli_senha`, `cli_divida`, `id_usuario`, `id_divida`, `valido`, `cli_curso`) VALUES
(5, 'Alex', '02060126', 'alek@gmail.com', 999393393, '81dc9bdb52d04dc20036dbd8313ed055', 5.25, 25, NULL, 1, 'informática'),
(6, 'Brenda Barbosa', '02060128', 'brendab@gmail.com', 995545121, 'e10adc3949ba59abbe56e057f20f883e', 0, 25, NULL, 1, 'informática'),
(7, 'Sandro Silva', 'sandro.silva', 'sandro.silva@ifrs.edu.br', 996644112, 'sandrosilva', 0, 25, NULL, 1, 'Professor'),
(8, 'Lucas Sombra', '02060150', 'lucassombra@gmail.com', 994564512, '123', 25, 25, NULL, 1, 'informática'),
(9, 'Rafaella', '02060140', 'rafaella@rafaella.com', 943924943, '827ccb0eea8a706c4c34a16891f84e7b', 22.75, 25, NULL, 1, 'informática'),
(10, 'Reginho', 'regis.teixeira', 'regis@gmail.com', 987456321, '827ccb0eea8a706c4c34a16891f84e7b', 0, 25, NULL, 0, '0'),
(11, 'Guilherme Bragagnollo Teixeira', '02060128', 'guilherme.b.tei@gmail.com', 995213689, 'e1026678df1ff3a31c104cdeb8e4bb95', 10.5, 25, NULL, 1, 'informática'),
(12, 'Venda à Vista', '', '', 0, '', 0, 26, NULL, 1, '0'),
(13, 'teste', '123', '', 0, '$2y$10$GVEbolyuny1aMfg1gQD7xuIZys22A7hk0z/dfSvW93d', 0, 25, NULL, 1, 'informática'),
(14, 'teste2', '123', '', 0, '$2y$10$/IAcYI8KmHCcOiS3Wg.j/.5yUana9LRnG4H2UxwfaI3wzTyEPAxMG', 6, 25, NULL, 1, 'informática');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nome_curso` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nome_curso`, `user_id`) VALUES
(3, 'informática', 25),
(4, 'administração', 25),
(5, 'eletrônica', 25),
(6, 'desenvolvimento de sistemas', 25),
(7, 'Professor', 25),
(8, 'logística', 25);

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
-- Estrutura da tabela `estoque`
--

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
(1, 12, '2018-10-04 16:30:11', 5),
(2, 6, '2018-10-04 16:30:53', 10),
(3, 7, '2018-10-04 17:24:48', 12),
(4, 8, '2018-10-04 17:39:04', 7),
(5, 6, '2018-10-04 17:43:45', 34),
(6, 10, '2018-10-04 17:44:27', 2),
(7, 10, '2018-10-04 17:44:33', 5),
(8, 10, '2018-10-04 17:45:08', 2),
(9, 12, '2018-10-04 18:10:01', 1);

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
(6, 'Pizza', 5.00, 10, 111, 2, NULL, 25),
(7, 'Enroladinho', 2.50, 15, 4, 1, NULL, 25),
(8, 'Folhado de Frango', 5.00, 20, 49, 2, NULL, 25),
(9, 'Pastel de Carne', 4.50, 12, 16, 2, NULL, 25),
(10, 'Refrigerante 2L', 8.00, 12, 32, 1, NULL, 25),
(11, 'Chocolate', 10.00, 10, -4, 4, NULL, 25),
(12, 'Croissant de Frango', 5.00, 12, 6, 5, NULL, 25);

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

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(25, 'admin', 'admin@admin.com', '$2y$10$ZunbSr7qmQEjGIKwdGq.veIsuH8i.1oEieal7NYJMfboXSUbeHDBy'),
(26, 'Guilherme Bragagnollo Teixeira', 'guilherme.b.tei@gmail.com', '$2y$10$l3oSNlOx1zFfOHksWRy/JuBXulPYvFwWVNNFeTS4GtYgkpaNqNPOy'),
(27, 'Elaine Teixeira', 'elaine@email.com', '$2y$10$VFxg6bOlPVv1bU4h7A6B3u34EjOY1BiZCoJEvIL2e38z2Nk2tfZsO'),
(29, 'PEPE', 'pepe@email.com', '$2y$10$U24clp2EUKb85FntDyfdMOR6ThfoQQ98/1I2oZotjcWsYOj4SP5tG'),
(30, 'maicon', 'maicon@email.com', '$2y$10$1DAjNIlzVxUW2LgzY2oGo.uB/ceVB00OPU.CeeKfeFUwvOC.PWxu6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `valor_prazo`
--

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
(1, 10, 6, '2018-09-12 23:46:22', 25, NULL),
(2, 15, 7, '2018-09-12 23:46:22', 25, NULL),
(6, 0, 9, '2018-09-12 23:46:22', 25, NULL),
(7, 0, 8, '2018-09-12 23:46:22', 25, NULL),
(8, 0, 8, '2018-09-12 23:46:22', 25, NULL),
(9, 0, 8, '2018-09-12 23:46:22', 25, NULL),
(10, 0, 9, '2018-09-12 23:46:23', 25, NULL),
(11, 0, 9, '2018-09-12 23:46:23', 25, NULL),
(12, 0, 10, '2018-09-12 23:46:23', 25, NULL),
(13, 0, 6, '2018-09-12 23:46:23', 25, NULL),
(14, 0, 6, '2018-09-12 23:46:23', 25, NULL),
(15, 0, 7, '2018-09-12 23:46:23', 25, NULL),
(16, 0, 6, '2018-09-12 23:46:23', 25, NULL),
(17, 0, 11, '2018-09-12 23:45:47', 25, NULL),
(18, 0, 11, '2018-09-12 23:54:44', 25, NULL),
(19, 0, 5, '2018-09-19 13:24:53', 25, NULL),
(20, 0, 5, '2018-09-19 13:30:27', 25, NULL),
(21, 0, 7, '2018-09-19 13:44:32', 25, NULL),
(22, 0, 9, '2018-09-19 17:18:00', 25, NULL),
(24, 0, 8, '2018-09-25 18:32:09', 25, NULL),
(25, 0, 8, '2018-09-25 18:53:55', 25, NULL),
(28, 0, 6, '2018-09-26 13:29:08', 25, NULL),
(31, 0, 12, '2018-10-01 13:17:27', 25, NULL),
(32, 0, 11, '2018-10-01 14:00:49', 25, NULL),
(33, 0, 6, '2018-10-01 14:01:42', 25, NULL),
(34, 0, 7, '2018-10-01 14:02:38', 25, NULL),
(35, 0, 5, '2018-10-01 14:04:18', 25, NULL),
(36, 0, 9, '2018-10-01 14:05:10', 25, NULL),
(37, 0, 6, '2018-10-01 14:12:18', 25, NULL),
(38, 0, 6, '2018-10-01 14:19:47', 25, NULL),
(39, 0, 12, '2018-10-01 23:59:08', 25, NULL),
(40, 0, 5, '2018-10-02 13:36:33', 25, NULL),
(41, 0, 11, '2018-10-02 13:40:33', 25, NULL),
(42, 0, 6, '2018-10-02 13:42:45', 25, NULL),
(43, 0, 6, '2018-10-02 13:43:11', 25, NULL),
(44, 0, 6, '2018-10-02 13:43:27', 25, NULL),
(45, 0, 6, '2018-10-02 13:43:36', 25, NULL),
(46, 0, 6, '2018-10-02 13:46:46', 25, NULL),
(47, 0, 6, '2018-10-02 13:47:40', 25, NULL),
(48, 0, 6, '2018-10-02 13:49:09', 25, NULL),
(49, 0, 6, '2018-10-02 13:49:54', 25, NULL),
(50, 0, 9, '2018-10-02 13:50:39', 25, NULL),
(51, 0, 9, '2018-10-02 13:51:31', 25, NULL),
(52, 0, 9, '2018-10-02 13:54:28', 25, NULL),
(53, 0, 5, '2018-10-02 13:57:57', 25, NULL),
(54, 0, 6, '2018-10-02 14:46:10', 25, NULL),
(55, 0, 5, '2018-10-02 14:48:22', 25, NULL),
(56, 0, 8, '2018-10-02 22:45:48', 25, NULL),
(57, 0, 8, '2018-10-02 22:46:05', 25, NULL),
(58, 0, 11, '2018-10-02 22:46:23', 25, NULL),
(59, 0, 9, '2018-10-03 13:35:06', 25, NULL),
(60, 0, 11, '2018-10-03 14:22:54', 25, NULL),
(61, 0, 11, '2018-10-03 19:53:05', 25, NULL),
(62, 0, 11, '2018-10-03 19:56:59', 25, NULL),
(63, 0, 11, '2018-10-03 19:58:57', 25, NULL),
(64, 0, 11, '2018-10-03 20:07:25', 25, NULL),
(65, 0, 11, '2018-10-03 20:08:06', 25, NULL),
(66, 0, 5, '2018-10-03 20:17:23', 25, NULL),
(67, 0, 11, '2018-10-03 21:28:48', 25, NULL),
(68, 0, 12, '2018-10-03 21:29:57', 25, NULL),
(69, 0, 6, '2018-10-03 21:59:36', 25, NULL),
(70, 0, 5, '2018-10-03 21:59:55', 25, NULL),
(71, 0, 8, '2018-10-03 22:00:59', 25, NULL),
(72, 0, 14, '2018-10-03 22:21:23', 25, NULL),
(73, 0, 14, '2018-10-04 13:06:17', 25, NULL),
(74, 0, 14, '2018-10-04 13:24:07', 25, NULL),
(75, 0, 14, '2018-10-04 13:26:15', 25, NULL),
(76, 0, 14, '2018-10-04 13:27:52', 25, NULL),
(77, 0, 14, '2018-10-04 13:28:22', 25, NULL),
(78, 0, 14, '2018-10-04 13:28:55', 25, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_produto`
--

CREATE TABLE `venda_produto` (
  `venda_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `pendente` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda_produto`
--

INSERT INTO `venda_produto` (`venda_id`, `produto_id`, `pendente`) VALUES
(1, 7, 0),
(2, 9, 0),
(10, 7, 0),
(10, 8, 0),
(10, 6, 0),
(10, 10, 0),
(11, 7, 0),
(11, 10, 0),
(13, 7, 0),
(14, 7, 0),
(15, 11, 0),
(16, 12, 0),
(17, 12, 0),
(18, 11, 0),
(24, 12, 0),
(24, 6, 0),
(25, 7, 0),
(25, 6, 0),
(25, 7, 0),
(25, 8, 0),
(25, 9, 0),
(25, 11, 0),
(28, 7, 0),
(28, 8, 0),
(31, 12, 0),
(31, 7, 0),
(32, 7, 0),
(32, 12, 0),
(33, 11, 0),
(34, 11, 0),
(34, 8, 0),
(35, 12, 0),
(35, 12, 0),
(36, 12, 0),
(36, 8, 0),
(37, 7, 0),
(37, 12, 0),
(38, 12, 0),
(39, 11, 0),
(40, 11, 0),
(41, 11, 0),
(47, 11, 0),
(49, 11, 0),
(50, 8, 0),
(51, 11, 0),
(52, 7, 0),
(53, 8, 0),
(54, 9, 0),
(54, 11, 0),
(55, 9, 0),
(55, 7, 0),
(55, 11, 0),
(56, 11, 0),
(57, 11, 0),
(58, 12, 0),
(58, 11, 0),
(59, 11, 0),
(60, 12, 0),
(60, 7, 0),
(61, 11, 0),
(61, 7, 0),
(62, 7, 0),
(62, 7, 0),
(62, 8, 0),
(63, 12, 0),
(63, 12, 0),
(64, 12, 0),
(65, 12, 0),
(66, 11, 0),
(67, 8, 1),
(67, 8, 1),
(68, 12, NULL),
(68, 12, NULL),
(69, 7, 0),
(70, 12, 1),
(71, 9, 1),
(72, 11, 0),
(73, 12, 0),
(73, 12, 0),
(74, 9, 0),
(74, 11, 0),
(75, 11, 0),
(76, 6, 0),
(77, 10, 0),
(78, 6, 1);

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
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

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
  MODIFY `cli_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `divida`
--
ALTER TABLE `divida`
  MODIFY `id_divida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

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
