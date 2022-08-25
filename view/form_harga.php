<?php require '../controller/form_controller.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/login1.css">
  <link rel="stylesheet" type="text/css" href="../css/form.css">
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
          <h5 class="form-input-label">tipe loker</h5>
          <select class="form-input" name="tipe" id="tipe" required>
            <option value="" disabled selected>pilih tipe</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
          </select>
        </div>
        <div class="login-field">
          <h5 class="form-input-label">Jangka Penyewaan(tahun)</h5>
          <input class="input-num" type="number" id="jangka" name="jangka" min=0 max=10 required placeholder="masukkan jangka waktu penyewaan">
          <table class=table-full>
            <tr>
              <td>
                <button class=submit-form value=form-sewa type=submit name=cek>Cek Harga</button>
              </td>
              <td>
                <button class=submit-form value=form-sewa type=submit name=next>Next</button>
              </td>
            </tr>
          </table>
        </div>
        <div class="login-field">
          <h5 class="form-input-label">harga penyewaan(dalam rupiah)</h5>
          <?php
          if (isset($_POST['cek'])) {
            hitung();
          }
          if (isset($_POST['next'])) {
            hitungNext();
          }
          ?>
        </div>
      </form>
    </div>
    <img class="login-image" src="../img/Safe-Deposit-Box Cropped.jpg"></img>
  </div>
</body>

</html>