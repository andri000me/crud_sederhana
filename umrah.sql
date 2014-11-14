-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2014 at 10:10 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `umrah`
--

-- --------------------------------------------------------

--
-- Table structure for table `jamaah`
--

CREATE TABLE IF NOT EXISTS `jamaah` (
`id_jamaah` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kebangsaan` varchar(100) NOT NULL,
  `no_paspor` varchar(15) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `file_gambar` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `jamaah`
--

INSERT INTO `jamaah` (`id_jamaah`, `fullname`, `jk`, `tempat_lahir`, `tgl_lahir`, `kebangsaan`, `no_paspor`, `tgl_berangkat`, `file_gambar`) VALUES
(55, 'Ir. H. Tifatul Sembiring', 'Laki-laki', 'Bukit Tinggi', '1961-09-28', 'Indonesia', 'A123456', '2014-07-01', 'gambar/tifatul-sembiring.jpg'),
(56, 'Prof. DR. Ing. H. Bacharuddin Jusuf Habibie', 'Laki-laki', 'Parepare', '1936-06-25', 'Indonesia', 'A123457', '2014-07-01', 'gambar/bj-habibie.jpg'),
(57, 'Faisal Abdurrahman', 'Laki-laki', 'Jakarta', '1991-05-07', 'Indonesia', 'A123458', '2014-07-01', 'gambar/Faisal.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jamaah`
--
ALTER TABLE `jamaah`
 ADD PRIMARY KEY (`id_jamaah`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jamaah`
--
ALTER TABLE `jamaah`
MODIFY `id_jamaah` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
