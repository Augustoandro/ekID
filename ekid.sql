-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2023 at 11:36 AM
-- Server version: 10.10.3-MariaDB
-- PHP Version: 8.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `orgname` text NOT NULL,
  `employeeId` text NOT NULL,
  `password1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orgadmins`
--

CREATE TABLE `orgadmins` (
  `id` int(11) NOT NULL,
  `orgname` text NOT NULL,
  `orgemail` text NOT NULL,
  `orgpassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password1` text NOT NULL,
  `firstname` text NOT NULL,
  `midname` text NOT NULL,
  `lastname` text NOT NULL,
  `address1` text NOT NULL,
  `dob` date NOT NULL,
  `photo` text NOT NULL,
  `photoid` text NOT NULL,
  `addproof` text NOT NULL,
  `dobproof` text NOT NULL,
  `status1` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password1`, `firstname`, `midname`, `lastname`, `address1`, `dob`, `photo`, `photoid`, `addproof`, `dobproof`, `status1`) VALUES
(1, 'rtyuio@dfgh.com', 'wertyui', 'fghjk', 'dfghjk', 'rtyuio', 'dfghj, rtyui - 741258', '2023-03-03', 'photo.jpg', 'photoid.png', 'addproof.pdf', 'dobproof.pdf', NULL),
(2, 'wertyui@dfgh.com', 'sdfghjiuytre', 'rtyuidfghj', 'dfghjrtyu', 'fghjcvbnm', 'asdfghjk, wertyuio - 789654', '2023-03-04', 'photo.jpg', 'photoid.png', 'addproof.pdf', 'dobproof.pdf', 'Rejected'),
(3, 'asdfghjk@gmail.com', 'qwerty', 'qwertyui', 'xcvbnm', 'rtyuiofghjk', 'qwertyu, ertyudfgh - 123456', '2023-03-10', './uploadedFiles/WallpaperDog-20533090.jpg', './uploadedFiles/peakpx.jpg', './uploadedFiles/20033794085.pdf', './uploadedFiles/syllabus-drdo-cse.pdf', 'Accepted'),
(4, 'swapneel.esiot@gmail.com', 'asdfgh', 'swapneel', 'raosaheb', 'khandagale', 'ertyuio,sdfghj - 789654', '2023-03-15', 'uploadedFiles/WallpaperDog-20533090.jpg', 'uploadedFiles/wallpapersden.com_asta-in-black-clover_7680x4320.jpg', 'uploadedFiles/How_to_Setup_Global_VPN_Client.pdf', 'uploadedFiles/syllabus-drdo-cse.pdf', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orgadmins`
--
ALTER TABLE `orgadmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orgadmins`
--
ALTER TABLE `orgadmins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
