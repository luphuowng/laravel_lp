@extends('admin.template.master')
@section('page-header-name')
    <span style="color:forestgreen">Category</span>
@endsection
@section('content')
    <form method="post" action="{{ route('category.update') }}">
        @csrf
        <input type="text" value="{{ $cat->cat_id }}" hidden name="idLoai">
        <div class="form-group">
            <label for="tenLoai">Tên loại sản phẩm</label>
            <input id="tenLoai" class="form-control" type="text" value="{{ $cat->cat_name }}" name="tenLoai">
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection
