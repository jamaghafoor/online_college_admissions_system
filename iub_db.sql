-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 07:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iub_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `lga` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `jamb_number` varchar(20) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `ssce_details` varchar(30) NOT NULL,
  `status` varchar(44) NOT NULL,
  `date_admission` varchar(22) NOT NULL,
  `applicationID` varchar(15) NOT NULL,
  `blood_group` enum('A Negative','A Positive','B Positive','B Negative','AB Positive','I don''t know') NOT NULL,
  `how_did_know` enum('Friend / Family','From IUB Student','Banner / Billboard','News Paper','Social Media') NOT NULL,
  `disability` enum('no','have') NOT NULL,
  `religion` enum('Islam','Christianity','Hinduism') NOT NULL,
  `hafiz` enum('yes','no') NOT NULL,
  `program` varchar(60) NOT NULL,
  `category` varchar(30) NOT NULL,
  `is_approve` enum('yes','no') DEFAULT 'no',
  `category2` varchar(30) NOT NULL,
  `category3` varchar(30) NOT NULL,
  `category4` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `subject1` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`ID`, `fullname`, `sex`, `phone`, `email`, `lga`, `state`, `jamb_number`, `faculty`, `dept`, `ssce_details`, `status`, `date_admission`, `applicationID`, `blood_group`, `how_did_know`, `disability`, `religion`, `hafiz`, `program`, `category`, `is_approve`, `category2`, `category3`, `category4`, `subject`, `subject1`, `photo`) VALUES
(90, 'test', 'male', '334857874', 'random@gmail.com', 'thdhfd', 'jkghsf', 'hjf', 'hgjhghj', 'kjerhgkj', 'hjflhg', '1', '2021-12-23', 'ADM/2021/40001', 'B Positive', 'From IUB Student', 'no', 'Islam', 'yes', 'master_in_arts', '', 'no', '', 'MA-Special', '', '', '', 'Abdul ghafoor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `subject`, `message`, `id`) VALUES
('Abdul Ghafoor', 'jamghafoor1122@gmaill.com', 2147483647, 'Email', '', 1),
('AG', 'jamghafoor1122@gmail.com', 2147483647, 'Contact  us', 'this is a sample message.', 2),
('dkjshfshd', 'hghfgdsjh', 2147483647, 'dsjfhgdhfgh', 'ghgdfhgdfhjs', 3),
('dkjshfshd', 'hghfgdsjh', 2147483647, 'dsjfhgdhfgh', 'ghgdfhgdfhjs', 4),
('jthjkfhkj', ',mmdsfhjksdf', 0, 'sdkhdkafds', 'sjdkhjsahkds', 5),
('Abdul ghafoor', 'jamghafoor1122@gmail.com', 2147483647, 'ahmad', 'jkdshsgj sjgahkfg jbhggfbdg gf khsdghsbg ksdhghshag jjsdbghsgadf jhagbhga', 6),
('Meer hamza', 'meerh6914@gmail.com', 23456789, 'computer', 'good', 7);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `cnic` bigint(20) NOT NULL,
  `password` longtext NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `father_name`, `gender`, `contact`, `email`, `cnic`, `password`, `photo`) VALUES
(18, 'Jam', 'AG', 'AG', 'male', 12345657, 'jamghafoor1122@gmail', 313321435435543, 'pakistan47', ''),
(9, 'gfgf', 'khan', 'Muhammad Asghar', 'male', 32583400, 'mee5rh6914@gmail.com', 3120250417203, '123456', ''),
(10, 'meer', 'Hamza', 'arshad', 'male', 32583400, 'meerh6914@gmail.com', 3120250417203, '1234567', ''),
(11, 'MeeR', 'HamZa', 'Arshad Majeed', 'male', 23432432423423432, 'meerh6914@gmail.com', 3120250417203, '123456789', ''),
(12, 'MeeR', 'HamZa', 'Arshad Majeed', 'male', 123, 'meerh6914@gmail.com', 123124123123, '123', ''),
(13, 'cg', 'yctg', 'trrc', 'male', 4567890, 'meerh6914@gmail.com', 3120250417203, '123456', ''),
(14, 'MeeR', 'HamZa', 'Arshad Majeed', 'male', 32456789, 'meerh6915@gmail.com', 3120250417203, '123456', ''),
(15, 'test', 'test', 'test', 'male', 31558802806, 'meerh6914@gmail.com', 3120250417203, 'bunty6914', ''),
(16, 'asd', 'jksdn', 'skjd', 'male', 21345678765, 'meerh6914@gmail.com', 234534534534543, 'bunty', ''),
(20, 'JAm', 'AG', 'AG', 'male', 3069790566, 'abdulghafoor1525@gma', 3130290234803, 'pakistan', ''),
(33, 'Jam', 'Abdul Ghafoor', 'Abdul Ghani', 'male', 12343546678990, 'jamabdul@gmail.com', 21421335456576, 'pakistan', 'Abdul ghafoor.jpg'),
(34, 'jAM', 'ag', 'Abdul Ghani', 'male', 3069790566, 'jamghafoor@gmail.com', 35354354375, 'pakistan', 'updated.jpeg'),
(35, 'james', 'web', 'michle', 'male', 5346788, 'random@gmail.com', 123456789, '123456', 'updated.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `scratchcard`
--

CREATE TABLE `scratchcard` (
  `ID` int(11) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `serial` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scratchcard`
--

INSERT INTO `scratchcard` (`ID`, `pin`, `serial`, `status`) VALUES
(1, '7890327890', '6789332145', 0),
(2, '9877659087', '6643541231', 1),
(3, '9000988754', '0098786541', 1),
(4, '9865489076', '3214568907', 1),
(5, '5455009876', '3213436903', 0),
(6, '5567889012', '1290875444', 0);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`name`, `email`, `message`, `photo`) VALUES
('abdul ghafoor', 'jamghafoor1122@gmail.com', 'this is sample message', '1614708469258.jfif'),
('abdul ghafoor', 'jamghafoor1122@gmail.com', 'this is sample message', '1614708469258.jfif'),
('jamghafoor', 'kldkjsjghslfdkjg@llfdhldjs', 'fajfghkfj fjgbljfdgb jlfbgfd', '1614708469258.jfif'),
('jamghafoor', 'kldkjsjghslfdkjg@llfdhldjs', 'fajfghkfj fjgbljfdgb jlfbgfd', '1614708469258.jfif'),
('jamghafoor', 'kldkjsjghslfdkjg@llfdhldjs', 'fajfghkfj fjgbljfdgb jlfbgfd', '1614708469258.jfif'),
('jamghafoor', 'kldkjsjghslfdkjg@llfdhldjs', 'fajfghkfj fjgbljfdgb jlfbgfd', '1614708469258.jfif'),
('kjjghdfsksf f djhgdJHLF HS', 'hhjd@jgjshg.com', 'hjhgdfjh', '1614708469258.jfif'),
('kjjghdfsksf f djhgdJHLF HS', 'hhjd@jgjshg.com', 'hjhgdfjh', '1614708469258.jfif'),
('kjjghdfsksf f djhgdJHLF HS', 'hhjd@jgjshg.com', 'hjhgdfjh', '1614708469258.jfif'),
('kjjghdfsksf f djhgdJHLF HS', 'hhjd@jgjshg.com', 'hjhgdfjh', '1614708469258.jfif'),
('kjjghdfsksf f djhgdJHLF HS', 'hhjd@jgjshg.com', 'hjhgdfjh', '1614708469258.jfif'),
('hhehjkghhj', 'kfdshkdjh@hjghdj.com', 'jhgdgjhqjhhjgd', '1614708469258.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scratchcard`
--
ALTER TABLE `scratchcard`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `scratchcard`
--
ALTER TABLE `scratchcard`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
