<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="lERBd-6CydoQArgSWcEjNcPvLoCPMa_YJsAJGxw0sVQ" />
	<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
	<title>Doctor Gallery</title>

</head>
<style>
	body{
		background-color:#FADCD9;
		font-family: 'Ranchers', cursive;
        
	}
	img{
		height: 20%;
		width:40%;
		margin-top: 2%;
	}
	.top-right{
		 position: absolute;
         top: 15%;
 		 right: 33%;
 		 font-size: 22px;

	}
	.top-mid{
		 position: absolute;
         top: 55%;
 		 right: 36%;
 		 font-size: 22px;

	}
	.top-center{
		 position: absolute;
         top: 28%;
 		 right: 34%;
 		 font-size: 22px;
	}
		.bottom-mid{
		 position: absolute;
         bottom: 23%;
 		 right: 37%;
 		 font-size: 22px;
	}
	.left-mid{
		 position: absolute;
         top: 29%;
 		 left: 36%;
 		 font-size: 22px;
	}
	.left-center{
		 position: absolute;
         top: 37%;
 		 left: 35%;
 		 font-size: 22px;
	}
	 * {
  box-sizing: border-box;
}


button {
  font-size: 1em;
  background: #fadcd9;
  color: #fff;
  border: 0.15rem solid #3498db;
  padding: 0.85em 0.75em;
  margin-top: 0%;
  
  margin-left: 85%;
  position: relative;
  
  overflow: hidden;
}
button:hover {
  color: #3498db;
}
button::after {
  content: "";
  background: #3498db;
  position: absolute;
  z-index: -1;
  padding: 0.85em 0.75em;
  display: block;
}

button[class^="grow"]::after {
  transition: all 0.3s ease;
}
button[class^="grow"]:hover::after {
  transition: all 0.3s ease-out;
}

button.grow_skew_forward::after {
  left: -20%;
  right: -20%;
  top: 0;
  bottom: 0;
  transform: skewX(-45deg) scale(0, 1);
}
button.grow_skew_forward:hover::after {
  transform: skewX(-45deg) scale(1, 1);
}

   @media only screen and (max-width:600px) {
  /* For mobile phones: */

  img {
    margin-top:-90%;
    margin-left:2%;
    height:500%;
    width: 179%;
  }
  .top-right{
	margin-right:-95%;
	margin-top:96%;
  }
  .top-mid{
    margin-right:-85%;
    margin-top:120%;
  }
  .top-center{
    margin-left:690px;
    margin-top:190px;
  }
  .left-mid{
      margin-top:200px;
  }
  .bottom-mid{
      margin-left:610px;
      margin-top:630px;
  }
  .grow_skew_forward{
    margin-bottom:100vh;
  }
  
   }
  
</style>
<body>
	 <a href="admin_login.php">
		<button class="grow_skew_forward" style="color:black;">Admin Login&rarr;</button>
        </a>
	<center>
   

		<div class="container">
	<img src="images/bodyimg2.png">
		<div class="top-right" value="head" name="head">
		<a href="degree.php?specialists=Head" style="color: #000; text-decoration:none;">Head</a>
		</div>
		<div class="top-mid" value="hand" name="hand">
		<a href="degree.php?specialists=Hand"  style="color: #000;text-decoration:none;">Hand</a>
		</div>
		<div class="top-center" value="ear" name="ear">
		<a href="degree.php?specialists=Ear" style="color: #000;text-decoration:none;">Ear</a>
		</div>
		<div class="bottom-mid" value="leg" name="leg">
		<a href="degree.php?specialists=Leg"  style="color: #000;text-decoration:none;">Leg</a>
		</div>
		<div class="left-mid" value="eyes" name="eyes">
		<a href="degree.php?specialists=Eyes"  style="color: #000;text-decoration:none;">Eyes</a>
		</div>
		<div class="left-center" value="teeth" name="teeth">
		<a href="degree.php?specialists=Teeth"  style="color: #000;text-decoration:none;">Teeth</a>
		</div>
</div>
		

		
	</center>
	

</body>
</html>
