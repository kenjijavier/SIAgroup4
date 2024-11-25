-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2024 at 08:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearningapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$wfWCr6ZvsgueRklpNwFvn.S3JsroRcEkL2dTcQN4.OzDdrjQJLs2i');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `subtopic` varchar(128) NOT NULL,
  `content` mediumtext NOT NULL,
  `media` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(8) NOT NULL,
  `question_no` varchar(8) NOT NULL,
  `question` varchar(512) NOT NULL,
  `choice1` varchar(128) NOT NULL,
  `choice2` varchar(128) NOT NULL,
  `choice3` varchar(128) NOT NULL,
  `choice4` varchar(128) NOT NULL,
  `answer` varchar(128) NOT NULL,
  `topic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question_no`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`, `topic`) VALUES
(1, '1', 'Who, killed the Jews', 'Germans', 'Europe', 'Italian', 'Japanese', 'Germans', 'Nazi Germany - The Invasion of Poland, September 1st 1939'),
(4, '1', '1234', '33', '555', '1234', '1234', '555', 'Pokemon Go');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_topic`
--

CREATE TABLE `quiz_topic` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `time_minutes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_topic`
--

INSERT INTO `quiz_topic` (`id`, `topic`, `time_minutes`) VALUES
(55, 'Nazi Germany - The Invasion of Poland, September 1st 1939', '20'),
(56, 'Pokemon Go', '20');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(8) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `email`, `username`, `password`) VALUES
(1, 'Nick Guuido', 'Avedakcre', 'Nickuh@gmail.com', 'Nick Guh', '$2y$10$kIxqfI4B7ljcx1RvOdslqur1Z8y6TLMKoBvWl4JFcVnqSydi7Ga.G'),
(2, 'eye', 'eye', '123@gmail.com', 'Alpha', '$2y$10$jHaRCNJpqLWAVAryRbephu1K3F5CaPdg6CoBwSOPBz4F2VJx0FRB6'),
(3, '1234', '1234', '1234@gmail.com', 'sample', '$2y$10$VMl2PSRAHN1qTpHnbHxDNehHeSmk9K0Nj8FXG0sqFTlDYOzRZLG/i'),
(6, 'Zunder', 'Pacis', 'zjpacis04@gmail.com', 'AlphaPenguino', '$2y$10$L0T0HGwD.ALG8eQ4MXf.Uu7XszHWbOjm8zty.ad1Qr/HpVLEb7mze');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_topic`
--
ALTER TABLE `quiz_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `quiz_topic`
--
ALTER TABLE `quiz_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
