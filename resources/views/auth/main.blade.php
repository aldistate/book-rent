<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- Bootstrap CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="/css/dashboard.css" rel="stylesheet">
  {{-- Feather icons --}}
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <link rel="icon" href="{{ asset('mario.ico') }}" type="image/x-icon">
  <title>@yield('title')</title>
</head>
<body>

  {{-- main content --}}
  <div class="container d-flex justify-content-center align-items-center" style="box-sizing: border-box; height: 100vh;">
    @yield('container')
  </div>

  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  {{-- Feather JS --}}
  <script>
    feather.replace()
  </script>
  {{-- template for this template --}}
  <script src="/js/dashboard.js"></script>
</body>
</html>