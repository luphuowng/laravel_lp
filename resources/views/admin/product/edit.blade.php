@extends('admin.template.master')
@section('page-header-name')
    <span style="color:forestgreen">Product</span>
@endsection
@section('content')
    <form method="post" action="{{ route('product.update') }}">
        @csrf
        <input type="text" value="{{ $pro->pro_id }}" hidden name="idPro">
        <div class="form-group">
            <label for="pro_name">Tên sản phẩm</label>
            <input id="pro_name" class="form-control" type="text" value="{{ $pro->pro_name }}" name="pro_name">
        </div>
        <div class="form-group">
            <label for="cat_id">Loại sản phẩm</label>
            <select name="Cat_ID" class="form-control">
                @foreach ($cat as $item)
                    <option value="{{ $item->cat_id }}" {{ $pro->cat_id == $item->cat_id ? 'selected' : '' }}>{{ $item->cat_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="pro_price">Giá sản phẩm</label>
            <input id="pro_price" class="form-control" type="text" value="{{ $pro->pro_price }}" name="pro_price">
        </div>
        <div class="form-group">
            <label for="pro_desc">Mô tả sản phẩm</label>
            <input id="pro_desc" class="form-control" type="text" value="{{ $pro->pro_desc }}" name="pro_desc">
        </div>
        <div class="form-group">
            <label for="pro_img">Hình ảnh sản phẩm</label>
            <input id="pro_img" class="form-control" type="text" value="{{ $pro->pro_img }}" name="pro_img">
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection
