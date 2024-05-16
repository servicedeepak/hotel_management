<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- start Css links-->
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
	<link rel="stylesheet" href="assets/css/index.css">
	<!-- end Css links-->
	<!-- js linkd-->
	<script src="assets/js/sweetalert.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!-- <script src="assets/js/sweetalert2@11.js"></script> -->
	<!-- js linkd-->
	<title>Home Page..</title>
</head>

<body>

	<nav class="navbar navbar-expand-md fixed-top navbar-light">
		<div class="container-fluid">
			<img src="assets/css/pngwing.com (1).png" width="40px" alt="" class="rounded-circle">
			<a href="#" class=" mx-4 navbar-brand">
				Hotel Management System
			</a>
			<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myMenu">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse collapse" id="myMenu">
				<ul class="navbar-nav w-100 justify-content-end">
					<li class="nav-item mx-5 fw-bold text-white">Home</li>
					<li class="nav-item mx-5 fw-bold text-white">About</li>
					<li class="nav-item mx-5 fw-bold text-white">collage</li>
					<li class="nav-item mx-5 fw-bold text-white">Contect</li>

				</ul>
			</div>
		</div>
	</nav>

	<br><br>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
				<!--navtab-->
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a href="#Singup" class="nav-link" data-bs-toggle="tab">Singup</a>
					</li>
					<li class="nav-item">
						<a href="#login" class="nav-link active" data-bs-toggle="tab">Login</a>
					</li>
				</ul>
				<br>
				<!--nav panes-->
				<div class="tab-content">
					<div class="tab-pane  container mt-3" id="Singup">
						<p class="h2">Registraion</p>
						<form class="reg-form">
							<input type="text" name="fullname" placeholder="Fullname" class="mb-3 form-control">
							<input type="text" name="hotelname" placeholder="Hotel Name" class="mb-3 form-control">
							<input type="number" name="hotelroom" placeholder="No of Hotel Rooms " class="mb-3 form-control">
							<input type="number" name="phone_no" placeholder="Phone No" class="mb-3 form-control">
							<input type="email" name="email" placeholder="Email" class="mb-3 form-control">
							<input type="pass" name="password" placeholder="Password" class="mb-3 form-control">
							<button type="submit" class="btn btn-primary w-100">Registration</button>
						</form>
					</div>
					<div class="tab-pane active container mt-3" id="login">
						<p class="h2">Login</p>
						<form class="login-form">
							<input type="email" placeholder="Email" class="mb-3 form-control">
							<input type="password" placeholder="Password" class="mb-3 form-control">
							<button type="submit" class="btn btn-primary w-100">Login</button>
						</form>
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-center align-items-center  col-md-6 mt-5 ">
				<img src="assets/css/pexels.jpg" class="w-100 h-100" alt="">
			</div>

		</div>
	</div>
	<!-- start js -->
	<script src="assets/js/index.js"></script>
	<!-- end js -->

</body>

</html>