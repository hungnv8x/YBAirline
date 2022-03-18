@extends('backend.dashboard');
@section('title','Flight create')
@section('content')
    <div class="col-md-6">
        <div class="tile">
            <div class="tile-body">
                <h3 style="text-align: center">Create Flight</h3>
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">From</label>
                        <input name="from" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTo">To</label>
                        <input name="to" type="text" class="form-control" id="exampleInputTo" aria-describedby="emailHelp" >
                    </div>
                    <div class="form-group">
                        <label for="pass">Departure Date</label>
                        <input name="departure_date" type="datetime-local" class="form-control" id="pass" aria-describedby="emailHelp" >
                    </div>
                    <div class="form-group">
                        <label >Travel Time</label>
                        <input name="travel_time" type="time" class="form-control" aria-describedby="emailHelp" >
                    </div>
                    <div class="form-group">
                        <label >Quantity Seat type 1</label>
                        <input name="quantity_seat_type_1" type="number" class="form-control" aria-describedby="emailHelp" >
                    </div>
                    <div class="form-group">
                        <label >Quantity Seat type 2</label>
                        <input name="quantity_seat_type_2" type="number" class="form-control" aria-describedby="emailHelp" >
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                        <div class="col-6 form-group mt-3">
                            <p style="text-align: right" class="semibold-text mb-0"><a href="{{route('flights.list')}}" ><i class="fa fa-angle-left fa-fw"></i> Back</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
