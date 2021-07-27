-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 27/07/2021 às 13:37
-- Versão do servidor: 8.0.26-0ubuntu0.20.04.2
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `b2b_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `postagem`
--

CREATE TABLE `postagem` (
  `idpostagem` int NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `texto` varchar(500) NOT NULL,
  `data` datetime NOT NULL,
  `usuario_idusuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `postagem`
--

INSERT INTO `postagem` (`idpostagem`, `titulo`, `texto`, `data`, `usuario_idusuario`) VALUES
(1, 'Título Postagem', 'Texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto', '2021-07-25 12:00:00', 1),
(2, 'Postagem nº 2', 'Texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto - texto', '2021-07-25 12:00:00', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `tipouser` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `email`, `username`, `senha`, `tipouser`) VALUES
(1, 'André Navarro', 'andre-navarro@hotmail.com', 'AndreNavarro', 'Andre@123', 0),
(2, 'Admin', 'admin@email.com', 'admin', 'admin', 1),
(3, 'User', 'user@email.com', 'user', 'user', 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`idpostagem`),
  ADD UNIQUE KEY `idpostagem_UNIQUE` (`idpostagem`),
  ADD KEY `fk_postagem_usuario_idx` (`usuario_idusuario`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `postagem`
--
ALTER TABLE `postagem`
  MODIFY `idpostagem` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `postagem`
--
ALTER TABLE `postagem`
  ADD CONSTRAINT `fk_postagem_usuario` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
