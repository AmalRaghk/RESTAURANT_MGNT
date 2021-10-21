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
	.form
	{	
		text-align:center;
		font-family:Arial Black;
	}
	input[type=password] {
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}


input[type=email] {
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

.btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
	} 			</style>
	
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
							<li><a href="services.php">Back</a></li>
						
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			</div>
			<!---End-header--->
			<div class="clear"> </div>
			<!---start-content----->
			<div class="content">
			<?php 

include 'configc.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: cashier.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM csi WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: cashier.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>
			<div class="form">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<br>
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			
			<br>
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			<br>
				<button name="submit" class="btn">Login</button>
			
			<p class="login-register-text">Don't have an account? <a href="registerc.php">Register Here</a>.</p>
		</form>
	</div>



             
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
