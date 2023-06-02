-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 03:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `lajme_db`

-- Table structure for table `lajme_form`
--

CREATE TABLE `lajme_form` (
  `emer` text(30) NOT NULL,
  `mbiemer` text(30) NOT NULL,
  `telefon` varchar(11) DEFAULT NULL,
  `email` text(30) NOT NULL,
  `data` date NOT NULL,
  `lajmi` text NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `lajme_form` (`emer`, `mbiemer`, `telefon`, `email`, `data`, `lajmi`) VALUES 
('Klea','Merko', 694538162,'kleamerko@gmail.com', '2023-01-29', 'Nje aksident i ndodhur ne Tirane.');



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text(80) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` text(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(6, 'ibra', '098f6bcd4621d373cade4e832627b4f6', 'ibra@tdb.al'),
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com'),
(8, 'test', '098f6bcd4621d373cade4e832627b4f6', 'testtt@test.com'),
(10, 'kleamerko', '0da059dffb2f5419bcb29d8125426875', 'kleamerko@gmail.com'),
(11, 'klea', '1463d2d32e09289fbf52dad848ee3ec7', 'kleamerko1@gmail.com'),
(12, 'une', '92df19e29c9d45d888ed5f68bad1c3b5', 'une@gmail.com'),
(13, 'une123', '5665531fbfe1787037718f49aa915bb9', 'une123@gmail.com');

--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;