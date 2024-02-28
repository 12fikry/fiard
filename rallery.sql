-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 05:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `AlbumID` int(11) NOT NULL,
  `NamaAlbum` varchar(255) NOT NULL,
  `Deskripsi` text NOT NULL,
  `TanggalDibuat` date NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`AlbumID`, `NamaAlbum`, `Deskripsi`, `TanggalDibuat`, `UserID`) VALUES
(1, 'Example Album', 'Demonstrasi Album', '2024-02-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `IdFoto` int(11) NOT NULL,
  `JudulFoto` varchar(255) NOT NULL,
  `DeskripsiFoto` text NOT NULL,
  `TanggalUnggah` date NOT NULL,
  `LokasiFile` varchar(255) NOT NULL,
  `AlbumID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`IdFoto`, `JudulFoto`, `DeskripsiFoto`, `TanggalUnggah`, `LokasiFile`, `AlbumID`, `UserID`) VALUES
(50, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(51, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(53, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(54, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(55, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(56, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(57, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(58, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(59, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(60, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(61, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(62, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(63, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(64, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(65, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(66, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(67, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(68, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(69, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(70, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(71, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(72, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(73, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(74, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(75, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(76, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(77, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(78, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(79, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(80, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(81, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(82, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(83, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(84, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(85, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(86, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(87, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(88, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-20', 'Example.png', 1, 1),
(100, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-22', 'Example.png', 1, 1),
(101, 'Example', 'Demonstrasi Foto yang Diposting', '2024-02-22', 'Example.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `komentarfoto`
--

CREATE TABLE `komentarfoto` (
  `KomentarID` int(11) NOT NULL,
  `IdFoto` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `IsiKomentar` text NOT NULL,
  `TanggalKomentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `likefoto`
--

CREATE TABLE `likefoto` (
  `LikeID` int(11) NOT NULL,
  `IdFoto` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `TanggalLIke` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `NamaLengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `username`, `password`, `Email`, `NamaLengkap`, `alamat`) VALUES
(1, 'Test User', '0cbc6611f5540bd0809a388dc95a615b', 'User123@test.co', 'Test Account', 'Computer'),
(18, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`AlbumID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`IdFoto`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `AlbumID` (`AlbumID`);

--
-- Indexes for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD PRIMARY KEY (`KomentarID`),
  ADD KEY `IdFoto` (`IdFoto`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `likefoto`
--
ALTER TABLE `likefoto`
  ADD PRIMARY KEY (`LikeID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `IdFoto` (`IdFoto`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `AlbumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `IdFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  MODIFY `KomentarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `likefoto`
--
ALTER TABLE `likefoto`
  MODIFY `LikeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `foto_ibfk_2` FOREIGN KEY (`AlbumID`) REFERENCES `album` (`AlbumID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD CONSTRAINT `komentarfoto_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `komentarfoto_ibfk_2` FOREIGN KEY (`IdFoto`) REFERENCES `foto` (`IdFoto`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `likefoto`
--
ALTER TABLE `likefoto`
  ADD CONSTRAINT `likefoto_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `likefoto_ibfk_2` FOREIGN KEY (`IdFoto`) REFERENCES `foto` (`IdFoto`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
