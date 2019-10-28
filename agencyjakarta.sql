-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.2.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table agencyjakarta.bank
CREATE TABLE IF NOT EXISTS `bank` (
  `idbank` int(11) NOT NULL AUTO_INCREMENT,
  `bank` varchar(50) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`idbank`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8;

-- Dumping data for table agencyjakarta.bank: ~133 rows (approximately)
/*!40000 ALTER TABLE `bank` DISABLE KEYS */;
INSERT INTO `bank` (`idbank`, `bank`, `flag`) VALUES
	(1, 'Bank Indonesia (BI)', 1),
	(2, 'Bank Mandiri', 1),
	(3, 'Bank Negara Indonesia (BNI)', 1),
	(4, 'Bank Rakyat Indonesia (BRI)', 1),
	(5, 'Bank Tabungan Negara (BTN)', 1),
	(6, 'Bank BRI Agroniaga', 1),
	(7, 'Bank Anda', 1),
	(8, 'Bank Artha Graha Internasional', 1),
	(9, 'Bank Bukopin', 1),
	(10, 'Bank Bumi Arta', 1),
	(11, 'Bank Capital Indonesia', 1),
	(12, 'Bank Central Asia (BCA)', 1),
	(13, 'Bank CIMB Niaga', 1),
	(14, 'Bank Danamon Indonesia', 1),
	(15, 'Bank Ekonomi Raharja', 1),
	(16, 'Bank Ganesha', 1),
	(17, 'Bank KEB Hana', 1),
	(18, 'Bank Woori Saudara', 1),
	(19, 'Bank ICBC Indonesia', 1),
	(20, 'Bank Index Selindo', 1),
	(21, 'Bank Maybank Indonesia', 1),
	(22, 'Bank Maspion', 1),
	(23, 'Bank Mayapada', 1),
	(24, 'Bank Mega', 1),
	(25, 'Bank Mestika Dharma', 1),
	(26, 'Bank Shinhan Indonesia', 1),
	(27, 'Bank MNC Internasional', 1),
	(28, 'Bank J Trust Indonesia', 1),
	(29, 'Bank Nusantara Parahyangan', 1),
	(30, 'Bank OCBC NISP', 1),
	(31, 'Bank of India Indonesia', 1),
	(32, 'Panin Bank', 1),
	(33, 'Bank Permata', 1),
	(34, 'Bank QNB Indonesia', 1),
	(35, 'Bank SBI Indonesia', 1),
	(36, 'Bank Sinarmas', 1),
	(37, 'Bank UOB Indonesia', 1),
	(38, 'Amar Bank Indonesia', 1),
	(39, 'Bank Andara', 1),
	(40, 'Bank Artos Indonesia', 1),
	(41, 'Bank Bisnis Internasional', 1),
	(42, 'Bank Tabungan Pensiunan Nasional', 1),
	(43, 'Bank Sahabat Sampoerna', 1),
	(44, 'Bank Fama Internasional', 1),
	(45, 'Bank Harda Internasional', 1),
	(46, 'Bank Ina Perdana', 1),
	(47, 'Bank Jasa Jakarta', 1),
	(48, 'Bank Kesejahteraan Ekonomi', 1),
	(49, 'Bank Dinar Indonesia', 1),
	(50, 'Bank Mayora', 1),
	(51, 'Bank Mitraniaga', 1),
	(52, 'Bank Multi Arta Sentosa', 1),
	(53, 'Bank Nationalnobu', 1),
	(54, 'Prima Master Bank', 1),
	(55, 'Bank Pundi Indonesia', 1),
	(56, 'Bank Royal Indonesia', 1),
	(57, 'Bank Mandiri Taspen Pos', 1),
	(58, 'Bank Victoria Internasional', 1),
	(59, 'Bank Yudha Bhakti', 1),
	(60, 'Bank BPD Aceh', 1),
	(61, 'Bank Sumut', 1),
	(62, 'Bank Nagari', 1),
	(63, 'Bank Riau Kepri', 1),
	(64, 'Bank Jambi', 1),
	(65, 'Bank Bengkulu', 1),
	(66, 'Bank Sumsel Babel', 1),
	(67, 'Bank Lampung', 1),
	(68, 'Bank DKI', 1),
	(69, 'Bank BJB', 1),
	(70, 'Bank Jateng', 1),
	(71, 'Bank BPD DIY', 1),
	(72, 'Bank Jatim', 1),
	(73, 'Bank Kalbar', 1),
	(74, 'Bank Kalteng', 1),
	(75, 'Bank Kalsel', 1),
	(76, 'Bank Kaltim', 1),
	(77, 'Bank Sulsel', 1),
	(78, 'Bank Sultra', 1),
	(79, 'Bank BPD Sulteng', 1),
	(80, 'Bank Sulut', 1),
	(81, 'Bank BPD Bali', 1),
	(82, 'Bank NTB', 1),
	(83, 'Bank NTT', 1),
	(84, 'Bank Maluku', 1),
	(85, 'Bank Papua', 1),
	(86, 'Bank ANZ Indonesia', 1),
	(87, 'Bank Commonwealth', 1),
	(88, 'Bank Agris', 1),
	(89, 'Bank BNP Paribas Indonesia', 1),
	(90, 'Bank Chinatrust Indonesia', 1),
	(91, 'Bank DBS Indonesia', 1),
	(92, 'Bank Mizuho Indonesia', 1),
	(93, 'Bank Rabobank International Indonesia', 1),
	(94, 'Bank Resona Perdania', 1),
	(95, 'Bank Sumitomo Mitsui Indonesia', 1),
	(96, 'Bank Windu Kentjana International', 1),
	(97, 'Bank of America', 1),
	(98, 'Bangkok Bank', 1),
	(99, 'Bank of China', 1),
	(100, 'Citibank', 1),
	(101, 'Deutsche Bank', 1),
	(102, 'HSBC', 1),
	(103, 'JPMorgan Chase', 1),
	(104, 'Standard Chartered', 1),
	(105, 'The Bank of Tokyo-Mitsubishi UFJ', 1),
	(106, 'Bank BNI Syariah', 1),
	(107, 'Bank Mega Syariah', 1),
	(108, 'Bank Muamalat Indonesia', 1),
	(109, 'Bank Syariah Mandiri', 1),
	(110, 'BCA Syariah', 1),
	(111, 'Bank BJB Syariah', 1),
	(112, 'Bank BRI Syariah', 1),
	(113, 'Panin Bank Syariah', 1),
	(114, 'Bank Syariah Bukopin', 1),
	(115, 'Bank Victoria Syariah', 1),
	(116, 'BTPN Syariah', 1),
	(117, 'Bank Maybank Syariah Indonesia', 1),
	(118, 'Bank BTN Syariah', 1),
	(119, 'Bank Danamon Syariah', 1),
	(120, 'CIMB Niaga Syariah', 1),
	(121, 'BII Syariah', 1),
	(122, 'OCBC NISP Syariah', 1),
	(123, 'Bank Permata Syariah', 1),
	(124, 'Bank Nagari Syariah', 1),
	(125, 'Bank BPD Aceh Syariah', 1),
	(126, 'Bank DKI Syariah', 1),
	(127, 'Bank Kalbar Syariah', 1),
	(128, 'Bank Kalsel Syariah', 1),
	(129, 'Bank NTB Syariah', 1),
	(130, 'Bank Riau Kepri Syariah', 1),
	(131, 'Bank Sumsel Babel Syariah', 1),
	(132, 'Bank Sumut Syariah', 1),
	(133, 'Bank Kaltim Syariah', 1);
/*!40000 ALTER TABLE `bank` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.city
CREATE TABLE IF NOT EXISTS `city` (
  `idcity` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) NOT NULL,
  PRIMARY KEY (`idcity`)
) ENGINE=InnoDB AUTO_INCREMENT=228 DEFAULT CHARSET=utf8;

-- Dumping data for table agencyjakarta.city: ~99 rows (approximately)
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` (`idcity`, `city_name`) VALUES
	(129, 'Banda Aceh'),
	(130, 'Langsa'),
	(131, 'Lhokseumawe'),
	(132, 'Meulaboh'),
	(133, 'Sabang'),
	(134, 'Subulussalam'),
	(135, 'Denpasar'),
	(136, 'Pangkalpinang'),
	(137, 'Cilegon'),
	(138, 'Serang'),
	(139, 'Tangerang Selatan'),
	(140, 'Tangerang'),
	(141, 'Bengkulu'),
	(142, 'Gorontalo'),
	(143, 'Jakarta Barat'),
	(144, 'Jakarta Pusat'),
	(145, 'Jakarta Selatan'),
	(146, 'Jakarta Timur'),
	(147, 'Jakarta Utara'),
	(148, 'Sungai Penuh'),
	(149, 'Jambi'),
	(150, 'Bandung'),
	(151, 'Bekasi'),
	(152, 'Bogor'),
	(153, 'Cimahi'),
	(154, 'Cirebon'),
	(155, 'Depok'),
	(156, 'Sukabumi'),
	(157, 'Tasikmalaya'),
	(158, 'Banjar'),
	(159, 'Magelang'),
	(160, 'Pekalongan'),
	(161, 'Purwokerto'),
	(162, 'Salatiga'),
	(163, 'Semarang'),
	(164, 'Surakarta'),
	(165, 'Tegal'),
	(166, 'Batu'),
	(167, 'Blitar'),
	(168, 'Kediri'),
	(169, 'Madiun'),
	(170, 'Malang'),
	(171, 'Mojokerto'),
	(172, 'Pasuruan'),
	(173, 'Probolinggo'),
	(174, 'Surabaya'),
	(175, 'Pontianak'),
	(176, 'Singkawang'),
	(177, 'Banjarbaru'),
	(178, 'Banjarmasin'),
	(179, 'Palangkaraya'),
	(180, 'Balikpapan'),
	(181, 'Bontang'),
	(182, 'Samarinda'),
	(183, 'Tarakan'),
	(184, 'Batam'),
	(185, 'Tanjungpinang'),
	(186, 'Bandar Lampung'),
	(187, 'Metro'),
	(188, 'Ternate'),
	(189, 'Tidore Kepulauan'),
	(190, 'Ambon'),
	(191, 'Tual'),
	(192, 'Bima'),
	(193, 'Mataram'),
	(194, 'Kupang'),
	(195, 'Sorong'),
	(196, 'Jayapura'),
	(197, 'Dumai'),
	(198, 'Pekanbaru'),
	(199, 'Makassar'),
	(200, 'Palopo'),
	(201, 'Parepare'),
	(202, 'Palu'),
	(203, 'Bau-Bau'),
	(204, 'Kendari'),
	(205, 'Bitung'),
	(206, 'Kotamobagu'),
	(207, 'Manado'),
	(208, 'Tomohon'),
	(209, 'Bukittinggi'),
	(210, 'Padang'),
	(211, 'Padangpanjang'),
	(212, 'Pariaman'),
	(213, 'Payakumbuh'),
	(214, 'Sawahlunto'),
	(215, 'Solok'),
	(216, 'Lubuklinggau'),
	(217, 'Pagaralam'),
	(218, 'Palembang'),
	(219, 'Prabumulih'),
	(220, 'Binjai'),
	(221, 'Medan'),
	(222, 'Padang Sidempuan'),
	(223, 'Pematangsiantar'),
	(224, 'Sibolga'),
	(225, 'Tanjungbalai'),
	(226, 'Tebingtinggi'),
	(227, 'Yogyakarta');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.client
CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` text DEFAULT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`idclient`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table agencyjakarta.client: ~2 rows (approximately)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` (`idclient`, `name`, `username`, `password`, `company_name`, `address`, `phone_number`, `email`, `city`, `created_date`, `flag`) VALUES
	(1, 'Muhamad Adinugraha', 'adinugraha', 'Passw0rd', 'PT Bagus Pratama Mandiri', 'Jalan Gardenia', '81210854342', 'manqrdeveloper@gmail.com', 'Jakarta Pusat', '2019-05-27 12:06:41', 1),
	(3, 'Muhamad Adinugraha', 'madinugraha', '$2y$13$gC25ueNJQds.AuyUpsLZqORANnLOhJHK.L2L8u4A2E7..kIpzZaJ2', 'Company', 'Address', '81210854342', 'manqrdeveloper1@gmail.com', 'Jakarta Pusat', '2019-05-29 23:35:28', 1);
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.contract
CREATE TABLE IF NOT EXISTS `contract` (
  `contract_id` varchar(20) NOT NULL,
  `idclient` int(11) NOT NULL,
  `pic_name` varchar(50) NOT NULL,
  `pic_phone` varchar(20) NOT NULL,
  `pic_email` varchar(50) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `number_of_spg` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `contract_status` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `upload_file` varchar(50) DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_by` varchar(50) DEFAULT NULL,
  `urutan` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`urutan`,`contract_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table agencyjakarta.contract: ~0 rows (approximately)
/*!40000 ALTER TABLE `contract` DISABLE KEYS */;
INSERT INTO `contract` (`contract_id`, `idclient`, `pic_name`, `pic_phone`, `pic_email`, `start_date`, `end_date`, `number_of_spg`, `description`, `contract_status`, `payment_status`, `upload_file`, `cost`, `created_date`, `created_by`, `update_date`, `update_by`, `urutan`) VALUES
	('CR-001', 1, 'Nugraha Muhamad', '+6281210854342', 'manqrdeveloper@gmail.com', '2019-06-08', '2019-06-15', 4, '<p>Description</p>', 1, 0, 'erd.pdf', 6000000, '2019-06-01 14:00:38', 'admin', NULL, NULL, 7);
/*!40000 ALTER TABLE `contract` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.event
CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `contract_id` varchar(20) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `grade_spg` varchar(5) NOT NULL,
  `img_event` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table agencyjakarta.event: ~0 rows (approximately)
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.fcm
CREATE TABLE IF NOT EXISTS `fcm` (
  `token` varchar(255) DEFAULT NULL,
  `deviceId` varchar(50) DEFAULT NULL,
  `urutan` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`urutan`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table agencyjakarta.fcm: 13 rows
/*!40000 ALTER TABLE `fcm` DISABLE KEYS */;
INSERT INTO `fcm` (`token`, `deviceId`, `urutan`) VALUES
	('fV4_aja6LLs:APA91bH6J9VNy7ZyZ_YeecB26cFV77BYChmrhsWlSSQKC5E4GmS93ZIuBcUvau7jWOFdMo5OG-ADprpCBquS8K75FKj8UCby1WqTHg-0b89E_iwezTkZn9PmVlttWQXlqRMTYjOxP-ut', '448586bed5ea5293', 10),
	('detF19bbHtU:APA91bHSGNHkVnyFrzArKADw_lfWtsd636GmHExqNlpoL9KnVaXbXgFa-pDIXAzPyIELqfhDwWRy9Z5zbEGAiVTdnera_5n_hep0HWGvV2Gd8wwRtBGIm9W0ih2Ti7h2GfcEDFFbukQS', 'ea38a828c99dda82', 8),
	('fV4_aja6LLs:APA91bH6J9VNy7ZyZ_YeecB26cFV77BYChmrhsWlSSQKC5E4GmS93ZIuBcUvau7jWOFdMo5OG-ADprpCBquS8K75FKj8UCby1WqTHg-0b89E_iwezTkZn9PmVlttWQXlqRMTYjOxP-ut', '448586bed5ea5293', 9),
	('fV4_aja6LLs:APA91bH6J9VNy7ZyZ_YeecB26cFV77BYChmrhsWlSSQKC5E4GmS93ZIuBcUvau7jWOFdMo5OG-ADprpCBquS8K75FKj8UCby1WqTHg-0b89E_iwezTkZn9PmVlttWQXlqRMTYjOxP-ut', '448586bed5ea5293', 11),
	('dR1E6tWuKdw:APA91bFazllNrJ2POwrz-4XtIM-QzeX8cL2xSjutVuwAbLy-Tlpkk-EiF5-pjwA9_O8uAAev5tM7JFfV6L_xdNgXJsSZr1B9lHCiunBodrpWQRSVjVPoHlwMToN2ujZ5c7tT166jdoWl', 'ea38a828c99dda82', 12),
	('dR1E6tWuKdw:APA91bFazllNrJ2POwrz-4XtIM-QzeX8cL2xSjutVuwAbLy-Tlpkk-EiF5-pjwA9_O8uAAev5tM7JFfV6L_xdNgXJsSZr1B9lHCiunBodrpWQRSVjVPoHlwMToN2ujZ5c7tT166jdoWl', 'ea38a828c99dda82', 13),
	('cQ9XfYBqKSg:APA91bFXpY1M2NZ4tz0WuBnl1SxLPzUV1zuhGjrrd5_HEfDGHKBlUI4MK8GEMPlnCO0J5JD9rdrElP_Ghb7_3D4DAyYUgpG39y34M4C3PKQdL0WzL6YKBl08EL2_Jd4Kr_LU9pEvO2bb', 'ea38a828c99dda82', 14),
	('ejwarCDqRDI:APA91bFX2cidW6B3f3I8rHyvaOs2wUm7C9aRJJMmXZbO5aDGVx5Rdx17OOTO4oJWVHQttAgNRY_nzXI6lrUfW0DsKEooMckpiSJNpBUWvD9M2XRbHRpOUDpOzEFr9cJsF6LU-xeEOEQZ', 'ea38a828c99dda82', 15),
	('ejwarCDqRDI:APA91bFX2cidW6B3f3I8rHyvaOs2wUm7C9aRJJMmXZbO5aDGVx5Rdx17OOTO4oJWVHQttAgNRY_nzXI6lrUfW0DsKEooMckpiSJNpBUWvD9M2XRbHRpOUDpOzEFr9cJsF6LU-xeEOEQZ', 'ea38a828c99dda82', 16),
	('fV4_aja6LLs:APA91bH6J9VNy7ZyZ_YeecB26cFV77BYChmrhsWlSSQKC5E4GmS93ZIuBcUvau7jWOFdMo5OG-ADprpCBquS8K75FKj8UCby1WqTHg-0b89E_iwezTkZn9PmVlttWQXlqRMTYjOxP-ut', '448586bed5ea5293', 17),
	('ejwarCDqRDI:APA91bFX2cidW6B3f3I8rHyvaOs2wUm7C9aRJJMmXZbO5aDGVx5Rdx17OOTO4oJWVHQttAgNRY_nzXI6lrUfW0DsKEooMckpiSJNpBUWvD9M2XRbHRpOUDpOzEFr9cJsF6LU-xeEOEQZ', 'ea38a828c99dda82', 18),
	('d5AMht_maBY:APA91bHYj4Z7KUPeNQPv9gwYifp6mcrLHddyM8C3TveNhlNW9nIxQODA9vCHSYz8ILbUQVy_Qo_lc1c1vgjyxf6W3i1e_g29kOHHG0-Bnz3tKTIXq73J_8043bOVgg2NaiUUi0HGvaf2', 'ea38a828c99dda82', 19),
	('eCvPuRpeOf8:APA91bHezqF49b2u4PV69oQEy6ghLSOGQppSGLqxWaXMbuc2clogT4WeTa5HUKkiixaxAlrPVmZszF93z8k-zJ-SI-LLLUTq4W18NPEn8-IwD_B4gjD5nKSCBM4i2iOEGo4_6TqeibQA', 'f340db70b49219a3', 20);
/*!40000 ALTER TABLE `fcm` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.grade
CREATE TABLE IF NOT EXISTS `grade` (
  `grade_code` varchar(5) NOT NULL,
  `grade` varchar(5) DEFAULT NULL,
  `flag` int(11) DEFAULT NULL,
  PRIMARY KEY (`grade_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table agencyjakarta.grade: ~2 rows (approximately)
/*!40000 ALTER TABLE `grade` DISABLE KEYS */;
INSERT INTO `grade` (`grade_code`, `grade`, `flag`) VALUES
	('A', 'A', 1),
	('B', 'B', 1);
/*!40000 ALTER TABLE `grade` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.migration
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table agencyjakarta.migration: ~2 rows (approximately)
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1548771825),
	('m130524_201442_init', 1548771828);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.pembayaran_client
CREATE TABLE IF NOT EXISTS `pembayaran_client` (
  `payment_number` varchar(20) NOT NULL,
  `invoice_id` varchar(20) NOT NULL,
  `payment_menthod` varchar(50) NOT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `account_name` varchar(50) DEFAULT NULL,
  `payment_date` date NOT NULL,
  `prove_file` varchar(50) DEFAULT NULL,
  `nominal` double NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `urutan` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`urutan`),
  UNIQUE KEY `payment_number` (`payment_number`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Dumping data for table agencyjakarta.pembayaran_client: ~2 rows (approximately)
/*!40000 ALTER TABLE `pembayaran_client` DISABLE KEYS */;
INSERT INTO `pembayaran_client` (`payment_number`, `invoice_id`, `payment_menthod`, `bank_name`, `account_name`, `payment_date`, `prove_file`, `nominal`, `create_date`, `create_by`, `status`, `urutan`) VALUES
	('PAY-19-06-001', 'INV-19-06-001', 'Cash', '', '-', '2019-06-30', 'erd.pdf', 3000000, '2019-06-01 14:43:08', 'admin', 1, 14),
	('PAY-19-06-002', 'INV-19-06-001', 'Transfer', 'Bank Central Asia (BCA)', '12345678', '2019-06-02', 'erd.pdf', 1500000, '2019-06-01 22:41:39', 'admin', 1, 15);
/*!40000 ALTER TABLE `pembayaran_client` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.provinces
CREATE TABLE IF NOT EXISTS `provinces` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table agencyjakarta.provinces: ~34 rows (approximately)
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` (`id`, `name`) VALUES
	('11', 'ACEH'),
	('12', 'SUMATERA UTARA'),
	('13', 'SUMATERA BARAT'),
	('14', 'RIAU'),
	('15', 'JAMBI'),
	('16', 'SUMATERA SELATAN'),
	('17', 'BENGKULU'),
	('18', 'LAMPUNG'),
	('19', 'KEPULAUAN BANGKA BELITUNG'),
	('21', 'KEPULAUAN RIAU'),
	('31', 'DKI JAKARTA'),
	('32', 'JAWA BARAT'),
	('33', 'JAWA TENGAH'),
	('34', 'DI YOGYAKARTA'),
	('35', 'JAWA TIMUR'),
	('36', 'BANTEN'),
	('51', 'BALI'),
	('52', 'NUSA TENGGARA BARAT'),
	('53', 'NUSA TENGGARA TIMUR'),
	('61', 'KALIMANTAN BARAT'),
	('62', 'KALIMANTAN TENGAH'),
	('63', 'KALIMANTAN SELATAN'),
	('64', 'KALIMANTAN TIMUR'),
	('65', 'KALIMANTAN UTARA'),
	('71', 'SULAWESI UTARA'),
	('72', 'SULAWESI TENGAH'),
	('73', 'SULAWESI SELATAN'),
	('74', 'SULAWESI TENGGARA'),
	('75', 'GORONTALO'),
	('76', 'SULAWESI BARAT'),
	('81', 'MALUKU'),
	('82', 'MALUKU UTARA'),
	('91', 'PAPUA BARAT'),
	('94', 'PAPUA');
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.schedule
CREATE TABLE IF NOT EXISTS `schedule` (
  `contract_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `date_period` date NOT NULL,
  `time_period` varchar(50) NOT NULL,
  `limit` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `urutan` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`urutan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table agencyjakarta.schedule: ~0 rows (approximately)
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.schedule_detail
CREATE TABLE IF NOT EXISTS `schedule_detail` (
  `schedule_id` int(11) NOT NULL,
  `spg_id` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  PRIMARY KEY (`urutan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table agencyjakarta.schedule_detail: ~0 rows (approximately)
/*!40000 ALTER TABLE `schedule_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedule_detail` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.slider
CREATE TABLE IF NOT EXISTS `slider` (
  `idslider` int(11) NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(50) DEFAULT NULL,
  `slider_image` varchar(50) DEFAULT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`idslider`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table agencyjakarta.slider: ~0 rows (approximately)
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` (`idslider`, `slider_name`, `slider_image`, `flag`) VALUES
	(1, 'Slider Event PRJ', 'Capture.PNG', 1);
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.spg
CREATE TABLE IF NOT EXISTS `spg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_account` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ktp` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bod` date DEFAULT NULL,
  `high` int(11) DEFAULT 0,
  `weight` int(11) DEFAULT 0,
  `language` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `face` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verified` int(11) DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deviceId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `active_work` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=477 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table agencyjakarta.spg: ~6 rows (approximately)
/*!40000 ALTER TABLE `spg` DISABLE KEYS */;
INSERT INTO `spg` (`id`, `city`, `bank_account`, `account_number`, `username`, `first_name`, `last_name`, `phone`, `email`, `address`, `description`, `ktp`, `bod`, `high`, `weight`, `language`, `face`, `verified`, `auth_key`, `password`, `deviceId`, `created_at`, `updated_at`, `active_work`, `status`) VALUES
	(471, NULL, NULL, NULL, 'madinugraha', 'Muhamad Adinugraha', NULL, '9349293403', 'muhamadadinugraha@gmail.com', 'SUMATERA SELATAN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, '1919-04-15', 0, 0, NULL, NULL, NULL, '3WwVgulHxaRE81CvqFy1-0dJ25gfome9', '6322f4418abd3a47de03b7686312150ce5c64401', 'ea38a828c99dda82', '2019-03-07', NULL, NULL, 1),
	(472, NULL, NULL, NULL, 'Laoktaviani', NULL, NULL, NULL, 'laoktaviani@gmail.com', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 'IBDK59RllKZb6euOYW2IY116rK4VH53U', '881473af2094cd338a4f8ab1cc18b603df6aa99c', '448586bed5ea5293', '2019-03-07', NULL, NULL, 1),
	(473, NULL, NULL, NULL, 'Intan', NULL, NULL, NULL, 'intan@gmail.com', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 'oeWxz1edst66k8_QxcRR-1b7Q_WpPOFz', '7c4a8d09ca3762af61e59520943dc26494f8941b', '448586bed5ea5293', '2019-03-07', NULL, NULL, 1),
	(474, NULL, NULL, NULL, 'adinugraha', 'Muhamad Adinugraha', NULL, '081210854342', 'adinugraha@gmail.com', 'SUMATERA BARAT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', NULL, '1995-04-15', 0, 0, NULL, NULL, NULL, 'ZGFeqgqkZ3WJxdHVyWitFQbe4kLyBU8Q', '6322f4418abd3a47de03b7686312150ce5c64401', '', '2019-04-07', NULL, NULL, 1),
	(475, NULL, NULL, NULL, 'Test', 'Muhamaf adi', NULL, '', 'Test@gmail.com', 's', 'Jkdkd\nJ', NULL, NULL, 0, 0, NULL, NULL, NULL, '3WcTIEpOoqOEvSQrKpk16LHw-Tn2Opcx', '7288edd0fc3ffcbe93a0cf06e3568e28521687bc', 'ea38a828c99dda82', '2019-04-15', NULL, NULL, 1),
	(476, NULL, NULL, NULL, 'bagusjack', NULL, NULL, NULL, 'bagusjack5@gmail.com', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 'p267zCuVPGITZNkf1KjqEZCgFOh_I9zH', '6f252cf868f772d241b4be1afaf64301f09ab3ae', '', '2019-05-21', NULL, NULL, 1);
/*!40000 ALTER TABLE `spg` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.spg_experience
CREATE TABLE IF NOT EXISTS `spg_experience` (
  `idexperience` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `company` varchar(50) DEFAULT NULL,
  `start_date` year(4) NOT NULL,
  `end_date` date DEFAULT NULL,
  `delete_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`idexperience`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table agencyjakarta.spg_experience: ~5 rows (approximately)
/*!40000 ALTER TABLE `spg_experience` DISABLE KEYS */;
INSERT INTO `spg_experience` (`idexperience`, `username`, `logo`, `title`, `company`, `start_date`, `end_date`, `delete_status`) VALUES
	(1, 'adinugraha', NULL, 'title', 'Company1', '2018', NULL, 0),
	(2, 'adinugraha', NULL, 'title', 'Company2', '2018', NULL, 0),
	(3, 'adinugraha', NULL, 'Titl3', 'MNC Life Assurance', '2016', NULL, 0),
	(4, 'adinugraha', NULL, 'Title 4', 'Medika Plaza', '2019', NULL, 0),
	(5, 'adinugraha', NULL, 'Title 5', 'Ksksk', '2019', NULL, 0);
/*!40000 ALTER TABLE `spg_experience` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.spg_photo
CREATE TABLE IF NOT EXISTS `spg_photo` (
  `idphoto` int(11) NOT NULL AUTO_INCREMENT,
  `idspg` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `delete_status` int(11) NOT NULL,
  PRIMARY KEY (`idphoto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table agencyjakarta.spg_photo: ~0 rows (approximately)
/*!40000 ALTER TABLE `spg_photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `spg_photo` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.spg_social
CREATE TABLE IF NOT EXISTS `spg_social` (
  `idsocial` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `icons` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`idsocial`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table agencyjakarta.spg_social: ~4 rows (approximately)
/*!40000 ALTER TABLE `spg_social` DISABLE KEYS */;
INSERT INTO `spg_social` (`idsocial`, `username`, `icons`, `link`, `flag`) VALUES
	(1, 'adinugraha', 'facebook', 'asdasdads', 1),
	(2, 'test', 'facebook', 'asddasd', 1),
	(3, 'adinugraha', 'twitter', 'czxsfdf', 1),
	(4, 'adinugraha', 'instagram', 'instagram', 1);
/*!40000 ALTER TABLE `spg_social` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.tagihan_client
CREATE TABLE IF NOT EXISTS `tagihan_client` (
  `invoice_id` varchar(20) NOT NULL,
  `contract_id` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `nominal` double NOT NULL,
  `invoice_address` text NOT NULL,
  `invoice_name` varchar(50) NOT NULL,
  `invoice_email` varchar(50) NOT NULL,
  `due_date` date NOT NULL,
  `invoice_phone` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `urutan` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`urutan`),
  UNIQUE KEY `invoice_id` (`invoice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table agencyjakarta.tagihan_client: ~0 rows (approximately)
/*!40000 ALTER TABLE `tagihan_client` DISABLE KEYS */;
INSERT INTO `tagihan_client` (`invoice_id`, `contract_id`, `client_id`, `nominal`, `invoice_address`, `invoice_name`, `invoice_email`, `due_date`, `invoice_phone`, `create_date`, `create_by`, `status`, `urutan`) VALUES
	('INV-19-06-001', 'CR-001', 1, 1500000, 'Jalan Gardenia', 'Muhamad Adinugraha', 'manqrdeveloper@gmail.com', '2019-06-08', '81210854342', '2019-06-01 14:00:38', 'admin', 0, 2);
/*!40000 ALTER TABLE `tagihan_client` ENABLE KEYS */;

-- Dumping structure for table agencyjakarta.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table agencyjakarta.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'IDziUakHmwFQ_fqFftctvteSXFBxJD9T', '$2y$13$aVZvE8CcLsR1GWXEsbzW2OCriSZpHDVhVmMWSko8yJxK04IMMXqOa', NULL, 'admin@agencyjakarta.com', 10, 1548772001, 1548772001);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
