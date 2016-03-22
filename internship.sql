-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2016 at 11:18 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE IF NOT EXISTS `contract` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `student_code` varchar(30) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `place_of_training` text NOT NULL,
  `business_id` text NOT NULL,
  `address` text NOT NULL,
  `post_code_and_office` text NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `con_num_email` varchar(50) NOT NULL,
  `instructor` varchar(100) NOT NULL,
  `ins_num_email` varchar(50) NOT NULL,
  `group_code` varchar(50) NOT NULL,
  `field_of_study` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `contact_person_luas` varchar(100) NOT NULL,
  `con_num_email_luas` varchar(100) NOT NULL,
  `instructor_luas` varchar(100) NOT NULL,
  `ins_num_email_luas` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `scope` varchar(30) NOT NULL,
  `learn_object` text NOT NULL,
  `dev_object` text NOT NULL,
  `add_info` text NOT NULL,
  `tasks` text NOT NULL,
  `tasks_descr` text NOT NULL,
  `other_terms` text NOT NULL,
  `grant_practice` varchar(30) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `self_evaluation` varchar(30) NOT NULL,
  `staff_evaluation` varchar(30) NOT NULL,
  `company_evaluation` varchar(30) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(30) NOT NULL,
  `period` varchar(30) NOT NULL,
  `employer` varchar(30) NOT NULL,
  `pro_skills` varchar(30) NOT NULL,
  `pro_explan` text NOT NULL,
  `tech_skills` varchar(30) NOT NULL,
  `tech_explan` text NOT NULL,
  `plan_skills` varchar(30) NOT NULL,
  `plan_explan` text NOT NULL,
  `asses_skills` varchar(30) NOT NULL,
  `asses_explan` text NOT NULL,
  `comm_skills` varchar(30) NOT NULL,
  `comm_explan` text NOT NULL,
  `inter_skills` varchar(30) NOT NULL,
  `inter_explan` text NOT NULL,
  `soc_skills` varchar(30) NOT NULL,
  `soc_explan` text NOT NULL,
  `ability_to_coop` varchar(30) NOT NULL,
  `ability_explan` text NOT NULL,
  `initiative` varchar(30) NOT NULL,
  `initiative_explan` text NOT NULL,
  `other_info` text NOT NULL,
  `date` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE IF NOT EXISTS `trainers` (
  `company_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `company_evaluation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `contract_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `students` (`users_id`) ON UPDATE CASCADE;

--
-- Constraints for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `students` (`users_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
