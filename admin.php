
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<title>Sign up</title>
</head>

<style>

	body{

		background: url(doctor.jpg);
        background-repeat: no-repeat;
		margin-top:5%;
		padding: 0px;
		
	    font-family: 'Oswald', sans-serif;
        position: relative;
		color: #000;
		font-weight: 0.5px;
		letter-spacing: 1px;
	}

	.box{
		margin-top:25%; 
		width:cover;
		position: relative;
		height: cover;
		background-color: #f6cfaf;
		opacity: 0.8;
		font-size: 25px;
		border-radius:0.5%;
		top:50%;
		left:50%;
		position: absolute;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		padding: 70px 30px;
	}

	h1{
		margin: 0;
		padding: 0 0 20px;
		text-align: center;
		font-size: 30px;
	}

	.box p{
		margin: 0;
		padding: 0;
		font-weight: bold;

	} 
	.box input{
		
		margin-bottom: 20px;
	}

	.input{
		border:none;
		border-bottom: 1px solid #000;
		background: transparent;
		outline: none;
		height: 40px;
		color: #000;
		font-size: 16px;
		width: 100%;
	}
	
	.link{
		color: #000;
		font-size: 18px;
		float: right;
	}
	.column {
  float: left;
  width: 40%;
  padding: 10px;
  /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.button{
	border-radius: 19%;
  transition-duration: 0.4s;
  background-color: white;

  height: 40px;
  width: 80px;
  margin-right: 30px;
  width: 25%;
  text-align: center;
  
  


}
.column select{
	border:none;
	height:25px;
	background-color: transparent;


}

.button:hover {
  background-color: grey; /* Green */
  color: white;
}
@media only screen and (max-width:500px){
  /* For mobile phones: */
  .box{
      margin-top:150%;
    width: 110%;

    }
    .body{
        width:110%;
        height:100%;
        
    }
    .column{
        width:100%;
    }
}
  

</style>
<body>
	
	<div class="box">
		<h1>Add Your Details!</h1>
		<form method="POST"enctype="multipart/form-data">
			<div class="row">
			<div class="column">	
                <p>Name</p>
				<input type="text" name="name" placeholder="Enter Name" class="input" required >
			</div>
			<div class="column">
                <p>Email</p>
				<input type="email" name="email" placeholder="Enter email" class="input" required>
			</div>
		    </div>
		    <div class="row">
		   	<div class="column">
                <p>Profile Picture</p>
				<input type="file" name="profilepicture" ><br>
			</div>
			<div class="column">
				<p>Hospital Address</p>
				<input type="text" name="adress" placeholder="Enter address" class="input" required>
			</div>
		    </div>
		    <div class="row">
		    	<div class="column">

		        <p>Hospital Phone Number</p>
				<input type="text" name="phonenumber" placeholder="Enter a phone number" class="input" required>
			</div>
			<div class="column">
				<p>Id Proof</p>
				<input type="file" name="idproof" >
			</div>
		</div>
                <div class="row">
		    	<div class="column">

            <p>Consultancy Fees</p>
				<input type="text" name="pricerange" placeholder= "Enter fees"class="input" required>
			</div>
			<div class="column">
				Choose your Field
				<select style="width: 150px;" name="field">
					<option value="Head">Head</option>
					<option value="Ear">Ear</option>
					<option value="Eyes">Eyes</option>
					<option value="Hand">Hand</option>
					<option value="Teeth">Teeth</option>
					<option value="Leg">Leg</option>

				</select>
			
			</div>
			<div class="column">
			 <p>Degree</p>
			
				<select style="width: 150px;" name="degree">
					<option value="MBBS">MBBS</option>
					<option value="PHD">PHD</option>
					<option value="HOMOPHETIC">HOMOPHETIC</option>
					

				</select>
			
			</div>
		</div><center>
			<button class="button" name="submit" type="submit" value="submit">
			Add Details!!
			</center>
			
		</form>	
	</div>	

</body>
</html>