<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/pengawasan.php";
     
	 switch($_GET[act]){

// Tampil konten
      default:     
?>

<!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
						  <?php						   
                                echo"Daftar Pengawasan Basan Baran";
						  ?>
						  </header>
						  <div class="panel-body">					  
                                <div class="adv-table">
								<?php
								  $action = $_GET['action'];
								  $nomor_surat = $_GET['surat'];
								  if($action == "sukses")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "error")
								  { echo"<p><center><font color='#FF0000'>Gagal Di Proses. Silahkan Ulangi Kembali</font></center></p>"; }								
								  
							echo"<div class='clearfix'>
                              <div class='btn-group'><a href='?r=pengawasan&act=new'>
                                  <button id='editable-sample_new' class='btn green'>
                                      Add New <i class='fa fa-plus'></i>
                                  </button></a>						  
                              </div>                             
                          </div>"; ?>
						  
                          <div class="space15"></div>
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Laporan Bulanan Pengawasan</th>
                                          <th>Tanggal Laporan</th>
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								$no = 0;
								$qsurat = mysql_query("SELECT * FROM pengawasan ORDER BY id DESC");
																
									while($rsurat=mysql_fetch_array($qsurat))
									{ 
								    $no++;
									$tanggal = tgl_indo($rsurat['tanggal']);
									echo"
                                      <tr class='gradeX'>
                                          <td width=10%>$no</td>
                                          <td width=40%>Laporan Bulanan Pengawasan Basan Baran</td>
                                          <td width=20%>$tanggal</td>
                                          <td class='center hidden-phone' width='20%'>
										  <a title='Pengawasan' href='?r=pengawasan&act=update&id=$rsurat[id]'>
										  <button class='btn btn-success btn-xs'><i class='fa fa-edit'> Pengawasan</i></button>
										  </a>"; ?>
										   <a href="<?php echo"$aksi?r=pengawasan&id=$rsurat[id]&act=hapus"; ?>" 
										  onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                                          <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '> Hapus</i></button></a>
										  
									  <?php echo"</td></tr>";									  
									  }
									  ?>
									  
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>No</th>
                                          <th>Laporan Bulanan Pengawasan</th>
                                          <th>Tanggal Laporan</th>
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </tfoot>
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>
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
                  "aaSorting": [[ 0, "ASC" ]]
              } );
          } );
      </script>
  </body>
</html>

<?php break;  ?>

<?php case "new": ?>

<!--main content start-->
	  <?php
	  $tahun = date("Y");
	  $tgl = date("m/d/Y");
	  ?>
	  <form action="<?php echo"$aksi?r=pengawasan&act=new"; ?>" role="form" method="post" enctype="multipart/form-data">
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tambah Laporan Pengawasan Basan Baran
                          </header>
					  </section>
					</div>
				</div>
				<div class="row">
			       <div class="col-lg-12">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Tanggal Laporan Pengawasan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Tanggal Laporan</label>
									  <div class="col-lg-4">
									  <div class="input-group input-large" data-date="2013/07/13" data-date-format="yyyy/mm/dd">
                                      <input type="text" class="form-control dpd1" name="tanggal" value="<?php echo"$tgl"; ?>">
									  </div>
                                      </div>                                  
							     </div>
                              </div>
						  </div>
                      </section>
                  </div>
				  </div>
				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Penerimaan Dan Registrasi
                          </header>
					  </section>
					</div>
				</div>
                <div class="row">
			       <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Uraian
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Surat Pengantar penyerahan Basan dari instansi Penyidik yang ditandatangani oleh pejabat yang bertanggung jawab secara yuridis</label>
                                      <div class="col-lg-3">
                                         <select name="surat_pengantar" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Data Basan yang diserahkan</label>
                                      <div class="col-lg-3">
                                         <select name="data_basan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Surat izin penyitaan dari pengadilan</label>
                                      <div class="col-lg-3">
                                         <select name="surat_izin_penyitaan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Surat perintah penyerahan Basan dari instansi penyidik
</label>
                                      <div class="col-lg-3">
                                         <select name="surat_perintah_penyerahan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Berita acara penyitaan</label>
                                      <div class="col-lg-3">
                                         <select name="ba_penyitaan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">6. Berita acara serah terima</label>
                                      <div class="col-lg-3">
                                         <select name="ba_serah_terima" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">7. Pendokumentasian</label>
                                      <div class="col-lg-3">
                                         <select name="pendokumentasian" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                          </div></div>
                      </section>
                  </div>
                 <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Registrasi
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1.  No. registrasi</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_no" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2.  Golongan, jenis & jumlah basan</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_golongan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Tanggal penerimaan di Rupbasan</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_tgl_penerimaan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Nama tersangka/terdakwa</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_nama_tersangka" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Instansi yang menyerahkan</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_instansi" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">6. Basan yang disimpan diluar Rupbasan</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_basan_luar" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">7. Tanda tangan Kepala Rupbasan pada saat masuk dan keluar Baran</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_tanda_tangan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                          </div></div>
                      </section>
                  </div>                  
              </div> 			  
			  <div class="row">
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             A. Penelitian
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Lampiran berita acara</label>
                                      <div class="col-lg-3">
                                         <select name="penelitian_lampiran_ba" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Berita Acara</label>
                                      <div class="col-lg-3">
                                         <select name="penelitian_ba" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Pihak Ketiga</label>
                                      <div class="col-lg-3">
                                         <select name="penelitian_pihak_ketiga" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Tenaga ahli peneliti</label>
                                      <div class="col-lg-3">
                                         <select name="penelitian_tenaga_ahli" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>								  
                          </div></div>
                      </section>
                  </div>   
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             B. Penilaian
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Ahli Penilai</label>
                                      <div class="col-lg-3">
                                         <select name="penilaian_ahli" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Berita Acara</label>
                                      <div class="col-lg-3">
                                         <select name="penilaian_ba" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Pihak Ketiga</label>
                                      <div class="col-lg-3">
                                         <select name="penilaian_pihak_ketiga" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Tenaga ahli peneliti</label>
                                      <div class="col-lg-3">
                                         <select name="penilaian_tenaga_ahli" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>								  
                          </div></div>
                      </section>
                  </div>  
              </div>  
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Klasifikasi Dan Penempatan
                          </header>
					  </section>
					</div>
				</div>
			  <div class="row">
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             A. Klasifikasi
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Daftar klasifikasi</label>
                                      <div class="col-lg-3">
                                         <select name="klasifikasi_daftar" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Klasifikasi umum </label>
                                      <div class="col-lg-3">
                                         <select name="klasifikasi_umum" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Klasifikasi khusus</label>
                                      <div class="col-lg-3">
                                         <select name="klasifikasi_khusus" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Berita acara klasifikasi</label>
                                      <div class="col-lg-3">
                                         <select name="klasifikasi_ba" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>								  
                          </div></div>
                      </section>
                  </div>   
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             B. Penempatan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Buku penempatan Basan</label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_buku" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Papan kontrol gudang</label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_papan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Rak penempatan</label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_rak" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Label</label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_lebel" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Berdasarkan </label>
                                      <label  class="col-lg-9 col-sm-9 control-label">a. Gudang </label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_gudang" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">b. Tingkat Pemeriksaan</label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_pemeriksaan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">c. Jenis</label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_jenis" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>								  
                          </div></div>
                      </section>
                  </div>  
              </div>  
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Pemeliharaan Dan Keamanan
                          </header>
					  </section>
					</div>
				</div>
			  <div class="row">
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             A. Pemeliharaan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Tenaga ahli pemeliharaan</label>
                                      <div class="col-lg-3">
                                         <select name="pemeliharaan_tenaga_ahli" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Kartu pemeliharaan </label>
                                      <div class="col-lg-3">
                                         <select name="pemeliharaan_kartu" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Buku pemeliharaan</label>
                                      <div class="col-lg-3">
                                         <select name="pemeliharaan_buku" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Tenaga ahli pihak ketiga</label>
                                      <div class="col-lg-3">
                                         <select name="pemeliharaan_pihak_ketiga" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Pemeliharaan berkala</label>
                                      <div class="col-lg-3">
                                         <select name="pemeliharaan_berkala" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">6. Laporan hasil pemeliharaan kepada instansi yuridis</label>
                                      <div class="col-lg-3">
                                         <select name="pemeliharaan_laporan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>								  
                          </div></div>
                      </section>
                  </div>   
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             B. Keamanan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Jadwal piket regu</label>
                                      <div class="col-lg-3">
                                         <select name="keamanan_jadwal" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Buku pengaman</label>
                                      <div class="col-lg-3">
                                         <select name="keamanan_buku" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Ganguan keamanan</label>
                                      <div class="col-lg-3">
                                         <select name="keamanan_gangguan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Koordinasi dengan aparat keamanan</label>
                                      <div class="col-lg-3">
                                         <select name="keamanan_koordinasi" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Alat pengamanan </label>
                                      <div class="col-lg-3">
                                         <select name="keamanan_alat" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>									  								  
                          </div></div>
                      </section>
                  </div>  
              </div>    
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Pemutasian Dan Pengeluaran
                          </header>
					  </section>
					</div>
				</div>
			  <div class="row">
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             A. Pemutasian
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Surat pelimpahan perkara dari penyidik ke jaksa penuntut umum</label>
                                      <div class="col-lg-3">
                                         <select name="pemutasian_penyidik_ke_jaksa" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Surat pelimpahan perkara dari jaksa penuntut umum ke pengadilan negeri </label>
                                      <div class="col-lg-3">
                                         <select name="pemutasian_jaksa_ke_pengadilan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Surat pelimpahan perkara dari pengadilan negeri ke pengadilan tinggi</label>
                                      <div class="col-lg-3">
                                         <select name="pemutasian_pelimpahan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Surat pelimpahan perkara dari pengadilan tinggi ke MA</label>
                                      <div class="col-lg-3">
                                         <select name="pemutasian_pt_ke_ma" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Pemutasian Basan menjadi Baran</label>
                                      <div class="col-lg-3">
                                         <select name="pemutasian_basan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak" selected="selected">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">6. Koordinadi dengan instansi terkait</label>
                                      <div class="col-lg-3">
                                         <select name="pemutasian_koordinasi" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>								  
                          </div></div>
                      </section>
                  </div>   
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Pengeluaran Sebelum Putusan Pengadilan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Proses penyidikan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_penyidikan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Proses penuntutan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_penuntutan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Tidak cukup bukti pada tingkat penyidikan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_bukti_penyidikan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Tidak cukup bukti pada tingkat penuntutan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_bukti_penuntutan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Berita acara pengeluaran </label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_ba_sebelum" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>									  								  
                          </div></div>
                      </section>
                  </div>  
              </div>  
			  <div class="row">
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Pengeluaran Setelah Putusan Pengadilan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Dikembalikan kepada yang berhak</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_dikembalikan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Di lelang </label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_dilelang" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Dipergunakan instansi yang memerlukan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_dipergunakan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Di musnahkan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_dimusnahkan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Berita acara pengeluaran</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_ba_setelah" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>							  
                          </div></div>
                      </section>
                  </div>   
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Penghapusan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Karena bencana alam</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_bencana" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Kerusuhan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_kerusuhan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Penyusutan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_penyusutan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Kebakaran</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_kebakaran" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Berita acara penghapusan </label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_ba_penghapusan" class="form-control input-sm m-bot10">
										 <option value=""></option>
										 <option value="Ada" selected="selected">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>									  								  
                          </div></div>
                      </section>
                  </div>  
              </div> 
				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">                          
                          <div class="panel-body">                              
                                  <div class="col-lg-12">
									  <div class="form-group">   
										  <button type="submit" class="button-next  btn btn-info"> Submit Pengawasan</button>&nbsp;
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
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>

  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

  <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="js/form-component.js"></script>
  
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

  <!--common script for all pages
    <script src="js/common-scripts.js"></script>-->
    <!--this page  script only-->
    <script src="js/advanced-form-components.js"></script>

  </body>
</html>
<?php break;  ?>

<?php case "update": ?>

<!--main content start-->
	  <?php

	  $id = $_GET['id'];	
	  $qedit_pemeliharaan = mysql_query("SELECT * FROM pengawasan where id ='$id' ");
	  $redit_pemeliharaan = mysql_fetch_array($qedit_pemeliharaan);
	  $tgl = tgl_mdy($redit_pemeliharaan['tanggal']);
	  ?>
	  <form action="<?php echo"$aksi?r=pengawasan&act=update"; ?>" role="form" method="post" enctype="multipart/form-data">
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Update Laporan Pengawasan Basan Baran
                          </header>
					  </section>
					</div>
				</div>
				<div class="row">
			       <div class="col-lg-12">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Tanggal Laporan Pengawasan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Tanggal Laporan</label>
									  <div class="col-lg-4">
									  <div class="input-group input-large" data-date="2013/07/13" data-date-format="yyyy/mm/dd">
                                      <input type="text" class="form-control dpd1" name="tanggal" value="<?php echo"$tgl"; ?>">
									  <input type="hidden" class="form-control dpd1" name="id" value="<?php echo"$redit_pemeliharaan[id]"; ?>"></div>
                                      </div>                                  
							     </div>
                              </div>
						  </div>
                      </section>
                  </div>
				  </div>
				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Penerimaan Dan Registrasi
                          </header>
					  </section>
					</div>
				</div>
                <div class="row">
			       <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Uraian
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Surat Pengantar penyerahan Basan dari instansi Penyidik yang ditandatangani oleh pejabat yang bertanggung jawab secara yuridis</label>
                                      <div class="col-lg-3">
                                         <select name="surat_pengantar" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[surat_pengantar]"; ?>"><?php echo"$redit_pemeliharaan[surat_pengantar]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Data Basan yang diserahkan</label>
                                      <div class="col-lg-3">
                                         <select name="data_basan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[data_basan]"; ?>"><?php echo"$redit_pemeliharaan[data_basan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Surat izin penyitaan dari pengadilan</label>
                                      <div class="col-lg-3">
                                         <select name="surat_izin_penyitaan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[surat_izin_penyitaan]"; ?>">
										 <?php echo"$redit_pemeliharaan[surat_izin_penyitaan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Surat perintah penyerahan Basan dari instansi penyidik
</label>
                                      <div class="col-lg-3">
                                         <select name="surat_perintah_penyerahan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[surat_perintah_penyerahan]"; ?>">
										 <?php echo"$redit_pemeliharaan[surat_perintah_penyerahan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Berita acara penyitaan</label>
                                      <div class="col-lg-3">
                                         <select name="ba_penyitaan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[ba_penyitaan]"; ?>">
										 <?php echo"$redit_pemeliharaan[ba_penyitaan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">6. Berita acara serah terima</label>
                                      <div class="col-lg-3">
                                         <select name="ba_serah_terima" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[ba_serah_terima]"; ?>">
										 <?php echo"$redit_pemeliharaan[ba_serah_terima]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">7. Pendokumentasian</label>
                                      <div class="col-lg-3">
                                         <select name="pendokumentasian" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pendokumentasian]"; ?>">
										 <?php echo"$redit_pemeliharaan[pendokumentasian]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                          </div></div>
                      </section>
                  </div>
                 <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Registrasi
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1.  No. registrasi</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_no" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[registrasi_no]"; ?>">
										 <?php echo"$redit_pemeliharaan[registrasi_no]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2.  Golongan, jenis & jumlah basan</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_golongan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[registrasi_golongan]"; ?>">
										 <?php echo"$redit_pemeliharaan[registrasi_golongan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Tanggal penerimaan di Rupbasan</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_tgl_penerimaan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[registrasi_tgl_penerimaan]"; ?>">
										 <?php echo"$redit_pemeliharaan[registrasi_tgl_penerimaan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Nama tersangka/terdakwa</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_nama_tersangka" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[registrasi_nama_tersangka]"; ?>">
										 <?php echo"$redit_pemeliharaan[registrasi_nama_tersangka]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Instansi yang menyerahkan</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_instansi" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[registrasi_instansi]"; ?>">
										 <?php echo"$redit_pemeliharaan[registrasi_instansi]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">6. Basan yang disimpan diluar Rupbasan</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_basan_luar" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[registrasi_basan_luar]"; ?>">
										 <?php echo"$redit_pemeliharaan[registrasi_basan_luar]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">7. Tanda tangan Kepala Rupbasan pada saat masuk dan keluar Baran</label>
                                      <div class="col-lg-3">
                                         <select name="registrasi_tanda_tangan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[registrasi_tanda_tangan]"; ?>">
										 <?php echo"$redit_pemeliharaan[registrasi_tanda_tangan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                          </div></div>
                      </section>
                  </div>                  
              </div> 			  
			  <div class="row">
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             A. Penelitian
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Lampiran berita acara</label>
                                      <div class="col-lg-3">
                                         <select name="penelitian_lampiran_ba" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penelitian_lampiran_ba]"; ?>">
										 <?php echo"$redit_pemeliharaan[penelitian_lampiran_ba]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Berita Acara</label>
                                      <div class="col-lg-3">
                                         <select name="penelitian_ba" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penelitian_ba]"; ?>">
										 <?php echo"$redit_pemeliharaan[penelitian_ba]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Pihak Ketiga</label>
                                      <div class="col-lg-3">
                                         <select name="penelitian_pihak_ketiga" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penelitian_pihak_ketiga]"; ?>">
										 <?php echo"$redit_pemeliharaan[penelitian_pihak_ketiga]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Tenaga ahli peneliti</label>
                                      <div class="col-lg-3">
                                         <select name="penelitian_tenaga_ahli" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penelitian_tenaga_ahli]"; ?>">
										 <?php echo"$redit_pemeliharaan[penelitian_tenaga_ahli]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>								  
                          </div></div>
                      </section>
                  </div>   
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             B. Penilaian
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Ahli Penilai</label>
                                      <div class="col-lg-3">
                                         <select name="penilaian_ahli" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penilaian_ahli]"; ?>">
										 <?php echo"$redit_pemeliharaan[penilaian_ahli]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Berita Acara</label>
                                      <div class="col-lg-3">
                                         <select name="penilaian_ba" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penilaian_ba]"; ?>">
										 <?php echo"$redit_pemeliharaan[penilaian_ba]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Pihak Ketiga</label>
                                      <div class="col-lg-3">
                                         <select name="penilaian_pihak_ketiga" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penilaian_pihak_ketiga]"; ?>">
										 <?php echo"$redit_pemeliharaan[penilaian_pihak_ketiga]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Tenaga ahli peneliti</label>
                                      <div class="col-lg-3">
                                         <select name="penilaian_tenaga_ahli" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penilaian_tenaga_ahli]"; ?>">
										 <?php echo"$redit_pemeliharaan[penilaian_tenaga_ahli]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>								  
                          </div></div>
                      </section>
                  </div>  
              </div>  
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Klasifikasi Dan Penempatan
                          </header>
					  </section>
					</div>
				</div>
			  <div class="row">
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             A. Klasifikasi
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Daftar klasifikasi</label>
                                      <div class="col-lg-3">
                                         <select name="klasifikasi_daftar" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[klasifikasi_daftar]"; ?>">
										 <?php echo"$redit_pemeliharaan[klasifikasi_daftar]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Klasifikasi umum </label>
                                      <div class="col-lg-3">
                                         <select name="klasifikasi_umum" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[klasifikasi_umum]"; ?>">
										 <?php echo"$redit_pemeliharaan[klasifikasi_umum]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Klasifikasi khusus</label>
                                      <div class="col-lg-3">
                                         <select name="klasifikasi_khusus" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[klasifikasi_khusus]"; ?>">
										 <?php echo"$redit_pemeliharaan[klasifikasi_khusus]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Berita acara klasifikasi</label>
                                      <div class="col-lg-3">
                                         <select name="klasifikasi_ba" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[klasifikasi_ba]"; ?>">
										 <?php echo"$redit_pemeliharaan[klasifikasi_ba]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>								  
                          </div></div>
                      </section>
                  </div>   
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             B. Penempatan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Buku penempatan Basan</label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_buku" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penempatan_buku]"; ?>">
										 <?php echo"$redit_pemeliharaan[penempatan_buku]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Papan kontrol gudang</label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_papan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penempatan_papan]"; ?>">
										 <?php echo"$redit_pemeliharaan[penempatan_papan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Rak penempatan</label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_rak" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penempatan_rak]"; ?>">
										 <?php echo"$redit_pemeliharaan[penempatan_rak]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Label</label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_lebel" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penempatan_lebel]"; ?>">
										 <?php echo"$redit_pemeliharaan[penempatan_lebel]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Berdasarkan </label>
                                      <label  class="col-lg-9 col-sm-9 control-label">a. Gudang </label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_gudang" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penempatan_gudang]"; ?>">
										 <?php echo"$redit_pemeliharaan[penempatan_gudang]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">b. Tingkat Pemeriksaan</label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_pemeriksaan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penempatan_pemeriksaan]"; ?>">
										 <?php echo"$redit_pemeliharaan[penempatan_pemeriksaan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">c. Jenis</label>
                                      <div class="col-lg-3">
                                         <select name="penempatan_jenis" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[penempatan_jenis]"; ?>">
										 <?php echo"$redit_pemeliharaan[penempatan_jenis]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>								  
                          </div></div>
                      </section>
                  </div>  
              </div>  
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Pemeliharaan Dan Keamanan
                          </header>
					  </section>
					</div>
				</div>
			  <div class="row">
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             A. Pemeliharaan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Tenaga ahli pemeliharaan</label>
                                      <div class="col-lg-3">
                                         <select name="pemeliharaan_tenaga_ahli" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pemeliharaan_tenaga_ahli]"; ?>">
										 <?php echo"$redit_pemeliharaan[pemeliharaan_tenaga_ahli]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Kartu pemeliharaan </label>
                                      <div class="col-lg-3">
                                         <select name="pemeliharaan_kartu" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pemeliharaan_kartu]"; ?>">
										 <?php echo"$redit_pemeliharaan[pemeliharaan_kartu]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Buku pemeliharaan</label>
                                      <div class="col-lg-3">
                                         <select name="pemeliharaan_buku" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pemeliharaan_buku]"; ?>">
										 <?php echo"$redit_pemeliharaan[pemeliharaan_buku]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Tenaga ahli pihak ketiga</label>
                                      <div class="col-lg-3">
                                         <select name="pemeliharaan_pihak_ketiga" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pemeliharaan_pihak_ketiga]"; ?>">
										 <?php echo"$redit_pemeliharaan[pemeliharaan_pihak_ketiga]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Pemeliharaan berkala</label>
                                      <div class="col-lg-3">
                                         <select name="pemeliharaan_berkala" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pemeliharaan_berkala]"; ?>">
										 <?php echo"$redit_pemeliharaan[pemeliharaan_berkala]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">6. Laporan hasil pemeliharaan kepada instansi yuridis</label>
                                      <div class="col-lg-3">
                                         <select name="pemeliharaan_laporan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pemeliharaan_laporan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pemeliharaan_laporan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>								  
                          </div></div>
                      </section>
                  </div>   
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             B. Keamanan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Jadwal piket regu</label>
                                      <div class="col-lg-3">
                                         <select name="keamanan_jadwal" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[keamanan_jadwal]"; ?>">
										 <?php echo"$redit_pemeliharaan[keamanan_jadwal]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Buku pengaman</label>
                                      <div class="col-lg-3">
                                         <select name="keamanan_buku" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[keamanan_buku]"; ?>">
										 <?php echo"$redit_pemeliharaan[keamanan_buku]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Ganguan keamanan</label>
                                      <div class="col-lg-3">
                                         <select name="keamanan_gangguan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[keamanan_gangguan]"; ?>">
										 <?php echo"$redit_pemeliharaan[keamanan_gangguan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Koordinasi dengan aparat keamanan</label>
                                      <div class="col-lg-3">
                                         <select name="keamanan_koordinasi" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[keamanan_koordinasi]"; ?>">
										 <?php echo"$redit_pemeliharaan[keamanan_koordinasi]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Alat pengamanan </label>
                                      <div class="col-lg-3">
                                         <select name="keamanan_alat" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[keamanan_alat]"; ?>">
										 <?php echo"$redit_pemeliharaan[keamanan_alat]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>									  								  
                          </div></div>
                      </section>
                  </div>  
              </div>    
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Pemutasian Dan Pengeluaran
                          </header>
					  </section>
					</div>
				</div>
			  <div class="row">
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             A. Pemutasian
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Surat pelimpahan perkara dari penyidik ke jaksa penuntut umum</label>
                                      <div class="col-lg-3">
                                         <select name="pemutasian_penyidik_ke_jaksa" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pemutasian_penyidik_ke_jaksa]"; ?>">
										 <?php echo"$redit_pemeliharaan[pemutasian_penyidik_ke_jaksa]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Surat pelimpahan perkara dari jaksa penuntut umum ke pengadilan negeri </label>
                                      <div class="col-lg-3">
                                         <select name="pemutasian_jaksa_ke_pengadilan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pemutasian_jaksa_ke_pengadilan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pemutasian_jaksa_ke_pengadilan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Surat pelimpahan perkara dari pengadilan negeri ke pengadilan tinggi</label>
                                      <div class="col-lg-3">
                                         <select name="pemutasian_pelimpahan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pemutasian_pelimpahan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pemutasian_pelimpahan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Surat pelimpahan perkara dari pengadilan tinggi ke MA</label>
                                      <div class="col-lg-3">
                                         <select name="pemutasian_pt_ke_ma" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pemutasian_pt_ke_ma]"; ?>">
										 <?php echo"$redit_pemeliharaan[pemutasian_pt_ke_ma]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Pemutasian Basan menjadi Baran</label>
                                      <div class="col-lg-3">
                                         <select name="pemutasian_basan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pemutasian_basan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pemutasian_basan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">6. Koordinadi dengan instansi terkait</label>
                                      <div class="col-lg-3">
                                         <select name="pemutasian_koordinasi" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pemutasian_koordinasi]"; ?>">
										 <?php echo"$redit_pemeliharaan[pemutasian_koordinasi]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>								  
                          </div></div>
                      </section>
                  </div>   
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Pengeluaran Sebelum Putusan Pengadilan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Proses penyidikan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_penyidikan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_penyidikan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_penyidikan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Proses penuntutan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_penuntutan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_penuntutan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_penuntutan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Tidak cukup bukti pada tingkat penyidikan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_bukti_penyidikan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_bukti_penyidikan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_bukti_penyidikan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Tidak cukup bukti pada tingkat penuntutan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_bukti_penuntutan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_bukti_penuntutan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_bukti_penuntutan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Berita acara pengeluaran </label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_ba_sebelum" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_ba_sebelum]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_ba_sebelum]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>									  								  
                          </div></div>
                      </section>
                  </div>  
              </div>  
			  <div class="row">
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Pengeluaran Setelah Putusan Pengadilan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Dikembalikan kepada yang berhak</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_dikembalikan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_dikembalikan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_dikembalikan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Di lelang </label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_dilelang" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_dilelang]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_dilelang]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Dipergunakan instansi yang memerlukan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_dipergunakan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_dipergunakan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_dipergunakan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Di musnahkan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_dimusnahkan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_dimusnahkan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_dimusnahkan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Berita acara pengeluaran</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_ba_setelah" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_ba_setelah]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_ba_setelah]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>							  
                          </div></div>
                      </section>
                  </div>   
				  <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Penghapusan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">1. Karena bencana alam</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_bencana" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_bencana]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_bencana]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">2. Kerusuhan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_kerusuhan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_kerusuhan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_kerusuhan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">3. Penyusutan</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_penyusutan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_penyusutan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_penyusutan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">4. Kebakaran</label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_kebakaran" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_kebakaran]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_kebakaran]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>	
								  <div class="form-group">
                                      <label  class="col-lg-9 col-sm-9 control-label">5. Berita acara penghapusan </label>
                                      <div class="col-lg-3">
                                         <select name="pengeluaran_ba_penghapusan" class="form-control input-sm m-bot10">
										 <option value="<?php echo"$redit_pemeliharaan[pengeluaran_ba_penghapusan]"; ?>">
										 <?php echo"$redit_pemeliharaan[pengeluaran_ba_penghapusan]"; ?></option>
										 <option value="Ada">Ada</option>
										 <option value="Tidak">Tidak</option>
										 </select>
                                      </div>
                                  </div>									  								  
                          </div></div>
                      </section>
                  </div>  
              </div> 
				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">                          
                          <div class="panel-body">                              
                                  <div class="col-lg-12">
									  <div class="form-group">   
										  <button type="submit" class="button-next  btn btn-info"> Update Pengawasan</button>&nbsp;
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
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>

  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

  <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="js/form-component.js"></script>
  
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

  <!--common script for all pages
    <script src="js/common-scripts.js"></script>-->
    <!--this page  script only-->
    <script src="js/advanced-form-components.js"></script>

  </body>
</html>
<?php break;  ?>
	 <?php } ?>