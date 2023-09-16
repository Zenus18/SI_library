<nav class="navbar navbar-expand-lg navbar-light bg-info mb-5">
    <div class="container-fluid">
        <a href="#" class="navbar-brand text-light">Library.io</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="/" class="nav-item nav-link text-light">peminjaman</a>
                <a href="pengembalian" class="nav-item nav-link text-light">pengembalian</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown">lainnya</a>
                    <div class="dropdown-menu">
                        <a href="{{route('anggota')}}" class="dropdown-item ">Anggota</a>
                        <a href="{{route('petugas')}}" class="dropdown-item " >Petugas</a>
                        <a href="buku" class="dropdown-item ">Buku</a>
                    </div>
                </div>
            </div>
            <div class="navbar-nav ms-auto">
                <a href="#" class="nav-item nav-link text-light">Login</a>
            </div>
        </div>
    </div>
</nav>