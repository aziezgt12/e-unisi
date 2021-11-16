<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url() ?>">SIA UNISI</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Main System</li>
              <li><a  class="nav-link" href="<?= base_url() ?>"><i class="far fa-eye"></i> <span>Dashboard</span></a></li>
              <?php if($_SESSION['level'] == 'admin'): ?>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Master</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?= base_url('C_Fakultas') ?>">Fakultas</a></li>
                  <li><a class="nav-link" href="<?= base_url('C_Prodi') ?>">Prodi</a></li>
                  <li><a class="nav-link" href="<?= base_url('C_Wisuda') ?>">Priode Wisuda</a></li>
                </ul>
              </li>
              <li class="menu-header">Wisuda</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Formulir Wisuda</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?= base_url('C_Jadwal') ?>">Fromulir C1</a></li>
                  <li><a class="nav-link" href="<?= base_url('C_Formulir/C2') ?>">Fromulir C1</a></li>
                </ul>
              </li>
              <li><a class="nav-link" href="<?= base_url('C_Alumni') ?>"><i class="far fa-eye"></i> <span>Alumni</span></a></li>
              <li class="menu-header">Tracer Study</li>
              <li><a class="nav-link" href="<?= base_url() ?>C_Tracer"><i class="far fa-eye"></i> <span>Input Quisioner</span></a></li>
              <?php endif ?>

              <?php if ($_SESSION['level'] == 'mahasiswa') { ?>
              <li class="menu-header">Wisuda</li>
              <li><a class="nav-link" href="<?= base_url() ?>C_Jadwal"><i class="fa fa-file-alt"></i> <span>Formulir C1</span></a></li>           
              <?php 
              $re = $this->db->query("SELECT * FROM tbl_berkas_wisuda WHERE nim = '".$_SESSION['nim']."' ")->row();
              if(isset($re)){
              if($re->ijazah != '' AND $re->ktp != '' AND $re->kk != '' AND $re->bebas_biaya != '' AND $re->foto != ''){ ?>
              <li><a class="nav-link" href="<?= base_url() ?>C_Formulir/C2"><i class="fa fa-file-alt"></i> <span>Formulir C2</span></a></li>           
              <?php }else{
                echo 'ada';
              } } ?>
              <?php

                $res = $this->db->get_where('tbl_form_c1', array('nim' => $_SESSION['nim']))->row();
                if(isset($res)){ ?>

              <li><a class="nav-link" href="<?= base_url() ?>C_Formulir/det_calon_wisuda/<?= $_SESSION['nim'] ?>"><i class="fa fa-file-alt"></i> <span>Berkas Wisuda</span></a></li>           
            <?php } ?>

              <?php } ?>
              <?php if ($_SESSION['level'] == 'mahasiswa') { 

                $res = $this->db->get_where('tbl_form_c1', array('nim' => $_SESSION['nim']))->row();
                if(isset($res)){ 
                  if($res->alumni == 1){
                  ?>
                  <li class="menu-header">Tracer Study</li>
                  <li><a class="nav-link" href="<?= base_url() ?>C_Tracer?nim=<?= $_SESSION['nim'] ?>"><i class="far fa-eye"></i> <span>Input Quisioner</span></a></li>           
                  <li><a class="nav-link" href="<?= base_url() ?>C_Tracer/hasil/<?= $_SESSION['nim'] ?>"><i class="far fa-eye"></i> <span>Hasil Quisioner Saya</span></a></li>           

                <?php } }

             } ?>
<!--               <li><a class="nav-link" href="C_Tracer/quisioner"><i class="far fa-eye"></i> <span>Tracer Study</span></a></li>
 -->
              <li class="menu-header">Other</li>
              <!-- <li><a class="nav-link" href="Home/Setting"><i class="fas fa-ellipsis-h"></i> <span>Pengaturan</span></a></li> -->
              <li><a class="nav-link" href="<?= base_url('Auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://unisi.ac.id" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Lihat Website UNISI
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->