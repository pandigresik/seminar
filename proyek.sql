-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2018 at 05:52 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `images` varchar(100) NOT NULL DEFAULT 'images/1.jpg',
  `wkt_dftr` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,  
  `ha` enum('admin','pengelola') NOT NULL,
  PRIMARY key (id_user)
);

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama`, `username`, `password`, `images`, `wkt_dftr`, `ha`) VALUES
('Amin Richman', 'amin46', 'leonardo', 'images/7.jpg', '2018-06-25 03:46:22', 'pengelola'),
('Admin Pusat', 'admin', 'admin', 'images/8.jpg', '2018-06-25 03:52:29', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  npa varchar(11) not null unique,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(50) NOT NULL,
  sekolah varchar(70) NOT NULL,
  `wkt_dftr` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY key (id)  
);

--
-- Dumping data for table `user`
--

INSERT INTO `user` (npa, `nama`, `alamat`, `tgl_lahir`, `email`, sekolah) VALUES
('12345678901', 'amin', 'janti', '1997-12-21', 'amin73895@gmail.com', 'SDN maju selalu');


CREATE TABLE IF NOT EXISTS kehadiran (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  npa varchar(11) not null,
  images varchar(60) not null,  
  created_at datetime default CURRENT_TIMESTAMP,
  PRIMARY key(id)
);

