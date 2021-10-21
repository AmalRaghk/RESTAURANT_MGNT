<!DOCTYPE HTML>
<html>
	<head>
		<title>Hotel Website | Home</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
            function call()
            {
                alert("thank you for yor feedback")
            }
		  </script>

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
	
	.btn {
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
					
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="header-top-nav">
					<div class="wrap">
						<ul>
							<li class="active">
							<li><a href="index.php">Home</a></li>


							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			</div>
			<!---End-header--->
			<div class="clear"> </div>
			<!--start-image-slider---->
			
			<div class="content">
				
			<div class="form">
			<h1>feedback</h1>
            <form action="" method="POST">
            <textarea name="feed" id="feed" cols="40" rows="20"></textarea><br>
            <button type="submit" class="btn" onclick =call()>submit</button>
            <button type="reset" class="btn">clear</button>
            </form>
		</div>
				
				<div class="clear"> </div>
				<div class="boxs">
				<div class="wrap">
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
    