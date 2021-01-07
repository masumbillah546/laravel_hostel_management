-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 11:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_hostel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `serial` int(11) NOT NULL,
  `userId` int(10) NOT NULL,
  `date` date NOT NULL,
  `isAbsence` varchar(3) NOT NULL,
  `isLeave` varchar(3) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`serial`, `userId`, `date`, `isAbsence`, `isLeave`, `remark`) VALUES
(14, 1, '2020-02-27', 'Yes', 'No', 'tte'),
(16, 2, '2020-04-18', 'No', 'No', 'Self'),
(22, 3, '2020-12-27', 'No', 'Yes', 'Illness'),
(27, 2, '2020-12-27', 'No', 'No', 'test'),
(28, 1, '2020-12-27', 'Yes', 'Yes', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `auto_id`
--

CREATE TABLE `auto_id` (
  `serial` int(11) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `number` int(11) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auto_id`
--

INSERT INTO `auto_id` (`serial`, `prefix`, `number`, `description`) VALUES
(1, 'UG', 1, 'User Group Id'),
(2, 'U', 12, 'User Id'),
(3, 'EMP', 5, 'Employee Id'),
(4, 'BL', 6, 'Block Id'),
(5, 'RM', 7, 'Room Number'),
(6, 'BIL', 10, 'Billing Id');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billId` int(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` varchar(18) NOT NULL,
  `billTo` varchar(80) NOT NULL,
  `billingDate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billId`, `type`, `amount`, `billTo`, `billingDate`) VALUES
(2, 'Tv', '60.00', 'U008', '2020-02-27'),
(7, 'Internet', '200.00', 'U009', '2020-04-17'),
(8, 'Paper', '50.00', 'U009', '2020-04-17'),
(9, 'Boishak Clelabration', '250.00', 'U009', '2020-04-17'),
(32, 'Water', '50', '', '2020/12/28');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `blockId` varchar(10) NOT NULL,
  `blockNo` varchar(10) NOT NULL,
  `blockName` varchar(30) NOT NULL,
  `description` varchar(80) NOT NULL,
  `isActive` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`blockId`, `blockNo`, `blockName`, `description`, `isActive`) VALUES
('BL004', 'BL-01', 'First Block', 'North Part Of the colony', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `serial` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`serial`, `type`, `amount`, `date`, `description`) VALUES
(4, 'Bazar', '2000.00', '2020-02-27', '2days Meal bazar'),
(5, 'Sevice', '5000.00', '2020-04-18', 'BTCL Internet Connection Bill'),
(6, 'Service', '500.00', '2020-10-20', 'net bill'),
(7, 'Bazar', '150.00', '2020-10-20', 'paper'),
(8, 'Bazar', '500.00', '2020-12-28', 'Bazar'),
(9, 'Equipment', '2000.00', '2020-12-28', 'Tv');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `serial` int(11) NOT NULL,
  `userId` varchar(10) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `depositDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`serial`, `userId`, `amount`, `depositDate`) VALUES
(6, 'U008', '6000.00', '2015-02-27'),
(7, 'U009', '5500.00', '2015-02-27'),
(8, 'U009', '2000.00', '2015-04-17'),
(9, '3', '200.00', '2020-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `serial` int(11) NOT NULL,
  `empId` varchar(10) NOT NULL,
  `userGroupId` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `empType` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `cellNo` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `doj` date NOT NULL,
  `designation` varchar(50) NOT NULL,
  `salary` decimal(18,2) NOT NULL,
  `blockNo` varchar(10) NOT NULL,
  `isActive` varchar(1) NOT NULL,
  `perPhoto` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`serial`, `empId`, `userGroupId`, `name`, `empType`, `gender`, `dob`, `cellNo`, `address`, `doj`, `designation`, `salary`, `blockNo`, `isActive`, `perPhoto`) VALUES
(1, 'EMP003', 'UG003', 'Mr. Sabbir Alam', 'Care Taker', 'Male', '1995-06-20', '01710123456', ' Dhanmoni,Dahaka-1207', '2015-02-11', 'Asistant Care', '5000.00', 'BL-01', 'Y', 'EMP003.jpg'),
(2, 'EMP004', 'UG003', 'Mst jabeda ', 'Cook', 'Female', '1994-06-14', '01720123456', ' Shukrabad-1207', '2015-01-27', 'Cook', '5000.00', 'BL-01', 'Y', 'EMP004.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `feesinfo`
--

CREATE TABLE `feesinfo` (
  `serial` int(11) NOT NULL,
  `type` varchar(80) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `amount` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feesinfo`
--

INSERT INTO `feesinfo` (`serial`, `type`, `description`, `amount`) VALUES
(9, 'Wifi', 'internet charge', '300.00'),
(10, 'TV', 'Television', '60.00'),
(11, 'paper', 'Paper Monthly', '30.00');

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `serial` int(11) NOT NULL,
  `userId` varchar(10) NOT NULL,
  `noOfMeal` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`serial`, `userId`, `noOfMeal`, `date`) VALUES
(23, '1', 0, '2020-12-27'),
(24, '11', 0, '2020-12-27'),
(25, '2', 0, '2020-12-27'),
(26, '3', 7, '2020-12-27'),
(27, '4', 0, '2020-12-27'),
(28, '5', 0, '2020-12-27'),
(29, '6', 0, '2020-12-27'),
(30, '1', 0, '2020-12-28'),
(31, '11', 0, '2020-12-28'),
(32, '2', 0, '2020-12-28'),
(33, '3', 2, '2020-12-28'),
(34, '4', 0, '2020-12-28'),
(35, '5', 0, '2020-12-28'),
(36, '6', 0, '2020-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `mealrate`
--

CREATE TABLE `mealrate` (
  `id` int(11) NOT NULL,
  `rate` decimal(18,2) NOT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mealrate`
--

INSERT INTO `mealrate` (`id`, `rate`, `note`) VALUES
(1, '80.00', 'Feb, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2020_12_07_183854_create_students_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `serial` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `createdDate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`serial`, `title`, `description`, `createdDate`) VALUES
(6, '21st February Celebration', '21st February Celebration,rali,etc', '2015-02-27 15:34:40'),
(7, 'Happy New Year 2020', '<img width=\"440\" src=\"https://happynewyear2021.net/wp-content/uploads/2019/09/Happy-New-Year-2019-GIF-Download-14.gif\">', '2015-02-27 15:35:25'),
(11, 'Eid Mubarak', '', '20/12/2020'),
(12, 'title 1', '<p>&nbsp; &nbsp;iuyiuit</p>', '20/12/2020'),
(13, 'title 2', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>fjdkfj</td>\r\n			<td>fgdf</td>\r\n		</tr>\r\n		<tr>\r\n			<td>fdg</td>\r\n			<td>fdg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>gfdf</td>\r\n			<td>dfg</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '20/12/2020');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `serial` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `paymentTo` varchar(100) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `paymentBy` varchar(50) NOT NULL,
  `paymentDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`serial`, `description`, `paymentTo`, `amount`, `paymentBy`, `paymentDate`) VALUES
(2, 'Hostel Equipment(TV)', 'Md Jolil', '4000.00', 'Cash', '2020-02-27'),
(3, 'Paper Bill', 'Mr Silblu', '500.00', 'Cash', '2020-02-27'),
(4, 'net', 'Hasan Zaman', '2000.00', 'Cash', '2020-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `roomNo` varchar(20) NOT NULL,
  `blockId` varchar(10) NOT NULL,
  `noOfSeat` int(11) NOT NULL,
  `available` int(3) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `isActive` varchar(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `roomNo`, `blockId`, `noOfSeat`, `available`, `description`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'R-01', 'BL-01', 4, 1, 'Block-01(North)', 'Y', '2020-12-23 12:58:58', '00:00:00'),
(2, 'R-02', 'BL-01', 4, 2, 'Block-01(North)', 'Y', '2020-12-23 11:11:46', '00:00:00'),
(8, 'R-03', 'BL-3', 3, 2, 'Block-03(North)', 'Y', '2020-12-23 11:12:07', '03:21:33');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `serial` int(11) NOT NULL,
  `empId` varchar(10) NOT NULL,
  `monthYear` varchar(30) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `addedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`serial`, `empId`, `monthYear`, `amount`, `addedDate`) VALUES
(4, 'EMP003', 'January-2015', '5000.00', '2015-02-27'),
(5, 'EMP004', 'February-2015', '5000.00', '2015-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `seataloc`
--

CREATE TABLE `seataloc` (
  `id` int(11) NOT NULL,
  `userId` varchar(10) NOT NULL,
  `roomNo` varchar(10) NOT NULL,
  `blockNo` varchar(30) NOT NULL,
  `monthlyRent` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seataloc`
--

INSERT INTO `seataloc` (`id`, `userId`, `roomNo`, `blockNo`, `monthlyRent`) VALUES
(1, 'U009', 'R-02', 'BL-01', '7500.00'),
(2, 'U008', '40', 'BL-01', '7000.00'),
(9, '3', 'R-01', 'BL-01', '2000.00'),
(10, '4', 'R-01', 'BL-01', '2000.00'),
(11, '11', 'R-01', 'BL-01', '2000.00');

-- --------------------------------------------------------

--
-- Table structure for table `stdpayment`
--

CREATE TABLE `stdpayment` (
  `serial` int(11) NOT NULL,
  `userId` varchar(10) NOT NULL,
  `paymentBy` varchar(50) NOT NULL,
  `transNo` varchar(50) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `transDate` date NOT NULL,
  `remark` varchar(50) NOT NULL,
  `isApprove` varchar(3) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stdpayment`
--

INSERT INTO `stdpayment` (`serial`, `userId`, `paymentBy`, `transNo`, `amount`, `transDate`, `remark`, `isApprove`) VALUES
(3, 'U008', 'DBBL', '+8801755305154', '6000.00', '2015-02-26', 'Feb,2015 Bill', 'Yes'),
(4, 'U009', 'Bank', 'DD-4556', '5500.00', '2015-02-27', 'test', 'Yes'),
(5, '1', 'Bkash', '0185236974', '6000.00', '2020-04-17', 'all cost rent meal,net,tv', 'Yes'),
(6, '2', 'Bank', '547475', '9999.00', '2020-12-20', 'ok', 'Yes'),
(7, '2', 'Bank', '547475', '9999.00', '2020-12-20', 'ok', 'Yes'),
(9, '2', 'Bank', '547475', '1212.00', '2020-12-21', 'test', 'Yes'),
(10, '1', 'Bank', '547475', '9999.00', '2020-12-22', 'test', 'Yes'),
(13, '2', 'Bkash', '547475', '500.00', '2020-12-16', 'test', 'Yes'),
(14, '1', 'Bank', '547475', '2000.00', '2020-12-01', 'ok', 'Yes'),
(15, '1', 'Bank', '547475', '500.00', '2020-12-22', 'test', 'Yes'),
(16, '3', 'Bank', '547475', '500.00', '2020-12-02', 'test', 'Yes'),
(18, '3', 'Bank', '547475', '500.00', '2020-12-09', 'test', 'Yes'),
(19, '3', 'Bank', '547475', '2000.00', '2020-12-07', 'test', 'Yes'),
(21, '2', 'DBBL', '547475', '9999.00', '2020-12-08', 'test', 'No'),
(22, '2', 'DBBL', '547475', '500.00', '2020-12-15', 'test', 'No'),
(23, 'U008', 'Bkash', '547475', '9999.00', '2020-12-15', 'test', 'No'),
(24, '3', 'DBBL', '547475', '500.00', '2020-12-22', 'test', 'No'),
(26, '1', 'Bank', '547475', '9999.00', '2020-12-15', 'test', 'No'),
(27, '3', 'Bank', '547475', '2000.00', '2020-12-28', 'test', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `userId` int(5) UNSIGNED ZEROFILL NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `studentId` varchar(15) DEFAULT NULL,
  `cellNo` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `nameOfInst` varchar(100) NOT NULL,
  `program` varchar(80) NOT NULL,
  `batchNo` varchar(10) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `dob` date NOT NULL,
  `bloodGroup` varchar(5) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `nationalId` varchar(20) DEFAULT NULL,
  `passportNo` varchar(20) DEFAULT NULL,
  `fatherName` varchar(50) NOT NULL,
  `motherName` varchar(50) NOT NULL,
  `fatherCellNo` varchar(15) NOT NULL,
  `motherCellNo` varchar(15) NOT NULL,
  `localGuardian` varchar(50) NOT NULL,
  `localGuardianCell` varchar(15) NOT NULL,
  `presentAddress` varchar(150) NOT NULL,
  `parmanentAddress` varchar(150) NOT NULL,
  `perPhoto` text NOT NULL,
  `admitDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isActive` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`userId`, `password`, `name`, `studentId`, `cellNo`, `email`, `nameOfInst`, `program`, `batchNo`, `gender`, `dob`, `bloodGroup`, `nationality`, `nationalId`, `passportNo`, `fatherName`, `motherName`, `fatherCellNo`, `motherCellNo`, `localGuardian`, `localGuardianCell`, `presentAddress`, `parmanentAddress`, `perPhoto`, `admitDate`, `isActive`) VALUES
(00001, '12345', 'Md. Rasel', '151-15-1155', '+8801755000002', 'rasel@gmail.com', 'DIU', 'CSE', '34', 'Male', '1994-06-14', 'AB(+)', 'Bangladeshi', 'N/A', 'N/A', 'Mr. Father', '+8801722000000', 'Mst. Mother', '+8801722000005', 'Mr. Local Boy', '+8801722000001', ' Dhanmondi,Dhaka-1207 ', 'Dhanmondi,Dhaka-1207', 'images/J8prBIe7oZEiMAhDEyYNE3lZLbbP8lVyLvccbdNm.jpg', '2020-02-26 18:00:00', 'Y'),
(00002, '12345', 'Md Zahidul', '151-15-1122', '+881722545660', 'zahidul@gmail.com', 'DIU', 'CSE', '34', 'Male', '2005-07-13', 'O(+)', 'Bangladeshi', 'N/A', 'N/A', 'Mr. Father', 'Mst Mother', '+8801710565958', '+8801710565958', 'Mr Local boy', '+8801710565960', ' Dhanmondi,Dhaka-1207', ' Dhanmondi,Dhaka-1207', 'U009.jpg', '2020-02-26 18:00:00', 'Y'),
(00003, '12345', 'Masum Billah', NULL, '01738004246', 'masum@gmail.com', 'ghfg', 'WDPF', '44', 'Male', '2020-12-23', 'A(+)', 'Bangladeshi', '25454545', '4546456', 'Wahidur Rahman', 'Manira Begum', '24242', '45452', 'Local Guardian', '45245', 'Dhaka', 'hjghj', 'images/J8prBIe7oZEiMAhDEyYNE3lZLbbP8lVyLvccbdNm.jpg', '2020-12-23 08:56:37', NULL),
(00004, '12345', 'Monir Hossain', NULL, '15212121', 'monir@gmail.com', 'IDB', 'WDPF', '44', 'Male', '2020-12-10', 'A(+)', 'Bangladeshi', '25454545', '4546456', 'Father Name', 'Mother Name', '545454', '245245', 'Local Guardian', '444', 'hgjh', 'hgjhjg', 'F:\\WDPF44\\PHP\\tmp\\phpEB5D.tmp', '2020-12-22 22:55:04', NULL),
(00005, '12345', 'Shakil Ahmed', NULL, '01738004246', 'shakil@gmail.com', 'Dhaka University', 'Arts', '44', 'Male', '2020-12-02', 'O(+)', 'Bangladeshi', '25454545', '4546456', 'Father Name', 'Mother Name', '454545', '45454', 'Local Guardian', '454545', 'Dhaka', 'fgdfgd', 'F:\\WDPF44\\PHP\\tmp\\php9275.tmp', '2020-12-22 23:12:10', NULL),
(00006, '12345', 'Mohiuddin', NULL, '55545454', 'Mohiuddin@gmail.com', 'ghghf', 'WDPF', '44', 'Male', '2020-12-15', 'A(+)', 'Bangladeshi', '25454545', '4546456', 'Father Name', 'Mother Name', '545', '465464', 'Local Guardian', '456456', 'Dhaka', 'hfghf', 'F:\\WDPF44\\PHP\\tmp\\phpA07B.tmp', '2020-12-22 23:17:41', NULL),
(00011, '12345', 'Hasib rahman', NULL, '645645645', 'hasib@gmail.com', 'IDB-BISEW', 'WDPF', '44', 'Male', '2020-11-30', 'A(+)', 'Bangladeshi', '25454545', '4546456', 'Father Name', 'Mother Name', '45646', '4565654', 'Local Guardian', '4565654', 'Dhaka', 'Dhaka', 'images/J8prBIe7oZEiMAhDEyYNE3lZLbbP8lVyLvccbdNm.jpg', '2020-12-23 08:51:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timeset`
--

CREATE TABLE `timeset` (
  `id` int(2) NOT NULL,
  `inTime` varchar(15) NOT NULL,
  `outTime` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timeset`
--

INSERT INTO `timeset` (`id`, `inTime`, `outTime`) VALUES
(1, '09:00 PM', '12:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `serial` int(11) NOT NULL,
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`serial`, `id`, `name`, `description`) VALUES
(1, 'UG001', 'Admin', 'Admin group'),
(2, 'UG004', 'Student', 'Students Group'),
(4, 'UG002', 'Supervisor', 'Hostel supervisor'),
(5, 'UG003', 'Employee', 'Employe Group');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Masum Billah', 'masum@gmail.com', NULL, '$2y$10$cmb5M35Ti28znbXA.kphCOWwHVXC8Rxlzj.Jq2ZhMSB1pIqwzYWPm', NULL, '2020-12-18 07:50:32', '2020-12-18 07:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `userId` int(5) UNSIGNED ZEROFILL NOT NULL,
  `userGroupId` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `loginId` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `verifyCode` varchar(10) NOT NULL,
  `expireDate` date NOT NULL,
  `isVerifed` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`userId`, `userGroupId`, `name`, `loginId`, `password`, `verifyCode`, `expireDate`, `isVerifed`) VALUES
(00001, 'UG001', 'System Admin', 'admin', 'admin', 'av799', '2015-08-01', 'Y'),
(00002, 'UG004', 'Md. Rasel', 'student', 'student', 'vhms2115', '2115-01-04', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `serial` (`serial`);

--
-- Indexes for table `auto_id`
--
ALTER TABLE `auto_id`
  ADD UNIQUE KEY `serial` (`serial`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billId`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`blockId`),
  ADD UNIQUE KEY `blockId` (`blockId`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `mealrate`
--
ALTER TABLE `mealrate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seataloc`
--
ALTER TABLE `seataloc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userId` (`userId`);

--
-- Indexes for table `stdpayment`
--
ALTER TABLE `stdpayment`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeset`
--
ALTER TABLE `timeset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `meal`
--
ALTER TABLE `meal`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `mealrate`
--
ALTER TABLE `mealrate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seataloc`
--
ALTER TABLE `seataloc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stdpayment`
--
ALTER TABLE `stdpayment`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `userId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timeset`
--
ALTER TABLE `timeset`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `userId` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
