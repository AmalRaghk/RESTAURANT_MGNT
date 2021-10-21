<?php

if(isset($_POST['name'])) 
{
$slno=$_POST['serial'];

$servername = "localhost";
$username = "root";
$dbname = "mysql";
$link="inv_main.php";

$conn = new mysqli($servername, $username,"",$dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM inventory WHERE `slno`='$slno'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully<br><br>";
  echo "<a href='".$link."'>MAIN VIEW</a>";
} else {
  echo "Error deleting record: " . $conn->error;

$conn->close();
}}
?> 

<html>
	<head>
	
		<title>Hotel Website | Services</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<style>
	form
	{	
		text-align:center;
		font-family:Arial Black;
	}
	input[type=text] {
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
	input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
	}  
		</style>
	
	</head>
	<body>
		<!---start-Wrap--->
			<!---start-header--->
			<div class="header">
				<div class="wrap">
					<div class="header-top">
						<div class="logo">
							<a href="index.html"><img src="images/logo2.png" title="logo" /></a>
						</div>
						<div class="contact-info">
							<p class="phone">Call us : <a href="#">980XXXXXXX</a></p>
							<p class="gpa">Gpa : <a href="#">View map</a></p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="header-top-nav">
					<div class="wrap">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="inv_main.php">Back</a></li>
						
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			</div>
			<!---End-header--->
			<div class="clear"> </div>
			<!---start-content----->
			<div class="content">

			<div class="form">
			<form method="post"action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" placeholder="slno" name="serial"><br><br>
<input type="submit" name="name" >

</form>


             
				</div>
				<div class="clear"> </div>
				<div class="boxs">
				<div class="wrap">
				<div class="box">
					 
				</div>
				
				<div class="box">
					
				</div>
				<div class="clear"> </div>
			</div>
			<!---start-box---->
		</div>
		<!---start-copy-Right----->
		<div class="copy-tight">
			<p>&copy A CUBE INNOVATIONS 2020</p>
		</div>
		<!---End-copy-Right----->
			</div>
			<!---End-content----->
		</div>
		<!---End-Wrap--->
	</body>
</html>
