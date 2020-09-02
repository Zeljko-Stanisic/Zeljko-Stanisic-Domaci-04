-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 06:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domaci_zadatak_br_8`
--

-- --------------------------------------------------------

--
-- Table structure for table `grad`
--

CREATE TABLE `grad` (
  `ID` int(11) NOT NULL,
  `Naziv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grad`
--

INSERT INTO `grad` (`ID`, `Naziv`) VALUES
(1, 'Podgorica'),
(2, 'Niksic'),
(3, 'Danilovgrad'),
(4, 'Budva'),
(5, 'Bar'),
(6, 'Herceg Novi'),
(7, 'Kotor'),
(8, 'Zabljak');

-- --------------------------------------------------------

--
-- Table structure for table `podnosilac`
--

CREATE TABLE `podnosilac` (
  `id` int(11) NOT NULL,
  `Ime` varchar(255) NOT NULL,
  `Prezime` varchar(255) NOT NULL,
  `JMBG` int(11) NOT NULL,
  `grad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podnosilac`
--

INSERT INTO `podnosilac` (`id`, `Ime`, `Prezime`, `JMBG`, `grad_id`) VALUES
(1, 'Zeljko', 'Stanisic', 123456, 1),
(2, 'lalla', ';lalalsa', 12315412, 5);

-- --------------------------------------------------------

--
-- Table structure for table `primjedba`
--

CREATE TABLE `primjedba` (
  `ID` int(11) NOT NULL,
  `Opis` varchar(255) NOT NULL,
  `slika_putanja` varchar(255) NOT NULL,
  `grad_id` int(11) NOT NULL,
  `podnosilac_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `primjedba`
--

INSERT INTO `primjedba` (`ID`, `Opis`, `slika_putanja`, `grad_id`, `podnosilac_id`) VALUES
(4, 'fvbkjjgh', './images/5f4a8fa7389a2.jpg', 3, 2),
(5, 'ugdtfdggjhojhigygcygvhihoj', './images/5f4cf369b272f.jpg', 5, 1),
(6, 'jhgfdfghjk', './images/5f4fc33cb797c.jpg', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grad`
--
ALTER TABLE `grad`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `podnosilac`
--
ALTER TABLE `podnosilac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `podnosilac_fk` (`grad_id`);

--
-- Indexes for table `primjedba`
--
ALTER TABLE `primjedba`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `primjedba_fk` (`grad_id`),
  ADD KEY `pimjedba2_fk` (`podnosilac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grad`
--
ALTER TABLE `grad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `podnosilac`
--
ALTER TABLE `podnosilac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `primjedba`
--
ALTER TABLE `primjedba`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `podnosilac`
--
ALTER TABLE `podnosilac`
  ADD CONSTRAINT `podnosilac_fk` FOREIGN KEY (`grad_id`) REFERENCES `grad` (`ID`);

--
-- Constraints for table `primjedba`
--
ALTER TABLE `primjedba`
  ADD CONSTRAINT `pimjedba2_fk` FOREIGN KEY (`podnosilac_id`) REFERENCES `podnosilac` (`ID`),
  ADD CONSTRAINT `primjedba_fk` FOREIGN KEY (`grad_id`) REFERENCES `grad` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
