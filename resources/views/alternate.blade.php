@extends('altout')

@section('contents')


    <div>
        <div class="top">
            <div class="options">
                <span>Hamburger</span>
                <span>Vegan-Amazon</span>
                <input type="text">
                <span>Cart</span>
            </div>
            <div class="nav">
                <a href="">Best Sellers</a>
                <a href="">Customer Service</a>
                <a href="">Today's Deals</a>
                <a href="">New Releases</a>
            </div>
        </div>
        <div>
{{--            <img src="../../public/images/justice.jpg" alt="carousel">--}}
            <img src="https://source.unsplash.com/1600x900/?clouds,water" alt="carousel2">
        </div>
        <div class="boxes">
            <div class="box">
                <div><h4>Header 1</h4></div>
                <div><p>This is the body of the box</p></div>
            </div>
            <div class="box">
                <div><h4>Header 2</h4></div>
                <div><p>This is the body of the box</p></div>
            </div>
            <div class="box">
                <div><h4>Header 3</h4></div>
                <div><p>This is the body of the box</p></div>
            </div>
            <div class="box">
                <div><h4>Header 4</h4></div>
                <div><p>This is the body of the box</p></div>
            </div>
        </div>
    </div>

@endsection

