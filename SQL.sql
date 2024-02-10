-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 10/02/2024 às 02:47
-- Versão do servidor: 5.7.23-23
-- Versão do PHP: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `studi785_acolhimento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagens`
--

CREATE TABLE `imagens` (
  `id_imagem` int(11) NOT NULL,
  `url` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `imagens`
--

INSERT INTO `imagens` (`id_imagem`, `url`, `descricao`) VALUES
(192, 'https://fasavic.com.br/semanapremiada/imagens/fone.png', 'NADA'),
(193, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(194, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(196, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(197, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(198, 'https://fasavic.com.br/semanapremiada/imagens/fone.png', 'NADA'),
(199, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(201, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(202, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(204, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(205, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(206, 'https://fasavic.com.br/semanapremiada/imagens/fone.png', 'NADA'),
(207, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(208, 'https://fasavic.com.br/semanapremiada/imagens/fone.png', 'NADA'),
(209, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(210, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(211, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(212, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(213, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(215, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(216, 'https://fasavic.com.br/semanapremiada/imagens/fone.png', 'NADA'),
(217, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(218, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(220, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(221, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(222, 'https://fasavic.com.br/semanapremiada/imagens/fone.png', 'NADA'),
(223, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(224, 'https://fasavic.com.br/semanapremiada/imagens/fone.png', 'NADA'),
(226, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(227, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(228, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(229, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(230, 'https://fasavic.com.br/semanapremiada/imagens/fone.png', 'NADA'),
(231, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(233, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(234, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(236, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(237, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(238, 'https://fasavic.com.br/semanapremiada/imagens/fone.png', 'NADA'),
(239, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(240, 'https://fasavic.com.br/semanapremiada/imagens/fone.png', 'NADA'),
(241, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(242, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(243, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(244, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(246, 'https://fasavic.com.br/semanapremiada/imagens/fone.png', 'NADA'),
(247, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(249, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(250, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA'),
(251, 'https://fasavic.com.br/semanapremiada/imagens/mochila.png', 'NADA'),
(252, 'https://fasavic.com.br/semanapremiada/imagens/nada.png', 'NADA');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1096;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
