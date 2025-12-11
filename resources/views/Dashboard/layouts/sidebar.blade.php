		<!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
              <a href="/" class="sidebar-brand">
                <img src="/images/logo2.png" width="160px" alt="">
              </a>
              <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <div class="sidebar-body">
              <ul class="nav">
                <li class="nav-item nav-category">Administrasi Sekolah</li>
                <li class="nav-item">
                    <a href="/dashboard/alumnis" class="nav-link">
                      <i class="link-icon" data-feather="award"></i>
                      <span class="link-title">Pengelolaan Siswa</span>
                    </a>
                </li>
                </li>

                <li class="nav-item nav-category">Berita & Materi Belajar</li>
                <li class="nav-item">
                  <a href="{{ route('dashboard.beritas.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title">Pengelolaan Berita & Materi </span>
                  </a>
                </li>
                <li class="nav-item nav-category">Admin</li>
                <li class="nav-item">
                  <a href="{{ route('dashboard.users.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Pengelolaan Admin</span>
                  </a>
                </li>

              </ul>
            </div>
          </nav>
          
      
              <!-- partial -->