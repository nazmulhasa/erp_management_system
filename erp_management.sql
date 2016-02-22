-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2016 at 10:18 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erp_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `city`, `state`, `zip`) VALUES
(1, 'Gerald Foster', '994 Transport Plaza', 'Ocala', 'FL', '34479'),
(2, 'Kevin Hawkins', '03231 Dwight Hill', 'Atlanta', 'GA', '30351'),
(3, 'Diana Davis', '35 Fairfield Parkway', 'Fargo', 'ND', '58122'),
(4, 'Heather Gonzalez', '1 4th Trail', 'Albuquerque', 'NM', '87105'),
(5, 'Terry Hart', '353 Messerschmidt Pass', 'Burbank', 'CA', '91520'),
(6, 'Nancy Gomez', '121 Southridge Lane', 'Valdosta', 'GA', '31605'),
(7, 'Beverly Wood', '21 Bluestem Trail', 'Washington', 'DC', '20557'),
(8, 'Fred Roberts', '9 Main Crossing', 'Gilbert', 'AZ', '85297'),
(9, 'Maria Cox', '1 Crest Line Pass', 'Albuquerque', 'NM', '87190'),
(10, 'Evelyn Warren', '8589 Macpherson Way', 'Flint', 'MI', '48505'),
(11, 'Shirley Vasquez', '0 Mallard Junction', 'Kansas City', 'MO', '64109'),
(12, 'Maria Fuller', '05402 Badeau Crossing', 'New Orleans', 'LA', '70149'),
(13, 'Deborah Parker', '45475 Hauk Drive', 'Toledo', 'OH', '43699'),
(14, 'Linda Frazier', '6 Rigney Road', 'Lynn', 'MA', '01905'),
(15, 'Randy Ray', '477 Arrowood Parkway', 'Tulsa', 'OK', '74184'),
(16, 'Anthony Tucker', '46 Redwing Center', 'Springfield', 'MO', '65810'),
(17, 'Lisa Hanson', '335 Mesta Terrace', 'Wilmington', 'DE', '19805'),
(18, 'Donna Stevens', '47837 Rusk Drive', 'Norfolk', 'VA', '23504'),
(19, 'Sarah Sims', '515 Talmadge Plaza', 'Chicago', 'IL', '60614'),
(20, 'Jeremy Black', '8409 Ridge Oak Circle', 'Topeka', 'KS', '66617'),
(21, 'Marie Cole', '196 Brentwood Pass', 'Lima', 'OH', '45807'),
(22, 'Dennis Freeman', '603 Leroy Junction', 'Kalamazoo', 'MI', '49048'),
(23, 'Kathy Gonzales', '8597 Fisk Crossing', 'Ogden', 'UT', '84403'),
(24, 'Laura Reid', '829 Jana Park', 'Shreveport', 'LA', '71151'),
(25, 'Jack Mitchell', '50354 Eliot Circle', 'Hayward', 'CA', '94544'),
(26, 'Terry Hicks', '47487 Loomis Park', 'Ashburn', 'VA', '22093'),
(27, 'Ashley Rose', '6 Forest Run Drive', 'Sparks', 'NV', '89436'),
(28, 'Elizabeth James', '1 John Wall Way', 'Hartford', 'CT', '06152'),
(29, 'Todd Edwards', '49393 Sage Place', 'Myrtle Beach', 'SC', '29579'),
(30, 'Rachel Kelley', '90 Fairfield Place', 'Wilmington', 'DE', '19810'),
(31, 'Dorothy Wright', '147 Orin Way', 'Washington', 'DC', '20067'),
(32, 'Sarah Wilson', '99 Oak Trail', 'Saint Cloud', 'MN', '56398'),
(33, 'Jessica Foster', '3958 Onsgard Trail', 'Edmond', 'OK', '73034'),
(34, 'Donna Burns', '45 Mandrake Plaza', 'South Bend', 'IN', '46634'),
(35, 'Jesse Riley', '8128 Green Ridge Alley', 'Springfield', 'IL', '62723'),
(36, 'Julie Dixon', '6752 Oak Valley Court', 'Tulsa', 'OK', '74103'),
(37, 'Ryan Gilbert', '2174 Blaine Pass', 'Shreveport', 'LA', '71130'),
(38, 'Janet Bailey', '5581 Algoma Terrace', 'San Jose', 'CA', '95133'),
(39, 'Denise Larson', '044 Killdeer Circle', 'Naperville', 'IL', '60567'),
(40, 'Victor Campbell', '99 Vahlen Place', 'Lima', 'OH', '45807'),
(41, 'Laura Cooper', '7967 Mallory Way', 'Ogden', 'UT', '84409'),
(42, 'Gerald Berry', '763 Vera Avenue', 'Spring', 'TX', '77388'),
(43, 'Henry Rice', '206 Schlimgen Parkway', 'Dallas', 'TX', '75387'),
(44, 'Margaret Greene', '9118 Susan Drive', 'Metairie', 'LA', '70005'),
(45, 'Theresa Richardson', '66 Grover Pass', 'Riverside', 'CA', '92519'),
(46, 'Robin Smith', '3922 Iowa Trail', 'Norfolk', 'VA', '23551'),
(47, 'Annie Montgomery', '3880 Monterey Center', 'Saint Petersburg', 'FL', '33705'),
(48, 'Ernest Morgan', '41165 Melby Center', 'Raleigh', 'NC', '27621'),
(49, 'Sara Oliver', '050 Lawn Terrace', 'Stockton', 'CA', '95298'),
(50, 'Juan Graham', '27 Green Ridge Center', 'Phoenix', 'AZ', '85072'),
(51, 'Victor Fernandez', '53 Service Park', 'Salt Lake City', 'UT', '84140'),
(52, 'Robin Chavez', '387 Dayton Plaza', 'Huntington Beach', 'CA', '92648'),
(53, 'James Mendoza', '14 Twin Pines Center', 'Beaumont', 'TX', '77713'),
(54, 'Russell Wells', '0 Buhler Terrace', 'New York City', 'NY', '10090'),
(55, 'Bruce Stanley', '91 Corry Park', 'Akron', 'OH', '44393'),
(56, 'Jessica Marshall', '84 Fulton Road', 'Wichita', 'KS', '67260'),
(57, 'Paul Simpson', '2 Eggendart Drive', 'Mesa', 'AZ', '85205'),
(58, 'Nicholas Patterson', '77660 Cambridge Street', 'Austin', 'TX', '78759'),
(59, 'Mildred Martin', '1054 Sycamore Parkway', 'Flint', 'MI', '48550'),
(60, 'Lois Hanson', '614 North Junction', 'Denver', 'CO', '80270'),
(61, 'Mark Brooks', '0043 Sugar Way', 'Chicago', 'IL', '60697'),
(62, 'Jacqueline Dixon', '21392 Marquette Hill', 'Indianapolis', 'IN', '46207'),
(63, 'Dennis Shaw', '0113 Garrison Street', 'New York City', 'NY', '10184'),
(64, 'Gregory Wheeler', '04 Rutledge Pass', 'Philadelphia', 'PA', '19178'),
(65, 'Kenneth Stewart', '79240 Fordem Lane', 'Lincoln', 'NE', '68583'),
(66, 'Ernest Murphy', '954 Dorton Trail', 'Kansas City', 'MO', '64160'),
(67, 'Samuel Hart', '08690 Stone Corner Alley', 'Topeka', 'KS', '66667'),
(68, 'Kevin Hernandez', '36495 Mcbride Center', 'Miami', 'FL', '33245'),
(69, 'Jeremy Nelson', '15 Sachtjen Hill', 'Iowa City', 'IA', '52245'),
(70, 'Ernest Hall', '85309 Debs Park', 'Mobile', 'AL', '36610'),
(71, 'Bobby Hawkins', '8316 Kedzie Place', 'El Paso', 'TX', '88558'),
(72, 'Frank Mason', '927 Farragut Trail', 'Detroit', 'MI', '48232'),
(73, 'Ronald Reed', '5 Debra Center', 'El Paso', 'TX', '79984'),
(74, 'Johnny Stone', '27410 Mockingbird Hill', 'Roanoke', 'VA', '24020'),
(75, 'Kathy Diaz', '83490 Sauthoff Parkway', 'El Paso', 'TX', '79968'),
(76, 'Russell Powell', '332 Larry Center', 'Washington', 'DC', '20215'),
(77, 'Barbara Reynolds', '37 Kingsford Lane', 'New Orleans', 'LA', '70165'),
(78, 'Evelyn Morrison', '79284 Old Gate Junction', 'Sandy', 'UT', '84093'),
(79, 'Diane Griffin', '6 Ridgeview Place', 'San Francisco', 'CA', '94142'),
(80, 'Russell Bowman', '63979 Trailsway Park', 'Washington', 'DC', '20425'),
(81, 'Robin Duncan', '5045 Gerald Circle', 'Hialeah', 'FL', '33018'),
(82, 'Amy Fields', '04444 Ilene Parkway', 'Saint Joseph', 'MO', '64504'),
(83, 'Teresa Morgan', '016 Blackbird Lane', 'Waco', 'TX', '76796'),
(84, 'Jeremy Hansen', '3 North Court', 'Houston', 'TX', '77271'),
(85, 'Paula George', '6 Gina Plaza', 'Spokane', 'WA', '99210'),
(86, 'Philip Smith', '40 Dakota Point', 'Phoenix', 'AZ', '85072'),
(87, 'Ralph Gutierrez', '2 Forest Parkway', 'Van Nuys', 'CA', '91411'),
(88, 'Johnny West', '3917 Monica Pass', 'New Orleans', 'LA', '70179'),
(89, 'Steve Turner', '7 Carioca Avenue', 'Sarasota', 'FL', '34233'),
(90, 'Helen Fuller', '55511 Oak Valley Center', 'San Antonio', 'TX', '78240'),
(91, 'Joseph Cole', '672 Bellgrove Drive', 'Wilmington', 'DE', '19810'),
(92, 'Ernest Morris', '4119 Pepper Wood Pass', 'Littleton', 'CO', '80161'),
(93, 'Jerry Dean', '141 Del Sol Crossing', 'Sacramento', 'CA', '95838'),
(94, 'Earl Payne', '53 Dapin Drive', 'Tallahassee', 'FL', '32304'),
(95, 'Keith Snyder', '00 Green Ridge Terrace', 'Columbia', 'SC', '29203'),
(96, 'Frances Ramirez', '914 Golden Leaf Alley', 'Stamford', 'CT', '06905');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_code` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `notes` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_code`, `customer_name`, `address`, `mobile`, `country`, `email`, `notes`, `publication_status`, `added_by`, `added_time`) VALUES
(1, '1005', 'nazmul hasan', 'dhanmondi-32,dhaka', '0987534678', 'bangladesh', 'nazmul1356@yahoo.com', 'yyyyftfresjbhjuggftdt', 0, 'admin', '2016-02-11 21:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `f_name` varchar(230) NOT NULL,
  `l_name` varchar(230) NOT NULL,
  `u_email` varchar(230) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `f_name`, `l_name`, `u_email`) VALUES
(1, 'nazmul', '827ccb0eea8a706c4c34a16891f84e7b', 'nazmul hasan', 'dalim', 'dalim123@gmail.com'),
(2, 'dalim', '827ccb0eea8a706c4c34a16891f84e7b', 'dalim', 'khan', 'dalim@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_entry`
--

CREATE TABLE IF NOT EXISTS `tbl_purchase_entry` (
  `purchase_id` int(11) NOT NULL,
  `purchase_no` varchar(250) NOT NULL,
  `Select_Item` varchar(230) NOT NULL,
  `Quantity` varchar(250) NOT NULL,
  `Price_per_unit` varchar(230) NOT NULL,
  `purchase_date` date NOT NULL,
  `select_supplier` varchar(230) NOT NULL,
  `notes` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_purchase_entry`
--

INSERT INTO `tbl_purchase_entry` (`purchase_id`, `purchase_no`, `Select_Item`, `Quantity`, `Price_per_unit`, `purchase_date`, `select_supplier`, `notes`) VALUES
(61, '1020', '4', '1200', '34', '2010-11-16', '1002', ''),
(110, '1035', '1', '', '', '0000-00-00', '1002', ''),
(111, '1035', '1', '', '', '0000-00-00', '1002', ''),
(140, '1236', '1', '', '', '0000-00-00', '1002', ''),
(141, '1237', '1', '', '', '0000-00-00', '1002', ''),
(142, '1238', '1', '', '', '0000-00-00', '1002', ''),
(161, '1239', '1', '1200', '22', '2010-11-16', '1002', ''),
(162, '1240', '1', '123', '22', '2010-11-16', '10023', ''),
(163, '1241', '1', '12', '22', '2010-11-16', '1002', ''),
(164, '1242', '1', '12', '22', '2010-11-16', '1002', ''),
(166, '1210', '1', '1234', '12', '2012-12-15', '1005', ''),
(167, '1210', '1', '1234', '12345', '2012-12-15', '1005', ''),
(168, '1243', '1', '890', '1', '2010-12-15', '1002', ''),
(169, '1244', '1', '12', '789', '2010-12-15', '1002', ''),
(170, '1245', '1', '12', '789', '2010-12-15', '1002', ''),
(172, '1246', '1', '89', '789', '2010-12-15', '1002', ''),
(174, '1247', '1', '89', '789', '2010-12-15', '1002', ''),
(176, '1248', '1', '89', '12', '2010-12-15', '1002', ''),
(178, '1249', '1', '12', '789', '2010-12-15', '1002', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_return_entry`
--

CREATE TABLE IF NOT EXISTS `tbl_purchase_return_entry` (
  `purchase_return_id` int(11) NOT NULL,
  `purchase_return_no` varchar(250) NOT NULL,
  `select_Item` varchar(60) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price_per_unit` varchar(100) NOT NULL,
  `purchase_return_date` date NOT NULL,
  `select_supplier` varchar(50) NOT NULL,
  `notes` text NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_purchase_return_entry`
--

INSERT INTO `tbl_purchase_return_entry` (`purchase_return_id`, `purchase_return_no`, `select_Item`, `quantity`, `price_per_unit`, `purchase_return_date`, `select_supplier`, `notes`, `added_by`, `added_time`) VALUES
(1, '1001', 'fashwash', '100', '170', '2016-02-02', 'ashik', '', 'admin', '2016-02-13 23:55:03'),
(7, '1003', '1', '12', '11', '2010-12-15', '1002', '', '', '2016-02-14 00:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales_entry`
--

CREATE TABLE IF NOT EXISTS `tbl_sales_entry` (
  `sales_id` int(11) NOT NULL,
  `sales_no` varchar(60) NOT NULL,
  `select_Item` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price_per_unit` varchar(100) NOT NULL,
  `sales_date` date NOT NULL,
  `select_customer` varchar(100) NOT NULL,
  `notes` text NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sales_entry`
--

INSERT INTO `tbl_sales_entry` (`sales_id`, `sales_no`, `select_Item`, `quantity`, `price_per_unit`, `sales_date`, `select_customer`, `notes`, `added_by`, `added_time`) VALUES
(12, '1209', '2', '89', '789', '2012-12-15', '1005', '', '', '2016-02-13 22:35:18'),
(14, '1210', '2', '890', '4567', '2012-12-15', '1005', '', '', '2016-02-13 22:56:11'),
(16, '1211', '2', '1', '10', '2012-12-15', '1005', '', '', '2016-02-13 22:59:17'),
(18, '1212', '2', '12', '12', '2012-12-15', '1005', '', '', '2016-02-13 23:01:59'),
(19, '1213', '1', '1000', '', '0000-00-00', '1005', '', '', '2016-02-15 09:01:22'),
(20, '1213', '2', '', '00', '0000-00-00', '1005', '', '', '2016-02-15 09:03:11'),
(21, '1213', '2', '', '00', '0000-00-00', '1005', '', '', '2016-02-15 09:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales_return_entry`
--

CREATE TABLE IF NOT EXISTS `tbl_sales_return_entry` (
  `sales_return_id` int(11) NOT NULL,
  `sales_return_no` varchar(50) NOT NULL,
  `select_Item` varchar(50) NOT NULL,
  `quantity` varchar(60) NOT NULL,
  `price_per_unit` varchar(50) NOT NULL,
  `sales_return_date` date NOT NULL,
  `select_customer` varchar(60) NOT NULL,
  `notes` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sales_return_entry`
--

INSERT INTO `tbl_sales_return_entry` (`sales_return_id`, `sales_return_no`, `select_Item`, `quantity`, `price_per_unit`, `sales_return_date`, `select_customer`, `notes`, `added_by`, `added_time`) VALUES
(1, '1001', 'Gillette', '12', '180', '2016-02-10', 'alom', '', 'admin', '2016-02-14 01:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE IF NOT EXISTS `tbl_supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_code` varchar(100) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `notes` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`supplier_id`, `supplier_code`, `supplier_name`, `address`, `contact_person`, `phone_no`, `notes`, `added_by`, `time`) VALUES
(1, '1002', 'tanjina ', 'dhanmondi-32,daffodil international university', '01765457865', '987668', 'regular supplier', 'nazmul', '0000-00-00 00:00:00'),
(4, '10023', 'nazmul', 'comilla', '097432345678', '12345678', 'niceeeeeeeeeeeeee', 'dalim', '2016-02-06 22:54:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_purchase_entry`
--
ALTER TABLE `tbl_purchase_entry`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `tbl_purchase_return_entry`
--
ALTER TABLE `tbl_purchase_return_entry`
  ADD PRIMARY KEY (`purchase_return_id`);

--
-- Indexes for table `tbl_sales_entry`
--
ALTER TABLE `tbl_sales_entry`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `tbl_sales_return_entry`
--
ALTER TABLE `tbl_sales_return_entry`
  ADD PRIMARY KEY (`sales_return_id`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_purchase_entry`
--
ALTER TABLE `tbl_purchase_entry`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `tbl_purchase_return_entry`
--
ALTER TABLE `tbl_purchase_return_entry`
  MODIFY `purchase_return_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_sales_entry`
--
ALTER TABLE `tbl_sales_entry`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_sales_return_entry`
--
ALTER TABLE `tbl_sales_return_entry`
  MODIFY `sales_return_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
