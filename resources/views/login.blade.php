<!doctype html>
<html lang="en">
  <head>
  	<title>Login Aplikasi Pengujian</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link rel="stylesheet" href="/themelogin/css/style.css">

	@toastr_css
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Aplikasi Pengujian</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(/themeadmin/logo.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
					<form action="/login" class="signin-form" method="post">
						@csrf
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" required name="username">
			      			<label class="form-control-placeholder" for="username">Username</label>
			      		</div>
						<div class="form-group">
							<input id="password-field" type="password" class="form-control"  name="password" required>
							<label class="form-control-placeholder" for="password">Password</label>
							<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
						</div>
		          </form>
		          {{-- <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p> --}}
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="/themelogin/js/jquery.min.js"></script>
	<script src="/themelogin/js/popper.js"></script>
	<script src="/themelogin/js/bootstrap.min.js"></script>
	<script src="/themelogin/js/main.js"></script>
	@toastr_js
	@toastr_render
	</body>
</html>
