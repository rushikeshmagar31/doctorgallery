
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
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
	height: 400px;
	width: 300px;

	background-color:rgb(0,0,0,1); 
	border-radius: 4.5%;
}
h1{
	margin-top: 30%;
	letter-spacing: 3px;
	color: #fff;
}
 b{
	font-weight: bold;
	font-size: 25px;
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
@media only screen and (max-width:500px){
  /* For mobile phones: */
.login{
    width:90%;
}
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

}
    
  
</style>

<body>
	<div class="bg">
	<center>
		<form method="POST">

	<div class="login">
	<p><h1><br>Login!!!</h1></p>

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
	<button class="button" name="submit">LOGIN</button> 
	<br>
<br>
<a href="admin_register.php">Don't have a account?<br>Sign up!!</a>
	</div>
	</form>
	
	</center>
</div>
</body>
</html>