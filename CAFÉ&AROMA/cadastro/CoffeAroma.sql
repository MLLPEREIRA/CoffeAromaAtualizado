create database CoffeAroma;

use CoffeAroma;

#Cadrasto
create table Pessoa (
id int not null primary key auto_increment,
nome varchar(70) not null,
email varchar(50) not null,
senha varchar (50) not null
);

create table Produto (
id int not null primary key auto_increment,
produto varchar (50) not null,
desacrição varchar (100) not null,
tipo  varchar (50),
valor decimal (10,2) not null
);
insert into Produto (produto, descrição, tipo, valor) 
values ('Macarrão do bom','massa fina, macio e gostoso','macarrão',25),
('Doritos','salgadinho com gosto de queijo, crocante e saboroso','salgadinho',12);

#Fiz uma alteração porque errei o nome da coluna
ALTER TABLE Produto 
RENAME COLUMN desacrição TO descrição; 

#Inserindo uma iformação (testando)
insert into Pessoa (nome,email,senha)
values ('Phelipe Estevam','admbrawl@gmail.com','5924');

#consultando a tabela
select*from Produto 

 
