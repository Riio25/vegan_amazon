@extends('layout')

@section('content')


<div>
    <h2>Thank you for your order, {{$name}}</h2>
    <h2>You purchased {{$item}}.</h2>
    <p>You will be charged {{$price}}.</p>
    <p>Your order will be shipped to {{$address}}.</p>
    <p>Your Order Confirmation Number is: {{$ordernumber}}</p>

</div>

    <div>
        <button onclick="window.location='{{url('checkout')}}'">Done?</button>
    </div>



@endsection
