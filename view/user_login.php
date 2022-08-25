<?php
require '../controller/login_nasabah_controller.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login1.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="login-utama">

		<div class="kiri">

			<!-- login form -->
			<form class="login-form" action="" method="post">
				<img style="width: 40%" src="../logo/logohanabank.png">
				<div class="login-field">
					<h1 class="form-title">Login Nasabah</h1>
					<p class="form-info-text"> Portal Safe Deposit Box </p>
				</div>
				<div class="login-field">
					<h5 class="form-input-label">
						Username</h5>
					<input class="form-input" type="text" id="nim" name="nim" placeholder="Masukkan Nama Pengguna" required></input>
				</div>

				<div class="login-field">
					<h5 class="form-input-label">
						Password</h5>
					<input class="form-input" type="password" id="password" name="password" placeholder="Masukkan Password" required></input>
				</div>

				<div class="login-field">
					<button class="submit-btn" value="login" type="submit" name="submit">Login</button>

					<p class="form-info-text">Login sebagai <a href="login_petugas.php">Petugas</a></p>
					<span><?php echo $error; ?></span>

					<!-- <p class="form-info-text">Jika bermasalah, silahkan email <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCKCGDBdjsSDRZlpLzvLDsvgGPJhRxmcsXbNJSFkwgrQFpKFjFjFRlgVlMbKknJKJjDXfWZg">tidy.id</a> </p> -->

				</div>
			</form>

		</div>

		<img class="login-image" src="../img/Safe-Deposit-Box Cropped.jpg"></img>
		<!-- <div class="login-image"></div>
 -->
	</div>
	<!-- pesan error -->


</body>

</html>