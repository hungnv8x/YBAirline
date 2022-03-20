@extends('backend.dashboard')
@section('content')
    <div class="app-title">
</div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Role Table</h3>
                <table class="table">
                    <a href="{{route('role.showFormCreate')}}">Create New Role</a>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Role Name</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $key=>$role)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$role->name}}</td>
                            <td><a href="{{route('role.edit', $role->id)}}">Edit</a></td>
                            <td><a onclick="return confirm('Are you sure?')" href="{{route('role.delete', $role->id)}}">Delete</a>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
