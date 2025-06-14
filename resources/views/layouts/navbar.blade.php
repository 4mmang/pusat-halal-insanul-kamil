<nav class="navbar navbar-expand-lg bg-white fixed-top py-4">
    <div class="container">
        <a class="navbar-brand work-sans text-default fw-bold playfair" href="{{ route('home') }}">
            <img src="{{ asset('img/logo3.png') }}" style="max-width: 70px" class="mb-3" alt="">
            <span class="text-warning ms-2">LPH INSAN <span class="text-default">KAMIL</span></span>
        </a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto gap-lg-4 mt-lg-0 mt-4 fw-bold">
                <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link " href="{{ route('profil') }}">Profil</a>
                <a class="nav-link " href="{{ route('layanan') }}">Layanan</a>
                <a class="nav-link " href="{{ route('pendaftaran.create') }}">Form Pendaftaran</a>
                <a class="nav-link " href="{{ route('artikel.index') }}">Artikel</a>
                <a class="nav-link " href="{{ route('berita.index') }}">Berita</a>
                <a class="nav-link " href="{{ route('kontak') }}">Kontak</a>
                <a class="nav-link " href="{{ route('faq') }}">FAQ</a>
            </div>
        </div>
    </div>
</nav>
