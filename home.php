<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
                  <div class="col-lg-12">
                      <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li class="active">Hi <?php echo"<b>$_SESSION[namalengkap]</b>"; ?>, Selamat Datang Kembali.</li>
                      </ul>
                      <!--breadcrumbs end -->
                  </div>
              </div>
			  <?php if(strtolower($leveluser) != "pegawai"){ ?>
              <div class="row state-overview">
                  <div class="col-lg-4 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
							  <?php
							  $qpeg = mysql_query("SELECT * FROM peg_datapribadi ORDER BY id DESC");
							  $rpeg=mysql_num_rows($qpeg);
                              echo "$rpeg";
							  ?>
                              </h1>
                              <p>Total Pegawai Aktif</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                              <?php
							  $qpang = mysql_query("SELECT * FROM data_kenaikanpangkat where status='1' ORDER BY id DESC");
							  $rpang=mysql_num_rows($qpang);
                              echo "$rpang";
							  ?>
                              </h1>
                              <p>Pengajuan Kenaikan Pangkat</p>
                          </div>
                      </section>
                  </div>                  
                  <div class="col-lg-4 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                               <?php
							  $qpensiun = mysql_query("SELECT * FROM data_pensiun where status='1' ORDER BY id DESC");
							  $rpensiun=mysql_num_rows($qpensiun);
                              echo "$rpensiun";
							  ?>
                              </h1>
                              <p>Pengajuan Pensiun Karyawan</p>
                          </div>
                      </section>
                  </div>
              </div>
			  <?php }?>
               <?php
					  $qp = mysql_query("SELECT * FROM peg_datapribadi where nip='$session_username' ORDER BY id DESC");
					  $rp=mysql_fetch_array($qp);
					  $golongan = $rp['golbaru'];					  
				 ?>
			 <?php if(strtolower($leveluser) == "pegawai"){ ?>
			 
			 <div class="row">
                  <div class="col-lg-5">
                      <!--timeline start-->
                      <section class="panel">	
					  <header class="panel-heading">
                              <i class="fa fa-bullhorn"></i> Berita & Pengumuman
                      </header>				  	  					  
                              <div class="panel-body progress-panel">							  
							  <?php							  
							  $qberita = mysql_query("SELECT * FROM berita where id='1' ORDER BY id DESC limit 0,1");
							  while($rberita=mysql_fetch_array($qberita))
							  { 
							  $no++;
							  $isi = nl2br($rberita['isi']);
							  ?>
							  <?php
							  echo"<h3 class='panel-title'>$rberita[judul]</h3></a><hr>
							  <p align='justify'>$isi</p><br>";
							  }
							  ?>               
                          </div>
                      </section>
                      <!--timeline end-->
                  </div>       
				  <div class="col-lg-4">
                      <!--work progress start-->
                      <section class="panel">
                          <div class="panel-body progress-panel">
                              <div class="task-progress">
                                  <h1>Notifikasi Pesan</h1>
                                  <p>Notifikasi Pesan dari Sub Bagian Kepegawaian</p>
                              </div>                              
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
							  <?php
								    $no = 0;
									$qnof = mysql_query("SELECT * FROM notifikasi  where nip='$session_username' ORDER BY id DESC");
									while($rnof=mysql_fetch_array($qnof))
									{ 
									$no++;
									$judulnotif = $rnof['judul'];
									$id = $rnof['id'];
									
									if($rnof['baca']=="0")
									{ $status = "<span class='badge bg-important'> New</span>"; }
									else if($rnof['baca']=="1")
									{ $status = "<span class='badge bg-primary'> Sudah Di Baca</span>"; }	
																		
							echo"									
                              <tr>
                                  <td>$no</td>
                                  <td>$judulnotif</td>
                                  <td>$status</td>
                                  <td><a href='?r=notifikasi&id=$id'>
								  <button class='btn btn-success btn-xs'> Baca</button></a></td>
                              </tr>   ";
							  }
							  		$tgl2 = $rp['tmt'];
					  				$tgl1 = date("Y-m-d");
					  							
									  $a = datediff($tgl1, $tgl2);
									  $tahun = $a['years'];
									  if($tahun==0){$tahun=1;}
							  ?>                           
                              </tbody>
                          </table>
                      </section>
                      <!--work progress end-->
                  </div>
                 <div class="col-lg-3">
                      <!--user info table start-->
                      <section class="panel">
                          <div class="panel-body">
                              <a href="#">
                                  <img alt="" src="<?php echo $rp['folder'].$rp['foto']; ?>" height="90px" width="90px">
                              </a>
                              <div class="task-thumb-details">
                                  <h1><a href="#"><?php echo"$_SESSION[namalengkap]"; ?></a></h1>
                                  <p><?php echo"$_SESSION[leveluser]"; ?></p>
                              </div>
                          </div>
                          <table class="table table-hover personal-task">						
                              <tbody>
                                <tr>
                                    <td colspan="2">Unit Kerja</td>
                                    <td> <?php echo $rp['unitkerja']; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Golongan</td>
                                    <td> <?php echo $golongan; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Pangkat</td>
                                    <td> <?php echo $rp['jabatanbaru']; ?></td>
                                </tr>
                                <tr>								
                                    <td colspan="2">Gaji Anda</td>
                                    <td> <?php echo "Rp. ".format_rupiah(masakerja($tahun,$golongan));?>
									</td>
                                </tr>
                              </tbody>
                          </table>
                      </section>
                      <!--user info table end-->
                  </div>
				  </div>
				  
			 <?php }else { 
			 $tgl2 = $rp['tmt'];
					  				$tgl1 = date("Y-m-d");
					  							
									  $a = datediff($tgl1, $tgl2);
									  $tahun = $a['years'];
									  if($tahun==0){$tahun=1;}?>
				 
              <div class="row">
                  <div class="col-lg-4">
                      <!--user info table start-->
                      <section class="panel">
                          <div class="panel-body">
                              <a href="#" class="task-thumb">
                                  <img alt="" src="<?php echo $rp['folder'].$rp['foto']; ?>" height="90px" width="90px">
                              </a>
                              <div class="task-thumb-details">
                                  <h1><a href="#"><?php echo"$_SESSION[namalengkap]"; ?></a></h1>
                                  <p><?php echo"$_SESSION[leveluser]"; ?></p>
                              </div>
                          </div>
                          <table class="table table-hover personal-task">						
                              <tbody>
                                <tr>
									<td colspan="2">Unit Kerja</td>
                                    <td> <?php echo $rp['unitkerja']; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Golongan</td>
                                    <td> <?php echo $golongan; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Pangkat</td>
                                    <td> <?php echo $rp['jabatanbaru']; ?></td>
                                </tr>
                                <tr>								
                                    <td colspan="2">Gaji Anda</td>
                                    <td> <?php echo "Rp. ".format_rupiah(masakerja($tahun,$golongan));?>
									</td>
                                </tr>
                              </tbody>
                          </table>
                      </section>
                      <!--user info table end-->
                  </div>
				  
				  <div class="col-lg-8">
                      <!--work progress start-->
                      <section class="panel">
                          <div class="panel-body progress-panel">
                              <div class="task-progress">
                                  <h1>Verifikasi Berkas Kelengkapan Data </h1>
                                  <p>Pengajuan Pensiun &amp; Kenaikan Golongan</p>
                              </div>                              
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
							  <?php
								    $no = 0;
									$qnof = mysql_query("SELECT * FROM view_pengajuan_notifikasi ORDER BY id DESC");
									while($rnof=mysql_fetch_array($qnof))
									{ 
									$no++;
									$idpengajuan = $rnof['idpengajuan'];
									$id = $rnof['id'];
									$nip = $rnof['nip'];
									$user = $rnof['user'];
																		
									if(strstr($idpengajuan,"PEN"))
									{ 
									  $judulnotif = "Pengajuan Pensiun Untuk Nip : $nip"; 
									  $link = "?r=pensiun&act=verifikasi&nip=".$nip."&id=".$idpengajuan; 
									}
									else if(strstr($idpengajuan,"GOL"))
									{ 
									  $judulnotif = "Pengajuan Kenaikan Pangkat Untuk Nip : $nip"; 
									  $link = "?r=kenaikanpangkat&act=verifikasi&nip=".$nip."&id=".$idpengajuan;
									}	
									
									if($rnof['status']=="1")
									{ $status = "<span class='badge bg-warning'> Menunggu Di Verifikasi</span>"; }
									else if($rnof['status']=="2")
									{ $status = "<span class='badge bg-info'> Di Setujui</span>"; }	
									else if($rnof['status']=="0")
									{ $status = "<span class='badge bg-important'> Di Tolak</span>"; }	
									
							echo"									
                              <tr>
                                  <td>$no</td>
                                  <td><a class='text-info' href='$link'>$judulnotif</a></td>
                                  <td>$user</td>
                                  <td>$status</td>
                              </tr>   ";
							  }
							  ?>                           
                              </tbody>
                          </table>
                      </section>
                      <!--work progress end-->
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <!--timeline start-->
                      <section class="panel">	
					  <header class="panel-heading">
                              <i class="fa fa-bullhorn"></i> Berita & Pengumuman
                      </header>				  	  
                          <div class="panel-body progress-panel">						  
                              <div class="panel-body progress-panel">							  
							  <?php							  
							  $qberita = mysql_query("SELECT * FROM berita where id='1' ORDER BY id DESC limit 0,1");
							  while($rberita=mysql_fetch_array($qberita))
							  { 
							  $no++;
							  $isi = nl2br($rberita['isi']);
							  ?>
							  <div class="task-thumb-details">
                              <h1><a href="#">
							  <?php
							  echo"$rberita[judul]</a></h1><hr>
							  <p>$isi</p><br>";
							  }
							  ?>
                              
                              </div>                              
                          </div>                          
                          </div>
                      </section>
                      <!--timeline end-->
                  </div>                  
              </div>
               <?php }?>
          </section>
      </section>
      <!--main content end-->