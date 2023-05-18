create database n8_mini_projeto;
use n8_mini_projeto;
create table usuario
(
id_usuario int not null auto_increment primary key ,
nome_usuario varchar(50) not null  ,
nascimento_usuario datetime not null  ,
cadastro_usuario timestamp not null  ,
usuario_usuario varchar(50) not null  ,
senha_usuario varchar(50) not null  ,
img_usuario longblob not null  ,
obs_usuario varchar(255) null  ,
status_usuario varchar(30) not null 
)
select * from usuario;

alter table usuario 
modify column usuario_usuario varchar(50) not null unique ;

insert into usuario (nome_usuario,nascimento_usuario,usuario_usuario,senha_usuario,img_usuario,obs_usuario,status_usuario)
values('adminstrador','2004-10-14','adm','123','','','ativo'),
('junior','1999-02-01','jun','0000','','','ativo'),
('antonio','1980-11-02','toni','0000','','','ativo'),
('ronaldo','2001-09-11','ron','0000','','','ativo'),
('julia','2005-09-15','hillary','0000','','','ativo');

delete from usuario where id_usuario = 1;

create table categoria
(
id_categoria int not null auto_increment primary key ,
nome_categoria varchar(50) not null  ,
desc_categoria varchar(255) not null  ,
obs_categoria varchar(255) null  ,
status_categoria varchar(30) not null  
);

insert into categoria (nome_categoria,desc_categoria,obs_categoria,status_categoria)
values('eltredomestico','casas bahia','','ativo'),
	('eletronico','eletronico','','ativo'),
    ('acessorios para verao','praia','','ativo'),
    ('roupas','','','ativo'),
    ('escritorio','papelaria','','ativo');

select * from categoria;

create table produto
(
id_produto int not null auto_increment primary key,
id_categoria_produto int not null  ,
nome_produto varchar(255) not null unique ,
qtde_produto int not null  ,
peso_produto decimal(10,2) not null  ,
unidade_produto varchar(30) not null  ,
cadastro_produto timestamp not null  ,
valorcusto_produto decimal(10,2) not null  ,
valorvenda_produto decimal(10,2) not null  ,
obs_produto varchar(255) null  ,
status_produto char(30) not null  ,

constraint fk_id_categoria_produto foreign key (id_categoria_produto) references categoria(id_categoria)
);

select * from produto;

insert into produto (id_categoria_produto,nome_produto,qtde_produto,peso_produto,unidade_produto,valorcusto_produto,valorvenda_produto,obs_produto,status_produto)
values (1,'microondas',1,50,2,20.10,250.20,'','ativo'),
		(2,'celular',1,05,25,300.50,3500.99,'','ativo'),
        (3,'biquini',69,02,250,05.99,15.50,'','ativo'),
        (4,'blusa',5,30,35,150.00,650.00,'','ativo'),
        (5,'caneta',200,02,25,00.30,05.50,'','ativo');

create table historico
(
id__historico int not null auto_increment primary key ,
id_produto_historico int not null  ,
id_usuario_historico int not null  ,
valorvenda_historico decimal(10,2) not null  ,
datacadastro_historico timestamp not null  ,
qtde_historico int not null  ,
desc_historico varchar(255) not null  ,
obs_historico varchar(255) null  ,
status_historico varchar(30) not null  ,

constraint fk_id_produto_historico foreign key (id_produto_historico) references produto(id_produto),
constraint fk_id_usuario_historico foreign key (id_usuario_historico) references usuario (id_usuario)
);	
insert into historico (id_produto_historico,id_usuario_historico,valorvenda_historico,qtde_historico,desc_historico,obs_historico,status_historico)
values (1,2,200.00,5,'','','ativo'),
(7,3,210.00,5,'','','ativo'),
(8,4,220.00,5,'','','ativo'),
(9,5,230.00,5,'','','ativo'),
(10,6,240.00,5,'','','ativo');





select * from historico;
