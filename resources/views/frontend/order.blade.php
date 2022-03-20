@extends('frontend.home')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <h3 style="text-align: center">Flight list of {{\Illuminate\Support\Facades\Auth::user()->name}}</h3>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Form</th>
                                <th>To</th>
                                <th>Departure date</th>
                                <th>Quantity seat</th>
                                <th>Total money</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $key => $order)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$order->flight->name}}</td>
                                    <td>{{$order->flight->from}}</td>
                                    <td>{{$order->flight->to}}</td>
                                    <td>{{ $order->flight->departure_date}}</td>
                                    <td>{{$order->quantity}}</td>
                                    <td>{{ number_format($order->flight->seat->price * $order->quantity,0,'.','.') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
