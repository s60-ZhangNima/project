@extends('mmm\master')
@section('title','我的相册')
@section('css')
    {{--<link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/theme.min.css')}}">
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('home/js/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/bootstrap.min.js')}}"></script>
@endsection
@section('style')

    .min{
    width:1350px;
    height:478px;
    {{--background-color:black;--}}
    border:1px solid black;
    padding:10px;
    #img{
    margin-top:10px;
    }

    }
    img{
    margin-top:10px ;
    margin-left:15px;
    }
@endsection
@section('content')
    <div class='min pre-scrollable' >
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
        <img  class="abc" src="{{asset('home/img/dog.jpg')}}" alt="">
    </div>


@endsection