
<?php

	require_once("config/authentication_users.php");
    include"config/koneksi.php";
	include"config/fungsi_indotgl.php";
		  
    $no = $_GET['surat'];
	$id = $_GET['id'];
	$qsurat=mysql_query("SELECT * FROM v_barangbukti ORDER BY no_registrasi DESC ");

?>
<?php
 // Define relative path from this script to mPDF
 $nama_dokumen='PDF With MPDF'; //Beri nama file PDF hasil.
include("p60/mpdf.php");
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 
?>
<table width="1000" height="125" border="0" align="center">
  <tr>
    <td width="85" height="80"><center><img src="../img/surat/kop.png" width="81" height="90" /></center></td>
    <td width="763"><center><div align="center">KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA REPUBLIK  INDONESIA<br />
      KANTOR WILAYAH  SULAWESI SELATAN<br />
  <strong>RUMAH  PENYIMPANAN BENDA SITAAN NEGARA KELAS I MAKASSAR</strong><br />
    Jl. Rutan No. 2.  Telp. (0411) 889744 &ndash; 889745</div></center></td>
    <td width="122">&nbsp;</td>
  </tr>
  <tr>
    <td height="4"  colspan="3"><hr /></td>
  </tr>
  <tr>
    <td height="21"  colspan="3"><center><p align="center"><strong><em><u>LAMPIRAN (B.A 1, B.A 2) </u></em></strong><strong><u>:&nbsp; DAFTAR BARANG BUKTI :</u></strong></p></center></td>
  </tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">
<br />
<table width="1000" border="1" align="center">
  <tr>
    <th>No</th>
    <th>No Register</th>
    <th>Nama Basan / Baran</th>
    <th>No. Polisi</th>
    <th>Jumlah</th>
    <th>Tersangka</th>
    <th>JPU</th>
  </tr>
  <?php
    $no=1;
  	while($rsurat=mysql_fetch_array($qsurat))
	{
	
	  $tgl_surat = tgl_indo($rsurat['tanggal_surat']);
	  $nama_peneliti = $rsurat['nama_peneliti'];
	  $nip_peneliti = $rsurat['nip_peneliti'];
	  
  echo"
  <tr>
    <td width='5%'><center><div class='style1'>$no</div></center></td>
    <td width='18%'><center><div class='style1'>$rsurat[no_registrasi]</div></td>
    <td width='30%'><div class='style1'>$rsurat[nama_basan]</div></center></td>
    <td width='15%'><center><div class='style1'>$rsurat[no_pol]</div></center></td>
    <td width='15%'><center><div class='style1'>$rsurat[jumlah]</div></center></td>
    <td width='20%'><center><div class='style1'>$rsurat[tersangka]</div></center></td>
    <td width='34%'><center><div class='style1'>$rsurat[jpu]</div></center></td>
  </tr>";
  $no++;
  }
  ?>
  
</table></td></tr></table>
<br />
<table width="1000" border="0" align="center">
  <tr>
    <td width="194">&nbsp;</td>
    <td width="303">&nbsp;</td>
    <td width="46">&nbsp;</td>
    <td colspan="3"><center><div align="center">Makassar , <?php echo"$tgl_surat"; ?><br />
    Petugas Peneliti / Tenaga Ahli</div></center></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="236">&nbsp;</td>
    <td width="199">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><center></strong><div align="center"><strong><?php echo"$nama_peneliti"; ?></strong><br />
    NIP. <?php echo"$nip_peneliti"; ?></div></strong></center></td>
  </tr>
   <?php
  $qpimpinan=mysql_query("SELECT * FROM pimpinan where id='1' ORDER BY id ASC ");
  $rpimpinan=mysql_fetch_array($qpimpinan);
	?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><center><div align="center">Mengetahui<br />
      Kepala</div></center></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><center><p align="center"><strong><?php echo"$rpimpinan[nama]"; ?><br />
    </strong>NIP. <?php echo"$rpimpinan[nip]"; ?></p></center>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>


<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf = new mPDF('utf-8', 'A4', 0, '', 10, 10, 5, 1, 1, 1, '');
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');

exit;
?> 