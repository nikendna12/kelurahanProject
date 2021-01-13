-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2020 at 04:38 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kelurahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE IF NOT EXISTS `dokumen` (
  `id_dokumen` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `lokusaha` varchar(100) NOT NULL,
  `supernyataan` varchar(100) NOT NULL,
  `supengantar` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL,
  `verifikasi` int(11) NOT NULL,
  `status_not` varchar(100) NOT NULL,
  PRIMARY KEY (`id_dokumen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `id_user`, `ktp`, `kk`, `lokusaha`, `supernyataan`, `supengantar`, `tgl_upload`, `verifikasi`, `status_not`) VALUES
(1, 2, '4234312954410.90988200-1558926007-vnqow2e6z2mbfmiob7w4.jpg.jpeg', '1315922954410.90988200-1558926007-vnqow2e6z2mbfmiob7w4.jpg.jpeg', '884796939148manfaatan-ruko-untuk-bisnis-ku-1468643313.jpg', '44802919989Contoh-Surat-Pernyataan-Jenis-Fungsi-dan-Strukturnya-Lengkap.jpg', '446228767334Contoh-Surat-Pengantar-Dokumen.jpg', '2020-10-27', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE IF NOT EXISTS `pengajuan` (
  `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `nama_usaha` varchar(100) NOT NULL,
  `alamat_usaha` varchar(100) NOT NULL,
  `tgl_apply` date NOT NULL,
  `masa_berlaku` date NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `status_konfirmasi` int(11) NOT NULL,
  PRIMARY KEY (`id_pengajuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `username`, `nama_usaha`, `alamat_usaha`, `tgl_apply`, `masa_berlaku`, `alasan`, `status_konfirmasi`) VALUES
(3, 'hary', 'risol ajip33', 'Jl. Kakap 6 No. 18 RT 06/09 Perumnas 1 ', '2020-07-12', '2021-02-04', 'pengantar', 0),
(4, 'weny', 'cireng moncrot', 'Jl. Kakap Raya', '2020-07-01', '2020-10-01', 'cari duit', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `pict_user` varchar(100) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `nik_ktp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status_verifikasi` tinyint(4) NOT NULL,
  `no_kk` varchar(25) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bangsa` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `jkel` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `pict_user`, `level`, `nik_ktp`, `alamat`, `tgl_lahir`, `status_verifikasi`, `no_kk`, `no_hp`, `email`, `bangsa`, `agama`, `tempat_lahir`, `jkel`) VALUES
(1, 'admin', 'admin', 'Admin 1', 'nopict', 1, '', '', '0000-00-00', 0, '', '', '', '', '', '', ''),
(2, 'hary', 'hary123', 'Harry Pahlawann', 'nopict', 2, '3671', 'kakap vi', '1997-12-12', 2, '32', '32', 'harrypahlawan11@gmail.com', 'indo', 'islam', 'tng', 'laki-laki'),
(3, 'weny', '123', 'Weny Puspitasari', 'nopict', 2, '1010101010', 'Jl. Kakap 6 No. 18 RT 06/09 Perumnas 1 ', '2004-01-21', 1, '990233', '990', 'caca@gmail', 'Indonesia', 'islam', 'tangerang', 'pr'),
(4, 'fachri12', '123', 'Fachri Hawari', 'nopict', 2, '', '', '0000-00-00', 0, '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
