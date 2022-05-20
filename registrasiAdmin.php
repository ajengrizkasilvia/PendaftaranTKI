<!doctype html>
<html lang="en">
	<head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<a href="index.php" style="color: #fff">Back to Landing Page</a>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">PT. HENDRARTA ARGARAYA</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Register Admin</h3>
						<form action="prosesregistrasi.php" method="post">
							<div class="form-group">
								<input type="text" class="form-control" name="nama" placeholder="Enter name" id="nama">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="username" placeholder="Enter username" id="username">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Enter password" id="password">
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="myFunction()"></span>
								<script>
									function myFunction() {
										var x = document.getElementById("password");
										if (x.type === "password") {
											x.type = "text";
										} else {
											x.type = "password";
										}
									}
								</script>
							</div>
							<div class="form-group">
                                <td>
                                    <select class="form-control" name="role" id="role">
                                        <option>--pilih role--</option>
                                        <option value='1'>Admin</option>
                                        <option value='2'>TKI</option>
                                    </select>   
                                </td>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Register Account</button>
							</div>
							
						</form>
						<hr>
							<div class="text-center">
								<a class="small" href="##">Forgot Password?</a>
							</div>
							<div class="text-center">
								<a class="small" href="login.php">Already have an account? Login!</a>
							</div>
		      		</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  	<script src="js/popper.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/main.js"></script>

	</body>
</html>

