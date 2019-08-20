<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="img/favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Surat Keputusan Pemberhentian Dengan Horman ( Pensiun ) Pegawai</title>
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
	$idpensiun = $_GET['idpensiun'];
	
	$kuery = "SELECT * FROM datapensiun where idpensiun='$idpensiun' and status='2' ORDER BY id DESC";
	$qsurat = mysql_query($kuery);
	$rsurat = mysql_fetch_array($qsurat);
		
	$tgl2 = $rsurat['tmt'];
  	$tgl1 = $rsurat['tanggal'];
		
  	$a = datediff($tgl1, $tgl2);
  	$tahun = $a['years'];
  	$tbulan = $a['months'];
  	if($tahun==0){$tahun=1;}
	
	$nama = strtoupper($rsurat['nama']);
	$nip = $rsurat['nip'];
	$gol = $rsurat['gol'];
	$jabatan = strtoupper($rsurat['jabatan']);	
	$alamat = strtoupper($rsurat['tempat_tinggal']);	
	$tempat_lahir = strtoupper($rsurat['tempat_lahir']);
	$tanggal_lahir = tgl_indo($rsurat['tanggal_lahir']);
	$tanggal_pensiun = tgl_indo($rsurat['tanggal']);
	$gaji = "Rp. ".format_rupiah(masakerja($tahun,$gol));
	
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
    <td colspan="4" height="25"><div align="center"><strong>Nomor : KPP/PENSIUN/&nbsp;&nbsp;&nbsp;&nbsp; /<?php echo"$nomorsurat"; ?></strong></div></td>
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
    <td colspan="4" height="73"><div align="center"><strong>PEMBERHENTIAN DENGAN HORMAT DENGAN HAK PENSIUN PEGAWAI DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN ATAS NAMA <?php echo $nama; ?>&nbsp; (NIP. <?php echo $nip; ?> ) JABATAN TERAKHIR <?php echo $jabatan; ?></strong></div></td>
  </tr>
  <tr height="20">
    <td height="20"><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td width="819"><div align="center"></div></td>
  </tr>
  <tr height="21">
    <td colspan="4" height="21"><div align="center"><strong>KEPALA DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN</strong></div></td>
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
    <td rowspan="4" width="819">Bahwa <?php echo "<b>$nama</b>"; ?> tersebut menurut KepMenDikNas.DPB.70/96/9, tanggal 31 Mei 1977,    tentang pengangkatannya sebagai pegawai Dinas Pendidikan Sulawesi Selatan, dilahirkan di <?php echo "<b>$tempat_lahir</b>"; ?> pada tanggal <?php echo "<b>$tanggal_lahir</b>"; ?> dan pada tanggal <?php echo "<b>$tanggal_pensiun</b>"; ?> telah berusia <?php echo "<b>$umur Tahun</b>"; ?> serta menurut bukti-bukti yang sah memiliki masa kerja pensiun sebanyak <?php echo "<b>$tahun Tahun $tbulan Bulan</b>"; ?> sehingga berdasarkan Pasal 29 ayat (1) Keputusan KEPALA Dinas Pendidikan Sulawesi Selatan 1156/2/35/PI.II-1997, berhak menerima pensiun</td>
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
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td><strong>b.</strong></td>
    <td rowspan="2" width="819">Bahwa gaji pokok terakhir yang bersangkutan adalah <?php echo "<b>$gaji</b>"; ?> sesuai Keputusan Kepala Dinas Pendidikan Provinsi Sulawesi Selatan Nomor KP.11/18/4/P.I-1997, tanggal 18 september 1997, tentang  Penyesuaian Gaji Pokok Karyawan atas nama Sdr. <?php echo "<b>$nama Nip. $nip</b>"; ?></td>
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
    <td width="819">Peraturan Pemerintah Nomor 56 Tahun 1991, tanggal 19 Oktober 1991, tentang Bentuk Perusahaan Dinas Pendidikan Provinsi Sulawesi Selatan</td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td><strong>2.</strong></td>
    <td width="819">Peraturan Pemerintah Nomor 70 Tahun 1996, tanggal 04 Desember 1996, tentang Pendidikan </td>
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
    <td><strong>1.</strong></td>
    <td rowspan="2" width="819">Akte Pendirian/Anggaran Dasar Dinas Pendidikan Provinsi Sulawesi Selatan Nomor 1 sebagaimana dimuat dalam Tambahan Berita Negara RI tanggal 1 Nopember 1994 Nomor 872</td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td><strong>2.</strong></td>
    <td width="819">Surat Permohonan berhenti dengan hak pensiun tanggal <?php echo "<b>$tanggal_pensiun</b>"; ?> yang diajukan Sdr. <?php echo "<b>$nama</b>"; ?>    dengan alamat rumah sesudah pensiun : <?php echo "<b>$alamat</b>"; ?> </td>
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
    <td rowspan="2" width="819">KEPUTUSAN KEPALA DINAS    PENDIDIKAN PROVINSI SULAWESI SELATAN TENTANG PEMBERHENTIAN DENGAN HORMAT    DENGAN HAK PENSIUN PEGAWAI DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN ATAS    NAMA SDR. <?php echo "<b>$nama (NIP $nip)</b>"; ?> JABATAN TERAKHIR <?php echo "<b>$jabatan</b>"; ?></td>
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
    <td height="20"><strong>PERTAMA</strong></td>
    <td><strong>:</strong></td>
    <td></td>
    <td rowspan="2" width="819">Terhitung mulai tanggal <?php echo "<b>$tanggal_pensiun</b>"; ?> memberhentikan dengan hormat sebagai pegawai Dinas Pendidikan Kantor Pusat dengan hak pensiun atas nama Sdr. <?php echo "<b>$nama (NIP $nip)</b>"; ?> JABATAN terakhir <?php echo "<b>$jabatan</b>"; ?> karena telah mencapai batas  usia pensiun, dengan ucapan terima kasih atas jasa-jasanya selama bekerja sebagai pegawai perusahaan</td>
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
    <td height="20"><strong>KEDUA</strong></td>
    <td><strong>:</strong></td>
    <td></td>
    <td width="819">Kepada Sdr. <?php echo "<b>$nama (NIP $nip)</b>"; ?> jabatan terakhir <?php echo "<b>$jabatan</b>"; ?> diberikan Pensiun Pokok sebesar <?php echo "<b>$gaji</b>"; ?> perbulan terhitung mulai <?php echo "<b>$tanggal_pensiun</b>"; ?>, dengan alamat <?php echo "<b>$alamat</b>"; ?></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"></td>
  </tr>
  <tr height="20">
    <td height="20"><strong>KETIGA</strong></td>
    <td><strong>:</strong></td>
    <td></td>
    <td width="819">Uang pensiun sebagaimana yang dimaksud dalam Diktum KEDUA Keputusan ini dibayarkan oleh Dana Pensiun (DP4) melalui alamat yang bersangkutan: <?php echo "<b>$alamat</b>"; ?></td>
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
    <td><div align="center"><strong>KEPALA DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN</strong></div></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td width="819"><div align="center"><strong>KEPALA DINAS</strong></div></td>
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
