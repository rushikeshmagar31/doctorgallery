
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
</head>
<style>
.bg{
	background: -webkit-linear-gradient(left, #050100, #757373);
	width:100%;
	height: 100%;
	margin-top: -0.6%;
	margin-left: -0.6%;
	
	

  position: absolute;

}
.login{
	margin: 5%;
	height: 500px;
	width: 300px;

	background-color:rgb(0,0,0,1); 
	border-radius: 4.5%;
}
h1{
	margin-top: 25%;
	letter-spacing: 3px;
	color: #fff;
}
 b{
	font-weight: bold;
	font-size :20px;
	color: #ffffff;
}
input{
		border:none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline: none;
		height: 40px;
		color: #fff;
		font-size: 16px;
	

}
.button{
	width: 100px;
	height: 25px;
	border-radius: 7px;
	text-shadow: #fff;

}
</style>

<body>
	<div class="bg" >
	<center>
		<form method="POST">
	<div class="login">
	<p><h1><br>Register Here!!!</h1></p>

	<b>Name:</b>
	<input type="text" name="name" placeholder="Your name here!"style="color: #fff;"required>	
	<br>
	<br>
	<br>
	<br>
	
	<b>Email:</b>
	<input type="email" name="email" placeholder="Your Email here!"style="color: #fff;"required>
	<br>
	<br>
	<br>

	<b>Password:</b>
	<input type="password" name="password" placeholder="Your Password here!"style="color: #fff;"required>
	<br>
	<br>
	<br>

	<button class="button" name="submit">RESGISTER</button> 
	<br>
<br>
<a href="admin_login.php">Already have a account?<br>Login!!</a>
	</div>
	</form>
	</center>
</div>
</body>
</html>