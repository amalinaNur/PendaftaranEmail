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
<title>Pengesahan Akaun</title>
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
	$S_username=$_POST['S_username'];
	$S_email=$_POST['S_email'];
	$S_password=$_POST['S_password'];
	$S_status=$_POST['S_status'];

	if(isset($S_id) && isset($S_username) && isset($S_email) && isset($S_password) && isset($S_status))
	{
		$S_id = mysqli_real_escape_string($Connection, $_POST['S_id']);
		$S_username = mysqli_real_escape_string($Connection, $_POST['S_username']);
		$S_email = mysqli_real_escape_string($Connection, $_POST['S_email']);
		$S_password = mysqli_real_escape_string($Connection, $_POST['S_password']);
		$S_status = mysqli_real_escape_string($Connection, $_POST['S_status']);
	
		if(!empty($S_id) || !empty($S_username) || !empty($S_email) || !empty($S_password) || !empty($S_status))
		{
			include("hantaremail.php");
		}
	}
}
?>
<br>
<br>
    
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
