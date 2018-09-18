-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 18, 2018 at 08:45 PM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `zylesdebesy`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(6) NOT NULL,
  `category` varchar(30) NOT NULL,
  `title` varchar(60) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category`, `title`, `foto`, `price`) VALUES
(1, 'rings', 'Pink Pom', '\"images/Prekes/rings/10.jpg\" alt=\"Card image cap\"', 10),
(2, 'rings', 'Green Pom', '\"images/Prekes/rings/11.jpg\" alt=\"Card image cap\"', 10),
(3, 'rings', 'Black Pom', '\"images/Prekes/rings/12.jpg\" alt=\"Card image cap\"', 10),
(4, 'bracelets', 'Black trio set', '\"images/Prekes/bracelets/24.jpg\" alt=\"Card image cap\"', 20),
(5, 'bracelets', 'Green trio set', '\"images/Prekes/bracelets/23.jpg\" alt=\"Card image cap\"', 20),
(6, 'bracelets', 'Black fringe', '\"images/Prekes/bracelets/40.jpg\" alt=\"Card image cap\"', 15),
(7, 'bracelets', 'Green fringe', '\"images/Prekes/bracelets/39.jpg\" alt=\"Card image cap\"', 15),
(8, 'bracelets', 'Matic fringe', '\"images/Prekes/bracelets/36.jpg\" alt=\"Card image cap\"', 15),
(9, 'bracelets', 'Fatima', '\"images/Prekes/bracelets/34.jpg\" alt=\"Card image cap\"', 18),
(10, 'bracelets', 'Scull in colors', '\"images/Prekes/bracelets/32.jpg\" alt=\"Card image cap\"', 18),
(11, 'bracelets', 'Matic bubble', '\"images/Prekes/bracelets/30.jpg\" alt=\"Card image cap\"', 18),
(12, 'bracelets', 'Matic scull', '\"images/Prekes/bracelets/32.jpg\" alt=\"Card image cap\"', 18),
(13, 'bracelets', 'Simple one', '\"images/Prekes/bracelets/26.jpg\" alt=\"Card image cap\"', 10),
(14, 'keychains', 'Ginger pom-chain', '\"images/Prekes/keychains/19.jpg\" alt=\"Card image cap\"', 10),
(15, 'keychains', 'Hazel Pom-chain', '\"images/Prekes/keychains/21.jpg\" alt=\"Card image cap\"', 10),
(16, 'earings', 'Raspberry Pom-Pom', '\"images/Prekes/earings/16.jpg\" alt=\"Card image cap\"', 15),
(17, 'earings', 'Strawberry Pom-Pom', '\"images/Prekes/earings/16.jpg\" alt=\"Card image cap\"', 15),
(18, 'rings', 'Dark Pink Pom', '\"images/Prekes/rings/10.jpg\" alt=\"Card image cap\"', 10),
(19, 'rings', 'Dark Green Pom', '\"images/Prekes/rings/11.jpg\" alt=\"Card image cap\"', 10),
(20, 'rings', 'Dark Black Pom', '\"images/Prekes/rings/12.jpg\" alt=\"Card image cap\"', 10),
(21, 'earings', 'Dark Raspberry Pom-Pom', '\"images/Prekes/earings/16.jpg\" alt=\"Card image cap\"', 15),
(22, 'earings', 'Dark Strawberry Pom-Pom', '\"images/Prekes/earings/16.jpg\" alt=\"Card image cap\"', 15),
(23, 'keychains', 'Dark Ginger pom-chain', '\"images/Prekes/keychains/19.jpg\" alt=\"Card image cap\"', 10),
(24, 'keychains', 'Dark Hazel Pom-chain', '\"images/Prekes/keychains/21.jpg\" alt=\"Card image cap\"', 10),
(25, 'earings', 'Light Raspberry Pom-Pom', '\"images/Prekes/earings/16.jpg\" alt=\"Card image cap\"', 15),
(26, 'earings', 'Light Strawberry Pom-Pom', '\"images/Prekes/earings/16.jpg\" alt=\"Card image cap\"', 15),
(27, 'bracelets', 'Dark Black trio set', '\"images/Prekes/bracelets/24.jpg\" alt=\"Card image cap\"', 20),
(28, 'bracelets', 'Dark Green trio set', '\"images/Prekes/bracelets/23.jpg\" alt=\"Card image cap\"', 20),
(29, 'bracelets', 'Dark Black fringe', '\"images/Prekes/bracelets/40.jpg\" alt=\"Card image cap\"', 15),
(30, 'bracelets', 'Dark Green fringe', '\"images/Prekes/bracelets/39.jpg\" alt=\"Card image cap\"', 15),
(31, 'bracelets', 'Dark Matic fringe', '\"images/Prekes/bracelets/36.jpg\" alt=\"Card image cap\"', 15),
(32, 'bracelets', 'Dark Fatima', '\"images/Prekes/bracelets/34.jpg\" alt=\"Card image cap\"', 18),
(33, 'bracelets', 'Dark Scull in colors', '\"images/Prekes/bracelets/32.jpg\" alt=\"Card image cap\"', 18),
(34, 'bracelets', 'Dark Matic bubble', '\"images/Prekes/bracelets/30.jpg\" alt=\"Card image cap\"', 18),
(35, 'bracelets', 'Dark Matic scull', '\"images/Prekes/bracelets/32.jpg\" alt=\"Card image cap\"', 18),
(36, 'bracelets', 'Dark Simple one', '\"images/Prekes/bracelets/26.jpg\" alt=\"Card image cap\"', 10),
(37, 'bracelets', 'Light Matic fringe', '\"images/Prekes/bracelets/36.jpg\" alt=\"Card image cap\"', 15),
(38, 'bracelets', 'Light Fatima', '\"images/Prekes/bracelets/34.jpg\" alt=\"Card image cap\"', 18),
(39, 'bracelets', 'Light Scull in colors', '\"images/Prekes/bracelets/32.jpg\" alt=\"Card image cap\"', 18),
(40, 'bracelets', 'Light Matic bubble', '\"images/Prekes/bracelets/30.jpg\" alt=\"Card image cap\"', 18),
(41, 'bracelets', 'Light Green Trio set', '\"images/Prekes/bracelets/23.jpg\" alt=\"Card image cap\"', 25),
(42, 'bracelets', 'Light fringe', '\"images/Prekes/bracelets/40.jpg\" alt=\"Card image cap\"', 15),
(43, 'bracelets', 'Light Simple One', '\"images/Prekes/bracelets/26.jpg\" alt=\"Card image cap\"', 15),
(44, 'bracelets', 'Light Fatima', '\"images/Prekes/bracelets/34.jpg\" alt=\"Card image cap\"', 18),
(45, 'bracelets', 'Light Black Trio Set', '\"images/Prekes/bracelets/24.jpg\" alt=\"Card image cap\"', 25),
(46, 'rings', 'Light Black Pom', '\"images/Prekes/rings/12.jpg\" alt=\"Card image cap\"', 15),
(47, 'rings', 'Light Green Pom', '\"images/Prekes/rings/11.jpg\" alt=\"Card image cap\"', 15),
(48, 'rings', 'Light Pink Pom', '\"images/Prekes/rings/10.jpg\" alt=\"Card image cap\"', 15),
(49, 'keychains', 'Light Ginger pom-chain', '\"images/Prekes/keychains/19.jpg\" alt=\"Card image cap\"', 12),
(50, 'keychains', 'Light Hazel pom-chain', '\"images/Prekes/keychains/21.jpg\" alt=\"Card image cap\"', 12);

-- --------------------------------------------------------

--
-- Table structure for table `partneriai`
--

CREATE TABLE `partneriai` (
  `id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `qty` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partneriai`
--

INSERT INTO `partneriai` (`id`, `name`, `email`, `qty`) VALUES
(65, 'Juozas Juozaitis', 'juozas@juozas.lt', 2),
(66, 'Ona Onyte', 'ona@ona.lt', 5),
(67, 'Kristina Kristinaite', 'kristina@kristina.lt', 1),
(68, 'Genute Genutiene', 'gene@gene.lt', 1),
(69, 'Tadas Tadukas', 'tadas@tadas.lt', 3),
(70, 'Sandra Sandrute', 'sandrute@sandra.lt', 1),
(71, 'Janina Janyte', 'janyte@janyte.lt', 1),
(72, 'Vilma Vilmute', 'vilma@vilma.lt', 3),
(73, 'Ana Anyte', 'ane@ane.lt', 3),
(74, 'Laura Laurute', 'Lauryte@laura.lt', 2),
(75, 'Joana Joanyte', 'jonyte@joan.eu', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partneriai`
--
ALTER TABLE `partneriai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `partneriai`
--
ALTER TABLE `partneriai`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
