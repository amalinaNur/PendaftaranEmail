<?php
session_start();
include("Connections/Connection.php");
include("header.php"); //header
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Borang Pendaftaran Akaun e-mail Politeknik Sultan Idris Shah</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tutelage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->

<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>
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

<style type="text/css">
.dash {
	clear: both;
    display: inline-block;
    color: #333;
    font-family: TitilliumText22LBold,ArtifikaMedium,Arial,Helvetica,sans-serif;
    margin: 2px 0;
	margin-left: 20px;
    padding: 15px 0 0 0;
}
</style>
</head>
<body>
<div id="bodyfull">
<div id="bodyfull2">
	<div id="center">
		<div class="inner_right_demo">
            <!-- navigation -->
            <div align="center" class="top-nav">
                <ul>
                  <li class="active"><a href="index.php">Daftar Staf</a></li>
                  <li><a href="admin.php">Administrator Log Masuk</a></li>
                </ul>
            </div>
            <!-- navigation -->

            <div class="form_box" >
                <form action="papar.php" name="daftar" method="POST" id="daftar" enctype="multipart/form-data">
                    
                    <div id='dvContainer'>
                        <text>
                            <h2>Borang Pendaftaran Akaun <span class="email">e-mail</span> Politeknik Sultan Idris Shah</h2>
                        </text>
                        
                        <br />
                        <p><span class="error">* medan yang perlu diisi.</span></p>
                        
                        <div>
                            <label>Staff ID:</label>
                            <input type="text" placeholder="PSIS/01/111" id="S_id" name="S_id" maxlength="15"/>
                            <span class="error">*</span>
                        </div>
                        
                        <div>	
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="notice">
                                 Staf ID sila rujuk di atas kod bar yang tertera di belakang kad staf. 
                            </span>
                            <br />
                            <br />
                      	</div>
                        
                        <div>
                            <label>Nama Pertama:</label>
                            <input type="text" placeholder="Nor Amalina" id="S_nama1" name="S_nama1" maxlength="100"/>
                            <span class="error">*</span>
                        </div>
                        
                        <div>
                            <label>Nama Tengah:</label>
                            <input type="text" placeholder="Bin, Binti, A/L, A/P " id="S_nama2" name="S_nama2" maxlength="5"/>
                            <span class="error">*</span>
                        </div>
                        
                        <div>
                            <label>Nama Akhir:</label>
                            <input type="text" placeholder="Mohamed Fadzilah" id="S_nama3" name="S_nama3" maxlength="100"/>
                            <span class="error">*</span>
                        </div>
                        
                        <div>
                        <div>
                            <label>No. Kad Pengenalan:</label>
                            <input type="ic1" id="S_ic1" name="S_ic1" maxlength = "6" placeholder="XXXXXX"/>
                            <span class="dash">&ndash;</span>
                            <input type="ic2" id="S_ic2" name="S_ic2" maxlength = "2" placeholder="XX"/>
                            <span class="dash">&ndash;</span>
                            <input type="ic3" id="S_ic3" name="S_ic3" maxlength = "4" placeholder="XXXX"/>
                            <span class="error">*</span>
                        </div>
                        </div>
                        
                        <div>
                            <label>Alamat: </label>
                            <input type="text" id="S_alamat1" name="S_alamat1" placeholder="11, Jalan Kayangan, Taman Rozana" maxlength="100"/>
                            <span class="error">*</span>
                        </div>
                        
                        <div>
                            <label>Bandar: </label>
                            <input type="text" id="S_alamat2" name="S_alamat2" placeholder="Sabak Bernam" maxlength="100"/>
                            <span class="error">*</span>
                        </div>
                        
                        <div>
                            <label>Negeri: </label>
                            <input type="text" id="S_alamat3" name="S_alamat3" placeholder="Selangor" maxlength="100"/>
                            <span class="error">*</span>
                        </div>
                        
                        <div>
                            <label>Poskod: </label>
                            <input type="poskod" id="S_alamat4" name="S_alamat4" maxlength = "5" placeholder="45200"/>
                            <span class="error">*</span>
                        </div>
                        
                        <div>
                            <label>No. Telefon (Bimbit):</label>
                            <input type="phone1" id="S_phone1" name="S_phone1" maxlength = "3" placeholder="012"/>
                            <span class="dash">&ndash;</span>
                            <input type="phone2" id="S_phone2" name="S_phone2" maxlength = "8" placeholder="3456789"/>
                            <span class="error">*</span>
                        </div>
                        
                        <div>
                            <label>Jabatan/Unit:</label>
							<select name="S_posisi" id="S_posisi" >
                              <option> </option>
							  <option>Jabatan Pelancongan dan Hospitaliti</option>
							  <option>Jabatan Kejuruteraan Awam</option>
							  <option>Jabatan Kejuruteraan Elektrik</option>
							  <option>Jabatan Teknologi Maklumat dan Komunikasi</option>
							  <option>Jabatan Perdagangan</option>
							  <option>Jabatan Matematik, Sains dan Komputer</option>
							  <option>Jabatan Pengajian Am</option>
							  <option>Jabatan Hal Ehwal Pelajar</option>
							  <option>Unit Perhubungan Awam</option>
							  <option>Unit Pentadbiran</option>
							  <option>Unit Kewangan</option>
							  <option>Unit Perhubungan &amp; Latihan Industri</option>
							  <option>Unit Peperiksaan</option>
							  <option>Unit Perpustakaan</option>
							  <option>Unit Sukan &amp; Kokurikulum</option>
							  <option>Unit Asrama</option>
							  <option>Unit Teknologi Maklumat</option>
							  <option>UIDM</option>
							  <option>Unit Pembangunan &amp; Penyelenggaraan</option>
							  <option>Unit Kualiti</option>
							  <option>Uinit Penyelidikan &amp; Inovasi</option>
							  <option>Unit Kaunseling</option>
							  <option>Unit Latihan &amp; Pendidikan Lanjutan</option>
							  <option>Unit Stor</option>
							  <option>Unit Pemandu</option>
                      </select>
                            <span class="error">*</span>
                        </div>
                        
                        <div>
                            <label>Jawatan & Gred (Staf):</label>
                            <input type="text" placeholder="Pegawai Teknologi Maklumat F41" id="S_jawatangred" name="S_jawatangred" maxlength="100"/>
                            <span class="error">*</span>
                        </div>
                        
                        <div>
                            <label>Username:</label>
                            <input type="text"  placeholder="amalina.nur, NurAmalina, amalina, amalina94" id="S_username" name="S_username" maxlength="20"/>
                            <span class="error">*</span>
                        </div>
                        
                        <div>
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="notice">
                                 Karakter yang dibenarkan seperti A-Z, a-z, 0-9, dan tidak mempunyai
                            </span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="notice">
                                 ruang kosong.
                            </span>
                            <br />
                            <br />
                        </div>
        
                        <div>
                            <label>Alternatif E-mail:</label>
                            <input type="text" placeholder="yahoo, gmail, hotmail, dsb" id="S_email" name="S_email" />
                            <span class="error">*</span>
                        </div>
                        
                        <div>
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="notice">
                                 Sila masukkan Alternatif e-mail anda seperti yahoo, gmail, hotmail, 
                            </span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="notice">
                                dan sebagainya untuk rujukan.
                            </span>
                            <br />
                            <br />
                            <br />
                        </div>
                        
                        <div>
                            <div id="imgdiv">
                                <img id="img" src="captcha.php" />
                                <img id="refresh" src="images/reload.png"/>
                            </div>
                        </div>
                     
                        <div>
                            <label for="captcha">CAPTCHA:</label>
                            <input type="text" id="captcha" name="captcha"  maxlength="6" >
                            <span class="error">*</span>
                        
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <span class="notice">
                                 Sila masukkan kod digit tertera di ruangan atas ini. 
                            </span>

                        	<br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                        </div>    
                        
                        
<div>
                            <input type='hidden' name='S_password' id='S_password' />
                        </div>
                         
                        <div>
                            <input type='hidden' name='S_status' id='S_status' value="Baru" />
                        </div>             	
                    </div>
                    <div>
                        <div class='notice1' align='left'>
                            <span class='error'>Arahan:</span>
                            <br />
                                1. Klik Hantar sekiranya untuk hantar secara online.
                                <br />
                                2. Klik Cetak untuk cetak borang dan hantar secara manual ke Unit Teknologi Maklumat.
                        </div>
                    </div>
                    
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                            
                        <div>
                            <div class="otherinputs" align="center">
                                
                                <input id="button" type="submit" value="Hantar" name="submit" class="submit" />
                                <input id="cetak" type="submit" value="Cetak" name="submit" class="submit" formaction="cetak.php" />
                                <input type="reset" value="Padam" name="Reset" class="submit">
        
                            </div>
                        </div>
                    
                </form>
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
