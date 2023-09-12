
--Criação do banco de dados

CREATE DATABASE upload_site;
USE upload_site;
CREATE TABLE arquivos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_arquivo VARCHAR(255),
    local_arquivo VARCHAR(255),
    data_upload TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);






-----------------Alterações posteriores---------------


-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 08/09/2023 às 20:22
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `upload_site`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(11) NOT NULL,
  `nome_arquivo` varchar(255) DEFAULT NULL,
  `local_arquivo` varchar(255) DEFAULT NULL,
  `data_upload` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `nome_arquivo`, `local_arquivo`, `data_upload`) VALUES
(1, 'ergergergerg.rar', 'uploads/64fb630fcff3f.rar', '2023-09-08 18:08:15'),
(2, 'teste (2).rar', 'uploads/64fb63f359283.rar', '2023-09-08 18:12:03'),
(3, 'teste (2).rar', 'uploads/64fb64af09782.rar', '2023-09-08 18:15:11'),
(4, 'teste (2).rar', 'uploads/64fb64b6de0db.rar', '2023-09-08 18:15:18'),
(5, 'teste (2).rar', 'uploads/64fb64ba88a8c.rar', '2023-09-08 18:15:22'),
(6, 'teste (2).rar', 'uploads/64fb64e1de72a.rar', '2023-09-08 18:16:01'),
(7, 'teste (2).rar', 'uploads/64fb6513cc28b.rar', '2023-09-08 18:16:51');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
