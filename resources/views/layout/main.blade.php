<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- Bootstrap CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  {{-- Feather icons --}}
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <link rel="icon" href="{{ asset('mario.ico') }}" type="image/x-icon">
  <title>@yield('title')</title>
</head>
<body>
  
  {{-- navbar --}}
  @include('partials.navbar')

  {{-- main content --}}
  <div>
    <div class="row g-0">
      {{-- sidebar --}}
      @include('partials.sidebar')
      {{-- content --}}
      <main class="col-md-9 m-sm-auto col-lg-10 px-md-4" style="height: 91vh;">
        @yield('container')
      </main>
    </div>
  </div>

  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  {{-- Feather JS --}}
  <script>
    feather.replace()
  </script>
</body>
</html>