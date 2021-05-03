create database colonybike;
use colonybike;

create table cliente(
id int not null auto_increment,
rg varchar (15),
cpf varchar (15),
nome varchar(50),
sobrenome varchar(50),
email varchar (50),
senha varchar (20),
tipo varchar(50),
	primary key(id)
);



   
create table categoria (
id int auto_increment primary key,
tipo varchar (50)
);

   
create table produto (
id int auto_increment primary key,
id_categoria int,
tamanho varchar (12),
preco double,
cor varchar (20),
nome varchar (50),
imagem varchar (250),
 foreign key (id_categoria)
references categoria(id)
     );


create table contato (
id int not null auto_increment,
id_cliente int,
email varchar (15),
telefone varchar (15),
celular varchar (15),
primary key(id),
	foreign key (id_cliente) references cliente (id)
    );


create table endereco (
id int not null auto_increment,
id_cliente int,
cep varchar (15),
bairro varchar (50),
rua varchar (50),
numero int,
complemento varchar (50),
primary key(id),
	foreign key (id_cliente) references cliente (id)
    );


insert into cliente (nome,sobrenome,email,senha,rg,cpf,tipo) values ("Matheus", "Bockor","matheusbck10@hotmail.com","senha123","85296377","789654321","ADM");

insert into categoria (tipo) values ("Bikes Completas");
insert into categoria (tipo) values ("Guidoes");
insert into categoria (tipo) values ("Mesas");
insert into categoria (tipo) values ("Freios");
insert into categoria (tipo) values ("Aros");
insert into categoria (tipo) values ("Pneus");
insert into categoria (tipo) values ("Cubos");
insert into categoria (tipo) values ("Acessorios");
insert into categoria (tipo) values ("Quadros");

create table comentarios (
id int not null auto_increment,
nome varchar (90),
email varchar (80),
coment varchar (300),
primary key(id)
);


	