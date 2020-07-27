@extends ('layout')

@section('content')

    <div class="container view">
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
        <div>
            <div>
                <h1>Carosel goes here</h1>
            </div>
        </div>

        <div id="myBoxes">
            <div id="box1" class="boxes4 col-sm-2">
                <div class="header">
                    <h2>Box 1 Header</h2>
                </div>
                <div class="box1-body">
                    <p class="bodies">the body of this box goes here</p>
                </div>
            </div>

            <div id="box2" class="boxes4 col-sm-2">
                <div class="header">
                    <h2>Box 2 Header</h2>
                </div>
                <div class="box1-body">
                    <p class="bodies">the body of this box goes here</p>
                </div>
            </div>
            <div id="box3" class="boxes4 col-sm-2">
                <div class="header">
                    <h2>Box 3 Header</h2>
                </div>
                <div class="box1-body">
                    <p class="bodies">the body of this box goes here</p>
                </div>
            </div>
            <div id="box4" class="boxes4 col-sm-2">
                <div class="header">
                    <h2>Box 4 Header</h2>
                </div>
                <div class="box1-body">
                    <p class="bodies">the body of this box goes here</p>
                </div>
            </div>
        </div>

        </div>
    </div>


@endsection
