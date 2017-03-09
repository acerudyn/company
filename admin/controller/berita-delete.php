<?php
//session_start();
include "koneksi.php";
$kode =$_GET['id'];
$cost = 10;
$page = password_hash('list_berita', PASSWORD_BCRYPT, [10 => $cost]);

$cari   = mysql_query("select * from berita where berita_id = '$kode' ");
$row    = mysql_fetch_array($cari);
$gambar = $row['gambar'];
$folder = "../img/berita/$gambar";

$del  = "delete from berita where berita_id = '$kode' ";
$ok   = mysql_query($del);
if ($ok) {
  unlink($folder);
?>
    <script type="text/javascript">
        alert('Data berhasil dihapus !')
        document.location = '../views/home.php?page=<?php echo "$page"; ?>';

    </script>

    <?php } else {?>
    <script type="text/javascript">
        alert('Data Gagal Dihapus !')
        document.location = '../views/home.php?page=<?php echo "$page"; ?>';

    </script>
    <?php }?>
