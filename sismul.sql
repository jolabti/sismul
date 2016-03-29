-- phpMyAdmin SQL Dump
-- version 4.3.8deb0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2016 at 01:03 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.6.19-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sismul`
--

-- --------------------------------------------------------

--
-- Table structure for table `addressbook`
--

CREATE TABLE IF NOT EXISTS `addressbook` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `id_liker` int(11) NOT NULL,
  `id_posting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id_media` int(11) NOT NULL,
  `judul_media` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL,
  `filename` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(5, 'santaibroo', 'santaibroo', 'santaibroo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id_karya` int(10) NOT NULL,
  `id_uploader` varchar(10) NOT NULL,
  `judul_video` text NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id_karya`, `id_uploader`, `judul_video`, `keterangan`, `kategori`, `filename`) VALUES
(1, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images1.jpg'),
(2, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images2.jpg'),
(3, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images3.jpg'),
(4, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images4.jpg'),
(5, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images5.jpg'),
(6, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images6.jpg'),
(7, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images7.jpg'),
(8, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images8.jpg'),
(9, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images9.jpg'),
(10, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images10.jpg'),
(11, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images11.jpg'),
(12, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images12.jpg'),
(13, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images13.jpg'),
(14, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images14.jpg'),
(15, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images15.jpg'),
(16, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images16.jpg'),
(17, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images17.jpg'),
(18, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images18.jpg'),
(19, '5', 'sdsdfsdf', 'sdfsdfsdfs', 'sdfsdfsdfs', 'images19.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addressbook`
--
ALTER TABLE `addressbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD UNIQUE KEY `id_karya` (`id_karya`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addressbook`
--
ALTER TABLE `addressbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_karya` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
