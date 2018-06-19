CREATE TABLE `cliente` (
  `idcliente` int(4) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `cidade` varchar(60) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0',
  `tipo_revista` varchar(15) DEFAULT NULL,
  `quantidade` int(4) DEFAULT NULL,
  `atracoes` varchar(300) DEFAULT NULL,
  `sugestao` tinyint(1) DEFAULT '0',
  `imagem` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
