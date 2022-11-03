create database sgd;

use sgd;


CREATE TABLE `administrador` (
  `idAdministrador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `endereco` varchar(256) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `salario` varchar(45) NOT NULL,
  `login` varchar(8) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `funcao` int(1) NOT NULL,
  `tipoUsuario` int(1) NOT NULL,
  PRIMARY KEY (`idAdministrador`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `login` varchar(8) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `numeroTelefone` varchar(11) NOT NULL,
  `tipoUsuario` int(1) NOT NULL,
  `enderecoRua` varchar(120) NOT NULL,
  `enderecoNum` int(5) NOT NULL,
  `enderecoCep` int(8) NOT NULL,
  `enderecoRegiao` varchar(25) NOT NULL,
  `cpf` int(11) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `estoque_barris` (
  `idBarril` int(11) NOT NULL AUTO_INCREMENT,
  `numeroBarril` varchar(8) NOT NULL,
  `nomeChopp` varchar(12) NOT NULL,
  `tipoChopp` varchar(7) NOT NULL,
  `litros` varchar(2) NOT NULL,
  `emUso` varchar(3) NOT NULL,
  `custo` varchar(3) NOT NULL,
  PRIMARY KEY (`idBarril`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `estoque_chopeiras` (
  `idChopeira` int(11) NOT NULL AUTO_INCREMENT,
  `codigoChopeira` varchar(5) NOT NULL,
  `tipoTorneira` varchar(45) NOT NULL,
  `emUso` varchar(3) NOT NULL,
  `emHigienizacao` varchar(3) NOT NULL,
  PRIMARY KEY (`idChopeira`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `estoque_cilindros` (
  `idCilindro` int(11) NOT NULL AUTO_INCREMENT,
  `codigoCilindro` varchar(5) NOT NULL,
  `kg_co2` int(2) NOT NULL,
  `pesoCilindro` int(2) NOT NULL,
  `emUso` varchar(3) NOT NULL,
  PRIMARY KEY (`idCilindro`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `pedidos` (
  `idPedidos` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`idPedidos`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
