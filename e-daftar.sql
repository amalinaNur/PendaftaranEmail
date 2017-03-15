-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 05:37 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-daftar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `A_username` varchar(50) NOT NULL,
  `A_password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `A_username`, `A_password`) VALUES
(1, 'sulaiman@psis.edu.my', 'admin123'),
(2, 'zurianita@psis.edu.my', 'admin123'),
(3, 'admin@psis.edu.my', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `S_id` varchar(11) NOT NULL,
  `S_nama1` varchar(100) NOT NULL,
  `S_nama2` varchar(100) NOT NULL,
  `S_nama3` varchar(100) NOT NULL,
  `S_ic1` varchar(6) NOT NULL,
  `S_ic2` varchar(2) NOT NULL,
  `S_ic3` varchar(4) NOT NULL,
  `S_alamat1` varchar(100) NOT NULL,
  `S_alamat2` varchar(100) NOT NULL,
  `S_alamat3` varchar(100) NOT NULL,
  `S_alamat4` varchar(100) NOT NULL,
  `S_phone1` varchar(3) NOT NULL,
  `S_phone2` varchar(8) NOT NULL,
  `S_posisi` varchar(100) NOT NULL,
  `S_jawatangred` varchar(100) NOT NULL,
  `S_username` varchar(50) NOT NULL,
  `S_email` varchar(100) NOT NULL,
  `S_password` varchar(20) NOT NULL,
  `S_status` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `S_id`, `S_nama1`, `S_nama2`, `S_nama3`, `S_ic1`, `S_ic2`, `S_ic3`, `S_alamat1`, `S_alamat2`, `S_alamat3`, `S_alamat4`, `S_phone1`, `S_phone2`, `S_posisi`, `S_jawatangred`, `S_username`, `S_email`, `S_password`, `S_status`) VALUES
(19, 'PSIS/01/030', 'Nor Amalina', 'Binti', 'Mohamed Fadzilah', '940512', '01', '6672', 'No 19, Jalan Bunga Orkid, Taman Pertama', 'Sabak Bernam', 'Selangor', '45200', '011', '33011946', 'Unit Teknologi Maklumat', 'Pegawai Teknologi Maklumat F41', 'amalina94', 'amalinafadzilah@gmail.com', 'user123', 'Aktif'),
(20, 'PSIS/01/040', 'Muhammad Izwan', 'Bin', 'Saib', '930126', '09', '7328', '5, Jalan Anggerik, Taman Sentosa', 'Rawang', 'Seremban', '54100', '017', '3864626', 'Unit Teknologi Maklumat', 'Pegawai Teknologi Maklumat F41', 'izwan.saib', 'izwansaib@yahoo.com', '', 'Baru'),
(21, 'PSIS/01/015', 'Nurul Fazirah', 'Binti', 'Ramli', '940103', '11', '8327', '1, Taman Sri Jelebu', 'Kuala Klawang', 'Negeri Sembilan', '71650', '017', '2839574', 'Jabatan Teknologi Maklumat dan Komunikasi', 'Pegawai Teknologi Maklumat F41', 'fazirah.zyra', 'fazirahzyra@gmail.com', '', 'Baru');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
