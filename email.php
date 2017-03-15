<?php
 
if(isset($_POST['S_email'])) {
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "mailadmin@psis.edu.my";
 	
    $email_subject = "Borang Pendaftaran Akaun e-mail Politeknik Sultan Idris Shah";


// create email headers
$message  = '<div id="dvContainer" align="center">';
$message .= '<table width="100%" border="0" cellpadding="0" cellspacing="0">';
$message .=	'<tr>';
$message .=	'<td width="22%" height="149">
          		<br />
          		<img src="http://vectorise.net/vectorworks/logos/Malaysia%20&%20Negeri/download/Lambang%20Malaysia.png" alt="psis" width="157" height="126" />		
				</td>';
$message .=	'<td width="55%" align="left" style="font-size:14px">
          		<br />
		  		<b style="color:#000">
				POLITEKNIK SULTN IDRIS SHAH<br />
          		KEMENTERIAN PENDIDIKAN TINGGI</b><br />
          		Sungai Lang<br />
          		45100 Sungai Air Tawar<br />
          		SELANGOR, MALAYSIA<br /> 
          		</td>';
$message .=	'<td width="25%" align="left" style="font-size:14px">
          		<img src="http://www.psis.edu.my/images/headers/logo_poli_my_psis_small.png" width="180" height="64"/>
				<br />
				Tel: 03-3280 6200<br />
          		Faks: 03-3280 6400<br />
          		Laman Web: www.psis.edu.my<br />
            	Facebook: politeknik.edu
          		</td>';
$message .=	'</tr>';
$message .=	'</table>';
	  
$message .=	'<hr color="black" />';
	  
$message .=	'<table width="100%" border="0" cellpadding="0" cellspacing="0">';
$message .= '<tr>';
$message .= '<td height="55" colspan="2">';
$message .= '<center>';
$message .= '<h2>Borang Pendaftaran Akaun <span class="email">e-mail </span>Politeknik Sultan Idris Shah</h2>';
$message .= '<br />';
$message .= '</center>';
$message .= '</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td width="37%" height="40">';
$message .= '<label>Staf ID:</label>';
$message .= '</td>';
$message .= '<td width="63%">'.$_POST['S_id'].'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td height="40">';
$message .= '<label>Nama:</label>';
$message .= '</td>';
$message .= '<td>'.$S_nama1.'&nbsp;'.$S_nama2.'&nbsp;'.$S_nama3.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td height="40">';
$message .= '<label>No. Kad Pengenalan:</label>';
$message .= '</td>';
$message .= '<td>'.$S_ic1.'&ndash;'.$S_ic2.'&ndash;'.$S_ic3.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td height="40">';
$message .= '<label>Alamat:</label>';
$message .= '</td>';
$message .= '<td>'.$S_alamat1.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td height="40">&nbsp;</td>';
$message .= '<td>'.$S_alamat2.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td height="40">&nbsp;</td>';
$message .= '<td>'.$S_alamat3.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td height="40">&nbsp;</td>';
$message .= '<td>'.$S_alamat4.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td height="40">';
$message .= '<label>No. Telefon (Bimbit):</label>';
$message .= '</td>';
$message .= '<td>'.$S_phone1.'&ndash;'.$S_phone2.'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td height="40">';
$message .= '<label>Jabatan / Unit:</label>';
$message .= '</td>';
$message .= '<td>'.$_POST['S_posisi'].'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .= '<td height="40">';
$message .= '<label>Jawatan & Gred (Staf):</label>';
$message .= '</td>';
$message .= '<td>'.$_POST['S_jawatangred'].'</td>';
$message .= '</tr>';

$message .= '<tr>';
$message .= '<td height="40">';
$message .= '<label>Username:</label>';
$message .= '</td>';
$message .= '<td>'.$_POST['S_username'].'</td>';
$message .= '</tr>';
$message .= '<tr>';
$message .=	'<td height="40">';
$message .= '<label>E-mail:</label>';
$message .= '</td>';
$message .= '<td>'.$_POST['S_email'].'</td>';
$message .= '</tr>';
$message .= '<div>';
$message .= '</div>';
$message .= '</table>';
$message .= '<br/>';
$message .= '<br/>';
$message .= '<br/>';
$message .= '<br/>';
$message .= '<br/>';
$message .= '<br/>';
$message .= '<br/>';
$message .= '<br/>';

$message .= '<div >';
$message .= '<input type="hidden" name="S_password" id="S_password" />';
$message .= '</div>';
		
$message .= '<div >';
$message .= '<input type="hidden" name="S_status" id="S_status" />';
$message .= '</div>';

$message .= '<feet>';
$message .= '<hr color="black" />';
$message .= '<center>';
$message .= '<img src="http://www.psis.edu.my/images/ujk/logo_msiso_psis_2014.jpg" width="10%" height="8%" />
                <img src="http://www.psis.edu.my/images/ujk/logo_mqa.jpg" width="16%" height="11%" />';
$message .= '</center>';
$message .= '</feet>';
		
$headers  = "From: Sistem Email<mailadmin@psis.edu.my> \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if(mail($email_to, $email_subject, $message, $headers))
{
    echo "<script>alert('Pendaftaran e-mail anda masih dalam proses. Sila cek spam e-mail dari semasa ke semasa.'); 
				window.location='index.php';</script>";
	
	$query = "INSERT INTO daftar (id,S_id,S_nama1,S_nama2,S_nama3,S_ic1,S_ic2,S_ic3,S_alamat1,S_alamat2,S_alamat3,
				S_alamat4,S_phone1,S_phone2,S_posisi,S_jawatangred,S_username,S_email,S_password,S_status) VALUES
				('','$S_id','$S_nama1','$S_nama2','$S_nama3','$S_ic1','$S_ic2','$S_ic3','$S_alamat1','$S_alamat2',
				'$S_alamat3','$S_alamat4','$S_phone1','$S_phone2','$S_posisi','$S_jawatangred','$S_username',
				'$S_email','$S_password','$S_status')";
	mysqli_query($Connection, $query) or die(mysqli_error($Connection));
}
else
{
    echo "<script>alert('Maaf, pendaftaran e-mail anda tidak berjaya. Sila cuba lagi.');
				window.location='index.php';</script>";
}
	 
?>
<?php
 
}
 
?>