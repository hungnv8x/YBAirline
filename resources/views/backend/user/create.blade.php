@extends('backend.dashboard');
@section('title','User update')
@section('content')
    <div class="col-md-6">
        <div class="tile">
            <div class="tile-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Full Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
