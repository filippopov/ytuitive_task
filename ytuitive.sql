-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия на сървъра:            10.1.16-MariaDB - mariadb.org binary distribution
-- ОС на сървъра:                Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ytuitive
DROP DATABASE IF EXISTS `ytuitive`;
CREATE DATABASE IF NOT EXISTS `ytuitive` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ytuitive`;

-- Дъмп структура за таблица ytuitive.ytuitive_test
DROP TABLE IF EXISTS `ytuitive_test`;
CREATE TABLE IF NOT EXISTS `ytuitive_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дъмп данни за таблица ytuitive.ytuitive_test: ~0 rows (approximately)
DELETE FROM `ytuitive_test`;
/*!40000 ALTER TABLE `ytuitive_test` DISABLE KEYS */;
INSERT INTO `ytuitive_test` (`id`, `name`) VALUES
	(3, 'test1'),
	(4, 'test2');
/*!40000 ALTER TABLE `ytuitive_test` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
