
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<style>
body{
	background: url(profile.jpg)no-repeat;
	background-size: cover;

}
.data{
	height: 300px;
	width: 300px;
	background-color:rgb(0,0,0,0.3); 
}	
table {
 
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid ;
  text-align: left;
  padding: 8px;
 


}
tr:nth-child(odd) {

  background-color: black;
  color: white;

}

tr:nth-child(even) {

  background-color: white;

}
th{
	color: blue;
}
h2{
	letter-spacing: 12px;
	font-size: 25px;
	color: white;
}
</style>
<body>
	<center>
	
	
<h2>Booked Appointment<span style="color: red;">'s</span></h2>

<table>
  <tr>
  	
    <th>Client Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Time</th>
    <th>Date</th>
</tr>
    <!--while loop for data inclusion-->
<?php 
$select2="SELECT * from `booked appointment` where doctor_email='".$email."'";
$qr2=mysqli_query($conn,$select2);
while ($row2=mysqli_fetch_assoc($qr2)) {
		$bookemail=$row2['useremail'];
		$bookname=$row2['username'];
		$booktime=$row2['time'];
		$bookdate=$row2['date'];

?>
<?php 
$select3="SELECT * from `user_login` where email='".$bookemail."'";
$qr3=mysqli_query($conn,$select3);
while ($row3=mysqli_fetch_assoc($qr3)) {
		//$clienemail=$row3['email'];
		$clientphone=$row3['phone'];

?>

 <tr>
 	<td>
 	<!--client name --><?php echo $bookname;?>
 	</td>
 	<td>
 	<!--client email --><?php echo $bookemail;?>
 	</td>
 	<td>
 	<!--client phone --><?php echo $clientphone;?> 
 	</td>
 	<td>
 	<!--client phone --><?php echo $booktime;?> 
 	</td>
 	<td>
 	<!--client phone --><?php echo $bookdate;?> 
 	</td>
</tr>
<?php 
}
?>
	<?php
	} 
	?>
	<!--end of while-->
</table>
	</center>
</body>
</html>