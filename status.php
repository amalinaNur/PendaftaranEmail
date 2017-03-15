<?php
include("header.php");
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
<title>Maklumat Pendaftaran Staf</title>
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
            
            <?php
			$id = $_GET['id'];
			
			$sql = "SELECT * FROM daftar WHERE id='$id'";	
			$result = mysqli_query($Connection,$sql);
			
			while($_POST = mysqli_fetch_array($result))
			{	
				$S_id = $_POST['S_id'];
				$S_username = $_POST['S_username'];
				$S_email = $_POST['S_email'];
				$S_password = $_POST['S_password'];
				$S_status = $_POST['S_status'];
			}
			?>
            <form action="status_akaun.php" name="aktif" method="POST" id="aktif" enctype="multipart/form-data" >
                <div class='form_box_user'>
                    <text>
                        <h1>Maklumat Pendaftaran Staf</h1>
                    </text>
                    <br />
                    <br />
                       
                  <div align="center">
                      <label>Staff ID:</label>
                      <input name="S_id" type="text" id="S_id" placeholder="eg: PSIS/01/111" value="<?php echo $S_id; ?>" />
                  </div>
                  
                  <div align="center">
                      <label>Username:</label>
                      <input name="S_username" type="text" id="S_username" placeholder="eg: Abc_123@psis.edu.my" value="<?php echo $S_username; ?>@psis.edu.my"/>
                  </div>
                  
                  <div align="center">
                      <label>E-mail Tetap:</label>
                      <input type="text" placeholder="eg: yahoo, gmail, hotmail, dsb" id="S_email" name="S_email" value="<?php echo $S_email; ?>" />
                  </div>
                            
                  <div align="center">
                      <label>Kata Laluan:</label>
                      <input type="text" placeholder="Kata Laluan tetap: user123" id="S_password" name="S_password" value="<?php echo $S_password; ?>" maxlength="7" />
                  </div>
                  
                  <div align="center">
                      <label>Status Akaun: </label>
                      <input type='text' placeholder='Status: Aktif' name='S_status' id='S_status' value="<?php echo $S_status; ?>" />
                  </div>
                  
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                    
                    <div align='center' class='otherinputs'>
                        <input type='submit' id="button" name='submit' class='submit' value="Aktifkan Akaun" />
                        <input type='submit' id="button" name='submit' class='submit' value="Kembali" formaction="list_staf.php" />
                    </div>
                </div>
            </form>
            
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
