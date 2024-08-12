-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for XDV
CREATE DATABASE IF NOT EXISTS `XDV` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `XDV`;

-- Dumping structure for table XDV.m_employees
CREATE TABLE IF NOT EXISTS `m_employees` (
  `name` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `CI` int(11) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `customer` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  UNIQUE KEY `CI` (`CI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='Personal General';

-- Dumping data for table XDV.m_employees: ~34 rows (approximately)
DELETE FROM `m_employees`;
INSERT INTO `m_employees` (`name`, `surname`, `CI`, `email`, `customer`, `location`) VALUES
	('Maikel', 'guia', 14952157, 'maikel.guia@grupoxven.com', 'CAF ', 'Miranda'),
	('Juan', 'Torrealba', 27391277, 'Juan.torrealba@grupoxven.com', 'CAF ', 'Miranda'),
	('Fernando', ' Mora', 6160334, 'fernando.mora@grupoxven.com', 'Farmatodo la Trinidad', 'Miranda'),
	('Antonio', ' Martinez', 16903333, 'antonio.martinez@grupoxven.com', 'Farmatodo la Trinidad', 'Miranda'),
	('Hender', ' Ramirez', 21148844, 'hender.ramirez@grupoxven.com', 'Farmatodo Charallave CDF', 'Miranda'),
	('Luis', ' Jimenez', 30159160, 'luis.jimenez@gripoxven.com', 'Farmatodo Charallave Cendis', 'Miranda'),
	('Diana', ' Rivas', 22694729, 'diana.rivas@grupoxven.com', 'Farmatodo Charallave CDF', 'Miranda'),
	('Yuluika', ' Farias', 25517141, 'yuleika.farias@grupoxven.com', 'Farmatodo Charallave CDF', 'Miranda'),
	('Daneiker', ' Marcano', 30697589, 'daneiker.marcano@grupoxven.com', 'Farmatodo Charallave CDF', 'Miranda'),
	('Yirwins', ' Ramirez', 31079868, 'Yirwins.ramirez@grupoxven.com', 'Farmatodo Charallave Cendis', 'Miranda'),
	('Pablo', ' Martinez', 19453432, 'pablo.martinez@grupoxven.com', 'Centro Empresarial Polar', 'Miranda'),
	('Rayder', ' Baron', 19163916, 'rayder.baron@grupoxven.com', 'Centro Empresarial Polar', 'Miranda'),
	('Robert', ' Salazar', 12688894, 'Robert.salazar@grupoxven.com', 'Centro Empresarial Polar', 'Miranda'),
	('Denys', ' Tello', 17141475, 'denys.tello@grupoxven.com', 'Provincial', 'Distrito Capital'),
	('Julio', ' Gutierrez', 10115229, 'julio.gutierrez@grupoxven.com', 'Provincial', 'Distrito Capital'),
	('Marcos', ' Da Conceicao', 13844707, 'Marcos.DaConceicao@grupoxven.com', 'Bigott', 'Miranda'),
	('Oswaldo', ' Magdaleno', 6160184, 'Oswaldo.Magdaleno@grupoxven.com', 'Defensa Publica', 'Distrito Capital'),
	('Carlos', ' PEÑA', 27282353, 'carlos.pena@grupoxven.com', 'Kpmg', 'Miranda'),
	('Jose', ' Azuaje', 16954047, 'jose.azuaje@grupoxven.com', 'DHL  La Guaira', 'La Guaira'),
	('Aldo', ' Hernandez', 15039517, 'aldo.hernandez@grupoxven.com', 'Campo', 'Distrito Capital'),
	('Deblin', ' Mora', 10869851, 'deblin.mora@grupoxven.com', 'Campo', 'Distrito Capital'),
	('Daniel', ' Alvarado', 19086868, 'daniel.alvarado@grupoxven.com', 'Campo', 'Distrito Capital'),
	('Alirio', ' Lopez', 9483969, 'alirio.lopez@grupoxven.com', 'Campo', 'Distrito Capital'),
	('Jesus', ' Alvarado', 5136313, 'jesus.alvarado@grupoxven.com', 'Campo', 'Aragua'),
	('Roberto', ' Orias', 9685538, 'robert.orias@grupoxven.com', 'Campo', 'Aragua'),
	('José', ' Tabata', 8833698, 'jose.tabata@grupoxven.com', 'Campo', 'Valencia'),
	('Ender', ' Bello', 7138682, 'ender.bello@grupoxven.com', 'Campo', 'Valencia'),
	('Javier', ' Chang', 18058869, 'javier.chan@grupoxven.com', 'Campo', 'Barquisimeto'),
	('Alexander', ' Montilla', 14764278, 'alexander.montilla@grupoxven.com', 'Campo', 'Barcelona'),
	('Alexis', ' Aponte', 22001221, 'alexis.aponte@grupoxven.com', 'Polar Metalgrafica', 'Valencia'),
	('Miguel', ' Flores', 13314267, 'miguel.flores@grupoxven.com', 'Polar Metalgrafica', 'Valencia'),
	('Joan', ' Fernendes', 26422421, 'joan.fernendes@grupoxven.com', 'San Joaquin', 'Valencia'),
	('Hendrickson', ' Salazar', 21257877, 'hendrickson.salazar@grupoxven.com', 'Polar Turmero', 'Aragua'),
	('Roswill', ' Lopez', 27966217, 'roswill.lopez@grupoxven.com', 'Polar Chivacoa', 'Yaracuy');

-- Dumping structure for table XDV.m_Uload
CREATE TABLE IF NOT EXISTS `m_Uload` (
  `ci` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `customer` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `location` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table XDV.m_Uload: ~22 rows (approximately)
DELETE FROM `m_Uload`;
INSERT INTO `m_Uload` (`ci`, `name`, `surname`, `customer`, `status`, `date`, `time`, `location`) VALUES
	(30221960, 'Jose', 'Escalona', 'XDV', 'Entrada', '2024-07-03', '10:13:50', '10.4822331-66.8461774'),
	(30221960, 'Jose', 'Escalona', 'XDV', 'Salida', '2024-07-03', '10:31:33', '10.5027135,-66.843944'),
	(30221960, 'Jose', 'Escalona', 'XDV', 'Entrada', '2024-07-03', '10:31:45', '10.5027135,-66.843944'),
	(30221960, 'Jose', 'Escalona', 'XDV', 'Entrada', '2024-07-03', '10:31:45', '10.5027135,-66.843944'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Entrada', '2024-07-03', '10:34:47', '10.5027135,-66.843944'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Salida', '2024-07-03', '10:35:15', '10.5027135,-66.843944'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Salida', '2024-07-03', '10:35:15', '10.5027135,-66.843944'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Entrada', '2024-07-03', '10:42:08', '10.5027135,-66.843944'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Entrada', '2024-07-03', '10:42:08', '10.5027135,-66.843944'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Entrada', '2024-07-03', '10:42:08', '10.5027135,-66.843944'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Entrada', '2024-07-03', '10:43:54', '10.5027135,-66.843944'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Entrada', '2024-07-03', '10:43:54', '10.5027135,-66.843944'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Entrada', '2024-07-03', '10:43:54', '10.5027135,-66.843944'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Salida', '2024-07-03', '13:18:26', '10.4820622,-66.843944'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Salida', '2024-07-03', '13:23:46', '10.4820622,-66.843944'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Entrada', '2024-07-03', '13:25:55', '10.490374,-66.85004'),
	(30221960, 'Jose', 'Escalona', 'XDV', 'Entrada', '2024-07-03', '13:26:34', '10.4820622,-66.843944'),
	(30221960, 'Jose', 'Escalona', 'XDV', 'Entrada', '2024-07-03', '14:52:56', '10.4820622,-66.843944'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Entrada', '2024-07-03', '15:59:43', '10.4904879,-66.8499302'),
	(101010, 'Manuel', 'Andrade', 'XDV', 'Entrada', '2024-07-08', '11:28:04', '10.485413,-66.8692569'),
	(20569778, 'Pedro', 'Perez', 'XDV', 'Entrada', '2024-07-16', '09:44:05', '10.4817546,-66.843944'),
	(20569778, 'Pedro', 'Perez', 'XDV', 'Salida', '2024-07-16', '09:53:37', '10.4817546,-66.843944');

-- Dumping structure for table XDV.m_user_lg
CREATE TABLE IF NOT EXISTS `m_user_lg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CI` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `customer` varchar(150) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varbinary(50) DEFAULT NULL,
  `roll` varchar(50) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='User Login';

-- Dumping data for table XDV.m_user_lg: ~40 rows (approximately)
DELETE FROM `m_user_lg`;
INSERT INTO `m_user_lg` (`id`, `CI`, `name`, `surname`, `customer`, `email`, `password`, `roll`, `location`) VALUES
	(2, 14952157, 'Maikel', 'guia', 'CAF', 'maikel.guia@grupoxven.com', _binary 0x3134393532313537, 'operator', 'Miranda'),
	(3, 27391277, 'Juan', 'Torrealba', 'CAF', 'Juan.torrealba@grupoxven.com', _binary 0x3237333931323737, 'operator', 'Miranda'),
	(4, 6160334, 'Fernando', ' Mora', 'Farmatodo la Trinidad', 'fernando.mora@grupoxven.com', _binary 0x36313630333334, 'operator', 'Miranda'),
	(5, 16903333, 'Antonio', ' Martinez', 'Farmatodo la Trinidad', 'antonio.martinez@grupoxven.com', _binary 0x3136393033333333, 'operator', 'Miranda'),
	(6, 21148844, 'Hender', ' Ramirez', 'Farmatodo Charallave CDF', 'hender.ramirez@grupoxven.com', _binary 0x3231313438383434, 'operator', 'Miranda'),
	(7, 30159160, 'Luis', ' Rodriguez', 'Farmatodo Charallave CDF', 'luis.rodriguez@grupoxven.com', _binary 0x3330313539313630, 'operator', 'Miranda'),
	(8, 22694729, 'Diana', ' Rivas', 'Farmatodo Charallave CDF', 'diana.rivas@grupoxven.com', _binary 0x3232363934373239, 'operator', 'Miranda'),
	(9, 25517141, 'Yuluika', ' Farias', 'Farmatodo Charallave CDF', 'yuleika.farias@grupoxven.com', _binary 0x3235353137313431, 'operator', 'Miranda'),
	(10, 30697589, 'Daneiker', ' Marcano', 'Farmatodo Charallave CDF', 'daneiker.marcano@grupoxven.com', _binary 0x3330363937353839, 'operator', 'Miranda'),
	(11, 30159160, 'Luis', ' Jimenez', 'Farmatodo Charallave Cendis', 'luis.jimenez@gripoxven.com', _binary 0x3330313539313630, 'operator', 'Miranda'),
	(12, 31079868, 'Yirwins', ' Ramirez', 'Farmatodo Charallave Cendis', 'Yirwins.ramirez@grupoxven.com', _binary 0x3331303739383638, 'operator', 'Miranda'),
	(13, 19453432, 'Pablo', ' Martinez', 'Centro Empresas Polar', 'pablo.martinez@grupoxven.com', _binary 0x3139343533343332, 'operator', 'Miranda'),
	(14, 19163916, 'Rayder', ' Baron', 'Centro Empresas Polar', 'rayder.baron@grupoxven.com', _binary 0x3139313633393136, 'operator', 'Miranda'),
	(15, 12688894, 'Robert', ' Salazar', 'Polar Turmero', 'Robert.salazar@grupoxven.com', _binary 0x3132363838383934, 'operator', 'Miranda'),
	(16, 17141475, 'Denys', ' Tello', 'Provincial', 'denys.tello@grupoxven.com', _binary 0x3137313431343735, 'operator', 'Distrito Capital'),
	(17, 10115229, 'Julio', ' Gutierrez', 'Provincial', 'julio.gutierrez@grupoxven.com', _binary 0x3130313135323239, 'operator', 'Distrito Capital'),
	(18, 13844707, 'Marcos', ' Da Conceicao', 'Bigott', 'Marcos.DaConceicao@grupoxven.com', _binary 0x3133383434373037, 'operator', 'Miranda'),
	(19, 6160184, 'Oswaldo', ' Magdaleno', 'Defensa Publica', 'Oswaldo.Magdaleno@grupoxven.com', _binary 0x36313630313834, 'operator', 'Distrito Capital'),
	(20, 27282353, 'Carlos', ' PEÑA', 'Kpmg', 'carlos.pena@grupoxven.com', _binary 0x3237323832333533, 'operator', 'Miranda'),
	(21, 16954047, 'Jose', ' Azuaje', 'DHL la Guaira', 'jose.azuaje@grupoxven.com', _binary 0x3136393534303437, 'operator', 'La Guaira'),
	(22, 15039517, 'Aldo', ' Hernandez', 'Campo', 'aldo.hernandez@grupoxven.com', _binary 0x3135303339353137, 'operator', 'Distrito Capital'),
	(23, 10869851, 'Deblin', ' Mora', 'Campo', 'deblin.mora@grupoxven.com', _binary 0x3130383639383531, 'operator', 'Distrito Capital'),
	(24, 19086868, 'Daniel', ' Alvarado', 'Campo', 'daniel.alvarado@grupoxven.com', _binary 0x3139303836383638, 'operator', 'Distrito Capital'),
	(25, 9483969, 'Alirio', ' Lopez', 'Campo', 'alirio.lopez@grupoxven.com', _binary 0x2a7865726f783231, 'operator', 'Distrito Capital'),
	(26, 5136313, 'Jesus', ' Alvarado', 'Campo', 'jesus.alvarado@grupoxven.com', _binary 0x35313336333133, 'operator', 'Aragua'),
	(27, 9685538, 'Roberto', ' Orias', 'Campo', 'robert.orias@grupoxven.com', _binary 0x39363835353338, 'operator', 'Aragua'),
	(28, 8833698, 'José', ' Tabata', 'Campo', 'jose.tabata@grupoxven.com', _binary 0x38383333363938, 'operator', 'Valencia'),
	(29, 7138682, 'Ender', ' Bello', 'Campo', 'ender.bello@grupoxven.com', _binary 0x37313338363832, 'operator', 'Valencia'),
	(30, 18058869, 'Javier', ' Chang', 'Campo', 'javier.chan@grupoxven.com', _binary 0x3138303538383639, 'operator', 'Barquisimeto'),
	(31, 14764278, 'Alexander', ' Montilla', 'Campo', 'alexander.montilla@grupoxven.com', _binary 0x3134373634323738, 'operator', 'Barcelona'),
	(32, 22001221, 'Alexis', ' Aponte', 'Polar Metalgrafica', 'alexis.aponte@grupoxven.com', _binary 0x3232303031323231, 'operator', 'Valencia'),
	(33, 13314267, 'Miguel', ' Flores', 'Polar Metal Grafica', 'miguel.flores@grupoxven.com', _binary 0x3133333134323637, 'operator', 'Valencia'),
	(34, 26422421, 'Joan', ' Fernendes', 'San Joaquin Polar', 'joan.fernendes@grupoxven.com', _binary 0x3236343232343231, 'operator', 'Valencia'),
	(35, 21257877, 'Hendrickson', ' Salazar', 'Polar Turmero', 'hendrickson.salazar@grupoxven.com', _binary 0x3231323537383737, 'operator', 'Aragua'),
	(36, 27966217, 'Roswill', ' Lopez', 'Polar Chivacoa', 'roswill.lopez@grupoxven.com', _binary 0x3237393636323137, 'operator', 'Yaracuy'),
	(37, 101010, 'Manuel', 'Andrade', 'XDV', 'manuel.andrade@grupoxven.com', _binary 0x2a7865726f783230, 'operator', 'XDV'),
	(38, 28434878, 'Carlos', 'Barboza', 'XDV', 'carlos.barboza@grupoxven.com', _binary 0x3238343334383738, 'operator', 'Distrito Capital'),
	(40, 30221960, 'Jose', 'Escalona', 'XDV', 'jose.escalona@grupoxven.com', _binary 0x2a7865726f783230, 'administrator', 'Distrito Capital'),
	(42, 20569778, 'Pedro', 'Perez', 'XDV', 'pedro.perez@grupoxven.com', _binary 0x3230353639373738, 'administrator', 'Distrito Capital'),
	(44, 2021450, 'Doris', 'Montenegro', 'XDV', 'doris.montenegro@grupoxven.com', _binary 0x31303130, 'operator', 'caracas');

-- Dumping structure for table XDV.sk_usa
CREATE TABLE IF NOT EXISTS `sk_usa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table XDV.sk_usa: ~2 rows (approximately)
DELETE FROM `sk_usa`;
INSERT INTO `sk_usa` (`id`, `user`, `password`, `name`, `surname`) VALUES
	(1, 'su', 'service!', 'servicio', 'service'),
	(2, 'administrator', 'administ', 'admin', 'administrator');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
