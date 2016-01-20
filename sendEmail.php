<?php


$mailFrom = 'no-reply@thecompleteexperience.ca';
$subject = "[Merchandising Conference 2015 Registration] - " . $_POST['fname'] . " " . $_POST['lname'];
$message = "";
$message .= "Name: " . $_POST['fname'] . " " . $_POST['lname']. "\n";
$message .= "Email " . $_POST['email'] . "\n";
$message .= "Phone: " . $_POST['phone'] . "\n";
$message .= "Department: " . $_POST['office'] . "\n";
$message .= "\n";
$message .= "Diet Needs: " . $_POST['diet'] . "\n";
$message .= "Roommate Requested: " . $_POST['roommate'] . "\n";
$message .= "Emergency Name: " . $_POST['emergencyName'] . "\n";
$message .= "Emergency Number: " . $_POST['emergencyNumber'] . "\n";
/*
$message .= "\n";
$message .= "Travel Arrangments: " . $_POST['flight'] . "\n";
$message .= "Bus: " . $_POST['bus'] . "\n";
*/
/*
$message .= "\n";
$message .= "Activity: " . $_POST['activity'] . "\n";
*/
$message .= "\n";
$message .= "Shirt Size: " . $_POST['shirt'] . "\n";
$message .= "Jacket Size: " . $_POST['jacket'] . "\n";
$message .= "Shoe Size: " . $_POST['shoes'] . "\n";
//$message .= "Declined: " . $_POST['decline'] . "\n";


//$usermailTo = $_POST['email'];
$usermailFrom = 'Merchandising Conference 2015 Registration <no-reply@thecompleteexperience.ca>';
$usersubject = "Thank you for your registration!";
$usermessage = "";
$usermessage .= "Thank for your registration. This is the information we received from you: \n\n";
$usermessage .= "Name: " . $_POST['fname'] . " " . $_POST['lname']. "\n";
$usermessage .= "Email " . $_POST['email'] . "\n";
$usermessage .= "Phone: " . $_POST['phone'] . "\n";
$usermessage .= "Department: " . $_POST['office'] . "\n";
$usermessage .= "\n";
$usermessage .= "Diet Needs: " . $_POST['diet'] . "\n";
$usermessage .= "Roommate Requested: " . $_POST['roommate'] . "\n";
$usermessage .= "Emergency Name: " . $_POST['emergencyName'] . "\n";
$usermessage .= "Emergency Number: " . $_POST['emergencyNumber'] . "\n";
/*
$usermessage .= "\n";
$usermessage .= "Travel Arrangments: " . $_POST['flight'] . "\n";
$usermessage .= "Bus: " . $_POST['bus'] . "\n";
*/
/*
$usermessage .= "\n";
$usermessage .= "Activity: " . $_POST['activity'] . "\n";
*/
$usermessage .= "\n";
$usermessage .= "Shirt Size: " . $_POST['shirt'] . "\n";
$usermessage .= "Jacket Size: " . $_POST['jacket'] . "\n";
$usermessage .= "Shoe Size: " . $_POST['shoes'] . "\n";
//$usermessage .= "Declined: " . $_POST['decline'] . "\n";

//connect to DB
$host = "calmys1db01.fglsports.dmz";
$user = "merch";
$pass = "merch";
$db = "merch_conf";

$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");
mysql_select_db($db) or die ("Unable to select database!"); 

//insert registration
$q = "INSERT INTO registrations (first, last, pref_name, email, phone, dept, diet, roommate, activity, emergency_name, emergency_number, shirt, jacket, shoes) VALUES(
	 '".$_POST['fname']."', 
	'".$_POST['lname']."', 
	'".$_POST['prefname']."', 	
	'".$_POST['email']."', 
	'".$_POST['phone']."', 
	'".$_POST['office']."',
	'".$_POST['diet']."',
	'".$_POST['roommate']."',
	'".$_POST['activity']."',
	'".$_POST['emergencyName']."',
	'".$_POST['emergencyNumber']."',
	'".$_POST['shirt']."',
	'".$_POST['jacket']."',														 
	 '".$_POST['shoes']."'
	 )";
	
mysql_query($q) or die ("Error in query: $q. ".mysql_error());

//send email
/*
mail("Samantha.Ng@fglsports.com", $subject, $message, "From: ".$mailFrom);
mail("Leah.Carter@fglsports.com", $subject, $message, "From: ".$mailFrom);
mail("Shelagh.Ell@fglsports.com", $subject, $message, "From: ".$mailFrom);
*/
$mailTo = "brent.garner@fglsports.com";
mail($mailTo, $subject, $message, "From: ".$mailFrom);
//mail("Barbara.Maier@fglsports.com", $subject, $message, "From: ".$mailFrom);


mail($_POST['email'], $usersubject, $usermessage, "From: ".$usermailFrom);

 
?>