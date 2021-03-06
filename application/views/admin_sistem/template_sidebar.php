
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin E-Surat</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/dist/img/user4-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Kasie Pelayanan</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MENU</li>


          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li> 


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list-ul"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-address-book nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-envelope nav-icon"></i>
                  <p>Jenis Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-file-alt nav-icon"></i>
                  <p>Data Penduduk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/ages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="fas fa-eye-dropper nav-icon"></i>
                  <p>TTD</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms E Surat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost/E_Surat/index.php/Kepolisian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.K.C.KEPOLISISAN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.K.DOMISILI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.KETERANGAN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.KELAHIRAN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.K.STATUS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.K.P.D.S.NIKAH</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.K.GHOIB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.K.A.NIKAH</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.K.MISKIN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.K.LEMATIAN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.K.JALAN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.K.WALI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.K.PINDAH</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>S.K.USAHA</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>assets/pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
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
