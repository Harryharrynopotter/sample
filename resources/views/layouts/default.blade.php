<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','sample') - Harry的个人项目</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
      nav{float:right!important; display: inline-block;}
      .nav > li{display: inline-block;}
      .jumbotron {margin-top: 8rem;}
      .footer {bottom: 1rem; position: fixed;width: 80%;}
    </style>
  </head>
  </body>
    @include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>

     <script src="/js/app.js"></script>
  </body>

</html>