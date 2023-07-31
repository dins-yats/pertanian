

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      @can('notadmin')
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/profil*') ? 'active' : '' }}"  href="/dashboard/profil">
            <span data-feather="home"></span>
            Profil Saya
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/reportus*') ? 'active' : ''}}" href="/dashboard/reportus">
            <span data-feather="file"></span>
            Pengaduan
          </a>
        </li>

      </ul>
    @endcan

      @can('admin') 
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Admin</span>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : ''}}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            Postingan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/report*') ? 'active' : ''}}" href="/dashboard/report">
            <span data-feather="file"></span>
            Data Pengaduan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/poktan*') ? 'active' : ''}}" href="/dashboard/poktan">
            <span data-feather="file-text"></span>
            Data kelompok tani
          </a>
        </li>
      </ul>
      @endcan
   
      </div>
    </div>

    
  </nav>

