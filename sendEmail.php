<?php
//connect to DB
$host = "calmys1db01.fglsports.dmz";
$user = "merch";
$pass = "merch";
$db = "merch_conf";

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");
mysql_select_db($db) or die ("Unable to select database!");

//insert registration
$q = "INSERT INTO registrations (first, last, email, phone, diet, roommate, shirt, pant, jacket, shoes) VALUES(
	 '".$_POST['fname']."',
	'".$_POST['lname']."',
	'".$_POST['email']."',
	'".$_POST['phone']."',
	'".$_POST['diet']."',
	'".$_POST['roommate']."',
	'".$_POST['shirt']."',
	'".$_POST['pant']."',
	'".$_POST['jacket']."',
	 '".$_POST['shoes']."'
	 )";

mysql_query($q) or die ("Error in query: $q. ".mysql_error());


?>
