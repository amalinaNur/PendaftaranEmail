<?php
 
if(isset($_POST['S_email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = $_POST['S_email'];
 
    $email_subject = "Pengaktifan Pendaftaran Akaun E-mail Politeknik Sultan Idris Shah";
 
	 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
// create email headers
$message  = "Assalamualaikum dan Salam Sejahtera. \r\n";
$message .= "<br />";
$message .= "<p>Tahniah! Akaun E-mail anda telah berjaya dicipta. Terima kasih atas pendaftaran yang telah anda buat. Anda boleh log masuk dengan menggunakan Username dan Kata Laluan Tetap ini. Diharap Kata Laluan ditukar selepas log masuk.</p> \r\n";
$message .= "<br />";

$message .= "-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
$message .= "<br />";
$message .= "<p>Username: ".$_POST['S_username']."</p> \r\n";
$message .= "<p>Kata Laluan: ".$_POST['S_password']."</p> \r\n";
$message .= "-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
		
$headers  = "From: Sistem Email <mailadmin@psis.edu.my> \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if(mail($email_to, $email_subject, $message, $headers))
{
    echo "<script>alert('Rekod Staf Berjaya Disimpan.');
							window.location = 'list_staf.php';</script>";
							
	$query = "UPDATE daftar SET S_id='$S_id', S_password='$S_password', S_status='$S_status' WHERE S_id='$S_id' ";
	mysqli_query($Connection, $query) or die(mysqli_error($Connection));
}
else
{
	echo "<script>alert('Rekod Staf Tidak Berjaya Disimpan.');
							window.location='list_staf.php';</script>";
}
	 
?>
<?php
 
}
 
?>