@extends('backend.dashboard')

@section('title','Users list')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <h3 style="text-align: center">User list</h3>
                    <a class="btn btn-success mb-3" href="{{route('users.showCreate')}}">Create User</a>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key => $user)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->role->name}}</td>
                                <td style="width: 180px">
                                    <a  type="button" class="btn btn-success" href="{{route('users.edit',$user->id)}}">Edit</a>
                                    <a onclick="return confirm('Are you sure?')" type="button" class="btn btn-danger" href="{{route('users.delete',$user->id)}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
