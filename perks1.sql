-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220629.14f90d77f8
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 01:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perks1`
--

-- --------------------------------------------------------

--
-- Table structure for table `creditscore`
--

CREATE TABLE `creditscore` (
  `creditscore_id` bigint(20) NOT NULL,
  `cst_id` bigint(20) NOT NULL,
  `last_updated` date NOT NULL,
  `credit_score` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cst_customer`
--

CREATE TABLE `cst_customer` (
  `cst_id` int(10) NOT NULL,
  `usr_id` int(10) NOT NULL,
  `cst_type` varchar(15) NOT NULL COMMENT 'company or person',
  `comp_name` varchar(50) NOT NULL,
  `cst_fname` varchar(100) NOT NULL,
  `cst_mname` varchar(50) NOT NULL,
  `cst_lname` varchar(50) NOT NULL,
  `cst_dob` date NOT NULL,
  `cst_gender` varchar(10) NOT NULL,
  `cst_address` text NOT NULL,
  `cst_state` varchar(50) NOT NULL,
  `cst_contact` varchar(15) NOT NULL,
  `cst_email` varchar(100) NOT NULL,
  `cst_password` varchar(100) NOT NULL,
  `cst_bankdetail` text NOT NULL,
  `cst_jobdetail` text NOT NULL,
  `cst_note` text NOT NULL,
  `cst_pan` varchar(25) NOT NULL,
  `cst_photo` varchar(100) NOT NULL,
  `cst_idproof` varchar(100) NOT NULL,
  `cst_addressproof` varchar(100) NOT NULL,
  `cst_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cst_customer`
--

INSERT INTO `cst_customer` (`cst_id`, `usr_id`, `cst_type`, `comp_name`, `cst_fname`, `cst_mname`, `cst_lname`, `cst_dob`, `cst_gender`, `cst_address`, `cst_state`, `cst_contact`, `cst_email`, `cst_password`, `cst_bankdetail`, `cst_jobdetail`, `cst_note`, `cst_pan`, `cst_photo`, `cst_idproof`, `cst_addressproof`, `cst_status`) VALUES
(1, 0, 'Customer', '', 'Taylor', 'Alison', 'Swift', '1989-12-05', 'Female', 'California', 'Luzon', '0912345678', 'taylor13@gmail.com', 'taylor13', 'a:3:{i:0;s:3:\"BDO\";i:1;s:10:\"1234123412\";i:2;s:10:\"1231232312\";}', 'Singer', '', '123412345', '3716071212106009908Taylor-Swift.webp', '126499210rcf-background-scaled.jpg', '1555317533274914445_1578208845897373_7164562218993344775_n.jpg', 'Active'),
(2, 0, 'Customer', '', 'Billie', '', 'Eilish', '2000-06-17', 'Female', 'Street #12 House No. 12', 'Luzon', '1234567890', 'billie12@gmail.com', '1234567890', 'a:3:{i:0;s:3:\"BPI\";i:1;s:8:\"21311333\";i:2;s:4:\"4114\";}', 'Songerist', '', '231232123', '1078494821f9dc751d511c907f02808dad68cfea1341-13-billie-eilish.rsquare.w700.webp', '887071891Floor_Plan12.png', '115298121Floor_Plan12.png', 'Active'),
(5, 0, 'Customer', '', 'Ariana', '', 'Grande', '2001-09-12', 'Female', 'Street No House No', 'Luzon', '9055456967', 'ariana14@gmail.com', 'ariana00', 'a:3:{i:0;s:3:\"BDO\";i:1;s:12:\"123-123-9978\";i:2;s:4:\"4114\";}', 'Songerist', '', '398403294', '391747702ariana.jpg', '2075261680Floor_Plan12.png', '2144928632Floor_Plan12.png', 'Active'),
(6, 0, 'Customer', '', 'Cardigan', 'Batumbakal', 'Backyardigan', '2000-05-04', 'Female', 'Addressdmfisdhf', '', '9055456967', 'cardi15@gmail.com', '12345678', 'a:3:{i:0;s:8:\"Landbank\";i:1;s:12:\"123-123-2348\";i:2;s:4:\"4114\";}', 'Songerist', '', '2983012634', '1895444873cardi.jpg', '704197466Floor_Plan12.png', '356348099Floor_Plan12.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `dpmt_delaypayment`
--

CREATE TABLE `dpmt_delaypayment` (
  `dpmt_id` int(10) NOT NULL,
  `dpmt_charge` double(10,2) NOT NULL,
  `dpmt_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dpmt_delaypayment`
--

INSERT INTO `dpmt_delaypayment` (`dpmt_id`, `dpmt_charge`, `dpmt_status`) VALUES
(7, 18.00, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `lacc_loanaccount`
--

CREATE TABLE `lacc_loanaccount` (
  `lacc_id` int(10) NOT NULL,
  `cst_id` int(11) NOT NULL,
  `lacc_no` varchar(50) NOT NULL,
  `comp_name` varchar(30) NOT NULL,
  `lacc_custname` varchar(50) NOT NULL,
  `lacc_swdof` varchar(30) NOT NULL,
  `lacc_dob` date NOT NULL,
  `lacc_pan` varchar(20) NOT NULL,
  `lacc_securityentry` text NOT NULL,
  `lacc_restype` varchar(25) NOT NULL,
  `lacc_resaddr` text NOT NULL,
  `lacc_compaddr` text NOT NULL,
  `lacc_permaddr` text NOT NULL,
  `lacc_gender` varchar(10) NOT NULL,
  `lacc_martialst` varchar(10) NOT NULL,
  `lacc_jobprofile` text NOT NULL,
  `lacc_education` varchar(25) NOT NULL,
  `lacc_ihave` text NOT NULL,
  `lacc_bankac` text NOT NULL,
  `lacc_loanamt` double(10,2) NOT NULL,
  `lacc_intrate` double(10,2) NOT NULL,
  `interest_amt` double NOT NULL,
  `lacc_tenor` text NOT NULL,
  `lacc_reference1` varchar(250) NOT NULL,
  `lacc_reference2` varchar(250) NOT NULL,
  `lacc_guarantor1` text NOT NULL,
  `lacc_guarantor2` text NOT NULL,
  `lacc_photo` varchar(100) NOT NULL,
  `lacc_idproof` varchar(100) NOT NULL,
  `lacc_adressproof` varchar(100) NOT NULL,
  `lacc_applicationdt` date NOT NULL,
  `lacc_opendt` date NOT NULL,
  `ltyp_id` int(10) NOT NULL,
  `ltyp_loantyp` varchar(50) NOT NULL,
  `lpf_id` int(10) NOT NULL,
  `lpf_amttype` varchar(25) NOT NULL,
  `lacc_ipfprocessingfee` double(10,2) NOT NULL,
  `lacc_remarks` text NOT NULL,
  `dpmt_charge` double(10,2) NOT NULL,
  `capture_pancard` text NOT NULL,
  `lacc_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lacc_loanaccount`
--

INSERT INTO `lacc_loanaccount` (`lacc_id`, `cst_id`, `lacc_no`, `comp_name`, `lacc_custname`, `lacc_swdof`, `lacc_dob`, `lacc_pan`, `lacc_securityentry`, `lacc_restype`, `lacc_resaddr`, `lacc_compaddr`, `lacc_permaddr`, `lacc_gender`, `lacc_martialst`, `lacc_jobprofile`, `lacc_education`, `lacc_ihave`, `lacc_bankac`, `lacc_loanamt`, `lacc_intrate`, `interest_amt`, `lacc_tenor`, `lacc_reference1`, `lacc_reference2`, `lacc_guarantor1`, `lacc_guarantor2`, `lacc_photo`, `lacc_idproof`, `lacc_adressproof`, `lacc_applicationdt`, `lacc_opendt`, `ltyp_id`, `ltyp_loantyp`, `lpf_id`, `lpf_amttype`, `lacc_ipfprocessingfee`, `lacc_remarks`, `dpmt_charge`, `capture_pancard`, `lacc_status`) VALUES
(1, 1, '', '', 'Taylor Alison Swift', '', '1989-12-05', '123412345', '', 'Owned by self/spouse', 'a:4:{i:0;s:10:\"California\";i:1;s:5:\"Luzon\";i:2;s:10:\"0912345678\";i:3;s:18:\"taylor13@gmail.com\";}', 'records', 'a:4:{i:0;s:10:\"California\";i:1;s:5:\"Luzon\";i:2;s:10:\"0912345678\";i:3;s:18:\"taylor13@gmail.com\";}', 'Female', '', 'a:4:{i:0;s:5:\"30000\";i:1;s:4:\"Cash\";i:2;s:7:\"records\";i:3;s:8:\"5+ Years\";}', '', '', '', 20000.00, 12.00, 0, '24', '', '', '', '', '3716071212106009908Taylor-Swift.webp', '126499210rcf-background-scaled.jpg', '1555317533274914445_1578208845897373_7164562218993344775_n.jpg', '2022-06-17', '0000-00-00', 4, 'Personal Loan', 0, '', 0.00, '', 0.00, '', 'Pending'),
(2, 2, '', '', 'Billie  Eilish', '', '2000-06-17', '231232123', '', 'Rented- Staying alone', 'a:4:{i:0;s:23:\"Street #12 House No. 12\";i:1;s:5:\"Luzon\";i:2;s:10:\"1234567890\";i:3;s:18:\"billie12@gmail.com\";}', 'Canva', 'a:4:{i:0;s:23:\"Street #12 House No. 12\";i:1;s:5:\"Luzon\";i:2;s:10:\"1234567890\";i:3;s:18:\"billie12@gmail.com\";}', 'Female', '', 'a:4:{i:0;s:6:\"200000\";i:1;s:13:\"Bank Transfer\";i:2;s:5:\"Canva\";i:3;s:8:\"5+ Years\";}', '', '', '', 150000.00, 16.00, 0, '15', '', '', '', '', '1078494821f9dc751d511c907f02808dad68cfea1341-13-billie-eilish.rsquare.w700.webp', '887071891Floor_Plan12.png', '115298121Floor_Plan12.png', '2022-06-26', '0000-00-00', 7, 'Home Loan', 0, '', 0.00, '', 0.00, '', 'Pending'),
(3, 6, '', '', 'Cardigan Batumbakal Backyardigan', '', '2000-05-04', '2983012634', '', '', 'a:4:{i:0;s:15:\"Addressdmfisdhf\";i:1;s:0:\"\";i:2;s:10:\"9055456967\";i:3;s:17:\"cardi15@gmail.com\";}', '', 'a:4:{i:0;s:15:\"Addressdmfisdhf\";i:1;s:0:\"\";i:2;s:10:\"9055456967\";i:3;s:17:\"cardi15@gmail.com\";}', 'Female', '', 'a:4:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";}', '', '', '', 0.00, 15.00, 0, '30', '', '', '', '', '1895444873cardi.jpg', '704197466Floor_Plan12.png', '356348099Floor_Plan12.png', '2022-06-26', '0000-00-00', 9, 'Vehicle Loan', 0, '', 0.00, '', 0.00, '', 'Rejected'),
(4, 6, '', '', 'Cardigan Batumbakal Backyardigan', '', '2000-05-04', '2983012634', '', 'Rented- Staying alone', 'a:4:{i:0;s:15:\"Addressdmfisdhf\";i:1;s:5:\"Luzon\";i:2;s:10:\"9055456967\";i:3;s:17:\"cardi15@gmail.com\";}', 'Records', 'a:4:{i:0;s:15:\"Addressdmfisdhf\";i:1;s:5:\"Luzon\";i:2;s:10:\"9055456967\";i:3;s:17:\"cardi15@gmail.com\";}', 'Female', '', 'a:4:{i:0;s:5:\"20000\";i:1;s:13:\"Bank Transfer\";i:2;s:7:\"Records\";i:3;s:8:\"5+ Years\";}', '', '', '', 100000.00, 14.00, 0, '30', '', '', '', '', '1895444873cardi.jpg', '704197466Floor_Plan12.png', '356348099Floor_Plan12.png', '2022-06-26', '0000-00-00', 8, 'Education loan', 0, '', 0.00, '', 0.00, '', 'Pending'),
(5, 1, '#ML-220630-1', '', 'Taylor Alison Swift', '', '1989-12-05', '123412345', '', 'Hostel', 'a:4:{i:0;s:10:\"California\";i:1;s:5:\"Luzon\";i:2;s:10:\"0912345678\";i:3;s:18:\"taylor13@gmail.com\";}', 'Canva', 'a:4:{i:0;s:10:\"California\";i:1;s:5:\"Luzon\";i:2;s:10:\"0912345678\";i:3;s:18:\"taylor13@gmail.com\";}', 'Female', '', 'a:4:{i:0;s:5:\"50000\";i:1;s:13:\"Bank Transfer\";i:2;s:5:\"Canva\";i:3;s:8:\"5+ Years\";}', '', '', '', 20000.00, 18.00, 9000, '30', '', '', '', '', '3716071212106009908Taylor-Swift.webp', '126499210rcf-background-scaled.jpg', '1555317533274914445_1578208845897373_7164562218993344775_n.jpg', '2022-06-30', '2022-06-30', 6, 'Business loan', 3, 'Flat', 500.00, '', 18.00, '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `lins_loaninstallment`
--

CREATE TABLE `lins_loaninstallment` (
  `lins_id` bigint(10) NOT NULL,
  `lacc_id` int(10) NOT NULL,
  `lins_no` int(10) NOT NULL,
  `lins_date` date NOT NULL,
  `lins_amt` double(20,2) NOT NULL,
  `lins_iperc` double NOT NULL,
  `lins_iamt` double(20,2) NOT NULL,
  `lins_chqno` varchar(25) NOT NULL,
  `lins_note` text NOT NULL,
  `lins_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lins_loaninstallment`
--

INSERT INTO `lins_loaninstallment` (`lins_id`, `lacc_id`, `lins_no`, `lins_date`, `lins_amt`, `lins_iperc`, `lins_iamt`, `lins_chqno`, `lins_note`, `lins_status`) VALUES
(1, 5, 1, '2022-07-30', 666.67, 18, 300.00, '', '', 'Active'),
(2, 5, 2, '2022-08-30', 666.67, 18, 300.00, '', '', 'Active'),
(3, 5, 3, '2022-09-30', 666.67, 18, 300.00, '', '', 'Active'),
(4, 5, 4, '2022-10-30', 666.67, 18, 300.00, '', '', 'Active'),
(5, 5, 5, '2022-11-30', 666.67, 18, 300.00, '', '', 'Active'),
(6, 5, 6, '2022-12-30', 666.67, 18, 300.00, '', '', 'Active'),
(7, 5, 7, '2023-01-30', 666.67, 18, 300.00, '', '', 'Active'),
(8, 5, 8, '2023-03-02', 666.67, 18, 300.00, '', '', 'Active'),
(9, 5, 9, '2023-03-30', 666.67, 18, 300.00, '', '', 'Active'),
(10, 5, 10, '2023-04-30', 666.67, 18, 300.00, '', '', 'Active'),
(11, 5, 11, '2023-05-30', 666.67, 18, 300.00, '', '', 'Active'),
(12, 5, 12, '2023-06-30', 666.67, 18, 300.00, '', '', 'Active'),
(13, 5, 13, '2023-07-30', 666.67, 18, 300.00, '', '', 'Active'),
(14, 5, 14, '2023-08-30', 666.67, 18, 300.00, '', '', 'Active'),
(15, 5, 15, '2023-09-30', 666.67, 18, 300.00, '', '', 'Active'),
(16, 5, 16, '2023-10-30', 666.67, 18, 300.00, '', '', 'Active'),
(17, 5, 17, '2023-11-30', 666.67, 18, 300.00, '', '', 'Active'),
(18, 5, 18, '2023-12-30', 666.67, 18, 300.00, '', '', 'Active'),
(19, 5, 19, '2024-01-30', 666.67, 18, 300.00, '', '', 'Active'),
(20, 5, 20, '2024-03-01', 666.67, 18, 300.00, '', '', 'Active'),
(21, 5, 21, '2024-03-30', 666.67, 18, 300.00, '', '', 'Active'),
(22, 5, 22, '2024-04-30', 666.67, 18, 300.00, '', '', 'Active'),
(23, 5, 23, '2024-05-30', 666.67, 18, 300.00, '', '', 'Active'),
(24, 5, 24, '2024-06-30', 666.67, 18, 300.00, '', '', 'Active'),
(25, 5, 25, '2024-07-30', 666.67, 18, 300.00, '', '', 'Active'),
(26, 5, 26, '2024-08-30', 666.67, 18, 300.00, '', '', 'Active'),
(27, 5, 27, '2024-09-30', 666.67, 18, 300.00, '', '', 'Active'),
(28, 5, 28, '2024-10-30', 666.67, 18, 300.00, '', '', 'Active'),
(29, 5, 29, '2024-11-30', 666.67, 18, 300.00, '', '', 'Active'),
(30, 5, 30, '2024-12-30', 666.67, 18, 300.00, '', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `lpf_loanprocessingfee`
--

CREATE TABLE `lpf_loanprocessingfee` (
  `lpf_id` int(10) NOT NULL,
  `lpf_famt` double(20,2) NOT NULL,
  `lpf_tamt` double(20,2) NOT NULL,
  `lpf_amttype` varchar(20) NOT NULL,
  `lpf_amt` double(20,2) NOT NULL,
  `lpf_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lpf_loanprocessingfee`
--

INSERT INTO `lpf_loanprocessingfee` (`lpf_id`, `lpf_famt`, `lpf_tamt`, `lpf_amttype`, `lpf_amt`, `lpf_status`) VALUES
(3, 1000.00, 100000.00, 'Flat', 500.00, 'Active'),
(4, 100001.00, 300000.00, 'Percentage', 5.00, 'Active'),
(5, 300001.00, 2500000.00, 'Percentage', 4.00, 'Active'),
(6, 2500001.00, 10000000.00, 'Percentage', 3.00, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `ltr_loantransaction`
--

CREATE TABLE `ltr_loantransaction` (
  `ltr_id` bigint(20) NOT NULL,
  `lacc_id` int(10) NOT NULL,
  `lins_id` int(10) NOT NULL,
  `ltr_transdt` date NOT NULL,
  `ltr_transtype` varchar(20) NOT NULL,
  `ltr_billno` varchar(20) NOT NULL,
  `ltr_amt` double(10,2) NOT NULL,
  `ltr_paymenttype` varchar(20) NOT NULL,
  `ltr_chqno` varchar(25) NOT NULL,
  `ltr_bank` varchar(100) NOT NULL,
  `ltr_note` text NOT NULL,
  `ltr_status` varchar(10) NOT NULL,
  `ltr_cancellationtype` varchar(200) NOT NULL,
  `ltr_cancellationreason` text NOT NULL,
  `ltr_chq_bounce_id` int(10) NOT NULL,
  `ltr_del_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ltr_loantransaction`
--

INSERT INTO `ltr_loantransaction` (`ltr_id`, `lacc_id`, `lins_id`, `ltr_transdt`, `ltr_transtype`, `ltr_billno`, `ltr_amt`, `ltr_paymenttype`, `ltr_chqno`, `ltr_bank`, `ltr_note`, `ltr_status`, `ltr_cancellationtype`, `ltr_cancellationreason`, `ltr_chq_bounce_id`, `ltr_del_id`) VALUES
(1, 5, 1, '2022-07-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(2, 5, 1, '2022-07-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(3, 5, 2, '2022-08-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(4, 5, 2, '2022-08-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(5, 5, 3, '2022-09-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(6, 5, 3, '2022-09-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(7, 5, 4, '2022-10-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(8, 5, 4, '2022-10-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(9, 5, 5, '2022-11-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(10, 5, 5, '2022-11-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(11, 5, 6, '2022-12-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(12, 5, 6, '2022-12-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(13, 5, 7, '2023-01-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(14, 5, 7, '2023-01-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(15, 5, 8, '2023-03-02', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(16, 5, 8, '2023-03-02', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(17, 5, 9, '2023-03-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(18, 5, 9, '2023-03-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(19, 5, 10, '2023-04-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(20, 5, 10, '2023-04-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(21, 5, 11, '2023-05-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(22, 5, 11, '2023-05-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(23, 5, 12, '2023-06-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(24, 5, 12, '2023-06-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(25, 5, 13, '2023-07-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(26, 5, 13, '2023-07-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(27, 5, 14, '2023-08-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(28, 5, 14, '2023-08-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(29, 5, 15, '2023-09-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(30, 5, 15, '2023-09-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(31, 5, 16, '2023-10-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(32, 5, 16, '2023-10-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(33, 5, 17, '2023-11-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(34, 5, 17, '2023-11-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(35, 5, 18, '2023-12-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(36, 5, 18, '2023-12-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(37, 5, 19, '2024-01-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(38, 5, 19, '2024-01-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(39, 5, 20, '2024-03-01', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(40, 5, 20, '2024-03-01', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(41, 5, 21, '2024-03-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(42, 5, 21, '2024-03-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(43, 5, 22, '2024-04-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(44, 5, 22, '2024-04-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(45, 5, 23, '2024-05-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(46, 5, 23, '2024-05-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(47, 5, 24, '2024-06-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(48, 5, 24, '2024-06-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(49, 5, 25, '2024-07-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(50, 5, 25, '2024-07-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(51, 5, 26, '2024-08-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(52, 5, 26, '2024-08-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(53, 5, 27, '2024-09-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(54, 5, 27, '2024-09-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(55, 5, 28, '2024-10-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(56, 5, 28, '2024-10-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(57, 5, 29, '2024-11-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(58, 5, 29, '2024-11-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(59, 5, 30, '2024-12-30', 'Principal', '0', 666.67, '', '', '', '', 'Active', '', '', 0, 0),
(60, 5, 30, '2024-12-30', 'Interest', '0', 300.00, '', '', '', '', 'Active', '', '', 0, 0),
(61, 5, 1, '2022-06-30', 'Payment', '0', 966.00, 'VISA', '', '', 'a:5:{i:0;s:4:\"VISA\";i:1;s:19:\"Taylor Alison Swift\";i:2;s:16:\"4748223300982142\";i:3;s:7:\"2029-01\";i:4;s:3:\"554\";}', 'Active', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ltyp_loantypes`
--

CREATE TABLE `ltyp_loantypes` (
  `ltyp_id` int(10) NOT NULL,
  `ltyp_loantype` varchar(25) NOT NULL,
  `ltyp_icon` varchar(100) NOT NULL,
  `min_loanamt` double NOT NULL,
  `max_loanamt` double NOT NULL,
  `ltyp_maxmonth` int(10) NOT NULL,
  `ltyp_interestperc` float(10,2) NOT NULL,
  `ltyp_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ltyp_loantypes`
--

INSERT INTO `ltyp_loantypes` (`ltyp_id`, `ltyp_loantype`, `ltyp_icon`, `min_loanamt`, `max_loanamt`, `ltyp_maxmonth`, `ltyp_interestperc`, `ltyp_status`) VALUES
(4, 'Personal Loan', 'personal-loan.jpg', 10000, 300000, 24, 12.00, 'Active'),
(5, 'Payday Loan', 'payday-loan.jpg', 1000, 25000, 1, 30.00, 'Active'),
(6, 'Business loan', 'business-loan.jpg', 15000, 1500000, 30, 18.00, 'Active'),
(7, 'House Loan', 'house-loan.jpg', 150000, 1500000, 15, 16.00, 'Active'),
(8, 'Educational loan', 'educational-loan.jpg', 100000, 1000000, 30, 14.00, 'Active'),
(9, 'Vehicle Loan', 'car-loan.jpg', 50000, 5000000, 30, 15.00, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `st_state`
--

CREATE TABLE `st_state` (
  `st_id` bigint(20) NOT NULL,
  `st_state` varchar(100) NOT NULL,
  `st_note` text NOT NULL,
  `st_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `st_state`
--

INSERT INTO `st_state` (`st_id`, `st_state`, `st_note`, `st_status`) VALUES
(1, 'Luzon', 'abc', 'Active'),
(2, 'Visayas', 'lmn ec', 'Active'),
(3, 'Mindanao', 'fsdf', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `usr_user`
--

CREATE TABLE `usr_user` (
  `usr_id` int(10) NOT NULL,
  `usr_name` varchar(25) NOT NULL,
  `usr_login_id` varchar(25) NOT NULL,
  `usr_password` varchar(150) NOT NULL,
  `usr_contact` varchar(15) NOT NULL,
  `usr_emailid` varchar(100) NOT NULL,
  `usr_note` text NOT NULL,
  `usr_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_user`
--

INSERT INTO `usr_user` (`usr_id`, `usr_name`, `usr_login_id`, `usr_password`, `usr_contact`, `usr_emailid`, `usr_note`, `usr_status`) VALUES
(1, 'admin admin', 'admin', 'admin', '78945612530', 'admin@gmail.com', 'Super Admin Record', 'Active'),
(2, 'Eiyah Tusi', 'eiyah', 'eiyah', '78945612531', 'eiyah@gmail.com', 'Admin', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creditscore`
--
ALTER TABLE `creditscore`
  ADD PRIMARY KEY (`creditscore_id`);

--
-- Indexes for table `cst_customer`
--
ALTER TABLE `cst_customer`
  ADD PRIMARY KEY (`cst_id`),
  ADD UNIQUE KEY `cst_email` (`cst_email`),
  ADD UNIQUE KEY `cst_pan` (`cst_pan`);

--
-- Indexes for table `dpmt_delaypayment`
--
ALTER TABLE `dpmt_delaypayment`
  ADD PRIMARY KEY (`dpmt_id`);

--
-- Indexes for table `lacc_loanaccount`
--
ALTER TABLE `lacc_loanaccount`
  ADD PRIMARY KEY (`lacc_id`);

--
-- Indexes for table `lins_loaninstallment`
--
ALTER TABLE `lins_loaninstallment`
  ADD PRIMARY KEY (`lins_id`);

--
-- Indexes for table `lpf_loanprocessingfee`
--
ALTER TABLE `lpf_loanprocessingfee`
  ADD PRIMARY KEY (`lpf_id`);

--
-- Indexes for table `ltr_loantransaction`
--
ALTER TABLE `ltr_loantransaction`
  ADD PRIMARY KEY (`ltr_id`);

--
-- Indexes for table `ltyp_loantypes`
--
ALTER TABLE `ltyp_loantypes`
  ADD PRIMARY KEY (`ltyp_id`);

--
-- Indexes for table `st_state`
--
ALTER TABLE `st_state`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `usr_user`
--
ALTER TABLE `usr_user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `creditscore`
--
ALTER TABLE `creditscore`
  MODIFY `creditscore_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cst_customer`
--
ALTER TABLE `cst_customer`
  MODIFY `cst_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dpmt_delaypayment`
--
ALTER TABLE `dpmt_delaypayment`
  MODIFY `dpmt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lacc_loanaccount`
--
ALTER TABLE `lacc_loanaccount`
  MODIFY `lacc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lins_loaninstallment`
--
ALTER TABLE `lins_loaninstallment`
  MODIFY `lins_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `lpf_loanprocessingfee`
--
ALTER TABLE `lpf_loanprocessingfee`
  MODIFY `lpf_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ltr_loantransaction`
--
ALTER TABLE `ltr_loantransaction`
  MODIFY `ltr_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `ltyp_loantypes`
--
ALTER TABLE `ltyp_loantypes`
  MODIFY `ltyp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `st_state`
--
ALTER TABLE `st_state`
  MODIFY `st_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usr_user`
--
ALTER TABLE `usr_user`
  MODIFY `usr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



