-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Maio-2023 às 17:03
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `codigo_login` int(11) NOT NULL,
  `nome_completo_login` varchar(100) DEFAULT NULL,
  `nome_login` varchar(50) DEFAULT NULL,
  `senha_login` varchar(32) DEFAULT NULL,
  `tipo_login` int(11) DEFAULT NULL,
  `email_login` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`codigo_login`, `nome_completo_login`, `nome_login`, `senha_login`, `tipo_login`, `email_login`) VALUES
(1, 'Administrador', 'admin', '202cb962ac59075b964b07152d234b70', 0, 'gustavobreno44@gmail.com'),
(2, 'Cliente', 'cliente', '202cb962ac59075b964b07152d234b70', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `codigo_veiculo` int(11) NOT NULL,
  `modelo_veiculo` varchar(200) NOT NULL,
  `ano_veiculo` varchar(200) NOT NULL,
  `categoria_veiculo` varchar(200) DEFAULT NULL,
  `cor_veiculo` text NOT NULL,
  `descricao_veiculo` varchar(255) DEFAULT NULL,
  `marca_veiculo` varchar(200) DEFAULT NULL,
  `imagem_veiculo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`codigo_veiculo`, `modelo_veiculo`, `ano_veiculo`, `categoria_veiculo`, `cor_veiculo`, `descricao_veiculo`, `marca_veiculo`, `imagem_veiculo`) VALUES
(20, 'AUDIO15', '2023', 'SEDAN', 'AMARELO', 'AUDI', 'AUDI', NULL),
(1316, 'HACTCH', '2023', 'HATCH', 'BRANCO', ' ARGO', NULL, NULL),
(202320, 'TRACKER AUTOMATICA 4X4', '2023', 'SUV', 'VERMELHO VINHO ', 'TRACKER', NULL, NULL),
(202321, 'S10 PLUS', '2023', 'PICK UP', 'BRANCO ', 'PICKUP S10', NULL, NULL),
(202322, 'COMPLETO', '2025', 'HATCH', 'BRANCO', ' ARGO', 'FIAT', NULL),
(202325, 'HACTCH', '2023', NULL, '', ' ARGO', 'FIAT', '6462edd350930.jpeg'),
(202326, 'HACTCH', '2023', NULL, '', ' ARGO', 'onix chev', '6464188f9c23f.jpeg'),
(202327, 'HACTCH', '2023', NULL, '', ' ARGO', 'onix chev', '646424b52ea31.jpg'),
(202328, 'HACTCH', '2023', NULL, '', 'onix', 'onix chev', '6464ec7e4c5f6.jpeg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`codigo_veiculo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `codigo_veiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202329;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
