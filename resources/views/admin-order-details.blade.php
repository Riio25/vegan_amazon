@extends('layout')

@section('content')
    <div class="container">
        <h1>Order Details</h1>
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-primary" onclick="window.location='{{url('admin/home')}}'">Home</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h2>Order Number: {{$order->ordernumber}}</h2>
                    <span>Order Date: {{$order->created_at}}</span>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Order Status</div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body" align="center">Product Order Status</div>
                                <div class="panel-footer">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-xs-3">Status:</div>
                                                <div id="displayedstatus" class="col-xs-5">{{$order->status}}</div>
                                                @if ($order->status == 'Cancelled')

                                                @elseif ($order->status == 'Shipped')
                                                    <div class="col-xs-4">
                                                        <button class="btn btn-default" disabled>Cannot Cancel</button>
                                                    </div>
                                                @else
                                                <div class="col-xs-4">
                                                    <button id="btn-cancel-order" class="btn btn-danger form-control" name="btn-cancel-order" value="{{$order->id}}">Cancel Order</button>
                                                </div>
                                                @endif
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Customer</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Created On</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$order->first_name}} {{$order->last_name}}</td>
                                <td>Empty</td>
                                <td>Empty</td>
                                <td>Empty</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Order</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td>Order Number</td>
                                <td>Status</td>
                                <td>Product Name</td>
                                <td>Customer Name</td>
                                <td>Total Paid</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$order->ordernumber}}</td>
                                <td>{{$order->status}}</td>
                                <td>{{$order->product_name}}</td>
                                <td>{{$order->first_name}} {{$order->last_name}}</td>
                                <td>{{$order->total_paid}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Shipping</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>First Name</td>
                                    <td>Last Name</td>
                                    <td>Phone</td>
                                    <td>Shipping Method</td>
                                    <td>Amount Paid</td>
                                    <td>Address</td>
                                    <td>City</td>
                                    <td>State</td>
                                    <td>Zip</td>
                                </tr>
                            </thead>
                            <tbody>
                            {{--                                foreach--}}
                            <tr>
                                <td>{{$order->first_name}}</td>
                                <td>{{$order->last_name}}</td>

                                <td></td>
                                <td>Standard</td>
                                <td>9.99</td>
                                <?php
                                $str = explode(',' , $order->shipping_address);
                                ?>
                                <td>{{$str[0]}}</td>
                                <td>{{$str[1]}}</td>
                                <td>{{$str[2]}}</td>
                                <td>{{$str[3]}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Customer Notes</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td>Created By</td>
                                <td>Note</td>
                                <td>Created On</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>rrisk34</td>
                                <td>Customer wants their book rn</td>
                                <td>2020-09-14</td>
                            </tr>
                            <tr>
                                <td>razr19</td>
                                <td>Order status updated to new.</td>
                                <td>2020-09-14</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){

            $('#btn-cancel-order').click(function(){
                $.ajax({
                    'url': 'cancel-order',
                    'method': 'POST',
                    'data': {
                        'orderid' : $('#btn-cancel-order').val()
                    },
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'))
                    },
                }).done(function(msg){
                    alert('Order ' + msg.ordernumber + ' was cancelled.')
                    $('#displayedstatus').text(msg.status)
                    $('#btn-cancel-order').hide()
                })

            })
        })
    </script>
@endsection
