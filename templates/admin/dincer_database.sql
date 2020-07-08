-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2015 at 05:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dincer_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anagayrimenkul`
--

CREATE TABLE IF NOT EXISTS `tb_anagayrimenkul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) DEFAULT NULL,
  `aciklama` varchar(50) DEFAULT NULL,
  `adres` varchar(250) DEFAULT NULL,
  `banka_adi` varchar(50) DEFAULT NULL,
  `hesapadi` varchar(50) DEFAULT NULL,
  `subekodu` varchar(50) DEFAULT NULL,
  `hesapno` varchar(40) DEFAULT NULL,
  `iban_no` varchar(40) DEFAULT NULL,
  `karardefteri` varchar(40) DEFAULT NULL,
  `isletmedefteri` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_anagayrimenkul`
--

INSERT INTO `tb_anagayrimenkul` (`id`, `ad`, `aciklama`, `adres`, `banka_adi`, `hesapadi`, `subekodu`, `hesapno`, `iban_no`, `karardefteri`, `isletmedefteri`) VALUES
(1, 'Abdulcan', 'Guzel apartman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_anagayrimenkul_yapilacakisler`
--

CREATE TABLE IF NOT EXISTS `tb_anagayrimenkul_yapilacakisler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gayrimenkulid` int(11) DEFAULT NULL,
  `yapilacakisid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_anagayrimenkul_yapilacakisler_gayrimenkul` (`gayrimenkulid`),
  KEY `fk_anagayrimenkul_yapilacakisler_yapilacakisler` (`yapilacakisid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bagimsizbolum`
--

CREATE TABLE IF NOT EXISTS `tb_bagimsizbolum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cinsi` varchar(20) DEFAULT NULL,
  `arsapayiorani` decimal(5,2) DEFAULT NULL,
  `kapino` varchar(20) DEFAULT NULL,
  `gayrimenkulid` int(11) DEFAULT NULL,
  `tapusahibi_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_bagimsizbolum_gayrimenkul` (`gayrimenkulid`),
  KEY `fk_bagimsizbolum_tapusahibi` (`tapusahibi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_denetci`
--

CREATE TABLE IF NOT EXISTS `tb_denetci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) DEFAULT NULL,
  `soyad` varchar(50) DEFAULT NULL,
  `telno` varchar(12) DEFAULT NULL,
  `gayrimenkulid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_denetci_anagayrimenkul` (`gayrimenkulid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_firma`
--

CREATE TABLE IF NOT EXISTS `tb_firma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) DEFAULT NULL,
  `telno` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adres` varchar(200) DEFAULT NULL,
  `iban_no` varchar(50) DEFAULT NULL,
  `subekodu` varchar(50) DEFAULT NULL,
  `hesapadi` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_firma`
--

INSERT INTO `tb_firma` (`id`, `ad`, `telno`, `email`, `adres`, `iban_no`, `subekodu`, `hesapadi`) VALUES
(1, 'a', 'a', 'a', 'a', 'a', 'a', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gideraciklama`
--

CREATE TABLE IF NOT EXISTS `tb_gideraciklama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aciklama` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_gideraciklama`
--

INSERT INTO `tb_gideraciklama` (`id`, `aciklama`) VALUES
(1, 'haftada 3 kez'),
(3, '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gidercinsi`
--

CREATE TABLE IF NOT EXISTS `tb_gidercinsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aciklama` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_gidercinsi`
--

INSERT INTO `tb_gidercinsi` (`id`, `aciklama`) VALUES
(2, 'Su FaturasÄ±'),
(4, 'DoÄŸal olmayan gaz');

-- --------------------------------------------------------

--
-- Table structure for table `tb_giderler`
--

CREATE TABLE IF NOT EXISTS `tb_giderler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cinsi` varchar(100) DEFAULT NULL,
  `aciklamasi` varchar(100) DEFAULT NULL,
  `dagitimparametresi` varchar(30) DEFAULT NULL,
  `dagitimyeri` varchar(50) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `toplamtutar` decimal(20,2) DEFAULT NULL,
  `kartutari` decimal(20,2) DEFAULT NULL,
  `isiyapanaodenentutar` decimal(20,2) DEFAULT NULL,
  `odemekaynagi` varchar(50) DEFAULT NULL,
  `tahsilatdurumu` tinyint(1) DEFAULT NULL,
  `kardurumu` tinyint(1) DEFAULT NULL,
  `gayrimenkulid` int(11) DEFAULT NULL,
  `firmaid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_giderler_gayrimenkul` (`gayrimenkulid`),
  KEY `fk_giderler_firma` (`firmaid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gidermuaf`
--

CREATE TABLE IF NOT EXISTS `tb_gidermuaf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `giderlerid` int(11) DEFAULT NULL,
  `bagimsizbolumid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_gidermuaf_giderler` (`giderlerid`),
  KEY `fk_gidermuaf_bagimsizbolum` (`bagimsizbolumid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kiraci`
--

CREATE TABLE IF NOT EXISTS `tb_kiraci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(40) DEFAULT NULL,
  `soyad` varchar(50) DEFAULT NULL,
  `telno` varchar(22) DEFAULT NULL,
  `bagimsizbolumid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_kiraci_bagimsizbolum` (`bagimsizbolumid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tapusahibi`
--

CREATE TABLE IF NOT EXISTS `tb_tapusahibi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(40) DEFAULT NULL,
  `soyad` varchar(50) DEFAULT NULL,
  `telno` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_temsilci`
--

CREATE TABLE IF NOT EXISTS `tb_temsilci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) DEFAULT NULL,
  `soyad` varchar(50) DEFAULT NULL,
  `telno` varchar(12) DEFAULT NULL,
  `gayrimenkulid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_temsilci_anagayrimenkul` (`gayrimenkulid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_yapilacakisler`
--

CREATE TABLE IF NOT EXISTS `tb_yapilacakisler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isadi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_yapilacakisler`
--

INSERT INTO `tb_yapilacakisler` (`id`, `isadi`) VALUES
(4, 'tornavida'),
(5, 'pano');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anagayrimenkul_yapilacakisler`
--
ALTER TABLE `tb_anagayrimenkul_yapilacakisler`
  ADD CONSTRAINT `fk_anagayrimenkul_yapilacakisler_gayrimenkul` FOREIGN KEY (`gayrimenkulid`) REFERENCES `tb_anagayrimenkul` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_anagayrimenkul_yapilacakisler_yapilacakisler` FOREIGN KEY (`yapilacakisid`) REFERENCES `tb_yapilacakisler` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_bagimsizbolum`
--
ALTER TABLE `tb_bagimsizbolum`
  ADD CONSTRAINT `fk_bagimsizbolum_gayrimenkul` FOREIGN KEY (`gayrimenkulid`) REFERENCES `tb_anagayrimenkul` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_bagimsizbolum_tapusahibi` FOREIGN KEY (`tapusahibi_id`) REFERENCES `tb_tapusahibi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_denetci`
--
ALTER TABLE `tb_denetci`
  ADD CONSTRAINT `fk_denetci_anagayrimenkul` FOREIGN KEY (`gayrimenkulid`) REFERENCES `tb_anagayrimenkul` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_giderler`
--
ALTER TABLE `tb_giderler`
  ADD CONSTRAINT `fk_giderler_firma` FOREIGN KEY (`firmaid`) REFERENCES `tb_firma` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_giderler_gayrimenkul` FOREIGN KEY (`gayrimenkulid`) REFERENCES `tb_anagayrimenkul` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_gidermuaf`
--
ALTER TABLE `tb_gidermuaf`
  ADD CONSTRAINT `fk_gidermuaf_bagimsizbolum` FOREIGN KEY (`bagimsizbolumid`) REFERENCES `tb_bagimsizbolum` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_gidermuaf_giderler` FOREIGN KEY (`giderlerid`) REFERENCES `tb_giderler` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_kiraci`
--
ALTER TABLE `tb_kiraci`
  ADD CONSTRAINT `fk_kiraci_bagimsizbolum` FOREIGN KEY (`bagimsizbolumid`) REFERENCES `tb_bagimsizbolum` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_temsilci`
--
ALTER TABLE `tb_temsilci`
  ADD CONSTRAINT `fk_temsilci_anagayrimenkul` FOREIGN KEY (`gayrimenkulid`) REFERENCES `tb_anagayrimenkul` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
