-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/04/2025 às 18:49
-- Versão do servidor: 10.4.22-MariaDB
-- Versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `matricula` varchar(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `codcurso` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`matricula`, `nome`, `endereco`, `cidade`, `codcurso`) VALUES
('10001', 'João Silva	', 'Rua das Flores, 123', 'São Paulo', '29'),
('10002', 'Maria Oliveira	', 'Av. Brasil, 456', 'Rio de Janeiro', '32'),
('10003', 'Pedro Santos', 'R. do Comércio, 789', 'Belo Horizonte', '41'),
('10004', 'Ana Paula', 'Av. Paulista, 222', 'São Paulo', '29'),
('10005', 'Lucas Almeida', 'Rua Central, 37', 'Curitib', '17'),
('10006', 'Camila Souza	', 'Av. Independência, 10	', 'Porto Alegre	', '32'),
('10007', 'Rafael Costa	', 'Rua Verde, 88	', 'Salvador', '29'),
('10008', 'Fernanda Lima	', 'Av. Atlântica, 55	', 'São Paulo', '41'),
('10009', 'Antonio Sena', 'Av Aguia de Haia, 2633', 'São Paulo', '29'),
('10010', 'Arthur Gutemberg', 'Av Aguia de Haia, 2633', 'São Paulo', '32'),
('10011', 'Felipe Vivêncio Rodrigues', 'Av Aguia de Haia, 2633', 'São Paulo', '29'),
('10012', 'Larissa Andrade', 'Av. do Trabalhador, 77', 'Santos', '32'),
('10013', 'Thiago Pereira	', 'R. da Alegria, 101	', 'Campinas	', '41'),
('10014', 'Carolina Ribeiro	', 'Av. Central, 44	', 'Vitória', '17'),
('10015', 'Miguel Heleno', 'Av Aguia de Haia, 2633', 'São Paulo', '29'),
('10016', 'Eduardo Nascimento', 'Rua Azul, 300	', 'Goiânia', '32'),
('10017', 'Gabriel Fernandes	', 'Rua Amarela, 67	', 'Belém', '17'),
('10018', 'João Xavier', 'Av Aguia de Haia, 2633', 'São Paulo', '29'),
('10019', 'Felipe Gonçalves	', 'R. da Esperança, 12	', 'João Pessoa	', '17'),
('10020', 'Andrei Oliveira', 'Av Aguia de Haia, 2633', 'São Paulo', '32');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `codcurso` char(2) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `coddisc1` char(2) NOT NULL,
  `coddisc2` char(2) NOT NULL,
  `coddisc3` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cursos`
--

INSERT INTO `cursos` (`codcurso`, `nome`, `coddisc1`, `coddisc2`, `coddisc3`) VALUES
('29', 'Análise e desenvolvimento de sistemas', '21', '22', '23'),
('32', 'Recursos Humanos', '31', '32', ''),
('41', 'Logística', '41', '42', '43'),
('17', 'Administração', '51', '52', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `CodDisciplina` char(2) NOT NULL,
  `NomeDisciplina` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `disciplinas`
--

INSERT INTO `disciplinas` (`CodDisciplina`, `NomeDisciplina`) VALUES
('21', 'Redes'),
('22', 'Desenvolvimento Web'),
('23', 'Design e Estilos'),
('31', 'Gestão'),
('32', 'Comportamento humano'),
('41', 'Matemática financeira'),
('42', 'Sistemas de informação gerenci'),
('43', 'Gestão de estoques'),
('51', 'Marketing'),
('52', 'Estratégia empresarial');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`codcurso`);

--
-- Índices de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`CodDisciplina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
