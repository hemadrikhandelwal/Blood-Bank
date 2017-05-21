<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Minor Project </title>
	<!--linking css file-->
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	<meta name="description" content=" The Project">
</head>
<style>
body{
	background-image:url('3.jpg');
   
}
.modal-dialog{
-webkit-box-shadow: 10px 10px 5px 0px rgba(29,33,41,1);
-moz-box-shadow: 10px 10px 5px 0px rgba(29,33,41,1);
box-shadow: 10px 10px 5px 0px rgba(29,33,41,1);
}
.modal-content{
	color:black;
	background-color: #7a8046;
}

</style>
<body>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="text-center">Register</h1>
			</div>

			<form class="col-md-12 center-block modal-body" action="donor.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<img src="2.jpg" class="img-thumbnail" alt="Responsive image" >
    				<input type="file" name="donor_image">
				</div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="Name" name="donor_name" required>
				</div>
				<div class="form-group">
					<textarea name="don_add" class="form-control input-lg" cols="10" rows="05" placeholder="Address"></textarea>
				</div>
				<div class="form-group">
					<select class="form-control input-lg">
					  <option>GENDER</option>
					  <option> MALE </option>
					  <option> FEMALE</option>					  
					</select>
				</div>
				<div class="form-group">
					<input type="int" class="form-control input-lg" placeholder="Age" name="donor_age" required>
				</div>
				<div class="form-group">
					<select class="form-control input-lg">
					  <option>Blood Group</option>
					  <option>O+</option>
					  <option>A+</option>
					  <option>B+</option>
					  <option>AB+</option>
					  <option>O-</option>
					  <option>A-</option>
					  <option>B-</option>
					  <option>AB-</option>					  
					</select>
				</div>
				
				<div class="form-group">
					<input type="tel" class="form-control input-lg" placeholder="Contact Number" name="contact_detail" required>
				</div>
				<div class="form-group">
					<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
					    I aggree with all the terms and condition.And I will be available to donote my Blood whenever neccesary.
					  </label>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-block btn-lg btn-primary" value="Register" name="register" >
					<br />
				</div>
			</form>

			<div class="modal-footer">
				<div class="col-md-12">
					<button class="btn btn-default">Cancel</button>
				</div>
			</div>

		</div>
	</div>

<!--linking of js -->
	<script src="js/jquery.js"</script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/npm.js"</script>

</body>
</html>
<?php
if(isset($_POST['register'])){
	$r_image=$_FILES['r_image']['name'];
	$r_image_tmp=$_FILES['r_image']['tmp_name'];
	$r_name=$_POST['r_name'];
	$r_add=$_POST['r_add'];
	$r_gender=$_POST['r_gender'];
	$r_age=$_POST['r_age'];
	$r_bg=$_POST['r_bg'];
	$contact=$_POST['contact'];

	$insert_reg="insert into reg(r_image,r_name, r_add, r_gender,r_age,r_bg,contact)values('$r_image','$r_name','$r_add','$r_gender','$r_age','$r_bg','$contact')";
	$run_reg=mysqli_query($con,$insert_reg);
	move_uploaded_file($r_image_tmp,"register/reg/$r_image");


}

?>