@extends('layout')

@section('content')
    <button class="btn btn-primary" onclick="confirmation()">Place Order</button>

    <div>
        <p id="confirmationNumber">Your confirmation number is: <span id="x"></span></p>
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
