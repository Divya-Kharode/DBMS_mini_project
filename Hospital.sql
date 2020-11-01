-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2020 at 04:17 AM
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
-- Database: `Hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Mobile_No` bigint(10) NOT NULL,
  `Role` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`Name`, `Email`, `Password`, `Mobile_No`, `Role`) VALUES
('Divya Kharode', 'admin.hospital@gmail.com', '$2y$10$cvFvhuSk/0yMGlX9rnUgkez3jSuZTUn.kaoPZc2ScD6eHN4g3T2fm', 9623568915, 'Manager'),
('Payal Jagwani', 'payaljagwani@gmail.com', '$2y$10$6NOKhXKiR2SAgpFF2WpCkuRgYKlSqFJaqM0NgIM3PT1gKHEM5/SM6', 9623568915, 'Head');

-- --------------------------------------------------------

--
-- Table structure for table `Admitted_Patient`
--

CREATE TABLE `Admitted_Patient` (
  `Pat_id` varchar(20) DEFAULT NULL,
  `Pat_name` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Blood_Group` varchar(5) NOT NULL,
  `Doc_id` varchar(10) DEFAULT NULL,
  `Admit_date` date DEFAULT NULL,
  `Ward_id` varchar(5) DEFAULT NULL,
  `Dept_id` varchar(5) DEFAULT NULL,
  `Room_no` varchar(5) DEFAULT NULL,
  `Disease` varchar(25) DEFAULT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Contact_no` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admitted_Patient`
--

INSERT INTO `Admitted_Patient` (`Pat_id`, `Pat_name`, `Age`, `Blood_Group`, `Doc_id`, `Admit_date`, `Ward_id`, `Dept_id`, `Room_no`, `Disease`, `Address`, `City`, `Contact_no`) VALUES
('APP003', 'Ruchita', 50, 'A+', 'DOC001', '2020-07-08', 'W001', 'DE001', 'R001', 'Weakness', 'Amravati', 'Amravati', '9804567430'),
('APP004', 'Ram', 50, 'A+', 'DOC002', '2020-07-09', 'W002', 'DE002', 'R002', 'Weakness', 'Akola', 'Akola', '9876789000'),
('APP007', 'Ramesh', 80, 'B+', 'DOC003', '2020-07-05', 'W003', 'DE003', 'R003', 'Cancer', 'Amravati', 'Amravati', '9876789000'),
('APP003', 'Ruchita', 50, 'A+', 'DOC001', '2020-07-08', 'W001', 'DE001', 'R001', 'Weakness', 'Amravati', 'Amravati', '9804567430'),
('APP004', 'Ram', 50, 'A+', 'DOC002', '2020-07-09', 'W002', 'DE002', 'R002', 'Weakness', 'Akola', 'Akola', '9876789000'),
('APP007', 'Ramesh', 80, 'B+', 'DOC003', '2020-07-05', 'W003', 'DE003', 'R003', 'Cancer', 'Amravati', 'Amravati', '9876789000');

-- --------------------------------------------------------

--
-- Table structure for table `Ambulance`
--

CREATE TABLE `Ambulance` (
  `Am_no` varchar(10) NOT NULL,
  `Capacity` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Ambulance`
--

INSERT INTO `Ambulance` (`Am_no`, `Capacity`) VALUES
('MH27BR3624', '2'),
('MH27BR3625', '2'),
('MH27BR3626', '2'),
('MH27BR3627', '2'),
('MH27BR3628', '2');

-- --------------------------------------------------------

--
-- Table structure for table `Ambulance_Details`
--

CREATE TABLE `Ambulance_Details` (
  `Driver_id` varchar(5) DEFAULT NULL,
  `Pat_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Ambulance_Details`
--

INSERT INTO `Ambulance_Details` (`Driver_id`, `Pat_id`) VALUES
('DI001', 'APP012'),
('DI001', 'APP012');

-- --------------------------------------------------------

--
-- Table structure for table `Ambulance_Driver`
--

CREATE TABLE `Ambulance_Driver` (
  `Driver_id` varchar(5) NOT NULL,
  `Driver_name` varchar(20) DEFAULT NULL,
  `Salary` decimal(10,2) DEFAULT NULL,
  `Am_no` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Ambulance_Driver`
--

INSERT INTO `Ambulance_Driver` (`Driver_id`, `Driver_name`, `Salary`, `Am_no`) VALUES
('DI001', 'Manoj', '10000.00', 'MH27BR3624'),
('DI002', 'Rahul', '10000.00', 'MH27BR3625'),
('DI003', 'Saurabh', '10000.00', 'MH27BR3626'),
('DI004', 'Ram', '10000.00', 'MH27BR3627'),
('DI005', 'Shyam', '10000.00', 'MH27BR3628');

-- --------------------------------------------------------

--
-- Table structure for table `Appointment`
--

CREATE TABLE `Appointment` (
  `App_id` varchar(20) NOT NULL,
  `Pat_name` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Blood_Group` varchar(5) NOT NULL,
  `Doc_id` varchar(10) DEFAULT NULL,
  `App_time` time NOT NULL,
  `App_date` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Contact_no` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Appointment`
--

INSERT INTO `Appointment` (`App_id`, `Pat_name`, `Age`, `Blood_Group`, `Doc_id`, `App_time`, `App_date`, `Address`, `City`, `Contact_no`) VALUES
('APP001', 'Rakesh', 80, 'O+', 'DOC001', '07:00:00', '2020-07-09', 'Amravati', 'Amravati', '9876789000'),
('APP002', 'Nikita', 30, 'O-', 'DOC001', '07:20:00', '2020-06-08', 'Amravati', 'Amravati', '7890005678'),
('APP003', 'Ruchita', 50, 'A+', 'DOC001', '07:40:00', '2020-06-07', 'Amravati', 'Amravati', '9804567430'),
('APP004', 'Ram', 50, 'A+', 'DOC002', '07:00:00', '2020-08-01', 'Akola', 'Akola', '9876789000'),
('APP005', 'Lokesh', 40, 'A-', 'DOC002', '07:20:00', '2020-08-01', 'Pune', 'Pune', '7890005678'),
('APP006', 'Hardik', 10, 'B+', 'DOC002', '07:40:00', '2020-08-02', 'Pune', 'Pune', '9804567430'),
('APP007', 'Ramesh', 80, 'B+', 'DOC003', '07:00:00', '2020-07-09', 'Amravati', 'Amravati', '9876789000'),
('APP008', 'Radha', 20, 'A+', 'DOC003', '07:20:00', '2020-06-08', 'Pune', 'Pune', '7890005678'),
('APP009', 'Krishna', 50, 'B', 'DOC003', '07:40:00', '2020-06-07', 'Amravati', 'Amravati', '9804567430'),
('APP010', 'Rakesh', 80, 'O+', 'DOC004', '07:00:00', '2020-07-09', 'Amravati', 'Amravati', '9876789000'),
('APP011', 'Nikita', 30, 'O-', 'DOC005', '07:20:00', '2020-06-08', 'Amravati', 'Amravati', '7890005678'),
('APP012', 'Ruchita', 50, 'A+', 'DOC005', '07:40:00', '2020-06-07', 'Amravati', 'Amravati', '9804567430');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `Brand_id` int(255) NOT NULL,
  `Brand_Name` char(70) NOT NULL,
  `Brand_Image` char(100) NOT NULL,
  `Time_Stamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `Brand_info` text NOT NULL,
  `Brand_website` char(150) DEFAULT NULL,
  `Brand_Owner` char(200) DEFAULT NULL,
  `Top` tinyint(1) NOT NULL DEFAULT 0,
  `Active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_id` int(255) NOT NULL,
  `Category_name` char(80) NOT NULL,
  `Image_path` char(255) DEFAULT NULL,
  `Time_Stamp` timestamp(6) NULL DEFAULT current_timestamp(6),
  `Active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` bigint(20) NOT NULL,
  `Customer_email` char(100) NOT NULL,
  `Register_Timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `Last_login_Timestamp` timestamp(6) NULL DEFAULT NULL,
  `Session_count` bigint(255) DEFAULT NULL,
  `Account_status` char(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
  `Dept_id` varchar(5) NOT NULL,
  `Dept_name` varchar(20) NOT NULL,
  `Head_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`Dept_id`, `Dept_name`, `Head_name`) VALUES
('DE001', 'Neurology', 'Dr.Rakesh'),
('DE002', 'Cancer', 'Dr.Navdeep'),
('DE003', 'Radiology', 'Dr.Mohan'),
('DE004', 'Cardiology', 'Dr.Roshan'),
('DE005', 'Immunologists', 'Dr.Sarang');

-- --------------------------------------------------------

--
-- Table structure for table `Discharge_Patient`
--

CREATE TABLE `Discharge_Patient` (
  `Pat_id` varchar(20) DEFAULT NULL,
  `Pat_name` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Blood_Group` varchar(5) NOT NULL,
  `Doc_id` varchar(10) DEFAULT NULL,
  `Discharge_date` date DEFAULT NULL,
  `Ward_id` varchar(5) DEFAULT NULL,
  `Dept_id` varchar(5) DEFAULT NULL,
  `Room_no` varchar(5) DEFAULT NULL,
  `Disease` varchar(25) DEFAULT NULL,
  `Total_bill` decimal(10,2) DEFAULT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Contact_no` varchar(12) DEFAULT NULL,
  `Admitted_Patient` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Discharge_Patient`
--

INSERT INTO `Discharge_Patient` (`Pat_id`, `Pat_name`, `Age`, `Blood_Group`, `Doc_id`, `Discharge_date`, `Ward_id`, `Dept_id`, `Room_no`, `Disease`, `Total_bill`, `Address`, `City`, `Contact_no`, `Admitted_Patient`) VALUES
('APP002', 'Nikita', 30, 'O-', 'DOC001', '2020-07-15', 'W001', 'DE001', 'R002', 'Headache', '45000.00', 'Amravati', 'Amravati', '7890005678', NULL),
('APP002', 'Nikita', 30, 'O-', 'DOC001', '2020-07-15', 'W001', 'DE001', 'R002', 'Headache', '45000.00', 'Amravati', 'Amravati', '7890005678', '2020-07-10'),
('APP012', 'Ruchita', 50, 'A+', 'DOC005', '2020-06-10', 'W005', 'DE005', 'R001', 'Weakness', '35000.00', 'Amravati', 'Amravati', '9804567430', '2020-06-08'),
('APP002', 'Nikita', 30, 'O-', 'DOC001', '2020-07-15', 'W001', 'DE001', 'R002', 'Headache', '45000.00', 'Amravati', 'Amravati', '7890005678', NULL),
('APP002', 'Nikita', 30, 'O-', 'DOC001', '2020-07-15', 'W001', 'DE001', 'R002', 'Headache', '45000.00', 'Amravati', 'Amravati', '7890005678', '2020-07-10'),
('APP012', 'Ruchita', 50, 'A+', 'DOC005', '2020-06-10', 'W005', 'DE005', 'R001', 'Weakness', '35000.00', 'Amravati', 'Amravati', '9804567430', '2020-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `Doctor`
--

CREATE TABLE `Doctor` (
  `Doc_id` varchar(10) NOT NULL,
  `Doc_name` varchar(20) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Salary` decimal(10,2) DEFAULT NULL,
  `Dept_id` varchar(5) DEFAULT NULL,
  `Office_id` varchar(5) DEFAULT NULL,
  `Contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Doctor`
--

INSERT INTO `Doctor` (`Doc_id`, `Doc_name`, `Degree`, `Designation`, `Salary`, `Dept_id`, `Office_id`, `Contact_no`) VALUES
('DOC001', 'Dr.Rakesh', 'MBBS,MD(Neurology)', 'Surgeon', '100000.00', 'DE001', 'OF001', '9432456780'),
('DOC002', 'Dr.Navdeep', 'MD(Oncologist)', 'Surgeon', '100000.00', 'DE002', 'OF002', '8888855555'),
('DOC003', 'Dr.Navdeep', 'MD(Radiologist)', 'Surgeon', '100000.00', 'DE003', 'OF003', '7685949302'),
('DOC004', 'Dr.Mohan', 'MD(Cardiologist)', 'Surgeon', '100000.00', 'DE004', 'OF004', '8976548900'),
('DOC005', 'Dr.Roshan', 'MD(Immunologist)', 'Surgeon', '100000.00', 'DE005', 'OF005', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `Doctor_Assistant`
--

CREATE TABLE `Doctor_Assistant` (
  `Ass_id` varchar(10) NOT NULL,
  `Ass_name` varchar(20) DEFAULT NULL,
  `Doc_id` varchar(10) DEFAULT NULL,
  `Degree` varchar(20) NOT NULL,
  `Salary` decimal(10,2) DEFAULT NULL,
  `Dept_id` varchar(5) DEFAULT NULL,
  `Contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Doctor_Assistant`
--

INSERT INTO `Doctor_Assistant` (`Ass_id`, `Ass_name`, `Doc_id`, `Degree`, `Salary`, `Dept_id`, `Contact_no`) VALUES
('ASS003', 'Dr.Rahul', 'DOC003', 'MBBS', '40000.00', 'DE003', '7890564321'),
('ASS004', 'Dr.Akash', 'DOC004', 'MBBS', '25000.00', 'DE004', '8912345670');

-- --------------------------------------------------------

--
-- Table structure for table `Medicine`
--

CREATE TABLE `Medicine` (
  `Med_id` varchar(20) NOT NULL,
  `Med_name` varchar(20) NOT NULL,
  `Med_company` varchar(20) DEFAULT NULL,
  `Cost` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Medicine`
--

INSERT INTO `Medicine` (`Med_id`, `Med_name`, `Med_company`, `Cost`) VALUES
('ME001', 'Sinarest', 'ABC', '5.00'),
('ME002', 'Decold', 'ABC', '10.00'),
('ME003', 'ColdCold', 'ABC', '12.00'),
('ME004', 'Crocin', 'XYZ', '14.00'),
('ME005', 'Mylanta', 'XYZ', '8.00'),
('ME006', 'Di-Gel', 'XYZ', '6.00'),
('ME007', 'Gelusil', 'PQR', '7.00'),
('ME008', 'Alamag', 'PQR', '5.00'),
('ME009', 'Almacone', 'PQR', '20.00');

-- --------------------------------------------------------

--
-- Table structure for table `Nurse`
--

CREATE TABLE `Nurse` (
  `Nurse_id` varchar(10) NOT NULL,
  `Nurse_name` varchar(20) DEFAULT NULL,
  `Ward_id` varchar(5) DEFAULT NULL,
  `Dept_id` varchar(5) DEFAULT NULL,
  `Salary` decimal(10,2) DEFAULT NULL,
  `Contact_no` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Nurse`
--

INSERT INTO `Nurse` (`Nurse_id`, `Nurse_name`, `Ward_id`, `Dept_id`, `Salary`, `Contact_no`) VALUES
('N001', 'Sita', 'W001', 'DE001', '20000.00', '9456712345'),
('N002', 'Gita', 'W002', 'DE001', '20000.00', '8909012345'),
('N003', 'Rangoli', 'W003', 'DE001', '20000.00', '7890612345'),
('N004', 'Chanchal', 'W001', 'DE002', '20000.00', '8765654321'),
('N005', 'Kavya', 'W002', 'DE002', '20000.00', '8976512453'),
('N006', 'Akshra', 'W001', 'DE003', '20000.00', '9089712345'),
('N007', 'Rama', 'W002', 'DE003', '20000.00', '9089098909'),
('N008', 'Ashita', 'W001', 'DE004', '20000.00', '7890612345'),
('N009', 'Aruna', 'W002', 'DE004', '20000.00', '7898778781'),
('N010', 'Akirti', 'W001', 'DE005', '20000.00', '8998788767');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `Offer_id` int(255) NOT NULL,
  `Brand_Name` char(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `Offer_details` char(255) NOT NULL,
  `Website_link` char(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Office`
--

CREATE TABLE `Office` (
  `Office_id` varchar(5) NOT NULL,
  `Dept_id` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Office`
--

INSERT INTO `Office` (`Office_id`, `Dept_id`) VALUES
('OF001', 'DE001'),
('OF002', 'DE002'),
('OF003', 'DE003'),
('OF004', 'DE004'),
('OF005', 'DE005');

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE `Patient` (
  `Pat_id` varchar(20) DEFAULT NULL,
  `Pat_name` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Blood_Group` varchar(5) NOT NULL,
  `Doc_id` varchar(10) DEFAULT NULL,
  `Disease` varchar(25) DEFAULT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Contact_no` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`Pat_id`, `Pat_name`, `Age`, `Blood_Group`, `Doc_id`, `Disease`, `Address`, `City`, `Contact_no`) VALUES
('APP001', 'Rakesh', 80, 'O+', 'DOC001', 'Headache', 'Amravati', 'Amravati', '9876789000'),
('APP002', 'Nikita', 30, 'O-', 'DOC001', 'Backache', 'Amravati', 'Amravati', '7890005678'),
('APP003', 'Ruchita', 50, 'A+', 'DOC001', 'Weakness', 'Amravati', 'Amravati', '9804567430'),
('APP004', 'Ram', 50, 'A+', 'DOC002', 'Weakness', 'Akola', 'Akola', '9876789000'),
('APP005', 'Lokesh', 40, 'A-', 'DOC002', 'Weakness', 'Pune', 'Pune', '7890005678'),
('APP006', 'Hardik', 10, 'B+', 'DOC002', 'Weakness', 'Pune', 'Pune', '9804567430'),
('APP007', 'Ramesh', 80, 'B+', 'DOC003', 'Cancer', 'Amravati', 'Amravati', '9876789000'),
('APP008', 'Radha', 20, 'A+', 'DOC003', 'Cancer', 'Pune', 'Pune', '7890005678'),
('APP009', 'Krishna', 50, 'B', 'DOC003', 'Cancer', 'Amravati', 'Amravati', '9804567430'),
('APP010', 'Rakesh', 80, 'O+', 'DOC004', 'Cramp', 'Amravati', 'Amravati', '9876789000'),
('APP011', 'Nikita', 30, 'O-', 'DOC005', 'Weakness', 'Amravati', 'Amravati', '7890005678'),
('APP012', 'Ruchita', 50, 'A+', 'DOC005', 'Weakness', 'Amravati', 'Amravati', '9804567430'),
('APP001', 'Rakesh', 80, 'O+', 'DOC001', 'Headache', 'Amravati', 'Amravati', '9876789000'),
('APP002', 'Nikita', 30, 'O-', 'DOC001', 'Backache', 'Amravati', 'Amravati', '7890005678'),
('APP003', 'Ruchita', 50, 'A+', 'DOC001', 'Weakness', 'Amravati', 'Amravati', '9804567430'),
('APP004', 'Ram', 50, 'A+', 'DOC002', 'Weakness', 'Akola', 'Akola', '9876789000'),
('APP005', 'Lokesh', 40, 'A-', 'DOC002', 'Weakness', 'Pune', 'Pune', '7890005678'),
('APP006', 'Hardik', 10, 'B+', 'DOC002', 'Weakness', 'Pune', 'Pune', '9804567430'),
('APP007', 'Ramesh', 80, 'B+', 'DOC003', 'Cancer', 'Amravati', 'Amravati', '9876789000'),
('APP008', 'Radha', 20, 'A+', 'DOC003', 'Cancer', 'Pune', 'Pune', '7890005678'),
('APP009', 'Krishna', 50, 'B', 'DOC003', 'Cancer', 'Amravati', 'Amravati', '9804567430'),
('APP010', 'Rakesh', 80, 'O+', 'DOC004', 'Cramp', 'Amravati', 'Amravati', '9876789000'),
('APP011', 'Nikita', 30, 'O-', 'DOC005', 'Weakness', 'Amravati', 'Amravati', '7890005678'),
('APP012', 'Ruchita', 50, 'A+', 'DOC005', 'Weakness', 'Amravati', 'Amravati', '9804567430');

-- --------------------------------------------------------

--
-- Table structure for table `Patient_Test`
--

CREATE TABLE `Patient_Test` (
  `Pat_id` varchar(20) NOT NULL,
  `Test_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Patient_Test`
--

INSERT INTO `Patient_Test` (`Pat_id`, `Test_id`) VALUES
('APP001', 'MT001'),
('APP002', 'MT005'),
('APP003', 'MT003'),
('APP004', 'MT004'),
('APP005', 'MT007');

-- --------------------------------------------------------

--
-- Table structure for table `Prescription`
--

CREATE TABLE `Prescription` (
  `Med_id` varchar(20) NOT NULL,
  `Give_date` date DEFAULT NULL,
  `Pat_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Prescription`
--

INSERT INTO `Prescription` (`Med_id`, `Give_date`, `Pat_id`) VALUES
('ME001', '2020-07-09', 'APP001'),
('ME001', '2020-06-07', 'APP003'),
('ME001', '2020-06-07', 'APP008'),
('ME001', '2020-07-09', 'APP009'),
('ME002', '2020-06-08', 'APP002'),
('ME002', '2020-08-01', 'APP006'),
('ME002', '2020-08-02', 'APP007'),
('ME003', '2020-08-01', 'APP005'),
('ME004', '2020-08-01', 'APP004'),
('ME004', '2020-06-08', 'APP010'),
('ME004', '2020-06-07', 'APP012');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` bigint(255) NOT NULL,
  `Category_name` char(255) NOT NULL,
  `Brand_name` char(255) NOT NULL,
  `Product_name` char(255) NOT NULL,
  `Product_description` char(255) DEFAULT NULL,
  `Product_website_link` char(255) DEFAULT NULL,
  `Creation_Timestamp` timestamp(6) NULL DEFAULT current_timestamp(6),
  `Modification_Timestamp` timestamp(6) NULL DEFAULT current_timestamp(6),
  `Product_Image` char(255) NOT NULL,
  `Average_Review` float DEFAULT NULL,
  `No_of_Reviews` double DEFAULT NULL,
  `Active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Product_id` bigint(255) NOT NULL,
  `average_rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Room`
--

CREATE TABLE `Room` (
  `Ward_id` varchar(5) NOT NULL,
  `Room_no` varchar(5) NOT NULL,
  `Dept_id` varchar(5) DEFAULT NULL,
  `Type` varchar(10) DEFAULT NULL,
  `Capacity` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Room`
--

INSERT INTO `Room` (`Ward_id`, `Room_no`, `Dept_id`, `Type`, `Capacity`) VALUES
('W001', 'R001', 'DE001', 'Normal', '1'),
('W001', 'R002', 'DE001', 'Normal', '1'),
('W001', 'R003', 'DE001', 'Normal', '1'),
('W001', 'R004', 'DE001', 'Normal', '1'),
('W002', 'R001', 'DE002', 'Normal', '1'),
('W002', 'R002', 'DE002', 'Normal', '1'),
('W002', 'R003', 'DE003', 'Normal', '1'),
('W003', 'R001', 'DE003', 'Normal', '1'),
('W003', 'R002', 'DE003', 'Normal', '1'),
('W003', 'R003', 'DE003', 'Normal', '1'),
('W004', 'R001', 'DE004', 'Normal', '1'),
('W004', 'R002', 'DE004', 'Normal', '1'),
('W004', 'R003', 'DE004', 'Normal', '1'),
('W005', 'R001', 'DE005', 'Normal', '1'),
('W005', 'R002', 'DE005', 'Normal', '1'),
('W005', 'R003', 'DE005', 'Normal', '1');

-- --------------------------------------------------------

--
-- Table structure for table `Test`
--

CREATE TABLE `Test` (
  `Test_id` varchar(10) NOT NULL,
  `Test_name` varchar(20) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Test`
--

INSERT INTO `Test` (`Test_id`, `Test_name`, `cost`) VALUES
('MT001', 'Blood', '1200.00'),
('MT003', 'X-RAY', '1200.00'),
('MT004', 'MRI', '1200.00'),
('MT005', 'CT-SCAN', '1200.00'),
('MT006', 'kidney function', '1200.00'),
('MT007', 'liver function', '1200.00');

-- --------------------------------------------------------

--
-- Table structure for table `user_product_rating`
--

CREATE TABLE `user_product_rating` (
  `User_id` int(255) NOT NULL,
  `Product_id` bigint(255) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Customer_email` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Wards`
--

CREATE TABLE `Wards` (
  `Ward_id` varchar(5) NOT NULL,
  `Total_room` int(11) DEFAULT NULL,
  `Dept_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Wards`
--

INSERT INTO `Wards` (`Ward_id`, `Total_room`, `Dept_id`) VALUES
('W001', 5, 'DE001'),
('W001', 5, 'DE002'),
('W001', 5, 'DE003'),
('W001', 5, 'DE004'),
('W001', 5, 'DE005'),
('W002', 5, 'DE001'),
('W002', 5, 'DE002'),
('W002', 5, 'DE003'),
('W002', 5, 'DE004'),
('W002', 5, 'DE005'),
('W003', 5, 'DE001'),
('W003', 5, 'DE002'),
('W003', 5, 'DE003'),
('W003', 5, 'DE004'),
('W003', 5, 'DE005'),
('W004', 5, 'DE001'),
('W004', 5, 'DE002'),
('W004', 5, 'DE003'),
('W004', 5, 'DE004'),
('W004', 5, 'DE005'),
('W005', 5, 'DE001'),
('W005', 5, 'DE002'),
('W005', 5, 'DE003'),
('W005', 5, 'DE004'),
('W005', 5, 'DE005');

-- --------------------------------------------------------

--
-- Table structure for table `Ward_Boy`
--

CREATE TABLE `Ward_Boy` (
  `Wardboy_id` varchar(10) NOT NULL,
  `Wardboy_name` varchar(20) DEFAULT NULL,
  `Ward_id` varchar(5) DEFAULT NULL,
  `Dept_id` varchar(5) DEFAULT NULL,
  `Salary` decimal(10,2) DEFAULT NULL,
  `Contact_no` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Ward_Boy`
--

INSERT INTO `Ward_Boy` (`Wardboy_id`, `Wardboy_name`, `Ward_id`, `Dept_id`, `Salary`, `Contact_no`) VALUES
('WB001', 'Ram', 'W001', 'DE001', '20000.00', '9456712345'),
('WB002', 'Shyam', 'W002', 'DE001', '20000.00', '8909012345'),
('WB003', 'Raghav', 'W003', 'DE001', '20000.00', '7890612345'),
('WB004', 'Rohit', 'W001', 'DE002', '20000.00', '8765654321'),
('WB005', 'Mohit', 'W002', 'DE002', '20000.00', '8976512453'),
('WB006', 'Krishna', 'W001', 'DE003', '20000.00', '9089712345'),
('WB007', 'Madhav', 'W002', 'DE003', '20000.00', '9089098909'),
('WB008', 'Ramesh', 'W001', 'DE004', '20000.00', '7890612345'),
('WB009', 'Rajesh', 'W002', 'DE004', '20000.00', '7898778781'),
('WB010', 'Amrish', 'W001', 'DE005', '20000.00', '8998788767');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Email_2` (`Email`);

--
-- Indexes for table `Admitted_Patient`
--
ALTER TABLE `Admitted_Patient`
  ADD KEY `Ward_id` (`Ward_id`,`Room_no`),
  ADD KEY `Dept_id` (`Dept_id`),
  ADD KEY `Pat_id` (`Pat_id`),
  ADD KEY `Doc_id` (`Doc_id`);

--
-- Indexes for table `Ambulance`
--
ALTER TABLE `Ambulance`
  ADD PRIMARY KEY (`Am_no`);

--
-- Indexes for table `Ambulance_Details`
--
ALTER TABLE `Ambulance_Details`
  ADD KEY `Pat_id` (`Pat_id`),
  ADD KEY `Driver_id` (`Driver_id`);

--
-- Indexes for table `Ambulance_Driver`
--
ALTER TABLE `Ambulance_Driver`
  ADD PRIMARY KEY (`Driver_id`),
  ADD KEY `Am_no` (`Am_no`);

--
-- Indexes for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD PRIMARY KEY (`App_id`),
  ADD KEY `Doc_id` (`Doc_id`);

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`Dept_id`);

--
-- Indexes for table `Discharge_Patient`
--
ALTER TABLE `Discharge_Patient`
  ADD KEY `Ward_id` (`Ward_id`,`Room_no`),
  ADD KEY `Pat_id` (`Pat_id`),
  ADD KEY `Doc_id` (`Doc_id`),
  ADD KEY `Dept_id` (`Dept_id`);

--
-- Indexes for table `Doctor`
--
ALTER TABLE `Doctor`
  ADD PRIMARY KEY (`Doc_id`),
  ADD KEY `Dept_id` (`Dept_id`),
  ADD KEY `Office_id` (`Office_id`);

--
-- Indexes for table `Doctor_Assistant`
--
ALTER TABLE `Doctor_Assistant`
  ADD PRIMARY KEY (`Ass_id`),
  ADD KEY `Dept_id` (`Dept_id`),
  ADD KEY `Doc_id` (`Doc_id`);

--
-- Indexes for table `Medicine`
--
ALTER TABLE `Medicine`
  ADD PRIMARY KEY (`Med_id`);

--
-- Indexes for table `Nurse`
--
ALTER TABLE `Nurse`
  ADD PRIMARY KEY (`Nurse_id`),
  ADD KEY `Ward_id` (`Ward_id`,`Dept_id`);

--
-- Indexes for table `Office`
--
ALTER TABLE `Office`
  ADD PRIMARY KEY (`Office_id`),
  ADD KEY `Dept_id` (`Dept_id`);

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD KEY `Pat_id` (`Pat_id`),
  ADD KEY `Doc_id` (`Doc_id`);

--
-- Indexes for table `Patient_Test`
--
ALTER TABLE `Patient_Test`
  ADD PRIMARY KEY (`Pat_id`,`Test_id`),
  ADD KEY `Test_id` (`Test_id`);

--
-- Indexes for table `Prescription`
--
ALTER TABLE `Prescription`
  ADD PRIMARY KEY (`Med_id`,`Pat_id`),
  ADD KEY `Pat_id` (`Pat_id`);

--
-- Indexes for table `Room`
--
ALTER TABLE `Room`
  ADD PRIMARY KEY (`Ward_id`,`Room_no`),
  ADD KEY `Dept_id` (`Dept_id`,`Ward_id`);

--
-- Indexes for table `Test`
--
ALTER TABLE `Test`
  ADD PRIMARY KEY (`Test_id`);

--
-- Indexes for table `Wards`
--
ALTER TABLE `Wards`
  ADD PRIMARY KEY (`Ward_id`,`Dept_id`),
  ADD KEY `Dept_id` (`Dept_id`);

--
-- Indexes for table `Ward_Boy`
--
ALTER TABLE `Ward_Boy`
  ADD PRIMARY KEY (`Wardboy_id`),
  ADD KEY `Ward_id` (`Ward_id`,`Dept_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Admitted_Patient`
--
ALTER TABLE `Admitted_Patient`
  ADD CONSTRAINT `Admitted_Patient_ibfk_1` FOREIGN KEY (`Ward_id`,`Room_no`) REFERENCES `Room` (`Ward_id`, `Room_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `Admitted_Patient_ibfk_2` FOREIGN KEY (`Dept_id`) REFERENCES `Department` (`Dept_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Admitted_Patient_ibfk_3` FOREIGN KEY (`Pat_id`) REFERENCES `Patient` (`Pat_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Admitted_Patient_ibfk_4` FOREIGN KEY (`Doc_id`) REFERENCES `Doctor` (`Doc_id`) ON DELETE CASCADE;

--
-- Constraints for table `Ambulance_Details`
--
ALTER TABLE `Ambulance_Details`
  ADD CONSTRAINT `Ambulance_Details_ibfk_1` FOREIGN KEY (`Pat_id`) REFERENCES `Patient` (`Pat_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Ambulance_Details_ibfk_2` FOREIGN KEY (`Driver_id`) REFERENCES `Ambulance_Driver` (`Driver_id`) ON DELETE CASCADE;

--
-- Constraints for table `Ambulance_Driver`
--
ALTER TABLE `Ambulance_Driver`
  ADD CONSTRAINT `Ambulance_Driver_ibfk_1` FOREIGN KEY (`Am_no`) REFERENCES `Ambulance` (`Am_no`) ON DELETE CASCADE;

--
-- Constraints for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD CONSTRAINT `Appointment_ibfk_1` FOREIGN KEY (`Doc_id`) REFERENCES `Doctor` (`Doc_id`) ON DELETE CASCADE;

--
-- Constraints for table `Discharge_Patient`
--
ALTER TABLE `Discharge_Patient`
  ADD CONSTRAINT `Discharge_Patient_ibfk_1` FOREIGN KEY (`Ward_id`,`Room_no`) REFERENCES `Room` (`Ward_id`, `Room_no`)ON DELETE CASCADE,
  ADD CONSTRAINT `Discharge_Patient_ibfk_3` FOREIGN KEY (`Doc_id`) REFERENCES `Doctor` (`Doc_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Discharge_Patient_ibfk_4` FOREIGN KEY (`Dept_id`) REFERENCES `Department` (`Dept_id`) ON DELETE CASCADE;

--
-- Constraints for table `Doctor`
--
ALTER TABLE `Doctor`
  ADD CONSTRAINT `Doctor_ibfk_1` FOREIGN KEY (`Dept_id`) REFERENCES `Department` (`Dept_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Doctor_ibfk_2` FOREIGN KEY (`Office_id`) REFERENCES `Office` (`Office_id`) ON DELETE CASCADE;

--
-- Constraints for table `Doctor_Assistant`
--
ALTER TABLE `Doctor_Assistant`
  ADD CONSTRAINT `Doctor_Assistant_ibfk_1` FOREIGN KEY (`Dept_id`) REFERENCES `Department` (`Dept_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Doctor_Assistant_ibfk_2` FOREIGN KEY (`Doc_id`) REFERENCES `Doctor` (`Doc_id`) ON DELETE SET CASCADE;

--
-- Constraints for table `Nurse`
--
ALTER TABLE `Nurse`
  ADD CONSTRAINT `Nurse_ibfk_1` FOREIGN KEY (`Ward_id`,`Dept_id`) REFERENCES `Wards` (`Ward_id`, `Dept_id`)ON DELETE CASCADE;

--
-- Constraints for table `Office`
--
ALTER TABLE `Office`
  ADD CONSTRAINT `Office_ibfk_1` FOREIGN KEY (`Dept_id`) REFERENCES `Department` (`Dept_id`) ON DELETE CASCADE;

--
-- Constraints for table `Patient`
--
ALTER TABLE `Patient`
  ADD CONSTRAINT `Patient_ibfk_1` FOREIGN KEY (`Pat_id`) REFERENCES `Appointment` (`App_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Patient_ibfk_2` FOREIGN KEY (`Doc_id`) REFERENCES `Doctor` (`Doc_id`) ON DELETE CASCADE;

--
-- Constraints for table `Patient_Test`
--
ALTER TABLE `Patient_Test`
  ADD CONSTRAINT `Patient_Test_ibfk_1` FOREIGN KEY (`Pat_id`) REFERENCES `Patient` (`Pat_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Patient_Test_ibfk_2` FOREIGN KEY (`Test_id`) REFERENCES `Test` (`Test_id`) ON DELETE CASCADE;

--
-- Constraints for table `Prescription`
--
ALTER TABLE `Prescription`
  ADD CONSTRAINT `Prescription_ibfk_1` FOREIGN KEY (`Pat_id`) REFERENCES `Patient` (`Pat_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Prescription_ibfk_2` FOREIGN KEY (`Med_id`) REFERENCES `Medicine` (`Med_id`)ON DELETE CASCADE;

--
-- Constraints for table `Room`
--
ALTER TABLE `Room`
  ADD CONSTRAINT `Room_ibfk_1` FOREIGN KEY (`Dept_id`,`Ward_id`) REFERENCES `Wards` (`Dept_id`, `Ward_id`)ON DELETE CASCADE;

--
-- Constraints for table `Wards`
--
ALTER TABLE `Wards`
  ADD CONSTRAINT `Wards_ibfk_1` FOREIGN KEY (`Dept_id`) REFERENCES `Department` (`Dept_id`) ON DELETE CASCADE;

--
-- Constraints for table `Ward_Boy`
--
ALTER TABLE `Ward_Boy`
  ADD CONSTRAINT `Ward_Boy_ibfk_1` FOREIGN KEY (`Ward_id`,`Dept_id`) REFERENCES `Wards` (`Ward_id`, `Dept_id`)ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
