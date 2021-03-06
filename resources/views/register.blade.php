@extends('master')

@section('content')
    <h2>Register an account</h2>
    <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                @if($errors->count() === 1)
                    {{ $errors->first() }}
                @else
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endif

        @if(session()->has('message'))
            <div class="alert alert-{{ session('type') }}">
                {{ session('message') }}
            </div>
        @endif

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="exampleInputPhone1">Phone Number</label>
            <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Enter phone">
        </div>

        <div class="form-group">
            <label for="exampleInputUsername1">Username</label>
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Enter username">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password">
        </div>

        <div class="form-group">
            <label for="exampleInputPhoto1">Photo</label>
            <input type="file" class="form-control" name="photo" placeholder="Upload Photo">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop
