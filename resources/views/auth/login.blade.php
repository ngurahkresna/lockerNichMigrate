<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<title>LockerNich LOGIN</title>
</head>
<body>
	<div class="background">

		<div class="cont1">
			<p>Welcome To</p>
			<h1><strong>LockerNich</strong></h1>
		</div>

	</div>

	<div class="formLogin">
		<div style="margin: 20px 12px 20px 12px">
			<h3>Welcome Back!</h3>
		</div>
		<br>
		<br>
		<form method="POST" action="{{ route('login') }}">
			@csrf
			<input type="email" name="email" placeholder="email">
			<input type="password" name="password" placeholder="password">

			<button type="submit" class="button1">Login</button>
			<button class="button2">Buat Akun</button>
		</form>
	</div>

</body>
</html>