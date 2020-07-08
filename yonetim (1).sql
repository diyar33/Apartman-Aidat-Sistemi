-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 30 Oca 2020, 14:06:36
-- Sunucu sürümü: 10.4.6-MariaDB
-- PHP Sürümü: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yonetim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_anagayrimenkul`
--

CREATE TABLE `tb_anagayrimenkul` (
  `id` int(11) NOT NULL,
  `payda` float NOT NULL,
  `ad` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `banka_adi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hesapadi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `subekodu` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hesapno` varchar(40) COLLATE utf8_turkish_ci DEFAULT NULL,
  `iban_no` varchar(40) COLLATE utf8_turkish_ci DEFAULT NULL,
  `karardefteri` varchar(40) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isletmedefteri` varchar(40) COLLATE utf8_turkish_ci DEFAULT NULL,
  `vergino` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `temsilci` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `denetci` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bagimsizbolumsayisi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tb_anagayrimenkul`
--

INSERT INTO `tb_anagayrimenkul` (`id`, `payda`, `ad`, `aciklama`, `adres`, `banka_adi`, `hesapadi`, `subekodu`, `hesapno`, `iban_no`, `karardefteri`, `isletmedefteri`, `vergino`, `temsilci`, `denetci`, `bagimsizbolumsayisi`) VALUES
(1, 1, 'Diyar', 'Åžok Ã¼stÃ¼', 'Meydan Mahallesi, 505 sokak', 'Enpara', 'Diyar AydÄ±n', '533', '12345654321345', 'tr3674567456745874584578', 'alindi/onaylandi', 'alindi/onaylandi', '23456323456', 'YÃ¼sra', 'Emin', 6),
(2, 1, 'deneme', '', 'meydan', '', '', '', '', '', 'alindi/onaylandi', 'alindi/onaylandi', '', 'diyar', 'mehmet', 6),
(3, 1, 'AY', '', 'ÅžAVAÅž ', '', '', '', '', '', 'alindi/onaylandi', 'alindi/onaylandi', '', 'AHMET', 'MEHMET', 5),
(4, 7, 'KARAHAN', '', 'MEYDAN', '', '', '', '', '', 'alindi/onaylandi', 'alindi/onaylandi', '', 'GÃ¼rkan', 'DayÄ±', 5),
(5, 5, 'YENÄ°', '', 'AKDENÄ°Z', '', '', '', '', '', 'alindi/onaylandi', 'alindi/onaylandi', '', 'GÃ¼rkan', 'MEHMET', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_anagayrimenkul_giderler`
--

CREATE TABLE `tb_anagayrimenkul_giderler` (
  `id` int(11) NOT NULL,
  `cinsi` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklamasi` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dagitimparametresi` tinyint(1) DEFAULT NULL,
  `dagitimyeri` tinyint(1) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `taksit_sayisi` int(11) NOT NULL DEFAULT 1,
  `toplamtutar` decimal(20,2) DEFAULT NULL,
  `kartutari` decimal(20,2) DEFAULT NULL,
  `isiyapanaodenentutar` decimal(20,2) DEFAULT NULL,
  `tahsilatdurumu` tinyint(1) DEFAULT NULL,
  `kardurumu` tinyint(1) DEFAULT NULL,
  `gayrimenkulid` int(11) DEFAULT NULL,
  `belgenin_tarihi` date DEFAULT NULL,
  `belgenin_serino` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `belgenin_cinsi` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tb_anagayrimenkul_giderler`
--

INSERT INTO `tb_anagayrimenkul_giderler` (`id`, `cinsi`, `aciklamasi`, `dagitimparametresi`, `dagitimyeri`, `tarih`, `taksit_sayisi`, `toplamtutar`, `kartutari`, `isiyapanaodenentutar`, `tahsilatdurumu`, `kardurumu`, `gayrimenkulid`, `belgenin_tarihi`, `belgenin_serino`, `belgenin_cinsi`) VALUES
(1, 'Elektrik FaturasÄ±', '(Haftada 1 kez YazÄ±lÄ±r)', 1, 0, '2020-01-08', 1, '450.00', '350.00', '100.00', 0, 1, 4, '0000-00-00', '', ''),
(2, 'AsansÃ¶r BakÄ±m Ãœcreti', '(Ayda 1 Kez YazÄ±lÄ±r)', 1, 0, '2020-02-08', 1, '450.00', '350.00', '100.00', 0, 1, 4, '0000-00-00', '', ''),
(3, 'AsansÃ¶r BakÄ±m Ãœcreti', '(Ayda 1 Kez YazÄ±lÄ±r)', 1, 0, '2020-01-08', 2, '580.00', '460.00', '120.00', 0, 1, 4, '0000-00-00', '', ''),
(4, 'AsansÃ¶r BakÄ±m Ãœcreti', '(Ayda 1 Kez YazÄ±lÄ±r)', 0, 0, '2020-02-08', 1, '700.00', '600.00', '100.00', 0, 1, 4, '0000-00-00', '', ''),
(5, 'Elektrik FaturasÄ±', '(Haftada 1 kez YazÄ±lÄ±r)', 1, 0, '2020-02-08', 1, '540.00', '400.00', '140.00', 0, 1, 4, '0000-00-00', '', ''),
(6, 'Elektrik FaturasÄ±', '(Haftada 1 kez YazÄ±lÄ±r)', 0, 0, '2020-01-08', 3, '1600.00', '1450.00', '150.00', 0, 1, 4, '0000-00-00', '', ''),
(7, 'Merdiven Temizlik', '(Ayda 1 Kez YazÄ±lÄ±r)', 0, 0, '2020-02-08', 1, '201.00', '1.00', '200.00', 0, 1, 4, '0000-00-00', '', ''),
(8, 'YÃ¶netim Hizmet Bedeli', '(Ayda 1 Kez YazÄ±lÄ±r)', 1, 0, '2020-02-08', 4, '2000.00', '0.00', '2000.00', 0, 0, 4, '0000-00-00', '', ''),
(9, 'AsansÃ¶r BakÄ±m Ãœcreti', '4', 1, 0, '2020-01-08', 1, '500.00', '350.00', '150.00', 0, 1, 4, '0000-00-00', '', ''),
(10, 'Merdiven Temizlik', '4', 1, 0, '2020-05-08', 1, '500.00', '400.00', '100.00', 0, 1, 4, '0000-00-00', '', ''),
(11, 'AsansÃ¶r BakÄ±m Ãœcreti', '4', 1, 0, '2020-09-08', 1, '1500.00', '1350.00', '150.00', 0, 1, 4, '0000-00-00', '', ''),
(12, 'YÃ¶netim Hizmet Bedeli', '4', 1, 0, '2020-04-08', 1, '200.00', '80.00', '120.00', 0, 1, 4, '0000-00-00', '', ''),
(13, 'Merdiven Temizlik', '4', 1, 0, '2020-03-08', 1, '3455.00', '3332.00', '123.00', 0, 1, 4, '0000-00-00', '', ''),
(14, 'AsansÃ¶r BakÄ±m Ãœcreti', '4', 1, 0, '2020-04-08', 1, '450.00', '300.00', '150.00', 0, 1, 4, '0000-00-00', '', ''),
(15, 'AsansÃ¶r BakÄ±m Ãœcreti', '3', 1, 0, '2020-06-08', 1, '1000.00', '850.00', '150.00', 0, 1, 4, '0000-00-00', '', ''),
(16, 'Elektrik FaturasÄ±', '4', 0, 0, '2020-07-08', 1, '1500.00', '1350.00', '150.00', 0, 1, 4, '0000-00-00', '', ''),
(17, 'Merdiven Temizlik', '4', 0, 0, '2020-03-08', 1, '500.00', '360.00', '140.00', 0, 1, 4, '0000-00-00', '', ''),
(18, 'AsansÃ¶r BakÄ±m Ãœcreti', '3', 0, 0, '2020-04-08', 4, '500.00', '150.00', '350.00', 0, 1, 4, '0000-00-00', '', ''),
(19, 'YÃ¶netim Hizmet Bedeli', '4', 1, 0, '2020-07-08', 1, '1700.00', '1500.00', '200.00', 0, 1, 4, '0000-00-00', '', ''),
(20, 'Merdiven Temizlik', '4', 1, 0, '2020-07-08', 1, '2000.00', '1800.00', '200.00', 0, 1, 4, '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_bagimsizbolum`
--

CREATE TABLE `tb_bagimsizbolum` (
  `id` int(11) NOT NULL,
  `cinsi` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kapino` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `gayrimenkulid` int(11) DEFAULT NULL,
  `pay` float DEFAULT NULL,
  `kiraciad` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kiracisoyad` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kiracitelno` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kiracitcno` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kiraciemail` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tapusahibiad` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tapusahibisoyad` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tapusahibitelno` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tapusahibitcno` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tapusahibiemail` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tapusahibivekiliad` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tapusahibivekilisoyad` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kiracidurumu` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tb_bagimsizbolum`
--

INSERT INTO `tb_bagimsizbolum` (`id`, `cinsi`, `kapino`, `gayrimenkulid`, `pay`, `kiraciad`, `kiracisoyad`, `kiracitelno`, `kiracitcno`, `kiraciemail`, `tapusahibiad`, `tapusahibisoyad`, `tapusahibitelno`, `tapusahibitcno`, `tapusahibiemail`, `tapusahibivekiliad`, `tapusahibivekilisoyad`, `kiracidurumu`) VALUES
(2, 'mesken', '2', 1, 0.21, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', 'YÃ¼sra ', 'Dede', '34543234532', '43396888470', 'diyaraydin33@gmail.com', 'Emin', 'AydÄ±n', 0),
(3, 'mesken', '3', 1, 0.03, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', 'Halime', 'Sansur', '05394490565', '43396888470', 'diyaraydin33@gmail.com', 'Senim', 'Dede', 0),
(4, 'mesken', '4', 1, 0.1, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', 'mehmet', 'aydÄ±n', '05394490565', '43531883926', 'diyaraydin33@gmail.com', 'Halime', 'AydÄ±n', 0),
(5, 'mesken', '5', 1, 0.07, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', 'YÃ¼sra ', 'Dede', '05394490565', '55522393874', 'diyaraydin33@gmail.com', 'Senim', 'AydÄ±n', 0),
(6, 'mesken', '6', 1, 0.5, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', 'Jelya', 'AydÄ±n', '05394490565', '51355020168', 'diyaraydin33@gmail.com', 'Halime', 'Dede', 0),
(7, 'mesken', '1', 1, 0.09, 'batuhan', 'bartÄ±n', '05394494949', '43387888666', 'bbartin33@gmail.com', 'diyar', 'aydÄ±n', '05394490565', '43369889336', 'diyaraydin33@gmail.com', 'Diyar', 'Dede', 1),
(8, 'mesken', '1', 2, 0.1, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '', '', '', '', 0),
(9, 'mesken', '2', 2, 0.1, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '', '', '', '', 0),
(10, 'mesken', '3', 2, 0.1, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '', '', '', '', 0),
(11, 'mesken', '4', 2, 0.2, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '', '', '', '', 0),
(12, 'mesken', '5', 2, 0.2, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '', '', '', '', 0),
(13, 'mesken', '6', 2, 0.3, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '', '', '', '', 0),
(14, 'isyeri', '1', 3, 0.5, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '1234567', '', '', '', 0),
(15, 'mesken', '2', 3, 0.125, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '123456', '', '', '', 0),
(16, 'mesken', '3', 3, 0.125, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '123456', '', '', '', 0),
(17, 'mesken', '4', 3, 0.125, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '12345', '', '', '', 0),
(18, 'mesken', '5', 3, 0.125, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '123456', '', '', '', 0),
(19, 'mesken', '1', 4, 1, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', 'diyar', 'aydÄ±n', '05394490565', '43369889336', 'diyaraydin33@gmail.com', '', '', 0),
(20, 'mesken', '2', 4, 1, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '', '', '', '', 0),
(21, 'mesken', '3', 4, 2, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '', '', '', '', 0),
(22, 'mesken', '4', 4, 2, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '', '', '', '', 0),
(23, 'mesken', '5', 4, 1, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '', '', '', '', 0),
(27, 'mesken', '1', 5, 1, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', 'DÄ°YAR', 'AYDIN', '05394490565', '43369889336', 'diyaraydin33@gmail.com', '', '', 0),
(28, 'mesken', '2', 5, 1.5, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '', '', '', '', 0),
(29, 'mesken', '3', 5, 2, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '', '', '', '', 0),
(32, 'mesken', '4', 5, 0.5, 'YOK', 'YOK', 'YOK', 'YOK', 'YOK', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_bagimsizbolum_borcu`
--

CREATE TABLE `tb_bagimsizbolum_borcu` (
  `id` int(11) NOT NULL,
  `gid` int(11) DEFAULT NULL,
  `bbid` int(11) DEFAULT NULL,
  `muaf` tinyint(1) DEFAULT NULL,
  `tahsilatdurumu` tinyint(1) DEFAULT NULL,
  `tutar` decimal(20,2) DEFAULT NULL,
  `odemetarihi` date DEFAULT NULL,
  `taksit_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tb_bagimsizbolum_borcu`
--

INSERT INTO `tb_bagimsizbolum_borcu` (`id`, `gid`, `bbid`, `muaf`, `tahsilatdurumu`, `tutar`, `odemetarihi`, `taksit_id`) VALUES
(1, 1, 19, 0, 0, '90.00', NULL, 1),
(2, 1, 20, 0, 0, '90.00', NULL, 1),
(3, 1, 21, 0, 0, '90.00', NULL, 1),
(4, 1, 22, 0, 0, '90.00', NULL, 1),
(5, 1, 23, 0, 0, '90.00', NULL, 1),
(6, 2, 19, 0, 0, '90.00', NULL, 2),
(7, 2, 20, 0, 0, '90.00', NULL, 2),
(8, 2, 21, 0, 0, '90.00', NULL, 2),
(9, 2, 22, 0, 0, '90.00', NULL, 2),
(10, 2, 23, 0, 0, '90.00', NULL, 2),
(11, 3, 19, 0, 0, '56.00', NULL, 3),
(12, 3, 20, 0, 0, '56.00', NULL, 3),
(13, 3, 21, 0, 0, '56.00', NULL, 3),
(14, 3, 22, 0, 0, '56.00', NULL, 3),
(15, 3, 23, 0, 0, '56.00', NULL, 3),
(16, 3, 19, 0, 0, '60.00', NULL, 4),
(17, 3, 20, 0, 0, '60.00', NULL, 4),
(18, 3, 21, 0, 0, '60.00', NULL, 4),
(19, 3, 22, 0, 0, '60.00', NULL, 4),
(20, 3, 23, 0, 0, '60.00', NULL, 4),
(21, 4, 19, 0, 0, '100.00', NULL, 5),
(22, 4, 20, 0, 0, '100.00', NULL, 5),
(23, 4, 21, 0, 0, '200.00', NULL, 5),
(24, 4, 22, 0, 0, '200.00', NULL, 5),
(25, 4, 23, 0, 0, '100.00', NULL, 5),
(26, 5, 19, 0, 0, '108.00', NULL, 6),
(27, 5, 20, 0, 0, '108.00', NULL, 6),
(28, 5, 21, 0, 0, '108.00', NULL, 6),
(29, 5, 22, 0, 0, '108.00', NULL, 6),
(30, 5, 23, 0, 0, '108.00', NULL, 6),
(31, 6, 19, 0, 0, '71.43', NULL, 7),
(32, 6, 20, 0, 0, '71.43', NULL, 7),
(33, 6, 21, 0, 0, '142.86', NULL, 7),
(34, 6, 22, 0, 0, '142.86', NULL, 7),
(35, 6, 23, 0, 0, '71.43', NULL, 7),
(36, 6, 19, 0, 0, '71.43', NULL, 8),
(37, 6, 20, 0, 0, '71.43', NULL, 8),
(38, 6, 21, 0, 0, '142.86', NULL, 8),
(39, 6, 22, 0, 0, '142.86', NULL, 8),
(40, 6, 23, 0, 0, '71.43', NULL, 8),
(41, 6, 19, 0, 0, '85.71', NULL, 9),
(42, 6, 20, 0, 0, '85.71', NULL, 9),
(43, 6, 21, 0, 0, '171.43', NULL, 9),
(44, 6, 22, 0, 0, '171.43', NULL, 9),
(45, 6, 23, 0, 0, '85.71', NULL, 9),
(46, 7, 20, 0, 0, '33.50', NULL, 10),
(47, 7, 21, 0, 0, '67.00', NULL, 10),
(48, 7, 22, 0, 0, '67.00', NULL, 10),
(49, 7, 23, 0, 0, '33.50', NULL, 10),
(50, 7, 19, 1, 0, '0.00', NULL, 10),
(51, 8, 19, 0, 0, '60.00', NULL, 11),
(52, 8, 20, 0, 0, '60.00', NULL, 11),
(53, 8, 21, 0, 0, '60.00', NULL, 11),
(54, 8, 22, 0, 0, '60.00', NULL, 11),
(55, 8, 23, 0, 0, '60.00', NULL, 11),
(56, 8, 19, 0, 0, '100.00', NULL, 12),
(57, 8, 20, 0, 0, '100.00', NULL, 12),
(58, 8, 21, 0, 0, '100.00', NULL, 12),
(59, 8, 22, 0, 0, '100.00', NULL, 12),
(60, 8, 23, 0, 0, '100.00', NULL, 12),
(61, 8, 19, 0, 0, '40.00', NULL, 13),
(62, 8, 20, 0, 0, '40.00', NULL, 13),
(63, 8, 21, 0, 0, '40.00', NULL, 13),
(64, 8, 22, 0, 0, '40.00', NULL, 13),
(65, 8, 23, 0, 0, '40.00', NULL, 13),
(66, 8, 19, 0, 0, '200.00', NULL, 14),
(67, 8, 20, 0, 0, '200.00', NULL, 14),
(68, 8, 21, 0, 0, '200.00', NULL, 14),
(69, 8, 22, 0, 0, '200.00', NULL, 14),
(70, 8, 23, 0, 0, '200.00', NULL, 14),
(71, 9, 19, 0, 0, '100.00', NULL, 15),
(72, 9, 20, 0, 0, '100.00', NULL, 15),
(73, 9, 21, 0, 0, '100.00', NULL, 15),
(74, 9, 22, 0, 0, '100.00', NULL, 15),
(75, 9, 23, 0, 0, '100.00', NULL, 15),
(76, 10, 19, 0, 0, '100.00', NULL, 16),
(77, 10, 20, 0, 0, '100.00', NULL, 16),
(78, 10, 21, 0, 0, '100.00', NULL, 16),
(79, 10, 22, 0, 0, '100.00', NULL, 16),
(80, 10, 23, 0, 0, '100.00', NULL, 16),
(81, 11, 19, 0, 0, '300.00', NULL, 17),
(82, 11, 20, 0, 0, '300.00', NULL, 17),
(83, 11, 21, 0, 0, '300.00', NULL, 17),
(84, 11, 22, 0, 0, '300.00', NULL, 17),
(85, 11, 23, 0, 0, '300.00', NULL, 17),
(86, 12, 19, 1, 0, '40.00', NULL, 18),
(87, 12, 20, 0, 0, '40.00', NULL, 18),
(88, 12, 21, 0, 0, '40.00', NULL, 18),
(89, 12, 22, 0, 0, '40.00', NULL, 18),
(90, 12, 23, 0, 0, '40.00', NULL, 18),
(91, 13, 19, 0, 0, '691.00', NULL, 19),
(92, 13, 20, 0, 0, '691.00', NULL, 19),
(93, 13, 21, 0, 0, '691.00', NULL, 19),
(94, 13, 22, 0, 0, '691.00', NULL, 19),
(95, 13, 23, 0, 0, '691.00', NULL, 19),
(96, 14, 19, 0, 0, '90.00', NULL, 20),
(97, 14, 20, 0, 0, '90.00', NULL, 20),
(98, 14, 21, 0, 0, '90.00', NULL, 20),
(99, 14, 22, 1, 0, '90.00', NULL, 20),
(100, 14, 23, 0, 0, '90.00', NULL, 20),
(101, 15, 19, 0, 0, '200.00', NULL, 21),
(102, 15, 20, 0, 0, '200.00', NULL, 21),
(103, 15, 21, 0, 0, '200.00', NULL, 21),
(104, 15, 22, 0, 0, '200.00', NULL, 21),
(105, 15, 23, 0, 0, '200.00', NULL, 21),
(106, 16, 19, 0, 0, '250.00', NULL, 22),
(107, 16, 21, 0, 0, '500.00', NULL, 22),
(108, 16, 22, 0, 0, '500.00', NULL, 22),
(109, 16, 23, 0, 0, '250.00', NULL, 22),
(110, 16, 20, 1, 0, '0.00', NULL, 22),
(111, 17, 19, 0, 0, '71.43', NULL, 23),
(112, 17, 20, 0, 0, '71.43', NULL, 23),
(113, 17, 21, 0, 0, '142.86', NULL, 23),
(114, 17, 22, 0, 0, '142.86', NULL, 23),
(115, 17, 23, 0, 0, '71.43', NULL, 23),
(116, 18, 19, 0, 0, '21.43', NULL, 24),
(117, 18, 20, 0, 0, '21.43', NULL, 24),
(118, 18, 21, 0, 0, '42.86', NULL, 24),
(119, 18, 22, 0, 0, '42.86', NULL, 24),
(120, 18, 23, 0, 0, '21.43', NULL, 24),
(121, 18, 19, 0, 0, '21.43', NULL, 25),
(122, 18, 20, 0, 0, '21.43', NULL, 25),
(123, 18, 21, 0, 0, '42.86', NULL, 25),
(124, 18, 22, 0, 0, '42.86', NULL, 25),
(125, 18, 23, 0, 0, '21.43', NULL, 25),
(126, 18, 19, 0, 0, '14.29', NULL, 26),
(127, 18, 20, 0, 0, '14.29', NULL, 26),
(128, 18, 21, 0, 0, '28.57', NULL, 26),
(129, 18, 22, 0, 0, '28.57', NULL, 26),
(130, 18, 23, 0, 0, '14.29', NULL, 26),
(131, 18, 19, 0, 0, '14.29', NULL, 27),
(132, 18, 20, 0, 0, '14.29', NULL, 27),
(133, 18, 21, 0, 0, '28.57', NULL, 27),
(134, 18, 22, 0, 0, '28.57', NULL, 27),
(135, 18, 23, 0, 0, '14.29', NULL, 27),
(136, 20, 19, 0, 0, '500.00', NULL, 29),
(137, 20, 20, 0, 0, '500.00', NULL, 29),
(138, 20, 21, 0, 0, '500.00', NULL, 29),
(139, 20, 22, 0, 0, '500.00', NULL, 29),
(140, 20, 23, 1, 0, '0.00', NULL, 29);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_firma`
--

CREATE TABLE `tb_firma` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telno` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `iban_no` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `subekodu` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hesapadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tb_firma`
--

INSERT INTO `tb_firma` (`id`, `ad`, `telno`, `email`, `adres`, `iban_no`, `subekodu`, `hesapadi`) VALUES
(1, 'Enerji SA', '', '', '', '', '', ''),
(2, 'dinceryonetim', '', '', '', '', '', ''),
(3, 'BaÅŸak AsansÃ¶r', '', '', '', '', '', ''),
(4, 'Diyar YalÄ±tÄ±m', '05394490565', 'diyaraydin33@gmail.com', 'meydan mahallersi', '03456789', '34567890', '456789');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_gideraciklama`
--

CREATE TABLE `tb_gideraciklama` (
  `id` int(11) NOT NULL,
  `aciklama` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tb_gideraciklama`
--

INSERT INTO `tb_gideraciklama` (`id`, `aciklama`) VALUES
(1, '(Haftada 1 kez YazÄ±lÄ±r)'),
(3, '(Ayda 1 Kez YazÄ±lÄ±r)'),
(4, '(Tahmini Olarak YazÄ±lÄ±r)');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_gidercinsi`
--

CREATE TABLE `tb_gidercinsi` (
  `id` int(11) NOT NULL,
  `aciklama` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tb_gidercinsi`
--

INSERT INTO `tb_gidercinsi` (`id`, `aciklama`) VALUES
(1, 'Elektrik FaturasÄ±'),
(2, 'AsansÃ¶r BakÄ±m Ãœcreti'),
(3, 'YÃ¶netim Hizmet Bedeli'),
(4, 'Merdiven Temizlik');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_isletmedefteri`
--

CREATE TABLE `tb_isletmedefteri` (
  `id` int(11) NOT NULL,
  `gmid` int(11) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `tip` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_isletmedefteri_bilgileri`
--

CREATE TABLE `tb_isletmedefteri_bilgileri` (
  `id` int(11) NOT NULL,
  `isletmedefteri_id` int(11) DEFAULT NULL,
  `belgetarihi` date DEFAULT NULL,
  `belge_serino` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fiyat` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_kullanicilar`
--

CREATE TABLE `tb_kullanicilar` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullaniciadi` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sifre` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yetki` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_odemeyer`
--

CREATE TABLE `tb_odemeyer` (
  `id` int(11) NOT NULL,
  `odeme_yer_id` int(11) NOT NULL,
  `odeme_tutar` decimal(20,2) NOT NULL,
  `islem_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `odenen_tarih` date DEFAULT NULL,
  `odenen_tutar` decimal(20,2) NOT NULL,
  `odeme_durumu` int(11) NOT NULL,
  `gider_id` int(11) NOT NULL,
  `anagayrimenkul_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tb_odemeyer`
--

INSERT INTO `tb_odemeyer` (`id`, `odeme_yer_id`, `odeme_tutar`, `islem_tarih`, `odenen_tarih`, `odenen_tutar`, `odeme_durumu`, `gider_id`, `anagayrimenkul_id`) VALUES
(1, 1, '100.00', '2020-01-26 18:44:09', NULL, '0.00', 0, 1, 4),
(2, 2, '100.00', '2020-01-26 18:45:07', NULL, '0.00', 0, 2, 4),
(3, 1, '120.00', '2020-01-26 18:45:44', NULL, '0.00', 0, 3, 4),
(4, 2, '100.00', '2020-01-26 18:48:14', NULL, '0.00', 0, 4, 4),
(5, 1, '140.00', '2020-01-26 18:50:21', NULL, '0.00', 0, 5, 4),
(6, 1, '150.00', '2020-01-26 18:54:04', NULL, '0.00', 0, 6, 4),
(7, 2, '200.00', '2020-01-27 11:28:45', NULL, '0.00', 0, 7, 4),
(8, 3, '2000.00', '2020-01-27 11:31:11', NULL, '0.00', 0, 8, 4),
(9, 2, '150.00', '2020-01-28 08:11:04', NULL, '0.00', 0, 9, 4),
(10, 4, '100.00', '2020-01-28 08:12:08', NULL, '0.00', 0, 10, 4),
(11, 3, '150.00', '2020-01-28 08:12:54', NULL, '0.00', 0, 11, 4),
(12, 3, '120.00', '2020-01-28 08:14:30', NULL, '0.00', 0, 12, 4),
(13, 4, '123.00', '2020-01-28 08:15:25', NULL, '0.00', 0, 13, 4),
(14, 4, '150.00', '2020-01-28 08:18:07', NULL, '0.00', 0, 14, 4),
(15, 4, '150.00', '2020-01-28 08:19:06', NULL, '0.00', 0, 15, 4),
(16, 1, '150.00', '2020-01-29 08:21:59', NULL, '0.00', 0, 16, 4),
(17, 1, '140.00', '2020-01-29 08:24:18', NULL, '0.00', 0, 17, 4),
(18, 3, '350.00', '2020-01-30 09:17:53', NULL, '0.00', 0, 18, 4),
(19, 1, '200.00', '2020-01-30 11:36:06', NULL, '0.00', 0, 19, 4),
(20, 1, '200.00', '2020-01-30 11:39:53', NULL, '0.00', 0, 20, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_sabit_gider`
--

CREATE TABLE `tb_sabit_gider` (
  `id` int(11) NOT NULL,
  `gider_cinsi` varchar(3000) COLLATE utf8_turkish_ci NOT NULL,
  `gm_id` int(11) NOT NULL,
  `yapilacak_is_ucreti` decimal(20,2) NOT NULL,
  `dagitim_parametresi` int(11) NOT NULL,
  `dagitim_yeri` int(11) NOT NULL,
  `muaf_bolum` varchar(3000) COLLATE utf8_turkish_ci NOT NULL,
  `muaf_olmayan_bolum` varchar(3000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tb_sabit_gider`
--

INSERT INTO `tb_sabit_gider` (`id`, `gider_cinsi`, `gm_id`, `yapilacak_is_ucreti`, `dagitim_parametresi`, `dagitim_yeri`, `muaf_bolum`, `muaf_olmayan_bolum`) VALUES
(1, 'Elektrik FaturasÄ±', 5, '100.00', 1, 1, '', '-27-28-29-32'),
(4, 'YÃ¶netim Hizmet Bedeli', 4, '300.00', 0, 0, '', '-19-20-21-22-23'),
(5, 'AsansÃ¶r BakÄ±m Ãœcreti', 4, '500.00', 0, 1, '-19-20', '-21-22-23'),
(6, 'Merdiven Temizlik', 4, '600.00', 1, 0, '', '-19-20-21-22-23'),
(7, 'Elektrik FaturasÄ±', 4, '320.00', 1, 1, '-19', '-20-21-22-23');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_tahmini_yazilan`
--

CREATE TABLE `tb_tahmini_yazilan` (
  `id` int(11) NOT NULL,
  `tahmini_tutar` decimal(20,2) NOT NULL,
  `net_tutar` decimal(20,2) DEFAULT NULL,
  `gider_ayi` date NOT NULL,
  `yansitilacak_ay` date NOT NULL,
  `apt_id` int(11) NOT NULL,
  `gider_id` int(11) NOT NULL,
  `gider_muaf_carpan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tb_tahmini_yazilan`
--

INSERT INTO `tb_tahmini_yazilan` (`id`, `tahmini_tutar`, `net_tutar`, `gider_ayi`, `yansitilacak_ay`, `apt_id`, `gider_id`, `gider_muaf_carpan`) VALUES
(1, '300.00', '200.00', '2020-01-08', '2020-02-08', 4, 5, 0),
(2, '300.00', NULL, '2020-01-08', '2020-02-08', 4, 5, 0),
(3, '300.00', '350.00', '2020-05-08', '2020-02-08', 4, 5, 0),
(4, '300.00', NULL, '2020-09-08', '2020-10-08', 4, 5, 0),
(5, '200.00', '150.00', '2020-04-08', '2020-05-08', 4, 12, 0),
(6, '3455.00', NULL, '2020-03-08', '2020-04-08', 4, 13, 0),
(7, '450.00', NULL, '2020-04-08', '2020-05-08', 4, 14, 0),
(8, '1500.00', '2000.00', '2020-07-08', '2020-08-08', 4, 16, 0.166667),
(9, '500.00', NULL, '2020-03-08', '2020-04-08', 4, 17, 0),
(10, '2000.00', '2500.00', '2020-07-08', '2020-08-08', 4, 20, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_tahmini_yazilan_borcu`
--

CREATE TABLE `tb_tahmini_yazilan_borcu` (
  `id` int(11) NOT NULL,
  `bb_id` int(11) NOT NULL,
  `borc_tutar` decimal(20,2) NOT NULL,
  `muaf` tinyint(4) NOT NULL,
  `gider_id` int(11) NOT NULL,
  `tahmini_yazilan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tb_tahmini_yazilan_borcu`
--

INSERT INTO `tb_tahmini_yazilan_borcu` (`id`, `bb_id`, `borc_tutar`, `muaf`, `gider_id`, `tahmini_yazilan_id`) VALUES
(1, 19, '83.33', 0, 16, 8),
(2, 21, '166.67', 0, 16, 8),
(3, 22, '166.67', 0, 16, 8),
(4, 23, '83.33', 0, 16, 8),
(5, 20, '0.00', 1, 16, 8),
(6, 19, '100.00', 0, 20, 10),
(7, 20, '100.00', 0, 20, 10),
(8, 21, '100.00', 0, 20, 10),
(9, 22, '100.00', 0, 20, 10),
(10, 23, '0.00', 1, 20, 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_taksit`
--

CREATE TABLE `tb_taksit` (
  `id` int(11) NOT NULL,
  `taksit_tutar` decimal(20,2) NOT NULL,
  `gider_id` int(11) NOT NULL,
  `taksit_ay` date NOT NULL,
  `taksit_num` int(11) NOT NULL,
  `apartman_id` int(11) NOT NULL,
  `odenen_tutar` decimal(20,2) NOT NULL,
  `taksit_odeme_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tb_taksit`
--

INSERT INTO `tb_taksit` (`id`, `taksit_tutar`, `gider_id`, `taksit_ay`, `taksit_num`, `apartman_id`, `odenen_tutar`, `taksit_odeme_durum`) VALUES
(1, '450.00', 1, '2020-01-08', 1, 4, '0.00', 0),
(2, '450.00', 2, '2020-02-08', 1, 4, '0.00', 0),
(3, '280.00', 3, '2020-01-08', 1, 4, '0.00', 0),
(4, '300.00', 3, '2020-02-08', 2, 4, '0.00', 0),
(5, '700.00', 4, '2020-02-08', 1, 4, '0.00', 0),
(6, '540.00', 5, '2020-02-08', 1, 4, '0.00', 0),
(7, '500.00', 6, '2020-01-08', 1, 4, '0.00', 0),
(8, '500.00', 6, '2020-02-08', 2, 4, '0.00', 0),
(9, '600.00', 6, '2020-03-08', 3, 4, '0.00', 0),
(10, '201.00', 7, '2020-02-08', 1, 4, '0.00', 0),
(11, '300.00', 8, '2020-02-08', 1, 4, '0.00', 0),
(12, '500.00', 8, '2020-03-08', 2, 4, '0.00', 0),
(13, '200.00', 8, '2020-04-08', 3, 4, '0.00', 0),
(14, '1000.00', 8, '2020-05-08', 4, 4, '0.00', 0),
(15, '500.00', 9, '2020-01-08', 1, 4, '0.00', 0),
(16, '500.00', 10, '2020-05-08', 1, 4, '0.00', 0),
(17, '1500.00', 11, '2020-09-08', 1, 4, '0.00', 0),
(18, '200.00', 12, '2020-04-08', 1, 4, '0.00', 0),
(19, '3455.00', 13, '2020-03-08', 1, 4, '0.00', 0),
(20, '450.00', 14, '2020-04-08', 1, 4, '0.00', 0),
(21, '1000.00', 15, '2020-06-08', 1, 4, '0.00', 0),
(22, '1500.00', 16, '2020-07-08', 1, 4, '0.00', 0),
(23, '500.00', 17, '2020-03-08', 1, 4, '0.00', 0),
(24, '150.00', 18, '2020-05-08', 1, 4, '0.00', 0),
(25, '150.00', 18, '2020-06-08', 2, 4, '0.00', 0),
(26, '100.00', 18, '2020-07-08', 3, 4, '0.00', 0),
(27, '100.00', 18, '2020-08-08', 4, 4, '0.00', 0),
(28, '1700.00', 19, '2020-07-08', 1, 4, '0.00', 0),
(29, '2000.00', 20, '2020-07-08', 1, 4, '0.00', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tb_anagayrimenkul`
--
ALTER TABLE `tb_anagayrimenkul`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tb_anagayrimenkul_giderler`
--
ALTER TABLE `tb_anagayrimenkul_giderler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_giderler_gayrimenkul` (`gayrimenkulid`);

--
-- Tablo için indeksler `tb_bagimsizbolum`
--
ALTER TABLE `tb_bagimsizbolum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bagimsizbolum_gayrimenkul` (`gayrimenkulid`);

--
-- Tablo için indeksler `tb_bagimsizbolum_borcu`
--
ALTER TABLE `tb_bagimsizbolum_borcu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tb_bagimsizbolumborcu_bagimsizbolum` (`bbid`),
  ADD KEY `fk_tb_bagimsizbolumborcu_anagayrimenkul_giderler` (`gid`);

--
-- Tablo için indeksler `tb_firma`
--
ALTER TABLE `tb_firma`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tb_gideraciklama`
--
ALTER TABLE `tb_gideraciklama`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tb_gidercinsi`
--
ALTER TABLE `tb_gidercinsi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tb_isletmedefteri`
--
ALTER TABLE `tb_isletmedefteri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_isletmedefteri_anagayrimenkul` (`gmid`);

--
-- Tablo için indeksler `tb_isletmedefteri_bilgileri`
--
ALTER TABLE `tb_isletmedefteri_bilgileri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_isletmedefteri_bilgileri_isletmedefteri` (`isletmedefteri_id`);

--
-- Tablo için indeksler `tb_kullanicilar`
--
ALTER TABLE `tb_kullanicilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullaniciadi` (`kullaniciadi`);

--
-- Tablo için indeksler `tb_odemeyer`
--
ALTER TABLE `tb_odemeyer`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tb_sabit_gider`
--
ALTER TABLE `tb_sabit_gider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tb_tahmini_yazilan`
--
ALTER TABLE `tb_tahmini_yazilan`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tb_tahmini_yazilan_borcu`
--
ALTER TABLE `tb_tahmini_yazilan_borcu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tb_taksit`
--
ALTER TABLE `tb_taksit`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tb_anagayrimenkul`
--
ALTER TABLE `tb_anagayrimenkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `tb_anagayrimenkul_giderler`
--
ALTER TABLE `tb_anagayrimenkul_giderler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `tb_bagimsizbolum`
--
ALTER TABLE `tb_bagimsizbolum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Tablo için AUTO_INCREMENT değeri `tb_bagimsizbolum_borcu`
--
ALTER TABLE `tb_bagimsizbolum_borcu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- Tablo için AUTO_INCREMENT değeri `tb_firma`
--
ALTER TABLE `tb_firma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `tb_gideraciklama`
--
ALTER TABLE `tb_gideraciklama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `tb_gidercinsi`
--
ALTER TABLE `tb_gidercinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `tb_isletmedefteri`
--
ALTER TABLE `tb_isletmedefteri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `tb_isletmedefteri_bilgileri`
--
ALTER TABLE `tb_isletmedefteri_bilgileri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `tb_kullanicilar`
--
ALTER TABLE `tb_kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `tb_odemeyer`
--
ALTER TABLE `tb_odemeyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `tb_sabit_gider`
--
ALTER TABLE `tb_sabit_gider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `tb_tahmini_yazilan`
--
ALTER TABLE `tb_tahmini_yazilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `tb_tahmini_yazilan_borcu`
--
ALTER TABLE `tb_tahmini_yazilan_borcu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `tb_taksit`
--
ALTER TABLE `tb_taksit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `tb_anagayrimenkul_giderler`
--
ALTER TABLE `tb_anagayrimenkul_giderler`
  ADD CONSTRAINT `fk_giderler_gayrimenkul` FOREIGN KEY (`gayrimenkulid`) REFERENCES `tb_anagayrimenkul` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `tb_bagimsizbolum`
--
ALTER TABLE `tb_bagimsizbolum`
  ADD CONSTRAINT `fk_bagimsizbolum_gayrimenkul` FOREIGN KEY (`gayrimenkulid`) REFERENCES `tb_anagayrimenkul` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `tb_bagimsizbolum_borcu`
--
ALTER TABLE `tb_bagimsizbolum_borcu`
  ADD CONSTRAINT `fk_tb_bagimsizbolumborcu_anagayrimenkul_giderler` FOREIGN KEY (`gid`) REFERENCES `tb_anagayrimenkul_giderler` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_tb_bagimsizbolumborcu_bagimsizbolum` FOREIGN KEY (`bbid`) REFERENCES `tb_bagimsizbolum` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `tb_isletmedefteri`
--
ALTER TABLE `tb_isletmedefteri`
  ADD CONSTRAINT `fk_isletmedefteri_anagayrimenkul` FOREIGN KEY (`gmid`) REFERENCES `tb_anagayrimenkul` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `tb_isletmedefteri_bilgileri`
--
ALTER TABLE `tb_isletmedefteri_bilgileri`
  ADD CONSTRAINT `fk_isletmedefteri_bilgileri_isletmedefteri` FOREIGN KEY (`isletmedefteri_id`) REFERENCES `tb_isletmedefteri` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
