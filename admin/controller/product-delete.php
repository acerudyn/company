<?php
//session_start();
include "koneksi.php";
$kode=$_GET['id'];
$cost = 10;
$page = password_hash('list_product', PASSWORD_BCRYPT, [10 => $cost]);

$cari   = mysql_query("select * from produk where produk_id = '$kode' ");
$row    = mysql_fetch_array($cari);
$gambar = $row['gambar'];
$folder = "../img/produk/$gambar";

$del    = "delete from produk where produk_id = '$kode' ";
$ok     = mysql_query($del);
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
