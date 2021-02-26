-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Fev-2021 às 14:48
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
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `anoLancamento` year(4) NOT NULL,
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
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `adm`, `nome`, `sobrenome`, `data`, `sexo`, `cpf`, `cep`, `telefone`, `endereco`, `numero`, `complemento`, `cidade`, `bairro`, `estado`, `email`, `senha`) VALUES
(1, 0, 'Pedro', 'Olavyo', '0000-00-00', 'masculino', '2147483647', '33860450', '3798836916', 'rua lua de mel', 666, 'null', 'Medeiros', 'Centro', 'MG', 'p@mail.com', '123'),
(2, 0, 'Pedro', 'Olavyo', '1607-06-20', 'masculino', '2147483647', '33860450', '3798836916', 'rua lua de mel', 666, 'null', 'Medeiros', 'Centro', 'MG', 'p@mail.com', '123'),
(3, 0, 'Pedro', 'Olavyo', '0000-00-00', 'masculino', '2147483647', '33860450', '3798836916', 'rua lua de mel', 666, 'null', 'Medeiros', 'Centro', 'MG', 'p@mail.com', '123'),
(4, 0, 'Pedro', 'Olavyo', '0000-00-00', 'masculino', '2147483647', '33860450', '3798836916', 'rua lua de mel', 666, 'null', 'Medeiros', 'Centro', 'MG', 'p@mail.com', '123'),
(5, 0, 'Pedro', 'Olavyo', '0000-00-00', 'masculino', '11111111111', '33860450', '3798836916', 'rua lua de mel', 666, 'null', 'Medeiros', 'Centro', 'MG', 'p@mail.com', '123'),
(6, 0, 'Pedro', 'Olavyo', '0000-00-00', 'masculino', '11111111111', '33860450', '3798836916', 'rua lua de mel', 666, 'null', 'Medeiros', 'Centro', 'MG', 'p@mail.com', '123'),
(7, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '12313131313', '23423253', '(33) 3312-31231', 'sadasdasdasdasd', 232, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', '123'),
(8, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '12313131313', '23423253', '(33) 3312-31231', 'sadasdasdasdasd', 232, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', '123'),
(9, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '12313131313', '23423253', '(33) 3312-31231', 'sadasdasdasdasd', 232, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', '123'),
(10, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '12313131313', '23423253', '(33) 3312-31231', 'sadasdasdasdasd', 232, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', '123'),
(11, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '12313131313', '23423253', '(33) 3312-31231', 'sadasdasdasdasd', 232, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', '123'),
(12, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '5793641602', '23423253', '(33) 3312-31231', 'sadasdasdasdasd', 34, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', '141'),
(13, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '05793641602', '23423253', '(33) 3312-31231', 'sadasdasdasdasd', 34, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', '141'),
(14, 0, 'Jay', 'Simpson', '0000-00-00', 'optionMasculino', '05793641602', '23423253', '(33) 3312-31231', 'sadasdasdasdasd', 34, '', 'dfdgdgdgdg', 'Centro', 'dg', 'ddanielalves59@gmail.com', '141'),
(15, 0, 'Pedro ', 'Reis', '0000-00-00', 'optionMasculino', '12312312313', '12313131', '(12) 3123-13131', 'adadadadada', 234, 'asdadadadads', 'weasDADADA', 'asdasdas', 'as', 'asdadadasda@gmail.com', '12'),
(16, 0, 'Pedro ', 'Reis', '0000-00-00', 'optionMasculino', '12312312313', '12313131', '(12) 3123-13131', 'adadadadada', 234, 'asdadadadads', 'weasDADADA', 'asdasdas', 'as', 'asdadadasda@gmail.com', '12'),
(17, 0, 'Pedro ', 'Reis', '0000-00-00', 'optionMasculino', '12312312313', '12313131', '(23) 4234-23423', 'adadadadada', 234, 'asdadadadads', 'weasDADADA', 'asdasdas', 'as', 'asdadadasda@gmail.com', '234'),
(18, 0, 'Qweqwe', 'Qweqw', '0000-00-00', 'optionOutro', '32423423234', '23423423', '(23) 4234-23423', '23qweqwe', 234, 'qweqeqeqeqeqw', 'wadasd', 'asdasdads', 'as', 'asdadadada@gmailcom', '123'),
(19, 0, 'Qweqwe', 'Qweqw', '0000-00-00', 'optionOutro', '32423423234', '23423423', '(23) 4234-23423', '23qweqwe', 234, 'qweqeqeqeqeqw', 'wadasd', 'asdasdads', 'as', 'asdadadada@gmailcom', '123'),
(20, 0, 'Qweqwe', 'Qweqw', '0000-00-00', 'optionFeminino', '32423423234', '23423423', '(34) 5345-34534', '23qweqwe', 234, 'qweqeqeqeqeqw', 'wadasd', 'asdasdads', 'as', 'asdadadada@gmailcom', '345'),
(21, 0, 'Jay', 'Simpson', '1956-08-20', 'optionOutro', '23423424242', '23424234', '(23) 4224-23424', 'Rua do ai caramba', 456, '', 'Sprindifild', 'Alameda Cento e Verde', 'Mg', 'home@gmail.com', '123'),
(28, 0, 'Christhian', 'Rezende Vieira', '2002-12-13', 'Masculino', '10000000001', '10000023', '(11) 9213-80129', 'Rua Aleatória', 57, 'CASA', 'Muema', 'Centro', 'MG', 'jfepaojsf@gmail.com', '567123'),
(29, 0, 'Afesaef', 'Asef', '2003-02-04', 'Feminino', '11111111111', '11111111', '(23) 1312-3123', 'asfaef', 123, 'asfsadfe', 'aseffwq', 'erq', 'qw', 'asdf@mgais.com', '456'),
(30, 0, 'Asef', 'Asef', '0000-00-00', 'Masculino', '31212312321', '12312312', '(12) 3123-12313', 'asdfaesf', 123, 'asdf', 'asdf', 'asdf', 'as', 'asf@gmail.com', '123'),
(31, 0, 'Asdf', 'Asdf', '2003-02-06', 'Masculino', '12312312312', '11232131', '(11) 2312-31231', 'asdf', 12, '21', 'asdf', '211', 'as', 'asdf@mgais.com', '12'),
(32, 0, 'Asdf', 'Asdf', '2003-02-05', 'Masculino', '12312312312', '11232131', '(12) 3123-12312', 'asdf', 12, '21', 'asdf', '211', 'as', 'asdf@mgais.com', '123'),
(33, 0, 'Asdf', 'Asdf', '2003-02-04', 'Masculino', '12321312312', '12312312', '(12) 3213-12312', 'sadf', 12, 'asdf', 'asdf', 'asdf', 'as', 'asdf@mgais.com', '123'),
(36, 0, 'Asd', 'Adsf', '2003-02-04', 'Masculino', '12312312321', '31213211', '(12) 3123-12312', 'asdf', 2, 'adf', 'asd', 'asf', 'as', 'asdf@mgais.com', '123'),
(38, 0, 'Christhian', 'Joule HomisoN', '2003-02-04', 'Masculino', '12412312124', '19023129', '(98) 7152-35719', 'Rua Tailândia de Souza Júnior', 666, 'casapor', 'Jarizalin', 'Central', 'MS', 'chriJouleHom@gmail.com', '58714'),
(40, 0, 'Chaospefjqojoqpwhfoajsdfojqopw', 'Jokjeoqerj Pofjeorqo', '1924-02-08', 'Outro', '51235213532', '35413512', '(12) 5451-35514', 'Avenida Tales Silva', 8891, 'APARTAMENTO', 'Gonderi', 'Baiano', 'BA', 'chaospef@gmail.com', '490'),
(41, 1, 'Chrisadministrador', 'AdministeR', '1996-02-09', 'Masculino', '65436543657', '34573462', '(34) 5234-53429', 'Rua Elden Adem', 667, 'CASA', 'Beng', 'Klevs', 'SP', 'crvadmster@outlook.com', '58901');

--
-- Índices para tabelas despejadas
--

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
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
