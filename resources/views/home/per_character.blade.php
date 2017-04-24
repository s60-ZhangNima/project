@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div style="width: 581px;height:auto;margin:20px 0">
                    <img src="{{asset('home/img/renpin.png')}}" alt="">
                    <div style="height: 168px;border: 1px solid #CEE1EE;width: 579px;margin-bottom: 20px;">
                        <div style="height: 42px;background-color:  #E5E9F3;line-height: 42px;">
                            &nbsp;&nbsp;&nbsp;我的人品值  <span class="pull-right" style="margin-right:4px"><a href="{{url('home/exchange')}}">我的兑换->>></a></span>
                        </div>
                        <br>
                        @foreach($quans as $quan)
                        <p >  &nbsp;&nbsp;&nbsp;总RP值：<span class="sum">{{$quan->surplus}} </span>   <button class="btn btn-default get_rp pull-right" style="margin-right:4px" >随机获得RP值</button></p>
                        <br>
                        <p>  &nbsp;&nbsp;今日攒的人品获取：<span class="get">{{$quan->rand_get}}</span>
                            <a href="{{url('home/per_store')}}" class="btn btn-default pull-right" style="margin-right:4px">RP兑换中心</a></p>
                        @endforeach
                    </div>

                    <div style="height: 650px;border: 1px solid #CEE1EE;width: 579px;">
                        <div style="height: 42px;background-color:  #E5E9F3;line-height: 42px;"> &nbsp;&nbsp;&nbsp; Q&A</div>
                        <div style="padding: 10px;">
                                <h5 style="font-weight: bold">1、什么是人品？人品有什么用？</h5>
                                <p>&nbsp;&nbsp;&nbsp;1)  人品=Renren Power=RP，是你长期混迹于人人网的象征和奖励</p>
                                <p>&nbsp;&nbsp;&nbsp;2)  人品值主要可以兑换特权道具（部分道具还在开发中）；另外，如果你下手足够快，还有机会兑换精美的实物礼品</p>
                            <br>
                                <h5 style="font-weight: bold">2、怎样获取人品值？</h5>
                                <p>&nbsp;&nbsp;&nbsp;1) 【当前页面】点击“随机获得人品值”按钮即可随机获取一定数量的人品值</p>
                                <p>&nbsp;&nbsp;&nbsp;2) 【登录】每天登录一次可以获取30的RP值</p>
                            <br>
                                <h5 style="font-weight: bold">3、如何解锁内容、解锁对我有什么好处？</h5>
                                <p>&nbsp;&nbsp;&nbsp;当你今日通过点击“攒”的按钮获取的人品值恰巧符合某些特定数值时，就能够成功解锁该内容（比如数字“5”，大家吃完饭刮发票中奖最经常得到的是5元，所以对应的解锁内容就是“刮发票”；数字“9”，大家就会想到托雷斯的各种空门不进，所以对应的解锁内容就是“门柱”）<br>解锁成功后，如果发布该内容，则会获得多一次的“攒人品”机会；但是如果不发布的话，就会失去这一次宝贵的机会哦</p>
                            <br>
                                <h5 style="font-weight: bold">4、兑换礼品有什么限制？</h5>
                                <p>&nbsp;&nbsp;&nbsp;1)  礼品兑换都有等级限制</p>
                                <p>&nbsp;&nbsp;&nbsp;2)  个别特权道具有兑换\使用限制</p>
                                <p>&nbsp;&nbsp;&nbsp;3)  实物礼品会有数量限制</p>
                        </div>
                    </div>

                    <div>

                    </div>
             </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    <script>
        $(function () {
            $('.get_rp').click(function(){
               $.ajax({
                   url:"{{url('home/get_RP')}}",
                   success:function(data){
                       if (data ==1){
                           alert('你已经获得过人品值了，请不要再次获取!');
                       }else{
                           $('.get').html(data);
                           $('.sum').html(parseInt($('.sum').html())+parseInt(data));
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