<?php
include("Connections/Connection.php");
session_start();

$user_check = $_SESSION['login_user'];
   
$query = mysqli_query($Connection,"SELECT A_username FROM admin WHERE A_username = '$user_check' ");

$row = mysqli_fetch_array($query,MYSQLI_ASSOC);

$login_session = $row['A_username'];

if(!isset($_SESSION['login_user']))
{
	header("location:admin.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Papar Borang</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tutelage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() 
{ 
	setTimeout(hideURLbar, 0); 
}, false);

function hideURLbar()
{ 
	window.scrollTo(0,1); 
} 
</script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				$(".scroll").click(function(event)
				{		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!-- start-smooth-scrolling -->

<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<script>
$("#button").live("click", function () 
{
	var divContents = $("#dvContainer").html();
	var printWindow = window.open('', '', 'height=400,width=800');
	printWindow.document.write('<html><head><title>Borang Pendaftaran Akaun e-mail Politeknik Sultan Idris Shah</title>');
	printWindow.document.write('</head><body >');
	printWindow.document.write(divContents);
	printWindow.document.write('</body></html>');
	printWindow.document.close();
	printWindow.print();
	printWindow.window.close();
});
</script>
</head>
<body>

<?php
$id = $_GET['id'];

$sql = "SELECT * FROM daftar WHERE id='$id'";	
$result = mysqli_query($Connection,$sql);

while($_POST = mysqli_fetch_array($result))
{	
	$S_id=$_POST['S_id'];
	$S_nama1=$_POST['S_nama1'];
	$S_nama2=$_POST['S_nama2'];
	$S_nama3=$_POST['S_nama3'];
	$S_ic1=$_POST['S_ic1'];
	$S_ic2=$_POST['S_ic2'];
	$S_ic3=$_POST['S_ic3'];
	$S_alamat1=$_POST['S_alamat1'];
	$S_alamat2=$_POST['S_alamat2'];
	$S_alamat3=$_POST['S_alamat3'];
	$S_alamat4=$_POST['S_alamat4'];
	$S_phone1=$_POST['S_phone1'];
	$S_phone2=$_POST['S_phone2'];
	$S_posisi=$_POST['S_posisi'];
	$S_jawatangred=$_POST['S_jawatangred'];
	$S_username=$_POST['S_username'];
	$S_email=$_POST['S_email'];
	$S_password=$_POST['S_password'];
	$S_status=$_POST['S_status'];
}
?>
<form action="" name="daftar" method="POST" id="daftar" enctype="multipart/form-data" >
<div class='form_box'>
    <div id='dvContainer' align='center'>
	  <table width='100%' border='0' cellpadding='0' cellspacing='0'>
		<tr>
		  <td width='24%' height='149'>
          	<br />
          	<img src='http://vectorise.net/vectorworks/logos/Malaysia%20&%20Negeri/download/Lambang%20Malaysia.png' alt='psis' width='157' height='126' />
		  </td>
		  <td width='50%' align='left' style='font-size:14px'>
		  	<br />
		  	<b style='color:#000'>
				POLITEKNIK SULTN IDRIS SHAH<br />
          		KEMENTERIAN PENDIDIKAN TINGGI</b><br />
          		Sungai Lang<br />
          		45100 Sungai Air Tawar<br />
          		SELANGOR, MALAYSIA<br />
          </td>
		  <td width='26%' align='left' style='font-size:14px'>
          	<img src='http://www.psis.edu.my/images/headers/logo_poli_my_psis_small.png' width='180' height='64'/>
			<br />
				Tel: 03-3280 6200<br />
          		Faks: 03-3280 6400<br />
          		Laman Web: www.psis.edu.my<br />
            	Facebook: politeknik.edu
          </td>
	    </tr>
	  </table>
	  
	<hr color='black' />
	  
<table width='100%' border='0' cellpadding='0' cellspacing='0'>
			<tr>
				<td height='55' colspan='2'>
					<center>
					  <h2>Borang Pendaftaran Akaun e-mail Politeknik Sultan Idris Shah</h2>
					  <br />
					</center>
				</td>
			</tr>
         </table>
         <table width='100%' border='0' cellpadding='0' cellspacing='0'>
            <tr>
				<td width="37%" height='40'>
				  Staf ID:
				</td>
				<td width="63%"><?php echo $S_id;?></td>
			</tr>
			<tr>
				<td height='40'>
				  Nama:
			</td>
				<td><?php echo $S_nama1;?>&nbsp;<?php echo $S_nama2;?>&nbsp;<?php echo $S_nama3;?></td>
			</tr>
			<tr>
				<td height='40'>
				  No. Kad Pengenalan:
			</td>
				<td><?php echo $S_ic1;?>&ndash;<?php echo $S_ic2;?>&ndash;<?php echo $S_ic3;?></td>
			</tr>
			<tr>
				<td height='40'>
				  Alamat:
			</td>
				<td><?php echo $S_alamat1;?></td>
			</tr>
            <tr>
				<td height='40'>&nbsp;</td>
				<td><?php echo $S_alamat2;?></td>
			</tr>
            <tr>
				<td height='40'>&nbsp;</td>
				<td><?php echo $S_alamat3;?></td>
			</tr>
            <tr>
				<td height='40'>&nbsp;</td>
				<td><?php echo $S_alamat4;?></td>
			</tr>
			<tr>
				<td height='40'>
				  No. Telefon (Bimbit):
			</td>
				<td><?php echo $S_phone1;?>&ndash;<?php echo $S_phone2;?></td>
			</tr>
			<tr>
				<td height='40'>
				  Jabatan / Unit:
			</td>
				<td><?php echo $S_posisi;?></td>
			</tr>
			<tr>
				<td height='40'>
				  Jawatan & Gred (Staf):
			</td>
				<td><?php echo $S_jawatangred;?></td>
			</tr>
			
			<tr>
				<td height='40'>
				  Username:
			</td>
				<td><?php echo $S_username;?></td>
			</tr>
			<tr>
				<td height='40'>
				  E-mail:
			</td>
				<td><?php echo $S_email;?></td>
			</tr>
		
    	</table>

<br>
        <br>
		<br>
		<br>
		<br>
        <br>
		<br>
        <br>
		
        <div >
        	<input type='hidden' name='S_password' id='S_password' />
		</div>
        
		<div >
        	<input type='hidden' name='S_status' id='S_status' />
		</div>	
            
        <div class="notis">
        Untuk Cetakan Komputer
        </div>

        <feet>
        	<hr color='black' />
<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
              <tr>
                <th scope='col' style='font-style:italic; font-size:12px; text-align: center;'>POLITEKNIK MENTRANSFORMASI KEHIDUPAN</th>
              </tr>
              <tr>
                <td>
                <center>
				<img src='http://www.psis.edu.my/images/ujk/logo_msiso_psis_2014.jpg' width='10%' height='8%' />
                <img src='https://upload.wikimedia.org/wikipedia/en/e/e8/Malaysian_Qualifications_Agency_logo.png' width='16%' height='11%' />
                </center>
                </td>
              </tr>
            </table>
    	</feet>
    </div>
</div>
</form>

    <div align='center' class='otherinputs'>
        <input id='button' type='submit' name='submit' class='submit' value='Cetak' />
        <input type='submit' name='submit' class='submit' value="Kembali" onclick="button()"/>
    </div>


<br>
<br>

<script type="text/javascript">
function button()
{
	window.location = "list_staf.php";
}
</script>
<script src="js/script.js"></script>
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

<!-- smooth scrolling -->
<script type="text/javascript">
		$(document).ready(function() 
		{							
			$().UItoTop(
				{ easingType: 'easeOutQuart' 
				});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>
