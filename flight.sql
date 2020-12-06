-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 23, 2020 at 01:32 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `flight`
--

-- --------------------------------------------------------

--
-- Table structure for table `airplane`
--

CREATE TABLE `airplane` (
  `airplane_no` int(11) NOT NULL,
  `no_seat` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airplane`
--

INSERT INTO `airplane` (`airplane_no`, `no_seat`, `staff_id`) VALUES
(1, 500, 1),
(2, 500, 2),
(3, 450, 3),
(4, 500, 4),
(5, 500, 5),
(6, 600, 6),
(7, 500, 7),
(8, 500, 8),
(9, 500, 9),
(10, 500, 10);

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `airport_code` varchar(10) NOT NULL,
  `airport_name` varchar(50) NOT NULL,
  `airport_country` varchar(50) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`airport_code`, `airport_name`, `airport_country`, `staff_id`) VALUES
('AKL', 'Auckland Airport', 'New Zealand', 1),
('BKK', 'Suvarnabhumi Airport', 'Thailand', 2),
('CDG', 'Paris Charles de Gaulle Airport', 'France', 3),
('DXB', 'Dubai International Airport', 'United Arab Emirates', 4),
('HND', 'Haneda International Airport', 'Japan', 5),
('JFK', 'John F. Kennedy International Airport', 'United States of America', 6),
('LHR', 'Heathrow Airport', 'United Kingdom', 7),
('NRT', 'Narita International Airport', 'Japan', 8),
('OSL', 'Gardermoen Airport', 'Norway', 9),
('TXL', 'Berlin Tegel Airport', 'Germany', 10);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class`) VALUES
('Business class'),
('Economy class'),
('First class');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `passenger_id` int(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`passenger_id`, `title`, `fname`, `lname`, `dob`, `address`, `email`, `password`) VALUES
(41, 'Prof.', 'Chanvit', 'Moungyoo', '2020-10-17', 'Japan', 'chanwith_club@hotmail.com', '1234'),
(42, 'Mrs.', 'boss', 'haha', '2020-11-08', 'New Zealand', 'atisithaha@hotmail.com', '1234'),
(43, '', 'Chan', 'Steve', '2020-11-05', 'United Arab Emirates', 'usmanhaha@hotmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `fare`
--

CREATE TABLE `fare` (
  `flight_code` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fare`
--

INSERT INTO `fare` (`flight_code`, `class`, `price`, `staff_id`) VALUES
('TG001', 'First class', 89315, 1),
('TG010', 'First class', 122515, 3),
('TG004', 'Business class', 62445, 5),
('TG007', 'Economy class', 25335, 7),
('TG003', 'Business class', 45200, 4),
('TG001', 'Economy class', 25338, 1),
('TG001', 'Business class', 62445, 1),
('TG002', 'Economy class', 16500, 7),
('TG002', 'Business class', 32500, 7),
('TG002', 'First class', 65400, 7),
('TG003', 'Economy class', 16500, 4),
('TG003', 'First class', 62445, 4),
('TG004', 'Economy class', 4500, 6),
('TG004', 'First class', 32000, 6),
('TG005', 'Economy class', 25338, 3),
('TG005', 'Business class', 62445, 3),
('TG005', 'First class', 92450, 3),
('TG006', 'Economy class', 19500, 8),
('TG006', 'Business class', 32500, 8),
('TG006', 'First class', 65400, 8),
('TG007', 'Business class', 32500, 10),
('TG007', 'First class', 69315, 10),
('TG008', 'Economy class', 25400, 2),
('TG008', 'Business class', 63599, 2),
('TG008', 'First class', 122515, 2),
('TG009', 'Economy class', 32500, 9),
('TG009', 'Business class', 82500, 9),
('TG009', 'First class', 124059, 9),
('TG010', 'Economy class', 32000, 5),
('TG010', 'Business class', 65400, 5),
('TG001', 'Business class', 19500, 1),
('TG001', 'Economy class', 69315, 1);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_code` varchar(20) NOT NULL,
  `origin_airport` varchar(50) NOT NULL,
  `dep_time` datetime NOT NULL,
  `destination_airport` varchar(50) NOT NULL,
  `arrive_time` datetime NOT NULL,
  `airplane_no` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_code`, `origin_airport`, `dep_time`, `destination_airport`, `arrive_time`, `airplane_no`, `staff_id`) VALUES
('TG001', 'BKK', '2020-10-17 03:25:00', 'LHR', '2020-10-17 12:25:00', 1, 1),
('TG002', 'DXB', '2020-10-17 08:45:00', 'LHR', '2020-10-17 14:25:00', 2, 2),
('TG003', 'DXB', '2020-10-17 13:10:00', 'TXL', '2020-10-17 18:40:00', 3, 3),
('TG004', 'CDG', '2020-10-17 01:55:00', 'LHR', '2020-10-17 04:00:00', 4, 4),
('TG005', 'BKK', '2020-10-20 01:25:00', 'HND', '2020-10-20 08:25:00', 5, 5),
('TG006', 'OSL', '2020-10-20 07:30:00', 'BKK', '2020-10-20 20:00:00', 6, 6),
('TG007', 'BKK', '2020-10-23 10:30:00', 'DXB', '2020-10-23 16:30:00', 7, 7),
('TG008', 'NRT', '2020-10-26 20:45:00', 'JFK', '2020-10-27 20:35:00', 8, 8),
('TG009', 'OSL', '2020-10-30 08:30:00', 'HND', '2020-10-31 02:35:00', 9, 9),
('TG010', 'JFK', '2020-11-10 10:00:00', 'DXB', '2020-12-11 23:30:00', 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `orderflight`
--

CREATE TABLE `orderflight` (
  `order_id` int(50) NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `Flight_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderflight`
--

INSERT INTO `orderflight` (`order_id`, `passenger_id`, `Flight_code`) VALUES
(12, 1, 'TG001'),
(14, 1, 'TG001');

--
-- Triggers `orderflight`
--
DELIMITER $$
CREATE TRIGGER `Duplicate` BEFORE INSERT ON `orderflight` FOR EACH ROW BEGIN
DECLARE rowcount INT;

	SELECT COUNT(*)
    INTO rowcount
    FROM orderflight
    WHERE orderflight.Flight_code = NEW.Flight_code and orderflight.passenger_id = NEW.passenger_id;

	IF rowcount > 0 THEN
    SIGNAL SQLSTATE '02000' SET MESSAGE_TEXT = 'flight duplicated';
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `username`, `password`) VALUES
(1, 'Peter Adam', 'petera', '1234'),
(2, 'Steve Horwang', 'hsteve', '1234'),
(3, 'Nagata Yoshida', 'nafuhung', '1234'),
(4, 'Tim Friedhoff', 'timmy', '1234'),
(5, 'Maxim Klander', 'maximk', '1234'),
(6, 'Thomas Berritault', 'tberritualt', '1234'),
(7, 'Ahmad Al-Shalif', 'madeindubai', '1234'),
(8, 'Jonathan McMillan', 'joshmc', '1234'),
(9, 'Dhitsapat Hiranwatcharakan', 'fifazaza', '1234'),
(10, 'Usman Jamil', 'usmanhaha', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `passenger_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `flight_code` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`passenger_id`, `status`, `flight_code`, `class`) VALUES
(1, 'Confirmed', 'TG001', 'First class'),
(4, 'Cancelled', 'TG007', 'Economy class'),
(2, 'Confirmed', 'TG010', 'First class'),
(3, 'Confirmed', 'TG004', 'Business class');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `title` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`title`) VALUES
('Dr.'),
('Mr.'),
('Mrs.'),
('Ms.'),
('Prof.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airplane`
--
ALTER TABLE `airplane`
  ADD PRIMARY KEY (`airplane_no`),
  ADD KEY `Staff_id` (`staff_id`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`airport_code`),
  ADD KEY `Staff_id` (`staff_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`passenger_id`),
  ADD KEY `Title` (`title`);

--
-- Indexes for table `fare`
--
ALTER TABLE `fare`
  ADD KEY `Flight_code` (`flight_code`,`class`,`staff_id`),
  ADD KEY `Staff_id` (`staff_id`),
  ADD KEY `Class` (`class`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight_code`),
  ADD KEY `Origin_airport` (`origin_airport`,`destination_airport`),
  ADD KEY `Destination_airport` (`destination_airport`),
  ADD KEY `Airplane_no` (`airplane_no`),
  ADD KEY `Staff_id` (`staff_id`);

--
-- Indexes for table `orderflight`
--
ALTER TABLE `orderflight`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `passenger_id` (`passenger_id`),
  ADD KEY `Flight_code` (`Flight_code`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD KEY `Flight_code` (`flight_code`),
  ADD KEY `Passenger_id` (`passenger_id`),
  ADD KEY `Class` (`class`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `orderflight`
--
ALTER TABLE `orderflight`
  MODIFY `order_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `airplane`
--
ALTER TABLE `airplane`
  ADD CONSTRAINT `airplane_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `airport`
--
ALTER TABLE `airport`
  ADD CONSTRAINT `airport_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `fare`
--
ALTER TABLE `fare`
  ADD CONSTRAINT `fare_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`),
  ADD CONSTRAINT `fare_ibfk_2` FOREIGN KEY (`flight_code`) REFERENCES `flight` (`flight_code`),
  ADD CONSTRAINT `fare_ibfk_3` FOREIGN KEY (`class`) REFERENCES `class` (`class`);

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `flight_ibfk_1` FOREIGN KEY (`origin_airport`) REFERENCES `airport` (`airport_code`),
  ADD CONSTRAINT `flight_ibfk_2` FOREIGN KEY (`destination_airport`) REFERENCES `airport` (`airport_code`),
  ADD CONSTRAINT `flight_ibfk_3` FOREIGN KEY (`airplane_no`) REFERENCES `airplane` (`airplane_no`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`flight_code`) REFERENCES `flight` (`flight_code`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`class`) REFERENCES `class` (`class`);
