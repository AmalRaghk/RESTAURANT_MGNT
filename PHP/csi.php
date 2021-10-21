
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="managersignin.css">
    </head>
    
    <body>
    
    <div>
    <form action="csi.php" method="post">
    <br>Full Name &nbsp;
    <input type="text" name="fullname"><br><br>Username &nbsp;&nbsp;
    <input type="text" name="username"><br><br>Password &nbsp;&nbsp;
    <input type="text" name="password"><br><br>
    
    <input type="submit" value="Submit"/>
    
    </form>
    </div>
    
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
    $fullname=$_POST['fullname'];
    $usn=$_POST['username'];
    $psw=$_POST['password'];
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
    
    
    
    $sql="INSERT INTO `csi` (`Full Name`, `Username`, `Password`) VALUES ('$fullname', '$usn', '$psw')";
      if ($conn->query($sql) === TRUE) {
        
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
    
    $conn->close();
    }
     
      
    ?> 
    
    
    
    
    
    
    </body>
    </html>