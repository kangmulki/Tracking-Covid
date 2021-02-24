<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin" class="brand-link">
      <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tracking Covid-19</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><b><i><h5>{{ Auth::user()->name }}</h5></b></i></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Kasus Lokal -->
          <li class="nav-header"><h4>Data Daerah</h4></li>
          <li class="nav-item">
            <a href="{{route('provinsi.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Provinsi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kota.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Kota</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kecamatan.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Kecamatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kelurahan.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-success"></i>
              <p>Kelurahan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('rw.index')  }}" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>RW</p>
            </a>
          </li>

          <!-- Kasus Global -->

          <li class="nav-header"><h4>Data Kasus Indonesia</h4></li>
          <li class="nav-item">
            <a href="{{ route('kasus.index') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Data Kasus</p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>