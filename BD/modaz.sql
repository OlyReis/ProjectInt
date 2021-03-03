-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Mar-2021 às 17:35
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

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
  `modoPagamento` varchar(50) NOT NULL,
  `opcaoEnvio` varchar(50) NOT NULL,
  `valorTotal` double NOT NULL,
  `dataCompra` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `anoLancamento` char(4) NOT NULL,
  `descricaoM` varchar(600) NOT NULL,
  `preco` double NOT NULL,
  `qtd` int(11) NOT NULL,
  `ntp` int(11) NOT NULL,
  `tamanho` varchar(300) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `descricaoP` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `nCartao` char(19) NOT NULL,
  `cpfCartao` char(11) NOT NULL,
  `nomeCartao` varchar(1000) NOT NULL,
  `validadeCartao` text NOT NULL,
  `codigoSeg` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `adm`, `nome`, `sobrenome`, `data`, `sexo`, `cpf`, `cep`, `telefone`, `endereco`, `numero`, `complemento`, `cidade`, `bairro`, `estado`, `email`, `senha`, `nCartao`, `cpfCartao`, `nomeCartao`, `validadeCartao`, `codigoSeg`) VALUES
(52, 1, 'Pessoa ADM', 'Administradora', '0000-00-00', 'Masculino', '12345678912', '38930000', '(37) 9880-00088', 'Rua São João da Silva', 801, 'CASA', 'Juiz de Fora', 'Centro', 'MG', 'pessoadADM@hotmail.com', '89012', '2910 4367 8132 8915', '12345678912', 'Pessoa Administradoraasdf', '12/2024', 681);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idUsuario` (`idUsuario`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
