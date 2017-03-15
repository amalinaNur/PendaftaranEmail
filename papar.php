<?php
session_start();
include("Connections/Connection.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paparan</title>
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

<?php
if(isset($_POST['submit']))
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
	
	if(isset($_POST['S_id']))
	{
		$S_id = mysqli_real_escape_string($Connection, $_POST['S_id']);
		$string = $S_id;
		
		if(!empty($S_id))
		{
			if(!preg_match("/^[A-Z0-9\/\\\\]+$/", $_POST['S_id']) )
			{
				echo "<script>alert('Staf ID anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_nama1']))
	{
		$S_nama1 = mysqli_real_escape_string($Connection, $_POST['S_nama1']);

		if(!empty($S_nama1))
		{
			if(!preg_match('/^[A-Za-z ]{2,100}$/', $_POST['S_nama1']) )
			{
				echo "<script>alert('Nama anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_nama2']))
	{
		$S_nama2 = mysqli_real_escape_string($Connection, $_POST['S_nama2']);

		if(!empty($S_nama2))
		{
			if(!preg_match('/^[A-Za-z ]{2,100}$/', $_POST['S_nama2']) )
			{
				echo "<script>alert('Nama anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_nama3']))
	{
		$S_nama3 = mysqli_real_escape_string($Connection, $_POST['S_nama3']);

		if(!empty($S_nama3))
		{
			if(!preg_match('/^[A-Za-z ]{2,100}$/', $_POST['S_nama3']) )
			{
				echo "<script>alert('Nama anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_ic1']))
	{
		$S_ic1 = mysqli_real_escape_string($Connection, $_POST['S_ic1']);

		if(!empty($S_ic1))
		{
			if(!preg_match('/^[0-9]{5,6}$/', $_POST['S_ic1']) )
			{
				echo "<script>alert('No. Kad Pengenalan anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_ic2']))
	{
		$S_ic2 = mysqli_real_escape_string($Connection, $_POST['S_ic2']);

		if(!empty($S_ic2))
		{
			if(!preg_match('/^[0-9]{2}$/', $_POST['S_ic2']) )
			{
				echo "<script>alert('No. Kad Pengenalan anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_ic3']))
	{
		$S_ic3 = mysqli_real_escape_string($Connection, $_POST['S_ic3']);

		if(!empty($S_ic3))
		{
			if(!preg_match('/^[0-9]{4}$/', $_POST['S_ic3']) )
			{
				echo "<script>alert('No. Kad Pengenalan anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_alamat1']))
	{
		$S_alamat1 = mysqli_real_escape_string($Connection, $_POST['S_alamat1']);

		if(!empty($S_alamat1))
		{
			if(!preg_match('/^[A-Za-z0-9, ]{5,100}$/', $_POST['S_alamat1']) )
			{
				echo "<script>alert('Alamat anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_alamat2']))
	{
		$S_alamat2 = mysqli_real_escape_string($Connection, $_POST['S_alamat2']);

		if(!empty($S_alamat2))
		{
			if(!preg_match('/^[A-Za-z ]{2,100}$/', $_POST['S_alamat2']) )
			{
				echo "<script>alert('Bandar anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_alamat3']))
	{
		$S_alamat3 = mysqli_real_escape_string($Connection, $_POST['S_alamat3']);

		if(!empty($S_alamat3))
		{
			if(!preg_match('/^[A-Za-z ]{5,100}$/', $_POST['S_alamat3']) )
			{
				echo "<script>alert('Negeri anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_alamat4']))
	{
		$S_alamat4 = mysqli_real_escape_string($Connection, $_POST['S_alamat4']);

		if(!empty($S_alamat4))
		{
			if(!preg_match('/^[0-9]{5}$/', $_POST['S_alamat4']) )
			{
				echo "<script>alert('Poskod anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_phone1']))
	{
		$S_phone1 = mysqli_real_escape_string($Connection, $_POST['S_phone1']);

		if(!empty($S_phone1))
		{
			if(!preg_match('/^[0-9]{3}$/', $_POST['S_phone1']) )
			{
				echo "<script>alert('Telefon Bimbit anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_phone2']))
	{
		$S_phone2 = mysqli_real_escape_string($Connection, $_POST['S_phone2']);

		if(!empty($S_phone2))
		{
			if(!preg_match('/^[0-9]{7,8}$/', $_POST['S_phone2']) )
			{
				echo "<script>alert('Telefon Bimbit anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_jawatangred']))
	{
		$S_jawatangred = mysqli_real_escape_string($Connection, $_POST['S_jawatangred']);

		if(!empty($S_username))
		{
			if(!preg_match('/^[A-Za-z0-9 ]{5,50}$/', $_POST['S_jawatangred']) )
			{
				echo "<script>alert('Jawatan & Gred anda salah!');
						window.location='index.php';</script>";
				exit();
			}
		}
	}
	
	if(isset($_POST['S_username']))
	{
		$S_username = mysqli_real_escape_string($Connection, $_POST['S_username']);

		if(!empty($S_username))
		{
			if(!preg_match('/^[A-Za-z0-9.]{5,20}$/', $_POST['S_username']) )
			{
				echo "<script>alert('Username anda tidak sah!');
						window.location='index.php';</script>";
				exit();
			}
			else
			{
				$query = "SELECT * FROM daftar WHERE S_username = '$S_username'";
				$result = mysqli_query($Connection, $query);
				$count = mysqli_fetch_array($result);
		
				if($count['S_username'] == $S_username)
				{
					echo "<script>alert('Username anda sudah ada dalam rekod kami. Sila masukkan Username anda yang lain.');
								window.location='index.php';</script>";
					exit();
				}
			}
		}
	}
				
	if(isset($_POST['S_email']))
	{
		$S_email = mysqli_real_escape_string($Connection, $_POST['S_email']);

		if(!empty($S_email))
		{
			$S_email = filter_var($_POST['S_email'], FILTER_SANITIZE_EMAIL);
			if(!filter_var($_POST['S_email'], FILTER_VALIDATE_EMAIL)) 
			{
				echo "<script>alert('E-mail anda tidak sah!');
					window.location='index.php';</script>";
				exit();
    		}			
			else
			{
				$query = "SELECT * FROM daftar WHERE S_email = '$S_email'";
				$result = mysqli_query($Connection, $query);
				$count = mysqli_fetch_array($result);
		
				if($count['S_email'] == $_POST['S_email'])
				{
					echo "<script>alert('E-mail anda sudah ada dalam rekod kami. Sila masukkan alternatif E-mail anda yang lain.');
								window.location='index.php';</script>";
					exit();
				}
			}
		}
	}
	
	if($_POST["captcha"] != $_SESSION["code"]) 
    {
    	print "<script>alert('Maaf, kod CAPTCHA salah!'); 
					window.location = 'index.php';</script>";
		exit();				
    }
    else if($_POST["captcha"] == $_SESSION["code"]) 
    {
        print "<script>alert('Tahniah, kod CAPTCHA betul!');</script>"; 
    }
	
	include("email.php");
}
else
{
	echo "<script>window.location='index.php';</script>";
}
?> 



<script type="text/javascript">
function button()
{
	window.location='index.php';
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
