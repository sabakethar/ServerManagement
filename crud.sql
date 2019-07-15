-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 07:06 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memid`, `firstname`, `lastname`) VALUES
(1, 'Test1', '10.23.167.49'),
(2, 'Test2', '10.23.167.52'),
(3, 'Test3', '10.23.167.53'),
(4, 'Test4', '10.23.167.51'),
(5, 'Test4', '10.23.167.48'),
(6, 'Test4', '10.23.167.50');

-- --------------------------------------------------------

--
-- Table structure for table `server_details`
--

CREATE TABLE `server_details` (
  `id` int(11) NOT NULL,
  `server_name` varchar(150) NOT NULL,
  `server_ip` varchar(150) NOT NULL,
  `server_details` varchar(150) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `fw_info` varchar(150) NOT NULL,
  `start_time` datetime Null DEFAULT NULL,
  `end_time` datetime NULL DEFAULT NULL  

 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server_details`
--

INSERT INTO `server_details` (`id`, `server_name`, `server_ip`, `server_details`, `full_name`, `fw_info`, `start_time`, `end_time`) VALUES
(1, 'Test1', '10.23.167.49', '780EDB0', 'Sabarish', 'FW Info:VL930_FW930.01', '', ''),
(2, 'Test2', '10.23.167.52', '780EDE0', 'Sabarish', 'FW Info:VL930_FW930.01', '', ''),
(3, 'Test3', '10.23.167.53', '780EDF0', 'Sabarish', 'FW Info:VL930_FW930.01', '', ''),
(4, 'Test4', '10.23.167.51', '780EE10', 'Sabarish', 'FW Info:VL930_FW930.01', '', ''),
(5, 'Test5', '10.23.167.48', '780EE50', 'Sabarish', 'FW Info:VL930_FW930.01', '', ''),
(6, 'Test6', '10.23.167.50', '780EE80', 'Sabarish', 'FW Info:VL930_FW930.01', '', '');

-- --------------------------------------------------------


--
-- Table structure for table `server_uasge_history`
--

CREATE TABLE `server_uasge_history` (
  `id` int(11) NOT NULL,
  `server_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server_uasge_history`
--

INSERT INTO `server_uasge_history` (`id`, `server_id`, `user_id`, `start_time`, `end_time`, `comments`) VALUES
(1, 1, 1, '06/25/2019 3:36 PM', '06/25/2019 3:36 PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `full_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `full_name`) VALUES
(1, 'AX00537146', 'ax0053@123', 'Ahsan Baig Mirza'),
(2, 'DD00537152', 'dd0053@123', 'Dilip Desavali'),
(3, 'KK00537155', 'kk0053@123', 'Karthik Phaninder Kasturi'),
(4, 'MR00595504', 'mr0059@123', 'Manoj Rathod'),
(5, 'NR00561177', 'nr0056@123', 'Nithin Raghuveer'),
(6, 'PM00432037', 'pm0043@123', 'Pavana Mruthyunjaya'),
(7, 'PK00587562', 'pk0058@123', 'Priyanka K6'),
(8, 'RN00599036', 'rn0059@123', 'Ramesh Navaneethan'),
(9, 'RD00537158', 'rd0053@123', 'Ravi Kiran Durvasula'),
(10, 'SN00594972', 'sn0059@123', 'Sabarishbabu N'),
(11, 'SC00537356', 'sc0053@123', 'Sudhir Chandrasekhar'),
(12, 'SM00604456', 'sm0060@123', 'Sureshchandra Maganlal Panara'),
(13, 'TV00422338', 'tv0042@123', 'Tintu Viswanathan'),
(14, 'VV00587069', 'vv0058@123', 'Vishwanathula Venugopal'),
(15, 'YD00506916', 'yd0050@123', 'Yamini Dommaraju');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `crud`.`reservation` (`res_id` INT(10) NOT NULL AUTO_INCREMENT, `res_name` VARCHAR(30) NOT NULL, PRIMARY KEY(`res_id`)) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`res_id`, `res_name`) VALUES

(0,'Create Reservation'),
(1,'Delete Reservation');  
 
--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memid`);

--
-- Indexes for table `server_details`
--
ALTER TABLE `server_details`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `server_uasge_history`
--
ALTER TABLE `server_uasge_history`
  ADD PRIMARY KEY (`id`);

  
--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `server_details`
--
ALTER TABLE `server_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `server_uasge_history`
--
ALTER TABLE `server_uasge_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
   
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
