@extends('backend.dashboard')
@section('title','Flight list')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <h3 style="text-align: center">Flight list</h3>
                    <a class="btn btn-success mb-3" href="{{route('flights.showCreate')}}">Create Flight</a>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Form</th>
                                <th>To</th>
                                <th>Departure date</th>
                                <th>Travel time</th>
                                <th>Quantity seat type 1</th>
                                <th>Quantity seat type 2</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($flights as $key => $flight)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$flight->name}}</td>
                                    <td>{{$flight->from}}</td>
                                    <td>{{$flight->to}}</td>
                                    <td>{{$flight->departure_date}}</td>
                                    <td>{{$flight->travel_time}}</td>
                                    <td>{{$flight->quantity_seat_type_1}}</td>
                                    <td>{{$flight->quantity_seat_type_2}}</td>
                                    <td width="180">
                                        <a type="button" class="btn btn-success" href="">Edit</a>
                                        <a onclick="return confirm('Are you sure?')" type="button" class="btn btn-danger" href="{{route('flights.delete',$flight->id)}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$flights->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
