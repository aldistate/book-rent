@extends('layout.main')
@section('title', 'Rental Buku | Register')

@section('container')

  <div class="d-flex justify-content-center align-items-center" style="height: 100vh; box-sizing: border-box;">
    <div class="p-4 col-5 border">
      <h1 class="mb-4 text-center">Register</h1>

      {{-- jika berhasil, tampilkan pesan berhasilnya --}}
      @if (Session::has('success'))
      <div class="alert alert-success">
        {{ Session::get('success') }}
      </div>
      @endif
      {{-- end berhasil --}}

      {{-- jika error, tampilkan errornya --}}
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      {{-- end error --}}
      
      {{-- ini form --}}
      <form action="{{ route('authRegis') }}" method="post">
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
  
        {{-- input phone --}}
        <div>
          <label for="phone" class="col-form-label">Phone</label>
          <input type="text" name="phone" id="phone" class="form-control">
        </div>
  
        {{-- input address --}}
        <div>
          <label for="address" class="col-form-label">Address</label>
          <textarea name="address" id="address" rows="3" class="form-control" required></textarea>
        </div>
  
        {{-- submit data --}}
        <div class="mt-4">
          <button type="submit" class="btn btn-primary form-control">Register</button>
        </div>
  
        {{-- login --}}
        <div class="mt-4 text-center">
          Already have an account? <a href="{{ route('login') }}">Login</a>
        </div>
      </form>
      {{-- end form --}}

    </div>
  </div>

@endsection