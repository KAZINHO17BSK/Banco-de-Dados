CREATE DATABASE Taskmaster;

CREATE TABLE Task (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(20),
    Email VARCHAR(20),
    Senha VARCHAR(20),
    Likes INT
);

INSERT INTO Task (Nome, Email, Senha) 
VALUES 
    ('Charles', 'Charles@gmail.com', '1305'),
    ('Lucas', 'Lucas@gmail.com', '0000'),
    ('Kratos', 'Kratos@gmail.com', '1234'),
    ('Ana Silva', 'Ana.silva@example.com', 'Ana@1234'),
    ('João Oliveira', 'Joao.oliveira@example.com', 'Joao@5678'),
    ('Maria Santos', 'maria.santos@example.com', 'Maria@abcd');