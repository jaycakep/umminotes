-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.11.4-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for umminotes
DROP DATABASE IF EXISTS `umminotes`;
CREATE DATABASE IF NOT EXISTS `umminotes` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `umminotes`;

-- Dumping structure for table umminotes.hafalan
DROP TABLE IF EXISTS `hafalan`;
CREATE TABLE IF NOT EXISTS `hafalan` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `idpeserta` bigint(22) DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `surat` varchar(150) NOT NULL,
  `ayat` varchar(10) NOT NULL,
  `keterangan` longtext NOT NULL,
  `catatan` longtext NOT NULL,
  `stat` tinyint(1) NOT NULL DEFAULT 0,
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `idpeserta` (`idpeserta`),
  KEY `tanggal` (`tanggal`),
  KEY `stat` (`stat`),
  KEY `isdeleted` (`isdeleted`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

-- Dumping structure for table umminotes.iqra
DROP TABLE IF EXISTS `iqra`;
CREATE TABLE IF NOT EXISTS `iqra` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `idpeserta` bigint(22) NOT NULL DEFAULT 0,
  `tanggal` date DEFAULT current_timestamp(),
  `jilid` tinyint(2) NOT NULL DEFAULT 0,
  `halaman` varchar(10) NOT NULL DEFAULT '0',
  `keterangan` longtext NOT NULL,
  `stat` tinyint(4) NOT NULL DEFAULT 0,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `idpeserta` (`idpeserta`),
  KEY `tanggal` (`tanggal`),
  KEY `jilid` (`jilid`),
  KEY `stat` (`stat`),
  KEY `isdeleted` (`isdeleted`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

-- Dumping structure for table umminotes.listhafalan
DROP TABLE IF EXISTS `listhafalan`;
CREATE TABLE IF NOT EXISTS `listhafalan` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `idpeserta` bigint(22) DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `surat` varchar(150) NOT NULL,
  `ayat` varchar(10) NOT NULL,
  `keterangan` longtext NOT NULL,
  `catatan` longtext NOT NULL,
  `stat` tinyint(1) NOT NULL DEFAULT 0,
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `idpeserta` (`idpeserta`) USING BTREE,
  KEY `tanggal` (`tanggal`) USING BTREE,
  KEY `stat` (`stat`) USING BTREE,
  KEY `isdeleted` (`isdeleted`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

-- Dumping structure for table umminotes.masterstatus
DROP TABLE IF EXISTS `masterstatus`;
CREATE TABLE IF NOT EXISTS `masterstatus` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

-- Dumping structure for table umminotes.membaca
DROP TABLE IF EXISTS `membaca`;
CREATE TABLE IF NOT EXISTS `membaca` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `idpeserta` bigint(22) NOT NULL DEFAULT 0,
  `tanggal` date DEFAULT current_timestamp(),
  `jilid` tinyint(2) NOT NULL DEFAULT 0,
  `halaman` varchar(10) NOT NULL DEFAULT '0',
  `keterangan` longtext NOT NULL,
  `stat` tinyint(4) NOT NULL DEFAULT 0,
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `idpeserta` (`idpeserta`) USING BTREE,
  KEY `tanggal` (`tanggal`) USING BTREE,
  KEY `jilid` (`jilid`) USING BTREE,
  KEY `stat` (`stat`) USING BTREE,
  KEY `isdeleted` (`isdeleted`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

-- Dumping structure for table umminotes.murajaah
DROP TABLE IF EXISTS `murajaah`;
CREATE TABLE IF NOT EXISTS `murajaah` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `idpeserta` bigint(22) DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `surat` varchar(150) NOT NULL,
  `ayat` varchar(10) NOT NULL,
  `keterangan` longtext NOT NULL,
  `catatan` longtext NOT NULL,
  `stat` tinyint(1) NOT NULL DEFAULT 0,
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `idpeserta` (`idpeserta`) USING BTREE,
  KEY `tanggal` (`tanggal`) USING BTREE,
  KEY `stat` (`stat`) USING BTREE,
  KEY `isdeleted` (`isdeleted`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

-- Dumping structure for table umminotes.peserta
DROP TABLE IF EXISTS `peserta`;
CREATE TABLE IF NOT EXISTS `peserta` (
  `id` bigint(22) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `usia` tinyint(3) NOT NULL DEFAULT 0,
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0,
  `isdelete` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nama` (`nama`),
  KEY `usia` (`usia`),
  KEY `isdeleted` (`isdeleted`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
