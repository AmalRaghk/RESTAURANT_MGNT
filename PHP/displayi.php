<html>
	<head>
	
		<title>Hotel Website | Services</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<style>
.hi{
  
}
#menu
{ width:100%;
color:black;
  text-align:center;   
  font-family: "Times New Roman", Times, serif;
font-size: 300%;
  border-collapse: collapse;

}

#menu th {
  border:solid black;
  text-align:center;  

    padding: 8px;
  padding-top: px;
  padding-bottom: px;
  

  
}
#menu td {
    
  font-size:xx-large; 
  border:dashed black;


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
				<div class="wrap">
<div class="hi">  
                <table >
<table id="menu">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['view'])){
$sql = "SELECT `slno`, `item name`, `item price` FROM inventory";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo"<tr>";
	echo"<thead>";
	echo"<th>"."slno"."</th>";
	echo"<th>"."name"."</th>";
   echo"<th>"."price"."</th>";
   echo"</thead>";
   echo"</tr>";
   echo"<tr>";
   echo"<tbody>";
	 while($row = $result->fetch_assoc()) {
	   $slno=$row['slno'];
	   $price=$row['item price'];
	   $name=$row['item name'];
	   
	   echo "<td>"."$slno"."</td>";
	   echo "<td>"."$name"."</td>";
	   echo "<td>$price</td>";
	   echo "</tbody>";
	   echo"</tr>";
	  
   }
} else {
  echo "0 results";
}}

$conn->close();
?>
</div>
			
	</body>
</html>

