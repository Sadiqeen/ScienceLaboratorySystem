-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2018 at 10:03 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sciencelab`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow_chemical`
--

CREATE TABLE `borrow_chemical` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `chemical_id` varchar(10) NOT NULL,
  `Consentration` float NOT NULL,
  `Quantity` float NOT NULL,
  `borrow_date` date NOT NULL,
  `status` int(10) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow_chemical`
--

INSERT INTO `borrow_chemical` (`id`, `user_id`, `chemical_id`, `Consentration`, `Quantity`, `borrow_date`, `status`, `last_update`) VALUES
(1, 581431016, 'B 14', 0.456, 1, '2017-11-05', 7, '2018-06-12 17:43:33'),
(3, 571436005, 'A 35', 0.65, 4, '2017-11-05', 4, '2018-06-11 12:33:31'),
(5, 571436005, '251dsa', 0.25, 7, '2017-11-05', 4, '2018-06-11 12:30:02'),
(6, 571436005, 'A 36', 0.259, 5, '2017-11-05', 4, '2018-06-11 12:33:31'),
(7, 571436005, 'B 3', 0.62, 4, '2017-11-05', 4, '2018-06-11 12:33:31'),
(8, 571436005, 'B 6', 156, 4, '2017-11-05', 4, '2018-06-11 12:33:31'),
(9, 571436005, 'B 13 ', 0.3, 8, '2017-11-05', 4, '2018-06-11 12:33:31'),
(10, 571436005, 'B 5 ', 36, 3, '2017-11-05', 4, '2018-06-11 12:33:31'),
(11, 571436005, 'A 32 ', 0.25, 9, '2017-11-06', 4, '2018-06-11 12:33:31'),
(12, 571436005, 'A 36', 0.69, 3, '2017-11-14', 4, '2018-06-11 12:33:31'),
(13, 571436005, 'A 37', 25, 2, '2017-11-06', 4, '2018-06-11 12:33:31'),
(14, 571436005, '16', 36, 7, '2017-11-06', 4, '2018-06-11 12:33:31'),
(15, 571436005, '16', 26, 8, '2017-11-06', 4, '2018-06-11 12:33:31'),
(16, 571436005, 'A1', 0.23, 8, '2017-11-06', 4, '2018-06-11 12:33:31'),
(17, 571436005, 'A1', 0.25, 6, '2017-11-07', 4, '2018-06-11 12:33:31'),
(18, 571436005, '16', 0.25, 63, '2017-11-07', 4, '2018-06-11 12:33:31'),
(19, 571436005, 'A 36', 0.1, 25, '2017-11-07', 4, '2018-06-11 12:33:31'),
(20, 602443026, 'A 30', 0.25, 25, '2017-11-07', 4, '2018-06-11 12:33:31'),
(21, 602443026, 'A11', 0.25, 36, '2017-11-07', 4, '2018-06-11 12:33:31'),
(22, 581431016, 'SV28', 2, 111, '2018-03-17', 6, '2018-06-12 17:45:28'),
(23, 581431016, 'SV1', 3, 111, '2018-03-17', 7, '2018-06-12 17:45:31'),
(24, 581431016, 'A15', 6, 6, '2018-03-17', 6, '2018-06-12 17:45:36'),
(25, 581431016, 'A25', 3, 2, '2018-03-17', 7, '2018-06-12 17:45:40'),
(26, 581431016, 'SV2', 3, 2, '2018-03-23', 8, '2018-06-11 12:51:45'),
(27, 581431016, 'SV60', 2, 2, '2018-03-29', 8, '2018-06-11 12:51:45'),
(28, 581431016, 'A 31', 3, 3, '2018-04-06', 8, '2018-06-11 12:51:45'),
(29, 581431016, 'A 32 ', 6, 4, '2018-04-06', 8, '2018-06-11 12:46:11'),
(30, 581431016, 'A 32 ', 3.6, 3.6, '2018-04-06', 8, '2018-06-11 12:46:11'),
(31, 581431016, 'A27', 3.5, 3.6, '2018-04-06', 8, '2018-06-11 12:46:11'),
(32, 581431016, 'A21', 6.6, 1, '2018-04-06', 6, '2018-06-12 17:45:18'),
(33, 581431016, 'AC1', 4.5, 4.5, '2018-04-06', 7, '2018-06-12 17:45:24'),
(35, 581431016, 'A29', 369, 789, '2018-04-14', 8, '2018-06-11 12:46:11'),
(36, 581431016, 'B 13 ', 2, 111, '2018-04-14', 8, '2018-06-11 12:46:11'),
(66, 581431016, 'A 37', 2.5, 5, '2018-06-08', 8, '2018-06-11 12:45:50'),
(67, 581431016, 'C 2', 1, 2, '2018-06-08', 8, '2018-06-11 12:45:50'),
(68, 581431016, 'C 2', 3, 2, '2018-06-08', 8, '2018-06-11 12:46:11'),
(69, 581431016, 'A23', 12.2, 2, '2018-06-08', 8, '2018-06-11 12:46:11'),
(70, 581431016, 'C 2', 1, 2, '2018-06-09', 8, '2018-06-11 12:45:50'),
(71, 581431016, 'C 5', 2, 2, '2018-06-09', 8, '2018-06-11 12:46:11'),
(72, 581431016, 'C 3', 1, 3, '2018-06-11', 8, '2018-06-11 12:52:07'),
(73, 581431016, 'C 6', 4, 2, '2018-06-11', 8, '2018-06-11 12:52:09'),
(74, 581431016, 'SV31', 4, 2, '2018-06-11', 8, '2018-06-11 12:52:11'),
(75, 581431016, 'C 3', 1, 2, '2018-06-11', 8, '2018-06-13 13:49:20'),
(76, 581431016, 'C 4', 2, 3, '2018-06-12', 8, '2018-06-13 13:49:13'),
(77, 581431016, 'C 2', 1, 1, '2018-06-12', 8, '2018-06-13 13:49:11'),
(78, 581431016, 'SV28', 3, 3, '2018-06-12', 8, '2018-06-13 13:49:15'),
(79, 581431016, 'B 9', 3, 2, '2018-06-12', 8, '2018-06-13 13:49:17'),
(80, 581431016, 'A 37', 1, 2, '2018-06-13', 8, '2018-06-13 13:50:08'),
(81, 581431016, 'C 4', 0.6, 7, '2018-06-19', 8, '2018-06-19 08:31:41'),
(82, 581431016, 'C 5', 1, 1, '2018-06-19', 3, '2018-06-23 16:14:15'),
(83, 581431016, 'C 2', 2.5, 2.5, '2018-06-19', 3, '2018-06-23 16:16:30'),
(84, 581431016, 'C 6', 1, 1, '2018-06-23', 8, '2018-06-25 12:34:24'),
(85, 581431016, 'SV28', 1, 1, '2018-06-23', 8, '2018-06-25 12:34:24'),
(86, 581431016, 'B 9', 1, 1, '2018-06-23', 3, '2018-06-23 16:25:35'),
(87, 581431016, 'C 4', 1, 1, '2018-06-23', 8, '2018-06-25 12:34:24'),
(88, 581431016, 'C 3', 1, 2, '2018-06-25', 8, '2018-06-25 12:34:24'),
(89, 581431016, 'SV2', 1, 1, '2018-06-25', 3, '2018-06-25 13:37:52'),
(90, 581431016, 'C 6', 1, 1, '2018-06-25', 2, '2018-06-25 13:37:59'),
(91, 581431016, 'A 37', 32, 12, '2018-06-26', 2, '2018-06-26 12:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_equipment`
--

CREATE TABLE `borrow_equipment` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `equipment_id` int(10) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Quantity_return` int(11) DEFAULT NULL,
  `borrow_date` date NOT NULL,
  `return_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow_equipment`
--

INSERT INTO `borrow_equipment` (`id`, `user_id`, `equipment_id`, `Quantity`, `Quantity_return`, `borrow_date`, `return_date`, `status`, `last_update`) VALUES
(1, 571436005, 79, 2, 0, '2017-11-05', '2017-11-08', '5', '2018-06-12 11:24:27'),
(2, 571436005, 9, 25, 0, '2017-11-05', '2017-11-12', '5', '2018-06-12 11:24:27'),
(3, 571436005, 74, 36, 0, '2017-11-05', '2017-11-12', '5', '2018-06-12 11:24:27'),
(4, 571436005, 10, 3, 0, '2017-11-05', '2017-11-07', '5', '2018-06-12 11:24:27'),
(5, 571436005, 10, 0, 0, '2017-11-06', '2017-11-07', '5', '2018-06-12 11:24:27'),
(6, 571436005, 3, 5, 0, '2017-11-06', '2017-11-07', '5', '2018-06-12 11:24:27'),
(7, 571436005, 3, 20, 0, '2017-11-06', '2017-11-13', '5', '2018-06-12 11:24:27'),
(8, 602443026, 2, 111, 0, '2017-11-07', '2017-11-14', '3', '2018-06-19 16:16:46'),
(9, 602443026, 8, 23, 0, '2017-11-07', '2017-11-14', '5', '2018-06-12 11:24:27'),
(10, 581431016, 8, 3, 0, '2018-03-17', '2018-03-24', '5', '2018-06-12 11:24:27'),
(11, 581431016, 7, 6, 0, '2018-03-17', '2018-03-24', '5', '2018-06-12 11:24:27'),
(12, 581431016, 7, 55, 0, '2018-04-07', '2018-04-14', '5', '2018-06-12 11:24:27'),
(13, 581431016, 7, 55, 0, '2018-04-07', '2018-04-14', '5', '2018-06-12 11:24:27'),
(14, 581431016, 7, 55, 0, '2018-04-07', '2018-04-14', '5', '2018-06-12 11:24:27'),
(15, 581431016, 8, 654, 0, '2018-04-07', '2018-04-14', '8', '2018-06-30 04:01:45'),
(16, 581431016, 1, 369, 0, '2018-04-07', '2018-04-14', '5', '2018-06-12 11:24:27'),
(17, 581431016, 4, 741, 0, '2018-04-07', '2018-04-14', '5', '2018-06-12 11:24:27'),
(18, 581431016, 75, 369, 0, '2018-04-07', '2018-04-14', '7', '2018-06-12 17:40:19'),
(19, 581431016, 7, 2, 0, '2018-04-07', '2018-04-14', '8', '2018-06-12 17:40:23'),
(20, 581431016, 75, 2, 0, '2018-04-07', '2018-04-14', '5', '2018-06-12 11:24:27'),
(21, 581431016, 75, 2, 0, '2018-04-07', '2018-04-14', '5', '2018-06-12 11:24:27'),
(22, 581431016, 73, 36, 0, '2018-04-08', '2018-04-15', '5', '2018-06-12 11:24:27'),
(23, 581431016, 6, 1, 0, '2018-04-08', '2018-04-15', '5', '2018-06-12 11:24:27'),
(24, 581431016, 3, 2, 0, '2018-04-08', '2018-04-15', '5', '2018-06-12 11:24:27'),
(25, 581431016, 2, 2, 0, '2018-04-08', '2018-04-15', '5', '2018-06-12 11:24:27'),
(26, 581431016, 10, 2, 0, '2018-04-08', '2018-04-15', '5', '2018-06-12 11:24:27'),
(27, 581431016, 9, 2, 0, '2018-04-08', '2018-04-15', '6', '2018-06-12 17:40:13'),
(28, 581431016, 5, 2, 0, '2018-04-08', '2018-04-15', '8', '2018-06-30 04:01:45'),
(29, 581431016, 28, 21, 0, '2018-04-08', '2018-04-15', '8', '2018-06-30 04:01:52'),
(30, 581431016, 26, 30, 0, '2018-04-08', '2018-04-15', '5', '2018-06-12 11:24:27'),
(31, 581431016, 28, 1, 0, '2018-06-06', '2018-06-13', '8', '2018-06-30 04:01:45'),
(32, 581431016, 0, 1, 0, '2018-06-06', '2018-06-13', '5', '2018-06-12 11:24:27'),
(33, 581431016, 0, 1, 0, '2018-06-06', '2018-06-13', '5', '2018-06-12 11:24:27'),
(34, 581431016, 0, 1, 0, '2018-06-06', '2018-06-13', '5', '2018-06-12 11:24:27'),
(35, 581431016, 0, 1, 0, '2018-06-06', '2018-06-13', '5', '2018-06-12 11:24:27'),
(36, 581431016, 21, 3, 0, '2018-06-06', '2018-06-13', '5', '2018-06-12 11:24:27'),
(37, 581431016, 19, 1, 0, '2018-06-06', '2018-06-13', '5', '2018-06-12 11:24:27'),
(38, 581431016, 27, 1, 0, '2018-06-06', '2018-06-13', '5', '2018-06-12 11:24:27'),
(39, 581431016, 56, 1, 0, '2018-06-06', '2018-06-13', '5', '2018-06-12 11:24:27'),
(40, 581431016, 18, 1, 0, '2018-06-06', '2018-06-13', '5', '2018-06-12 11:24:27'),
(41, 581431016, 34, 3, 0, '2018-06-06', '2018-06-13', '5', '2018-06-12 11:24:27'),
(42, 581431016, 31, 13, 0, '2018-06-08', '2018-06-15', '5', '2018-06-12 11:24:27'),
(43, 581431016, 1, 3, 0, '2018-06-09', '2018-06-16', '5', '2018-06-12 11:24:27'),
(44, 581431016, 4, 0, 0, '2018-06-10', '2018-06-17', '5', '2018-06-12 11:24:27'),
(45, 581431016, 1, 26, 0, '2018-06-11', '2018-06-18', '5', '2018-06-12 11:24:27'),
(46, 581431016, 9, 9, 0, '2018-06-19', '2018-06-26', '8', '2018-06-30 04:01:52'),
(47, 581431016, 5, 30, NULL, '2018-06-30', '2018-07-07', '4', '2018-06-30 04:20:10'),
(48, 581431016, 9, 2, NULL, '2018-06-30', '2018-07-07', '4', '2018-06-30 04:21:27'),
(49, 581431016, 37, 21, NULL, '2018-06-30', '2018-07-07', '2', '2018-06-30 04:21:56'),
(50, 581431016, 43, 17, NULL, '2018-06-30', '2018-07-07', '3', '2018-06-30 05:18:54'),
(51, 581431016, 44, 32, NULL, '2018-06-30', '2018-07-07', '4', '2018-06-30 05:18:57'),
(52, 581431016, 47, 44, NULL, '2018-06-30', '2018-07-07', '2', '2018-06-30 04:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `chemical`
--

CREATE TABLE `chemical` (
  `ID` varchar(10) NOT NULL,
  `chemical` varchar(50) NOT NULL,
  `chemical_fomula` varchar(30) NOT NULL,
  `expire_date` date NOT NULL,
  `order_date` date NOT NULL,
  `price` int(10) NOT NULL,
  `storage` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemical`
--

INSERT INTO `chemical` (`ID`, `chemical`, `chemical_fomula`, `expire_date`, `order_date`, `price`, `storage`, `status`) VALUES
('16', 'Anthracene', 'C14H10', '2020-01-01', '2017-01-01', 0, 2, 1),
('A 30', 'Amyloglucosidase from aspergillus', '', '2020-01-01', '2017-01-01', 0, 0, 1),
('A 31', 'Alpha amylase', '', '2020-01-01', '2017-01-01', 0, 0, 1),
('A 32 ', 'Amino acid standards', '', '2020-01-01', '2017-01-01', 0, 0, 1),
('A 33 ', 'Albumin from bovine serrum', '', '2020-01-01', '2017-01-01', 0, 0, 1),
('A 34 ', 'Acrylamide', 'C3H5NO', '2020-01-01', '2017-01-01', 0, 0, 1),
('A 35', 'Ammonium molybdate tetra hydrate', 'H24Mo7N6O24.4H2O', '2020-01-01', '2017-01-01', 0, 0, 1),
('A 36', 'di-Ammonium Hydragen citrate', 'C6H5O7(NH4)2H', '2560-11-08', '2560-11-08', 0, 0, 1),
('A 37', '2,2\'-Azino - bis ', '', '2020-01-01', '2017-01-01', 0, 0, 1),
('A1', 'Activated Charcoal', '', '2020-01-01', '2017-01-01', 0, 2, 1),
('A10', 'Ammonium oxalate 1 hydrate', '(COONH4)2.H2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('A11', 'Ammonium sulphate', '(NH4)2SO4', '2020-01-01', '2017-01-01', 0, 2, 1),
('A12', 'Ammonium Iron(II) sulfate hexahydrate', '(NH4)2Fe(SO4).6H2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('A13', 'Ammonium Tiocyanate ', 'NH4SCN', '2020-01-01', '2017-01-01', 0, 2, 1),
('A14', 'di-Ammonium Hydrogeen phosphase', '(NH4)2HPO4', '2020-01-01', '2017-01-01', 0, 2, 1),
('A15', 'Acetenilide', 'C8H9NO', '2020-01-01', '2017-01-01', 0, 2, 1),
('A17', 'L-Alanine', 'C3H7NO2', '2020-01-01', '2017-01-01', 0, 2, 1),
('A18', 'L-Alpartic acid', 'C4HONO4', '2020-01-01', '2017-01-01', 0, 2, 1),
('A19', 'Aluminium ceric nitrate', '(NH4)2Ce(NO3)6', '2020-01-01', '2017-01-01', 0, 2, 1),
('A2', 'Agarose', '', '2020-01-01', '2017-01-01', 0, 2, 1),
('A20', 'Aluminium hydroxide ', 'A1(OH)3.xH2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('A21', 'Ammonium nitrate', 'NH4NO3', '2020-01-01', '2017-01-01', 0, 2, 1),
('A22', 'Albumin from Chicken egg', '', '2020-01-01', '2017-01-01', 0, 3, 1),
('A23', 'Albumin Chloride', 'AICI3.xH2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('A24', 'Ammonium metavenadate', 'NH4VO3', '2020-01-01', '2017-01-01', 0, 2, 1),
('A25', 'Antimony(III)chloride', 'SbCI3', '2020-01-01', '2017-01-01', 0, 2, 1),
('A26', 'Ammonium(+)tartarte', '(NH2)2C4H4O6', '2020-01-01', '2017-01-01', 0, 0, 1),
('A27', 'Ammonium dihydrogen orthephosHate', 'NH4H2PO4', '2020-01-01', '2017-01-01', 0, 0, 1),
('A28', 'L(+)Ascorbic acid', 'OCH', '2020-01-01', '2017-01-01', 0, 0, 1),
('A29', 'Ammonium persulphate', '(NH4)2S2O8', '2020-01-01', '2017-01-01', 0, 0, 1),
('A3', 'Alcian Blue', 'C56H68C14CuN16S4', '2020-01-01', '2017-01-01', 0, 2, 1),
('A38', 'ANTIMong fotassium(+)TATRATE', 'C8H4h2O12b23H2o', '2020-01-01', '2017-01-01', 0, 0, 1),
('A4', 'Alizarin red', 'C14H9O7SNa', '2020-01-01', '2017-01-01', 0, 2, 1),
('A5', 'Aluminium Nitrate', 'A1(NO.3)3.9H2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('A6', 'Aluminon', 'C22H23N3O0', '2020-01-01', '2017-01-01', 0, 2, 1),
('A7 ', 'Ammonium acetate', 'CH3COONH4', '2020-01-01', '2017-01-01', 0, 2, 1),
('A8', 'Ammonium chloride', 'NH4CI', '2020-01-01', '2017-01-01', 0, 2, 1),
('A9', 'Ammonium Molybdate powder', '(NH4)6Mo7O24.4H2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('AC', 'Acetic acid Glacial', 'CH3COOH', '2020-01-01', '2017-01-01', 0, 0, 1),
('AC1', 'Acetic acid', 'CH3COOH', '2020-01-01', '2017-01-01', 0, 4, 1),
('B 1', 'Barium chloride 2 hydrate', 'BaCl2.2H2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('B 10', 'Buffer solution (Phtalate) pH 4.00', '', '2020-01-01', '2017-01-01', 0, 3, 1),
('B 11', 'Buffer solution (Phosphate) pH 7.00', '', '2020-01-01', '2017-01-01', 0, 3, 1),
('B 12', 'Buffer solution (Borate) pH 10.00', '', '2020-01-01', '2017-01-01', 0, 3, 1),
('B 13 ', 'Bismuth (III)Chloride', 'BiCl3', '2020-01-01', '2017-01-01', 0, 2, 1),
('B 14', 'Bromocresol green', 'C21H14Br4O5S', '2020-01-01', '2017-01-01', 0, 2, 1),
('B 15', 'Blue Dextran', '', '2020-01-01', '2017-01-01', 0, 0, 1),
('B 16', 'Bismuth nitrate pentahydrate', 'Bi(NO3)3.5H2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('B 17', 'Benomyl', 'C14H18N403', '2020-01-01', '2017-01-01', 0, 2, 1),
('B 18', 'Brilliant Blue G - 250', 'C47H48N3O7S2Na', '2020-01-01', '2017-01-01', 0, 0, 1),
('B 19', 'Butylate Hydroxy toluene', 'C15H24O', '2020-01-01', '2017-01-01', 0, 2, 1),
('B 2 ', 'Barium hydroxide 8 hydrate', 'Ba(OH)2.8H2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('B 3', 'Barium Nitrate', 'Ba(NO3)2', '2020-01-01', '2017-01-01', 0, 2, 1),
('B 4 ', 'Benzoic acid', 'C6H5COOH', '2020-01-01', '2017-01-01', 0, 2, 1),
('B 5 ', 'Brilliant Green', '', '2020-01-01', '2017-01-01', 0, 2, 1),
('B 6', 'Bromophenol Blue', 'C19H10Br4O5S', '2020-01-01', '2017-01-01', 0, 2, 1),
('B 7', 'Bromothymol Blue', 'C27H28Br2O5S', '2020-01-01', '2017-01-01', 0, 2, 1),
('B 8', 'Boric acid', 'H3BO3', '2020-01-01', '2017-01-01', 0, 2, 1),
('B 9', '6 - Benzylaminopurine', 'C12H11N5', '2020-01-01', '2017-01-01', 0, 3, 1),
('C 1', 'Cadmium nitrate 4 hydrate', 'Cd(NO3)2.4H2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 10', 'Cobalt (II) chlride 6 Hydrate', '', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 11', 'Cobalt (II) Nitrate 6 hydrate', 'Co(NO3)2 . 6H2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 12', 'Copper Metel ( Gold)', 'Cu', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 13', 'Copper (II) Nitrate', 'Cu(NO3)2. 2.5H2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 14', 'Cupric acetate monohydrate', '(CH3COO)2Cu.H2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 15', 'Coprous Oxide', 'CuO', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 16', 'Crystal violet', 'C25H30ClN3', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 2', ' Calcium Carbonate', 'C3CO3', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 3', ' Calcium Chlorride dried', 'CaCl2', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 4', ' Calcium Hydroxide', 'CaOH', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 5', ' Calcium Hypochloride', 'Ca(OCl)2', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 6', ' Calcium Nitrate', 'Ca(NO3)2 . 4H2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 7', 'Carmine', '', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 8 ', 'Chloral hydrate', 'CCl3CH(OH)2', '2020-01-01', '2017-01-01', 0, 2, 1),
('C 9', 'Chromium(III)Nitrate', 'Cr(NO3)3 . 9H2O', '2020-01-01', '2017-01-01', 0, 2, 1),
('SV1', 'Acetone', 'CH3 - CO - CH3', '2020-01-01', '2017-01-01', 0, 1, 1),
('SV2', '25% Ammonia solution', 'NH3', '2020-01-01', '2017-01-01', 0, 1, 1),
('SV28', '99% Bromine', 'Br2', '2020-01-01', '2017-01-01', 0, 4, 1),
('SV29', 'n-Butyric acid(propyformic acid)', 'C4H8O2', '2020-01-01', '2017-01-01', 0, 1, 1),
('SV3', 'Ammonium hydroxide', 'NH4OH', '2020-01-01', '2017-01-01', 0, 1, 1),
('SV31', '99% Aniline', 'C6H5NH2', '2020-01-01', '2017-01-01', 0, 1, 1),
('SV38', 'Acetonitrile', 'CH3CN', '2020-01-01', '2017-01-01', 0, 1, 1),
('SV39', 'I-Bromopropane(n-propy bromide)', 'C3H7Br', '2020-01-01', '2017-01-01', 0, 1, 1),
('SV4', 'Benzaldehyde(pure)', 'C7H6O7', '2020-01-01', '2017-01-01', 0, 1, 1),
('SV40', 'I-Bromobutane(n-butyI bromide)', 'C4H9Br', '2020-01-01', '2017-01-01', 0, 1, 1),
('SV5', 'Benzene', 'C6H6', '2020-01-01', '2017-01-01', 0, 1, 1),
('SV6', 'n-Butanol (I-Butano, Butyl alcoha)', 'C4H10O', '2020-01-01', '2017-01-01', 0, 1, 1),
('SV60', 'Acetaldehyde', 'CH3CHO', '2020-01-01', '2017-01-01', 0, 0, 1),
('SV7', 'sec-Butanol(I-MethyI-I-propanol,2-butanol)', 'C4H9O', '2020-01-01', '2017-01-01', 0, 1, 1),
('SV8', 'tert-Butanol(2-MethyI-2-propanol)', 'C4H8O', '2020-01-01', '2017-01-01', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`, `permission`) VALUES
(1, 'เทคโนโลยีสารสนเทศ', 2),
(2, 'วิจัยและพัฒนาผลิตภัณฑ์อาหารฮาลาล', 2),
(3, 'การสอนวิทยาศาสตร์ทั่วไป', 2),
(4, 'อาจารย์ประจำห้องเคมี', 1);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `Equipment` varchar(50) NOT NULL,
  `Ordered` date NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(30) NOT NULL,
  `brand` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `Equipment`, `Ordered`, `Price`, `Quantity`, `brand`) VALUES
(1, 'Adapter', '2017-01-01', 950, 30, 0),
(2, 'Beaker 50 mL', '2017-01-01', 63, 10, 1),
(3, 'Beaker 100 mL', '2017-01-01', 72, 100, 1),
(4, 'Beaker 250', '2017-01-01', 78, 50, 1),
(5, 'Beaker 600 mL', '2017-01-01', 98, 30, 1),
(6, 'Beaker 1000 mL', '2017-01-01', 140, 30, 1),
(7, 'Beaker 200 mL', '2017-01-01', 240, 30, 1),
(8, 'Beaker with hedle (PP) 1000 mL', '2017-01-01', 113, 10, 2),
(9, 'Beaker with hedle (PP)  3000 mL', '2017-01-01', 130, 10, 2),
(10, 'Boiling flask  250 mL', '2017-01-01', 480, 30, 1),
(11, 'Bottle W. Dropper  30 mL', '2017-01-01', 20, 100, 3),
(12, 'Bottle W. Dropper 60 mL', '2017-01-01', 25, 100, 3),
(13, 'Bottle amber narrow mouth 125 mL', '2017-01-01', 35, 50, 4),
(14, 'Bottle amber narrow mouth 250 mL', '2017-01-01', 55, 50, 4),
(15, 'Bottle amber narrow mouth 500 mL', '2017-01-01', 70, 30, 4),
(16, 'Bottle amber narrow mouth 1000 mL', '2017-01-01', 85, 20, 4),
(17, 'Burette 50 mL', '2017-01-01', 700, 30, 0),
(18, 'Condenser', '2017-01-01', 950, 30, 0),
(19, 'Crucible 101/45 50 mL', '2017-01-01', 195, 30, 5),
(20, 'Cylinder  5 mL', '2017-01-01', 185, 30, 6),
(21, 'Cylinder  10 mL', '2017-01-01', 140, 30, 6),
(22, 'Cylinder  25 mL', '2017-01-01', 176, 30, 6),
(23, 'Cylinder  50 mL', '2017-01-01', 148, 30, 6),
(24, 'Cylinder  100 mL', '2017-01-01', 210, 30, 6),
(25, 'Cylinder PP  10 mL', '2017-01-01', 50, 30, 7),
(26, 'Cylinder PP  25 mL', '2017-01-01', 100, 30, 7),
(27, 'Cylinder PP  50 mL', '2017-01-01', 109, 30, 7),
(28, 'Cylinder PP  100 mL', '2017-01-01', 109, 30, 7),
(29, 'Cylinder PP  250 mL', '2017-01-01', 160, 20, 7),
(30, 'Cylinder PP  500 mL', '2017-01-01', 225, 10, 7),
(31, 'Distilling Head', '2017-01-01', 950, 30, 0),
(32, 'Erlenmeyer flask  100 mL', '2017-01-01', 65, 50, 6),
(33, 'Erlenmeyer flask  125 mL', '2017-01-01', 102, 50, 1),
(34, 'Erlenmeyer flask  250 mL', '2017-01-01', 105, 50, 1),
(35, 'Erlenmeyer flask  500 mL', '2017-01-01', 136, 50, 1),
(36, 'Filtering flask 500 mL', '2017-01-01', 120, 30, 0),
(37, 'fractionating column', '2017-01-01', 680, 30, 0),
(38, 'Foreeps Tipped 13 cm', '2017-01-01', 80, 30, 0),
(39, 'Foreeps Tipped 14 cm', '2017-01-01', 160, 30, 0),
(40, 'Filter Funnel AE 75 mm.', '2017-01-01', 35, 30, 4),
(41, 'Gauza with asbestos 5"', '2017-01-01', 30, 30, 0),
(42, 'Loop', '2017-01-01', 16, 30, 0),
(43, 'Magnetic bar 25 mm.', '2017-01-01', 110, 20, 0),
(44, 'Measurig Pipett  1 mL', '2017-01-01', 22, 100, 0),
(45, 'Measurig Pipett  2 mL', '2017-01-01', 23, 100, 0),
(46, 'Measurig Pipett  5 mL', '2017-01-01', 26, 50, 0),
(47, 'Measurig Pipett  10 mL', '2017-01-01', 29, 50, 0),
(48, 'needle', '2017-01-01', 25, 30, 0),
(49, 'Vol.Pipett  5 ml', '2017-01-01', 70, 50, 0),
(50, 'Vol.Pipett  10 ml', '2017-01-01', 75, 50, 0),
(51, 'Vol.Pipett 25 ml', '2017-01-01', 95, 50, 0),
(52, 'Petri Dish 15*100 mm.', '2017-01-01', 30, 200, 0),
(53, 'Round bottom flask (24/29) 100 ml.', '2017-01-01', 290, 30, 8),
(54, 'Round bottom flask (24/29) 50 ml.', '2017-01-01', 290, 30, 8),
(55, 'Sepatory funnel 125 mL', '2017-01-01', 230, 30, 9),
(56, 'Sepatory funnel 250 mL', '2017-01-01', 252, 30, 6),
(57, 'Spreader ', '2017-01-01', 28, 50, 0),
(58, 'Spetular No. 20', '2017-01-01', 99, 50, 0),
(59, 'Spetular No. 24', '2017-01-01', 103, 50, 0),
(60, 'Starring rod', '2017-01-01', 15, 50, 0),
(61, 'Test tude 13*100 mm', '2017-01-01', 12, 100, 1),
(62, 'Test tude 16*100 mm', '2017-01-01', 16, 100, 1),
(63, 'Test tude 25*100 mm', '2017-01-01', 36, 50, 0),
(64, 'Thermometer 100.C', '2017-01-01', 55, 30, 10),
(65, 'Thermometer 200.C', '2017-01-01', 90, 30, 10),
(66, 'Tripot', '2017-01-01', 75, 30, 0),
(67, 'Thiele tube ', '2017-01-01', 400, 30, 0),
(68, 'Volumetric flask 25 mL', '2017-01-01', 160, 50, 9),
(69, 'Volumetric flask 50 mL', '2017-01-01', 185, 50, 9),
(70, 'Volumetric flask 100 mL', '2017-01-01', 225, 50, 0),
(71, 'Volumetric flask 200 mL', '2017-01-01', 276, 50, 0),
(72, 'Volumetric flask 250 mL', '2017-01-01', 280, 50, 0),
(73, 'Volumetric flask 500 mL', '2017-01-01', 380, 20, 0),
(74, 'Volumetric flask 1000 mL', '2017-01-01', 620, 20, 0),
(75, 'Watch glass 70 mm.', '2017-01-01', 13, 30, 4),
(76, 'Watch glass 10 mm.', '2017-01-01', 21, 0, 0),
(77, 'Watch glass 15 mm.', '2017-01-01', 31, 0, 0),
(78, 'Slide Glass', '2017-01-01', 0, 0, 0),
(79, 'Filter Paper No. 3 dia 9 cm Whatman', '2017-01-01', 535, 0, 0),
(80, 'Filter Paper No. 1 dia 7 cm Whatman', '2017-01-01', 180, 0, 0),
(81, 'Filter Paper No. 1 dia 12.5 cm Whatman', '2017-01-01', 225, 0, 0),
(82, 'Filter Paper No. 1 dia 11 cm Whatman', '2017-01-01', 210, 0, 0),
(83, 'Lenticular corrugated tube', '2017-01-01', 24, 30, 0),
(84, 'Slides', '2017-01-01', 35, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `e_brand`
--

CREATE TABLE `e_brand` (
  `id` int(11) NOT NULL,
  `Brand` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_brand`
--

INSERT INTO `e_brand` (`id`, `Brand`) VALUES
(10, 'ALC'),
(3, 'Amber'),
(6, 'Bomex'),
(4, 'China'),
(8, 'Favorit'),
(5, 'HCT'),
(9, 'JSGW'),
(2, 'LP'),
(1, 'Pyrex'),
(0, 'Unknown'),
(7, 'Vitlab');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `url` text COLLATE ucs2_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `url`) VALUES
(2, '../dist/img/avatar2.png'),
(3, '../dist/img/avatar3.png'),
(4, '../dist/img/avatar4.png'),
(5, '../dist/img/avatar5.png');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(0, 'Doesn\'t have'),
(1, 'Have'),
(2, 'กำลังดำเนินการ'),
(3, 'อนุมัติ(รอการตอบกลับ)'),
(4, 'ถูกปฏิเสธ'),
(5, 'รอการคืน'),
(6, 'ทำรายการสำเร็จ'),
(7, 'การทำรายการถูกปฏิเสธ'),
(8, 'ถูกยกเลิกโดยผู้ใช้');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `id` int(11) NOT NULL,
  `Place` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`id`, `Place`) VALUES
(1, 'cabinet NO.1'),
(2, 'cabinet NO.2'),
(3, 'refrigerator'),
(4, 'Suction cabinet'),
(0, 'Unknow');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `password` varchar(200) NOT NULL,
  `position` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `position`, `status`) VALUES
(581431016, '$2y$10$NCNps60V/6l/sJGnrjrlguvnO6xLdFkirJCAa2MPpJtQq/DgguwpK', '2', '1'),
(581431017, '$2y$10$S8hjLnma8kW.yRQIgbCJqOOAbGVe4kV8dd3MmP4vgNT/whkW5hGgK', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `userstatus`
--

CREATE TABLE `userstatus` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userstatus`
--

INSERT INTO `userstatus` (`id`, `status`) VALUES
(1, 'Available'),
(2, 'Ban');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `fname` varchar(50) COLLATE ucs2_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE ucs2_unicode_ci NOT NULL,
  `profile_img` text COLLATE ucs2_unicode_ci NOT NULL,
  `skin` varchar(20) COLLATE ucs2_unicode_ci NOT NULL DEFAULT 'skin-blue',
  `department_id` int(10) NOT NULL,
  `phone_number` varchar(10) COLLATE ucs2_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE ucs2_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `fname`, `lname`, `profile_img`, `skin`, `department_id`, `phone_number`, `email`) VALUES
(1, 581431016, 'ศราวุธ', 'รักชาติ', '4', 'skin-green', 3, '894764898', 'finixlllsarawut@gmail.com'),
(2, 581431017, 'ศราวุธ', 'รักชาติ', '5', 'skin-blue', 4, '0850804110', 'finixlllsarawut@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_unregis`
--

CREATE TABLE `user_unregis` (
  `id` int(11) NOT NULL,
  `department_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_unregis`
--

INSERT INTO `user_unregis` (`id`, `department_id`) VALUES
(571436005, 243),
(571436006, 243),
(572436001, 243),
(572436002, 243),
(572436003, 243),
(572436004, 243),
(572436005, 243),
(572436006, 243),
(572436007, 243),
(572436008, 243),
(572436011, 243),
(572436012, 243),
(572436013, 243),
(572436014, 243),
(572436015, 243),
(572436016, 243),
(572436017, 243),
(572436021, 243),
(572436022, 243),
(572436027, 243),
(572436029, 243),
(572436030, 243),
(572436031, 243),
(572436033, 243),
(572436035, 243),
(572436036, 243),
(572443001, 244),
(572443003, 244),
(572443007, 244),
(572443008, 244),
(572443009, 244),
(572443010, 244),
(572443011, 244),
(572443012, 244),
(572443014, 244),
(572443015, 244),
(572443016, 244),
(572443017, 244),
(572443018, 244),
(572443021, 244),
(572443024, 244),
(572443025, 244),
(572443027, 244),
(572443028, 244),
(581431016, 143),
(581436001, 243),
(581436002, 243),
(581436003, 243),
(581436005, 243),
(581436006, 243),
(581436007, 243),
(581436008, 243),
(581436010, 243),
(581436011, 243),
(581436012, 243),
(581443001, 244),
(582436003, 243),
(582436005, 243),
(582436006, 243),
(582436007, 243),
(582436008, 243),
(582436009, 243),
(582436010, 243),
(582436011, 243),
(582436012, 243),
(582436015, 243),
(582436016, 243),
(582436022, 243),
(582436023, 243),
(582436027, 243),
(582436028, 243),
(582436033, 243),
(582436034, 243),
(582436035, 243),
(582436036, 243),
(582436038, 243),
(582436039, 243),
(582436041, 243),
(582436043, 243),
(582436045, 243),
(582436048, 243),
(582443002, 244),
(582443003, 244),
(582443004, 244),
(582443007, 244),
(582443008, 244),
(582443010, 244),
(582443011, 244),
(582443012, 244),
(582443015, 244),
(582443016, 244),
(582443017, 244),
(582443020, 244),
(582443021, 244),
(582443023, 244),
(582443024, 244),
(582443025, 244),
(582443026, 244),
(582443027, 244),
(582443029, 244),
(582443030, 244),
(582443031, 244),
(582443032, 244),
(582443033, 244),
(582443034, 244),
(582443035, 244),
(582443036, 244),
(582443041, 244),
(582443042, 244),
(582443043, 244),
(582443046, 244),
(582443048, 244),
(582443049, 244),
(582443050, 244),
(582443051, 244),
(582443052, 244),
(582443054, 244),
(582443057, 244),
(582443058, 244),
(582443059, 244),
(582443060, 244),
(582443061, 244),
(582443062, 244),
(582443063, 244),
(582443064, 244),
(582443065, 244),
(582443067, 244),
(591436001, 243),
(591436003, 243),
(591436005, 243),
(591436006, 243),
(591436007, 243),
(591436009, 243),
(592436001, 243),
(592436002, 243),
(592436003, 243),
(592436009, 243),
(592436010, 243),
(592436012, 243),
(592436013, 243),
(592436014, 243),
(592436016, 243),
(592436018, 243),
(592436020, 243),
(592436021, 243),
(592436022, 243),
(592443001, 244),
(592443004, 244),
(592443005, 244),
(592443006, 244),
(592443008, 244),
(592443011, 244),
(592443012, 244),
(592443013, 244),
(592443015, 244),
(592443016, 244),
(592443017, 244),
(592443020, 244),
(592443021, 244),
(592443024, 244),
(592443025, 244),
(592443026, 244),
(592443027, 244),
(592443032, 244),
(592443035, 244),
(592443036, 244),
(592443037, 244),
(592443038, 244),
(592443041, 244),
(592443043, 244),
(592443046, 244),
(592443048, 244),
(592443049, 244),
(592443050, 244),
(592443051, 244),
(592443052, 244),
(592443053, 244),
(592443054, 244),
(592443057, 244),
(592443059, 244),
(592443060, 244),
(592443061, 244),
(592443062, 244),
(601436001, 243),
(601436002, 243),
(601436003, 243),
(601436004, 243),
(601436005, 243),
(601443001, 244),
(602436001, 243),
(602436002, 243),
(602436003, 243),
(602436004, 243),
(602436005, 243),
(602436006, 243),
(602436007, 243),
(602436008, 243),
(602436009, 243),
(602436010, 243),
(602436011, 243),
(602436012, 243),
(602436013, 243),
(602436014, 243),
(602436015, 243),
(602436016, 243),
(602436017, 243),
(602436018, 243),
(602436019, 243),
(602443001, 244),
(602443002, 244),
(602443003, 244),
(602443004, 244),
(602443005, 244),
(602443006, 244),
(602443007, 244),
(602443008, 244),
(602443009, 244),
(602443010, 244),
(602443011, 244),
(602443012, 244),
(602443013, 244),
(602443014, 244),
(602443015, 244),
(602443016, 244),
(602443017, 244),
(602443018, 244),
(602443019, 244),
(602443020, 244),
(602443021, 244),
(602443022, 244),
(602443023, 244),
(602443024, 244),
(602443025, 244),
(602443026, 244),
(602443027, 244),
(602443028, 244),
(602443029, 244),
(602443030, 244),
(602443031, 244);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow_chemical`
--
ALTER TABLE `borrow_chemical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow_equipment`
--
ALTER TABLE `borrow_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chemical`
--
ALTER TABLE `chemical`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `department` (`department`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_brand`
--
ALTER TABLE `e_brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Brand` (`Brand`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Place` (`Place`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userstatus`
--
ALTER TABLE `userstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_unregis`
--
ALTER TABLE `user_unregis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrow_chemical`
--
ALTER TABLE `borrow_chemical`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `borrow_equipment`
--
ALTER TABLE `borrow_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `e_brand`
--
ALTER TABLE `e_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `userstatus`
--
ALTER TABLE `userstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
