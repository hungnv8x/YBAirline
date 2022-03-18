@extends('backend.dashboard')
@section('content')

    <form action="{{route('seat.update', $seat->id)}}" method="post">
        @csrf

        <input type="text" name="name" value="{{$seat->name}}">

        <input type="text" name="price" value="{{$seat->price}}">
        <button >Update</button>
    </form>
@endsection
