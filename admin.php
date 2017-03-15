<?php
include("header.php"); //header
?>
<?php
include("Connections/Connection.php");
session_start();

if(isset($_POST['submit']))
{
	$A_username = $_POST['A_username'];
	$A_password = $_POST['A_password'];
	
	if(isset($_POST['A_username']) && isset($_POST['A_password']))
	{
		$A_username = mysqli_real_escape_string($Connection, $_POST['A_username']);
		$A_password = mysqli_real_escape_string($Connection, $_POST['A_password']);
		
		if(!empty($A_username) || !empty($A_password))
		{
			$query = "SELECT * FROM admin WHERE A_username = '$A_username' AND A_password = '$A_password'";
			$result = mysqli_query($Connection, $query);
			$rows = mysqli_num_rows($result);
			
			if($rows == 1)
			{
				$_SESSION['login_user'] = $A_username;
				header("location: list_staf.php");
			}
			else
			{
				echo "<script>alert('Username atau Kata Laluan anda salah!');
					window.location='admin.php';</script>";
			}
		}
	}
}
if(isset($_SESSION['login_user']))
{
	header("location: list_staf.php");
}
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator Log Masuk</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tutelage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<meta name="title" content="BORANG PENDAFTARAN AKAUN e-mail POLITEKNIK SULTAN IDRIS SHAH<"/>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
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
                  <li><a href="index.php">Daftar Staf</a></li>
                  <li class="active"><a href="admin.php">Administrator Log Masuk</a></li>
                </ul>
            </div>
            <!-- navigation -->
    
            
            <form action="" name="login" method="POST" id="login" enctype="multipart/form-data" onsubmit="return loginForm()">
              <div class="form_box">
               
                <text>
                    <h2>Administrator Log Masuk</h2>
                </text>
                
                <br />
            	<br />
                
                <div>
                    <label>Username: </label>
                    <input name="A_username" type="text" id="A_username" placeholder="eg: admin@psis.edu.my" />
                </div>
                
                <div>
                    <label>Kata Laluan: </label>	
                    <input name="A_password" type="password" id="A_password" maxlength="12" placeholder="Kata Laluan Anda" />
                </div>
                
                <br />
                <br />
                
                <div>
                    <div class="otherinputs">
                        <label>&nbsp;</label>
                        <br />
                        <input id="submit" type="submit" value="Log Masuk" name="submit" class="submit" />
        
                    </div>
                </div>
                
                <br />
                
              </div>
            </form>
            <br />
            <br />
                    
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
</div>

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
