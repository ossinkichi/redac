-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2022 às 07:53
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `redacteste`
--
CREATE DATABASE IF NOT EXISTS `redacteste` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `redacteste`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `cargo` varchar(15) DEFAULT 'aluno',
  `matricula` int(8) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `serie` int(1) NOT NULL,
  `curso` varchar(50) DEFAULT NULL,
  `turno` varchar(15) NOT NULL,
  `turma` varchar(5) NOT NULL,
  `situacao` varchar(50) DEFAULT NULL,
  `presenca` int(11) DEFAULT 0,
  `falta` int(11) DEFAULT 0,
  `und_1` int(2) DEFAULT 0,
  `und_2` int(2) DEFAULT 0,
  `und_3` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`cargo`, `matricula`, `nome`, `nascimento`, `telefone`, `email`, `serie`, `curso`, `turno`, `turma`, `situacao`, `presenca`, `falta`, `und_1`, `und_2`, `und_3`) VALUES
('aluno', 12457863, 'seilafds', '2032-05-22', '', '', 2, 'informatica', 'noturno', '2', 'estudando', 0, 0, 0, 0, 0),
('aluno', 85746321, 'jaiton rabelo', '2008-02-15', '', '', 2, 'informatica', 'noturno', '1', 'estudando', 0, 0, 0, 0, 0),
('aluno', 87654321, 'Izadora pinto reis', '2005-06-12', '', '', 1, 'emfermagem', 'noturno', '1', 'estudando', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequenciia`
--

CREATE TABLE `frequenciia` (
  `matricula` int(8) DEFAULT NULL,
  `nome` varchar(300) NOT NULL,
  `turma` varchar(5) NOT NULL,
  `segunda` varchar(1) NOT NULL,
  `terca` varchar(1) NOT NULL,
  `quarta` varchar(1) NOT NULL,
  `quinta` varchar(1) NOT NULL,
  `sexta` varchar(1) NOT NULL,
  `presenca` int(4) NOT NULL,
  `falta` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `frequenciia`
--

INSERT INTO `frequenciia` (`matricula`, `nome`, `turma`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `presenca`, `falta`) VALUES
(12345678, 'olinda oliveira silva', '3TIM', 'F', '', '', '', '', 0, 0),
(87654321, 'mario armario', '3TIM', 'P', '', '', '', '', 0, 0),
(12457863, 'seilafds', '3TIM', '', '', '', '', '', 0, 0),
(NULL, '', '', 'P', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `matricula` int(8) DEFAULT NULL,
  `nome` varchar(300) NOT NULL,
  `turma` varchar(5) NOT NULL,
  `atv_1` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `cargo` varchar(10) DEFAULT 'professor',
  `nome` varchar(300) NOT NULL,
  `nascimento` date NOT NULL,
  `materia` varchar(15) NOT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `cargo`, `nome`, `nascimento`, `materia`, `telefone`, `email`) VALUES
(1, 'professor', 'Geraldo oliveira pinto', '1995-02-14', 'biologia', '', 'pinto@gmail.com'),
(2, 'professor', 'Jacinto pinto dos santos', '2001-08-01', 'fisica', '', ''),
(3, 'professor', 'Aislan', '1985-12-15', 'segurança de si', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretaria`
--

CREATE TABLE `secretaria` (
  `id` int(11) NOT NULL,
  `cargo` varchar(5) NOT NULL DEFAULT 'admin',
  `nome` varchar(300) NOT NULL DEFAULT 'secretaria',
  `senha` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `secretaria`
--

INSERT INTO `secretaria` (`id`, `cargo`, `nome`, `senha`) VALUES
(1, 'admin', 'secretaria', 'senha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `id` int(11) NOT NULL,
  `serie` int(1) DEFAULT NULL,
  `curso` varchar(15) DEFAULT NULL,
  `turno` varchar(15) DEFAULT NULL,
  `sala` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `serie`, `curso`, `turno`, `sala`) VALUES
(1, 1, 'informatica', 'vespertino', 2),
(2, 2, 'analises clinic', 'noturno', 1),
(3, 3, 'nutrição', 'vespertino', 1),
(4, 2, 'Analises Clinic', 'Noturno', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
