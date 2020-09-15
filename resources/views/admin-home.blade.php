@extends('layout')

@section('page-title')
    <title>Vegan-Amazon Admin</title>
@endsection

@section('content')
    <div class="container">
        <div>
            <h1>Admin Home</h1>
        </div>
        <div class="row">
            <div class="col-md-4" style="border:1px solid black; background-color: lightgrey;">
                <div class="header">
                    <h3><u>Customer</u></h3>
                </div>
                <div>
                    <a href="">Customers</a>
                </div>
                <div>
                    <a href="/admin/orders">Orders</a>
                </div>
                <div>
                    <a href="">Promos</a>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4" style="border: 1px solid black; background-color: lightgrey">
                <div class="header">
                    <h3><u>Inventory</u></h3>
                </div>
                <div>
                    <a href="">Books</a>
                </div>
                <div> <a href="">Food</a></div>
                <div><a href="">Clothing</a></div>

            </div>
        </div>
    </div>


@endsection
