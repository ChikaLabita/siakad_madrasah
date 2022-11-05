<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container px-5">
        <a class="navbar-brand" href=""><i class="fa fa-solid fa-school"></i> MI Al-Maarif 02 Palang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-home"></i> Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarAccount" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="fa fa-duotone fa-id-card"></i>
                        Profile</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarAccount">
                        <li><a class="dropdown-item" href="sambutan">Sambutan Kepala Sekolah</a></li>
                        <li><a class="dropdown-item" href="sejarah">Sejarah & Visi Misi</a></li>
                        <li><a class="dropdown-item" href="profile">Profile Sekolah</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact"><i
                            class="fa fa-duotone fa-address-book"></i> Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="galeri"><i class="fa fa-duotone fa-image"></i>
                        Galeri</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarAccount" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="fa fa-duotone fa-user"></i>
                        Account</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarAccount">
                        <li><a class="dropdown-item" href="{{ route('login') }}">Sign In</a></li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">Sign up</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>