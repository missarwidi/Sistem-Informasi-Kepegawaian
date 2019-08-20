<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Pengajuan Kenaikan Pangkat</title>
<link rel="shortcut icon"  href="img/logo.png" />
<style type="text/css">
<!--
table {
    border-collapse: collapse;
    border-spacing: 0px;
}
-->
</style>
</head>

<body>
<section id="main-content">
          <section class="wrapper site-min-height">
<?php	
	
	//require_once("config/authentication_users.php");
    include"config/koneksi.php";
	include"config/fungsi_indotgl.php";
	include"config/fungsi_ymd.php";
		  
    $tglhariini = tgl_indo(date("Y/m/d"));
    $tanggaldari = $_GET['from'];
	$tanggalsampai =  $_GET['to'];
		
	$tanggaldari_indo = tgl_indo($tanggaldari);
	$tanggalsampai_indo =  tgl_indo($tanggalsampai);
									
?>

<table width="1000" align="center">
  <thead>
  <tr>
	<th width="14%" rowspan="4"><img src="img/surat/kop.png" width="88" height="105" /></th>
	<th><div align="left">PEMERINTAH PROVINSI SULAWESI SELATAN </div></th>
  </tr>
  <tr>
	<th><div align="left">DINAS PENDIDIKAN </div></th>
  </tr>
  
  <tr>
	<th><div align="left">Jl. Perintis Kemerdekaan Km. 10 Tamalanrea, Makassar 90254</div></th>
  </tr>
  <tr>
	<th><div align="left">Telepon : 0411- 586091</div></th>
  </tr>
  <tr>
	<th colspan="2">&nbsp;</th>
  </tr>
  <tr>
	<th colspan="2">
		  <div align="center">	  LAPORAN PENGAJUAN KENAIKAN PANGKAT
		  <br />
		  YANG BERSTATUS DI SETUJUI
	  <br />
	  Periode : <?php echo"$tanggaldari_indo Sampai $tanggalsampai_indo"; ?>	  </div><br /></th>
  </tr>
  </thead>
  </table>									  
  <table width="1000" border="1" cellpadding="8" cellspacing="8" id="example1"  align="center" >
  <thead>
  <tr>
	<th width="3%" rowspan="2"><div align="center">No</div>      <div align="center"></div></th>
	<th width="8%" rowspan="2">ID Pengajuan </th>
	<th width="8%" rowspan="2"><div align="center">Nip</div>      
	  <div align="center"></div></th>
	<th width="10%" rowspan="2"><div align="center">Nama</div>	  </th>
	<th width="6%" rowspan="2"><div align="center">Tanggal Pengajuan </div></th>
	<th colspan="2"><div align="center">Golongan</div></th>
	<th colspan="2"><div align="center">Pangkat</div>      <div align="center"></div></th>
	<th width="9%" rowspan="2"><div align="center">Penilaian DP3  </div> <div align="center"></div></th>
	<th width="12%" rowspan="2"><div align="center">Keterangan</div>      <div align="center"></div></th>
  </tr>
  <tr>
	<th width="17%"><div align="center">Lama</div></th>
	<th width="8%"><div align="center">Baru</div></th>
    <th width="5%"><div align="center">Lama</div></th>
    <th width="5%"><div align="center">Baru</div></th>
  </tr>
  <tr>
	<th><div align="center"><font size="1px">1</font></div></th>
	<th><div align="center"><font size="1px">2</font></div></th>
	<th><div align="center"><font size="1px">3</font></div></th>
	<th><div align="center"><font size="1px">4</font></div></th>
	<th><div align="center"><font size="1px">5</font></div></th>
	<th><div align="center"><font size="1px">6</font></div></th>
	<th><div align="center"><font size="1px">7</font></div></th>
	<th><div align="center"><font size="1px">8</font></div></th>
	<th><div align="center"><font size="1px">9</font></div></th>
	<th><div align="center"><font size="1px">10</font></div></th>
	<th><div align="center"><font size="1px">11</font></div></th>
  </tr>
  </thead>
  <tbody>
  <?php
	$no = 0;
	$kuery = "SELECT * FROM data_kenaikanpangkat where tanggal between '$tanggaldari' and '$tanggalsampai' and status='2' ORDER BY id DESC";
	$qsurat = mysql_query($kuery);
	
	while($rsurat=mysql_fetch_array($qsurat))
	{ 
	$no++;
	$tanggal = tgl_indo($rsurat['tanggal']);
	$kesetiaan = $rsurat['kesetiaan'];
	$prestasi = $rsurat['prestasi'];
	$tanggungjawab = $rsurat['tanggungjawab'];
	$ketaatan = $rsurat['ketaatan'];
	$kejujuran = $rsurat['kejujuran'];
	$kerjasama = $rsurat['kerjasama'];
	$prakarsa = $rsurat['prakarsa'];
	$kepemimpinan = $rsurat['kepemimpinan'];
	
	$nilaikerja = ($kesetiaan + $prestasi + $tanggungjawab + $ketaatan + $kejujuran + $kerjasama + $prakarsa + $kepemimpinan)/8;
	if($nilaikerja >= 91)
		{ $penilaian = "<font color='#05B905'> Amat Baik - ".$nilaikerja."</font>" ; }
		else if($nilaikerja >= 76)
		{ $penilaian = "<font color='#05B905'> Baik - ".$nilaikerja."</font>" ; }
		else if($nilaikerja >= 61)
		{ $penilaian = "<font color='#FFD000'> Cukup - ".$nilaikerja."</font>" ; }
		else if($nilaikerja >= 51)
		{ $penilaian = "<font color='#FFD000'> Sedang - ".$nilaikerja."</font>" ; }
		else if($nilaikerja <= 50)
		{ $penilaian = "<font color='#FF0000'> Kurang - ".$nilaikerja."</font>" ; }
						
		
	echo"
	  <tr class='gradeX'>
		  <td><div align='center'>$no</div></td>
		  <td><center>$rsurat[idpangkat]</center></td>
		  <td><center>$rsurat[nip]</center></td>
		  <td><center>$rsurat[user]</center></td>
		  <td><center>$tanggal]</center></td>
		  <td><center>$rsurat[gollama]</center></td>
		  <td><center>$rsurat[golbaru]</center></td>
		  <td><center>$rsurat[pangkatlama]</center></td>
		  <td><center>$rsurat[pangkatbaru]</center></td>
		  <td><center>$penilaian</center></td>
		  <td><center>$rsurat[keterangan]</center></td>
		  ";
	  echo"</tr>";									  
	  }
	  ?>					  
	</tbody>                                     
</table>				
<br />
</td>
</tr>
</table>
          </section>
</section>
<p>&nbsp;</p>
</body>
</html>
