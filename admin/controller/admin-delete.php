<?php
include "koneksi.php";
$kode=$_GET['id'];
$cost = 10;
$page = password_hash('list_admin', PASSWORD_BCRYPT, [10 => $cost]);

if ($_SESSION['admin'] == $kode) {?>
    <script type="text/javascript">
        alert('Tidak bisa dihapus !')
        document.location = '../views/home.php?page=<?php echo "$page"; ?>';

    </script>
    <?php } else {
          $del = "delete from admin where user_id = '$kode' ";
          $ok = mysql_query($del);
          if ($ok) {
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
    <?php }
            } ?>
