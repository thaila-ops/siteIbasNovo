-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Set-2025 às 02:39
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `buffet_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `tipo_evento` varchar(50) NOT NULL,
  `num_convidados` int(11) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`id`, `nome`, `telefone`, `email`, `data_evento`, `hora_evento`, `tipo_evento`, `num_convidados`, `criado_em`) VALUES
(1, 'thaila ', '(44) 99700-0553', 'mayna.thayla@gmail.com', '2026-04-12', '14:00:00', 'Aniversário', 50, '2025-09-05 05:15:53'),
(2, 'thaila ', '(44) 99700-0553', 'mayna.thayla@gmail.com', '2026-12-30', '14:00:00', 'Aniversário', 50, '2025-09-05 05:16:31'),
(3, 'thaila ', '(44) 99700-0553', 'mayna.thayla@gmail.com', '2026-12-30', '14:00:00', 'Aniversário', 50, '2025-09-05 05:19:14'),
(4, 'thaila ', '(44) 99700-0553', 'mayna.thayla@gmail.com', '2026-12-30', '14:00:00', 'Aniversário', 50, '2025-09-05 05:19:58'),
(5, 'thaila ', '(44) 99700-0553', 'mayna.thayla@gmail.com', '2026-12-30', '14:00:00', 'Aniversário', 50, '2025-09-05 05:21:49'),
(6, 'sebastião cardoso', '(44) 99700-0553', 'bastiaocardoso97@gmail.com', '2025-12-30', '15:00:00', 'Aniversário', 50, '2025-09-05 05:22:26');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
