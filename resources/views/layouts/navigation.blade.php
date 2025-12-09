<!-- Inside navbar-nav (replace the current navbar links) -->
<ul class="navbar-nav ms-auto">
    @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                <i class="bi bi-person-circle me-1"></i> {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">
                <i class="bi bi-box-arrow-in-right me-1"></i> Login
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">
                <i class="bi bi-person-plus me-1"></i> Register
            </a>
        </li>
    @endauth

    <!-- Your phase links can stay or move to a toggle -->
</ul>
