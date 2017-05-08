<DOCTYPE HTML>
<?php
include("db.php");
?>
<html>
	<head>
		<title>Inserting data</title>
	</head>
<body bgcolor="#F08080">
	<form action="insert_bank.php" method="post" enctype="multipart/form-data">
		<table align="center" width="750" border="2" bgcolor="#50A5C3">
			<tr align="center">
				<td colspan="7"><h2>Inserting Information</h2></td>
			</tr>
			<tr>
				<td align="right"><b>Blood Bank Name</b></td>
				<td><input type="text" name="bb_name" size="30" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Blood Bank Address</b></td>
				<td><textarea name="bb_address" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td align="right"><b>Blood Amount (in ml.)</b></td>
				<td><input type="text" name="bb_bamt"/></td>
			</tr>
			<tr>
				<td align="right"><b>Conatct detail</b></td>
				<td><input type="text" name="bb_contact_us"/></td>
			</tr>
			<tr align="center">
				<td colspan="4"><input type="submit" name="insert_bank" value="Add Now"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	if(isset($_POST['insert_bank'])){
		$bb_name=$_POST['bb_name'];
		$bb_address=$_POST['bb_address'];
		$bb_bamt=$_POST['bb_bamt'];
		$bb_contact_us=$_POST['bb_contact_us'];

	$insert_bank="insert into bb(bb_name, bb_address,bb_bamt,bb_contact_us) values('$bb_name','$bb_address','$bb_bamt','$bb_contact_us')";
	$insert_query=mysqli_query($con,$insert_bank);

	if($insert_query){
		echo"<script>alert('Data has been inserted!')</script>";
		
		echo"<script>window.open('bb.php','_self')</script>";
	}
	else{
		echo"<script>alert('error!')<script>";
	}
	}
?>