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

{{--        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">--}}
{{--            <!-- Indicators -->--}}
{{--            <ol class="carousel-indicators">--}}
{{--                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
{{--                <li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
{{--                <li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
{{--            </ol>--}}

{{--            <!-- Wrapper for slides -->--}}
{{--            <div class="carousel-inner" role="listbox">--}}
{{--                <div class="item active">--}}
{{--                    <img src="https://source.unsplash.com/1600x900/?clouds,water"alt="...">--}}
{{--                    <div class="carousel-caption">--}}
{{--                        Silly Water--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <img src="https://source.unsplash.com/1600x900/?clouds,glory" alt="...">--}}
{{--                    <div class="carousel-caption">--}}
{{--                        Gavel--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item">--}}
{{--                    <img src="https://source.unsplash.com/1600x900/?trees" alt="">--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <!-- Controls -->--}}
{{--            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">--}}
{{--                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Previous</span>--}}
{{--            </a>--}}
{{--            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">--}}
{{--                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
{{--                <span class="sr-only">Next</span>--}}
{{--            </a>--}}
{{--        </div>--}}

        <div class="row minus">
            <div class="col-sm-3 border">
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
                    <p class="bodies">Shop our books</p>
                    <a type="button" href=" {{ route('books') }}" class="btn btn-primary">Shop Books</a>
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
