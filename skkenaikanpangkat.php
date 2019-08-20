<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="img/favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Surat Keputusan Kenaikan Pangkat</title>
</head>

<body>
<?php 
	include"config/koneksi.php";
	include"config/fungsi_indotgl.php";
	include"config/fungsi_ymd.php";
	include"config/fungsi_datediff.php";
	include"config/fungsi_rupiah.php";
	
	$tglskrg = date('dMy'); 
	$nomorsurat = "SULSEL/".date('m')."-".date('Y'); 
	$idpangkat = $_GET['idpangkat'];
	
	$kuery = "SELECT k.*, p.tempat_lahir tempat_lahir, p.tanggal_lahir tanggal_lahir, p.tempat_tinggal tempat_tinggal 
			FROM data_kenaikanpangkat k, peg_datapribadi p where k.idpangkat='$idpangkat' and k.status='2' 
			and k.nip=p.nip ORDER BY k.id DESC";
	$qsurat = mysql_query($kuery);
	$rsurat = mysql_fetch_array($qsurat);
		
	$tgl2 = $rsurat['tmtlama'];
  	$tgl1 = $rsurat['tanggal'];
		
  	$a = datediff($tgl1, $tgl2);
  	$tahun = $a['years'];
  	$tbulan = $a['months'];
  	if($tahun==0){$tahun=1;}
	
	$nama = strtoupper($rsurat['user']);
	$nip = $rsurat['nip'];
	$gollama = $rsurat['gollama'];
	$tmtlama = $rsurat['tmtlama'];
	$pangkatlama = strtoupper($rsurat['pangkatlama']);
	
	$golbaru = $rsurat['golbaru'];
	$pangkatbaru = strtoupper($rsurat['pangkatbaru']);

	$alamat = strtoupper($rsurat['tempat_tinggal']);	
	$tempat_lahir = strtoupper($rsurat['tempat_lahir']);
	$tanggal_lahir = tgl_indo($rsurat['tanggal_lahir']);
	$tanggal_pengajuan = tgl_indo($rsurat['tanggal']);
	$gaji = "Rp. ".format_rupiah(masakerja($tahun,$golbaru));
	
	$u = datediff($rsurat['tanggal'], $rsurat['tanggal_lahir']);
	$umur = $u['years'];
	
	
?>
<table width="1000" align="center" cellpadding="0" cellspacing="0">
  <col width="174" />
  <col width="37" />
  <col width="43" />
  <col width="473" />
  <tr height="25">
    <td colspan="4" height="25"><div align="center"><img src="img/surat/kop.png" width="88" height="105" /></div></td>
  </tr>
  <tr height="25">
    <td colspan="4" height="25"><div align="center"><strong>KEPUTUSAN DIREKSI DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN</strong></div></td>
  </tr>
  <tr height="25">
    <td colspan="4" height="25"><div align="center"><strong>Nomor :&nbsp;&nbsp;&nbsp;&nbsp;/SK-PJ/<?php echo"$nomorsurat"; ?></strong></div></td>
  </tr>
  
  <tr height="21">
    <td colspan="4" height="21"><div align="center"><strong>Tentang</strong></div></td>
  </tr>
  <tr height="20">
    <td width="158" height="20"></td>
    <td width="67"></td>
    <td width="46"></td>
    <td width="819"></td>
  </tr>
  <tr height="73">
    <td colspan="4" height="26"><div align="center"><strong>KENAIKAN PANGKAT DAN JABATAN  PEGAWAI DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN </strong></div></td>
  </tr>
  <tr height="20">
    <td height="20"><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td width="819"><div align="center"></div></td>
  </tr>
  <tr height="21">
    <td colspan="4" height="21"><div align="center">
      <p><strong>DENGAN RAHMAT TUHAN YANG MAHA ESA<br />
      </strong><strong>KEPALA DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN</strong></p>
      </div></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"></td>
  </tr>
  <tr height="20">
    <td height="20"><strong>MENIMBANG</strong></td>
    <td><strong>:</strong></td>
    <td><strong>a.</strong></td>
    <td rowspan="2" width="819">bahwa Pegawai Negeri Sipil yang namanya tersebut dalam keputusan ini, memenuhi syarat dan dipandang cakap untuk diangkat dalam pangkat setingkat lebih tinggi</td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"></td>
  </tr>
  <tr height="20">
    <td height="20"><strong>MENGINGAT</strong></td>
    <td><strong>:</strong></td>
    <td><strong>1.</strong></td>
    <td width="819">Pasal 4 Ayat (1) Undang &ndash; Undang Dasar Negara Republik Indonesia Tahun 1945</td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td><strong>2.</strong></td>
    <td width="819">Peraturan Pemerintah Nomor 99 Tahun 2000 tentang Kenaikan Pangkat Pegawai Negeri Sipil sebagaimana telah diubang dengan Peraturan Pemerintah Nomor 12 Tahun 2002</td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td><strong>3.</strong></td>
    <td rowspan="2">Keputusan Presiden Nomor 73 Tahun 2015 tentang pemberian kuasa kepada Kepala Dinas Pendidikan untuk atas nama Presiden menetapkan kenaikan pangkat, pemberhentian, dan pemberian pensiun bagi pegawai negeri sipil yang berpangkat Pembina Utama Muda Golongan Ruang IV/c ke Atas</td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"></td>
  </tr>
  <tr height="20">
    <td height="20"><strong>MEMPERHATIKAN</strong></td>
    <td><strong>:</strong></td>
    <td>&nbsp;</td>
    <td width="819">Pertimbangan Teknis Kepala Dinas Pendidikan Provinsi Sulawesi Selatan Nomor 207 Tanggal 20 Mei 2013</td>
  </tr>
  
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"></td>
  </tr>
  <tr height="21">
    <td colspan="4" height="21"><div align="center"><strong>MEMUTUSKAN</strong></div></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"></td>
  </tr>
  <tr height="20">
    <td height="20"><strong>MENETAPKAN</strong></td>
    <td><strong>:</strong></td>
    <td></td>
    <td width="819">&nbsp;</td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"></td>
  </tr>
  <tr height="20">
    <td height="20"><strong>PERTAMA</strong></td>
    <td><strong>:</strong></td>
    <td></td>
    <td width="819">Pegawai Negeri Sipil / Pegawai Dinas Pendidikan Provinsi Sulawesi Selatan tersebut di bawah ini : </td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td> 1. Nama : <?php echo"<b>$nama</b>"; ?></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td>2. Tempat, Tanggal Lahir : <?php echo"<b>$tempat_lahir, $tanggal_lahir</b>"; ?></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td>3. Nip : <?php echo"<b>$nip</b>"; ?></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
	<?php
	 $qpendidikan=mysql_query("SELECT * FROM peg_pendidikan p, master_pendidikan m where p.nip ='$nip' and
		  					  p.tingkatan=m.tingkatan ORDER BY m.id DESC limit 0,1 ");
   	 while($rpendidikan=mysql_fetch_array($qpendidikan))
	 { ?>
    <td>4. Pendidikan : <?php echo"<b>$rpendidikan[tingkatan] - $rpendidikan[nama_sekolah]</b>"; ?></td>
	 <?php } ?>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td>5. Golongan Lama : <?php echo"<b>$gollama</b>"; ?></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td>6. Jabatan Lama : <?php echo"<b>$pangkatlama</b>"; ?></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td>terhitung mulai tanggal dinaikkan pangkatnya menjadi golongan <?php echo"<b>$golbaru</b>"; ?> dengan jabatan <?php echo"<b>$pangkatbaru</b>"; ?> dengan masa kerja golongan 4 Tahun, diberikan gaji pokok sebesar <?php echo"<b>$gaji</b>"; ?> dan penghasilan lain yang sah berdasarkan peraturan perundang-undangan</td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"></td>
  </tr>
  <tr height="20">
    <td height="20"><strong>KEDUA</strong></td>
    <td><strong>:</strong></td>
    <td></td>
    <td width="819">Keputusan Kepala Dinas ini mulai berlaku pada tanggal ditetapkan.<br />
    <strong>ASLI</strong>&nbsp;Keputusan ini diberikan kepada yang berkepentingan untuk diketahui dan dipergunakan sebagaimana mestinya</td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td><div align="center"><strong>Ditetapkan di : Makassar <br />
    </strong></div></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"><div align="center"><strong>Pada tanggal&nbsp; : <?php echo"$tanggal_pengajuan"; ?></strong></div></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"> <div align="center"><strong>a.n. PRESIDEN REPUBLIK INDONESIA</strong></div></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"><div align="center"><strong>Kepala Dinas Pendidikan Provinsi Sulawesi Selatan,</strong></div></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"><div align="center"><strong>_____________________________</strong></div></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"></td>
  </tr>
</table>
</body>
</html>
