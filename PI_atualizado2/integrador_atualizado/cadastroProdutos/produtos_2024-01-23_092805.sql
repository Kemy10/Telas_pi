/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS produto;
CREATE TABLE `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nome` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `imagem` blob DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `estoque` int(10) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `valor` varchar(10) DEFAULT NULL,
  `validade` date DEFAULT NULL,
  `fornecedor` varchar(300) DEFAULT NULL,
  `codFiscal` varchar(50) DEFAULT NULL,
  `CodBarra` varchar(50) DEFAULT NULL,
  `alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO produto(id,nome,descricao,imagem,categoria,estoque,peso,valor,validade,fornecedor,codFiscal,CodBarra,alteracao) VALUES('1','\'coca\'','\'123\'','X\'\'','\'Selecione a categoria do seu produto\'','123','123','\'123\'','\'0000-00-00\'','\'\'','\'\'','\'\'','\'2024-01-25 09:08:56\'');