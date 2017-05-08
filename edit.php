<?php
include("db.php");

if(isset($_GET['edit'])){

	$get_id=$_GET['edit'];
	$get_pro="select * from hospital where hospital_id='$get_id'";
	$run_pro=mysqli_query($con,$get_pro); 
	$row_pro=mysqli_fetch_array($run_pro);
		$hospital_id=$row_pro['hospital_id'];
		$hospital_name=$row_pro['hospital_name'];
		$hospital_address=$row_pro['hospital_address'];
		$blood_bank=$row_pro['blood_bank'];
		$contact_us=$row_pro['contact_us'];
	
}
?>

<html>
	<head>
		<title>Update data</title>
	</head>
<body bgcolor="purple">
	<form action="" method="post" enctype="multipart/form-data">
		<table align="center" width="750" border="2" bgcolor="#F8C471 ">
			<tr align="center">
				<td colspan="7"><h2>Update Data</h2></td>
			</tr>
			<tr>
				<td align="right"><b>Hospital Name</b></td>
				<td><input type="text" name="hospital_name"  value="<?php echo $hospital_name;?>" size="30"/></td>
			</tr>
			<tr>
				<td align="right"><b>Hospital Address</b></td>
				<td><input type="text" name="hospital_address"   value="<?php echo $hospital_address;?>"   size ="60"/></td>
			</tr>
			<tr>
				<td align="right"><b>Blood Bank</b></td>
				<td><input type="text" name="blood_bank"    value="<?php echo $blood_bank;?>" /></td>
			</tr>
			<tr>
				<td align="right"><b>Contact Us</b></td>
				<td><input type="text" name="contact_us"    value="<?php echo $contact_us;?>" /></td>
			</tr>
			<tr align="center">
				<td colspan="4"><input type="submit" name="update" value="Update Now"/></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
 if(isset($_POST['update'])){

 		$update_id=$hospital_id;
    	//getting text data from the field
    	$hospital_name=$_POST['hospital_name'];
    	$hospital_address=$_POST['hospital_address'];
    	$blood_bank=$_POST['blood_bank'];
    	$contact_us=$_POST['contact_us'];

    $update_query="UPDATE hospital SET  hospital_name='$hospital_name',hospital_address='$hospital_address',blood_bank='$blood_bank',contact_us='$contact_us' where hospital_id='$update_id' ";
	$update_data=mysqli_query($con,$update_query);
	if($update_data){
		echo"<script>alert('Data has been updated!')</script>";
		echo"<script>window.open('hospital.php','_self')</script>";

	}
}
	





?>