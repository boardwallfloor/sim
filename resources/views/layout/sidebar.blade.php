  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">KOMSI SV</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-door-closed"></i>
              <p>
                Kelas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/datakelas" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahkelas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Kelas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-chair"></i>
              <p>
                Ruang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dataruang" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Ruang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahruang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Ruang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Mata Kuliah
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/datamatakuliah" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Mata Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahmatakuliah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Mata Kuliah</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Mahasiswa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/datamahasiswa" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahmahasiswa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Kelas Mahasiswa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/datakelasmahasiswa" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kelas Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahkelasmahasiswa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Kelas Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-address-card"></i>
              <p>
                SKS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/datasks" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data SKS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahsks" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah SKS</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-building"></i>
              <p>
                Gedung
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/datagedung" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Gedung</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahgedung" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Gedung</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Tahun Ajaran
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/datatahunajaran" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Tahun Ajaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahtahunajaran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Tahun Ajaran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Sesi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/datasesi" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Sesi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tambahsesi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Sesi</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>