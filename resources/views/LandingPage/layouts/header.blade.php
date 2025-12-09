<header class="clearfix">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <a class="navbar-brand" href="index.html">
                <img src="/images/logo.png" width="50px" alt="">
            </a>

            <a href="#" class="mobile-nav-toggle"> 
                <span></span>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="drop-link"><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a></li>
                    <li class="drop-link"><a class="{{ Request::is('berita*') ? 'active' : '' }}" href="/berita">Berita</a></li>
                    <li><a class="{{ Request::is('profil-sekolah') ? 'active' : '' }}" href="/profil-sekolah">Profil Sekolah</a></li>
                    <li><a class="{{ Request::is('sekolah-lanjutan') ? 'active' : '' }}" href="/sekolah-lanjutan">Sekolah Lanjutan</a></li>
                </ul>

                <a href="/dashboard" class="register-modal-opener login-button"><i class="material-icons">perm_identity</i>Dashboard</a>
            


            </div>
        </div>
    </nav>

    <div class="mobile-menu">
        <div class="shopping-cart-box mt-4">
            
            
                <a href="/dashboard" class="register-modal-opener login-button"><i class="material-icons">perm_identity</i>Dashboard</a>
          

            @if (!Auth::check())
                <a href="/alumni/login" class="register-modal-opener login-button"><i class="material-icons">perm_identity</i>Lihat Data Diri</a>
            @endif
        </div>
        <nav class="mobile-nav">
            <ul class="mobile-menu-list">
                <li><a class="{{ Request::is('/') ? 'text-primary' : '' }}" href="/">Beranda</a></li>
                <li><a class="{{ Request::is('berita*') ? 'text-primary' : '' }}" href="/berita">Berita</a></li>
                <li><a class="{{ Request::is('profil-sekolah') ? 'text-primary' : '' }}" href="/profil-sekolah">Profil Sekolah</a></li>
                <li><a class="{{ Request::is('sekolah-lanjutan') ? 'text-primary' : '' }}" href="/sekolah-lanjutan">Sekolah Lanjutan</a></li>
            </ul>
        </nav>
    </div>

</header>