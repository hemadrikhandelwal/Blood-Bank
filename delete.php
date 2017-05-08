<?php
	 include ('db.php');
	 if (isset($_GET['del'])){
	 	$id = $_GET['del'];
	 	$sql="DELETE from donation where don_id='$id'";
	 	$run_delete=mysqli_query($con,$sql);
	 	if($run_delete){
	 		echo "<script>alert('Information has been deleted!')</script>";
	 		echo "<script>window.open('donation.php','_self')</script>";
	 		
	 	}
	 }

?>
<!--if(isset($_GET['delete_info'])){
 	$delete_id=$_GET['delete_info'];
 	$delete_info="delete from donation where don_id='$don_id'";
 	$run_delete=mysqli_query($con,$delete_info);
 	if($run_delete){
 		echo"<script>alert('Information has been deleted !')</script>";
 		echo"<script>window.open('donation.php','_self')</script>";
 	}-->
