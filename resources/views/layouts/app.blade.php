<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-with, initial-scale=1">
  <title>Basic Website</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('partials.navbar')
    <div class="container">
      @include('partials.errors')
      @include('partials.success')
      @yield('contents')
      <div class="row">
        <div class="col-lg-8 col-md-8">
          @yield('content')
        </div>
        <div class="col-lg-4 col-md-4">
          @include('partials.sidebar')
        </div>
    </div>
    </div>
    <footer class="footer text-center" id="footer">
      Copyright &copy; 2019
    </footer>
</body>
</html>
