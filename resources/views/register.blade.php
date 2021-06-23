<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aplikasi Aduan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/themelogin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/themelogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/themelogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/themelogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/themelogin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/themelogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/themelogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/themelogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/themelogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/themelogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="/themelogin/css/main.css">
<!--===============================================================================================-->

@toastr_css
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/themelogin/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="/register">
                    @csrf
					<span class="login101-form-title">
						Aplikasi Aduan <br>
                        PT. Pegadaian (Persero) Cabang Samarinda <br>
                        --------DAFTAR AKUN--------
					</span>
                    
                    <div class="p-t-31 p-b-9">
						<span class="txt1">
							Nama Lengkap
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Nama is required">
						<input class="input100" type="text" name="name">
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" class="login100-form-btn">
							Daftar
						</button>
					</div>
                    <div class="w-full text-center p-t-55">
						<span class="txt2">
							Sudah terdaftar? 
						</span>

						<a href="/login" class="txt2 bo1">
							Sign In Sekarang
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="/themelogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/themelogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/themelogin/vendor/bootstrap/js/popper.js"></script>
	<script src="/themelogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/themelogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/themelogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="/themelogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/themelogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/themelogin/js/main.js"></script>

</body>
@toastr_js
@toastr_render
</html>