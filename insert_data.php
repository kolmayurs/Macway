<?php
$servername = "localhost";
$username = "macwayroot";
$password = "3-8KqTnNOH#6";
$dbname = "i1829453_wp7";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT IGNORE INTO `members` (`memberID`, `username`, `password`, `email`) VALUES
(1, 'mayur', '$2y$10$ymXZeopiiRmzFg9vAtVlbOqmtQZtaAaEbe9QFloNw6fWl/F1t.XGK', 'kolimayurs@gmail.com'),
(3, 'demo', '$2y$10$7Qz31SombCIfVN1VFflAN.SS0CtxpAjmg5WNJKQqaOhpzO.dD1/dy', 'demo@demo.com'),
(2, 'macway', '$2y$10$TqivyGpPQv3bSvqinXs1/e3p0LOxjKgI2Heh4V9OcHYcXRz3.gUqa', 'info@macwayintl.com');";

$sql .= "INSERT IGNORE INTO `background` (`backgroundID`, `backgroundFile`, `backgroungTag`) VALUES
(1, 'bg-header.jpg', 'It’s More than<br>what you see'),
(2, 'bg-header_1.jpg', 'Winning isn’t everything,<br />it’s the only thing!'),
(3, 'bg-header_2.jpg', 'Sway-A-Way,<br />like never before!');";

$sql .= "INSERT IGNORE INTO `gallery` (`galleryID`, `galleryFile`, `galleryTag`, `gallerycategory`) VALUES
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
(11, 'grid-12.jpg', 'Macway', 'GO KARTING');";

$sql .= "INSERT IGNORE INTO `gallerycategory` (`categoryID`, `category`) VALUES
(2, 'KARAOKE'),
(1, 'JOY RIDE'),
(3, 'VIRTUAL REALITY'),
(4, 'CRICKET ZONE'),
(5, 'GO KARTING');";

$sql .= "INSERT IGNORE INTO `findusat` (`findusatID`, `findusatFile`, `findusatPlaceName`, `findusatPlaceAddress`, `findusatRegion`) VALUES
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
(14, 'Wonderla_Begaluru.jpg', 'Wonderla', 'Mysore Road, Bengaluru', 'Bengaluru');";

$sql .= "INSERT IGNORE INTO `findusatregion` (`regionID`, `region`) VALUES
(1, 'Mumbai'),
(2, 'Bengaluru'),
(3, 'Goa'),
(4, 'Silvassa'),
(5, 'Hyderabad'),
(6, 'Indore'),
(7, 'Jaipur'),
(8, 'Chennai'),
(9, 'Rajkot'),
(10, 'Nagpur');";

$sql .= "INSERT IGNORE INTO `newsandmedia` (`postID`, `post_created`, `post_text`, `post_url`, `post_picture`, `post_fb`) VALUES
('1632051467026616_1893127377585689', '2017-03-14 17:24:43', 'Even RJ Shiv couldn''t resist the ''Shahi Sawari'' in Lucknow Mahotsav. Time to take the thrilling ride to happiness and fun yourself!\n#Macway  #SelfBalancingScooter #GetThrilled #PTV #RjShiv #Lucknow #LucknowMahotsav #RadioCity #AdventureFeels  #WhatAreYouWaitingFor', 'https://www.facebook.com/1632051467026616/videos/1893127377585689/', 'https://scontent.xx.fbcdn.net/v/t15.0-10/15389221_1893128124252281_8321476900954308608_n.jpg?oh=26f1ea04a1a0158c1a8f58645eb789ed&oe=596498B7', 'YES'),
('1632051467026616_1895027187395708', '2017-03-14 17:24:43', 'Add the fun by taking a ride to the other side and Get the Best of Both Worlds with Macway!\n#Macway #SelfBalancingScooter #GetThrilled #BestOfBothWorlds #Adventure #Imagica #Fun', 'https://www.facebook.com/permalink.php?story_fbid=1895027187395708&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/s720x720/15380746_1895027187395708_102989725136183060_n.jpg?oh=1633f14e6430519ddc73931c07de28fc&oe=596604C7', 'YES'),
('1632051467026616_1896599147238512', '2017-03-14 17:24:42', 'Tell us your pick.\n#ColoursOfHappiness', 'https://www.facebook.com/permalink.php?story_fbid=1896599147238512&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/p720x720/15541910_1896599147238512_1333957379384478203_n.jpg?oh=2c232792d6de168a9f5d875a14e253c8&oe=592D1227', 'YES'),
('1632051467026616_1898105417087885', '2017-03-14 17:24:42', 'O- What a feeling as you bat and hear your friends live commentary  about you!\nCricket Simulator @ Imagica\n#Macway #SelfBalancingScooter #GetThrilled #CricketSimulator #NetCricket #Imagica', 'https://www.facebook.com/permalink.php?story_fbid=1898105417087885&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/p720x720/15542466_1898105417087885_7314261490591340540_n.jpg?oh=b28ee0b8fbb990527ccf4af4c05a4643&oe=596D2AD2', 'YES'),
('1632051467026616_1899489870282773', '2017-03-14 17:24:42', 'Are you IN or OUT?\nExperience WALK THE PLANK in Imagica!\n#Macway #SelfBalancingScooter #GetThrilled #WalkThePlank #Imagica', 'https://www.facebook.com/permalink.php?story_fbid=1899489870282773&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/p720x720/15665552_1899489870282773_4001450823428006137_n.jpg?oh=10698c234958ab0cc631ade7db66cd51&oe=592BE923', 'YES'),
('1632051467026616_1900728066825620', '2017-03-14 17:24:42', 'Start your day with Macway and Ride the Freshness!\n#Macway #SelfBalancingScooter #GetThrilled #Morning #Freshness #WakeUpAndLive', 'https://www.facebook.com/permalink.php?story_fbid=1900728066825620&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/p720x720/15622473_1900728066825620_2198108895261681182_n.jpg?oh=6c896daa86539ac4abd15f383e3e6196&oe=592778D3', 'YES'),
('1632051467026616_1901419313423162', '2017-03-14 17:24:42', 'NAUGHTY or NICE we anyway have a gift for you! MERRY CHRISTMAS to all you guys!ðŸŽðŸŽ‰', 'https://www.facebook.com/permalink.php?story_fbid=1901419313423162&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-0/p480x480/15727294_1901419313423162_3269991618634977382_n.jpg?oh=403d7c0e77785c6fd16badb585acd569&oe=5961B5C3', 'YES'),
('1632051467026616_1902617153303378', '2017-03-14 17:24:42', 'Spreading smiles on a sunny morning! \n#Macway #SelfBalancingScooter #HappyStreet #BackRoad #HappyPeople #MacwayFun', 'https://www.facebook.com/permalink.php?story_fbid=1902617153303378&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/s720x720/15747381_1902617153303378_5315672833587629448_n.jpg?oh=d953ccfc5ecebff0615ae1579e792ab3&oe=595DD8BA', 'YES'),
('1632051467026616_1905584476339979', '2017-03-14 17:24:42', 'Whatever it is you stopped from doing last year, Do it in 2017.\nA very Happy New year to all you people out there. Have an Adventurous year ahead!', 'https://www.facebook.com/permalink.php?story_fbid=1905584476339979&id=1632051467026616', 'https://external.xx.fbcdn.net/safe_image.php?d=AQD0leu0tdIDRTK1&url=https%3A%2F%2Fmedia.giphy.com%2Fmedia%2Fl4JyZckNuJJPZJlRe%2Fgiphy.gif&_nc_hash=AQAfwiN_rwXk88Qm', 'YES'),
('1632051467026616_1906635366234890', '2017-03-14 17:24:42', 'What do you see?\n#SpotTheMacway', 'https://www.facebook.com/permalink.php?story_fbid=1906635366234890&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/s720x720/15823183_1906635366234890_1112039773297168492_n.jpg?oh=e29ec2e6ec5547cad19c5bc6f17341ce&oe=5928AC86', 'YES'),
('1632051467026616_1908070226091404', '2017-03-14 17:24:42', 'A very beautiful Lane.\n#2k16', 'https://www.facebook.com/permalink.php?story_fbid=1908070226091404&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/p720x720/15894528_1908070226091404_3765975703344666209_n.jpg?oh=1fc5b3446ca81c68d8c6fa9255f11bcf&oe=595FDE82', 'YES'),
('1632051467026616_1911497032415390', '2017-03-14 17:24:42', 'We wish you a very Happy and Prosperous Makar Sankranti!â˜', 'https://www.facebook.com/permalink.php?story_fbid=1911497032415390&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-0/p480x480/15965412_1911497032415390_8733803814626222573_n.jpg?oh=5e2c457c4f557838f147b7478a655a97&oe=5969C136', 'YES'),
('1632051467026616_1912377695660657', '2017-03-14 17:24:42', 'Is Monday hitting you hard? Hit it back with a Six and be the Jadhav of your gang!\n#Macway #CricketSimulator #Imagica #OneDaySeriesFever #IndVsEng #Jadhav #NoMoreMondayBlues', 'https://www.facebook.com/permalink.php?story_fbid=1912377695660657&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-0/p480x480/15965953_1912377695660657_203757724466345954_n.jpg?oh=4afe16cfa87a14e881e2db4f1220c6cf&oe=59712009', 'YES'),
('1632051467026616_1913669892198104', '2017-03-14 17:24:42', 'The thrill never ends with Macway!\n#WackyWednesday #GetSetGo #BringItOn', 'https://www.facebook.com/1632051467026616/videos/1913669892198104/', 'https://scontent.xx.fbcdn.net/v/t15.0-10/16120913_1913670688864691_2253279575947608064_n.jpg?oh=9ec119893a3f997cbf0f121e9dbba82e&oe=596874C6', 'YES'),
('1632051467026616_1914482572116836', '2017-03-14 17:24:42', 'Don''t just watch, have your own big match and set the ball on fire with Macway!!\nCricket Simulator @adlabsimagicaofficial !\n#Macway #CricketSimulator #Imagica #OneDaySeriesFever #IndVsEng #CricketFire', 'https://www.facebook.com/permalink.php?story_fbid=1914482572116836&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/p720x720/15977424_1914482572116836_4122324379655012375_n.jpg?oh=166256d5f49e8651a2fefcff93dce90f&oe=5964CBA9', 'YES'),
('1632051467026616_1915746995323727', '2017-03-14 17:24:42', 'Ride like you always wanted to.\n#Macway #SelfBalancingScooter #GoGreen #MacwayMove #Fun #Adventure #RideForLife', 'https://www.facebook.com/permalink.php?story_fbid=1915746995323727&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/p720x720/16195039_1915746995323727_1019729286070763886_n.jpg?oh=e073afce1c03af9d494985187b734464&oe=5973AFA5', 'YES'),
('1632051467026616_1917288258502934', '2017-03-14 17:24:42', 'Mogambo riding on his own beat in Adlabs Imagica!\n#Macway #SelfBalancingScooter #GetThrilled #Imagica #ImagicaParade #MogamboKhushHua', 'https://www.facebook.com/1632051467026616/videos/1917288258502934/', 'https://scontent.xx.fbcdn.net/v/t15.0-10/16147889_1917288418502918_7049657580469092352_n.jpg?oh=b7382b4771bbd0c2fad975f9014ac014&oe=5961BBFD', 'YES'),
('1632051467026616_1917840908447669', '2017-03-14 17:24:42', 'Happy 68th Republic Day to all!', 'https://www.facebook.com/permalink.php?story_fbid=1917840908447669&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/s720x720/16195780_1917840908447669_3438937356603480337_n.jpg?oh=4b571d129e148d0c3e7181e361b38951&oe=5963C839', 'YES'),
('1632051467026616_1919687641596329', '2017-03-14 17:24:42', 'See them walking in a straight line? That''s not really our style!!\n Move with Macway!\n#Macway #SelfBalancingScooter #GetThrilled  #PickYourColour #ColourfulMonday #Adventure #RidingLikeABoss', 'https://www.facebook.com/permalink.php?story_fbid=1919687641596329&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/p720x720/16426053_1919687641596329_2989145930180042182_n.jpg?oh=290f44c355677470d4a0dee86429a3d8&oe=592BAED3', 'YES'),
('1632051467026616_1920302221534871', '2017-03-14 17:24:42', 'Picture of this adorable little one on Macway mini, in case you''re having a hard time surviving tuesday!ðŸ‘¶âœ¨\n#Macway #GetThrilled #SelfBalancingScooter #Kids #LilThingsThatMatter #SurviveTheWeek #HappyMornings', 'https://www.facebook.com/permalink.php?story_fbid=1920302221534871&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/q81/s720x720/16387939_1920302221534871_7701064717342433819_n.jpg?oh=ab4fce62e079735afa875fc02b3626f4&oe=596753A4', 'YES'),
('1632051467026616_1922577491307344', '2017-03-14 17:24:42', 'Explore your limits with Us!!\n#Macway #SelfBalancingScooter #GetThrilled #ExtraOrdinaryRide #Unlimted #Adventure', 'https://www.facebook.com/permalink.php?story_fbid=1922577491307344&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/s720x720/16473242_1922577491307344_6948654490443913961_n.jpg?oh=706e395268fc50a1a401944263e358dc&oe=5960D001', 'YES'),
('1632051467026616_1925405337691226', '2017-03-14 17:24:41', 'Riding Royally at Rumi Darwaza in Lucknow!\nWhat''s your weekend plan?\n#Macway #SelfBalancingScooter #GetThrilled #Lucknow #RumiDarwaza #FridayFeels #Weekending', 'https://www.facebook.com/permalink.php?story_fbid=1925405337691226&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/p720x720/16508343_1925405337691226_7279781308115385936_n.jpg?oh=c1ed2180c9e6ea9ae9893401dd780d64&oe=595CCA0F', 'YES'),
('1632051467026616_1927580094140417', '2017-03-14 17:24:41', 'No clichÃ©d roses, for they get dried\nThis Valentine''s gift them Macway, because Love is in the Ride!\n#Macway #SelfBalancingScooter #GetThrilled #GetLoved #NoClichedValentine #MacwayLove', 'https://www.facebook.com/permalink.php?story_fbid=1927580094140417&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/p720x720/16708349_1927580094140417_5846680743902916529_n.jpg?oh=8d553d381a566632a159ba2401b0a43a&oe=596160D1', 'YES'),
('1632051467026616_1929403840624709', '2017-03-14 17:24:41', 'Here''s how you prep up for Weekend Fun! Get one for you now!\n#Macway #SelfBalancingScooter #GetThrilled #LetTheFunBegin #FunWay #Weekending #FridayFun', 'https://www.facebook.com/permalink.php?story_fbid=1929403840624709&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/p720x720/16730116_1929403840624709_2896792165348643186_n.jpg?oh=f9e21d30bbe5d9705088cdb3d97cc1c8&oe=5962AD29', 'YES'),
('1632051467026616_1931436627088097', '2017-03-14 17:24:41', 'A picture is worth a thousand words but memories are priceless!\nMake your memories with Macwayy!\n#Macway #SelfBalancingScooter #GetThrilled #Memories #FunTimes', 'https://www.facebook.com/permalink.php?story_fbid=1931436627088097&id=1632051467026616&substory_index=0', 'https://scontent.xx.fbcdn.net/v/t1.0-9/p720x720/16831066_1931436627088097_2103233976006297078_n.jpg?oh=268e4fb7758da1225f561bc9e49f0371&oe=5963A5EF', 'YES');";


$sql .= "INSERT IGNORE INTO `testimonial` (`testimonialID`, `testimonialFile`, `testimonialName`, `testimonialTitle`, `testimonialDescription`, `testimonialRating`) VALUES
(1, '1.jpg', 'Jai Bhattacharya', 'Nice machine ! Superb to ride and perfect', '', '5'),
(2, '2.jpg', 'Jash Mehta', 'A must try uber cool ride! Amazing experience riding it', '', '5'),
(3, '3.jpg', 'Abhijit Shah', 'Very efficient.... And so easy to ride ...great experience. See a huge future for it....', '', '4.5');";





if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>