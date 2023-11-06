@extends('Sekolah.template')
@section('title', 'Register')

@section('form')
    <form action="{{ route('register.post') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" class="form-control" id="nama" placeholder="Enter your name" name="name"
                value="{{ old('name') }}">

            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="Enter your email" name="email" value="{{ old('email') }}">

            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
