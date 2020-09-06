@extends('layout')

@section('content')


<div>
    <h2>Thank you for your order, {{$name}}</h2>
    <p>Your order of {{$item}} will be shipped to {{$address}}.</p>
    <p>Your Order Confirmation Number is: <span id="x"></span></p>

</div>

<script>
    $(document).ready(function(){
        $('#x').text(Math.floor(Math.random() * 500))
        $('#confirmationNumber').show()
    })
</script>

@endsection
