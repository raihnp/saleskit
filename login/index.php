<?php
require '../fungsi.php';
$t = date('M-Y');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<style>
	body{
	background-image: url(science.jpg);
	background-size: cover;
	background-position: center;
	height: 100vh;
	padding: 4rem;
	font-family: monospace;
	overflow: hidden;
}
.top{
	background-color: rgba(122, 245, 177,0.5);
	height: 75vh;
}
.top img{
	width: 200px;
	margin-top: 5%;
}
.top input{
	font-size: 24px;
}
 @media screen and (max-width: 767px) {
 	.top input{
	font-size: 16px;
}
.top img{
	width: 100px;
	margin-top: 10%;
}
 }
</style>

</head>
<body>
	<div class="main wow zoomIn">
		<div class="top">
			<center>
			<div class="header wow fadeInLeft" data-wow-delay="0.8s">
				<h1 class="logo">
					<img src="logo.png">
				</h1>
				<div class="login wow fadeInRight" data-wow-delay="0.9s">
					<form method="POST" action="../box/kirim_login.php">
                  <input type="text" name="user" placeholder="user" required autocomplete="off" style="margin-bottom: 10px;">
                  <input type="password" name="pass" placeholder="password" required autocomplete="off" style="margin-bottom: 10px;"><br>
                  <input type="submit" name="login" class="btn btn-outline-success btn-sm" value="Login" /> <a href="../index.php" class="btn btn-outline-success btn-sm">cancel</a>
                </form>
					<!-- <form>
						<input type="text" name="" placeholder="User"><br>
						<input type="password" name="" placeholder="Password"><br>
						<button type="submit">Login</button>
					</form> -->
				</div>
			</div>
				
			</center>
		</div>
	</div>
<script src="wow.min.js"></script>
  <script>
  new WOW().init();
  </script>
</body>
</html> 
