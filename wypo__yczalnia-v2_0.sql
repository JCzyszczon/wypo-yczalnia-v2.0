-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 01:36 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wypożyczalnia-v2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `numer` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`, `email`, `numer`, `imie`, `nazwisko`) VALUES
(1, 'adam', 'qwerty', 'adam@gmail.com', 123456789, 'Adam', 'Adamowski'),
(2, 'marek', 'asdfg', 'marek@gmail.com', 111222333, 'Marek', 'Markowski'),
(3, 'anna', 'zxcvb', 'anna@gmail.com', 987654321, 'Anna', 'Annowska'),
(16, 'kuba1337', 'kuba1337', 'kuba122@gmail.com', 111222333, 'kuba', 'adamowski'),
(15, 'adrian', 'adrian1212', 'adrian@gmail.com', 123456789, 'adrian', 'adrianowski'),
(14, 'kuba121', 'kuba1212', 'kuba12@gmail.com', 123456789, 'kuba', 'kubowski'),
(17, 'kuba122', 'kuba1222', 'kuba123@gmail.com', 123123123, 'kuba', 'kubowski'),
(18, 'kuba12345', 'qwertyui', 'kuba1235@gmail.com', 213213123, 'kuba', 'kubowski'),
(19, 'kuba122465', 'qwertyui', 'kuba12564@gmail.com', 123213123, 'kuba', 'kubowski'),
(20, 'marek12', 'marek1212', 'marek12@gmail.com', 123456789, 'marek', 'markowski');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
