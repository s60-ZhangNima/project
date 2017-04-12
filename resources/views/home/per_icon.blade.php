@extends('layouts.master')
@section('title','人人网-张尼玛')
@section('content')
    <div class="container" style="margin-top:20px;margin-bottom: 50px;width:600px;">
            <h3 class="text-muted">上传头像</h3>
        <div class="jumbotron">
            <h5>当前头像</h5>
            <p class="lead">
                <div  >
                    @if(empty($res))
                    <img src="{{asset('home/img/men_main.jpg')}}" alt="" >
                @else
                     @foreach($res as $item)
                    <img src="{{asset('storage/app/'.$item->name)}}" alt="" >
                    @endforeach
                @endif
                <div class="pull-right">
                    <form action="{{url('home/per_icon/up')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group" style="width:200px">
                            <input type="file"  name="pic" class="form-control">
                            <br>
                            <input type="submit" class="btn btn-default">
                        </div>
                    </form>
                </div>
            </div>
            </p>

        </div>



    </div>
@endsection