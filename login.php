<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); 
session_start();
require_once 'classes/Membership.php';
$membership = new Membership();

//If the user clicks the "Log out" link on the dashboard page
if(isset($_GET['status']) && $_GET['status'] == 'loggedout') {
  $membership->log_User_Out();
}

//If the user enter a pass/username and click submit?
if($_POST && !empty($_POST['username']) && !empty($_POST['pwd'])) {
  $response = $membership->validate_User($_POST['username'], $_POST['pwd']);
}

?>


<!DOCTYPE html">
<html>
<head>
  

  <title>Login - TMC</title>

 <link href="./css/styleD.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style >
		.content {
			background-image: url(./images/rain.jpg);

			background-attachment: fixed;
		}
	</style>
</head>

<body>
		<div class = "row">
			<div id="header" >
				<div class="col-md-4"> <a href="http://www.interactivemediatour.com/"><img src="./images/tmc_web_01b.png" alt="The Media Choice"></a> 
				</div>
				<div class="col-md-8">
					<a href="http://interactivemediatour.com/index.html"><button class="dropbtn">Home</button></a>
	
					<div class="dropdown">
						<a href="http://interactivemediatour.com/aboutUs.html"><button class="dropbtn"> About Us</button></a>
						<div class="dropdown-content">
							<a href="http://interactivemediatour.com/jay-ariano.html">Jay Ariano</a>
							<a href="http://interactivemediatour.com/nancy-upchurch.html">Nancy Blair Upchurch</a>
						</div>
					</div>
	
					<div class="dropdown">
						<a href="http://interactivemediatour.com/services.html"><button class="dropbtn"> Services</button></a>
	
						<div class="dropdown-content">
							<a href="http://interactivemediatour.com/services.html#satellite">Satellite Media Tours</a>
							<a href="http://interactivemediatour.com/services.html#targeted-media">Targeted Satellite Media Tours</a>
							<a href="http://interactivemediatour.com/services.html#interactive-media">Interactive and Targeted Internet Media Tours</a>
							<a href="http://interactivemediatour.com/services.html#content-production">Content Production, Creation, and Distribution</a>
							<a href="http://interactivemediatour.com/services.html#radio-media">Radio Media Tours</a>
							<a href="http://interactivemediatour.com/services.html#audio-news">Audio News Releases</a>
							<a href="http://interactivemediatour.com/services.html#internet-video">Internet Video Release with Microsite</a>
							<a href="http://interactivemediatour.com/services.html#video-production">Video Productions</a>
							<a href="http://interactivemediatour.com/services.html#corporate-video">Corporate Videos</a>
							<a href="http://interactivemediatour.com/services.html#media-training">Media Training</a>
							<a href="http://interactivemediatour.com/services.html#web-videos">Web Videos</a>
						</div>
					</div>
					<a href="http://interactivemediatour.com/client-list.html"><button class="dropbtn">Client List</button></a>
					<a href="http://interactivemediatour.com/contact.html"><button class="dropbtn">Contact</button></a>
					<a href="http://interactivemediatour.com/dashboard.php"><button class="dropbtn">Dashboard</button></a>
					<a href="http://interactivemediatour.com/signup.html"><button class="dropbtn">Sign Up</button></a>
	
				</div>
			</div>
		</div>
<hr>
<div class="content">
<section>
		<br>
		<br>
		<div class = "row">
			<div class="col-md-5">
			</div>
			<div class="col-md-3">

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
			  </div>
			  <div class="col-md-4">
			</div>
  		</div>
</section>
</div>
<div id="footer">ATLANTA HEADQUARTERS The Media Choice, Inc 988 Fowler Creek Cove Suwanee, GA 30024 Phone: 678-231-1297</div>
</body>
</html>