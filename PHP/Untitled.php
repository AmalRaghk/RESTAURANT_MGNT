<?php
$servername = "localhost";
$username = "root";
$dbname = "mysql";


// Create connection
$conn = new mysqli($servername, $username,"", $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['uname'])){
    
  $uname=$_POST['uname'];
  $password=$_POST['psw'];
  
  $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
  
  $result = $conn->query($sql);
  
  if(mysql_num_rows($result)==1){
      echo " You Have Successfully Logged in";
      exit();
  }
  else{
      echo " You Have Entered Incorrect Password";
      exit();

$conn->close();

?>