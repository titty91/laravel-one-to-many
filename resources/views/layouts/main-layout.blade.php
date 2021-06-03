<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>one to many</title>
</head>
<body>

  <div>
    @include('containers.header')
  </div>  

  <div>
    @yield('contain')
  </div>

  <div>
    @include('containers.footer')
  </div>
</body>
</html>

