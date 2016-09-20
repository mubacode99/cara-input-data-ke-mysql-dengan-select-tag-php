-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Sep 2016 pada 14.15
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fcrud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tehnik`
--

CREATE TABLE IF NOT EXISTS `tehnik` (
`id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tehnik`
--

INSERT INTO `tehnik` (`id`, `nim`, `nama`, `kelas`, `jurusan`) VALUES
(1, '1512510197', 'muhamad abdul mubarok', 'A', 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tehnik`
--
ALTER TABLE `tehnik`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tehnik`
--
ALTER TABLE `tehnik`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
