
<html>
	<head>
	
		<title>Hotel Website | Services</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<style>
	.button {
    padding: 15px 25px;
    font-size: 24px;
    cursor: pointer;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
  }
  
  .button:hover {background-color: #3e8e41}
  
  .button:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }
		</style>
		  <script>
function add()
{
    window.open("add.php");
}
function del()
{
    window.open("delete.php");
}
function update()
{
    window.open("update.php");
}
function select()
{
    window.open("select.php");
}
        </script>
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
			<button class="button"onclick="add()">add</button><br>
    <button class="button"onclick="del()">delete</button><br>
    <button class="button"onclick="update()">update</button><br>
    <button class="button"onclick="select()">select</button>


             
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
