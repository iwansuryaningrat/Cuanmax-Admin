<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/img/icon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/atlantis.css">
</head>

<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Log In To Cuanmax Admin Dashboard</h3>
			<form action="/auth/login" method="post">
				<div class="login-form">
					<div class="form-group form-floating-label">
						<input id="email" name="email" type="text" class="form-control input-border-bottom" required>
						<label for="email" class="placeholder">Email</label>
					</div>
					<div class="form-group form-floating-label">
						<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
						<label for="password" class="placeholder">Password</label>
						<div class="show-password">
							<i class="icon-eye"></i>
						</div>
					</div>
					<div class="row form-sub m-0">

					</div>
					<div class="form-action mb-3">
						<button type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="/js/core/jquery.3.2.1.min.js"></script>
	<script src="/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/js/core/popper.min.js"></script>
	<script src="/js/core/bootstrap.min.js"></script>
	<script src="/js/atlantis.min.js"></script>
</body>

</html>