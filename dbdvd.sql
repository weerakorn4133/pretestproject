-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 01:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdvd`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `id_actor` varchar(30) NOT NULL,
  `firstname_ac` varchar(30) NOT NULL,
  `lastname_ac` varchar(30) NOT NULL,
  `address_ac` varchar(60) NOT NULL,
  `tel_ac` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`id_actor`, `firstname_ac`, `lastname_ac`, `address_ac`, `tel_ac`) VALUES
('a0001', 'ac1', 'lastac1', 'addresac1', '01111789'),
('a0002', 'ac2', 'lastac2', 'addresac2', '011117778'),
('a0003', 'ac3', 'lastac3', 'addresac3', '01111799');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id_movie` varchar(30) NOT NULL,
  `namemovie` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id_movie`, `namemovie`, `price`, `type`, `time`) VALUES
(' cx 88', 'ดำด', 78, 'กอกอก', 'อกอ'),
('m00001', 'movie777', 788, 'romantic', '2'),
('m00002', 'movie2', 200, 'comedy', '1.30'),
('m00003', 'movie3', 150, 'action', '2'),
('m00004', 'movie4', 50, 'dramatic', '1'),
('m00005', 'movie5', 300, 'fantasy', '3'),
('vfd', 'bfdbfdbfd', 0, 'fdbfdbfdbfd', 'fdbdfbfdb');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(30) NOT NULL,
  `firstname_us` varchar(30) NOT NULL,
  `lastname_us` varchar(30) NOT NULL,
  `address_us` varchar(60) NOT NULL,
  `tel_us` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname_us`, `lastname_us`, `address_us`, `tel_us`) VALUES
('42545245', 'vfdvdfv', 'vfdvfd', 'fdvdf', 'vfdvfdv'),
('us0001', 'firstname1', 'lastname2', 'address1', '000'),
('us0002', 'firstname2', 'lastname3', 'address2', '001'),
('us0003', 'firstname3', 'lastname3', 'address3', '000789'),
('us0004', 'จตุพร', 'ศรีชมชื่น', 'ราชมงคล', '0114');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id_actor`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id_movie`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
