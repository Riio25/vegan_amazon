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
        <div class="row">
            <div class="col-sm-6">
                <form style="border: black 5px solid; padding: 5px; background-color:lightgrey;">
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" placeholder="Address">
                    </div>
                    <div class="form-inline">
                        <div class="form-group">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" placeholder="City">
                        </div>
                        <div class="form-group">
                            <label for="inputState">State</label>
                            <input type="text" class="form-control" placeholder="State">
                        </div>
                        <div class="form-group">
                            <label for="inputZip">Zip</label>
                            <input type="text" placeholder="Zip" class="form-control">
                        </div>
                    </div>
                    <div class="checkbox" style="border: black 1px solid; padding-right: -20px;">
                        <label>
                            <input type="checkbox">Keep Address on File
                        </label>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <div style="border: 4px black solid; padding:5px;">
                    <ul style="list-style-type: none;">
                        <li>Title: How to Code for Dummies</li>
                        <li>Price: $10</li>
                        <li>Upgrades: $2</li>
                        <li>Subtotal: $12</li>
                        <hr>
                        <li>Tax: $1.50</li>
                        <li>Total: $13.50</li>
                    </ul>
                    <button class="btn btn-primary" style="margin-left: 35px;" onclick="confirmation()">Place Order</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="confirmationNumber">Your Confirmation Number is: <span id="x"></span></h2>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function(){
            $('#confirmationNumber').hide()
        })
        function confirmation(){
            $('#x').text(Math.floor(Math.random() * 500))
            $('#confirmationNumber').show()
        }
    </script>
@endsection
