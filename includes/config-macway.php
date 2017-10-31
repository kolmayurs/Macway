<?php
	
//database credentials
define('DBHOST','localhost');
define('DBUSER','macwayroot');
define('DBPASS','3-8KqTnNOH#6');
define('DBNAME','i1829453_wp7');

$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//set timezone
date_default_timezone_set('Asia/Kolkata');
 ?>