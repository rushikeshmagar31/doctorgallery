<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
	<title>Specialists</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
body{
	background: url(images/doctorcard.jpg);
	background-image: cover;
	font-family: 'Playfair Display', serif;



}
	.image{
		 z-index: 0;
	width: 100%;
	display: flex;
	justify-content: space-around;
	flex-wrap: wrap;
	box-shadow: rgb(0,0,0);
	}
	.w3-card-4:hover{
	 transform: scale(0.9, 0.9);
	
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.8), 
    -5px -5px 30px 15px rgba(0,0,0,0.8);
}
.heading{
	letter-spacing: 12px;
	font-size: 30px;
	color: #fff;
}

a{
	text-decoration: none;
}
 

</style>
<body>
	<center>
		<div class="heading">
			<p><h1><?php echo $deg; ?></h1></p>
		<p><h1><?php echo $spcl ; ?> Specialists<span style="color:#000;">for you..</span></h1></p>
		</div>
	</center>

<div class="image">
<?php 

$cnt=1;
while ($row=mysqli_fetch_assoc($qr)) {


		 	$id=$row['id'];
			$dbname=$row['name'];
			$dbemail=$row['email'];
			$dbprofile_pic= 'admin_img/profile/'.$row['profile_pic'];
			$dbhospital_add=$row['hospital_add'];
			$dbhos_phone=$row['hos_phone'];
			$dbid_proof=$row['id_proof'];
			$dbprice_range=$row['price_range'];
			$dbfield=$row['field'];
			$dbdegree=$row['degree'];
		if($dbname==null || $dbname=="")
{

}else{
	$cnt=0;
}
?>
<a href="doctor_single.php?id=<?php echo ''.$id.''; ?>"> 
 <div class="w3-card-4" style="width:30%; margin-top: 2%;font-family: 'Playfair Display', serif; font-size: 15.5px;font-weight: 25px;">
    <header class="w3-container w3-light-grey">
      <h3><?php echo $dbname; ?></h3>
       </header>
    <div class="w3-container">
       <img src="<?php echo $dbprofile_pic; ?>" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:100px; height: 100px; margin-top:12px;">
      <b><p>Address of Hospital/Clinic :<br>
 <?php echo $dbhospital_add; ?>
      	<br><br>
     	Phone number(Hospital/Clinic) :<br>
     	<?php echo $dbhos_phone ?>
     	<br><br>
     	Degree:
     	<?php echo $dbdegree ?>
     	<br>
     </p></b>
    </div>
    <a href="doctor_single.php?id=<?php echo ''.$id.''; ?>">
    <button class="w3-button w3-block w3-dark-grey font-family: 'Playfair Display', serif;">View Profile</button>
</a>
  </div>
</a>

<?php 

}
if($cnt==1){
	
	echo "<h1><span style=color:red;>No</span> Doctor's found!!!</h1>";}


?>

  <!-- end of image div -->
</div>

</body>
</html>