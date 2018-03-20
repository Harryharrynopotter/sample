@extends('layouts.default')
@section('title','主页')

@section('content')
   <div class="jumbotron">
    <h1>我不是王者</h1>
    <p class="lead">
      赶紧注册，别废话！
    </p>
    <p>
      就下面这个绿色按钮，看到没！
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route ('signup')}}" role="button">现在注册</a>
    </p>
  </div>

@stop