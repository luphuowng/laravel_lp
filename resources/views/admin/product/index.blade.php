@extends('admin.template.master')
@section('page-header-name')
    <span style="color:forestgreen">Product</span>
@endsection
@section('content')
{{-- tạo bảng có các tên cột là: #,tên loại, thao tác --}}
<a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>

<table class="table table-light text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
            <th>Descript</th>
            <th>Image</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product as $item)
        <tr>
            <td>{{ $item->pro_id }}</td>
            <td>{{ $item->pro_name }}</td>
            <td>{{ $item->cat_name }}</td>
            <td>{{ $item->pro_price }}</td>
            <td>{{ $item->pro_desc }}</td>
            <td><img src="{{ asset('hinh-anh-san-pham') }}/{{ $item->pro_img }}" width=20px height="10px"></td>
            <td>
                <a type="button" href="{{ route('product.edit', ['pro_id'=>$item->pro_id]) }}" class="btn btn-warning">Edit</a>
                <a type="button" onclick="checkDel()" href="{{ route('product.delete', ['pro_id'=>$item->pro_id]) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    function checkDel (){
        const del = confirm("Do you wwant to delete?");
        if(del == true) {
            return true;
        }else {
            return false;
        }
    }
</script>

@endsection
