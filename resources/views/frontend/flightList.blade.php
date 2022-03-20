@extends('frontend.home')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <h3 style="text-align: center">Flight list</h3>
                    <form class="form-inline my-2 my-lg-0 " method="get">
                        @csrf
                        <input value="{{session()->get('from')}}" name="from" class="form-control mr-sm-2" type="search" placeholder="From" aria-label="Search">
                        <input value="{{session()->get('to')}}" name="to" class="form-control mr-sm-2" type="search" placeholder="To" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <div class="table-responsive mt-2">
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
                                    <td style="color: red">{{number_format($flight->seat->price,0,'.','.')  }}</td>
                                    <td >
                                        <a  href="{{route('home.detail',$flight->id)}}">Order</a>
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
