<nav class="navbar navbar-expand-lg fixed-top bg-primary py-4">
    <div class="container">
        <a class="navbar-brand work-sans fw-bold text-white" href="#">PUSAT HALAL <span class="">INSAN KAMIL</span></a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto gap-lg-4 mt-lg-0 mt-4">
                <a class="nav-link text-white" aria-current="page" href="{{ route('beranda') }}">Beranda</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profil') }}">Profil</a></li>
                        <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
                        {{-- <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
                <a class="nav-link text-white" href="{{ route('kontak') }}">Kontak</a>
                <a class="nav-link text-white" href="{{ route('faq') }}">FAQ</a>
            </div>
        </div>
    </div>
</nav>
