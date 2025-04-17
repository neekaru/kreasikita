<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Kerajinan Tangan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin*') ? 'active' : '' }}" href="/admin">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('demo*') ? 'active' : '' }}" href="/demo">Demo</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link {{ request()->is('about*') ? 'active': '' }}">About Us</a>
                </li>
            </ul>
            <div class="d-flex">
                <button @click="darkMode = !darkMode" class="btn btn-outline-primary">
                    <span x-show="!darkMode">🌙 Dark Mode</span>
                    <span x-show="darkMode">☀️ Light Mode</span>
                </button>
            </div>
        </div>
    </div>
</nav>