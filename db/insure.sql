-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2023 at 09:42 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `insure`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(59) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '12', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `transid` varchar(50) NOT NULL,
  `rrr` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amttopaid` varchar(50) NOT NULL,
  `amtpaid` varchar(50) NOT NULL,
  `payst` varchar(50) NOT NULL,
  `paydate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lga` varchar(50) NOT NULL,
  `sor` varchar(50) NOT NULL,
  `idpic` varchar(50) NOT NULL,
  `repic` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `userid`, `transid`, `rrr`, `firstname`, `lastname`, `type`, `amttopaid`, `amtpaid`, `payst`, `paydate`, `lga`, `sor`, `idpic`, `repic`) VALUES
(5, 1, '2222', '222', 'oyeniyi', 'emmanuel', 'Comprehensive Insurance', '200000', '50000', 'Paid', '2023-07-21 13:59:52', 'oyo', '', '', 'images/5c9a411631d8f.png'),
(6, 1, '2333', '3333222', 'oyeniyi', 'emmanuel', 'Comprehensive Insurance', '200000', '400000', 'Paid', '2023-07-21 13:59:52', 'oyo', '', '', 'images/5c9a84f860b2c.png'),
(13, 1, 'd', 'd', 'oyeniyi', 'emmanuel', 'Comprehensive Insurance', '200000', 'd', 'Paid', '2023-07-22 09:09:28', 'oyo', '', '', 'images/64bb8eb7580e9.png'),
(14, 1, '44', '44', 'oyeniyi', 'emmanuel', 'Comprehensive Insurance', '200000', '44', 'Paid', '2023-07-22 09:11:22', 'oyo', '', '', 'images/64bb8f29946d1.png'),
(15, 1, '444', '44', 'oyeniyi', 'emmanuel', 'Comprehensive Insurance', '200000', '44', 'Paid', '2023-07-22 09:35:49', 'oyo', '', '', 'images/64bb94e4b3a90.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `type` varchar(40) NOT NULL,
  `vehicledetail` varchar(45) NOT NULL,
  `vehiclepic` varchar(45) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `vecat` varchar(40) NOT NULL,
  `vecatpay` varchar(200) NOT NULL,
  `sor` varchar(50) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `vechiclename` varchar(60) NOT NULL,
  `vechiclereg` varchar(90) NOT NULL,
  `suminsured` varchar(89) NOT NULL,
  `yearreg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modelvec` varchar(90) NOT NULL,
  `engineno` varchar(90) NOT NULL,
  `chasisno` varchar(90) NOT NULL,
  `yearma` varchar(90) NOT NULL,
  `transid` varchar(40) NOT NULL,
  `rrr` varchar(40) NOT NULL,
  `amtpaid` varchar(20) NOT NULL,
  `payst` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone_number`, `password`, `type`, `vehicledetail`, `vehiclepic`, `sex`, `dob`, `vecat`, `vecatpay`, `sor`, `lga`, `address`, `vechiclename`, `vechiclereg`, `suminsured`, `yearreg`, `modelvec`, `engineno`, `chasisno`, `yearma`, `transid`, `rrr`, `amtpaid`, `payst`) VALUES
(1, 'oyeniyi', 'emmanuel', 'oyeniyi9782@yahoo.com', ' 08034381367\r\n', '12', 'Comprehensive Insurance', 'no', ' uploads/64bb94ccde2be7.61136696.jpg', 'female ', '0000-00-00', '', '200000', '', 'oyo', '       ff', 'gg', 'ee', '1000000', '2023-07-22 09:35:24', 'Auris', '44', '44', '44', '', '', '', 'Not_paid'),
(2, 'jojuola', 'yinka', 'ayegboyin@gmail.com', '07085859356 \r\n', '12', 'Comprehensive Insurance', 'Yes', ' uploads/64bb9187190182.12048483.jpeg', 'Female', '1991-04-05', '', '10000000', 'oyo', 'ogbomoso south', 'ile salaake  ', 'Jeep', '56776453456', '50000000', '2023-07-22 09:21:27', 'Avalon', '989987', '87889899', '2019', '', '', '', 'Not_paid'),
(3, 'glory', 'yinka', 'pp@uo.gju', 'ijoioko\r\n', 'ijoioko', 'Thrid Party Insurance', 'No', ' uploads/64bb91cae22860.70529326.jpeg', 'Female  ', '2000-03-06', 'TRUCK', '#5000', 'uuuuu', 'yuuuu', 'f', 'Nissan', '7yuy8y', '', '2023-07-22 09:35:00', 'dd', 'dd', 'mm', 'mm', '', '', '', 'Not_paid'),
(5, 'e', 'e', 'o8@gmail.com', 'e', 'e', 'Thrid Party Insurance', 'No', '', 'Male', '6000-02-01', 'SUV', '#5000', 'eee', 'ee', 'ee', 'Lexus', '2222', '', '2023-07-22 09:38:44', '', '', '', '', '', '', '', 'Not_paid'),
(6, 's', '', '99782@gmail.com', 'yy ', 'yy', 'Comprehensive Insurance', 'No', '', '', '1977-02-01', '', '8908688.8', 'oii', '666', '555', 'Acura', '66', '44543444', '2023-07-22 09:40:51', '', '', '', '', '', '', '', 'Not_paid'),
(7, 'll', 'll', 'p@gmail.com', '12', '12', 'Thrid Party Insurance', 'Yes', ' uploads/64bba1da61a0d1.36967979.jpg', 'Male', '0000-00-00', 'SUV', '#5000', 'ou', 'ee', 'ee', 'Volkswagen', 'ee', '', '2023-07-22 10:31:06', '4Runner', 'ff', 'hh', 'fff', '', '', '', 'Not_paid');
