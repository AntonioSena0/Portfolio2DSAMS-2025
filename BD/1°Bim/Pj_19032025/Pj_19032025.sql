--Criando um BD
create database ExercBD01

--Entrando no BD
use ExercBD01

--Criando uma tabela
create table Pet(
NumRegistro int Primary Key NOT NULL,
Nome varchar(80),
Especie varchar(25),
Raca varchar(30),
Cor varchar(40),
Nascimento date NOT NULL,
Sexo varchar(9)
);

--Atribuindo Valores
Insert into Pet (NumRegistro, Nome, Especie, Raca, Cor, Nascimento, Sexo)
Values (1, 'Maya', 'Cachorro', 'Husky', 'Preto', '25/10/2020', 'F�mea');

Insert into Pet (NumRegistro, Nome, Especie, Raca, Cor, Nascimento, Sexo)
Values (2, 'Frajola', 'Gato', 'Vira-lata', 'Preto', '05/08/2022', 'Macho');

Insert into Pet (NumRegistro, Nome, Especie, Raca, Cor, Nascimento, Sexo)
Values (3, 'Treecko', 'Lagarto', 'Anolis', 'Verde', '10/05/2023', 'Macho');

Insert into Pet (NumRegistro, Nome, Especie, Raca, Cor, Nascimento, Sexo)
Values (4, 'Lilli', 'Coelho', 'Rex', 'Branca', '13/02/2024', 'F�mea');

Insert into Pet (NumRegistro, Nome, Especie, Raca, Cor, Nascimento, Sexo)
Values (5, 'Belinha', 'Capivara', 'Vira-lata', 'Marrom', '17/09/2023', 'F�mea');

Insert into Pet (NumRegistro, Nome, Especie, Raca, Cor, Nascimento, Sexo)
Values (6, 'L�o', 'Papagaio', 'eclectus', 'vermelho', '23/03/2016', 'Macho');

Insert into Pet (NumRegistro, Nome, Especie, Raca, Cor, Nascimento, Sexo)
Values (7, 'Zeca', 'Elefante', 'Africano', 'Cinza', '02/09/2002', 'Macho');

Insert into Pet (NumRegistro, Nome, Especie, Raca, Cor, Nascimento, Sexo)
Values (8, 'Spike', 'Tartaruga', 'C�gado', 'Verde', '24/03/2009', 'Macho');

Insert into Pet (NumRegistro, Nome, Especie, Raca, Cor, Nascimento, Sexo)
Values (9, 'Thor', 'Crocodilo', 'Moreleti', 'Verde', '22/01/2008', 'Macho');

Insert into Pet (NumRegistro, Nome, Especie, Raca, Cor, Nascimento, Sexo)
Values (10, 'Tony', 'Gato', 'Toyger', 'Laranja', '01/05/2013', 'Macho');

Select * From Pet

--Criando um BD
create database ExercBD02

--Entrando no BD
use ExercBD02

--Criando uma tabela
create table Departamento(
CodDepto int Primary Key NOT NULL,
NomeDepto varchar(50) NOT NULL
);

--Atribuindo Valores
Insert into Departamento(CodDepto, NomeDepto)
Values (1, 'Pol�cia')

Insert into Departamento(CodDepto, NomeDepto)
Values (2, 'Jur�dico')

Insert into Departamento(CodDepto, NomeDepto)
Values (3, 'T�cnico de Inform�tica')

Insert into Departamento(CodDepto, NomeDepto)
Values (4, 'Administra��o')

Insert into Departamento(CodDepto, NomeDepto)
Values (5, 'Recursos Humanos')

Select * from Departamento

--Criando uma tabela
create table Funcionario(
CodFunc int Primary Key NOT NULL,
Nome varchar(30) NOT NULL,
Departamento varchar(50) NOT NULL,
Salario float,
DataAdimissao date NOT NULL,
DataCadastro date NOT NULL,
Sexo varchar(9)
);

--Atribuindo Valores
Insert into Funcionario(CodFunc, Nome, Departamento, Salario, DataAdimissao, DataCadastro, Sexo)
Values (1, 'Ana Beatriz', 'Recursos Humanos', 4500.75, '20/11/2007', '06/11/2007', 'Feminino');

Insert into Funcionario(CodFunc, Nome, Departamento, Salario, DataAdimissao, DataCadastro, Sexo)
Values (2, 'Carlos', 'T�cnico de Inform�tica', 5530.25, '07/04/2009', '24/03/2009', 'Masculino');

Insert into Funcionario(CodFunc, Nome, Departamento, Salario, DataAdimissao, DataCadastro, Sexo)
Values (3, 'Maria', 'Recursos Humanos', 3000, '02/10/2014', '18/09/2014', 'Feminino');

Insert into Funcionario(CodFunc, Nome, Departamento, Salario, DataAdimissao, DataCadastro, Sexo)
Values (4, 'Vanessa', 'Administra��o', 3820.80, '25/03/2016', '11/03/2016', 'Feminino');

Insert into Funcionario(CodFunc, Nome, Departamento, Salario, DataAdimissao, DataCadastro, Sexo)
Values (5, 'Ana Carolina', 'Jur�dico', 5450.25, '29/03/2024', '15/03/2024', 'Feminino');

Insert into Funcionario(CodFunc, Nome, Departamento, Salario, DataAdimissao, DataCadastro, Sexo)
Values (6, 'Pedro', 'Pol�cia', 4200, '31/03/2024', '17/03/2024', 'Masculino');

Insert into Funcionario(CodFunc, Nome, Departamento, Salario, DataAdimissao, DataCadastro, Sexo)
Values (7, 'Lucas', 'Jur�dico', 5300, '24/04/2024', '10/04/2024', 'Masculino');

Insert into Funcionario(CodFunc, Nome, Departamento, Salario, DataAdimissao, DataCadastro, Sexo)
Values (8, 'Gabriel', 'Administra��o', 2850.10, '29/04/2024', '15/04/2024', 'Masculino');

Insert into Funcionario(CodFunc, Nome, Departamento, Salario, DataAdimissao, DataCadastro, Sexo)
Values (9, 'J�lia', 'Pol�cia', 4000, '03/06/2024', '20/05/2024', 'Feminino');

Insert into Funcionario(CodFunc, Nome, Departamento, Salario, DataAdimissao, DataCadastro, Sexo)
Values (10, 'Rafael', 'T�cnico de Inform�tica', 4000, '16/10/2024', '02/10/2024', 'Masculino');

Select * From Funcionario

--Criando um BD
create database ExercExtra

--Entrando no BD
use ExercExtra

--Criando uma tabela
create table Produtos(
ID int Primary Key Identity,
Nome varchar(50) NOT NULL,
Preco float NOT NULL,
Quantidade int NOT NULL,
);

Insert into Produtos Values('Camiseta', 29.99, 50);
Insert into Produtos Values('Cal�a Jeans', 89.90, 70);
Insert into Produtos Values('T�nis', 120, 60);
Insert into Produtos Values('Meias', 9.99, 100);
Insert into Produtos Values('Bon�', 19.95, 20);

select * from Produtos

