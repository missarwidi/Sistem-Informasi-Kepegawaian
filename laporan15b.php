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
		  <div align="center">	  LAPORAN PENGAJUAN PENSIUN
		  <br />
		  YANG BERSTATUS DI TOLAK
	  <br />
	  Periode : <?php echo"$tanggaldari_indo Sampai $tanggalsampai_indo"; ?>	  </div><br /></th>
  </tr>
  </thead>
  </table>									  
  <table width="1000" border="1" cellpadding="8" cellspacing="8" id="example1"  align="center" >
  <thead>
  <tr>
	<th width="3%"><div align="center">No</div>      <div align="center"></div></th>
	<th width="8%"><div align="center">ID Pengajuan </div></th>
	<th width="8%"><div align="center">Nip</div>      
	  <div align="center"></div></th>
	<th width="10%"><div align="center">Nama</div>	  </th>
	<th width="6%"><div align="center">Tanggal Pengajuan </div></th>
	<th width="4%"><div align="center">Tanggal Mulai Tanggal (TMT) </div>	  </th>
	<th width="4%"><div align="center">Golongan</div></th>
	<th width="5%"><div align="center">Jabatan</div>      </th>
	<th width="5%"><div align="center">Unit Kerja </div></th>
	<th width="12%"><div align="center">Keterangan</div>      <div align="center"></div></th>
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
  </tr>
  </thead>
  <tbody>
  <?php
	$no = 0;
	$kuery = "SELECT * FROM datapensiun where tanggal between '$tanggaldari' and '$tanggalsampai' and status='0' ORDER BY id DESC";
	$qsurat = mysql_query($kuery);
	
	while($rsurat=mysql_fetch_array($qsurat))
	{ 
	$no++;	
	$tanggal = tgl_indo($rsurat['tanggal']);
	$tmt = tgl_indo($rsurat['tmt']);
	echo"
	  <tr class='gradeX'>
		  <td><div align='center'>$no</div></td>
		  <td><center>$rsurat[idpensiun]</center></td>
		  <td><center>$rsurat[nip]</center></td>
		  <td><center>$rsurat[nama]</center></td>
		  <td><center>$tanggal]</center></td>
		  <td><center>$tmt</center></td>
		  <td><center>$rsurat[gol]</center></td>
		  <td><center>$rsurat[jabatan]</center></td>
		  <td><center>$rsurat[unitkerja]</center></td>
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
</table></section></section>
<p>&nbsp;</p>
</body>
</html>
