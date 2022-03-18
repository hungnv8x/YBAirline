@extends('backend.dashboard')
@section('content')
<form action="{{route('role.update', $role->id)}}" method="post">
    @csrf
    <input type="text" name="name" value="{{$role->name}}">
    <button>Update</button>
</form>
@endsection
