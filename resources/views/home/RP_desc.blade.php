@extends('layouts.master')
@section('content')
    <div style="margin: 30px auto;width: 900px;height: 900px;">

        <div style="float: left;width: 600px;border: 1px solid #ccc;padding: 20px;">
            @foreach($goods as $good)
                <h3>{{$good->name}}</h3>
                <div class="pull-left">
                    <img src="{{asset('home/upImg/'.$good->pic)}}" alt="">
                </div>
                <div class="pull-left" style="margin-left: 30px;">
                    <p>人 品 值：　<span style="font-size: 30px;color: orangered">{{$good->quantity}}</span></p>
                    <p>兑换条件：　LV{{$good->conversion}}</p>
                    <p>数　　量：　{{$good->count}}</p>
                    @foreach($quans as $quan)
                        @if($quan->surplus > $good->quantity && $good->count>0 && $quan->level >= $good->conversion)
                        <button class="btn btn-default buy" value="{{$good->id}}">我要兑换</button>
                        @else
                            <button class="btn btn-default" disabled>我要兑换</button>
                        @endif
                        @endforeach
                </div>
                <div class="pull-left">
                    <hr>
                    商品介绍
                    <br>
                    <br>
                    <br>
                    <p style="color:#666">{{$good->desc}}</p>
                </div>
            @endforeach
        </div>
        <div style="float: right;">
            <div style="width:250px;height: 380px;border: 1px solid #ccc;padding: 30px;text-align: center">
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
            <div style="width:250px;height: 450px;border: 1px solid #ccc;margin-top: 20px;">
                <h4 style="padding: 10px">一周热门</h4>
                @foreach($all as $good)
                    <div style="padding: 10px;height: 90px">
                        <a href="{{url('home/RP_desc/'.$good->id)}}">
                            <img src="{{asset('home/upImg/'.$good->pic)}}" width="70px" class="pull-left">
                            <p class="pull-left" style="margin-left: 20px">
                            {{$good->name}}
                            <br>
                           人 品 值：{{$good->quantity}}
                            <br>
                           兑换条件：LV{{$good->conversion}}
                            </p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        $(function(){
            $('.buy').click(function(){
                var $_this = $(this);
                $.ajax({
                    url:"{{url('home/buy_goods')}}",
                    data:{'gid':$_this.val()},
                    success:function(data){
                        if(data == 1){
                            alert('兑换成功！');
                            location.href = "{{url('home/exchange')}}";
                        }else{
                            alert('兑换失败！！！！');
                        }
                    },
                    error:function(){
                        alert('失败！');
                    }
                })
            })
        })
    </script>
    @endsection