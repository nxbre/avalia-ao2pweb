CREATE DATABASE pweb2;
USE pweb2;

CREATE TABLE usuario(
    nome VARCHAR(50) NOT NULL,
    nomeusuario VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    senha VARCHAR(32) NOT NULL, 
    CONSTRAINT PRIMARY KEY(nomeusuario, email)
);
