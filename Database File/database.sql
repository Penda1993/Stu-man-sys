-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 07:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stud_mgmt_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bca2`
--

CREATE TABLE `bca2` (
  `id` int(11) NOT NULL,
  `stu_id` text DEFAULT NULL,
  `multimedia` text DEFAULT NULL,
  `dbms` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bca2`
--

INSERT INTO `bca2` (`id`, `stu_id`, `multimedia`, `dbms`) VALUES
(1, '1', '50', '50');

-- --------------------------------------------------------

--
-- Table structure for table `bca3`
--

CREATE TABLE `bca3` (
  `id` int(11) NOT NULL,
  `stu_id` text DEFAULT NULL,
  `OPERATING_SYSTEM` text DEFAULT NULL,
  `ecommerce` text DEFAULT NULL,
  `web_development_and_tools` text DEFAULT NULL,
  `vb_dotnet` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(11) NOT NULL,
  `dept` text NOT NULL,
  `dept_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `dept`, `dept_name`) VALUES
(2, 'bca3', 'BCA THIRD YEAR'),
(3, 'bca2', 'BCA SECOND YEAR');

-- --------------------------------------------------------

--
-- Table structure for table `noti`
--

CREATE TABLE `noti` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noti`
--

INSERT INTO `noti` (`id`, `msg`, `date`) VALUES
(2, '<p>hy student your holidays will be started. on 21st july</p>', '2020-05-14'),
(3, '<p>hy</p>', '2020-05-19'),
(4, '<p>hello</p><p>&nbsp;</p>', '2020-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_mgmt`
--

CREATE TABLE `student_fee_mgmt` (
  `id` int(11) NOT NULL,
  `stu_id` text NOT NULL,
  `amount` text NOT NULL,
  `status` text NOT NULL,
  `date` date NOT NULL,
  `pay_method` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_fee_mgmt`
--

INSERT INTO `student_fee_mgmt` (`id`, `stu_id`, `amount`, `status`, `date`, `pay_method`) VALUES
(0, '1', '25000', 'paid', '2020-05-19', 'Paytm');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `province` text NOT NULL,
  `city` text NOT NULL,
  `zipcode` text NOT NULL,
  `contact` text NOT NULL,
  `password` text NOT NULL,
  `img` text NOT NULL,
  `course` text NOT NULL,
  `fees` text NOT NULL,
  `due` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`id`, `f_name`, `l_name`, `gender`, `email`, `address`, `province`, `city`, `zipcode`, `contact`, `password`, `img`, `course`, `fees`, `due`) VALUES
(1, 'Armin', 'Brainy', 'Female', 'armin@gmail.com',  'pardise', 'Cina', 'Maria', '4567', '23456776', '123', 'student2.jpg', '3', '25000', '25000');

- --------------------------------------------------------
--
-- Table structure for table `parent_login`
--

CREATE TABLE `parent_login` (
  `id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `province` text NOT NULL,
  `city` text NOT NULL,
  `zipcode` text NOT NULL,
  `contact` text NOT NULL,
  `password` text NOT NULL,
  `child_name` text NOT NULL,
  `ch_std_id` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_login`
--

INSERT INTO `student_login` (`id`, `f_name`, `l_name`, `gender`, `email`, `address`, `province`, `city`, `zipcode`, `contact`, `password`, `child_name`, `ch_std_id`, `img`) VALUES
(1, 'Mikasa', 'Brainy', 'Female','Armin', '1', 'mikasa@gmail.com', 'pardise', 'Cina', 'Maria', '4567', '23456776', '123', 'Armin','1', 'student2.jpg'  );

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `province` text NOT NULL,
  `city` text NOT NULL,
  `zipcode` text NOT NULL,
  `contact` text NOT NULL,
  `password` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`id`, `f_name`, `l_name`, `gender`, `email`, `address`, `province`, `city`, `zipcode`, `contact`, `password`, `img`) VALUES
(1, 'abc', 'giuhd', 'Female', 'abc@gmail.com', 'hiauegfra', 'Gujrat', 'Surat', '456678', '345678', '123', 'teacher1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bca2`
--
ALTER TABLE `bca2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bca3`
--
ALTER TABLE `bca3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noti`
--
ALTER TABLE `noti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fee_mgmt`
--
ALTER TABLE `student_fee_mgmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_login`
--
ALTER TABLE `teacher_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bca2`
--
ALTER TABLE `bca2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bca3`
--
ALTER TABLE `bca3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `noti`
--
ALTER TABLE `noti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_login`
--
ALTER TABLE `teacher_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
