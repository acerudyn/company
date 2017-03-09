<?php
error_reporting(0);
include 'koneksi.php';
session_start();// Memulai Session
// Menyimpan Session
$username = $_SESSION['login'];
$user_id = $_SESSION['admin'];
// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql = mysql_query("select * from admin where username='$username' ");
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['nama_user'];

if(!isset($login_session)) {
	mysql_close(); // Menutup koneksi ?>
    <script type="text/javascript">
        alert('Silahkan Login atau Daftar Dahulu ')
        document.location = '../index.php';

    </script>
    <?php } ?>
