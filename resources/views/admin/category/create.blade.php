@extends('admin.template.master')
@section('page-header-name')
    <span style="color:forestgreen">Category</span>
@endsection
@section('content')
    <form method="post" action="{{ route('category.store') }}">
        @csrf
        <div class="form-group">
            <label for="tenLoai">Tên loại sản phẩm</label>
            <input id="tenLoai" class="form-control" type="text" name="tenLoai">
        </div>
        <button class="btn btn-primary" type="submit">Thêm</button>
    </form>
@endsection
