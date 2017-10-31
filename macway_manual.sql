-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 08:36 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `macway`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS  `members` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `background`;
CREATE TABLE IF NOT EXISTS  `background` (
  `backgroundID` int(11) NOT NULL AUTO_INCREMENT,
  `backgroundFile` varchar(255) DEFAULT NULL,
  `backgroungTag` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`backgroundID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `gallerycategory`;
CREATE TABLE IF NOT EXISTS  `gallerycategory` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS  `gallery` (
  `galleryID` int(11) NOT NULL AUTO_INCREMENT,
  `galleryFile` varchar(255) DEFAULT NULL,
  `galleryTag` varchar(255) DEFAULT NULL,
  `gallerycategory` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`galleryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `findusatregion`;
CREATE TABLE IF NOT EXISTS  `findusatregion` (
  `regionID` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`regionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `findusat`;
CREATE TABLE IF NOT EXISTS  `findusat` (
  `findusatID` int(11) NOT NULL AUTO_INCREMENT,
  `findusatFile` varchar(255) DEFAULT NULL,
  `findusatPlaceName` varchar(255) DEFAULT NULL,
  `findusatPlaceAddress` varchar(255) DEFAULT NULL,
  `findusatRegion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`findusatID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `newsandmedia`;

CREATE TABLE IF NOT EXISTS  `newsandmedia` (
  `postID` varchar(255) DEFAULT NULL,
  `post_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_text` Text,
  `post_url` varchar(255) DEFAULT NULL,
  `post_picture` varchar(255) DEFAULT NULL,
  `post_fb` varchar(255) DEFAULT 'NO',
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `testimonial`;

CREATE TABLE IF NOT EXISTS  `testimonial` (
  `testimonialID` int(11) NOT NULL AUTO_INCREMENT,
  `testimonialFile` varchar(255) DEFAULT NULL,
  `testimonialName` varchar(255) DEFAULT NULL,
  `testimonialTitle` varchar(255) DEFAULT NULL,
  `testimonialDescription` varchar(255) DEFAULT NULL,
  `testimonialRating` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`testimonialID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `bookaride`;
CREATE TABLE IF NOT EXISTS  `bookaride` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boption` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `fromdate` varchar(255) DEFAULT NULL,
  `todate` varchar(255) DEFAULT NULL,
  `submitted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS  `enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `submitted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
=============================================================
INSERT INTO `background` (`backgroundID`, `backgroundFile`, `backgroungTag`) VALUES
(1, 'bg-header.jpg', 'It’s More than<br>what you see'),
(2, 'bg-header_1.jpg', 'Winning isn’t everything,<br />it’s the only thing!'),
(3, 'bg-header_2.jpg', 'Sway-A-Way,<br />like never before!');

INSERT INTO `findusat` (`findusatID`, `findusatFile`, `findusatPlaceName`, `findusatPlaceAddress`, `findusatRegion`) VALUES
(1, 'Adlabs.jpg', 'ADLABS IMAGICA', 'Mumbai - Pune Expressway, Khopoli', 'Mumbai'),
(2, 'AmbyVally.jpg', 'Aamby Valley City', 'Lonavala', 'Mumbai'),
(3, 'Crystal-Mall.jpg', 'Crystal Mall', 'Rajkot', 'Rajkot'),
(4, 'Della.jpg', 'Della Adventure Park', 'Kunegaon, Lonavala, Maharashtra', 'Mumbai'),
(5, 'Essal_World.jpg', 'EsselWorld', 'Borivali West, Mumbai', 'Mumbai'),
(6, 'FunFoodVillege.jpg', 'Fun Food Villege', 'Amrawati Road, Dist Nagpur', 'Nagpur'),
(7, 'Inorbit.jpg', 'Inorbit', 'Mumbai', 'Mumbai'),
(8, 'Khanvel-Resort.jpg', 'Khanvel Resort', 'Ashram road, Ahmedabad', 'Silvassa'),
(9, 'Kidzania.jpg', 'KidZania', 'Borivali West, Mumbai', 'Mumbai'),
(10, 'Ramoji.jpg', 'Ramoji Film City', 'Hayathnagar Mandal, Hyderabad', 'Hyderabad'),
(11, 'Shangrila.jpg', 'Shangrila', 'Bhiwandi, Maharashtra', 'Mumbai'),
(12, 'Trek-on-Wheels.jpg', 'Trek-on-Wheels', 'Panjim, Goa', 'Goa'),
(13, 'Universal-Kingdom.jpg', 'VGP Universal Kingdom', 'Injambakkam, Chennai', 'Chennai'),
(14, 'Wonderla_Begaluru.jpg', 'Wonderla', 'Mysore Road, Bengaluru', 'Bengaluru');


INSERT INTO `findusatregion` (`regionID`, `region`) VALUES
(1, 'Mumbai'),
(2, 'Bengaluru'),
(3, 'Goa'),
(4, 'Silvassa'),
(5, 'Hyderabad'),
(6, 'Indore'),
(7, 'Jaipur'),
(8, 'Chennai'),
(9, 'Rajkot'),
(10, 'Nagpur');

INSERT INTO `gallery` (`galleryID`, `galleryFile`, `galleryTag`, `gallerycategory`) VALUES
(1, 'grid-1.jpg', 'Macway', 'KARAOKE'),
(2, 'grid-2.jpg', 'Macway', 'JOY RIDE'),
(3, 'grid-3.jpg', 'Macway', 'KARAOKE'),
(4, 'grid-4.jpg', 'Macway', 'JOY RIDE'),
(5, 'grid-5.jpg', 'Macway', 'JOY RIDE'),
(6, 'grid-6.jpg', 'Macway', 'JOY RIDE'),
(7, 'grid-7.jpg', 'Macway', 'JOY RIDE'),
(8, 'grid-8.jpg', 'Macway', 'JOY RIDE'),
(9, 'grid-9.jpg', 'Macway', 'GO KARTING'),
(10, 'grid-10.jpg', 'Macway', 'GO KARTING'),
(11, 'grid-12.jpg', 'Macway', 'GO KARTING');

INSERT INTO `gallerycategory` (`categoryID`, `category`) VALUES
(2, 'KARAOKE'),
(3, 'JOY RIDE'),
(4, 'VIRTUAL REALITY'),
(5, 'CRICKET ZONE'),
(6, 'GO KARTING'),
(7, 'OTHERS');

INSERT INTO `members` (`memberID`, `username`, `password`, `email`) VALUES
(1, 'mayur', '$2y$10$ymXZeopiiRmzFg9vAtVlbOqmtQZtaAaEbe9QFloNw6fWl/F1t.XGK', 'kolimayurs@gmail.com'),
(2, 'macway', '$2y$10$TqivyGpPQv3bSvqinXs1/e3p0LOxjKgI2Heh4V9OcHYcXRz3.gUqa', 'info@macwayintl.com');

==================================================================
ALTER TABLE `newsandmedia`
  ADD PRIMARY KEY (`post_url`);
--
-- Dumping data for table `members`

----ALTER TABLE newsandmedia AUTO_INCREMENT = 1
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`) VALUES
(1, 'demo', '$2y$10$7Qz31SombCIfVN1VFflAN.SS0CtxpAjmg5WNJKQqaOhpzO.dD1/dy', 'demo@demo.com'),
(2, 'kolimayurs1', '$2y$10$.WF3v5odu5bsr6QOTYH2V.6PWAvdmdmkiOo.Q8OcYM4nv3QcBuJO2', 'kolimayurs@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
