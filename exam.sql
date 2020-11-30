-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 01:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(180) NOT NULL,
  `phone` varchar(180) NOT NULL,
  `ip` varchar(180) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `name`, `phone`, `ip`, `message`, `email`) VALUES
(3, 'Yazan Khayal', 'peterparker@mail.com', '12', '1', 'Parker'),
(4, 'Yazan Khayal', '07745078639', '12', '                                                  Yazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan Khayal                                                  ', 'yazan.khayal@gmail.com'),
(5, 'Yazan Khayal', '07745078639', '::1', '                                                            Yazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan KhayalYazan Khayal                                                            ', 'yazan.khayal@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
