@extends('admin.template.master')
@section('page-header-name')
    <span style="color:forestgreen">Category</span>
@endsection
@section('content')
{{-- tạo bảng có các tên cột là: #,tên loại, thao tác --}}
<a href="{{ route('category.create') }}" class="btn btn-primary">Add Category</a>

<table class="table table-light text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>Loai SP</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $item)
        <tr>
            <td>{{ $item->cat_id }}</td>
            <td>{{ $item->cat_name }}</td>
            <td>
                <a type="button" href="{{ route('category.edit', ['idCat'=>$item->cat_id]) }}" class="btn btn-warning">Edit</a>
                <a type="button" onclick="checkDel()" href="{{ route('category.destroy', ['idCat'=>$item->cat_id]) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    function checkDel (){
        const del = confirm("Ban co muon xoa");
        if(del == true) {
            return true;
        }else {
            return false;
        }
    }
</script>

@endsection
