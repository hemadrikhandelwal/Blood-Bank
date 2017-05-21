<!DOCTYPE HTML>
<?php
	// This will make universal connection to database
	$con=mysqli_connect("localhost","root","","mlogin");
	session_start();
?>
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
	<style type="text/css">
	body{
		margin-top:90px;
		padding:0px;
		background-image: url("6.jpeg");
	}
	li {
    -webkit-border-radius:25px; -moz-border-radius:25px; border-radius:25px;
}

	.menu ul{
		list-style:none;
		margin:0;
	}
	.menu ul li {
		padding: 15px;
		position: relative;
		width:200px;
		color: #fff;
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
		font-family:"Andale Mono",monospace;
	}
	.menu ul li a{
		color: #fff;
		text-decoration:none;

	}
	.menu ul li.selected{
		background-color: #D8A7B4;
		color:#000;
		margin-left:15px;
		margin-top:5px;
		margin-bottom: 5px;
		font-weight:bold;
	}

	i{
		margin-right:15px;
	}
	.container{
		margin-bottom:50px;
		margin-top:0px;
	}
	.row{
		margin-top:10px;
	}
	.wrap-login{
		margin:0px;
		background-color:#F1E6E9;
		border:solid 1px #d0d0d0;
		-webkit-box-shadow: 20px 15px 14px 1px rgba(20,14,48,1);
		-moz-box-shadow: 20px 15px 14px 1px rgba(20,14,48,1);
		box-shadow: 20px 15px 14px 1px rgba(20,14,48,1);
		border-radius: 30px 30px 30px 30px;
		-moz-border-radius: 30px 30px 30px 30px;
		-webkit-border-radius: 30px 30px 30px 30px;
		border: 0px solid #000000;

}
	.btn-login{
		margin-left:auto;
		margin-right:auto;
		display:block;
		margin-bottom: 10px;
	}
	input[type=submit] {
    padding:5px 15px; 
    background:#008080;
    color:white;
    margin-left: 200px; 
    border:3px solid #5D6D7E;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius:12px; 
    text-transform:uppercase;
    text-align:center;
     box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="menu">
				<ul>
					<li ><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li class="selected"><a href="login.php"><i class="fa fa-lock"></i>Login</a></li>
					<li ><a href="hospital.php"><i class="fa fa-hospital-o"></i>Hospitals</a></li>
					<li ><a href="bb.php"><i class="fa fa-heartbeat"></i>Blood Banks</a></li>
					<li><a href="donor.php"><i class="fa fa-tint"></i>Donor List</a></li>
					<li><a href="donation.php"><i class="fa fa-id-card"></i>Donation list</a></li>
				</ul>	

				</ul>	
			</div>
		</div>

		<div class=" wrap-login col-md-6">
		<h2 style="text-align: center;margin-top:20px;">Admin Login</h2>
			<form method="post" action=""> 
			  <div class="form-group">
			    <label for="exampleInputEmail1">Username</label>
   					<input type="text" name="username" placeholder="Enter Username" required/>
			  </div>
			  <div class="form-group">
			   <label for="exampleInputEmail2">Password</label>
   					<input type="password" name="password" placeholder="Enter Password" required/>
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox"> Remember Me
			    </label>
			  </div>
			  <input type="submit" name="login" value="login" />

		
	</form>
			
	<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$q_login="select * from users where username='$username' AND password='$password'";
			//echo $q_login;
			$run_login=mysqli_query($con,$q_login);
			$count_login=mysqli_num_rows($run_login);
			if($count_login==0)
			{
				//here goes error
				echo "<script>alert('Wrong email or password.')</script>";
				exit(); //so that code of rest of page is not executed 
			}
			else
			{
				
					//this will store log in session very imp
					$_SESSION['username']=$username;
					//showing message of login
					echo "<script>alert('You logged in succesfully.')</script>";
					//reload any other page that you want to load
					echo "<script>window.open('hospital.php','_self')</script>";
			}
		}
	?>


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