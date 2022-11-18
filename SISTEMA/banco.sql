-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Nov-2022 às 00:12
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sgd`
--
CREATE DATABASE IF NOT EXISTS `sgd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sgd`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `idAdministrador` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `endereco` varchar(256) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `salario` varchar(45) NOT NULL,
  `login` varchar(8) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `funcao` int(1) NOT NULL,
  `tipoUsuario` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `nome`, `endereco`, `sexo`, `salario`, `login`, `senha`, `funcao`, `tipoUsuario`) VALUES
(1, 'lucas rodrigues rocha', 'rua 4 chacara 25 casa 66', 'm', '5000', 'LLK', '202cb962ac59075b964b07152d234b70', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `login` varchar(8) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `numeroTelefone` varchar(11) NOT NULL,
  `tipoUsuario` int(1) NOT NULL,
  `enderecoRua` varchar(120) NOT NULL,
  `enderecoNum` int(5) NOT NULL,
  `enderecoCep` int(8) NOT NULL,
  `enderecoRegiao` varchar(25) NOT NULL,
  `cpf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome`, `login`, `senha`, `numeroTelefone`, `tipoUsuario`, `enderecoRua`, `enderecoNum`, `enderecoCep`, `enderecoRegiao`, `cpf`) VALUES
(13, 'Lucas Rodrigues Rocha', 'lucas1', '81dc9bdb52d04dc20036dbd8313ed055', '61985690291', 0, 'rua 4, chácara 25', 66, 72001305, 'Vicente Pires', 2147483647),
(14, 'Pedro santos', 'pedrinho', '202cb962ac59075b964b07152d234b70', '61983572006', 0, '', 0, 0, '', 0),
(15, 'Laís da Silva', 'lais123', '202cb962ac59075b964b07152d234b70', '61985690291', 0, '', 0, 0, '', 0),
(16, 'Mauro Santos ', 'mauro', '202cb962ac59075b964b07152d234b70', '61985690291', 0, '', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_barris`
--

CREATE TABLE `estoque_barris` (
  `idBarril` int(11) NOT NULL,
  `numeroBarril` varchar(8) NOT NULL,
  `nomeChopp` varchar(12) NOT NULL,
  `tipoChopp` varchar(7) NOT NULL,
  `litros` varchar(2) NOT NULL,
  `emUso` varchar(3) NOT NULL,
  `custo` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque_barris`
--

INSERT INTO `estoque_barris` (`idBarril`, `numeroBarril`, `nomeChopp`, `tipoChopp`, `litros`, `emUso`, `custo`) VALUES
(3, '123', 'capital', 'Trigo', '30', 'nao', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_chopeiras`
--

CREATE TABLE `estoque_chopeiras` (
  `idChopeira` int(11) NOT NULL,
  `codigoChopeira` varchar(5) NOT NULL,
  `tipoTorneira` varchar(45) NOT NULL,
  `emUso` varchar(3) NOT NULL,
  `emHigienizacao` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque_chopeiras`
--

INSERT INTO `estoque_chopeiras` (`idChopeira`, `codigoChopeira`, `tipoTorneira`, `emUso`, `emHigienizacao`) VALUES
(6, '111', 'Duas torneiras', 'nao', 'nao'),
(7, '2222', 'Uma torneira', 'nao', 'nao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_cilindros`
--

CREATE TABLE `estoque_cilindros` (
  `idCilindro` int(11) NOT NULL,
  `codigoCilindro` varchar(5) NOT NULL,
  `kg_co2` int(2) NOT NULL,
  `pesoCilindro` int(2) NOT NULL,
  `emUso` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque_cilindros`
--

INSERT INTO `estoque_cilindros` (`idCilindro`, `codigoCilindro`, `kg_co2`, `pesoCilindro`, `emUso`) VALUES
(2, '354', 6, 4, 'nao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedidos` int(11) NOT NULL,
  `nomeCliente` varchar(45) NOT NULL,
  `qtdBarris30lCapital` varchar(2) NOT NULL,
  `qtdBarris30lBrasilia` varchar(2) NOT NULL,
  `qtdBarris30lDLSR` varchar(2) NOT NULL,
  `qtdBarris30lJK` varchar(2) NOT NULL,
  `qtdBarris30lMonumental` varchar(2) NOT NULL,
  `qtdBarris50lCapital` varchar(2) NOT NULL,
  `qtdBarris50lBrasilia` varchar(2) NOT NULL,
  `qtdBarris50lDLSR` varchar(2) NOT NULL,
  `qtdBarris50lJK` varchar(2) NOT NULL,
  `qtdBarris50lMonumental` varchar(2) NOT NULL,
  `enderecoRua` varchar(120) NOT NULL,
  `enderecoNum` varchar(5) NOT NULL,
  `horarioEvento` time NOT NULL,
  `dataEvento` varchar(11) NOT NULL,
  `tipoPagamento` varchar(45) NOT NULL,
  `loginCliente` varchar(25) NOT NULL,
  `situacao` varchar(45) NOT NULL,
  `numeroCliente` varchar(11) NOT NULL,
  `valorTotal` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`idPedidos`, `nomeCliente`, `qtdBarris30lCapital`, `qtdBarris30lBrasilia`, `qtdBarris30lDLSR`, `qtdBarris30lJK`, `qtdBarris30lMonumental`, `qtdBarris50lCapital`, `qtdBarris50lBrasilia`, `qtdBarris50lDLSR`, `qtdBarris50lJK`, `qtdBarris50lMonumental`, `enderecoRua`, `enderecoNum`, `horarioEvento`, `dataEvento`, `tipoPagamento`, `loginCliente`, `situacao`, `numeroCliente`, `valorTotal`) VALUES
(6, 'Lucas Rodrigues Rocha', '1', '0', '0', '0', '0', '2', '0', '0', '0', '0', 'rua 3, chácara 22', '12', '19:00:00', '26/11/2022', 'pix', 'lucas1', 'Esperando para recolher chopeira', '61981370352', ''),
(7, 'Pedro santos', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'rua 6, chácara 71 ', '05', '12:00:00', '19/11/2022', 'cartão', 'pedrinho', 'entrega pendente', '61983572006', ''),
(8, 'Lucas Rodrigues Rocha', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', 'rua 3, chácara 22', '12', '11:13:00', '26/11/2022', 'pix', 'lucas1', 'entrega pendente', '', ''),
(16, 'Lucas Rodrigues Rocha', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', 'rua 3, chácara 22', '15', '20:12:00', '02/12/2022', 'pix', 'lucas1', 'entrega pendente', '61985690291', ''),
(17, 'Lucas Rodrigues Rocha', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', 'teste', '15', '20:50:00', '10/12/2022', 'cartão', 'lucas1', 'entrega pendente', '61985690291', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_precos`
--

CREATE TABLE `tabela_precos` (
  `idPrecos` int(11) NOT NULL,
  `nomeChopp` varchar(45) NOT NULL,
  `litros_barril` varchar(2) NOT NULL,
  `valor_Litro` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabela_precos`
--

INSERT INTO `tabela_precos` (`idPrecos`, `nomeChopp`, `litros_barril`, `valor_Litro`) VALUES
(1, 'chopp capital', '30', '350'),
(2, 'chopp brasília', '30', '350'),
(3, 'chopp DLSR', '30', '350'),
(4, 'chopp jk', '30', '350'),
(5, 'chopp monumental', '30', '350'),
(6, 'chopp capital', '50', '550'),
(7, 'chopp brasília', '50', '550'),
(8, 'chopp DLSR', '50', '550'),
(9, 'chopp jk', '50', '550'),
(10, 'chopp monumental', '50', '550');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `estoque_barris`
--
ALTER TABLE `estoque_barris`
  ADD PRIMARY KEY (`idBarril`);

--
-- Índices para tabela `estoque_chopeiras`
--
ALTER TABLE `estoque_chopeiras`
  ADD PRIMARY KEY (`idChopeira`);

--
-- Índices para tabela `estoque_cilindros`
--
ALTER TABLE `estoque_cilindros`
  ADD PRIMARY KEY (`idCilindro`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedidos`);

--
-- Índices para tabela `tabela_precos`
--
ALTER TABLE `tabela_precos`
  ADD PRIMARY KEY (`idPrecos`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `estoque_barris`
--
ALTER TABLE `estoque_barris`
  MODIFY `idBarril` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `estoque_chopeiras`
--
ALTER TABLE `estoque_chopeiras`
  MODIFY `idChopeira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `estoque_cilindros`
--
ALTER TABLE `estoque_cilindros`
  MODIFY `idCilindro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tabela_precos`
--
ALTER TABLE `tabela_precos`
  MODIFY `idPrecos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
