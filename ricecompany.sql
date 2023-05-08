-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 06:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ricecompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobregister`
--

CREATE TABLE `jobregister` (
  `id` bigint(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `job` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `jobregister`
--

INSERT INTO `jobregister` (`id`, `name`, `email`, `mobileno`, `qualification`, `message`, `date`, `job`) VALUES
(1212, 'M.MANIKANDAN', 'mani123@gmail.com', 987654398, 'Degree Holder', '    sample test 1', '2023-03-29 18:03:51', 'Manager'),
(1213, 'R.NAGARAJ', 'nagaraj@gmail.com', 1234567890, 'Below 10th', '    sample test 11', '2023-03-29 18:04:34', 'Security'),
(1214, 'Raja', 'raja100@gmail.com', 1234563454, 'Degree Holder', '   i am applying for security job', '2023-03-29 18:49:11', 'Security'),
(1215, 'Sandy', 'sandy1233@gmail.com', 7865453478, 'Degree Holder', '    Hi I am applying the manager post', '2023-03-29 21:41:46', 'Manager'),
(1216, 'Santhosh B', 'santhoshkarhi126@gamil.com', 7546657658, 'Above 10th', '    I am applying for the job post of labour', '2023-03-29 21:45:29', 'Labour'),
(1218, 'sda', 'rkricemill@gmail.com', 43, 'Select', '    ', '2023-03-29 21:47:51', 'Select');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Full_Name` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `mobileno` bigint(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Full_Name`, `password`, `user_type`, `mobileno`, `email`, `id`) VALUES
('KEPPURAJA', 'Keppu123', 'Admin', 7358905330, 'www.raja@gmail.com', 10020),
('SANTHOSH', 'santhosh123', 'Admin', 6754736273, 'www.santhosh@gmail.com', 10021);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `name` varchar(50) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `payment` varchar(15) NOT NULL,
  `quantity` int(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` bigint(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `item_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`name`, `mobileno`, `payment`, `quantity`, `email`, `id`, `date`, `item_name`) VALUES
('R.NAGARAJ', 1234565422, 'Cash', 4, 'nagaraj@gmail.com', 1001, '2023-03-29 21:13:58', 'Boiled Rice'),
('M.MANIKANDAN', 7867564322, 'Online', 3, 'mani@gmail.com', 1002, '2023-03-29 21:29:47', 'Idly Rice'),
('Kumar R', 9087654567, 'Cash', 5, 'kumar123@gmail.com', 1003, '2023-03-29 21:32:25', 'Ponni Rice'),
('Raja', 9786854436, 'Online', 4, 'raja100@gmail.com', 1004, '2023-03-29 21:34:58', 'Biryani Rice'),
('Sandy', 9876543209, 'Online', 9, 'Sandy@gmail.com', 1005, '2023-03-29 21:39:05', 'Biryani Rice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobregister`
--
ALTER TABLE `jobregister`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobileno` (`mobileno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobileno` (`mobileno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobileno` (`mobileno`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobregister`
--
ALTER TABLE `jobregister`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1219;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10022;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
