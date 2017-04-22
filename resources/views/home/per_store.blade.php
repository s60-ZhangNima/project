@extends('layouts.master')

@section('content')


            <div style="width:1349px;height:365px;background-image:url({{asset('home/img/rp.png')}});background-repeat :no-repeat ;cursor:default; ">

            </div>
            <div style="height: 435px;background-color: #F7F9FB;text-align: center">

            <img src="{{asset('home/img/hotListTtile.png')}}" alt="" style="margin: 30px 0 20px 0">

            <div style="padding: 10px;margin-left: 300px;" >
               <ul>
                   @if($goods->isEmpty())
                   @else
                       @foreach($goods as $good)
                           @if($loop->remaining <4)
                               <li style="float: left;">
                                   <a href="{{url('home/RP_desc/'.$good->id)}}">
                                   <img src="{{asset('home/upImg/'.$good->pic)}}" class="img-circle" width="175px" style="border:10px solid #ccc;margin-right: 30px; ">
                                   <p><h4>{{$good->name}}</h4></p>
                                   <p><h4>人品值：{{$good->quantity}}</h4></p>
                                   </a>
                               </li>
                           @endif
                       @endforeach
                   @endif
               </ul>
            </div>

            </div>

            <div style="padding: 10px;margin-left: 260px;height: 600px;margin-top: 20px">
                <h3><a href="{{url('home/per_store')}}" style="color:#0075D5">全部礼品</a>  | <a href="{{url('home/per_canChange')}}">我可兑换的</a></h3>

                <div>
                    <ul>
                        @if($goods->isEmpty())
                        @else
                            @foreach($goods as $good)
                                @if($loop->remaining <4)
                                    <li style="float: left;margin-right: 30px;text-align: center">
                                        <a href="{{url('home/RP_desc/'.$good->id)}}">
                                        <img src="{{asset('home/upImg/'.$good->pic)}}" width="200px" >
                                        <p><h4>{{$good->name}}</h4></p>
                                        <p><h4>人品值：{{$good->quantity}}</h4></p>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>

            </div>



    @endsection