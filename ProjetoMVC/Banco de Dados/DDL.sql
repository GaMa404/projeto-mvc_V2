CREATE DATABASE db_sistemaV2;

USE db_sistemaV2;

-- Criando um usuário
CREATE USER 'aluno'@'localhost' IDENTIFIED BY '123';

-- Adicionar todos os privilégios
-- GRANT ALL PRIVILEGES ON db_sistemaV2.* TO 'aluno'@'localhost'; 

-- Remover todos os privilégios
REVOKE ALL, GRANT OPTION FROM 'aluno'@'localhost';

-- Adicionando apenas privilégios que o usuário terá acesso (nesse caso, insert, select e update)
GRANT INSERT, SELECT, UPDATE ON db_sistemaV2.* TO 'aluno'@'localhost' IDENTIFIED BY '123';

-- Liberar privilégios ao usuário
FLUSH PRIVILEGES;

-- Mostrar privilégios que o usuário tem acesso
SHOW GRANTS FOR aluno@localhost;


CREATE TABLE categoria_produto
(
    id INT AUTO_INCREMENT,
    descricao VARCHAR(150) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE produto 
(
    id INT AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    descricao VARCHAR(100) NOT NULL,
    preco DOUBLE NOT NULL,
    id_categoria_produto INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_categoria_produto) REFERENCES categoria_produto(id)
);

CREATE TABLE pessoa
(
    id INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    rg VARCHAR(45) NOT NULL,
    cpf CHAR(11) NOT NULL,
    data_nascimento DATE NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    PRiMARY KEY (id) 
);

CREATE TABLE cargo
(
    id INT AUTO_INCREMENT,
    descricao VARCHAR(150) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE funcionario
(
    id INT AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    data_nascimento DATE NOT NULL,
    rg VARCHAR(45) NOT NULL,
    cpf CHAR(11) NOT NULL,
    sexo VARCHAR(50) NOT NULL,
    id_cargo INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_cargo) REFERENCES cargo(id)
);

CREATE TABLE usuario 
(
    id INT AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO usuario (nome, email, senha) VALUES ("a", "aaaa@gmail.com", sha1("123"));
select * from usuario;

select sha1('oi');