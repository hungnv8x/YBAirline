@extends('backend.dashboard')
@section('content')
    <div class="app-title">
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <form action="" method="post">
                    <p>Create new role</p>
                    @csrf
                    <input type="text" name="name" placeholder="input role's name">
                    <button>Create</button>
                </form>
            </div>
        </div>
    </div>

@endsection
