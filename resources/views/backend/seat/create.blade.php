@extends('backend.dashboard')
@section('content')

    <form action="" method="post">
        @csrf
        <p>Input seat's name</p>
        <input type="text" name="name" placeholder="input seat's name">
        <p>Input seat's price</p>
        <input type="text" name="price" placeholder="input seat's price">
        <button>Create</button>
    </form>
@endsection
