-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2020 at 05:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ServiceMarketPlace`
--

-- --------------------------------------------------------

--
-- Table structure for table `CompletesServiceRequest`
--

CREATE TABLE `CompletesServiceRequest` (
  `ServiceRequestID` int(11) NOT NULL,
  `specifications` char(40) DEFAULT NULL,
  `DueDate` date DEFAULT NULL,
  `CustomerID` int(11) NOT NULL,
  `ProviderID` int(11) NOT NULL,
  `TransactionID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CompletesServiceRequest`
--

INSERT INTO `CompletesServiceRequest` (`ServiceRequestID`, `specifications`, `DueDate`, `CustomerID`, `ProviderID`, `TransactionID`) VALUES
(1, NULL, '2020-05-06', 3, 2, 2003),
(2, 'rushed', '2020-03-01', 5, 5, 2001),
(3, 'background color - blue', '2020-04-28', 1, 3, 2000),
(4, NULL, '2020-03-11', 4, 2, 2002),
(5, 'put a smiley face at the end', '2020-07-15', 5, 3, 2004);

-- --------------------------------------------------------

--
-- Table structure for table `Customer1`
--

CREATE TABLE `Customer1` (
  `customerID` int(11) NOT NULL,
  `cardNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer1`
--

INSERT INTO `Customer1` (`customerID`, `cardNumber`) VALUES
(1, 45325846),
(2, 83473626),
(3, 37495264),
(4, 96857436),
(5, 453448574);

-- --------------------------------------------------------

--
-- Table structure for table `Customer2`
--

CREATE TABLE `Customer2` (
  `cardNumber` int(11) NOT NULL,
  `billingAddress` char(50) DEFAULT NULL,
  `name` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer2`
--

INSERT INTO `Customer2` (`cardNumber`, `billingAddress`, `name`) VALUES
(37495264, '5460 Northbrook Mall', 'Edward Chang'),
(45325846, '2231-Wesbrook Mall', 'Ann Kim'),
(45344857, '1200 Agronomy Road', 'Li Tse'),
(83473626, '8900 Eastbrook Mall', 'Katy Rink'),
(96857436, '3400 Southbrook Mall', 'Paul Kim');

-- --------------------------------------------------------

--
-- Table structure for table `DoesNotComplete`
--

CREATE TABLE `DoesNotComplete` (
  `ServiceProviderID` int(11) NOT NULL,
  `ServiceRequestID` int(11) NOT NULL,
  `reason` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `DoesNotComplete`
--

INSERT INTO `DoesNotComplete` (`ServiceProviderID`, `ServiceRequestID`, `reason`) VALUES
(1, 1, 'cancelled'),
(3, 3, 'cancelled'),
(3, 4, 'cancelled'),
(5, 2, 'cancelled'),
(5, 5, 'postponed');

-- --------------------------------------------------------

--
-- Table structure for table `EquipmentUses`
--

CREATE TABLE `EquipmentUses` (
  `EquipmentID` int(11) NOT NULL,
  `ServiceID` int(11) NOT NULL,
  `EquipmentName` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `EquipmentUses`
--

INSERT INTO `EquipmentUses` (`EquipmentID`, `ServiceID`, `EquipmentName`) VALUES
(90, 1, 'Camera'),
(91, 1, 'Lens'),
(92, 2, 'Lawn Mower'),
(93, 3, 'Laptop'),
(94, 4, 'Safety Goggles');

-- --------------------------------------------------------

--
-- Table structure for table `IncompletedServicesReassigns`
--

CREATE TABLE `IncompletedServicesReassigns` (
  `OriginalServiceID` int(11) NOT NULL,
  `SupervisorID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `IncompletedServicesReassigns`
--

INSERT INTO `IncompletedServicesReassigns` (`OriginalServiceID`, `SupervisorID`) VALUES
(7, 3000),
(9, 3001),
(10, 3001),
(8, 3002),
(11, 3002);

-- --------------------------------------------------------

--
-- Table structure for table `Manages`
--

CREATE TABLE `Manages` (
  `ServiceRequestID` int(11) NOT NULL,
  `SupervisorID` int(11) NOT NULL,
  `Status` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Manages`
--

INSERT INTO `Manages` (`ServiceRequestID`, `SupervisorID`, `Status`) VALUES
(1, 3000, 'In Progress'),
(2, 3000, 'Completed'),
(3, 3001, 'LATE'),
(4, 3002, 'Processing Payment'),
(5, 3001, 'In Progress');

-- --------------------------------------------------------

--
-- Table structure for table `ProvidedService1`
--

CREATE TABLE `ProvidedService1` (
  `ServiceID` int(11) NOT NULL,
  `ServiceProviderID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ProvidedService1`
--

INSERT INTO `ProvidedService1` (`ServiceID`, `ServiceProviderID`) VALUES
(1, 1),
(2, 1),
(5, 2),
(4, 4),
(3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ProvidedService2`
--

CREATE TABLE `ProvidedService2` (
  `ServiceProviderID` int(11) NOT NULL,
  `Duration` int(11) DEFAULT NULL,
  `Price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ProvidedService2`
--

INSERT INTO `ProvidedService2` (`ServiceProviderID`, `Duration`, `Price`) VALUES
(1, 200, 45),
(2, 90, 17.99),
(3, 90, 14.99),
(4, 30, 10),
(5, 120, 29.99);

-- --------------------------------------------------------

--
-- Table structure for table `RequestCustomerTransactionDetail`
--

CREATE TABLE `RequestCustomerTransactionDetail` (
  `transactionID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `RequestCustomerTransactionDetail`
--

INSERT INTO `RequestCustomerTransactionDetail` (`transactionID`, `customerID`) VALUES
(2000, 1),
(2001, 2),
(2002, 3),
(2003, 4),
(2004, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Review`
--

CREATE TABLE `Review` (
  `RevieweeID` int(11) NOT NULL,
  `ReviewerID` int(11) NOT NULL,
  `Rating` int(11) DEFAULT NULL,
  `comment` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Review`
--

INSERT INTO `Review` (`RevieweeID`, `ReviewerID`, `Rating`, `comment`) VALUES
(3, 1, 5, 'Great Job'),
(4, 2, 4, NULL),
(1, 3, 1, 'BAD SERVICE!'),
(5, 3, NULL, 'decent'),
(5, 5, 2, 'Terrible, never again!');

-- --------------------------------------------------------

--
-- Table structure for table `ServiceProvider`
--

CREATE TABLE `ServiceProvider` (
  `ServiceProviderID` int(11) NOT NULL,
  `BankAccount` int(11) DEFAULT NULL,
  `LanguageSpoken` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ServiceProvider`
--

INSERT INTO `ServiceProvider` (`ServiceProviderID`, `BankAccount`, `LanguageSpoken`) VALUES
(1, 3001, 'english'),
(2, 2123, 'english'),
(3, 4921, 'english'),
(4, 3005, 'chinese'),
(5, 1900, 'english');

-- --------------------------------------------------------

--
-- Table structure for table `Supervisor`
--

CREATE TABLE `Supervisor` (
  `SupervisorID` int(11) NOT NULL,
  `ServiceRequestID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Supervisor`
--

INSERT INTO `Supervisor` (`SupervisorID`, `ServiceRequestID`) VALUES
(3000, 1),
(3001, 2),
(3002, 3),
(3003, 4),
(3004, 5);

-- --------------------------------------------------------

--
-- Table structure for table `TransactionDetail`
--

CREATE TABLE `TransactionDetail` (
  `TransactionID` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `ProviderID` int(11) DEFAULT NULL,
  `ServiceType` char(15) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TransactionDetail`
--

INSERT INTO `TransactionDetail` (`TransactionID`, `CustomerID`, `ProviderID`, `ServiceType`, `Date`) VALUES
(2000, 1, 3, 'web design', '2020-01-24'),
(2001, 4, 2, 'translation', '2019-12-13'),
(2002, 3, 5, 'essay writing', '2019-02-10'),
(2003, 5, 1, 'lawn mowing', '2020-07-23'),
(2004, 2, 4, 'web design', '2019-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `WritesForCustomer`
--

CREATE TABLE `WritesForCustomer` (
  `ServiceRequestID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `WritesForCustomer`
--

INSERT INTO `WritesForCustomer` (`ServiceRequestID`, `customerID`) VALUES
(1, 3),
(2, 2),
(3, 1),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `WritesForServiceProvider`
--

CREATE TABLE `WritesForServiceProvider` (
  `ServiceRequestID` int(11) NOT NULL,
  `ServiceProviderID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `WritesForServiceProvider`
--

INSERT INTO `WritesForServiceProvider` (`ServiceRequestID`, `ServiceProviderID`) VALUES
(1, 1),
(2, 5),
(3, 3),
(4, 2),
(5, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CompletesServiceRequest`
--
ALTER TABLE `CompletesServiceRequest`
  ADD PRIMARY KEY (`ServiceRequestID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `ProviderID` (`ProviderID`),
  ADD KEY `TransactionID` (`TransactionID`);

--
-- Indexes for table `Customer1`
--
ALTER TABLE `Customer1`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `Customer2`
--
ALTER TABLE `Customer2`
  ADD PRIMARY KEY (`cardNumber`);

--
-- Indexes for table `DoesNotComplete`
--
ALTER TABLE `DoesNotComplete`
  ADD PRIMARY KEY (`ServiceProviderID`,`ServiceRequestID`),
  ADD KEY `ServiceRequestID` (`ServiceRequestID`);

--
-- Indexes for table `EquipmentUses`
--
ALTER TABLE `EquipmentUses`
  ADD PRIMARY KEY (`EquipmentID`,`ServiceID`),
  ADD KEY `ServiceID` (`ServiceID`);

--
-- Indexes for table `IncompletedServicesReassigns`
--
ALTER TABLE `IncompletedServicesReassigns`
  ADD PRIMARY KEY (`OriginalServiceID`),
  ADD KEY `SupervisorID` (`SupervisorID`);

--
-- Indexes for table `Manages`
--
ALTER TABLE `Manages`
  ADD PRIMARY KEY (`ServiceRequestID`),
  ADD KEY `SupervisorID` (`SupervisorID`);

--
-- Indexes for table `ProvidedService1`
--
ALTER TABLE `ProvidedService1`
  ADD PRIMARY KEY (`ServiceID`),
  ADD KEY `ServiceProviderID` (`ServiceProviderID`);

--
-- Indexes for table `ProvidedService2`
--
ALTER TABLE `ProvidedService2`
  ADD PRIMARY KEY (`ServiceProviderID`);

--
-- Indexes for table `RequestCustomerTransactionDetail`
--
ALTER TABLE `RequestCustomerTransactionDetail`
  ADD PRIMARY KEY (`transactionID`,`customerID`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `Review`
--
ALTER TABLE `Review`
  ADD PRIMARY KEY (`ReviewerID`,`RevieweeID`),
  ADD KEY `RevieweeID` (`RevieweeID`);

--
-- Indexes for table `ServiceProvider`
--
ALTER TABLE `ServiceProvider`
  ADD PRIMARY KEY (`ServiceProviderID`);

--
-- Indexes for table `Supervisor`
--
ALTER TABLE `Supervisor`
  ADD PRIMARY KEY (`SupervisorID`),
  ADD KEY `ServiceRequestID` (`ServiceRequestID`);

--
-- Indexes for table `TransactionDetail`
--
ALTER TABLE `TransactionDetail`
  ADD PRIMARY KEY (`TransactionID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `ProviderID` (`ProviderID`);

--
-- Indexes for table `WritesForCustomer`
--
ALTER TABLE `WritesForCustomer`
  ADD PRIMARY KEY (`ServiceRequestID`,`customerID`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `WritesForServiceProvider`
--
ALTER TABLE `WritesForServiceProvider`
  ADD PRIMARY KEY (`ServiceRequestID`,`ServiceProviderID`),
  ADD KEY `ServiceProviderID` (`ServiceProviderID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CompletesServiceRequest`
--
ALTER TABLE `CompletesServiceRequest`
  ADD CONSTRAINT `completesservicerequest_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `Customer1` (`customerID`) ON DELETE CASCADE,
  ADD CONSTRAINT `completesservicerequest_ibfk_2` FOREIGN KEY (`ProviderID`) REFERENCES `ServiceProvider` (`ServiceProviderID`) ON DELETE CASCADE,
  ADD CONSTRAINT `completesservicerequest_ibfk_3` FOREIGN KEY (`TransactionID`) REFERENCES `TransactionDetail` (`TransactionID`) ON DELETE CASCADE;

--
-- Constraints for table `Customer2`
--
ALTER TABLE `Customer2`
  ADD CONSTRAINT `customer2_ibfk_1` FOREIGN KEY (`cardNumber`) REFERENCES `Customer1` (`customerID`) ON DELETE CASCADE;

--
-- Constraints for table `DoesNotComplete`
--
ALTER TABLE `DoesNotComplete`
  ADD CONSTRAINT `doesnotcomplete_ibfk_1` FOREIGN KEY (`ServiceProviderID`) REFERENCES `serviceProvider` (`ServiceProviderID`) ON DELETE CASCADE,
  ADD CONSTRAINT `doesnotcomplete_ibfk_2` FOREIGN KEY (`ServiceRequestID`) REFERENCES `CompletesServiceRequest` (`ServiceRequestID`) ON DELETE CASCADE;

--
-- Constraints for table `EquipmentUses`
--
ALTER TABLE `EquipmentUses`
  ADD CONSTRAINT `equipmentuses_ibfk_1` FOREIGN KEY (`ServiceID`) REFERENCES `ProvidedService1` (`ServiceID`) ON DELETE CASCADE;

--
-- Constraints for table `IncompletedServicesReassigns`
--
ALTER TABLE `IncompletedServicesReassigns`
  ADD CONSTRAINT `incompletedservicesreassigns_ibfk_1` FOREIGN KEY (`SupervisorID`) REFERENCES `supervisor` (`SupervisorID`) ON DELETE CASCADE;

--
-- Constraints for table `Manages`
--
ALTER TABLE `Manages`
  ADD CONSTRAINT `manages_ibfk_1` FOREIGN KEY (`ServiceRequestID`) REFERENCES `CompletesServiceRequest` (`ServiceRequestID`) ON DELETE CASCADE,
  ADD CONSTRAINT `manages_ibfk_2` FOREIGN KEY (`SupervisorID`) REFERENCES `Supervisor` (`SupervisorID`) ON DELETE CASCADE;

--
-- Constraints for table `ProvidedService1`
--
ALTER TABLE `ProvidedService1`
  ADD CONSTRAINT `providedservice1_ibfk_1` FOREIGN KEY (`ServiceProviderID`) REFERENCES `serviceProvider` (`ServiceProviderID`) ON DELETE CASCADE;

--
-- Constraints for table `ProvidedService2`
--
ALTER TABLE `ProvidedService2`
  ADD CONSTRAINT `providedservice2_ibfk_1` FOREIGN KEY (`ServiceProviderID`) REFERENCES `serviceProvider` (`ServiceProviderID`) ON DELETE CASCADE;

--
-- Constraints for table `RequestCustomerTransactionDetail`
--
ALTER TABLE `RequestCustomerTransactionDetail`
  ADD CONSTRAINT `requestcustomertransactiondetail_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `Customer1` (`customerID`) ON DELETE CASCADE,
  ADD CONSTRAINT `requestcustomertransactiondetail_ibfk_2` FOREIGN KEY (`transactionID`) REFERENCES `TransactionDetail` (`TransactionID`) ON DELETE CASCADE;

--
-- Constraints for table `Review`
--
ALTER TABLE `Review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`ReviewerID`) REFERENCES `Customer1` (`customerID`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`RevieweeID`) REFERENCES `ServiceProvider` (`ServiceProviderID`) ON DELETE CASCADE;

--
-- Constraints for table `Supervisor`
--
ALTER TABLE `Supervisor`
  ADD CONSTRAINT `supervisor_ibfk_1` FOREIGN KEY (`ServiceRequestID`) REFERENCES `CompletesServiceRequest` (`ServiceRequestID`) ON DELETE CASCADE;

--
-- Constraints for table `TransactionDetail`
--
ALTER TABLE `TransactionDetail`
  ADD CONSTRAINT `transactiondetail_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `Customer1` (`customerID`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactiondetail_ibfk_2` FOREIGN KEY (`ProviderID`) REFERENCES `ServiceProvider` (`ServiceProviderID`) ON DELETE CASCADE;

--
-- Constraints for table `WritesForCustomer`
--
ALTER TABLE `WritesForCustomer`
  ADD CONSTRAINT `writesforcustomer_ibfk_1` FOREIGN KEY (`ServiceRequestID`) REFERENCES `CompletesServiceRequest` (`ServiceRequestID`) ON DELETE CASCADE,
  ADD CONSTRAINT `writesforcustomer_ibfk_2` FOREIGN KEY (`customerID`) REFERENCES `Customer1` (`customerID`) ON DELETE CASCADE;

--
-- Constraints for table `WritesForServiceProvider`
--
ALTER TABLE `WritesForServiceProvider`
  ADD CONSTRAINT `writesforserviceprovider_ibfk_1` FOREIGN KEY (`ServiceRequestID`) REFERENCES `CompletesServiceRequest` (`ServiceRequestID`) ON DELETE CASCADE,
  ADD CONSTRAINT `writesforserviceprovider_ibfk_2` FOREIGN KEY (`ServiceProviderID`) REFERENCES `ServiceProvider` (`ServiceProviderID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
