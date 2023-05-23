@extends('auth.main')
@section('title', 'Rental Buku | Login')

@section('container')

    <div class="p-4 col-5 border">
      <h1 class="mb-4 text-center">Login</h1>

      {{-- jika gagal, tampilkan pesan gagalnya --}}
      @if (Session::get('failed'))
        <div class="alert alert-danger">{{ Session::get('failed') }}</div>
      @endif
      {{-- end gagal --}}
      
      {{-- ini form --}}
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
          Don't have an account yet? <a href="{{ route('indexRegister') }}">Sign Up</a>
        </div>
      </form>
      {{-- ini akhir dari form --}}

    </div>
    
@endsection