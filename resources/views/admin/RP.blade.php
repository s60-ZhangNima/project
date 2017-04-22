@extends('mmm\admin')
@section('content')
    <form action="{{asset('admin/addGoods')}}" method="post" enctype="multipart/form-data">
       {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">商品名字：</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="商品名字...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">人品值：</label>
            <input type="text" name="quantity" class="form-control" id="exampleInputPassword1"  placeholder="人品值...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">描述：</label>
            <textarea name="desc" id="" cols="30" rows="6" style="resize: none"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">数量：</label>
            <input type="number" name="count" class="form-control" id="exampleInputPassword1"   placeholder="数量...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">兑换条件：</label>
            <select name="conversion">
                <option value="1">LV1</option>
                <option value="2">LV2</option>
                <option value="3">LV3</option>
                <option value="4">LV4</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputFile">商品图片：</label>
            <input type="file" id="exampleInputFile" name="pic">

        </div>

        <input type="submit" class="btn btn-default" value="添加" style="margin-top:10px">
    </form>
@endsection