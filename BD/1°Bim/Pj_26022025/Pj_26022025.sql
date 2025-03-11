--Exerc�cio1

-- Criando um BD
create database ExercBD01

-- Entrando no BD
use ExercBD01

Create table Pet
(
-- Criando o campo NumRegistro
NumRegistro int,
-- Criando o campo Nome
Nome varchar(80),
--Criando o campo Especie
Especie varchar(25),
--Criando o campo Raca
Raca varchar(30),
--Criando o campo Cor
Cor varchar(40),
--Criando o campo Nascimento
Nascimento datetime,
--Criando o campo Sexo
Sexo varchar(9)
);

delete Funcionario

--Exerc�cio 2

-- Criando um BD
create database ExercBD02

-- Entrando no BD
use ExercBD02

Create table Departamento
(
-- Criando o campo CodFunc
CodFunc int,
-- Criando o campo NomeDepto
NomeDepto varchar(50)
);

Create table Funcionario
(
CodFunc int,
NomeDepto varchar(50),
CodDepto int,
Ramal int NULL,
Salario float,
DataAdimissao datetime,
DataCadastro datetime,
Sexo char(1)
);

--Exerc�cio3

-- Criando um BD
create database ExercBD03

-- Entrando no BD
use ExercBD03

-- Criando o cadastro de produtos

Create table Produtos
(
-- Criando o campo ID_Produto
ID_Produto Int Primary Key Identity,
-- Criando o campo Nome
Nome Varchar(30) not null,
-- Criando o campo Preco
Preco float not null,
-- Criando o campo Estoque
Estoque int not null,
);

-- Criando o cadastro de Funcionario

Create table Funcionario
(
-- Criando o campo RM (Registro de Matricula)
RM int Primary Key Identity,
-- Criando o campo Nome
Nome Varchar(30) not null,
-- Criando o campo CPF
CPF Varchar(14) Unique not null,
-- Criando o campo Cargo
Cargo varchar(30) not null,
-- Criando o campo Sal�rio
Salario float not null
);

-- Criando o cadastro de Fornecedores

Create table Fornecedores
(
-- Criando o campo ID_Fornecedora
ID_Fornecedora int Primary Key identity,
-- Criando o campo Nome
Nome varchar(30) not null,
-- Criando o campo CNPJ
CNPJ varchar(18) Unique not null, 
-- Criando o campo Telefone
Telefone varchar(14) not null,
-- Criando o campo Produto
Produto varchar(30) not null,
);

-- Criando o cadastro de Departamentos

Create table Departamentos
(
-- Criando o campo ID_Departamento
ID_Departamento int Primary Key identity,
-- Criando o campo Nome
Nome varchar(30) not null,
-- Criando o campo Local
Endereço varchar(100) not null,
-- Criando o campo Respons�vel
Responsavel varchar(30) Unique not null,
);

-- Criando um BD

Create database ExercExtra

-- Entrando no BD

use ExercExtra

-- Criando cadastro de Cargos

Create table Cargos
(
-- Criando campo ID
ID int Primary Key identity,
-- Criando campo Nome
Nome varchar(30) not null,
-- Criando campo Cargo
Cargo varchar(50) not null,
-- Criando campo salario
salario float not null,
-- Criando campo CalendarioDeAdmissao
CalendarioDeAdmissao date not null,
);

Create table Equipamento
(
-- Criando campo ID
ID int Primary Key identity,
-- Criando campo Teclado
Teclado varchar(50) not null,
-- Criando campo Mouse
Mouse varchar(50) not null,
-- Criando campo Monitor
Monitor varchar(50) not null,
-- Criando campo Impressora
Impressora varchar(50) not null,
-- Criando campo Webcam
Webcam varchar(50) not null,
-- Criando campo ValorTotal
ValorTotal float not null,
);