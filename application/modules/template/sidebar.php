<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">SIA UNISI</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Main System</li>
              <li><a class="nav-link" href="<?= base_url('dashboard') ?>"><i class="far fa-eye"></i> <span>Dashboard</span></a></li>
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
                  <li><a class="nav-link" href="<?= base_url('C_Formulir/C2') ?>">Fromulir C2</a></li>
                </ul>
              </li>
              <li><a class="nav-link" href="<?= base_url('C_Alumni') ?>"><i class="far fa-eye"></i> <span>Alumni</span></a></li>

              <li class="menu-header">Tracer Study</li>
              <li><a class="nav-link" href="<?= base_url() ?>C_Tracer"><i class="far fa-eye"></i> <span>Input Quisioner</span></a></li>
              <li><a class="nav-link" href="C_Tracer/quisioner"><i class="far fa-eye"></i> <span>Tracer Study</span></a></li>

              <li class="menu-header">Other</li>
              <li><a class="nav-link" href="Home/Setting"><i class="fas fa-ellipsis-h"></i> <span>Pengaturan</span></a></li>
              <li><a class="nav-link" href="Home/FAQ"><i class="fas fa-pencil-ruler"></i> <span>FAQ</span></a></li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://unisi.ac.id" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Lihat Website UNISI
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->