<?

$fName = ($_POST["FirstName"]);
$lName = ($_POST["LastName"]);
$email = ($_POST["Email"]);
$pwd = md5(($_POST["Password"]));

$hostname = "Localhost";
$username = "imt8tour_Admin";
$dbpassword = "Password!";
$dbname = "imt8tour_TheMediaChoice";
$usertable = "Users";

$link = mysqli_connect($hostname, $username, $dbpassword, $dbname);
if($link === false) {
	die("ERROR: Could not connect. " . myswli_connect_error());
}

$sql = "INSERT INTO $usertable (FirstName, LastName, Email, Password) VALUES ('$fName', '$lName', '$email', '$pwd')";

if(mysqli_query($link, $sql)) {
	header("location: login.php");
} else {
	echo "Error";
}

mysqli_close($link);

?>