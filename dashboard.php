<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); 
require_once 'classes/Membership.php';
$membership = new Membership();

$membership->confirm_Member();


?>

<!DOCTYPE html">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>The Media Choice - Dashboard</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <div id ="container">
    <p>
      You've reached the dashboard! Now we just need to pull data onto it.
    </p>
    <a href="login.php?status=loggedout">Log out</a>

  </div>
</body>
</html>