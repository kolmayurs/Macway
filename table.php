<?php
$servername = "localhost";
$username = "macwayroot";
$password = "3-8KqTnNOH#6";
$dbname = "i1829453_wp7";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS  `members` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if (mysqli_query($conn, $sql)) {
    echo "Table members created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS  `background` (
  `backgroundID` int(11) NOT NULL AUTO_INCREMENT,
  `backgroundFile` varchar(255) DEFAULT NULL,
  `backgroungTag` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`backgroundID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if (mysqli_query($conn, $sql)) {
    echo "Table background created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS  `gallerycategory` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if (mysqli_query($conn, $sql)) {
    echo "Table gallerycategory created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS  `gallery` (
  `galleryID` int(11) NOT NULL AUTO_INCREMENT,
  `galleryFile` varchar(255) DEFAULT NULL,
  `galleryTag` varchar(255) DEFAULT NULL,
  `gallerycategory` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`galleryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if (mysqli_query($conn, $sql)) {
    echo "Table gallery created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS  `findusatregion` (
  `regionID` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`regionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if (mysqli_query($conn, $sql)) {
    echo "Table findusatregion created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS  `findusat` (
  `findusatID` int(11) NOT NULL AUTO_INCREMENT,
  `findusatFile` varchar(255) DEFAULT NULL,
  `findusatPlaceName` varchar(255) DEFAULT NULL,
  `findusatPlaceAddress` varchar(255) DEFAULT NULL,
  `findusatRegion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`findusatID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if (mysqli_query($conn, $sql)) {
    echo "Table findusat created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS  `newsandmedia` (
  `postID` varchar(255) DEFAULT NULL,
  `post_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_text` Text,
  `post_url` varchar(255) DEFAULT NULL,
  `post_picture` varchar(255) DEFAULT NULL,
  `post_fb` varchar(255) DEFAULT 'NO',
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if (mysqli_query($conn, $sql)) {
    echo "Table newsandmedia created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS  `testimonial` (
  `testimonialID` int(11) NOT NULL AUTO_INCREMENT,
  `testimonialFile` varchar(255) DEFAULT NULL,
  `testimonialName` varchar(255) DEFAULT NULL,
  `testimonialTitle` varchar(255) DEFAULT NULL,
  `testimonialDescription` varchar(255) DEFAULT NULL,
  `testimonialRating` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`testimonialID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if (mysqli_query($conn, $sql)) {
    echo "Table testimonial created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS  `bookaride` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `boption` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `fromdate` varchar(255) DEFAULT NULL,
  `todate` varchar(255) DEFAULT NULL,
  `submitted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if (mysqli_query($conn, $sql)) {
    echo "Table bookaride created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS  `enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `submitted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

if (mysqli_query($conn, $sql)) {
    echo "Table enquiry created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}



mysqli_close($conn);
?>