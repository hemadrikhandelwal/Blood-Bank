<?php
	 include ('db.php');
	 if (isset($_GET['del'])){
	 	$id = $_GET['del'];
	 	$sql="DELETE from hospital where hospital_id='$id'";
	 	$run_delete=mysqli_query($con,$sql);
	 	if($run_delete){
	 		echo "<script>alert('Information has been deleted!')</script>";
	 		echo "<script>window.open('hospital.php','_self')</script>";
	 		
	 	}
	 }

?>