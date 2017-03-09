<?php
session_start();
include "koneksi.php";
$cost = 10;
$list = password_hash('list_admin', PASSWORD_BCRYPT, [10 => $cost]);
$edit = password_hash('edit_admin', PASSWORD_BCRYPT, [10 => $cost]);

if($_POST){
	$id				=	$_POST['id'];
	$nama			=	$_POST['nama_admin'];
	$username	=	$_POST['username'];
	$password	=	$_POST['password'];
	//$konfirm	=	$_POST['konfirmasi_pwd'];

	$cost = 10;
	$hash = password_hash($password, PASSWORD_BCRYPT, [10 => $cost]);

	$update		= mysql_query("update admin SET
                     nama_user	=	'".$nama."',
				    		 		 username		=		'".$username."',
                     password		=	'".$hash."'
                     WHERE user_id =	'".$id."'");

if($update){

	?>
    <script type="text/javascript">
        alert('Data Berhasil Diupadate')
        document.location = '../views/home.php?page=<?php echo "$list"; ?>';

    </script>

    <?php } else {?>
    <script type="text/javascript">
        alert('Data Gagal Diupadate')
        document.location = '../views/home.php?page=<?php echo "$edit&id=$id"; ?> ';

    </script>

    <?php }
	} ?>
