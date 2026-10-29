<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand fw-semibold" href="{{ route('user.index') }}">Praktikum PWL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">List User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.create') }}">Tambah User</a>
                </li>
            </ul>
        </div>
    </div>
</nav>