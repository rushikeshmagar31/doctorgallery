<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
	<title>Book Appointment</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>	
	body{
	margin: 1;
	font-family: "Comic Sans MS", cursive, sans-serif;
}
.bgimg{
  background: url(single.jpg);
  background-color: #cccccc;
  margin-top: -2.9%;
  height:800px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.heading{
	letter-spacing: 12px;
	font-size: 30px;
	color: #fff;
	padding-top: 30px;
}
.box{
		height: 500px;
		width: 375px;
		margin-top:5%;
		background-color: #2c3036;
		opacity: 0.9;
		font-size: 18px;
		top:50%;
		left:50%;
		position: absolute;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		padding-left: 70px;
		padding: 90px;		
		padding-top: 10px;
		padding-bottom: 70px;
		border-radius: 0.5%;
	}
.column{
	font-size: 20px;
	padding: 20px;
	padding-left: 2px;
}
.button{
  margin: 0px;
  position: absolute;
	text-align: center;
	width: 59%;
  top: 85%;
  left: 20%;
  margin-top: 5%;
  margin-left: 0%;
  padding-left: 6%;
  padding-right: 6%;
}
.button{
	background-color:#649ab5;
	color: black;
	 color: black;
	transform: translate(-8px );
	transition-duration: 0.3s;
	cursor: pointer;
	
	border:2px;
	border-radius: 5px;
}
.button:hover{
	background-color: #4f5659;
	color: white;
}
.input{
		
		border:none;
		border-bottom: 1px solid #000;
		background: transparent;
		outline: none;
		height: 40px;
		color: #000;
		font-size: 16px;
		width: 120%;
		color: white;
	}
	@media only screen and (max-width:500px){
  /* For mobile phones: */
  .heading, .box, .button {
    width: 100%;
  }
}
</style>
<body>
	<div class="bgimg">

	<center>
		<div class="heading">
			<p><h1 style="color:black; margin-top: 2%;">Appointment Booking..</h1></p>
		</div>
	</center>
<div class="box" style="color: white;padding-left: 45px;">
	<form method="POST" enctype="multipart/form-data">
			
		<p> Doc Name:<?php echo $docname; ?></p>
					
		<p>Doc Email:<?php echo $docemail; ?></p>
		
		<p>Hospital Add:<?php echo $docaddress; ?></p>
		<hr>
	<p>Choose a date:</p>
	<input type="date" name="date" placeholder="mm/dd/yyyy">
	
	<div class="column" style="font-size:90%;">
				Choose Timing
				<select style="width: 80px; height:25px;background-color:#8894a6;border:none;" name="time">
					<option value="Morning 10am to 12pm">Morning 10am to 12pm</option>
					<option value="Evening 5pm to 7pm">Evening 5pm to 7pm</option>			
				</select>	
			
		</div>
		<hr>
		<center>
		<input style="font-size: 18px; text-align:center;" name="submit" type="submit" value="Make An Appointment" class="button">
		</center>
		</form>
	</div>
</div>
	</body>
</html>
