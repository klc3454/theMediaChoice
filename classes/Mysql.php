<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); 
require_once 'includes/constants.php';
//require_once dirname(__FILE__) . '/includes/constants.php';

class Mysql {
	private $conn;

	function __construct() {
		$this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die('There was a problem connecting to the database.');
	}

	function verify_Username_and_Pass($un, $pwd) {
		$query = "SELECT Email, FirstName FROM Users WHERE Email = ? AND Password = ? LIMIT 1";

		if($stmt = $this->conn->prepare($query)) {
			$stmt->bind_param('ss', $un, $pwd);
			$stmt->bind_result($userEmail, $userFName);
			$stmt->execute();

			if($stmt->fetch()) {
				$stmt->close();
				//die("Email2: " . $userEmail . ", First Name: " .  $userFName);
				return true;
			}
		}
	}
	
	function getProjectData($un) {
		$query = "SELECT ProjectName, ProjectContact, ProjectDate, ProjectProgress FROM Projects WHERE ProjectOwner = ? LIMIT 1";

		if($stmt = $this->conn->prepare($query)) {
			$stmt->bind_param('s', $un);
			$stmt->bind_result($pName, $pContact, $pDate, $pProgress);
			$stmt->execute();

			if($stmt->fetch()) {
				$_SESSION['pName'] = $pName;
				$_SESSION['pContact'] = $pContact;
				$_SESSION['pDate'] = $pDate;
				$_SESSION['pProgress'] = $pProgress;
				//die("Test: " . $pName);
				$stmt->close();
				return true;
			} else {
				$_SESSION['pName'] = "None";
				$_SESSION['pContact'] = "None";
				$_SESSION['pDate'] = "None";
				$_SESSION['pProgress'] = "None";
			}
		}
	}
}