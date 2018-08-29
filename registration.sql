-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2017 at 04:32 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(16) NOT NULL,
  `lname` varchar(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `username`, `email`, `password`) VALUES
('bb', 'k', 'aka', 'c@f.com', '202cb962ac59075b964b07152d234b70'),
('ark', 'ark', 'ark', 'ark@gmail.com', 'b706835de79a2b4e80506f582af3676a'),
('a', 'b', 'c', 'a@b.com', '202cb962ac59075b964b07152d234b70'),
('k', 'k', 'h', 'h@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
('Efrana', 'jannat', 'jannat', 'jannat@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('to', 'ma', 'ka', 'ka@gmail.com', 'f7177163c833dff4b38fc8d2872f1ec6'),
('toma', 'toma', 'toma', 'toma@gmail.com', '698d51a19d8a121ce581499d7b701668');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
