<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Daftar Urut Kepangkatan</title>
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
	include"config/fungsi_datediff.php";
								
?>

 <table width="100%" align="center">
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
		  <div align="center">	  LAPORAN DAFTAR URUT KEPANGKATAN (DUK)
		  <br />
		  PEGAWAI NEGERI SIPIL <br />
DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN </div>
		  <br /></th>
  </tr>
  </thead>
  </table>									  
  <table width="100%" border="1" cellpadding="8" cellspacing="8" id="example1"  align="center" >
  <thead>
  <tr>
	<th width="3%" rowspan="2"><div align="center">No</div>      <div align="center"></div></th>
	<th width="8%" rowspan="2"><div align="center">Nip</div></th>
	<th width="8%" rowspan="2"><div align="center">Nama</div>      
	  <div align="center"></div></th>
	<th width="10%" rowspan="2"><div align="center">Golongan</div>	  </th>
	<th width="6%" rowspan="2"><div align="center">TMT</div></th>
	<th colspan="2"><div align="center">Jabatan</div>	  </th>
	<th colspan="2"><div align="center">Masa Kerja </div>	  </th>
	<th colspan="3"><div align="center">Pendidikan</div></th>
	<th rowspan="2"><div align="center">Tanggal Lahir </div>      <div align="center"></div></th>
  </tr>
  <tr>
    <th width="4%"><div align="center">Nama</div></th>
    <th width="4%"><div align="center">TMT</div></th>
    <th width="5%"><div align="center">Tahun</div></th>
    <th width="5%"><div align="center">Bulan</div></th>
    <th width="12%">Nama</th>
    <th width="12%">Tahun Lulus </th>
    <th width="12%">Jenjang</th>
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
	<th><div align="center"><font size="1px">12</font></div></th>
	<th><div align="center"><font size="1px">13</font></div></th>
  </tr>
  </thead>
  <tbody>
  <?php
	$no = 0;
	$kuery = "SELECT * FROM view_sortgolongan ";
	$qsurat = mysql_query($kuery);
	
	while($rsurat=mysql_fetch_array($qsurat))
	{ 
	$no++;	
	$tanggal_lahir = tgl_indo($rsurat['tanggal_lahir']);
	$tmtlama = tgl_indo($rsurat['tmt']);
	$tmtbaru = tgl_indo($rsurat['tmtbaru']);
		
																
  	$tgl2 = $rsurat['tmt'];
  	$tgl1 = date("Y-m-d");
		
  	$a = datediff($tgl1, $tgl2);
  	$tahun = $a['years'];
	$bulan = $a['months'];

	echo"
	  <tr class='gradeX'>
		  <td><div align='center'>$no</div></td>
		  <td><center>$rsurat[nip]</center></td>
		  <td><center>$rsurat[nama]</center></td>
		  <td><center>$rsurat[golbaru]</center></td>
		  <td><center>$tmtlama</center></td>
		  <td><center>$rsurat[jabatanbaru]</center></td>
		  <td><center>$tmtbaru</center></td>
		  <td><center>$tahun</center></td>
		  <td><center>$bulan</center></td>";
		  $qpendidikan=mysql_query("SELECT * FROM peg_pendidikan p, master_pendidikan m where p.nip ='$rsurat[nip]' and
		  							p.tingkatan=m.tingkatan ORDER BY m.id DESC limit 0,1 ");
		  while($rpendidikan=mysql_fetch_array($qpendidikan))
		  {
		  $tanggal_selesai = tgl_indo($rpendidikan['tanggal_selesai']);
		  echo"
		  <td><center>$rpendidikan[nama_sekolah]</center></td>
		  <td><center>$tanggal_selesai</center></td>
		  <td><center>$rpendidikan[tingkatan]</center></td>";
		  }
		  echo"<td><center>$tanggal_lahir</center></td>
		  ";
	  echo"</tr>";									  
	  }
	  ?>					  
	</tbody>                                     
</table>				
<br />
</td>
</tr>
</table>	</section></section>
<p>&nbsp;</p>
</body>
</html>
