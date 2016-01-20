<?php

$mailFrom = 'no-reply@thecompleteexperience.ca';
$subject = "[Merchandising Conference 2014 Activity Selection] - " . $_POST['fname'] . " " . $_POST['lname'];
$message = "";
$message .= "Email " . $_POST['email'] . "\n";
$message .= "\n";
$message .= "Activities: " . $_POST['activity1'] . ", " . $_POST['activity2'] . "\n";

$usermailFrom = 'Merchandising Conference 2014 <no-reply@thecompleteexperience.ca>';
$usersubject = "Thank you for your Activity Selection!";
$usermessage = "";
$usermessage .= "Thank for your registration. This is the information we received from you: \n\n";
$usermessage .= "Email " . $_POST['email'] . "\n";
$usermessage .= "\n";
$usermessage .= "Activities: " . $_POST['activity1'] . ", " . $_POST['activity2'] . "\n";

//connect to DB
$host = "calmys1db01.fglsports.dmz";
$user = "merch";
$pass = "merch";
$db = "merch_conf";

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");
mysql_select_db($db) or die ("Unable to select database!"); 

//insert registration
$q = "INSERT INTO activities (email, activity1) VALUES(
	 '".$_POST['email']."', 
	'".$_POST['activity1']."'
	 )";
	
mysql_query($q) or die ("Error in query: $q. ".mysql_error());


//$mailTo = "brent.garner@fglsports.com";
/*
mail("brent.garner@fglsports.com", $subject, $message, "From: ".$mailFrom);
mail("Barbara.Maier@fglsports.com", $subject, $message, "From: ".$mailFrom);


mail($_POST['email'], $usersubject, $usermessage, "From: ".$usermailFrom);
*/

 
?>