-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table administrasi.daftar
CREATE TABLE IF NOT EXISTS `daftar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(500) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `toko` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89908 DEFAULT CHARSET=latin1;

-- Dumping data for table administrasi.daftar: ~11 rows (approximately)
/*!40000 ALTER TABLE `daftar` DISABLE KEYS */;
INSERT INTO `daftar` (`id`, `kategori`, `nama`, `harga`, `tanggal`, `toko`) VALUES
	(1, 'hpl', 'hpl saya', '30000', '2020-01-18 14:51:47', 'sdsd'),
	(89898, 'kj', 'ere', '55555', '2020-02-05 14:35:47', '3242'),
	(89899, 'Blockboard', 'Guntur Ganteng', '2131231', '2020-02-06 00:00:00', '3121'),
	(89900, 'HPL F123', 'HPL', '564564', '2020-02-11 00:00:00', '2343'),
	(89901, '212', 'asdad', '643343', '2020-02-06 00:00:00', 'wqwq'),
	(89902, '3211', '2313', '123131', '2020-02-04 00:00:00', '321132'),
	(89903, '231', 'adsadas', '341211', '2020-02-08 00:00:00', '321312dd'),
	(89904, 'fsdfdsf', 'dsfsdf', '24444', '2020-02-14 00:00:00', '2edsds'),
	(89905, 'dsfdsfdsf', 'dsfdsfs', '331333', '2020-02-06 00:00:00', 'fdsfdsfdsf'),
	(89907, 'asdasdas', 'asdasd', '211313', '2020-02-13 00:00:00', 'asdadas');
/*!40000 ALTER TABLE `daftar` ENABLE KEYS */;

-- Dumping structure for table administrasi.jadwal_survey
CREATE TABLE IF NOT EXISTS `jadwal_survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_proyek` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table administrasi.jadwal_survey: ~1 rows (approximately)
/*!40000 ALTER TABLE `jadwal_survey` DISABLE KEYS */;
INSERT INTO `jadwal_survey` (`id`, `nama_proyek`, `tanggal`, `no_tlp`, `alamat`, `deskripsi`) VALUES
	(1, 'Kitchen set', '2020-02-12', '0895345297170', 'jakarta selatan', 'bahan hpl, bla');
/*!40000 ALTER TABLE `jadwal_survey` ENABLE KEYS */;

-- Dumping structure for table administrasi.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table administrasi.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`) VALUES
	(1, 'admin', 'admin1@gmail.com', '$2y$10$oOt7Qn56Yf2QCTP59qfKrOVp18vT/zugL/f22HxYKZYXNfa9/4Nqe', 1, 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table administrasi.user_access_menu
CREATE TABLE IF NOT EXISTS `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table administrasi.user_access_menu: ~4 rows (approximately)
/*!40000 ALTER TABLE `user_access_menu` DISABLE KEYS */;
INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
	(1, 1, 1),
	(3, 2, 2),
	(7, 1, 3),
	(8, 1, 2);
/*!40000 ALTER TABLE `user_access_menu` ENABLE KEYS */;

-- Dumping structure for table administrasi.user_menu
CREATE TABLE IF NOT EXISTS `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table administrasi.user_menu: ~3 rows (approximately)
/*!40000 ALTER TABLE `user_menu` DISABLE KEYS */;
INSERT INTO `user_menu` (`id`, `menu`) VALUES
	(1, 'Dashboard'),
	(2, 'Profile'),
	(3, 'Menu');
/*!40000 ALTER TABLE `user_menu` ENABLE KEYS */;

-- Dumping structure for table administrasi.user_role
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table administrasi.user_role: ~2 rows (approximately)
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` (`id`, `role`) VALUES
	(1, 'Administrator'),
	(2, 'Member');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;

-- Dumping structure for table administrasi.user_sub_menu
CREATE TABLE IF NOT EXISTS `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table administrasi.user_sub_menu: ~5 rows (approximately)
/*!40000 ALTER TABLE `user_sub_menu` DISABLE KEYS */;
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
	(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
	(2, 2, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
	(3, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
	(4, 3, 'Data barang', 'barang', 'fas fa-fw fa-warehouse', 1),
	(5, 3, 'Jadwal Survey', 'jadwal', 'far fa-fw fa-calendar-alt', 1);
/*!40000 ALTER TABLE `user_sub_menu` ENABLE KEYS */;

-- Dumping structure for table administrasi.user_token
CREATE TABLE IF NOT EXISTS `user_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table administrasi.user_token: ~0 rows (approximately)
/*!40000 ALTER TABLE `user_token` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_token` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
