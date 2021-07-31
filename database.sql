CREATE DATABASE ava2pweb;
    USE ava2pweb;

    CREATE TABLE usuario(
        nome VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        nickname VARCHAR(50) NOT NULL,
        pass VARCHAR(32) NOT NULL, 
        CONSTRAINT PRIMARY KEY(nickname, email)
    );
