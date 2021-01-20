-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2021 at 04:00 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `id_user`, `ktp`, `kk`, `lokusaha`, `supernyataan`, `supengantar`, `tgl_upload`, `verifikasi`, `status_not`) VALUES
(1, 2, '3704531.jpg', '1315922954410.90988200-1558926007-vnqow2e6z2mbfmiob7w4.jpg.jpeg', '884796939148manfaatan-ruko-untuk-bisnis-ku-1468643313.jpg', '44802919989Contoh-Surat-Pernyataan-Jenis-Fungsi-dan-Strukturnya-Lengkap.jpg', '446228767334Contoh-Surat-Pengantar-Dokumen.jpg', '2020-10-27', 1, ''),
(2, 8, '313660Dokumen 2_4.jpg', '575897Dokumen 2_5.jpg', '95581Dokumen 2_3.jpg', '357575Dokumen 2_6.jpg', '399231Dokumen 2_2.jpg', '2021-01-11', 1, ''),
(3, 11, '304749Dokumen 3_4.jpg', '151429Dokumen 3_3.jpg', '157990Dokumen 3_5.jpg', '391510Dokumen 3_6.jpg', '26856Dokumen 3_1.jpg', '2021-01-17', 0, ''),
(4, 10, '687713Dokumen 3_16.jpg', '723205Dokumen 3_18.jpg', '813080Dokumen 3_19.jpg', '745544Dokumen 3_14.jpg', '553986Dokumen 3_15.jpg', '2021-01-17', 0, ''),
(5, 12, '331970Dokumen 3_9.jpg', '601166Dokumen 3_11.jpg', '603149Dokumen 3_12.jpg', '807525Dokumen 3_8.jpg', '174897Dokumen 3_10.jpg', '2021-01-17', 0, 'KTP belum sesuai'),
(6, 13, '672333Dokumen 3_21.jpg', '', '580566Dokumen 3_24.jpg', '68909Dokumen 3_22.jpg', '385193Dokumen 3_23.jpg', '2021-01-17', 0, ''),
(7, 14, '856537Dokumen 2_10.jpg', '894012Dokumen 2_12.jpg', '464722Dokumen 2_11.jpg', '981933Dokumen 2_8.jpg', '657501Dokumen 2_9.jpg', '2021-01-17', 0, ''),
(8, 15, '768554Dokumen 2_13.jpg', '342743Dokumen 2_17.jpg', '801635Dokumen 2_15.jpg', '649200Dokumen 2_14.jpg', '817535Dokumen 2_16.jpg', '2021-01-17', 0, ''),
(9, 16, '626343Dokumen 2_24.jpg', '34974Dokumen 2_20.jpg', '532562Dokumen 2_23.jpg', '221466Dokumen 2_21.jpg', '460602Dokumen 2_19.jpg', '2021-01-17', 0, ''),
(10, 17, '750915Dokumen 2_25.jpg', '879211Dokumen 2_30.jpg', '28748Dokumen 2_29.jpg', '593902Dokumen 2_27.jpg', '373963Dokumen 2_28.jpg', '2021-01-17', 0, ''),
(11, 18, '419891Dokumen 2_35.jpg', '', '507782Dokumen 2_33.jpg', '535522Dokumen 2_34.jpg', '115601Dokumen 2_32.jpg', '2021-01-17', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE IF NOT EXISTS `pengajuan` (
  `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `nama_usaha` varchar(50) NOT NULL,
  `alamat_usaha` varchar(100) NOT NULL,
  `tgl_apply` date NOT NULL,
  `masa_berlaku` date NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `status_konfirmasi` int(11) NOT NULL,
  PRIMARY KEY (`id_pengajuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `username`, `nama_usaha`, `alamat_usaha`, `tgl_apply`, `masa_berlaku`, `alasan`, `status_konfirmasi`) VALUES
(6, 'hary', 'risol ajip33', 'Jl. Kakap 6 No. 18 RT 06/09 Perumnas 1 ', '2021-01-15', '2021-04-15', 'pengantar', 1),
(7, 'abdoel', 'Kue Brownies', 'Pasar Bandeng RT 001 RW 004 Kelurahan Karawaci Baru Kecamatan Karawaci Tangeranggggggggggggggggggggg', '2021-01-15', '2021-04-15', 'mengajukan pinjaman modal usaha', 1),
(8, 'achzar', 'UD. MEKAR PLASTIK (PERCETAKAN)', 'Jl. Tengiri VI No. 109 RT 003/008 Kelurahan Karawaci Baru Kecamatan Karawaci', '2021-01-17', '2021-04-17', 'modal usaha ', 0),
(9, 'aminfaozan', 'WARUNG SEMBAKO', 'Jl. Gurame Raya No. 100 RT 003/004 Kelurahan Karawaci Baru Kecamatan Karawaci', '2021-01-17', '2021-04-17', 'mengajukan pinjaman modal usaha ', 0),
(10, 'ekanurdiyatmi', 'DAPOER JH (MAKANAN)', 'Jl. Zeta IV No. 17 RT 003/006 Kelurahan Karawaci Baru Kecamatan Karawaci', '2021-01-17', '2021-04-17', 'modal usaha ', 0),
(11, 'yatno', 'BAKSO', 'Jl. Tongkol Raya Ujung No. 197 RT 005/009 Kelurahan Karawaci Baru Kecamatan Karawaci', '2021-01-17', '2021-04-17', 'mengajukan pinjaman modal usaha', 0),
(12, 'fitri', 'V-SHOP (MAKANAN, PEWANGI MOBIL/RUMAH)', 'Jl. Ciliwung I No. 66 RT 003/001 Kelurahan Karawaci Baru Kecamatan Karawaci', '2021-01-17', '2021-04-17', 'modal usaha', 0),
(13, 'abdulrojak', 'WARUNG KOPI', 'Jl. Gurame II No. 26 RT 005/004 Kelurahan Karawaci Baru Kecamatan Karawaci', '2021-01-17', '2021-04-17', 'mengajukan pinjaman modal usaha', 0),
(14, 'firdauseffendy', 'TOKO THE KAYS (WARUNG)', 'Jl. Gurame IV No. 29 RT 001/004 Kelurahan Karawaci Baru Kecamatan Karawaci', '2021-01-17', '2021-04-17', 'modal usaha', 0),
(15, 'hary', 'apaansi''', 'Jl. Kakap 6 No. 18 RT 06/09 Perumnas 1 ', '2021-01-18', '2021-04-18', 'modal usaha', 0),
(16, 'abdoel', 'apaansi'' 2', 'Pasar Bandeng RT 001 RW 004 Kelurahan Karawaci Baru Kecamatan Karawaci\r\nTangerangggggggggggggggggggg', '2021-01-18', '2021-04-18', 'gpp', 1);

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
  `nik_ktp` varchar(16) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status_verifikasi` tinyint(4) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bangsa` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `jkel` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `pict_user`, `level`, `nik_ktp`, `alamat`, `tgl_lahir`, `pekerjaan`, `status_verifikasi`, `no_kk`, `no_hp`, `email`, `bangsa`, `agama`, `tempat_lahir`, `jkel`) VALUES
(1, 'admin', 'admin', 'Admin', 'nopict', 1, '', '', '0000-00-00', '', 1, '', '', '', '', '', '', ''),
(2, 'hary', '12345', 'Harry Pahlawan', 'nopict', 2, '3671071011940001', 'Jl. Kakap VI No. 18 RT 006/009', '1997-12-12', 'Pegawai Swasta', 2, '3671924297477777', '081316301360', 'harrypahlawan11@gmail.com', 'Indonesia', 'Islam', 'Tangerang', 'laki-laki'),
(4, 'fachri12', '123', 'Fachri Hawari', 'nopict', 2, '', '', '0000-00-00', '', 0, '', '', '', '', '', '', ''),
(5, 'mamoru_kuzon', '12345', 'Mamoru Kuzon', 'nopict', 2, '3671928737327374', 'Jl. Kakap 6 No. 18 RT 06/09 Perumnas 1', '1994-11-10', 'Pegawai Swasta', 2, '3322382836354544', '08134567890', 'tesaja@gmail.com', 'Indonesia', 'Islam', 'Tangerang', 'laki-laki'),
(7, 'amanda', 'amanda', 'amanda', 'nopict', 2, '', '', '0000-00-00', '', 0, '', '', '', '', '', '', ''),
(8, 'abdoel', '12345', 'Abdoelah Syafii', 'nopict', 2, '3209190904830005', 'Jl. Gurame II RT 005/004\r\nKelurahan Karawaci Baru Kecamatan Karawaci ', '1984-04-09', 'Pegawai Swasta', 1, '3671011010111011', '0813556123', 'abdoelahsyafii@gmail.com', 'Indonesia', 'Islam', 'Cirebon', 'laki-laki'),
(9, 'amin', '12345', 'a', 'nopict', 2, '', '', '0000-00-00', '', 0, '', '', '', '', '', '', ''),
(10, 'aminfaozan', '12345', 'Amin Faozan', 'nopict', 2, '3671070906680003', 'Jl. Gurame Raya No. 100 RT 003/004 Kelurahan Karawaci Baru Kecamatan Karawaci', '1968-06-09', 'Karyawan Swasta', 1, '3671070110070095', '088813456789', 'aminfaozan@gmail.com', 'Indonesia', 'Islam', 'Purbalingga', 'laki-laki'),
(11, 'achzar', '12345', 'Achmad Zarkasih', 'nopict', 2, '3603011810800004', 'Jl. Tengiri VI No. 109 RT 003/008 Kelurahan Karawaci Baru Kecamatan Karawaci', '1980-10-18', 'Wiraswasta', 2, '3671072204150010', '081311114566', 'achmadzarkasih@gmail.com', 'Indonesia', 'Islam', 'Tangerang', 'laki-laki'),
(12, 'ekanurdiyatmi', '12345', 'Huda Eka Nurdiyatmi', 'nopict', 2, '3671076809960004', 'Jl. Zeta IV No. 17 RT 003/006 Kelurahan Karawaci Baru Kecamatan Karawaci', '1996-09-28', 'Karyawan Swasta', 1, '3671072809070311', '081212121245', 'hudanureka@gmail.com', 'Indonesia', 'Islam', 'Wonogiri', 'perempuan'),
(13, 'virgiawan', '12345', 'Muhammad Virgiawan', 'nopict', 2, '3671071810960003', 'Jl. Zeta X No. 122 RT 001/005 Kelurahan Karawaci Baru Kecamatan Karawaci', '1996-10-18', 'Wiraswasta', 1, '3671011121220001', '081211143212', 'virgiawan@gmail.com', 'Indonesia', 'Islam', 'Jakarta', 'laki-laki'),
(14, 'yatno', '12345', 'Yatno', 'nopict', 2, '3671070407690003', 'Jl. Tongkol Raya Ujung No. 197 RT 005/009 Kelurahan Karawaci Baru Kecamatan Karawaci', '1969-07-04', 'Wiraswasta', 1, '3671072409070010', '088876541329', 'baksoyatno@gmail.com', 'Indonesia', 'Islam', 'Karang Anyar', 'laki-laki'),
(15, 'fitri', '12345', 'Fitriyanti', 'nopict', 2, '3671076007820006', 'Jl. Ciliwung I No. 66 RT 003/001 Kelurahan Karawaci Baru Kecamatan Karawaci', '1982-07-20', 'Mengurus Rumah Tangg', 2, '3671070110070432', '089898771234', 'fitriyanti@gmail.com', 'Indonesia', 'Islam', 'Jakarta', 'perempuan'),
(16, 'abdulrojak', '12345', 'Abdul Rojak', 'nopict', 2, '3671072301810003', 'Jl. Gurame II No. 26 RT 005/004 Kelurahan Karawaci Baru Kecamatan Karawaci', '1981-01-23', 'Karyawan Swasta', 1, '3671072409070113', '087878781245', 'abdulrojak@gmail.com', 'Indonesia', 'Islam', 'Jakarta', 'laki-laki'),
(17, 'firdauseffendy', '12345', 'Achmad Firdaus Effendy', 'nopict', 2, '3172012706890009', 'Jl. Gurame IV No. 29 RT 001/004 Kelurahan Karawaci Baru Kecamatan Karawaci', '1989-06-27', 'Karyawan Swasta', 1, '3671071505150014', '089781569988', 'firdauseffendy@gmail.com', 'Indonesia', 'Islam', 'Jakarta', 'laki-laki'),
(18, 'yuniartiruth', '12345', 'Yuniarti Ruth Sipayung', 'nopict', 2, '3671075202840014', 'Jl. Zeta VII No. 334 RT 003/005 Kelurahan Karawaci Baru Kecamatan Karawaci', '1984-02-12', 'Wiraswasta', 1, '3671011121222334', '087856781324', 'yuniartiruthsipayung@gmail.com', 'Indonesia', 'Protestan', 'Kangkung', 'perempuan'),
(23, 'muhnurhamid', '12345', 'Muhammad Nur Hamid', 'nopict', 2, '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
