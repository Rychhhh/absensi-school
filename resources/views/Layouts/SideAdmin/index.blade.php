      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('admins') }}">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">App <sup>Admin</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Data User</div>

        <!-- User item - User Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>User</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ url('dataUser') }}">Pengguna</a>
              <a class="collapse-item" href="{{ url('filter-absen') }}">Absen Berdasar Tanggal</a>
            </div>
          </div>
        </li>

     
        
       
        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Data Absen</div>

        <!-- Student Data -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Student Data Group</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header"> Screens:</h6>
              <a class="collapse-item" href="{{ url('admin/rombelData') }}">Rombel</a>
              <a class="collapse-item" href="{{ url('admin/rayonData') }}">Rayon</a>
            </div>
          </div>
        </li>

       <!-- Nav Item - Charts -->
       <li class="nav-item">
        <a class="nav-link" href="{{ url('student/seleksi') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>View User</span></a>
      </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <div class="sidebar-card d-none d-lg-flex">
          <img class="sidebar-card-illustration mb-2" src="{{ asset('admin/img/undraw_rocket.svg') }}" alt="..." />
          <p class="text-center mb-2"><strong>AppSensi</strong> Data anda adalah amanah kami !</p>
        </div>
      </ul>
      <!-- End of Sidebar -->