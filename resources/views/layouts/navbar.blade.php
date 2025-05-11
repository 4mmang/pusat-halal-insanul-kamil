<nav class="navbar navbar-expand-lg fixed-top bg-body-secondary py-4">
    <div class="container">
        <a class="navbar-brand playfair fw-bold" href="#">PUSAT HALAL <span class="">INSAN KAMIL</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto gap-lg-4">
                <a class="nav-link" aria-current="page" href="{{ route('beranda') }}">Beranda</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
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
                <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
            </div>
        </div>
    </div>
</nav>
