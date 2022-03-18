@extends('frontend.home')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <h3 style="text-align: center">Flight list</h3>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Form</th>
                                <th>To</th>
                                <th>Departure date</th>
                                <th>Travel time</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($flights as $flight)
                                <tr>
                                    <td>{{$flight->name}}</td>
                                    <td>{{$flight->from}}</td>
                                    <td>{{$flight->to}}</td>
                                    <td>{{$flight->departure_date}}</td>
                                    <td>{{$flight->travel_time}}</td>
                                    <td style="color: red">{{$flight->seat->price }}</td>
                                    <td >
                                        <a  href="">Detail</a>
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
