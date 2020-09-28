@extends('layout')

@section('content')
{{--    <div class="container">--}}
{{--        --}}
{{--    --}}
{{--        <button class="btn btn-primary" onclick="confirmation()">Place Order</button>--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <p id="confirmationNumber">Your confirmation number is: <span id="x"></span></p>--}}
{{--    </div>--}}




    <div class="container">
        <h1>Checkout</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container" id="errors">
            <p style="color: red; font-size: 24px; font-weight: bold;">Highlighted fields are required.</p>
        </div>
        <form action="{{route('place')}}" method="POST">
            @csrf

            <input type="hidden" id="item" name="item" value="{{$id}}">
            <div class="row">
                <div class="col-sm-6" style="border: black 5px solid; padding: 5px; background-color:lightgrey;">
                    <div class="form-inline" >
                        <div class="form-group" >
                            <label  for="inputFirstName">First Name</label>
                            <input id="submit_first_name" type="text" name="firstName" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="inputLastName">Last Name</label>
                            <input id="submit_last_name" type="text" name="lastName" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" id="address" name="streetAddress" class="form-control" placeholder="Address">
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="inputCity">City</label>
                            <input type="text" id="city" name="city" class="form-control" placeholder="City">
                        </div>
                        <div class="form-group">
                            <label for="inputState">State</label>
                            <input type="text" id="state" name="state" class="form-control" placeholder="State">
                        </div>
                        <div class="form-group">
                            <label for="inputZip">Zip</label>
                            <input type="text" id="zip" name="zip" placeholder="Zip" class="form-control" style="margin-top: 15px;">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div style="border: 4px black solid; padding:5px;">
                        <ul style="list-style-type: none;">
                            <li>Title: {{$item}}</li>
                            <li>Price: $<span id="price">{{$price}}</span></li>
                            <li>Shipping: $<span id="shipping">9.99</span></li>
                            <li>Subtotal: $<span id="subtotal">{{$subtotal}}</span></li>
                            <hr>
                            <li>Tax: $<span id="tax">{{$tax}}</span></li>
                            <li>Total: $<span id="totalPaid">{{$total_price}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-sm-8" style="border: 2px solid black;">
                    <div class="form-group">
                        <label for="inputCC">Credit Card Number</label>
                        <input id="CCNumber" type="text" name="CCNumber" class="form-control" placeholder="Credit Card Number">
                    </div>
                    <div class="form-group">
                        <label for="exp">Exp:</label>
                    </div>
                    <div class="form-group form-inline">
                        <label for="expMonth">Month</label>
                        <select name="expMonth" id="expMonth" class="form-control">
                            <option>Month</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <label for="expYr">Year</label>
                        <select class="form-control" id="expYear" name="expYear">
                            <option>Year</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2022">2023</option>
                            <option value="2022">2024</option>
                            <option value="2022">2025</option>
                            <option value="2022">2026</option>
                            <option value="2022">2027</option>
                            <option value="2022">2028</option>
                            <option value="2022">2029</option>
                            <option value="2022">2030</option>
                            <option value="2022">2031</option>
                        </select>
                        <label for="inputCVV">C V V</label>
                        <input id="cvv" type="text" name="cvv" class="form-control" placeholder="C V V" style="width: 70px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button id="place-order" class="btn btn-primary" style="margin-left: 35px; margin-top: 20px;">Place Order</button>
                </div>
            </div>
        </form>
    </div>

{{--    Trying to add actual item price to receive real total.--}}
<script>
    $(document).ready(function(){

        $('#errors').css('visibility', 'hidden');
        // var price = $('#price').text();
        // var shipping = $('#shipping').text();
        //
        // var subtotal = parseFloat(price) + parseFloat(shipping);
        //
        // $('#subtotal').text(subtotal.toFixed(2));
        // var tax = subtotal * .07;
        //
        // $('#tax').text(tax.toFixed(2));
        //
        // var totalpaid = tax + subtotal;
        // $('#totalPaid').text(totalpaid.toFixed(2));




        $('#place-order').on('click', function(event){
            event.preventDefault(event);

            var okayToSend = false;

            if($('#submit_first_name').val() == ''){
                $('#submit_first_name').css('border', '2px solid red');
                $('#errors').css('visibility', 'visible');
                okayToSend = false;
            } else {
                $('#submit_first_name').css('border-width', '0');
                okayToSend = true;
            }
            if($('#submit_last_name').val() == ''){
                $('#submit_last_name').css('border', '2px solid red');
                $('#errors').css('visibility', 'visible');
                okayToSend = false;
            } else {
                $('#submit_last_name').css('border-width', '0');
                okayToSend = true;
            }
            if($('#address').val() == ''){
                $('#address').css('border', '2px solid red');
                $('#errors').css('visibility', 'visible');
                okayToSend = false;
            } else {
                $('#address').css('border-width', '0');
                okayToSend = true;
            }
            if($('#state').val() == ''){
                $('#state').css('border', '2px solid red');
                $('#errors').css('visibility', 'visible');
                okayToSend = false;
            } else {
                $('#state').css('border-width', '0');
                okayToSend = true;
            }
            if($('#city').val() == ''){
                $('#city').css('border', '2px solid red');
                $('#errors').css('visibility', 'visible');
                okayToSend = false;
            } else {
                $('#city').css('border-width', '0');
                okayToSend = true;
            }
            if($('#zip').val() == ''){
                $('#zip').css('border', '2px solid red');
                $('#errors').css('visibility', 'visible');
                okayToSend = false;
            } else {
                $('#zip').css('border-width', '0');
                okayToSend = true;
            }
            if($('#CCNumber').val() == ''){
                $('#CCNumber').css('border', '2px solid red');
                $('#errors').css('visibility', 'visible');
                okayToSend = false;
            } else {
                $('#CCNumber').css('border-width', '0');
                okayToSend = true;
            }
            if($('#expMonth').val() == 'Month'){
                $('#expMonth').css('border', '2px solid red');
                $('#errors').css('visibility', 'visible');
                okayToSend = false;
            } else {
                $('#expMonth').css('border-width', '0');
                okayToSend = true;
            }
            if($('#expYear').val() == 'Year'){
                $('#expYear').css('border', '2px solid red');
                $('#errors').css('visibility', 'visible');
                okayToSend = false;
            } else {
                $('#expYear').css('border-width', '0');
                okayToSend = true;
            }
            if($('#cvv').val() == ''){
                $('#cvv').css('border', '2px solid red');
                $('#errors').css('visibility', 'visible');
                okayToSend = false;
            } else {
                $('#cvv').css('border-width', '0');
                okayToSend = true;
            }

            //bad attempt at switch statement for validation.
            // var empty = ''
            // console.log(empty.val())
            // switch(empty.val() == ''){
            //     case $('#submit_first_name').val():
            //         $('#submit_first_name').css('border-width', '0');
            //         $('#submit_first_name').css('border', '2px solid red');
            //         $('#errors').css('visibility', 'visible');
            //         break;
            //     default:
            //         console.log(empty)
            // }


            if (okayToSend == true){
                $.ajax({
                    url: '/place-order',
                    method: 'POST',
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'))
                    },
                    data: {
                        "firstName": $('#submit_first_name').val(),
                        "lastName": $('#submit_last_name').val(),
                        "streetAddress": $('#address').val(),
                        "city": $('#city').val(),
                        "state": $('#state').val(),
                        "zip": $('#zip').val(),
                        "item": $('#item').val(),
                        "CCNumber": $('#CCNumber').val(),
                        "totalPaid": $('#totalPaid').text()
                    }
                })
                    .done(function(data){
                        window.location.href = "/order-confirmation/" + data.ordernumber
                    });
            }
        });

    })


</script>

@endsection
