-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 10:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web3proj-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quant_id` int(11) DEFAULT NULL,
  `gov` varchar(30) NOT NULL,
  `dist` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL,
  `city` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `item_id`, `quant_id`, `gov`, `dist`, `zip`, `city`) VALUES
(12, 2, 47, 'Keserwan', 'ajdkha', 2342, 'ahdaha'),
(13, 6, 51, 'Keserwan', 'ajdkha', 2342, 'ahdaha'),
(14, 3, 48, 'Mount Lebanon', 'fajha', 7736, 'ahdaha'),
(15, 2, 47, 'Nabatieh', 'ajdkha', 7736, 'ahdaha'),
(16, 1, 46, 'Bekaa', 'ajdkha', 2342, 'ahdaha'),
(17, 2, 47, 'Beirut', 'ajdkha', 7736, 'tfsf'),
(18, 1, 46, 'Akkar', 'ajdkha', 339, 'ahdaha'),
(21, 1, 46, 'Akkar', 'fajha', 2342, 'dvd');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`) VALUES
(1, 'Monocrystalline solar panels', 300),
(2, 'Polycrystalline solar panels', 250),
(3, 'Thin-film solar panels', 200),
(4, 'The Fronius Primo 3.6kW Inverter Light', 1054.8),
(5, 'SolarEdge - SE6000H 6.0kW Inverter ', 1379.3),
(6, 'LuxPower Hybrid Inverter LPX 5K ACS', 1450),
(7, 'SuperTech Battery 200AH 12V    ', 175),
(8, 'WELION GEL BATTERY 12V 200AH   ', 210),
(9, 'Eastman Battery 210ah Carbon Lead Acid', 290);

-- --------------------------------------------------------

--
-- Table structure for table `quant`
--

CREATE TABLE `quant` (
  `quant_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quant`
--

INSERT INTO `quant` (`quant_id`, `quantity`) VALUES
(46, 2),
(47, 3),
(48, 3),
(49, 4),
(50, 3),
(51, 2),
(52, 4),
(53, 3),
(54, 2),
(55, 5),
(56, 6),
(57, 7),
(58, 2),
(59, 2),
(60, 2),
(61, 3),
(62, 4),
(63, 5),
(64, 2),
(65, 3),
(66, 3),
(67, 2),
(68, 3),
(69, 3),
(70, 2),
(71, 3),
(72, 3),
(73, 2),
(74, 2),
(75, 2),
(76, 3),
(77, 3),
(78, 3),
(79, 2),
(80, 2),
(81, 2),
(82, 2),
(83, 3),
(84, 2),
(85, 2),
(86, 2),
(87, 2),
(88, 2),
(89, 2),
(90, 2),
(91, 2),
(92, 2),
(93, 2),
(94, 3),
(95, 3),
(96, 3),
(97, 3),
(98, 2),
(99, 1),
(100, 5),
(101, 8),
(102, 9),
(103, 0),
(104, 0),
(105, 0),
(106, 0),
(107, 0),
(108, 2),
(109, 0),
(110, 0),
(111, 0),
(112, 0),
(113, 0),
(114, 0),
(115, 2),
(116, 4),
(117, 1),
(118, 2),
(119, 2),
(120, 1),
(121, 2),
(122, 2),
(123, 1),
(124, 2),
(125, 2),
(126, 1),
(127, 2),
(128, 3),
(129, 4),
(130, 2),
(131, 3),
(132, 4),
(133, 2),
(134, 3),
(135, 4),
(136, 2),
(137, 3),
(138, 4),
(139, 2),
(140, 3),
(141, 4),
(142, 2),
(143, 3),
(144, 4),
(145, 2),
(146, 3),
(147, 4),
(148, 2),
(149, 3),
(150, 4),
(151, 2),
(152, 3),
(153, 4),
(154, 2),
(155, 3),
(156, 4),
(157, 2),
(158, 3),
(159, 4),
(160, 2),
(161, 3),
(162, 4),
(163, 2),
(164, 3),
(165, 4),
(166, 2),
(167, 3),
(168, 4),
(169, 2),
(170, 3),
(171, 4),
(172, 2),
(173, 3),
(174, 4),
(175, 2),
(176, 3),
(177, 4),
(178, 2),
(179, 3),
(180, 4),
(181, 2),
(182, 3),
(183, 4),
(184, 2),
(185, 3),
(186, 4),
(187, 2),
(188, 3),
(189, 4),
(190, 2),
(191, 3),
(192, 4),
(193, 2),
(194, 3),
(195, 4),
(196, 2),
(197, 3),
(198, 4),
(199, 2),
(200, 3),
(201, 4),
(202, 2),
(203, 3),
(204, 4),
(205, 2),
(206, 3),
(207, 4),
(208, 2),
(209, 3),
(210, 4),
(211, 2),
(212, 3),
(213, 4),
(214, 2),
(215, 3),
(216, 4),
(217, 2),
(218, 4),
(219, 3),
(220, 2),
(221, 4),
(222, 3),
(223, 2),
(224, 4),
(225, 3),
(226, 2),
(227, 4),
(228, 3),
(229, 2),
(230, 4),
(231, 3),
(232, 2),
(233, 4),
(234, 3),
(235, 2),
(236, 1),
(237, 1),
(238, 2),
(239, 1),
(240, 1),
(241, 2),
(242, 1),
(243, 1),
(244, 2),
(245, 1),
(246, 1),
(247, 2),
(248, 1),
(249, 1),
(250, 2),
(251, 1),
(252, 1),
(253, 2),
(254, 1),
(255, 1),
(256, 2),
(257, 1),
(258, 1),
(259, 3),
(260, 3),
(261, 3),
(262, 4),
(263, 4),
(264, 4),
(265, 3),
(266, 3),
(267, 3),
(268, 3),
(269, 3),
(270, 3),
(271, 3),
(272, 3),
(273, 3),
(274, 3),
(275, 3),
(276, 3),
(277, 3),
(278, 3),
(279, 3),
(280, 3),
(281, 3),
(282, 3),
(283, 3),
(284, 3),
(285, 3),
(286, 3),
(287, 3),
(288, 3),
(289, 3),
(290, 3),
(291, 3),
(292, 3),
(293, 3),
(294, 3),
(295, 3),
(296, 3),
(297, 3),
(298, 3),
(299, 3),
(300, 3),
(301, 2),
(302, 2),
(303, 3),
(304, 2),
(305, 2),
(306, 3),
(307, 2),
(308, 2),
(309, 3),
(310, 2),
(311, 2),
(312, 3),
(313, 2),
(314, 2),
(315, 3),
(316, 2),
(317, 2),
(318, 3),
(319, 2),
(320, 2),
(321, 3),
(322, 2),
(323, 2),
(324, 2),
(325, 2),
(326, 2),
(327, 2),
(328, 2),
(329, 2),
(330, 2),
(331, 2),
(332, 3),
(333, 4),
(334, 2),
(335, 3),
(336, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `quant_id` (`quant_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `quant`
--
ALTER TABLE `quant`
  ADD PRIMARY KEY (`quant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `quant`
--
ALTER TABLE `quant`
  MODIFY `quant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `item_id` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`),
  ADD CONSTRAINT `quant_id` FOREIGN KEY (`quant_id`) REFERENCES `quant` (`quant_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
