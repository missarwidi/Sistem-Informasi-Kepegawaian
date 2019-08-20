<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Dinas Pendidikan Provinsi Sulawesi Selatan | Sistem Informasi Kepegawaian</title>

     Bootstrap core CSS 
	<link rel='shortcut icon'  href='img/logo.png' />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    external css
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
     Custom styles for this template 
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

     HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries 
    [if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]
</head>

  <body class="login-body">


	
    <div class="container">
      <form name='form1' method='POST' action='cek_login.php' enctype='multipart/form-data' class="form-signin">
	    <center><div class="form-signin-headingtransparent" ><br><img src="img/logobkn.png" width="95%"><br></div></center>
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <input type="text" name="username" placeholder="Username" class="form-control" autofocus/>
                <input type="password" name="password" placeholder="Password" class="form-control" />
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
			//<?php 
//			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
//			
//			     $action = $_GET['action'];
//				 
//				 if($action == "sukses")
//				 { echo"<p class='green'>Log Out Berhasil</p>"; }
//				 else if ($action == "ditolak")
//				 { echo"<p class='green'>Anda Harus Login Terlebih Dahulu</p>"; }
//				 else if ($action == "salah")
//				 { echo"<p class='green'>Login Gagal !!! Username/Password Anda tidak benar Atau account Anda sedang diblokir</p>"; }
//				 else{echo"";}
//			?>
         
        </div>

         </form>

    </div>



     js placed at the end of the document so the pages load faster 
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Dinas Pendidikan Provinsi Sulawesi Selatan</title>
<meta charset="utf-8">
<link rel='shortcut icon'  href='img/logo.png' />
<link rel="stylesheet" href="trav/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="trav/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="trav/css/style.css" type="text/css" media="all">
<script type="text/javascript" src="trav/js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="trav/js/cufon-yui.js"></script>
<script type="text/javascript" src="trav/js/cufon-replace.js"></script>  
<script type="text/javascript" src="trav/js/Myriad_Pro_600.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1">
<div class="extra">
	<div class="main">
<!-- header -->
<header>
  <div class="wrapper">
    <h1><a href="index.html" id="logo">Dinas Pendidikan Provinsi Sulawesi Selatan</a></h1>
    
  </div>
  <nav>
<br><br><hr class="judulheader">
  </nav>
  <article class="col1">
    <ul class="tabs">
      <li><a href="#" class="active">Login</a></li>
    </ul>
    <div class="tabs_cont">
      <form name='form1' id='form_1' method='POST' action='cek_login.php' enctype='multipart/form-data' class="form-signin">
        <div class="bg">
          <div class="wrapper">
           <center><h4>Sistem Informasi Kepegawaian</h4></center>
          </div><br>
          <p align="center"><a href="#">Masukkan Username &amp; Password Anda</a></p>
          <div class="wrapper">
			<input type="text" name="username" placeholder="Username" class="input"/>
            Username</div>
          <div class="wrapper">
            <input type="password" name="password" placeholder="Password" class="input" />
            Password</div>
          <center>
		  <?php 
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
			
			     $action = $_GET['action'];
				 
				 if($action == "sukses")
				 { echo"<p>Log Out Berhasil</p>"; }
				 else if ($action == "ditolak")
				 { echo"<p>Anda Harus Login Terlebih Dahulu</p>"; }
				 else if ($action == "salah")
				 { echo"<p>Login Gagal ! Username/Password Anda Salah Atau account Anda Telah diblokir</p>"; }
				 else{echo"";}
			?></center>
          <div class="wrapper pad_bot1"> <a href="#" class="button" onClick="document.getElementById('form_1').submit()">Login</a> 
            
          </div>
        </div>
      </form>
    </div>
  </article>
  <article class="col1 pad_left1">
    <div class="text"> <img src="img/logo-dikdasmen.png" alt="">
        <h4>Pentingnya Pendidikan</h4><br>
      <p>Sekolah Bukan untuk Mempelajari Banyak Fakta, Melainkan  untuk melatih jiwa, hati dan otak untuk berpikir, untuk menalar, dalam menghadapi hidup.<br>
        <br>
        Tujuan Pendidikan itu Untuk Mempertajam Kecerdasan, Memperkukuh Kemauan Serta Memperhalus Perasaan. - Tan Malaka - </p>
      </div>
  </article>
  <div class="img"><img src="img/pendidikan.jpg" alt="" width="390" height="280"></div>
</header>
<!-- / header -->
<!-- content -->
		<section id="content">
		  <article class="col">
				<h2>Product</h2>
				<div class="wrapper under">
				  <div align="center">
				    <table width="100%" border="1" align="center" cellpadding="4" cellspacing="4">
                      <tr>
                        <td><a href="http://dapo.dikdasmen.kemdikbud.go.id/"><img src="img/dapodik.png" width="221" height="56" border="0"><br><br>
                        <center><strong>Data Pokok Pendidikan</strong></center></a></td>
                        <td><a href="http://beta.bse.kemdikbud.go.id/"><img src="img/bse.jpg" width="233" height="56" border="0"><br><br>
                        <center><strong>Buku Sekolah Elektronik</strong></center></a></td>
                        <td><a href="http://belajar.kemdikbud.go.id/"><img src="img/rumbel.png" width="230" height="56" border="0"><br><br>
                        <center><strong>Rumah Belajar</strong></center></a></td>
                        <td><a href="http://unbk.kemdikbud.go.id/"><img src="img/unbk.png" width="190" height="56" border="0"><br><br>
                        <center><strong>UN Berbasis Komputer</strong></center></a></td>
                      </tr>
                                      </table>
			      </div>

			</div>
		  </article>
		</section>
<!-- / content -->
  </div>
	<div class="block"></div>
</div>
<div class="body1">
	<div class="main">
<!-- footer -->
		<footer>
			<!--<a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a><br>-->
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
