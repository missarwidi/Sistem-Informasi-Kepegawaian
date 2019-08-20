<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/laporan.php";
     
	 switch($_GET[act]){

// Tampil konten
      default:     
?>

<!--main content start-->
	  <?php
	  $tgl = date("m/d/Y");
	  
	  ?>
	  <form action="<?php echo"$aksi?act=laporan"; ?>" role="form" method="post" enctype="multipart/form-data">
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Laporan Penerimaan & Pengeluaran Basan Baran
                          </header>                          
                      </section>
                  </div>                 
              </div>
              <div class="row">  
                  <div class="col-lg-12">
                      <section class="panel">                          
						  <div class="panel-body">
                              <div class="form-horizontal">							 
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Bentuk Laporan</label>
                                      <div class="col-lg-4">
									  <select name="rLaporan" class="form-control input-sm m-bot15">
									 <option value="14A">Laporan Pengajuan Kenaikan Pangkat - Status Di Setujui</option>
									 <option value="14B">Laporan Pengajuan Kenaikan Pangkat - Status Di Tolak</option>
									 <option value="15A">Laporan Pengajuan Pensiun - Status Di Setujui</option>
									 <option value="15B">Laporan Pengajuan Kenaikan Pangkat - Status Di Tolak</option>
									 <!--<option value="15C">Laporan Penilaian Kinerja Pegawai DP3</option>-->
									 </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                  <label class="control-label col-md-3">Jangka Waktu</label>
                                  <div class="col-md-4">
                                      <div class="input-group input-large" data-date="2013/05/13" data-date-format="yyyy/mm/dd">
                                          <input type="text" class="form-control dpd1" name="tanggaldari">
                                          <span class="input-group-addon">Sampai</span>
                                          <input type="text" class="form-control dpd2" name="tanggalsampai">
                                      </div>
                                      <span class="help-block">Pilih Jangka Waktu</span>
                                  </div>
                              </div>
							                    </div>
                      </section>
                  </div>                  
              </div> 			             
				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">                          
                          <div class="panel-body">                              
                                  <div class="col-lg-12">
									  <div class="form-group">   
										  <button type="submit" class="button-next btn btn-success"> Lihat Laporan </button>
									  </div>
                                  </div>                                                        
                          </div>
                      </section>
                  </div>
				</div>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section></form>
      <!--main content end-->
      <!--footer start-->
      <?php include"footer.php"; ?>
      <!--footer end-->
  </section>

       <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
  
    <!--this page plugins-->

  <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <!--this page  script only-->
    <script src="js/advanced-form-components.js"></script>

  </body>
</html>

<?php break;  ?>
<?php case "laporan14a": ?>

<!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Laporan Per Periode Pengajuan Kenaikan Pangkat - <strong>Status Di Setujui</strong>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
								<?php
								
									$tanggaldari = tgl_ymd($_GET['from']);
									$tanggalsampai =  tgl_ymd($_GET['to']);
									
									$tanggaldari_indo = tgl_indo($tanggaldari);
									$tanggalsampai_indo =  tgl_indo($tanggalsampai);
									
									$gudang =  $_GET['gudang'];
									$rbb =  $_GET['rbb'];
									$golongan =  $_GET['golongan'];
								
								  $action = $_GET['action'];
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "hapus")
								  { echo"<p><center><font color='#009900'>Berhasil Dihapus.</font></center></p>"; }
								  if($action == "error")
								  { echo"<p><center><font color='#FF0000'>Gagal Di Proses. Silahkan Ulangi Kembali</font></center></p>"; }
								  
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
                                </div>
                          </div>
                      </section>
                  </div>
				</div>
				<div class=" add-task-row">
				  <a class="btn btn-danger btn-sm pull-left" href="?r=laporan"><< Kembali</a>
				  <a class="btn btn-danger btn-sm pull-right" href="<?php echo"pdf/laporan14a.php?act=laporan14a&from=".$tanggaldari."&to=$tanggalsampai"; ?>" target="_blank">Save As PDF</a>
				  <a class="btn-sm pull-right" href="#"> </a>
				  <a class="btn btn-success btn-sm pull-right" href="<?php echo"excell/laporan14a.php?act=laporan14a&from=".$tanggaldari."&to=$tanggalsampai"; ?>" target="_blank">Save As Excell</a>
				  <a class="btn-sm pull-right" href="#"> </a>
				  <a class="btn btn-warning btn-sm pull-right" href="<?php echo"laporan14a.php?act=laporan14a&from=".$tanggaldari."&to=$tanggalsampai"; ?>" target="_blank">Cetak Laporan >></a>
                </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <?php include"footer.php"; ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page only-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 0, "asc" ]]
              } );
          } );
      </script>
  </body>
</html>

<?php break;  ?>
<?php case "laporan14b": ?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Laporan Per Periode Pengajuan Kenaikan Pangkat - <strong>Status Di Tolak</strong>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
								<?php
								
									$tanggaldari = tgl_ymd($_GET['from']);
									$tanggalsampai =  tgl_ymd($_GET['to']);
									
									$tanggaldari_indo = tgl_indo($tanggaldari);
									$tanggalsampai_indo =  tgl_indo($tanggalsampai);
									
									$gudang =  $_GET['gudang'];
									$rbb =  $_GET['rbb'];
									$golongan =  $_GET['golongan'];
								
								  $action = $_GET['action'];
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "hapus")
								  { echo"<p><center><font color='#009900'>Berhasil Dihapus.</font></center></p>"; }
								  if($action == "error")
								  { echo"<p><center><font color='#FF0000'>Gagal Di Proses. Silahkan Ulangi Kembali</font></center></p>"; }
								  
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
		  YANG BERSTATUS DI TOLAK
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
	$kuery = "SELECT * FROM data_kenaikanpangkat where tanggal between '$tanggaldari' and '$tanggalsampai' and status='0' ORDER BY id DESC";
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
                                </div>
                          </div>
                      </section>
                  </div>
				</div>
				<div class=" add-task-row">
				  <a class="btn btn-danger btn-sm pull-left" href="?r=laporan"><< Kembali</a>
				  <a class="btn btn-danger btn-sm pull-right" href="<?php echo"pdf/laporan14b.php?act=laporan14b&from=".$tanggaldari."&to=$tanggalsampai"; ?>" target="_blank">Save As PDF</a>
				  <a class="btn-sm pull-right" href="#"> </a>
				  <a class="btn btn-success btn-sm pull-right" href="<?php echo"excell/laporan14b.php?act=laporan14b&from=".$tanggaldari."&to=$tanggalsampai"; ?>" target="_blank">Save As Excell</a>
				  <a class="btn-sm pull-right" href="#"> </a>
				  <a class="btn btn-warning btn-sm pull-right" href="<?php echo"laporan14b.php?act=laporan14b&from=".$tanggaldari."&to=$tanggalsampai"; ?>" target="_blank">Cetak Laporan >></a>
                </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <?php include"footer.php"; ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page only-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 0, "asc" ]]
              } );
          } );
      </script>
  </body>
</html>
<?php break;  ?>

<?php case "laporan15a": ?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Laporan Per Periode Pengajuan Pensiun - <strong>Status Di Setujui</strong>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
								<?php
								
									$tanggaldari = tgl_ymd($_GET['from']);
									$tanggalsampai =  tgl_ymd($_GET['to']);
									
									$tanggaldari_indo = tgl_indo($tanggaldari);
									$tanggalsampai_indo =  tgl_indo($tanggalsampai);
																	
								  $action = $_GET['action'];
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "hapus")
								  { echo"<p><center><font color='#009900'>Berhasil Dihapus.</font></center></p>"; }
								  if($action == "error")
								  { echo"<p><center><font color='#FF0000'>Gagal Di Proses. Silahkan Ulangi Kembali</font></center></p>"; }
								  
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
		  YANG BERSTATUS DI SETUJUI
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
	$kuery = "SELECT * FROM datapensiun where tanggal between '$tanggaldari' and '$tanggalsampai' and status='2' ORDER BY id DESC";
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
</table>					  
                                </div>
                          </div>
                      </section>
                  </div>
				</div>
				<div class=" add-task-row">
				  <a class="btn btn-danger btn-sm pull-left" href="?r=laporan"><< Kembali</a>
				  <a class="btn btn-danger btn-sm pull-right" href="<?php echo"pdf/laporan15a.php?act=laporan15a&from=".$tanggaldari."&to=$tanggalsampai"; ?>" target="_blank">Save As PDF</a>
				  <a class="btn-sm pull-right" href="#"> </a>
				  <a class="btn btn-success btn-sm pull-right" href="<?php echo"excell/laporan15a.php?act=laporan15a&from=".$tanggaldari."&to=$tanggalsampai"; ?>" target="_blank">Save As Excell</a>
				  <a class="btn-sm pull-right" href="#"> </a>
				  <a class="btn btn-warning btn-sm pull-right" href="<?php echo"laporan15a.php?act=laporan15a&from=".$tanggaldari."&to=$tanggalsampai"; ?>" target="_blank">Cetak Laporan >></a>
                </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <?php include"footer.php"; ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page only-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 0, "asc" ]]
              } );
          } );
      </script>
  </body>
</html>

<?php break;  ?>

<?php case "laporan15b": ?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Laporan Per Periode Pengajuan Pensiun - <strong>Status Di Tolak</strong>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
								<?php
								
									$tanggaldari = tgl_ymd($_GET['from']);
									$tanggalsampai =  tgl_ymd($_GET['to']);
									
									$tanggaldari_indo = tgl_indo($tanggaldari);
									$tanggalsampai_indo =  tgl_indo($tanggalsampai);
																	
								  $action = $_GET['action'];
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "hapus")
								  { echo"<p><center><font color='#009900'>Berhasil Dihapus.</font></center></p>"; }
								  if($action == "error")
								  { echo"<p><center><font color='#FF0000'>Gagal Di Proses. Silahkan Ulangi Kembali</font></center></p>"; }
								  
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
		  <div align="center">	  LAPORAN PENGAJUAN PENSIUN
		  <br />
		  YANG BERSTATUS DI TOLAK
	  <br />
	  Periode : <?php echo"$tanggaldari_indo Sampai $tanggalsampai_indo"; ?>	  </div><br /></th>
  </tr>
  </thead>
  </table>									  
  <table width="100%" border="1" cellpadding="8" cellspacing="8" id="example1"  align="center" >
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
</table>					  
                                </div>
                          </div>
                      </section>
                  </div>
				</div>
				<div class=" add-task-row">
				  <a class="btn btn-danger btn-sm pull-left" href="?r=laporan"><< Kembali</a>
				  <a class="btn btn-danger btn-sm pull-right" href="<?php echo"pdf/laporan15b.php?act=laporan15b&from=".$tanggaldari."&to=$tanggalsampai"; ?>" target="_blank">Save As PDF</a>
				  <a class="btn-sm pull-right" href="#"> </a>
				  <a class="btn btn-success btn-sm pull-right" href="<?php echo"excell/laporan15b.php?act=laporan15b&from=".$tanggaldari."&to=$tanggalsampai"; ?>" target="_blank">Save As Excell</a>
				  <a class="btn-sm pull-right" href="#"> </a>
				  <a class="btn btn-warning btn-sm pull-right" href="<?php echo"laporan15b.php?act=laporan15b&from=".$tanggaldari."&to=$tanggalsampai"; ?>" target="_blank">Cetak Laporan >></a>
                </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <?php include"footer.php"; ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page only-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 0, "asc" ]]
              } );
          } );
      </script>
  </body>
</html>

<?php break;  ?>

<?php case "duk": ?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Laporan Daftar Urut Kepangkatan
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
								<?php
																	
								  $action = $_GET['action'];
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "hapus")
								  { echo"<p><center><font color='#009900'>Berhasil Dihapus.</font></center></p>"; }
								  if($action == "error")
								  { echo"<p><center><font color='#FF0000'>Gagal Di Proses. Silahkan Ulangi Kembali</font></center></p>"; }
								  
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
</table>					  
                                </div>
                          </div>
                      </section>
                  </div>
				</div>
				<div class=" add-task-row">
				  <a class="btn btn-danger btn-sm pull-left" href="?r=laporan"><< Kembali</a>
				  <a class="btn btn-danger btn-sm pull-right" href="<?php echo"pdf/duk.php?act=duk"; ?>" target="_blank">Save As PDF</a>
				  <a class="btn-sm pull-right" href="#"> </a>
				  <a class="btn btn-success btn-sm pull-right" href="<?php echo"excell/duk.php?act=duk"; ?>" target="_blank">Save As Excell</a>
				  <a class="btn-sm pull-right" href="#"> </a>
				  <a class="btn btn-warning btn-sm pull-right" href="<?php echo"duk.php?act=duk"; ?>" target="_blank">Cetak Laporan >></a>
                </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <?php include"footer.php"; ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page only-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 0, "asc" ]]
              } );
          } );
      </script>
  </body>
</html>

<?php break;  ?>

	 <?php } ?>