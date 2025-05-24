CREATE DATABASE IF NOT EXISTS dPainelDB;
USE dPainelDB;

-- Criação da tabela de lutadores
CREATE TABLE card (
    id SERIAL PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricaoPublica TEXT,
    descricaoInterna TEXT,
    status VARCHAR(50) NOT NULL,
    rua VARCHAR(150),
    bairro VARCHAR(100),
    cidade VARCHAR(100),
    projeto VARCHAR(100),
    prazoEstimado VARCHAR(50),
    imagemOcorrencia VARCHAR(255),
    dataCriacao TIMESTAMP NOT NULL DEFAULT NOW(),
    dataAtualizacao TIMESTAMP NOT NULL DEFAULT NOW(),
    tecnicoResponsavel VARCHAR(100),
    supervisor VARCHAR(100)
);

