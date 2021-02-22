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
	
	background-size: cover;

  background-repeat: no-repeat;

  position: absolute;

}
.login{
	margin: -3%;
	height: 600px;
	width: 350px;

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
	@media only screen and (max-width:650px){
  /* For mobile phones: */
  
  .bg{
      width:100%;
      height:100%;
      padding-top:1.1%;
      padding-left:1%;
      padding-right:1%;
      top:0.01%;
      left:-1%;
      bottom:-0.5%;
  }
}
</style>

<body>
	<div class="bg">
	<center>
		<form method="POST">
	<div class="login">
	<p><h1><br>Register Here!!!</h1></p>

	<b>Name:</b>
	<input type="text" name="name" placeholder="Your name here!"style="color: #fff;" required >	
	<br>
	<br>
	<br>
	
	<b>Email:</b>
	<input type="email" name="email" placeholder="Your Email here!"style="color: #fff;" required >
	<br>
	<br>
	<br>

	<b>Password:</b>
	<input type="password" name="password" placeholder="Your Password here!"style="color: #fff;" required >
	<br>
	<br>
	<br>
	<b>Address:</b>
	<input type="text" name="address" placeholder="Your Address here!"style="color: #fff;" required >
	<br>
	<br>
	<br>
	<b>Phone:</b>
	<input type="text" name="phone" placeholder="Your Phone number here!"style="color: #fff;" required >
	<br>
	<br>
	<br>

	<button class="button" name="submit">REGISTER</button> 
	<br>
<br>
<a href="login_client.php">Already have a account?<br>Login!!</a>
	</div>
	</form>
	</center>
</div>
</body>
</html>