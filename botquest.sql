-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2023 at 06:25 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `botquest`
--
CREATE DATABASE IF NOT EXISTS `botquest`;
USE `botquest`;

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
);

CREATE TABLE `prova` (
	`nome` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`data` DATE NULL DEFAULT NULL,
	`nota` INT(10) NULL DEFAULT NULL,
	`materia` VARCHAR(10) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci'
);
CREATE TABLE `admin` (
	`nome` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`usuario` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`senha` VARCHAR(150) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci'
);
--
-- Dumping data for table `usuarios`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

-- Indexes for table `admin`
  INSERT INTO `botquest`.`admin`(`nome`,`usuario`,`senha`)VALUES('admin', 'admin', '$2y$10$4FqPUO00kaU4j73YqXyrYOk/EF5R/4cQinVoxifeB/tGnLuc1AL0O');
						

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
