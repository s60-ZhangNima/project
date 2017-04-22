@extends('layouts.master')
@section('content')
    <div style="width: 1000px;height:800px;margin: 30px auto">
        <div style="width:702px;border: 1px solid #ccc;float: left";>
            @if($exchange->isEmpty())
                <img src="{{asset('home/img/0Exchange.jpg')}}" alt="">
            @else
                <table class="table">
                    <tr>
                        <th></th>
                        <th>人品值</th>
                        <th>TIME</th>
                    </tr>
                    @foreach($exchange as $ex)
                    <tr>
                        <td><img src="{{asset('home/upImg/'.$ex->pic)}}" alt="" width="90px">
                            {{$ex->name}} * {{$ex->count}}
                        </td>
                        <td>{{$ex->need_qua}}</td>
                        <td>{{date('Y-m-d H:i:s',$ex->time)}}</td>
                    </tr>
                    @endforeach
                </table>

{{$ex->links}}

            @endif
        </div>
        <div style="width:250px;height: 370px;border: 1px solid #ccc;padding: 10px;text-align: center;float: right">
            @foreach($users as $user)
                @if($user->icon == 'men_main.jpg')
                    <img src="{{asset('home/img/'.$user->icon)}}" class="img-circle">
                @else
                    <img src="{{asset('home/upImg/'.$user->icon)}}" class="img-circle" width="180px" height="180px">
                @endif
                <br>
                <h4>{{$user->name}}</h4>
            @endforeach
            @foreach($quans as $quan)
                <p>
                    等　级　|　<span style="color:#9B7CB9;font-size: 20px;">LV{{$quan->level}} </span>
                    <br>
                    人品值　|　<span style="color:orangered;font-size: 20px">{{$quan->surplus}} </span>
                </p>
            @endforeach
            <hr>
            <a href="{{url('home/per_character')}}">如何获得更多??</a>
        </div>


    </div>
    @endsection