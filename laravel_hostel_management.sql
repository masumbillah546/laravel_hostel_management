-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 05:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

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
  `userId` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `isAbsence` varchar(3) NOT NULL,
  `isLeave` varchar(3) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`serial`, `userId`, `date`, `isAbsence`, `isLeave`, `remark`) VALUES
(13, 'U008', '2015-02-27', 'No', 'No', 'Self'),
(14, 'U009', '2015-02-27', 'Yes', 'No', 'tte'),
(15, 'U009', '2015-04-17', 'No', 'No', 'Self'),
(16, 'U009', '2015-04-18', 'No', 'No', 'Self');

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
  `billId` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `billTo` varchar(80) NOT NULL,
  `billingDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billId`, `type`, `amount`, `billTo`, `billingDate`) VALUES
('BIL007', 'Wifi', '300.00', 'U008', '2015-02-27'),
('BIL007', 'Tv', '60.00', 'U008', '2015-02-27'),
('BIL008', 'Wifi', '300.00', 'U009', '2015-02-27'),
('BIL009', 'Meal Cost Aprill', '2000.00', 'U009', '2015-04-17'),
('BIL009', 'Rent', '3000.00', 'U009', '2015-04-17'),
('BIL009', 'Wifi Net ', '500.00', 'U009', '2015-04-17'),
('BIL009', 'tv disc bill', '200.00', 'U009', '2015-04-17'),
('BIL009', 'Paper', '50.00', 'U009', '2015-04-17'),
('BIL009', 'Boishak Clelabration', '250.00', 'U009', '2015-04-17');

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
(4, 'Bazar', '2000.00', '2015-02-27', '2days Meal bazar'),
(5, 'Net bill', '5000.00', '2015-04-18', 'BTCL Internet Connection Bill');

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
(8, 'U009', '2000.00', '2015-04-17');

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
(9, 'U009', 3, '2015-02-27'),
(10, 'U008', 2, '2015-02-27'),
(11, 'U009', 2, '2015-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `mealrate`
--

CREATE TABLE `mealrate` (
  `rate` decimal(18,2) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mealrate`
--

INSERT INTO `mealrate` (`rate`, `note`) VALUES
('80.00', 'Feb,2015');

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
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`serial`, `title`, `description`, `createdDate`) VALUES
(6, '21st February Celebration', '21st February Celebration,rali,etc', '2015-02-27 15:34:40'),
(7, 'Happy New Year 2015', 'Happy New Year', '2015-02-27 15:35:25');

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
(2, 'Hostel Equipment(TV)', 'Md Jolil', '4000.00', 'Cash', '2015-02-27'),
(3, 'Paper Bill', 'Mr Silblu', '500.00', 'Cash', '2015-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `roomNo` varchar(20) NOT NULL,
  `blockId` varchar(10) NOT NULL,
  `noOfSeat` int(11) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `isActive` varchar(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `roomNo`, `blockId`, `noOfSeat`, `description`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'R-01', 'BL-01', 4, 'Block-01(North)', 'Y', '2020-12-07 20:09:52', '00:00:00'),
(2, 'R-02', 'BL-01', 2, 'Block-01(North)', 'Y', '2020-12-07 20:09:52', '00:00:00'),
(8, 'R-03', 'BL-3', 8, 'Block-03(North)', 'Y', '2020-12-08 03:44:38', '03:21:33');

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
(4, 'U009', 'R-03', 'BL-3', '1000.00'),
(5, 'U008', 'R-03', 'BL-01', '2000.00');

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
  `isApprove` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stdpayment`
--

INSERT INTO `stdpayment` (`serial`, `userId`, `paymentBy`, `transNo`, `amount`, `transDate`, `remark`, `isApprove`) VALUES
(3, 'U008', 'DBBL', '+8801755305154', '6000.00', '2015-02-26', 'Feb,2015 Bill', 'Yes'),
(4, 'U009', 'Bank', 'DD-4556', '5500.00', '2015-02-27', 'test', 'Yes'),
(5, 'U009', 'Bkash', '0185236974', '6000.00', '2015-04-17', 'all cost rent meal,net,tv', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `serial` int(11) NOT NULL,
  `userId` varchar(10) NOT NULL,
  `userGroupId` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `studentId` varchar(15) NOT NULL,
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
  `perPhoto` varchar(20) NOT NULL,
  `admitDate` date NOT NULL,
  `isActive` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`serial`, `userId`, `userGroupId`, `name`, `studentId`, `cellNo`, `email`, `nameOfInst`, `program`, `batchNo`, `gender`, `dob`, `bloodGroup`, `nationality`, `nationalId`, `passportNo`, `fatherName`, `motherName`, `fatherCellNo`, `motherCellNo`, `localGuardian`, `localGuardianCell`, `presentAddress`, `parmanentAddress`, `perPhoto`, `admitDate`, `isActive`) VALUES
(8, 'U008', 'UG004', 'Md. Rasel', '151-15-1155', '+8801755000002', 'rasel@gmail.com', 'DIU', 'CSE', '34', 'Male', '1994-06-14', 'AB(+)', 'Bangladeshi', 'N/A', 'N/A', 'Mr. Father', '+8801722000000', 'Mst. Mother', '+8801722000005', 'Mr. Local Boy', '+8801722000001', ' Dhanmondi,Dhaka-1207 ', 'Dhanmondi,Dhaka-1207', 'U008.jpg', '2015-02-27', 'Y'),
(9, 'U009', 'UG004', 'Md Zahidul', '151-15-1122', '+881722545660', 'zahidul@gmail.com', 'DIU', 'CSE', '34', 'Male', '2005-07-13', 'O(+)', 'Bangladeshi', 'N/A', 'N/A', 'Mr. Father', 'Mst Mother', '+8801710565958', '+8801710565958', 'Mr Local boy', '+8801710565960', ' Dhanmondi,Dhaka-1207', ' Dhanmondi,Dhaka-1207', 'U009.jpg', '2015-02-27', 'Y');

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
  `inTime` varchar(15) NOT NULL,
  `outTime` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timeset`
--

INSERT INTO `timeset` (`inTime`, `outTime`) VALUES
('07:00 PM', '06:00 AM');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seataloc`
--
ALTER TABLE `seataloc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seataloc`
--
ALTER TABLE `seataloc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
