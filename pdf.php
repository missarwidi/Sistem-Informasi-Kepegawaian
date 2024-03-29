<?php
 // Define relative path from this script to mPDF
 $nama_dokumen='PDF With MPDF'; //Beri nama file PDF hasil.
include("p60/mpdf.php");
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 
?>
<h2>Data Pegawai</h2>
<table width="100%" border="1" cellpadding="5" cellspacing="0">
  <tbody>
    <tr>
      <th width="20">No. </th>
      <th>NIP/NIK</th>
      <th>Nama</th>
      <th>Tempat, Tanggal Lahir</th>
      <th>Pangkat <br>
        / Golongan</th>
      <th>Jabatan Struktural <br>
        / Fungsional</th>
    </tr>
    <tr valign="top">
      <td>1</td>
      <td>NIP. 19571120 197901 1 003</td>
      <td>H. M. Darmadi A.</td>
      <td>Banjarmasin, 01 March 1950</td>
      <td>Penata Muda / (III/a)</td>
      <td>kepala sub bagian umum dan kepegawaian</td>
    </tr>
    <tr valign="top">
      <td>2</td>
      <td>NIP. 19670318 198903 1 008</td>
      <td>Rudiansyah</td>
      <td>Banjarmasin, 01 January 1948</td>
      <td>Pengatur Tingkat 1 / (II/d)</td>
      <td>kepala dinas</td>
    </tr>
    <tr valign="top">
      <td>3</td>
      <td>NIP. 19580806 198503 1 018</td>
      <td>Drs. Juhriansyah. S.Sos. M. AP</td>
      <td>Banjarmasin, 06 May 1948</td>
      <td>Pengatur Tingkat 1 / (II/d)</td>
      <td>kepala dinas</td>
    </tr>
    <tr valign="top">
      <td>4</td>
      <td>NIP. 19631127 199303 1 003</td>
      <td>H. Rustamji, SE, M.AP</td>
      <td>Banjarmasin, 27 November 1963</td>
      <td>Pengatur Tingkat 1 / (II/d)</td>
      <td>kepala dinas</td>
    </tr>
    <tr valign="top">
      <td>5</td>
      <td>NIP. 197550613 20003 2 010</td>
      <td>Ermina Zaidah, SE</td>
      <td>Banjarmasin, 01 January 1948</td>
      <td>Pengatur Tingkat 1 / (II/d)</td>
      <td>kepala dinas</td>
    </tr>
  </tbody>
</table>
 
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>
