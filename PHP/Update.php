
<html>
	<head>
	
		<title>Hotel Website | Services</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<style>
	 h1{
		text-align:center;
		font-family:Arial Black;
	}
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
							<li><a href="menumanage.html">Back</a></li>
						
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
			<h1>update</h1>
<form action="update.php" method="post">
<br>
<input type="text" placeholder="slno" name="slno"><br>
<input type="text" placeholder="name" name="name"><br>
<input type="text" placeholder="price" name="price"><br>

<input type="submit" value="update"/>

</form>
</div>

<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
$slno=$_POST['slno'];
$name=$_POST['name'];
$price=$_POST['price'];
$servername = "localhost";
$username = "root";
$dbname = "mysql";
//$password = "nopassword";

// Create connection
$conn = new mysqli($servername, $username,"",$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql="UPDATE `orders` SET `id`='$slno',`product_name`='$name',`product_price`='$price' WHERE id=$slno";
  if ($conn->query($sql) === TRUE) {
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


$conn->close();
}
   
?> 


             
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
