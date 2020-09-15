@extends('layout')


@section('page-title')
    <title>Vegan-Amazon Admin</title>
@endsection

@section('content')

    <div class="container">
        <div>
            <h1>Order History</h1>
        </div>
        <div class="row" style="margin-bottom:15px">
            <div class="col-md-6">
                <button class="btn btn-primary" onclick="window.location='{{url('admin/home')}}'">Home</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Search</div>
                    <div class="panel-body">
                        <label for="OrderNumber">Order Number</label>
                        <input type="text" name="OrderNumber" placeholder="Order Number">
                        <label style="display: block;" for="CustomerName">Customer Name</label>
                        <input type="text" name="CustomerName" placeholder="Customer Name">
                        <label for="Status">Status</label>
                        <select name="status" id="status-search">
                            <option value="">All Statuses</option>
                            <option value="New">New</option>
                            <option value="Processing">Processing</option>
                            <option value="Shipped">Shipped</option>
                            <option value="Delivered">Delivered</option>
                        </select>
                        <br>
                        <h2> {{$count}} Orders</h2>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Order Number</th>
                                <th>Customer Name</th>
                                <th>Product Name</th>
                                <th>Product Type</th>
                                <th>Total Paid</th>
                                <th>Status</th>
                                <th>Order Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td><a href="order/{{$order->ordernumber}}">{{$order->ordernumber}}</a></td>
                                    <td>{{$order->first_name}}</td>
                                    <td>{{$order->product_name}}</td>
                                    <td></td>
                                    <td>${{$order->total_paid}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{$order->created_at}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>


    </div>
@endsection
