-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Mar-2021 às 19:02
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `modaz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idProdutos` text NOT NULL,
  `nomeProdutos` text NOT NULL,
  `fotoProdutos` text NOT NULL,
  `qtdProdutos` text NOT NULL,
  `tamanhoProdutos` text NOT NULL,
  `valorProdutos` text NOT NULL,
  `modoPagamento` varchar(20) NOT NULL,
  `valorTotal` double NOT NULL,
  `opcaoEnvio` varchar(20) NOT NULL,
  `dataCompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id`, `idUsuario`, `idProdutos`, `nomeProdutos`, `fotoProdutos`, `qtdProdutos`, `tamanhoProdutos`, `valorProdutos`, `modoPagamento`, `valorTotal`, `opcaoEnvio`, `dataCompra`) VALUES
(8, 28, '1¬2¬3¬4¬5¬6¬', 'Produto de Teste¬Produto de Teste¬Produto de Teste¬Produto de Teste¬Produto de Teste¬Produto de Teste¬', 'img/8.jpg¬img/9.jpg¬img/10.jpg¬img/12.jpg¬img/13.jpg¬img/top.jpg¬', '1¬1¬1¬1¬1¬1¬', '43¬12¬12¬12¬12¬12¬', '0.76¬1231.23¬123.12¬1231.23¬1231.23¬1.23¬', 'Boleto', 0, '3841.30', '2021-03-03'),
(9, 28, '5¬', 'Produto de Teste¬', 'img/13.jpg¬', '1¬', '12¬', '1231.23¬', 'Cartão de Crédito - ', 0, '1236.13', '2021-03-03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `anoLancamento` year(4) NOT NULL,
  `descricaoM` varchar(600) NOT NULL,
  `preco` double NOT NULL,
  `qtd` int(11) NOT NULL,
  `ntp` int(11) DEFAULT NULL,
  `tamanho` varchar(300) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `descricaoP` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `anoLancamento`, `descricaoM`, `preco`, `qtd`, `ntp`, `tamanho`, `foto`, `descricaoP`) VALUES
(1, 'Produto de Teste', 2021, 'Simplesmente um produto de teste para saber se está funcionando.', 0.76, 5454, 1, '43', 'img/8.jpg', '&lt;p style=&quot;line-height: 1;&quot;&gt;Um texto aleat&oacute;rio.&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/p&gt;&lt;hr&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;hr&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;hr&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/p&gt;&lt;hr&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/p&gt;&lt;hr&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/p&gt;&lt;hr&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/p&gt;&lt;hr&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/p&gt;&lt;hr&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/p&gt;&lt;hr&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;hr&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;'),
(2, 'Produto de Teste', 2021, 'Simplesmente um produto de teste para saber se está funcionando.', 1231.23, 12312, 10, '12,12,12,22,42,53,45,34,36,46', 'img/9.jpg', '&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;b&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/b&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;'),
(3, 'Produto de Teste', 2021, 'Simplesmente um produto de teste para saber se está funcionando.', 0.12, 12, 9, '12,34,14,23,42,34,24', 'img/10.jpg', '&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;b&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/b&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;'),
(4, 'Produto de Teste', 2021, 'Simplesmente um produto de teste para saber se está funcionando.', 1.23, 12, 8, '12,34,23,42,35,35,34', 'img/12.jpg', '&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;b&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/b&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;'),
(5, 'Produto de Teste', 2021, 'Simplesmente um produto de teste para saber se está funcionando.', 1.23, 12, 2, '12,31', 'img/13.jpg', '&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;b&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/b&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;'),
(6, 'Produto de Teste', 2021, 'Simplesmente um produto de teste para saber se está funcionando.', 3, 12, 5, '12,31,33,12,31', 'img/top.jpg', '&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;b&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/b&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;xxxxxxxxxxxxxxxxxxxxx&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1;&quot;&gt;&lt;span style=&quot;font-size: 1rem;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `adm` tinyint(1) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `cpf` char(11) NOT NULL,
  `cep` char(8) NOT NULL,
  `telefone` text NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(300) DEFAULT NULL,
  `cidade` varchar(300) NOT NULL,
  `bairro` varchar(300) NOT NULL,
  `estado` char(2) NOT NULL,
  `email` varchar(300) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nCartao` char(19) DEFAULT NULL,
  `cpfCartao` char(11) DEFAULT NULL,
  `nomeCartao` varchar(1000) DEFAULT NULL,
  `validadeCartao` text DEFAULT NULL,
  `codigoSeg` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `adm`, `nome`, `sobrenome`, `data`, `sexo`, `cpf`, `cep`, `telefone`, `endereco`, `numero`, `complemento`, `cidade`, `bairro`, `estado`, `email`, `senha`, `nCartao`, `cpfCartao`, `nomeCartao`, `validadeCartao`, `codigoSeg`) VALUES
(27, 1, 'Christhian ', 'Vieira', '2002-12-13', 'Masculino', '00000000000', '00000000', '(00) 0000-00000', 'xxxxxxxxxxxxxx', 0, 'xxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxx', 'xx', 'good@gmail.com', '123', NULL, NULL, NULL, NULL, NULL),
(28, 0, 'Pedro ', 'Reis', '2002-06-16', 'Masculino', '00000000001', '00000000', '(00) 0000-00000', 'xxxxxxxx', 0, 'xxxxxxxxxx', 'xxxxxxxxxxxxxx', 'xxxxxxxxxxxx', 'xx', 'pessoa@gmail.com', '123', '0000 0000 0000 0000', '00000000000', 'Pedro Reis', '12/2028', '213');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idUsuarioC` (`idUsuario`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_idUsuarioC` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
