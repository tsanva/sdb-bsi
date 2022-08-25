<?php
require '../controller/form_controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/login1.css">
  <title>Document</title>
</head>

<body>
  <div class="login-utama">
    <div class=kiri>
      <form class="login-form" action="" method="post">
        <img style="width: 40%" src="../logo/logohanabank.png">
        <div class="login-field">
          <h1 class="form-title">Formulir Penyewaan</h1>
          <p class="form-info-text"> Portal Safe Deposit Box </p>
        </div>
        <div class="login-field">
          <h5>Upload fotokopi identitas</h5>
          <input type="file" id="fotokopi" name="fotokopi" required>
        </div>
        <div class="login-field">
          <h5>Upload Bukti Perjanjian sewa menyewa</h5>
          <input type="file" id="perjanjian" name="perjanjian" required>
          <button class=submit-btn value=form-sewa type=submit name=submit>submit</button>
          <?php
          if (isset($_POST['submit'])) {
            simpan();
          }
          ?>
        </div>
      </form>
    </div>
    <img class="login-image" src="../img/Safe-Deposit-Box Cropped.jpg"></img>
  </div>
</body>

</html>