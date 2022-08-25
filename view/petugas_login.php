<?php
require '../controller/login_petugas_controller.php';
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
					<h1 class="form-title">Login Petugas</h1>
				</div>

				<div class="login-field">
					<h5 class="form-input-label">
						Username</h5>
					<input class="form-input" type="text" id="nip" name="nip" placeholder="Masukkan NIP" required></input>
				</div>

				<div class="login-field">
					<h5 class="form-input-label">
						Password</h5>
					<input class="form-input" type="password" id="password" name="password" placeholder="Masukkan Password" required></input>
				</div>

				<div class="login-field">
					<button class="submit-btn" value="login" type="submit" name="submit">Login</button>
					<!-- <p class="form-info-text">Login sebagai <a href="login_mahasiswa.php">Mahasiswa</a></p> -->

					<span><?php echo $error; ?></span>
				</div>
			</form>

		</div>

		<img class="login-image" src="../img/Safe-Deposit-Box Cropped.jpg"></img>
		<!-- <div class="login-image"></div>
 -->
	</div>

</body>

</html>