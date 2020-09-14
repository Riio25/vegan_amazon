@extends('layout')

@section('content')

    <div class="container">
        <div>
            <h1>Order Confirmation</h1>
            <hr>
        </div>
            <div>
                <h2>Thank you for your order, {{$name}}</h2>
                <h2>You purchased {{$item}}.</h2>
                <p>You will be charged ${{$price}}.</p>
                <p>Your order will be shipped to {{$address}}.</p>
                <p>Your Order Confirmation Number is: {{$ordernumber}}</p>

            </div>

            <div>
                <button class="btn btn-primary" onclick="window.location='{{url('/')}}'">Home Page</button>
            </div>
    </div>


@endsection
