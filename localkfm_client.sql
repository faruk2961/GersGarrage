-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: mysql3001.mochahost.com
-- Generation Time: Jul 26, 2020 at 04:39 PM
-- Server version: 5.6.33
-- PHP Version: 7.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `localkfm_client`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `vehicletype` varchar(100) NOT NULL,
  `selectmake` varchar(100) NOT NULL,
  `selectmodel` varchar(100) NOT NULL,
  `licence` varchar(100) NOT NULL,
  `enginetype` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `status` enum('booked','In Service','Unrepairable','Fixed','Collected') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user`, `phone`, `vehicletype`, `selectmake`, `selectmodel`, `licence`, `enginetype`, `service`, `date`, `vehicle`, `comment`, `status`) VALUES
(7, 'root', '083', 'Car', 'ASTON MARTIN  ', 'DB9 COUPE', 'LI53535', 'Gas', 'Major Service', '2020-07-18', 'Demo', 'Oil Problem', 'In Service'),
(9, 'admin', '', 'Van', 'AUDI ', 'DB9 VOLANTE', '34ffk61', 'Gas', 'Annuel Service', '2020-07-31', '34fk23', 'major', 'booked'),
(10, 'admin', '', 'Van', 'AUDI ', 'DB9 VOLANTE', '34ffk61', 'Gas', 'Annuel Service', '2020-07-31', '34fk23', 'major', 'booked'),
(11, 'bilal', '083', 'Bus', 'AUDI ', 'V8 VANTAGE', 'LI53535', 'Gas', 'Major Service', '2020-07-31', 'Select Service', 'Oil Problem', 'Collected'),
(13, 'admin', '', 'Bus', 'AUDI ', '325I', '34ffk61', 'Dizel', 'Major Service', '2020-07-22', '34fk23', 'asf', 'booked'),
(14, 'Faruk Furkan KOC', '083', 'Bus', 'AUDI ', 'A3', '34ffk61', 'Dizel', 'Major Service', '2020-07-22', '34ffk29', 'major', 'booked'),
(15, 'Faruk Furkan KOC', '083', 'Bus', 'AUDI ', 'A3', '34ffk61', 'Dizel', 'Major Service', '2020-07-22', '34ffk29', 'major', 'booked'),
(16, 'Faruk Furkan KOC', '083', 'Motorcycle', 'ASTON MARTIN  ', 'DB9 VOLANTE', '34ffk61', 'Dizel', 'Annuel Service', '2020-07-22', '34ffk29', 'asdsd', 'Unrepairable'),
(17, 'Faruk Furkan KOC', '083', 'Van', 'Yamaha', '330XI', '34ffk61', 'Dizel', 'Repair', '2020-07-22', '34ffk29', 'jb', 'booked'),
(18, 'Faruk Furkan KOC', '083', 'Car', 'ASTON MARTIN  ', 'V8 VANTAGE', '34ffk61', 'Dizel', 'Annuel Service', '2020-07-26', '34ffk29', 'kmk', 'booked'),
(23, 'Faruk Furkan KOC', '083', 'Car', 'AUDI ', 'A4 CABRIOLET', '29bjk29', 'Benzin', 'Annuel Service', '2020-07-24', '34ffk29', 'asdsd', 'booked'),
(24, 'Faruk Furkan KOC', '083', 'Van', 'FORD', '330XI', '29bjk29', 'Benzin', 'Major Service', '2020-07-31', 'Select Vehicle', 'jb', 'booked'),
(25, 'admin', '', 'Van', 'AUDI ', 'A6', '90asd', 'Dizel', 'Select Service', '2020-07-23', 'Select Vehicle', 'jjjj', 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `car_parts`
--

CREATE TABLE IF NOT EXISTS `car_parts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `part_name` varchar(30) NOT NULL DEFAULT '',
  `price` double NOT NULL,
  `part_of` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `car_parts`
--

INSERT INTO `car_parts` (`id`, `part_name`, `price`, `part_of`) VALUES
(1, 'Brake Pads', 14.8, 'Brake Parts'),
(2, 'Brake Discs', 16.05, 'Brake Parts'),
(3, 'Brake Calip', 42.5, 'Brake Parts'),
(4, 'Drum Brake ', 88.9, 'Brake Parts'),
(5, 'Shock Absor', 29.9, 'Steering Components'),
(6, 'Anti Roll B', 6.8, 'Steering Components'),
(7, 'Suspension ', 68.9, 'Steering Components'),
(8, 'Wheel Beari', 18.3, 'Steering Components'),
(9, 'Tie Rod Ends', 7.5, 'Steering Components'),
(10, 'Timing Belt Kit', 79.9, 'Engine Components'),
(11, 'Drive Belts', 23.2, 'Engine Components'),
(12, 'Ignition Components', 2, 'Engine Components'),
(13, 'Ignition Coil', 29.1, 'Engine Components'),
(14, 'Air Filter', 5.2, 'Filters'),
(15, 'Oil Filter', 4.31, 'Filters'),
(16, 'Fuel filter', 15.5, 'Filters'),
(17, 'Pollen Filter', 5.6, 'Filters'),
(18, 'Clutch Kit', 39.8, 'Clutch Systems / Tra'),
(19, 'Clutch Flywheels', 282.9, 'Clutch Systems / Tra'),
(20, 'Drive Shafts', 152.9, 'Clutch Systems / Tra'),
(21, 'Exhaust End Silencers', 41.5, 'Exhaust Silencers'),
(22, 'Catalytic Converter', 175.9, 'Exhaust Silencers'),
(23, 'EGR Valve', 73.9, 'Exhaust Silencers'),
(24, 'Lambda Sensor', 50.9, 'Exhaust Silencers'),
(25, 'Water Pump', 34.4, 'Engine Cooling Parts'),
(26, 'Car Radiator', 79.9, 'Engine Cooling Parts'),
(27, 'Radiator Fan', 51.91, 'Engine Cooling Parts'),
(28, 'Expansion Tank, coolant', 14, 'Heaters'),
(29, 'Heat Exchanger, interior heati', 11.4, 'Heaters'),
(30, 'Compressor, air conditioning', 228.9, 'Heaters'),
(31, 'Dryer, air conditioning', 62.9, 'Heaters'),
(32, 'Interior Blower', 132.9, 'Heaters'),
(33, 'Switch, window winder', 17.1, 'Loks and Closures'),
(34, 'Steering Locks', 26.4, 'Loks and Closures'),
(35, 'Fuel Tank Caps', 10.1, 'Loks and Closures'),
(36, 'Boot Struts', 11.09, 'Loks and Closures'),
(37, 'Bonnet Gas Strut', 20.2, 'Loks and Closures'),
(38, 'Alternator', 66.9, 'Other Parts'),
(39, 'Starter Motors', 65.9, 'Other Parts'),
(40, 'Window Regulator', 47.4, 'Other Parts'),
(41, 'Light Bulbs \n', 3.9, 'Other Parts');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `licence` varchar(100) NOT NULL,
  `annual_service` varchar(100) NOT NULL,
  `mini_valet` varchar(100) NOT NULL,
  `car_mat` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parts` varchar(100) NOT NULL,
  `part_price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `name`, `mobile`, `vehicle`, `licence`, `annual_service`, `mini_valet`, `car_mat`, `total`, `date`, `user_id`, `parts`, `part_price`) VALUES
(57, '', '', '', '', '0', '0', '0', '0', '26-07-20', 23, '', ''),
(56, '', '', '', '', '0', '0', '0', '0', '26-07-20', 23, '', ''),
(55, '', '', '', '', '0', '0', '0', '0', '26-07-20', 14, '', ''),
(54, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '26-07-20', 14, 'Gas', '50'),
(53, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '26-07-20', 14, 'Gas', '50'),
(52, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '26-07-20', 11, 'Gas', '50'),
(51, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '26-07-20', 11, 'Gas', '50'),
(50, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '26-07-20', 24, 'Gas', '50'),
(49, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '25-07-20', 18, 'Gas', '50'),
(48, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '24-07-20', 14, 'Gas', '50'),
(47, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '24-07-20', 14, 'Gas', '50'),
(46, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '23-07-20', 23, 'Gas', '50'),
(45, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '23-07-20', 23, 'Gas', '50'),
(34, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '16-07-20', 7, 'Gas', '50'),
(35, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '16-07-20', 7, 'Gas', '50'),
(36, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '16-07-20', 7, 'Gas', '50'),
(37, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '16-07-20', 16, 'Gas', '50'),
(38, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '16-07-20', 13, 'Gas', '50'),
(39, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '19-07-20', 14, 'Gas', '50'),
(40, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '19-07-20', 13, 'Gas', '50'),
(41, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '20-07-20', 13, 'Gas', '50'),
(42, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '20-07-20', 16, 'Gas', '50'),
(43, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '23-07-20', 7, 'Gas', '50'),
(44, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '23-07-20', 7, 'Gas', '50'),
(33, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '16-07-20', 7, 'Gas', '50'),
(32, 'Faruk Furkan KOC', '083', 'Bus', '34ffk61', '100', '100', '100', '350', '16-07-20', 7, 'Gas', '50');

-- --------------------------------------------------------

--
-- Table structure for table `mechanicbooking`
--

CREATE TABLE IF NOT EXISTS `mechanicbooking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(100) NOT NULL,
  `plate` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `mechanics` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `mechanicbooking`
--

INSERT INTO `mechanicbooking` (`id`, `customer`, `plate`, `service`, `status`, `mechanics`, `user_id`) VALUES
(21, 'bilal', 'Select Service', 'Major Service', 'Collected', 'Jimmy', 11),
(22, 'root', 'Demo', 'Major Service', 'In Service', 'Aman Kumar', 7),
(23, 'root', 'Demo', 'Major Service', 'In Service', 'Mohammad', 7),
(24, 'bilal', 'Select Service', 'Major Service', 'Collected', 'Jimmy Mac', 11),
(25, 'Faruk Furkan KOC', '34ffk29', 'Annuel Service', 'Unrepairable', 'Faruk Furkan KOC', 16),
(26, 'Faruk Furkan KOC', '34ffk29', 'Repair', 'booked', 'Emre', 17);

-- --------------------------------------------------------

--
-- Table structure for table `mechanics`
--

CREATE TABLE IF NOT EXISTS `mechanics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mechanics`
--

INSERT INTO `mechanics` (`id`, `name`) VALUES
(2, 'Jimmy Mac'),
(3, 'Faruk Furkan KOC'),
(4, 'Emre');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE IF NOT EXISTS `parts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `name`, `price`) VALUES
(1, 'Head Light', '100'),
(4, 'Oil', '150'),
(5, 'Gas', '50');

-- --------------------------------------------------------

--
-- Table structure for table `part_of_car`
--

CREATE TABLE IF NOT EXISTS `part_of_car` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Brake Parts` varchar(50) NOT NULL DEFAULT '',
  `Steering Components` varchar(50) NOT NULL DEFAULT '',
  `Engine Components` varchar(50) NOT NULL DEFAULT '',
  `Filters` varchar(50) NOT NULL DEFAULT '',
  `Clutch Systems / Tra` varchar(50) NOT NULL DEFAULT '',
  `Exhaust Silencers` varchar(50) NOT NULL DEFAULT '',
  `Engine Cooling Parts` varchar(50) NOT NULL DEFAULT '',
  `Heaters` varchar(50) NOT NULL DEFAULT '',
  `Loks and Closures` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `service_name` varchar(50) NOT NULL DEFAULT '',
  `service_price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_name`, `service_price`) VALUES
(1, 'Annuel Service', 200),
(2, 'Major Service', 300),
(3, 'Repair', 250),
(4, 'Major Repair', 500);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Booked'),
(2, 'In Service'),
(3, 'Fixed'),
(4, 'Collected'),
(5, 'Unrepariable');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT '',
  `phonecode` varchar(10) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `vehicletype` varchar(100) NOT NULL,
  `selectmake` varchar(100) NOT NULL,
  `selectmodel` varchar(100) NOT NULL,
  `licence` varchar(100) NOT NULL,
  `enginetype` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `email`, `phonecode`, `phone`, `vehicletype`, `selectmake`, `selectmodel`, `licence`, `enginetype`) VALUES
(1, 'admin', '12345', 'admin@admin.com', '', '', '', '', '', '', ''),
(13, 'bilal', '12345', 'bilalmalik1561@gmail.com', '083', '12121212', 'Motorcycle', 'AUDI ', 'DB9 VOLANTE', 'LI53535', 'Benzin'),
(14, 'Faruk Furkan KOC', '12345', 'faruk.furkan.koc@gmail.com', '083', '+353872984990', 'Car', 'AUDI ', 'A3', '34ffk61', 'Dizel');

-- --------------------------------------------------------

--
-- Table structure for table `user_vehicle`
--

CREATE TABLE IF NOT EXISTS `user_vehicle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicles_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `plate` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_vehicle`
--

INSERT INTO `user_vehicle` (`id`, `vehicles_id`, `user_id`, `plate`) VALUES
(1, 1, 1, '1234'),
(2, 2, 2, '345'),
(3, 44, 2, '34fk23'),
(4, 45, 2, '34ffk29'),
(5, 46, 2, 'Demo');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `make` varchar(50) NOT NULL DEFAULT '',
  `model` varchar(50) NOT NULL DEFAULT '',
  `plate` varchar(100) NOT NULL,
  `vehicle` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `make`, `model`, `plate`, `vehicle`, `user_id`) VALUES
(1, 'ASTON MARTIN', 'DB9 COUPE', '', '1', 0),
(2, 'ASTON MARTIN  ', 'DB9 VOLANTE', '', NULL, 0),
(3, 'ASTON MARTIN  ', 'V8 VANTAGE', '', NULL, 0),
(4, 'AUDI ', 'A3', '', NULL, 0),
(5, 'AUDI ', 'A4 CABRIOLET', '', NULL, 0),
(6, 'AUDI ', 'A4 QUATTRO', '', NULL, 0),
(7, 'AUDI ', 'A4 CABRIOLET QUATTRO', '', NULL, 0),
(8, 'AUDI ', 'A4', '', NULL, 0),
(9, 'AUDI ', 'A6', '', NULL, 0),
(10, 'BMW', '325CI CONVERTIBLE', '', NULL, 0),
(11, 'BMW', '325I', '', NULL, 0),
(12, 'BMW', '325XI', '', NULL, 0),
(13, 'BMW', '330I', '', NULL, 0),
(14, 'BMW', '330XI', '', NULL, 0),
(15, 'BMW', '525I', '', NULL, 0),
(16, 'BMW', '525XI', '', NULL, 0),
(17, 'BMW', '530I', '', NULL, 0),
(18, 'FORD', 'B4000 4WD', '', NULL, 0),
(19, 'FORD', 'CROWN VICTORIA POLICE', '', NULL, 0),
(20, 'FORD', 'E150 CLUB WAGON', '', NULL, 0),
(21, 'FORD', 'E150 ECONOLINE 2WD', '', NULL, 0),
(22, 'FORD', 'ESCAPE 4WD', '', NULL, 0),
(23, 'FORD', 'ESCAPE FWD', '', NULL, 0),
(24, 'FORD', 'ESCAPE HYBRID 4WD', '', NULL, 0),
(25, 'FORD', 'EXPLORER 2WD', '', NULL, 0),
(26, 'HONDA', 'ACCORD', '', NULL, 0),
(27, 'HONDA', 'CIVIC', '', NULL, 0),
(28, 'HONDA', 'CR-V 2WD', '', NULL, 0),
(29, 'HONDA', 'PILOT 2WD', '', NULL, 0),
(30, 'Aprilia', 'RS 125 ', '', NULL, 0),
(31, 'KTM', 'RC 390', '', NULL, 0),
(32, 'Kawasaki', 'Ninja 650', '', NULL, 0),
(33, 'Yamaha', 'YZF-R6', '', NULL, 0),
(34, 'Suzuki ', 'GSX-R1000', '', NULL, 0),
(35, 'BMW', 'S1000RR', '', NULL, 0),
(36, 'MV ', 'Agusta F3 675', '', NULL, 0),
(37, 'Honda', 'CBR1000RR Fireblade', '', NULL, 0),
(38, 'Kawasaki', 'ZX-10RR', '', NULL, 0),
(39, 'Ducati ', 'Panigale V4S', '', NULL, 0),
(40, 'bmw', '320', '', '1', 0),
(41, 'bmw', '320', '', '1', 0),
(42, 'bmw', '320', '', '1', 0),
(43, 'bmw', '320', '', '1', 0),
(44, 'bmw', '320', '', '1', 0),
(45, 'bmw', '420', '', '1', 0),
(46, '1234', '2020', '', '1', 0),
(48, 'Demo', '007', 'Demo', 'van', 12),
(49, 'bmw', '320', '34fk23', 'motorcycle', 1),
(50, 'bmw', '420', '34ffk29', 'car', 14),
(51, 'Audi', '2020', '0008', 'car', 13);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE IF NOT EXISTS `vehicle_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`id`, `type`) VALUES
(1, 'car'),
(2, 'motorcycle'),
(3, 'van'),
(4, 'bus');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
