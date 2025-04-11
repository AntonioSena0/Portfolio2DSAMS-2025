-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Abr-2025 às 20:38
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `Cod` int(11) NOT NULL,
  `Teclado` tinyint(1) NOT NULL,
  `Mouse` tinyint(1) NOT NULL,
  `Monitor` tinyint(1) NOT NULL,
  `Gabinete` tinyint(1) NOT NULL,
  `Cod_Func` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipamento`
--

INSERT INTO `equipamento` (`Cod`, `Teclado`, `Mouse`, `Monitor`, `Gabinete`, `Cod_Func`) VALUES
(1, 1, 0, 1, 1, 1),
(2, 1, 1, 1, 1, 2),
(3, 1, 1, 1, 1, 3),
(4, 0, 1, 1, 0, 4),
(5, 0, 0, 0, 0, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `Cod_Fornecedor` int(11) NOT NULL,
  `Razao_Social` varchar(70) NOT NULL,
  `Nome_Fantasia` varchar(70) NOT NULL,
  `CNPJ` varchar(20) NOT NULL,
  `Endereco` varchar(50) NOT NULL,
  `Num` varchar(7) NOT NULL,
  `Bairro` varchar(25) NOT NULL,
  `Cidade` varchar(25) NOT NULL,
  `Fone` varchar(18) NOT NULL,
  `Nome_Contato` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Site` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`Cod_Fornecedor`, `Razao_Social`, `Nome_Fantasia`, `CNPJ`, `Endereco`, `Num`, `Bairro`, `Cidade`, `Fone`, `Nome_Contato`, `Email`, `Site`) VALUES
(1, 'Fornecedor XYZ Ltda', 'Supermercado do Povo', '12.345.678/0001-90', 'Rua das Flores', '123', 'Jardim das Oliveiras', 'São Paulo', '(11)98765-4321', 'Maria Silva', 'fornecedoresXYZ@gmail.com', 'www.fornecedorxyz.com.br'),
(2, 'ABC Comércio de Alimentos', 'Dois Irmãos', '98.765.432/0001-01', 'Avenida Central', '456', 'Centro', 'Rio de Janeiro', '(21) 92345-6789', 'João Pereira', 'doisirmãosrecep@gmail.com', 'www.abccomercio.com'),
(3, 'Distribuidora de Bebidas Brasil', 'Bebidas Brasil', '11.222.333/0001-12', 'Travessa do Comércio', '789', 'Vila Nova', 'Belo Horizonte', '(31) 93456-7890', 'Ana Costa', 'bebidastobrasil@gmail.com', 'Site: www.botecodojoao.com.br'),
(4, 'Frutas e Verduras Comércio', 'Frutas & Verduras da Família', '44.555.666/0001-45', 'Rua da Fruta', '890', 'Jardim das Palmeiras', 'Salvador', '(71) 96789-0123', 'Lucas Almeida', 'frutas&verdurasfamily@gmail.com', 'www.quitandadoze.com.br'),
(5, 'Padaria Artesanal', 'HotBread', '88.999.000/0001-89', 'Rua do Pão', '678', 'Centro Histórico', 'Natal', '(84) 90123-4567', 'Renata Dias', 'hotbreadmarket@gmail.com', 'www.paoquente.com.br'),
(6, 'Produtos Naturais Ltda', 'Sabor Natural', '33.444.555/0001-34', 'Rua Verde', '567', 'Parque das Nações', 'Porto Alegre', '(11) 95678-9012', 'Fernanda Lima', 'sabornatural@gmail.com', 'www.saudeesabor.com.br'),
(7, 'Bebidas Premium Ltda', 'Premium Drinks', '77.888.999/0001-78', 'Av. das Bebidas', '567', 'Vila das Flores', 'Recife', '(11)99012-3456', 'Fábio Mendes', 'premiumdrinks@gmail.com', 'www.bardofabio.com.br'),
(8, 'Distribuidora de Lanches', 'Snack Paradise', '66.777.888/0001-67', 'Rua do Petisco', '345', 'Jardim das Orquídeas', 'Fortaleza', '(85) 98901-2345', 'Juliana Rocha', 'snackparadise@gmail.com', 'www.snackparadise.com.br'),
(9, 'Loja de Roupas Esportivas', 'VixelSports', '55.666.777/0001-56', 'Av. das Nações', '1234', 'Centro', 'Brasília', '(61) 97890-1234', 'Priscila Martins', 'vixelsportsofc@gmail.com', 'www.vsports.com.br'),
(10, 'Comércio de Comida para Animais', 'VetMate', '22.333.444/0001-23', 'Rua do Comércio', '234', 'Jardim das Flores', 'Curitiba', '(41) 94567-8901', 'Carlos Souza', 'vetmatofc@gmail.com', 'www.vetmat.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionário`
--

CREATE TABLE `funcionário` (
  `Cod_Func` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Setor` varchar(50) NOT NULL,
  `Salario` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionário`
--

INSERT INTO `funcionário` (`Cod_Func`, `Nome`, `Setor`, `Salario`) VALUES
(1, 'Paula Nascimento', 'Recursos Humanos', 3500),
(2, 'Arthur Gutemberg', 'Técnico de Informática', 5000),
(3, 'Felipe Vivêncio', 'Técnico de Informática', 6000),
(4, 'Andrei Oliveira', 'Departamento de Polícia', 10000),
(5, 'João Pedro', 'Jurídico', 15000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `Cod_Produto` int(11) NOT NULL,
  `Descricao` varchar(50) NOT NULL,
  `Unidade` varchar(2) NOT NULL,
  `Qtde_Estoque` double NOT NULL,
  `Caracteristicas` varchar(50) NOT NULL,
  `Cod_Fornecedor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`Cod_Produto`, `Descricao`, `Unidade`, `Qtde_Estoque`, `Caracteristicas`, `Cod_Fornecedor`) VALUES
(1, 'Arroz Branco', 'kg', 150, 'Produto de grão inteiro', 1),
(2, 'Feijão Preto', 'kg', 100, 'Pacote de coloração verde com os feijões dentro', 1),
(3, 'Café Torrado', 'kg', 30, 'Café e torradas com queijo', 5),
(4, 'Ração whiskas para gatos', 'kg', 150, 'Embalagem roxa com um gato', 10),
(5, 'Ração golden de arroz e frango para cachorros', 'kg', 200, 'Embalagem laranja com um cachorro', 10),
(6, 'Snack Praia do Sol', 'g', 30, 'Hamburguer com cebola, alface, carne, queijo e cal', 8),
(7, 'Roupa do Corinthians', 'M', 30, 'Camiseta preta do Corinthians com enfeites brancos', 9),
(8, 'Sunset Burguer', 'g', 50, 'Hamburguer com cheddar, bacon, carne, queijo e cal', 8),
(9, 'Pão de Forma', 'g', 150, 'Pão de forma em uma embalagem vermelha', 2),
(10, 'Óleo reparador de manchas', 'u', 50, 'Produto em uma embalagem de plástico rosa', 6),
(11, 'HotSoda', 'ml', 20, 'Drink com coloração rosa, possui álcool e é utiliz', 7),
(12, 'Pastel Alemão', 'g', 20, 'Um pastel com recheio de calabresa, queijo', 5),
(13, 'Coca Cola', 'L', 40, '2 garrafas de coca cola de 2.5L', 3),
(14, 'Cuba Libre', 'ml', 30, 'Bebida feita a base de coca cola', 7),
(15, 'Alface e tomate', 'g', 150, '200g de alface e 300g de tomate', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`Cod`);

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`Cod_Fornecedor`);

--
-- Índices para tabela `funcionário`
--
ALTER TABLE `funcionário`
  ADD PRIMARY KEY (`Cod_Func`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`Cod_Produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `Cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `Cod_Fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `funcionário`
--
ALTER TABLE `funcionário`
  MODIFY `Cod_Func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Cod_Produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
