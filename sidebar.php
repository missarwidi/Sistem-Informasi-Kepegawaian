<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Management Pegawai</span>
                      </a>
                      <ul class="sub">
					<?php if(strtolower($leveluser)=="sub bagian kepegawaian") {?>
                          <li><a  href="?r=pegawai">Data Pegawai </a></li>
                          <li><a  href="?r=pegawai&act=baru">Tambah Data Pegawai </a></li>
					<?php }?>
                    <?php if(strtolower($leveluser)!="sub bagian kepegawaian") {?>      
						  <li><a  href="?r=pegawai&act=ubah&nip=<?php echo $session_username; ?>">Ubah Data Pegawai </a></li>
                          <li><a  href="?r=pegawai&act=curiculumvitae&nip=<?php echo $session_username; ?>">Curiculum Vitae </a></li>
					<?php } ?>
                      </ul>
                  </li>
				   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-archive"></i>
                          <span>Pengajuan Pesiun</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?r=pensiun">Data Pengajuan Pensiun </a></li>					  
                          <li><a  href="?r=pensiun&act=baru">Buat Pengajuan Pensiun </a></li>
                      </ul>
                  </li>
					<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-shield"></i>
                          <span>Kenaikan Pangkat</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?r=kenaikanpangkat">Data Kenaikan Pangkat</a></li>
                          <li><a  href="?r=kenaikanpangkat&act=baru">Buat Pengajuan</a></li>
                      </ul>
                  </li>
				  <?php 
				   if(strtolower($leveluser)=="sub bagian kepegawaian")
				   {?>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Pengaturan</span>
                      </a>    
					  <ul class="sub">
                          <li><a  href="?r=gaji">Tabel Gaji</a></li>
                          <li><a  href="?r=golongan">Tabel Golongan</a></li>		  
                          <li><a  href="?r=berita">Berita &amp; Pengumuman</a></li>
                      </ul>                  
                  </li>
				<?php } 
				if(strtolower($leveluser)!="pegawai")
				  {
				?>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Laporan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="?r=laporan&act=duk">Daftar Urut Kepangkatan</a></li>
                          <li><a  href="?r=laporan">Laporan lainnya</a></li>
                      </ul>
                  </li>
				  <?php } ?>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-users"></i>
                          <span>Pengguna</span>
                      </a>
                      <ul class="sub">
					  <?php 
					   if(strtolower($leveluser)=="sub bagian kepegawaian")
					   {
					   echo"
                          <li><a  href='?r=user&act=user'>Data Table</a></li>
                          <li><a  href='?r=user&act=tambah'>Tambah baru</a></li>
						  ";
					   }
					  ?>
                          <li><a  href="?r=user&act=profil">Profile</a></li>
                      </ul>
                  </li>
				  <li>
                      <a class="sub-menu" href="logout.php">
                          <i class="fa fa-key"></i>
                          <span>Log Out</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->