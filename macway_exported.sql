-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 03:01 PM
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
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `backgroundID` int(11) NOT NULL,
  `backgroundFile` varchar(255) DEFAULT NULL,
  `backgroungTag` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`backgroundID`, `backgroundFile`, `backgroungTag`) VALUES
(1, 'bg-header.jpg', 'Itâ€™s More than<br>what you see'),
(2, 'bg-header_1.jpg', 'Winning isnâ€™t everything,<br />itâ€™s the only thing!'),
(3, 'bg-header_2.jpg', 'Sway-A-Way,<br />like never before!');

-- --------------------------------------------------------

--
-- Table structure for table `findusat`
--

CREATE TABLE `findusat` (
  `findusatID` int(11) NOT NULL,
  `findusatFile` varchar(255) DEFAULT NULL,
  `findusatPlaceName` varchar(255) DEFAULT NULL,
  `findusatPlaceAddress` varchar(255) DEFAULT NULL,
  `findusatRegion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `findusat`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `findusatregion`
--

CREATE TABLE `findusatregion` (
  `regionID` int(11) NOT NULL,
  `region` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `findusatregion`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `galleryID` int(11) NOT NULL,
  `galleryFile` varchar(255) DEFAULT NULL,
  `galleryTag` varchar(255) DEFAULT NULL,
  `gallerycategory` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `gallerycategory`
--

CREATE TABLE `gallerycategory` (
  `categoryID` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallerycategory`
--

INSERT INTO `gallerycategory` (`categoryID`, `category`) VALUES
(2, 'KARAOKE'),
(3, 'JOY RIDE'),
(4, 'VIRTUAL REALITY'),
(5, 'CRICKET ZONE'),
(6, 'GO KARTING'),
(7, 'OTHERS');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`) VALUES
(1, 'mayur', '$2y$10$ymXZeopiiRmzFg9vAtVlbOqmtQZtaAaEbe9QFloNw6fWl/F1t.XGK', 'kolimayurs@gmail.com'),
(2, 'macway', '$2y$10$TqivyGpPQv3bSvqinXs1/e3p0LOxjKgI2Heh4V9OcHYcXRz3.gUqa', 'info@macwayintl.com');

-- --------------------------------------------------------

--
-- Table structure for table `newsandmedia`
--

CREATE TABLE `newsandmedia` (
  `postID` varchar(255) NOT NULL,
  `post_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_text` text,
  `post_url` varchar(255) DEFAULT NULL,
  `post_picture` varchar(255) DEFAULT NULL,
  `post_fb` varchar(255) DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonialID` int(11) NOT NULL,
  `testimonialFile` varchar(255) DEFAULT NULL,
  `testimonialName` varchar(255) DEFAULT NULL,
  `testimonialTitle` varchar(255) DEFAULT NULL,
  `testimonialDescription` varchar(255) DEFAULT NULL,
  `testimonialRating` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`backgroundID`);

--
-- Indexes for table `findusat`
--
ALTER TABLE `findusat`
  ADD PRIMARY KEY (`findusatID`);

--
-- Indexes for table `findusatregion`
--
ALTER TABLE `findusatregion`
  ADD PRIMARY KEY (`regionID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`galleryID`);

--
-- Indexes for table `gallerycategory`
--
ALTER TABLE `gallerycategory`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `newsandmedia`
--
ALTER TABLE `newsandmedia`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonialID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `backgroundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `findusat`
--
ALTER TABLE `findusat`
  MODIFY `findusatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `findusatregion`
--
ALTER TABLE `findusatregion`
  MODIFY `regionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `galleryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `gallerycategory`
--
ALTER TABLE `gallerycategory`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonialID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
