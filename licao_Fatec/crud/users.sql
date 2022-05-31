-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 31-Maio-2022 às 21:25
-- Versão do servidor: 10.5.12-MariaDB
-- versão do PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id18842830_db_login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_data` date NOT NULL,
  `user_mensagem` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_data`, `user_mensagem`, `active`) VALUES
(5, 'Lucas Balbino', 'balbinolucas33@gmail.com', '2022-05-11', ' oi', 0),
(7, 'ALEXANDRE SANTOS DA SILVA', 'balbinolucas33@gmail.com', '2022-05-14', ' 9097', 0),
(8, 'Lucas Balbino', 'lucas.balbinosantos@hotmail.com', '2022-05-31', 'teste', 0),
(9, 'claudei', 'clau@gmail.com', '2022-05-12', 'Bom dia', 0),
(13, 'Lucas123', 'lucas.silva844@fatec.sp.gov.br', '2022-05-04', 'dfghj', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
