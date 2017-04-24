@extends('mmm\admin')
@section('content')
    <form action="{{url('/admin/addBase')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" value = "{{$uid}}" name='uid'>
        <div class="form-group">
            <label for="exampleInputPassword1">用户真实姓名：</label>
            <input type="text" class="form-control" name="realname">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">用户昵称：</label>
            <input type="text" class="form-control" name="nickname">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">用户性别：</label>
            <input type="radio"  name='sex' class="form-control" value="0" checked>女
            <input type="radio" name='sex' class="form-control" value="1" >男
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">用户生日：</label>
            <input type="date" name="birthday" class="form-control"   name="birthday">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">用户地址：</label>
            <select name="prov" id="prov" class="form-control"></select>
            <select name="city" id="city" class="form-control"></select>
            <select name="area" id="area" class="form-control"></select>
            <select name="street" id="street" class="form-control"></select>
        </div>
        <input type="submit" class="btn btn-default" value="添加">
        <a href="{{url('/admin/info/'.$uid)}}" class="btn btn-default">返回</a>
    </form>
    <script>
        $(function(){
            //1、载入页面完成后即对php请求数据添加省一级列表项
            $.ajax({
                url:"{{url('home/per_info/upid')}}",
                data:{'upid':0},
                success:function(data){
                    for (var i = 0;i < data.length; i++ ) {
                        $('#prov').append("<option value='"+data[i].id+"' name='"+data[i].name+"'>"+data[i].name+" </option>");
                    };
                },
                error:function(){
                    alert('失败！');
                },
                dataType:'json',
                //同步，如果没有第一级的数据第二级触发时自动为0
                async:false
            });

            //2、当前三级出现change事件时触发ajax获取value当作upid寻找下一级数据
            $('#prov,#city,#area').change(function(){
                var $upid = $(this).val();
                //在外层用变量存储$(this);
                var $_this = $(this);

                //根据传入的upid为下一级select添加选项
                $.ajax({
                    url:"{{url('home/per_info/upid')}}",
                    data:{'upid':$upid},
                    success:function(data){
                        if(!data){
                            //判断数据是否存在，如果没有隐藏下几级
                            $_this.nextAll('select').hide();
                            return;
                        }

                        //在添加新数据之前清空select
                        $_this.next('select').empty().show();

                        for (var i = 0;i < data.length; i++ ) {

                            $_this.next('select').append("<option value='"+data[i].id+"' name='"+data[i].name+"'>"+data[i].name+" </option>");
                        };
                        //添加完为下一级选中一下
                        $_this.next('select').trigger('change');
                    },
                    error:function(){
                        alert('失败！');
                    },
                    dataType:'json'
                });
            })

            $('#prov').trigger('change');
        })
    </script>
@endsection