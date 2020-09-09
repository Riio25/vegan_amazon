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
        <form action="{{route('place')}}" method="POST">
            @csrf

            <input type="hidden" name="item" value="{{$id}}">
            <div class="row">
                <div class="col-sm-6" style="border: black 5px solid; padding: 5px; background-color:lightgrey;">
                    <div class="form-inline" >
                        <div class="form-group">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" name="firstName" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" name="lastName" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" name="streetAddress" class="form-control" placeholder="Address">
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="inputCity">City</label>
                            <input type="text" name="city" class="form-control" placeholder="City">
                        </div>
                        <div class="form-group">
                            <label for="inputState">State</label>
                            <input type="text" name="state" class="form-control" placeholder="State">
                        </div>
                        <div class="form-group">
                            <label for="inputZip">Zip</label>
                            <input type="text" name="zip" placeholder="Zip" class="form-control">
                        </div>
                    </div>
                    <div class="checkbox" style="border: black 1px solid; padding-right: -20px;">
                        <label>
                            <input type="checkbox">Keep Address on File
                        </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div style="border: 4px black solid; padding:5px;">
                        <ul style="list-style-type: none;">
                            <li>Title: {{$item}}</li>
                            <li id="price">Price: ${{$price}}</li>
                            <li>Upgrades: $2</li>
                            <li>Subtotal: $12</li>
                            <hr>
                            <li>Tax: $1.50</li>
                            <li>Total: $13.50</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-sm-8" style="border: 2px solid black;">
                    <div class="form-group">
                        <label for="inputCC">Credit Card Number</label>
                        <input type="text" name="CCNumber" class="form-control" placeholder="Credit Card Number">
                    </div>
                    <div class="form-group">
                        <label for="exp">Exp:</label>
                    </div>
                    <div class="form-group form-inline">
                        <label for="expMonth">Month</label>
                        <select name="expMonth" id="" class="form-control">
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
                        <select class="form-control" name="expYear" id="">
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
                        <input type="text" name="cvv" class="form-control" placeholder="C V V" style="width: 70px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button id="my-button" class="btn btn-primary" style="margin-left: 35px; margin-top: 20px;">Place Order</button>
                </div>
            </div>
        </form>
    </div>

{{--    Trying to add actual item price to receive real total.--}}
<script>
    $(document).ready(function(){

        var test = parseInt($('#price'));

        console.log(test);

        $('#my-button').click(function (event){
           event.preventDefault();
           console.log('my button was clicked');
            $('#my-button').text('Order submitting...').css('background-color', 'grey');

            var fname = $('input[name="firstName"]').val();
            console.log(fname);
            if( fname == '') {
                $('input[name="firstName"]').css('border', '1px solid red')
            } else {
                $('input[name="firstName"]').css('border', '1px solid green')
            }

            $.ajax({
                method: "POST",
                url: "/place-order",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    'firstName': 'Hiro',
                    'lastName': 'Yuki',
                    'streetAddress': 'required',
                    'city': 'required',
                    'state': 'required',
                    'zip': 'required',
                    'CCNumber': 'required',
                    'item': '2'
                }
            }).done(function(data) {
                console.log('ajax is done')
                console.log(data.ordernumber)
                window.location.href = '/order-confirmation/'+data.ordernumber
            });

        });

    })


</script>

@endsection
