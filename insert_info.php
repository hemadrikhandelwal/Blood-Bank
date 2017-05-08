<DOCTYPE HTML>
<?php
include("db.php");
?>
<html>
	<head>
		<title>Inserting data</title>
	</head>
<body bgcolor="#F08080">
	<form action="insert_info.php" method="post" enctype="multipart/form-data">
		<table align="center" width="750" border="2" bgcolor="#50A5C3">
			<tr align="center">
				<td colspan="7"><h2>Inserting Information</h2></td>
			</tr>
			<tr>
				<td align="right"><b>Donator Name</b></td>
				<td><input type="text" name="don_name" size="30" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Donator Address</b></td>
				<td><textarea name="don_address" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
 				<td align="right"><b>Blood Bank Name</b></td>
				<td><input type="text" name="blood_bank_name"/></td>
			</tr>
			<tr>
				<td align="right"><b>Blood Bank Address</b></td>
				<td><textarea name="blood_bank_address" cols="30" rows="10"/></textarea></td>
			</tr>
			<tr>
				<td align="right"><b>Blood Amount (in ml.)</b></td>
				<td><input type="text" name="blood_amt"/></td>
			</tr>
			<!--<tr>
				<td align="right"><b>Blood Group</b></td>
				<td><input type="text" name="blood_grp"/></td>
			</tr>-->
			<tr>
				<td align="right"><b>Donator Mobile Number</b></td>
				<td><input type="text" name="contact_detail"/></td>
			</tr>
			<tr align="center">
				<td colspan="4"><input type="submit" name="insert_info" value="Add Now"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
    if(isset($_POST['insert_info'])){

    	//getting text data from the field
    	$don_name=$_POST['don_name'];
    	$don_address=$_POST['don_address'];
    	$blood_bank_name=$_POST['blood_bank_name'];
    	$blood_bank_address=$_POST['blood_bank_address'];
    	$blood_amt=$_POST['blood_amt'];
    	$contact_detail=$_POST['contact_detail'];

    $insert_info="insert into donation(don_name,don_address,blood_bank_name,blood_bank_address,blood_amt,contact_detail) values('$don_name','$don_address','$blood_bank_name','$blood_bank_address','$blood_amt','$contact_detail')";
    
	$insert_query=mysqli_query($con,$insert_info);

	if($insert_query){
		echo"<script>alert('Data has been inserted!')</script>";
		echo"<script>window.open('donation.php','_self')</script>";

	}
	else{
		//echo"<script>alert($insert_info)</script>";
		echo"<script>alert('error!')</script>";
	}
}

?>