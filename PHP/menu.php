<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
</head>

<body>

<div>
<form action="menu.php" method="post">
<br>slno &nbsp;&nbsp;
<input type="text" name="slno"><br>name &nbsp;&nbsp;
<input type="text" name="name"><br>price &nbsp;
<input type="text" name="price"><br>

<input type="submit" value="add"/>

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



$sql="INSERT INTO `orders` (`id`, `product_name`, `product_price`) VALUES ('$slno', '$name', '$price')";
  if ($conn->query($sql) === TRUE) {
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


$conn->close();
}
 
  
?> 






</body>
</html>
