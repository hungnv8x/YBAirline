@extends('backend.dashboard');
@section('title','User update')
@section('content')
    <div class="col-md-6">
        <div class="tile">
            <div class="tile-body">
                <form method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Full Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputPassword1" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Role</label>
                        <select name="role" class="form-control" id="exampleFormControlSelect1">
                            @foreach($roles as $role)
                            <option {{$user->role->id == $role->id?'selected':''}} value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <div class="form-group mt-3">
                        <p class="semibold-text mb-0"><a href="{{route('users.list')}}" ><i class="fa fa-angle-left fa-fw"></i> Back</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
