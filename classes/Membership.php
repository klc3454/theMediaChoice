<?php

require 'Mysql.php';

class Membership {

	function validate_user($un, $pwd) {
		$mysql = new Mysql();
		$ensure_credentials = $mysql->verify_Username_and_Pass($un, md5($pwd));
		if($ensure_credentials) {
			$_SESSION['status'] = 'authorized';
			$_SESSION['userName'] = substr($un,0,strpos($un, "@"));
			$_SESSION['dbName'] = $un;
			$test_nothing = $mysql->getProjectData($un);
			header("location: dashboard.php");
		} else return "Please enter correct username and password.";
	}

	function log_User_Out() {
		if(isset($_SESSION['status'])) {
			unset($_SESSION['status']);

			if(isset($_COOKIE[session_name()])) {
				setcookie(session_name(), '', time() - 10000); 
				session_destroy();
			} 
		}
	}

	function confirm_Member() {
		session_start();
		if($_SESSION['status'] != 'authorized') {
			header("location: login.php");
		}
	}
}