<?php

$mailTo = "brent.garner@fglsports.com";
$mailFrom = 'no-reply@thecompleteexperience.ca';
$subject = "[Leadership Conference] - New Question Submitted";

$message .= "Question: \n";
$message .= $_POST['q'] . "\n";



//$usermailTo = $_POST['email'];
/*
$usermailFrom = 'Leadership Conference Registration <no-reply@thecompleteexperience.ca>';
$usersubject = "Thank you for your registration!";

$usermessage .= "Thank for your registration. This is the information we received from you: \n\n";
$usermessage .= "Name: " . $_POST['fname'] . " " . $_POST['lname']. "\n";
$usermessage .= "Email " . $_POST['email'] . "\n";
$usermessage .= "Phone: " . $_POST['phone'] . "\n";
$usermessage .= "Office: " . $_POST['office'] . "\n";
$usermessage .= "\n";
$usermessage .= "Diet Needs: " . $_POST['diet'] . "\n";
$usermessage .= "Roommate Requested: " . $_POST['roommate'] . "\n";
$usermessage .= "\n";
$usermessage .= "Travel Arrangments: " . $_POST['flight'] . "\n";
$usermessage .= "Bus: " . $_POST['bus'] . "\n";
$usermessage .= "\n";
$usermessage .= "Activity: " . $_POST['activity'] . "\n";
$usermessage .= "\n";
$usermessage .= "Shirt Size: " . $_POST['shirt'] . "\n";
$usermessage .= "Jacket Size: " . $_POST['jacket'] . "\n";
$usermessage .= "Shoe Size: " . $_POST['shoes'] . "\n";
*/

//connect to DB
$host = "internal-db.s51258.gridserver.com";
$user = "db51258";
$pass = "3nc50Xj8y5";
$db = "db51258_leadership";

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");
mysql_select_db($db) or die ("Unable to select database!"); 

//insert registration
$q = "INSERT INTO questions (question) VALUES('".$_POST['q']."')";
	
mysql_query($q) or die ("Error in query: $q. ".mysql_error());

//send email
//mail("Samantha.Ng@fglsports.com", $subject, $message, "From: ".$mailFrom);
mail("Leah.Carter@fglsports.com", $subject, $message, "From: ".$mailFrom);
//mail("Shelagh.Ell@fglsports.com", $subject, $message, "From: ".$mailFrom);
mail($mailTo, $subject, $message, "From: ".$mailFrom);

//mail($_POST['email'], $usersubject, $usermessage, "From: ".$usermailFrom);

 
?>