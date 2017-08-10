-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 09-Ago-2017 às 18:23
-- Versão do servidor: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.1.8-2+ubuntu16.04.1+deb.sury.org+4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL primary key,
  `nome` varchar(80) NOT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--

-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `nome`, `descricao`, `created`, `modified`) VALUES
(1, 'Metodologias Ageis', 'Grupo de Desenvolvimento de Metodologias Ágeis', '2017-08-08 22:27:21', '2017-08-08 22:27:21'),
(2, 'Metodologia Científica', 'Grupo criado para avaliação de Projetos de Pesquisa', '2017-08-08 22:46:19', '2017-08-08 22:46:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `institutions`
--

CREATE TABLE `institutions` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cnpj` char(14) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `institutions`
--

INSERT INTO `institutions` (`id`, `nome`, `cnpj`, `rua`, `numero`, `bairro`, `cidade`, `complemento`, `created`, `modified`) VALUES
(1, 'IFNMG - campus januaria', '1', '1', '1', '1', '1', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `evento` varchar(100) NOT NULL,
  `standards_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `resumo` varchar(400) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projects`
--

INSERT INTO `projects` (`id`, `filename`, `evento`, `standards_id`, `title`, `resumo`, `created`, `modified`) VALUES
(2, '47df8925-ff72-44db-824f-b9ce9f34231d.png', '', 0, '', '', '2017-08-09 16:47:50', '2017-08-09 16:47:50'),
(3, '1f2d9b6f-681a-4113-a6ac-735c15d05767.pdf', '', 0, '', '', '2017-08-09 16:47:50', '2017-08-09 16:47:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `created`, `modified`, `role`) VALUES
(1, NULL, '2017-08-08 18:51:51', 'Administrador'),
(4, '2017-08-08 19:20:21', '2017-08-08 19:20:21', 'Pesquisador'),
(5, '2017-08-08 19:32:17', '2017-08-08 19:32:17', 'Estudante');

-- --------------------------------------------------------

--
-- Estrutura da tabela `standards`
--

CREATE TABLE `standards` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `standards`
--

INSERT INTO `standards` (`id`, `nome`, `descricao`) VALUES
(1, 'SBC', 'Normas da Sociedade Brasileira de Computação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cpf` char(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telefone` char(11) DEFAULT NULL,
  `rua` varchar(45) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `institutions_id` int(10) UNSIGNED NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `mydb`.`evaluations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` VARCHAR(45) NOT NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  `groups_id` INT NOT NULL,
  `projects_id` INT NOT NULL,
  PRIMARY KEY (`id`),
    FOREIGN KEY (`groups_id`) REFERENCES `mydb`.`groups` (`id`),
FOREIGN KEY (`projects_id`) REFERENCES `mydb`.`projects` (`id`));


--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nome`, `cpf`, `email`, `telefone`, `rua`, `numero`, `bairro`, `cidade`, `complemento`, `created`, `modified`, `institutions_id`, `roles_id`) VALUES
(2, 'pombo', '$2y$10$LZGacFCt6WpBPEZUjCPXCewDBa8far3HKWmSZcFiV4Bsl.Vkm1gCu', 'pombao', '1', 'pombo@pombal.com', '1', '1', 1, '1', '1', '1', NULL, '2017-08-08 13:48:15', 1, 1),
(3, 'admin', 'admin', 'ananda pombo', '1', 'ananda@gmail.com', '1', '1', 1, '1', '1', '1', NULL, NULL, 1, 1),
(4, 'pombo', 'pombo', 'ananda pombo', '1', 'ananda@gmail.com', '1', '1', 1, '1', '1', '1', NULL, NULL, 1, 1),
(6, '2', '$2y$10$41tESUZ/R5OB6Y1AfX0D1.sTypf5TdPcm0LFQWlAh2dHJT9S3qJfC', '2', '2', '2@2.com', '2', '2', 2, '2', '2', '2', '2017-08-08 13:55:28', '2017-08-08 13:55:28', 1, 1),
(7, 'pombos', '$2y$10$52KOGRcpt3cMEwbyvXfo2u61EE0.yqmST98T0apTnGtDsQbmJP9eS', 'pombos', '12312312312', 'pombos@pombos.com', '13497162376', 'pombos', 1, 'pombos', 'pombos', 'pombos', '2017-08-08 23:34:11', '2017-08-08 23:34:11', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutions`
--
ALTER TABLE `institutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standards`
--
ALTER TABLE `standards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `institutions_id` (`institutions_id`),
  ADD KEY `roles_id` (`roles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `institutions`
--
ALTER TABLE `institutions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `standards`
--
ALTER TABLE `standards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`institutions_id`) REFERENCES `institutions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
