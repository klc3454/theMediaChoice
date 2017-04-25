<?php

$fName = ($_POST["FirstName"]);
$lName = ($_POST["LastName"]);
$email = ($_POST["Email"]);
$msg = ($_POST["Message"]);

$hostname = "Localhost";
$username = "imt8tour_Admin";
$dbpassword = "Password!";
$dbname = "imt8tour_TheMediaChoice";
$insTable = "Messages";

$link = mysqli_connect($hostname, $username, $dbpassword, $dbname);
if($link === false) {
	die("ERROR: Could not connect. " . myswli_connect_error());
}

$sql = "INSERT INTO $insTable (FirstName, LastName, Email, Message) VALUES ('$fName', '$lName', '$email', '$msg')";

if(mysqli_query($link, $sql)) {
	header("location: contact.html");
	echo "Error";
}

mysqli_close($link);

?>