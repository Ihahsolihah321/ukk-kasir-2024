<?php

require '../koneksi.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="cek_login.php" method ="post">
			<h1>Sign in</h1>
			<input type="text" placeholder="Username" name="username" />
			<input type="password" placeholder="Password" name="password" />
			<a href="#">Forgot your password?</a>
			<button type="submit">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello!</h1>
				<p>Silahkan Login Terlebih Dahulu  </p>
				
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="">ihah solihah</a>
		
	</p>
</footer>
        <script src="style.js"></script>
</body>
</html>