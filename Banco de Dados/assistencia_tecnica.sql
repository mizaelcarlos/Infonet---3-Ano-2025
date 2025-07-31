-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.3.0 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela assistencia_tecnica.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `cliente_id` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(200) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`cliente_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela assistencia_tecnica.equipamento
CREATE TABLE IF NOT EXISTS `equipamento` (
  `equipamento_id` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  PRIMARY KEY (`equipamento_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela assistencia_tecnica.ordem_servico
CREATE TABLE IF NOT EXISTS `ordem_servico` (
  `id_ordem` int NOT NULL AUTO_INCREMENT,
  `data_abertura` date NOT NULL,
  `status_ordem` varchar(45) NOT NULL,
  `cliente_id` int NOT NULL,
  PRIMARY KEY (`id_ordem`),
  KEY `cliente_id` (`cliente_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela assistencia_tecnica.servico_realizado
CREATE TABLE IF NOT EXISTS `servico_realizado` (
  `servico_id` int NOT NULL AUTO_INCREMENT,
  `descricao_servico` varchar(255) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `ordem_id` int NOT NULL,
  `equipamento_id` int NOT NULL,
  PRIMARY KEY (`servico_id`),
  KEY `ordem_id` (`ordem_id`),
  KEY `equipamento_id` (`equipamento_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
