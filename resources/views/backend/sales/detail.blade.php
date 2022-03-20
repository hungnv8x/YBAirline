@extends('backend.dashboard')

@section('title','Detail')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <h3 style="text-align: center">Revenue of flight </h3>
                    <div style="background-color: #ebebeb; border-radius: 5px; padding: 5px; margin-bottom: 5px">
                        <table style="margin: 5px; width: 100%">
                            <tr>
                                <td>{{$order->from}}</td>
                                <td><img src= {{asset("images/plane.png")}} ></td>
                                <td>{{$order->to}} </td>
                                <td >{{$order->departure_date}} </td>
                                <td>Quantity seat</td>
                                <td>Quantity sale</td>
                                <td>Revenue</td>

                            </tr>
                            <tr>
                                <td><img width="50px" src={{asset("images/logo.png")}} alt=""></td>
                                <td>{{$order->name}}</td>
                                <td></td>
                                <td></td>
                                <td>{{$order->quantity_seat}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{number_format($order->revenue,0,',','.')}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-6 form-group mt-3">
                        <p style="text-align: right" class="semibold-text mb-0"><a href="{{route('revenue.list')}}" ><i class="fa fa-angle-left fa-fw"></i> Back</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

