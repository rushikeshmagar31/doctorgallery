<!DOCTYPE html>
<html>
<head>
	<title>Delete Admin</title>
</head>
<style>
body{
	background:url(dustbin2.jpg)no-repeat;
	background-color: #000;
	color: white;	
}
.submit{
	margin-top: 15%;
	height: 50px;
	width: 100px;
	border-radius: 12px;

  transition-duration: 0.4s;
  background-color: white;
 text-align: center;
}
.submit:hover {
  background-color:rgba(0,0,0,0.4); /* Green */
  color: white;
</style>
<body>
	<center>
		<form method="post">
		<div class="text">
		<h1><?php echo $name;?>!!!! You are about to delete your account</h1>
		<h3>Remember you once deleted cannot login through that account again</h3>
		<h4>SORRY TO SEE YOU GO :(</h4>
		</div>
		<button class="submit" name="submit">DELETE:(</button>
		</form>
	</center>
</body>
</html>