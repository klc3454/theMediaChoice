<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); 
session_start();
require_once 'classes/Membership.php';
$membership = new Membership();

//If the user clicks the "Log out" link on the index page
if(isset($_GET['status']) && $_GET['status'] == 'loggedout') {
  $membership->log_User_Out();
}

//Id the user enter a pass/username and click submit?
if($_POST && !empty($_POST['username']) && !empty($_POST['pwd'])) {
  $response = $membership->validate_User($_POST['username'], $_POST['pwd']);
}

?>


<!DOCTYPE html">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>The Media Choice - Login</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <div id ="login">
    <form method="post" action="">
      <h2>Login <small> enter your credentials</small></h2>
      <p>
        <label for="name">Email: </label>
        <input type = "text" name="username"/>
      </p>
      <p>
        <label for="pwd">Password: </label>
        <input type = "password" name="pwd"/>
      </p>
      <p>
        <input type = "submit" id="submit" value = "Login" name="submit" />
      </p>
    </form>
    <?php if(isset($response)) echo "<h4 class='alert'>" . $response . "</h4>"; ?>
  </div>
</body>
</html>