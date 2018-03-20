<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','sample') - Harry的个人项目</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  </body>
    <body>
    @include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>
  </body>

</html>