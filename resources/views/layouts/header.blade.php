<!-- Header / Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">PWL-Putra</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">Users</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users.create') }}" class="nav-link">Tambah User</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('matakuliah.index') }}" class="nav-link">Mata Kuliah</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('matakuliah.create') }}" class="nav-link">Tambah MK</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
