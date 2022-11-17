-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 15 May 2022, 17:10:30
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `web`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa_yazi`
--

DROP TABLE IF EXISTS `anasayfa_yazi`;
CREATE TABLE IF NOT EXISTS `anasayfa_yazi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(300) COLLATE utf16_turkish_ci NOT NULL,
  `baslik` varchar(200) COLLATE utf16_turkish_ci NOT NULL,
  `yazi` varchar(1000) COLLATE utf16_turkish_ci NOT NULL,
  `alt_yazi` varchar(200) COLLATE utf16_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `anasayfa_yazi`
--

INSERT INTO `anasayfa_yazi` (`id`, `foto`, `baslik`, `yazi`, `alt_yazi`) VALUES
(3, '.jpg', 'Başlık', 'FDASGHJGKFHDJSHGERSFDTGFHJFDMHZNGBF', 'STADSHFJGMÖ'),
(4, 'foto2.jpg', 'Başlık1', 'Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', ' sequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip'),
(5, 'foto2.jpg', 'Başlık1', 'Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in', ' sequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip'),
(6, 'web-1045994_1920.jpg', 'w', 'a<szdgxfhcjvkblşiişlkbjvhkcjhxg', 'Er<esztdxyfucylşişlkcjx');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

DROP TABLE IF EXISTS `ayar`;
CREATE TABLE IF NOT EXISTS `ayar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `header_renk` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `header_yazi_renk` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `footer_renk` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `footer_yazi_renk` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `bg_renk` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`id`, `logo`, `header_renk`, `header_yazi_renk`, `footer_renk`, `footer_yazi_renk`, `bg_renk`) VALUES
(1, 'Ege Fitness', '#343232', '#ffffff', '#0d1c15', '#ffffff', '#ffffff');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `footer_id` int(11) NOT NULL AUTO_INCREMENT,
  `footer_baslik` varchar(300) COLLATE utf16_turkish_ci NOT NULL,
  `footer_yazi` varchar(500) COLLATE utf16_turkish_ci NOT NULL,
  `footer_altyazi` varchar(500) COLLATE utf16_turkish_ci NOT NULL,
  PRIMARY KEY (`footer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `footer`
--

INSERT INTO `footer` (`footer_id`, `footer_baslik`, `footer_yazi`, `footer_altyazi`) VALUES
(1, 'Footer Baslik', 'footer yazı', 'footer altyazı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

DROP TABLE IF EXISTS `hakkimizda`;
CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL AUTO_INCREMENT,
  `hakkimizda_resim` varchar(256) COLLATE utf16_turkish_ci NOT NULL,
  `hakkimizda_baslik` varchar(256) COLLATE utf16_turkish_ci NOT NULL,
  `hakkimizda_yazi` varchar(500) COLLATE utf16_turkish_ci NOT NULL,
  PRIMARY KEY (`hakkimizda_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_resim`, `hakkimizda_baslik`, `hakkimizda_yazi`) VALUES
(1, 'code-1839406_640.jpg', 'hakkimizda baslik ', 'hakkimizda yazi pro sensey');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `adres` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `konum` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `mail_detay` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `telefon` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `telefon_detay` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `harita_link` varchar(1000) COLLATE utf16_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `baslik`, `adres`, `konum`, `email`, `mail_detay`, `telefon`, `telefon_detay`, `harita_link`) VALUES
(1, 'Bizimle İletişime Geçin', 'Adres:', 'Akyazı/Sakarya', 'Email:', 'fitnessSite@gmail.com', 'Telefon No:', '0547451321', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24412.219731866222!2d26.408726599999998!3d40.10824725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b1a82ca9b99cfd%3A0xf803b1ad12ea8904!2s%C3%87anakkale%20Onsekiz%20Mart%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1647424006295!5m2!1str!2str');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kartlar`
--

DROP TABLE IF EXISTS `kartlar`;
CREATE TABLE IF NOT EXISTS `kartlar` (
  `kart_id` int(11) NOT NULL AUTO_INCREMENT,
  `kart_resim` varchar(200) COLLATE utf16_turkish_ci NOT NULL,
  `kart_baslik` varchar(100) COLLATE utf16_turkish_ci NOT NULL,
  `kart_yazi` varchar(300) COLLATE utf16_turkish_ci NOT NULL,
  `kart_durum` tinyint(1) NOT NULL,
  PRIMARY KEY (`kart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `kartlar`
--

INSERT INTO `kartlar` (`kart_id`, `kart_resim`, `kart_baslik`, `kart_yazi`, `kart_durum`) VALUES
(1, 's/bea.jpg', 'Ayı resmi', 'deneme yazısı', 1),
(5, 's/beetle.jpg', 'deneme başlık', 'deneme yazısı', 1),
(6, 's/beetle.jpg', 'deneme başlık', 'deneme yazısı', 1),
(7, 's/cof.jpg', 'başlık 2 deneme', 'deneme yazısı', 1),
(9, 'unnamed.jpg', 'Başlıkkkkk', 'ne yazayımkmaaa', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kadii` char(50) NOT NULL,
  `parolaa` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `kadii`, `parolaa`) VALUES
(1, 'admin', '105a9a2d46f64e147097c986076d2164'),
(11, 'ali', '105a9a2d46f64e147097c986076d2164');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_ad` varchar(50) NOT NULL,
  `menu_link` varchar(300) NOT NULL,
  `menu_sira` int(11) NOT NULL,
  `menu_durum` tinyint(1) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ad`, `menu_link`, `menu_sira`, `menu_durum`) VALUES
(1, 'Anasayfa', 'index.php', 1, 1),
(2, 'Hakkımızda', 'hakkimizda.php', 2, 1),
(3, 'Hizmetler', 'hizmetler.php', 3, 1),
(4, 'Ekibimiz', 'ekibimiz.php', 4, 1),
(5, 'İletişim', 'iletisim.php', 6, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `simgeler`
--

DROP TABLE IF EXISTS `simgeler`;
CREATE TABLE IF NOT EXISTS `simgeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sosyal_medya_isim` varchar(50) COLLATE utf16_turkish_ci NOT NULL,
  `durum` tinyint(1) NOT NULL,
  `sira` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `simgeler`
--

INSERT INTO `simgeler` (`id`, `sosyal_medya_isim`, `durum`, `sira`) VALUES
(1, 'twitter', 1, 1),
(3, 'instagram', 1, 2),
(5, 'youtube', 1, 3),
(6, 'facebook', 1, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_resim` varchar(500) COLLATE utf16_turkish_ci NOT NULL,
  `slider_sira` int(11) NOT NULL,
  `slider_durum` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_resim`, `slider_sira`, `slider_durum`) VALUES
(22, '12.jpg', 6, 1),
(21, 'facebook-2170419_640.png', 5, 1),
(19, 'foto2.jpg', 1, 1),
(18, 'foto3.jpg', 4, 1),
(16, 'board-2893916_640.jpg', 2, 1),
(17, 'foto1.jpg', 3, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
