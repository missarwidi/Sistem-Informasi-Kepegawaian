<?php
     include("config/koneksi.php");
	 include("config/authentication_users.php");
?>
      <!--header start-->
      <?php include"header.php"; ?>
      <!--header end-->
      <?php include"sidebar.php"; ?>
      <!--main content start-->
	  <?php 
	       $r = $_GET['r'];
		   if($r == "")
		   { 
		      include"home.php";
			  include"function_footer.php";
		   }
		   else if($r == "home")
		   { include"home.php"; }
		   else if($r == "user")
		   { include"profil.php"; }		   
		   else if($r == "print")
		   { include"print.php"; }		   
		   else if($r == "kategori")
		   { include"kategori.php"; }
		   else if($r == "rbb")
		   { include"rbb.php"; }
		   else if($r == "laporan")
		   { include"laporan.php"; }
		   else if($r == "tindak_pidana")
		   { include"tindak_pidana.php"; }
		   else if($r == "satuan")
		   { include"satuan.php"; }
		   else if($r == "alasan")
		   { include"alasan.php"; }
		   else if($r == "pemeliharaan")
		   { include"pemeliharaan.php"; }
		   else if($r == "bimtek")
		   { include"bimtek.php"; }
		   else if($r == "pengawasan")
		   { include"pengawasan.php"; }
		   else if($r == "pengamanan")
		   { include"pengamanan.php"; }
		   else if($r == "mutasi")
		   { include"mutasi.php"; }
		   else if($r == "kontak")
		   { include"kontak.php"; }
		   else if($r == "pegawai")
		   { include"pegawai.php"; }
		   else if($r == "pendidikan")
		   { include"pendidikan.php"; }
		   else if($r == "pengalaman")
		   { include"pengalaman.php"; }
		   else if($r == "kemampuan")
		   { include"kemampuan.php"; }
		   else if($r == "keluarga")
		   { include"keluarga.php"; }
		   else if($r == "gaji")
		   { include"gaji.php"; }
		   else if($r == "golongan")
		   { include"mastergolongan.php"; }
		   else if($r == "pangkat")
		   { include"pangkat.php"; }
		   else if($r == "unitkerja")
		   { include"unitkerja.php"; }
		   else if($r == "pensiun")
		   { include"pensiun.php"; }
		   else if($r == "kenaikanpangkat")
		   { include"kenaikanpangkat.php"; }
		   else if($r == "berita")
		   { include"berita.php"; }
		   else if($r == "notifikasi")
		   { include"notifikasi.php"; }
		   else 
		   { include"404.php"; }
		   
		   
	  ?>
      
