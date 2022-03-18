@extends('backend.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Seat list</h3>
                <a href="{{route('seat.create')}}">Creat New Seat</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($seats as $key => $seat)
                        <tr class="table-info">
                            <td>{{$key + 1}}</td>
                            <td>{{$seat->name}}</td>
                            <td>{{$seat->price}}</td>
                            <td><a href="{{route('seat.edit', $seat->id)}}">Update</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection


