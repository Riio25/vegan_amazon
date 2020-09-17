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

            <div class="panel panel-default">
                <div class="panel-heading">Welcome to Vegan-Amazon Admin</div>
                <div class="panel-body">
                    <div class="list-group col-xs-6">
                        <a href="#" class="list-group-item active">Customer</a>
                        <a href="#" class="list-group-item list-group-item-action">Customers</a>
                        <a href="/admin/orders" class="list-group-item list-group-item-action">Orders</a>
                        <a href="#" class="list-group-item list-group-item-action">Promotion Manager</a>
                    </div>
                    <div class="list-group col-xs-6">
                        <a href="#" class="list-group-item active">Inventory</a>
                        <a href="#" class="list-group-item list-group-item-action">Books</a>
                        <a href="#" class="list-group-item list-group-item-action">Food</a>
                        <a href="#" class="list-group-item list-group-item-action">Clothing</a>
                    </div>
                </div>

            </div>

            </div>
        </div>
    </div>


@endsection
