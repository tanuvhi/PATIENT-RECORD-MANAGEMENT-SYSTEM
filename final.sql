-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2016 at 02:43 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--
CREATE DATABASE IF NOT EXISTS `final` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `final`;

-- --------------------------------------------------------

--
-- Table structure for table `bgroup`
--

DROP TABLE IF EXISTS `bgroup`;
CREATE TABLE `bgroup` (
  `bgroup_id` int(11) NOT NULL,
  `bgroupname` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

DROP TABLE IF EXISTS `diagnosis`;
CREATE TABLE `diagnosis` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE `doctors` (
  `doctors_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctors_id`, `fname`, `lname`, `uname`, `pass`) VALUES
(0, 'rakib', 'hasnayeen', 'rakib', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `doctors_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `d_add` date NOT NULL,
  `d_op` date NOT NULL,
  `d_dis` date NOT NULL,
  `diagnosis` int(50) NOT NULL,
  `bgroup_id` int(1) NOT NULL,
  `echo` varchar(300) NOT NULL,
  `echoimage` varchar(200) NOT NULL,
  `cxr` varchar(100) NOT NULL,
  `cxrimage` varchar(200) NOT NULL,
  `ctscan` varchar(100) NOT NULL,
  `ctscanimage` varchar(200) NOT NULL,
  `op_findings` varchar(100) NOT NULL,
  `bsa` decimal(16,2) NOT NULL,
  `height` decimal(16,2) NOT NULL,
  `weight` decimal(16,2) NOT NULL,
  `lvef` varchar(200) NOT NULL,
  `re_vsd` tinyint(1) NOT NULL,
  `pop_renal` tinyint(1) NOT NULL,
  `predia_pop` tinyint(1) NOT NULL,
  `powi` tinyint(1) NOT NULL,
  `duration_o_s` int(11) NOT NULL,
  `st_in_pop` int(11) NOT NULL,
  `st_in_icu` int(11) NOT NULL,
  `re_explo` tinyint(1) NOT NULL,
  `re_op` tinyint(1) NOT NULL,
  `use_tca` tinyint(1) NOT NULL,
  `use_actegrade` tinyint(1) NOT NULL,
  `duration_o_ven` int(11) NOT NULL,
  `dsc` tinyint(1) NOT NULL,
  `rlnp` tinyint(1) NOT NULL,
  `pnp` tinyint(1) NOT NULL,
  `stroke` tinyint(1) NOT NULL,
  `paraplegia` tinyint(1) NOT NULL,
  `hemo` int(11) NOT NULL,
  `st_i_hos` int(11) NOT NULL,
  `mort` tinyint(1) NOT NULL,
  `ecct` decimal(16,2) NOT NULL,
  `xct` decimal(16,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `doctors_id`, `name`, `reg_no`, `age`, `gender_id`, `address`, `d_add`, `d_op`, `d_dis`, `diagnosis`, `bgroup_id`, `echo`, `echoimage`, `cxr`, `cxrimage`, `ctscan`, `ctscanimage`, `op_findings`, `bsa`, `height`, `weight`, `lvef`, `re_vsd`, `pop_renal`, `predia_pop`, `powi`, `duration_o_s`, `st_in_pop`, `st_in_icu`, `re_explo`, `re_op`, `use_tca`, `use_actegrade`, `duration_o_ven`, `dsc`, `rlnp`, `pnp`, `stroke`, `paraplegia`, `hemo`, `st_i_hos`, `mort`, `ecct`, `xct`) VALUES
(1, 0, 'fsd', 21321, 12, 0, ' fsefsfsdc', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 'sfsdfs', '', 'ygkuy ', '', 'hykjhvk ', '', 'jhbkjhv ', '1.10', '1.10', '1.10', 'sdfasdfasdf', 0, 0, 0, 0, 1, 1, 12, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, '1.11', '1.10'),
(2, 0, 'fdf', 0, 0, 0, '', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(3, 2, 'dsd', 323, 222, 0, '', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(4, 0, 'rakib', 23423, 165, 0, ' ', '2016-04-17', '2016-04-17', '2016-04-17', 0, 1, ' ', '', ' ', '', ' ', '', ' ', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(5, 0, 'tavir', 21321435, 23, 0, ' ', '2016-04-17', '2016-04-17', '2016-04-17', 1, 1, ' ', '', ' ', '', ' ', '', ' ', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(7, 0, 'goata', 2342424, 11232, 0, ' ', '2016-04-17', '2016-04-17', '2016-04-17', 1, 1, ' ', '', ' ', '', ' ', '', ' ', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(8, 0, 'sumon', 3323, 24234, 2, ' ', '2016-04-17', '2016-04-17', '2016-04-17', 1, 1, ' ', '', ' ', '', ' ', '', ' ', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(10, 0, 'chad', 34124124, 23423, 1, ' dgdgsd', '2016-04-17', '2016-04-17', '2016-04-17', 1, 1, ' ', '', ' ', '', ' ', '', ' ', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(13, 0, 'rah', 765987, 12, 0, ' ', '2016-04-18', '2016-04-18', '2016-04-18', 1, 1, ' ', '', ' ', '', ' ', '', ' ', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(16, 0, 'vsdv', 3241234, 0, 0, ' ', '2016-04-18', '2016-04-18', '2016-04-18', 1, 1, ' ', '', ' ', '', ' ', '', ' ', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(22, 0, 'syliyhi', 34534, 213, 1, ' gnbxfgn', '2016-04-29', '2016-04-29', '2016-04-29', 1, 1, ' ', '', ' ', '', ' ', '', ' ', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(23, 0, 'suzan', 7684678, 12, 2, ' dtjtfgykfgy', '2016-04-29', '2016-04-29', '2016-04-29', 1, 1, ' gkmgukghy', '1.jpg', ' rtfhsdrht', '3.jpg', ' sdtfhsfrt', '5.jpg', ' fthnfdtjdt', '23.00', '1.20', '1.20', '34', 0, 0, 0, 0, 132, 234, 421, 0, 0, 0, 0, 123, 0, 0, 0, 0, 0, 0, 24, 0, '12.20', '1.20'),
(24, 0, 'rehnuma', 463535, 21, 1, ' sdvsvsawe', '2016-04-29', '2016-04-29', '2016-04-29', 1, 1, ' ', '', ' ', '', ' ', '', ' ', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(25, 0, 'dgadrgaedr', 2147483647, 12, 2, ' dtjtfgykfgy', '2016-04-29', '2016-04-29', '2016-04-29', 1, 1, ' gkmgukghy', '1.jpg', ' rtfhsdrht', '3.jpg', ' sdtfhsfrt', '5.jpg', ' fthnfdtjdt', '23.00', '1.20', '1.20', '34', 1, 0, 0, 0, 132, 234, 421, 0, 0, 0, 0, 123, 0, 0, 0, 0, 0, 0, 24, 0, '12.20', '1.20'),
(27, 0, 'mohaiminul', 946742613, 12, 2, ' dtjtfgykfgy', '2016-04-29', '2016-04-29', '2016-04-29', 1, 1, ' gkmgukghy', '1.jpg', ' rtfhsdrht', '3.jpg', ' sdtfhsfrt', '5.jpg', ' fthnfdtjdt', '23.00', '1.20', '1.20', '34', 1, 1, 0, 0, 132, 234, 421, 0, 0, 0, 0, 123, 0, 0, 0, 0, 0, 0, 24, 0, '12.20', '1.20'),
(28, 0, 'gaplu', 463464, 12, 1, ' dtjtfgykfgy', '2016-04-29', '2016-04-29', '2016-04-29', 1, 1, ' gkmgukghy', '1.jpg', ' rtfhsdrht', '3.jpg', ' sdtfhsfrt', '5.jpg', ' fthnfdtjdt', '23.00', '1.20', '1.20', '34', 1, 1, 1, 1, 132, 234, 421, 1, 1, 1, 1, 123, 1, 1, 1, 1, 1, 0, 24, 1, '12.20', '1.20'),
(29, 0, 'kalimana', 624564, 12, 2, ' dtjtfgykfgy', '2016-04-29', '2016-04-29', '2016-04-29', 1, 1, ' gkmgukghy', '1.jpg', ' rtfhsdrht', '3.jpg', ' sdtfhsfrt', '5.jpg', ' fthnfdtjdt', '23.00', '1.20', '1.20', '34', 1, 1, 1, 1, 132, 234, 421, 1, 1, 1, 1, 123, 1, 1, 1, 1, 1, 0, 24, 1, '12.20', '1.20'),
(30, 0, 'rayhan', 45325345, 11, 2, ' hilfhik,cgtjg', '2016-04-30', '2016-04-30', '2016-04-30', 1, 1, ' fcgncgvhmkcguk', '9851692904912267_ItxrO3iG_f.jpg', ' fgjnmcgyhk,yhh', '2064163_032683.jpg', ' gckmguk,guy', '3D_abstract_wallpapers_full_hd_wallpapers_3D_abstract_wallpapers.jpg', ' ggkm,cgu,kcghuk', '1.10', '1.10', '7.70', 'drgdr', 1, 1, 1, 1, 23, 12, 24, 1, 1, 1, 1, 65, 1, 1, 1, 1, 1, 46, 234, 1, '1.10', '8.40'),
(31, 0, 'giribaj', 846756724, 24, 2, ' ghmfgynjdtj', '2016-04-30', '2016-04-30', '2016-04-30', 1, 1, ' fgdzgbzdhbzdth', '1.jpg', ' dhftjdtygjydf', '3.jpg', ' dfhsrgaaeg', '5.jpg', ' gukdtgyjyfhjjsrf', '12.10', '1.10', '7.70', 'sdfasdfasdf', 1, 1, 1, 1, 67, 34, 87, 1, 1, 1, 1, 345, 1, 1, 1, 1, 1, 45, 32, 1, '2.40', '1.10'),
(33, 0, 'muradtakla', 45674567, 56, 1, ' fgjhxfhndxfth', '2016-04-30', '2016-04-30', '2016-04-30', 1, 1, ' zdfhbzdhtzdthzdnz', '16.jpg', ' xfgzdrfgbzd', '6.jpg', ' zdrgzdrgzfhb', '14.jpg', ' xdfthnxfjnfgyj\r\ndthsrf\r\n\r\ndrgdhb sdrhgs th', '12.10', '1.10', '1.10', 'hxfvgnxfhvg', 1, 0, 1, 1, 67, 43, 76, 1, 1, 1, 1, 43, 1, 1, 1, 1, 1, 54, 43, 1, '1.10', '8.40'),
(35, 0, 'dthdtfjxftj', 43524264, 12, 2, ' rtjhrjf', '2016-04-30', '2016-04-30', '2016-04-30', 1, 1, ' fxjtxftj', '', ' ', '', ' ', '', ' ', '0.00', '0.00', '0.00', '', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(36, 0, 'Mehedi', 1234567, 34, 2, 'edited', '2016-05-01', '2016-05-01', '2016-05-01', 0, 1, 'edited', '', '  edited   ', '', '  edited   ', '', '  edited   ', '12.00', '22.00', '33.00', 'edited', 1, 0, 0, 1, 44, 55, 66, 0, 0, 0, 0, 77, 0, 0, 0, 1, 1, 88, 99, 1, '10.00', '20.00'),
(40, 0, 'rafia edit', 12345678, 23, 2, 'Dhanmondni', '2016-05-01', '2016-05-01', '2016-05-01', 0, 3, ' Edited', 'z-wallpaper-colorful-orange-slice-1920-x-1080-full-hd.jpg', '   Edited', 'wall-photo-collage-ideas-21.jpg', '   Edited', 'photo-wall-idea-6.jpg', '   Edited', '10.00', '20.00', '30.00', ' Edited', 1, 0, 1, 0, 13, 234, 65, 1, 0, 1, 0, 32, 0, 1, 0, 1, 0, 65, 43, 0, '34.00', '43.00'),
(43, 0, 'gapluna', 123456, 12, 2, 'edited', '2016-05-01', '2016-05-01', '2016-05-01', 0, 3, 'edited', '', '  edited', '', '  edited', '', 'edited', '1.20', '2.20', '3.30', 'edited', 1, 0, 1, 0, 1, 2, 3, 1, 0, 1, 0, 4, 1, 0, 1, 0, 0, 5, 6, 1, '4.40', '5.50'),
(44, 0, 'rakibardi', 57457468, 0, 2, '', '2016-05-01', '2016-05-01', '2016-05-01', 0, 3, '14.jpg', '', '', '', '', '', '', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(46, 0, 'sadiaedit', 5436677, 87, 1, '', '2016-04-30', '2016-04-30', '2016-04-30', 0, 0, '', '', '', '', '', '3D_abstract_wallpapers_full_hd_wallpapers_3D_abstract_wallpapers.jpg', '', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(47, 0, 'kibriaedit', 534252345, 45, 1, 'edited', '2016-05-01', '2016-05-01', '2016-05-01', 0, 1, 'edited', '', 'edited ', '', '  edited ', '', '  edited ', '23.00', '1.20', '23.10', 'edited', 0, 0, 0, 1, 2, 3, 421, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 6, 7, 0, '5.00', '8.00'),
(48, 0, 'chandu', 7659850, 89, 2, ',;lh;oih;oihib', '2016-05-02', '2016-05-01', '2016-05-01', 0, 1, 'dhaka nikunja lalbag', '', ' ctg    bashundhara    gulla ', '', 'kintabana ', '', ' ', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(49, 0, 'Nazifa', 1674, 23, 2, ' Sylhet', '0000-00-00', '0000-00-00', '0000-00-00', 4, 3, ' Sylhet eoch', '1.jpg', '  Sylhet eoch', '3.jpg', '  Sylhet eoch', '5.jpg', '  Sylhet eoch', '1.00', '2.00', '3.00', 'a', 1, 0, 1, 0, 4, 5, 6, 1, 0, 1, 0, 7, 1, 0, 1, 0, 0, 8, 9, 0, '10.00', '11.00'),
(50, 0, 'fjtdgyjkdgtydtukg', 46, 46, 1, ' gcvnfvgn', '2016-05-05', '0000-00-00', '0000-00-00', 1, 1, ' ', '', ' ', '', ' ', '', ' ', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00'),
(51, 0, 'dsd', 213, 0, 0, ' ', '2016-11-09', '0000-00-00', '0000-00-00', 1, 1, ' ', '', ' ', '', ' ', '', ' ', '0.00', '0.00', '0.00', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `patient-diagnosis`
--

DROP TABLE IF EXISTS `patient-diagnosis`;
CREATE TABLE `patient-diagnosis` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `diagnosis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bgroup`
--
ALTER TABLE `bgroup`
  ADD PRIMARY KEY (`bgroup_id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `patient-diagnosis`
--
ALTER TABLE `patient-diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `patient-diagnosis`
--
ALTER TABLE `patient-diagnosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for bgroup
--

--
-- Metadata for diagnosis
--

--
-- Metadata for doctors
--

--
-- Metadata for gender
--

--
-- Metadata for patient
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'final', 'patient', '{"sorted_col":"`patient_id` ASC"}', '2016-05-01 12:20:28');

--
-- Metadata for patient-diagnosis
--

--
-- Metadata for final
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
