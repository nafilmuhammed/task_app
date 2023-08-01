<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login </title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>task</h1><br>
				<h2>welcome<h2>
			
				<h3>welcome to our community !!"</h3>
				<p style="color:black">The journey of a thousand miles begins with a single step !!</p>
			</div>
		</div>
		<div class="right">
			<h5>Login </h5>
			<p>Don't have an account? <a href="http://localhost/php/task/sub/registeration.php.">Create Your Account</a> it takes less than a minute</p>
			<form action="./actions/loggin.php" method="Post" >
				<div class="inputs">
					<input type="text" placeholder="username" name="username">
					<input type="text" name="mobile"  placeholder="mobile number" required="required" maxlength="10" minlength="10">
					<input type="text" name="password" placeholder="password" required="required" >
					<input type="text" name="cpassword" placeholder="conform password" required="required" >
					<br>
				</div>
				<br><br>
			<button type="submit" >Click</button>
			</form>
		</div>
	</div>
</body>
</html>
