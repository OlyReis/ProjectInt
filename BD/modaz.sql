-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Fev-2021 às 22:40
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
-- Estrutura da tabela `produto`
--

DROP TABLE 'produto';
CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `anoLancamento` year(4) NOT NULL,
  `discricaoM` varchar(600) NOT NULL,
  `preco` double NOT NULL,
  `qtd` int(11) NOT NULL,
  `NTP` int(11) DEFAULT NULL,
  `tamanho` varchar(300) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `discricaoP` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--
DROP TABLE 'usuario';
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `adm` tinyint(1) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `cpf` char(11) NOT NULL,
  `cep` int(10) NOT NULL,
  `telefone` text NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(300) DEFAULT NULL,
  `cidade` varchar(300) NOT NULL,
  `bairro` varchar(300) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `gmail` varchar(300) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `adm`, `nome`, `sobrenome`, `data`, `sexo`, `cpf`, `cep`, `telefone`, `endereco`, `numero`, `complemento`, `cidade`, `bairro`, `estado`, `gmail`, `senha`) VALUES
(1, 0, 'Pedro', 'Olavyo', '0000-00-00', 'masculino', '2147483647', 33860450, '3798836916', 'rua lua de mel', 666, 'null', 'Medeiros', 'Centro', 'MG', 'p@mail.com', 123),
(2, 0, 'Pedro', 'Olavyo', '1607-06-20', 'masculino', '2147483647', 33860450, '3798836916', 'rua lua de mel', 666, 'null', 'Medeiros', 'Centro', 'MG', 'p@mail.com', 123),
(3, 0, 'Pedro', 'Olavyo', '0000-00-00', 'masculino', '2147483647', 33860450, '3798836916', 'rua lua de mel', 666, 'null', 'Medeiros', 'Centro', 'MG', 'p@mail.com', 123),
(4, 0, 'Pedro', 'Olavyo', '0000-00-00', 'masculino', '2147483647', 33860450, '3798836916', 'rua lua de mel', 666, 'null', 'Medeiros', 'Centro', 'MG', 'p@mail.com', 123),
(5, 0, 'Pedro', 'Olavyo', '0000-00-00', 'masculino', '11111111111', 33860450, '3798836916', 'rua lua de mel', 666, 'null', 'Medeiros', 'Centro', 'MG', 'p@mail.com', 123),
(6, 0, 'Pedro', 'Olavyo', '0000-00-00', 'masculino', '11111111111', 33860450, '3798836916', 'rua lua de mel', 666, 'null', 'Medeiros', 'Centro', 'MG', 'p@mail.com', 123),
(7, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '12313131313', 23423253, '(33) 3312-31231', 'sadasdasdasdasd', 232, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', 123),
(8, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '12313131313', 23423253, '(33) 3312-31231', 'sadasdasdasdasd', 232, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', 123),
(9, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '12313131313', 23423253, '(33) 3312-31231', 'sadasdasdasdasd', 232, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', 123),
(10, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '12313131313', 23423253, '(33) 3312-31231', 'sadasdasdasdasd', 232, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', 123),
(11, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '12313131313', 23423253, '(33) 3312-31231', 'sadasdasdasdasd', 232, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', 123),
(12, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '5793641602', 23423253, '(33) 3312-31231', 'sadasdasdasdasd', 34, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', 141),
(13, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '05793641602', 23423253, '(33) 3312-31231', 'sadasdasdasdasd', 34, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', 141),
(14, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '05793641602', 23423253, '(33) 3312-31231', 'sadasdasdasdasd', 34, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', 141),
(15, 0, 'Pedro ', 'Reis', '0000-00-00', 'optionMasculino', '12312312313', 12313131, '(12) 3123-13131', 'adadadadada', 234, 'asdadadadads', 'weasDADADA', 'asdasdas', 'as', 'asdadadasda@gmail.com', 12),
(16, 0, 'Pedro ', 'Reis', '0000-00-00', 'optionMasculino', '12312312313', 12313131, '(12) 3123-13131', 'adadadadada', 234, 'asdadadadads', 'weasDADADA', 'asdasdas', 'as', 'asdadadasda@gmail.com', 12),
(17, 0, 'Pedro ', 'Reis', '0000-00-00', 'optionMasculino', '12312312313', 12313131, '(23) 4234-23423', 'adadadadada', 234, 'asdadadadads', 'weasDADADA', 'asdasdas', 'as', 'asdadadasda@gmail.com', 234),
(18, 0, 'Qweqwe', 'Qweqw', '0000-00-00', 'optionOutro', '32423423234', 23423423, '(23) 4234-23423', '23qweqwe', 234, 'qweqeqeqeqeqw', 'wadasd', 'asdasdads', 'as', 'asdadadada@gmailcom', 123),
(19, 0, 'Qweqwe', 'Qweqw', '0000-00-00', 'optionOutro', '32423423234', 23423423, '(23) 4234-23423', '23qweqwe', 234, 'qweqeqeqeqeqw', 'wadasd', 'asdasdads', 'as', 'asdadadada@gmailcom', 123),
(20, 0, 'Qweqwe', 'Qweqw', '0000-00-00', 'optionFeminino', '32423423234', 23423423, '(34) 5345-34534', '23qweqwe', 234, 'qweqeqeqeqeqw', 'wadasd', 'asdasdads', 'as', 'asdadadada@gmailcom', 345),
(21, 0, 'Jay', 'Simpson', '1956-08-20', 'optionOutro', '23423424242', 23424234, '(23) 4224-23424', 'Rua do ai caramba', 456, '', 'Sprindifild', 'Alameda Cento e Verde', 'Mg', 'home@gmail.com', 123);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
