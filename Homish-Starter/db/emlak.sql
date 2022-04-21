-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Nis 2022, 09:50:23
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `emlak`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_team`
--

CREATE TABLE `about_team` (
  `id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `facebook` varchar(55) NOT NULL,
  `twitter` varchar(55) NOT NULL,
  `image` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `about_team`
--

INSERT INTO `about_team` (`id`, `name`, `facebook`, `twitter`, `image`) VALUES
(1, 'Mehmet', 'https://www.facebook.com/', 'https://www.twitter.com/', 'assets/images/team1.jpg'),
(2, 'Ali', 'https://www.facebook.com/', 'https://www.twitter.com/', 'assets/images/team2.jpg'),
(3, 'Smith roy', 'https://www.facebook.com/', 'https://www.twitter.com/', 'assets/images/team3.jpg'),
(4, 'Hamza', 'https://www.facebook.com/', 'https://www.twitter.com/', 'assets/images/team4.jpg'),
(5, 'Mike', 'https://www.facebook.com/', 'https://www.twitter.com/', 'assets/images/team5.jpg'),
(6, 'Dwayne', 'https://www.facebook.com/', 'https://www.twitter.com/', 'assets/images/team6.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `note`, `date`) VALUES
(2, 'muhammed atilla akdemir', '0500 000 00 00', 'ma@ma.com', 'merhaba', '2022-04-21 03:16:31'),
(3, 'mustafa doğan', '0500 000 00 00', 'md@md.com', 'hello', '2022-04-21 03:17:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `index_about`
--

CREATE TABLE `index_about` (
  `ust_baslik` varchar(25) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `aciklama` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `index_about`
--

INSERT INTO `index_about` (`ust_baslik`, `baslik`, `aciklama`, `image`) VALUES
('Hakkımızda', 'Bazı satıcılarımız tarafından kapatılan son fırsatlar', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio               voluptatem tenetur consequatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium              voluptate rem ullam dolore nisi ptatibus esse quasi.Integer sit amet mattis quam.', 'assets/images/ab1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `adres` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `hours` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `office`
--

INSERT INTO `office` (`id`, `city`, `adres`, `email`, `phone`, `hours`, `date`) VALUES
(1, 'Istanbul Office', 'Istanbul, Beşiktaş', 'muhammedatilla@email.com', '0500 000 00 00', 'Pazartesi-cuma: 08.00 – 17.00', '2022-04-21 03:26:49'),
(2, 'Newyork Office', 'Newyork, NY-90814 Hill Station 3rd Street', 'ma@email.com', '0500 000 00 00', 'Pazartesi-cuma: 08.00 – 17.00', '2022-04-21 03:35:30'),
(3, 'London Office', 'London, LY-90814 Hill Station 2nd Street', 'mustafadogan@email.com', '0500 000 00 00', 'Pazartesi-cuma: 08.00 – 17.00', '2022-04-21 03:35:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `price`
--

CREATE TABLE `price` (
  `id` int(1) NOT NULL,
  `paket` varchar(25) NOT NULL,
  `fiyat` varchar(25) NOT NULL,
  `aciklama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `price`
--

INSERT INTO `price` (`id`, `paket`, `fiyat`, `aciklama`) VALUES
(1, 'Premium', '$50/aylık', 'Integer blandit eget dui in tempor lorem. gravida tortor at eros sed et.'),
(2, 'Plus', '$100/aylık', 'Integer blandit eget dui in tempor lorem. gravida tortor at eros sed et.'),
(3, 'Gold', '$150/aylık', 'Integer blandit eget dui in tempor lorem. gravida tortor at eros sed et.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `id` int(2) NOT NULL,
  `title` varchar(55) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(25) NOT NULL,
  `aciklama` text NOT NULL,
  `banyo` int(2) NOT NULL,
  `yatak` int(2) NOT NULL,
  `sq` varchar(25) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `price`, `aciklama`, `banyo`, `yatak`, `sq`, `date`) VALUES
(1, 'Kiralık Mülkler', 'assets/images/g3.jpg', '$290/aylık', 'Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.', 3, 3, '1000 sq ft', '2022-04-21 07:44:32'),
(2, 'Satılık Emlak', 'assets/images/g1.jpg', '$240/aylık', 'Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.', 3, 4, '1200 sq ft', '2022-04-21 07:44:00'),
(3, 'Satılık Ev', 'assets/images/g2.jpg', '$280/aylık', 'Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.', 2, 3, '1100 sq ft', '2022-04-21 07:44:23'),
(4, 'Kiralık Mülkler', 'assets/images/g4.jpg', '$340/aylık', 'Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.', 3, 2, '1300 sq ft', '2022-04-21 07:41:08'),
(5, 'Satılık Mülkler', 'assets/images/g5.jpg', '$290/month', 'Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.', 5, 3, '1600 sq ft', '2022-04-21 07:44:46'),
(6, 'Satılık Ev', 'assets/images/g6.jpg', '$ 340/aylık', 'Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris. Vivamus id tempor nisl.', 4, 2, '1250 sq ft', '2022-04-21 07:43:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `ust_baslik` varchar(255) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `sira` int(2) NOT NULL,
  `alt_baslik` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `ust_baslik`, `baslik`, `sira`, `alt_baslik`, `date`) VALUES
(1, 'Daha iyi yaşam', 'Daha iyi bir yaşam için progresif alanlar', 1, 'Gayrimenkul satın almanın daha iyi yolu.', '2022-04-21 04:33:37'),
(2, 'Rüyalardaki Evi', 'Herkes Ev Fırsatını Hak Eder', 2, 'İstediğiniz Tek Emlakçı.', '2022-04-21 04:28:05'),
(3, '\r\nDaha iyi yaşam', 'Daha iyi bir yaşam için progresif alanlar', 3, 'Hak Ettiğiniz Hizmet. Güvendiğiniz İnsanlar.', '2022-04-21 04:29:33'),
(4, 'Düş Evi', 'Herkes Ev Fırsatını Hak Eder', 4, 'Gayrimenkul satın almanın daha iyi yolu.', '2022-04-21 04:29:33');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `whatwedo`
--

CREATE TABLE `whatwedo` (
  `id` int(2) NOT NULL,
  `baslik` varchar(25) NOT NULL,
  `fiyat` varchar(25) NOT NULL,
  `aciklama` text NOT NULL,
  `yatak` int(2) NOT NULL,
  `banyo` int(2) NOT NULL,
  `sq` varchar(15) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `whatwedo`
--

INSERT INTO `whatwedo` (`id`, `baslik`, `fiyat`, `aciklama`, `yatak`, `banyo`, `sq`, `image`) VALUES
(1, 'Satılık emlaklar', '$240/aylık', '3 yatak odası ve 3 banyosu bulunan, 1200 sq ft alana sahip muhteşem bi ev', 3, 3, '1200 sq ft', 'assets/images/g1.jpg'),
(2, 'Satılık ev', '$380/aylık', '3 yatak odası ve 4 banyosu bulunan, 1300 sq ft alana sahip muhteşem bi ev', 3, 4, '1300 sq ft', 'assets/images/g2.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about_team`
--
ALTER TABLE `about_team`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `whatwedo`
--
ALTER TABLE `whatwedo`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about_team`
--
ALTER TABLE `about_team`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `price`
--
ALTER TABLE `price`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `whatwedo`
--
ALTER TABLE `whatwedo`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
