@extends('backend.dashboard');
@section('title','Flight update')
@section('content')
    <div class="col-md-6">
        <div class="tile">
            <div class="tile-body">
                <h3 style="text-align: center">Update Flight</h3>
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName" value="{{$flight->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">From</label>
                        <input name="from" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$flight->from}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTo">To</label>
                        <input name="to" type="text" class="form-control" id="exampleInputTo" aria-describedby="emailHelp" value="{{$flight->to}}">
                    </div>
                    <div class="form-group">
                        <label for="pass">Departure Date</label>
                        <input name="departure_date" type="datetime-local" class="form-control" id="pass" aria-describedby="emailHelp" value="{{$flight->departure_date}}">
                    </div>
                    <div class="form-group">
                        <label >Travel Time</label>
                        <input name="travel_time" type="time" class="form-control" aria-describedby="emailHelp" value="{{$flight->travel_time}}">
                    </div>
                    <div class="form-group">
                        <label >Quantity Seat type 1</label>
                        <input name="quantity_seat" type="number" class="form-control" aria-describedby="emailHelp" value="{{$flight->quantity_seat}}">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                        <div class=" col-6 form-group mt-3">
                            <p style="text-align: right" class="semibold-text mb-0"><a href="{{route('flights.list')}}" ><i class="fa fa-angle-left fa-fw"></i> Back</a></p>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
