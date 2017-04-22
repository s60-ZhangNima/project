@extends('mmm\admin')
@section('content')
    <h4>RP商品管理</h4>
    <a href="{{url('admin/RP')}}"> 添加商品</a>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>名字</th>
            <th>图片</th>
            <th>人品值</th>
            <th>描述</th>
            <th>数量</th>
            <th>兑换条件</th>
            <th>操作</th>
        </tr>

        @if($goods->isEmpty())
            暂无RP商品，等待添加！
        @else
            @foreach($goods as $good)
                <tr>
                    <td>{{$good->id}}</td>
                    <td>{{$good->name}}</td>
                    <td><img src="{{asset('home/upImg/'.$good->pic)}}" alt="" width="40px" class="img-circle"></td>
                    <td>{{$good->quantity}}</td>
                    <td class="shenglue">{{$good->desc}}</td>
                    <td>{{$good->count}}</td>
                    <td>LV{{$good->conversion}}</td>
                    <td>
                        <a href="{{url('admin/editGoods/'.$good->id)}}">编辑</a>
                        <a href="{{url('admin/deleteGoods/'.$good->id)}}">删除</a>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
    <script>
        $(function(){
            $(".shenglue").html(function() {
                var str = $(this).text().substr(0,10) + " ...";
                $(this).text(str);
            })
        })
    </script>
@endsection