@extends('backend.dashboard')

@section('title','Sales')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <h3 style="text-align: center">Flight detail </h3>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Form</th>
                                <th>To</th>
                                <th>Departure date</th>
                                <th>Revenue</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $key => $order)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->from}}</td>
                                    <td>{{$order->to}}</td>
                                    <td>{{$order->departure_date}}</td>
                                    <td>{{number_format($order->revenue,0,',','.')}}</td>
                                    <td width="160">
                                        <a type="button" class="btn btn-info" href="{{route('revenue.detail',$order->id)}}">Detail</a>
                                    </td>
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
