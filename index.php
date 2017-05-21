<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale:1.0,user-scaleabe=0"/>
	<title> Minor Project </title>
	<!--linking css file-->
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	<meta name="description" content=" The Project">
	<style type="text/css">
	*{
		margin:0;
		padding: 0;
		box-sizing:border-box;
	}
	body
	{
		font-family: "Georgia", serif;
	}
	div#header
	{
		background-color:#2c3e50;
		width:100%;
		height:50px;
		margin:0 auto;
	}
	.logo{
		color: white;
		text-align: center;
		font-size: 1.5em;
		font-weight:300;

	}
	div#container{
		width:100%;
		margin:0 auto;

	}
	.sidebar{
		width:250px;
		height:100%;
		background-color: #171717;
		float: left;
	}
	.content{
		width:auto;
		margin-left:250px;
		height:100%;
		background-color: pink;
		padding:15px;
	}
	.content p{
		color: #424242;
		font-size: 0.73em;

	}
	ul#nav{

	}
	ul#nav li{
		list-style: none;
	}
	ul#nav li a{
		color: #ccc;
		display:block;
		padding: 10px;
		font-size: 0.9em;
		font-style:italic;
		font-weight:bolder;
		border-bottom: 1px solid black;
		-webkit-transition:0.2s;
		-moz-transition:0.2s;
		-o-transition:0.2s;
		transition: 0.2s;
	}
ul#nav li a:hover{
	background-color: #030303;
	color: #fff;
	padding-left: 30px;

}
ul#nav li a.selected{
	background-color: #030303;
	color: #fff;
	}
	div#box{
		margin-top: 15px;
	}
	div#box .box-top{
		color: #fff;
		text-shadow: 0px 1px #000;
		background-color: #2980b9;
		padding: 5px;
		padding-left: 15px;
		font-weight: 300;
	}
	div#box .box-panel{
		padding:15px;
		background-color: #fff;
		color: #333;
	}
</style>
<body>
	<div id="header">
		<div class="logo">
			WELCOME!
		</div>
	</div>
	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<li><a class="selected" href="index.php">Dashboard</a></li>
				<li><a href="login.php">Admin Login</a></li>
				<li><a href="reg.php">Registration Form </a></li>
				<li><a href="ho.php">Hospital</a></li>
				<li><a href="blood.php">Blood Bank</a></li>
				<li><a href="donor.php">Donor List </a></li>
				<li><a href="don.php">Donator List</a></li>
			</ul>
		</div>
		<div class="content">
			<h1>NEWS UPDATES</h1>
				<p>TOP STORIES</p>
					<div id="box">
							<div class="box-top">NEWS</div>
							<div class="box-panel">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, ry of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</div>
					</div>
					<div id="box">
							<div class="box-top">BLOOD DONATION CAMP</div>
							<div class="box-panel">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,.  The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</div>
					</div>
					<div id="box">
							<div class="box-top">REQUIRMENT OF BLOOD</div>
							<div class="box-panel">Contrary to popular belief, Lorem Ipsum is not simply . The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</div>
					</div>
					
		</div>
	</div>
</body>
</html>
