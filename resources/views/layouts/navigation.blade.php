<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">
            Laboratorium Digital
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
            aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <!-- Left Side -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ request()->is('alat') ? 'active' : '' }}" href="{{ route('alat.index') }}">Daftar Alat</a> --}}
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ request()->is('bahan') ? 'active' : '' }}" href="{{ route('bahan.index') }}">Daftar Bahan</a> --}}
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link {{ request()->is('ruangan') ? 'active' : '' }}" href="{{ route('ruangan.index') }}">Ruangan</a> --}}
                </li>

                @auth
                    <li class="nav-item">
                        {{-- <a class="nav-link {{ request()->is('pengajuan') ? 'active' : '' }}" href="{{ route('pengajuan.index') }}">Pengajuan</a> --}}
                    </li>
                @endauth

                @role('admin')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="adminMenu" role="button" data-bs-toggle="dropdown">
                            Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="adminMenu">
                            {{-- <li><a class="dropdown-item" href="{{ route('admin.alat.index') }}">Kelola Alat</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.bahan.index') }}">Kelola Bahan</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.ruangan.index') }}">Kelola Ruangan</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.user.index') }}">Kelola User</a></li> --}}
                        </ul>
                    </li>
                @endrole
            </ul>

            <!-- Right Side -->
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userMenu" role="button" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profil</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
