-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 08:17 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket_clubs`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `player_id` int(10) NOT NULL,
  `club_id` int(20) NOT NULL,
  `club_name` varchar(45) NOT NULL,
  `witness1` varchar(45) NOT NULL,
  `witness2` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`player_id`, `club_id`, `club_name`, `witness1`, `witness2`) VALUES
(19712, 2, 'ABAHONI', 'MAH', 'DIO');

-- --------------------------------------------------------

--
-- Table structure for table `club_reg`
--

CREATE TABLE `club_reg` (
  `club_id` int(10) NOT NULL,
  `club_name` varchar(45) DEFAULT NULL,
  `DoE` date DEFAULT NULL,
  `house_no` varchar(20) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `village_street` varchar(45) DEFAULT NULL,
  `thana` varchar(35) DEFAULT NULL,
  `district` varchar(35) DEFAULT NULL,
  `post_code` int(11) DEFAULT NULL,
  `name_president` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_reg`
--

INSERT INTO `club_reg` (`club_id`, `club_name`, `DoE`, `house_no`, `location`, `village_street`, `thana`, `district`, `post_code`, `name_president`) VALUES
(1, 'dsfdsf', '2018-08-08', 'sdfd', 'dfsdf', 'dfsdf', 'sdfsdf', 'sdfsd', 3434, 'dfsd');

-- --------------------------------------------------------

--
-- Table structure for table `contract_period`
--

CREATE TABLE `contract_period` (
  `player_id` int(20) NOT NULL,
  `start_date` varchar(45) NOT NULL,
  `end_date` varchar(45) NOT NULL,
  `contract_amount` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract_period`
--

INSERT INTO `contract_period` (`player_id`, `start_date`, `end_date`, `contract_amount`) VALUES
(19712, '2018-09-12', '2018-09-29', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `educational_q`
--

CREATE TABLE `educational_q` (
  `player_id` int(11) NOT NULL,
  `degree_n` varchar(45) NOT NULL,
  `institute_dept` varchar(45) NOT NULL,
  `board_university` varchar(45) NOT NULL,
  `year` varchar(4) NOT NULL,
  `result` varchar(40) NOT NULL,
  `degree_n2` varchar(50) DEFAULT NULL,
  `board_university2` varchar(50) DEFAULT NULL,
  `institute_dept2` varchar(50) DEFAULT NULL,
  `year2` varchar(4) DEFAULT NULL,
  `result2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_q`
--

INSERT INTO `educational_q` (`player_id`, `degree_n`, `institute_dept`, `board_university`, `year`, `result`, `degree_n2`, `board_university2`, `institute_dept2`, `year2`, `result2`) VALUES
(19712, 'HSC', 'GCC', 'Dhaka', '2015', 'GPA- 5', 'SSC', 'Dhaka', 'GFG', '2013', 'GPA-4.33');

-- --------------------------------------------------------

--
-- Table structure for table `first_party`
--

CREATE TABLE `first_party` (
  `player_id` int(20) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_party`
--

INSERT INTO `first_party` (`player_id`, `first_name`, `middle_name`, `last_name`) VALUES
(19712, 'Mahadi', 'Hassan', 'Bappi');

-- --------------------------------------------------------

--
-- Table structure for table `match_info`
--

CREATE TABLE `match_info` (
  `event_id` int(10) NOT NULL,
  `venue_id` int(10) NOT NULL,
  `dom` date NOT NULL,
  `match_id` int(10) NOT NULL,
  `mom` varchar(35) NOT NULL,
  `on_umpire1` varchar(35) NOT NULL,
  `on_umpire2` varchar(35) NOT NULL,
  `out_umpire3` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_schedule`
--

CREATE TABLE `payment_schedule` (
  `serial_number` int(45) NOT NULL,
  `due_date` varchar(45) NOT NULL,
  `payment_date` varchar(45) NOT NULL,
  `amount` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_schedule`
--

INSERT INTO `payment_schedule` (`serial_number`, `due_date`, `payment_date`, `amount`) VALUES
(2312, '2018-09-12', '2018-09-12', '32423'),
(12345, '2018-09-12', '2018-09-28', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `membership` varchar(40) NOT NULL,
  `signature` varchar(50) NOT NULL,
  `hdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `first_name`, `middle_name`, `last_name`, `father_name`, `mother_name`, `dob`, `membership`, `signature`, `hdate`) VALUES
(19712, 'Mahadi', 'Hassan', 'Bappi', 'Marjuk', 'Maria', '2018-09-19', 'ICCB', 'Mahadi', '2018-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `player_performance_match`
--

CREATE TABLE `player_performance_match` (
  `match_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `dom` int(11) NOT NULL,
  `player1_id` int(11) NOT NULL,
  `tow1` int(11) NOT NULL,
  `tor1` int(11) NOT NULL,
  `out_p1` int(11) NOT NULL,
  `player2_id` int(11) NOT NULL,
  `tow2` int(11) NOT NULL,
  `tor2` int(11) NOT NULL,
  `out_p2` int(11) NOT NULL,
  `player3_id` int(11) NOT NULL,
  `tow3` int(11) NOT NULL,
  `tor3` int(11) NOT NULL,
  `out_p3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p_b_performance`
--

CREATE TABLE `p_b_performance` (
  `player_id` int(11) NOT NULL,
  `c_name` varchar(45) NOT NULL,
  `oc_name` varchar(45) NOT NULL,
  `event_id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `runs` int(11) NOT NULL,
  `wickets` int(11) NOT NULL,
  `c_name2` varchar(30) DEFAULT NULL,
  `event_id2` varchar(10) DEFAULT NULL,
  `match_id2` varchar(10) DEFAULT NULL,
  `oc_name2` varchar(30) DEFAULT NULL,
  `runs2` varchar(10) DEFAULT NULL,
  `wickets2` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_b_performance`
--

INSERT INTO `p_b_performance` (`player_id`, `c_name`, `oc_name`, `event_id`, `match_id`, `runs`, `wickets`, `c_name2`, `event_id2`, `match_id2`, `oc_name2`, `runs2`, `wickets2`) VALUES
(19712, 'Mohamedan', 'Abahoni', 250, 123, 120, 10, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_permanent_ad`
--

CREATE TABLE `p_permanent_ad` (
  `player_id` int(11) NOT NULL,
  `per_house_no` varchar(45) NOT NULL,
  `per_location` varchar(45) NOT NULL,
  `per_village_street` varchar(45) NOT NULL,
  `per_thana` varchar(45) NOT NULL,
  `per_district` varchar(45) NOT NULL,
  `per_post_code` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_permanent_ad`
--

INSERT INTO `p_permanent_ad` (`player_id`, `per_house_no`, `per_location`, `per_village_street`, `per_thana`, `per_district`, `per_post_code`) VALUES
(19712, 'F-222', 'Badda', 'Norda', 'Gulshan', 'Dhaka', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `p_present_ad`
--

CREATE TABLE `p_present_ad` (
  `player_id` int(11) NOT NULL,
  `pre_house_no` varchar(45) NOT NULL,
  `pre_location` varchar(45) NOT NULL,
  `pre_village_street` varchar(45) NOT NULL,
  `pre_thana` varchar(45) NOT NULL,
  `pre_district` varchar(45) NOT NULL,
  `pre_post_code` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_present_ad`
--

INSERT INTO `p_present_ad` (`player_id`, `pre_house_no`, `pre_location`, `pre_village_street`, `pre_thana`, `pre_district`, `pre_post_code`) VALUES
(19712, 'F-209', 'Chyabithi', 'Joydebpur', 'Joydebpur', 'Gazipur', 1700);

-- --------------------------------------------------------

--
-- Table structure for table `p_previous_history`
--

CREATE TABLE `p_previous_history` (
  `player_id` int(11) NOT NULL,
  `club_name` varchar(45) NOT NULL,
  `d_from` varchar(45) NOT NULL,
  `d_to` varchar(45) NOT NULL,
  `total_runs` varchar(11) NOT NULL,
  `total_wickets` varchar(11) NOT NULL,
  `team_leader` varchar(2) NOT NULL,
  `club_name2` varchar(30) DEFAULT NULL,
  `d_from2` varchar(20) DEFAULT NULL,
  `d_to2` varchar(20) DEFAULT NULL,
  `total_runs2` varchar(10) DEFAULT NULL,
  `total_wickets2` varchar(10) DEFAULT NULL,
  `team_leader2` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_previous_history`
--

INSERT INTO `p_previous_history` (`player_id`, `club_name`, `d_from`, `d_to`, `total_runs`, `total_wickets`, `team_leader`, `club_name2`, `d_from2`, `d_to2`, `total_runs2`, `total_wickets2`, `team_leader2`) VALUES
(19712, 'Mohamedan', '2010', '2014', '250', '12', 'Y', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `second_party`
--

CREATE TABLE `second_party` (
  `player_id` int(10) NOT NULL,
  `f_name` varchar(45) NOT NULL,
  `m_name` varchar(45) NOT NULL,
  `l_name` varchar(45) NOT NULL,
  `designation` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second_party`
--

INSERT INTO `second_party` (`player_id`, `f_name`, `m_name`, `l_name`, `designation`) VALUES
(19712, 'Abu', 'Hanif', 'MP', 'Leader');

-- --------------------------------------------------------

--
-- Table structure for table `team_info`
--

CREATE TABLE `team_info` (
  `club_id` int(10) NOT NULL,
  `DTF` date NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `t_leader_id` int(10) NOT NULL,
  `leader_name` varchar(35) NOT NULL,
  `coach_id` int(10) NOT NULL,
  `coach_name` varchar(35) NOT NULL,
  `player1_id` int(10) NOT NULL,
  `player1_name` varchar(35) NOT NULL,
  `player2_id` int(10) NOT NULL,
  `player2_name` varchar(35) NOT NULL,
  `player3_id` int(10) NOT NULL,
  `player3_name` varchar(35) NOT NULL,
  `player4_id` int(10) NOT NULL,
  `player4_name` varchar(35) NOT NULL,
  `player5_id` int(10) NOT NULL,
  `player5_name` varchar(35) NOT NULL,
  `player6_id` int(10) NOT NULL,
  `player6_name` varchar(35) NOT NULL,
  `player7_id` int(10) NOT NULL,
  `player7_name` varchar(35) NOT NULL,
  `player8_id` int(10) NOT NULL,
  `player8_name` varchar(35) NOT NULL,
  `player9_id` int(10) NOT NULL,
  `player9_name` varchar(35) NOT NULL,
  `player10_id` int(10) NOT NULL,
  `player10_name` varchar(35) NOT NULL,
  `player11_id` int(10) NOT NULL,
  `player11_name` varchar(35) NOT NULL,
  `player12_id` int(10) NOT NULL,
  `player12_name` varchar(35) NOT NULL,
  `player13_id` int(10) NOT NULL,
  `player13_name` varchar(35) NOT NULL,
  `player14_id` int(10) NOT NULL,
  `player14_name` varchar(35) NOT NULL,
  `player15_id` int(10) NOT NULL,
  `player15_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `club_reg`
--
ALTER TABLE `club_reg`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `contract_period`
--
ALTER TABLE `contract_period`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `educational_q`
--
ALTER TABLE `educational_q`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `first_party`
--
ALTER TABLE `first_party`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `match_info`
--
ALTER TABLE `match_info`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `player_performance_match`
--
ALTER TABLE `player_performance_match`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `p_b_performance`
--
ALTER TABLE `p_b_performance`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `p_permanent_ad`
--
ALTER TABLE `p_permanent_ad`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `p_present_ad`
--
ALTER TABLE `p_present_ad`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `p_previous_history`
--
ALTER TABLE `p_previous_history`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `second_party`
--
ALTER TABLE `second_party`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `team_info`
--
ALTER TABLE `team_info`
  ADD PRIMARY KEY (`club_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club_reg`
--
ALTER TABLE `club_reg`
  MODIFY `club_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `educational_q`
--
ALTER TABLE `educational_q`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19715;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19715;

--
-- AUTO_INCREMENT for table `p_b_performance`
--
ALTER TABLE `p_b_performance`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19715;

--
-- AUTO_INCREMENT for table `p_permanent_ad`
--
ALTER TABLE `p_permanent_ad`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19715;

--
-- AUTO_INCREMENT for table `p_present_ad`
--
ALTER TABLE `p_present_ad`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19715;

--
-- AUTO_INCREMENT for table `p_previous_history`
--
ALTER TABLE `p_previous_history`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19715;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
