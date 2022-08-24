// wip
<?php
function query()
{
  require '../controller/session_check_petugas.php';
  require '../model/konfirmasi_bayar_model.php';
  
  if (isset($_GET['username'])) {
    $username = $_GET['username'];
    getPenyewaanByUsername($username);
  } else {
    getAllPenyewaan();
  }
}

function table()
{

$i = 1;
foreach ($penyewaan as $row):
echo"<tr>
<td><?php echo $i;  ?></td>
<td><?php echo $row['nim'];
?></td>
              <td><?php echo $row['nopol']; ?></td>
              <td><?php echo $row['nama_parkir']; ?></td>
              <td><?php echo $row['id_riwayat']; ?></td>
              <td>
                <button class=\"submit-btn1\"><a href=\"checkout.php?idriwayat=<?php echo $row['id_riwayat']; ?>\">Check Out</a></button>
              </td>
              </tr>";
$i++; 
endforeach;  

}