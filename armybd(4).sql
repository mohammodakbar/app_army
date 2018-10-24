-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 12:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `armybd`
--

-- --------------------------------------------------------

--
-- Table structure for table `army_training`
--

CREATE TABLE `army_training` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `name_of_ins` varchar(255) NOT NULL,
  `rel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `army_training`
--

INSERT INTO `army_training` (`id`, `course`, `year`, `result`, `name_of_ins`, `rel_id`) VALUES
(13, 'Diploma in ICT', '2001', '3.19', 'BCC', '1811528'),
(14, 'CCNA', '1994', 'Passed', 'BCC', '1612140'),
(15, 'MCSA', '1997', 'Passed', 'BCC', '1612140'),
(16, 'RAC', 'ranning', 'A+', 'BCC', '1612140'),
(17, 'Intermideate Skil Cadre', '2014', 'Passed', '', '1612140'),
(18, 'DC Passive', '2015', 'Passed', '', '1612140'),
(19, 'Diploma in Network IT Administrator', '2015', 'Passed', '', '1612140'),
(20, 'ATT', '2003', 'Passed', 'STC&S', '1229491'),
(21, 'PE', '2005', 'Passed', 'STC&S', '1229491'),
(22, 'Computer Cadre', '2018', 'Passed', 'STC&S', '1229491'),
(23, 'Label-1', '2018`', 'Passed', 'STC&S', '1229491'),
(24, 'ICT Lebel-1&2', '1997', 'B', 'STC&S', '1223517'),
(25, 'NCO Adv', '1999', 'Passed', 'NCO\'s Accademy', '1223517'),
(26, 'Paloalto', '2015', 'Passed', 'AITSO', '1614612'),
(27, 'Juniper', '2017', 'Passed', 'AITSO', '1614612'),
(28, 'ITT', '2003', 'Passed', 'E', '2413707'),
(29, 'Cmdo', '2015', 'Passed', 'M', '2413707'),
(30, 'BMR', '2006', 'Passed', 'E', '2413707'),
(31, 'BTT', '2011', 'Pssed', '&amp;', '2413707'),
(32, 'PC', '2008', 'Passed', '', '2413707'),
(33, 'asdf', 'adf', 'adf', 'fdfdf', '12221212');

-- --------------------------------------------------------

--
-- Table structure for table `army_users`
--

CREATE TABLE `army_users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `user_role` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `army_users`
--

INSERT INTO `army_users` (`id`, `full_name`, `user_name`, `user_email`, `user_pass`, `hash`, `is_active`, `user_role`, `created`) VALUES
(2, 'Mohammod Akbor', 'akbor', 'mohammodakbar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e ', '', 0, 'admin', '2018-10-03 18:51:53'),
(3, '', '', 'mdmahbub903@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 0, '', '2018-10-20 18:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE `basic_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `army` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `trade` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `driving_license` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `perm_village` varchar(255) NOT NULL,
  `perm_poffice` varchar(255) NOT NULL,
  `perm_pstation` varchar(255) NOT NULL,
  `perm_district` varchar(255) NOT NULL,
  `pres_village` varchar(255) NOT NULL,
  `pres_poffice` varchar(255) NOT NULL,
  `pres_pstation` varchar(255) NOT NULL,
  `pres_district` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `date_of_enrollment` varchar(255) NOT NULL,
  `dop_rank` varchar(255) NOT NULL,
  `ueb` varchar(255) NOT NULL,
  `job_condition` varchar(255) NOT NULL,
  `service_age` varchar(255) NOT NULL,
  `remaining_service` varchar(255) NOT NULL,
  `medical_cat` varchar(255) NOT NULL,
  `date_of_join` varchar(255) NOT NULL,
  `retirement_date` varchar(255) NOT NULL,
  `snk` varchar(255) NOT NULL,
  `lpcl` varchar(255) NOT NULL,
  `spl` varchar(255) NOT NULL,
  `sgt` varchar(255) NOT NULL,
  `wo` varchar(255) NOT NULL,
  `swo` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `child` varchar(255) NOT NULL,
  `personal_problems` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_info`
--

INSERT INTO `basic_info` (`id`, `name`, `gender`, `birthday`, `army`, `rank`, `trade`, `height`, `weight`, `blood_group`, `mobile`, `driving_license`, `nid`, `passport`, `perm_village`, `perm_poffice`, `perm_pstation`, `perm_district`, `pres_village`, `pres_poffice`, `pres_pstation`, `pres_district`, `picture`, `date_of_enrollment`, `dop_rank`, `ueb`, `job_condition`, `service_age`, `remaining_service`, `medical_cat`, `date_of_join`, `retirement_date`, `snk`, `lpcl`, `spl`, `sgt`, `wo`, `swo`, `marital_status`, `child`, `personal_problems`, `hobby`, `signature`) VALUES
(75, 'Mohammad Akbar Hussain', 'Male', '10/22/1972', '1811528', 'Snk', 'Clk', '5&#039; 8&#039;&#039;', '434', 'O+', '01818543186', 'DK0501299CL0004', '0321402165127', 'N/A', 'Muktinagar', 'Afruzgonj', 'Moulvibazar', 'Moulvibazar', 'Muktinagar', 'Afruzgonj', 'Moulvibazar', 'Moulvibazar', '971538586602Akbar.jpg', '03-07-2003', '18-12-2003', 'Data_Center', 'Yes', '16', '06', '', '03-11-2018', '03-07-2021', '18-3-2003', '', '', '', '', '', 'Married', '-', '', 'Traveling', '9511538586602sign.png'),
(76, 'Khandokar Zohirul Islam', 'Male', '10/22/1973', '1612140', 'Sgt', 'OP', '5&#039; 9&#039;&#039;', '170', 'O+', '01716014255', 'DK0158307CL0006', '19784154798022012', 'N/A', 'Aoz', 'Chermuguria', 'Madaripur', 'Madaripur', 'AITSO', 'Dhaka Cantt', 'Dhaka Cantt', 'Dhaka', '121538627976Sgt Jahir.jpg', '10-07-1998', '31-07-2017', 'BA_Net', 'Yes', '20 years', '6 Yrs', '', '09-04-2014', '09-07-2024', '31-12-1998', '30-06-2007', '31-12-2012', '31-07-2017', '', '', 'Married', '03', 'I have no available member in my family. That&#039;s why I&#039;m in my guardian of the family.  ', 'Sleeping and watching Bangla drema.  ', '3281538627976WIN_20181004_10_34_51_Pro.jpg'),
(78, 'Md Hasanur Rhman', 'Male', '10/22/1976', '1223517', 'Cpl', 'OCU', '5&#039; 7&#039;&#039;', '159', 'AB+', '01720158055', 'Not', '6725806415084', 'Not', 'Dhabil', 'Dhabil', 'Mirpur', 'Kushtia', 'Dhabil', 'Dhabil', 'Mirpur', 'Kushtia', '4621538888281971538586602Akbar.jpg', '21-07-2000', '31-07-2016', 'Data_Center', 'No', '19', '04', '', '24-06-2014', '21-07-2023', '05-07-2005', '31-12-2008', '31-07-2016', '-', '-', '-', 'Marred', '2 Son', 'Not', 'Football', ''),
(79, 'Md Shahidul Islam', 'Male', '10/22/1979', '1614612', 'Lcpl', 'OP', '5&#039; 9&quot;', '155', 'o+', '01794446588', 'Not', '19878192226338693', 'Not', 'Meherchondi Moddopara', 'Padma Abashik', 'Boyelayea', 'Rajshahi', 'Meherchondi Moddopara', 'Padma Abashik', 'Boyelayea', 'Rajshahi', '7241538882782SNK Shahid.JPG', '10-07-2004', '17-12-2017', 'Wifi', 'No', '15', '07', '', '17-11-2012', '10-02-2026', '23-12-2004', '17-12-2017', '-', '-', '-', '-', 'Married', '02', 'No', 'Football is my favirouate hobby', '5311538882782iSwiftSignatureCreatorSignature_2018-10-06_15-03-49.4.png'),
(80, 'Md Belal Hossain Sarker', 'Male', '10/22/1970', '2413707', 'Cpl', 'RCT', '5&#039; 7&#039;&#039;', '163 Pound', 'B+', '01725452285', 'N/A', 'N/A', 'N/A', 'Khajmotpur', 'Khajmotpur', 'Pirgang', 'Rangpur', 'Khajmotpur', 'Khajmotpur', 'Pirgang', 'Rangpur', '7201539582030FOIL_BGA7042_BGADC_TIIICDD_170918_EXP2019.jpg', '07-01-2006', '10-08-2017', 'Data_Center', 'No', '13', '10', 'A Ayee', '19-05-2017', '07-01-2028', '22-06-2006', '07-01-2013', '10-08-2017', 'N/A', 'N/A', 'N/A', 'Married', '01', 'No problem.', 'Reading Book', '4191539582030FOIL_BGA7042_BGADC_TIIICDD_170918_EXP2019.jpg'),
(81, 'Md Shahin Ali', 'Male', '10/22/1970', '1618045', 'Snk', 'W/S', '5&#039; 11&#039;&#039;', '79 Kg', 'B+', '01798660643', 'N/A', 'N/A', 'N/A', 'Mokamtala', 'Gholdary Bazar', 'Alamdanga', 'Chuadanga', 'Mokamtala', 'Gholdary Bazar', 'Alamdanga', 'Chuadanga', '9041539583699CSM_tomcat.JPG', '14-07-2013', '30-12-2013', 'Data_Center', 'No', '05+', '15', 'A Ayee', '28-10-2015', '14-07-2034', '30-12-2013', '-', '-', '-', '-', '-', 'Un-Married', '-', '-', 'Cricket', '3751539583699FOIL_BGA7042_BGADC_TIIICDD_170918_EXP2019.jpg'),
(82, '', '', '10/22/1976', '43543543', 'Cpl', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, '', '', '10/22/1962', '435435435', 'Cpl', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, '', '', '10/22/1982', '345435', 'Cpl', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, '', '', '10/22/1992', '345435', 'Cpl', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, '', '', '10/22/1952', 'dfsdfdsf', 'swo', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `civil_basic_info`
--

CREATE TABLE `civil_basic_info` (
  `id` int(255) NOT NULL,
  `cs_no` varchar(255) NOT NULL,
  `desgination` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `driving_license` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `perm_village` varchar(255) NOT NULL,
  `perm_poffice` varchar(255) NOT NULL,
  `perm_pstation` varchar(255) NOT NULL,
  `perm_district` varchar(255) NOT NULL,
  `pres_village` varchar(255) NOT NULL,
  `pres_poffice` varchar(255) NOT NULL,
  `pres_pstation` varchar(255) NOT NULL,
  `pres_district` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `date_of_enrollment` varchar(255) NOT NULL,
  `ueb` varchar(255) NOT NULL,
  `service_age` varchar(255) NOT NULL,
  `date_of_join` varchar(255) NOT NULL,
  `medical_cat` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `child` varchar(255) NOT NULL,
  `personal_problems` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civil_basic_info`
--

INSERT INTO `civil_basic_info` (`id`, `cs_no`, `desgination`, `name`, `gender`, `birthday`, `height`, `weight`, `blood_group`, `mobile`, `driving_license`, `nid`, `passport`, `perm_village`, `perm_poffice`, `perm_pstation`, `perm_district`, `pres_village`, `pres_poffice`, `pres_pstation`, `pres_district`, `picture`, `date_of_enrollment`, `ueb`, `service_age`, `date_of_join`, `medical_cat`, `marital_status`, `child`, `personal_problems`, `hobby`, `signature`) VALUES
(6, 'ewrewr', 'Snk', 'ewrew', 'Female', 'ewrew', 'werew', 'rewrwer', 'ewrew', 'rewrew', 'rewr', 'wer', 'ewrewrewr', 'rew', 'ewrewr', 'ewr', 'werwer', 'rew', 'ewrewr', 'ewr', 'werwer', '7861540052865army-logo.png', 'ewrewr', 'Admin', 'ewrewr', 'rwerewr', 'ewrew', 'Married', 'ewrew', 'rewrew', 'rewr', '3471540052865attt.png'),
(8, 'dgfdg', 'Snk', 'fdgfdg', 'Male', 'fdgfdg', 'dfgfg', 'fdgfdg', 'dfgfdg', 'fdgfd', 'gfdgfd', 'gfdg', 'fdgfdg', 'gfdgfdg', 'fd', 'gfd', 'fdgfd', 'gfdgfdg', 'fd', 'gfd', 'fdgfd', '5531540109714', '', '', '', '', '', '', '', '', '', '6251540109714'),
(10, 'fh', 'Lcpl', 'hgfh', 'Male', 'fghfgh', 'gfhgf', '', '', '', '', '', '', 'fgh', 'fghgfhfg', 'fghg', 'fhfg', 'fgh', 'fghgfhfg', 'fghg', 'fhfg', '3571540111876', '', '', '', '', '', '', '', '', '', '1171540111876');

-- --------------------------------------------------------

--
-- Table structure for table `civil_education`
--

CREATE TABLE `civil_education` (
  `id` int(11) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `gpa` varchar(255) NOT NULL,
  `rel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civil_education`
--

INSERT INTO `civil_education` (`id`, `exam`, `year`, `division`, `gpa`, `rel_id`) VALUES
(26, 'SSC', '2001', 'Sylhet', '3', '1811528'),
(27, 'Dhakil', '1994', '2nd', '-', '1612140'),
(28, 'HSC', '1997', '2nd', '-', '1612140'),
(29, 'BA', 'ranning', '-', '-', '1612140'),
(30, 'adf', 'adf', 'asdf', 'adf', '12221212'),
(31, 'dfg', 'gdf', 'gdgfd', 'gfdg', 'dgfdg'),
(32, 'fdg', 'gfdg', 'fdgfd', 'dfg', 'dgfdg'),
(33, 'dsdfdsfg', 'gdf', 'gdgfd', 'gfdg', 'dgfdg'),
(34, 'fdsfdsffdg', 'gfdg', 'fdgfd', 'dfg', 'dgfdg'),
(35, 'fdgdfg', 'g', 'g', 'dfg', 'ertret'),
(36, 'asdsadfdg', 'fdg', 'fdgfd', 'gfdg', 'ertret'),
(37, 'asdsadfdgdfg', 'g', 'g', 'dfg', 'ertret'),
(38, 'sad', 'sad', 'sad', 'd', 'fh'),
(39, 'sadas', 'dsad', 'adsa', 'sads', 'fh');

-- --------------------------------------------------------

--
-- Table structure for table `close_relatives`
--

CREATE TABLE `close_relatives` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `rel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `close_relatives`
--

INSERT INTO `close_relatives` (`id`, `name`, `relation`, `mobile`, `rel_id`) VALUES
(1, 'Khandokar Fozlur Rahman', 'Uncle', '01714973928', '1612140'),
(2, 'Khandokar Jakir Ahamed', 'Cosuin', '01921305429', '1612140'),
(3, 'Fahima Akter Nupur ', 'Wife', '01724710598', '1612140'),
(4, 'Rezia Begum', 'Mother', '01703551459', '1612140'),
(5, 'Sowkat Morul', 'Brother in law', '01718487035', '1612140'),
(6, 'Md Abul Hossain', 'Father', '01772994414', '1229491'),
(7, 'Md Nur Alam', 'Brother', '01737389893', '1229491'),
(8, 'Md Nur Elahi', 'Brother', '01764838447', '1229491'),
(9, 'Md Obedur Islam', 'Brother', '01722773822', '1229491'),
(10, 'Md Zihad Hossain', 'Brother', '01736338017', '1229491'),
(11, 'Md Uzzir Ullah', 'Brother', '01712359014', '1223517'),
(12, 'Md Enamul Haque', 'Brother', '01714011872', '1223517'),
(13, 'Md Abul Kashem', 'Father', '01914765537', '1614612'),
(14, 'Md Shafiqul Islam', 'Brother', '01914765540', '1614612'),
(15, 'Md Obeydul Islam', 'Father in Law', '01934156889', '1614612'),
(16, 'Md Abdus Sattar Sarker', 'Father', '01737073334', '2413707'),
(17, 'Md Ruhul Amin', 'Brother', '01719793981', '2413707'),
(18, 'Md AKbar hussain', 'Friends', '01818543186', '2413707'),
(19, 'Md Shahin', 'Friend', '01798660643', '2413707'),
(20, 'Md Asadduzzam', 'Friends', '01738188177', '2413707'),
(21, 'Mst Asmira Begum', 'Mother', '01714443308', '1618045'),
(22, 'Md Shopon Hussain', 'Brother', '01765952403', '1618045'),
(23, 'sdgfs', 'gdfg', 'sg', '12221212'),
(24, 'fdger', 'retr', 'etret', 'dgfdg'),
(25, 'dfgfdg', 'fg', 'dfgfde', 'dgfdg'),
(26, 'dsfdsfdger', 'retr', 'etret', 'dgfdg'),
(27, 'dfdsfdsfgfdg', 'fg', 'dfgfde', 'dgfdg'),
(28, 'gfdgdf', 'fd', 'gfdg', 'ertret'),
(29, 'dgdfg', 'fdgf', 'dfg', 'ertret'),
(30, 'asdsadagfdgdf', 'fd', 'gfdg', 'ertret'),
(31, 'asdasddgdfg', 'fdgf', 'dfg', 'ertret'),
(32, 'dsfdsf', '', 'dsfdsf', 'fh');

-- --------------------------------------------------------

--
-- Table structure for table `device_imei`
--

CREATE TABLE `device_imei` (
  `id` int(11) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `imei` varchar(255) NOT NULL,
  `rel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device_imei`
--

INSERT INTO `device_imei` (`id`, `device_name`, `imei`, `rel_id`) VALUES
(1, 'mobile nokia', '358573088423664', '1612140'),
(2, 'Itel', '357219084925705', '1229491'),
(3, 'Symphony', '359859076607809', '1614612'),
(4, 'N/A', 'N/A', '2413707'),
(5, 'sdfg', 'sdfg', '12221212'),
(6, 'ertreg', 'gfg', 'dgfdg'),
(7, 'rt', 'retert', 'dgfdg'),
(8, 'dsfdsfertreg', 'gfg', 'dgfdg'),
(9, 'rtdsfdsf', 'retert', 'dgfdg'),
(10, 'dfg', 'fdgfd', 'ertret'),
(11, 'dgfdgfd', 'dfgf', 'ertret'),
(12, 'sadsaddfg', 'fdgfd', 'ertret'),
(13, 'asdsaddgfdgfd', 'dfgf', 'ertret'),
(14, 'sfdsf', 'sdfd', 'fh'),
(15, 'dsfdsf', 'dsf', 'fh');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name_of_games` varchar(255) NOT NULL,
  `rel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name_of_games`, `rel_id`) VALUES
(1, 'No interested ', '1612140'),
(2, 'Football', '1229491'),
(3, 'Vollyball', '1223517'),
(4, 'Nil', '1618045'),
(5, 'sdff', '12221212'),
(6, 'fdgdfg', 'dgfdg'),
(7, 'fdgfdgfgfdg', 'dgfdg'),
(8, 'dssdfdsffds', 'dgfdg'),
(9, 'fdgdssdfsdffdsffdgfgfdg', 'dgfdg'),
(10, 'dsfdsf', 'dgfdg'),
(11, 'dfgfdg', 'ertret'),
(12, 'fdgfdg', 'ertret'),
(13, 'asdsaddfgfdg', 'ertret'),
(14, 'sdasdafdgfdg', 'ertret'),
(15, 'rttrytry', 'fh');

-- --------------------------------------------------------

--
-- Table structure for table `gsbp`
--

CREATE TABLE `gsbp` (
  `id` int(11) NOT NULL,
  `step` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `rmks` varchar(255) NOT NULL,
  `rel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gsbp`
--

INSERT INTO `gsbp` (`id`, `step`, `date`, `rmks`, `rel_id`) VALUES
(41, '1st', '12/2012', 'Good Service', '1811528'),
(42, '1st', '7/2001', 'Good ', '1612140'),
(43, '2nd', '7/2004', 'Best', '1612140'),
(44, '3rd', '7/2007', 'Batter', '1612140'),
(45, 'Nil', 'Nil', 'Nil', '1618045'),
(46, 'afd', 'adf', 'adf', '12221212');

-- --------------------------------------------------------

--
-- Table structure for table `nok`
--

CREATE TABLE `nok` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `relations` varchar(255) NOT NULL,
  `percent` varchar(255) NOT NULL,
  `rel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nok`
--

INSERT INTO `nok` (`id`, `name`, `relations`, `percent`, `rel_id`) VALUES
(1, 'Fahima Akter Nupur ', 'Wife', '50', '1612140'),
(2, 'Rezia Begum', 'Mother', '20', '1612140'),
(3, 'Khandokar Subaiya Tabassum', 'Dughter', '10', '1612140'),
(4, 'Khandokar Shoyeb Ahamed', 'Son', '10', '1612140'),
(5, 'Khandokar Sakiba ', 'Daughter', '10', '1612140'),
(6, 'Swapna Khatun', 'Wife', '50', '1229491'),
(7, 'Latifa Begum', 'Mother', '30', '1229491'),
(8, 'Nafisa Sowda Nuha', 'Dughter', '20', '1229491'),
(9, 'Mst Shahinur Hasna', 'Wifi', '50', '1223517'),
(10, 'Mst Anwora Khatun', 'Mother', '10', '1223517'),
(11, 'Md Ali Akbar Rafi', 'Son', '20', '1223517'),
(12, 'Md Azgar Shafi', 'Son', '20', '1223517'),
(13, 'Kanij Fabiha', 'Wifi', '50', '1614612'),
(14, 'Md Abul Kashem', 'Father', '50', '1614612'),
(15, 'Mst Moushumy Akther', 'Wify', '50', '2413707'),
(16, 'Mst Rezia Begum', 'Mother', '25', '2413707'),
(17, 'Mst Sumayia Akther', 'Daughter', '25', '2413707'),
(18, 'Md Akhlasur Rahman', 'Father', '50', '1618045'),
(19, 'Mst Asmira Begum', 'Mother', '50', '1618045'),
(20, 'sgsdg', 'sdfg', 'sdgf', '12221212');

-- --------------------------------------------------------

--
-- Table structure for table `previous_jobs`
--

CREATE TABLE `previous_jobs` (
  `id` int(255) NOT NULL,
  `p_jobs` varchar(255) NOT NULL,
  `p_from` varchar(255) NOT NULL,
  `p_to` varchar(255) NOT NULL,
  `p_app` varchar(255) NOT NULL,
  `rel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `previous_unit`
--

CREATE TABLE `previous_unit` (
  `id` int(11) NOT NULL,
  `p_unit` varchar(255) NOT NULL,
  `p_from` varchar(255) NOT NULL,
  `p_to` varchar(255) NOT NULL,
  `p_app` varchar(255) NOT NULL,
  `rel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `previous_unit`
--

INSERT INTO `previous_unit` (`id`, `p_unit`, `p_from`, `p_to`, `p_app`, `rel_id`) VALUES
(66, 'AITSO', '11-02-1012', '03-11-2014', 'Server Admin', '1811528'),
(67, 'SSD Qbd', '11-02-1012', 'Until', 'Stock', '1811528'),
(68, '2 Sig Bn', '31-12-1998', '11/2001', 'Comd rover', '1612140'),
(69, '1 Sig Bn', '11/2001', '4/2006', 'Runner', '1612140'),
(70, '4 Sig Bn', '4/2006', '1/2009', 'Op Nobojatra NCO', '1612140'),
(71, 'RAB-2', '1/2009', '11/2011', 'Sig NCO', '1612140'),
(72, 'BANBAT 1/11', '11/2011', '12/2012', 'Sig NCO', '1612140'),
(73, '4 Sig Bn', '12/2012', '4/2014', 'Bekary NCO', '1612140'),
(74, 'AITSO', '4/2014', '11/2016', 'DC NCO', '1612140'),
(75, 'AITSO', '11/2016', '5/2017', 'Tech Storeman', '1612140'),
(76, 'AITSO', '12/2012', 'until', 'IT NCO', '1612140'),
(77, '2 Sig Bn', '1/2009', '1/2009', 'Comd rover', '1612141'),
(82, '2 Sig Bn', '1/2009', '1/2009', 'IT NCO', '1811523'),
(83, '16 fd regt arty', '27-12-2006', '15-4-2011', 'company clk', '1229491'),
(84, '39 Div Loc', '05-01-2001', '06-06-2006', 'RP 2ic', '1223517'),
(85, 'RAB-11', '06-06-2006', '06-06-2008', 'Ganman', '1223517'),
(86, 'BAN HQ', '16-05-2011', '19-07-2012', 'UCC', '1223517'),
(87, '7 Sig Bn', '23-12-2004', '12-11-2011', 'Gard Duty', '1614612'),
(88, '3 Sig Bn', '12-11-2011', '20-04-2012', 'OP', '1614612'),
(89, '145 Fd Wksp Coy EME', '06-06-2006', '08-10-2011', 'TT Sec', '2413707'),
(90, '8 Fd Arty Wksp EME', '08-10-2011', '05-07-2017', 'TT Sec', '2413707'),
(91, '133 Fd Wksp Coy EME', '05-07-2017', '19-05-2017', 'TT Sec', '2413707'),
(92, 'asdf', 'asdf', 'asdf', 'asdf', '12221212'),
(93, 'df', 'dfgdfg', 'dfg', 'fdgfdg', 'ewrewr'),
(94, 'gfdg', 'fdgfd', 'fdg', 'dfg', 'dgfdg'),
(95, 'dfsss', 'dfgdfg', 'dfg', 'fdgfdg', 'dgfdg'),
(96, 'gfsdfdg', 'fsdfdsdgfd', 'fdg', 'dfg', 'dgfdg'),
(97, 'rg', 'dfgf', 'dgfd', 'gfdg', 'ertret'),
(98, 'gfdgd', 'fd', 'gfdg', 'df', 'ertret'),
(99, 'sadasdrg', 'dfgf', 'dgfd', 'gfdg', 'ertret'),
(100, 'asdasdgfdgd', 'fd', 'gfdg', 'df', 'ertret'),
(101, 'asd', 'sadsa', 'dsad', 'sad', 'fh'),
(102, 'd', 'sadsa', 'sad', 'sad', 'fh');

-- --------------------------------------------------------

--
-- Table structure for table `punishment_description`
--

CREATE TABLE `punishment_description` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `rel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `punishment_description`
--

INSERT INTO `punishment_description` (`id`, `description`, `type`, `rel_id`) VALUES
(39, '55 / 34', '28 Days', '1811528'),
(41, 'N/a', 'N/A', '1612140'),
(42, 'N/a', 'N/A', '1612140'),
(43, 'Nil', 'Nil', '1229491'),
(44, 'adsf', 'asdf', '12221212');

-- --------------------------------------------------------

--
-- Table structure for table `social_id`
--

CREATE TABLE `social_id` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `rel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_id`
--

INSERT INTO `social_id` (`id`, `link`, `username`, `rel_id`) VALUES
(1, 'email ', 'zohirislam2140@gmail.com', '1612140'),
(2, 'facebook', 'zohirislam2140@gmail.com', '1612140'),
(3, 'retre', 'tretre', 'dgfdg'),
(4, 'etregrg', 'retr', 'dgfdg'),
(5, 'refdsftre', 'tretre', 'dgfdg'),
(6, 'etdsfdsregrg', 'retr', 'dgfdg'),
(7, 'gfdg', 'fdgfd', 'ertret'),
(8, 'gfdgfdgfdg', 'fdfdgfdg', 'ertret'),
(9, 'asdsadgfdg', 'fdgfd', 'ertret'),
(10, 'sadasdgfdgfdgfdg', 'fdfdgfdg', 'ertret'),
(11, 'dsf', 'dsfdsf', 'fh'),
(12, 'rytrytry', 'tryt', 'fh');

-- --------------------------------------------------------

--
-- Table structure for table `traveling`
--

CREATE TABLE `traveling` (
  `id` int(255) NOT NULL,
  `t_from` varchar(255) NOT NULL,
  `t_to` varchar(255) NOT NULL,
  `t_country` varchar(255) NOT NULL,
  `rel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traveling`
--

INSERT INTO `traveling` (`id`, `t_from`, `t_to`, `t_country`, `rel_id`) VALUES
(1, 'fd', 'gfdg', 'fdg', 'dgfdg'),
(2, 'fdgfd', 'fdg', 'dfg', 'dgfdg'),
(3, 'fsdfdsfdsd', 'gfdg', 'fdg', 'dgfdg'),
(4, 'fdgfdsffd', 'fdg', 'dfg', 'ewrewr'),
(5, 'dfg', 'fdg', 'g', 'ertret'),
(6, 'fdgdfg', 'fdg', 'dfg', 'ertret'),
(7, 'sadasddfg', 'fdg', 'g', 'ertret'),
(8, 'asdsadfdgdfg', 'fdg', 'dfg', 'ertret'),
(9, 'sd', 'sad', 'sad', 'fh'),
(10, 'sdf', 'dfg', 'sf', 'fh');

-- --------------------------------------------------------

--
-- Table structure for table `un_mission`
--

CREATE TABLE `un_mission` (
  `id` int(11) NOT NULL,
  `unm_from` varchar(255) NOT NULL,
  `unm_to` varchar(255) NOT NULL,
  `unm_country` varchar(255) NOT NULL,
  `rel_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `un_mission`
--

INSERT INTO `un_mission` (`id`, `unm_from`, `unm_to`, `unm_country`, `rel_id`) VALUES
(1, '11/2011', '12/2012', 'Congo', '1612140'),
(2, '-', '-', '-', '1229491'),
(3, '16-05-2011', '19-07-2012', 'Ivorycost', '1223517'),
(4, 'N/A', 'N/A', 'Nil', '2413707'),
(5, 'Nil', 'Nil', 'Nil', '1618045'),
(6, 'df', 'dfd', 'sdff', '12221212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `army_training`
--
ALTER TABLE `army_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `army_users`
--
ALTER TABLE `army_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_info`
--
ALTER TABLE `basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `civil_basic_info`
--
ALTER TABLE `civil_basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `civil_education`
--
ALTER TABLE `civil_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `close_relatives`
--
ALTER TABLE `close_relatives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_imei`
--
ALTER TABLE `device_imei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsbp`
--
ALTER TABLE `gsbp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nok`
--
ALTER TABLE `nok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `previous_jobs`
--
ALTER TABLE `previous_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `previous_unit`
--
ALTER TABLE `previous_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `punishment_description`
--
ALTER TABLE `punishment_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_id`
--
ALTER TABLE `social_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traveling`
--
ALTER TABLE `traveling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `un_mission`
--
ALTER TABLE `un_mission`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `army_training`
--
ALTER TABLE `army_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `army_users`
--
ALTER TABLE `army_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `basic_info`
--
ALTER TABLE `basic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `civil_basic_info`
--
ALTER TABLE `civil_basic_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `civil_education`
--
ALTER TABLE `civil_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `close_relatives`
--
ALTER TABLE `close_relatives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `device_imei`
--
ALTER TABLE `device_imei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `gsbp`
--
ALTER TABLE `gsbp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `nok`
--
ALTER TABLE `nok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `previous_jobs`
--
ALTER TABLE `previous_jobs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `previous_unit`
--
ALTER TABLE `previous_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `punishment_description`
--
ALTER TABLE `punishment_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `social_id`
--
ALTER TABLE `social_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `traveling`
--
ALTER TABLE `traveling`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `un_mission`
--
ALTER TABLE `un_mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
