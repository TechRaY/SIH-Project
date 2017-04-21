-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 11:51 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih2`
--

-- --------------------------------------------------------

--
-- Table structure for table `collegeinfo`
--

CREATE TABLE `collegeinfo` (
  `ITI_Code` varchar(100) NOT NULL,
  `Display_Name` varchar(100) NOT NULL,
  `ITI_Name` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Institute_Type` varchar(100) NOT NULL,
  `Date_of_Establishment` varchar(100) NOT NULL,
  `Web_URL` varchar(100) NOT NULL,
  `Last_Date_Update_Date` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `Contact_Ph_No` varchar(100) NOT NULL,
  `Pin_Code` varchar(100) NOT NULL,
  `SPIU_Name` varchar(100) NOT NULL,
  `Contact_Email` varchar(100) NOT NULL,
  `Affiliation_Status` varchar(100) NOT NULL,
  `Institute_Rating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegeinfo`
--

INSERT INTO `collegeinfo` (`ITI_Code`, `Display_Name`, `ITI_Name`, `Location`, `Institute_Type`, `Date_of_Establishment`, `Web_URL`, `Last_Date_Update_Date`, `Address`, `State`, `District`, `Contact_Ph_No`, `Pin_Code`, `SPIU_Name`, `Contact_Email`, `Affiliation_Status`, `Institute_Rating`) VALUES
('GR27000172', 'GR27000172 Govt ITI (Adivasi), Rajura, Dist: Chandrapur', 'Government Industrial Training Institute (Adivasi)', 'Rural', 'Government', '29-Aug-1989', 'http://www.dvet.gov.in', '10-Jul-2015 01:18:19 PM', 'Asifabad Rao Near Shivaji Collage', 'Maharashtra', 'Chandrapur', '07173222428\r\n', '442905', 'Maharashtra-SPIU', 'iti.rajura@dvet.maharashtra.gov.in', 'Re-Affilaition Due', ''),
('GR28000301', '	Govt RITI, Bhadragiri', '	Govt Residential Industrial Training Institute, Bhadragiri', '	Rural', '	Government', '01-Jan-1993', '	http://Not Set', '	23-Jan-2015 01:02:10 AM', '	Bhadragiri', '	Andhra Pradesh', '	Vizianagaram', '	8886882216', '	535523', '	Andhra Pradesh-SPIU', '	ru.ritibdg@gmail.com', 'Re-Affilaition Due', '3'),
('PR28000194', '	A J K ITC', 'A J K Industrial Training Centre', '	Not Set', '	Private', '01-Jan-1981', '	http://Not Set', '23-Jan-2015 01:02:10 AM', 'Rajupeta Machilipatanam', '	Andhra Pradesh', '	Krishna', '', '	521001', '	Andhra Pradesh-SPIU', '', ' Re-Affilaition Due', '3'),
('PR28000274', '	Aditya ITC', '	Aditya Industrial Training Centre', '	Rural', '	Private', '	01-Jan-1992', '	http://Not Set', '	23-Jan-2015 01:02:10 AM', '	1-200, Rajugari Bedu, Near Govt.High School Back Side, Payakaraopeta', '	Andhra Pradesh', '	Visakhapatnam', '	08854-254636\r\n', '	531126', '	Andhra Pradesh-SPIU', '1110adityaiti@gmail.com', ' Re-Affilaition Due', '2'),
('PU27000192', '	A.I.E.& D F''S, Bhaskarrao Galande Patil, Private Industrial Training Institute, Ashoknagar.', '	A.I.E.& D F''S, Bhaskarrao Galande Patil, Private Industrial Training Institute, Ashoknagar.', 'Urban', 'Private', '01-Jul-1991', 'http://Not Set', '22-Jan-2015 03:53:47 AM', 'A/P. Ashoknagar, Tal. Shrirampur, Dist. Ahmednagar.', 'Maharashtra', 'Ahmadnagar', '02422246020', '413717', 'Maharashtra-SPIU', 'bgpitc_ashoknagar@yahoo.com', 'Re-Affilaition Due', '5'),
('PU28000083', 'PU28000083 ABTP ITC', 'Arch Bishop Thomas Pothacammury Industrial Training Centre,Ravipadu', '	Urban', '	Private', '	01-Jul-1985', '	http://', '	05-Sep-2016 09:28:00 PM', '	Ravipadu (P.O), Narasaraopet (M.D)', '	Andhra Pradesh', '	Guntur', '	08647-223609', '	522603', '	Andhra Pradesh-SPIU', '	atpitc@gmail.com', ' Re-Affilaition Due', '3'),
('PU28000367', '	CIFNET', '	Central Institute of Fisheries Nautical Engg. Training Unit', '	Urban', '	Private', '	01-Aug-2006', '	http://Not Set', '	23-Jan-2015 01:02:10 AM', '	Beach Road', '	Andhra Pradesh', '	Visakhapatnam', '	0891-2563894', '	530001', 'Andhra Pradesh-SPIU', '	cifnet.vsp@gmail.com', ' Re-Affilaition Due', '2');

-- --------------------------------------------------------

--
-- Table structure for table `collegerating`
--

CREATE TABLE `collegerating` (
  `College_Code` varchar(100) NOT NULL,
  `A_25` varchar(100) NOT NULL,
  `C1_10` varchar(100) NOT NULL,
  `B2_15` varchar(100) NOT NULL,
  `A_20` varchar(100) NOT NULL,
  `C2_5` varchar(100) NOT NULL,
  `B2_10` varchar(100) NOT NULL,
  `C1_10(1)` varchar(100) NOT NULL,
  `Rating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegerating`
--

INSERT INTO `collegerating` (`College_Code`, `A_25`, `C1_10`, `B2_15`, `A_20`, `C2_5`, `B2_10`, `C1_10(1)`, `Rating`) VALUES
('GR27000172', '24', '10', '15', '19', '5', '8', '9', ''),
('GR28000301', '25', '9', '14', '20', '5', '10', '10', ''),
('PU27000192', '24', '7', '12', '16', '4', '9', '10', ''),
('PU28000367', '25', '9', '13', '19', '4', '10', '9', '');

-- --------------------------------------------------------

--
-- Table structure for table `courseinfo`
--

CREATE TABLE `courseinfo` (
  `Trade_Code` varchar(100) NOT NULL,
  `ITI_Code` varchar(100) NOT NULL,
  `Trade_Name` varchar(100) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `Shift` varchar(100) NOT NULL,
  `Seats_Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseinfo`
--

INSERT INTO `courseinfo` (`Trade_Code`, `ITI_Code`, `Trade_Name`, `Duration`, `Shift`, `Seats_Count`) VALUES
('037', 'GR28000301', '	Instrument Mechanic', ' 4 sem', '1', 26),
('045', 'PU28000367', '	Marine Fitter', '4 sem', '1', 21),
('068', 'PU28000367', 'Vessel Navigator', '4 sem', '1', 21),
('211', 'GR27000172', 'Mason (Building Constructor)', '2 sem', '1', 26),
('212', 'PU27000192', 'Welder', '2 sem', '1', 21),
('215', 'GR27000172', 'Mechanic (Motor Vehicle)', '4 sem', '1', 21),
('217', 'PU28000083', 'Draughtsman (Civil)', '4 sem', '1', 26),
('219', 'GR27000172', 'Electronics Mechanic', '4 sem', '1', 26),
('220', 'GR27000172', 'Information Communication Technology System Maintenance', '4 sem', '1', 26),
('222', 'GR27000172', 'Machinist', '4 sem', '1', 16),
('224', 'GR27000172', 'Draughtsman (Mechanical)', '4 sem', '1', 26),
('227', 'PU27000192', 'Fitter', '4 sem	', '1', 21),
('231', 'PU27000192', 'Electrician', '4 sem', '1', 21),
('242', 'GR28000301', '	Computer Operator and Programming Assistant', '2 sem', '1', 26),
('246', 'GR27000172', 'Fashion Design & Technology', '2 sem', '1', 21),
('248', 'GR28000301', '	Dress Making', '2 sem', '1', 21);

-- --------------------------------------------------------

--
-- Table structure for table `courserating`
--

CREATE TABLE `courserating` (
  `College_Id` varchar(100) NOT NULL,
  `Course_Id` varchar(100) NOT NULL,
  `TC1_10` varchar(100) NOT NULL,
  `TC2_5` varchar(100) NOT NULL,
  `TB1_20` varchar(100) NOT NULL,
  `TA_25` varchar(100) NOT NULL,
  `TB2_15` varchar(100) NOT NULL,
  `TC1_10(1)` varchar(100) NOT NULL,
  `TB2_15(1)` varchar(100) NOT NULL,
  `Rating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courserating`
--

INSERT INTO `courserating` (`College_Id`, `Course_Id`, `TC1_10`, `TC2_5`, `TB1_20`, `TA_25`, `TB2_15`, `TC1_10(1)`, `TB2_15(1)`, `Rating`) VALUES
('PU28000367', '045', '9', '5', '17', '22', '14', '8', '11', ''),
('PU28000367', '068', '8', '4', '18', '24', '11', '7', '11', ''),
('GR27000172', '211', '6', '3', '15', '20', '15', '6', '15', ''),
('PU27000192', '212', '7', '3', '17', '21', '10', '6', '13', ''),
('GR27000172', '215', '10', '5', '19', '24', '14', '10', '14', ''),
('GR27000172', '219', '10', '4', '20', '24', '13', '6', '10', ''),
('GR27000172', '220', '7', '4', '17', '23', '12', '10', '15', ''),
('GR27000172', '222', '5', '5', '16', '21', '11', '5', '16', ''),
('GR27000172', '224', '6', '5', '14', '17', '13', '9', '11', ''),
('PU27000192', '227', '9', '4', '19', '23', '14', '8', '12', ''),
('PU27000192', '231', '5', '3', '18', '22', '11', '8', '13', ''),
('GR28000301', '242', '10', '5', '14', '12', '11', '10', '13', ''),
('GR27000172', '246', '10', '2', '13', '24', '15', '6', '9', ''),
('GR28000301', '248', '8', '5', '19', '21', '11', '8', '10', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collegeinfo`
--
ALTER TABLE `collegeinfo`
  ADD PRIMARY KEY (`ITI_Code`);

--
-- Indexes for table `collegerating`
--
ALTER TABLE `collegerating`
  ADD PRIMARY KEY (`College_Code`);

--
-- Indexes for table `courseinfo`
--
ALTER TABLE `courseinfo`
  ADD PRIMARY KEY (`Trade_Code`),
  ADD KEY `ITI_Code` (`ITI_Code`);

--
-- Indexes for table `courserating`
--
ALTER TABLE `courserating`
  ADD PRIMARY KEY (`Course_Id`),
  ADD KEY `College_Id` (`College_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collegerating`
--
ALTER TABLE `collegerating`
  ADD CONSTRAINT `collegerating_ibfk_1` FOREIGN KEY (`College_Code`) REFERENCES `collegeinfo` (`ITI_Code`);

--
-- Constraints for table `courseinfo`
--
ALTER TABLE `courseinfo`
  ADD CONSTRAINT `courseinfo_ibfk_1` FOREIGN KEY (`ITI_Code`) REFERENCES `collegeinfo` (`ITI_Code`);

--
-- Constraints for table `courserating`
--
ALTER TABLE `courserating`
  ADD CONSTRAINT `courserating_ibfk_1` FOREIGN KEY (`College_Id`) REFERENCES `collegeinfo` (`ITI_Code`),
  ADD CONSTRAINT `courserating_ibfk_2` FOREIGN KEY (`Course_Id`) REFERENCES `courseinfo` (`Trade_Code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
