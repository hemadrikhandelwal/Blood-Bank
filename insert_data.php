<DOCTYPE HTML>
<?php
include("db.php");
?>
<html>
	<head>
		<title>Inserting data</title>
	</head>
<body bgcolor="purple">
	<form action="insert_data.php" method="post" enctype="multipart/form-data">
		<table align="center" width="750" border="2" bgcolor="#F8C471 ">
			<tr align="center">
				<td colspan="7"><h2>Inserting Data</h2></td>
			</tr>
			<tr>
				<td align="right"><b>Hospital Name</b></td>
				<td><input type="text" name="hospital_name" size="30" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Hospital Address</b></td>
				<td><input type="text" name="hospital_address" size ="60"/></td>
			</tr>
			<tr>
				<td align="right"><b>Blood Bank</b></td>
				<td><input type="text" name="blood_bank"/></td>
			</tr>
			<tr>
				<td align="right"><b>Contact Us</b></td>
				<td><input type="text" name="contact_us"/></td>
			</tr>
			<tr align="center">
				<td colspan="4"><input type="submit" name="insert_data" value="Add Now"/></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
    if(isset($_POST['insert_data'])){

    	//getting text data from the field
    	$hospital_name=$_POST['hospital_name'];
    	$hospital_address=$_POST['hospital_address'];
    	$blood_bank=$_POST['blood_bank'];
    	$contact_us=$_POST['contact_us'];

    $insert_data="insert into hospital(hospital_name,hospital_address,blood_bank,contact_us) values('$hospital_name','$hospital_address','$blood_bank','$contact_us')";
	$insert_data=mysqli_query($con,$insert_data);
	if($insert_data){
		echo"<script>alert('Data has been inserted!')</script>";
		echo"<script>window.open('insert_data.php','_self')</script>";

	}
}
	


?>