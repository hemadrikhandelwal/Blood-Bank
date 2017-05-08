<?php
include("db.php");

if(isset($_GET['ed'])){

	$get_id=$_GET['ed'];
	$get_pro="select * from bb where bb_id='$get_id'";
	$run_pro=mysqli_query($con,$get_pro); 
	$row_pro=mysqli_fetch_array($run_pro);
		$bb_id=$row_pro['bb_id'];
		$bb_name=$row_pro['bb_name'];
		$bb_address=$row_pro['bb_address'];
		$bb_bamt=$row_pro['bb_bamt'];
		$bb_contact_us=$row_pro['bb_contact_us'];
	
}
?>



<html>
	<head>
		<title>Update bank </title>
	</head>
<body bgcolor="#F08080">
	<form action="" method="post" enctype="multipart/form-data">
		<table align="center" width="750" border="2" bgcolor="#50A5C3">
			<tr align="center">
				<td colspan="7"><h2>Update Bank Information</h2></td>
			</tr>
			<tr>
				<td align="right"><b>Blood Bank Name</b></td>
				<td><input type="text" name="bb_name"  value="<?php echo $bb_name;?>" size="30" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Blood Bank Address</b></td>
				<td><textarea name="bb_address" cols="30" rows="10"><?php echo $bb_address;?> </textarea></td>
			</tr>
			<tr>
				<td align="right"><b>Blood Amount (in ml.)</b></td>
				<td><input type="text" name="bb_bamt" value="<?php echo $bb_bamt;?>"/></td>
			</tr>
			<tr>
				<td align="right"><b>Conatct detail</b></td>
				<td><input type="text" name="bb_contact_us" value="<?php echo $bb_contact_us;?>"/></td>
			</tr>
			<tr align="center">
				<td colspan="4"><input type="submit" name="update_bank" value="Update Now"/></td>
			</tr>
		</table>


	</form>
</body>
</html>
<?php
 if(isset($_POST['update_bank'])){

 		$update_id=$bb_id;
    	//getting text data from the field
    	$bb_name=$_POST['bb_name'];
    	$bb_address=$_POST['bb_address'];
    	$bb_bamt=$_POST['bb_bamt'];
    	$bb_contact_us=$_POST['bb_contact_us'];

    $update_query="UPDATE bb SET  bb_name='$bb_name',bb_address='$bb_address',bb_bamt='$bb_bamt',bb_contact_us='$bb_contact_us' where bb_id='$update_id' ";
	$update_data=mysqli_query($con,$update_query);
	if($update_data){
		echo"<script>alert('Data has been updated!')</script>";
		echo"<script>window.open('bb.php','_self')</script>";

	}
}
?>