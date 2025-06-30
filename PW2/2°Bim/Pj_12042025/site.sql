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
-- Banco de dados: `site`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagem`
--

CREATE TABLE `imagem` (
  `Id_Imagem` int(11) NOT NULL,
  `LinkImagem` varchar(100) NOT NULL,
  `Conteudo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `imagem`
--

INSERT INTO `imagem` (`Id_Imagem`, `LinkImagem`, `Conteudo`) VALUES
(1, 'https://br.freepik.com/vetores-gratis/objetos-de-laboratorio-de-ciencias_7409937.htm#fromView=keywor', 'Imagem com vários temas de biologia'),
(2, 'https://br.freepik.com/fotos-gratis/quadro-negro-inscrito-com-formulas-e-calculos-cientificos_589695', 'Quadro com variadas contas matemáticas');

-- --------------------------------------------------------

--
-- Estrutura para tabela `interface`
--

CREATE TABLE `interface` (
  `LinkSite` varchar(50) NOT NULL,
  `Id_Audio` int(11) NOT NULL,
  `Id_Imagem` int(11) NOT NULL,
  `Id_Video` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `interface`
--

INSERT INTO `interface` (`LinkSite`, `Id_Audio`, `Id_Imagem`, `Id_Video`) VALUES
('www.estudemicrobiologia.com.br', 1, 1, 1),
('www.matematicaparainiciantes.com', 2, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vídeo`
--

CREATE TABLE `vídeo` (
  `Id_Video` int(11) NOT NULL,
  `LinkVideo` varchar(100) NOT NULL,
  `Conteudo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `vídeo`
--

INSERT INTO `vídeo` (`Id_Video`, `LinkVideo`, `Conteudo`) VALUES
(1, 'https://www.youtube.com/watch?v=StO7aM4JUzc', 'Vídeo sobre biologia, envolvendo mais sobre microbiologia'),
(2, 'https://www.youtube.com/watch?v=qEDnZzzks7Q', 'Vídeo de matemática explicando sobre diagrama de venn');

-- --------------------------------------------------------

--
-- Estrutura para tabela `áudio`
--

CREATE TABLE `áudio` (
  `Id_Audio` int(11) NOT NULL,
  `LinkAudio` varchar(100) NOT NULL,
  `Conteudo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `áudio`
--

INSERT INTO `áudio` (`Id_Audio`, `LinkAudio`, `Conteudo`) VALUES
(1, 'https://open.spotify.com/episode/2f4CTQeLSSYJirxiTQsuoZ?si=4b5e18a162e8447e', 'Podcast sobre microbiologia para auxiliar nos estudos'),
(2, 'https://open.spotify.com/episode/0WWdJepasT0QArOB0ikrss?si=OTF77qVyRACopLkgdcWUCw', 'Podcast sobre diagrama de venn para auxílio nos estudos');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`Id_Imagem`);

--
-- Índices de tabela `interface`
--
ALTER TABLE `interface`
  ADD PRIMARY KEY (`LinkSite`);

--
-- Índices de tabela `vídeo`
--
ALTER TABLE `vídeo`
  ADD PRIMARY KEY (`Id_Video`);

--
-- Índices de tabela `áudio`
--
ALTER TABLE `áudio`
  ADD PRIMARY KEY (`Id_Audio`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `Id_Imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vídeo`
--
ALTER TABLE `vídeo`
  MODIFY `Id_Video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `áudio`
--
ALTER TABLE `áudio`
  MODIFY `Id_Audio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
