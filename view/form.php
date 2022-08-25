<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>
    <body>
      <form class= "form-nasabah"action="" method="post">
        <div class="">
          <h5>tipe loker</h5>
          <select name="loker" id="loker" required>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
          </select>
        </div>
        <div>
          <h5>Jangka Penyewaan(tahun)</h5>
          <input type="number" id= "jangka" name="jangka" min=0 max=10 required>
        </div>
        <div>
          <h5>Upload fotokopi identitas</h5>
          <input type="file" id="fotokopi" name="fotokopi" required>
        </div>
        <div>
          <h5>Upload Bukti Perjanjian sewa menyewa</h5>
          <input type="file" id="perjanjian" name="perjanjian" required>
        </div>
        <div>
          <button class=submit-btn value=form-sewa type=submit name= submit>submit</button>
        </div>
      </form>
    </body>
</html>