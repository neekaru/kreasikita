<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kerajinan Tangan')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Flickity CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
        .dark-mode {
            background-color: #2a2a2a;
            color: #f8f9fa;
        }
        .dark-mode .navbar {
            background-color: #343a40 !important;
        }
        .dark-mode .navbar-brand,
        .dark-mode .nav-link,
        .dark-mode .navbar-toggler {
            color: #ffffff !important;
        }
        .dark-mode .jumbotron {
            background-color: #2c3034;
        }
        .dark-mode h1, .dark-mode h2, .dark-mode h3, .dark-mode h4, .dark-mode h5, .dark-mode h6 {
            color: #ffffff;
        }
        .dark-mode .card {
            background-color: #343a40;
            border-color: #454d55;
        }
        .dark-mode .card-text {
            color: #ffffff;
        }
        .dark-mode .bg-light {
            background-color: #343a40 !important;
        }
        .dark-mode footer {
            background-color: #343a40 !important;
            color: #ffffff;
        }
        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            background-color: #e9ecef;
            border-radius: 0.3rem;
        }
        /* Flickity carousel styles */
        .carousel-cell {
            width: 100%;
            height: 300px;
            margin-right: 10px;
            border-radius: 5px;
            counter-increment: carousel-cell;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .carousel-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 15px;
            text-align: center;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .dark-mode .carousel-cell {
            background-color: #343a40;
            color: white;
        }
        .carousel-container {
            margin-bottom: 40px;
        }
        /* Flickity button styles */
        .flickity-button {
            background: rgba(255, 255, 255, 0.7);
        }
        .flickity-button:hover {
            background: white;
        }
        .dark-mode .flickity-button {
            background: rgba(50, 50, 50, 0.7);
            color: white;
        }
        .dark-mode .flickity-button:hover {
            background: #444;
        }
        .flickity-prev-next-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .flickity-page-dots .dot {
            width: 12px;
            height: 12px;
            opacity: 1;
            background: rgba(0, 0, 0, 0.3);
        }
        .flickity-page-dots .dot.is-selected {
            background: #000;
        }
        .dark-mode .flickity-page-dots .dot {
            background: rgba(255, 255, 255, 0.3);
        }
        .dark-mode .flickity-page-dots .dot.is-selected {
            background: #fff;
        }
    </style>
    @yield('styles')
</head>
<body x-data="{ darkMode: false }" :class="darkMode ? 'dark-mode' : ''" x-cloak>
    @include('layouts.header')

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('layouts.footer')

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('scripts')
</body>
</html>