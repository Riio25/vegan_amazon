@extends ('layout')

@section('content')

    <div class="container-fluid">
        <div class="top-bar">
            <span>Hamburger</span>
            <span>Vegan-Amazon</span>
            <input type="text">
            <span class="glyphicon borders">&#xe015;</span>
            <span class="glyphicon cart">&#xe116;</span><span class="cart">Cart</span>
        </div>
        <div class="content">
            <div class="navish">
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://source.unsplash.com/1600x900/?clouds,water" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1600x900/?ocean,water" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1600x900/?trees,water" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="header">
                    <h2>Box 1 Header</h2>
                </div>
                <div class="box1-body">
                    <p class="bodies">the body of this box goes here</p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="header">
                    <h2>Box 2 Header</h2>
                </div>
                <div class="box1-body">
                    <p class="bodies">the body of this box goes here</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="header">
                    <h2>Box 3 Header</h2>
                </div>
                <div class="box1-body">
                    <p class="bodies">the body of this box goes here</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="header">
                    <h2>Box 4 Header</h2>
                </div>
                <div class="box1-body">
                    <p class="bodies">the body of this box goes here</p>
                </div>
            </div>
        </div>

    </div>



@endsection
