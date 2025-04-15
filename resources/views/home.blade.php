<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerajinan Tangan</title>
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
</head>
<body x-data="{ darkMode: false }" :class="darkMode ? 'dark-mode' : ''" x-cloak>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Kerajinan Tangan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/demo">Demo</a>
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

    <div class="container mt-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to Kerajinan Tangan!</h1>
            <p class="lead">This is a simple website showcasing handcrafted items and traditional crafts.</p>
            <hr class="my-4">
            <p>Explore our collection of handmade products created by skilled artisans.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
        
        <h2 class="mt-5 mb-3">Featured Crafts</h2>
        <div class="carousel-container">
            <div class="main-carousel" data-flickity='{"wrapAround": true, "autoPlay": true, "pageDots": true}'>
                <div class="carousel-cell" style="background-image: url('https://picsum.photos/id/237/800/600')">
                    <div class="carousel-caption">
                        <h3>Traditional Pottery</h3>
                    </div>
                </div>
                <div class="carousel-cell" style="background-image: url('https://picsum.photos/id/164/800/600')">
                    <div class="carousel-caption">
                        <h3>Handwoven Baskets</h3>
                    </div>
                </div>
                <div class="carousel-cell" style="background-image: url('https://picsum.photos/id/106/800/600')">
                    <div class="carousel-caption">
                        <h3>Wooden Carvings</h3>
                    </div>
                </div>
                <div class="carousel-cell" style="background-image: url('https://picsum.photos/id/225/800/600')">
                    <div class="carousel-caption">
                        <h3>Batik Textiles</h3>
                    </div>
                </div>
                <div class="carousel-cell" style="background-image: url('https://picsum.photos/id/145/800/600')">
                    <div class="carousel-caption">
                        <h3>Beaded Jewelry</h3>
                    </div>
                </div>
                <div class="carousel-cell" style="background-image: url('https://picsum.photos/id/175/800/600')">
                    <div class="carousel-caption">
                        <h3>Paper Crafts</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Handmade Crafts</h5>
                        <p class="card-text">Discover unique handmade crafts from local artisans.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Traditional Arts</h5>
                        <p class="card-text">Explore traditional art forms passed down through generations.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Workshops</h5>
                        <p class="card-text">Join our workshops to learn craft-making techniques.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <p>© 2025 Kerajinan Tangan. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Initialize Flickity carousel
        document.addEventListener('DOMContentLoaded', function() {
            var elem = document.querySelector('.main-carousel');
            var flkty = new Flickity(elem, {
                // options
                wrapAround: true,
                autoPlay: 1000,
                pageDots: true,
                prevNextButtons: true
            });
        });
    </script>
</body>
</html>