/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS produto;
CREATE TABLE `produto` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `imagem` blob,
  `categoria` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estoque` int DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `valor` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `validade` date DEFAULT NULL,
  `fornecedor` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `codFiscal` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `CodBarra` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO produto(id,nome,descricao,imagem,categoria,estoque,peso,valor,validade,fornecedor,codFiscal,CodBarra,alteracao) VALUES('1','\'Coca-Cola\'','\'Guarana 350ml\'','X\'\'','\'Selecione a categoria do seu produto\'','200','50','\'5.50\'','\'2023-12-01\'','\'23614872142678\'','\'37962149576175\'','\'\'','\'2024-02-02 16:47:36\'');