<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- js linkd-->
    <title>Home Page..</title>
</head>

<body>
<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
				<!--navtab-->
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a href="#Singup" class="nav-link  active fw-bold" data-bs-toggle="tab">Singup</a>
					</li>
					<li class="nav-item">
						<a href="#login" class="nav-link active fw-bold" data-bs-toggle="tab">Login</a>
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
							<input type="email" name="email" placeholder="Email" class="mb-3 form-control">
							<input type="password" name="password" placeholder="Password" class="mb-3 form-control">
							<button type="submit" class="btn btn-primary w-100">Login</button>
						</form>
					</div>
				</div>
			</div>
			<div class="d-flex justify-content-center align-items-center  col-md-6 mt-5 ">
				<img src="../assets/css/pexels.jpg" class="w-100 h-100" alt="">
			</div>

		</div>
	</div>

</body>

</html>