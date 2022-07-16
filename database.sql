
#TABELAS PARA O SISTEMA WEB

#DROP DATABASE IF EXISTS CHURCH;
CREATE DATABASE IF NOT EXISTS CHURCH;
USE CHURCH;

CREATE TABLE secretario
(
codsecre_pk INT PRIMARY KEY AUTO_INCREMENT,
nm_sc VARCHAR(50),
cpf VARCHAR(14),
rg VARCHAR(30),
cep VARCHAR(25),
tel VARCHAR(40),
email VARCHAR(50),
cargo VARCHAR(30)
);


CREATE TABLE membro -- Tabela membro é filha da tabela secretario
(
codmem_pk INT PRIMARY KEY AUTO_INCREMENT,
nm VARCHAR(50),
cpf VARCHAR(14),
rg VARCHAR(30),
cep VARCHAR(25),
uf VARCHAR(15),
email VARCHAR(50),
#ft BLOB,
conjg VARCHAR(50),
nacio VARCHAR(45),
natur VARCHAR(45),
sx VARCHAR(30),
cargo VARCHAR(30),
cel VARCHAR(45),
ddd VARCHAR(50),
tel VARCHAR(45),
dtnasc DATE,
dtbat DATE,
codsecre_fk INT,
 FOREIGN KEY(codsecre_fk) REFERENCES secretario(codsecre_pk)
);

#TABELAS PARA AUTENTICAÇÃO DE LOGIN

#DROP TABLE usuario;
#DROP TABLE niveis_acessos;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT '0',
  `niveis_acesso_id` int(11) NOT NULL DEFAULT '2',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;
--  O InnoDB se baseia em transações (bloqueio de transações)

-- Estrutura da tabela `niveis_acessos`
CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ; 
--  O InnoDB se baseia em transações (bloqueio de transações)
