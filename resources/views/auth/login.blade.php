@extends('layout.main')
@section('title', 'Rental Buku | Login')

@section('container')

  <div class="d-flex justify-content-center align-items-center" style="height: 100vh; box-sizing: border-box;">
    <div class="p-4 col-5 border">
      @if (Session::get('failed'))
        <div class="alert alert-danger">{{ Session::get('failed') }}</div>
      @endif
      
      <form action="{{ route('auth') }}" method="post">
        @csrf

        {{-- input username --}}
        <div>
          <label for="username" class="col-form-label">Username</label>
          <input type="text" name="username" id="username" class="form-control" required>
        </div>

        {{-- input password --}}
        <div class="mt-2">
          <label for="password" class="col-form-label">Password</label>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>

        {{-- submit data --}}
        <div class="mt-4">
          <button type="submit" class="btn btn-primary form-control">Login</button>
        </div>

        {{-- register --}}
        <div class="mt-4 text-center">
          <a href="#">Sign Up</a>
        </div>
      </form>
    </div>
  </div>

@endsection