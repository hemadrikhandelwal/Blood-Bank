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
		padding:0px;
		margin-top: 90px;
		background:url(1.jpg);
	
	}
	li {
    -webkit-border-radius:25px; -moz-border-radius:25px; border-radius:25px;
}
	.menu ul{
		list-style:none;
		margin-top:5%;
	}
	.menu ul li{
		padding: 15px;
		position:relative;
		width:200px;
		background-color: #34495E;
		border-top:1px solid #BDC3C7;
	}
	.menu ul li:hover{
		background-color:#3D0521;
		border-top:1px solid #000;
		padding-left:50px;
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
		margin-top: 5px;
		margin-bottom:5px;

	}
	.menu ul li a:hover{
		color:#8C95D4;
		font-family: "times new roman", serif;

	}
	.menu ul li a{
		color: #fff;
		text-decoration: none;
	}
	.menu ul li.selected{
		background-color: #D8A7B4;
		color:#000;
		margin-left: 10px;
		margin-top:5px;
		margin-bottom: 5px;
		font-family: "Georgia",serif;
		font-style:italic;
		font-weight:bolder;
	}
	i {
		margin-right:15px;
	}
	table{
		margin-top:5px;
		background-color:#AED6F1;

	}
	th, td {
	    padding: 15px;
	    text-align:center;
	}
	th, td {
    	border-bottom: 1px solid #DAF7A6 ;
	}
	span{
		margin-right:3px;
	}
	th {
    background-color:#D68910 ;
    color: white;
	}
	tr:hover{
		color: #16A085 ;

	}
	
	</style>
<body>

	<div class="row">
		<div class="col-sm-2">
			<div class="menu">
				<ul>
					<li><a href="index.php"><i class="fa fa-lock"></i>Login</a></li>
					<li ><a href="ho.php"><i class="fa fa-hospital-o"></i>Hospitals</a></li>
					<li class="selected"><a href="blood.php"><i class="fa fa-heartbeat"></i>Blood Banks</a></li>
					<li><a href=""><i class="fa fa-tint"></i>Blood Group</a></li>
					<li><a href="don.php"><i class="fa fa-id-card"></i>Donation list</a></li>
				</ul>	
			</div>
		</div>	
	<div class="col-sm-2">
	</div>
	<div class="col-sm-6">
		<table class="table table-resopnsive table-hover">
			<caption><h3>BLOOD BANKS</h3></caption>
				<thead>
				    <tr>
				      <th>S.No</th>
				      <th>BLOOD BANK NAME</th>
				      <th>BLOOD BANK ADDRESS</th>
				      <th>BLOOD AMT (in ml)</th>
				      <th>CONTACT US</th>

				    </tr>
				</thead>
				<tbody>
					<?php
						$sno=1;
						$con=mysqli_connect("localhost","root","","minor");
						$query="select * from bb";
						$run=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($run))
						{
							$bb_name=$row['bb_name'];
							$bb_address=$row['bb_address'];
							$bb_bamt=$row['bb_bamt'];
							$bb_contact_us=$row['bb_contact_us'];
							echo"<tr><td>$sno</td><td>$bb_name</td><td>$bb_address</td><td>$bb_bamt</td><td>$bb_contact_us</td><td></tr>";
							$sno+=1;
				
						}
					 
				 
		 

				    ?>
 				</tbody>

		</table>	
	</div>

<!--linking of js -->
	<script src="js/jquery.js"</script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/npm.js"</script>

</body>
</html>