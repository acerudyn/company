<?php
//session_start();
include "koneksi.php";
$cost = 10;
$page = password_hash('list_contact', PASSWORD_BCRYPT, [10 => $cost]);

$from 		= "ragil.poetra@yahoo.com";
$id 			= $_POST['id'];
$to	    	= $_POST['to'];
$subject	= $_POST['subject'];
$message  = $_POST['message'];

$headers  = 'From : <'.$from.'>'."\r\n";

$sendmail = mail($to, $subject, $message, $headers);

/*
	$query  = ("insert into contact (contact_id, tanggal, nama_pengirim, email, isi_pesan, subject) values ('$user_id',CURRENT_TIMESTAMP,'$nama_pengirim','$email','$isi_pesan','$subject')");
	$save   = pg_query($query);
	*/

	if ($sendmail) {

		?>
    <script type="text/javascript">
        alert('Message Sent !')
        document.location = '../views/home.php?page=<?php echo "$page"; ?>';

    </script>

    <?php } else {?>
    <script type="text/javascript">
        alert('Failed to Replay Message !')
				document.location = '../views/home.php?page=<?php echo "$page&id=$id"; ?>';

    </script>

    <?php } ?>
