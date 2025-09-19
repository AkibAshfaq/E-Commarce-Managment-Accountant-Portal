-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2025 at 03:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce-managment-db`
--
CREATE DATABASE IF NOT EXISTS `e-commerce-managment-db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `e-commerce-managment-db`;

-- --------------------------------------------------------

--
-- Table structure for table `company_expense`
--

CREATE TABLE `company_expense` (
  `Expense_ID` int(11) NOT NULL,
  `Expense_Name` varchar(30) NOT NULL,
  `Expense_Ammount` double NOT NULL,
  `Expense_Department_Name` varchar(20) NOT NULL,
  `Expense_Reason` varchar(50) NOT NULL,
  `Expense_Approved_Date` date NOT NULL,
  `Expense_Approved_By` varchar(30) NOT NULL,
  `Expense_Received_Date` date NOT NULL,
  `Expense_Received_By` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_expense`
--

INSERT INTO `company_expense` (`Expense_ID`, `Expense_Name`, `Expense_Ammount`, `Expense_Department_Name`, `Expense_Reason`, `Expense_Approved_Date`, `Expense_Approved_By`, `Expense_Received_Date`, `Expense_Received_By`) VALUES
(1, 'Tissue', 120, 'HR', 'Stock', '2025-09-13', 'Samiul Bashar', '2025-09-20', 'Bobkes Boksi');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_table`
--

CREATE TABLE `customer_order_table` (
  `Order_ID` int(11) NOT NULL,
  `Order_Price` int(11) NOT NULL,
  `Order_Location` varchar(60) NOT NULL,
  `Order_City` varchar(20) NOT NULL,
  `Order_Type` varchar(20) NOT NULL,
  `Order_Product_Category` varchar(20) NOT NULL,
  `Order_Status` varchar(20) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Order_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order_table`
--

INSERT INTO `customer_order_table` (`Order_ID`, `Order_Price`, `Order_Location`, `Order_City`, `Order_Type`, `Order_Product_Category`, `Order_Status`, `Customer_ID`, `Order_Date`) VALUES
(1, 1000, 'Ht', 'DH', 'SHIR', 'RR', 'R', 23, '2025-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `Customer_ID` int(11) NOT NULL,
  `Customer_Name` varchar(100) NOT NULL,
  `Customer_Number` int(11) NOT NULL,
  `Customer_Email` varchar(50) NOT NULL,
  `Customer_Password` varchar(50) NOT NULL,
  `Customer_Address` varchar(100) NOT NULL,
  `Customer_Registration_Date` date NOT NULL,
  `Customer_Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`Customer_ID`, `Customer_Name`, `Customer_Number`, `Customer_Email`, `Customer_Password`, `Customer_Address`, `Customer_Registration_Date`, `Customer_Role`) VALUES
(1, 'MD. Mridul Ali', 1315238971, 'mridul@gmail.com', 'mridul1122', 'Bashundhara C Block, Dhaka, Bangladesh', '2025-09-12', ''),
(2, 'Nazmul Islam', 1911220856, 'nazmul@gmail.com', 'n@zmul1122', 'Jurain, Dhaka', '2025-09-11', ''),
(3, 'Yea Ahmed', 0, 'yea@gmail.om', '$2y$10$dJgCkSCpWKXS9Za.nHkwJ.U85jbuc5ixOE.O3uwBFLV', '', '0000-00-00', 'user'),
(4, 'arfin', 0, 'arfin@gmail.com', '103240', '', '0000-00-00', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `Employee_ID` int(11) NOT NULL,
  `Employee_Name` varchar(100) NOT NULL,
  `Employee_Department` varchar(50) DEFAULT NULL,
  `Employee_Base_Salary` decimal(10,2) NOT NULL,
  `Employee_Increment_Percent` decimal(5,2) NOT NULL,
  `Employee_Final_Salary` decimal(10,2) GENERATED ALWAYS AS (`Employee_Base_Salary` + `Employee_Base_Salary` * `Employee_Increment_Percent` / 100) STORED,
  `Employee_Number` varchar(11) NOT NULL,
  `Employee_Email` varchar(100) NOT NULL,
  `Employee_Password` varchar(100) NOT NULL,
  `Employee_Address` varchar(100) NOT NULL,
  `Employee_Joining_Date` date NOT NULL,
  `Employee_Performance` varchar(100) NOT NULL,
  `Employee_Training` varchar(100) NOT NULL,
  `Employee_Leaves` varchar(100) NOT NULL,
  `Last_Paid` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`Employee_ID`, `Employee_Name`, `Employee_Department`, `Employee_Base_Salary`, `Employee_Increment_Percent`, `Employee_Number`, `Employee_Email`, `Employee_Password`, `Employee_Address`, `Employee_Joining_Date`, `Employee_Performance`, `Employee_Training`, `Employee_Leaves`, `Last_Paid`) VALUES
(15, 'Akib', 'Accountant', 200000.00, 12.00, '01703890674', 'akib@accountant.com', '1234', 'Htirpool Dhaka', '2025-09-02', '1', 'In Progress', '', '2025-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `Product_ID` int(11) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Product_Category` varchar(30) NOT NULL,
  `Product_Type` varchar(30) NOT NULL,
  `Product_Price` int(11) NOT NULL,
  `Product_Available` int(11) NOT NULL,
  `Product_Stocked` int(11) NOT NULL,
  `Product_Details_1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`Product_ID`, `Product_Name`, `Product_Category`, `Product_Type`, `Product_Price`, `Product_Available`, `Product_Stocked`, `Product_Details_1`) VALUES
(1, 'Tissue', 'Home', 'Regular', 60, 20, 128, ''),
(2, 'Sofa', 'Home Decoration', 'Furniture', 25000, 15, 20, ''),
(3, 'Samsung Washing Machin', 'Home Applience', 'Washing Machin', 45000, 15, 20, '');

-- --------------------------------------------------------

--
-- Table structure for table `refund_table`
--

CREATE TABLE `refund_table` (
  `Refund_ID` int(11) NOT NULL,
  `Order_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Refund_Product_ID` int(11) NOT NULL,
  `Refund_Product_Name` varchar(50) NOT NULL,
  `Refund_Product_Quantity` decimal(10,0) NOT NULL,
  `Refund_Ammount` decimal(10,0) NOT NULL,
  `Refund_Reason` enum('Damaged Product','Wrong Product','Late Delivery','Other') NOT NULL,
  `Refund_Status` enum('Pending','Approved','Refunded','') NOT NULL,
  `Refund_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `refund_table`
--

INSERT INTO `refund_table` (`Refund_ID`, `Order_ID`, `Customer_ID`, `Refund_Product_ID`, `Refund_Product_Name`, `Refund_Product_Quantity`, `Refund_Ammount`, `Refund_Reason`, `Refund_Status`, `Refund_Date`) VALUES
(1, 1, 0, 1, '', 3, 0, '', 'Pending', '2025-09-12'),
(2, 1, 0, 1, '0', 3, 0, '', 'Approved', '2025-09-12'),
(3, 1, 0, 1, '0', 3, 0, '', 'Pending', '2025-09-12'),
(4, 1, 23, 1, 'Tissue', 1, 60, 'Damaged Product', 'Pending', '0000-00-00'),
(5, 1, 23, 1, 'Tissue', 4, 240, 'Late Delivery', 'Pending', '2025-09-13'),
(6, 1, 23, 1, 'Tissue', 1, 60, 'Wrong Product', 'Refunded', '2025-09-13'),
(7, 1, 23, 1, 'Tissue', 1, 60, 'Late Delivery', 'Pending', '2025-09-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_expense`
--
ALTER TABLE `company_expense`
  ADD PRIMARY KEY (`Expense_ID`);

--
-- Indexes for table `customer_order_table`
--
ALTER TABLE `customer_order_table`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `refund_table`
--
ALTER TABLE `refund_table`
  ADD PRIMARY KEY (`Refund_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_expense`
--
ALTER TABLE `company_expense`
  MODIFY `Expense_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_order_table`
--
ALTER TABLE `customer_order_table`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `Employee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `refund_table`
--
ALTER TABLE `refund_table`
  MODIFY `Refund_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
