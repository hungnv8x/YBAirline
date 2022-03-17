@extends('backend.dashboard');
@section('title','User update')
@section('content')
    <div class="col-md-6">
        <div class="tile">
            <div class="tile-body">
                <h3 style="text-align: center">Create user</h3>
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Full Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone">Phone</label>
                        <input name="phone" type="text" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input name="password" type="password" class="form-control" id="pass" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Role</label>
                        <select name="role" class="form-control" id="exampleFormControlSelect1">
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <div class="form-group mt-3">
                        <p class="semibold-text mb-0"><a href="{{route('users.list')}}" ><i class="fa fa-angle-left fa-fw"></i> Back</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
