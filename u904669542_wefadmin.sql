-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08/12/2022 às 11:40
-- Versão do servidor: 10.5.12-MariaDB-cll-lve
-- Versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u904669542_wefadmin`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `link` varchar(200) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  `tipo_passagem` varchar(100) DEFAULT NULL,
  `origem` varchar(100) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `adultos` varchar(10) DEFAULT NULL,
  `criancas_1` varchar(10) DEFAULT NULL,
  `criancas_2` varchar(10) DEFAULT NULL,
  `tipo_viagem` varchar(100) DEFAULT NULL,
  `data_ida` varchar(15) DEFAULT NULL,
  `data_volta` varchar(15) NOT NULL,
  `bagagem` varchar(50) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `forms`
--

INSERT INTO `forms` (`id`, `link`, `nome`, `email`, `telefone`, `tipo_passagem`, `origem`, `destino`, `adultos`, `criancas_1`, `criancas_2`, `tipo_viagem`, `data_ida`, `data_volta`, `bagagem`, `created`, `modified`) VALUES
(4, 'voarmaiscomkelle.com.br', 'TESTE\n', 'teste@teste.com.br\n', '(43) 99626-2702\n', 'Ida e Volta\n', '', '', '1\n', '10\n', '5\n', 'Turismo\n', '07/12/2022\n', '08/12/2022\n', 'Quero bagagem de 23Kg\n', '2022-12-07 23:41:30', NULL),
(5, 'voarmaiscomkelle.com.br', 'TESTE\n', 'teste@teste.com.br\n', '(43) 99626-2702\n', 'Ida e Volta\n', '', '', '1\n', '10\n', '5\n', 'Turismo\n', '07/12/2022\n', '08/12/2022\n', 'Quero bagagem de 23Kg\n', '2022-12-07 23:42:40', NULL),
(6, 'voarmaiscomkelle.com.br', 'ALAN\n', 'gustavoribeiro1011@gmail.com\n', '(99) 99999-9999\n', 'Ida e Volta\n', '', '', '1\n', '2\n', '2\n', 'Turismo\n', '07/12/2022\n', '08/12/2022\n', 'Quero bagagem de 23Kg\n', '2022-12-07 23:43:41', NULL),
(7, 'voarmaiscomkelle.com.br', 'TESTE\n', 'teste21@gmail.com\n', '(11) 11111-1111\n', 'Ida e Volta\n', 'A\n', 'B\n', '1\n', '1\n', '1\n', 'Turismo\n', '08/12/2022\n', '09/12/2022\n', 'Quero bagagem de 23Kg\n', '2022-12-08 08:23:32', NULL),
(8, 'voarmaiscomkelle.com.br', 'adriano \n', 'adrianopessoalemail@gmail.com\n', '(17) 98841-8045\n', 'Somente Ida\n', '', '', '1\n', 'nenhum \n', 'nenhum \n', 'Morar\n', '10/12/2022\n', '', '\n', '2022-12-08 08:32:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `user`, `username`, `password`, `level`, `created`, `modified`) VALUES
(1, 'gustavoribeiro1011@gmail.com', 'gustavo', 'gustavo22b', 'admin', '2022-12-07 13:27:00', '2022-12-07 13:27:00'),
(2, 'adrianopessoalemail@gmail.com', 'adriano', '123456', 'admin', '2022-12-07 21:54:36', '2022-12-07 21:54:36'),
(3, 'kelle', 'kelle', '123456', 'user', '2022-12-07 23:38:37', '2022-12-07 23:38:37');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
