<?php
include("header.php"); //header
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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Senarai Daftar Staf</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tutelage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->

<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
<style type="text/css">
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
	padding:8px;
}

td {
    border: 1px solid black;
    text-align: center;
    padding: 8px;
}
</style>
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>
<body>
<div id="bodyfull">
<div id="bodyfull2">
	<div id="center">
		<div class="inner_right_demo">
        	<!-- navigation -->
            <div align="center" class="top-nav">
                <ul>
                  <li class="active"><a href="list_staf.php">Senarai Daftar</a></li>
                  <li><a href="logkeluar.php">Log Keluar</a></li>
                </ul>
            </div>
            <!-- navigation -->
            
            <div class="form_box_user">
                <text>
                    <h1>Senarai Daftar Staf </h1>
                </text>
                <br />
                <br />
               
                <div style="overflow-x:auto;" align="center">	
                <table >
                    <tr bgcolor="#CCCCCC" >
                        <td width="7%" height="59"><h4>Staf ID</h4></td>
                        <td width="29%"><h4>Nama</h4></td>
                        <td width="14%"><h4>No. Kad Pengenalan</h4></td>
                        <td width="27%"><h4>E-mail</h4></td>
                        <td width="8%"><h4>Borang Daftar </h4></td>
                        <td width="7%"><h4>Status Akaun</h4></td>
                        <td width="8%"><h4>Hapus Akaun</h4></td>
                        
                    </tr>
                    <?php
                    $query = "SELECT * FROM daftar ORDER BY id DESC";
                          
                    $result = mysqli_query($Connection, $query);
                    while($row = mysqli_fetch_array($result))
                    { 
						$id = $row['id'];
                        $S_id = $row['S_id'];
                        $S_nama1 = $row['S_nama1'];
						$S_nama2 = $row['S_nama2'];
						$S_nama3 = $row['S_nama3'];
						$S_ic1 = $row['S_ic1'];
						$S_ic2 = $row['S_ic2'];
						$S_ic3 = $row['S_ic3'];
						$S_alamat3 = $row['S_alamat1'];
						$S_alamat2 = $row['S_alamat2'];
						$S_alamat3 = $row['S_alamat3'];
						$S_alamat4 = $row['S_alamat4'];
						$S_phone1 = $row['S_phone1'];
						$S_phone2 = $row['S_phone2'];
						$S_posisi = $row['S_posisi'];
						$S_jawatangred = $row['S_jawatangred'];
						$S_username = $row['S_username'];
						$S_email = $row['S_email'];
						$S_password = $row['S_password'];
						$S_status = $row['S_status'];
						
                        print "<tr>
                            <td><a href='status.php?id=$id'><button name='S_id' class='btn' value='$S_id' >$S_id</button></a></td>
                            <td>$S_nama1&nbsp;$S_nama2&nbsp;$S_nama3</td>
                            <td>$S_ic1&ndash;$S_ic2&ndash;$S_ic3</td>
                            <td>$S_email</td>
                            <td><a href='papar_borang.php?id=$id'><button name='papar' class='input_submit' >Papar</button></a></td>
                            <td>$S_status</td>
                            <td><a href='delete.php?id=$id'><button name='padam' class='input_submit'>Padam</button></a></td>
                            
                    
                            </tr>";
                    }
                    ?>
                    
                </table>

                <br />
        	</div>
            <?php 
				$result = mysqli_query($Connection, "SELECT COUNT(id) AS num_rows FROM daftar WHERE S_status = 'Aktif'");
				$row = mysqli_fetch_object($result);
				$total = $row->num_rows;
				
				echo "<p align='left'>Jumlah Rekod Staf AKTIF: $total</p>";
			
				$result = mysqli_query($Connection, "SELECT COUNT(id) AS num_rows FROM daftar WHERE S_status = 'Baru'");
				$row = mysqli_fetch_object($result);
				$total = $row->num_rows;
				
				echo "<p align='left'>Jumlah Rekod Staf BARU: $total</p>";
			?>
        </div>
        <footer>
            <br />
            <br />
            <br />
            <br />
            <p>Hakcipta Terpelihara &copy; 2016 - Aplikasi Web Politeknik Sultan Idris Shah</p>
        </footer>
		
	</div>
</div>
</div>
</div>
</body>
<script src="js/script.js"></script>
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

<!-- smooth scrolling -->
<script type="text/javascript">
		$(document).ready(function() {							
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>
