CREATE DATABASE IF NOT EXISTS bd_crud;
USE bd_crud;
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    idade INT
);

INSERT INTO usuarios (nome, email, idade) VALUES ('João Silva', 'joao@example.com', 30);