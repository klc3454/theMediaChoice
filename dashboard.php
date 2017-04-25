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

	<title>Dashboard - TMC</title>


	<link href="./css/styleD.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<style>
		table {
    			font-family: arial, sans-serif;
    			border-collapse: collapse;
    			width: 100%;
			}

		td, th {
    			border: 1px solid #dddddd;
    			text-align: left;
    			padding: 8px;
		}

		tr:nth-child(even) {
    		background-color: #dddddd;
		}
.content {
			background-image: url(./images/wood.jpg);

			background-attachment: fixed;
		}
	</style>
	</style>
	
	<script type = "text/javascript">
		var pName = <?php echo json_encode($_SESSION['pName'], JSON_HEX_TAG); ?>;
		var pContact = <?php echo json_encode($_SESSION['pContact'], JSON_HEX_TAG); ?>;
		var pProgress= <?php echo json_encode($_SESSION['pProgress'], JSON_HEX_TAG); ?>;
		var pDate = <?php echo json_encode($_SESSION['pDate'], JSON_HEX_TAG); ?>;
		//console.log(pContact );
		//console.log(pName);
		//console.log(pProgress);
		//console.log(pDate );

	

    	
		function addTable() {
		          
			var myTableDiv = document.getElementById("tableArea");
		
			var table = document.createElement('TABLE');
			table.border = '1';
			
			var tableBody = document.createElement('TBODY');
			table.appendChild(tableBody);
		
		
			var tr1 = document.createElement('TR');
			tr1.style="font-weight:bold"
			tableBody.appendChild(tr1);
			var tr2 = document.createElement('TR');
			tableBody.appendChild(tr2);
			
			
			var td00 = document.createElement('TD');
			td00.width = '60';
			td00.appendChild(document.createTextNode("Project"));
			tr1.appendChild(td00);
			
			var td01 = document.createElement('TD');
			td01.width = '60';
			td01.appendChild(document.createTextNode("Contact"));
			tr1.appendChild(td01);
			
			var td02 = document.createElement('TD');
			td02.width = '60';
			td02.appendChild(document.createTextNode("Progress"));
			tr1.appendChild(td02);
			
			var td03 = document.createElement('TD');
			td03.width = '60';
			td03.appendChild(document.createTextNode("Date"));
			tr1.appendChild(td03);
		        
		        if(pName == "None") {
			        var td10 = document.createElement('TD');
			        td10.width = '60';
			        td10.appendChild(document.createTextNode("None"));
			        tr2.appendChild(td10);
			        
			        var td11 = document.createElement('TD');
			        td11.width = '60';
			        td11.appendChild(document.createTextNode("None"));
			        tr2.appendChild(td11);
			        
			        var td12 = document.createElement('TD');
			        td12.width = '60';
			        td12.appendChild(document.createTextNode("None"));
			        tr2.appendChild(td12);
			        
			        var td13 = document.createElement('TD');
			        td13.width = '60';
			        td13.appendChild(document.createTextNode("None"));
			        tr2.appendChild(td13);
		        } else {
		                var td10 = document.createElement('TD');
			        td10.width = '60';
			        td10.appendChild(document.createTextNode(pName));
			        tr2.appendChild(td10);
			        
			        var td11 = document.createElement('TD');
			        td11.width = '60';
			        td11.appendChild(document.createTextNode(pContact));
			        tr2.appendChild(td11);
			        
			        var td12 = document.createElement('TD');
			        td12.width = '60';
			        td12.appendChild(document.createTextNode(pProgress));
			        tr2.appendChild(td12);
			        
			        var td13 = document.createElement('TD');
			        td13.width = '60';
			        td13.appendChild(document.createTextNode(pDate));
			        tr2.appendChild(td13);
		        }
		            
		    	myTableDiv.appendChild(table);
		}
	</script>
</head>

<body onload="addTable()">
	<div id="header" >
<div class="row">
		<div class="col-md-4"> 
			<a href="http://www.interactivemediatour.com/"><img src="./images/tmc_web_01b.png" alt="The Media Choice"></a> 
		</div>
		<div class="col-md-7">
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
			
		</div>
		<div class="col-md-1"> 
			<?php
				echo $_SESSION['userName'];
			?> 
			<br>
			<a href="login.php?status=loggedout">Log out</a>
		</div>
	</div>
</div>
<div class="content">
<section>
<h3>Dashboard</h3>
	<div id ="container">
		 <h1 color='red'>

		</h1>
		
		<!--  <tr><td> <input type="textbox" name="type" value="<?= $_SESSION['userName'] ?>" ></td></tr>    -->
		<!--  <tr><td> <input type="hidden" name="type" value="<?php echo $_SESSION['userName']; ?>" ></td></tr>  -->
		
		
		
	<div id = "tableArea">
	
</div>
		
		<br>
		<br>
	</div>
</section>
</div>
<div id="footer">ATLANTA HEADQUARTERS The Media Choice, Inc 988 Fowler Creek Cove Suwanee, GA 30024 Phone: 678-231-1297</div>
</body>
</html>