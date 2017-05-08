<?php
include("db.php");

if(isset($_GET['edi'])){

	$get_id=$_GET['edi'];
	$get_pro="select * from donation where don_id='$get_id'";
	$run_pro=mysqli_query($con,$get_pro); 
	$row_pro=mysqli_fetch_array($run_pro);
		$don_id=$row_pro['don_id'];
		$don_name=$row_pro['don_name'];
		$don_address=$row_pro['don_address'];
		$blood_bank_name=$row_pro['blood_bank_name'];
		$blood_bank_address=$row_pro['blood_bank_address'];
		$blood_amt=$row_pro['blood_amt'];
		$contact_detail=$row_pro['contact_detail'];
	
}
?>
<html>
	<head>
		<title>Update data</title>
	</head>
<body bgcolor="#F08080">
	<form action="" method="post" enctype="multipart/form-data">
		<table align="center" width="750" border="2" bgcolor="#50A5C3">
			<tr align="center">
				<td colspan="7"><h2>Updating Information</h2></td>
			</tr>
			<tr>
				<td align="right"><b>Donator Name</b></td>
				<td><input type="text" name="don_name" size="30"  value="<?php echo $don_name;?>" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Donator Address</b></td>
				<td><textarea name="don_address" cols="30" rows="10"><?php echo $don_address;?></textarea></td>
			</tr>
			<tr>
 				<td align="right"><b>Blood Bank Name</b></td>
				<td><input type="text" name="blood_bank_name" value="<?php echo $blood_bank_name;?>"/></td>
			</tr>
			<tr>
				<td align="right"><b>Blood Bank Address</b></td>
				<td><textarea name="blood_bank_address" cols="30" rows="10"/><?php echo $blood_bank_address;?></textarea></td>
			</tr>
			<tr>
				<td align="right"><b>Blood Amount (in ml.)</b></td>
				<td><input type="text" name="blood_amt" value="<?php echo $blood_amt;?>"/></td>
			</tr>
			<!--<tr>
				<td align="right"><b>Blood Group</b></td>
				<td><input type="text" name="blood_grp"/></td>
			</tr>-->
			<tr>
				<td align="right"><b>Donator Mobile Number</b></td>
				<td><input type="text" name="contact_detail" value="<?php echo $contact_detail;?>"/></td>
			</tr>
			<tr align="center">
				<td colspan="4"><input type="submit" name="update_info" value="Update Now"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
    if(isset($_POST['update_info'])){

    	$update_id=$don_id;
    	//getting text data from the field
    	$don_name=$_POST['don_name'];
    	$don_address=$_POST['don_address'];
    	$blood_bank_name=$_POST['blood_bank_name'];
    	$blood_bank_address=$_POST['blood_bank_address'];
    	$blood_amt=$_POST['blood_amt'];
    	$contact_detail=$_POST['contact_detail'];

     $update_query="UPDATE donation SET  don_name='$don_name',don_address='$don_address',blood_bank_name='$blood_bank_name',blood_bank_address='$blood_bank_address',blood_amt='$blood_amt',contact_detail='$contact_detail' where don_id='$update_id' ";
	$update=mysqli_query($con,$update_query);

	if($update){
		echo"<script>alert('Data has been updated!')</script>";
		echo"<script>window.open('donation.php','_self')</script>";

	}
	else{
		//echo"<script>alert($insert_info)</script>";
		echo"<script>alert('error!')</script>";
	}
}

?>