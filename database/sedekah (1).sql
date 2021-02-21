-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Feb 2021 pada 20.25
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sedekah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jumlah_donasi` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `no_wa` varchar(25) NOT NULL,
  `norek` varchar(25) NOT NULL,
  `nama_bank` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id`, `nama`, `jumlah_donasi`, `keterangan`, `no_wa`, `norek`, `nama_bank`) VALUES
(47, 'tes', '10.000.000', 'tes', '2232', '8001 6831 2900', 'bri'),
(48, 'tes', '10.000.000', 'tes', '2232', '8001 6831 2900', 'bri'),
(49, 'tes', '10.000.000', 'tes', '2232', '8001 6831 2900', 'bni'),
(50, 'tes', '10.000.000', 'tes', '2232', '8001 6831 2900', 'cimb'),
(51, 'tes', '10.000.000', 'tes', '2232', '8001 6831 2900', 'bni'),
(52, 'tes', '10.000.000', 'tes', '2232', '8001 6831 2900', 'bri'),
(53, 'tes', '20.000.000', 'tes', '2232', '8001 6831 2900', 'bni'),
(54, 'tes', '20.000.000', 'tes', '77766', '8001 6831 2900', 'bri'),
(55, '', '654.654', 'ko gtu yaaa\r\nitulah kekur', '', '8001 6831 2900', 'bri'),
(56, 'reterre', '43.353', 'dfdfgs', '43535', '8001 6831 2900', 'bri'),
(57, 'ghfh', '45.464.646.464', 'fhgfhfhf', '4565464', '8001 6831 2900', 'bri'),
(58, 'gfhdfgh', '54.646.464.464', 'vbngggjj', '3453', '8001 6831 2900', 'bri'),
(59, 'fgdg', '5.446.464', 'fghfh', '456464', '8001 6831 2900', 'bri'),
(60, 'tedfgdgd', '353.533', '', '43534', '8001 6831 2900', 'bri'),
(61, 'asd', '112.121.212', '', '11223311', '8001 6831 2900', 'bri'),
(62, '', '11', '', '', '8001 6831 2900', 'bri'),
(63, 'tedfgdgd', '353.533', '', '43534', '8001 6831 2900', 'bri'),
(64, 'tedfgdgd', '353.533', '', '43534', '8001 6831 2900', 'bri'),
(65, '', '1', '', '', '8001 6831 2900', 'bri'),
(66, '', '1', '', '', '8001 6831 2900', 'bri'),
(67, '', '12', '', '', '8001 6831 2900', 'bri'),
(68, '', '654.654', '', '', '8001 6831 2900', 'bri'),
(69, 'ghjg', '657.567.575', 'ghhfgjgjgh', '56757', '8001 6831 2900', 'bni'),
(70, 'ghjg', '657.567.575', 'ghhfgjgjgh', '56757', '8001 6831 2900', 'bri'),
(71, 'ghjg', '657.567.575', 'ghhfgjgjgh', '56757', '8001 6831 2900', 'bni'),
(72, 'dfgsfdg', '435.464', 'gfhgdfh', '43456', '8001 6831 2900', 'bni'),
(73, 'okokokoko', '867.868.686', 'gfhgdfh', '878778', '8001 6831 2900', 'bni'),
(74, 'mbjmnb', '543.453.345', 'nvbh', '465465', '8001 6831 2900', 'bni'),
(75, 'hgj', '675.777', 'ghj', '657', '8001 6831 2900', 'bri'),
(76, 'hgjghf', '567.575', 'ghjfghjgj', '567567', '8001 6831 2900', 'bni'),
(77, 'hgjghf', '567.575', 'ghjfghjgj', '567567', '8001 6831 2900', 'cimb'),
(78, 'hgjghf', '567.575', 'ghjfghjgj', '567567', '8001 6831 2900', 'bni'),
(79, 'wsdfsf', '2.343.435', 'fgdsgfsdgdfgg', '2343242', '8001 6831 2900', 'bri'),
(80, 'wsdfsf', '2.343.435', 'fgdsgfsdgdfgg', '2343242', '8001 6831 2900', 'bni'),
(81, 'wsdfsf', '2.343.435', 'fgdsgfsdgdfgg', '2343242', '8001 6831 2900', 'bni'),
(82, 'wsdfsf', '2.343.435', 'fgdsgfsdgdfgg', '', '8001 6831 2900', 'bri'),
(83, 'wsdfsf', '2.343.435', 'fgdsgfsdgdfgg', '', '8001 6831 2900', 'bni'),
(88, 'asdad', '1.211.111', 'dssdfs', '1213', '8001 6831 2900', 'bri'),
(89, 'xdss', '22.222.222.222', 'yugjugigjkig', '22222', '8001 6831 2900', 'bri'),
(91, 'gfhfh', '46.456.464', 'gryrtyr', '54646464', '8001 6831 2900', 'bri'),
(92, 'dfgdg', '34.355.353', 'dfgdfgd', '3453', '8001 6831 2900', 'bri'),
(93, '', '22.342', '', '', '8001 6831 2900', 'bri'),
(94, '', '22.342', '', '', '8001 6831 2900', 'bni'),
(95, '', '22.342', '', '', '8001 6831 2900', 'bri'),
(96, '', '22.342', '', '', '8001 6831 2900', 'bri'),
(97, '', '22.342', '', '', '8001 6831 2900', 'bni'),
(98, '', '22.342', '', '', '8001 6831 2900', 'cimb'),
(99, 'wsdfsf', '43.453', '', '23424', '8001 6831 2900', 'bri'),
(100, 'nsndsn', '923.399.239.292', '', '932292', '8001 6831 2900', 'bni'),
(101, 'nsndsn', '923.399.239.292', '', '932292', '8001 6831 2900', 'bri'),
(102, 'nnn', '555', '', '5555', '8001 6831 2900', 'bri'),
(103, 'sdsada', '324.242', '', '32342', '8001 6831 2900', 'cimb'),
(104, '', '777.777', '', '', '8001 6831 2900', 'bri'),
(105, '', '131.113.131', '', '', '8001 6831 2900', 'bri'),
(106, '', '131.113.131', '', '', '8001 6831 2900', 'bni'),
(107, '', '131.113.131', '', '', '8001 6831 2900', 'cimb'),
(108, '', '321.234.234.242', '', '', '8001 6831 2900', 'bni'),
(109, '', '1.211.212', '', '', '8001 6831 2900', 'bri'),
(110, '', '', '', '', '', ''),
(111, '', '456.757.657', '', '', '8001 6831 2900', 'bni'),
(112, '', '4.322.432', '', '', '8001 6831 2900', 'bri'),
(113, '', '4.322.432', '', '', '8001 6831 2900', 'bni'),
(114, '', '1.000.000.000', '', '', '8001 6831 2900', 'bni'),
(115, 'Toko Deden', '1.000.000.000', '', '', '8001 6831 2900', 'bni'),
(116, '', '1.000.000.000', '', '', '8001 6831 2900', 'bni'),
(117, '', '1.000.000.000', '', '', '8001 6831 2900', 'bni'),
(118, '', '1.000.000.000', '', '', '8001 6831 2900', 'bni'),
(119, '', '', '', '', '', ''),
(120, '', '1.000.000.000', '', '', '8001 6831 2900', 'bni'),
(121, '', '', '', '', '', ''),
(122, '', '1.000.000.000', '', '', '8001 6831 2900', 'bni'),
(123, '', '', '', '', '', ''),
(124, 'Sayassss', '100000000', 'sdawadwdasdadaw', '081382009521', '8001 6831 2900', 'bni'),
(125, '', '', '', '', '', ''),
(126, 'Sayassss', '100000000', 'sdawadwdasdadaw', '081382009521', '8001 6831 2900', 'bni'),
(127, '', '', '', '', '', ''),
(128, 'Sayassss', '100000000', 'sdawadwdasdadaw', '081382009521', '8001 6831 2900', 'bni'),
(129, '', '', '', '', '', ''),
(130, 'kontol', '100000000', 'adwdaw', '081382009521', '8001 6831 2900', 'bni'),
(131, '', '', '', '', '', ''),
(132, 'Toko Deden', '1000000000', 'as', '081382009521', '8001 6831 2900', 'bni'),
(133, '', '', '', '', '', ''),
(134, 'Toko Deden', '1000000000', 'as', '081382009521', '8001 6831 2900', 'bni'),
(135, '', '', '', '', '', ''),
(136, 'Toko Deden', '1000000000', 'as', '081382009521', '8001 6831 2900', 'bni'),
(137, '', '', '', '', '', ''),
(138, 'Toko Deden', '1000000000', 'as', '081382009521', '8001 6831 2900', 'bni'),
(139, '', '', '', '', '', ''),
(140, 'Toko Deden', '1000000000', 'asas', '081382009521', '8001 6831 2900', 'bni'),
(141, '', '', '', '', '', ''),
(142, 'Toko Deden', '1000000000', 'sds', '081382009521', '8001 6831 2900', 'bni'),
(143, '', '', '', '', '', ''),
(144, 'Toko Deden', '1000000000', 'asa', '081382009521', '8001 6831 2900', 'bni'),
(148, 'Toko Deden daawdaw', '1000000000', 'dawdw', '081382009521', '8001 6831 2900', 'bni'),
(150, 'Toko Deden ad', '1000000000', 'dawd', '081382009521', '8001 6831 2900', 'bni'),
(151, '', '', '', '', '', ''),
(152, 'Toko Deden addd', '1000000000', 'dawdw ', '081382009521', '8001 6831 2900', 'bni'),
(153, '', '', '', '', '', ''),
(154, 'Toko Deden dawdawdawdwada', '1000000000', 'dawdawdwadwa', '081382009521', '8001 6831 2900', 'bni'),
(155, '', '', '', '', '', ''),
(156, 'dawdawdawdwadwawad wdaw w', '10000000003', 'dawadwad', '081382009521', '8001 6831 2900', 'bni'),
(157, '', '', '', '', '', ''),
(158, 'Toko Deden', '1000000000', 'dawwad', '081382009521', '8001 6831 2900', 'bni'),
(159, '', '', '', '', '', ''),
(160, 'Toko Deden', '1000000000', 'dawwad', '081382009521', '8001 6831 2900', 'bni'),
(161, '', '', '', '', '', ''),
(162, 'nasuha', '131113131', 'dawdawd', '081382009521', '8001 6831 2900', 'bni'),
(163, 'Fara', '131113131', 'dawdawd', '081382009521', '8001 6831 2900', 'bni'),
(164, 'dawdawdawdwadwawad wdaw w', '1000000000', 'dawawd', '081382009521', '8001 6831 2900', 'bni'),
(165, '', '', '', '', '', ''),
(166, 'Toko Deden edan', '2131231', 'adwawd', '081382009521', '8001 6831 2900', 'bni'),
(167, '', '', '', '', '', ''),
(168, 'dawdawdawdwadwawad wdaw w', '23423432423', 'dawdaw', '081382009521', '8001 6831 2900', 'bni'),
(169, '', '', '', '', '', ''),
(170, 'nasuha', '1000000000', 'dawdwad', '081382009521', '8001 6831 2900', 'bni'),
(171, 'nasuha', '1000000000', 'dawdwad', '081382009521', '8001 6831 2900', 'bni'),
(172, 'wadawdwa', '1000000000', 'dawawdaw', '081382009521', '8001 6831 2900', 'bni'),
(173, 'bismillah', '1000000000', 'dawdwa', '081382009521', '8001 6831 2900', 'bni'),
(174, 'Toko Deden adwd', '1000000000', 'dawda', '081382009521', '8001 6831 2900', 'bni'),
(175, 'anjingggg', '1000000000', 'dawdaw', '081382009521', '8001 6831 2900', 'bni'),
(176, 'tryr', '3433333', 'fdggfgh', '081382009521', '8001 6831 2900', 'bni'),
(177, 'awdwad', '1000000000', 'dawwd', '12312312', '8001 6831 2900', 'bni'),
(178, 'awdwad', '1000000', 'dawwd', '12312312', '8001 6831 2900', 'bni'),
(179, 'awdwad', '1000000', 'dawwd', '12312312', '8001 6831 2900', 'bni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukti_transfer`
--

CREATE TABLE `bukti_transfer` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `donasi` varchar(100) NOT NULL,
  `resi` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukti_transfer`
--

INSERT INTO `bukti_transfer` (`id`, `nama`, `donasi`, `resi`) VALUES
(1, 'fahmi', '10.000', '5fe55c9094284.jpg'),
(2, 'test', '20.000', '5fe5652850f36.jpg'),
(3, 'hogeretet ahtiduY', '61.057', '5fe56ff67ebbf.jpg'),
(4, 'FENTY WURNI ASIH', '250.000', '5ff3d713ba9ab.jpeg'),
(5, 'Garnisa Prima Nida Devi', '50.188', '5ff439ba059ec.jpg'),
(6, 'Bentar Nugraha', '1.000.000', '5ff9367ee51ea.jpeg'),
(7, 'Bentar Nugraha', '200.221', '6001193326f9c.jpeg'),
(8, 'qweqe', '1.231', '600f9658a58f0.jpg'),
(9, 'fdgd', '34.535', '60103b5777647.jpg'),
(10, 'cfvbvfg', '435.464', '6010efe5d3124.jpeg'),
(11, 'Bentar Nugraha', '109.290', '6013d9a7bf95d.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_telphon` varchar(25) NOT NULL,
  `jumlah_donasi` varchar(25) NOT NULL,
  `melalui_bank` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`id`, `nama`, `no_telphon`, `jumlah_donasi`, `melalui_bank`, `keterangan`) VALUES
(1, 'sdfsdf', ' 2424242', 'sda', '3', '234242'),
(2, '65757', '567', '567', '2', '657'),
(3, '65757', '567', '567', '2', '657'),
(4, '65757', '567', '567', '2', '657'),
(5, '65757', '567', '567', '2', '657'),
(6, '65757', '567', '567', '2', '657'),
(15, 'test', '234', '234', '3', 'test'),
(16, 'test', '234', '234', '3', 'test'),
(17, 'test', '234', '234', '3', 'test'),
(18, 'test', '234', '234', '3', 'test'),
(19, 'a', '2', '3', '2', '2'),
(20, 'qwewqe', '234', '12', 'BRI', '3434');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galang_dana`
--

CREATE TABLE `galang_dana` (
  `id` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `cerita` varchar(100) NOT NULL,
  `foto_kampanye` varchar(25) NOT NULL,
  `waktu` int(11) DEFAULT NULL,
  `judul` varchar(25) NOT NULL,
  `tanggal_awal` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galang_dana`
--

INSERT INTO `galang_dana` (`id`, `target`, `nama`, `alamat`, `cerita`, `foto_kampanye`, `waktu`, `judul`, `tanggal_awal`, `tanggal_akhir`) VALUES
(1, 2, 'test', 'tes', 'saadadaa', '_overlays__pic___music_no', 30, 'test', '2021-02-16', '2021-02-17'),
(2, 10000, 'dskksksd', 'askaskk', 'kaskas', '5242576.jpg', 60, 'kaka', '2021-02-16', '2021-04-17'),
(3, 1000, 'tes', 'tes', 'tes', '1.0x0.jpg', 30, 'tes', '2021-02-16', '2021-03-18'),
(4, 200000, 'test', 'test', 'test', 'contoh.png', 9, 'test', '2021-02-16', '2021-02-25'),
(5, 30000, 'tet', 'test', 'tetttt', 'original.jpg', 30, 'test', '2021-02-16', '2021-03-18'),
(6, 400000, 'test', 'test', 'tes', 'mourinho-wenger.jpg', 9, 'tes', '2021-02-16', '2021-02-25'),
(7, 500000, 'test', 'test', 'test', 'mourinho-wenger.jpg', 6, 'test', '2021-02-16', '2021-02-25'),
(8, 10, 'membangun masjid', 'jln.mujahidin', 'membangun masjid untuk masyarakat setempat', 'visi.png', 30, 'masjid al-mujahidin', '2021-02-19', '2021-03-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_pembayaran`
--

CREATE TABLE `konfirmasi_pembayaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `rupiah` varchar(25) NOT NULL,
  `img` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfirmasi_pembayaran`
--

INSERT INTO `konfirmasi_pembayaran` (`id`, `nama`, `rupiah`, `img`) VALUES
(48, '1.jpg', '2.000.000', '1.jpg'),
(51, 'Bapak Joni', '2.500.000', 'a.jpg'),
(52, 'tes', '20.000.000', '00000.00_00_01_10.Still00'),
(53, 'tes', '20.000.000', 'a.jpg'),
(56, 'dsfs', '3.435.353', 'IMG_1611.JPG'),
(57, 'qwewqe', '6.757', 'MVI_9920.00_00_42_00.Stil'),
(58, 'Sri wahyuni', '232.422', '1.0x0.jpg'),
(59, 'sfsh', '23.424.242', '13671860_504408616436953_'),
(60, 'dgfdg', '345.345.353', '100_7907.JPG'),
(61, '', '', ''),
(62, 'dgfdg', '345.345.353', '100_7907.JPG'),
(63, '', '', ''),
(64, 'dsfdsf', '1.241.413', '100_7907.JPG'),
(65, 'sadad', '1.312.313.131', '100_6059.JPG'),
(66, 'sadad', '1.312.313.131', '2459.jpg'),
(67, 'ewrwr', '4.234.242', '2459.jpg'),
(68, 'anjingggg', '1,000,000,000', '2459.jpg'),
(69, 'tryr', '3,433,333', '2459.jpg'),
(70, 'tryr', '3,433,333', '2459.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(16, 'nasuha', 'nasuha@gmail.com', 'nasuha123', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, 'nasuha', 'nasudha@gmail.com', '1234', ''),
(23, 'Toko Deden', 'rio.umum18@gmail.com', 'dawdwa', ''),
(27, 'Toko Deden', 'buiis@dompet.com', 'adaw', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_login`
--

INSERT INTO `user_login` (`id`, `email`, `username`, `nama`) VALUES
(1, 'muhammadnassuha7@gmail.co', 'muhammad', 'muhammad nassuha'),
(2, 'muhammadnassuha7@gmail.co', 'muhammad', 'muhammad nassuha'),
(3, 'muhammadnassuha7@gmail.co', 'muhammad', 'muhammad nassuha'),
(4, 'muhammadnassuha7@gmail.co', 'muhammad', 'muhammad nassuha'),
(5, 'muhammadnassuha7@gmail.co', 'muhammad', 'muhammad nassuha'),
(6, 'muhammadnassuha7@gmail.co', 'muhammad', 'muhammad nassuha'),
(7, 'muhammadnassuha7@gmail.co', 'muhammad', 'muhammad nassuha'),
(8, 'muhammadnassuha7@gmail.co', 'muhammad', 'muhammad nassuha'),
(9, 'muhammadnassuha7@gmail.co', 'muhammad', 'muhammad nassuha'),
(10, 'muhammadnassuha7@gmail.co', 'muhammad', 'muhammad nassuha'),
(11, 'muhammadnassuha7@gmail.co', 'muhammad', 'muhammad nassuha'),
(12, 'muhammadnassuha7@gmail.co', 'muhammad', 'muhammad nassuha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `verifikasi_table`
--

CREATE TABLE `verifikasi_table` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `bukti_ktp` varchar(25) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `verifikasi_table`
--

INSERT INTO `verifikasi_table` (`id`, `nama`, `no_ktp`, `bukti_ktp`, `tanggal`, `keterangan`) VALUES
(1, 'adasdadad', '234242424242424242', '0', '0000-00-00 00:00:00', ''),
(2, 'adasdadad', '234242424242424242', '0', '0000-00-00 00:00:00', ''),
(3, 'erterte', '34535343', '1', '0000-00-00 00:00:00', ''),
(4, 'asdad', '1232131131', '1.jpg', '0000-00-00 00:00:00', ''),
(5, '2021-02-10', '23424234242', 'IMG_0234.JPG', '0000-00-00 00:00:00', 'sdfdsfsfsfdsfsfsfsffffffffffffffffffffffffffffffffffffffff'),
(6, 'fdgdgdg', '345353535', 'AAF.jpg', '2021-02-10 00:00:00', 'dgfffffffffffffffffffffffffffffffffffffffffffffffffffffffff'),
(7, 'fdgdgdg', '345353535', 'AAF.jpg', '2021-02-10 00:00:00', 'dgfffffffffffffffffffffffffffffffffffffffffffffffffffffffff'),
(29, 'dsada', '1231211', '16122874_172655506552118_', '2021-02-15 00:00:00', 'dsdada'),
(30, 'wewewfiwi', '3242424', '1.0x0.jpg', '2021-02-15 00:00:00', 'okdofkskfskso'),
(31, 'nasuha', '00199991999', 'thubnil WEBSITE 2-01.jpg', '2021-02-25 00:00:00', ''),
(32, '', '', '', '0000-00-00 00:00:00', ''),
(33, 'nasuha', '01928261817287', 'thubnil WEBSITE 2-01.jpg', '2021-02-19 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `galang_dana`
--
ALTER TABLE `galang_dana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `verifikasi_table`
--
ALTER TABLE `verifikasi_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT untuk tabel `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `galang_dana`
--
ALTER TABLE `galang_dana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `verifikasi_table`
--
ALTER TABLE `verifikasi_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
