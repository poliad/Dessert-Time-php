-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for dessert
CREATE DATABASE IF NOT EXISTS `dessert` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `dessert`;

-- Dumping structure for table dessert.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `img` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table dessert.products: ~12 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `img`, `description`, `price`) VALUES
	(1, 'Donuts', 'donuts.jpg', 'A doughnut or donut is a type of fried dough confection or dessert food.', '5.49 lei/buc'),
	(2, 'Plăcintă', 'pie.jpg', 'A pie is a baked dish which is usually made of a pastry dough casing that covers or completely contains a filling of various sweet or savoury ingredients.', '9.99 lei/buc'),
	(3, 'Tartă', 'tart.jpg', 'A tart is a baked dish consisting of a filling over a pastry base with an open top not covered with pastry.', '24.99 lei/kg'),
	(4, 'Macarons', 'macaroons.jpg', 'A macaron is a sweet meringue-based confection made with egg white, icing sugar, granulated sugar, almond powder or ground almond, and food coloring.', '9.99 lei/box'),
	(5, 'Brioșe', 'cupcakes.jpg', 'A cupcake is a small cake designed to serve one person, which may be baked in a small thin paper or aluminum cup', '5.99 lei/buc'),
	(6, 'Tort', 'cake.jpg', 'Cake is a form of sweet dessert that is typically baked. In their oldest forms, cakes were modifications of breads.', '34.99 lei/kg'),
	(7, 'Cheesecake', 'cheesecake.jpg', 'Cheesecake este un desert dulce format din unul sau mai multe straturi. Stratul principal și cel mai gros este format dintr-un amestec de brânză moale, proaspătă, ouă și zahăr.', '25.99 lei/kg'),
	(8, 'Ciocolată', 'chocolate.jpg', 'Ciocolata este un produs alimentar obținut dintr-un amestec de cacao, lapte de cocos, zahăr, uneori lapte și unele arome specifice', '4.99lei/100g'),
	(9, 'Mousse de ciocolată', 'chocolate-mousse.jpg', 'Un mousse este un aliment moale preparat, care încorporează bule de aer pentru a-i conferi o textură ușoară și aerisită. Poate varia de la ușor și pufos la cremos și gros, în funcție de tehnicile de preparare.', '9.99 lei/buc'),
	(10, 'Rulouri cu scorţişoară', 'cinnamon-rolls.jpg', 'Rulouri de scorțișoară este o roșie dulce servită în mod obișnuit în Europa de Nord și America de Nord', '3.99lei/buc'),
	(11, 'Înghețată', 'ice-cream.jpg', 'Înghețata este un desert rece creat din produse lactate, cum ar fi laptele și smântâna, combinate cu asezonare și îndulcitori precum zahărul.', '3.99lei/cup'),
	(12, 'Fursec', 'cookies.jpg', 'Denumirea de fursec este dată unor prăjituri mici și uscate, făcute din diferite aluaturi fragede.', '1.99lei/buc');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
