<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="/css/app.css">

    <title>Document</title>
</head>
<body>
    @include('inc.navBar')

    <div class="container">
    @if(Request::is('/'))
      @include('inc.showcase')
    @endif
    <div class="row">
        <div class="col-mid-8 col-lg-8">
           @include('inc.messages')
           @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('inc.Sidebar')
        </div>
    </div>   
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright 2021 &copy; Laravel</p>
    </footer>
</body>
</html>