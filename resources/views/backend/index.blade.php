@extends('backend.dashboard')
@section('content')

    <div >
        <div class="tile">
            <h3 class="tile-title">Flight list</h3>
            <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Form</th>
                    <th>To</th>
                    <th>Departure date</th>
                    <th>Travel time</th>
                    <th>Quantity seat</th>
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
                        <td>{{$flight->quantity_seat}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">User list</h3>
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>role</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key=>$user)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->role->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Role list</h3>
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $key => $role)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$role->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
