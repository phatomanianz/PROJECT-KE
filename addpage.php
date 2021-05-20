<?php
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['id'])) {  ?>
<!DOCTYPE html>
<html lang="en">
<head>
			<meta charset ="utf-8" />
			<meta name ="viewport" content="width-device-width, initial-scale=1.0" />
			<meta http-equiv="X-UA-Compatible" content="ie-edge" />
			<title>Admin Panel</title>
			<link rel="stylesheet" href="resources/css/global.css">
			<link rel="stylesheet" href="resources/css/style.css">
			<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	</head>
		<body>
 		 	<div class="row">
    			<div class="col">
					<nav class="sidebar" aria-label="sidebar-list">
						<div class ="navigation">
							<p>Navigation</p>
						</div>
					<ul>
						<li><a href="admin.php">
							<span class ="las la-home"> 
								<span>Dashboard</span></a>
						</li>
				<li>
					<details>
						<summary>
							<span class ="las la-tasks">
								Appointment</summary></span>
				
				<div class="details-content">
					<ul>
						<li><a href="addpage.php"><span class="las la-plus-circle">Add</li></a>
						<li><a href="all.php"><span class="las la-tasks">All</li></a>
						<li><span class="las la-tasks">Today</a></li>
						<li><span class="las la-tasks">Upcoming</a></li>
					</ul>
						</details>	
				<li>
					<details>
						<summary>
							<span class ="las la-user">
								Patients</summary></span>
					<ul>
						<li><span class="las la-plus-circle">Add</a></li>
						<li><span class="las la-users">Patients Lists</a></li>
						<li><span class="las la-tasks">Case Histories</a></li>
						<li><span class="las la-tasks">Documents</a></li>
					</ul>
						</details>
				<li>
					<details>
						<summary>
							<span class ="las la-users">
								Users</summary></span>
					<ul>
						<li><span class="las la-user">Admin</a></li>
						<li><span class="las la-user">Doctor</a></li>
						<li><span class="las la-user">Patients</a></li>
					</ul>
						</details>
							
				<li>
					<span class = "las la-bars">
						 Settings</span>
				</li>

				<ul class = "logout">
					<li>
						<a href="index.php"><span class ="las la-sign-out-alt">
							Logout</span></a>
					</li>
				</ul>
					</nav>
				</div>
			</div>
				<header class = "MuiPaper-root MuiAppBar-root MuiAppBar-positionFixed MuiAppBar-colorPrimary jss16 mui-fixed MuiPaper-elevation4"
			</div>
		</div>
	</div>		
</body>       
</html>
<?php }else{
	header("Location: admin.php");
} ?>
