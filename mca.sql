-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 03:39 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mca`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sname` varchar(50) NOT NULL,
  `email` varchar(26) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `rollno` varchar(155) NOT NULL,
  `comments` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sname`, `email`, `phone`, `rollno`, `comments`) VALUES
('uma', ' hunterroom1999@gmail.com', 7377912799, '18mca026', 'i love u fsdf'),
('raja', ' shreemanpareshdas@gmail.c', 7377912799, '18mca028', 'plz approve my schoralship');

-- --------------------------------------------------------

--
-- Table structure for table `formfillup`
--

CREATE TABLE `formfillup` (
  `id` int(11) NOT NULL,
  `regisno` int(20) NOT NULL,
  `year` int(20) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `studentname` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `quadian` varchar(30) NOT NULL,
  `permanentaddress` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nation` varchar(40) NOT NULL,
  `cast` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `yop10` int(50) NOT NULL,
  `yopm` int(40) NOT NULL,
  `doa` date NOT NULL,
  `college` varchar(50) NOT NULL,
  `center` varchar(50) NOT NULL,
  `paper` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formfillup`
--

INSERT INTO `formfillup` (`id`, `regisno`, `year`, `Course`, `semester`, `studentname`, `fathername`, `quadian`, `permanentaddress`, `gender`, `nation`, `cast`, `dob`, `yop10`, `yopm`, `doa`, `college`, `center`, `paper`) VALUES
(6, 4418, 2021, 'MCA', '4th', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'New Delhi', '-1', '0000-00-00', 0, 0, '0000-00-00', 'utkal university', 'utkal university', ' 6.1 grand vive\r\n6.2 project'),
(7, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(8, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(9, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(10, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(11, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(12, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(13, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(14, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(15, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(16, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(17, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(18, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(19, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(20, 4418, 2021, 'MCA', '2nd', 'shreeman paresh das', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '1999-02-19', 2013, 2021, '2018-08-21', 'utkal university', 'utkal university', ' java'),
(21, 441902, 2021, '-1', '-1', 'paresh', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '2021-06-22', 2013, 2021, '2021-06-24', 'utkal university', 'utkal university', ' gfdvhgf'),
(22, 441902, 2021, '-1', '-1', 'paresh', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '2021-06-22', 2013, 2021, '2021-06-24', 'utkal university', 'utkal university', ' gfdvhgf'),
(23, 441902, 2021, '-1', '-1', 'paresh', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '2021-06-22', 2013, 2021, '2021-06-24', 'utkal university', 'utkal university', ' gfdvhgf'),
(24, 441902, 2021, '-1', '-1', 'paresh', 'pranakrushna das', 'ranjita das', 'at/po:batira', 'male', 'Indian', 'OBC', '2021-06-22', 2013, 2021, '2021-06-24', 'utkal university', 'utkal university', ' gfdvhgf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` bigint(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `phone_no`) VALUES
(1, 'shreemanpareshdas@gmail.com', ' raja1999', 57267839836),
(2, 'shreemanpareshdas@gmail.com', ' raja1999', 57267839836),
(3, 'shreemanpareshdas@gmail.com', ' raja1999', 45678987),
(4, 'shreemanpareshdash@gmail.com', ' raja1999', 7377912799);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `payment_status` varchar(155) NOT NULL,
  `payment_id` int(100) NOT NULL,
  `added_on` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `formfillup`
--
ALTER TABLE `formfillup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formfillup`
--
ALTER TABLE `formfillup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
