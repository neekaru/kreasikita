@extends('layouts.app')

@section('title', 'Kerajinan Tangan')

@section('content')
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
@endsection

@section('scripts')
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
@endsection