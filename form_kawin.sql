-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2017 at 07:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_kawin`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_suami`
--

CREATE TABLE `data_suami` (
  `id` int(5) NOT NULL,
  `kwn` varchar(50) DEFAULT NULL,
  `hari` varchar(50) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `nama_s` varchar(50) DEFAULT NULL,
  `namakecil_s` varchar(50) DEFAULT NULL,
  `tmplahir_s` varchar(50) DEFAULT NULL,
  `tgllahir_s` date DEFAULT NULL,
  `agama_s` varchar(50) DEFAULT NULL,
  `pekerjaan_s` varchar(50) DEFAULT NULL,
  `almskg_s` text,
  `almdulu_s` text,
  `pernahkawin_s` varchar(50) DEFAULT NULL,
  `bekaspsg_s` varchar(50) DEFAULT NULL,
  `anakdisah_s` varchar(50) DEFAULT NULL,
  `nama_as` varchar(50) DEFAULT NULL,
  `namakecil_as` varchar(50) DEFAULT NULL,
  `tmplahir_as` varchar(50) DEFAULT NULL,
  `tgllahir_as` date DEFAULT NULL,
  `agama_as` varchar(50) DEFAULT NULL,
  `pekerjaan_as` varchar(50) DEFAULT NULL,
  `almskg_as` text,
  `nama_is` varchar(50) DEFAULT NULL,
  `namakecil_is` varchar(50) DEFAULT NULL,
  `tmplahir_is` varchar(50) DEFAULT NULL,
  `tgllahir_is` date DEFAULT NULL,
  `agama_is` varchar(50) DEFAULT NULL,
  `pekerjaan_is` varchar(50) DEFAULT NULL,
  `almskg_is` text,
  `nama_i` varchar(50) DEFAULT NULL,
  `namakecil_i` varchar(50) DEFAULT NULL,
  `tmplahir_i` varchar(50) DEFAULT NULL,
  `tgllahir_i` date DEFAULT NULL,
  `agama_i` varchar(50) DEFAULT NULL,
  `pekerjaan_i` varchar(50) DEFAULT NULL,
  `almskg_i` text,
  `almdulu_i` text,
  `pernahkawin_i` varchar(50) DEFAULT NULL,
  `bekaspsg_i` varchar(50) DEFAULT NULL,
  `anakdisah_i` varchar(50) DEFAULT NULL,
  `nama_ai` varchar(50) DEFAULT NULL,
  `namakecil_ai` varchar(50) DEFAULT NULL,
  `tmplahir_ai` varchar(50) DEFAULT NULL,
  `tgllahir_ai` date DEFAULT NULL,
  `agama_ai` varchar(50) DEFAULT NULL,
  `pekerjaan_ai` varchar(50) DEFAULT NULL,
  `almskg_ai` text,
  `nama_ii` varchar(50) DEFAULT NULL,
  `namakecil_ii` varchar(50) DEFAULT NULL,
  `tmplahir_ii` varchar(50) DEFAULT NULL,
  `tgllahir_ii` date DEFAULT NULL,
  `agama_ii` varchar(50) DEFAULT NULL,
  `pekerjaan_ii` varchar(50) DEFAULT NULL,
  `almskg_ii` text,
  `nama_s1` varchar(50) DEFAULT NULL,
  `namakecil_s1` varchar(50) DEFAULT NULL,
  `tmplahir_s1` varchar(50) DEFAULT NULL,
  `tgllahir_s1` date DEFAULT NULL,
  `agama_s1` varchar(50) DEFAULT NULL,
  `pekerjaan_s1` varchar(50) DEFAULT NULL,
  `almskg_s1` text,
  `nama_s2` varchar(50) DEFAULT NULL,
  `namakecil_s2` varchar(50) DEFAULT NULL,
  `tmplahir_s2` varchar(50) DEFAULT NULL,
  `tgllahir_s2` date DEFAULT NULL,
  `agama_s2` varchar(50) DEFAULT NULL,
  `pekerjaan_s2` varchar(50) DEFAULT NULL,
  `almskg_s2` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_suami`
--
ALTER TABLE `data_suami`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_suami`
--
ALTER TABLE `data_suami`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
